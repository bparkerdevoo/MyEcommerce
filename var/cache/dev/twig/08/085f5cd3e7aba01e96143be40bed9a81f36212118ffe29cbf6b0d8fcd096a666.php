<?php

/* SonataAdminBundle:CRUD:list_outer_rows_list.html.twig */
class __TwigTemplate_d920a60685c7b16ac95060d0f398ef5fdbf7dc44e0cc56613209d194c2d78c9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_323997a1b3ecd48b7b5b2fa2cef9aac28926f8239387c6acc1bba1517c7e6974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323997a1b3ecd48b7b5b2fa2cef9aac28926f8239387c6acc1bba1517c7e6974->enter($__internal_323997a1b3ecd48b7b5b2fa2cef9aac28926f8239387c6acc1bba1517c7e6974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_outer_rows_list.html.twig"));

        $__internal_fbd496293e502defe1b6f6bc1dfd38a98878828d75b3c1ab9aa0bd374f935545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd496293e502defe1b6f6bc1dfd38a98878828d75b3c1ab9aa0bd374f935545->enter($__internal_fbd496293e502defe1b6f6bc1dfd38a98878828d75b3c1ab9aa0bd374f935545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_outer_rows_list.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "datagrid", array()), "results", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 13
            echo "    <tr>
        ";
            // line 14
            $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->getSourceContext()); })()), "getTemplate", array(0 => "inner_list_row"), "method"), "SonataAdminBundle:CRUD:list_outer_rows_list.html.twig", 14)->display($context);
            // line 15
            echo "    </tr>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_323997a1b3ecd48b7b5b2fa2cef9aac28926f8239387c6acc1bba1517c7e6974->leave($__internal_323997a1b3ecd48b7b5b2fa2cef9aac28926f8239387c6acc1bba1517c7e6974_prof);

        
        $__internal_fbd496293e502defe1b6f6bc1dfd38a98878828d75b3c1ab9aa0bd374f935545->leave($__internal_fbd496293e502defe1b6f6bc1dfd38a98878828d75b3c1ab9aa0bd374f935545_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_outer_rows_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  48 => 14,  45 => 13,  28 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% for object in admin.datagrid.results %}
    <tr>
        {% include admin.getTemplate('inner_list_row') %}
    </tr>
{% endfor %}
", "SonataAdminBundle:CRUD:list_outer_rows_list.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_outer_rows_list.html.twig");
    }
}