<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_d3d040321da53b54d1965784e76e34b1cfddada402fd6b766aed422c843edc44 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_530dda08ee52ef0c69a8880b0c4bf857e9b519d97f704ecd813ca3ff3ae07c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530dda08ee52ef0c69a8880b0c4bf857e9b519d97f704ecd813ca3ff3ae07c04->enter($__internal_530dda08ee52ef0c69a8880b0c4bf857e9b519d97f704ecd813ca3ff3ae07c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $__internal_2e1a9931496f4bc60e9e26f910327696335823cb2511ef3bed7496a39af55831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1a9931496f4bc60e9e26f910327696335823cb2511ef3bed7496a39af55831->enter($__internal_2e1a9931496f4bc60e9e26f910327696335823cb2511ef3bed7496a39af55831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_530dda08ee52ef0c69a8880b0c4bf857e9b519d97f704ecd813ca3ff3ae07c04->leave($__internal_530dda08ee52ef0c69a8880b0c4bf857e9b519d97f704ecd813ca3ff3ae07c04_prof);

        
        $__internal_2e1a9931496f4bc60e9e26f910327696335823cb2511ef3bed7496a39af55831->leave($__internal_2e1a9931496f4bc60e9e26f910327696335823cb2511ef3bed7496a39af55831_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c4f45725e04aed123fb60143ddb9a475564103668cd5568783b2c16a80b02556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f45725e04aed123fb60143ddb9a475564103668cd5568783b2c16a80b02556->enter($__internal_c4f45725e04aed123fb60143ddb9a475564103668cd5568783b2c16a80b02556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_621bd70929800192e95fe46a3d17c8286518ac5ce17d85335773c434c87a12ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621bd70929800192e95fe46a3d17c8286518ac5ce17d85335773c434c87a12ca->enter($__internal_621bd70929800192e95fe46a3d17c8286518ac5ce17d85335773c434c87a12ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_621bd70929800192e95fe46a3d17c8286518ac5ce17d85335773c434c87a12ca->leave($__internal_621bd70929800192e95fe46a3d17c8286518ac5ce17d85335773c434c87a12ca_prof);

        
        $__internal_c4f45725e04aed123fb60143ddb9a475564103668cd5568783b2c16a80b02556->leave($__internal_c4f45725e04aed123fb60143ddb9a475564103668cd5568783b2c16a80b02556_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_text.html.twig");
    }
}
