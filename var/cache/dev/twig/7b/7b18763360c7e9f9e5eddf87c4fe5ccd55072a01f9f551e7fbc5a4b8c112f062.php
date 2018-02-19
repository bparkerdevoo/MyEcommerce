<?php

/* :forms:fieldsTheme3.html.twig */
class __TwigTemplate_f156ebb3033f878cc3ef79c0f4889eabab92a24d962a44f85378c0aafb6987fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fac5430c4ee613382a82e2944abfbcee3b18f06ababe2a23869f89b1ef91aec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac5430c4ee613382a82e2944abfbcee3b18f06ababe2a23869f89b1ef91aec2->enter($__internal_fac5430c4ee613382a82e2944abfbcee3b18f06ababe2a23869f89b1ef91aec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":forms:fieldsTheme3.html.twig"));

        $__internal_e6932b7a1c1d0de94442c56bf9ee45a0378304dc9df2b2d5f6d121d623fb87fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6932b7a1c1d0de94442c56bf9ee45a0378304dc9df2b2d5f6d121d623fb87fb->enter($__internal_e6932b7a1c1d0de94442c56bf9ee45a0378304dc9df2b2d5f6d121d623fb87fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":forms:fieldsTheme3.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 13
        $this->displayBlock('textarea_widget', $context, $blocks);
        
        $__internal_fac5430c4ee613382a82e2944abfbcee3b18f06ababe2a23869f89b1ef91aec2->leave($__internal_fac5430c4ee613382a82e2944abfbcee3b18f06ababe2a23869f89b1ef91aec2_prof);

        
        $__internal_e6932b7a1c1d0de94442c56bf9ee45a0378304dc9df2b2d5f6d121d623fb87fb->leave($__internal_e6932b7a1c1d0de94442c56bf9ee45a0378304dc9df2b2d5f6d121d623fb87fb_prof);

    }

    // line 1
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3e8d527bb39a881139b12f9c4867f19452fab25c530d281ceb103667ab74601b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8d527bb39a881139b12f9c4867f19452fab25c530d281ceb103667ab74601b->enter($__internal_3e8d527bb39a881139b12f9c4867f19452fab25c530d281ceb103667ab74601b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_14e84772b25f0c934d3785da9955b9dcd2b92725c97e66f636e7c4ef6bd0e76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e84772b25f0c934d3785da9955b9dcd2b92725c97e66f636e7c4ef6bd0e76f->enter($__internal_14e84772b25f0c934d3785da9955b9dcd2b92725c97e66f636e7c4ef6bd0e76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        // line 11
        echo "
";
        
        $__internal_14e84772b25f0c934d3785da9955b9dcd2b92725c97e66f636e7c4ef6bd0e76f->leave($__internal_14e84772b25f0c934d3785da9955b9dcd2b92725c97e66f636e7c4ef6bd0e76f_prof);

        
        $__internal_3e8d527bb39a881139b12f9c4867f19452fab25c530d281ceb103667ab74601b->leave($__internal_3e8d527bb39a881139b12f9c4867f19452fab25c530d281ceb103667ab74601b_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_de45aa846515b513cb1035a079f8976881d82344f24eb26bc30e013c75d27916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de45aa846515b513cb1035a079f8976881d82344f24eb26bc30e013c75d27916->enter($__internal_de45aa846515b513cb1035a079f8976881d82344f24eb26bc30e013c75d27916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_56f18b659787344f9eb1691a9adc2c040916aa3fbbc6d468b1ffdfb4bf4d28d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f18b659787344f9eb1691a9adc2c040916aa3fbbc6d468b1ffdfb4bf4d28d6->enter($__internal_56f18b659787344f9eb1691a9adc2c040916aa3fbbc6d468b1ffdfb4bf4d28d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        echo "    ";
        ob_start();
        // line 15
        echo "
        <div class=\"form_row\">

        </div>

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 21
        echo "
";
        
        $__internal_56f18b659787344f9eb1691a9adc2c040916aa3fbbc6d468b1ffdfb4bf4d28d6->leave($__internal_56f18b659787344f9eb1691a9adc2c040916aa3fbbc6d468b1ffdfb4bf4d28d6_prof);

        
        $__internal_de45aa846515b513cb1035a079f8976881d82344f24eb26bc30e013c75d27916->leave($__internal_de45aa846515b513cb1035a079f8976881d82344f24eb26bc30e013c75d27916_prof);

    }

    public function getTemplateName()
    {
        return ":forms:fieldsTheme3.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 21,  93 => 15,  90 => 14,  81 => 13,  70 => 11,  62 => 6,  58 => 5,  54 => 4,  51 => 3,  48 => 2,  39 => 1,  29 => 13,  27 => 1,);
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

{% endblock form_row %}
{% block textarea_widget %}
    {% spaceless %}

        <div class=\"form_row\">

        </div>

    {% endspaceless %}

{% endblock textarea_widget %}", ":forms:fieldsTheme3.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/app/Resources/views/forms/fieldsTheme3.html.twig");
    }
}
