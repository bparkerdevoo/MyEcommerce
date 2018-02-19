<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_dc3e3e47ca843aa0b4e6a5dabd2724a5e917a24dde8614d725ca5707c7da21c8 extends Twig_Template
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
        $__internal_cafd27210342f074a1fad611a6a38df87bff3c539cf83beff429abfc1fd4388e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cafd27210342f074a1fad611a6a38df87bff3c539cf83beff429abfc1fd4388e->enter($__internal_cafd27210342f074a1fad611a6a38df87bff3c539cf83beff429abfc1fd4388e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3d3a5e2f0de5e63fa17bf1d3c75b8143a13cab6b84348922a571b27ae767e8ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3a5e2f0de5e63fa17bf1d3c75b8143a13cab6b84348922a571b27ae767e8ca->enter($__internal_3d3a5e2f0de5e63fa17bf1d3c75b8143a13cab6b84348922a571b27ae767e8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cafd27210342f074a1fad611a6a38df87bff3c539cf83beff429abfc1fd4388e->leave($__internal_cafd27210342f074a1fad611a6a38df87bff3c539cf83beff429abfc1fd4388e_prof);

        
        $__internal_3d3a5e2f0de5e63fa17bf1d3c75b8143a13cab6b84348922a571b27ae767e8ca->leave($__internal_3d3a5e2f0de5e63fa17bf1d3c75b8143a13cab6b84348922a571b27ae767e8ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
