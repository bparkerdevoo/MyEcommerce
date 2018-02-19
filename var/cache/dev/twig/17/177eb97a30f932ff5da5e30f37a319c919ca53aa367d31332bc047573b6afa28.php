<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cbf2c153875628b78933280051fa94bf4ea3fcabb6ee555ed0c325112d15a971 extends Twig_Template
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
        $__internal_af6d7189e4c2f16d5d82a5c195fd21a026dae02b6e94f4810d7cca09643f7f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6d7189e4c2f16d5d82a5c195fd21a026dae02b6e94f4810d7cca09643f7f9c->enter($__internal_af6d7189e4c2f16d5d82a5c195fd21a026dae02b6e94f4810d7cca09643f7f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a1007658ef12ba496c0ec6be74bff802a7030e462256f1b2f2529c8ada671442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1007658ef12ba496c0ec6be74bff802a7030e462256f1b2f2529c8ada671442->enter($__internal_a1007658ef12ba496c0ec6be74bff802a7030e462256f1b2f2529c8ada671442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_af6d7189e4c2f16d5d82a5c195fd21a026dae02b6e94f4810d7cca09643f7f9c->leave($__internal_af6d7189e4c2f16d5d82a5c195fd21a026dae02b6e94f4810d7cca09643f7f9c_prof);

        
        $__internal_a1007658ef12ba496c0ec6be74bff802a7030e462256f1b2f2529c8ada671442->leave($__internal_a1007658ef12ba496c0ec6be74bff802a7030e462256f1b2f2529c8ada671442_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
