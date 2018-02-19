<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_918125d85013346e3815f6d9dfedc10438f280f932cfbb2aaf491b1ec214a360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataAdminBundle:CRUD:show_trans.html.twig", 11);
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
        $__internal_b707418292d4da6b57b15d20de14fe645f24632f169865dacbfac88ab5b0af51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b707418292d4da6b57b15d20de14fe645f24632f169865dacbfac88ab5b0af51->enter($__internal_b707418292d4da6b57b15d20de14fe645f24632f169865dacbfac88ab5b0af51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $__internal_dc68f9a0ce49225017d73705095009ca770149f461cd9a7c0f9c5f5ad78bf06f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc68f9a0ce49225017d73705095009ca770149f461cd9a7c0f9c5f5ad78bf06f->enter($__internal_dc68f9a0ce49225017d73705095009ca770149f461cd9a7c0f9c5f5ad78bf06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b707418292d4da6b57b15d20de14fe645f24632f169865dacbfac88ab5b0af51->leave($__internal_b707418292d4da6b57b15d20de14fe645f24632f169865dacbfac88ab5b0af51_prof);

        
        $__internal_dc68f9a0ce49225017d73705095009ca770149f461cd9a7c0f9c5f5ad78bf06f->leave($__internal_dc68f9a0ce49225017d73705095009ca770149f461cd9a7c0f9c5f5ad78bf06f_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_28a22cea003bbd0fd7329173dee72052aa357857acb82679309c7e8e60434b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a22cea003bbd0fd7329173dee72052aa357857acb82679309c7e8e60434b25->enter($__internal_28a22cea003bbd0fd7329173dee72052aa357857acb82679309c7e8e60434b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_2ad991fbc9a30cbb72025cc8be976528dc3cab9eb2f05077a1dc5881a4eb885f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad991fbc9a30cbb72025cc8be976528dc3cab9eb2f05077a1dc5881a4eb885f->enter($__internal_2ad991fbc9a30cbb72025cc8be976528dc3cab9eb2f05077a1dc5881a4eb885f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 17, $this->getSourceContext()); })()), array(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 17, $this->getSourceContext()); })()), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 20, $this->getSourceContext()); })()), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 21, $this->getSourceContext()); })());
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_2ad991fbc9a30cbb72025cc8be976528dc3cab9eb2f05077a1dc5881a4eb885f->leave($__internal_2ad991fbc9a30cbb72025cc8be976528dc3cab9eb2f05077a1dc5881a4eb885f_prof);

        
        $__internal_28a22cea003bbd0fd7329173dee72052aa357857acb82679309c7e8e60434b25->leave($__internal_28a22cea003bbd0fd7329173dee72052aa357857acb82679309c7e8e60434b25_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  69 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  40 => 13,  11 => 11,);
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
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_trans.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_trans.html.twig");
    }
}
