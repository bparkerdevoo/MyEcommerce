<?php

/* UserBundle:FOSUserBundle/views/Profile:edit.html.twig */
class __TwigTemplate_6289e43b3902de5715236d9b2291b81b22b9b7a88c3d172e162835cb80d2dbe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Profile:edit.html.twig", 1);
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
        $__internal_869d8139f127186848f1361acd55342dd13814e23719d4dcbd5be196a5e01453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869d8139f127186848f1361acd55342dd13814e23719d4dcbd5be196a5e01453->enter($__internal_869d8139f127186848f1361acd55342dd13814e23719d4dcbd5be196a5e01453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:edit.html.twig"));

        $__internal_165ba7ec4e059d8b97afce2ce54a125d3549f468a49353eb6fcdd5c5ee700657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165ba7ec4e059d8b97afce2ce54a125d3549f468a49353eb6fcdd5c5ee700657->enter($__internal_165ba7ec4e059d8b97afce2ce54a125d3549f468a49353eb6fcdd5c5ee700657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_869d8139f127186848f1361acd55342dd13814e23719d4dcbd5be196a5e01453->leave($__internal_869d8139f127186848f1361acd55342dd13814e23719d4dcbd5be196a5e01453_prof);

        
        $__internal_165ba7ec4e059d8b97afce2ce54a125d3549f468a49353eb6fcdd5c5ee700657->leave($__internal_165ba7ec4e059d8b97afce2ce54a125d3549f468a49353eb6fcdd5c5ee700657_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_856e6fda8d4c2d711c04f62420c1cfde1b518d2ec236ff56425fdb6d35de51f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_856e6fda8d4c2d711c04f62420c1cfde1b518d2ec236ff56425fdb6d35de51f4->enter($__internal_856e6fda8d4c2d711c04f62420c1cfde1b518d2ec236ff56425fdb6d35de51f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_02034bb1f330ca55d148a4b06d9ef6681e1d4dbf94e520ee5ac4f4686eb14e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02034bb1f330ca55d148a4b06d9ef6681e1d4dbf94e520ee5ac4f4686eb14e4a->enter($__internal_02034bb1f330ca55d148a4b06d9ef6681e1d4dbf94e520ee5ac4f4686eb14e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:FOSUserBundle/views/Profile:edit.html.twig", 4)->display($context);
        
        $__internal_02034bb1f330ca55d148a4b06d9ef6681e1d4dbf94e520ee5ac4f4686eb14e4a->leave($__internal_02034bb1f330ca55d148a4b06d9ef6681e1d4dbf94e520ee5ac4f4686eb14e4a_prof);

        
        $__internal_856e6fda8d4c2d711c04f62420c1cfde1b518d2ec236ff56425fdb6d35de51f4->leave($__internal_856e6fda8d4c2d711c04f62420c1cfde1b518d2ec236ff56425fdb6d35de51f4_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:FOSUserBundle/views/Profile:edit.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
