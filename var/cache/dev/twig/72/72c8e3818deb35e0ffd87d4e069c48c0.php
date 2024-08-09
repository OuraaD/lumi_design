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

/* admin/product/index.html.twig */
class __TwigTemplate_7016500a2f795dd8ee993f0584f4688b extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/product/index.html.twig", 1);
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
        yield "
\tProduits
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        yield "\t<main>
\t\t<section>
\t\t\t<h1 class=\"mb-5\">Liste des produits</h1>
\t\t\t<a href=";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_new");
        yield " class=\"btn btn-warning mb-4\">Ajouter un produit</a>

\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">";
        // line 17
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 17, $this->source); })()), "#", "p.id");
        yield "</th>
\t\t\t\t\t\t<th scope=\"col\">";
        // line 18
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 18, $this->source); })()), "Produits", "p.name");
        yield "</th>
\t\t\t\t\t\t<th scope=\"col\">";
        // line 19
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 19, $this->source); })()), "Date de mise à jour", "p.updatedAt");
        yield "</th>
\t\t\t\t\t\t<th scope=\"col\">Modifier</th>
\t\t\t\t\t\t<th scope=\"col\">Supprimer</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t\t<th scope=\"col\">Nom du produit</th>
\t\t\t\t\t\t<th scope=\"col\">Date de mise à jour</th>
\t\t\t\t\t\t<th scope=\"col\">Modifier</th>
\t\t\t\t\t\t<th scope=\"col\">Supprimer</th>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t\t<tbody class=\"table-group-divider\">
\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 35
            yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 36), "html", null, true);
            yield "</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 38)]), "html", null, true);
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38), "html", null, true);
            yield "</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "updatedAt", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_edit", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 42)]), "html", null, true);
            yield " class=\"btn btn-primary\">Modifier</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<form action=";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield " method=\"POST\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<div class=\"navigation mt-3\">
\t\t\t\t";
        // line 55
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 55, $this->source); })()));
        yield "
\t\t\t</div>
\t\t</section>
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
        return "admin/product/index.html.twig";
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
        return array (  182 => 55,  177 => 52,  164 => 45,  158 => 42,  153 => 40,  146 => 38,  141 => 36,  138 => 35,  134 => 34,  116 => 19,  112 => 18,  108 => 17,  100 => 12,  95 => 9,  85 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}

{% block title %}
\t{{ parent() }}
\tProduits
{% endblock %}

{% block body %}
\t<main>
\t\t<section>
\t\t\t<h1 class=\"mb-5\">Liste des produits</h1>
\t\t\t<a href={{ path('admin_product_new')}} class=\"btn btn-warning mb-4\">Ajouter un produit</a>

\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">{{ knp_pagination_sortable(products, '#', 'p.id') }}</th>
\t\t\t\t\t\t<th scope=\"col\">{{ knp_pagination_sortable(products, 'Produits', 'p.name') }}</th>
\t\t\t\t\t\t<th scope=\"col\">{{ knp_pagination_sortable(products, 'Date de mise à jour', 'p.updatedAt') }}</th>
\t\t\t\t\t\t<th scope=\"col\">Modifier</th>
\t\t\t\t\t\t<th scope=\"col\">Supprimer</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tfoot>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">#</th>
\t\t\t\t\t\t<th scope=\"col\">Nom du produit</th>
\t\t\t\t\t\t<th scope=\"col\">Date de mise à jour</th>
\t\t\t\t\t\t<th scope=\"col\">Modifier</th>
\t\t\t\t\t\t<th scope=\"col\">Supprimer</th>
\t\t\t\t\t</tr>
\t\t\t\t</tfoot>
\t\t\t\t<tbody class=\"table-group-divider\">
\t\t\t\t\t{% for product in products %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"row\">{{ product.id }}</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href={{ path('admin_product_show', { 'slug' : product.slug} ) }}>{{ product.name }}</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>{{ product.updatedAt|date('d/m/Y')}}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href={{ path('admin_product_edit', { 'slug': product.slug} )}} class=\"btn btn-primary\">Modifier</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<form action={{ path('admin_product_delete', { 'id': product.id} )}} method=\"POST\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_method\" value=\"DELETE\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<div class=\"navigation mt-3\">
\t\t\t\t{{ knp_pagination_render(products) }}
\t\t\t</div>
\t\t</section>
\t</main>
{% endblock %}
", "admin/product/index.html.twig", "/Users/oura/Desktop/lumi_design/templates/admin/product/index.html.twig");
    }
}
