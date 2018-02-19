<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_590da22188c152df2d79bfbc5ac817c731c0a3284da86b723eda2129db72aafb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_ceb951ddde4114d992fa0aed49cadea222c61bc9379695c3894202d95dd8b9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb951ddde4114d992fa0aed49cadea222c61bc9379695c3894202d95dd8b9eb->enter($__internal_ceb951ddde4114d992fa0aed49cadea222c61bc9379695c3894202d95dd8b9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_e89e486cbbc2723731f70e6ddc5550adaac9f15d62e500b0c3760e9320bbc69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89e486cbbc2723731f70e6ddc5550adaac9f15d62e500b0c3760e9320bbc69a->enter($__internal_e89e486cbbc2723731f70e6ddc5550adaac9f15d62e500b0c3760e9320bbc69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceb951ddde4114d992fa0aed49cadea222c61bc9379695c3894202d95dd8b9eb->leave($__internal_ceb951ddde4114d992fa0aed49cadea222c61bc9379695c3894202d95dd8b9eb_prof);

        
        $__internal_e89e486cbbc2723731f70e6ddc5550adaac9f15d62e500b0c3760e9320bbc69a->leave($__internal_e89e486cbbc2723731f70e6ddc5550adaac9f15d62e500b0c3760e9320bbc69a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc2cc4785038a03a5a9b6133e2656ca627ede96ef74baa4630c5f32ff273f36b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2cc4785038a03a5a9b6133e2656ca627ede96ef74baa4630c5f32ff273f36b->enter($__internal_dc2cc4785038a03a5a9b6133e2656ca627ede96ef74baa4630c5f32ff273f36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_61a9bc1ff5ee988cb0bc9031d1ee2651557ed7740647dedea2281a1f12830db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a9bc1ff5ee988cb0bc9031d1ee2651557ed7740647dedea2281a1f12830db5->enter($__internal_61a9bc1ff5ee988cb0bc9031d1ee2651557ed7740647dedea2281a1f12830db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_61a9bc1ff5ee988cb0bc9031d1ee2651557ed7740647dedea2281a1f12830db5->leave($__internal_61a9bc1ff5ee988cb0bc9031d1ee2651557ed7740647dedea2281a1f12830db5_prof);

        
        $__internal_dc2cc4785038a03a5a9b6133e2656ca627ede96ef74baa4630c5f32ff273f36b->leave($__internal_dc2cc4785038a03a5a9b6133e2656ca627ede96ef74baa4630c5f32ff273f36b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
