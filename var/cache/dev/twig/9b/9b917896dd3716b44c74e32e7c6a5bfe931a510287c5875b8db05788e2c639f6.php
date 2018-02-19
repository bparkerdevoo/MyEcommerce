<?php

/* MSFBundle:Default:media.html.twig */
class __TwigTemplate_fcf7e397710f56369fef151302e03766bdfe347f7912fe6f451c4aa021b9d660 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MSFBundle:Default:media.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4e50b5078056c95ea7bb6d53281e77b84a5a61bc49ec649e5091e1798ffee57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e50b5078056c95ea7bb6d53281e77b84a5a61bc49ec649e5091e1798ffee57->enter($__internal_f4e50b5078056c95ea7bb6d53281e77b84a5a61bc49ec649e5091e1798ffee57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Default:media.html.twig"));

        $__internal_0159e5ce685fcdcff9db58a17632bdf184d4d1545db665544a05538707e66883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0159e5ce685fcdcff9db58a17632bdf184d4d1545db665544a05538707e66883->enter($__internal_0159e5ce685fcdcff9db58a17632bdf184d4d1545db665544a05538707e66883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Default:media.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4e50b5078056c95ea7bb6d53281e77b84a5a61bc49ec649e5091e1798ffee57->leave($__internal_f4e50b5078056c95ea7bb6d53281e77b84a5a61bc49ec649e5091e1798ffee57_prof);

        
        $__internal_0159e5ce685fcdcff9db58a17632bdf184d4d1545db665544a05538707e66883->leave($__internal_0159e5ce685fcdcff9db58a17632bdf184d4d1545db665544a05538707e66883_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f9a34df61444d23e6025eea31ea4c2b07df0b60042688a015b1e15700115cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9a34df61444d23e6025eea31ea4c2b07df0b60042688a015b1e15700115cfb->enter($__internal_7f9a34df61444d23e6025eea31ea4c2b07df0b60042688a015b1e15700115cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ebff44b5177606c31109dfb512d668940ba4506a3bbb14bbc8a69efa1b35628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebff44b5177606c31109dfb512d668940ba4506a3bbb14bbc8a69efa1b35628->enter($__internal_0ebff44b5177606c31109dfb512d668940ba4506a3bbb14bbc8a69efa1b35628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MSFBundle:Ecommerce:Media";
        
        $__internal_0ebff44b5177606c31109dfb512d668940ba4506a3bbb14bbc8a69efa1b35628->leave($__internal_0ebff44b5177606c31109dfb512d668940ba4506a3bbb14bbc8a69efa1b35628_prof);

        
        $__internal_7f9a34df61444d23e6025eea31ea4c2b07df0b60042688a015b1e15700115cfb->leave($__internal_7f9a34df61444d23e6025eea31ea4c2b07df0b60042688a015b1e15700115cfb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9295b35e2b7fa837b54586a265b721e3b5cbb1b1631d4dbe7af06bc9a8048fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9295b35e2b7fa837b54586a265b721e3b5cbb1b1631d4dbe7af06bc9a8048fcd->enter($__internal_9295b35e2b7fa837b54586a265b721e3b5cbb1b1631d4dbe7af06bc9a8048fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd643d048687da3c9caf36108a7286dcba9f6eca24385c4bc01b59f502890aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd643d048687da3c9caf36108a7286dcba9f6eca24385c4bc01b59f502890aaf->enter($__internal_bd643d048687da3c9caf36108a7286dcba9f6eca24385c4bc01b59f502890aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Ecommerce:Media page</h1>
";
        
        $__internal_bd643d048687da3c9caf36108a7286dcba9f6eca24385c4bc01b59f502890aaf->leave($__internal_bd643d048687da3c9caf36108a7286dcba9f6eca24385c4bc01b59f502890aaf_prof);

        
        $__internal_9295b35e2b7fa837b54586a265b721e3b5cbb1b1631d4dbe7af06bc9a8048fcd->leave($__internal_9295b35e2b7fa837b54586a265b721e3b5cbb1b1631d4dbe7af06bc9a8048fcd_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Default:media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}MSFBundle:Ecommerce:Media{% endblock %}

{% block body %}
<h1>Welcome to the Ecommerce:Media page</h1>
{% endblock %}
", "MSFBundle:Default:media.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Default/media.html.twig");
    }
}
