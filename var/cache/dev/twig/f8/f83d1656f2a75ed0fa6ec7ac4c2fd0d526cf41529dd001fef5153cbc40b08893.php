<?php

/* :forms:fieldsTheme2.html.twig */
class __TwigTemplate_393edcd974ebc29c0301f422309714d67eef39cc92dfd7c94826d286964c70c1 extends Twig_Template
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
        $__internal_dbbe9d04f1ff2498b203a103924d9e73920b1943221b4e387d614d00c62b68ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbbe9d04f1ff2498b203a103924d9e73920b1943221b4e387d614d00c62b68ee->enter($__internal_dbbe9d04f1ff2498b203a103924d9e73920b1943221b4e387d614d00c62b68ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":forms:fieldsTheme2.html.twig"));

        $__internal_d94af9ef3aab1e9f12659fb33cc3b7773e915d52c486b32c950768ad93589e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94af9ef3aab1e9f12659fb33cc3b7773e915d52c486b32c950768ad93589e00->enter($__internal_d94af9ef3aab1e9f12659fb33cc3b7773e915d52c486b32c950768ad93589e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":forms:fieldsTheme2.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_dbbe9d04f1ff2498b203a103924d9e73920b1943221b4e387d614d00c62b68ee->leave($__internal_dbbe9d04f1ff2498b203a103924d9e73920b1943221b4e387d614d00c62b68ee_prof);

        
        $__internal_d94af9ef3aab1e9f12659fb33cc3b7773e915d52c486b32c950768ad93589e00->leave($__internal_d94af9ef3aab1e9f12659fb33cc3b7773e915d52c486b32c950768ad93589e00_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_96b9b663994e353dc55499d85b79de8d642a7d7ef0fa05f8913345507c17b93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b9b663994e353dc55499d85b79de8d642a7d7ef0fa05f8913345507c17b93d->enter($__internal_96b9b663994e353dc55499d85b79de8d642a7d7ef0fa05f8913345507c17b93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b4f69abe5a84db2bc24492b8cfa2b6cdc6c5a24744fe06d9c530f30ffa8f944e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f69abe5a84db2bc24492b8cfa2b6cdc6c5a24744fe06d9c530f30ffa8f944e->enter($__internal_b4f69abe5a84db2bc24492b8cfa2b6cdc6c5a24744fe06d9c530f30ffa8f944e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b4f69abe5a84db2bc24492b8cfa2b6cdc6c5a24744fe06d9c530f30ffa8f944e->leave($__internal_b4f69abe5a84db2bc24492b8cfa2b6cdc6c5a24744fe06d9c530f30ffa8f944e_prof);

        
        $__internal_96b9b663994e353dc55499d85b79de8d642a7d7ef0fa05f8913345507c17b93d->leave($__internal_96b9b663994e353dc55499d85b79de8d642a7d7ef0fa05f8913345507c17b93d_prof);

    }

    public function getTemplateName()
    {
        return ":forms:fieldsTheme2.html.twig";
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

{% endblock form_row %}", ":forms:fieldsTheme2.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/app/Resources/views/forms/fieldsTheme2.html.twig");
    }
}
