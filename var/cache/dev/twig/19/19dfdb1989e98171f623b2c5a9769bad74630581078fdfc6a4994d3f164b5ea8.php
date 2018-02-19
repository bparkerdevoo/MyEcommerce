<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_5701b4fa5afe9a371e0f194e176d635c42cbcef41d1b6727f3cd170141ce209a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_a41f801ddb52630fcd4fcaa9c55fa55668fa00aa8b142c8b11fe054087cfc0ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a41f801ddb52630fcd4fcaa9c55fa55668fa00aa8b142c8b11fe054087cfc0ea->enter($__internal_a41f801ddb52630fcd4fcaa9c55fa55668fa00aa8b142c8b11fe054087cfc0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_576360c707a95025f3f9f8c31c66a3d935971ecd5a704328c5e6ab012460d06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576360c707a95025f3f9f8c31c66a3d935971ecd5a704328c5e6ab012460d06b->enter($__internal_576360c707a95025f3f9f8c31c66a3d935971ecd5a704328c5e6ab012460d06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a41f801ddb52630fcd4fcaa9c55fa55668fa00aa8b142c8b11fe054087cfc0ea->leave($__internal_a41f801ddb52630fcd4fcaa9c55fa55668fa00aa8b142c8b11fe054087cfc0ea_prof);

        
        $__internal_576360c707a95025f3f9f8c31c66a3d935971ecd5a704328c5e6ab012460d06b->leave($__internal_576360c707a95025f3f9f8c31c66a3d935971ecd5a704328c5e6ab012460d06b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9beb75fbd06195146b3f7d869cacce2bae8e45e7c41e72d1a3479993e6142e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9beb75fbd06195146b3f7d869cacce2bae8e45e7c41e72d1a3479993e6142e98->enter($__internal_9beb75fbd06195146b3f7d869cacce2bae8e45e7c41e72d1a3479993e6142e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d298269d8299cb340489e91419d7ef46be47f512011e460ea9d5bed056e56c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d298269d8299cb340489e91419d7ef46be47f512011e460ea9d5bed056e56c84->enter($__internal_d298269d8299cb340489e91419d7ef46be47f512011e460ea9d5bed056e56c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d298269d8299cb340489e91419d7ef46be47f512011e460ea9d5bed056e56c84->leave($__internal_d298269d8299cb340489e91419d7ef46be47f512011e460ea9d5bed056e56c84_prof);

        
        $__internal_9beb75fbd06195146b3f7d869cacce2bae8e45e7c41e72d1a3479993e6142e98->leave($__internal_9beb75fbd06195146b3f7d869cacce2bae8e45e7c41e72d1a3479993e6142e98_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
