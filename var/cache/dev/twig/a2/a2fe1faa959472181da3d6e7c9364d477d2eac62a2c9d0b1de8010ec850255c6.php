<?php

/* UserBundle:registered:confirmed.html.twig */
class __TwigTemplate_3997699b524b826e08a85f3b7fdb8ce606f251af0a880fd1dce87739326d2c0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:registered:confirmed.html.twig", 1);
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
        $__internal_8f51f5c4d86efc04760deff219729c354a7ce053a902227536da256b53a07d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f51f5c4d86efc04760deff219729c354a7ce053a902227536da256b53a07d69->enter($__internal_8f51f5c4d86efc04760deff219729c354a7ce053a902227536da256b53a07d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:registered:confirmed.html.twig"));

        $__internal_35c61eee1bb8cd41cbd92a84e160de90fbae25c291342d4f632c4a36360f257a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c61eee1bb8cd41cbd92a84e160de90fbae25c291342d4f632c4a36360f257a->enter($__internal_35c61eee1bb8cd41cbd92a84e160de90fbae25c291342d4f632c4a36360f257a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:registered:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f51f5c4d86efc04760deff219729c354a7ce053a902227536da256b53a07d69->leave($__internal_8f51f5c4d86efc04760deff219729c354a7ce053a902227536da256b53a07d69_prof);

        
        $__internal_35c61eee1bb8cd41cbd92a84e160de90fbae25c291342d4f632c4a36360f257a->leave($__internal_35c61eee1bb8cd41cbd92a84e160de90fbae25c291342d4f632c4a36360f257a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c1617b15e6024c3e4381c8d509762fb6244e83b64af03e7de5b23d7446a2825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1617b15e6024c3e4381c8d509762fb6244e83b64af03e7de5b23d7446a2825->enter($__internal_3c1617b15e6024c3e4381c8d509762fb6244e83b64af03e7de5b23d7446a2825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7a257d87f429c65c074f61209d25826a9bd833b8b7daf9c4089242197c088c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a257d87f429c65c074f61209d25826a9bd833b8b7daf9c4089242197c088c46->enter($__internal_7a257d87f429c65c074f61209d25826a9bd833b8b7daf9c4089242197c088c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"row\">
        <h2>Enregistrement réussi!!!</h2>
    </div>
    <div class=\"row\">
        <h4>vous pouvez vous connecter</h4>
    </div>
    <div class=\"span4\">
        <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
        ";
        // line 14
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "            <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
        ";
        }
        // line 17
        echo "    </div>
    <div class=\"span4 offset2\">
        ";
        // line 19
        $this->loadTemplate("UserBundle:nav_inc:utilisateursConfirme.html.twig", "UserBundle:registered:confirmed.html.twig", 19)->display($context);
        // line 20
        echo "    </div>






";
        
        $__internal_7a257d87f429c65c074f61209d25826a9bd833b8b7daf9c4089242197c088c46->leave($__internal_7a257d87f429c65c074f61209d25826a9bd833b8b7daf9c4089242197c088c46_prof);

        
        $__internal_3c1617b15e6024c3e4381c8d509762fb6244e83b64af03e7de5b23d7446a2825->leave($__internal_3c1617b15e6024c3e4381c8d509762fb6244e83b64af03e7de5b23d7446a2825_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:registered:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  76 => 19,  72 => 17,  64 => 15,  62 => 14,  58 => 13,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <div class=\"row\">
        <h2>Enregistrement réussi!!!</h2>
    </div>
    <div class=\"row\">
        <h4>vous pouvez vous connecter</h4>
    </div>
    <div class=\"span4\">
        <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
        {% if targetUrl %}
            <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
        {% endif %}
    </div>
    <div class=\"span4 offset2\">
        {% include 'UserBundle:nav_inc:utilisateursConfirme.html.twig' %}
    </div>






{% endblock fos_user_content %}
", "UserBundle:registered:confirmed.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/registered/confirmed.html.twig");
    }
}
