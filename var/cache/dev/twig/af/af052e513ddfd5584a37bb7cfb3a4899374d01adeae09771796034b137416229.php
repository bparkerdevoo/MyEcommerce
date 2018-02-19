<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_5442537c8448e2e2152c7184427ad7d2457b006e91ef5fe010f62748616c5491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_d0c175e436bcb1d4c364081486322ceeee4d4da5033d36b1d00dedb2b1e61e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c175e436bcb1d4c364081486322ceeee4d4da5033d36b1d00dedb2b1e61e92->enter($__internal_d0c175e436bcb1d4c364081486322ceeee4d4da5033d36b1d00dedb2b1e61e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $__internal_4cea144c0c1a7d7cf9b2eae73bdf72f4cddd24a7a6a01c7106ffe8274f0bad1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cea144c0c1a7d7cf9b2eae73bdf72f4cddd24a7a6a01c7106ffe8274f0bad1d->enter($__internal_4cea144c0c1a7d7cf9b2eae73bdf72f4cddd24a7a6a01c7106ffe8274f0bad1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0c175e436bcb1d4c364081486322ceeee4d4da5033d36b1d00dedb2b1e61e92->leave($__internal_d0c175e436bcb1d4c364081486322ceeee4d4da5033d36b1d00dedb2b1e61e92_prof);

        
        $__internal_4cea144c0c1a7d7cf9b2eae73bdf72f4cddd24a7a6a01c7106ffe8274f0bad1d->leave($__internal_4cea144c0c1a7d7cf9b2eae73bdf72f4cddd24a7a6a01c7106ffe8274f0bad1d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6ef0e10d50504d20c13fd52a47d2c8295e51c2e3bc5d0d7fa0590440d71717fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef0e10d50504d20c13fd52a47d2c8295e51c2e3bc5d0d7fa0590440d71717fc->enter($__internal_6ef0e10d50504d20c13fd52a47d2c8295e51c2e3bc5d0d7fa0590440d71717fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_66d0fca0ef60e17a4a5674cfee648148abd756467a7f2a7e679ffba17b883c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d0fca0ef60e17a4a5674cfee648148abd756467a7f2a7e679ffba17b883c6b->enter($__internal_66d0fca0ef60e17a4a5674cfee648148abd756467a7f2a7e679ffba17b883c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_66d0fca0ef60e17a4a5674cfee648148abd756467a7f2a7e679ffba17b883c6b->leave($__internal_66d0fca0ef60e17a4a5674cfee648148abd756467a7f2a7e679ffba17b883c6b_prof);

        
        $__internal_6ef0e10d50504d20c13fd52a47d2c8295e51c2e3bc5d0d7fa0590440d71717fc->leave($__internal_6ef0e10d50504d20c13fd52a47d2c8295e51c2e3bc5d0d7fa0590440d71717fc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_currency.html.twig");
    }
}
