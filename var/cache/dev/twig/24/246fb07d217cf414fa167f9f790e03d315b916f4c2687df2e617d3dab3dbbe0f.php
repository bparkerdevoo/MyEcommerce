<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_42d6830da3b190f2012b216b031b7b4af80a3902f468976f06e78f69c8b0dc32 extends Twig_Template
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
        $__internal_aa46e954e54b3848dae4a595b31dbe6677dc13d35faa0b74f8149e2cd0bdd958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa46e954e54b3848dae4a595b31dbe6677dc13d35faa0b74f8149e2cd0bdd958->enter($__internal_aa46e954e54b3848dae4a595b31dbe6677dc13d35faa0b74f8149e2cd0bdd958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3e1f3daf11aace35f76a0849a49c7f71bf9a3bedd63cc4bcd3760211b7eaf032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1f3daf11aace35f76a0849a49c7f71bf9a3bedd63cc4bcd3760211b7eaf032->enter($__internal_3e1f3daf11aace35f76a0849a49c7f71bf9a3bedd63cc4bcd3760211b7eaf032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_aa46e954e54b3848dae4a595b31dbe6677dc13d35faa0b74f8149e2cd0bdd958->leave($__internal_aa46e954e54b3848dae4a595b31dbe6677dc13d35faa0b74f8149e2cd0bdd958_prof);

        
        $__internal_3e1f3daf11aace35f76a0849a49c7f71bf9a3bedd63cc4bcd3760211b7eaf032->leave($__internal_3e1f3daf11aace35f76a0849a49c7f71bf9a3bedd63cc4bcd3760211b7eaf032_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
