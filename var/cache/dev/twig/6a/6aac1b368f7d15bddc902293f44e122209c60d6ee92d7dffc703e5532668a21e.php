<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_e6c2d6b1264b2a5da51ca3f5e0e4284f2a0774b6f2864124738377c314a45ff9 extends Twig_Template
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
        $__internal_6c7b6e94c9f34ae5f639fc012df8b20adf69d464fd3eed87f7a466415f98a4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7b6e94c9f34ae5f639fc012df8b20adf69d464fd3eed87f7a466415f98a4f1->enter($__internal_6c7b6e94c9f34ae5f639fc012df8b20adf69d464fd3eed87f7a466415f98a4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_2f13c8c7fe2bb7ecb942abc770228e9df84416458c1c7a39d1c9923004cec3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f13c8c7fe2bb7ecb942abc770228e9df84416458c1c7a39d1c9923004cec3db->enter($__internal_2f13c8c7fe2bb7ecb942abc770228e9df84416458c1c7a39d1c9923004cec3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_6c7b6e94c9f34ae5f639fc012df8b20adf69d464fd3eed87f7a466415f98a4f1->leave($__internal_6c7b6e94c9f34ae5f639fc012df8b20adf69d464fd3eed87f7a466415f98a4f1_prof);

        
        $__internal_2f13c8c7fe2bb7ecb942abc770228e9df84416458c1c7a39d1c9923004cec3db->leave($__internal_2f13c8c7fe2bb7ecb942abc770228e9df84416458c1c7a39d1c9923004cec3db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
