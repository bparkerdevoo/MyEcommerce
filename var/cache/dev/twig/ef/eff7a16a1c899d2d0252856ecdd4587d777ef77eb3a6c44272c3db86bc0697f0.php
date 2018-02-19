<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1b7972c856f8d762fe2d75bd19f7feb94983067c548fb5c0d48b8a87f65da301 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_933699e6edaab7601eb6311d85a6b20a2fe9e89ac418031329b504eead738aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_933699e6edaab7601eb6311d85a6b20a2fe9e89ac418031329b504eead738aab->enter($__internal_933699e6edaab7601eb6311d85a6b20a2fe9e89ac418031329b504eead738aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_0a023add3f5c28ad1f988f32ae2f64b25baa78f31ef42dbe2c9e3403c8b5d875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a023add3f5c28ad1f988f32ae2f64b25baa78f31ef42dbe2c9e3403c8b5d875->enter($__internal_0a023add3f5c28ad1f988f32ae2f64b25baa78f31ef42dbe2c9e3403c8b5d875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_933699e6edaab7601eb6311d85a6b20a2fe9e89ac418031329b504eead738aab->leave($__internal_933699e6edaab7601eb6311d85a6b20a2fe9e89ac418031329b504eead738aab_prof);

        
        $__internal_0a023add3f5c28ad1f988f32ae2f64b25baa78f31ef42dbe2c9e3403c8b5d875->leave($__internal_0a023add3f5c28ad1f988f32ae2f64b25baa78f31ef42dbe2c9e3403c8b5d875_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6b40cb3a955b6d6dafbea18ecd9ac2a5a3ebe859658c4796fc1d790d0361225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b40cb3a955b6d6dafbea18ecd9ac2a5a3ebe859658c4796fc1d790d0361225->enter($__internal_f6b40cb3a955b6d6dafbea18ecd9ac2a5a3ebe859658c4796fc1d790d0361225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c0b3eb59cf5ef30e188c7610abb2a6b53d630bcf49160cd10ac41f14e69b23fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b3eb59cf5ef30e188c7610abb2a6b53d630bcf49160cd10ac41f14e69b23fa->enter($__internal_c0b3eb59cf5ef30e188c7610abb2a6b53d630bcf49160cd10ac41f14e69b23fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c0b3eb59cf5ef30e188c7610abb2a6b53d630bcf49160cd10ac41f14e69b23fa->leave($__internal_c0b3eb59cf5ef30e188c7610abb2a6b53d630bcf49160cd10ac41f14e69b23fa_prof);

        
        $__internal_f6b40cb3a955b6d6dafbea18ecd9ac2a5a3ebe859658c4796fc1d790d0361225->leave($__internal_f6b40cb3a955b6d6dafbea18ecd9ac2a5a3ebe859658c4796fc1d790d0361225_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
