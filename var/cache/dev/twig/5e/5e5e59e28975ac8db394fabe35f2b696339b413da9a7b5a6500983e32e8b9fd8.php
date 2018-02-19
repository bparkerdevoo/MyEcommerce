<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_c694e798335f2422ed9bd75efdcafc8b971ad89543d30f7a4b0a11610a655389 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e86e440ad76609c02fbef12748585238d1281c6500c89264cd54829ccef3e481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86e440ad76609c02fbef12748585238d1281c6500c89264cd54829ccef3e481->enter($__internal_e86e440ad76609c02fbef12748585238d1281c6500c89264cd54829ccef3e481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $__internal_7a47f93d64ab702e0cae697964d7531ae940cfb02caca8f31ec877052a564f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a47f93d64ab702e0cae697964d7531ae940cfb02caca8f31ec877052a564f84->enter($__internal_7a47f93d64ab702e0cae697964d7531ae940cfb02caca8f31ec877052a564f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e86e440ad76609c02fbef12748585238d1281c6500c89264cd54829ccef3e481->leave($__internal_e86e440ad76609c02fbef12748585238d1281c6500c89264cd54829ccef3e481_prof);

        
        $__internal_7a47f93d64ab702e0cae697964d7531ae940cfb02caca8f31ec877052a564f84->leave($__internal_7a47f93d64ab702e0cae697964d7531ae940cfb02caca8f31ec877052a564f84_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7c735142fa36c095c409ebfd5ee75a21fcba20f8ec89e7a450156df51e2d9c2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c735142fa36c095c409ebfd5ee75a21fcba20f8ec89e7a450156df51e2d9c2a->enter($__internal_7c735142fa36c095c409ebfd5ee75a21fcba20f8ec89e7a450156df51e2d9c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_e6ab8c74927652b2b9d3d99dfe2f00ddbd196227165fa192191f9e93f0fdf946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ab8c74927652b2b9d3d99dfe2f00ddbd196227165fa192191f9e93f0fdf946->enter($__internal_e6ab8c74927652b2b9d3d99dfe2f00ddbd196227165fa192191f9e93f0fdf946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_e6ab8c74927652b2b9d3d99dfe2f00ddbd196227165fa192191f9e93f0fdf946->leave($__internal_e6ab8c74927652b2b9d3d99dfe2f00ddbd196227165fa192191f9e93f0fdf946_prof);

        
        $__internal_7c735142fa36c095c409ebfd5ee75a21fcba20f8ec89e7a450156df51e2d9c2a->leave($__internal_7c735142fa36c095c409ebfd5ee75a21fcba20f8ec89e7a450156df51e2d9c2a_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_17d85ae460b907ed8c8665624ab7233573c335cfea9a24991f8ab342782503e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d85ae460b907ed8c8665624ab7233573c335cfea9a24991f8ab342782503e3->enter($__internal_17d85ae460b907ed8c8665624ab7233573c335cfea9a24991f8ab342782503e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_9a25f16c78edd8fbf92b2e3164ab25582e2ad5c4c24d46b69be5412b07f1e9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a25f16c78edd8fbf92b2e3164ab25582e2ad5c4c24d46b69be5412b07f1e9b9->enter($__internal_9a25f16c78edd8fbf92b2e3164ab25582e2ad5c4c24d46b69be5412b07f1e9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 20, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 20, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 20, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_9a25f16c78edd8fbf92b2e3164ab25582e2ad5c4c24d46b69be5412b07f1e9b9->leave($__internal_9a25f16c78edd8fbf92b2e3164ab25582e2ad5c4c24d46b69be5412b07f1e9b9_prof);

        
        $__internal_17d85ae460b907ed8c8665624ab7233573c335cfea9a24991f8ab342782503e3->leave($__internal_17d85ae460b907ed8c8665624ab7233573c335cfea9a24991f8ab342782503e3_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_f17f36be04a69b99556e1b37f425d855665dcc9042d9ab516e6a465cb53adab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f17f36be04a69b99556e1b37f425d855665dcc9042d9ab516e6a465cb53adab1->enter($__internal_f17f36be04a69b99556e1b37f425d855665dcc9042d9ab516e6a465cb53adab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1f01c3fdbf2111c5a86a7b98584ab027b9aa11b40fc0ea1fab2774b3b0b24ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f01c3fdbf2111c5a86a7b98584ab027b9aa11b40fc0ea1fab2774b3b0b24ce3->enter($__internal_1f01c3fdbf2111c5a86a7b98584ab027b9aa11b40fc0ea1fab2774b3b0b24ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_1f01c3fdbf2111c5a86a7b98584ab027b9aa11b40fc0ea1fab2774b3b0b24ce3->leave($__internal_1f01c3fdbf2111c5a86a7b98584ab027b9aa11b40fc0ea1fab2774b3b0b24ce3_prof);

        
        $__internal_f17f36be04a69b99556e1b37f425d855665dcc9042d9ab516e6a465cb53adab1->leave($__internal_f17f36be04a69b99556e1b37f425d855665dcc9042d9ab516e6a465cb53adab1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  86 => 24,  72 => 20,  69 => 19,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/action.html.twig");
    }
}
