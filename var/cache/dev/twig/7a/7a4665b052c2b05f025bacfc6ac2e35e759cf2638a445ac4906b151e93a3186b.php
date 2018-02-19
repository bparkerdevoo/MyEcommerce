<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_de42d00d98f62b8c2d79e7093b0404e5f5e71e58a37d3c2a324a6964e1d2ab0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c05699123e9c8b947b414f53c05c3646d70c405a357699415d2b0ff68dab21c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05699123e9c8b947b414f53c05c3646d70c405a357699415d2b0ff68dab21c7->enter($__internal_c05699123e9c8b947b414f53c05c3646d70c405a357699415d2b0ff68dab21c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        $__internal_233eccabaacd7e4e45ec3ea98eb48718bd94f6fb641a9d2f146d0f1e7fe9fa0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233eccabaacd7e4e45ec3ea98eb48718bd94f6fb641a9d2f146d0f1e7fe9fa0b->enter($__internal_233eccabaacd7e4e45ec3ea98eb48718bd94f6fb641a9d2f146d0f1e7fe9fa0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("@SonataAdmin/CRUD/base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c05699123e9c8b947b414f53c05c3646d70c405a357699415d2b0ff68dab21c7->leave($__internal_c05699123e9c8b947b414f53c05c3646d70c405a357699415d2b0ff68dab21c7_prof);

        
        $__internal_233eccabaacd7e4e45ec3ea98eb48718bd94f6fb641a9d2f146d0f1e7fe9fa0b->leave($__internal_233eccabaacd7e4e45ec3ea98eb48718bd94f6fb641a9d2f146d0f1e7fe9fa0b_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e6f43ccfa8cfe26914e9d54df4b2781828368a5f2a1f8ea9a1ddbb07d29460e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f43ccfa8cfe26914e9d54df4b2781828368a5f2a1f8ea9a1ddbb07d29460e9->enter($__internal_e6f43ccfa8cfe26914e9d54df4b2781828368a5f2a1f8ea9a1ddbb07d29460e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_4b9094300a3ebf24fa52cd08ec8e74df81db32384a9c865fdd123e263153c4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9094300a3ebf24fa52cd08ec8e74df81db32384a9c865fdd123e263153c4c2->enter($__internal_4b9094300a3ebf24fa52cd08ec8e74df81db32384a9c865fdd123e263153c4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_4b9094300a3ebf24fa52cd08ec8e74df81db32384a9c865fdd123e263153c4c2->leave($__internal_4b9094300a3ebf24fa52cd08ec8e74df81db32384a9c865fdd123e263153c4c2_prof);

        
        $__internal_e6f43ccfa8cfe26914e9d54df4b2781828368a5f2a1f8ea9a1ddbb07d29460e9->leave($__internal_e6f43ccfa8cfe26914e9d54df4b2781828368a5f2a1f8ea9a1ddbb07d29460e9_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_aae60931a788e1a5a8949d7954220d4990a32e3a5209ac0c190686a23c6ecbe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae60931a788e1a5a8949d7954220d4990a32e3a5209ac0c190686a23c6ecbe8->enter($__internal_aae60931a788e1a5a8949d7954220d4990a32e3a5209ac0c190686a23c6ecbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_93eb21a71c7197cca0f3acf11e2ff2d2e29d21194e1a60311d1fa6d0c4a19060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93eb21a71c7197cca0f3acf11e2ff2d2e29d21194e1a60311d1fa6d0c4a19060->enter($__internal_93eb21a71c7197cca0f3acf11e2ff2d2e29d21194e1a60311d1fa6d0c4a19060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_93eb21a71c7197cca0f3acf11e2ff2d2e29d21194e1a60311d1fa6d0c4a19060->leave($__internal_93eb21a71c7197cca0f3acf11e2ff2d2e29d21194e1a60311d1fa6d0c4a19060_prof);

        
        $__internal_aae60931a788e1a5a8949d7954220d4990a32e3a5209ac0c190686a23c6ecbe8->leave($__internal_aae60931a788e1a5a8949d7954220d4990a32e3a5209ac0c190686a23c6ecbe8_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_c471df44c9114b4971a6d4023aa4884a1f8badb3c67969e75e15a22fddb2c8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c471df44c9114b4971a6d4023aa4884a1f8badb3c67969e75e15a22fddb2c8e5->enter($__internal_c471df44c9114b4971a6d4023aa4884a1f8badb3c67969e75e15a22fddb2c8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        $__internal_1a877aa530be845ea5face87f2dd3bdec99e28ac8ef42081be5126228f9faab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a877aa530be845ea5face87f2dd3bdec99e28ac8ef42081be5126228f9faab3->enter($__internal_1a877aa530be845ea5face87f2dd3bdec99e28ac8ef42081be5126228f9faab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclRolesForm"]) || array_key_exists("aclRolesForm", $context) ? $context["aclRolesForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclRolesForm" does not exist.', 22, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 22, $this->getSourceContext()); })()), "td_role", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 22, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 22, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 22, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_1a877aa530be845ea5face87f2dd3bdec99e28ac8ef42081be5126228f9faab3->leave($__internal_1a877aa530be845ea5face87f2dd3bdec99e28ac8ef42081be5126228f9faab3_prof);

        
        $__internal_c471df44c9114b4971a6d4023aa4884a1f8badb3c67969e75e15a22fddb2c8e5->leave($__internal_c471df44c9114b4971a6d4023aa4884a1f8badb3c67969e75e15a22fddb2c8e5_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_7dafc1bb9aaad37bcf921f8e93353d277ab3f9d6a62986991bcddef07f4197d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dafc1bb9aaad37bcf921f8e93353d277ab3f9d6a62986991bcddef07f4197d3->enter($__internal_7dafc1bb9aaad37bcf921f8e93353d277ab3f9d6a62986991bcddef07f4197d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        $__internal_26b90266e60404524a7842988b770eb24e4d5ad473cfcab4ae280a77e8d308d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b90266e60404524a7842988b770eb24e4d5ad473cfcab4ae280a77e8d308d7->enter($__internal_26b90266e60404524a7842988b770eb24e4d5ad473cfcab4ae280a77e8d308d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->macro_render_form((isset($context["aclUsersForm"]) || array_key_exists("aclUsersForm", $context) ? $context["aclUsersForm"] : (function () { throw new Twig_Error_Runtime('Variable "aclUsersForm" does not exist.', 25, $this->getSourceContext()); })()), (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new Twig_Error_Runtime('Variable "permissions" does not exist.', 25, $this->getSourceContext()); })()), "td_username", (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 25, $this->getSourceContext()); })()), "adminPool", array()), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 25, $this->getSourceContext()); })()));
        echo "
    ";
        
        $__internal_26b90266e60404524a7842988b770eb24e4d5ad473cfcab4ae280a77e8d308d7->leave($__internal_26b90266e60404524a7842988b770eb24e4d5ad473cfcab4ae280a77e8d308d7_prof);

        
        $__internal_7dafc1bb9aaad37bcf921f8e93353d277ab3f9d6a62986991bcddef07f4197d3->leave($__internal_7dafc1bb9aaad37bcf921f8e93353d277ab3f9d6a62986991bcddef07f4197d3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  109 => 24,  96 => 22,  87 => 21,  76 => 24,  73 => 21,  64 => 20,  54 => 15,  45 => 14,  35 => 12,  33 => 18,  21 => 12,);
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

{%- block actions -%}
    {% include '@SonataAdmin/CRUD/action_buttons.html.twig' %}
{%- endblock -%}

{% import '@SonataAdmin/CRUD/base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "@SonataAdmin/CRUD/base_acl.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_acl.html.twig");
    }
}
