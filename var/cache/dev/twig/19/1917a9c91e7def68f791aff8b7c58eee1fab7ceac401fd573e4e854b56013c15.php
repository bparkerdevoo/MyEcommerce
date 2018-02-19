<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_6a8939260a8deca55a159a2b61846f62abac16c13b57b04f03336eeb7c0f3b62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("@SonataAdmin/CRUD/base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 33
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@SonataAdmin/CRUD/base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "@SonataAdmin/CRUD/base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d77a785c3b8b796ab064cf33d6ea45b24f433326a206d970aac3a184fb4e84f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77a785c3b8b796ab064cf33d6ea45b24f433326a206d970aac3a184fb4e84f6->enter($__internal_d77a785c3b8b796ab064cf33d6ea45b24f433326a206d970aac3a184fb4e84f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_a953bd758c1d6c67ae210e7646aac83b2cf3d6102e37b955630307ac392a72a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a953bd758c1d6c67ae210e7646aac83b2cf3d6102e37b955630307ac392a72a5->enter($__internal_a953bd758c1d6c67ae210e7646aac83b2cf3d6102e37b955630307ac392a72a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d77a785c3b8b796ab064cf33d6ea45b24f433326a206d970aac3a184fb4e84f6->leave($__internal_d77a785c3b8b796ab064cf33d6ea45b24f433326a206d970aac3a184fb4e84f6_prof);

        
        $__internal_a953bd758c1d6c67ae210e7646aac83b2cf3d6102e37b955630307ac392a72a5->leave($__internal_a953bd758c1d6c67ae210e7646aac83b2cf3d6102e37b955630307ac392a72a5_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_0469fe9479bc6d7ca469ece967bc834f43f7ac9c36a9fcc6aa472c9bafbef9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0469fe9479bc6d7ca469ece967bc834f43f7ac9c36a9fcc6aa472c9bafbef9df->enter($__internal_0469fe9479bc6d7ca469ece967bc834f43f7ac9c36a9fcc6aa472c9bafbef9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40fb20c98806b2fa21619b9a34eae68ecb8d191845611d20a22a07caef36fc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fb20c98806b2fa21619b9a34eae68ecb8d191845611d20a22a07caef36fc9f->enter($__internal_40fb20c98806b2fa21619b9a34eae68ecb8d191845611d20a22a07caef36fc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new Twig_Error_Runtime('Variable "objectId" does not exist.', 16, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 16, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 16, $this->getSourceContext()); })())), "method"))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 16, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 16, $this->getSourceContext()); })())), "method"))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 17, $this->getSourceContext()); })()), "toString", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 17, $this->getSourceContext()); })())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_40fb20c98806b2fa21619b9a34eae68ecb8d191845611d20a22a07caef36fc9f->leave($__internal_40fb20c98806b2fa21619b9a34eae68ecb8d191845611d20a22a07caef36fc9f_prof);

        
        $__internal_0469fe9479bc6d7ca469ece967bc834f43f7ac9c36a9fcc6aa472c9bafbef9df->leave($__internal_0469fe9479bc6d7ca469ece967bc834f43f7ac9c36a9fcc6aa472c9bafbef9df_prof);

    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_11ed5b8d2d3f8326e781b60d8dc18cee8eddd9e52f39d4e656d7133efaa8c0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ed5b8d2d3f8326e781b60d8dc18cee8eddd9e52f39d4e656d7133efaa8c0e6->enter($__internal_11ed5b8d2d3f8326e781b60d8dc18cee8eddd9e52f39d4e656d7133efaa8c0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_c279e14da67f0901b1b4c7c39bd0b183c11b9e23ffa9161ca69095e4df9dc82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c279e14da67f0901b1b4c7c39bd0b183c11b9e23ffa9161ca69095e4df9dc82f->enter($__internal_c279e14da67f0901b1b4c7c39bd0b183c11b9e23ffa9161ca69095e4df9dc82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c279e14da67f0901b1b4c7c39bd0b183c11b9e23ffa9161ca69095e4df9dc82f->leave($__internal_c279e14da67f0901b1b4c7c39bd0b183c11b9e23ffa9161ca69095e4df9dc82f_prof);

        
        $__internal_11ed5b8d2d3f8326e781b60d8dc18cee8eddd9e52f39d4e656d7133efaa8c0e6->leave($__internal_11ed5b8d2d3f8326e781b60d8dc18cee8eddd9e52f39d4e656d7133efaa8c0e6_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        $__internal_876d524d779e02f2735b433ae288b54f1c767a19bb63d4d935b28344a4d9fda7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876d524d779e02f2735b433ae288b54f1c767a19bb63d4d935b28344a4d9fda7->enter($__internal_876d524d779e02f2735b433ae288b54f1c767a19bb63d4d935b28344a4d9fda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_04b0ce37bab7c183ff065b2922305756ea58aa21bea20b1ae10d8906daf3cb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b0ce37bab7c183ff065b2922305756ea58aa21bea20b1ae10d8906daf3cb0a->enter($__internal_04b0ce37bab7c183ff065b2922305756ea58aa21bea20b1ae10d8906daf3cb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        
        $__internal_04b0ce37bab7c183ff065b2922305756ea58aa21bea20b1ae10d8906daf3cb0a->leave($__internal_04b0ce37bab7c183ff065b2922305756ea58aa21bea20b1ae10d8906daf3cb0a_prof);

        
        $__internal_876d524d779e02f2735b433ae288b54f1c767a19bb63d4d935b28344a4d9fda7->leave($__internal_876d524d779e02f2735b433ae288b54f1c767a19bb63d4d935b28344a4d9fda7_prof);

    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_68042001d971f37e512ff8f386278dde537361a707f97d7b01bff166361387f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68042001d971f37e512ff8f386278dde537361a707f97d7b01bff166361387f0->enter($__internal_68042001d971f37e512ff8f386278dde537361a707f97d7b01bff166361387f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_a132b6fb9e89af8bce2f5f775be44bce5edb57382fbe09d7ad4d498d27be1849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a132b6fb9e89af8bce2f5f775be44bce5edb57382fbe09d7ad4d498d27be1849->enter($__internal_a132b6fb9e89af8bce2f5f775be44bce5edb57382fbe09d7ad4d498d27be1849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 31, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 31, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_a132b6fb9e89af8bce2f5f775be44bce5edb57382fbe09d7ad4d498d27be1849->leave($__internal_a132b6fb9e89af8bce2f5f775be44bce5edb57382fbe09d7ad4d498d27be1849_prof);

        
        $__internal_68042001d971f37e512ff8f386278dde537361a707f97d7b01bff166361387f0->leave($__internal_68042001d971f37e512ff8f386278dde537361a707f97d7b01bff166361387f0_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_a29c7c02943f5f454adb336ea2b4b1b207db653383a6344bd79f7abd76358e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a29c7c02943f5f454adb336ea2b4b1b207db653383a6344bd79f7abd76358e1f->enter($__internal_a29c7c02943f5f454adb336ea2b4b1b207db653383a6344bd79f7abd76358e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_570f098e56bf60925d884777409027ce32fe28c075cd7a27641732fa86a6e211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570f098e56bf60925d884777409027ce32fe28c075cd7a27641732fa86a6e211->enter($__internal_570f098e56bf60925d884777409027ce32fe28c075cd7a27641732fa86a6e211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_570f098e56bf60925d884777409027ce32fe28c075cd7a27641732fa86a6e211->leave($__internal_570f098e56bf60925d884777409027ce32fe28c075cd7a27641732fa86a6e211_prof);

        
        $__internal_a29c7c02943f5f454adb336ea2b4b1b207db653383a6344bd79f7abd76358e1f->leave($__internal_a29c7c02943f5f454adb336ea2b4b1b207db653383a6344bd79f7abd76358e1f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 36,  154 => 35,  136 => 31,  126 => 28,  117 => 27,  104 => 24,  95 => 23,  81 => 19,  75 => 17,  72 => 16,  70 => 15,  61 => 14,  40 => 12,  12 => 33,);
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

{% block title %}
    {# NEXT_MAJOR: remove default filter #}
    {% if objectId|default(admin.id(object)) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include '@SonataAdmin/CRUD/action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use '@SonataAdmin/CRUD/base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_edit.html.twig");
    }
}
