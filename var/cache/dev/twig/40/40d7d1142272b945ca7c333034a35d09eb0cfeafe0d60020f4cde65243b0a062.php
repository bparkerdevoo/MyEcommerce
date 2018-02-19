<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_90b18e490361ef7eb3b3ed35cd012c76c9216263805635eb348945aee707c77c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e8cc5e1e6ee0201f186c6de65794768dba68fd31c95aebbf4429ec0bba6b2a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8cc5e1e6ee0201f186c6de65794768dba68fd31c95aebbf4429ec0bba6b2a2->enter($__internal_6e8cc5e1e6ee0201f186c6de65794768dba68fd31c95aebbf4429ec0bba6b2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e5ffcc24f8021d7afe7084060ca98f243b22763a467dc3e854ca5550a3e2dade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ffcc24f8021d7afe7084060ca98f243b22763a467dc3e854ca5550a3e2dade->enter($__internal_e5ffcc24f8021d7afe7084060ca98f243b22763a467dc3e854ca5550a3e2dade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e8cc5e1e6ee0201f186c6de65794768dba68fd31c95aebbf4429ec0bba6b2a2->leave($__internal_6e8cc5e1e6ee0201f186c6de65794768dba68fd31c95aebbf4429ec0bba6b2a2_prof);

        
        $__internal_e5ffcc24f8021d7afe7084060ca98f243b22763a467dc3e854ca5550a3e2dade->leave($__internal_e5ffcc24f8021d7afe7084060ca98f243b22763a467dc3e854ca5550a3e2dade_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d45e58b06d9e6ad75bd96eddb64fb29ad4cdb6cc30ec1ce6319d8bb6dd942083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45e58b06d9e6ad75bd96eddb64fb29ad4cdb6cc30ec1ce6319d8bb6dd942083->enter($__internal_d45e58b06d9e6ad75bd96eddb64fb29ad4cdb6cc30ec1ce6319d8bb6dd942083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f44395a6bb62972554355330541679618026566343aecfd99811d5cdb512490c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44395a6bb62972554355330541679618026566343aecfd99811d5cdb512490c->enter($__internal_f44395a6bb62972554355330541679618026566343aecfd99811d5cdb512490c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_f44395a6bb62972554355330541679618026566343aecfd99811d5cdb512490c->leave($__internal_f44395a6bb62972554355330541679618026566343aecfd99811d5cdb512490c_prof);

        
        $__internal_d45e58b06d9e6ad75bd96eddb64fb29ad4cdb6cc30ec1ce6319d8bb6dd942083->leave($__internal_d45e58b06d9e6ad75bd96eddb64fb29ad4cdb6cc30ec1ce6319d8bb6dd942083_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b97058ba55504e7f618949af19bce9a283e44f8bbf75ece03bc84a10ee587e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97058ba55504e7f618949af19bce9a283e44f8bbf75ece03bc84a10ee587e90->enter($__internal_b97058ba55504e7f618949af19bce9a283e44f8bbf75ece03bc84a10ee587e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d0d0db165077fafec0af665c96c386b746974bc25ac9b05d6a7230650b316681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d0db165077fafec0af665c96c386b746974bc25ac9b05d6a7230650b316681->enter($__internal_d0d0db165077fafec0af665c96c386b746974bc25ac9b05d6a7230650b316681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d0d0db165077fafec0af665c96c386b746974bc25ac9b05d6a7230650b316681->leave($__internal_d0d0db165077fafec0af665c96c386b746974bc25ac9b05d6a7230650b316681_prof);

        
        $__internal_b97058ba55504e7f618949af19bce9a283e44f8bbf75ece03bc84a10ee587e90->leave($__internal_b97058ba55504e7f618949af19bce9a283e44f8bbf75ece03bc84a10ee587e90_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
