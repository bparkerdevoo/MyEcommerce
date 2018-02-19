<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_1c34158ad53c1c16171cd7856f92de4dcafd5fc6ecaae6a3117307ea44afe59a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0500e9536271b40c8627d174543f1490953a92b4e6b57147c485453b64ccec10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0500e9536271b40c8627d174543f1490953a92b4e6b57147c485453b64ccec10->enter($__internal_0500e9536271b40c8627d174543f1490953a92b4e6b57147c485453b64ccec10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $__internal_a96cc751e40386a8e638c51477f1bf262b6da1521de6220d18fdf9bd07a83e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96cc751e40386a8e638c51477f1bf262b6da1521de6220d18fdf9bd07a83e6b->enter($__internal_a96cc751e40386a8e638c51477f1bf262b6da1521de6220d18fdf9bd07a83e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0500e9536271b40c8627d174543f1490953a92b4e6b57147c485453b64ccec10->leave($__internal_0500e9536271b40c8627d174543f1490953a92b4e6b57147c485453b64ccec10_prof);

        
        $__internal_a96cc751e40386a8e638c51477f1bf262b6da1521de6220d18fdf9bd07a83e6b->leave($__internal_a96cc751e40386a8e638c51477f1bf262b6da1521de6220d18fdf9bd07a83e6b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ef5ebdd1b0903b06e41f96a13ada31e02d799fbd2f809003d61950b7f1534996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5ebdd1b0903b06e41f96a13ada31e02d799fbd2f809003d61950b7f1534996->enter($__internal_ef5ebdd1b0903b06e41f96a13ada31e02d799fbd2f809003d61950b7f1534996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_aaaf69a61b3a1ea9f8277c4da891b9aa1e50956a634d683ad938ebba75107188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaaf69a61b3a1ea9f8277c4da891b9aa1e50956a634d683ad938ebba75107188->enter($__internal_aaaf69a61b3a1ea9f8277c4da891b9aa1e50956a634d683ad938ebba75107188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["field_element"]) || array_key_exists("field_element", $context) ? $context["field_element"] : (function () { throw new Twig_Error_Runtime('Variable "field_element" does not exist.', 16, $this->getSourceContext()); })()), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_aaaf69a61b3a1ea9f8277c4da891b9aa1e50956a634d683ad938ebba75107188->leave($__internal_aaaf69a61b3a1ea9f8277c4da891b9aa1e50956a634d683ad938ebba75107188_prof);

        
        $__internal_ef5ebdd1b0903b06e41f96a13ada31e02d799fbd2f809003d61950b7f1534996->leave($__internal_ef5ebdd1b0903b06e41f96a13ada31e02d799fbd2f809003d61950b7f1534996_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_array.html.twig");
    }
}
