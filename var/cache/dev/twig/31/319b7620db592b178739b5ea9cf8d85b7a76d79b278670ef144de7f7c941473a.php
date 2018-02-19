<?php

/* knp_menu_ordered.html.twig */
class __TwigTemplate_25bba2379c7980605ac87417d975fd5d230bf2f76f5aa3276bc6c7362b10b201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f637071cc4ea66f01f2c197cdbb7d0f5792bc378e9db3749a5778c0a0da1124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f637071cc4ea66f01f2c197cdbb7d0f5792bc378e9db3749a5778c0a0da1124->enter($__internal_3f637071cc4ea66f01f2c197cdbb7d0f5792bc378e9db3749a5778c0a0da1124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_ordered.html.twig"));

        $__internal_c114c59c5e83f62191d4e20337da324cd719f5ea1fe35d06e72017171bd8d92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c114c59c5e83f62191d4e20337da324cd719f5ea1fe35d06e72017171bd8d92a->enter($__internal_c114c59c5e83f62191d4e20337da324cd719f5ea1fe35d06e72017171bd8d92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_ordered.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f637071cc4ea66f01f2c197cdbb7d0f5792bc378e9db3749a5778c0a0da1124->leave($__internal_3f637071cc4ea66f01f2c197cdbb7d0f5792bc378e9db3749a5778c0a0da1124_prof);

        
        $__internal_c114c59c5e83f62191d4e20337da324cd719f5ea1fe35d06e72017171bd8d92a->leave($__internal_c114c59c5e83f62191d4e20337da324cd719f5ea1fe35d06e72017171bd8d92a_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_9e9807c2007106648c006faf8098bb5961081816e30b31cf877b136c8bb3b89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e9807c2007106648c006faf8098bb5961081816e30b31cf877b136c8bb3b89b->enter($__internal_9e9807c2007106648c006faf8098bb5961081816e30b31cf877b136c8bb3b89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_50c8f27cd4b79b94acfc3c787df62da1bd77f26669c24438ef40590f9c380165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c8f27cd4b79b94acfc3c787df62da1bd77f26669c24438ef40590f9c380165->enter($__internal_50c8f27cd4b79b94acfc3c787df62da1bd77f26669c24438ef40590f9c380165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "knp_menu_ordered.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 6, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 6, $this->getSourceContext()); })()), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 6, $this->getSourceContext()); })()), "displayChildren", array()))) {
            // line 7
            echo "    <ol";
            echo $context["macros"]->macro_attributes((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 7, $this->getSourceContext()); })()));
            echo ">
        ";
            // line 8
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ol>
";
        }
        
        $__internal_50c8f27cd4b79b94acfc3c787df62da1bd77f26669c24438ef40590f9c380165->leave($__internal_50c8f27cd4b79b94acfc3c787df62da1bd77f26669c24438ef40590f9c380165_prof);

        
        $__internal_9e9807c2007106648c006faf8098bb5961081816e30b31cf877b136c8bb3b89b->leave($__internal_9e9807c2007106648c006faf8098bb5961081816e30b31cf877b136c8bb3b89b_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_ordered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  56 => 7,  54 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block list %}
{% import 'knp_menu.html.twig' as macros %}

{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    <ol{{ macros.attributes(listAttributes) }}>
        {{ block('children') }}
    </ol>
{% endif %}
{% endblock %}
", "knp_menu_ordered.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_ordered.html.twig");
    }
}
