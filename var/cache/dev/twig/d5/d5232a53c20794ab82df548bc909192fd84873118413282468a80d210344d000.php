<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_d4ef6ca5a7db5a5d8bd3458b7d08324efd55e17085be09672ae00704feba6ba4 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_939e45b3842dfb184569867aa5bed221777017d4c3386725ef773f48f807ad03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939e45b3842dfb184569867aa5bed221777017d4c3386725ef773f48f807ad03->enter($__internal_939e45b3842dfb184569867aa5bed221777017d4c3386725ef773f48f807ad03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $__internal_e701acb665a73d06ee2e4ec3e37f656bf8231949e3d7b2e763afe536119552c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e701acb665a73d06ee2e4ec3e37f656bf8231949e3d7b2e763afe536119552c5->enter($__internal_e701acb665a73d06ee2e4ec3e37f656bf8231949e3d7b2e763afe536119552c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_939e45b3842dfb184569867aa5bed221777017d4c3386725ef773f48f807ad03->leave($__internal_939e45b3842dfb184569867aa5bed221777017d4c3386725ef773f48f807ad03_prof);

        
        $__internal_e701acb665a73d06ee2e4ec3e37f656bf8231949e3d7b2e763afe536119552c5->leave($__internal_e701acb665a73d06ee2e4ec3e37f656bf8231949e3d7b2e763afe536119552c5_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_d8c494fa9e0f5d5e2271858a82165d1f35c8aa39877e2463d1a8558fbe4dc3d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c494fa9e0f5d5e2271858a82165d1f35c8aa39877e2463d1a8558fbe4dc3d5->enter($__internal_d8c494fa9e0f5d5e2271858a82165d1f35c8aa39877e2463d1a8558fbe4dc3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_94c22543367a1839f7c808e67d011a5ad7bd2b342922577b3423d7f586babf59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c22543367a1839f7c808e67d011a5ad7bd2b342922577b3423d7f586babf59->enter($__internal_94c22543367a1839f7c808e67d011a5ad7bd2b342922577b3423d7f586babf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: '@My/Block/my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': '@My/Block/my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_94c22543367a1839f7c808e67d011a5ad7bd2b342922577b3423d7f586babf59->leave($__internal_94c22543367a1839f7c808e67d011a5ad7bd2b342922577b3423d7f586babf59_prof);

        
        $__internal_d8c494fa9e0f5d5e2271858a82165d1f35c8aa39877e2463d1a8558fbe4dc3d5->leave($__internal_d8c494fa9e0f5d5e2271858a82165d1f35c8aa39877e2463d1a8558fbe4dc3d5_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 43,  53 => 33,  48 => 15,  39 => 14,  18 => 12,);
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
    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>
        {%- verbatim -%}
{# file: '@My/Block/my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}
        {%- endverbatim -%}
    </pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>
{%- verbatim -%}
{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': '@My/Block/my_block_feature_1.html.twig',
}) }}
{%- endverbatim -%}
    </pre>
{% endblock %}
", "SonataBlockBundle:Block:block_template.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_template.html.twig");
    }
}
