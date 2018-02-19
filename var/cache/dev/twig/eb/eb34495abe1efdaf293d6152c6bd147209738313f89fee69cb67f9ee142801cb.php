<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_4fba1e7799592ca74f92f0d6b8c3531437f84a7eb1abddab73de0c20c559e080 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d812b7bf6655e9ad2fbd05eb200099f91a1b26358e31ea02919f864aa1d3d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d812b7bf6655e9ad2fbd05eb200099f91a1b26358e31ea02919f864aa1d3d6b->enter($__internal_0d812b7bf6655e9ad2fbd05eb200099f91a1b26358e31ea02919f864aa1d3d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $__internal_c34981b873069619bd86782f989d3144554bb041bec629d7ee0eeb7c754ecc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34981b873069619bd86782f989d3144554bb041bec629d7ee0eeb7c754ecc8d->enter($__internal_c34981b873069619bd86782f989d3144554bb041bec629d7ee0eeb7c754ecc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d812b7bf6655e9ad2fbd05eb200099f91a1b26358e31ea02919f864aa1d3d6b->leave($__internal_0d812b7bf6655e9ad2fbd05eb200099f91a1b26358e31ea02919f864aa1d3d6b_prof);

        
        $__internal_c34981b873069619bd86782f989d3144554bb041bec629d7ee0eeb7c754ecc8d->leave($__internal_c34981b873069619bd86782f989d3144554bb041bec629d7ee0eeb7c754ecc8d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cbd7eb3de294192d65e4be147026c1d7312ff9a04c3c5bbd7f3b542b73ffffa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd7eb3de294192d65e4be147026c1d7312ff9a04c3c5bbd7f3b542b73ffffa5->enter($__internal_cbd7eb3de294192d65e4be147026c1d7312ff9a04c3c5bbd7f3b542b73ffffa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a7d04a6a6fbe826b0dbee80b6a4426cf454f4b1683ebb23109ca5f79dbce98c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d04a6a6fbe826b0dbee80b6a4426cf454f4b1683ebb23109ca5f79dbce98c3->enter($__internal_a7d04a6a6fbe826b0dbee80b6a4426cf454f4b1683ebb23109ca5f79dbce98c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("@SonataAdmin/CRUD/_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_a7d04a6a6fbe826b0dbee80b6a4426cf454f4b1683ebb23109ca5f79dbce98c3->leave($__internal_a7d04a6a6fbe826b0dbee80b6a4426cf454f4b1683ebb23109ca5f79dbce98c3_prof);

        
        $__internal_cbd7eb3de294192d65e4be147026c1d7312ff9a04c3c5bbd7f3b542b73ffffa5->leave($__internal_cbd7eb3de294192d65e4be147026c1d7312ff9a04c3c5bbd7f3b542b73ffffa5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
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
    {% include '@SonataAdmin/CRUD/_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_email.html.twig");
    }
}
