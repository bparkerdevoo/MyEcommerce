<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_d1c29d626de1cc66439c2f96f92b1c936c2d55eda76bba312ac06c3d742a4130 extends Twig_Template
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
        $__internal_0de667d074eabc4ad4ce417601c450e846935ad19acc740cb583546d17403db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de667d074eabc4ad4ce417601c450e846935ad19acc740cb583546d17403db5->enter($__internal_0de667d074eabc4ad4ce417601c450e846935ad19acc740cb583546d17403db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_e57196da229d7990e88e323ea4d0ad7158ad4e758eb4ac524c8b0ec8caec3ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57196da229d7990e88e323ea4d0ad7158ad4e758eb4ac524c8b0ec8caec3ad0->enter($__internal_e57196da229d7990e88e323ea4d0ad7158ad4e758eb4ac524c8b0ec8caec3ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0de667d074eabc4ad4ce417601c450e846935ad19acc740cb583546d17403db5->leave($__internal_0de667d074eabc4ad4ce417601c450e846935ad19acc740cb583546d17403db5_prof);

        
        $__internal_e57196da229d7990e88e323ea4d0ad7158ad4e758eb4ac524c8b0ec8caec3ad0->leave($__internal_e57196da229d7990e88e323ea4d0ad7158ad4e758eb4ac524c8b0ec8caec3ad0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
