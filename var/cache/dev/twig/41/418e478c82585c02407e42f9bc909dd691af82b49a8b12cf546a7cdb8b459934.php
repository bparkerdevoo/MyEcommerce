<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_6c543fc6e1ec1f01586ec81caf4714492aabfa19112cfc07fbc04f8bd5c279c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cf2384fd01d0751fb71322111249db20b97b5369db614431a98495a6b2413e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf2384fd01d0751fb71322111249db20b97b5369db614431a98495a6b2413e7->enter($__internal_8cf2384fd01d0751fb71322111249db20b97b5369db614431a98495a6b2413e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_6f5a3a4417c89010190ea62fc838531d0438b8fdf66a1406f005dad6047e08a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5a3a4417c89010190ea62fc838531d0438b8fdf66a1406f005dad6047e08a4->enter($__internal_6f5a3a4417c89010190ea62fc838531d0438b8fdf66a1406f005dad6047e08a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8cf2384fd01d0751fb71322111249db20b97b5369db614431a98495a6b2413e7->leave($__internal_8cf2384fd01d0751fb71322111249db20b97b5369db614431a98495a6b2413e7_prof);

        
        $__internal_6f5a3a4417c89010190ea62fc838531d0438b8fdf66a1406f005dad6047e08a4->leave($__internal_6f5a3a4417c89010190ea62fc838531d0438b8fdf66a1406f005dad6047e08a4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ade5f198acd6247b8d7d75f1112c539f1f4bafb58057173f02d984bb3aa05206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade5f198acd6247b8d7d75f1112c539f1f4bafb58057173f02d984bb3aa05206->enter($__internal_ade5f198acd6247b8d7d75f1112c539f1f4bafb58057173f02d984bb3aa05206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b4f20fe195bcfa74ebb67b3fb69bf989c6adcec69c1cd94b8216777d1f670fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f20fe195bcfa74ebb67b3fb69bf989c6adcec69c1cd94b8216777d1f670fcb->enter($__internal_b4f20fe195bcfa74ebb67b3fb69bf989c6adcec69c1cd94b8216777d1f670fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_b4f20fe195bcfa74ebb67b3fb69bf989c6adcec69c1cd94b8216777d1f670fcb->leave($__internal_b4f20fe195bcfa74ebb67b3fb69bf989c6adcec69c1cd94b8216777d1f670fcb_prof);

        
        $__internal_ade5f198acd6247b8d7d75f1112c539f1f4bafb58057173f02d984bb3aa05206->leave($__internal_ade5f198acd6247b8d7d75f1112c539f1f4bafb58057173f02d984bb3aa05206_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0aed92ad19998e8278ca09bb4008865780a5faf2cac7b96269ae75c972ecd08d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aed92ad19998e8278ca09bb4008865780a5faf2cac7b96269ae75c972ecd08d->enter($__internal_0aed92ad19998e8278ca09bb4008865780a5faf2cac7b96269ae75c972ecd08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5d39f6b2a6cf81e02f496f5e82b88254078a4301baf84f317901b1a782a9b2d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d39f6b2a6cf81e02f496f5e82b88254078a4301baf84f317901b1a782a9b2d1->enter($__internal_5d39f6b2a6cf81e02f496f5e82b88254078a4301baf84f317901b1a782a9b2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_5d39f6b2a6cf81e02f496f5e82b88254078a4301baf84f317901b1a782a9b2d1->leave($__internal_5d39f6b2a6cf81e02f496f5e82b88254078a4301baf84f317901b1a782a9b2d1_prof);

        
        $__internal_0aed92ad19998e8278ca09bb4008865780a5faf2cac7b96269ae75c972ecd08d->leave($__internal_0aed92ad19998e8278ca09bb4008865780a5faf2cac7b96269ae75c972ecd08d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2440754d7f4ca0e79521e5eba151064434a1437e46cb4d213c5608ce7d61229c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2440754d7f4ca0e79521e5eba151064434a1437e46cb4d213c5608ce7d61229c->enter($__internal_2440754d7f4ca0e79521e5eba151064434a1437e46cb4d213c5608ce7d61229c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_3987f2748e9923fbeea91e42cc3abb0b7d13b26a7986dbe638f8f8deb1087e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3987f2748e9923fbeea91e42cc3abb0b7d13b26a7986dbe638f8f8deb1087e06->enter($__internal_3987f2748e9923fbeea91e42cc3abb0b7d13b26a7986dbe638f8f8deb1087e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3987f2748e9923fbeea91e42cc3abb0b7d13b26a7986dbe638f8f8deb1087e06->leave($__internal_3987f2748e9923fbeea91e42cc3abb0b7d13b26a7986dbe638f8f8deb1087e06_prof);

        
        $__internal_2440754d7f4ca0e79521e5eba151064434a1437e46cb4d213c5608ce7d61229c->leave($__internal_2440754d7f4ca0e79521e5eba151064434a1437e46cb4d213c5608ce7d61229c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
