<?php

/* UserBundle:FOSUserBundle/views/Group:show_content.html.twig */
class __TwigTemplate_9eb42a4ac333be2e873f6433e85eaa656ec936f330616443cecc568a57659582 extends Twig_Template
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
        $__internal_5aeb06d21e7f893774c6f43f5b5281012249c9b3515ee70e8889cda9ebc5828f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aeb06d21e7f893774c6f43f5b5281012249c9b3515ee70e8889cda9ebc5828f->enter($__internal_5aeb06d21e7f893774c6f43f5b5281012249c9b3515ee70e8889cda9ebc5828f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:show_content.html.twig"));

        $__internal_00ee22fccc20be3ed368039c5e2b80fbd3290a711bf619cf2a394c8b764a9abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ee22fccc20be3ed368039c5e2b80fbd3290a711bf619cf2a394c8b764a9abd->enter($__internal_00ee22fccc20be3ed368039c5e2b80fbd3290a711bf619cf2a394c8b764a9abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:show_content.html.twig"));

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
        
        $__internal_5aeb06d21e7f893774c6f43f5b5281012249c9b3515ee70e8889cda9ebc5828f->leave($__internal_5aeb06d21e7f893774c6f43f5b5281012249c9b3515ee70e8889cda9ebc5828f_prof);

        
        $__internal_00ee22fccc20be3ed368039c5e2b80fbd3290a711bf619cf2a394c8b764a9abd->leave($__internal_00ee22fccc20be3ed368039c5e2b80fbd3290a711bf619cf2a394c8b764a9abd_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Group:show_content.html.twig";
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
", "UserBundle:FOSUserBundle/views/Group:show_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
