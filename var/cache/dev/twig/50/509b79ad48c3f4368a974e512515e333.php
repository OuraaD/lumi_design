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

/* admin/product/show.html.twig */
class __TwigTemplate_aba757e2ecb59e89981afc0b2d243c45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/product/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/product/show.html.twig", 1);
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
\t\t<p class=\"mb-3\">
\t\t\t<a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_index");
        yield "\" class=\"btn btn-primary\">Retour à la liste</a>
\t\t</p>

\t\t<section>
\t\t\t";
        // line 15
        if ( !(null === (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "\t\t\t\t<div class=\"container mt-5\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t";
            // line 19
            if ((is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "image", [], "any", false, false, false, 19)) && is_string($__internal_compile_1 = "http") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
                // line 20
                yield "\t\t\t\t\t\t\t\t<img src=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "image", [], "any", false, false, false, 20), "html", null, true);
                yield " alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
                yield "\" class=\"img-fluid rounded shadow\">
\t\t\t\t\t\t\t";
            } else {
                // line 22
                yield "\t\t\t\t\t\t\t\t<img src=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "imageFile"), "html", null, true);
                yield " alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
                yield "\" class=\"img-fluid rounded shadow\">
\t\t\t\t\t\t\t";
            }
            // line 24
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h2 class=\"mb-4\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), "html", null, true);
            yield "</h2>
\t\t\t\t\t\t\t";
            // line 27
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "category", [], "any", false, false, false, 27)) {
                // line 28
                yield "\t\t\t\t\t\t\t\t<p class=\"badge bg-secondary mb-3\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "category", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t";
            }
            // line 30
            yield "\t\t\t\t\t\t\t<p class=\"lead mb-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t<h2 class=\"text-primary\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "price", [], "any", false, false, false, 31), "html", null, true);
            yield "€</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tStock
\t\t\t\t\t\t\t\t";
            // line 34
            (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 34)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stock", [], "any", false, false, false, 34), "html", null, true)) : (yield "Rupture de stock"));
            yield "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t<caption>Détails du produit</caption>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Référence</th>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Slug</th>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 49, $this->source); })()), "slug", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Stock</th>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 53, $this->source); })()), "stock", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Date de création</th>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 57, $this->source); })()), "createdAt", [], "any", false, false, false, 57), "d/m/Y H:i"), "html", null, true);
            yield "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Dernière mise à jour</th>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 61
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 61, $this->source); })()), "updatedAt", [], "any", false, false, false, 61)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 61, $this->source); })()), "updatedAt", [], "any", false, false, false, 61), "d/m/Y H:i"), "html", null, true)) : (yield "N/A"));
            yield "</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 69
        yield "\t\t</section>
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
        return "admin/product/show.html.twig";
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
        return array (  211 => 69,  200 => 61,  193 => 57,  186 => 53,  179 => 49,  172 => 45,  158 => 34,  152 => 31,  147 => 30,  141 => 28,  139 => 27,  135 => 26,  131 => 24,  123 => 22,  115 => 20,  113 => 19,  108 => 16,  106 => 15,  99 => 11,  95 => 9,  85 => 8,  70 => 4,  60 => 3,  37 => 1,);
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
\t\t<p class=\"mb-3\">
\t\t\t<a href=\"{{ path('admin_product_index') }}\" class=\"btn btn-primary\">Retour à la liste</a>
\t\t</p>

\t\t<section>
\t\t\t{% if product is not null %}
\t\t\t\t<div class=\"container mt-5\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t{% if product.image starts with 'http' %}
\t\t\t\t\t\t\t\t<img src={{ product.image }} alt=\"{{ product.name }}\" class=\"img-fluid rounded shadow\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<img src={{ vich_uploader_asset(product, 'imageFile') }} alt=\"{{ product.name }}\" class=\"img-fluid rounded shadow\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h2 class=\"mb-4\">{{ product.name }}</h2>
\t\t\t\t\t\t\t{% if product.category %}
\t\t\t\t\t\t\t\t<p class=\"badge bg-secondary mb-3\">{{ product.category.name }}</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<p class=\"lead mb-4\">{{ product.description }}</p>
\t\t\t\t\t\t\t<h2 class=\"text-primary\">{{ product.price }}€</h2>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tStock
\t\t\t\t\t\t\t\t{{ product.stock ?? 'Rupture de stock' }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<table class=\"table table-striped\">
\t\t\t\t\t\t\t\t<caption>Détails du produit</caption>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Référence</th>
\t\t\t\t\t\t\t\t\t\t<td>{{ product.id }}</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Slug</th>
\t\t\t\t\t\t\t\t\t\t<td>{{ product.slug }}</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Stock</th>
\t\t\t\t\t\t\t\t\t\t<td>{{ product.stock }}</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Date de création</th>
\t\t\t\t\t\t\t\t\t\t<td>{{ product.createdAt|date('d/m/Y H:i') }}</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Dernière mise à jour</th>
\t\t\t\t\t\t\t\t\t\t<td>{{ product.updatedAt ? product.updatedAt|date('d/m/Y H:i') : 'N/A' }}</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</section>
\t</main>
{% endblock %}
", "admin/product/show.html.twig", "/Users/oura/Desktop/lumi_design/templates/admin/product/show.html.twig");
    }
}
