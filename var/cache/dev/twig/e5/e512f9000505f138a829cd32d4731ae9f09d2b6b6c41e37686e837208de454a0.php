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

/* footer.html.twig */
class __TwigTemplate_5f2613de7d1fa30af224a31dba09af4bbd0d180146e59a25372fe709c57bfd69 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 2
        echo "<footer class=\"site-footer\">
\t<div class=\"container site-footer-content\">
\t\t<div class=\"site-footer-head\">
\t\t\t<p>Retrouvez-nous sur :</p>
\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"fa-stack icons\">
\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x icon-background\"></i>
\t\t\t\t\t<i class=\"fab fa-linkedin-in fa-stack-1x\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"fa-stack icons\">
\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x icon-background\"></i>
\t\t\t\t\t<i class=\"fab fa-instagram fa-stack-1x\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"fa-stack icons\">
\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x icon-background\"></i>
\t\t\t\t\t<i class=\"fab fa-twitter fa-stack-1x\"></i>
\t\t\t\t</span>
\t\t\t</a>


\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"fa-stack icons\">
\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x icon-background\"></i>
\t\t\t\t\t<i class=\"fab fa-youtube fa-stack-1x\"></i>
\t\t\t\t</span>

\t\t\t</a>
\t\t</div>

\t\t";
        // line 59
        echo "\t\t<div class=\"site-footer-footer\">
\t\t\tSite développé avec passion par
\t\t\t<a href=\"http://floriansaintlezer.fr\" target=\"_blank\">Florian Saint-Lezer</a>
\t\t</div>

\t</footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 59,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Site footer #}
<footer class=\"site-footer\">
\t<div class=\"container site-footer-content\">
\t\t<div class=\"site-footer-head\">
\t\t\t<p>Retrouvez-nous sur :</p>
\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"fa-stack icons\">
\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x icon-background\"></i>
\t\t\t\t\t<i class=\"fab fa-linkedin-in fa-stack-1x\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"fa-stack icons\">
\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x icon-background\"></i>
\t\t\t\t\t<i class=\"fab fa-instagram fa-stack-1x\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"fa-stack icons\">
\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x icon-background\"></i>
\t\t\t\t\t<i class=\"fab fa-twitter fa-stack-1x\"></i>
\t\t\t\t</span>
\t\t\t</a>


\t\t\t<a href=\"/\">
\t\t\t\t<span class=\"fa-stack icons\">
\t\t\t\t\t<i class=\"fa fa-circle fa-stack-2x icon-background\"></i>
\t\t\t\t\t<i class=\"fab fa-youtube fa-stack-1x\"></i>
\t\t\t\t</span>

\t\t\t</a>
\t\t</div>

\t\t{# <div class=\"site-footer-body\">
\t\t\t<div class=\"site-summary\">
\t\t\t\t<span class=\"food\">Food'n</span>
\t\t\t\t<span class=\"go\">go</span>
\t\t\t\tsite trop bien
\t\t\t</div>
\t\t\t<ul class=\"site-categories\">
\t\t\t\t<li>Catégories</li>
\t\t\t\t{% for category in categories %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path(\"filterCategory\", {'category':category.id}) }}\">{{category.name}}</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t\t<ul class=\"site-last-recipes\">
\t\t\t\t<li>Dernières recettes</li>
\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('show_recipe', {'id' : recipe.id }) }}\">{{recipe.title}}</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}

\t\t\t</ul>
\t\t</div> #}
\t\t<div class=\"site-footer-footer\">
\t\t\tSite développé avec passion par
\t\t\t<a href=\"http://floriansaintlezer.fr\" target=\"_blank\">Florian Saint-Lezer</a>
\t\t</div>

\t</footer>
", "footer.html.twig", "E:\\DevWeb\\EPCF2\\templates\\footer.html.twig");
    }
}
