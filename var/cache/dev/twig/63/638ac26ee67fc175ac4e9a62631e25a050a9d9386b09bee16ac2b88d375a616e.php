<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_aee2d2d40f04eb16ed1d300505233c933b38cb6ad34e62d3485fa41eb7570865 extends Twig_Template
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
        $__internal_44ed812b85120cceaa15ecf43a7e71360ec3ef3dff19d56fd1af542d5f67c440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ed812b85120cceaa15ecf43a7e71360ec3ef3dff19d56fd1af542d5f67c440->enter($__internal_44ed812b85120cceaa15ecf43a7e71360ec3ef3dff19d56fd1af542d5f67c440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_efb46cdea5f415956073be6821f123963c3a67ee98ad591e08d248dff122fb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb46cdea5f415956073be6821f123963c3a67ee98ad591e08d248dff122fb79->enter($__internal_efb46cdea5f415956073be6821f123963c3a67ee98ad591e08d248dff122fb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_44ed812b85120cceaa15ecf43a7e71360ec3ef3dff19d56fd1af542d5f67c440->leave($__internal_44ed812b85120cceaa15ecf43a7e71360ec3ef3dff19d56fd1af542d5f67c440_prof);

        
        $__internal_efb46cdea5f415956073be6821f123963c3a67ee98ad591e08d248dff122fb79->leave($__internal_efb46cdea5f415956073be6821f123963c3a67ee98ad591e08d248dff122fb79_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
