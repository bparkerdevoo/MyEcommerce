<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_4d1457d4ccb911f1df6464847a74ce458502c16a95ff166539d0b3635bdd1dad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_80a04580c22317fdc13547fd8dda1b5e97a256c3fb1057da01cdadcb98cd6636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80a04580c22317fdc13547fd8dda1b5e97a256c3fb1057da01cdadcb98cd6636->enter($__internal_80a04580c22317fdc13547fd8dda1b5e97a256c3fb1057da01cdadcb98cd6636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_959f800a76f6056224480f7e78ed9176c38a1770fbeabc3c22a010df1f1d7d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_959f800a76f6056224480f7e78ed9176c38a1770fbeabc3c22a010df1f1d7d4d->enter($__internal_959f800a76f6056224480f7e78ed9176c38a1770fbeabc3c22a010df1f1d7d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a04580c22317fdc13547fd8dda1b5e97a256c3fb1057da01cdadcb98cd6636->leave($__internal_80a04580c22317fdc13547fd8dda1b5e97a256c3fb1057da01cdadcb98cd6636_prof);

        
        $__internal_959f800a76f6056224480f7e78ed9176c38a1770fbeabc3c22a010df1f1d7d4d->leave($__internal_959f800a76f6056224480f7e78ed9176c38a1770fbeabc3c22a010df1f1d7d4d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ef8ce50a5bd30eecea1f0f6af25b66daf2910bc15b8591f32b3070083e82be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef8ce50a5bd30eecea1f0f6af25b66daf2910bc15b8591f32b3070083e82be7->enter($__internal_0ef8ce50a5bd30eecea1f0f6af25b66daf2910bc15b8591f32b3070083e82be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eb20c9a8627a4333e0d62266e92a2f2f7c069e62186c5995bb7e173b0619e8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb20c9a8627a4333e0d62266e92a2f2f7c069e62186c5995bb7e173b0619e8d0->enter($__internal_eb20c9a8627a4333e0d62266e92a2f2f7c069e62186c5995bb7e173b0619e8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_eb20c9a8627a4333e0d62266e92a2f2f7c069e62186c5995bb7e173b0619e8d0->leave($__internal_eb20c9a8627a4333e0d62266e92a2f2f7c069e62186c5995bb7e173b0619e8d0_prof);

        
        $__internal_0ef8ce50a5bd30eecea1f0f6af25b66daf2910bc15b8591f32b3070083e82be7->leave($__internal_0ef8ce50a5bd30eecea1f0f6af25b66daf2910bc15b8591f32b3070083e82be7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
