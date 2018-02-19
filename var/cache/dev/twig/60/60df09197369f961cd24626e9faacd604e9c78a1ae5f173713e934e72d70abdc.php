<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6b7f6abcf4eeff3230226108321bec69698ac1a22c67ac8492eb1c48cc064eb8 extends Twig_Template
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
        $__internal_9eb74cf368159d98dc32f09e76e1544bd574ce9320944e36813611a8a5113d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb74cf368159d98dc32f09e76e1544bd574ce9320944e36813611a8a5113d39->enter($__internal_9eb74cf368159d98dc32f09e76e1544bd574ce9320944e36813611a8a5113d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d8599d9ba156c42f77abea6bbfece64d410507ac765b44c777ee6107bb40da21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8599d9ba156c42f77abea6bbfece64d410507ac765b44c777ee6107bb40da21->enter($__internal_d8599d9ba156c42f77abea6bbfece64d410507ac765b44c777ee6107bb40da21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9eb74cf368159d98dc32f09e76e1544bd574ce9320944e36813611a8a5113d39->leave($__internal_9eb74cf368159d98dc32f09e76e1544bd574ce9320944e36813611a8a5113d39_prof);

        
        $__internal_d8599d9ba156c42f77abea6bbfece64d410507ac765b44c777ee6107bb40da21->leave($__internal_d8599d9ba156c42f77abea6bbfece64d410507ac765b44c777ee6107bb40da21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
