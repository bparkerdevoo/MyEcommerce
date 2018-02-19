<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f1c0f98df7290ab5cab21b64643756698d2fe8962931a727e6df72f158d4b848 extends Twig_Template
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
        $__internal_76348ba53077d5b31063190a87f942818fc12d11dbb6f3713c13b4889fe32e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76348ba53077d5b31063190a87f942818fc12d11dbb6f3713c13b4889fe32e2a->enter($__internal_76348ba53077d5b31063190a87f942818fc12d11dbb6f3713c13b4889fe32e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b0bea912192339337ea8ee5675948abd367c62b3db0ab2606d74dc2aac274229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bea912192339337ea8ee5675948abd367c62b3db0ab2606d74dc2aac274229->enter($__internal_b0bea912192339337ea8ee5675948abd367c62b3db0ab2606d74dc2aac274229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_76348ba53077d5b31063190a87f942818fc12d11dbb6f3713c13b4889fe32e2a->leave($__internal_76348ba53077d5b31063190a87f942818fc12d11dbb6f3713c13b4889fe32e2a_prof);

        
        $__internal_b0bea912192339337ea8ee5675948abd367c62b3db0ab2606d74dc2aac274229->leave($__internal_b0bea912192339337ea8ee5675948abd367c62b3db0ab2606d74dc2aac274229_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
