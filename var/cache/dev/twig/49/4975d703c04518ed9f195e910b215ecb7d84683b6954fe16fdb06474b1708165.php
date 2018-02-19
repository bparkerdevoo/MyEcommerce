<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1ef486f5ac17d9172a859035b5b913bb69e394cb011e1b578e7bdf1cbb26b663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11d2bbfdcb5032dcacd419c67c5b33ba5d111f3590467db53a2954c092627925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d2bbfdcb5032dcacd419c67c5b33ba5d111f3590467db53a2954c092627925->enter($__internal_11d2bbfdcb5032dcacd419c67c5b33ba5d111f3590467db53a2954c092627925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_d04cee47136127d4f96d990019ad7f06d20754f33df69305add250d043e12b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04cee47136127d4f96d990019ad7f06d20754f33df69305add250d043e12b30->enter($__internal_d04cee47136127d4f96d990019ad7f06d20754f33df69305add250d043e12b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11d2bbfdcb5032dcacd419c67c5b33ba5d111f3590467db53a2954c092627925->leave($__internal_11d2bbfdcb5032dcacd419c67c5b33ba5d111f3590467db53a2954c092627925_prof);

        
        $__internal_d04cee47136127d4f96d990019ad7f06d20754f33df69305add250d043e12b30->leave($__internal_d04cee47136127d4f96d990019ad7f06d20754f33df69305add250d043e12b30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb14d505dd2d4372ca334cf0b9a653e71d874bc5265429891787edaf26077731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb14d505dd2d4372ca334cf0b9a653e71d874bc5265429891787edaf26077731->enter($__internal_eb14d505dd2d4372ca334cf0b9a653e71d874bc5265429891787edaf26077731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cb0cc68819aa1420bc01b99de90b87393b264f6ef6a53b63d8fdfbc14fedd658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0cc68819aa1420bc01b99de90b87393b264f6ef6a53b63d8fdfbc14fedd658->enter($__internal_cb0cc68819aa1420bc01b99de90b87393b264f6ef6a53b63d8fdfbc14fedd658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cb0cc68819aa1420bc01b99de90b87393b264f6ef6a53b63d8fdfbc14fedd658->leave($__internal_cb0cc68819aa1420bc01b99de90b87393b264f6ef6a53b63d8fdfbc14fedd658_prof);

        
        $__internal_eb14d505dd2d4372ca334cf0b9a653e71d874bc5265429891787edaf26077731->leave($__internal_eb14d505dd2d4372ca334cf0b9a653e71d874bc5265429891787edaf26077731_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d6ee272f542aa512d89bff3c9c6a4a48e188cd45f88bb1ec43a1f0686537908c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ee272f542aa512d89bff3c9c6a4a48e188cd45f88bb1ec43a1f0686537908c->enter($__internal_d6ee272f542aa512d89bff3c9c6a4a48e188cd45f88bb1ec43a1f0686537908c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_018d00d64ae9498b739856b998872dd27c9e4cd3c6691b8f3db9ac0094cf22ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018d00d64ae9498b739856b998872dd27c9e4cd3c6691b8f3db9ac0094cf22ff->enter($__internal_018d00d64ae9498b739856b998872dd27c9e4cd3c6691b8f3db9ac0094cf22ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_018d00d64ae9498b739856b998872dd27c9e4cd3c6691b8f3db9ac0094cf22ff->leave($__internal_018d00d64ae9498b739856b998872dd27c9e4cd3c6691b8f3db9ac0094cf22ff_prof);

        
        $__internal_d6ee272f542aa512d89bff3c9c6a4a48e188cd45f88bb1ec43a1f0686537908c->leave($__internal_d6ee272f542aa512d89bff3c9c6a4a48e188cd45f88bb1ec43a1f0686537908c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_922dd3530bc7425658a40b1ab42c5cc8c17662159b90c3946ee5b6dc6126bca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_922dd3530bc7425658a40b1ab42c5cc8c17662159b90c3946ee5b6dc6126bca9->enter($__internal_922dd3530bc7425658a40b1ab42c5cc8c17662159b90c3946ee5b6dc6126bca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a6c75c77632b1de1e1b465a0532dae0bbedd4758eb3bd67e7408cdc69441de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6c75c77632b1de1e1b465a0532dae0bbedd4758eb3bd67e7408cdc69441de1->enter($__internal_4a6c75c77632b1de1e1b465a0532dae0bbedd4758eb3bd67e7408cdc69441de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_4a6c75c77632b1de1e1b465a0532dae0bbedd4758eb3bd67e7408cdc69441de1->leave($__internal_4a6c75c77632b1de1e1b465a0532dae0bbedd4758eb3bd67e7408cdc69441de1_prof);

        
        $__internal_922dd3530bc7425658a40b1ab42c5cc8c17662159b90c3946ee5b6dc6126bca9->leave($__internal_922dd3530bc7425658a40b1ab42c5cc8c17662159b90c3946ee5b6dc6126bca9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
