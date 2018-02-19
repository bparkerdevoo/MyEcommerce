<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_2f323f206d134bd64caf4966d11236eea0e71f3dc06a3e9f70cd84de506178b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93b618440f801c72c9ea2c15bb6f1001dc754704841a1a283e40c39cffeec313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b618440f801c72c9ea2c15bb6f1001dc754704841a1a283e40c39cffeec313->enter($__internal_93b618440f801c72c9ea2c15bb6f1001dc754704841a1a283e40c39cffeec313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $__internal_1d1668cc3eee1d81f041c09a3ea4552fc9f50d086052325d75976fc615e8c3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1668cc3eee1d81f041c09a3ea4552fc9f50d086052325d75976fc615e8c3f7->enter($__internal_1d1668cc3eee1d81f041c09a3ea4552fc9f50d086052325d75976fc615e8c3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93b618440f801c72c9ea2c15bb6f1001dc754704841a1a283e40c39cffeec313->leave($__internal_93b618440f801c72c9ea2c15bb6f1001dc754704841a1a283e40c39cffeec313_prof);

        
        $__internal_1d1668cc3eee1d81f041c09a3ea4552fc9f50d086052325d75976fc615e8c3f7->leave($__internal_1d1668cc3eee1d81f041c09a3ea4552fc9f50d086052325d75976fc615e8c3f7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_af2f5aab24f63199104a2aff08ea77587fffff6280615b22f0c6764bf748d440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2f5aab24f63199104a2aff08ea77587fffff6280615b22f0c6764bf748d440->enter($__internal_af2f5aab24f63199104a2aff08ea77587fffff6280615b22f0c6764bf748d440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_cd5eb5cc0bdce814bdfa9c48a364bda7b1e4c19cc535f655caf05e0a63684b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5eb5cc0bdce814bdfa9c48a364bda7b1e4c19cc535f655caf05e0a63684b15->enter($__internal_cd5eb5cc0bdce814bdfa9c48a364bda7b1e4c19cc535f655caf05e0a63684b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 18, $this->getSourceContext()); })()), "H:i:s"), "html", null, true);
        }
        
        $__internal_cd5eb5cc0bdce814bdfa9c48a364bda7b1e4c19cc535f655caf05e0a63684b15->leave($__internal_cd5eb5cc0bdce814bdfa9c48a364bda7b1e4c19cc535f655caf05e0a63684b15_prof);

        
        $__internal_af2f5aab24f63199104a2aff08ea77587fffff6280615b22f0c6764bf748d440->leave($__internal_af2f5aab24f63199104a2aff08ea77587fffff6280615b22f0c6764bf748d440_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/CRUD/base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_time.html.twig");
    }
}
