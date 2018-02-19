<?php

/* MSFBundle:Client:connexion.html.twig */
class __TwigTemplate_902e960c2ea8ee347834727949eca5212d4bf8aecadeb9e3304f32c162f7b14b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MSFBundle:Client:connexion.html.twig", 1);
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
        $__internal_4923cc6e660cb7cb04ee98e41727f347c7cd8d1af218a1950d6ecf66e9f63d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4923cc6e660cb7cb04ee98e41727f347c7cd8d1af218a1950d6ecf66e9f63d7a->enter($__internal_4923cc6e660cb7cb04ee98e41727f347c7cd8d1af218a1950d6ecf66e9f63d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Client:connexion.html.twig"));

        $__internal_3687087fa7760b526731519449223f865c5351feb7845517e3cb62f5c588daf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3687087fa7760b526731519449223f865c5351feb7845517e3cb62f5c588daf1->enter($__internal_3687087fa7760b526731519449223f865c5351feb7845517e3cb62f5c588daf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Client:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4923cc6e660cb7cb04ee98e41727f347c7cd8d1af218a1950d6ecf66e9f63d7a->leave($__internal_4923cc6e660cb7cb04ee98e41727f347c7cd8d1af218a1950d6ecf66e9f63d7a_prof);

        
        $__internal_3687087fa7760b526731519449223f865c5351feb7845517e3cb62f5c588daf1->leave($__internal_3687087fa7760b526731519449223f865c5351feb7845517e3cb62f5c588daf1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f17ef9037c6879b2598532d9dedda4b7e7c234ca6605d766c2984a8550a3c31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17ef9037c6879b2598532d9dedda4b7e7c234ca6605d766c2984a8550a3c31a->enter($__internal_f17ef9037c6879b2598532d9dedda4b7e7c234ca6605d766c2984a8550a3c31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0dd3287fef64211f82cdb419c440e295f8b2bbd99f0fb6b14bb0dbd7428ab14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0dd3287fef64211f82cdb419c440e295f8b2bbd99f0fb6b14bb0dbd7428ab14->enter($__internal_a0dd3287fef64211f82cdb419c440e295f8b2bbd99f0fb6b14bb0dbd7428ab14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MSFBundle:Client:Connexion";
        
        $__internal_a0dd3287fef64211f82cdb419c440e295f8b2bbd99f0fb6b14bb0dbd7428ab14->leave($__internal_a0dd3287fef64211f82cdb419c440e295f8b2bbd99f0fb6b14bb0dbd7428ab14_prof);

        
        $__internal_f17ef9037c6879b2598532d9dedda4b7e7c234ca6605d766c2984a8550a3c31a->leave($__internal_f17ef9037c6879b2598532d9dedda4b7e7c234ca6605d766c2984a8550a3c31a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a729640f70f0ab87be66e93e50edc47c174940e4857a2da388b1e693c5bcf4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a729640f70f0ab87be66e93e50edc47c174940e4857a2da388b1e693c5bcf4c2->enter($__internal_a729640f70f0ab87be66e93e50edc47c174940e4857a2da388b1e693c5bcf4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8617e13ba75a72c4eecd0e30ba864193911dc25fbd414409523df09381c35951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8617e13ba75a72c4eecd0e30ba864193911dc25fbd414409523df09381c35951->enter($__internal_8617e13ba75a72c4eecd0e30ba864193911dc25fbd414409523df09381c35951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Client:Connexion page</h1>
";
        
        $__internal_8617e13ba75a72c4eecd0e30ba864193911dc25fbd414409523df09381c35951->leave($__internal_8617e13ba75a72c4eecd0e30ba864193911dc25fbd414409523df09381c35951_prof);

        
        $__internal_a729640f70f0ab87be66e93e50edc47c174940e4857a2da388b1e693c5bcf4c2->leave($__internal_a729640f70f0ab87be66e93e50edc47c174940e4857a2da388b1e693c5bcf4c2_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Client:connexion.html.twig";
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

{% block title %}MSFBundle:Client:Connexion{% endblock %}

{% block body %}
<h1>Welcome to the Client:Connexion page</h1>
{% endblock %}
", "MSFBundle:Client:connexion.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Client/connexion.html.twig");
    }
}
