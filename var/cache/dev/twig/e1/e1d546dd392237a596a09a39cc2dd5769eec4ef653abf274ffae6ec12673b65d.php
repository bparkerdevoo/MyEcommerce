<?php

/* UserBundle:FOSUserBundle/views/Profile:show.html.twig */
class __TwigTemplate_df498c316153d309cbd7c6c764bfc2b3c21a4a7a1341d4aca95830ceaf3d2ecd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Profile:show.html.twig", 1);
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
        $__internal_e74bf5bd3cb857dd86f51a292b0fd787b199769af13cd650d5af345be5ed4ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74bf5bd3cb857dd86f51a292b0fd787b199769af13cd650d5af345be5ed4ae3->enter($__internal_e74bf5bd3cb857dd86f51a292b0fd787b199769af13cd650d5af345be5ed4ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show.html.twig"));

        $__internal_4bab37eb4fca1c9b4fe982419f16b92e5b22202bea5fae9f63d31b890ec0ac05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bab37eb4fca1c9b4fe982419f16b92e5b22202bea5fae9f63d31b890ec0ac05->enter($__internal_4bab37eb4fca1c9b4fe982419f16b92e5b22202bea5fae9f63d31b890ec0ac05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e74bf5bd3cb857dd86f51a292b0fd787b199769af13cd650d5af345be5ed4ae3->leave($__internal_e74bf5bd3cb857dd86f51a292b0fd787b199769af13cd650d5af345be5ed4ae3_prof);

        
        $__internal_4bab37eb4fca1c9b4fe982419f16b92e5b22202bea5fae9f63d31b890ec0ac05->leave($__internal_4bab37eb4fca1c9b4fe982419f16b92e5b22202bea5fae9f63d31b890ec0ac05_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34df8336815bf7f2ab63b8f9665f1afbc389341ad47ad6d2179f63f4b8cb2091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34df8336815bf7f2ab63b8f9665f1afbc389341ad47ad6d2179f63f4b8cb2091->enter($__internal_34df8336815bf7f2ab63b8f9665f1afbc389341ad47ad6d2179f63f4b8cb2091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bc619836cb5bbe9ee4433ba466e59a77026fa18439fafa81a4be21c9ee8c67e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc619836cb5bbe9ee4433ba466e59a77026fa18439fafa81a4be21c9ee8c67e6->enter($__internal_bc619836cb5bbe9ee4433ba466e59a77026fa18439fafa81a4be21c9ee8c67e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "UserBundle:FOSUserBundle/views/Profile:show.html.twig", 4)->display($context);
        // line 5
        echo "
";
        
        $__internal_bc619836cb5bbe9ee4433ba466e59a77026fa18439fafa81a4be21c9ee8c67e6->leave($__internal_bc619836cb5bbe9ee4433ba466e59a77026fa18439fafa81a4be21c9ee8c67e6_prof);

        
        $__internal_34df8336815bf7f2ab63b8f9665f1afbc389341ad47ad6d2179f63f4b8cb2091->leave($__internal_34df8336815bf7f2ab63b8f9665f1afbc389341ad47ad6d2179f63f4b8cb2091_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}

{% endblock fos_user_content %}
", "UserBundle:FOSUserBundle/views/Profile:show.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Profile/show.html.twig");
    }
}
