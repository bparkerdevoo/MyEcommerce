<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8b395b6fd96b05be86224df84895a7d10bc6be93755241181944781be8d06585 extends Twig_Template
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
        $__internal_2b8712292eec0b605d6cbdf261a6a52bca3f69d9013fe91cc67540f728ec7c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8712292eec0b605d6cbdf261a6a52bca3f69d9013fe91cc67540f728ec7c85->enter($__internal_2b8712292eec0b605d6cbdf261a6a52bca3f69d9013fe91cc67540f728ec7c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_81fcdd42fd0c9f6131619502b2715d1537c1c797df3e21f1eb3840c6dfd1b7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81fcdd42fd0c9f6131619502b2715d1537c1c797df3e21f1eb3840c6dfd1b7d9->enter($__internal_81fcdd42fd0c9f6131619502b2715d1537c1c797df3e21f1eb3840c6dfd1b7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_2b8712292eec0b605d6cbdf261a6a52bca3f69d9013fe91cc67540f728ec7c85->leave($__internal_2b8712292eec0b605d6cbdf261a6a52bca3f69d9013fe91cc67540f728ec7c85_prof);

        
        $__internal_81fcdd42fd0c9f6131619502b2715d1537c1c797df3e21f1eb3840c6dfd1b7d9->leave($__internal_81fcdd42fd0c9f6131619502b2715d1537c1c797df3e21f1eb3840c6dfd1b7d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
