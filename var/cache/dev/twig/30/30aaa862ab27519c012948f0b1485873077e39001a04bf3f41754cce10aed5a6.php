<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b90c01ba9a2ba418544682e46f13de5f26489cc1f4c666c38baa56692a9795b8 extends Twig_Template
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
        $__internal_ed772978e919dc11a7294f6f3f42272435e02fa6f871ab3fedd6d3516e44528c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed772978e919dc11a7294f6f3f42272435e02fa6f871ab3fedd6d3516e44528c->enter($__internal_ed772978e919dc11a7294f6f3f42272435e02fa6f871ab3fedd6d3516e44528c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_f4e86101edab71cfe3ebd416e80f77aa89d08d94ef30efb14d6996f43500d79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e86101edab71cfe3ebd416e80f77aa89d08d94ef30efb14d6996f43500d79c->enter($__internal_f4e86101edab71cfe3ebd416e80f77aa89d08d94ef30efb14d6996f43500d79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ed772978e919dc11a7294f6f3f42272435e02fa6f871ab3fedd6d3516e44528c->leave($__internal_ed772978e919dc11a7294f6f3f42272435e02fa6f871ab3fedd6d3516e44528c_prof);

        
        $__internal_f4e86101edab71cfe3ebd416e80f77aa89d08d94ef30efb14d6996f43500d79c->leave($__internal_f4e86101edab71cfe3ebd416e80f77aa89d08d94ef30efb14d6996f43500d79c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
