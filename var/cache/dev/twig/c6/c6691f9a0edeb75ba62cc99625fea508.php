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

/* @Dropzone/form_theme.html.twig */
class __TwigTemplate_7627b0e6f169c2ae35b0eae68183bd01 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'dropzone_widget' => [$this, 'block_dropzone_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Dropzone/form_theme.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Dropzone/form_theme.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('dropzone_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    public function block_dropzone_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dropzone_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dropzone_widget"));

        // line 2
        $context["dataController"] = Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-controller", [], "array", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "data-controller", [], "array", false, false, false, 2), "")) : ("")) . " symfony--ux-dropzone--dropzone"));
        // line 3
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 3, $this->source); })()), ["data-controller" => "", "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 3), "")) : ("")) . " dropzone-input"))]);
        // line 5
        yield "<div class=\"dropzone-container\" data-controller=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dataController"]) || array_key_exists("dataController", $context) ? $context["dataController"] : (function () { throw new RuntimeError('Variable "dataController" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\">
        <input type=\"file\" ";
        // line 6
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " data-symfony--ux-dropzone--dropzone-target=\"input\" />

        <div class=\"dropzone-placeholder\" data-symfony--ux-dropzone--dropzone-target=\"placeholder\">";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "placeholder", [], "any", true, true, false, 9) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 9, $this->source); })()), "placeholder", [], "any", false, false, false, 9)))) {
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 10, $this->source); })()) === false)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 10, $this->source); })()), "placeholder", [], "any", false, false, false, 10)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 10, $this->source); })()), "placeholder", [], "any", false, false, false, 10), [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 10, $this->source); })())))), "html", null, true);
        }
        // line 12
        yield "</div>

        <div class=\"dropzone-preview\" data-symfony--ux-dropzone--dropzone-target=\"preview\" style=\"display: none\">
            <button class=\"dropzone-preview-button\" type=\"button\"
                    data-symfony--ux-dropzone--dropzone-target=\"previewClearButton\"></button>

            <div class=\"dropzone-preview-image\" style=\"display: none\"
                 data-symfony--ux-dropzone--dropzone-target=\"previewImage\"></div>

            <div data-symfony--ux-dropzone--dropzone-target=\"previewFilename\" class=\"dropzone-preview-filename\"></div>
        </div>
    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Dropzone/form_theme.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  84 => 12,  81 => 10,  79 => 9,  74 => 6,  69 => 5,  67 => 3,  65 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block dropzone_widget -%}
    {%- set dataController = (attr['data-controller']|default('') ~ ' symfony--ux-dropzone--dropzone')|trim -%}
    {%- set attr = attr|merge({'data-controller': '', class: (attr.class|default('') ~ ' dropzone-input')|trim}) -%}

    <div class=\"dropzone-container\" data-controller=\"{{ dataController }}\">
        <input type=\"file\" {{ block('widget_attributes') }} data-symfony--ux-dropzone--dropzone-target=\"input\" />

        <div class=\"dropzone-placeholder\" data-symfony--ux-dropzone--dropzone-target=\"placeholder\">
            {%- if attr.placeholder is defined and attr.placeholder is not none -%}
                {{- translation_domain is same as(false) ? attr.placeholder : attr.placeholder|trans({}, translation_domain) -}}
            {%- endif -%}
        </div>

        <div class=\"dropzone-preview\" data-symfony--ux-dropzone--dropzone-target=\"preview\" style=\"display: none\">
            <button class=\"dropzone-preview-button\" type=\"button\"
                    data-symfony--ux-dropzone--dropzone-target=\"previewClearButton\"></button>

            <div class=\"dropzone-preview-image\" style=\"display: none\"
                 data-symfony--ux-dropzone--dropzone-target=\"previewImage\"></div>

            <div data-symfony--ux-dropzone--dropzone-target=\"previewFilename\" class=\"dropzone-preview-filename\"></div>
        </div>
    </div>
{%- endblock %}
", "@Dropzone/form_theme.html.twig", "/Users/oura/Desktop/lumi_design/vendor/symfony/ux-dropzone/templates/form_theme.html.twig");
    }
}
