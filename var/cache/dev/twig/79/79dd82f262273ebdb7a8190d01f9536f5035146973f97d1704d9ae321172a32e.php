<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_7eb16633956523789fbe4676475ae2fb5e53bac23f306c7f8c75e135cafdab33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e74e1daea25c85781031f49d32deeda8d835f3ae6c80f439a51957718c781bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e74e1daea25c85781031f49d32deeda8d835f3ae6c80f439a51957718c781bd->enter($__internal_9e74e1daea25c85781031f49d32deeda8d835f3ae6c80f439a51957718c781bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        $__internal_cd7c1b1e8eb909e141f27305dfa3c064d14c7317432202b64ccb2baed1e5eedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7c1b1e8eb909e141f27305dfa3c064d14c7317432202b64ccb2baed1e5eedc->enter($__internal_cd7c1b1e8eb909e141f27305dfa3c064d14c7317432202b64ccb2baed1e5eedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new Twig_Error_Runtime('Variable "edit" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 21, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 25, $this->getSourceContext()); })()), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_9e74e1daea25c85781031f49d32deeda8d835f3ae6c80f439a51957718c781bd->leave($__internal_9e74e1daea25c85781031f49d32deeda8d835f3ae6c80f439a51957718c781bd_prof);

        
        $__internal_cd7c1b1e8eb909e141f27305dfa3c064d14c7317432202b64ccb2baed1e5eedc->leave($__internal_cd7c1b1e8eb909e141f27305dfa3c064d14c7317432202b64ccb2baed1e5eedc_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_824f1cd89cc2a9fc80f7b54a60e500354b7b4a1407b4deef0c5ea66ca3d74d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_824f1cd89cc2a9fc80f7b54a60e500354b7b4a1407b4deef0c5ea66ca3d74d39->enter($__internal_824f1cd89cc2a9fc80f7b54a60e500354b7b4a1407b4deef0c5ea66ca3d74d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_0e848e00329f6fb3ee447605e06466dc53155eedf5973d055d05d7c835375d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e848e00329f6fb3ee447605e06466dc53155eedf5973d055d05d7c835375d69->enter($__internal_0e848e00329f6fb3ee447605e06466dc53155eedf5973d055d05d7c835375d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 15, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 15, $this->getSourceContext()); })()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 17, $this->getSourceContext()); })()), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_0e848e00329f6fb3ee447605e06466dc53155eedf5973d055d05d7c835375d69->leave($__internal_0e848e00329f6fb3ee447605e06466dc53155eedf5973d055d05d7c835375d69_prof);

        
        $__internal_824f1cd89cc2a9fc80f7b54a60e500354b7b4a1407b4deef0c5ea66ca3d74d39->leave($__internal_824f1cd89cc2a9fc80f7b54a60e500354b7b4a1407b4deef0c5ea66ca3d74d39_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_fbaa25db6309ad8196f7bebbfecc99df1f362cf425876ddf5a6808d6981b5b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbaa25db6309ad8196f7bebbfecc99df1f362cf425876ddf5a6808d6981b5b11->enter($__internal_fbaa25db6309ad8196f7bebbfecc99df1f362cf425876ddf5a6808d6981b5b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_511dbe7692718e1510ca7119a50947a02dedfd852b551d2f0ee4c2e5ac2e7edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511dbe7692718e1510ca7119a50947a02dedfd852b551d2f0ee4c2e5ac2e7edd->enter($__internal_511dbe7692718e1510ca7119a50947a02dedfd852b551d2f0ee4c2e5ac2e7edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 23, $this->getSourceContext()); })()), 'widget');
        
        $__internal_511dbe7692718e1510ca7119a50947a02dedfd852b551d2f0ee4c2e5ac2e7edd->leave($__internal_511dbe7692718e1510ca7119a50947a02dedfd852b551d2f0ee4c2e5ac2e7edd_prof);

        
        $__internal_fbaa25db6309ad8196f7bebbfecc99df1f362cf425876ddf5a6808d6981b5b11->leave($__internal_fbaa25db6309ad8196f7bebbfecc99df1f362cf425876ddf5a6808d6981b5b11_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_438cbd55e95f2740b081c8671df6a0345d254d5330b268e57980293629df4c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438cbd55e95f2740b081c8671df6a0345d254d5330b268e57980293629df4c6b->enter($__internal_438cbd55e95f2740b081c8671df6a0345d254d5330b268e57980293629df4c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        $__internal_52f8447af42114646df78f9b7dd0661ea2fa0a4b10a7c01ef5fcdff330d306f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f8447af42114646df78f9b7dd0661ea2fa0a4b10a7c01ef5fcdff330d306f5->enter($__internal_52f8447af42114646df78f9b7dd0661ea2fa0a4b10a7c01ef5fcdff330d306f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 26, $this->getSourceContext()); })()), "help", array());
        
        $__internal_52f8447af42114646df78f9b7dd0661ea2fa0a4b10a7c01ef5fcdff330d306f5->leave($__internal_52f8447af42114646df78f9b7dd0661ea2fa0a4b10a7c01ef5fcdff330d306f5_prof);

        
        $__internal_438cbd55e95f2740b081c8671df6a0345d254d5330b268e57980293629df4c6b->leave($__internal_438cbd55e95f2740b081c8671df6a0345d254d5330b268e57980293629df4c6b_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_2bda9a4d833cebfe718bb06eef346782564b8ad250a1d502188b44dabf92c909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bda9a4d833cebfe718bb06eef346782564b8ad250a1d502188b44dabf92c909->enter($__internal_2bda9a4d833cebfe718bb06eef346782564b8ad250a1d502188b44dabf92c909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_60ffe38e33d457a2ef232872c3280d2514a73ea864daaada972bdbd6f3baab7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ffe38e33d457a2ef232872c3280d2514a73ea864daaada972bdbd6f3baab7f->enter($__internal_60ffe38e33d457a2ef232872c3280d2514a73ea864daaada972bdbd6f3baab7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        
        $__internal_60ffe38e33d457a2ef232872c3280d2514a73ea864daaada972bdbd6f3baab7f->leave($__internal_60ffe38e33d457a2ef232872c3280d2514a73ea864daaada972bdbd6f3baab7f_prof);

        
        $__internal_2bda9a4d833cebfe718bb06eef346782564b8ad250a1d502188b44dabf92c909->leave($__internal_2bda9a4d833cebfe718bb06eef346782564b8ad250a1d502188b44dabf92c909_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  141 => 26,  123 => 23,  113 => 19,  107 => 17,  101 => 15,  98 => 14,  89 => 13,  75 => 31,  73 => 30,  69 => 28,  63 => 26,  61 => 25,  58 => 24,  56 => 23,  45 => 21,  42 => 20,  40 => 13,  32 => 12,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_standard_edit_field.html.twig");
    }
}
