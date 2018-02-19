<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5bf73ed911640937ee219a439c92509e2506812fb87c5daaa442d8b1e59f6a31 extends Twig_Template
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
        $__internal_56725504ae4d97a4fc5222d008c270df8d26eb366a424d6af08e706cfedf15c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56725504ae4d97a4fc5222d008c270df8d26eb366a424d6af08e706cfedf15c7->enter($__internal_56725504ae4d97a4fc5222d008c270df8d26eb366a424d6af08e706cfedf15c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f3937efc5e3a01cc0d1f972bbb1972a6e733e0d49c28e69df4b3ef1c45efff0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3937efc5e3a01cc0d1f972bbb1972a6e733e0d49c28e69df4b3ef1c45efff0d->enter($__internal_f3937efc5e3a01cc0d1f972bbb1972a6e733e0d49c28e69df4b3ef1c45efff0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_56725504ae4d97a4fc5222d008c270df8d26eb366a424d6af08e706cfedf15c7->leave($__internal_56725504ae4d97a4fc5222d008c270df8d26eb366a424d6af08e706cfedf15c7_prof);

        
        $__internal_f3937efc5e3a01cc0d1f972bbb1972a6e733e0d49c28e69df4b3ef1c45efff0d->leave($__internal_f3937efc5e3a01cc0d1f972bbb1972a6e733e0d49c28e69df4b3ef1c45efff0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
