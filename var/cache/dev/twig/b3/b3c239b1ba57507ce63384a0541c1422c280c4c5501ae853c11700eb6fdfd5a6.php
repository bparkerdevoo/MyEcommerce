<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_979d365f70f3676fddc71bc9383f90ae104e07436f9ff5e6461e67c30f3d3dfc extends Twig_Template
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
        $__internal_761d76fb3260f0a8cc03d8c8496c58cd37d040499d58bc6a477ca8d5711234e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761d76fb3260f0a8cc03d8c8496c58cd37d040499d58bc6a477ca8d5711234e2->enter($__internal_761d76fb3260f0a8cc03d8c8496c58cd37d040499d58bc6a477ca8d5711234e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_689eb8b10caa060af2138cd562fdf2b2ee5bb1aebb28f25720f82c8a8d2adfd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_689eb8b10caa060af2138cd562fdf2b2ee5bb1aebb28f25720f82c8a8d2adfd7->enter($__internal_689eb8b10caa060af2138cd562fdf2b2ee5bb1aebb28f25720f82c8a8d2adfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_761d76fb3260f0a8cc03d8c8496c58cd37d040499d58bc6a477ca8d5711234e2->leave($__internal_761d76fb3260f0a8cc03d8c8496c58cd37d040499d58bc6a477ca8d5711234e2_prof);

        
        $__internal_689eb8b10caa060af2138cd562fdf2b2ee5bb1aebb28f25720f82c8a8d2adfd7->leave($__internal_689eb8b10caa060af2138cd562fdf2b2ee5bb1aebb28f25720f82c8a8d2adfd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
