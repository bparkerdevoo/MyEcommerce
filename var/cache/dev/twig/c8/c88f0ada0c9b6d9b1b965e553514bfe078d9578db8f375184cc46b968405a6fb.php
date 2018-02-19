<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_9fb56e3e9e7aab26fd7278174eb9e44100d1fe994d9fd7587556a607a84aee0d extends Twig_Template
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
        $__internal_7c9ea3cb1f4c9fa4aecc5828b1cd789bc2aecdfaaf27ff2de850c0aeb48570fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9ea3cb1f4c9fa4aecc5828b1cd789bc2aecdfaaf27ff2de850c0aeb48570fa->enter($__internal_7c9ea3cb1f4c9fa4aecc5828b1cd789bc2aecdfaaf27ff2de850c0aeb48570fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_fb7fb578ec066996d664c8d510d81d7c1d8086971bf7974a69f39e820712b361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7fb578ec066996d664c8d510d81d7c1d8086971bf7974a69f39e820712b361->enter($__internal_fb7fb578ec066996d664c8d510d81d7c1d8086971bf7974a69f39e820712b361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7c9ea3cb1f4c9fa4aecc5828b1cd789bc2aecdfaaf27ff2de850c0aeb48570fa->leave($__internal_7c9ea3cb1f4c9fa4aecc5828b1cd789bc2aecdfaaf27ff2de850c0aeb48570fa_prof);

        
        $__internal_fb7fb578ec066996d664c8d510d81d7c1d8086971bf7974a69f39e820712b361->leave($__internal_fb7fb578ec066996d664c8d510d81d7c1d8086971bf7974a69f39e820712b361_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
