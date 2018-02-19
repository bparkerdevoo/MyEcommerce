<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_c883c641240218e509663c863b473651abcf78b78f19b551f9d26fda9d9efd1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1545934d6dfee52d77f0d14d022d53111d2edbd5064b72bf9de7625e75b34f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1545934d6dfee52d77f0d14d022d53111d2edbd5064b72bf9de7625e75b34f99->enter($__internal_1545934d6dfee52d77f0d14d022d53111d2edbd5064b72bf9de7625e75b34f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $__internal_4e5a20895cd8c27a8138fab7570aff6710df0d5c91a6b59db1e79c0e450b4e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5a20895cd8c27a8138fab7570aff6710df0d5c91a6b59db1e79c0e450b4e76->enter($__internal_4e5a20895cd8c27a8138fab7570aff6710df0d5c91a6b59db1e79c0e450b4e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1545934d6dfee52d77f0d14d022d53111d2edbd5064b72bf9de7625e75b34f99->leave($__internal_1545934d6dfee52d77f0d14d022d53111d2edbd5064b72bf9de7625e75b34f99_prof);

        
        $__internal_4e5a20895cd8c27a8138fab7570aff6710df0d5c91a6b59db1e79c0e450b4e76->leave($__internal_4e5a20895cd8c27a8138fab7570aff6710df0d5c91a6b59db1e79c0e450b4e76_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/CRUD/base_list_inner_row.html.twig' %}
", "SonataAdminBundle:CRUD:list_inner_row.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
