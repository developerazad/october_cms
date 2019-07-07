<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\xampp\htdocs\octoberCMS/themes/come2learn/layouts/default.htm */
class __TwigTemplate_3312f7e23ed884e67797ce57ad3f328097ac156c59cd2a0a817b1ab9f655dd7a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>

<htm>
    <head>
        <meta charset=\"UTF-8\">
        <title>Come2Learn - ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"this.page.meta_description\">
        <meta name=\"title\" content=\"this.page.meta_title\">
        <meta name=\"author\" content=\"Developerazad\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"Developerazad\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/come2learn.png");
        echo "\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\">
        <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 18
        echo "    </head>

    <body>
        <header>
            ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "        </header>

        <div class=\"container\">
            ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 27
        echo "        </div>


        <footer>
            ";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "        </footer>

        <script src=\"";
        // line 34
        echo "assets/vendor/bootstrap.js";
        echo "\"></script>
        <script src=\"";
        // line 35
        echo "assets/vendor/jquery.js";
        echo "\"></script>
        <script src=\"";
        // line 36
        echo "assets/javascript/app.js";
        echo "\"></script>
    </body>
</htm>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\octoberCMS/themes/come2learn/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  106 => 35,  102 => 34,  98 => 32,  94 => 31,  88 => 27,  86 => 26,  81 => 23,  77 => 22,  71 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  51 => 12,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<htm>
    <head>
        <meta charset=\"UTF-8\">
        <title>Come2Learn - {{ this.page.title}}</title>
        <meta name=\"description\" content=\"this.page.meta_description\">
        <meta name=\"title\" content=\"this.page.meta_title\">
        <meta name=\"author\" content=\"Developerazad\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"Developerazad\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/come2learn.png' | theme }}\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/theme.css' | theme }}\">
        <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}
    </head>

    <body>
        <header>
            {% partial 'site/header' %}
        </header>

        <div class=\"container\">
            {% page %}
        </div>


        <footer>
            {% partial 'site/footer' %}
        </footer>

        <script src=\"{{ 'assets/vendor/bootstrap.js' }}\"></script>
        <script src=\"{{ 'assets/vendor/jquery.js' }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js' }}\"></script>
    </body>
</htm>", "D:\\xampp\\htdocs\\octoberCMS/themes/come2learn/layouts/default.htm", "");
    }
}
