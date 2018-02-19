<?php

/* MSFBundle:Page:blog.html.twig */
class __TwigTemplate_35896eb14ff033b7f851440b1316b3e2127f4adfb91f64d67d554fc540d11961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MSFBundle:Page:blog.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df93bf9c4bdeb807625070100c1764a7c57f095fcbece2f71d918faf972d7d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df93bf9c4bdeb807625070100c1764a7c57f095fcbece2f71d918faf972d7d1b->enter($__internal_df93bf9c4bdeb807625070100c1764a7c57f095fcbece2f71d918faf972d7d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page:blog.html.twig"));

        $__internal_1d08aed12536dbe8de774461a7f27ad584adb866d44f2d2fd01de6052ed8b8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d08aed12536dbe8de774461a7f27ad584adb866d44f2d2fd01de6052ed8b8e2->enter($__internal_1d08aed12536dbe8de774461a7f27ad584adb866d44f2d2fd01de6052ed8b8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page:blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df93bf9c4bdeb807625070100c1764a7c57f095fcbece2f71d918faf972d7d1b->leave($__internal_df93bf9c4bdeb807625070100c1764a7c57f095fcbece2f71d918faf972d7d1b_prof);

        
        $__internal_1d08aed12536dbe8de774461a7f27ad584adb866d44f2d2fd01de6052ed8b8e2->leave($__internal_1d08aed12536dbe8de774461a7f27ad584adb866d44f2d2fd01de6052ed8b8e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bd20a44058a0f5359c0d8c57c9126933599c5df13a72a4bfb4aa72709d1133e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd20a44058a0f5359c0d8c57c9126933599c5df13a72a4bfb4aa72709d1133e->enter($__internal_9bd20a44058a0f5359c0d8c57c9126933599c5df13a72a4bfb4aa72709d1133e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9b3e76fa2f5202606d7aeaa832f69ee81217503cf6e873e56e16eb5b3fe99c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b3e76fa2f5202606d7aeaa832f69ee81217503cf6e873e56e16eb5b3fe99c0->enter($__internal_d9b3e76fa2f5202606d7aeaa832f69ee81217503cf6e873e56e16eb5b3fe99c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MSFBundle:Page:Blog";
        
        $__internal_d9b3e76fa2f5202606d7aeaa832f69ee81217503cf6e873e56e16eb5b3fe99c0->leave($__internal_d9b3e76fa2f5202606d7aeaa832f69ee81217503cf6e873e56e16eb5b3fe99c0_prof);

        
        $__internal_9bd20a44058a0f5359c0d8c57c9126933599c5df13a72a4bfb4aa72709d1133e->leave($__internal_9bd20a44058a0f5359c0d8c57c9126933599c5df13a72a4bfb4aa72709d1133e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_73fa6d9a142b81d26a936c84964961815330b3a15a087bc6285bb1a02d0695e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fa6d9a142b81d26a936c84964961815330b3a15a087bc6285bb1a02d0695e0->enter($__internal_73fa6d9a142b81d26a936c84964961815330b3a15a087bc6285bb1a02d0695e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9b1c1752cb4a28e876280ec801089167bcfe30803d3dd8f612246ac8805a108e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1c1752cb4a28e876280ec801089167bcfe30803d3dd8f612246ac8805a108e->enter($__internal_9b1c1752cb4a28e876280ec801089167bcfe30803d3dd8f612246ac8805a108e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Page:Blog page</h1>
";
        
        $__internal_9b1c1752cb4a28e876280ec801089167bcfe30803d3dd8f612246ac8805a108e->leave($__internal_9b1c1752cb4a28e876280ec801089167bcfe30803d3dd8f612246ac8805a108e_prof);

        
        $__internal_73fa6d9a142b81d26a936c84964961815330b3a15a087bc6285bb1a02d0695e0->leave($__internal_73fa6d9a142b81d26a936c84964961815330b3a15a087bc6285bb1a02d0695e0_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Page:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}MSFBundle:Page:Blog{% endblock %}

{% block body %}
<h1>Welcome to the Page:Blog page</h1>
{% endblock %}
", "MSFBundle:Page:blog.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Page/blog.html.twig");
    }
}
