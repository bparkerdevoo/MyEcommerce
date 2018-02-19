<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_2884504aa1e110fea973a767117e6979ef3cec375de4557f890ff8e83da42a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
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
        $__internal_40ebccacb636466dbe872d03f6829b1d1b593ef5f6a227632ddc1234aa006763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ebccacb636466dbe872d03f6829b1d1b593ef5f6a227632ddc1234aa006763->enter($__internal_40ebccacb636466dbe872d03f6829b1d1b593ef5f6a227632ddc1234aa006763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $__internal_c6650538841f551510d6f212a37cebb1173a24470ae900f1322cce564ef15894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6650538841f551510d6f212a37cebb1173a24470ae900f1322cce564ef15894->enter($__internal_c6650538841f551510d6f212a37cebb1173a24470ae900f1322cce564ef15894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40ebccacb636466dbe872d03f6829b1d1b593ef5f6a227632ddc1234aa006763->leave($__internal_40ebccacb636466dbe872d03f6829b1d1b593ef5f6a227632ddc1234aa006763_prof);

        
        $__internal_c6650538841f551510d6f212a37cebb1173a24470ae900f1322cce564ef15894->leave($__internal_c6650538841f551510d6f212a37cebb1173a24470ae900f1322cce564ef15894_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_67f4535141e4f626d4fbc0ca6c7a8da9ad99d0041d691b6d4ff014faea095f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f4535141e4f626d4fbc0ca6c7a8da9ad99d0041d691b6d4ff014faea095f90->enter($__internal_67f4535141e4f626d4fbc0ca6c7a8da9ad99d0041d691b6d4ff014faea095f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_33cf4bf5827d0e2dcea9e4a1c25888f7f5712661fbf80a1c5d6b9606bcd19938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33cf4bf5827d0e2dcea9e4a1c25888f7f5712661fbf80a1c5d6b9606bcd19938->enter($__internal_33cf4bf5827d0e2dcea9e4a1c25888f7f5712661fbf80a1c5d6b9606bcd19938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_33cf4bf5827d0e2dcea9e4a1c25888f7f5712661fbf80a1c5d6b9606bcd19938->leave($__internal_33cf4bf5827d0e2dcea9e4a1c25888f7f5712661fbf80a1c5d6b9606bcd19938_prof);

        
        $__internal_67f4535141e4f626d4fbc0ca6c7a8da9ad99d0041d691b6d4ff014faea095f90->leave($__internal_67f4535141e4f626d4fbc0ca6c7a8da9ad99d0041d691b6d4ff014faea095f90_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_date.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_date.html.twig");
    }
}
