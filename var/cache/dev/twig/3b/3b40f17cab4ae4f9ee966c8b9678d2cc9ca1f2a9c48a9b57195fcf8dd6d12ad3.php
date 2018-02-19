<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_511dc16acd7f2c90e6bf1922c282ab6b9903a26a1f1fc982dd6258339b569f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13d5263a2703fe6b370aaa8d5a0c1b0f4c94a3675f8fb25a2092ce0933c5fe0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d5263a2703fe6b370aaa8d5a0c1b0f4c94a3675f8fb25a2092ce0933c5fe0f->enter($__internal_13d5263a2703fe6b370aaa8d5a0c1b0f4c94a3675f8fb25a2092ce0933c5fe0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_788eac567732ee4185b45fd56a2f4103f19e42313ca33a741f9a0eb09d6165ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788eac567732ee4185b45fd56a2f4103f19e42313ca33a741f9a0eb09d6165ab->enter($__internal_788eac567732ee4185b45fd56a2f4103f19e42313ca33a741f9a0eb09d6165ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13d5263a2703fe6b370aaa8d5a0c1b0f4c94a3675f8fb25a2092ce0933c5fe0f->leave($__internal_13d5263a2703fe6b370aaa8d5a0c1b0f4c94a3675f8fb25a2092ce0933c5fe0f_prof);

        
        $__internal_788eac567732ee4185b45fd56a2f4103f19e42313ca33a741f9a0eb09d6165ab->leave($__internal_788eac567732ee4185b45fd56a2f4103f19e42313ca33a741f9a0eb09d6165ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae4918e89ec680fe43a9ab04c4a65979f53a4a872e8d4e272204d524d3c41bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4918e89ec680fe43a9ab04c4a65979f53a4a872e8d4e272204d524d3c41bfc->enter($__internal_ae4918e89ec680fe43a9ab04c4a65979f53a4a872e8d4e272204d524d3c41bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_684b2dbb84c499dc9873b52e555af620983e477a51608929944d8aa0ac23bb70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684b2dbb84c499dc9873b52e555af620983e477a51608929944d8aa0ac23bb70->enter($__internal_684b2dbb84c499dc9873b52e555af620983e477a51608929944d8aa0ac23bb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_684b2dbb84c499dc9873b52e555af620983e477a51608929944d8aa0ac23bb70->leave($__internal_684b2dbb84c499dc9873b52e555af620983e477a51608929944d8aa0ac23bb70_prof);

        
        $__internal_ae4918e89ec680fe43a9ab04c4a65979f53a4a872e8d4e272204d524d3c41bfc->leave($__internal_ae4918e89ec680fe43a9ab04c4a65979f53a4a872e8d4e272204d524d3c41bfc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_153ecc6ff3ba8e84cabc328ca2795b20bd577f7355ff08743e72cf8187e8c4f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153ecc6ff3ba8e84cabc328ca2795b20bd577f7355ff08743e72cf8187e8c4f4->enter($__internal_153ecc6ff3ba8e84cabc328ca2795b20bd577f7355ff08743e72cf8187e8c4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44c98a69839025bf7aefa28e4a74f393473f59ac5d5a3c60984425d744cb5b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c98a69839025bf7aefa28e4a74f393473f59ac5d5a3c60984425d744cb5b9d->enter($__internal_44c98a69839025bf7aefa28e4a74f393473f59ac5d5a3c60984425d744cb5b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_44c98a69839025bf7aefa28e4a74f393473f59ac5d5a3c60984425d744cb5b9d->leave($__internal_44c98a69839025bf7aefa28e4a74f393473f59ac5d5a3c60984425d744cb5b9d_prof);

        
        $__internal_153ecc6ff3ba8e84cabc328ca2795b20bd577f7355ff08743e72cf8187e8c4f4->leave($__internal_153ecc6ff3ba8e84cabc328ca2795b20bd577f7355ff08743e72cf8187e8c4f4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
