<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_727030c07f1486adcd3d37f4d57cd8b6800cef518e8a09bc9596a5c8edfc7819 extends Twig_Template
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
        $__internal_4ae6fe7710e0657f6280fb681153c8ea4c1ba64f9906401e061745d9a74d2c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae6fe7710e0657f6280fb681153c8ea4c1ba64f9906401e061745d9a74d2c88->enter($__internal_4ae6fe7710e0657f6280fb681153c8ea4c1ba64f9906401e061745d9a74d2c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_2818beb14bd244ec5844e974a215181178a53d8bb6fbeda4833e58ad10f5a663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2818beb14bd244ec5844e974a215181178a53d8bb6fbeda4833e58ad10f5a663->enter($__internal_2818beb14bd244ec5844e974a215181178a53d8bb6fbeda4833e58ad10f5a663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4ae6fe7710e0657f6280fb681153c8ea4c1ba64f9906401e061745d9a74d2c88->leave($__internal_4ae6fe7710e0657f6280fb681153c8ea4c1ba64f9906401e061745d9a74d2c88_prof);

        
        $__internal_2818beb14bd244ec5844e974a215181178a53d8bb6fbeda4833e58ad10f5a663->leave($__internal_2818beb14bd244ec5844e974a215181178a53d8bb6fbeda4833e58ad10f5a663_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
