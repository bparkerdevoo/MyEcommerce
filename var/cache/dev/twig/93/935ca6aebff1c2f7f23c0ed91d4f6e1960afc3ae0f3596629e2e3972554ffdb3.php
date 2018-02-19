<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_41a0b992b92a00f1902c186b3fae3ebd7980e75d3b68b3690524cde66ba05427 extends Twig_Template
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
        $__internal_64be81a1d6ae87d85cf77df59d741376512215438b527c3cb618af126bc33205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64be81a1d6ae87d85cf77df59d741376512215438b527c3cb618af126bc33205->enter($__internal_64be81a1d6ae87d85cf77df59d741376512215438b527c3cb618af126bc33205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_259883a73764fcaa93014deec05c2a2247d27aa50625fc468015c7635cd62569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259883a73764fcaa93014deec05c2a2247d27aa50625fc468015c7635cd62569->enter($__internal_259883a73764fcaa93014deec05c2a2247d27aa50625fc468015c7635cd62569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_64be81a1d6ae87d85cf77df59d741376512215438b527c3cb618af126bc33205->leave($__internal_64be81a1d6ae87d85cf77df59d741376512215438b527c3cb618af126bc33205_prof);

        
        $__internal_259883a73764fcaa93014deec05c2a2247d27aa50625fc468015c7635cd62569->leave($__internal_259883a73764fcaa93014deec05c2a2247d27aa50625fc468015c7635cd62569_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
