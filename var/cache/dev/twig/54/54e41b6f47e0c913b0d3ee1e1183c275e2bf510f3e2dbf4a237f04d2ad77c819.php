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

/* default/index.html.twig */
class __TwigTemplate_956c66f1c0e68a0fa365314af8c6da92129fc3cb80827c7bde7d0acad822279f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Food and Go - Home
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<h1>Dernières recettes</h1>
\t<section class=\"latest-recipes container\">
\t\t<div class=\"not-carousel\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lasts"]) || array_key_exists("lasts", $context) ? $context["lasts"] : (function () { throw new RuntimeError('Variable "lasts" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["last"]) {
            // line 12
            echo "\t\t\t\t<div class=\"last-recipe\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["last"], "image", [], "any", false, false, false, 12))), "html", null, true);
            echo "');\">
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h2 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t";
            // line 16
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_recipe", ["id" => twig_get_attribute($this->env, $this->source, $context["last"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\" class=\"card-button\">View Recipe</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['last'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t</div>


\t\t<div class=\"carousel\" data-flickity='{ \"wrapAround\": true }'>
\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lasts"]) || array_key_exists("lasts", $context) ? $context["lasts"] : (function () { throw new RuntimeError('Variable "lasts" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["last"]) {
            // line 25
            echo "\t\t\t\t<div class=\"carousel-cell\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["last"], "image", [], "any", false, false, false, 25))), "html", null, true);
            echo "');\">
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h2 class=\"card-title\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["last"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t";
            // line 29
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_recipe", ["id" => twig_get_attribute($this->env, $this->source, $context["last"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\" class=\"card-button\">View Recipe</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['last'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t</div>

\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 33,  140 => 29,  136 => 27,  130 => 25,  126 => 24,  120 => 20,  109 => 16,  105 => 14,  99 => 12,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Food and Go - Home
{% endblock %}

{% block body %}

\t<h1>Dernières recettes</h1>
\t<section class=\"latest-recipes container\">
\t\t<div class=\"not-carousel\">
\t\t\t{% for last in lasts %}
\t\t\t\t<div class=\"last-recipe\" style=\"background-image: url('{{ asset('img/' ~ last.image) }}');\">
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h2 class=\"card-title\">{{last.title}}</h2>
\t\t\t\t\t\t{# <p class=\"summary\">Bref résumé</p> #}
\t\t\t\t\t\t<a href=\"{{ path('show_recipe', {'id' : last.id }) }}\" class=\"card-button\">View Recipe</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>


\t\t<div class=\"carousel\" data-flickity='{ \"wrapAround\": true }'>
\t\t\t{% for last in lasts %}
\t\t\t\t<div class=\"carousel-cell\" style=\"background-image: url('{{ asset('img/' ~ last.image) }}');\">
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h2 class=\"card-title\">{{last.title}}</h2>
\t\t\t\t\t\t{# <p class=\"summary\">Bref résumé</p> #}
\t\t\t\t\t\t<a href=\"{{ path('show_recipe', {'id' : last.id }) }}\" class=\"card-button\">View Recipe</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>

\t</section>
{% endblock %}
", "default/index.html.twig", "E:\\DevWeb\\EPCF2\\templates\\default\\index.html.twig");
    }
}
