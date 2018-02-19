<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_66b0b7b1d39dfcfcb4e7297754f7a9637dc230ed892ec85a69b08a952e24759c extends Twig_Template
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
        $__internal_b72d113630f01cd784847edef9eb4b4a4c42765840d4b785258ff94cae8d91de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72d113630f01cd784847edef9eb4b4a4c42765840d4b785258ff94cae8d91de->enter($__internal_b72d113630f01cd784847edef9eb4b4a4c42765840d4b785258ff94cae8d91de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_302d43fd483df4351d6da2d5525014cf8c9886cb12e0cc591b740ff810542179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302d43fd483df4351d6da2d5525014cf8c9886cb12e0cc591b740ff810542179->enter($__internal_302d43fd483df4351d6da2d5525014cf8c9886cb12e0cc591b740ff810542179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b72d113630f01cd784847edef9eb4b4a4c42765840d4b785258ff94cae8d91de->leave($__internal_b72d113630f01cd784847edef9eb4b4a4c42765840d4b785258ff94cae8d91de_prof);

        
        $__internal_302d43fd483df4351d6da2d5525014cf8c9886cb12e0cc591b740ff810542179->leave($__internal_302d43fd483df4351d6da2d5525014cf8c9886cb12e0cc591b740ff810542179_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
