<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_32ed8b10e9b926ca16bd959009ccee64ff71e2ab731ce3401e583d8e818c9a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b955166988e49d81e7c2adb37fcf16957b2b75f9df75b1361465d781125c25aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b955166988e49d81e7c2adb37fcf16957b2b75f9df75b1361465d781125c25aa->enter($__internal_b955166988e49d81e7c2adb37fcf16957b2b75f9df75b1361465d781125c25aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_74a8235cdaca2db0c95c7480114d48a4c3eded7fbd7ebbc054759245be5ee60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a8235cdaca2db0c95c7480114d48a4c3eded7fbd7ebbc054759245be5ee60c->enter($__internal_74a8235cdaca2db0c95c7480114d48a4c3eded7fbd7ebbc054759245be5ee60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b955166988e49d81e7c2adb37fcf16957b2b75f9df75b1361465d781125c25aa->leave($__internal_b955166988e49d81e7c2adb37fcf16957b2b75f9df75b1361465d781125c25aa_prof);

        
        $__internal_74a8235cdaca2db0c95c7480114d48a4c3eded7fbd7ebbc054759245be5ee60c->leave($__internal_74a8235cdaca2db0c95c7480114d48a4c3eded7fbd7ebbc054759245be5ee60c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
