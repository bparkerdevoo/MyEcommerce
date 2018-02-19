<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_468299b916c522edd0f4aa827cf7385d9faab42aaae5f830b1a1abef164638ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 13);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48dfeaa16bd1996dd88767add73f161f37f45522b4fd990f7139b9da8b9f638e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48dfeaa16bd1996dd88767add73f161f37f45522b4fd990f7139b9da8b9f638e->enter($__internal_48dfeaa16bd1996dd88767add73f161f37f45522b4fd990f7139b9da8b9f638e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $__internal_50db0815fcb0352aed8cc25112b753c64c0ad96c2b158dee473fda821f8ec64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50db0815fcb0352aed8cc25112b753c64c0ad96c2b158dee473fda821f8ec64f->enter($__internal_50db0815fcb0352aed8cc25112b753c64c0ad96c2b158dee473fda821f8ec64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        // line 11
        $context["show"] = $this->loadTemplate("@SonataAdmin/CRUD/base_array_macro.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 11);
        // line 13
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48dfeaa16bd1996dd88767add73f161f37f45522b4fd990f7139b9da8b9f638e->leave($__internal_48dfeaa16bd1996dd88767add73f161f37f45522b4fd990f7139b9da8b9f638e_prof);

        
        $__internal_50db0815fcb0352aed8cc25112b753c64c0ad96c2b158dee473fda821f8ec64f->leave($__internal_50db0815fcb0352aed8cc25112b753c64c0ad96c2b158dee473fda821f8ec64f_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_139e820b66590c139c747b29657293302c1e94b9d444cf9aaa8cfa2fef900e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_139e820b66590c139c747b29657293302c1e94b9d444cf9aaa8cfa2fef900e06->enter($__internal_139e820b66590c139c747b29657293302c1e94b9d444cf9aaa8cfa2fef900e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_1fb1f73fde04b3785d5d7f95681cae0e3bb03c42ae1cec23b3716b326b45af1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb1f73fde04b3785d5d7f95681cae0e3bb03c42ae1cec23b3716b326b45af1d->enter($__internal_1fb1f73fde04b3785d5d7f95681cae0e3bb03c42ae1cec23b3716b326b45af1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["show"]->macro_render_array((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 16, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array()), false)) : (false)));
        echo "
";
        
        $__internal_1fb1f73fde04b3785d5d7f95681cae0e3bb03c42ae1cec23b3716b326b45af1d->leave($__internal_1fb1f73fde04b3785d5d7f95681cae0e3bb03c42ae1cec23b3716b326b45af1d_prof);

        
        $__internal_139e820b66590c139c747b29657293302c1e94b9d444cf9aaa8cfa2fef900e06->leave($__internal_139e820b66590c139c747b29657293302c1e94b9d444cf9aaa8cfa2fef900e06_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  43 => 15,  33 => 13,  31 => 11,  11 => 13,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% import '@SonataAdmin/CRUD/base_array_macro.html.twig' as show %}

{% extends '@SonataAdmin/CRUD/base_show_field.html.twig' %}

{% block field%}
    {{ show.render_array(value, field_description.options.inline|default(false)) }}
{% endblock %}
", "SonataAdminBundle:CRUD:show_array.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_array.html.twig");
    }
}
