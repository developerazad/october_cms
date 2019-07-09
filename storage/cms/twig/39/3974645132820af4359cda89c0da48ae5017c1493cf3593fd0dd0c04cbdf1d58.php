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

/* D:\xampp\htdocs\octoberCMS/themes/come2learn/pages/about.htm */
class __TwigTemplate_d3a99ef45606d6cc6d90d377e72296677c6237bcb8e432bec89fa214a5817d93 extends \Twig\Template
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
        echo "<div class=\"container\">
    <h3>About Us</h3>
    <p class=\"text-center well\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque beatae cum doloremque harum impedit in itaque laboriosam, odit pariatur provident quaerat, quia ratione sint totam unde, vitae voluptas voluptatibus!</p>

";
        // line 5
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("resourcesLinks"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\octoberCMS/themes/come2learn/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <h3>About Us</h3>
    <p class=\"text-center well\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque beatae cum doloremque harum impedit in itaque laboriosam, odit pariatur provident quaerat, quia ratione sint totam unde, vitae voluptas voluptatibus!</p>

{% component 'resourcesLinks' %}
</div>", "D:\\xampp\\htdocs\\octoberCMS/themes/come2learn/pages/about.htm", "");
    }
}
