<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_b15d88328f9a7f08470773eda4be4c33e0dea0190e6ffa4a9ac95581def77648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_a4aea127d18fc8db7f80b69997f81da0b19a8788dc49907b3f1d37b45074d45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4aea127d18fc8db7f80b69997f81da0b19a8788dc49907b3f1d37b45074d45f->enter($__internal_a4aea127d18fc8db7f80b69997f81da0b19a8788dc49907b3f1d37b45074d45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $__internal_8d13f2ccc70d20dfcfb09c4ce96b9ccfede4b2ffb75d671e082095f6c2d27877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d13f2ccc70d20dfcfb09c4ce96b9ccfede4b2ffb75d671e082095f6c2d27877->enter($__internal_8d13f2ccc70d20dfcfb09c4ce96b9ccfede4b2ffb75d671e082095f6c2d27877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4aea127d18fc8db7f80b69997f81da0b19a8788dc49907b3f1d37b45074d45f->leave($__internal_a4aea127d18fc8db7f80b69997f81da0b19a8788dc49907b3f1d37b45074d45f_prof);

        
        $__internal_8d13f2ccc70d20dfcfb09c4ce96b9ccfede4b2ffb75d671e082095f6c2d27877->leave($__internal_8d13f2ccc70d20dfcfb09c4ce96b9ccfede4b2ffb75d671e082095f6c2d27877_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b5e83e5b400aa2289206493cd19b1e5a1bd59390928cb8a372277ee5f3a37b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e83e5b400aa2289206493cd19b1e5a1bd59390928cb8a372277ee5f3a37b74->enter($__internal_b5e83e5b400aa2289206493cd19b1e5a1bd59390928cb8a372277ee5f3a37b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_aa4ab879e3f07807dd89ccab5bf087856786e9e093b041496e138215f1c78583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4ab879e3f07807dd89ccab5bf087856786e9e093b041496e138215f1c78583->enter($__internal_aa4ab879e3f07807dd89ccab5bf087856786e9e093b041496e138215f1c78583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/display_boolean.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 15)->display($context);
        
        $__internal_aa4ab879e3f07807dd89ccab5bf087856786e9e093b041496e138215f1c78583->leave($__internal_aa4ab879e3f07807dd89ccab5bf087856786e9e093b041496e138215f1c78583_prof);

        
        $__internal_b5e83e5b400aa2289206493cd19b1e5a1bd59390928cb8a372277ee5f3a37b74->leave($__internal_b5e83e5b400aa2289206493cd19b1e5a1bd59390928cb8a372277ee5f3a37b74_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  40 => 14,  11 => 12,);
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
    {%- include '@SonataAdmin/CRUD/display_boolean.html.twig' -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_boolean.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_boolean.html.twig");
    }
}
