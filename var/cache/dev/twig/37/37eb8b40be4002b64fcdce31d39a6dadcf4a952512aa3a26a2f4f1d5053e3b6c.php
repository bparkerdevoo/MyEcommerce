<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_aa68f96d0b7753eb525e4d3896f15dcc1729238095895aa19db36b4919a0ea0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2255f8a88eaab97d3316abb8422d831f6dbf295670863e124e2fa8418c2bd939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2255f8a88eaab97d3316abb8422d831f6dbf295670863e124e2fa8418c2bd939->enter($__internal_2255f8a88eaab97d3316abb8422d831f6dbf295670863e124e2fa8418c2bd939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_69d278fd561d70076f1ca3162a08c80bc8c837ff80a7a57924108e15a2c878e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d278fd561d70076f1ca3162a08c80bc8c837ff80a7a57924108e15a2c878e2->enter($__internal_69d278fd561d70076f1ca3162a08c80bc8c837ff80a7a57924108e15a2c878e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2255f8a88eaab97d3316abb8422d831f6dbf295670863e124e2fa8418c2bd939->leave($__internal_2255f8a88eaab97d3316abb8422d831f6dbf295670863e124e2fa8418c2bd939_prof);

        
        $__internal_69d278fd561d70076f1ca3162a08c80bc8c837ff80a7a57924108e15a2c878e2->leave($__internal_69d278fd561d70076f1ca3162a08c80bc8c837ff80a7a57924108e15a2c878e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c004601d77c1f632be4e4e41fccb7babcea23d788558d1adc047b08cb4f9533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c004601d77c1f632be4e4e41fccb7babcea23d788558d1adc047b08cb4f9533->enter($__internal_8c004601d77c1f632be4e4e41fccb7babcea23d788558d1adc047b08cb4f9533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_45da7d180e8b3c058d8b2130615122ce655c14d66ebf25d422408e5c371c2cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45da7d180e8b3c058d8b2130615122ce655c14d66ebf25d422408e5c371c2cf3->enter($__internal_45da7d180e8b3c058d8b2130615122ce655c14d66ebf25d422408e5c371c2cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_45da7d180e8b3c058d8b2130615122ce655c14d66ebf25d422408e5c371c2cf3->leave($__internal_45da7d180e8b3c058d8b2130615122ce655c14d66ebf25d422408e5c371c2cf3_prof);

        
        $__internal_8c004601d77c1f632be4e4e41fccb7babcea23d788558d1adc047b08cb4f9533->leave($__internal_8c004601d77c1f632be4e4e41fccb7babcea23d788558d1adc047b08cb4f9533_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2df8e21488b382a93495fac29c7cfca6b209509f0ea1aa71d76e46159771c8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df8e21488b382a93495fac29c7cfca6b209509f0ea1aa71d76e46159771c8e3->enter($__internal_2df8e21488b382a93495fac29c7cfca6b209509f0ea1aa71d76e46159771c8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_61b33ac7608edfad2a72c94b16eaba9145aedd15742f68ea2612d571ab1712cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b33ac7608edfad2a72c94b16eaba9145aedd15742f68ea2612d571ab1712cd->enter($__internal_61b33ac7608edfad2a72c94b16eaba9145aedd15742f68ea2612d571ab1712cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_61b33ac7608edfad2a72c94b16eaba9145aedd15742f68ea2612d571ab1712cd->leave($__internal_61b33ac7608edfad2a72c94b16eaba9145aedd15742f68ea2612d571ab1712cd_prof);

        
        $__internal_2df8e21488b382a93495fac29c7cfca6b209509f0ea1aa71d76e46159771c8e3->leave($__internal_2df8e21488b382a93495fac29c7cfca6b209509f0ea1aa71d76e46159771c8e3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ecb6bdb71a6896facaef58d24afbca6a57a67249c9133799287f1901d1f8583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ecb6bdb71a6896facaef58d24afbca6a57a67249c9133799287f1901d1f8583->enter($__internal_9ecb6bdb71a6896facaef58d24afbca6a57a67249c9133799287f1901d1f8583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b1a9980e79de91b754bdd61b8e2a9c69bcdfeb6c13a244f7e57d98713fa7ff9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a9980e79de91b754bdd61b8e2a9c69bcdfeb6c13a244f7e57d98713fa7ff9d->enter($__internal_b1a9980e79de91b754bdd61b8e2a9c69bcdfeb6c13a244f7e57d98713fa7ff9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b1a9980e79de91b754bdd61b8e2a9c69bcdfeb6c13a244f7e57d98713fa7ff9d->leave($__internal_b1a9980e79de91b754bdd61b8e2a9c69bcdfeb6c13a244f7e57d98713fa7ff9d_prof);

        
        $__internal_9ecb6bdb71a6896facaef58d24afbca6a57a67249c9133799287f1901d1f8583->leave($__internal_9ecb6bdb71a6896facaef58d24afbca6a57a67249c9133799287f1901d1f8583_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
