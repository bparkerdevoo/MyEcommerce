<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_02f31d64235de65c8cc6340bccdf4f5ae41a39c795c45f5173ca7532454b3df6 extends Twig_Template
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
        $__internal_11a3edc59de8ae399f22a74799460a84723f3224bcae91a39ae0773461bf65b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a3edc59de8ae399f22a74799460a84723f3224bcae91a39ae0773461bf65b2->enter($__internal_11a3edc59de8ae399f22a74799460a84723f3224bcae91a39ae0773461bf65b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_99fa2469e06c169616552a1b0efcbf0f28e3a68355fec15ea0421aa08837a0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fa2469e06c169616552a1b0efcbf0f28e3a68355fec15ea0421aa08837a0ac->enter($__internal_99fa2469e06c169616552a1b0efcbf0f28e3a68355fec15ea0421aa08837a0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_11a3edc59de8ae399f22a74799460a84723f3224bcae91a39ae0773461bf65b2->leave($__internal_11a3edc59de8ae399f22a74799460a84723f3224bcae91a39ae0773461bf65b2_prof);

        
        $__internal_99fa2469e06c169616552a1b0efcbf0f28e3a68355fec15ea0421aa08837a0ac->leave($__internal_99fa2469e06c169616552a1b0efcbf0f28e3a68355fec15ea0421aa08837a0ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
