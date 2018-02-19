<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_c037b567a8a4613d606ded49cf49f202efc22ba087cf9ed63870009bdc8daa2c extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52d06f380d825948bdb540b2b33d85004546df8c8b880ff1c6a40688b2a71c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d06f380d825948bdb540b2b33d85004546df8c8b880ff1c6a40688b2a71c88->enter($__internal_52d06f380d825948bdb540b2b33d85004546df8c8b880ff1c6a40688b2a71c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $__internal_45d751a34eaef5d7bc4cc826437b1050aaa0c43cb6ec322947367fa388add174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d751a34eaef5d7bc4cc826437b1050aaa0c43cb6ec322947367fa388add174->enter($__internal_45d751a34eaef5d7bc4cc826437b1050aaa0c43cb6ec322947367fa388add174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d06f380d825948bdb540b2b33d85004546df8c8b880ff1c6a40688b2a71c88->leave($__internal_52d06f380d825948bdb540b2b33d85004546df8c8b880ff1c6a40688b2a71c88_prof);

        
        $__internal_45d751a34eaef5d7bc4cc826437b1050aaa0c43cb6ec322947367fa388add174->leave($__internal_45d751a34eaef5d7bc4cc826437b1050aaa0c43cb6ec322947367fa388add174_prof);

    }

    // line 16
    public function block_field($context, array $blocks = array())
    {
        $__internal_7eb7c38c4520add32876058ec75b616b25fe683dd99e3a83cd48cede6397e16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb7c38c4520add32876058ec75b616b25fe683dd99e3a83cd48cede6397e16e->enter($__internal_7eb7c38c4520add32876058ec75b616b25fe683dd99e3a83cd48cede6397e16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_95ea2788c93353964ed6f669f365184ac13fe0f693e60b616f4b49983ff43930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ea2788c93353964ed6f669f365184ac13fe0f693e60b616f4b49983ff43930->enter($__internal_95ea2788c93353964ed6f669f365184ac13fe0f693e60b616f4b49983ff43930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
                echo "
            ";
                // line 30
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 31
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
            // line 32
            echo "    ";
        }
        
        $__internal_95ea2788c93353964ed6f669f365184ac13fe0f693e60b616f4b49983ff43930->leave($__internal_95ea2788c93353964ed6f669f365184ac13fe0f693e60b616f4b49983ff43930_prof);

        
        $__internal_7eb7c38c4520add32876058ec75b616b25fe683dd99e3a83cd48cede6397e16e->leave($__internal_7eb7c38c4520add32876058ec75b616b25fe683dd99e3a83cd48cede6397e16e_prof);

    }

    // line 35
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_fa0be1241aec34f4e654e17f35249a8b098e706d502d47216adafe95d25b6dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa0be1241aec34f4e654e17f35249a8b098e706d502d47216adafe95d25b6dbe->enter($__internal_fa0be1241aec34f4e654e17f35249a8b098e706d502d47216adafe95d25b6dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_37fa9724c83828efa09cd490281ec925ef3a4b9184798e9c1adad23338ca390f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fa9724c83828efa09cd490281ec925ef3a4b9184798e9c1adad23338ca390f->enter($__internal_37fa9724c83828efa09cd490281ec925ef3a4b9184798e9c1adad23338ca390f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 36
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 36, $this->getSourceContext()); })()), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new Twig_Error_Runtime('Variable "route_name" does not exist.', 36, $this->getSourceContext()); })()), 1 => (isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 36, $this->getSourceContext()); })()), 2 => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 36, $this->getSourceContext()); })()), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 37, $this->getSourceContext()); })()), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 37, $this->getSourceContext()); })())), "html", null, true);
        // line 38
        echo "</a>";
        
        $__internal_37fa9724c83828efa09cd490281ec925ef3a4b9184798e9c1adad23338ca390f->leave($__internal_37fa9724c83828efa09cd490281ec925ef3a4b9184798e9c1adad23338ca390f_prof);

        
        $__internal_fa0be1241aec34f4e654e17f35249a8b098e706d502d47216adafe95d25b6dbe->leave($__internal_fa0be1241aec34f4e654e17f35249a8b098e706d502d47216adafe95d25b6dbe_prof);

    }

    // line 41
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_7920544c2c3279f491d660e43fcc0236985fdfdd3a110068824035b23d5cf940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7920544c2c3279f491d660e43fcc0236985fdfdd3a110068824035b23d5cf940->enter($__internal_7920544c2c3279f491d660e43fcc0236985fdfdd3a110068824035b23d5cf940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_df301b7e7f0531b0ef972d325ea96579e9fbe5f1033d7d427214c9e80e4f1c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df301b7e7f0531b0ef972d325ea96579e9fbe5f1033d7d427214c9e80e4f1c45->enter($__internal_df301b7e7f0531b0ef972d325ea96579e9fbe5f1033d7d427214c9e80e4f1c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 42, $this->getSourceContext()); })()), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 42, $this->getSourceContext()); })())), "html", null, true);
        
        $__internal_df301b7e7f0531b0ef972d325ea96579e9fbe5f1033d7d427214c9e80e4f1c45->leave($__internal_df301b7e7f0531b0ef972d325ea96579e9fbe5f1033d7d427214c9e80e4f1c45_prof);

        
        $__internal_7920544c2c3279f491d660e43fcc0236985fdfdd3a110068824035b23d5cf940->leave($__internal_7920544c2c3279f491d660e43fcc0236985fdfdd3a110068824035b23d5cf940_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 42,  180 => 41,  170 => 38,  168 => 37,  164 => 36,  155 => 35,  144 => 32,  130 => 31,  126 => 30,  121 => 29,  103 => 28,  100 => 27,  86 => 26,  82 => 25,  79 => 23,  76 => 21,  74 => 20,  56 => 19,  53 => 18,  50 => 17,  41 => 16,  20 => 12,);
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

{% sonata_template_deprecate '@SonataAdmin/CRUD/Association/list_many_to_many.html.twig' %}

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
        {% for element in value%}
            {{ block('relation_value') }}
            {% if not loop.last %}, {% endif %}
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
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/doctrine-orm-admin-bundle/src/Resources/views/CRUD/list_orm_many_to_many.html.twig");
    }
}
