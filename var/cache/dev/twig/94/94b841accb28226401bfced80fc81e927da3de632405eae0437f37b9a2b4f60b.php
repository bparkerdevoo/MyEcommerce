<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f27fb1773be2745f56750dadde7b56e36eb7bdefcd6f499bd1bd5fb53b909c73 extends Twig_Template
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
        $__internal_a42edd99fd0084ca2e4e496357e49c6c9dcbed1dcaf5de5c3d7f93c0113a6baa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42edd99fd0084ca2e4e496357e49c6c9dcbed1dcaf5de5c3d7f93c0113a6baa->enter($__internal_a42edd99fd0084ca2e4e496357e49c6c9dcbed1dcaf5de5c3d7f93c0113a6baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_34048967179ab9394b75b281faa4f1085e1a4bd10924947d766e5e6dee48a6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34048967179ab9394b75b281faa4f1085e1a4bd10924947d766e5e6dee48a6cb->enter($__internal_34048967179ab9394b75b281faa4f1085e1a4bd10924947d766e5e6dee48a6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a42edd99fd0084ca2e4e496357e49c6c9dcbed1dcaf5de5c3d7f93c0113a6baa->leave($__internal_a42edd99fd0084ca2e4e496357e49c6c9dcbed1dcaf5de5c3d7f93c0113a6baa_prof);

        
        $__internal_34048967179ab9394b75b281faa4f1085e1a4bd10924947d766e5e6dee48a6cb->leave($__internal_34048967179ab9394b75b281faa4f1085e1a4bd10924947d766e5e6dee48a6cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
