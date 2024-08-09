<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/partials/_header.html.twig */
class __TwigTemplate_829ebdb1e11e836fdfd3c3ef871a868a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partials/_header.html.twig"));

        // line 1
        yield "<header class=\"mb-5\">
\t<nav class=\"navbar navbar-expand-md navbar-dark bg-primary\">
\t\t<div class=\"container \">
\t\t\t<a
\t\t\t\tclass=\"navbar-brand d-flex align-items-center\" href=";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home_index");
        yield ">
\t\t\t\t";
        // line 7
        yield "\t\t\t\tLumiDesign
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav w-100\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
        yield ">Dashboard</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_index");
        yield ">Produits</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_index");
        yield " class=\"nav-link\">Categories</a>
\t\t\t\t\t</li>

\t\t\t\t\t";
        // line 24
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED")) {
            // line 25
            yield "\t\t\t\t\t\t<li class=\"ms-auto d-flex align-items-center\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t";
        } else {
            // line 30
            yield "\t\t\t\t\t\t<li
\t\t\t\t\t\t\tclass=\"ms-auto\">\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 34
        yield "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/partials/_header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  93 => 34,  88 => 30,  84 => 25,  82 => 24,  76 => 21,  70 => 18,  64 => 15,  54 => 7,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"mb-5\">
\t<nav class=\"navbar navbar-expand-md navbar-dark bg-primary\">
\t\t<div class=\"container \">
\t\t\t<a
\t\t\t\tclass=\"navbar-brand d-flex align-items-center\" href={{ path('front_home_index') }}>
\t\t\t\t{# <img src={{ asset('img/logo/lumi-design-logo.png') }} alt=\"lumi design logo\" width=\"30\" class=\"d-inline-block align-text-top me-1\"> #}
\t\t\t\tLumiDesign
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav w-100\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href={{ path('admin_dashboard_index') }}>Dashboard</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('admin_product_index') }}>Produits</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href={{ path('admin_category_index') }} class=\"nav-link\">Categories</a>
\t\t\t\t\t</li>

\t\t\t\t\t{% if not is_granted('IS_AUTHENTICATED') %}
\t\t\t\t\t\t<li class=\"ms-auto d-flex align-items-center\">{# <a class=\"nav-link\" href={{ path('app_login') }}>Connexion</a> #}
\t\t\t\t\t\t\t{# / #}
\t\t\t\t\t\t\t{# <a class=\"nav-link\" href={{ path('app_register') }}>Inscription</a> #}
\t\t\t\t\t\t</li>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li
\t\t\t\t\t\t\tclass=\"ms-auto\">{# <a class=\"nav-link\" href={{ path('app_logout') }}>Deconnexion</a> #}
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
", "admin/partials/_header.html.twig", "/Users/oura/Desktop/lumi_design/templates/admin/partials/_header.html.twig");
    }
}
