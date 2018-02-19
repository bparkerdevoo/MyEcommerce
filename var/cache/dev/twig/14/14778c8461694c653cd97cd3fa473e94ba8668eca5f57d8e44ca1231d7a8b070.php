<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c9d09b532e6908023dae2d70c5e08c96464a3c1a7e2ba7d00e7b0eee3c3f4b01 extends Twig_Template
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
        $__internal_36910a3ea0a8aa4362b4c68473d886eef8513ce985bd66047b610433f656f58f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36910a3ea0a8aa4362b4c68473d886eef8513ce985bd66047b610433f656f58f->enter($__internal_36910a3ea0a8aa4362b4c68473d886eef8513ce985bd66047b610433f656f58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f057533754222be69c5bf322442ab9a43ef8fdd45c2cd10f3775a1595a5da160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f057533754222be69c5bf322442ab9a43ef8fdd45c2cd10f3775a1595a5da160->enter($__internal_f057533754222be69c5bf322442ab9a43ef8fdd45c2cd10f3775a1595a5da160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_36910a3ea0a8aa4362b4c68473d886eef8513ce985bd66047b610433f656f58f->leave($__internal_36910a3ea0a8aa4362b4c68473d886eef8513ce985bd66047b610433f656f58f_prof);

        
        $__internal_f057533754222be69c5bf322442ab9a43ef8fdd45c2cd10f3775a1595a5da160->leave($__internal_f057533754222be69c5bf322442ab9a43ef8fdd45c2cd10f3775a1595a5da160_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
