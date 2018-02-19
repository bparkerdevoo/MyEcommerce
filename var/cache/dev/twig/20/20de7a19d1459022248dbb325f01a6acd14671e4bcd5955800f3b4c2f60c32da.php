<?php

/* UserBundle:FOSUserBundle/views/Resetting:request.html.twig */
class __TwigTemplate_e8d22129bceb9c1af69beeaf2bd2146debab365b557657da799d875ddfd49155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Resetting:request.html.twig", 1);
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
        $__internal_c68d3058829a6c81092532541d0e100be2d0996ab50669d2e564c3aed09ca9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68d3058829a6c81092532541d0e100be2d0996ab50669d2e564c3aed09ca9a1->enter($__internal_c68d3058829a6c81092532541d0e100be2d0996ab50669d2e564c3aed09ca9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Resetting:request.html.twig"));

        $__internal_b24c3e8044c702b533c952ed88dda4d041c53188db176fadb98dd6fbe556de93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24c3e8044c702b533c952ed88dda4d041c53188db176fadb98dd6fbe556de93->enter($__internal_b24c3e8044c702b533c952ed88dda4d041c53188db176fadb98dd6fbe556de93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c68d3058829a6c81092532541d0e100be2d0996ab50669d2e564c3aed09ca9a1->leave($__internal_c68d3058829a6c81092532541d0e100be2d0996ab50669d2e564c3aed09ca9a1_prof);

        
        $__internal_b24c3e8044c702b533c952ed88dda4d041c53188db176fadb98dd6fbe556de93->leave($__internal_b24c3e8044c702b533c952ed88dda4d041c53188db176fadb98dd6fbe556de93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a2176c534cbb85421ca5e6ad48e50aa16cf9f383cc46eefad8eb55f17f0cd01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2176c534cbb85421ca5e6ad48e50aa16cf9f383cc46eefad8eb55f17f0cd01->enter($__internal_9a2176c534cbb85421ca5e6ad48e50aa16cf9f383cc46eefad8eb55f17f0cd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e2de075af4a86591d4614423511ecfa707912d709bfdff3181f85802df690ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2de075af4a86591d4614423511ecfa707912d709bfdff3181f85802df690ca0->enter($__internal_e2de075af4a86591d4614423511ecfa707912d709bfdff3181f85802df690ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "UserBundle:FOSUserBundle/views/Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e2de075af4a86591d4614423511ecfa707912d709bfdff3181f85802df690ca0->leave($__internal_e2de075af4a86591d4614423511ecfa707912d709bfdff3181f85802df690ca0_prof);

        
        $__internal_9a2176c534cbb85421ca5e6ad48e50aa16cf9f383cc46eefad8eb55f17f0cd01->leave($__internal_9a2176c534cbb85421ca5e6ad48e50aa16cf9f383cc46eefad8eb55f17f0cd01_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:FOSUserBundle/views/Resetting:request.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
