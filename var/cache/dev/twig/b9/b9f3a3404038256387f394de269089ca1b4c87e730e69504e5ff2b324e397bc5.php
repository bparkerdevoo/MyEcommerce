<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig */
class __TwigTemplate_69671b0de95d691062313f424824c959986c40a54227fc146c81b9a59f8256fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e08da715c794b9ce788bf9d366c9abd40eeb8d5d019fa71d145e3fcc8bcda6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e08da715c794b9ce788bf9d366c9abd40eeb8d5d019fa71d145e3fcc8bcda6e->enter($__internal_9e08da715c794b9ce788bf9d366c9abd40eeb8d5d019fa71d145e3fcc8bcda6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $__internal_c706f6d665958fee51b57efbdab585433a39763b2f4520e53ae07b6a7407385e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c706f6d665958fee51b57efbdab585433a39763b2f4520e53ae07b6a7407385e->enter($__internal_c706f6d665958fee51b57efbdab585433a39763b2f4520e53ae07b6a7407385e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e08da715c794b9ce788bf9d366c9abd40eeb8d5d019fa71d145e3fcc8bcda6e->leave($__internal_9e08da715c794b9ce788bf9d366c9abd40eeb8d5d019fa71d145e3fcc8bcda6e_prof);

        
        $__internal_c706f6d665958fee51b57efbdab585433a39763b2f4520e53ae07b6a7407385e->leave($__internal_c706f6d665958fee51b57efbdab585433a39763b2f4520e53ae07b6a7407385e_prof);

    }

    // line 16
    public function block_field($context, array $blocks = array())
    {
        $__internal_5ec53cd76549d6da4516239d27388402e71336d3ffe2db931af987c9a44ff578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec53cd76549d6da4516239d27388402e71336d3ffe2db931af987c9a44ff578->enter($__internal_5ec53cd76549d6da4516239d27388402e71336d3ffe2db931af987c9a44ff578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e5ef9513266190f3e13e288aaffdd844f056411beefbcb7088a557f7356e2a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ef9513266190f3e13e288aaffdd844f056411beefbcb7088a557f7356e2a64->enter($__internal_e5ef9513266190f3e13e288aaffdd844f056411beefbcb7088a557f7356e2a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 17
        echo "    ";
        $context["route_name"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 17, $this->getSourceContext()); })()), "options", array()), "route", array()), "name", array());
        // line 18
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 18, $this->getSourceContext()); })()), "hasassociationadmin", array()) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 18, $this->getSourceContext()); })()), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 18, $this->getSourceContext()); })())), "method"))) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 19, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 20
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 20, $this->getSourceContext()); })()), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 20, $this->getSourceContext()); })()), 1 => $context["element"]), "method")) {
                    // line 21
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 23
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 25
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 26
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
        } else {
            // line 28
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 28, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 29
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 30
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    ";
        }
        
        $__internal_e5ef9513266190f3e13e288aaffdd844f056411beefbcb7088a557f7356e2a64->leave($__internal_e5ef9513266190f3e13e288aaffdd844f056411beefbcb7088a557f7356e2a64_prof);

        
        $__internal_5ec53cd76549d6da4516239d27388402e71336d3ffe2db931af987c9a44ff578->leave($__internal_5ec53cd76549d6da4516239d27388402e71336d3ffe2db931af987c9a44ff578_prof);

    }

    // line 34
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_388567d03cb73b9b8c3a02f51a6c83db4b72cadbaca9d29a52a15d0244ddd8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388567d03cb73b9b8c3a02f51a6c83db4b72cadbaca9d29a52a15d0244ddd8c0->enter($__internal_388567d03cb73b9b8c3a02f51a6c83db4b72cadbaca9d29a52a15d0244ddd8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_6527739ec22dc563cfea03cfd1b4e43d6a80eea8706a6e83c834a81146c52cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6527739ec22dc563cfea03cfd1b4e43d6a80eea8706a6e83c834a81146c52cce->enter($__internal_6527739ec22dc563cfea03cfd1b4e43d6a80eea8706a6e83c834a81146c52cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 35
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 35, $this->getSourceContext()); })()), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 35, $this->getSourceContext()); })()), 1 => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 35, $this->getSourceContext()); })()), 2 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 35, $this->getSourceContext()); })()), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 36, $this->getSourceContext()); })())), "html", null, true);
        // line 37
        echo "</a>";
        
        $__internal_6527739ec22dc563cfea03cfd1b4e43d6a80eea8706a6e83c834a81146c52cce->leave($__internal_6527739ec22dc563cfea03cfd1b4e43d6a80eea8706a6e83c834a81146c52cce_prof);

        
        $__internal_388567d03cb73b9b8c3a02f51a6c83db4b72cadbaca9d29a52a15d0244ddd8c0->leave($__internal_388567d03cb73b9b8c3a02f51a6c83db4b72cadbaca9d29a52a15d0244ddd8c0_prof);

    }

    // line 40
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_1c21a1a2bafe350a674c768b272cbbb4a9e54fcfc83f51c57a98436fb51c418b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c21a1a2bafe350a674c768b272cbbb4a9e54fcfc83f51c57a98436fb51c418b->enter($__internal_1c21a1a2bafe350a674c768b272cbbb4a9e54fcfc83f51c57a98436fb51c418b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_420aea4c3e0ad09c33842e8f507ec586350599208ed6570ca985142d7fae56c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420aea4c3e0ad09c33842e8f507ec586350599208ed6570ca985142d7fae56c3->enter($__internal_420aea4c3e0ad09c33842e8f507ec586350599208ed6570ca985142d7fae56c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 41, $this->getSourceContext()); })()), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 41, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_420aea4c3e0ad09c33842e8f507ec586350599208ed6570ca985142d7fae56c3->leave($__internal_420aea4c3e0ad09c33842e8f507ec586350599208ed6570ca985142d7fae56c3_prof);

        
        $__internal_1c21a1a2bafe350a674c768b272cbbb4a9e54fcfc83f51c57a98436fb51c418b->leave($__internal_1c21a1a2bafe350a674c768b272cbbb4a9e54fcfc83f51c57a98436fb51c418b_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 41,  177 => 40,  167 => 37,  165 => 36,  161 => 35,  152 => 34,  141 => 31,  127 => 30,  121 => 29,  103 => 28,  100 => 27,  86 => 26,  82 => 25,  79 => 23,  76 => 21,  74 => 20,  56 => 19,  53 => 18,  50 => 17,  41 => 16,  20 => 12,);
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

{% sonata_template_deprecate '@SonataAdmin/CRUD/Association/list_one_to_many.html.twig' %}

{% block field %}
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) %}
        {% for element in value %}
            {%- if field_description.associationadmin.hasAccess(route_name, element) -%}
                {{ block('relation_link') }}
            {%- else -%}
                {{ block('relation_value') }}
            {%- endif -%}
            {% if not loop.last %}, {% endif %}
        {% endfor %}
    {% else %}
        {% for element in value %}
            {{ block('relation_value') }}{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}

{%- block relation_link -%}
    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
        {{- element|render_relation_element(field_description) -}}
    </a>
{%- endblock -%}

{%- block relation_value -%}
    {{- element|render_relation_element(field_description) -}}
{%- endblock -%}
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/list_orm_one_to_many.html.twig");
    }
}
