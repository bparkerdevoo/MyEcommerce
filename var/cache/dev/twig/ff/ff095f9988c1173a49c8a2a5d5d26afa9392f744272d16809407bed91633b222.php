<?php

/* @SonataAdmin/CRUD/base_show_field.html.twig */
class __TwigTemplate_6b718c27f08f9fb2bf57798e1f6ad894178da92c5042e01d35570ee4e250ee0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_value' => array($this, 'block_field_value'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1364128c7369c24309995e1ea04cdae7b748e9ef64b55fc5afa28847de29568c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1364128c7369c24309995e1ea04cdae7b748e9ef64b55fc5afa28847de29568c->enter($__internal_1364128c7369c24309995e1ea04cdae7b748e9ef64b55fc5afa28847de29568c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

        $__internal_7ea2edeac443151b16735edffbeae9805747dfe3c878c4b76f69866e791f84ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea2edeac443151b16735edffbeae9805747dfe3c878c4b76f69866e791f84ba->enter($__internal_7ea2edeac443151b16735edffbeae9805747dfe3c878c4b76f69866e791f84ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) || array_key_exists("is_diff", $context) ? $context["is_diff"] : (function () { throw new Twig_Error_Runtime('Variable "is_diff" does not exist.', 12, $this->getSourceContext()); })()), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_1364128c7369c24309995e1ea04cdae7b748e9ef64b55fc5afa28847de29568c->leave($__internal_1364128c7369c24309995e1ea04cdae7b748e9ef64b55fc5afa28847de29568c_prof);

        
        $__internal_7ea2edeac443151b16735edffbeae9805747dfe3c878c4b76f69866e791f84ba->leave($__internal_7ea2edeac443151b16735edffbeae9805747dfe3c878c4b76f69866e791f84ba_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_78441fc5ef5b1c53c155445efe9a9333545b15193a9f180a784e7bc2ef33d5c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78441fc5ef5b1c53c155445efe9a9333545b15193a9f180a784e7bc2ef33d5c2->enter($__internal_78441fc5ef5b1c53c155445efe9a9333545b15193a9f180a784e7bc2ef33d5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_944e6cb8d27bf1a878dafaed182189dd7d3a6ed1bd0603eab84d09767b38d40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944e6cb8d27bf1a878dafaed182189dd7d3a6ed1bd0603eab84d09767b38d40c->enter($__internal_944e6cb8d27bf1a878dafaed182189dd7d3a6ed1bd0603eab84d09767b38d40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
        
        $__internal_944e6cb8d27bf1a878dafaed182189dd7d3a6ed1bd0603eab84d09767b38d40c->leave($__internal_944e6cb8d27bf1a878dafaed182189dd7d3a6ed1bd0603eab84d09767b38d40c_prof);

        
        $__internal_78441fc5ef5b1c53c155445efe9a9333545b15193a9f180a784e7bc2ef33d5c2->leave($__internal_78441fc5ef5b1c53c155445efe9a9333545b15193a9f180a784e7bc2ef33d5c2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b619f43071072533f6f981616beb98c0b5bdc92927e9bd9fdb7063c36367a45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b619f43071072533f6f981616beb98c0b5bdc92927e9bd9fdb7063c36367a45a->enter($__internal_b619f43071072533f6f981616beb98c0b5bdc92927e9bd9fdb7063c36367a45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6ea92b1fd0f2b2d5632f67b81cb833f99da1170c399259f38d9037b9076147ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea92b1fd0f2b2d5632f67b81cb833f99da1170c399259f38d9037b9076147ae->enter($__internal_6ea92b1fd0f2b2d5632f67b81cb833f99da1170c399259f38d9037b9076147ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if ((isset($context["collapse"]) || array_key_exists("collapse", $context) ? $context["collapse"] : (function () { throw new Twig_Error_Runtime('Variable "collapse" does not exist.', 17, $this->getSourceContext()); })())) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "more", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "less", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["collapse"] ?? null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6ea92b1fd0f2b2d5632f67b81cb833f99da1170c399259f38d9037b9076147ae->leave($__internal_6ea92b1fd0f2b2d5632f67b81cb833f99da1170c399259f38d9037b9076147ae_prof);

        
        $__internal_b619f43071072533f6f981616beb98c0b5bdc92927e9bd9fdb7063c36367a45a->leave($__internal_b619f43071072533f6f981616beb98c0b5bdc92927e9bd9fdb7063c36367a45a_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_4e352b6a26fd71040b38b4e9af7779a41ed000c5c21f2bcebb157d7b4b137b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e352b6a26fd71040b38b4e9af7779a41ed000c5c21f2bcebb157d7b4b137b2b->enter($__internal_4e352b6a26fd71040b38b4e9af7779a41ed000c5c21f2bcebb157d7b4b137b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_3c3df6c1ff3e84fc1e0bc2fca1e2e463e2ea5f5e023d6689e6db9b8a99b625c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3df6c1ff3e84fc1e0bc2fca1e2e463e2ea5f5e023d6689e6db9b8a99b625c1->enter($__internal_3c3df6c1ff3e84fc1e0bc2fca1e2e463e2ea5f5e023d6689e6db9b8a99b625c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 23, $this->getSourceContext()); })()), "options", array()), "safe", array())) {
            echo (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })());
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_3c3df6c1ff3e84fc1e0bc2fca1e2e463e2ea5f5e023d6689e6db9b8a99b625c1->leave($__internal_3c3df6c1ff3e84fc1e0bc2fca1e2e463e2ea5f5e023d6689e6db9b8a99b625c1_prof);

        
        $__internal_4e352b6a26fd71040b38b4e9af7779a41ed000c5c21f2bcebb157d7b4b137b2b->leave($__internal_4e352b6a26fd71040b38b4e9af7779a41ed000c5c21f2bcebb157d7b4b137b2b_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_72325da44e5bbc5f6911eb2203f0e07f0b7270011bdb5e8e1ae388fa5e6393e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72325da44e5bbc5f6911eb2203f0e07f0b7270011bdb5e8e1ae388fa5e6393e1->enter($__internal_72325da44e5bbc5f6911eb2203f0e07f0b7270011bdb5e8e1ae388fa5e6393e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_888f5a0429e6ffda05843d98afc16ef2b12c2d5602a6f8f7a54e7b1d32f22f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888f5a0429e6ffda05843d98afc16ef2b12c2d5602a6f8f7a54e7b1d32f22f5a->enter($__internal_888f5a0429e6ffda05843d98afc16ef2b12c2d5602a6f8f7a54e7b1d32f22f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = (isset($context["value_compare"]) || array_key_exists("value_compare", $context) ? $context["value_compare"] : (function () { throw new Twig_Error_Runtime('Variable "value_compare" does not exist.', 36, $this->getSourceContext()); })());
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_888f5a0429e6ffda05843d98afc16ef2b12c2d5602a6f8f7a54e7b1d32f22f5a->leave($__internal_888f5a0429e6ffda05843d98afc16ef2b12c2d5602a6f8f7a54e7b1d32f22f5a_prof);

        
        $__internal_72325da44e5bbc5f6911eb2203f0e07f0b7270011bdb5e8e1ae388fa5e6393e1->leave($__internal_72325da44e5bbc5f6911eb2203f0e07f0b7270011bdb5e8e1ae388fa5e6393e1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 37,  170 => 36,  167 => 35,  164 => 34,  155 => 33,  145 => 24,  138 => 23,  129 => 22,  118 => 29,  112 => 27,  108 => 25,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  83 => 15,  74 => 14,  56 => 12,  46 => 33,  42 => 31,  40 => 14,  32 => 12,  29 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>
    {%- block field -%}
        {% spaceless %}
            {% set collapse = field_description.options.collapse|default(false) %}
            {% if collapse %}
                <div class=\"sonata-readmore\"
                      data-readmore-height=\"{{ collapse.height|default(40) }}\"
                      data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                      data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">
                    {% block field_value %}
                        {% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}
                    {% endblock %}
                </div>
            {% else %}
                {{ block('field_value') }}
            {% endif %}
        {% endspaceless %}
    {%- endblock -%}
</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/base_show_field.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_show_field.html.twig");
    }
}
