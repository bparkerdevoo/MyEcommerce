<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_1132a3bc286af8cc02aa467057ebd0c70f72ddb717a68aadcee6e9369b8e0a63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53dee7e7416ea3e9b552380a7299017214e791d89b5ffa41fc24b492e18495f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53dee7e7416ea3e9b552380a7299017214e791d89b5ffa41fc24b492e18495f3->enter($__internal_53dee7e7416ea3e9b552380a7299017214e791d89b5ffa41fc24b492e18495f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        $__internal_e713b56019e26b4b76d196a5d888f1e938614851b234b86817c17bc7621d7314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e713b56019e26b4b76d196a5d888f1e938614851b234b86817c17bc7621d7314->enter($__internal_e713b56019e26b4b76d196a5d888f1e938614851b234b86817c17bc7621d7314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 23, $this->getSourceContext()); })()), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_53dee7e7416ea3e9b552380a7299017214e791d89b5ffa41fc24b492e18495f3->leave($__internal_53dee7e7416ea3e9b552380a7299017214e791d89b5ffa41fc24b492e18495f3_prof);

        
        $__internal_e713b56019e26b4b76d196a5d888f1e938614851b234b86817c17bc7621d7314->leave($__internal_e713b56019e26b4b76d196a5d888f1e938614851b234b86817c17bc7621d7314_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_0f4234d6f6c3d00611fa08d41cac442758de9d9c65cbeb665ab4edaf8c234d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f4234d6f6c3d00611fa08d41cac442758de9d9c65cbeb665ab4edaf8c234d5b->enter($__internal_0f4234d6f6c3d00611fa08d41cac442758de9d9c65cbeb665ab4edaf8c234d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_7004f3ddbc59ae4091aca7ad7c14ca19d46ba0cc05e4817371ae8f3863613052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7004f3ddbc59ae4091aca7ad7c14ca19d46ba0cc05e4817371ae8f3863613052->enter($__internal_7004f3ddbc59ae4091aca7ad7c14ca19d46ba0cc05e4817371ae8f3863613052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["filter"] ?? null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 16, $this->getSourceContext()); })()), 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new Twig_Error_Runtime('Variable "filter" does not exist.', 16, $this->getSourceContext()); })()), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 18, $this->getSourceContext()); })()), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_7004f3ddbc59ae4091aca7ad7c14ca19d46ba0cc05e4817371ae8f3863613052->leave($__internal_7004f3ddbc59ae4091aca7ad7c14ca19d46ba0cc05e4817371ae8f3863613052_prof);

        
        $__internal_0f4234d6f6c3d00611fa08d41cac442758de9d9c65cbeb665ab4edaf8c234d5b->leave($__internal_0f4234d6f6c3d00611fa08d41cac442758de9d9c65cbeb665ab4edaf8c234d5b_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_1ab7c368474ee1534395632f1da06674eb8dfb056e5032c1801ba0f3736579da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab7c368474ee1534395632f1da06674eb8dfb056e5032c1801ba0f3736579da->enter($__internal_1ab7c368474ee1534395632f1da06674eb8dfb056e5032c1801ba0f3736579da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6e6e3bf95ced433396eea01a9b1ae09e31c7c7701c15729b8f3922836a551221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6e3bf95ced433396eea01a9b1ae09e31c7c7701c15729b8f3922836a551221->enter($__internal_6e6e3bf95ced433396eea01a9b1ae09e31c7c7701c15729b8f3922836a551221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filter_form"]) || array_key_exists("filter_form", $context) ? $context["filter_form"] : (function () { throw new Twig_Error_Runtime('Variable "filter_form" does not exist.', 24, $this->getSourceContext()); })()), 'widget');
        
        $__internal_6e6e3bf95ced433396eea01a9b1ae09e31c7c7701c15729b8f3922836a551221->leave($__internal_6e6e3bf95ced433396eea01a9b1ae09e31c7c7701c15729b8f3922836a551221_prof);

        
        $__internal_1ab7c368474ee1534395632f1da06674eb8dfb056e5032c1801ba0f3736579da->leave($__internal_1ab7c368474ee1534395632f1da06674eb8dfb056e5032c1801ba0f3736579da_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  81 => 20,  75 => 18,  69 => 16,  66 => 15,  57 => 14,  45 => 25,  43 => 24,  37 => 23,  34 => 22,  32 => 14,  27 => 11,);
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
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_filter_field.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_filter_field.html.twig");
    }
}
