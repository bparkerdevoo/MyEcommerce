<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_e2234c8d13ee5306885fb3954f5a1abd1f2470d63ee822054d709fd06e281c8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e65acf23d0e89d67f5338000a740cb1f3c7bcb3b07a5258ce23639d00d8b4291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e65acf23d0e89d67f5338000a740cb1f3c7bcb3b07a5258ce23639d00d8b4291->enter($__internal_e65acf23d0e89d67f5338000a740cb1f3c7bcb3b07a5258ce23639d00d8b4291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_70a4bab01bed2c9122ebbd7562e1a52054ba285f220ed028928fed1de8b11e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a4bab01bed2c9122ebbd7562e1a52054ba285f220ed028928fed1de8b11e8e->enter($__internal_70a4bab01bed2c9122ebbd7562e1a52054ba285f220ed028928fed1de8b11e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e65acf23d0e89d67f5338000a740cb1f3c7bcb3b07a5258ce23639d00d8b4291->leave($__internal_e65acf23d0e89d67f5338000a740cb1f3c7bcb3b07a5258ce23639d00d8b4291_prof);

        
        $__internal_70a4bab01bed2c9122ebbd7562e1a52054ba285f220ed028928fed1de8b11e8e->leave($__internal_70a4bab01bed2c9122ebbd7562e1a52054ba285f220ed028928fed1de8b11e8e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66e2be0673147dbe26842a5acb2f95c0d36cd28b17cf9c383ce5fc7fdc9dfb4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e2be0673147dbe26842a5acb2f95c0d36cd28b17cf9c383ce5fc7fdc9dfb4b->enter($__internal_66e2be0673147dbe26842a5acb2f95c0d36cd28b17cf9c383ce5fc7fdc9dfb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6395b18963f0575405ef140ca9e6e5d475ba2615f825c7206ffd6ef4b749c982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6395b18963f0575405ef140ca9e6e5d475ba2615f825c7206ffd6ef4b749c982->enter($__internal_6395b18963f0575405ef140ca9e6e5d475ba2615f825c7206ffd6ef4b749c982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6395b18963f0575405ef140ca9e6e5d475ba2615f825c7206ffd6ef4b749c982->leave($__internal_6395b18963f0575405ef140ca9e6e5d475ba2615f825c7206ffd6ef4b749c982_prof);

        
        $__internal_66e2be0673147dbe26842a5acb2f95c0d36cd28b17cf9c383ce5fc7fdc9dfb4b->leave($__internal_66e2be0673147dbe26842a5acb2f95c0d36cd28b17cf9c383ce5fc7fdc9dfb4b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
