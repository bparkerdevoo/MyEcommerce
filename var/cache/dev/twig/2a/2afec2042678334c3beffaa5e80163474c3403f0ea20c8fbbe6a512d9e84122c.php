<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_5fb01a7bec87f24c0e536d6957ceac5cded84e77fe8547e2cdc10b9df7bd4e18 extends Twig_Template
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
        $__internal_eda263e509276436b2721e1d6f83360ff52f5e5f64da0ce3f2f1329b19a4181f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda263e509276436b2721e1d6f83360ff52f5e5f64da0ce3f2f1329b19a4181f->enter($__internal_eda263e509276436b2721e1d6f83360ff52f5e5f64da0ce3f2f1329b19a4181f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_046ce896b54e12c08990196b6eec30618c5c7f4720532184fca6c78274804acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046ce896b54e12c08990196b6eec30618c5c7f4720532184fca6c78274804acd->enter($__internal_046ce896b54e12c08990196b6eec30618c5c7f4720532184fca6c78274804acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_eda263e509276436b2721e1d6f83360ff52f5e5f64da0ce3f2f1329b19a4181f->leave($__internal_eda263e509276436b2721e1d6f83360ff52f5e5f64da0ce3f2f1329b19a4181f_prof);

        
        $__internal_046ce896b54e12c08990196b6eec30618c5c7f4720532184fca6c78274804acd->leave($__internal_046ce896b54e12c08990196b6eec30618c5c7f4720532184fca6c78274804acd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/color_widget.html.php");
    }
}
