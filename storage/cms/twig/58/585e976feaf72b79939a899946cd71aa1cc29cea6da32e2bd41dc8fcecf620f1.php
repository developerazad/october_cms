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

/* D:\xampp\htdocs\octoberCMS/themes/come2learn/partials/site/footer.htm */
class __TwigTemplate_bff6d7df41949dc9f7bdffeb0d377986901ffdaeb7c0803b6acc39c2cb9adc0f extends \Twig\Template
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
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"text-center\">Copyrights &copy; ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Azharul Islam</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\octoberCMS/themes/come2learn/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"text-center\">Copyrights &copy; {{ \"now\"|date(\"Y\") }} Azharul Islam</p>
    </div>
</div>", "D:\\xampp\\htdocs\\octoberCMS/themes/come2learn/partials/site/footer.htm", "");
    }
}
