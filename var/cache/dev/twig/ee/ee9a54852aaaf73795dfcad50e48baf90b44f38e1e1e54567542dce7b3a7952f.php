<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_793d40aebd3c240980ee3e9aa4395df864dff00353907f8697eb9a8967922df6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43c12815ca6c182d2028160364fae9c5ada1ebbc022d78013280db5bda692e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c12815ca6c182d2028160364fae9c5ada1ebbc022d78013280db5bda692e17->enter($__internal_43c12815ca6c182d2028160364fae9c5ada1ebbc022d78013280db5bda692e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a235843208ba2e5eca7678b96ec4d5e7f04023d48e179d142ec135cd2de9c2e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a235843208ba2e5eca7678b96ec4d5e7f04023d48e179d142ec135cd2de9c2e7->enter($__internal_a235843208ba2e5eca7678b96ec4d5e7f04023d48e179d142ec135cd2de9c2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_43c12815ca6c182d2028160364fae9c5ada1ebbc022d78013280db5bda692e17->leave($__internal_43c12815ca6c182d2028160364fae9c5ada1ebbc022d78013280db5bda692e17_prof);

        
        $__internal_a235843208ba2e5eca7678b96ec4d5e7f04023d48e179d142ec135cd2de9c2e7->leave($__internal_a235843208ba2e5eca7678b96ec4d5e7f04023d48e179d142ec135cd2de9c2e7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d49b963bf389742783b930f36df0d743643386e0006ce2d6ada64a482d1d38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d49b963bf389742783b930f36df0d743643386e0006ce2d6ada64a482d1d38c->enter($__internal_3d49b963bf389742783b930f36df0d743643386e0006ce2d6ada64a482d1d38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1a434e75eadfca4a9ba3687bce6b2277801b8dc349d44c63134f463ffce166b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a434e75eadfca4a9ba3687bce6b2277801b8dc349d44c63134f463ffce166b7->enter($__internal_1a434e75eadfca4a9ba3687bce6b2277801b8dc349d44c63134f463ffce166b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1a434e75eadfca4a9ba3687bce6b2277801b8dc349d44c63134f463ffce166b7->leave($__internal_1a434e75eadfca4a9ba3687bce6b2277801b8dc349d44c63134f463ffce166b7_prof);

        
        $__internal_3d49b963bf389742783b930f36df0d743643386e0006ce2d6ada64a482d1d38c->leave($__internal_3d49b963bf389742783b930f36df0d743643386e0006ce2d6ada64a482d1d38c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
