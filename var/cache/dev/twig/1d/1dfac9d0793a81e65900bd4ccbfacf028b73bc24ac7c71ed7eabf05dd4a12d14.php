<?php

/* UserBundle:FOSUserBundle/views/Registration:email.txt.twig */
class __TwigTemplate_49bbce1579aa8fe8f52334bcdb28ec034387c59963405385ec7803dd453b207e extends Twig_Template
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
        $__internal_c185a45aff998ae30a5bd74efee4e585a8784825e63fb5825d7b0082410c3bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c185a45aff998ae30a5bd74efee4e585a8784825e63fb5825d7b0082410c3bf2->enter($__internal_c185a45aff998ae30a5bd74efee4e585a8784825e63fb5825d7b0082410c3bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Registration:email.txt.twig"));

        $__internal_7a6fd086de8366fc4ce1636a103a10da4d707eab9e5e69d3b1cc7c6075ff7347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6fd086de8366fc4ce1636a103a10da4d707eab9e5e69d3b1cc7c6075ff7347->enter($__internal_7a6fd086de8366fc4ce1636a103a10da4d707eab9e5e69d3b1cc7c6075ff7347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c185a45aff998ae30a5bd74efee4e585a8784825e63fb5825d7b0082410c3bf2->leave($__internal_c185a45aff998ae30a5bd74efee4e585a8784825e63fb5825d7b0082410c3bf2_prof);

        
        $__internal_7a6fd086de8366fc4ce1636a103a10da4d707eab9e5e69d3b1cc7c6075ff7347->leave($__internal_7a6fd086de8366fc4ce1636a103a10da4d707eab9e5e69d3b1cc7c6075ff7347_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_48d36753d89467fd0c4f7118f85e7bc68729a139e24d4c7a84bbd2a6190d0ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d36753d89467fd0c4f7118f85e7bc68729a139e24d4c7a84bbd2a6190d0ee5->enter($__internal_48d36753d89467fd0c4f7118f85e7bc68729a139e24d4c7a84bbd2a6190d0ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8e19eaf6d34449df5d084611a195eccd399b3d24d337478490d13c0bbc917f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e19eaf6d34449df5d084611a195eccd399b3d24d337478490d13c0bbc917f69->enter($__internal_8e19eaf6d34449df5d084611a195eccd399b3d24d337478490d13c0bbc917f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_8e19eaf6d34449df5d084611a195eccd399b3d24d337478490d13c0bbc917f69->leave($__internal_8e19eaf6d34449df5d084611a195eccd399b3d24d337478490d13c0bbc917f69_prof);

        
        $__internal_48d36753d89467fd0c4f7118f85e7bc68729a139e24d4c7a84bbd2a6190d0ee5->leave($__internal_48d36753d89467fd0c4f7118f85e7bc68729a139e24d4c7a84bbd2a6190d0ee5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_054bc56848a6e72c629a447614262920418a20c047033f46f1171528ebaae625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054bc56848a6e72c629a447614262920418a20c047033f46f1171528ebaae625->enter($__internal_054bc56848a6e72c629a447614262920418a20c047033f46f1171528ebaae625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3ffc6258449e3f6d6650815ac79b852c3fb3fe1fa20b8e338033ae7eeb25cfbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffc6258449e3f6d6650815ac79b852c3fb3fe1fa20b8e338033ae7eeb25cfbe->enter($__internal_3ffc6258449e3f6d6650815ac79b852c3fb3fe1fa20b8e338033ae7eeb25cfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_3ffc6258449e3f6d6650815ac79b852c3fb3fe1fa20b8e338033ae7eeb25cfbe->leave($__internal_3ffc6258449e3f6d6650815ac79b852c3fb3fe1fa20b8e338033ae7eeb25cfbe_prof);

        
        $__internal_054bc56848a6e72c629a447614262920418a20c047033f46f1171528ebaae625->leave($__internal_054bc56848a6e72c629a447614262920418a20c047033f46f1171528ebaae625_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_683c0afe8bb42878887782e3ace88ea31cee6c0b4de3b445d3be38473f721cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683c0afe8bb42878887782e3ace88ea31cee6c0b4de3b445d3be38473f721cf7->enter($__internal_683c0afe8bb42878887782e3ace88ea31cee6c0b4de3b445d3be38473f721cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_eab675c6349885370ef4dcdc9c391df91de3866ba8bd2585d9bf6eb5514bd322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab675c6349885370ef4dcdc9c391df91de3866ba8bd2585d9bf6eb5514bd322->enter($__internal_eab675c6349885370ef4dcdc9c391df91de3866ba8bd2585d9bf6eb5514bd322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_eab675c6349885370ef4dcdc9c391df91de3866ba8bd2585d9bf6eb5514bd322->leave($__internal_eab675c6349885370ef4dcdc9c391df91de3866ba8bd2585d9bf6eb5514bd322_prof);

        
        $__internal_683c0afe8bb42878887782e3ace88ea31cee6c0b4de3b445d3be38473f721cf7->leave($__internal_683c0afe8bb42878887782e3ace88ea31cee6c0b4de3b445d3be38473f721cf7_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Registration:email.txt.twig";
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
", "UserBundle:FOSUserBundle/views/Registration:email.txt.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
