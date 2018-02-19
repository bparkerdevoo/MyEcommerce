<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_04055235c54299a6798c92667f40b8f6065c7c844e8efeef278afad20f122712 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c07684e2ef211fe5108a0142705cfea799bf0260f7b98f5f364e723f6776847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c07684e2ef211fe5108a0142705cfea799bf0260f7b98f5f364e723f6776847->enter($__internal_4c07684e2ef211fe5108a0142705cfea799bf0260f7b98f5f364e723f6776847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $__internal_100a367c94f37e4e3dfcc633392fc6a3c856f341c2b4b75f6816eb3784067f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100a367c94f37e4e3dfcc633392fc6a3c856f341c2b4b75f6816eb3784067f71->enter($__internal_100a367c94f37e4e3dfcc633392fc6a3c856f341c2b4b75f6816eb3784067f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c07684e2ef211fe5108a0142705cfea799bf0260f7b98f5f364e723f6776847->leave($__internal_4c07684e2ef211fe5108a0142705cfea799bf0260f7b98f5f364e723f6776847_prof);

        
        $__internal_100a367c94f37e4e3dfcc633392fc6a3c856f341c2b4b75f6816eb3784067f71->leave($__internal_100a367c94f37e4e3dfcc633392fc6a3c856f341c2b4b75f6816eb3784067f71_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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

{% extends '@SonataAdmin/CRUD/base_show_compare.html.twig' %}
", "SonataAdminBundle:CRUD:show_compare.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_compare.html.twig");
    }
}
