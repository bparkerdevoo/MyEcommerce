<?php

/* :template/forms:fieldsTheme2.html.twig */
class __TwigTemplate_866eab2bf600f9f7757c735ee99411189519b847bf37f0be4daba2089748db16 extends Twig_Template
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
        $__internal_9594cebdff33c13201908a0a85aa2553c37a7782c2eb6faafc0ba6dd9e33e40c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9594cebdff33c13201908a0a85aa2553c37a7782c2eb6faafc0ba6dd9e33e40c->enter($__internal_9594cebdff33c13201908a0a85aa2553c37a7782c2eb6faafc0ba6dd9e33e40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":template/forms:fieldsTheme2.html.twig"));

        $__internal_91aad8167c8ed73d035391af7a8821942bbe76237de04989b5d4d9f1450e3e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91aad8167c8ed73d035391af7a8821942bbe76237de04989b5d4d9f1450e3e29->enter($__internal_91aad8167c8ed73d035391af7a8821942bbe76237de04989b5d4d9f1450e3e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":template/forms:fieldsTheme2.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_9594cebdff33c13201908a0a85aa2553c37a7782c2eb6faafc0ba6dd9e33e40c->leave($__internal_9594cebdff33c13201908a0a85aa2553c37a7782c2eb6faafc0ba6dd9e33e40c_prof);

        
        $__internal_91aad8167c8ed73d035391af7a8821942bbe76237de04989b5d4d9f1450e3e29->leave($__internal_91aad8167c8ed73d035391af7a8821942bbe76237de04989b5d4d9f1450e3e29_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c69da7d88805f1c476243d7e070cfc615b3b6f5e0a6c3743406e9e07f1c7b889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c69da7d88805f1c476243d7e070cfc615b3b6f5e0a6c3743406e9e07f1c7b889->enter($__internal_c69da7d88805f1c476243d7e070cfc615b3b6f5e0a6c3743406e9e07f1c7b889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ccaed88fe03a93f5f1a4d37372ef1c4a885e5c053cee01dc7eb1e9364ac9ea8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccaed88fe03a93f5f1a4d37372ef1c4a885e5c053cee01dc7eb1e9364ac9ea8b->enter($__internal_ccaed88fe03a93f5f1a4d37372ef1c4a885e5c053cee01dc7eb1e9364ac9ea8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_ccaed88fe03a93f5f1a4d37372ef1c4a885e5c053cee01dc7eb1e9364ac9ea8b->leave($__internal_ccaed88fe03a93f5f1a4d37372ef1c4a885e5c053cee01dc7eb1e9364ac9ea8b_prof);

        
        $__internal_c69da7d88805f1c476243d7e070cfc615b3b6f5e0a6c3743406e9e07f1c7b889->leave($__internal_c69da7d88805f1c476243d7e070cfc615b3b6f5e0a6c3743406e9e07f1c7b889_prof);

    }

    public function getTemplateName()
    {
        return ":template/forms:fieldsTheme2.html.twig";
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

{% endblock form_row %}", ":template/forms:fieldsTheme2.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/app/Resources/views/template/forms/fieldsTheme2.html.twig");
    }
}
