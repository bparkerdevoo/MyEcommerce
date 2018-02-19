<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_e89fa091094e89f64fcda5d56786d7b071568d117c5449dba067ff0ac30e0cda extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac16cb45cb04e610cc9368a1023e68d1129501aab49c09ca693968ad8d2ff2ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac16cb45cb04e610cc9368a1023e68d1129501aab49c09ca693968ad8d2ff2ad->enter($__internal_ac16cb45cb04e610cc9368a1023e68d1129501aab49c09ca693968ad8d2ff2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $__internal_b579a9be6994044c4f2d58ea45d3bc57677e3f795987338339ba6eb189e284e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b579a9be6994044c4f2d58ea45d3bc57677e3f795987338339ba6eb189e284e0->enter($__internal_b579a9be6994044c4f2d58ea45d3bc57677e3f795987338339ba6eb189e284e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac16cb45cb04e610cc9368a1023e68d1129501aab49c09ca693968ad8d2ff2ad->leave($__internal_ac16cb45cb04e610cc9368a1023e68d1129501aab49c09ca693968ad8d2ff2ad_prof);

        
        $__internal_b579a9be6994044c4f2d58ea45d3bc57677e3f795987338339ba6eb189e284e0->leave($__internal_b579a9be6994044c4f2d58ea45d3bc57677e3f795987338339ba6eb189e284e0_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_614999b144fae012dc90aacfd24a86f04e8ad547890c15b6b5359a5a0bdbc0eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614999b144fae012dc90aacfd24a86f04e8ad547890c15b6b5359a5a0bdbc0eb->enter($__internal_614999b144fae012dc90aacfd24a86f04e8ad547890c15b6b5359a5a0bdbc0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_060bf485aeffd36add7b480a4d3cc2199692fa5cd00d96789d15707a0c38b3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060bf485aeffd36add7b480a4d3cc2199692fa5cd00d96789d15707a0c38b3b4->enter($__internal_060bf485aeffd36add7b480a4d3cc2199692fa5cd00d96789d15707a0c38b3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 16, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 17, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_060bf485aeffd36add7b480a4d3cc2199692fa5cd00d96789d15707a0c38b3b4->leave($__internal_060bf485aeffd36add7b480a4d3cc2199692fa5cd00d96789d15707a0c38b3b4_prof);

        
        $__internal_614999b144fae012dc90aacfd24a86f04e8ad547890c15b6b5359a5a0bdbc0eb->leave($__internal_614999b144fae012dc90aacfd24a86f04e8ad547890c15b6b5359a5a0bdbc0eb_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_exception.html.twig");
    }
}
