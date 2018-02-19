<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_6563bc1f7b7b07c268a0586e2fd93e99fbaeb60b4b0126906eff8db2f94e7471 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataAdmin/Pager/base_results.html.twig", "SonataAdminBundle:Pager:simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/Pager/base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b6ec7711ae34e7c64434a5ba12b3711363e5a11d3d4439d4fa03c246ca50631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b6ec7711ae34e7c64434a5ba12b3711363e5a11d3d4439d4fa03c246ca50631->enter($__internal_6b6ec7711ae34e7c64434a5ba12b3711363e5a11d3d4439d4fa03c246ca50631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $__internal_bb2b07e89f9e1531f3d4cd8e0fbc03e0e96d8a3a47901c79d511e465bf7181a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2b07e89f9e1531f3d4cd8e0fbc03e0e96d8a3a47901c79d511e465bf7181a0->enter($__internal_bb2b07e89f9e1531f3d4cd8e0fbc03e0e96d8a3a47901c79d511e465bf7181a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b6ec7711ae34e7c64434a5ba12b3711363e5a11d3d4439d4fa03c246ca50631->leave($__internal_6b6ec7711ae34e7c64434a5ba12b3711363e5a11d3d4439d4fa03c246ca50631_prof);

        
        $__internal_bb2b07e89f9e1531f3d4cd8e0fbc03e0e96d8a3a47901c79d511e465bf7181a0->leave($__internal_bb2b07e89f9e1531f3d4cd8e0fbc03e0e96d8a3a47901c79d511e465bf7181a0_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_59b99e736f2eae5cddf462f9004cc6f93c9caab65899f7a29ebd83266225e85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b99e736f2eae5cddf462f9004cc6f93c9caab65899f7a29ebd83266225e85d->enter($__internal_59b99e736f2eae5cddf462f9004cc6f93c9caab65899f7a29ebd83266225e85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_4259f3ac3fdd3e1dd350383bc05d6f349ee261c5a72f8db1c65fa21820aabcd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4259f3ac3fdd3e1dd350383bc05d6f349ee261c5a72f8db1c65fa21820aabcd8->enter($__internal_4259f3ac3fdd3e1dd350383bc05d6f349ee261c5a72f8db1c65fa21820aabcd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastPage", array()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_4259f3ac3fdd3e1dd350383bc05d6f349ee261c5a72f8db1c65fa21820aabcd8->leave($__internal_4259f3ac3fdd3e1dd350383bc05d6f349ee261c5a72f8db1c65fa21820aabcd8_prof);

        
        $__internal_59b99e736f2eae5cddf462f9004cc6f93c9caab65899f7a29ebd83266225e85d->leave($__internal_59b99e736f2eae5cddf462f9004cc6f93c9caab65899f7a29ebd83266225e85d_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_7ea197a8eb3de862d9d19c179ef69d9643d1b9b6eefa785c4f3dff039b5387a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea197a8eb3de862d9d19c179ef69d9643d1b9b6eefa785c4f3dff039b5387a9->enter($__internal_7ea197a8eb3de862d9d19c179ef69d9643d1b9b6eefa785c4f3dff039b5387a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_d709b548226fbd701f105e7303cf0626d0ab8ed2e9dd707ed672d4225f57b06d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d709b548226fbd701f105e7303cf0626d0ab8ed2e9dd707ed672d4225f57b06d->enter($__internal_d709b548226fbd701f105e7303cf0626d0ab8ed2e9dd707ed672d4225f57b06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 23, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastPage", array()) != twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 28, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_d709b548226fbd701f105e7303cf0626d0ab8ed2e9dd707ed672d4225f57b06d->leave($__internal_d709b548226fbd701f105e7303cf0626d0ab8ed2e9dd707ed672d4225f57b06d_prof);

        
        $__internal_7ea197a8eb3de862d9d19c179ef69d9643d1b9b6eefa785c4f3dff039b5387a9->leave($__internal_7ea197a8eb3de862d9d19c179ef69d9643d1b9b6eefa785c4f3dff039b5387a9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  94 => 28,  90 => 26,  88 => 25,  82 => 23,  73 => 22,  62 => 19,  59 => 18,  53 => 16,  50 => 15,  41 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends '@SonataAdmin/Pager/base_results.html.twig' %}

{% block num_results %}
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}
    {% endif %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_pages %}
    {{ admin.datagrid.pager.page }}
    /
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        ?
    {% else %}
        {{ admin.datagrid.pager.lastpage }}
    {% endif %}
    &nbsp;-&nbsp;
{% endblock %}
", "SonataAdminBundle:Pager:simple_pager_results.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/Pager/simple_pager_results.html.twig");
    }
}
