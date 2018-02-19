<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_f6f5fc233e7f3847e8c89218fcdeba97072e855b8394edf697781015bd01a061 extends Twig_Template
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
        $__internal_4404f6b7a3b34dd548f7b89b21ad3b92d247910acfefbadb29112ceb4320a3df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4404f6b7a3b34dd548f7b89b21ad3b92d247910acfefbadb29112ceb4320a3df->enter($__internal_4404f6b7a3b34dd548f7b89b21ad3b92d247910acfefbadb29112ceb4320a3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_1ac2073409c91d2b400063ad9c6c6f4693724941b58f656c8c2bc1411503dcc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac2073409c91d2b400063ad9c6c6f4693724941b58f656c8c2bc1411503dcc4->enter($__internal_1ac2073409c91d2b400063ad9c6c6f4693724941b58f656c8c2bc1411503dcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_4404f6b7a3b34dd548f7b89b21ad3b92d247910acfefbadb29112ceb4320a3df->leave($__internal_4404f6b7a3b34dd548f7b89b21ad3b92d247910acfefbadb29112ceb4320a3df_prof);

        
        $__internal_1ac2073409c91d2b400063ad9c6c6f4693724941b58f656c8c2bc1411503dcc4->leave($__internal_1ac2073409c91d2b400063ad9c6c6f4693724941b58f656c8c2bc1411503dcc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
