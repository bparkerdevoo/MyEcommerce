<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_e3026948f6476fc9167d895ec718eecde1e86ffc46988ac9632ac6bf61aeebae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b6965f306193aac778118d8752c5d8d8b250131ba9953918a3db0458065233c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6965f306193aac778118d8752c5d8d8b250131ba9953918a3db0458065233c->enter($__internal_7b6965f306193aac778118d8752c5d8d8b250131ba9953918a3db0458065233c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $__internal_58cee25d57b3e1b90c5577c3237aed18f8364a90434c80fe8f6c9812ccbf79f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58cee25d57b3e1b90c5577c3237aed18f8364a90434c80fe8f6c9812ccbf79f4->enter($__internal_58cee25d57b3e1b90c5577c3237aed18f8364a90434c80fe8f6c9812ccbf79f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b6965f306193aac778118d8752c5d8d8b250131ba9953918a3db0458065233c->leave($__internal_7b6965f306193aac778118d8752c5d8d8b250131ba9953918a3db0458065233c_prof);

        
        $__internal_58cee25d57b3e1b90c5577c3237aed18f8364a90434c80fe8f6c9812ccbf79f4->leave($__internal_58cee25d57b3e1b90c5577c3237aed18f8364a90434c80fe8f6c9812ccbf79f4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/CRUD/base_show.html.twig' %}
", "SonataAdminBundle:CRUD:show.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show.html.twig");
    }
}
