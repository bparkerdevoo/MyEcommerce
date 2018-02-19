<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f03eb576b039dfad0a0c2ab8a942689d69438fc16231d367d2d8aef713de9718 extends Twig_Template
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
        $__internal_1a1c702c22a50043e0544b8b45e0156ebaec2b85004758b6a5a6920bfe4d7ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1c702c22a50043e0544b8b45e0156ebaec2b85004758b6a5a6920bfe4d7ce2->enter($__internal_1a1c702c22a50043e0544b8b45e0156ebaec2b85004758b6a5a6920bfe4d7ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e7a0f6a3e7f5e72f9ff1f2d10c2cc45ac7fb48849a66d5d4d43c948e3c6721b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a0f6a3e7f5e72f9ff1f2d10c2cc45ac7fb48849a66d5d4d43c948e3c6721b6->enter($__internal_e7a0f6a3e7f5e72f9ff1f2d10c2cc45ac7fb48849a66d5d4d43c948e3c6721b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1a1c702c22a50043e0544b8b45e0156ebaec2b85004758b6a5a6920bfe4d7ce2->leave($__internal_1a1c702c22a50043e0544b8b45e0156ebaec2b85004758b6a5a6920bfe4d7ce2_prof);

        
        $__internal_e7a0f6a3e7f5e72f9ff1f2d10c2cc45ac7fb48849a66d5d4d43c948e3c6721b6->leave($__internal_e7a0f6a3e7f5e72f9ff1f2d10c2cc45ac7fb48849a66d5d4d43c948e3c6721b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
