<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f8f28aac4c3b993e30dad54172a50775538449c0df197409831e5c71cd1c054a extends Twig_Template
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
        $__internal_09728ce1718beba7679815bcd1a432a0411987e2b44cfe2369c2c6b66c734e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09728ce1718beba7679815bcd1a432a0411987e2b44cfe2369c2c6b66c734e09->enter($__internal_09728ce1718beba7679815bcd1a432a0411987e2b44cfe2369c2c6b66c734e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_cef95f875a4c8c9886d5e07621d86bf538990888b00ddbae732b0b6e2141f60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef95f875a4c8c9886d5e07621d86bf538990888b00ddbae732b0b6e2141f60c->enter($__internal_cef95f875a4c8c9886d5e07621d86bf538990888b00ddbae732b0b6e2141f60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_09728ce1718beba7679815bcd1a432a0411987e2b44cfe2369c2c6b66c734e09->leave($__internal_09728ce1718beba7679815bcd1a432a0411987e2b44cfe2369c2c6b66c734e09_prof);

        
        $__internal_cef95f875a4c8c9886d5e07621d86bf538990888b00ddbae732b0b6e2141f60c->leave($__internal_cef95f875a4c8c9886d5e07621d86bf538990888b00ddbae732b0b6e2141f60c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
