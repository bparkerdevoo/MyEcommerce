<?php

/* UserBundle:FOSUserBundle/views/Group:edit_content.html.twig */
class __TwigTemplate_141ac38b9bc7761eb4324d2122e585453191c9c22b8f00b39907a4d7d2bb2740 extends Twig_Template
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
        $__internal_49754435610bb4ea2155a44ca6e1f2e9c496b80e94976e9a0b49032e521c62b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49754435610bb4ea2155a44ca6e1f2e9c496b80e94976e9a0b49032e521c62b5->enter($__internal_49754435610bb4ea2155a44ca6e1f2e9c496b80e94976e9a0b49032e521c62b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:edit_content.html.twig"));

        $__internal_3dd190d196e43abd9cd6404b0cbc091da9c031aca1b6ef0dd9ae7dc8cf311f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd190d196e43abd9cd6404b0cbc091da9c031aca1b6ef0dd9ae7dc8cf311f38->enter($__internal_3dd190d196e43abd9cd6404b0cbc091da9c031aca1b6ef0dd9ae7dc8cf311f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) || array_key_exists("group_name", $context) ? $context["group_name"] : (function () { throw new Twig_Error_Runtime('Variable "group_name" does not exist.', 3, $this->getSourceContext()); })()))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_49754435610bb4ea2155a44ca6e1f2e9c496b80e94976e9a0b49032e521c62b5->leave($__internal_49754435610bb4ea2155a44ca6e1f2e9c496b80e94976e9a0b49032e521c62b5_prof);

        
        $__internal_3dd190d196e43abd9cd6404b0cbc091da9c031aca1b6ef0dd9ae7dc8cf311f38->leave($__internal_3dd190d196e43abd9cd6404b0cbc091da9c031aca1b6ef0dd9ae7dc8cf311f38_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Group:edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "UserBundle:FOSUserBundle/views/Group:edit_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Group/edit_content.html.twig");
    }
}
