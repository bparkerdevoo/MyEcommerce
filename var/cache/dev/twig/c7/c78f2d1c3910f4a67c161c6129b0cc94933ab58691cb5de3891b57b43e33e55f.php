<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_79acb7df093f2f43da46565241a3917314513d1728a9ac038735a95f4d9a7c06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f9946b14d22557cde96fa98fa5be0b7ec1188456190fc683b162b2682a246bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9946b14d22557cde96fa98fa5be0b7ec1188456190fc683b162b2682a246bb->enter($__internal_4f9946b14d22557cde96fa98fa5be0b7ec1188456190fc683b162b2682a246bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_ddcca2b355ee288d0006420c27b1c9819468259280b9dd62598062a1b953035c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddcca2b355ee288d0006420c27b1c9819468259280b9dd62598062a1b953035c->enter($__internal_ddcca2b355ee288d0006420c27b1c9819468259280b9dd62598062a1b953035c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f9946b14d22557cde96fa98fa5be0b7ec1188456190fc683b162b2682a246bb->leave($__internal_4f9946b14d22557cde96fa98fa5be0b7ec1188456190fc683b162b2682a246bb_prof);

        
        $__internal_ddcca2b355ee288d0006420c27b1c9819468259280b9dd62598062a1b953035c->leave($__internal_ddcca2b355ee288d0006420c27b1c9819468259280b9dd62598062a1b953035c_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_97d2764f527f58bb61ea31e84bbaacd4a0b8997376bea672eb1f99cd0039659a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d2764f527f58bb61ea31e84bbaacd4a0b8997376bea672eb1f99cd0039659a->enter($__internal_97d2764f527f58bb61ea31e84bbaacd4a0b8997376bea672eb1f99cd0039659a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_cebd911ee79074b99661c91c820aa5d13dfa43ab31068b6eb573f3e23663a152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cebd911ee79074b99661c91c820aa5d13dfa43ab31068b6eb573f3e23663a152->enter($__internal_cebd911ee79074b99661c91c820aa5d13dfa43ab31068b6eb573f3e23663a152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->getSourceContext()); })()), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 7, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 7, $this->getSourceContext()); })()), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 7, $this->getSourceContext()); })()));
        }
        // line 9
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 9, $this->getSourceContext()); })()), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 9, $this->getSourceContext()); })()), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 9, $this->getSourceContext()); })());
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        }
        
        $__internal_cebd911ee79074b99661c91c820aa5d13dfa43ab31068b6eb573f3e23663a152->leave($__internal_cebd911ee79074b99661c91c820aa5d13dfa43ab31068b6eb573f3e23663a152_prof);

        
        $__internal_97d2764f527f58bb61ea31e84bbaacd4a0b8997376bea672eb1f99cd0039659a->leave($__internal_97d2764f527f58bb61ea31e84bbaacd4a0b8997376bea672eb1f99cd0039659a_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/knplabs/knp-menu-bundle/src/Resources/views/menu.html.twig");
    }
}
