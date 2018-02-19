<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_4bb6ba4f57614134353b23b06deefac7c2add129def6905f8c589f6a8e154971 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc2907fdf3b4b87b3f2f1ab33f1d736bdb870533b911e4b6da9660bc03424427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2907fdf3b4b87b3f2f1ab33f1d736bdb870533b911e4b6da9660bc03424427->enter($__internal_bc2907fdf3b4b87b3f2f1ab33f1d736bdb870533b911e4b6da9660bc03424427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        $__internal_0c918f6e4c27fcc4d8bb7c2d78567d46b5ab2fb381e451365617da53a119601e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c918f6e4c27fcc4d8bb7c2d78567d46b5ab2fb381e451365617da53a119601e->enter($__internal_0c918f6e4c27fcc4d8bb7c2d78567d46b5ab2fb381e451365617da53a119601e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_bc2907fdf3b4b87b3f2f1ab33f1d736bdb870533b911e4b6da9660bc03424427->leave($__internal_bc2907fdf3b4b87b3f2f1ab33f1d736bdb870533b911e4b6da9660bc03424427_prof);

        
        $__internal_0c918f6e4c27fcc4d8bb7c2d78567d46b5ab2fb381e451365617da53a119601e->leave($__internal_0c918f6e4c27fcc4d8bb7c2d78567d46b5ab2fb381e451365617da53a119601e_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_2a5bb8f391e7a0cc4a64aea602bdc0f20ed02e933a86bb0502af7c89f67c7db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5bb8f391e7a0cc4a64aea602bdc0f20ed02e933a86bb0502af7c89f67c7db8->enter($__internal_2a5bb8f391e7a0cc4a64aea602bdc0f20ed02e933a86bb0502af7c89f67c7db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0b5dba23c4b11310514800eb49ebd2b4fd7fd4d2fc1dd1b48214bbea0bce81a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5dba23c4b11310514800eb49ebd2b4fd7fd4d2fc1dd1b48214bbea0bce81a7->enter($__internal_0b5dba23c4b11310514800eb49ebd2b4fd7fd4d2fc1dd1b48214bbea0bce81a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 14
        echo "    ";
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        if (( !twig_test_empty((isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 22, $this->getSourceContext()); })())) ||  !twig_test_empty((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 22, $this->getSourceContext()); })())))) {
            // line 23
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 28
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 28, $this->getSourceContext()); })()) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 28, $this->getSourceContext()); })()), "listModes", array())) > 1))) {
                // line 29
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 30, $this->getSourceContext()); })()), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 31
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->getSourceContext()); })()), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 31, $this->getSourceContext()); })()), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                            </div>
                        ";
            }
            // line 35
            echo "
                        ";
            // line 36
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 36, $this->getSourceContext()); })()))) {
                // line 37
                echo "                            ";
                echo (isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 37, $this->getSourceContext()); })());
                echo "
                        ";
            }
            // line 39
            echo "                    </div>
                </div>
            </div>
        </div>

        ";
            // line 44
            if (twig_trim_filter((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 44, $this->getSourceContext()); })()))) {
                // line 45
                echo "            <div class=\"row\">
                ";
                // line 46
                echo (isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 46, $this->getSourceContext()); })());
                echo "
            </div>
        ";
            }
            // line 49
            echo "
        <div class=\"row\">
            ";
            // line 51
            echo (isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 51, $this->getSourceContext()); })());
            echo "
        </div>
    </div>
    ";
        }
        
        $__internal_0b5dba23c4b11310514800eb49ebd2b4fd7fd4d2fc1dd1b48214bbea0bce81a7->leave($__internal_0b5dba23c4b11310514800eb49ebd2b4fd7fd4d2fc1dd1b48214bbea0bce81a7_prof);

        
        $__internal_2a5bb8f391e7a0cc4a64aea602bdc0f20ed02e933a86bb0502af7c89f67c7db8->leave($__internal_2a5bb8f391e7a0cc4a64aea602bdc0f20ed02e933a86bb0502af7c89f67c7db8_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_3eb9f77f666790f1d47d65acd02ea96658d1fd06b5626381b14e81873b7e9c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb9f77f666790f1d47d65acd02ea96658d1fd06b5626381b14e81873b7e9c2c->enter($__internal_3eb9f77f666790f1d47d65acd02ea96658d1fd06b5626381b14e81873b7e9c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_8683afcdd53afa5315786b73868bfc052cc46e48d2cdfb97ec4914c6a6e78585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8683afcdd53afa5315786b73868bfc052cc46e48d2cdfb97ec4914c6a6e78585->enter($__internal_8683afcdd53afa5315786b73868bfc052cc46e48d2cdfb97ec4914c6a6e78585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_8683afcdd53afa5315786b73868bfc052cc46e48d2cdfb97ec4914c6a6e78585->leave($__internal_8683afcdd53afa5315786b73868bfc052cc46e48d2cdfb97ec4914c6a6e78585_prof);

        
        $__internal_3eb9f77f666790f1d47d65acd02ea96658d1fd06b5626381b14e81873b7e9c2c->leave($__internal_3eb9f77f666790f1d47d65acd02ea96658d1fd06b5626381b14e81873b7e9c2c_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_dbf50323e76b60766fc4378d2d974efd4f12931629db479456f5d7b9c4075fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbf50323e76b60766fc4378d2d974efd4f12931629db479456f5d7b9c4075fe1->enter($__internal_dbf50323e76b60766fc4378d2d974efd4f12931629db479456f5d7b9c4075fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_b45899b196d9d5b4242ab781740a73e5c21b55f9b92d89e96be848bf43bdb16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45899b196d9d5b4242ab781740a73e5c21b55f9b92d89e96be848bf43bdb16d->enter($__internal_b45899b196d9d5b4242ab781740a73e5c21b55f9b92d89e96be848bf43bdb16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_b45899b196d9d5b4242ab781740a73e5c21b55f9b92d89e96be848bf43bdb16d->leave($__internal_b45899b196d9d5b4242ab781740a73e5c21b55f9b92d89e96be848bf43bdb16d_prof);

        
        $__internal_dbf50323e76b60766fc4378d2d974efd4f12931629db479456f5d7b9c4075fe1->leave($__internal_dbf50323e76b60766fc4378d2d974efd4f12931629db479456f5d7b9c4075fe1_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_24722e3620ed2c71a95431a9a503b63bd1f526e424e7ee279d32e8c7f057fd64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24722e3620ed2c71a95431a9a503b63bd1f526e424e7ee279d32e8c7f057fd64->enter($__internal_24722e3620ed2c71a95431a9a503b63bd1f526e424e7ee279d32e8c7f057fd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_24147eea739ef682909f51fc3d5025c90fac1f27bbbfa0c9c1a289e3ad1e4eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24147eea739ef682909f51fc3d5025c90fac1f27bbbfa0c9c1a289e3ad1e4eb9->enter($__internal_24147eea739ef682909f51fc3d5025c90fac1f27bbbfa0c9c1a289e3ad1e4eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_24147eea739ef682909f51fc3d5025c90fac1f27bbbfa0c9c1a289e3ad1e4eb9->leave($__internal_24147eea739ef682909f51fc3d5025c90fac1f27bbbfa0c9c1a289e3ad1e4eb9_prof);

        
        $__internal_24722e3620ed2c71a95431a9a503b63bd1f526e424e7ee279d32e8c7f057fd64->leave($__internal_24722e3620ed2c71a95431a9a503b63bd1f526e424e7ee279d32e8c7f057fd64_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_65397b3654d9e4df5a41d282eeffd955f86c34cc9e5e1b99920ab3f3584742e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65397b3654d9e4df5a41d282eeffd955f86c34cc9e5e1b99920ab3f3584742e4->enter($__internal_65397b3654d9e4df5a41d282eeffd955f86c34cc9e5e1b99920ab3f3584742e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_0bd1d042642962e88561771fe6549a1ca3f4a7ee9cb805db4a7d44c4a5b29644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd1d042642962e88561771fe6549a1ca3f4a7ee9cb805db4a7d44c4a5b29644->enter($__internal_0bd1d042642962e88561771fe6549a1ca3f4a7ee9cb805db4a7d44c4a5b29644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_0bd1d042642962e88561771fe6549a1ca3f4a7ee9cb805db4a7d44c4a5b29644->leave($__internal_0bd1d042642962e88561771fe6549a1ca3f4a7ee9cb805db4a7d44c4a5b29644_prof);

        
        $__internal_65397b3654d9e4df5a41d282eeffd955f86c34cc9e5e1b99920ab3f3584742e4->leave($__internal_65397b3654d9e4df5a41d282eeffd955f86c34cc9e5e1b99920ab3f3584742e4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 20,  196 => 19,  179 => 18,  162 => 17,  147 => 51,  143 => 49,  137 => 46,  134 => 45,  132 => 44,  125 => 39,  119 => 37,  117 => 36,  114 => 35,  110 => 33,  95 => 31,  91 => 30,  88 => 29,  86 => 28,  79 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  33 => 12,  30 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block content %}
    {% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
    {% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
    {% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}

    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
            <div class=\"row\">
                {{ _list_filters|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle::ajax_layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/ajax_layout.html.twig");
    }
}
