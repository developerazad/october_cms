<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DataCollector;

use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * RequestDataCollector.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RequestDataCollector extends DataCollector implements EventSubscriberInterface, LateDataCollectorInterface
{
    /** @var \SplObjectStorage */
    protected $controllers;

    public function __construct()
    {
        $this->controllers = new \SplObjectStorage();
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        // attributes are serialized and as they can be anything, they need to be converted to strings.
        $attributes = array();
        $route = '';
        foreach ($request->attributes->all() as $key => $value) {
            if ('_route' === $key) {
                $route = is_object($value) ? $value->getPath() : $value;
                $attributes[$key] = $route;
            } else {
                $attributes[$key] = $value;
            }
        }

        $content = null;
        try {
            $content = $request->getContent();
        } catch (\LogicException $e) {
            // the user already got the request content as a resources
            $content = false;
        }

        $sessionMetadata = array();
        $sessionAttributes = array();
        $session = null;
        $flashes = array();
        if ($request->hasSession()) {
            $session = $request->getSession();
            if ($session->isStarted()) {
                $sessionMetadata['Created'] = date(DATE_RFC822, $session->getMetadataBag()->getCreated());
                $sessionMetadata['Last used'] = date(DATE_RFC822, $session->getMetadataBag()->getLastUsed());
                $sessionMetadata['Lifetime'] = $session->getMetadataBag()->getLifetime();
                $sessionAttributes = $session->all();
                $flashes = $session->getFlashBag()->peekAll();
            }
        }

        $statusCode = $response->getStatusCode();

        $responseCookies = array();
        foreach ($response->headers->getCookies() as $cookie) {
            $responseCookies[$cookie->getName()] = $cookie;
        }

        $this->data = array(
            'method' => $request->getMethod(),
            'format' => $request->getRequestFormat(),
            'content' => $content,
            'content_type' => $response->headers->get('Content-Type', 'text/html'),
            'status_text' => isset(Response::$statusTexts[$statusCode]) ? Response::$statusTexts[$statusCode] : '',
            'status_code' => $statusCode,
            'request_query' => $request->query->all(),
            'request_request' => $request->request->all(),
            'request_headers' => $request->headers->all(),
            'request_server' => $request->server->all(),
            'request_cookies' => $request->cookies->all(),
            'request_attributes' => $attributes,
            'route' => $route,
            'response_headers' => $response->headers->all(),
            'response_cookies' => $responseCookies,
            'session_metadata' => $sessionMetadata,
            'session_attributes' => $sessionAttributes,
            'flashes' => $flashes,
            'path_info' => $request->getPathInfo(),
            'controller' => 'n/a',
            'locale' => $request->getLocale(),
        );

        if (isset($this->data['request_headers']['php-auth-pw'])) {
            $this->data['request_headers']['php-auth-pw'] = '******';
        }

        if (isset($this->data['request_server']['PHP_AUTH_PW'])) {
            $this->data['request_server']['PHP_AUTH_PW'] = '******';
        }

        if (isset($this->data['request_request']['_password'])) {
            $this->data['request_request']['_password'] = '******';
        }

        foreach ($this->data as $key => $value) {
            if (!is_array($value)) {
                continue;
            }
            if ('request_headers' === $key || 'response_headers' === $key) {
                $this->data[$key] = array_map(function ($v) { return isset($v[0]) && !isset($v[1]) ? $v[0] : $v; }, $value);
            }
        }

        if (isset($this->controllers[$request])) {
            $this->data['controller'] = $this->parseController($this->controllers[$request]);
            unset($this->controllers[$request]);
        }

        if (null !== $session && $session->isStarted()) {
            if ($request->attributes->has('_redirected')) {
                $this->data['redirect'] = $session->remove('sf_redirect');
            }

            if ($response->isRedirect()) {
                $session->set('sf_redirect', array(
                    'token' => $response->headers->get('x-debug-token'),
                    'route' => $request->attributes->get('_route', 'n/a'),
                    'method' => $request->getMethod(),
                    'controller' => $this->parseController($request->attributes->get('_controller')),
                    'status_code' => $statusCode,
                    'status_text' => Response::$statusTexts[(int) $statusCode],
                ));
            }
        }

        $this->data['identifier'] = $this->data['route'] ?: (is_array($this->data['controller']) ? $this->data['controller']['class'].'::'.$this->data['controller']['method'].'()' : $this->data['controller']);
    }

    public function lateCollect()
    {
        $this->data = $this->cloneVar($this->data);
    }

    public function getMethod()
    {
        return $this->data['method'];
    }

    public function getPathInfo()
    {
        return $this->data['path_info'];
    }

    public function getRequestRequest()
    {
        return new ParameterBag($this->data['request_request']->getValue());
    }

    public function getRequestQuery()
    {
        return new ParameterBag($this->data['request_query']->getValue());
    }

    public function getRequestHeaders()
    {
        return new ParameterBag($this->data['request_headers']->getValue());
    }

    public function getRequestServer($raw = false)
    {
        return new ParameterBag($this->data['request_server']->getValue($raw));
    }

    public function getRequestCookies($raw = false)
    {
        return new ParameterBag($this->data['request_cookies']->getValue($raw));
    }

    public function getRequestAttributes()
    {
        return new ParameterBag($this->data['request_attributes']->getValue());
    }

    public function getResponseHeaders()
    {
        return new ParameterBag($this->data['response_headers']->getValue());
    }

    public function getResponseCookies()
    {
        return new ParameterBag($this->data['response_cookies']->getValue());
    }

    public function getSessionMetadata()
    {
        return $this->data['session_metadata']->getValue();
    }

    public function getSessionAttributes()
    {
        return $this->data['session_attributes']->getValue();
    }

    public function getFlashes()
    {
        return $this->data['flashes']->getValue();
    }

    public function getContent()
    {
        return $this->data['content'];
    }

    public function getContentType()
    {
        return $this->data['content_type'];
    }

    public function getStatusText()
    {
        return $this->data['status_text'];
    }

    public function getStatusCode()
    {
        return $this->data['status_code'];
    }

    public function getFormat()
    {
        return $this->data['format'];
    }

    public function getLocale()
    {
        return $this->data['locale'];
    }

    /**
     * Gets the route name.
     *
     * The _route request attributes is automatically set by the Router Matcher.
     *
     * @return string The route
     */
    public function getRoute()
    {
        return $this->data['route'];
    }

    public function getIdentifier()
    {
        return $this->data['identifier'];
    }

    /**
     * Gets the route parameters.
     *
     * The _route_params request attributes is automatically set by the RouterListener.
     *
     * @return array The parameters
     */
    public function getRouteParams()
    {
        return isset($this->data['request_attributes']['_route_params']) ? $this->data['request_attributes']['_route_params']->getValue() : array();
    }

    /**
     * Gets the parsed controller.
     *
     * @return array|string The controller as a string or array of data
     *                      with keys 'class', 'method', 'file' and 'line'
     */
    public function getController()
    {
        return $this->data['controller'];
    }

    /**
     * Gets the previous request attributes.
     *
     * @return array|bool A legacy array of data from the previous redirection response
     *                    or false otherwise
     */
    public function getRedirect()
    {
        return isset($this->data['redirect']) ? $this->data['redirect'] : false;
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        $this->controllers[$event->getRequest()] = $event->getController();
    }

    public function onKernelResponse(FilterResponseEvent $event)
    {
        if (!$event->isMasterRequest() || !$event->getRequest()->hasSession() || !$event->getRequest()->getSession()->isStarted()) {
            return;
        }

        if ($event->getRequest()->getSession()->has('sf_redirect')) {
            $event->getRequest()->attributes->set('_redirected', true);
        }
    }

    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::CONTROLLER => 'onKernelController',
            KernelEvents::RESPONSE => 'onKernelResponse',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'request';
    }

    /**
     * Parse a controller.
     *
     * @param mixed $controller The controller to parse
     *
     * @return array|string An array of controller data or a simple string
     */
    protected function parseController($controller)
    {
        if (is_string($controller) && false !== strpos($controller, '::')) {
            $controller = explode('::', $controller);
        }

        if (is_array($controller)) {
            try {
                $r = new \ReflectionMethod($controller[0], $controller[1]);

                return array(
                    'class' => is_object($controller[0]) ? get_class($controller[0]) : $controller[0],
                    'method' => $controller[1],
                    'file' => $r->getFileName(),
                    'line' => $r->getStartLine(),
                );
            } catch (\ReflectionException $e) {
                if (is_callable($controller)) {
                    // using __call or  __callStatic
                    return array(
                        'class' => is_object($controller[0]) ? get_class($controller[0]) : $controller[0],
                        'method' => $controller[1],
                        'file' => 'n/a',
                        'line' => 'n/a',
                    );
                }
            }
        }

        if ($controller instanceof \Closure) {
            $r = new \ReflectionFunction($controller);

            return array(
                'class' => $r->getName(),
                'method' => null,
                'file' => $r->getFileName(),
                'line' => $r->getStartLine(),
            );
        }

        if (is_object($controller)) {
            $r = new \ReflectionClass($controller);

            return array(
                'class' => $r->getName(),
                'method' => null,
                'file' => $r->getFileName(),
                'line' => $r->getStartLine(),
            );
        }

        return is_string($controller) ? $controller : 'n/a';
    }
}
