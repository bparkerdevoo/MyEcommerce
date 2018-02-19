<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_08058c38f58e0171e60235b7c0419cabaa779f65c3d0d0dc19f8ad94caf28dce extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71f7123164c9daea8e2a768aeaa61cab26abe330e0c8d883dd91ad5638b11082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f7123164c9daea8e2a768aeaa61cab26abe330e0c8d883dd91ad5638b11082->enter($__internal_71f7123164c9daea8e2a768aeaa61cab26abe330e0c8d883dd91ad5638b11082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $__internal_60edd1c8cbb36552f38e0ec1ccc9524c4dd95d4aa2d0f54faad1dd88b5652c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60edd1c8cbb36552f38e0ec1ccc9524c4dd95d4aa2d0f54faad1dd88b5652c5a->enter($__internal_60edd1c8cbb36552f38e0ec1ccc9524c4dd95d4aa2d0f54faad1dd88b5652c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71f7123164c9daea8e2a768aeaa61cab26abe330e0c8d883dd91ad5638b11082->leave($__internal_71f7123164c9daea8e2a768aeaa61cab26abe330e0c8d883dd91ad5638b11082_prof);

        
        $__internal_60edd1c8cbb36552f38e0ec1ccc9524c4dd95d4aa2d0f54faad1dd88b5652c5a->leave($__internal_60edd1c8cbb36552f38e0ec1ccc9524c4dd95d4aa2d0f54faad1dd88b5652c5a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cfd6e206d2962ca1e61262b34b576c4b8610d6c78eb55b148f47ee1ba21d986c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd6e206d2962ca1e61262b34b576c4b8610d6c78eb55b148f47ee1ba21d986c->enter($__internal_cfd6e206d2962ca1e61262b34b576c4b8610d6c78eb55b148f47ee1ba21d986c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_83a31cede74f01634d5ef0787439f534a75a75b2c60b377f0a2014b5e4c0be07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a31cede74f01634d5ef0787439f534a75a75b2c60b377f0a2014b5e4c0be07->enter($__internal_83a31cede74f01634d5ef0787439f534a75a75b2c60b377f0a2014b5e4c0be07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo " %
";
        
        $__internal_83a31cede74f01634d5ef0787439f534a75a75b2c60b377f0a2014b5e4c0be07->leave($__internal_83a31cede74f01634d5ef0787439f534a75a75b2c60b377f0a2014b5e4c0be07_prof);

        
        $__internal_cfd6e206d2962ca1e61262b34b576c4b8610d6c78eb55b148f47ee1ba21d986c->leave($__internal_cfd6e206d2962ca1e61262b34b576c4b8610d6c78eb55b148f47ee1ba21d986c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_percent.html.twig");
    }
}
