<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_cd767c9577abb83302213a07a9f6c4e2f0d4855e2e3692a47eb8660c43be7b95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6baf4c2dfb36026c0f23dceab5cd297ce07b48136ad4dfe2adb153df3d9a7a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6baf4c2dfb36026c0f23dceab5cd297ce07b48136ad4dfe2adb153df3d9a7a98->enter($__internal_6baf4c2dfb36026c0f23dceab5cd297ce07b48136ad4dfe2adb153df3d9a7a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $__internal_568fb0429cf88cdf65ff6c2d27a5e94bff91c2df629d3fef728f57c22a4271f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568fb0429cf88cdf65ff6c2d27a5e94bff91c2df629d3fef728f57c22a4271f7->enter($__internal_568fb0429cf88cdf65ff6c2d27a5e94bff91c2df629d3fef728f57c22a4271f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6baf4c2dfb36026c0f23dceab5cd297ce07b48136ad4dfe2adb153df3d9a7a98->leave($__internal_6baf4c2dfb36026c0f23dceab5cd297ce07b48136ad4dfe2adb153df3d9a7a98_prof);

        
        $__internal_568fb0429cf88cdf65ff6c2d27a5e94bff91c2df629d3fef728f57c22a4271f7->leave($__internal_568fb0429cf88cdf65ff6c2d27a5e94bff91c2df629d3fef728f57c22a4271f7_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_93caea958ee15b13b8daa56f848fea14da280bdec95666576a34a5c0258100be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93caea958ee15b13b8daa56f848fea14da280bdec95666576a34a5c0258100be->enter($__internal_93caea958ee15b13b8daa56f848fea14da280bdec95666576a34a5c0258100be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_150f23e719a6ffd58c15a7e84378d87d68cf08e65ee9e06ba6299025c1e51c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150f23e719a6ffd58c15a7e84378d87d68cf08e65ee9e06ba6299025c1e51c5a->enter($__internal_150f23e719a6ffd58c15a7e84378d87d68cf08e65ee9e06ba6299025c1e51c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if ((isset($context["forceStyle"]) || array_key_exists("forceStyle", $context) ? $context["forceStyle"] : (function () { throw new Twig_Error_Runtime('Variable "forceStyle" does not exist.', 15, $this->getSourceContext()); })())) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if ((isset($context["forceStyle"]) || array_key_exists("forceStyle", $context) ? $context["forceStyle"] : (function () { throw new Twig_Error_Runtime('Variable "forceStyle" does not exist.', 18, $this->getSourceContext()); })())) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "SonataBlockBundle:Block:block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_150f23e719a6ffd58c15a7e84378d87d68cf08e65ee9e06ba6299025c1e51c5a->leave($__internal_150f23e719a6ffd58c15a7e84378d87d68cf08e65ee9e06ba6299025c1e51c5a_prof);

        
        $__internal_93caea958ee15b13b8daa56f848fea14da280bdec95666576a34a5c0258100be->leave($__internal_93caea958ee15b13b8daa56f848fea14da280bdec95666576a34a5c0258100be_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  69 => 22,  64 => 20,  59 => 19,  56 => 18,  48 => 15,  39 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"cms-block-exception\" {% if forceStyle %}style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"{% endif %}>

        {# this is dirty but the alternative would require a new block-optimized exception css #}
        {% if forceStyle %}
            <link href=\"{{ asset('bundles/framework/css/exception_layout.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"{{ asset('bundles/framework/css/exception.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        {% endif %}
        {% include '@Twig/Exception/exception.html.twig' %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception_debug.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_exception_debug.html.twig");
    }
}
