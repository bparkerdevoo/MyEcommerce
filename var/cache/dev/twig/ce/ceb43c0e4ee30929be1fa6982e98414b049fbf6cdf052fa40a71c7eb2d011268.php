<?php

/* SonataAdminBundle:CRUD:base_array_macro.html.twig */
class __TwigTemplate_0b489ee98719dab06e6ffe770de38b2f251f1e29a6e019e8e25b78945e1db57b extends Twig_Template
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
        $__internal_c0095362902c4e46979c1bba692daabfec668c5a456d71517be04e5f081ff02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0095362902c4e46979c1bba692daabfec668c5a456d71517be04e5f081ff02d->enter($__internal_c0095362902c4e46979c1bba692daabfec668c5a456d71517be04e5f081ff02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_array_macro.html.twig"));

        $__internal_9c724a12646abeffb69e0715a46ec2ac7014643dc251313d134d3b3583137d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c724a12646abeffb69e0715a46ec2ac7014643dc251313d134d3b3583137d8d->enter($__internal_9c724a12646abeffb69e0715a46ec2ac7014643dc251313d134d3b3583137d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_array_macro.html.twig"));

        
        $__internal_c0095362902c4e46979c1bba692daabfec668c5a456d71517be04e5f081ff02d->leave($__internal_c0095362902c4e46979c1bba692daabfec668c5a456d71517be04e5f081ff02d_prof);

        
        $__internal_9c724a12646abeffb69e0715a46ec2ac7014643dc251313d134d3b3583137d8d->leave($__internal_9c724a12646abeffb69e0715a46ec2ac7014643dc251313d134d3b3583137d8d_prof);

    }

    // line 11
    public function macro_render_array($__value__ = null, $__inline__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "inline" => $__inline__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f5f24194be75df205b9c33f166b669cba5610c3d42f1365d33d568883ef4eabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f5f24194be75df205b9c33f166b669cba5610c3d42f1365d33d568883ef4eabc->enter($__internal_f5f24194be75df205b9c33f166b669cba5610c3d42f1365d33d568883ef4eabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_7f73551487f6feef3788e8af364ebcf69d7c3e2a07997271784d78f36aed1d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7f73551487f6feef3788e8af364ebcf69d7c3e2a07997271784d78f36aed1d96->enter($__internal_7f73551487f6feef3788e8af364ebcf69d7c3e2a07997271784d78f36aed1d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 12
            echo "    ";
            $context["__internal_9dc4e5e85c8442a14d4ea00d8f892a64ba22c73f39b2d8c2e9bebf78912810ca"] = $this;
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 14
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 15
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $context["__internal_9dc4e5e85c8442a14d4ea00d8f892a64ba22c73f39b2d8c2e9bebf78912810ca"]->macro_render_array($context["val"], (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 15, $this->getSourceContext()); })()));
                    echo "]
        ";
                } else {
                    // line 17
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 19
                echo "
        ";
                // line 20
                if (( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()) &&  !(isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new Twig_Error_Runtime('Variable "inline" does not exist.', 20, $this->getSourceContext()); })()))) {
                    // line 21
                    echo "            <br>
        ";
                }
                // line 23
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_7f73551487f6feef3788e8af364ebcf69d7c3e2a07997271784d78f36aed1d96->leave($__internal_7f73551487f6feef3788e8af364ebcf69d7c3e2a07997271784d78f36aed1d96_prof);

            
            $__internal_f5f24194be75df205b9c33f166b669cba5610c3d42f1365d33d568883ef4eabc->leave($__internal_f5f24194be75df205b9c33f166b669cba5610c3d42f1365d33d568883ef4eabc_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_array_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  97 => 21,  95 => 20,  92 => 19,  84 => 17,  76 => 15,  73 => 14,  55 => 13,  52 => 12,  33 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% macro render_array(value, inline) %}
    {% from _self import render_array %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ render_array(val, inline) }}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}

        {% if not loop.last and not inline %}
            <br>
        {% endif %}
    {% endfor %}
{% endmacro %}
", "SonataAdminBundle:CRUD:base_array_macro.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_array_macro.html.twig");
    }
}
