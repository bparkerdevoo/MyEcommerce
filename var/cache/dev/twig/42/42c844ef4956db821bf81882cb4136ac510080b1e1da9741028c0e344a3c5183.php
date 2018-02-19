<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_62e8031c9d389d5d42ddb664d4d450f6a3f7da87f7c689ff3fffc5fffd9355cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b4db763e406078e2dda7df137ac98771086f6286355294cd15cf991257413e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4db763e406078e2dda7df137ac98771086f6286355294cd15cf991257413e0->enter($__internal_0b4db763e406078e2dda7df137ac98771086f6286355294cd15cf991257413e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        $__internal_ae2f0913e8ab7ee0018ecfa174a44f9da8b7c044bc43e9e9205e5e2aa5737c6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae2f0913e8ab7ee0018ecfa174a44f9da8b7c044bc43e9e9205e5e2aa5737c6d->enter($__internal_ae2f0913e8ab7ee0018ecfa174a44f9da8b7c044bc43e9e9205e5e2aa5737c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 14, $this->getSourceContext()); })()), "options", array()), "editable", array())) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->getSourceContext()); })()), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 14, $this->getSourceContext()); })())), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 15, $this->getSourceContext()); })()), "type", array()));
        // line 17
        if (((isset($context["isEditable"]) || array_key_exists("isEditable", $context) ? $context["isEditable"] : (function () { throw new Twig_Error_Runtime('Variable "isEditable" does not exist.', 17, $this->getSourceContext()); })()) && (isset($context["xEditableType"]) || array_key_exists("xEditableType", $context) ? $context["xEditableType"] : (function () { throw new Twig_Error_Runtime('Variable "xEditableType" does not exist.', 17, $this->getSourceContext()); })()))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b4db763e406078e2dda7df137ac98771086f6286355294cd15cf991257413e0->leave($__internal_0b4db763e406078e2dda7df137ac98771086f6286355294cd15cf991257413e0_prof);

        
        $__internal_ae2f0913e8ab7ee0018ecfa174a44f9da8b7c044bc43e9e9205e5e2aa5737c6d->leave($__internal_ae2f0913e8ab7ee0018ecfa174a44f9da8b7c044bc43e9e9205e5e2aa5737c6d_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_f082432f9b4688198a7584193e5f9a1384bc7591288b695747a120f25ec1ca4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f082432f9b4688198a7584193e5f9a1384bc7591288b695747a120f25ec1ca4d->enter($__internal_f082432f9b4688198a7584193e5f9a1384bc7591288b695747a120f25ec1ca4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_50dc4d282fd55ab206ad2c2fc8a5d026e9100fdcfa29d4f85d6403ed1f80f8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50dc4d282fd55ab206ad2c2fc8a5d026e9100fdcfa29d4f85d6403ed1f80f8ce->enter($__internal_50dc4d282fd55ab206ad2c2fc8a5d026e9100fdcfa29d4f85d6403ed1f80f8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_50dc4d282fd55ab206ad2c2fc8a5d026e9100fdcfa29d4f85d6403ed1f80f8ce->leave($__internal_50dc4d282fd55ab206ad2c2fc8a5d026e9100fdcfa29d4f85d6403ed1f80f8ce_prof);

        
        $__internal_f082432f9b4688198a7584193e5f9a1384bc7591288b695747a120f25ec1ca4d->leave($__internal_f082432f9b4688198a7584193e5f9a1384bc7591288b695747a120f25ec1ca4d_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_468e29bd84a1dd76d5cb6cbc404d6dbc274d058bab474a93e85e81921ad90c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468e29bd84a1dd76d5cb6cbc404d6dbc274d058bab474a93e85e81921ad90c8f->enter($__internal_468e29bd84a1dd76d5cb6cbc404d6dbc274d058bab474a93e85e81921ad90c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_06a75bc9ad24b5e655e99d8dad86ec7992ea3eda497d1fcb139b6ede1021b112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a75bc9ad24b5e655e99d8dad86ec7992ea3eda497d1fcb139b6ede1021b112->enter($__internal_06a75bc9ad24b5e655e99d8dad86ec7992ea3eda497d1fcb139b6ede1021b112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        $this->loadTemplate("@SonataAdmin/CRUD/display_boolean.html.twig", "SonataAdminBundle:CRUD:list_boolean.html.twig", 27)->display($context);
        
        $__internal_06a75bc9ad24b5e655e99d8dad86ec7992ea3eda497d1fcb139b6ede1021b112->leave($__internal_06a75bc9ad24b5e655e99d8dad86ec7992ea3eda497d1fcb139b6ede1021b112_prof);

        
        $__internal_468e29bd84a1dd76d5cb6cbc404d6dbc274d058bab474a93e85e81921ad90c8f->leave($__internal_468e29bd84a1dd76d5cb6cbc404d6dbc274d058bab474a93e85e81921ad90c8f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  82 => 26,  72 => 23,  65 => 21,  60 => 20,  57 => 19,  48 => 18,  38 => 12,  35 => 17,  33 => 15,  31 => 14,  19 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.hasAccess('edit', object) %}
{% set xEditableType = field_description.type|sonata_xeditable_type %}

{% if isEditable and xEditableType %}
    {% block field_span_attributes %}
        {% spaceless %}
            {{ parent() }}
            data-source=\"[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]\"
        {% endspaceless %}
    {% endblock %}
{% endif %}

{% block field %}
    {%- include '@SonataAdmin/CRUD/display_boolean.html.twig' -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_boolean.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_boolean.html.twig");
    }
}
