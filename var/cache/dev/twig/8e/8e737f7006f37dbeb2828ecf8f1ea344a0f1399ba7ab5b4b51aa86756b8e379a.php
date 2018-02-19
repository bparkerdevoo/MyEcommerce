<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_06ba500ea5be6bc94889718c2d763d84ca48625cc0f57527b4abb100f2477fe6 extends Twig_Template
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
        $__internal_4f1ac1eef45cabebc0759703541f3d99afb68eca2979a7a26c0f82d02eee306d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f1ac1eef45cabebc0759703541f3d99afb68eca2979a7a26c0f82d02eee306d->enter($__internal_4f1ac1eef45cabebc0759703541f3d99afb68eca2979a7a26c0f82d02eee306d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ac8b43e52ade2673cc836c8fad802b1b5dc75942ae5dc6e4ded9655fbcde3ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8b43e52ade2673cc836c8fad802b1b5dc75942ae5dc6e4ded9655fbcde3ee2->enter($__internal_ac8b43e52ade2673cc836c8fad802b1b5dc75942ae5dc6e4ded9655fbcde3ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4f1ac1eef45cabebc0759703541f3d99afb68eca2979a7a26c0f82d02eee306d->leave($__internal_4f1ac1eef45cabebc0759703541f3d99afb68eca2979a7a26c0f82d02eee306d_prof);

        
        $__internal_ac8b43e52ade2673cc836c8fad802b1b5dc75942ae5dc6e4ded9655fbcde3ee2->leave($__internal_ac8b43e52ade2673cc836c8fad802b1b5dc75942ae5dc6e4ded9655fbcde3ee2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
