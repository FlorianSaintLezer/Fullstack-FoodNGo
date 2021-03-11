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

/* recipes/recipes.html.twig */
class __TwigTemplate_3e039b43a9aca152e2ecd1e8e7c6f545986c99f5dc1437ba897d1728d0e044f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titre' => [$this, 'block_titre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipes/recipes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipes/recipes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recipes/recipes.html.twig", 1);
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

        echo "Food and Go - Recipes
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "Recipes

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "\t\t
\t
";
        // line 37
        echo "\t\t\t";
        // line 43
        echo "\t\t\t";
        // line 55
        echo "\t\t</div>
\t\t<div class=\"table-recipes\">
\t\t\t<table cellspacing=\"0\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Image</th>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Ingrédients</th>
\t\t\t\t\t<th>Description</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>

\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 67
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><img src='";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 68))), "html", null, true);
            echo "' alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "title", [], "any", false, false, false, 68), "html", null, true);
            echo "\"></td>
\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "title", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>Ingrédients ?</td>
\t\t\t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "description", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<i class=\"far fa-eye\"></i>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
\t\t\t</table>
\t\t</div>

\t</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recipes/recipes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 77,  150 => 71,  145 => 69,  139 => 68,  136 => 67,  132 => 66,  119 => 55,  117 => 43,  115 => 37,  111 => 12,  101 => 11,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Food and Go - Recipes
{% endblock %}

{% block titre %}Recipes

{% endblock %}


{% block body %}
\t\t
\t
{# 
\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t<option value=\"{{ path(\"filterYear\", {'year':recipe.year}) }}\">{{ recipe.year }}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t\t<select name=\"vineyards\" id=\"vineyard-select\">
\t\t\t\t<option value=\"\">-- Filter by Vineyard --</option>
\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t<option value=\"{{ path(\"filterYear\", {'year':recipe.vineyard.name}) }}\">{{ recipe.vineyard.name }}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t\t<select name=\"vineyards\" id=\"vineyard-select\">
\t\t\t\t<option value=\"\">-- Filter by Country --</option>
\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t<option value=\"{{ path(\"filterYear\", {'year':recipe.vineyard.country}) }}\">{{ recipe.vineyard.country }}</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t\t<select name=\"vineyards\" id=\"vineyard-select\">
\t\t\t\t<option value=\"\">-- Filter by Vineyard --</option>
\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t<option value=\"{{ path(\"filterYear\", {'year':recipe.vineyard.region}) }}\">{{ recipe.vineyard.region }}</option>
\t\t\t\t{% endfor %}
\t\t\t</select> #}
\t\t\t{# <select name=\"vineyard\" id=\"vineyard-select\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">--Filter by Vineyards--</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ path(\"filterVineyard\", {'name':vineyard.name}) }}\">{{ vineyard.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</select> #}
\t\t\t{# <select name=\"vineyard\" id=\"vineyard-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">--Filter by Vineyards--</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for vineyard in vineyards %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>{{ vineyard.region }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"vineyard\" id=\"vineyard-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">--Filter by Vineyards--</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for vineyard in vineyards %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>{{ vineyard.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</select> #}
\t\t</div>
\t\t<div class=\"table-recipes\">
\t\t\t<table cellspacing=\"0\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Image</th>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Ingrédients</th>
\t\t\t\t\t<th>Description</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>

\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><img src='{{ asset('img/' ~ recipe.image) }}' alt=\"{{recipe.title}}\"></td>
\t\t\t\t\t\t<td>{{recipe.title}}</td>
\t\t\t\t\t\t<td>Ingrédients ?</td>
\t\t\t\t\t\t<td>{{recipe.description}}</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<i class=\"far fa-eye\"></i>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}

\t\t\t</table>
\t\t</div>

\t</section>

{% endblock %}
", "recipes/recipes.html.twig", "C:\\Users\\a2124872\\Desktop\\EPCF2 backup\\templates\\recipes\\recipes.html.twig");
    }
}
