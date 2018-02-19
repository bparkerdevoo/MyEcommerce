<?php

/* UserBundle:FOSUserBundle/views/Resetting:email.txt.twig */
class __TwigTemplate_224453505b8d65f55c8c8cfba200ecf120cae743607573b67d73282642d06faa extends Twig_Template
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
        $__internal_0c230a398ed5b20a69327422a6e6655e35f27756e950f601118291ecb698e5ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c230a398ed5b20a69327422a6e6655e35f27756e950f601118291ecb698e5ea->enter($__internal_0c230a398ed5b20a69327422a6e6655e35f27756e950f601118291ecb698e5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Resetting:email.txt.twig"));

        $__internal_989fe0745038ae1ac4f5a1e119361159c126841b2a30a8574b657268d83a99af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989fe0745038ae1ac4f5a1e119361159c126841b2a30a8574b657268d83a99af->enter($__internal_989fe0745038ae1ac4f5a1e119361159c126841b2a30a8574b657268d83a99af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0c230a398ed5b20a69327422a6e6655e35f27756e950f601118291ecb698e5ea->leave($__internal_0c230a398ed5b20a69327422a6e6655e35f27756e950f601118291ecb698e5ea_prof);

        
        $__internal_989fe0745038ae1ac4f5a1e119361159c126841b2a30a8574b657268d83a99af->leave($__internal_989fe0745038ae1ac4f5a1e119361159c126841b2a30a8574b657268d83a99af_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a74d2a35aa73609e43253e8d22c7f9d42330be859091b1f869b8afb4b81da13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74d2a35aa73609e43253e8d22c7f9d42330be859091b1f869b8afb4b81da13e->enter($__internal_a74d2a35aa73609e43253e8d22c7f9d42330be859091b1f869b8afb4b81da13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_02a0cef3180eda172ef703ab9a1fa447e0c5174765d73a2d48194cf0bce97aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a0cef3180eda172ef703ab9a1fa447e0c5174765d73a2d48194cf0bce97aba->enter($__internal_02a0cef3180eda172ef703ab9a1fa447e0c5174765d73a2d48194cf0bce97aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_02a0cef3180eda172ef703ab9a1fa447e0c5174765d73a2d48194cf0bce97aba->leave($__internal_02a0cef3180eda172ef703ab9a1fa447e0c5174765d73a2d48194cf0bce97aba_prof);

        
        $__internal_a74d2a35aa73609e43253e8d22c7f9d42330be859091b1f869b8afb4b81da13e->leave($__internal_a74d2a35aa73609e43253e8d22c7f9d42330be859091b1f869b8afb4b81da13e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ed57a3e64935b895ca8e1380464c96d55c46bcd3fe239465543a6bda5ed93257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed57a3e64935b895ca8e1380464c96d55c46bcd3fe239465543a6bda5ed93257->enter($__internal_ed57a3e64935b895ca8e1380464c96d55c46bcd3fe239465543a6bda5ed93257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e898db620342d2f91f5737b33fc7056663eb1c171c902b8865ada6575390b7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e898db620342d2f91f5737b33fc7056663eb1c171c902b8865ada6575390b7b5->enter($__internal_e898db620342d2f91f5737b33fc7056663eb1c171c902b8865ada6575390b7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_e898db620342d2f91f5737b33fc7056663eb1c171c902b8865ada6575390b7b5->leave($__internal_e898db620342d2f91f5737b33fc7056663eb1c171c902b8865ada6575390b7b5_prof);

        
        $__internal_ed57a3e64935b895ca8e1380464c96d55c46bcd3fe239465543a6bda5ed93257->leave($__internal_ed57a3e64935b895ca8e1380464c96d55c46bcd3fe239465543a6bda5ed93257_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dd17c7ba7dd173f6b902dfd352331de57f79b620f15249cfa18344a146094881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd17c7ba7dd173f6b902dfd352331de57f79b620f15249cfa18344a146094881->enter($__internal_dd17c7ba7dd173f6b902dfd352331de57f79b620f15249cfa18344a146094881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_66eacf6e36d46cc224dc29115d80630bb5f4ef9774583dfa7ccd577df682f32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66eacf6e36d46cc224dc29115d80630bb5f4ef9774583dfa7ccd577df682f32a->enter($__internal_66eacf6e36d46cc224dc29115d80630bb5f4ef9774583dfa7ccd577df682f32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_66eacf6e36d46cc224dc29115d80630bb5f4ef9774583dfa7ccd577df682f32a->leave($__internal_66eacf6e36d46cc224dc29115d80630bb5f4ef9774583dfa7ccd577df682f32a_prof);

        
        $__internal_dd17c7ba7dd173f6b902dfd352331de57f79b620f15249cfa18344a146094881->leave($__internal_dd17c7ba7dd173f6b902dfd352331de57f79b620f15249cfa18344a146094881_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "UserBundle:FOSUserBundle/views/Resetting:email.txt.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
