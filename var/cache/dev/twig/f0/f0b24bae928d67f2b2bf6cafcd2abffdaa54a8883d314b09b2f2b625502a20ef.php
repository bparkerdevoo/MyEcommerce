<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_40aada6e4b4e89cbfe00a79560d084e6ce5ff68d062b5fe2d682983ed7db3044 extends Twig_Template
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
        $__internal_da3430e63dcbb493fb1e0dbd7ecd21ce7e948e261008fa629921c792ce38891f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3430e63dcbb493fb1e0dbd7ecd21ce7e948e261008fa629921c792ce38891f->enter($__internal_da3430e63dcbb493fb1e0dbd7ecd21ce7e948e261008fa629921c792ce38891f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_51c042da6c47399c219da1b4031d5ead0c05c1784b3c573d842ba588751c15b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c042da6c47399c219da1b4031d5ead0c05c1784b3c573d842ba588751c15b1->enter($__internal_51c042da6c47399c219da1b4031d5ead0c05c1784b3c573d842ba588751c15b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_da3430e63dcbb493fb1e0dbd7ecd21ce7e948e261008fa629921c792ce38891f->leave($__internal_da3430e63dcbb493fb1e0dbd7ecd21ce7e948e261008fa629921c792ce38891f_prof);

        
        $__internal_51c042da6c47399c219da1b4031d5ead0c05c1784b3c573d842ba588751c15b1->leave($__internal_51c042da6c47399c219da1b4031d5ead0c05c1784b3c573d842ba588751c15b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
