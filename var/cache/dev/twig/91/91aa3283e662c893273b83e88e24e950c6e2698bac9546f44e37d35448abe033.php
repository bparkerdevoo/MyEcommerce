<?php

/* UserBundle:FOSUserBundle/views/Security:registered.html.twig */
class __TwigTemplate_9d43d53b5aa3a34efe98d4d0637f31cc6df3e2e4189b3dfc632e831fbd606354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Security:registered.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9af2f1a7a6b455c774e0a2130d2fd8276828edc165aa36dc15977a95060cf1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9af2f1a7a6b455c774e0a2130d2fd8276828edc165aa36dc15977a95060cf1b->enter($__internal_a9af2f1a7a6b455c774e0a2130d2fd8276828edc165aa36dc15977a95060cf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Security:registered.html.twig"));

        $__internal_13bf2f6a20db1c4fdc3838cbd21c4e662eb6078c62a52405567bf32cdd08c74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bf2f6a20db1c4fdc3838cbd21c4e662eb6078c62a52405567bf32cdd08c74a->enter($__internal_13bf2f6a20db1c4fdc3838cbd21c4e662eb6078c62a52405567bf32cdd08c74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Security:registered.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9af2f1a7a6b455c774e0a2130d2fd8276828edc165aa36dc15977a95060cf1b->leave($__internal_a9af2f1a7a6b455c774e0a2130d2fd8276828edc165aa36dc15977a95060cf1b_prof);

        
        $__internal_13bf2f6a20db1c4fdc3838cbd21c4e662eb6078c62a52405567bf32cdd08c74a->leave($__internal_13bf2f6a20db1c4fdc3838cbd21c4e662eb6078c62a52405567bf32cdd08c74a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9d4a9c245301be2a4eeead9b59a6b1422e368f1afbc69e1b29ac494c4febca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d4a9c245301be2a4eeead9b59a6b1422e368f1afbc69e1b29ac494c4febca7->enter($__internal_b9d4a9c245301be2a4eeead9b59a6b1422e368f1afbc69e1b29ac494c4febca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7c6e79b62d3a3a56eb218435d0a5a4603d6c1be585ea0d1336e76ca2592d3a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6e79b62d3a3a56eb218435d0a5a4603d6c1be585ea0d1336e76ca2592d3a67->enter($__internal_7c6e79b62d3a3a56eb218435d0a5a4603d6c1be585ea0d1336e76ca2592d3a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Registration:registered_content.html.twig");
        echo "
";
        
        $__internal_7c6e79b62d3a3a56eb218435d0a5a4603d6c1be585ea0d1336e76ca2592d3a67->leave($__internal_7c6e79b62d3a3a56eb218435d0a5a4603d6c1be585ea0d1336e76ca2592d3a67_prof);

        
        $__internal_b9d4a9c245301be2a4eeead9b59a6b1422e368f1afbc69e1b29ac494c4febca7->leave($__internal_b9d4a9c245301be2a4eeead9b59a6b1422e368f1afbc69e1b29ac494c4febca7_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Security:registered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Registration:registered_content.html.twig') }}
{% endblock fos_user_content %}
", "UserBundle:FOSUserBundle/views/Security:registered.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Security/registered.html.twig");
    }
}
