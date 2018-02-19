<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_1f4804a1eab27ce4a5e0cb446a38832ee0966736a91a75929f7729a5f7c0a976 extends Twig_Template
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
        $__internal_cda06efb4f09945241a79c8f219b36f7fb247730c82ebeeda0eb2faa450fb311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda06efb4f09945241a79c8f219b36f7fb247730c82ebeeda0eb2faa450fb311->enter($__internal_cda06efb4f09945241a79c8f219b36f7fb247730c82ebeeda0eb2faa450fb311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_503eb24641a34c55e814b62419fe2c5bd00a8cddb32317f089238a91eb20fa59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503eb24641a34c55e814b62419fe2c5bd00a8cddb32317f089238a91eb20fa59->enter($__internal_503eb24641a34c55e814b62419fe2c5bd00a8cddb32317f089238a91eb20fa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_cda06efb4f09945241a79c8f219b36f7fb247730c82ebeeda0eb2faa450fb311->leave($__internal_cda06efb4f09945241a79c8f219b36f7fb247730c82ebeeda0eb2faa450fb311_prof);

        
        $__internal_503eb24641a34c55e814b62419fe2c5bd00a8cddb32317f089238a91eb20fa59->leave($__internal_503eb24641a34c55e814b62419fe2c5bd00a8cddb32317f089238a91eb20fa59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
