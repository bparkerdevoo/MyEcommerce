<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_22219134a3bad0054640e021bc13af9a2529510b189bcd83ca7d572531164bff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd4036d5e88938fd327f4417e0658bde8d7249acb195b7c1e4cb838ba82d42ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4036d5e88938fd327f4417e0658bde8d7249acb195b7c1e4cb838ba82d42ed->enter($__internal_bd4036d5e88938fd327f4417e0658bde8d7249acb195b7c1e4cb838ba82d42ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_82df0b1e4c43e39163df5421f0c5462900ac7a586a8ed524d48d297be6c2f1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82df0b1e4c43e39163df5421f0c5462900ac7a586a8ed524d48d297be6c2f1a3->enter($__internal_82df0b1e4c43e39163df5421f0c5462900ac7a586a8ed524d48d297be6c2f1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd4036d5e88938fd327f4417e0658bde8d7249acb195b7c1e4cb838ba82d42ed->leave($__internal_bd4036d5e88938fd327f4417e0658bde8d7249acb195b7c1e4cb838ba82d42ed_prof);

        
        $__internal_82df0b1e4c43e39163df5421f0c5462900ac7a586a8ed524d48d297be6c2f1a3->leave($__internal_82df0b1e4c43e39163df5421f0c5462900ac7a586a8ed524d48d297be6c2f1a3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends '@SonataAdmin/CRUD/base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list.html.twig");
    }
}
