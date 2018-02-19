<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3fd25dadf7995f0f2b9dd05972abe97be7f72d95c1123912e47d3ded50d71554 extends Twig_Template
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
        $__internal_70c11b628834eab368e0c635579c28c3d69f4acef5222eb0d0dc7c7996b2fa87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c11b628834eab368e0c635579c28c3d69f4acef5222eb0d0dc7c7996b2fa87->enter($__internal_70c11b628834eab368e0c635579c28c3d69f4acef5222eb0d0dc7c7996b2fa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b62abf11727a03af35f88b9f8a6d1fc254a59a96421ff4a560102e9c84bceff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62abf11727a03af35f88b9f8a6d1fc254a59a96421ff4a560102e9c84bceff6->enter($__internal_b62abf11727a03af35f88b9f8a6d1fc254a59a96421ff4a560102e9c84bceff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_70c11b628834eab368e0c635579c28c3d69f4acef5222eb0d0dc7c7996b2fa87->leave($__internal_70c11b628834eab368e0c635579c28c3d69f4acef5222eb0d0dc7c7996b2fa87_prof);

        
        $__internal_b62abf11727a03af35f88b9f8a6d1fc254a59a96421ff4a560102e9c84bceff6->leave($__internal_b62abf11727a03af35f88b9f8a6d1fc254a59a96421ff4a560102e9c84bceff6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
