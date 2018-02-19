<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_1f133c32d5a2180d0127367ac0f0c2180281cdba47efc3278f2dec6e89434088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e77cfb54c16471fda5011d04dccfaf58e86b6bfe7216baa6d4bbcf8217472c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e77cfb54c16471fda5011d04dccfaf58e86b6bfe7216baa6d4bbcf8217472c2->enter($__internal_1e77cfb54c16471fda5011d04dccfaf58e86b6bfe7216baa6d4bbcf8217472c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        $__internal_2975f7d928daac9adfa2fdb140ba7f271811a8abc1ee3d91a6fdc9b4c66d7253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2975f7d928daac9adfa2fdb140ba7f271811a8abc1ee3d91a6fdc9b4c66d7253->enter($__internal_2975f7d928daac9adfa2fdb140ba7f271811a8abc1ee3d91a6fdc9b4c66d7253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 13, $this->getSourceContext()); })()), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_1e77cfb54c16471fda5011d04dccfaf58e86b6bfe7216baa6d4bbcf8217472c2->leave($__internal_1e77cfb54c16471fda5011d04dccfaf58e86b6bfe7216baa6d4bbcf8217472c2_prof);

        
        $__internal_2975f7d928daac9adfa2fdb140ba7f271811a8abc1ee3d91a6fdc9b4c66d7253->leave($__internal_2975f7d928daac9adfa2fdb140ba7f271811a8abc1ee3d91a6fdc9b4c66d7253_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_64afb81c5c6c70ea68f7896989ccbaff5dc0eb59b0ef6059682d3a3501831599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64afb81c5c6c70ea68f7896989ccbaff5dc0eb59b0ef6059682d3a3501831599->enter($__internal_64afb81c5c6c70ea68f7896989ccbaff5dc0eb59b0ef6059682d3a3501831599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ce972383c75655b86582e36c4fafdb33ef37c502fec8801f9a477275ae696fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce972383c75655b86582e36c4fafdb33ef37c502fec8801f9a477275ae696fd6->enter($__internal_ce972383c75655b86582e36c4fafdb33ef37c502fec8801f9a477275ae696fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget');
        
        $__internal_ce972383c75655b86582e36c4fafdb33ef37c502fec8801f9a477275ae696fd6->leave($__internal_ce972383c75655b86582e36c4fafdb33ef37c502fec8801f9a477275ae696fd6_prof);

        
        $__internal_64afb81c5c6c70ea68f7896989ccbaff5dc0eb59b0ef6059682d3a3501831599->leave($__internal_64afb81c5c6c70ea68f7896989ccbaff5dc0eb59b0ef6059682d3a3501831599_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_079aee7004a3ad31a466e9aabf8ae7680fce2a40f92e3f90c9cf38f0c18683c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079aee7004a3ad31a466e9aabf8ae7680fce2a40f92e3f90c9cf38f0c18683c2->enter($__internal_079aee7004a3ad31a466e9aabf8ae7680fce2a40f92e3f90c9cf38f0c18683c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_953955c75bce3baa35fd4f54b3ce566ada4bd291a088df92bce5687ba8d7a0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953955c75bce3baa35fd4f54b3ce566ada4bd291a088df92bce5687ba8d7a0fd->enter($__internal_953955c75bce3baa35fd4f54b3ce566ada4bd291a088df92bce5687ba8d7a0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_953955c75bce3baa35fd4f54b3ce566ada4bd291a088df92bce5687ba8d7a0fd->leave($__internal_953955c75bce3baa35fd4f54b3ce566ada4bd291a088df92bce5687ba8d7a0fd_prof);

        
        $__internal_079aee7004a3ad31a466e9aabf8ae7680fce2a40f92e3f90c9cf38f0c18683c2->leave($__internal_079aee7004a3ad31a466e9aabf8ae7680fce2a40f92e3f90c9cf38f0c18683c2_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_98eb3d0dab99603604cfa90b7aa1529544dd2ba7b729e66110fdf24fac1d6fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98eb3d0dab99603604cfa90b7aa1529544dd2ba7b729e66110fdf24fac1d6fd2->enter($__internal_98eb3d0dab99603604cfa90b7aa1529544dd2ba7b729e66110fdf24fac1d6fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_6a5555f37ab8ed292c2432692213136497cc5c4432366904091e58f565b69cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5555f37ab8ed292c2432692213136497cc5c4432366904091e58f565b69cdd->enter($__internal_6a5555f37ab8ed292c2432692213136497cc5c4432366904091e58f565b69cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 25, $this->getSourceContext()); })()), 'errors');
        
        $__internal_6a5555f37ab8ed292c2432692213136497cc5c4432366904091e58f565b69cdd->leave($__internal_6a5555f37ab8ed292c2432692213136497cc5c4432366904091e58f565b69cdd_prof);

        
        $__internal_98eb3d0dab99603604cfa90b7aa1529544dd2ba7b729e66110fdf24fac1d6fd2->leave($__internal_98eb3d0dab99603604cfa90b7aa1529544dd2ba7b729e66110fdf24fac1d6fd2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  105 => 21,  99 => 19,  93 => 17,  90 => 16,  81 => 15,  63 => 14,  49 => 26,  47 => 25,  43 => 23,  40 => 15,  38 => 14,  32 => 13,  28 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
