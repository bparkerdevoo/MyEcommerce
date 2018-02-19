<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_3856c5b123d1d096612d5db725583c2be10dca3619681d701341cebc264609c5 extends Twig_Template
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
        $__internal_5d69531899215a8eeb13ce9c49a0cd08f8ed35c04361878f3b03900625944ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d69531899215a8eeb13ce9c49a0cd08f8ed35c04361878f3b03900625944ef9->enter($__internal_5d69531899215a8eeb13ce9c49a0cd08f8ed35c04361878f3b03900625944ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_5c07da36f129e1ce7d122fa40241b19e7e85d61b06f61c5f30bc613715c72de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c07da36f129e1ce7d122fa40241b19e7e85d61b06f61c5f30bc613715c72de2->enter($__internal_5c07da36f129e1ce7d122fa40241b19e7e85d61b06f61c5f30bc613715c72de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5d69531899215a8eeb13ce9c49a0cd08f8ed35c04361878f3b03900625944ef9->leave($__internal_5d69531899215a8eeb13ce9c49a0cd08f8ed35c04361878f3b03900625944ef9_prof);

        
        $__internal_5c07da36f129e1ce7d122fa40241b19e7e85d61b06f61c5f30bc613715c72de2->leave($__internal_5c07da36f129e1ce7d122fa40241b19e7e85d61b06f61c5f30bc613715c72de2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
