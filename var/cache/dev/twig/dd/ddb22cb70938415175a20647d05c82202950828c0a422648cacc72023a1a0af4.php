<?php

/* SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_b03c49d7493a357af416253bd1d65c462eb996a6dfa6b2aed554e4f51eef5c2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/Form/filter_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/Form/filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_669ac0438dccfe3392687bd6c5d7a071a8571ab3365de6c1779425175093df01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_669ac0438dccfe3392687bd6c5d7a071a8571ab3365de6c1779425175093df01->enter($__internal_669ac0438dccfe3392687bd6c5d7a071a8571ab3365de6c1779425175093df01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $__internal_cfa4a2c45e45061e3c513b031ccee7d8d45486d3b2f6bb780d6121ec35fb6836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfa4a2c45e45061e3c513b031ccee7d8d45486d3b2f6bb780d6121ec35fb6836->enter($__internal_cfa4a2c45e45061e3c513b031ccee7d8d45486d3b2f6bb780d6121ec35fb6836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_669ac0438dccfe3392687bd6c5d7a071a8571ab3365de6c1779425175093df01->leave($__internal_669ac0438dccfe3392687bd6c5d7a071a8571ab3365de6c1779425175093df01_prof);

        
        $__internal_cfa4a2c45e45061e3c513b031ccee7d8d45486d3b2f6bb780d6121ec35fb6836->leave($__internal_cfa4a2c45e45061e3c513b031ccee7d8d45486d3b2f6bb780d6121ec35fb6836_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig";
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

{% extends '@SonataAdmin/Form/filter_admin_fields.html.twig' %}
", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
