<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_ad8e2a2d7d6e680352d2798548436e212d7ea7e7f2932a3b2f636525bfe01462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 13
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 13);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2795a1b0e4809df5ee60364948947c8f4b08b028ff97a0627807cda3dba714e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2795a1b0e4809df5ee60364948947c8f4b08b028ff97a0627807cda3dba714e->enter($__internal_c2795a1b0e4809df5ee60364948947c8f4b08b028ff97a0627807cda3dba714e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $__internal_a8a1d1f4d7efc1ae11eca0c15e013f1698cf83b4fa26e781b1bee615a1dcd9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a1d1f4d7efc1ae11eca0c15e013f1698cf83b4fa26e781b1bee615a1dcd9fb->enter($__internal_a8a1d1f4d7efc1ae11eca0c15e013f1698cf83b4fa26e781b1bee615a1dcd9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this->loadTemplate("@SonataAdmin/CRUD/base_array_macro.html.twig", "SonataAdminBundle:CRUD:list_array.html.twig", 11);
        // line 13
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2795a1b0e4809df5ee60364948947c8f4b08b028ff97a0627807cda3dba714e->leave($__internal_c2795a1b0e4809df5ee60364948947c8f4b08b028ff97a0627807cda3dba714e_prof);

        
        $__internal_a8a1d1f4d7efc1ae11eca0c15e013f1698cf83b4fa26e781b1bee615a1dcd9fb->leave($__internal_a8a1d1f4d7efc1ae11eca0c15e013f1698cf83b4fa26e781b1bee615a1dcd9fb_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_057c2fced11a69f81c78552784c8bc69a1346cda8cc3b58ae257d32e38134ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_057c2fced11a69f81c78552784c8bc69a1346cda8cc3b58ae257d32e38134ab9->enter($__internal_057c2fced11a69f81c78552784c8bc69a1346cda8cc3b58ae257d32e38134ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e49ad57869a14502963fb92c0a6e22a691df158fbed5b6f288b281b561f5cdcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49ad57869a14502963fb92c0a6e22a691df158fbed5b6f288b281b561f5cdcd->enter($__internal_e49ad57869a14502963fb92c0a6e22a691df158fbed5b6f288b281b561f5cdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["list"]->macro_render_array((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), ( !twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "inline", array())));
        echo "
";
        
        $__internal_e49ad57869a14502963fb92c0a6e22a691df158fbed5b6f288b281b561f5cdcd->leave($__internal_e49ad57869a14502963fb92c0a6e22a691df158fbed5b6f288b281b561f5cdcd_prof);

        
        $__internal_057c2fced11a69f81c78552784c8bc69a1346cda8cc3b58ae257d32e38134ab9->leave($__internal_057c2fced11a69f81c78552784c8bc69a1346cda8cc3b58ae257d32e38134ab9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  42 => 15,  32 => 13,  30 => 11,  18 => 13,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% import '@SonataAdmin/CRUD/base_array_macro.html.twig' as list %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value, field_description.options.inline is not defined or field_description.options.inline) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_array.html.twig");
    }
}
