<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_952ba389d817c269b8669abac83f60024d9472c8fb62396d53e9390091f1b099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_76029b41deb989f77c47f73dbe56cbe5f9fea271f8508ac9f62773b0e6962060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76029b41deb989f77c47f73dbe56cbe5f9fea271f8508ac9f62773b0e6962060->enter($__internal_76029b41deb989f77c47f73dbe56cbe5f9fea271f8508ac9f62773b0e6962060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_ba0ba01504e0b2d2476b2f03119cf04905f6abbfef1ee1c884a64bd7c504ef73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0ba01504e0b2d2476b2f03119cf04905f6abbfef1ee1c884a64bd7c504ef73->enter($__internal_ba0ba01504e0b2d2476b2f03119cf04905f6abbfef1ee1c884a64bd7c504ef73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76029b41deb989f77c47f73dbe56cbe5f9fea271f8508ac9f62773b0e6962060->leave($__internal_76029b41deb989f77c47f73dbe56cbe5f9fea271f8508ac9f62773b0e6962060_prof);

        
        $__internal_ba0ba01504e0b2d2476b2f03119cf04905f6abbfef1ee1c884a64bd7c504ef73->leave($__internal_ba0ba01504e0b2d2476b2f03119cf04905f6abbfef1ee1c884a64bd7c504ef73_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e12762f3b41cf4f60c72bccb38ed68ef4277977abc07850ea4c8b1ee142a8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e12762f3b41cf4f60c72bccb38ed68ef4277977abc07850ea4c8b1ee142a8b7->enter($__internal_3e12762f3b41cf4f60c72bccb38ed68ef4277977abc07850ea4c8b1ee142a8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb4df32dd328a7de728ab0cda94bea47eb960b06f3606ca372292fe3f9b37102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4df32dd328a7de728ab0cda94bea47eb960b06f3606ca372292fe3f9b37102->enter($__internal_bb4df32dd328a7de728ab0cda94bea47eb960b06f3606ca372292fe3f9b37102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_bb4df32dd328a7de728ab0cda94bea47eb960b06f3606ca372292fe3f9b37102->leave($__internal_bb4df32dd328a7de728ab0cda94bea47eb960b06f3606ca372292fe3f9b37102_prof);

        
        $__internal_3e12762f3b41cf4f60c72bccb38ed68ef4277977abc07850ea4c8b1ee142a8b7->leave($__internal_3e12762f3b41cf4f60c72bccb38ed68ef4277977abc07850ea4c8b1ee142a8b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
