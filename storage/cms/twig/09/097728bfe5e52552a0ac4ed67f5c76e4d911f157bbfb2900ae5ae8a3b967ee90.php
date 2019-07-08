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

/* D:\xampp\htdocs\octoberCMS/themes/come2learn/partials/site/header.htm */
class __TwigTemplate_4d8ecacae1b5fd993f00d3bfa8b6e257b2bbe5554c0e953eabc823fa9ef24e5c extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Come2Learn</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
                <li class=\"";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15) == "about")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a></li>
                <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) == "blog")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a></li>
                <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17) == "contact")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<br>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\octoberCMS/themes/come2learn/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  69 => 16,  61 => 15,  53 => 14,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-inverse\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'| page }}\">Come2Learn</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"{% if this.page.id=='home' %}active{% endif %}\"><a href=\"{{ 'home' | page }}\">Home</a></li>
                <li class=\"{% if this.page.id=='about'%}active{% endif %}\"><a href=\"{{ 'about' | page }}\">About</a></li>
                <li class=\"{% if this.page.id=='blog' %}active{% endif %}\"><a href=\"{{ 'blog' | page }}\">Blog</a></li>
                <li class=\"{% if this.page.id=='contact' %}active{% endif %}\"><a href=\"{{ 'contact'|page }}\">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<br>", "D:\\xampp\\htdocs\\octoberCMS/themes/come2learn/partials/site/header.htm", "");
    }
}
