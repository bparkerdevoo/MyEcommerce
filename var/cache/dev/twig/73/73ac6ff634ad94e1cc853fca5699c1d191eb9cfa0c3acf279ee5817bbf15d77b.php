<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b75ec10d69144fd3948e0cf2277f10ce052c4477a6259935006a5ece16460b63 extends Twig_Template
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
        $__internal_983e3e232e4851b53c9771bdee4688d391a0720bcef68a5b58df85b8ba59c71d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_983e3e232e4851b53c9771bdee4688d391a0720bcef68a5b58df85b8ba59c71d->enter($__internal_983e3e232e4851b53c9771bdee4688d391a0720bcef68a5b58df85b8ba59c71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7c5c422d52620d4eea9e2f47a23249859810417e1cd5b3d9e6ff784159db5c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5c422d52620d4eea9e2f47a23249859810417e1cd5b3d9e6ff784159db5c85->enter($__internal_7c5c422d52620d4eea9e2f47a23249859810417e1cd5b3d9e6ff784159db5c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_983e3e232e4851b53c9771bdee4688d391a0720bcef68a5b58df85b8ba59c71d->leave($__internal_983e3e232e4851b53c9771bdee4688d391a0720bcef68a5b58df85b8ba59c71d_prof);

        
        $__internal_7c5c422d52620d4eea9e2f47a23249859810417e1cd5b3d9e6ff784159db5c85->leave($__internal_7c5c422d52620d4eea9e2f47a23249859810417e1cd5b3d9e6ff784159db5c85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
