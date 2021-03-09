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

/* admin_comments/comments.html.twig */
class __TwigTemplate_d3763763b143c3b357e0c5ee8953f829fa7a93489d416042fceef6608132dd58 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_comments/comments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_comments/comments.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_comments/comments.html.twig", 1);
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

\t<section class=\"admin-comments\">
\t\t<a class=\"secondButton\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comments_creation");
        echo "\">
\t\t\t<i class=\"fas fa-plus\"></i>
\t\t</a>
\t\t<div class=\"table-comments\">
\t\t\t<table cellspacing=\"0\">
\t\t\t\t<tr>
\t\t\t\t\t<th>ID</th>
\t\t\t\t\t<th>Content</th>
\t\t\t\t\t<th>Nom recette ?</th>
\t\t\t\t\t<th>Nom user ?</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 31
            echo "\t\t\t\t\t<tr>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentsId", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentsContent", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>recette?</td>
\t\t\t\t\t\t<td>User ?</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"truc\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comments_modification", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "commentsId", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comments_suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "commentsId", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"delete\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . twig_get_attribute($this->env, $this->source, $context["comment"], "commentsId", [], "any", false, false, false, 44))), "html", null, true);
            echo "\">

\t\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"Delete\" class=\"deleteComment\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-trash-alt\"></i>
\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
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
        return "admin_comments/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 55,  176 => 44,  171 => 42,  164 => 38,  156 => 33,  152 => 32,  149 => 31,  145 => 30,  130 => 18,  125 => 15,  116 => 13,  111 => 12,  101 => 11,  80 => 6,  60 => 3,  37 => 1,);
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


\t<section class=\"admin-comments\">
\t\t<a class=\"secondButton\" href=\"{{ path('admin_comments_creation') }}\">
\t\t\t<i class=\"fas fa-plus\"></i>
\t\t</a>
\t\t<div class=\"table-comments\">
\t\t\t<table cellspacing=\"0\">
\t\t\t\t<tr>
\t\t\t\t\t<th>ID</th>
\t\t\t\t\t<th>Content</th>
\t\t\t\t\t<th>Nom recette ?</th>
\t\t\t\t\t<th>Nom user ?</th>
\t\t\t\t\t<th></th>
\t\t\t\t</tr>
\t\t\t\t{% for comment in comments %}
\t\t\t\t\t<tr>
                        <td>{{comment.commentsId}}</td>
\t\t\t\t\t\t<td>{{comment.commentsContent}}</td>
\t\t\t\t\t\t<td>recette?</td>
\t\t\t\t\t\t<td>User ?</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div class=\"truc\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('admin_comments_modification',{'id' : comment.commentsId}) }}\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-edit\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<form method=\"POST\" action=\"{{ path('admin_comments_suppression', {'id' : comment.commentsId}) }}\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"delete\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUP' ~ comment.commentsId)}}\">

\t\t\t\t\t\t\t\t\t<button type=\"submit\" value=\"Delete\" class=\"deleteComment\">
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
", "admin_comments/comments.html.twig", "C:\\Users\\a2124872\\Desktop\\EPCF2\\templates\\admin_comments\\comments.html.twig");
    }
}
