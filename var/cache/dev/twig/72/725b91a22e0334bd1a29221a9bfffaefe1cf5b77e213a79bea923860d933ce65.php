<?php

/* UserBundle:FOSUserBundle/views/Group:edit.html.twig */
class __TwigTemplate_9bfd424103c25d785f26020ee9c3264e58472060e6e34e68b9c58989d3c640b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Group:edit.html.twig", 1);
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
        $__internal_c3847969175d3259593f975852eea8f2a0546d31ad40e8c0483d4da732692c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3847969175d3259593f975852eea8f2a0546d31ad40e8c0483d4da732692c7e->enter($__internal_c3847969175d3259593f975852eea8f2a0546d31ad40e8c0483d4da732692c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:edit.html.twig"));

        $__internal_2aa3101643d755895bcee163b3bce295257da55ca752908873e07617e7170da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa3101643d755895bcee163b3bce295257da55ca752908873e07617e7170da5->enter($__internal_2aa3101643d755895bcee163b3bce295257da55ca752908873e07617e7170da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3847969175d3259593f975852eea8f2a0546d31ad40e8c0483d4da732692c7e->leave($__internal_c3847969175d3259593f975852eea8f2a0546d31ad40e8c0483d4da732692c7e_prof);

        
        $__internal_2aa3101643d755895bcee163b3bce295257da55ca752908873e07617e7170da5->leave($__internal_2aa3101643d755895bcee163b3bce295257da55ca752908873e07617e7170da5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e201e5a1755f58c0c85d7739a3e598df3a3b9a0a29429228e4c107b186e1ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e201e5a1755f58c0c85d7739a3e598df3a3b9a0a29429228e4c107b186e1ecf->enter($__internal_1e201e5a1755f58c0c85d7739a3e598df3a3b9a0a29429228e4c107b186e1ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_93b0c9ab085d64c2d752ee9d705a8b59fff9b528778e22802f0182e9a19ef3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b0c9ab085d64c2d752ee9d705a8b59fff9b528778e22802f0182e9a19ef3a7->enter($__internal_93b0c9ab085d64c2d752ee9d705a8b59fff9b528778e22802f0182e9a19ef3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "UserBundle:FOSUserBundle/views/Group:edit.html.twig", 4)->display($context);
        
        $__internal_93b0c9ab085d64c2d752ee9d705a8b59fff9b528778e22802f0182e9a19ef3a7->leave($__internal_93b0c9ab085d64c2d752ee9d705a8b59fff9b528778e22802f0182e9a19ef3a7_prof);

        
        $__internal_1e201e5a1755f58c0c85d7739a3e598df3a3b9a0a29429228e4c107b186e1ecf->leave($__internal_1e201e5a1755f58c0c85d7739a3e598df3a3b9a0a29429228e4c107b186e1ecf_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:FOSUserBundle/views/Group:edit.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Group/edit.html.twig");
    }
}
