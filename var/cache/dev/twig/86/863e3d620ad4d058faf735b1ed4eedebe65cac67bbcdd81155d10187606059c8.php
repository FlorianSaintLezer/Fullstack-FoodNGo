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

/* users/recipes.html.twig */
class __TwigTemplate_45d3e2595956376bca88951bb83a7a777ce7ac2d57127065b672001bf9ee3045 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/recipes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/recipes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/recipes.html.twig", 1);
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
        echo "

\t";
        // line 37
        echo "\t";
        // line 43
        echo "\t";
        // line 55
        echo "\t";
        // line 81
        echo "\t\t<section class=\"recipes\"> 
\t\t<div class=\"cards\">
\t\t\t";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 84
            echo "\t\t\t\t<div class=\"card\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 84))), "html", null, true);
            echo "');\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h2 class=\"title\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "title", [], "any", false, false, false, 86), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t";
            // line 88
            echo "\t\t\t\t\t\t<button class=\"cardBtn\">View Recipe</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\t\t</div>
\t</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/recipes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 92,  139 => 88,  135 => 86,  129 => 84,  125 => 83,  121 => 81,  119 => 55,  117 => 43,  115 => 37,  111 => 12,  101 => 11,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Food and Go - Recipes
{% endblock %}

{% block titre %}Recipes

{% endblock %}


{% block body %}


\t{# 
\t\t\t\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t\t\t\t<option value=\"{{ path(\"filterYear\", {'year':recipe.year}) }}\">{{ recipe.year }}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select name=\"vineyards\" id=\"vineyard-select\">
\t\t\t\t\t\t\t<option value=\"\">-- Filter by Vineyard --</option>
\t\t\t\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t\t\t\t<option value=\"{{ path(\"filterYear\", {'year':recipe.vineyard.name}) }}\">{{ recipe.vineyard.name }}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select name=\"vineyards\" id=\"vineyard-select\">
\t\t\t\t\t\t\t<option value=\"\">-- Filter by Country --</option>
\t\t\t\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t\t\t\t<option value=\"{{ path(\"filterYear\", {'year':recipe.vineyard.country}) }}\">{{ recipe.vineyard.country }}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select name=\"vineyards\" id=\"vineyard-select\">
\t\t\t\t\t\t\t<option value=\"\">-- Filter by Vineyard --</option>
\t\t\t\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t\t\t\t<option value=\"{{ path(\"filterYear\", {'year':recipe.vineyard.region}) }}\">{{ recipe.vineyard.region }}</option>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select> #}
\t{# <select name=\"vineyard\" id=\"vineyard-select\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">--Filter by Vineyards--</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ path(\"filterVineyard\", {'name':vineyard.name}) }}\">{{ vineyard.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select> #}
\t{# <select name=\"vineyard\" id=\"vineyard-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">--Filter by Vineyards--</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for vineyard in vineyards %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>{{ vineyard.region }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"vineyard\" id=\"vineyard-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">--Filter by Vineyards--</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for vineyard in vineyards %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option>{{ vineyard.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select> #}
\t{# <section>
\t\t\t\t\t<div class=\"table-recipes\"> <table cellspacing=\"0\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Image</th>
\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t<th>Ingrédients</th>
\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t
\t\t\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><img src='{{ asset('img/' ~ recipe.image) }}' alt=\"{{recipe.title}}\"></td>
\t\t\t\t\t\t\t\t<td>{{recipe.title}}</td>
\t\t\t\t\t\t\t\t<td>Ingrédients ?</td>
\t\t\t\t\t\t\t\t<td>{{recipe.description}}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<i class=\"far fa-eye\"></i>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t
\t\t\t</section> #}
\t\t<section class=\"recipes\"> 
\t\t<div class=\"cards\">
\t\t\t{% for recipe in recipes %}
\t\t\t\t<div class=\"card\" style=\"background-image: url('{{ asset('img/' ~ recipe.image) }}');\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<h2 class=\"title\">{{recipe.title}}</h2>
\t\t\t\t\t\t{# <p class=\"copy\">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p> #}
\t\t\t\t\t\t<button class=\"cardBtn\">View Recipe</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</section>

{% endblock %}
", "users/recipes.html.twig", "C:\\Users\\a2124872\\Desktop\\EPCF2 backup\\templates\\users\\recipes.html.twig");
    }
}
