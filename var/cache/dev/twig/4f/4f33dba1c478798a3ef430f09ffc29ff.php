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

/* front/cart/index.html.twig */
class __TwigTemplate_b897b3a63827ab26dcd6c47be453e400 extends Template
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
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/cart/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/cart/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "\t";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield "Panier!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "\t<main>
\t\t<h1>Panier</h1>

\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t<th>Total</th>
\t\t\t\t\t<th>Action</th>
\t\t\t\t\t<th>Supprimer</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dataCart"]) || array_key_exists("dataCart", $context) ? $context["dataCart"] : (function () { throw new RuntimeError('Variable "dataCart" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 23
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "product", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "product", [], "any", false, false, false, 25), "price", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "quantity", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "total", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "product", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield " class=\"btn btn-success\">+</a>

\t\t\t\t\t\t<a href=";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart_decrease", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "product", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield " class=\"btn btn-warning\">-</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["data"], "product", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield " class=\"btn btn-danger\">Supprimer</a>
\t\t\t\t\t\t";
            // line 36
            yield "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "\t\t\t<tr>
\t\t\t\t<td colspan=\"4\">Total</td>
\t\t\t\t<td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "
\t\t\t\t\teuros</td>
\t\t\t\t<td>
\t\t\t\t\t<a href=";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart_empty");
        yield ">Vider le panier</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>

\t\t<a href=";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_order_index");
        yield ">Commander</a>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/cart/index.html.twig";
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
        return array (  175 => 49,  167 => 44,  161 => 41,  157 => 39,  149 => 36,  145 => 34,  139 => 31,  134 => 29,  129 => 27,  125 => 26,  121 => 25,  117 => 24,  114 => 23,  110 => 22,  94 => 8,  84 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}
\t{{ parent()}}Panier!
{% endblock %}

{% block body %}
\t<main>
\t\t<h1>Panier</h1>

\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t<th>Produit</th>
\t\t\t\t\t<th>Quantité</th>
\t\t\t\t\t<th>Total</th>
\t\t\t\t\t<th>Action</th>
\t\t\t\t\t<th>Supprimer</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t{% for data in dataCart %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ data.product.name }}</td>
\t\t\t\t\t<td>{{ data.product.price }}</td>
\t\t\t\t\t<td>{{ data.quantity }}</td>
\t\t\t\t\t<td>{{ data.total }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href={{ path('front_cart_add', { 'id': data.product.id} )}} class=\"btn btn-success\">+</a>

\t\t\t\t\t\t<a href={{ path('front_cart_decrease', { 'id': data.product.id} )}} class=\"btn btn-warning\">-</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href={{ path('front_cart_remove', { 'id': data.product.id} )}} class=\"btn btn-danger\">Supprimer</a>
\t\t\t\t\t\t{# Quand j'appuye sur supprimer ça supprime toute les données pour ce produit #}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t<tr>
\t\t\t\t<td colspan=\"4\">Total</td>
\t\t\t\t<td>{{ total }}
\t\t\t\t\teuros</td>
\t\t\t\t<td>
\t\t\t\t\t<a href={{ path('front_cart_empty') }}>Vider le panier</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>

\t\t<a href={{ path('front_order_index')}}>Commander</a>
\t</main>
{% endblock %}


{# Order #}
{# customer #}
{# quantity #}

{# OrderItem #}


{# 1 | 6786786GHJG | 05/08/2024 | customer | total #}

{#  1 | 12 | 4 |  1 |  price #}
", "front/cart/index.html.twig", "/Users/oura/Desktop/lumi_design/templates/front/cart/index.html.twig");
    }
}
