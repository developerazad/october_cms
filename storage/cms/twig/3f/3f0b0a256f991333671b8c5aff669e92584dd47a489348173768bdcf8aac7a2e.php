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

/* D:\xampp\htdocs\octoberCMS/themes/come2learn/pages/contact.htm */
class __TwigTemplate_ff5e391e9a46c66aa7acb633106217edbc93c75ba92febc856dbff1a6b3d94f2 extends \Twig\Template
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
            <label for=\"\">Message</label>
            <textarea name=\"message\" id=\"\" class=\"form-control\"></textarea>
        </div>
        <input type=\"submit\" value=\"Submit\" class=\"btn btn-success pull-right\">
    </form>
    
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\octoberCMS/themes/come2learn/pages/contact.htm";
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
            <label for=\"\">Message</label>
            <textarea name=\"message\" id=\"\" class=\"form-control\"></textarea>
        </div>
        <input type=\"submit\" value=\"Submit\" class=\"btn btn-success pull-right\">
    </form>
    
</div>", "D:\\xampp\\htdocs\\octoberCMS/themes/come2learn/pages/contact.htm", "");
    }
}
