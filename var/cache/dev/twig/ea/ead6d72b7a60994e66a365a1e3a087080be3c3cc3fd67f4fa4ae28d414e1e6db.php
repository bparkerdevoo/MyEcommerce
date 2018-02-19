<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_2ea8f3c982303f0087012f7cce5bfb809169094d4a101e56846e57c0042967ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_682125bbffa5eb8722143ed7c67b9375e43f6b0cd42ad2714d3b6f92ceea02c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682125bbffa5eb8722143ed7c67b9375e43f6b0cd42ad2714d3b6f92ceea02c5->enter($__internal_682125bbffa5eb8722143ed7c67b9375e43f6b0cd42ad2714d3b6f92ceea02c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $__internal_89163fc21264f2ddaaa6facb8c72c151117a916dd2b6d94eca619a662d02e7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89163fc21264f2ddaaa6facb8c72c151117a916dd2b6d94eca619a662d02e7ae->enter($__internal_89163fc21264f2ddaaa6facb8c72c151117a916dd2b6d94eca619a662d02e7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_682125bbffa5eb8722143ed7c67b9375e43f6b0cd42ad2714d3b6f92ceea02c5->leave($__internal_682125bbffa5eb8722143ed7c67b9375e43f6b0cd42ad2714d3b6f92ceea02c5_prof);

        
        $__internal_89163fc21264f2ddaaa6facb8c72c151117a916dd2b6d94eca619a662d02e7ae->leave($__internal_89163fc21264f2ddaaa6facb8c72c151117a916dd2b6d94eca619a662d02e7ae_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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

{% extends '@SonataAdmin/CRUD/base_acl.html.twig' %}
", "SonataAdminBundle:CRUD:acl.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/acl.html.twig");
    }
}
