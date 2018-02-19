<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_76f5e218ebad6c2e06cfe21021a69d4c8dd6a930881ad980ac971e914c5a8385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataAdminBundle:CRUD:show_datetime.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab624d4e3699939a2d50d7515d06cb5bf33358a63b5afd2b0f25b5a43f631680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab624d4e3699939a2d50d7515d06cb5bf33358a63b5afd2b0f25b5a43f631680->enter($__internal_ab624d4e3699939a2d50d7515d06cb5bf33358a63b5afd2b0f25b5a43f631680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $__internal_f0d84cc47cc39e7334afc3a6cf4783e16e3eabd999c0258572b3572b8394e624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d84cc47cc39e7334afc3a6cf4783e16e3eabd999c0258572b3572b8394e624->enter($__internal_f0d84cc47cc39e7334afc3a6cf4783e16e3eabd999c0258572b3572b8394e624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab624d4e3699939a2d50d7515d06cb5bf33358a63b5afd2b0f25b5a43f631680->leave($__internal_ab624d4e3699939a2d50d7515d06cb5bf33358a63b5afd2b0f25b5a43f631680_prof);

        
        $__internal_f0d84cc47cc39e7334afc3a6cf4783e16e3eabd999c0258572b3572b8394e624->leave($__internal_f0d84cc47cc39e7334afc3a6cf4783e16e3eabd999c0258572b3572b8394e624_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_539890aa2224e6d2d2a1b53f248d1990d6823f15547363aa319633a37c26876f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539890aa2224e6d2d2a1b53f248d1990d6823f15547363aa319633a37c26876f->enter($__internal_539890aa2224e6d2d2a1b53f248d1990d6823f15547363aa319633a37c26876f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6bd9b912493224407bd7ac1db1a46e80204809228078f30db789fc6878393353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd9b912493224407bd7ac1db1a46e80204809228078f30db789fc6878393353->enter($__internal_6bd9b912493224407bd7ac1db1a46e80204809228078f30db789fc6878393353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 18, $this->getSourceContext()); })()), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 20, $this->getSourceContext()); })())), "html", null, true);
        }
        
        $__internal_6bd9b912493224407bd7ac1db1a46e80204809228078f30db789fc6878393353->leave($__internal_6bd9b912493224407bd7ac1db1a46e80204809228078f30db789fc6878393353_prof);

        
        $__internal_539890aa2224e6d2d2a1b53f248d1990d6823f15547363aa319633a37c26876f->leave($__internal_539890aa2224e6d2d2a1b53f248d1990d6823f15547363aa319633a37c26876f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  55 => 18,  53 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/CRUD/base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_datetime.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_datetime.html.twig");
    }
}
