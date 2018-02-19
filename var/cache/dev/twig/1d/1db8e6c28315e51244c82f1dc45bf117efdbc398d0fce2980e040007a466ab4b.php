<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_0fc3bd3d72e259bd3513e871d4606fe166b64fdf14105f1d265c8bda8051cb83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5caf0887c3f950a79f85d9234c5de00fd69deb5cde5c9cce4ef3bccf57f47258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5caf0887c3f950a79f85d9234c5de00fd69deb5cde5c9cce4ef3bccf57f47258->enter($__internal_5caf0887c3f950a79f85d9234c5de00fd69deb5cde5c9cce4ef3bccf57f47258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        $__internal_66fdc23fa430981d365d21c62b3ce41494d50c1a777a5c1986a2f82cc97e8031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fdc23fa430981d365d21c62b3ce41494d50c1a777a5c1986a2f82cc97e8031->enter($__internal_66fdc23fa430981d365d21c62b3ce41494d50c1a777a5c1986a2f82cc97e8031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) || array_key_exists("edit", $context) ? $context["edit"] : (function () { throw new Twig_Error_Runtime('Variable "edit" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 12, $this->getSourceContext()); })()), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_5caf0887c3f950a79f85d9234c5de00fd69deb5cde5c9cce4ef3bccf57f47258->leave($__internal_5caf0887c3f950a79f85d9234c5de00fd69deb5cde5c9cce4ef3bccf57f47258_prof);

        
        $__internal_66fdc23fa430981d365d21c62b3ce41494d50c1a777a5c1986a2f82cc97e8031->leave($__internal_66fdc23fa430981d365d21c62b3ce41494d50c1a777a5c1986a2f82cc97e8031_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_61558ef811b1ac71bf9625ddef4372915aad862f7640fbb023ceb4189aa9fc9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61558ef811b1ac71bf9625ddef4372915aad862f7640fbb023ceb4189aa9fc9c->enter($__internal_61558ef811b1ac71bf9625ddef4372915aad862f7640fbb023ceb4189aa9fc9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_6370703e93a77a7a56ddb1680a4ad0a002041698ae8269ed8599b56974c3672f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6370703e93a77a7a56ddb1680a4ad0a002041698ae8269ed8599b56974c3672f->enter($__internal_6370703e93a77a7a56ddb1680a4ad0a002041698ae8269ed8599b56974c3672f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 15, $this->getSourceContext()); })()) == "natural")) {
            // line 16
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 17, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 17, $this->getSourceContext()); })()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 19, $this->getSourceContext()); })()), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_6370703e93a77a7a56ddb1680a4ad0a002041698ae8269ed8599b56974c3672f->leave($__internal_6370703e93a77a7a56ddb1680a4ad0a002041698ae8269ed8599b56974c3672f_prof);

        
        $__internal_61558ef811b1ac71bf9625ddef4372915aad862f7640fbb023ceb4189aa9fc9c->leave($__internal_61558ef811b1ac71bf9625ddef4372915aad862f7640fbb023ceb4189aa9fc9c_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_b477fb726f3a81a6e6ae987ab2ffb43b7a4fadb7a799917cfdefb52ae4b0874c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b477fb726f3a81a6e6ae987ab2ffb43b7a4fadb7a799917cfdefb52ae4b0874c->enter($__internal_b477fb726f3a81a6e6ae987ab2ffb43b7a4fadb7a799917cfdefb52ae4b0874c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_05cd88cc4e2f8987ec1030db0f4e385861543cac15a5375ab82f7a54e4c2d2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05cd88cc4e2f8987ec1030db0f4e385861543cac15a5375ab82f7a54e4c2d2c5->enter($__internal_05cd88cc4e2f8987ec1030db0f4e385861543cac15a5375ab82f7a54e4c2d2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 25, $this->getSourceContext()); })()), 'widget');
        
        $__internal_05cd88cc4e2f8987ec1030db0f4e385861543cac15a5375ab82f7a54e4c2d2c5->leave($__internal_05cd88cc4e2f8987ec1030db0f4e385861543cac15a5375ab82f7a54e4c2d2c5_prof);

        
        $__internal_b477fb726f3a81a6e6ae987ab2ffb43b7a4fadb7a799917cfdefb52ae4b0874c->leave($__internal_b477fb726f3a81a6e6ae987ab2ffb43b7a4fadb7a799917cfdefb52ae4b0874c_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_9f69fea3d2bb539b769cae24fda7acbba2cdc0a08abec4e790f1d9df2807ab49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f69fea3d2bb539b769cae24fda7acbba2cdc0a08abec4e790f1d9df2807ab49->enter($__internal_9f69fea3d2bb539b769cae24fda7acbba2cdc0a08abec4e790f1d9df2807ab49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_8df55ba2cb0a94c853fda66e1c3ab95276d224dc4ecae81962d5b73b7e664fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df55ba2cb0a94c853fda66e1c3ab95276d224dc4ecae81962d5b73b7e664fda->enter($__internal_8df55ba2cb0a94c853fda66e1c3ab95276d224dc4ecae81962d5b73b7e664fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 28, $this->getSourceContext()); })()), 'errors');
        
        $__internal_8df55ba2cb0a94c853fda66e1c3ab95276d224dc4ecae81962d5b73b7e664fda->leave($__internal_8df55ba2cb0a94c853fda66e1c3ab95276d224dc4ecae81962d5b73b7e664fda_prof);

        
        $__internal_9f69fea3d2bb539b769cae24fda7acbba2cdc0a08abec4e790f1d9df2807ab49->leave($__internal_9f69fea3d2bb539b769cae24fda7acbba2cdc0a08abec4e790f1d9df2807ab49_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  110 => 25,  100 => 23,  96 => 21,  90 => 19,  84 => 17,  81 => 16,  78 => 15,  69 => 14,  57 => 29,  55 => 28,  51 => 26,  49 => 25,  46 => 24,  44 => 14,  31 => 12,  28 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div id=\"sonata-ba-field-container-{{ field_element.vars.id }}\" class=\"sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}\">

    {% block label %}
        {% if inline == 'natural' %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endif %}
    {% endblock %}

    {% block field %}{{ form_widget(field_element) }}{% endblock %}

    <div class=\"sonata-ba-field-error-messages\">
        {% block errors %}{{ form_errors(field_element) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_inline_edit_field.html.twig");
    }
}
