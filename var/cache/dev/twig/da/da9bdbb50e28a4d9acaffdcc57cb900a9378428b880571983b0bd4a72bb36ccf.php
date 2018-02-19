<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a547f95c73bb2c41bdcb0ef493f3ccb770c5b86749f8e1218036cf992a5a9e3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f834d3eb272aaf08f07948926b5668dc7ff1a30cc84cd8b5c11d4382cb68b7d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f834d3eb272aaf08f07948926b5668dc7ff1a30cc84cd8b5c11d4382cb68b7d5->enter($__internal_f834d3eb272aaf08f07948926b5668dc7ff1a30cc84cd8b5c11d4382cb68b7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_c0a71befadd37418b1d5008ebd7873861be9e4d8c12b6741d78529a26516b93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a71befadd37418b1d5008ebd7873861be9e4d8c12b6741d78529a26516b93b->enter($__internal_c0a71befadd37418b1d5008ebd7873861be9e4d8c12b6741d78529a26516b93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f834d3eb272aaf08f07948926b5668dc7ff1a30cc84cd8b5c11d4382cb68b7d5->leave($__internal_f834d3eb272aaf08f07948926b5668dc7ff1a30cc84cd8b5c11d4382cb68b7d5_prof);

        
        $__internal_c0a71befadd37418b1d5008ebd7873861be9e4d8c12b6741d78529a26516b93b->leave($__internal_c0a71befadd37418b1d5008ebd7873861be9e4d8c12b6741d78529a26516b93b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e2d026f624eb03917d65c03fbb89ae10dbc74cdfb4d1086eabe338d7e0d5d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e2d026f624eb03917d65c03fbb89ae10dbc74cdfb4d1086eabe338d7e0d5d21->enter($__internal_7e2d026f624eb03917d65c03fbb89ae10dbc74cdfb4d1086eabe338d7e0d5d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7089cd50dcdbf3b6c41f08811d9e35ba00d1cfe5b0f9ac36a5b4e0417ea5aa1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7089cd50dcdbf3b6c41f08811d9e35ba00d1cfe5b0f9ac36a5b4e0417ea5aa1f->enter($__internal_7089cd50dcdbf3b6c41f08811d9e35ba00d1cfe5b0f9ac36a5b4e0417ea5aa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7089cd50dcdbf3b6c41f08811d9e35ba00d1cfe5b0f9ac36a5b4e0417ea5aa1f->leave($__internal_7089cd50dcdbf3b6c41f08811d9e35ba00d1cfe5b0f9ac36a5b4e0417ea5aa1f_prof);

        
        $__internal_7e2d026f624eb03917d65c03fbb89ae10dbc74cdfb4d1086eabe338d7e0d5d21->leave($__internal_7e2d026f624eb03917d65c03fbb89ae10dbc74cdfb4d1086eabe338d7e0d5d21_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
