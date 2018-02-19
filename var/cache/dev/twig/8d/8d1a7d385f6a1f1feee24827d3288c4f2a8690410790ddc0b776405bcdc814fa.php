<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_33658d88ad79b436ff7bfc0de85a7560223a79e761f2fd1c7ff4cf152e8a1388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_9ef69b513e0e05350313e05edcba1fe5d4a322f67f6e62165b9f54b490234594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef69b513e0e05350313e05edcba1fe5d4a322f67f6e62165b9f54b490234594->enter($__internal_9ef69b513e0e05350313e05edcba1fe5d4a322f67f6e62165b9f54b490234594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_16448dcf6a14c0085e4084088768d561bffdd1c38801974092f9a9573375484c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16448dcf6a14c0085e4084088768d561bffdd1c38801974092f9a9573375484c->enter($__internal_16448dcf6a14c0085e4084088768d561bffdd1c38801974092f9a9573375484c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ef69b513e0e05350313e05edcba1fe5d4a322f67f6e62165b9f54b490234594->leave($__internal_9ef69b513e0e05350313e05edcba1fe5d4a322f67f6e62165b9f54b490234594_prof);

        
        $__internal_16448dcf6a14c0085e4084088768d561bffdd1c38801974092f9a9573375484c->leave($__internal_16448dcf6a14c0085e4084088768d561bffdd1c38801974092f9a9573375484c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d59e713dfc50b7f673c8ffa39db2bbdae653439dc0f861342571fed82bd991c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59e713dfc50b7f673c8ffa39db2bbdae653439dc0f861342571fed82bd991c6->enter($__internal_d59e713dfc50b7f673c8ffa39db2bbdae653439dc0f861342571fed82bd991c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9fe5047f6ab04d236939d6c945234b894548ad6a98fccec19bd1cdd275516d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe5047f6ab04d236939d6c945234b894548ad6a98fccec19bd1cdd275516d55->enter($__internal_9fe5047f6ab04d236939d6c945234b894548ad6a98fccec19bd1cdd275516d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9fe5047f6ab04d236939d6c945234b894548ad6a98fccec19bd1cdd275516d55->leave($__internal_9fe5047f6ab04d236939d6c945234b894548ad6a98fccec19bd1cdd275516d55_prof);

        
        $__internal_d59e713dfc50b7f673c8ffa39db2bbdae653439dc0f861342571fed82bd991c6->leave($__internal_d59e713dfc50b7f673c8ffa39db2bbdae653439dc0f861342571fed82bd991c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
