<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_f0cef566119f984a8254278d63afcba9ba26b3431e034e827d7995543381f54f extends Twig_Template
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
        $__internal_922ab1c96cd5d226ea1f80e881531772ee56f69fb9e104887ca545f38723d8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_922ab1c96cd5d226ea1f80e881531772ee56f69fb9e104887ca545f38723d8d5->enter($__internal_922ab1c96cd5d226ea1f80e881531772ee56f69fb9e104887ca545f38723d8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_5dccfd5ed41671287f69f371ee603fe6360e43accf65dd76b7c809601a0affcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dccfd5ed41671287f69f371ee603fe6360e43accf65dd76b7c809601a0affcc->enter($__internal_5dccfd5ed41671287f69f371ee603fe6360e43accf65dd76b7c809601a0affcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_922ab1c96cd5d226ea1f80e881531772ee56f69fb9e104887ca545f38723d8d5->leave($__internal_922ab1c96cd5d226ea1f80e881531772ee56f69fb9e104887ca545f38723d8d5_prof);

        
        $__internal_5dccfd5ed41671287f69f371ee603fe6360e43accf65dd76b7c809601a0affcc->leave($__internal_5dccfd5ed41671287f69f371ee603fe6360e43accf65dd76b7c809601a0affcc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
