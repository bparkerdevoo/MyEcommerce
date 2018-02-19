<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_97f05e7ee677af295cc2b48fa3d4a69c821442dd0b2f291389cf65ac9fb37e15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_7de2fad7d021eea4fe760d6468073ed95dc2460d27d0e148a2e0ca528daa4a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de2fad7d021eea4fe760d6468073ed95dc2460d27d0e148a2e0ca528daa4a4e->enter($__internal_7de2fad7d021eea4fe760d6468073ed95dc2460d27d0e148a2e0ca528daa4a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_1c13dad04d83bf92fb82090a92b968807b857b976250acf173acfe125dae501f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c13dad04d83bf92fb82090a92b968807b857b976250acf173acfe125dae501f->enter($__internal_1c13dad04d83bf92fb82090a92b968807b857b976250acf173acfe125dae501f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7de2fad7d021eea4fe760d6468073ed95dc2460d27d0e148a2e0ca528daa4a4e->leave($__internal_7de2fad7d021eea4fe760d6468073ed95dc2460d27d0e148a2e0ca528daa4a4e_prof);

        
        $__internal_1c13dad04d83bf92fb82090a92b968807b857b976250acf173acfe125dae501f->leave($__internal_1c13dad04d83bf92fb82090a92b968807b857b976250acf173acfe125dae501f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d7b09c6c2797c31345a1a5ccbc55548330972f9c8869324003c2f703a819552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7b09c6c2797c31345a1a5ccbc55548330972f9c8869324003c2f703a819552->enter($__internal_1d7b09c6c2797c31345a1a5ccbc55548330972f9c8869324003c2f703a819552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_804f4479b04c4c014280377f223fa7712ed5b61d06ab6b5fb5619537fb7b4e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804f4479b04c4c014280377f223fa7712ed5b61d06ab6b5fb5619537fb7b4e3c->enter($__internal_804f4479b04c4c014280377f223fa7712ed5b61d06ab6b5fb5619537fb7b4e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_804f4479b04c4c014280377f223fa7712ed5b61d06ab6b5fb5619537fb7b4e3c->leave($__internal_804f4479b04c4c014280377f223fa7712ed5b61d06ab6b5fb5619537fb7b4e3c_prof);

        
        $__internal_1d7b09c6c2797c31345a1a5ccbc55548330972f9c8869324003c2f703a819552->leave($__internal_1d7b09c6c2797c31345a1a5ccbc55548330972f9c8869324003c2f703a819552_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
