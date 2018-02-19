<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9c5563b2552c1d4c1865699eb5e389a45bf2a517bbe50c9af936e9fde66fac4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5bc8fcac1189bd2449385c8c973e693b12c1a61abb4430c5281f0b5f8a78e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5bc8fcac1189bd2449385c8c973e693b12c1a61abb4430c5281f0b5f8a78e82->enter($__internal_c5bc8fcac1189bd2449385c8c973e693b12c1a61abb4430c5281f0b5f8a78e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3f432cdf942b1f415fab8f35a7273c0072b39babce62d213198602c511481678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f432cdf942b1f415fab8f35a7273c0072b39babce62d213198602c511481678->enter($__internal_3f432cdf942b1f415fab8f35a7273c0072b39babce62d213198602c511481678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5bc8fcac1189bd2449385c8c973e693b12c1a61abb4430c5281f0b5f8a78e82->leave($__internal_c5bc8fcac1189bd2449385c8c973e693b12c1a61abb4430c5281f0b5f8a78e82_prof);

        
        $__internal_3f432cdf942b1f415fab8f35a7273c0072b39babce62d213198602c511481678->leave($__internal_3f432cdf942b1f415fab8f35a7273c0072b39babce62d213198602c511481678_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8619e27c5f9081c3b4b672ce3a5a021ecb08118fa745a7e5224b8e6e4de2ac3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8619e27c5f9081c3b4b672ce3a5a021ecb08118fa745a7e5224b8e6e4de2ac3e->enter($__internal_8619e27c5f9081c3b4b672ce3a5a021ecb08118fa745a7e5224b8e6e4de2ac3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea1bfcf934356c6112f40170022f5f21913d70fad456f365c424142cb7537c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1bfcf934356c6112f40170022f5f21913d70fad456f365c424142cb7537c87->enter($__internal_ea1bfcf934356c6112f40170022f5f21913d70fad456f365c424142cb7537c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ea1bfcf934356c6112f40170022f5f21913d70fad456f365c424142cb7537c87->leave($__internal_ea1bfcf934356c6112f40170022f5f21913d70fad456f365c424142cb7537c87_prof);

        
        $__internal_8619e27c5f9081c3b4b672ce3a5a021ecb08118fa745a7e5224b8e6e4de2ac3e->leave($__internal_8619e27c5f9081c3b4b672ce3a5a021ecb08118fa745a7e5224b8e6e4de2ac3e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaf0f5d93c188889bf2aa83d437b0bbf72b4ad9d49b6bcab3093f779c195a541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf0f5d93c188889bf2aa83d437b0bbf72b4ad9d49b6bcab3093f779c195a541->enter($__internal_eaf0f5d93c188889bf2aa83d437b0bbf72b4ad9d49b6bcab3093f779c195a541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d66aadae5f9e259a1e85c6aec0939a5e9e5e75fdadffdbf4a2cc21f5dd3de5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66aadae5f9e259a1e85c6aec0939a5e9e5e75fdadffdbf4a2cc21f5dd3de5f0->enter($__internal_d66aadae5f9e259a1e85c6aec0939a5e9e5e75fdadffdbf4a2cc21f5dd3de5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d66aadae5f9e259a1e85c6aec0939a5e9e5e75fdadffdbf4a2cc21f5dd3de5f0->leave($__internal_d66aadae5f9e259a1e85c6aec0939a5e9e5e75fdadffdbf4a2cc21f5dd3de5f0_prof);

        
        $__internal_eaf0f5d93c188889bf2aa83d437b0bbf72b4ad9d49b6bcab3093f779c195a541->leave($__internal_eaf0f5d93c188889bf2aa83d437b0bbf72b4ad9d49b6bcab3093f779c195a541_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
