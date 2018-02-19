<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_10831703384e0c8b7fee8fffc983c88c267f223d89e17cd643d573f1ffd3a5f8 extends Twig_Template
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
        $__internal_5c7d9db62cdc8b4ba0dac715d32b421179db7b74a64f5d59b3e87ac0904a7e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7d9db62cdc8b4ba0dac715d32b421179db7b74a64f5d59b3e87ac0904a7e30->enter($__internal_5c7d9db62cdc8b4ba0dac715d32b421179db7b74a64f5d59b3e87ac0904a7e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_99ea640c62ef05e6ee5c03343a737fc989ea91a61582eb9840e220adca1b70b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ea640c62ef05e6ee5c03343a737fc989ea91a61582eb9840e220adca1b70b3->enter($__internal_99ea640c62ef05e6ee5c03343a737fc989ea91a61582eb9840e220adca1b70b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_5c7d9db62cdc8b4ba0dac715d32b421179db7b74a64f5d59b3e87ac0904a7e30->leave($__internal_5c7d9db62cdc8b4ba0dac715d32b421179db7b74a64f5d59b3e87ac0904a7e30_prof);

        
        $__internal_99ea640c62ef05e6ee5c03343a737fc989ea91a61582eb9840e220adca1b70b3->leave($__internal_99ea640c62ef05e6ee5c03343a737fc989ea91a61582eb9840e220adca1b70b3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
