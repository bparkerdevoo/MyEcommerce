<?php

/* UserBundle:FOSUserBundle/views/ChangePassword:change_password.html.twig */
class __TwigTemplate_778d2d84e57530ae157ebd765b479b0d03b06e815d08604086c76aed5b8aa8b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/ChangePassword:change_password.html.twig", 1);
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
        $__internal_8349c2db4c3e18fff20c4e94f1665d57c08b2bc1598eb334b4a25c379ad9353b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8349c2db4c3e18fff20c4e94f1665d57c08b2bc1598eb334b4a25c379ad9353b->enter($__internal_8349c2db4c3e18fff20c4e94f1665d57c08b2bc1598eb334b4a25c379ad9353b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/ChangePassword:change_password.html.twig"));

        $__internal_f3b3a5aeb81ee019970806d86b6d0dfd7d3474d2b3fb718107aa4b76703fe600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b3a5aeb81ee019970806d86b6d0dfd7d3474d2b3fb718107aa4b76703fe600->enter($__internal_f3b3a5aeb81ee019970806d86b6d0dfd7d3474d2b3fb718107aa4b76703fe600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8349c2db4c3e18fff20c4e94f1665d57c08b2bc1598eb334b4a25c379ad9353b->leave($__internal_8349c2db4c3e18fff20c4e94f1665d57c08b2bc1598eb334b4a25c379ad9353b_prof);

        
        $__internal_f3b3a5aeb81ee019970806d86b6d0dfd7d3474d2b3fb718107aa4b76703fe600->leave($__internal_f3b3a5aeb81ee019970806d86b6d0dfd7d3474d2b3fb718107aa4b76703fe600_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24c24ea4cbd5c33ad9fac4cbf61b8a909892c4476a6e190b9bb059f3e51e6337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c24ea4cbd5c33ad9fac4cbf61b8a909892c4476a6e190b9bb059f3e51e6337->enter($__internal_24c24ea4cbd5c33ad9fac4cbf61b8a909892c4476a6e190b9bb059f3e51e6337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0822e7087d7cea72fde0ce6cc7cc1abb08354207dc738fd7239309b2525fd3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0822e7087d7cea72fde0ce6cc7cc1abb08354207dc738fd7239309b2525fd3ad->enter($__internal_0822e7087d7cea72fde0ce6cc7cc1abb08354207dc738fd7239309b2525fd3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "UserBundle:FOSUserBundle/views/ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_0822e7087d7cea72fde0ce6cc7cc1abb08354207dc738fd7239309b2525fd3ad->leave($__internal_0822e7087d7cea72fde0ce6cc7cc1abb08354207dc738fd7239309b2525fd3ad_prof);

        
        $__internal_24c24ea4cbd5c33ad9fac4cbf61b8a909892c4476a6e190b9bb059f3e51e6337->leave($__internal_24c24ea4cbd5c33ad9fac4cbf61b8a909892c4476a6e190b9bb059f3e51e6337_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/ChangePassword:change_password.html.twig";
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
", "UserBundle:FOSUserBundle/views/ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
