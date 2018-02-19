<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_b9686b0f8e9ed6dabd56a733fe2ea0ab2a701038b261bce9fdb162ca073ebead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dea607fa33bf56588c3178d35b0967e6e1d9a79de57f8ae67025b7f2a9fad9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea607fa33bf56588c3178d35b0967e6e1d9a79de57f8ae67025b7f2a9fad9cc->enter($__internal_dea607fa33bf56588c3178d35b0967e6e1d9a79de57f8ae67025b7f2a9fad9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_2f2a89bf700b90b41bbfd6d26527ed91ee77a9670c6828d9cea4223ca822d276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2a89bf700b90b41bbfd6d26527ed91ee77a9670c6828d9cea4223ca822d276->enter($__internal_2f2a89bf700b90b41bbfd6d26527ed91ee77a9670c6828d9cea4223ca822d276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_dea607fa33bf56588c3178d35b0967e6e1d9a79de57f8ae67025b7f2a9fad9cc->leave($__internal_dea607fa33bf56588c3178d35b0967e6e1d9a79de57f8ae67025b7f2a9fad9cc_prof);

        
        $__internal_2f2a89bf700b90b41bbfd6d26527ed91ee77a9670c6828d9cea4223ca822d276->leave($__internal_2f2a89bf700b90b41bbfd6d26527ed91ee77a9670c6828d9cea4223ca822d276_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
