<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_69eb119b3c3d15c8c439ee8006afd85f4e48d84b5b88c96fdb7745c7369e45da extends Twig_Template
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
        $__internal_d46d82554cd8c86b6dd7da2f90044f0ad51ad0bcbeafd015ece37dde91a40a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46d82554cd8c86b6dd7da2f90044f0ad51ad0bcbeafd015ece37dde91a40a0f->enter($__internal_d46d82554cd8c86b6dd7da2f90044f0ad51ad0bcbeafd015ece37dde91a40a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d9e37bfb020d723c05223cd35405295f641d1978ecbeeba9145d19c6212c8a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e37bfb020d723c05223cd35405295f641d1978ecbeeba9145d19c6212c8a15->enter($__internal_d9e37bfb020d723c05223cd35405295f641d1978ecbeeba9145d19c6212c8a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d46d82554cd8c86b6dd7da2f90044f0ad51ad0bcbeafd015ece37dde91a40a0f->leave($__internal_d46d82554cd8c86b6dd7da2f90044f0ad51ad0bcbeafd015ece37dde91a40a0f_prof);

        
        $__internal_d9e37bfb020d723c05223cd35405295f641d1978ecbeeba9145d19c6212c8a15->leave($__internal_d9e37bfb020d723c05223cd35405295f641d1978ecbeeba9145d19c6212c8a15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
