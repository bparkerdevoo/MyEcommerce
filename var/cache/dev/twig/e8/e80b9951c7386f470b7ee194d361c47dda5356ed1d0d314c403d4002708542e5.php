<?php

/* UserBundle:FOSUserBundle/views/Registration:register.html.twig */
class __TwigTemplate_e25e99ede8b48cbca272dae465e16ca32d85afdec88107b2204426dad407cd84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Registration:register.html.twig", 1);
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
        $__internal_99b9e527c08b550f5ae654a297574f2e80224216c55de244068c99ab57f348bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b9e527c08b550f5ae654a297574f2e80224216c55de244068c99ab57f348bb->enter($__internal_99b9e527c08b550f5ae654a297574f2e80224216c55de244068c99ab57f348bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Registration:register.html.twig"));

        $__internal_b9b9e8b69caa0727f03d5679d404efa3c8c0c3117fd2460d457293ffe5e77391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b9e8b69caa0727f03d5679d404efa3c8c0c3117fd2460d457293ffe5e77391->enter($__internal_b9b9e8b69caa0727f03d5679d404efa3c8c0c3117fd2460d457293ffe5e77391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99b9e527c08b550f5ae654a297574f2e80224216c55de244068c99ab57f348bb->leave($__internal_99b9e527c08b550f5ae654a297574f2e80224216c55de244068c99ab57f348bb_prof);

        
        $__internal_b9b9e8b69caa0727f03d5679d404efa3c8c0c3117fd2460d457293ffe5e77391->leave($__internal_b9b9e8b69caa0727f03d5679d404efa3c8c0c3117fd2460d457293ffe5e77391_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4333692de0033b56cb84a3e290dcd411db92eb9db58ec3b1149ddf8fdb90259f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4333692de0033b56cb84a3e290dcd411db92eb9db58ec3b1149ddf8fdb90259f->enter($__internal_4333692de0033b56cb84a3e290dcd411db92eb9db58ec3b1149ddf8fdb90259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6780fd4a9dfee5b3699dc2f0a3ae1b0bc3b811ae61d783d994897e5f8aad8b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6780fd4a9dfee5b3699dc2f0a3ae1b0bc3b811ae61d783d994897e5f8aad8b6e->enter($__internal_6780fd4a9dfee5b3699dc2f0a3ae1b0bc3b811ae61d783d994897e5f8aad8b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "UserBundle:FOSUserBundle/views/Registration:register.html.twig", 4)->display($context);
        
        $__internal_6780fd4a9dfee5b3699dc2f0a3ae1b0bc3b811ae61d783d994897e5f8aad8b6e->leave($__internal_6780fd4a9dfee5b3699dc2f0a3ae1b0bc3b811ae61d783d994897e5f8aad8b6e_prof);

        
        $__internal_4333692de0033b56cb84a3e290dcd411db92eb9db58ec3b1149ddf8fdb90259f->leave($__internal_4333692de0033b56cb84a3e290dcd411db92eb9db58ec3b1149ddf8fdb90259f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Registration:register.html.twig";
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
", "UserBundle:FOSUserBundle/views/Registration:register.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Registration/register.html.twig");
    }
}
