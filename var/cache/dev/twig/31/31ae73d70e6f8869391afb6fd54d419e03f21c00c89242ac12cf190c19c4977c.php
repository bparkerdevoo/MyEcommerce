<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a1b886e5f2f8fab1ef4aaed358e88a7a37076302acdfcf295733bc55fe846aab extends Twig_Template
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
        $__internal_4cea11fe7a649140d9eb24e7b1daec3412996717036c3d35e44f5d6f076ee3bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cea11fe7a649140d9eb24e7b1daec3412996717036c3d35e44f5d6f076ee3bc->enter($__internal_4cea11fe7a649140d9eb24e7b1daec3412996717036c3d35e44f5d6f076ee3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_6664fc77a5180bdcf29c32dbecaf172b3880c70760be2807a1902fc5461be2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6664fc77a5180bdcf29c32dbecaf172b3880c70760be2807a1902fc5461be2b4->enter($__internal_6664fc77a5180bdcf29c32dbecaf172b3880c70760be2807a1902fc5461be2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4cea11fe7a649140d9eb24e7b1daec3412996717036c3d35e44f5d6f076ee3bc->leave($__internal_4cea11fe7a649140d9eb24e7b1daec3412996717036c3d35e44f5d6f076ee3bc_prof);

        
        $__internal_6664fc77a5180bdcf29c32dbecaf172b3880c70760be2807a1902fc5461be2b4->leave($__internal_6664fc77a5180bdcf29c32dbecaf172b3880c70760be2807a1902fc5461be2b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
