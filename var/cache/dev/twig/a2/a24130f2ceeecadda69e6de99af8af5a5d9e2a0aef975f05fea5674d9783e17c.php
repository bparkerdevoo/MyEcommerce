<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_2d2c415e41e7d9742213e30e5a52e6a4480e4aa82a7c5ae143e50f1b13b87f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/Pager/base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/Pager/base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02f93cbe5c5b4be45733127cee84264932df5fa314cae099a205ac62922d2343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f93cbe5c5b4be45733127cee84264932df5fa314cae099a205ac62922d2343->enter($__internal_02f93cbe5c5b4be45733127cee84264932df5fa314cae099a205ac62922d2343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_c43b73d5da0b4eb71aff35a1a2138406ce1b87a549c4f4f11916ca3975ad5931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43b73d5da0b4eb71aff35a1a2138406ce1b87a549c4f4f11916ca3975ad5931->enter($__internal_c43b73d5da0b4eb71aff35a1a2138406ce1b87a549c4f4f11916ca3975ad5931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02f93cbe5c5b4be45733127cee84264932df5fa314cae099a205ac62922d2343->leave($__internal_02f93cbe5c5b4be45733127cee84264932df5fa314cae099a205ac62922d2343_prof);

        
        $__internal_c43b73d5da0b4eb71aff35a1a2138406ce1b87a549c4f4f11916ca3975ad5931->leave($__internal_c43b73d5da0b4eb71aff35a1a2138406ce1b87a549c4f4f11916ca3975ad5931_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends '@SonataAdmin/Pager/base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/Pager/results.html.twig");
    }
}
