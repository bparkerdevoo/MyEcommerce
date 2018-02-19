<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_d433b6fd77be072730e1d85bdb741f7b23539abe4511387a5830ac8b7e1766dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_765dbe117298a443006c6b7948114211b93cf079b0c469cfc96e5841867e9c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765dbe117298a443006c6b7948114211b93cf079b0c469cfc96e5841867e9c76->enter($__internal_765dbe117298a443006c6b7948114211b93cf079b0c469cfc96e5841867e9c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $__internal_2d76a786d6aa4aa5a270656c2a4d90135bbb047f617fcad942d8e7e6d0bb6ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d76a786d6aa4aa5a270656c2a4d90135bbb047f617fcad942d8e7e6d0bb6ee1->enter($__internal_2d76a786d6aa4aa5a270656c2a4d90135bbb047f617fcad942d8e7e6d0bb6ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_765dbe117298a443006c6b7948114211b93cf079b0c469cfc96e5841867e9c76->leave($__internal_765dbe117298a443006c6b7948114211b93cf079b0c469cfc96e5841867e9c76_prof);

        
        $__internal_2d76a786d6aa4aa5a270656c2a4d90135bbb047f617fcad942d8e7e6d0bb6ee1->leave($__internal_2d76a786d6aa4aa5a270656c2a4d90135bbb047f617fcad942d8e7e6d0bb6ee1_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_878d70e1f68ba766a1694150327b308928abf5bef0483e1afd542f59033dea14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878d70e1f68ba766a1694150327b308928abf5bef0483e1afd542f59033dea14->enter($__internal_878d70e1f68ba766a1694150327b308928abf5bef0483e1afd542f59033dea14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_184d704237ec0d8dd631fc8896e7d625d4fc200c1f2ae20916c754b3ab869b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184d704237ec0d8dd631fc8896e7d625d4fc200c1f2ae20916c754b3ab869b8e->enter($__internal_184d704237ec0d8dd631fc8896e7d625d4fc200c1f2ae20916c754b3ab869b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 15)->display($context);
        
        $__internal_184d704237ec0d8dd631fc8896e7d625d4fc200c1f2ae20916c754b3ab869b8e->leave($__internal_184d704237ec0d8dd631fc8896e7d625d4fc200c1f2ae20916c754b3ab869b8e_prof);

        
        $__internal_878d70e1f68ba766a1694150327b308928abf5bef0483e1afd542f59033dea14->leave($__internal_878d70e1f68ba766a1694150327b308928abf5bef0483e1afd542f59033dea14_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_876785621e3191a24f1cf8ec80484017c3ca929190af18589ed3a1ec17d7d977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_876785621e3191a24f1cf8ec80484017c3ca929190af18589ed3a1ec17d7d977->enter($__internal_876785621e3191a24f1cf8ec80484017c3ca929190af18589ed3a1ec17d7d977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_648194d1a0f38f58f232b41675437188c2f6cf5d260dc5bfb0b96b112016b27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648194d1a0f38f58f232b41675437188c2f6cf5d260dc5bfb0b96b112016b27a->enter($__internal_648194d1a0f38f58f232b41675437188c2f6cf5d260dc5bfb0b96b112016b27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 18, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 18, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_648194d1a0f38f58f232b41675437188c2f6cf5d260dc5bfb0b96b112016b27a->leave($__internal_648194d1a0f38f58f232b41675437188c2f6cf5d260dc5bfb0b96b112016b27a_prof);

        
        $__internal_876785621e3191a24f1cf8ec80484017c3ca929190af18589ed3a1ec17d7d977->leave($__internal_876785621e3191a24f1cf8ec80484017c3ca929190af18589ed3a1ec17d7d977_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_946a26abed5e534b7f9993782e4072ce6d4323789aa2bffa606aae7399da54b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946a26abed5e534b7f9993782e4072ce6d4323789aa2bffa606aae7399da54b1->enter($__internal_946a26abed5e534b7f9993782e4072ce6d4323789aa2bffa606aae7399da54b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_09ee24dd0380e5f2eb359b53ad4f1ffcd0340796fd273762ff046f679eb789fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ee24dd0380e5f2eb359b53ad4f1ffcd0340796fd273762ff046f679eb789fd->enter($__internal_09ee24dd0380e5f2eb359b53ad4f1ffcd0340796fd273762ff046f679eb789fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_delete_confirmation", array("%object%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 28, $this->getSourceContext()); })()), "toString", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 28, $this->getSourceContext()); })())), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 31, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 33, $this->getSourceContext()); })()), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 36
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 36, $this->getSourceContext()); })()), "hasRoute", array(0 => "edit"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 36, $this->getSourceContext()); })()), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 36, $this->getSourceContext()); })())), "method"))) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 39, $this->getSourceContext()); })()), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 39, $this->getSourceContext()); })())), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 43
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_09ee24dd0380e5f2eb359b53ad4f1ffcd0340796fd273762ff046f679eb789fd->leave($__internal_09ee24dd0380e5f2eb359b53ad4f1ffcd0340796fd273762ff046f679eb789fd_prof);

        
        $__internal_946a26abed5e534b7f9993782e4072ce6d4323789aa2bffa606aae7399da54b1->leave($__internal_946a26abed5e534b7f9993782e4072ce6d4323789aa2bffa606aae7399da54b1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  132 => 41,  127 => 39,  121 => 37,  119 => 36,  115 => 35,  110 => 33,  105 => 31,  99 => 28,  93 => 25,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">{{ 'title_delete'|trans({}, 'SonataAdminBundle') }}</h3>
            </div>
            <div class=\"box-body\">
                {{ 'message_delete_confirmation'|trans({'%object%': admin.toString(object)}, 'SonataAdminBundle') }}
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"{{ admin.generateObjectUrl('delete', object) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {{ 'btn_delete'|trans({}, 'SonataAdminBundle') }}</button>
                    {% if admin.hasRoute('edit') and admin.hasAccess('edit', object) %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:delete.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/delete.html.twig");
    }
}
