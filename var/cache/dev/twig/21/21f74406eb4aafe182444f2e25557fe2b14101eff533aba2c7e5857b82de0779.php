<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cd13e38497ec972fd4d1e87e99593192e6b801e34b6d314bb8994f536a39e7ad extends Twig_Template
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
        $__internal_7ed052c972b0ad53be14396c6ccb913f64c184e19504f02de3511b939ed59aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed052c972b0ad53be14396c6ccb913f64c184e19504f02de3511b939ed59aca->enter($__internal_7ed052c972b0ad53be14396c6ccb913f64c184e19504f02de3511b939ed59aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c1798ae9c9f0d539aa321ac93cbd1fe4f1fa9dbc6da23839a91cd7089e8395f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1798ae9c9f0d539aa321ac93cbd1fe4f1fa9dbc6da23839a91cd7089e8395f6->enter($__internal_c1798ae9c9f0d539aa321ac93cbd1fe4f1fa9dbc6da23839a91cd7089e8395f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_7ed052c972b0ad53be14396c6ccb913f64c184e19504f02de3511b939ed59aca->leave($__internal_7ed052c972b0ad53be14396c6ccb913f64c184e19504f02de3511b939ed59aca_prof);

        
        $__internal_c1798ae9c9f0d539aa321ac93cbd1fe4f1fa9dbc6da23839a91cd7089e8395f6->leave($__internal_c1798ae9c9f0d539aa321ac93cbd1fe4f1fa9dbc6da23839a91cd7089e8395f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
