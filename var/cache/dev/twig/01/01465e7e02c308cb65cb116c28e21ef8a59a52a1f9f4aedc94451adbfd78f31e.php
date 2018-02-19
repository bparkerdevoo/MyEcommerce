<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_2e1ac49e91570dd4dbae330c0f9b160a3add9f899e9ec8d9794d5aa9de5a5791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/Pager/base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/Pager/base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea6fd7cbf9d72ed820c740cfb5b419820acdc1ea04f707d3fe5577afd4538cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6fd7cbf9d72ed820c740cfb5b419820acdc1ea04f707d3fe5577afd4538cd7->enter($__internal_ea6fd7cbf9d72ed820c740cfb5b419820acdc1ea04f707d3fe5577afd4538cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $__internal_0a155b4d12d1546147afea6f33730b76b4236ebe43828939d610b82132d02ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a155b4d12d1546147afea6f33730b76b4236ebe43828939d610b82132d02ba8->enter($__internal_0a155b4d12d1546147afea6f33730b76b4236ebe43828939d610b82132d02ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea6fd7cbf9d72ed820c740cfb5b419820acdc1ea04f707d3fe5577afd4538cd7->leave($__internal_ea6fd7cbf9d72ed820c740cfb5b419820acdc1ea04f707d3fe5577afd4538cd7_prof);

        
        $__internal_0a155b4d12d1546147afea6f33730b76b4236ebe43828939d610b82132d02ba8->leave($__internal_0a155b4d12d1546147afea6f33730b76b4236ebe43828939d610b82132d02ba8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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

{% extends '@SonataAdmin/Pager/base_links.html.twig' %}
", "SonataAdminBundle:Pager:links.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/Pager/links.html.twig");
    }
}
