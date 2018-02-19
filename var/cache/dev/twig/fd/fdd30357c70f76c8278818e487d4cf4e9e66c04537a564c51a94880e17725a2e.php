<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_05149912c9bdb56962a412ed307b2c060ffa50cb4a3381fc12981e5e6987ebad extends Twig_Template
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
        $__internal_5b6d5349a31161fc19f266d83778a2e6f9a9e47f95c7ec4841c6bc3c2a79f694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6d5349a31161fc19f266d83778a2e6f9a9e47f95c7ec4841c6bc3c2a79f694->enter($__internal_5b6d5349a31161fc19f266d83778a2e6f9a9e47f95c7ec4841c6bc3c2a79f694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ef3f9bddfa7bf99e2e7947d0f84f9a153a94d602419faa46a8f7cc1353492ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3f9bddfa7bf99e2e7947d0f84f9a153a94d602419faa46a8f7cc1353492ba3->enter($__internal_ef3f9bddfa7bf99e2e7947d0f84f9a153a94d602419faa46a8f7cc1353492ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5b6d5349a31161fc19f266d83778a2e6f9a9e47f95c7ec4841c6bc3c2a79f694->leave($__internal_5b6d5349a31161fc19f266d83778a2e6f9a9e47f95c7ec4841c6bc3c2a79f694_prof);

        
        $__internal_ef3f9bddfa7bf99e2e7947d0f84f9a153a94d602419faa46a8f7cc1353492ba3->leave($__internal_ef3f9bddfa7bf99e2e7947d0f84f9a153a94d602419faa46a8f7cc1353492ba3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
