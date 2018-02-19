<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_d4c60ae8a186d9275d728eda13a96e339a1ebf2959f24c128e0a49c9a07f6fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_274b5ac5f4d8f2d20652a7f7fda792f53e30d72f085a153eeefa37544d6d7851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_274b5ac5f4d8f2d20652a7f7fda792f53e30d72f085a153eeefa37544d6d7851->enter($__internal_274b5ac5f4d8f2d20652a7f7fda792f53e30d72f085a153eeefa37544d6d7851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $__internal_2e3108260eef709da73f997557430e331c0b7dfc9f8e9ef8a764114c965d698e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3108260eef709da73f997557430e331c0b7dfc9f8e9ef8a764114c965d698e->enter($__internal_2e3108260eef709da73f997557430e331c0b7dfc9f8e9ef8a764114c965d698e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_274b5ac5f4d8f2d20652a7f7fda792f53e30d72f085a153eeefa37544d6d7851->leave($__internal_274b5ac5f4d8f2d20652a7f7fda792f53e30d72f085a153eeefa37544d6d7851_prof);

        
        $__internal_2e3108260eef709da73f997557430e331c0b7dfc9f8e9ef8a764114c965d698e->leave($__internal_2e3108260eef709da73f997557430e331c0b7dfc9f8e9ef8a764114c965d698e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends '@SonataAdmin/CRUD/base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit.html.twig");
    }
}
