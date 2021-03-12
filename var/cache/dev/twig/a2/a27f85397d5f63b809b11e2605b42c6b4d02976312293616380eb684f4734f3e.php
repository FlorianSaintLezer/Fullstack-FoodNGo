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

/* users/show_recipe.html.twig */
class __TwigTemplate_fba6b48763f6e088180590bf69993b9cf6437de8871a1157a9ec774fc3fa3e7c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/show_recipe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/show_recipe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/show_recipe.html.twig", 1);
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

        echo "Recipe
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
\t<section class=\"recipe_show\">
\t\t<div class=\"card\" style=\"background-image: url('";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 9, $this->source); })()), "image", [], "any", false, false, false, 9))), "html", null, true);
        echo "');\">
\t\t\t<div class=\"content\">
\t\t\t\t<h2 class=\"title\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h2>
\t\t\t\t<p>";
        // line 12
        echo twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12);
        echo "</p>
\t\t\t\t";
        // line 14
        echo "\t\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14) === twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 14, $this->source); })()), "author", [], "any", false, false, false, 14)))) {
            // line 15
            echo "\t\t\t\t<button type=\"button\">EDIT (peut-être</button>
\t\t\t\t<button type=\"button\">DELETE (peut-être)</button>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t</div>
\t\t</div>


\t</section>


\t<section
\t\tclass=\"comments\">
\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 27, $this->source); })()), "comments", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 28
            echo "\t\t";
            // line 29
            echo "\t\t<div class=\"comment\">
\t\t\t<div class=\"comment-header\">

\t\t\t\t<h3>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 32), "html", null, true);
            echo "</h3>
\t\t\t\t";
            // line 34
            echo "
\t\t\t</div>

\t\t\t<div class=\"comment-content\">COMMENTAIRE ICI : ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 37), "html", null, true);
            echo "</div>
\t\t\t<div class=\"comment-footer\">

\t\t\t\t<button type=\"button\">EDIT (peut-être</button>
\t\t\t\t<button type=\"button\">DELETE (peut-être)</button>
\t\t\t</div>


\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/show_recipe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 47,  145 => 37,  140 => 34,  136 => 32,  131 => 29,  129 => 28,  125 => 27,  114 => 18,  109 => 15,  106 => 14,  102 => 12,  98 => 11,  93 => 9,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recipe
{% endblock %}

{% block body %}

\t<section class=\"recipe_show\">
\t\t<div class=\"card\" style=\"background-image: url('{{ asset('img/' ~ recipes.image) }}');\">
\t\t\t<div class=\"content\">
\t\t\t\t<h2 class=\"title\">{{recipes.title}}</h2>
\t\t\t\t<p>{{recipes.description | raw}}</p>
\t\t\t\t{# {{recipes.comments}} #}
\t\t\t\t{% if app.user and app.user is same as(recipes.author) %}
\t\t\t\t<button type=\"button\">EDIT (peut-être</button>
\t\t\t\t<button type=\"button\">DELETE (peut-être)</button>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>


\t</section>


\t<section
\t\tclass=\"comments\">
\t\t{% for comment in recipes.comments %}
\t\t{# START LOOP #}
\t\t<div class=\"comment\">
\t\t\t<div class=\"comment-header\">

\t\t\t\t<h3>{{comment.author}}</h3>
\t\t\t\t{# <p>{{comment.updatedAt | format(d-m-Y)}}</p> #}

\t\t\t</div>

\t\t\t<div class=\"comment-content\">COMMENTAIRE ICI : {{comment.content}}</div>
\t\t\t<div class=\"comment-footer\">

\t\t\t\t<button type=\"button\">EDIT (peut-être</button>
\t\t\t\t<button type=\"button\">DELETE (peut-être)</button>
\t\t\t</div>


\t\t</div>
\t\t{% endfor %}
\t</section>

{% endblock %}
", "users/show_recipe.html.twig", "E:\\DevWeb\\EPCF2\\templates\\users\\show_recipe.html.twig");
    }
}
