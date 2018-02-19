<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_3ebacd51bed5240e1c85472350fd734ffb016aa70f007ed5a897bb1917cc3761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("@SonataAdmin/Button/create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/Button/create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63edbeeccdfea02b476a5f54e7847f6118939cc75b702b3eb648d634f0cc65bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63edbeeccdfea02b476a5f54e7847f6118939cc75b702b3eb648d634f0cc65bd->enter($__internal_63edbeeccdfea02b476a5f54e7847f6118939cc75b702b3eb648d634f0cc65bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $__internal_78d53e516f3ecca8f82fe3066a07f3d29929e9558576e495904d18df9acd664a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d53e516f3ecca8f82fe3066a07f3d29929e9558576e495904d18df9acd664a->enter($__internal_78d53e516f3ecca8f82fe3066a07f3d29929e9558576e495904d18df9acd664a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63edbeeccdfea02b476a5f54e7847f6118939cc75b702b3eb648d634f0cc65bd->leave($__internal_63edbeeccdfea02b476a5f54e7847f6118939cc75b702b3eb648d634f0cc65bd_prof);

        
        $__internal_78d53e516f3ecca8f82fe3066a07f3d29929e9558576e495904d18df9acd664a->leave($__internal_78d53e516f3ecca8f82fe3066a07f3d29929e9558576e495904d18df9acd664a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use @SonataAdmin/Button/create_button.html.twig #}

{% extends '@SonataAdmin/Button/create_button.html.twig' %}
", "SonataAdminBundle:Core:create_button.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/Core/create_button.html.twig");
    }
}
