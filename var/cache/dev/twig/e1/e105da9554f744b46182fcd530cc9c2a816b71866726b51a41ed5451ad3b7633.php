<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_1fc5fcd14752ac6fd227d47404112cad55b6a37e25d36cab1b8d9b1d804972a5 extends Twig_Template
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
        $__internal_12b78689309a62e9ef86d708cdc47e190c6088fa0c852d46ba8514ebefdc9181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b78689309a62e9ef86d708cdc47e190c6088fa0c852d46ba8514ebefdc9181->enter($__internal_12b78689309a62e9ef86d708cdc47e190c6088fa0c852d46ba8514ebefdc9181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_94e0c11ba6def933cb1005cc5e218b7a835a522ea6d0bb119b687ff5eae7bd95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94e0c11ba6def933cb1005cc5e218b7a835a522ea6d0bb119b687ff5eae7bd95->enter($__internal_94e0c11ba6def933cb1005cc5e218b7a835a522ea6d0bb119b687ff5eae7bd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_12b78689309a62e9ef86d708cdc47e190c6088fa0c852d46ba8514ebefdc9181->leave($__internal_12b78689309a62e9ef86d708cdc47e190c6088fa0c852d46ba8514ebefdc9181_prof);

        
        $__internal_94e0c11ba6def933cb1005cc5e218b7a835a522ea6d0bb119b687ff5eae7bd95->leave($__internal_94e0c11ba6def933cb1005cc5e218b7a835a522ea6d0bb119b687ff5eae7bd95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
