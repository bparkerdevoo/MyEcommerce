<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_121f870ee1566fdf4b3fe254a3fe2f7b9575f467635cb8cf268978149c09c503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f3c284878654ff6a71c4983f757fb8afdaf050863b40fe3c1fac5d57cb19f6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3c284878654ff6a71c4983f757fb8afdaf050863b40fe3c1fac5d57cb19f6a->enter($__internal_1f3c284878654ff6a71c4983f757fb8afdaf050863b40fe3c1fac5d57cb19f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $__internal_984c32620a6334560e2abddda2596c7bd002ac786dfad647c91cc7a534f30957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984c32620a6334560e2abddda2596c7bd002ac786dfad647c91cc7a534f30957->enter($__internal_984c32620a6334560e2abddda2596c7bd002ac786dfad647c91cc7a534f30957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f3c284878654ff6a71c4983f757fb8afdaf050863b40fe3c1fac5d57cb19f6a->leave($__internal_1f3c284878654ff6a71c4983f757fb8afdaf050863b40fe3c1fac5d57cb19f6a_prof);

        
        $__internal_984c32620a6334560e2abddda2596c7bd002ac786dfad647c91cc7a534f30957->leave($__internal_984c32620a6334560e2abddda2596c7bd002ac786dfad647c91cc7a534f30957_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e1b0dfde2b05c4c3b0f7126cab1eed6ea48006a3ba63c730df60e308ef7b8c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b0dfde2b05c4c3b0f7126cab1eed6ea48006a3ba63c730df60e308ef7b8c39->enter($__internal_e1b0dfde2b05c4c3b0f7126cab1eed6ea48006a3ba63c730df60e308ef7b8c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_dc5d0a1dff8ebf3d53bee54e573e35f5300fe02af105e593912afd541328b503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5d0a1dff8ebf3d53bee54e573e35f5300fe02af105e593912afd541328b503->enter($__internal_dc5d0a1dff8ebf3d53bee54e573e35f5300fe02af105e593912afd541328b503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_dc5d0a1dff8ebf3d53bee54e573e35f5300fe02af105e593912afd541328b503->leave($__internal_dc5d0a1dff8ebf3d53bee54e573e35f5300fe02af105e593912afd541328b503_prof);

        
        $__internal_e1b0dfde2b05c4c3b0f7126cab1eed6ea48006a3ba63c730df60e308ef7b8c39->leave($__internal_e1b0dfde2b05c4c3b0f7126cab1eed6ea48006a3ba63c730df60e308ef7b8c39_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_8c4f59a479e1a075002fe7779a77514878074d3d586d078cf08e3726b88f6380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c4f59a479e1a075002fe7779a77514878074d3d586d078cf08e3726b88f6380->enter($__internal_8c4f59a479e1a075002fe7779a77514878074d3d586d078cf08e3726b88f6380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        $__internal_4d534f16de9a259afa218e4ea6a75e7b9cde7dafc2380bb9c4f655d211ac653f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d534f16de9a259afa218e4ea6a75e7b9cde7dafc2380bb9c4f655d211ac653f->enter($__internal_4d534f16de9a259afa218e4ea6a75e7b9cde7dafc2380bb9c4f655d211ac653f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_4d534f16de9a259afa218e4ea6a75e7b9cde7dafc2380bb9c4f655d211ac653f->leave($__internal_4d534f16de9a259afa218e4ea6a75e7b9cde7dafc2380bb9c4f655d211ac653f_prof);

        
        $__internal_8c4f59a479e1a075002fe7779a77514878074d3d586d078cf08e3726b88f6380->leave($__internal_8c4f59a479e1a075002fe7779a77514878074d3d586d078cf08e3726b88f6380_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_70354d094ddac52741b995e45660033ace7f290b1f1f3b4c338212a98dfee181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70354d094ddac52741b995e45660033ace7f290b1f1f3b4c338212a98dfee181->enter($__internal_70354d094ddac52741b995e45660033ace7f290b1f1f3b4c338212a98dfee181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_5928518cb77b8f8509d8a5477dd7db07f92d0e5c2155fa8fd7a059c0a58f2079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5928518cb77b8f8509d8a5477dd7db07f92d0e5c2155fa8fd7a059c0a58f2079->enter($__internal_5928518cb77b8f8509d8a5477dd7db07f92d0e5c2155fa8fd7a059c0a58f2079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_5928518cb77b8f8509d8a5477dd7db07f92d0e5c2155fa8fd7a059c0a58f2079->leave($__internal_5928518cb77b8f8509d8a5477dd7db07f92d0e5c2155fa8fd7a059c0a58f2079_prof);

        
        $__internal_70354d094ddac52741b995e45660033ace7f290b1f1f3b4c338212a98dfee181->leave($__internal_70354d094ddac52741b995e45660033ace7f290b1f1f3b4c338212a98dfee181_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_7f2583fd86ae6234de506c33b6bed63f2cc3db524342a2e1c40c484dd039c04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f2583fd86ae6234de506c33b6bed63f2cc3db524342a2e1c40c484dd039c04a->enter($__internal_7f2583fd86ae6234de506c33b6bed63f2cc3db524342a2e1c40c484dd039c04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_ce028a51cbea8287a4f5ea276ce1a64283c017eeef2c93d51d71613e1c6cdd0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce028a51cbea8287a4f5ea276ce1a64283c017eeef2c93d51d71613e1c6cdd0a->enter($__internal_ce028a51cbea8287a4f5ea276ce1a64283c017eeef2c93d51d71613e1c6cdd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 33, $this->getSourceContext()); })()), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 46, $this->getSourceContext()); })()), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 46, $this->getSourceContext()); })()));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_ce028a51cbea8287a4f5ea276ce1a64283c017eeef2c93d51d71613e1c6cdd0a->leave($__internal_ce028a51cbea8287a4f5ea276ce1a64283c017eeef2c93d51d71613e1c6cdd0a_prof);

        
        $__internal_7f2583fd86ae6234de506c33b6bed63f2cc3db524342a2e1c40c484dd039c04a->leave($__internal_7f2583fd86ae6234de506c33b6bed63f2cc3db524342a2e1c40c484dd039c04a_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_5d8530d04a64acdc7bc1a1b0d7658b51b884f47f7b77d843e73128dadc2bdc17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8530d04a64acdc7bc1a1b0d7658b51b884f47f7b77d843e73128dadc2bdc17->enter($__internal_5d8530d04a64acdc7bc1a1b0d7658b51b884f47f7b77d843e73128dadc2bdc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_debb7182759be77c08996b01ab4b4b2108b98164b0d4eace51b16d5dd13b9d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debb7182759be77c08996b01ab4b4b2108b98164b0d4eace51b16d5dd13b9d77->enter($__internal_debb7182759be77c08996b01ab4b4b2108b98164b0d4eace51b16d5dd13b9d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_debb7182759be77c08996b01ab4b4b2108b98164b0d4eace51b16d5dd13b9d77->leave($__internal_debb7182759be77c08996b01ab4b4b2108b98164b0d4eace51b16d5dd13b9d77_prof);

        
        $__internal_5d8530d04a64acdc7bc1a1b0d7658b51b884f47f7b77d843e73128dadc2bdc17->leave($__internal_5d8530d04a64acdc7bc1a1b0d7658b51b884f47f7b77d843e73128dadc2bdc17_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 57,  195 => 56,  186 => 55,  175 => 52,  168 => 50,  161 => 48,  155 => 46,  153 => 45,  150 => 44,  146 => 43,  143 => 42,  136 => 38,  132 => 36,  130 => 35,  127 => 34,  123 => 33,  120 => 32,  111 => 31,  98 => 27,  91 => 23,  87 => 21,  78 => 20,  61 => 17,  44 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/CRUD/edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/preview.html.twig");
    }
}
