<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_732018c3b16f60cd6f8afa3e1153f03fe2d8a4dcdd5fb4479dfa659c3e397635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94d3c23bd85d6041dc68410f9b236842388b6169e6c4d21db3dfe8c27984f36d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d3c23bd85d6041dc68410f9b236842388b6169e6c4d21db3dfe8c27984f36d->enter($__internal_94d3c23bd85d6041dc68410f9b236842388b6169e6c4d21db3dfe8c27984f36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $__internal_f1ec9e2dc3f11f198d1307740b0fce0df6aa3ba56a877339771ab086b6cc01da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ec9e2dc3f11f198d1307740b0fce0df6aa3ba56a877339771ab086b6cc01da->enter($__internal_f1ec9e2dc3f11f198d1307740b0fce0df6aa3ba56a877339771ab086b6cc01da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94d3c23bd85d6041dc68410f9b236842388b6169e6c4d21db3dfe8c27984f36d->leave($__internal_94d3c23bd85d6041dc68410f9b236842388b6169e6c4d21db3dfe8c27984f36d_prof);

        
        $__internal_f1ec9e2dc3f11f198d1307740b0fce0df6aa3ba56a877339771ab086b6cc01da->leave($__internal_f1ec9e2dc3f11f198d1307740b0fce0df6aa3ba56a877339771ab086b6cc01da_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_6f6e8b1bc7f1a64cf697a05c953ab629e93ea60a67cbe249600386a650befcd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f6e8b1bc7f1a64cf697a05c953ab629e93ea60a67cbe249600386a650befcd0->enter($__internal_6f6e8b1bc7f1a64cf697a05c953ab629e93ea60a67cbe249600386a650befcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_7f6ea65ea209681728151c6531a07bf045dff653a710cd83db3cbee3923ab6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6ea65ea209681728151c6531a07bf045dff653a710cd83db3cbee3923ab6d3->enter($__internal_7f6ea65ea209681728151c6531a07bf045dff653a710cd83db3cbee3923ab6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 15, $this->getSourceContext()); })()), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "class", array()), "html", null, true);
        }
        
        $__internal_7f6ea65ea209681728151c6531a07bf045dff653a710cd83db3cbee3923ab6d3->leave($__internal_7f6ea65ea209681728151c6531a07bf045dff653a710cd83db3cbee3923ab6d3_prof);

        
        $__internal_6f6e8b1bc7f1a64cf697a05c953ab629e93ea60a67cbe249600386a650befcd0->leave($__internal_6f6e8b1bc7f1a64cf697a05c953ab629e93ea60a67cbe249600386a650befcd0_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_37201d8447cd1d0cde88f5bed43fc33e15e14c6b21dc935735770dd61380dded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37201d8447cd1d0cde88f5bed43fc33e15e14c6b21dc935735770dd61380dded->enter($__internal_37201d8447cd1d0cde88f5bed43fc33e15e14c6b21dc935735770dd61380dded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_b41af9942f29abe5f9d1abf87c564da604e2cf3ccfb85b40cbb8f6d4b2f662c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41af9942f29abe5f9d1abf87c564da604e2cf3ccfb85b40cbb8f6d4b2f662c9->enter($__internal_b41af9942f29abe5f9d1abf87c564da604e2cf3ccfb85b40cbb8f6d4b2f662c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_b41af9942f29abe5f9d1abf87c564da604e2cf3ccfb85b40cbb8f6d4b2f662c9->leave($__internal_b41af9942f29abe5f9d1abf87c564da604e2cf3ccfb85b40cbb8f6d4b2f662c9_prof);

        
        $__internal_37201d8447cd1d0cde88f5bed43fc33e15e14c6b21dc935735770dd61380dded->leave($__internal_37201d8447cd1d0cde88f5bed43fc33e15e14c6b21dc935735770dd61380dded_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_827d6768f7fbd49baf2d38dbddfe8b84b15f5949768fadd7ad287e87026c5c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827d6768f7fbd49baf2d38dbddfe8b84b15f5949768fadd7ad287e87026c5c3c->enter($__internal_827d6768f7fbd49baf2d38dbddfe8b84b15f5949768fadd7ad287e87026c5c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_6574d90d708f3e586004ca8f784ff71de1223498173bb179d14af8fd955b40ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6574d90d708f3e586004ca8f784ff71de1223498173bb179d14af8fd955b40ec->enter($__internal_6574d90d708f3e586004ca8f784ff71de1223498173bb179d14af8fd955b40ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 22, $this->getSourceContext()); })())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 22, $this->getSourceContext()); })()), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 23, $this->getSourceContext()); })()), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 28, $this->getSourceContext()); })())) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["decorator"]) || array_key_exists("decorator", $context) ? $context["decorator"] : (function () { throw new Twig_Error_Runtime('Variable "decorator" does not exist.', 28, $this->getSourceContext()); })()), "post", array());
        }
        
        $__internal_6574d90d708f3e586004ca8f784ff71de1223498173bb179d14af8fd955b40ec->leave($__internal_6574d90d708f3e586004ca8f784ff71de1223498173bb179d14af8fd955b40ec_prof);

        
        $__internal_827d6768f7fbd49baf2d38dbddfe8b84b15f5949768fadd7ad287e87026c5c3c->leave($__internal_827d6768f7fbd49baf2d38dbddfe8b84b15f5949768fadd7ad287e87026c5c3c_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_03026c34e5faa55a41f6582a00246cd36db88617d5a57e3011178ac5462a457b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03026c34e5faa55a41f6582a00246cd36db88617d5a57e3011178ac5462a457b->enter($__internal_03026c34e5faa55a41f6582a00246cd36db88617d5a57e3011178ac5462a457b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_ad04b5e46a6a7e3c147a35dc2f0c1bf39124cff9252161f74fad5a1d6ea90dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad04b5e46a6a7e3c147a35dc2f0c1bf39124cff9252161f74fad5a1d6ea90dd4->enter($__internal_ad04b5e46a6a7e3c147a35dc2f0c1bf39124cff9252161f74fad5a1d6ea90dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new Twig_Error_Runtime('Variable "child" does not exist.', 25, $this->getSourceContext()); })())));
        echo "
        ";
        
        $__internal_ad04b5e46a6a7e3c147a35dc2f0c1bf39124cff9252161f74fad5a1d6ea90dd4->leave($__internal_ad04b5e46a6a7e3c147a35dc2f0c1bf39124cff9252161f74fad5a1d6ea90dd4_prof);

        
        $__internal_03026c34e5faa55a41f6582a00246cd36db88617d5a57e3011178ac5462a457b->leave($__internal_03026c34e5faa55a41f6582a00246cd36db88617d5a57e3011178ac5462a457b_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 25,  147 => 24,  134 => 28,  120 => 27,  117 => 24,  99 => 23,  94 => 22,  85 => 21,  67 => 18,  42 => 15,  21 => 12,);
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

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_container.html.twig");
    }
}
