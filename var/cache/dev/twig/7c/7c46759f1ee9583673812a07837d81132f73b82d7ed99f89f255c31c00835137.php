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

/* admin/admin_recipes.html.twig */
class __TwigTemplate_3b54faf56bf5b318ef399688b52a0cb8fb3e7de8af0391cb2245be7feb81b40f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_recipes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_recipes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_recipes.html.twig", 1);
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

        echo "Food and Go - Recipes Admin
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

        echo "Recipes Admin

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
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "\t<div id=\"alert\" class=\"alert-success\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "<button id=\"alert-close\"><i class=\"far fa-times-circle\"></i></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "

\t<section class=\"admin-recipes\">
\t\t<a class=\"secondButton\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_recipes_add");
        echo "\">
\t\t\t<i class=\"fas fa-plus\"></i>
\t\t</a>
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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 31
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><img src='";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 32))), "html", null, true);
            echo "' alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "\"></td>
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "title", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>Ingrédients ?</td>
\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "description", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"truc\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_recipes_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_recipes_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"delete\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 44))), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"Delete\" class=\"deleteRecipe\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        return "admin/admin_recipes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 55,  181 => 44,  176 => 42,  169 => 38,  163 => 35,  158 => 33,  152 => 32,  149 => 31,  145 => 30,  130 => 18,  125 => 15,  116 => 13,  111 => 12,  101 => 11,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Food and Go - Recipes Admin
{% endblock %}

{% block titre %}Recipes Admin

{% endblock %}


{% block body %}
\t{% for message in app.flashes('success') %}
\t<div id=\"alert\" class=\"alert-success\">{{message}}<button id=\"alert-close\"><i class=\"far fa-times-circle\"></i></button></div>
\t{% endfor %}


\t<section class=\"admin-recipes\">
\t\t<a class=\"secondButton\" href=\"{{ path('admin_recipes_add') }}\">
\t\t\t<i class=\"fas fa-plus\"></i>
\t\t</a>
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
\t\t\t\t\t\t\t<div class=\"truc\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('admin_recipes_edit',{'id' : recipe.id}) }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"{{ path('admin_recipes_delete', {'id' : recipe.id}) }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"delete\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUP' ~ recipe.id)}}\">

\t\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"Delete\" class=\"deleteRecipe\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}

\t\t\t</table>
\t\t</div>
\t</section>
{% endblock %}
", "admin/admin_recipes.html.twig", "C:\\Users\\a2124872\\Desktop\\EPCF2 backup\\templates\\admin\\admin_recipes.html.twig");
    }
}
