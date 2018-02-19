<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_4a64a713db5811215b8a2a569248382f2aa8889ea6908b2a43bbafdb6cbfab4f extends Twig_Template
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
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2e9e4971afedd15151a86340ec560c061429a6560155087d8d385f417c89024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e9e4971afedd15151a86340ec560c061429a6560155087d8d385f417c89024->enter($__internal_a2e9e4971afedd15151a86340ec560c061429a6560155087d8d385f417c89024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $__internal_f063478be84d74e3579f502ddd7c5bb09e9c60174117bf38ca717f319c4f4b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f063478be84d74e3579f502ddd7c5bb09e9c60174117bf38ca717f319c4f4b5b->enter($__internal_f063478be84d74e3579f502ddd7c5bb09e9c60174117bf38ca717f319c4f4b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2e9e4971afedd15151a86340ec560c061429a6560155087d8d385f417c89024->leave($__internal_a2e9e4971afedd15151a86340ec560c061429a6560155087d8d385f417c89024_prof);

        
        $__internal_f063478be84d74e3579f502ddd7c5bb09e9c60174117bf38ca717f319c4f4b5b->leave($__internal_f063478be84d74e3579f502ddd7c5bb09e9c60174117bf38ca717f319c4f4b5b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_47a734fe1b6d657e6895813a8a4bf2f8cc3156edf8039830642946ff4a065aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47a734fe1b6d657e6895813a8a4bf2f8cc3156edf8039830642946ff4a065aed->enter($__internal_47a734fe1b6d657e6895813a8a4bf2f8cc3156edf8039830642946ff4a065aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5d96e9f47cab476507f48718133594de72866fa6525fda166c83d3b674647a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d96e9f47cab476507f48718133594de72866fa6525fda166c83d3b674647a04->enter($__internal_5d96e9f47cab476507f48718133594de72866fa6525fda166c83d3b674647a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "translationDomain", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf((isset($context["valueFormat"]) || array_key_exists("valueFormat", $context) ? $context["valueFormat"] : (function () { throw new Twig_Error_Runtime('Variable "valueFormat" does not exist.', 18, $this->getSourceContext()); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })())), array(), (isset($context["translationDomain"]) || array_key_exists("translationDomain", $context) ? $context["translationDomain"] : (function () { throw new Twig_Error_Runtime('Variable "translationDomain" does not exist.', 18, $this->getSourceContext()); })())), "html", null, true);
        echo "
";
        
        $__internal_5d96e9f47cab476507f48718133594de72866fa6525fda166c83d3b674647a04->leave($__internal_5d96e9f47cab476507f48718133594de72866fa6525fda166c83d3b674647a04_prof);

        
        $__internal_47a734fe1b6d657e6895813a8a4bf2f8cc3156edf8039830642946ff4a065aed->leave($__internal_47a734fe1b6d657e6895813a8a4bf2f8cc3156edf8039830642946ff4a065aed_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field%}
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
", "SonataAdminBundle:CRUD:list_trans.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_trans.html.twig");
    }
}
