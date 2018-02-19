<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_d332aaa411554bc5f26137d9498ba172a41872e3d01f7b88c39648974b7cbb14 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f77dbb85e061321b6dc44ae6c8b89748a9bc29c796c11361d66e0aec29b1611e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77dbb85e061321b6dc44ae6c8b89748a9bc29c796c11361d66e0aec29b1611e->enter($__internal_f77dbb85e061321b6dc44ae6c8b89748a9bc29c796c11361d66e0aec29b1611e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $__internal_0b1af6f557d5eafeefd3dc05702b447c7b2166505123abc994c49bef9253d31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b1af6f557d5eafeefd3dc05702b447c7b2166505123abc994c49bef9253d31d->enter($__internal_0b1af6f557d5eafeefd3dc05702b447c7b2166505123abc994c49bef9253d31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f77dbb85e061321b6dc44ae6c8b89748a9bc29c796c11361d66e0aec29b1611e->leave($__internal_f77dbb85e061321b6dc44ae6c8b89748a9bc29c796c11361d66e0aec29b1611e_prof);

        
        $__internal_0b1af6f557d5eafeefd3dc05702b447c7b2166505123abc994c49bef9253d31d->leave($__internal_0b1af6f557d5eafeefd3dc05702b447c7b2166505123abc994c49bef9253d31d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_059ea114553fc54f814e9c005bf52d5ad2d8a8ea05eec59be23f23ba2c7664cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_059ea114553fc54f814e9c005bf52d5ad2d8a8ea05eec59be23f23ba2c7664cf->enter($__internal_059ea114553fc54f814e9c005bf52d5ad2d8a8ea05eec59be23f23ba2c7664cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e269f7870e6e36f690ea344bed6956ab73513ff9ca5c6e93fb063cfe3bf1df90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e269f7870e6e36f690ea344bed6956ab73513ff9ca5c6e93fb063cfe3bf1df90->enter($__internal_e269f7870e6e36f690ea344bed6956ab73513ff9ca5c6e93fb063cfe3bf1df90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_e269f7870e6e36f690ea344bed6956ab73513ff9ca5c6e93fb063cfe3bf1df90->leave($__internal_e269f7870e6e36f690ea344bed6956ab73513ff9ca5c6e93fb063cfe3bf1df90_prof);

        
        $__internal_059ea114553fc54f814e9c005bf52d5ad2d8a8ea05eec59be23f23ba2c7664cf->leave($__internal_059ea114553fc54f814e9c005bf52d5ad2d8a8ea05eec59be23f23ba2c7664cf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_integer.html.twig");
    }
}
