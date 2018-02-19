<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_dbc1d50ee8dcb87c4f16a320d1252f59ca7e9b7a79aa911b968ac28e3f07ecbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51b8293fd8d5eeceb28cd040e108affde1c080c0ea7509db0d7a0fffc8a57171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b8293fd8d5eeceb28cd040e108affde1c080c0ea7509db0d7a0fffc8a57171->enter($__internal_51b8293fd8d5eeceb28cd040e108affde1c080c0ea7509db0d7a0fffc8a57171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $__internal_af3513b95f9e0dd073065a2e34571ee27acd3964947d08c79cd8e3cebf914231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3513b95f9e0dd073065a2e34571ee27acd3964947d08c79cd8e3cebf914231->enter($__internal_af3513b95f9e0dd073065a2e34571ee27acd3964947d08c79cd8e3cebf914231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51b8293fd8d5eeceb28cd040e108affde1c080c0ea7509db0d7a0fffc8a57171->leave($__internal_51b8293fd8d5eeceb28cd040e108affde1c080c0ea7509db0d7a0fffc8a57171_prof);

        
        $__internal_af3513b95f9e0dd073065a2e34571ee27acd3964947d08c79cd8e3cebf914231->leave($__internal_af3513b95f9e0dd073065a2e34571ee27acd3964947d08c79cd8e3cebf914231_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_4d72149d206c5ca5139baf8507f75995e4bbe98b96ef9586bcb11f1003df2b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d72149d206c5ca5139baf8507f75995e4bbe98b96ef9586bcb11f1003df2b4e->enter($__internal_4d72149d206c5ca5139baf8507f75995e4bbe98b96ef9586bcb11f1003df2b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_4c860d754c761cd3fa1df93225ca0549b5ac769df381a3dd314fe85e6123efcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c860d754c761cd3fa1df93225ca0549b5ac769df381a3dd314fe85e6123efcc->enter($__internal_4c860d754c761cd3fa1df93225ca0549b5ac769df381a3dd314fe85e6123efcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["elements"] ?? null), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 16, $this->getSourceContext()); })()), array(), "array", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 17, $this->getSourceContext()); })()), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 17, $this->getSourceContext()); })()), array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 17, $this->getSourceContext()); })()), (isset($context["object_compare"]) || array_key_exists("object_compare", $context) ? $context["object_compare"] : (function () { throw new Twig_Error_Runtime('Variable "object_compare" does not exist.', 17, $this->getSourceContext()); })()));
            echo "
        ";
        }
        // line 19
        echo "    </tr>
";
        
        $__internal_4c860d754c761cd3fa1df93225ca0549b5ac769df381a3dd314fe85e6123efcc->leave($__internal_4c860d754c761cd3fa1df93225ca0549b5ac769df381a3dd314fe85e6123efcc_prof);

        
        $__internal_4d72149d206c5ca5139baf8507f75995e4bbe98b96ef9586bcb11f1003df2b4e->leave($__internal_4d72149d206c5ca5139baf8507f75995e4bbe98b96ef9586bcb11f1003df2b4e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/CRUD/base_show.html.twig' %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_compare.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_show_compare.html.twig");
    }
}
