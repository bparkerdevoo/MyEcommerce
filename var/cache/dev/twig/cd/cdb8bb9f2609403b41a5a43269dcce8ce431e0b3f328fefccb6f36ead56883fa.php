<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_a98a6fdb611c106f3cf762a565291ecc43c97085767c3bdf96a9f140f48853ea extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9e224667f42ba82e17835c4a975b67848cbb05444dd0cd3719422606a48c730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e224667f42ba82e17835c4a975b67848cbb05444dd0cd3719422606a48c730->enter($__internal_b9e224667f42ba82e17835c4a975b67848cbb05444dd0cd3719422606a48c730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $__internal_8eea1df4c0a95b71e53ed276ced7c3a88a9102294a638138205099f15e09034b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eea1df4c0a95b71e53ed276ced7c3a88a9102294a638138205099f15e09034b->enter($__internal_8eea1df4c0a95b71e53ed276ced7c3a88a9102294a638138205099f15e09034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e224667f42ba82e17835c4a975b67848cbb05444dd0cd3719422606a48c730->leave($__internal_b9e224667f42ba82e17835c4a975b67848cbb05444dd0cd3719422606a48c730_prof);

        
        $__internal_8eea1df4c0a95b71e53ed276ced7c3a88a9102294a638138205099f15e09034b->leave($__internal_8eea1df4c0a95b71e53ed276ced7c3a88a9102294a638138205099f15e09034b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1fae68539e0a948006d06a4fec4e9ebd93f9bf325306c3870e17271197be3c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fae68539e0a948006d06a4fec4e9ebd93f9bf325306c3870e17271197be3c26->enter($__internal_1fae68539e0a948006d06a4fec4e9ebd93f9bf325306c3870e17271197be3c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8ab2212c2dc3aac276b6e840a3823991ad744d8cdb050ebe4a9f3eb9583b915f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab2212c2dc3aac276b6e840a3823991ad744d8cdb050ebe4a9f3eb9583b915f->enter($__internal_8ab2212c2dc3aac276b6e840a3823991ad744d8cdb050ebe4a9f3eb9583b915f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_8ab2212c2dc3aac276b6e840a3823991ad744d8cdb050ebe4a9f3eb9583b915f->leave($__internal_8ab2212c2dc3aac276b6e840a3823991ad744d8cdb050ebe4a9f3eb9583b915f_prof);

        
        $__internal_1fae68539e0a948006d06a4fec4e9ebd93f9bf325306c3870e17271197be3c26->leave($__internal_1fae68539e0a948006d06a4fec4e9ebd93f9bf325306c3870e17271197be3c26_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_time.html.twig");
    }
}
