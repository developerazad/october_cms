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

/* D:\xampp\htdocs\octoberCMS/themes/come2learn/pages/home.htm */
class __TwigTemplate_4746ff5b124afc46bbe5a741664f4e416f524d64ae03ee12e4f6b60351bb9d6a extends \Twig\Template
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
        echo "<div class=\"jumbotron\">
    <h2 class=\"text-center\">Welcome to Come2Learn</h2>
    <h3 class=\"text-center\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 3), "siteName", [], "any", false, false, false, 3), "html", null, true);
        echo "</h3>
    <p class=\"text-center\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam aspernatur blanditiis consectetur, distinctio eius enim id illum impedit ipsum iure odit placeat porro sed tempora unde ut! Ex, voluptates.</p>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\octoberCMS/themes/come2learn/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron\">
    <h2 class=\"text-center\">Welcome to Come2Learn</h2>
    <h3 class=\"text-center\">{{this.theme.siteName}}</h3>
    <p class=\"text-center\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam aspernatur blanditiis consectetur, distinctio eius enim id illum impedit ipsum iure odit placeat porro sed tempora unde ut! Ex, voluptates.</p>
</div>", "D:\\xampp\\htdocs\\octoberCMS/themes/come2learn/pages/home.htm", "");
    }
}
