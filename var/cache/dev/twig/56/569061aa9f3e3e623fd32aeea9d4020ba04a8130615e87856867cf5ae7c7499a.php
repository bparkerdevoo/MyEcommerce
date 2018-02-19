<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c9d070e33cb630dee7bcee2316603dd290f1f168ba0afaa775ef6cf3a9f964a3 extends Twig_Template
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
        $__internal_f2f1fd5a0fb3be4fb13a86ddf61b2489720871a034ceb1b3e205a38117055035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f1fd5a0fb3be4fb13a86ddf61b2489720871a034ceb1b3e205a38117055035->enter($__internal_f2f1fd5a0fb3be4fb13a86ddf61b2489720871a034ceb1b3e205a38117055035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b2061f0f573ea7d2e45ad1ace94c6774e84d194874bfa65d882dfe7940172bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2061f0f573ea7d2e45ad1ace94c6774e84d194874bfa65d882dfe7940172bd1->enter($__internal_b2061f0f573ea7d2e45ad1ace94c6774e84d194874bfa65d882dfe7940172bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f2f1fd5a0fb3be4fb13a86ddf61b2489720871a034ceb1b3e205a38117055035->leave($__internal_f2f1fd5a0fb3be4fb13a86ddf61b2489720871a034ceb1b3e205a38117055035_prof);

        
        $__internal_b2061f0f573ea7d2e45ad1ace94c6774e84d194874bfa65d882dfe7940172bd1->leave($__internal_b2061f0f573ea7d2e45ad1ace94c6774e84d194874bfa65d882dfe7940172bd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
