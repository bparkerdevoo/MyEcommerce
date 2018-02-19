<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_5095ef6e39d1a4ef3ccc0cfc918ba298a0ee369f020c295d6d968108f495db48 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_507f519aea74d28e4023d1c008beb046e7fd8b18ecfaafa912692aecd5f54dcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507f519aea74d28e4023d1c008beb046e7fd8b18ecfaafa912692aecd5f54dcd->enter($__internal_507f519aea74d28e4023d1c008beb046e7fd8b18ecfaafa912692aecd5f54dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_e3cbb06e35e5d804e27d02b994ac5559f433a49194d16be61f07202513e06645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3cbb06e35e5d804e27d02b994ac5559f433a49194d16be61f07202513e06645->enter($__internal_e3cbb06e35e5d804e27d02b994ac5559f433a49194d16be61f07202513e06645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_507f519aea74d28e4023d1c008beb046e7fd8b18ecfaafa912692aecd5f54dcd->leave($__internal_507f519aea74d28e4023d1c008beb046e7fd8b18ecfaafa912692aecd5f54dcd_prof);

        
        $__internal_e3cbb06e35e5d804e27d02b994ac5559f433a49194d16be61f07202513e06645->leave($__internal_e3cbb06e35e5d804e27d02b994ac5559f433a49194d16be61f07202513e06645_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "SonataAdminBundle:CRUD:list_string.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/list_string.html.twig");
    }
}
