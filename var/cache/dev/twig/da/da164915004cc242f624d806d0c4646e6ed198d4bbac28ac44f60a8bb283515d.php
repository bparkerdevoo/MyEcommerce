<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e1e8cdf970d7cb9d09a4d633e4937488b62cfd1dc13af335f49928f8dd4cd6a7 extends Twig_Template
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
        $__internal_00736467358b26706079effd819fbccc0922f5796476c48bbd8d90bcf1d01be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00736467358b26706079effd819fbccc0922f5796476c48bbd8d90bcf1d01be7->enter($__internal_00736467358b26706079effd819fbccc0922f5796476c48bbd8d90bcf1d01be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_04112fdc2aae9cdc668b0798d558ad2acc233ab5d2f6682db40da44a6e13c769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04112fdc2aae9cdc668b0798d558ad2acc233ab5d2f6682db40da44a6e13c769->enter($__internal_04112fdc2aae9cdc668b0798d558ad2acc233ab5d2f6682db40da44a6e13c769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_00736467358b26706079effd819fbccc0922f5796476c48bbd8d90bcf1d01be7->leave($__internal_00736467358b26706079effd819fbccc0922f5796476c48bbd8d90bcf1d01be7_prof);

        
        $__internal_04112fdc2aae9cdc668b0798d558ad2acc233ab5d2f6682db40da44a6e13c769->leave($__internal_04112fdc2aae9cdc668b0798d558ad2acc233ab5d2f6682db40da44a6e13c769_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
