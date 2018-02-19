<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9bf3c9e8cf535049c7c135a0a3ab24033304d8eca1ecda1f63a8235f636bb6c5 extends Twig_Template
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
        $__internal_f16e911a9b654c009a580eb4bcfead90f0820cf7d1c5f3203cced8c454ff5284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16e911a9b654c009a580eb4bcfead90f0820cf7d1c5f3203cced8c454ff5284->enter($__internal_f16e911a9b654c009a580eb4bcfead90f0820cf7d1c5f3203cced8c454ff5284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_10a7cd990bf5dffe371e5488959d08b8771cc4273f16fc3de5ffe7b2ce4c265c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a7cd990bf5dffe371e5488959d08b8771cc4273f16fc3de5ffe7b2ce4c265c->enter($__internal_10a7cd990bf5dffe371e5488959d08b8771cc4273f16fc3de5ffe7b2ce4c265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f16e911a9b654c009a580eb4bcfead90f0820cf7d1c5f3203cced8c454ff5284->leave($__internal_f16e911a9b654c009a580eb4bcfead90f0820cf7d1c5f3203cced8c454ff5284_prof);

        
        $__internal_10a7cd990bf5dffe371e5488959d08b8771cc4273f16fc3de5ffe7b2ce4c265c->leave($__internal_10a7cd990bf5dffe371e5488959d08b8771cc4273f16fc3de5ffe7b2ce4c265c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
