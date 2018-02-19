<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_63dc91c860abc9fe16f94725fd61a6b286f87673a22eb3a5d15ebf9b9bd2c9c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe9622d81da974dba9b572c413fb4fd4cba120182d95a7732af6a7bc3b0dc847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9622d81da974dba9b572c413fb4fd4cba120182d95a7732af6a7bc3b0dc847->enter($__internal_fe9622d81da974dba9b572c413fb4fd4cba120182d95a7732af6a7bc3b0dc847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        $__internal_f9c3b8b3bf4ec6b53fc23fb0e2642c105e3f6b767f8a432dd5e3af0cbe5d293e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c3b8b3bf4ec6b53fc23fb0e2642c105e3f6b767f8a432dd5e3af0cbe5d293e->enter($__internal_f9c3b8b3bf4ec6b53fc23fb0e2642c105e3f6b767f8a432dd5e3af0cbe5d293e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_fe9622d81da974dba9b572c413fb4fd4cba120182d95a7732af6a7bc3b0dc847->leave($__internal_fe9622d81da974dba9b572c413fb4fd4cba120182d95a7732af6a7bc3b0dc847_prof);

        
        $__internal_f9c3b8b3bf4ec6b53fc23fb0e2642c105e3f6b767f8a432dd5e3af0cbe5d293e->leave($__internal_f9c3b8b3bf4ec6b53fc23fb0e2642c105e3f6b767f8a432dd5e3af0cbe5d293e_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_6cc9da19eafe2a39d71dd63d1c0f5f292d9948d965ee25d0de75bfacc275080a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc9da19eafe2a39d71dd63d1c0f5f292d9948d965ee25d0de75bfacc275080a->enter($__internal_6cc9da19eafe2a39d71dd63d1c0f5f292d9948d965ee25d0de75bfacc275080a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_b45a9858fa38bf6c148cd52e3a252ab70a9687fcba691d1b3821e4090c2378e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45a9858fa38bf6c148cd52e3a252ab70a9687fcba691d1b3821e4090c2378e5->enter($__internal_b45a9858fa38bf6c148cd52e3a252ab70a9687fcba691d1b3821e4090c2378e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_b45a9858fa38bf6c148cd52e3a252ab70a9687fcba691d1b3821e4090c2378e5->leave($__internal_b45a9858fa38bf6c148cd52e3a252ab70a9687fcba691d1b3821e4090c2378e5_prof);

        
        $__internal_6cc9da19eafe2a39d71dd63d1c0f5f292d9948d965ee25d0de75bfacc275080a->leave($__internal_6cc9da19eafe2a39d71dd63d1c0f5f292d9948d965ee25d0de75bfacc275080a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/Core/user_block.html.twig");
    }
}
