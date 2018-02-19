<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4f3e3c9e84ad1dc8230364b5cca643ac33f5615f61922e134e3a7d44d4ee1a04 extends Twig_Template
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
        $__internal_40db3a1184110704d97e3c34a18fbb7a8b08f70b9bfbf02a84b5feae1d39bb44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40db3a1184110704d97e3c34a18fbb7a8b08f70b9bfbf02a84b5feae1d39bb44->enter($__internal_40db3a1184110704d97e3c34a18fbb7a8b08f70b9bfbf02a84b5feae1d39bb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_50f666ff47d077f95a73109e01f59f0131b2c3e184175ba5132587b2cfff6e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f666ff47d077f95a73109e01f59f0131b2c3e184175ba5132587b2cfff6e91->enter($__internal_50f666ff47d077f95a73109e01f59f0131b2c3e184175ba5132587b2cfff6e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_40db3a1184110704d97e3c34a18fbb7a8b08f70b9bfbf02a84b5feae1d39bb44->leave($__internal_40db3a1184110704d97e3c34a18fbb7a8b08f70b9bfbf02a84b5feae1d39bb44_prof);

        
        $__internal_50f666ff47d077f95a73109e01f59f0131b2c3e184175ba5132587b2cfff6e91->leave($__internal_50f666ff47d077f95a73109e01f59f0131b2c3e184175ba5132587b2cfff6e91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
