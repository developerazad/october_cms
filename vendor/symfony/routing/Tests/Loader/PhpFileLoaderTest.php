<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Tests\Loader;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\PhpFileLoader;

class PhpFileLoaderTest extends TestCase
{
    public function testSupports()
    {
        $loader = new PhpFileLoader($this->getMockBuilder('Symfony\Component\Config\FileLocator')->getMock());

        $this->assertTrue($loader->supports('foo.php'), '->supports() returns true if the resources is loadable');
        $this->assertFalse($loader->supports('foo.foo'), '->supports() returns true if the resources is loadable');

        $this->assertTrue($loader->supports('foo.php', 'php'), '->supports() checks the resources type if specified');
        $this->assertFalse($loader->supports('foo.php', 'foo'), '->supports() checks the resources type if specified');
    }

    public function testLoadWithRoute()
    {
        $loader = new PhpFileLoader(new FileLocator(array(__DIR__.'/../Fixtures')));
        $routeCollection = $loader->load('validpattern.php');
        $routes = $routeCollection->all();

        $this->assertCount(1, $routes, 'One route is loaded');
        $this->assertContainsOnly('Symfony\Component\Routing\Route', $routes);

        foreach ($routes as $route) {
            $this->assertSame('/blog/{slug}', $route->getPath());
            $this->assertSame('MyBlogBundle:Blog:show', $route->getDefault('_controller'));
            $this->assertSame('{locale}.example.com', $route->getHost());
            $this->assertSame('RouteCompiler', $route->getOption('compiler_class'));
            $this->assertEquals(array('GET', 'POST', 'PUT', 'OPTIONS'), $route->getMethods());
            $this->assertEquals(array('https'), $route->getSchemes());
        }
    }

    public function testLoadWithImport()
    {
        $loader = new PhpFileLoader(new FileLocator(array(__DIR__.'/../Fixtures')));
        $routeCollection = $loader->load('validresource.php');
        $routes = $routeCollection->all();

        $this->assertCount(1, $routes, 'One route is loaded');
        $this->assertContainsOnly('Symfony\Component\Routing\Route', $routes);

        foreach ($routes as $route) {
            $this->assertSame('/prefix/blog/{slug}', $route->getPath());
            $this->assertSame('MyBlogBundle:Blog:show', $route->getDefault('_controller'));
            $this->assertSame('{locale}.example.com', $route->getHost());
            $this->assertSame('RouteCompiler', $route->getOption('compiler_class'));
            $this->assertEquals(array('GET', 'POST', 'PUT', 'OPTIONS'), $route->getMethods());
            $this->assertEquals(array('https'), $route->getSchemes());
        }
    }

    public function testThatDefiningVariableInConfigFileHasNoSideEffects()
    {
        $locator = new FileLocator(array(__DIR__.'/../Fixtures'));
        $loader = new PhpFileLoader($locator);
        $routeCollection = $loader->load('with_define_path_variable.php');
        $resources = $routeCollection->getResources();
        $this->assertCount(1, $resources);
        $this->assertContainsOnly('Symfony\Component\Config\Resource\ResourceInterface', $resources);
        $fileResource = reset($resources);
        $this->assertSame(
            realpath($locator->locate('with_define_path_variable.php')),
            (string) $fileResource
        );
    }
}
