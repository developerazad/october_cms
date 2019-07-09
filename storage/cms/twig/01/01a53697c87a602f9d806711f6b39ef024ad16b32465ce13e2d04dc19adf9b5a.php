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

/* D:\xampp\htdocs\octoberCMS/plugins/eduonix/resources/components/links/default.htm */
class __TwigTemplate_847c2090f67c9ef2f62a9d06e8dd32a9c5dc0f481552900f86227a6607f0be8e extends \Twig\Template
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
        echo "<div class=\"links\">
    <ul class=\"list-group\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 4
            echo "            <li class=\"list-group-item\"><a href=\"";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["link"], "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "        </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\octoberCMS/plugins/eduonix/resources/components/links/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  43 => 4,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"links\">
    <ul class=\"list-group\">
        {% for link in links %}
            <li class=\"list-group-item\"><a href=\"{{ link }}\">{{ link }}</a></li>
        {% endfor %}
        </ul>
</div>", "D:\\xampp\\htdocs\\octoberCMS/plugins/eduonix/resources/components/links/default.htm", "");
    }
}
