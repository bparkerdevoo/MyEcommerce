<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_d9eb7d81a7ec4b671439183c05882dfb389a71e0ddb554d15bdd3a74886977d5 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4f73f37e0dc73dad008b5dc17b9bbd14cb295f7f3dd2b11ec3b9c343834473d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f73f37e0dc73dad008b5dc17b9bbd14cb295f7f3dd2b11ec3b9c343834473d->enter($__internal_f4f73f37e0dc73dad008b5dc17b9bbd14cb295f7f3dd2b11ec3b9c343834473d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $__internal_188030987fda013f4f39d234610aa205f0238fa7bf42cdc200f42bd3db0ee159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188030987fda013f4f39d234610aa205f0238fa7bf42cdc200f42bd3db0ee159->enter($__internal_188030987fda013f4f39d234610aa205f0238fa7bf42cdc200f42bd3db0ee159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4f73f37e0dc73dad008b5dc17b9bbd14cb295f7f3dd2b11ec3b9c343834473d->leave($__internal_f4f73f37e0dc73dad008b5dc17b9bbd14cb295f7f3dd2b11ec3b9c343834473d_prof);

        
        $__internal_188030987fda013f4f39d234610aa205f0238fa7bf42cdc200f42bd3db0ee159->leave($__internal_188030987fda013f4f39d234610aa205f0238fa7bf42cdc200f42bd3db0ee159_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_91921e42c46a6f9fc1d9a6fbf6a01d440591dd0aed5a32bc8ef53bee4bc52cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91921e42c46a6f9fc1d9a6fbf6a01d440591dd0aed5a32bc8ef53bee4bc52cab->enter($__internal_91921e42c46a6f9fc1d9a6fbf6a01d440591dd0aed5a32bc8ef53bee4bc52cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_eb256e740bd24b153eb037fe0d8fa91c6bb38cfbc54ddd6f7245e9a0beb40959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb256e740bd24b153eb037fe0d8fa91c6bb38cfbc54ddd6f7245e9a0beb40959->enter($__internal_eb256e740bd24b153eb037fe0d8fa91c6bb38cfbc54ddd6f7245e9a0beb40959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "content", array());
        echo "
";
        
        $__internal_eb256e740bd24b153eb037fe0d8fa91c6bb38cfbc54ddd6f7245e9a0beb40959->leave($__internal_eb256e740bd24b153eb037fe0d8fa91c6bb38cfbc54ddd6f7245e9a0beb40959_prof);

        
        $__internal_91921e42c46a6f9fc1d9a6fbf6a01d440591dd0aed5a32bc8ef53bee4bc52cab->leave($__internal_91921e42c46a6f9fc1d9a6fbf6a01d440591dd0aed5a32bc8ef53bee4bc52cab_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_core_text.html.twig");
    }
}
