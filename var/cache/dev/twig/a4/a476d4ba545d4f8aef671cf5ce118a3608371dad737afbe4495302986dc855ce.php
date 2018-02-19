<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_33c60c4b1fc1b2bff45e5ea373f7f3f05ff8c0dabd7aae9443700e9b2fc1c068 extends Twig_Template
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
        $__internal_22726c49ab86d5da279f50c1378eff0c3efe705bde492a5aadc922e88975e674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22726c49ab86d5da279f50c1378eff0c3efe705bde492a5aadc922e88975e674->enter($__internal_22726c49ab86d5da279f50c1378eff0c3efe705bde492a5aadc922e88975e674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_72d10a15c45af8692837ac4d301fc97eb64c4b725171a7f76ef713649405a301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d10a15c45af8692837ac4d301fc97eb64c4b725171a7f76ef713649405a301->enter($__internal_72d10a15c45af8692837ac4d301fc97eb64c4b725171a7f76ef713649405a301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_22726c49ab86d5da279f50c1378eff0c3efe705bde492a5aadc922e88975e674->leave($__internal_22726c49ab86d5da279f50c1378eff0c3efe705bde492a5aadc922e88975e674_prof);

        
        $__internal_72d10a15c45af8692837ac4d301fc97eb64c4b725171a7f76ef713649405a301->leave($__internal_72d10a15c45af8692837ac4d301fc97eb64c4b725171a7f76ef713649405a301_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
