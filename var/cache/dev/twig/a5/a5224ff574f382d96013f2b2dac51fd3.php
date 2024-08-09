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

/* front/home/show.html.twig */
class __TwigTemplate_745614640e26e82777ae07b76217fdf2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/show.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/home/show.html.twig", 1);
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
        yield "Detail
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
\t\t<p class=\"mb-3\">
\t\t\t<a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home_index");
        yield "\" class=\"btn btn-primary\">Retour à la liste</a>
\t\t</p>

\t\t<section>
\t\t\t";
        // line 14
        if ( !(null === (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 14, $this->source); })()))) {
            // line 15
            yield "\t\t\t\t<div class=\"border rounded p-4\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h1 class=\"display-4 fw-bold\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
            yield "</h1>
\t\t\t\t\t\t\t<p class=\"lead\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t";
            // line 20
            if ((is_string($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "image", [], "any", false, false, false, 20)) && is_string($__internal_compile_1 = "http") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
                // line 21
                yield "\t\t\t\t\t\t\t\t<img src=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21), "html", null, true);
                yield " class=\"w-50 img-fluid rounded mb-3\" alt=\"ssss";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t";
            } else {
                // line 23
                yield "\t\t\t\t\t\t\t\t<img src=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "imageFile"), "html", null, true);
                yield " class=\"w-50 img-fluid rounded mb-3\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t";
            }
            // line 25
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h2 class=\"text-primary\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "price", [], "any", false, false, false, 27), "html", null, true);
            yield "€</h2>
\t\t\t\t\t\t\t<p class=\"badge bg-";
            // line 28
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "stock", [], "any", false, false, false, 28) > 0)) ? ("success") : ("danger"));
            yield "\">
\t\t\t\t\t\t\t\t";
            // line 29
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 29, $this->source); })()), "stock", [], "any", false, false, false, 29) > 0)) ? ("En stock") : ("Rupture de stock"));
            yield "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            // line 31
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "stock", [], "any", false, false, false, 31) > 0)) {
                // line 32
                yield "\t\t\t\t\t\t\t\t<a href=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
                yield " class=\"btn btn-primary btn-lg\">Ajouter au panier</a>
\t\t\t\t\t\t\t";
            } else {
                // line 34
                yield "\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary btn-lg\" disabled>Indisponible</button>
\t\t\t\t\t\t\t";
            }
            // line 36
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr class=\"my-4\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h5>Prix</h5>
\t\t\t\t\t\t\t<p>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "price", [], "any", false, false, false, 42), "html", null, true);
            yield "€</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h5>Catégorie</h5>
\t\t\t\t\t\t\t<p>";
            // line 46
            (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, true, false, 46), "name", [], "any", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, true, false, 46), "name", [], "any", false, false, false, 46)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, true, false, 46), "name", [], "any", false, false, false, 46), "html", null, true)) : (yield "N/A"));
            yield "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 51
            yield "\t\t\t\t<p>Produit non trouvé.</p>
\t\t\t";
        }
        // line 53
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
        return "front/home/show.html.twig";
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
        return array (  194 => 53,  190 => 51,  182 => 46,  175 => 42,  167 => 36,  163 => 34,  157 => 32,  155 => 31,  150 => 29,  146 => 28,  142 => 27,  138 => 25,  130 => 23,  122 => 21,  120 => 20,  116 => 19,  112 => 18,  107 => 15,  105 => 14,  98 => 10,  94 => 8,  84 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %}
\t{{ parent()}}Detail
{% endblock %}

{% block body %}
\t<main>
\t\t<p class=\"mb-3\">
\t\t\t<a href=\"{{ path('front_home_index') }}\" class=\"btn btn-primary\">Retour à la liste</a>
\t\t</p>

\t\t<section>
\t\t\t{% if product is not null %}
\t\t\t\t<div class=\"border rounded p-4\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h1 class=\"display-4 fw-bold\">{{ product.name }}</h1>
\t\t\t\t\t\t\t<p class=\"lead\">{{ product.description }}</p>
\t\t\t\t\t\t\t{% if product.image starts with 'http' %}
\t\t\t\t\t\t\t\t<img src={{ product.image }} class=\"w-50 img-fluid rounded mb-3\" alt=\"ssss{{ product.name }}\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<img src={{ vich_uploader_asset(product, 'imageFile') }} class=\"w-50 img-fluid rounded mb-3\" alt=\"{{ product.name }}\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h2 class=\"text-primary\">{{ product.price }}€</h2>
\t\t\t\t\t\t\t<p class=\"badge bg-{{ product.stock > 0 ? 'success' : 'danger' }}\">
\t\t\t\t\t\t\t\t{{ product.stock > 0 ? 'En stock' : 'Rupture de stock' }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{% if product.stock > 0 %}
\t\t\t\t\t\t\t\t<a href={{ path('front_cart_add', { 'id': product.id } )}} class=\"btn btn-primary btn-lg\">Ajouter au panier</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<button class=\"btn btn-secondary btn-lg\" disabled>Indisponible</button>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<hr class=\"my-4\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h5>Prix</h5>
\t\t\t\t\t\t\t<p>{{ product.price }}€</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<h5>Catégorie</h5>
\t\t\t\t\t\t\t<p>{{ product.category.name ?? 'N/A' }}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t<p>Produit non trouvé.</p>
\t\t\t{% endif %}
\t\t</section>
\t</main>
{% endblock %}
", "front/home/show.html.twig", "/Users/oura/Desktop/lumi_design/templates/front/home/show.html.twig");
    }
}
