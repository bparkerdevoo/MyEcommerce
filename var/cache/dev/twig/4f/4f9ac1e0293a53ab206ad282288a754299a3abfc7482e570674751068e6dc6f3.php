<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2ab3e840c19bf0a468d191cdf564b20e4db91b616dcdfe1e411d8838c9b1c6fa extends Twig_Template
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
        $__internal_c18b783fc8b07be0abcee76a8f1bfb92f6add97d27429525f44acffef4b29521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18b783fc8b07be0abcee76a8f1bfb92f6add97d27429525f44acffef4b29521->enter($__internal_c18b783fc8b07be0abcee76a8f1bfb92f6add97d27429525f44acffef4b29521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_8eba26b07cf081d6cdc13f32f8d651bcaa5d5c7bed4078fc97ae6b87969b2908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eba26b07cf081d6cdc13f32f8d651bcaa5d5c7bed4078fc97ae6b87969b2908->enter($__internal_8eba26b07cf081d6cdc13f32f8d651bcaa5d5c7bed4078fc97ae6b87969b2908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c18b783fc8b07be0abcee76a8f1bfb92f6add97d27429525f44acffef4b29521->leave($__internal_c18b783fc8b07be0abcee76a8f1bfb92f6add97d27429525f44acffef4b29521_prof);

        
        $__internal_8eba26b07cf081d6cdc13f32f8d651bcaa5d5c7bed4078fc97ae6b87969b2908->leave($__internal_8eba26b07cf081d6cdc13f32f8d651bcaa5d5c7bed4078fc97ae6b87969b2908_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
