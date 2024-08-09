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

/* front/partials/_header.html.twig */
class __TwigTemplate_cafe89669e0cec48b012829618565008 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/partials/_header.html.twig"));

        // line 1
        yield "<header class=\"mb-5\">
\t<nav class=\"navbar navbar-expand-md navbar-dark bg-primary\">
\t\t<div class=\"container-fluid \">
\t\t\t<a class=\"navbar-brand d-flex align-items-center\" href=";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home_index");
        yield ">
\t\t\t\t<img src=";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/lumi-design-logo.png"), "html", null, true);
        yield " alt=\"lumi design logo\" width=\"20\" class=\"d-inline-block align-text-top me-1\">
\t\t\t\tLumiDesign
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav w-100\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home_index");
        yield ">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 20
            yield "\t\t\t\t\t\t<li class=\"nav-item ms-auto\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=";
            // line 21
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
            yield ">Dashboard</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 24
        yield "
\t\t\t\t\t";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED")) {
            // line 26
            yield "\t\t\t\t\t\t<li class=\"nav-item ms-auto\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=";
            // line 27
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield ">Deconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        } else {
            // line 30
            yield "\t\t\t\t\t\t<li class=\"nav-item ms-auto\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=";
            // line 31
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield ">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=";
            // line 34
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield ">Inscription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 37
        yield "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart_index");
        yield ">
\t\t\t\t\t\t\t<img src=";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/cart3.svg"), "html", null, true);
        yield " alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
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
        return "front/partials/_header.html.twig";
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
        return array (  120 => 39,  116 => 38,  113 => 37,  107 => 34,  101 => 31,  98 => 30,  92 => 27,  89 => 26,  87 => 25,  84 => 24,  78 => 21,  75 => 20,  73 => 19,  65 => 14,  53 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"mb-5\">
\t<nav class=\"navbar navbar-expand-md navbar-dark bg-primary\">
\t\t<div class=\"container-fluid \">
\t\t\t<a class=\"navbar-brand d-flex align-items-center\" href={{ path('front_home_index') }}>
\t\t\t\t<img src={{ asset('img/logo/lumi-design-logo.png') }} alt=\"lumi design logo\" width=\"20\" class=\"d-inline-block align-text-top me-1\">
\t\t\t\tLumiDesign
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav w-100\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href={{ path('front_home_index') }}>Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t<li class=\"nav-item ms-auto\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('admin_dashboard_index')}}>Dashboard</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED') %}
\t\t\t\t\t\t<li class=\"nav-item ms-auto\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('app_logout') }}>Deconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"nav-item ms-auto\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('app_login') }}>Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('app_register') }}>Inscription</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href={{ path('front_cart_index')}}>
\t\t\t\t\t\t\t<img src={{ asset('img/icon/cart3.svg') }} alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
", "front/partials/_header.html.twig", "/Users/oura/Desktop/lumi_design/templates/front/partials/_header.html.twig");
    }
}
