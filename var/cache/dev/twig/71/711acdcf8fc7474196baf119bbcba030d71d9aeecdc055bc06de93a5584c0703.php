<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_06b1e810ecbbeea83b9ae419afd1f42bb84e0b06d07db990228f962b6faabd52 extends Twig_Template
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
        $__internal_454d7fcc0fcf4e7a17e5ed9176d407929ef2694fca301c94ec9355ced1afc28d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454d7fcc0fcf4e7a17e5ed9176d407929ef2694fca301c94ec9355ced1afc28d->enter($__internal_454d7fcc0fcf4e7a17e5ed9176d407929ef2694fca301c94ec9355ced1afc28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_34532de5110865065b1816d2a99abb1a1e02d143166e9d4c7596f72706fdcec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34532de5110865065b1816d2a99abb1a1e02d143166e9d4c7596f72706fdcec3->enter($__internal_34532de5110865065b1816d2a99abb1a1e02d143166e9d4c7596f72706fdcec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_454d7fcc0fcf4e7a17e5ed9176d407929ef2694fca301c94ec9355ced1afc28d->leave($__internal_454d7fcc0fcf4e7a17e5ed9176d407929ef2694fca301c94ec9355ced1afc28d_prof);

        
        $__internal_34532de5110865065b1816d2a99abb1a1e02d143166e9d4c7596f72706fdcec3->leave($__internal_34532de5110865065b1816d2a99abb1a1e02d143166e9d4c7596f72706fdcec3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
