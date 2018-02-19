<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_972e64b8d4f4cdfde9f1cf4ad3eab1ba1b0ed0d2e3bca96f74132e96aafa2a4d extends Twig_Template
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
        $__internal_516ba240ae61a4800d8bc7ca48b307f74a1d02bd5579e542b915fc3291216b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516ba240ae61a4800d8bc7ca48b307f74a1d02bd5579e542b915fc3291216b89->enter($__internal_516ba240ae61a4800d8bc7ca48b307f74a1d02bd5579e542b915fc3291216b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_863c76fe4fe82c7cd7c336d2fa6090a603dbc90e14b4b737a8b88cb53240da23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863c76fe4fe82c7cd7c336d2fa6090a603dbc90e14b4b737a8b88cb53240da23->enter($__internal_863c76fe4fe82c7cd7c336d2fa6090a603dbc90e14b4b737a8b88cb53240da23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_516ba240ae61a4800d8bc7ca48b307f74a1d02bd5579e542b915fc3291216b89->leave($__internal_516ba240ae61a4800d8bc7ca48b307f74a1d02bd5579e542b915fc3291216b89_prof);

        
        $__internal_863c76fe4fe82c7cd7c336d2fa6090a603dbc90e14b4b737a8b88cb53240da23->leave($__internal_863c76fe4fe82c7cd7c336d2fa6090a603dbc90e14b4b737a8b88cb53240da23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
