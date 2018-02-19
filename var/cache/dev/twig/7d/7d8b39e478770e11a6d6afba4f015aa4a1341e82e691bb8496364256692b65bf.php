<?php

/* SonataAdminBundle:CRUD:select_subclass.html.twig */
class __TwigTemplate_2cafe4b44aa945a9b0be5bd0e37409c6177c867267a9690ec4e07e1dd63cec27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 11, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:select_subclass.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_364f03794c686fb205c77b33bd97e243ea26e404f01295cf30229a0a97937b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364f03794c686fb205c77b33bd97e243ea26e404f01295cf30229a0a97937b4f->enter($__internal_364f03794c686fb205c77b33bd97e243ea26e404f01295cf30229a0a97937b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $__internal_b28009ffdf904db2f920074a13c0942615b88c73b30fc5ded12b271813609a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28009ffdf904db2f920074a13c0942615b88c73b30fc5ded12b271813609a42->enter($__internal_b28009ffdf904db2f920074a13c0942615b88c73b30fc5ded12b271813609a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_364f03794c686fb205c77b33bd97e243ea26e404f01295cf30229a0a97937b4f->leave($__internal_364f03794c686fb205c77b33bd97e243ea26e404f01295cf30229a0a97937b4f_prof);

        
        $__internal_b28009ffdf904db2f920074a13c0942615b88c73b30fc5ded12b271813609a42->leave($__internal_b28009ffdf904db2f920074a13c0942615b88c73b30fc5ded12b271813609a42_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_e920fee436c82b601d592e9d2c98934187b1ac49bf0904acd9db71c6619a7325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e920fee436c82b601d592e9d2c98934187b1ac49bf0904acd9db71c6619a7325->enter($__internal_e920fee436c82b601d592e9d2c98934187b1ac49bf0904acd9db71c6619a7325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d59ea2e4be50cfd2137d6177de7c60c4710f4cce717965fc22eebf777367e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d59ea2e4be50cfd2137d6177de7c60c4710f4cce717965fc22eebf777367e5f->enter($__internal_9d59ea2e4be50cfd2137d6177de7c60c4710f4cce717965fc22eebf777367e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_subclass", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_9d59ea2e4be50cfd2137d6177de7c60c4710f4cce717965fc22eebf777367e5f->leave($__internal_9d59ea2e4be50cfd2137d6177de7c60c4710f4cce717965fc22eebf777367e5f_prof);

        
        $__internal_e920fee436c82b601d592e9d2c98934187b1ac49bf0904acd9db71c6619a7325->leave($__internal_e920fee436c82b601d592e9d2c98934187b1ac49bf0904acd9db71c6619a7325_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_7e79f01bd14eced2d8177e8adbbc7240a88ba0611dca2a849247fdec089101ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e79f01bd14eced2d8177e8adbbc7240a88ba0611dca2a849247fdec089101ca->enter($__internal_7e79f01bd14eced2d8177e8adbbc7240a88ba0611dca2a849247fdec089101ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_429b7c3c121c8f48ce1d5f4987d121bd1f65fcc36ff8583623a4a60deddb9216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429b7c3c121c8f48ce1d5f4987d121bd1f65fcc36ff8583623a4a60deddb9216->enter($__internal_429b7c3c121c8f48ce1d5f4987d121bd1f65fcc36ff8583623a4a60deddb9216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                ";
        // line 19
        $this->displayBlock("title", $context, $blocks);
        echo "
            </h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 23, $this->getSourceContext()); })()), "subclasses", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
            // line 24
            echo "                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "generateUrl", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 25, $this->getSourceContext()); })()), 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
            echo "\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationdomain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["admin"] ?? null), "translationdomain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <span class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_subclass_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_429b7c3c121c8f48ce1d5f4987d121bd1f65fcc36ff8583623a4a60deddb9216->leave($__internal_429b7c3c121c8f48ce1d5f4987d121bd1f65fcc36ff8583623a4a60deddb9216_prof);

        
        $__internal_7e79f01bd14eced2d8177e8adbbc7240a88ba0611dca2a849247fdec089101ca->leave($__internal_7e79f01bd14eced2d8177e8adbbc7240a88ba0611dca2a849247fdec089101ca_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:select_subclass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  103 => 33,  94 => 29,  87 => 25,  84 => 24,  79 => 23,  72 => 19,  67 => 16,  58 => 15,  40 => 13,  19 => 11,);
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

{% block title %}{{ 'title_select_subclass'|trans({}, 'SonataAdminBundle') }}{% endblock %}

{% block content %}
    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                {{ block('title') }}
            </h3>
        </div>
        <div class=\"box-body\">
            {% for subclass in admin.subclasses|keys %}
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"{{ admin.generateUrl(action, {'subclass': subclass }) }}\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        {{ subclass|trans({}, admin.translationdomain|default('SonataAdminBundle')) }}
                    </a>
                </div>
            {% else %}
                <span class=\"alert alert-info\">{{ 'no_subclass_available'|trans({}, 'SonataAdminBundle') }}</span>
            {% endfor %}
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:select_subclass.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/select_subclass.html.twig");
    }
}
