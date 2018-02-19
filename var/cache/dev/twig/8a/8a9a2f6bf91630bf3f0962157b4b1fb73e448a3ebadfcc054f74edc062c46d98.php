<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_0381e3338747b5d6ec78b1ace45db57e18858815f4a3feb4508e4b5a9d65ecda extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cec2fa410210478bb02aa8abe97a78d88c90c0f800ee4386b8f4de020a27458e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec2fa410210478bb02aa8abe97a78d88c90c0f800ee4386b8f4de020a27458e->enter($__internal_cec2fa410210478bb02aa8abe97a78d88c90c0f800ee4386b8f4de020a27458e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $__internal_fdb68a4c5ab4d7d2c628dea6fdc1939cd15310a5f7f9b3e7426a848050fb8bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb68a4c5ab4d7d2c628dea6fdc1939cd15310a5f7f9b3e7426a848050fb8bcd->enter($__internal_fdb68a4c5ab4d7d2c628dea6fdc1939cd15310a5f7f9b3e7426a848050fb8bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cec2fa410210478bb02aa8abe97a78d88c90c0f800ee4386b8f4de020a27458e->leave($__internal_cec2fa410210478bb02aa8abe97a78d88c90c0f800ee4386b8f4de020a27458e_prof);

        
        $__internal_fdb68a4c5ab4d7d2c628dea6fdc1939cd15310a5f7f9b3e7426a848050fb8bcd->leave($__internal_fdb68a4c5ab4d7d2c628dea6fdc1939cd15310a5f7f9b3e7426a848050fb8bcd_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_b2b7010584657592e93b123c5a791515c6b883154e226579eda0474f40854fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b7010584657592e93b123c5a791515c6b883154e226579eda0474f40854fcd->enter($__internal_b2b7010584657592e93b123c5a791515c6b883154e226579eda0474f40854fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_09d11669bdc6e7b724af81b2eaea8fda7154ded2a5ccfecaa04a755534ee7a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d11669bdc6e7b724af81b2eaea8fda7154ded2a5ccfecaa04a755534ee7a73->enter($__internal_09d11669bdc6e7b724af81b2eaea8fda7154ded2a5ccfecaa04a755534ee7a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new Twig_Error_Runtime('Variable "content" does not exist.', 15, $this->getSourceContext()); })());
        echo "
";
        
        $__internal_09d11669bdc6e7b724af81b2eaea8fda7154ded2a5ccfecaa04a755534ee7a73->leave($__internal_09d11669bdc6e7b724af81b2eaea8fda7154ded2a5ccfecaa04a755534ee7a73_prof);

        
        $__internal_b2b7010584657592e93b123c5a791515c6b883154e226579eda0474f40854fcd->leave($__internal_b2b7010584657592e93b123c5a791515c6b883154e226579eda0474f40854fcd_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_core_action.html.twig");
    }
}
