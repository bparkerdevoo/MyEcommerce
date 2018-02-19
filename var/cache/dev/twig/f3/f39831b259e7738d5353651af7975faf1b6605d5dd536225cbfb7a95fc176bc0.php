<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_7c5c7ec6256eefdaccda5c7773f1991de0a354d3097e2c0e8e11cb27a6b384fe extends Twig_Template
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
        $__internal_25709289742dee7c8c90c010c2260279d850faed5c2336f209c39dd0ac75b555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25709289742dee7c8c90c010c2260279d850faed5c2336f209c39dd0ac75b555->enter($__internal_25709289742dee7c8c90c010c2260279d850faed5c2336f209c39dd0ac75b555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_cc594a014b72807b90feab7d47035106facb7702a7afbdfbf962e7587e8d8fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc594a014b72807b90feab7d47035106facb7702a7afbdfbf962e7587e8d8fc1->enter($__internal_cc594a014b72807b90feab7d47035106facb7702a7afbdfbf962e7587e8d8fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_25709289742dee7c8c90c010c2260279d850faed5c2336f209c39dd0ac75b555->leave($__internal_25709289742dee7c8c90c010c2260279d850faed5c2336f209c39dd0ac75b555_prof);

        
        $__internal_cc594a014b72807b90feab7d47035106facb7702a7afbdfbf962e7587e8d8fc1->leave($__internal_cc594a014b72807b90feab7d47035106facb7702a7afbdfbf962e7587e8d8fc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
