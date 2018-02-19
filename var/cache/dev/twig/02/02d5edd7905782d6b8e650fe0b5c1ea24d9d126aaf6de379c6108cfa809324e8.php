<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_3fbface5855afb835b7d96ebc650bd87d73a7b26824b5a7da7bef2d31a141762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_838e0dd3d839e56b179d7948e266cbdb3fdfacd7509e467e069b4f5aa2fffe93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838e0dd3d839e56b179d7948e266cbdb3fdfacd7509e467e069b4f5aa2fffe93->enter($__internal_838e0dd3d839e56b179d7948e266cbdb3fdfacd7509e467e069b4f5aa2fffe93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $__internal_e1b2454d54c1b3cc8a777f06494abba9e435a5a6049878d3997426b7b9376caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b2454d54c1b3cc8a777f06494abba9e435a5a6049878d3997426b7b9376caa->enter($__internal_e1b2454d54c1b3cc8a777f06494abba9e435a5a6049878d3997426b7b9376caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_838e0dd3d839e56b179d7948e266cbdb3fdfacd7509e467e069b4f5aa2fffe93->leave($__internal_838e0dd3d839e56b179d7948e266cbdb3fdfacd7509e467e069b4f5aa2fffe93_prof);

        
        $__internal_e1b2454d54c1b3cc8a777f06494abba9e435a5a6049878d3997426b7b9376caa->leave($__internal_e1b2454d54c1b3cc8a777f06494abba9e435a5a6049878d3997426b7b9376caa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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

{% extends '@SonataAdmin/CRUD/base_history.html.twig' %}
", "SonataAdminBundle:CRUD:history.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/history.html.twig");
    }
}
