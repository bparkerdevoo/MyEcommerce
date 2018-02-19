<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_23fbfbdcd61acc3aab5c87ddf076f27f306ecbb63f3d66c4eedb2cc7ba4d5c6f extends Twig_Template
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
        $__internal_30a839f99756fa639d594b06b47c2e3079aa8b24cd6f72dc770388ac1b67d64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a839f99756fa639d594b06b47c2e3079aa8b24cd6f72dc770388ac1b67d64b->enter($__internal_30a839f99756fa639d594b06b47c2e3079aa8b24cd6f72dc770388ac1b67d64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_7d704d6a0662caccb8d8cdcac3f0e10c975065ad705f43e2f5d148f8e2f0d101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d704d6a0662caccb8d8cdcac3f0e10c975065ad705f43e2f5d148f8e2f0d101->enter($__internal_7d704d6a0662caccb8d8cdcac3f0e10c975065ad705f43e2f5d148f8e2f0d101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_30a839f99756fa639d594b06b47c2e3079aa8b24cd6f72dc770388ac1b67d64b->leave($__internal_30a839f99756fa639d594b06b47c2e3079aa8b24cd6f72dc770388ac1b67d64b_prof);

        
        $__internal_7d704d6a0662caccb8d8cdcac3f0e10c975065ad705f43e2f5d148f8e2f0d101->leave($__internal_7d704d6a0662caccb8d8cdcac3f0e10c975065ad705f43e2f5d148f8e2f0d101_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
