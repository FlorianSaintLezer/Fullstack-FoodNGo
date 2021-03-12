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

/* navbar.html.twig */
class __TwigTemplate_7fceefab02ff0882d24cfe2c3252e93dbc6b07f6728f8295b8fcc3c25ba042f6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav id=\"nav\" class=\"nav navbar\">
\t<a href=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"></a>
\t<ul id=\"navbarMenu\" class=\"navbarMenu\">


\t\t<li>
\t\t\t<a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipes");
        echo "\">Recipes</a>
\t\t</li>


\t\t";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 12
            echo "
\t\t\t";
            // line 13
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 14
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 15
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Admin Dashboard</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 18
            echo "
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\">Profile</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Logout</a>
\t\t\t</li>


\t\t";
        } else {
            // line 28
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signin");
            echo "\">Sign in</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Login</a>
\t\t\t</li>
\t\t";
        }
        // line 35
        echo "

\t\t<li class=\"toggle\">
\t\t\t<a href=\"javascript:void(0);\" onclick=\"responsiveNavbar()\">
\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t</a>
\t\t</li>
\t</ul>
</nav>
<div class=\"navLines\"></div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  106 => 32,  100 => 29,  97 => 28,  89 => 23,  83 => 20,  79 => 18,  73 => 15,  70 => 14,  68 => 13,  65 => 12,  63 => 11,  56 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"nav\" class=\"nav navbar\">
\t<a href=\"{{ path('home') }}\"><img src=\"{{ asset('img/logo.png')}}\"></a>
\t<ul id=\"navbarMenu\" class=\"navbarMenu\">


\t\t<li>
\t\t\t<a href=\"{{ path('recipes') }}\">Recipes</a>
\t\t</li>


\t\t{% if is_granted('ROLE_USER') %}

\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path('admin') }}\">Admin Dashboard</a>
\t\t\t\t</li>
\t\t\t{% endif %}

\t\t\t<li>
\t\t\t\t<a href=\"{{ path('profile') }}\">Profile</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('logout') }}\">Logout</a>
\t\t\t</li>


\t\t{% else %}
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('signin') }}\">Sign in</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('login') }}\">Login</a>
\t\t\t</li>
\t\t{% endif %}


\t\t<li class=\"toggle\">
\t\t\t<a href=\"javascript:void(0);\" onclick=\"responsiveNavbar()\">
\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t</a>
\t\t</li>
\t</ul>
</nav>
<div class=\"navLines\"></div>
", "navbar.html.twig", "C:\\Users\\a2124872\\Desktop\\EPCF2\\templates\\navbar.html.twig");
    }
}
