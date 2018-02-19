<?php

/* UserBundle:FOSUserBundle/views/Resetting:reset.html.twig */
class __TwigTemplate_a2b7c499b377ab85a36d1eb09338efc5895f485d0fadbe5e2aafef6f3bea5222 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Resetting:reset.html.twig", 1);
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
        $__internal_6215f3c673827965af1d390bccd990a6a7483b83cd45723b285838585a6ebda0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6215f3c673827965af1d390bccd990a6a7483b83cd45723b285838585a6ebda0->enter($__internal_6215f3c673827965af1d390bccd990a6a7483b83cd45723b285838585a6ebda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Resetting:reset.html.twig"));

        $__internal_088d37a1cab0379b994db2d65c8129ed5944ea0e80153841f29f3040e1ccbc55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088d37a1cab0379b994db2d65c8129ed5944ea0e80153841f29f3040e1ccbc55->enter($__internal_088d37a1cab0379b994db2d65c8129ed5944ea0e80153841f29f3040e1ccbc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6215f3c673827965af1d390bccd990a6a7483b83cd45723b285838585a6ebda0->leave($__internal_6215f3c673827965af1d390bccd990a6a7483b83cd45723b285838585a6ebda0_prof);

        
        $__internal_088d37a1cab0379b994db2d65c8129ed5944ea0e80153841f29f3040e1ccbc55->leave($__internal_088d37a1cab0379b994db2d65c8129ed5944ea0e80153841f29f3040e1ccbc55_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d5424989b0f24ea7487da490f4fa95e5654b263f0e02f518ae8325fb5c40203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5424989b0f24ea7487da490f4fa95e5654b263f0e02f518ae8325fb5c40203->enter($__internal_5d5424989b0f24ea7487da490f4fa95e5654b263f0e02f518ae8325fb5c40203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2bf33f89e99af011e1ba39d8248c1bcfaa59541f3fefc7b9d66c4a1d8aaf5754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf33f89e99af011e1ba39d8248c1bcfaa59541f3fefc7b9d66c4a1d8aaf5754->enter($__internal_2bf33f89e99af011e1ba39d8248c1bcfaa59541f3fefc7b9d66c4a1d8aaf5754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "UserBundle:FOSUserBundle/views/Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_2bf33f89e99af011e1ba39d8248c1bcfaa59541f3fefc7b9d66c4a1d8aaf5754->leave($__internal_2bf33f89e99af011e1ba39d8248c1bcfaa59541f3fefc7b9d66c4a1d8aaf5754_prof);

        
        $__internal_5d5424989b0f24ea7487da490f4fa95e5654b263f0e02f518ae8325fb5c40203->leave($__internal_5d5424989b0f24ea7487da490f4fa95e5654b263f0e02f518ae8325fb5c40203_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Resetting:reset.html.twig";
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
", "UserBundle:FOSUserBundle/views/Resetting:reset.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
