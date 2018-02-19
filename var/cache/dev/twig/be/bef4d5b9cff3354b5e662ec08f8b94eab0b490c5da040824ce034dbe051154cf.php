<?php

/* UserBundle:FOSUserBundle/views/Resetting:check_email.html.twig */
class __TwigTemplate_9c8e1603adae2baca49f4409e698f04e75d7c0b035c95e99db7952f9c34978fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Resetting:check_email.html.twig", 1);
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
        $__internal_bd6c0dfba659626ee5dc611d06d1168df4efd1140a776795ef65d73b04e8da99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6c0dfba659626ee5dc611d06d1168df4efd1140a776795ef65d73b04e8da99->enter($__internal_bd6c0dfba659626ee5dc611d06d1168df4efd1140a776795ef65d73b04e8da99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Resetting:check_email.html.twig"));

        $__internal_05728fbc09659a66ccec7abe7baff3e9509c92fda6a67ebe43e9297cfd8909e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05728fbc09659a66ccec7abe7baff3e9509c92fda6a67ebe43e9297cfd8909e3->enter($__internal_05728fbc09659a66ccec7abe7baff3e9509c92fda6a67ebe43e9297cfd8909e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd6c0dfba659626ee5dc611d06d1168df4efd1140a776795ef65d73b04e8da99->leave($__internal_bd6c0dfba659626ee5dc611d06d1168df4efd1140a776795ef65d73b04e8da99_prof);

        
        $__internal_05728fbc09659a66ccec7abe7baff3e9509c92fda6a67ebe43e9297cfd8909e3->leave($__internal_05728fbc09659a66ccec7abe7baff3e9509c92fda6a67ebe43e9297cfd8909e3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b444a34f01055650873c889990405482ea2bac19e20808f9cb664996b27f4bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b444a34f01055650873c889990405482ea2bac19e20808f9cb664996b27f4bad->enter($__internal_b444a34f01055650873c889990405482ea2bac19e20808f9cb664996b27f4bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_614a9a93067dc1bdb5280f3c99d85941232d245a5d0cebac6b6e7e22baacf1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614a9a93067dc1bdb5280f3c99d85941232d245a5d0cebac6b6e7e22baacf1ca->enter($__internal_614a9a93067dc1bdb5280f3c99d85941232d245a5d0cebac6b6e7e22baacf1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_614a9a93067dc1bdb5280f3c99d85941232d245a5d0cebac6b6e7e22baacf1ca->leave($__internal_614a9a93067dc1bdb5280f3c99d85941232d245a5d0cebac6b6e7e22baacf1ca_prof);

        
        $__internal_b444a34f01055650873c889990405482ea2bac19e20808f9cb664996b27f4bad->leave($__internal_b444a34f01055650873c889990405482ea2bac19e20808f9cb664996b27f4bad_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "UserBundle:FOSUserBundle/views/Resetting:check_email.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
