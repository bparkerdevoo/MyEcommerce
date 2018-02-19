<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_b98d2cbba6792142bd929fbb8d54e805ac4aea50f8b4773a1afae7a8f85f2164 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e607814367b4142b2bb8e9f8c2682ac7814cd84a6b07e84f08d7c765ece40bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e607814367b4142b2bb8e9f8c2682ac7814cd84a6b07e84f08d7c765ece40bf->enter($__internal_9e607814367b4142b2bb8e9f8c2682ac7814cd84a6b07e84f08d7c765ece40bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $__internal_b2cb41d7650635d18047d33d28834c4b36e81554a85818ea71ffc85862dc0c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cb41d7650635d18047d33d28834c4b36e81554a85818ea71ffc85862dc0c49->enter($__internal_b2cb41d7650635d18047d33d28834c4b36e81554a85818ea71ffc85862dc0c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e607814367b4142b2bb8e9f8c2682ac7814cd84a6b07e84f08d7c765ece40bf->leave($__internal_9e607814367b4142b2bb8e9f8c2682ac7814cd84a6b07e84f08d7c765ece40bf_prof);

        
        $__internal_b2cb41d7650635d18047d33d28834c4b36e81554a85818ea71ffc85862dc0c49->leave($__internal_b2cb41d7650635d18047d33d28834c4b36e81554a85818ea71ffc85862dc0c49_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_75c20e6cfb46e68f7c289817eca5dca636fcb910feeabc7da0d12cd8bd0cfedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c20e6cfb46e68f7c289817eca5dca636fcb910feeabc7da0d12cd8bd0cfedf->enter($__internal_75c20e6cfb46e68f7c289817eca5dca636fcb910feeabc7da0d12cd8bd0cfedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_37556bdc6aa37030ff9d29acf28c150413724c25559d22f4d0415a8819b2bf8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37556bdc6aa37030ff9d29acf28c150413724c25559d22f4d0415a8819b2bf8a->enter($__internal_37556bdc6aa37030ff9d29acf28c150413724c25559d22f4d0415a8819b2bf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 14, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_37556bdc6aa37030ff9d29acf28c150413724c25559d22f4d0415a8819b2bf8a->leave($__internal_37556bdc6aa37030ff9d29acf28c150413724c25559d22f4d0415a8819b2bf8a_prof);

        
        $__internal_75c20e6cfb46e68f7c289817eca5dca636fcb910feeabc7da0d12cd8bd0cfedf->leave($__internal_75c20e6cfb46e68f7c289817eca5dca636fcb910feeabc7da0d12cd8bd0cfedf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_file.html.twig");
    }
}
