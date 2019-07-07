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

/* D:\xampp\htdocs\octoberCMS/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_355de457cbb39e05fea48e8e71549d3a4815f80c119e25b669419a7ba0e66577 extends \Twig\Template
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
    <h3>Contact Us</h3>
    <form action=\"\" id=\"contactForm\">
        <div class=\"form-group\">
            <label for=\"\">Name</label>
            <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <label for=\"\">Email</label>
            <input type=\"text\" name=\"email\" id=\"email\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <label for=\"\">Messages</label>
            <input type=\"text\" name=\"message\" id=\"message\" class=\"form-control\">
        </div>
        <input type=\"submit\" value=\"Submit\" class=\"btn btn-success\">
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\octoberCMS/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <h3>Contact Us</h3>
    <form action=\"\" id=\"contactForm\">
        <div class=\"form-group\">
            <label for=\"\">Name</label>
            <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <label for=\"\">Email</label>
            <input type=\"text\" name=\"email\" id=\"email\" class=\"form-control\">
        </div>
        <div class=\"form-group\">
            <label for=\"\">Messages</label>
            <input type=\"text\" name=\"message\" id=\"message\" class=\"form-control\">
        </div>
        <input type=\"submit\" value=\"Submit\" class=\"btn btn-success\">
    </form>
</div>", "D:\\xampp\\htdocs\\octoberCMS/themes/responsiv-clean/pages/contact.htm", "");
    }
}
