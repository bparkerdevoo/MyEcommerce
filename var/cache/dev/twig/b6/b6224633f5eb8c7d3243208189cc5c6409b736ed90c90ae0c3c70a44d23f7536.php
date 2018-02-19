<?php

/* MSFBundle:Page:accueil.html.twig */
class __TwigTemplate_765db7e1863bc489fc5b2298aabee124dadacbaea1532c3fe689e3cab6a32479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MSFBundle:Page:accueil.html.twig", 1);
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
        $__internal_8c4bf0f0d12d34f82715baf544652c3354396562031816a5483c3a2a33ddd79c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4bf0f0d12d34f82715baf544652c3354396562031816a5483c3a2a33ddd79c->enter($__internal_8c4bf0f0d12d34f82715baf544652c3354396562031816a5483c3a2a33ddd79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page:accueil.html.twig"));

        $__internal_661bb312a844ad151b7960ac71d377f8dfab18871f85c82df034179105d84693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661bb312a844ad151b7960ac71d377f8dfab18871f85c82df034179105d84693->enter($__internal_661bb312a844ad151b7960ac71d377f8dfab18871f85c82df034179105d84693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c4bf0f0d12d34f82715baf544652c3354396562031816a5483c3a2a33ddd79c->leave($__internal_8c4bf0f0d12d34f82715baf544652c3354396562031816a5483c3a2a33ddd79c_prof);

        
        $__internal_661bb312a844ad151b7960ac71d377f8dfab18871f85c82df034179105d84693->leave($__internal_661bb312a844ad151b7960ac71d377f8dfab18871f85c82df034179105d84693_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a28591911e52bd6353329b87234375a4e4da72d3a346b7caf4b4d1c40adc5b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28591911e52bd6353329b87234375a4e4da72d3a346b7caf4b4d1c40adc5b06->enter($__internal_a28591911e52bd6353329b87234375a4e4da72d3a346b7caf4b4d1c40adc5b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8af32f397d24c24d6129da2167968d7a122ed9781a40d9d981ad069ffd9c11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8af32f397d24c24d6129da2167968d7a122ed9781a40d9d981ad069ffd9c11f->enter($__internal_f8af32f397d24c24d6129da2167968d7a122ed9781a40d9d981ad069ffd9c11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MSFBundle:Page:Accueil";
        
        $__internal_f8af32f397d24c24d6129da2167968d7a122ed9781a40d9d981ad069ffd9c11f->leave($__internal_f8af32f397d24c24d6129da2167968d7a122ed9781a40d9d981ad069ffd9c11f_prof);

        
        $__internal_a28591911e52bd6353329b87234375a4e4da72d3a346b7caf4b4d1c40adc5b06->leave($__internal_a28591911e52bd6353329b87234375a4e4da72d3a346b7caf4b4d1c40adc5b06_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dedc3358248d694846764336c9407bd36ee4698a873a69100f5cb3dcf2a3c295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dedc3358248d694846764336c9407bd36ee4698a873a69100f5cb3dcf2a3c295->enter($__internal_dedc3358248d694846764336c9407bd36ee4698a873a69100f5cb3dcf2a3c295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_def65f7ac258dda2674864e45bf44281160ecf7fac34c4c66c2ef220b3e9603d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def65f7ac258dda2674864e45bf44281160ecf7fac34c4c66c2ef220b3e9603d->enter($__internal_def65f7ac258dda2674864e45bf44281160ecf7fac34c4c66c2ef220b3e9603d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Page:Accueil page</h1>
";
        
        $__internal_def65f7ac258dda2674864e45bf44281160ecf7fac34c4c66c2ef220b3e9603d->leave($__internal_def65f7ac258dda2674864e45bf44281160ecf7fac34c4c66c2ef220b3e9603d_prof);

        
        $__internal_dedc3358248d694846764336c9407bd36ee4698a873a69100f5cb3dcf2a3c295->leave($__internal_dedc3358248d694846764336c9407bd36ee4698a873a69100f5cb3dcf2a3c295_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Page:accueil.html.twig";
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

{% block title %}MSFBundle:Page:Accueil{% endblock %}

{% block body %}
<h1>Welcome to the Page:Accueil page</h1>
{% endblock %}
", "MSFBundle:Page:accueil.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Page/accueil.html.twig");
    }
}
