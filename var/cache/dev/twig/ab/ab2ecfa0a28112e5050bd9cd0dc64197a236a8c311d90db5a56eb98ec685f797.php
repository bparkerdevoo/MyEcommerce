<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_c3a7322ed436a20fed91b529939bedccd0e41f6fbef093d0fb3a3fdab69cee22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56e4a626330e4f1c71e6da7342a0837016503b4b8e33a6da9c11bdc04741a9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e4a626330e4f1c71e6da7342a0837016503b4b8e33a6da9c11bdc04741a9de->enter($__internal_56e4a626330e4f1c71e6da7342a0837016503b4b8e33a6da9c11bdc04741a9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $__internal_072a40e59c5df5fa61bbbe3b770a02483137e92e15e6576c9bff29566aabeb50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072a40e59c5df5fa61bbbe3b770a02483137e92e15e6576c9bff29566aabeb50->enter($__internal_072a40e59c5df5fa61bbbe3b770a02483137e92e15e6576c9bff29566aabeb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56e4a626330e4f1c71e6da7342a0837016503b4b8e33a6da9c11bdc04741a9de->leave($__internal_56e4a626330e4f1c71e6da7342a0837016503b4b8e33a6da9c11bdc04741a9de_prof);

        
        $__internal_072a40e59c5df5fa61bbbe3b770a02483137e92e15e6576c9bff29566aabeb50->leave($__internal_072a40e59c5df5fa61bbbe3b770a02483137e92e15e6576c9bff29566aabeb50_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8e0d59f4735d43de45ef278ef1823072b8cd22097f4e6386a0936aef3c5a9419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e0d59f4735d43de45ef278ef1823072b8cd22097f4e6386a0936aef3c5a9419->enter($__internal_8e0d59f4735d43de45ef278ef1823072b8cd22097f4e6386a0936aef3c5a9419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a7af02dfcc9adc70f57a5d44b6d30cbbc536fea11489ce6862bd8d3e78961d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7af02dfcc9adc70f57a5d44b6d30cbbc536fea11489ce6862bd8d3e78961d2f->enter($__internal_a7af02dfcc9adc70f57a5d44b6d30cbbc536fea11489ce6862bd8d3e78961d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 20, $this->getSourceContext()); })()), "F j, Y"), "html", null, true);
        }
        
        $__internal_a7af02dfcc9adc70f57a5d44b6d30cbbc536fea11489ce6862bd8d3e78961d2f->leave($__internal_a7af02dfcc9adc70f57a5d44b6d30cbbc536fea11489ce6862bd8d3e78961d2f_prof);

        
        $__internal_8e0d59f4735d43de45ef278ef1823072b8cd22097f4e6386a0936aef3c5a9419->leave($__internal_8e0d59f4735d43de45ef278ef1823072b8cd22097f4e6386a0936aef3c5a9419_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_date.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_date.html.twig");
    }
}