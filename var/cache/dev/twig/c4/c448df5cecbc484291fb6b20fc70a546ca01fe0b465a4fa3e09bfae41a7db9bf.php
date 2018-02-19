<?php

/* UserBundle:FOSUserBundle/views/Group:new_content.html.twig */
class __TwigTemplate_3c0e6eb46584ddfc1bd49bb46defdf388a2bb718d5360a1177a8078655184148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71eb5729ce446e272389cce7f4f87fc41fb994131b0dd585adc8d0c1306684d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71eb5729ce446e272389cce7f4f87fc41fb994131b0dd585adc8d0c1306684d6->enter($__internal_71eb5729ce446e272389cce7f4f87fc41fb994131b0dd585adc8d0c1306684d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:new_content.html.twig"));

        $__internal_b9d457e1a04d891ab425b5c08cc2d44d7d8c265ff72da884475f2832a67fc5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d457e1a04d891ab425b5c08cc2d44d7d8c265ff72da884475f2832a67fc5e6->enter($__internal_b9d457e1a04d891ab425b5c08cc2d44d7d8c265ff72da884475f2832a67fc5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_71eb5729ce446e272389cce7f4f87fc41fb994131b0dd585adc8d0c1306684d6->leave($__internal_71eb5729ce446e272389cce7f4f87fc41fb994131b0dd585adc8d0c1306684d6_prof);

        
        $__internal_b9d457e1a04d891ab425b5c08cc2d44d7d8c265ff72da884475f2832a67fc5e6->leave($__internal_b9d457e1a04d891ab425b5c08cc2d44d7d8c265ff72da884475f2832a67fc5e6_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Group:new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "UserBundle:FOSUserBundle/views/Group:new_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Group/new_content.html.twig");
    }
}
