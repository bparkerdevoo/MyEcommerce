<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_7197401de631728f366ce56087bb770a631e77e7755398d15db465a23860bcc1 extends Twig_Template
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
        $__internal_e4439e479c3d1b40ddb9ebdc593428307f782138190e58ae815a494843847974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4439e479c3d1b40ddb9ebdc593428307f782138190e58ae815a494843847974->enter($__internal_e4439e479c3d1b40ddb9ebdc593428307f782138190e58ae815a494843847974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_352fded0a4197cde57e1effab11e063fee9f9a40eff80657c7af196d5fcb0ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352fded0a4197cde57e1effab11e063fee9f9a40eff80657c7af196d5fcb0ba8->enter($__internal_352fded0a4197cde57e1effab11e063fee9f9a40eff80657c7af196d5fcb0ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e4439e479c3d1b40ddb9ebdc593428307f782138190e58ae815a494843847974->leave($__internal_e4439e479c3d1b40ddb9ebdc593428307f782138190e58ae815a494843847974_prof);

        
        $__internal_352fded0a4197cde57e1effab11e063fee9f9a40eff80657c7af196d5fcb0ba8->leave($__internal_352fded0a4197cde57e1effab11e063fee9f9a40eff80657c7af196d5fcb0ba8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
