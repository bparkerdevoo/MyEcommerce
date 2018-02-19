<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_fc54fae52e16293927322e29fbb02078315b77ac596d7ee5f5913e2c7868cb39 extends Twig_Template
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
        $__internal_70fb7271df3d6e2e8075e18395f06cc1d38967055e838c7d8914a680b58ca9c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70fb7271df3d6e2e8075e18395f06cc1d38967055e838c7d8914a680b58ca9c1->enter($__internal_70fb7271df3d6e2e8075e18395f06cc1d38967055e838c7d8914a680b58ca9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a23c0d2a56817ddfe1a34edc42712ae3a55b4493f3077448f2e02089d4c13aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23c0d2a56817ddfe1a34edc42712ae3a55b4493f3077448f2e02089d4c13aa2->enter($__internal_a23c0d2a56817ddfe1a34edc42712ae3a55b4493f3077448f2e02089d4c13aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_70fb7271df3d6e2e8075e18395f06cc1d38967055e838c7d8914a680b58ca9c1->leave($__internal_70fb7271df3d6e2e8075e18395f06cc1d38967055e838c7d8914a680b58ca9c1_prof);

        
        $__internal_a23c0d2a56817ddfe1a34edc42712ae3a55b4493f3077448f2e02089d4c13aa2->leave($__internal_a23c0d2a56817ddfe1a34edc42712ae3a55b4493f3077448f2e02089d4c13aa2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
