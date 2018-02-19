<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d0e0d68cbab45b690c540833ed6492dc0dbf228d4ea0d6b99ac63bead3df0363 extends Twig_Template
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
        $__internal_c37c9ad147bfae9f08ae4e4390470ea71a1b9a79e5299c0299a7ebfa9c23e47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37c9ad147bfae9f08ae4e4390470ea71a1b9a79e5299c0299a7ebfa9c23e47f->enter($__internal_c37c9ad147bfae9f08ae4e4390470ea71a1b9a79e5299c0299a7ebfa9c23e47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_f658f08589db76a91ce161802d3552d46fed8b0080b0ab37aab604348b7d7184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f658f08589db76a91ce161802d3552d46fed8b0080b0ab37aab604348b7d7184->enter($__internal_f658f08589db76a91ce161802d3552d46fed8b0080b0ab37aab604348b7d7184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c37c9ad147bfae9f08ae4e4390470ea71a1b9a79e5299c0299a7ebfa9c23e47f->leave($__internal_c37c9ad147bfae9f08ae4e4390470ea71a1b9a79e5299c0299a7ebfa9c23e47f_prof);

        
        $__internal_f658f08589db76a91ce161802d3552d46fed8b0080b0ab37aab604348b7d7184->leave($__internal_f658f08589db76a91ce161802d3552d46fed8b0080b0ab37aab604348b7d7184_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
