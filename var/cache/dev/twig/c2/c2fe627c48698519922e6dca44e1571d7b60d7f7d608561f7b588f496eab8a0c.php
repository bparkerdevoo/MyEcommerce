<?php

/* :template/forms:fieldsTheme1.html.twig */
class __TwigTemplate_a19a5807b0ad61ff8c35c733e008956c13f22468d1de3c76dc4c45d10cb73452 extends Twig_Template
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
        $__internal_7ce8f10a9bf4f312e09b2d1e45962a64dbcd30037ced2433b54c73a4b24658fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce8f10a9bf4f312e09b2d1e45962a64dbcd30037ced2433b54c73a4b24658fb->enter($__internal_7ce8f10a9bf4f312e09b2d1e45962a64dbcd30037ced2433b54c73a4b24658fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":template/forms:fieldsTheme1.html.twig"));

        $__internal_662db858399920636c882e0f228d559112ed77c7afc7f2fb0175123781d204ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662db858399920636c882e0f228d559112ed77c7afc7f2fb0175123781d204ac->enter($__internal_662db858399920636c882e0f228d559112ed77c7afc7f2fb0175123781d204ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":template/forms:fieldsTheme1.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_7ce8f10a9bf4f312e09b2d1e45962a64dbcd30037ced2433b54c73a4b24658fb->leave($__internal_7ce8f10a9bf4f312e09b2d1e45962a64dbcd30037ced2433b54c73a4b24658fb_prof);

        
        $__internal_662db858399920636c882e0f228d559112ed77c7afc7f2fb0175123781d204ac->leave($__internal_662db858399920636c882e0f228d559112ed77c7afc7f2fb0175123781d204ac_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_040e67618dce40444c1bae0ca67a068dc5e0bc266743141a692e923f95a0a29f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040e67618dce40444c1bae0ca67a068dc5e0bc266743141a692e923f95a0a29f->enter($__internal_040e67618dce40444c1bae0ca67a068dc5e0bc266743141a692e923f95a0a29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9744c4b874c0240a55cf705385fb0f0ba5b604ce67a130ae9735155081cacbaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9744c4b874c0240a55cf705385fb0f0ba5b604ce67a130ae9735155081cacbaa->enter($__internal_9744c4b874c0240a55cf705385fb0f0ba5b604ce67a130ae9735155081cacbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_9744c4b874c0240a55cf705385fb0f0ba5b604ce67a130ae9735155081cacbaa->leave($__internal_9744c4b874c0240a55cf705385fb0f0ba5b604ce67a130ae9735155081cacbaa_prof);

        
        $__internal_040e67618dce40444c1bae0ca67a068dc5e0bc266743141a692e923f95a0a29f->leave($__internal_040e67618dce40444c1bae0ca67a068dc5e0bc266743141a692e923f95a0a29f_prof);

    }

    public function getTemplateName()
    {
        return ":template/forms:fieldsTheme1.html.twig";
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

{% endblock form_row %}", ":template/forms:fieldsTheme1.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/app/Resources/views/template/forms/fieldsTheme1.html.twig");
    }
}
