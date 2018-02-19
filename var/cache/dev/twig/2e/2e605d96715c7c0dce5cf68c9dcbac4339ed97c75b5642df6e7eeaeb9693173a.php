<?php

/* :forms:fieldsTheme1.html.twig */
class __TwigTemplate_c64ee9260cebc763801170cad1fa40a7db75d909b8bfa881313d99957b0b167c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_954736e69d7ac12018777763ecdaa7a34c8265ca3b3a38e2cb6309c7090b5dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954736e69d7ac12018777763ecdaa7a34c8265ca3b3a38e2cb6309c7090b5dda->enter($__internal_954736e69d7ac12018777763ecdaa7a34c8265ca3b3a38e2cb6309c7090b5dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":forms:fieldsTheme1.html.twig"));

        $__internal_55b885badb64865a8949a715bd3025d49943b7788ee21d1b1b57549d545a0ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b885badb64865a8949a715bd3025d49943b7788ee21d1b1b57549d545a0ed4->enter($__internal_55b885badb64865a8949a715bd3025d49943b7788ee21d1b1b57549d545a0ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":forms:fieldsTheme1.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_954736e69d7ac12018777763ecdaa7a34c8265ca3b3a38e2cb6309c7090b5dda->leave($__internal_954736e69d7ac12018777763ecdaa7a34c8265ca3b3a38e2cb6309c7090b5dda_prof);

        
        $__internal_55b885badb64865a8949a715bd3025d49943b7788ee21d1b1b57549d545a0ed4->leave($__internal_55b885badb64865a8949a715bd3025d49943b7788ee21d1b1b57549d545a0ed4_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1b6830fa2c55b15de3f6ee8b13e62457225d706e9300367c4600f8daacba00e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6830fa2c55b15de3f6ee8b13e62457225d706e9300367c4600f8daacba00e7->enter($__internal_1b6830fa2c55b15de3f6ee8b13e62457225d706e9300367c4600f8daacba00e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a35aac4b64853e64d9ddadc6c399d29cb78c2b8a32c061d44681af063c16ff1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35aac4b64853e64d9ddadc6c399d29cb78c2b8a32c061d44681af063c16ff1b->enter($__internal_a35aac4b64853e64d9ddadc6c399d29cb78c2b8a32c061d44681af063c16ff1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div class=\"form_row\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'label');
        echo "
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'errors');
        echo "
            ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 10
        echo "
";
        
        $__internal_a35aac4b64853e64d9ddadc6c399d29cb78c2b8a32c061d44681af063c16ff1b->leave($__internal_a35aac4b64853e64d9ddadc6c399d29cb78c2b8a32c061d44681af063c16ff1b_prof);

        
        $__internal_1b6830fa2c55b15de3f6ee8b13e62457225d706e9300367c4600f8daacba00e7->leave($__internal_1b6830fa2c55b15de3f6ee8b13e62457225d706e9300367c4600f8daacba00e7_prof);

    }

    public function getTemplateName()
    {
        return ":forms:fieldsTheme1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  58 => 6,  54 => 5,  50 => 4,  47 => 3,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form_row %}
    {% spaceless %}
        <div class=\"form_row\">
            {{ form_label(form) }}
            {{ form_errors(form) }}
            {{ form_widget(form) }}
        </div>

    {% endspaceless %}

{% endblock form_row %}", ":forms:fieldsTheme1.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/app/Resources/views/forms/fieldsTheme1.html.twig");
    }
}
