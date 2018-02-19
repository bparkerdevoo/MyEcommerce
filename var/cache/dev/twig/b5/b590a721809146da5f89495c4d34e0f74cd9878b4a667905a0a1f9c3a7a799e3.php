<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_4a7057593e5ce733ae9f1a9cfc0008af0851c6265911d09811cbc7750387dbaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7de14129ec134898710e8ad8ee52e6f7cf6030b7bc9011be35c7a21876bef1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de14129ec134898710e8ad8ee52e6f7cf6030b7bc9011be35c7a21876bef1bc->enter($__internal_7de14129ec134898710e8ad8ee52e6f7cf6030b7bc9011be35c7a21876bef1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_b4a8bda2558db646571f2cf4ea5eebb55af16d239a9772bc20408e0346e61680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a8bda2558db646571f2cf4ea5eebb55af16d239a9772bc20408e0346e61680->enter($__internal_b4a8bda2558db646571f2cf4ea5eebb55af16d239a9772bc20408e0346e61680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["block"]) || array_key_exists("block", $context) ? $context["block"] : (function () { throw new Twig_Error_Runtime('Variable "block" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_7de14129ec134898710e8ad8ee52e6f7cf6030b7bc9011be35c7a21876bef1bc->leave($__internal_7de14129ec134898710e8ad8ee52e6f7cf6030b7bc9011be35c7a21876bef1bc_prof);

        
        $__internal_b4a8bda2558db646571f2cf4ea5eebb55af16d239a9772bc20408e0346e61680->leave($__internal_b4a8bda2558db646571f2cf4ea5eebb55af16d239a9772bc20408e0346e61680_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_b2bde11d0925c0e5749f3b40424b2479d12d8a2b81317f34e68f6bcefd0c207d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2bde11d0925c0e5749f3b40424b2479d12d8a2b81317f34e68f6bcefd0c207d->enter($__internal_b2bde11d0925c0e5749f3b40424b2479d12d8a2b81317f34e68f6bcefd0c207d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_8179fd38758479daeb1166acecfb1984f6fa853d4f9a0877d22b638c3c5a3451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8179fd38758479daeb1166acecfb1984f6fa853d4f9a0877d22b638c3c5a3451->enter($__internal_8179fd38758479daeb1166acecfb1984f6fa853d4f9a0877d22b638c3c5a3451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_8179fd38758479daeb1166acecfb1984f6fa853d4f9a0877d22b638c3c5a3451->leave($__internal_8179fd38758479daeb1166acecfb1984f6fa853d4f9a0877d22b638c3c5a3451_prof);

        
        $__internal_b2bde11d0925c0e5749f3b40424b2479d12d8a2b81317f34e68f6bcefd0c207d->leave($__internal_b2bde11d0925c0e5749f3b40424b2479d12d8a2b81317f34e68f6bcefd0c207d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_base.html.twig");
    }
}
