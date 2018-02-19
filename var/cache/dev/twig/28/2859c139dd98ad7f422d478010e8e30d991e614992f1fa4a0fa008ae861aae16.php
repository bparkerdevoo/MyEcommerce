<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_582e7b589ae083514a35ee894760957eb985a5fb47a1e998fa2f4a6f9ca4a58d extends Twig_Template
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
        $__internal_3b110318f12786166964a677d782b3c82ee657acbfbb79a85147399818fd6816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b110318f12786166964a677d782b3c82ee657acbfbb79a85147399818fd6816->enter($__internal_3b110318f12786166964a677d782b3c82ee657acbfbb79a85147399818fd6816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5d8afa1ebf79f8dbe1c9441e2c698f4ed8754fc7210e14be6d9b8fd9bea71ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8afa1ebf79f8dbe1c9441e2c698f4ed8754fc7210e14be6d9b8fd9bea71ec7->enter($__internal_5d8afa1ebf79f8dbe1c9441e2c698f4ed8754fc7210e14be6d9b8fd9bea71ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3b110318f12786166964a677d782b3c82ee657acbfbb79a85147399818fd6816->leave($__internal_3b110318f12786166964a677d782b3c82ee657acbfbb79a85147399818fd6816_prof);

        
        $__internal_5d8afa1ebf79f8dbe1c9441e2c698f4ed8754fc7210e14be6d9b8fd9bea71ec7->leave($__internal_5d8afa1ebf79f8dbe1c9441e2c698f4ed8754fc7210e14be6d9b8fd9bea71ec7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
