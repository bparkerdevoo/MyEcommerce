<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_3d74d24c50cca177d46c2af3ac4e50c5d27b146cef32a70f4660728b4e4a0738 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e13a9115b4f1da24418d251dd01c0edbc7b7f72f81f9b930322c53f459eab596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e13a9115b4f1da24418d251dd01c0edbc7b7f72f81f9b930322c53f459eab596->enter($__internal_e13a9115b4f1da24418d251dd01c0edbc7b7f72f81f9b930322c53f459eab596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_4b3d352f8c3272cebe7ab41f0780535328157a43d16ab1a6fe78f24099c79269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3d352f8c3272cebe7ab41f0780535328157a43d16ab1a6fe78f24099c79269->enter($__internal_4b3d352f8c3272cebe7ab41f0780535328157a43d16ab1a6fe78f24099c79269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e13a9115b4f1da24418d251dd01c0edbc7b7f72f81f9b930322c53f459eab596->leave($__internal_e13a9115b4f1da24418d251dd01c0edbc7b7f72f81f9b930322c53f459eab596_prof);

        
        $__internal_4b3d352f8c3272cebe7ab41f0780535328157a43d16ab1a6fe78f24099c79269->leave($__internal_4b3d352f8c3272cebe7ab41f0780535328157a43d16ab1a6fe78f24099c79269_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9fba990fbe44f4e9a467580363569c4ebf14da7408f0c55d1f6af4d1c43d4331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fba990fbe44f4e9a467580363569c4ebf14da7408f0c55d1f6af4d1c43d4331->enter($__internal_9fba990fbe44f4e9a467580363569c4ebf14da7408f0c55d1f6af4d1c43d4331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5151ea33c5cf8f39543e3a3ef51740c6b535bcfc2c4c0809e0410c6c411c78bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5151ea33c5cf8f39543e3a3ef51740c6b535bcfc2c4c0809e0410c6c411c78bd->enter($__internal_5151ea33c5cf8f39543e3a3ef51740c6b535bcfc2c4c0809e0410c6c411c78bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "id", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_5151ea33c5cf8f39543e3a3ef51740c6b535bcfc2c4c0809e0410c6c411c78bd->leave($__internal_5151ea33c5cf8f39543e3a3ef51740c6b535bcfc2c4c0809e0410c6c411c78bd_prof);

        
        $__internal_9fba990fbe44f4e9a467580363569c4ebf14da7408f0c55d1f6af4d1c43d4331->leave($__internal_9fba990fbe44f4e9a467580363569c4ebf14da7408f0c55d1f6af4d1c43d4331_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list__batch.html.twig");
    }
}
