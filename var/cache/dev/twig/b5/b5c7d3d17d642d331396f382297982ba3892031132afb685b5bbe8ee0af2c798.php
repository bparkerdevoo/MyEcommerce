<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_49c5c6d94532fbe91b2aeed28bcfa0b95e63ec7b2022c959f93910e661e92453 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_322e5a655e5fe0a17b6b5cf2245271f2826233139a2f925af007be261f01deef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322e5a655e5fe0a17b6b5cf2245271f2826233139a2f925af007be261f01deef->enter($__internal_322e5a655e5fe0a17b6b5cf2245271f2826233139a2f925af007be261f01deef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $__internal_0945e793372c3c1d97a90f29167b9ee81800d55cc6b02c419fea6afdddd247b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0945e793372c3c1d97a90f29167b9ee81800d55cc6b02c419fea6afdddd247b7->enter($__internal_0945e793372c3c1d97a90f29167b9ee81800d55cc6b02c419fea6afdddd247b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_322e5a655e5fe0a17b6b5cf2245271f2826233139a2f925af007be261f01deef->leave($__internal_322e5a655e5fe0a17b6b5cf2245271f2826233139a2f925af007be261f01deef_prof);

        
        $__internal_0945e793372c3c1d97a90f29167b9ee81800d55cc6b02c419fea6afdddd247b7->leave($__internal_0945e793372c3c1d97a90f29167b9ee81800d55cc6b02c419fea6afdddd247b7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_81f723512089ca9eb2c71fd461afb53dafdb695f5b0948cadba9da7eeaeb49ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f723512089ca9eb2c71fd461afb53dafdb695f5b0948cadba9da7eeaeb49ac->enter($__internal_81f723512089ca9eb2c71fd461afb53dafdb695f5b0948cadba9da7eeaeb49ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_69ce3d624c5397fd278f61f29a94445a4ba3d1fdbbce78d4bb98e5c4c9fe78a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ce3d624c5397fd278f61f29a94445a4ba3d1fdbbce78d4bb98e5c4c9fe78a7->enter($__internal_69ce3d624c5397fd278f61f29a94445a4ba3d1fdbbce78d4bb98e5c4c9fe78a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_69ce3d624c5397fd278f61f29a94445a4ba3d1fdbbce78d4bb98e5c4c9fe78a7->leave($__internal_69ce3d624c5397fd278f61f29a94445a4ba3d1fdbbce78d4bb98e5c4c9fe78a7_prof);

        
        $__internal_81f723512089ca9eb2c71fd461afb53dafdb695f5b0948cadba9da7eeaeb49ac->leave($__internal_81f723512089ca9eb2c71fd461afb53dafdb695f5b0948cadba9da7eeaeb49ac_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/CRUD/base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_percent.html.twig");
    }
}
