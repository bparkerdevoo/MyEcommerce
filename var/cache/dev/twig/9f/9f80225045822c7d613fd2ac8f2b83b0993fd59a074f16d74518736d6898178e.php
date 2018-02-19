<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6be7971d6d36f814868164e414f91b8eb99c4af2432a18f76b9752c182032edb extends Twig_Template
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
        $__internal_19dfe5f46170a060d8df654c9b6f2abe2b55178994386163e08ea9cfa02eb831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19dfe5f46170a060d8df654c9b6f2abe2b55178994386163e08ea9cfa02eb831->enter($__internal_19dfe5f46170a060d8df654c9b6f2abe2b55178994386163e08ea9cfa02eb831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_5747dcbee9e1c46aeaa5c20cf0a511aa8a6b043fc1b083255df36254204c6159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5747dcbee9e1c46aeaa5c20cf0a511aa8a6b043fc1b083255df36254204c6159->enter($__internal_5747dcbee9e1c46aeaa5c20cf0a511aa8a6b043fc1b083255df36254204c6159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_19dfe5f46170a060d8df654c9b6f2abe2b55178994386163e08ea9cfa02eb831->leave($__internal_19dfe5f46170a060d8df654c9b6f2abe2b55178994386163e08ea9cfa02eb831_prof);

        
        $__internal_5747dcbee9e1c46aeaa5c20cf0a511aa8a6b043fc1b083255df36254204c6159->leave($__internal_5747dcbee9e1c46aeaa5c20cf0a511aa8a6b043fc1b083255df36254204c6159_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
