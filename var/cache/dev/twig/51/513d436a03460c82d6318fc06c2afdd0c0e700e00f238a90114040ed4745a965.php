<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_84a36a13dbe5201167d2f616a5e4082f9770aa4799ee591b007580f60a0068de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_4d3765d8c55b37a1065c796a6bd3648b22fbcc748c85779f623d0f3909bea74f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3765d8c55b37a1065c796a6bd3648b22fbcc748c85779f623d0f3909bea74f->enter($__internal_4d3765d8c55b37a1065c796a6bd3648b22fbcc748c85779f623d0f3909bea74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_797b0722a9e01a0772ab2a8b596ca4849b463d1f2bafacfa80efdbfdb022529b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797b0722a9e01a0772ab2a8b596ca4849b463d1f2bafacfa80efdbfdb022529b->enter($__internal_797b0722a9e01a0772ab2a8b596ca4849b463d1f2bafacfa80efdbfdb022529b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d3765d8c55b37a1065c796a6bd3648b22fbcc748c85779f623d0f3909bea74f->leave($__internal_4d3765d8c55b37a1065c796a6bd3648b22fbcc748c85779f623d0f3909bea74f_prof);

        
        $__internal_797b0722a9e01a0772ab2a8b596ca4849b463d1f2bafacfa80efdbfdb022529b->leave($__internal_797b0722a9e01a0772ab2a8b596ca4849b463d1f2bafacfa80efdbfdb022529b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4ef8ed9a8415ad8d138968d379f91b5eceab38e9058330ff9f0922292bdf049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ef8ed9a8415ad8d138968d379f91b5eceab38e9058330ff9f0922292bdf049->enter($__internal_d4ef8ed9a8415ad8d138968d379f91b5eceab38e9058330ff9f0922292bdf049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6cb9e1765cb464599003d2716879c74a0f0b651129c5104e4e5a9e112d94b45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cb9e1765cb464599003d2716879c74a0f0b651129c5104e4e5a9e112d94b45f->enter($__internal_6cb9e1765cb464599003d2716879c74a0f0b651129c5104e4e5a9e112d94b45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_6cb9e1765cb464599003d2716879c74a0f0b651129c5104e4e5a9e112d94b45f->leave($__internal_6cb9e1765cb464599003d2716879c74a0f0b651129c5104e4e5a9e112d94b45f_prof);

        
        $__internal_d4ef8ed9a8415ad8d138968d379f91b5eceab38e9058330ff9f0922292bdf049->leave($__internal_d4ef8ed9a8415ad8d138968d379f91b5eceab38e9058330ff9f0922292bdf049_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
