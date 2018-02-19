<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_8cc82ee972b51386223f375fa6772715ce962433383ad1cea8713c707e9ff5ae extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db776a17ddc061a61b323e9588d0e12a9b82e0ed6629ddb76e69eb87d5b512d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db776a17ddc061a61b323e9588d0e12a9b82e0ed6629ddb76e69eb87d5b512d1->enter($__internal_db776a17ddc061a61b323e9588d0e12a9b82e0ed6629ddb76e69eb87d5b512d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $__internal_4e7b02e18007c77ed3f6c1297bd96aba3e1aa765c1a106e5c0649a016a595a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7b02e18007c77ed3f6c1297bd96aba3e1aa765c1a106e5c0649a016a595a62->enter($__internal_4e7b02e18007c77ed3f6c1297bd96aba3e1aa765c1a106e5c0649a016a595a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db776a17ddc061a61b323e9588d0e12a9b82e0ed6629ddb76e69eb87d5b512d1->leave($__internal_db776a17ddc061a61b323e9588d0e12a9b82e0ed6629ddb76e69eb87d5b512d1_prof);

        
        $__internal_4e7b02e18007c77ed3f6c1297bd96aba3e1aa765c1a106e5c0649a016a595a62->leave($__internal_4e7b02e18007c77ed3f6c1297bd96aba3e1aa765c1a106e5c0649a016a595a62_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_678ff53b8da33cf250fed1642ee8a8760a35ca7d09d3c349e909e07c3bfa20d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678ff53b8da33cf250fed1642ee8a8760a35ca7d09d3c349e909e07c3bfa20d0->enter($__internal_678ff53b8da33cf250fed1642ee8a8760a35ca7d09d3c349e909e07c3bfa20d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_10d859c8336003ee864cb25202103244feb8bfda88e5e01e69acc6a2b8944d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d859c8336003ee864cb25202103244feb8bfda88e5e01e69acc6a2b8944d29->enter($__internal_10d859c8336003ee864cb25202103244feb8bfda88e5e01e69acc6a2b8944d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_10d859c8336003ee864cb25202103244feb8bfda88e5e01e69acc6a2b8944d29->leave($__internal_10d859c8336003ee864cb25202103244feb8bfda88e5e01e69acc6a2b8944d29_prof);

        
        $__internal_678ff53b8da33cf250fed1642ee8a8760a35ca7d09d3c349e909e07c3bfa20d0->leave($__internal_678ff53b8da33cf250fed1642ee8a8760a35ca7d09d3c349e909e07c3bfa20d0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  48 => 15,  39 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "SonataAdminBundle:CRUD:list__select.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list__select.html.twig");
    }
}
