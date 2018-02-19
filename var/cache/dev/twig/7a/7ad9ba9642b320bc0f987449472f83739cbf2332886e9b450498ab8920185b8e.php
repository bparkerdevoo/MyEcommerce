<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_dd71c09bbb1ce43715c3fbe9a2b5a9b37496f93c81abce9888e7efb997299376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_d097ddda6defa3e94b12cc01c3a5e4c0366d039ac5ab884e4efa41e18e1d72d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d097ddda6defa3e94b12cc01c3a5e4c0366d039ac5ab884e4efa41e18e1d72d1->enter($__internal_d097ddda6defa3e94b12cc01c3a5e4c0366d039ac5ab884e4efa41e18e1d72d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_590e9d0741299564a067322735ece9adf206a93893b502823510e70fe2db6eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590e9d0741299564a067322735ece9adf206a93893b502823510e70fe2db6eac->enter($__internal_590e9d0741299564a067322735ece9adf206a93893b502823510e70fe2db6eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d097ddda6defa3e94b12cc01c3a5e4c0366d039ac5ab884e4efa41e18e1d72d1->leave($__internal_d097ddda6defa3e94b12cc01c3a5e4c0366d039ac5ab884e4efa41e18e1d72d1_prof);

        
        $__internal_590e9d0741299564a067322735ece9adf206a93893b502823510e70fe2db6eac->leave($__internal_590e9d0741299564a067322735ece9adf206a93893b502823510e70fe2db6eac_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10a542d36f755f50db7631595d9356fb6c9547594610a142ef96f30b3f7dd3e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a542d36f755f50db7631595d9356fb6c9547594610a142ef96f30b3f7dd3e8->enter($__internal_10a542d36f755f50db7631595d9356fb6c9547594610a142ef96f30b3f7dd3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d00bd0073033f699a211e68eecb725074739f57788ee60e362aa357d21fa2306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00bd0073033f699a211e68eecb725074739f57788ee60e362aa357d21fa2306->enter($__internal_d00bd0073033f699a211e68eecb725074739f57788ee60e362aa357d21fa2306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_d00bd0073033f699a211e68eecb725074739f57788ee60e362aa357d21fa2306->leave($__internal_d00bd0073033f699a211e68eecb725074739f57788ee60e362aa357d21fa2306_prof);

        
        $__internal_10a542d36f755f50db7631595d9356fb6c9547594610a142ef96f30b3f7dd3e8->leave($__internal_10a542d36f755f50db7631595d9356fb6c9547594610a142ef96f30b3f7dd3e8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
