<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_9cd706c21dc7e354b1540512116aeaa5a6c03ad57b8bb5f09f33e7b34a30bd81 extends Twig_Template
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
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75bb934fbd4c822af74d2ba81d4d533c27be1a3a511c0723f6d801c83a5667f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75bb934fbd4c822af74d2ba81d4d533c27be1a3a511c0723f6d801c83a5667f2->enter($__internal_75bb934fbd4c822af74d2ba81d4d533c27be1a3a511c0723f6d801c83a5667f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $__internal_811076a1c80d8b3ba694a7d8d454727b7a850eb57b74b88094f64d39b382bee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811076a1c80d8b3ba694a7d8d454727b7a850eb57b74b88094f64d39b382bee2->enter($__internal_811076a1c80d8b3ba694a7d8d454727b7a850eb57b74b88094f64d39b382bee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75bb934fbd4c822af74d2ba81d4d533c27be1a3a511c0723f6d801c83a5667f2->leave($__internal_75bb934fbd4c822af74d2ba81d4d533c27be1a3a511c0723f6d801c83a5667f2_prof);

        
        $__internal_811076a1c80d8b3ba694a7d8d454727b7a850eb57b74b88094f64d39b382bee2->leave($__internal_811076a1c80d8b3ba694a7d8d454727b7a850eb57b74b88094f64d39b382bee2_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_18814c9b2a5a22326b034dda13297a5e0ece21823d8589a00659ad63b4be9008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18814c9b2a5a22326b034dda13297a5e0ece21823d8589a00659ad63b4be9008->enter($__internal_18814c9b2a5a22326b034dda13297a5e0ece21823d8589a00659ad63b4be9008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_24f383d8bac9ee3c07db396216f85a38c2b5cd33cc6ac1480a35f8e8e27885b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f383d8bac9ee3c07db396216f85a38c2b5cd33cc6ac1480a35f8e8e27885b3->enter($__internal_24f383d8bac9ee3c07db396216f85a38c2b5cd33cc6ac1480a35f8e8e27885b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["menu_options"]) || array_key_exists("menu_options", $context) ? $context["menu_options"] : (function () { throw new Twig_Error_Runtime('Variable "menu_options" does not exist.', 15, $this->getSourceContext()); })()));
        echo "
";
        
        $__internal_24f383d8bac9ee3c07db396216f85a38c2b5cd33cc6ac1480a35f8e8e27885b3->leave($__internal_24f383d8bac9ee3c07db396216f85a38c2b5cd33cc6ac1480a35f8e8e27885b3_prof);

        
        $__internal_18814c9b2a5a22326b034dda13297a5e0ece21823d8589a00659ad63b4be9008->leave($__internal_18814c9b2a5a22326b034dda13297a5e0ece21823d8589a00659ad63b4be9008_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_core_menu.html.twig");
    }
}
