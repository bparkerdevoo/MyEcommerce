<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_b78b2675f7ed2515d29c11728ccfb257d2992b3fee43a49606321a4466d3f5ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@SonataAdmin/CRUD/base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e131eed97b1e272eb68f0d83af6708d231b11f38d7937ca3f1832fdc7640354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e131eed97b1e272eb68f0d83af6708d231b11f38d7937ca3f1832fdc7640354->enter($__internal_5e131eed97b1e272eb68f0d83af6708d231b11f38d7937ca3f1832fdc7640354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $__internal_ed102519e4b08012e2f94dac717691e4c4f2b044beb8ded008ae20432bae0110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed102519e4b08012e2f94dac717691e4c4f2b044beb8ded008ae20432bae0110->enter($__internal_ed102519e4b08012e2f94dac717691e4c4f2b044beb8ded008ae20432bae0110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e131eed97b1e272eb68f0d83af6708d231b11f38d7937ca3f1832fdc7640354->leave($__internal_5e131eed97b1e272eb68f0d83af6708d231b11f38d7937ca3f1832fdc7640354_prof);

        
        $__internal_ed102519e4b08012e2f94dac717691e4c4f2b044beb8ded008ae20432bae0110->leave($__internal_ed102519e4b08012e2f94dac717691e4c4f2b044beb8ded008ae20432bae0110_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_f4b52dca801ef4ed1eb733664b4f1fdead04e5d9f7cfe139194c5aacdb154306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b52dca801ef4ed1eb733664b4f1fdead04e5d9f7cfe139194c5aacdb154306->enter($__internal_f4b52dca801ef4ed1eb733664b4f1fdead04e5d9f7cfe139194c5aacdb154306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ca5657d2c7f38eb78c2415205078f4dfd2c7e326d7d9dd7910f385ef94c066ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5657d2c7f38eb78c2415205078f4dfd2c7e326d7d9dd7910f385ef94c066ba->enter($__internal_ca5657d2c7f38eb78c2415205078f4dfd2c7e326d7d9dd7910f385ef94c066ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("@SonataAdmin/CRUD/_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_ca5657d2c7f38eb78c2415205078f4dfd2c7e326d7d9dd7910f385ef94c066ba->leave($__internal_ca5657d2c7f38eb78c2415205078f4dfd2c7e326d7d9dd7910f385ef94c066ba_prof);

        
        $__internal_f4b52dca801ef4ed1eb733664b4f1fdead04e5d9f7cfe139194c5aacdb154306->leave($__internal_f4b52dca801ef4ed1eb733664b4f1fdead04e5d9f7cfe139194c5aacdb154306_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
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
        return new Twig_Source("{% extends '@SonataAdmin/CRUD/base_show_field.html.twig' %}

{% block field %}
    {% include '@SonataAdmin/CRUD/_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/show_email.html.twig");
    }
}
