<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_d86d6f388cb290b2de531c5cd5f114efe4a2c200efb139e64cbc23b3201f9ec7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b140ad22b56043f73f19878cd5f602596f24a7ec647f5e32b6f51009a430580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b140ad22b56043f73f19878cd5f602596f24a7ec647f5e32b6f51009a430580->enter($__internal_8b140ad22b56043f73f19878cd5f602596f24a7ec647f5e32b6f51009a430580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $__internal_2948d61ba45d124aeaf97e748023fbcc01dd0634605e2979aafb7e3603418832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2948d61ba45d124aeaf97e748023fbcc01dd0634605e2979aafb7e3603418832->enter($__internal_2948d61ba45d124aeaf97e748023fbcc01dd0634605e2979aafb7e3603418832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b140ad22b56043f73f19878cd5f602596f24a7ec647f5e32b6f51009a430580->leave($__internal_8b140ad22b56043f73f19878cd5f602596f24a7ec647f5e32b6f51009a430580_prof);

        
        $__internal_2948d61ba45d124aeaf97e748023fbcc01dd0634605e2979aafb7e3603418832->leave($__internal_2948d61ba45d124aeaf97e748023fbcc01dd0634605e2979aafb7e3603418832_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6a953289cb1f08d3b68d9020679132b92e3f2b3e50a940743630ebc94f93526e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a953289cb1f08d3b68d9020679132b92e3f2b3e50a940743630ebc94f93526e->enter($__internal_6a953289cb1f08d3b68d9020679132b92e3f2b3e50a940743630ebc94f93526e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e71fc1fb0830d46a8dd0c673f17a20500cc04c79f92679eaf8e273cdaab96724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71fc1fb0830d46a8dd0c673f17a20500cc04c79f92679eaf8e273cdaab96724->enter($__internal_e71fc1fb0830d46a8dd0c673f17a20500cc04c79f92679eaf8e273cdaab96724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 15, $this->getSourceContext()); })()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_e71fc1fb0830d46a8dd0c673f17a20500cc04c79f92679eaf8e273cdaab96724->leave($__internal_e71fc1fb0830d46a8dd0c673f17a20500cc04c79f92679eaf8e273cdaab96724_prof);

        
        $__internal_6a953289cb1f08d3b68d9020679132b92e3f2b3e50a940743630ebc94f93526e->leave($__internal_6a953289cb1f08d3b68d9020679132b92e3f2b3e50a940743630ebc94f93526e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_currency.html.twig");
    }
}
