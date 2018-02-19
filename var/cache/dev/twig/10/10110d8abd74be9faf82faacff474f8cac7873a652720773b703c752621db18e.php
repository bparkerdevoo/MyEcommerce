<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_bb8bad7c2063fc64de54b3515feac2e005988e76b2e2a0158fb06af2c099919b extends Twig_Template
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
        $__internal_3beec660286a3ef4a07dbd37517b9315bf85024c4a19fc2c764217a8bbbf76de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3beec660286a3ef4a07dbd37517b9315bf85024c4a19fc2c764217a8bbbf76de->enter($__internal_3beec660286a3ef4a07dbd37517b9315bf85024c4a19fc2c764217a8bbbf76de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e4d9ea92bc40549c17f5189eeed96fcb7e3ae39ee620ba8a9cd74a18504d1b21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d9ea92bc40549c17f5189eeed96fcb7e3ae39ee620ba8a9cd74a18504d1b21->enter($__internal_e4d9ea92bc40549c17f5189eeed96fcb7e3ae39ee620ba8a9cd74a18504d1b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3beec660286a3ef4a07dbd37517b9315bf85024c4a19fc2c764217a8bbbf76de->leave($__internal_3beec660286a3ef4a07dbd37517b9315bf85024c4a19fc2c764217a8bbbf76de_prof);

        
        $__internal_e4d9ea92bc40549c17f5189eeed96fcb7e3ae39ee620ba8a9cd74a18504d1b21->leave($__internal_e4d9ea92bc40549c17f5189eeed96fcb7e3ae39ee620ba8a9cd74a18504d1b21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
