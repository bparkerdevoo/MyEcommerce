<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1f8035de12c55ab8e8e5cdf8c967ae6629d264cac79bb73e1fefea1886471c41 extends Twig_Template
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
        $__internal_ed5ae0052ef408141c6386f018e667cad617f70943690563617de9127b999ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5ae0052ef408141c6386f018e667cad617f70943690563617de9127b999ce3->enter($__internal_ed5ae0052ef408141c6386f018e667cad617f70943690563617de9127b999ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a0b1199972d0e357b63ad192d733931163206dde90c7a03e806c5dd27cb320c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b1199972d0e357b63ad192d733931163206dde90c7a03e806c5dd27cb320c5->enter($__internal_a0b1199972d0e357b63ad192d733931163206dde90c7a03e806c5dd27cb320c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_ed5ae0052ef408141c6386f018e667cad617f70943690563617de9127b999ce3->leave($__internal_ed5ae0052ef408141c6386f018e667cad617f70943690563617de9127b999ce3_prof);

        
        $__internal_a0b1199972d0e357b63ad192d733931163206dde90c7a03e806c5dd27cb320c5->leave($__internal_a0b1199972d0e357b63ad192d733931163206dde90c7a03e806c5dd27cb320c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
