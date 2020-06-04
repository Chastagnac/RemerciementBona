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

/* images.twig */
class __TwigTemplate_f7a261386aefc4cec2624faebf388e575d86f760f1527e9a12b0cea2ce50a227 extends Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 1
        echo "<section id=\"images\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["images"]);
        foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
            // line 3
            echo "        <article>
            <img src=\"../images/Productions/";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "libelle", [], "any", false, false, false, 4), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "image", [], "any", false, false, false, 4), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "modele", [], "any", false, false, false, 4), "html", null, true);
            echo "\">                      
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</section>

";
    }

    public function getTemplateName()
    {
        return "images.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "images.twig", "C:\\wamp64\\www\\Projet\\Remerciements\\twig\\images.twig");
    }
}
