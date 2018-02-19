<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d50318c150497c7104a1969ab7bb516a72c31ea98a524df433a5a03eae83d63e extends Twig_Template
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
        $__internal_19b3d503578c6a28329c3354c713c195618811c8e284a768a969f77b681a8de6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b3d503578c6a28329c3354c713c195618811c8e284a768a969f77b681a8de6->enter($__internal_19b3d503578c6a28329c3354c713c195618811c8e284a768a969f77b681a8de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2ed0d1efe722765379753e349aae8e938933dca91dec04127ffeab744de4899f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed0d1efe722765379753e349aae8e938933dca91dec04127ffeab744de4899f->enter($__internal_2ed0d1efe722765379753e349aae8e938933dca91dec04127ffeab744de4899f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_19b3d503578c6a28329c3354c713c195618811c8e284a768a969f77b681a8de6->leave($__internal_19b3d503578c6a28329c3354c713c195618811c8e284a768a969f77b681a8de6_prof);

        
        $__internal_2ed0d1efe722765379753e349aae8e938933dca91dec04127ffeab744de4899f->leave($__internal_2ed0d1efe722765379753e349aae8e938933dca91dec04127ffeab744de4899f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
