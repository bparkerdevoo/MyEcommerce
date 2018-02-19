<?php

/* SonataCoreBundle:Form:color.html.twig */
class __TwigTemplate_6114c5819c77ceb5368d66aab2234b4f591b7679c8849b85ccebd04d08c9d4c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_widget' => array($this, 'block_sonata_type_color_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74a3ed781697a78bbf627a08ac012ee5c458da8af145b23bef35bcb266c2a800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a3ed781697a78bbf627a08ac012ee5c458da8af145b23bef35bcb266c2a800->enter($__internal_74a3ed781697a78bbf627a08ac012ee5c458da8af145b23bef35bcb266c2a800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:color.html.twig"));

        $__internal_490a77aaef0a055b9a7f79425241cac331ffa652a4da7800dfedef3b00610e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490a77aaef0a055b9a7f79425241cac331ffa652a4da7800dfedef3b00610e3e->enter($__internal_490a77aaef0a055b9a7f79425241cac331ffa652a4da7800dfedef3b00610e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:color.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_widget', $context, $blocks);
        
        $__internal_74a3ed781697a78bbf627a08ac012ee5c458da8af145b23bef35bcb266c2a800->leave($__internal_74a3ed781697a78bbf627a08ac012ee5c458da8af145b23bef35bcb266c2a800_prof);

        
        $__internal_490a77aaef0a055b9a7f79425241cac331ffa652a4da7800dfedef3b00610e3e->leave($__internal_490a77aaef0a055b9a7f79425241cac331ffa652a4da7800dfedef3b00610e3e_prof);

    }

    public function block_sonata_type_color_widget($context, array $blocks = array())
    {
        $__internal_dda764f18c08de9005f01120e314ec8c1392bdc49dad5d38b5e45d0d357323a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda764f18c08de9005f01120e314ec8c1392bdc49dad5d38b5e45d0d357323a3->enter($__internal_dda764f18c08de9005f01120e314ec8c1392bdc49dad5d38b5e45d0d357323a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_widget"));

        $__internal_75f49acc8acdb8f2256f9ca68951e5c0ecc91222adf1e7f5018fec7a67d2d7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f49acc8acdb8f2256f9ca68951e5c0ecc91222adf1e7f5018fec7a67d2d7bb->enter($__internal_75f49acc8acdb8f2256f9ca68951e5c0ecc91222adf1e7f5018fec7a67d2d7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_widget"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <input type=\"color\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_75f49acc8acdb8f2256f9ca68951e5c0ecc91222adf1e7f5018fec7a67d2d7bb->leave($__internal_75f49acc8acdb8f2256f9ca68951e5c0ecc91222adf1e7f5018fec7a67d2d7bb_prof);

        
        $__internal_dda764f18c08de9005f01120e314ec8c1392bdc49dad5d38b5e45d0d357323a3->leave($__internal_dda764f18c08de9005f01120e314ec8c1392bdc49dad5d38b5e45d0d357323a3_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:color.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  44 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_color_widget %}
    {% spaceless %}
        <input type=\"color\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
    {% endspaceless %}
{% endblock sonata_type_color_widget %}
", "SonataCoreBundle:Form:color.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/core-bundle/src/Resources/views/Form/color.html.twig");
    }
}
