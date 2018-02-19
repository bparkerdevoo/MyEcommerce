<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3ff7c6ac9ae7a4f8d15b8eeb6ba32ea3727441096730ead1c3a673b03c1eaac3 extends Twig_Template
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
        $__internal_e1af6d60855b90c45f3e51cd9d565dddeb9d90f990ccbb717d9e56d5f52bd016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1af6d60855b90c45f3e51cd9d565dddeb9d90f990ccbb717d9e56d5f52bd016->enter($__internal_e1af6d60855b90c45f3e51cd9d565dddeb9d90f990ccbb717d9e56d5f52bd016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_1480fc2018b6deea7d8cf95c0bdbe97c390093c136f309f9e38b78ec2a47da2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1480fc2018b6deea7d8cf95c0bdbe97c390093c136f309f9e38b78ec2a47da2f->enter($__internal_1480fc2018b6deea7d8cf95c0bdbe97c390093c136f309f9e38b78ec2a47da2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_e1af6d60855b90c45f3e51cd9d565dddeb9d90f990ccbb717d9e56d5f52bd016->leave($__internal_e1af6d60855b90c45f3e51cd9d565dddeb9d90f990ccbb717d9e56d5f52bd016_prof);

        
        $__internal_1480fc2018b6deea7d8cf95c0bdbe97c390093c136f309f9e38b78ec2a47da2f->leave($__internal_1480fc2018b6deea7d8cf95c0bdbe97c390093c136f309f9e38b78ec2a47da2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
