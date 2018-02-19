<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_6271f0d5275996d2263335516f05446444ce74aad927635cc6c11ffe5ef0560a extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f72372ed89b435a9ba44e4153f8d34b526802c2a5d10134d6d791af968c3fb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72372ed89b435a9ba44e4153f8d34b526802c2a5d10134d6d791af968c3fb60->enter($__internal_f72372ed89b435a9ba44e4153f8d34b526802c2a5d10134d6d791af968c3fb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_5735e5a747acb7aa68f7422bbf3b7183f38032ef4678be14c6adbf7c236e4f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5735e5a747acb7aa68f7422bbf3b7183f38032ef4678be14c6adbf7c236e4f0e->enter($__internal_5735e5a747acb7aa68f7422bbf3b7183f38032ef4678be14c6adbf7c236e4f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f72372ed89b435a9ba44e4153f8d34b526802c2a5d10134d6d791af968c3fb60->leave($__internal_f72372ed89b435a9ba44e4153f8d34b526802c2a5d10134d6d791af968c3fb60_prof);

        
        $__internal_5735e5a747acb7aa68f7422bbf3b7183f38032ef4678be14c6adbf7c236e4f0e->leave($__internal_5735e5a747acb7aa68f7422bbf3b7183f38032ef4678be14c6adbf7c236e4f0e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_137a55f622ad15ddd176c892ee4eed8d579b9abe95c707ceaa9fee0c1ed1a8cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137a55f622ad15ddd176c892ee4eed8d579b9abe95c707ceaa9fee0c1ed1a8cc->enter($__internal_137a55f622ad15ddd176c892ee4eed8d579b9abe95c707ceaa9fee0c1ed1a8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8298599269b6ebd45f7e8d97cb8229a75450da38db933ddaea11eb29f9e3a617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8298599269b6ebd45f7e8d97cb8229a75450da38db933ddaea11eb29f9e3a617->enter($__internal_8298599269b6ebd45f7e8d97cb8229a75450da38db933ddaea11eb29f9e3a617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_description"]) || array_key_exists("field_description", $context) ? $context["field_description"] : (function () { throw new Twig_Error_Runtime('Variable "field_description" does not exist.', 16, $this->getSourceContext()); })()), "options", array()), "actions", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), $context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_8298599269b6ebd45f7e8d97cb8229a75450da38db933ddaea11eb29f9e3a617->leave($__internal_8298599269b6ebd45f7e8d97cb8229a75450da38db933ddaea11eb29f9e3a617_prof);

        
        $__internal_137a55f622ad15ddd176c892ee4eed8d579b9abe95c707ceaa9fee0c1ed1a8cc->leave($__internal_137a55f622ad15ddd176c892ee4eed8d579b9abe95c707ceaa9fee0c1ed1a8cc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  71 => 18,  68 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"btn-group\">
        {% for actions in field_description.options.actions %}
            {% include actions.template %}
        {% endfor %}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:list__action.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list__action.html.twig");
    }
}
