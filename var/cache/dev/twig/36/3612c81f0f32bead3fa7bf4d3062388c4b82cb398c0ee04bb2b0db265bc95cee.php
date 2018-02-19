<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_2b19724e39efcd24e473fa3f9d61ebba2bd1c07692ef6bd7ec102853e511d8ce extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_882cb7e63ec4c49ced491980f392ebcb9fa3116c541f4cce2c65d687baf9bc95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882cb7e63ec4c49ced491980f392ebcb9fa3116c541f4cce2c65d687baf9bc95->enter($__internal_882cb7e63ec4c49ced491980f392ebcb9fa3116c541f4cce2c65d687baf9bc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $__internal_bc43c8f0e06a80cbfce3f57b287187042c48d3cecbfec9b59120a9410013cba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc43c8f0e06a80cbfce3f57b287187042c48d3cecbfec9b59120a9410013cba8->enter($__internal_bc43c8f0e06a80cbfce3f57b287187042c48d3cecbfec9b59120a9410013cba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_882cb7e63ec4c49ced491980f392ebcb9fa3116c541f4cce2c65d687baf9bc95->leave($__internal_882cb7e63ec4c49ced491980f392ebcb9fa3116c541f4cce2c65d687baf9bc95_prof);

        
        $__internal_bc43c8f0e06a80cbfce3f57b287187042c48d3cecbfec9b59120a9410013cba8->leave($__internal_bc43c8f0e06a80cbfce3f57b287187042c48d3cecbfec9b59120a9410013cba8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ee06d26b755e2edf7030750cdeae408ca5ad9cf89c4655961f4ac37ee72a6e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee06d26b755e2edf7030750cdeae408ca5ad9cf89c4655961f4ac37ee72a6e4e->enter($__internal_ee06d26b755e2edf7030750cdeae408ca5ad9cf89c4655961f4ac37ee72a6e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a97fd698ad9b014417a600dc6d4fb50e85bd004b22e8dd41e6028c34956051a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97fd698ad9b014417a600dc6d4fb50e85bd004b22e8dd41e6028c34956051a3->enter($__internal_a97fd698ad9b014417a600dc6d4fb50e85bd004b22e8dd41e6028c34956051a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_a97fd698ad9b014417a600dc6d4fb50e85bd004b22e8dd41e6028c34956051a3->leave($__internal_a97fd698ad9b014417a600dc6d4fb50e85bd004b22e8dd41e6028c34956051a3_prof);

        
        $__internal_ee06d26b755e2edf7030750cdeae408ca5ad9cf89c4655961f4ac37ee72a6e4e->leave($__internal_ee06d26b755e2edf7030750cdeae408ca5ad9cf89c4655961f4ac37ee72a6e4e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_string.html.twig");
    }
}
