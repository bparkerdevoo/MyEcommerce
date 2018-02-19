<?php

/* UserBundle:FOSUserBundle/views/Group:new.html.twig */
class __TwigTemplate_91f4e6784beb09bd177d5d77275744ba82f0d4c063e6668095d7922e31496b9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Group:new.html.twig", 1);
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
        $__internal_2a15e4274e8f56025c9588af85002341d1ec33cd1639dded6dd2fee10e1b5150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a15e4274e8f56025c9588af85002341d1ec33cd1639dded6dd2fee10e1b5150->enter($__internal_2a15e4274e8f56025c9588af85002341d1ec33cd1639dded6dd2fee10e1b5150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:new.html.twig"));

        $__internal_ea9358929173d010a03a7a4dcfc068375d1adc7e1bae59b606b957d96de56e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea9358929173d010a03a7a4dcfc068375d1adc7e1bae59b606b957d96de56e5b->enter($__internal_ea9358929173d010a03a7a4dcfc068375d1adc7e1bae59b606b957d96de56e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a15e4274e8f56025c9588af85002341d1ec33cd1639dded6dd2fee10e1b5150->leave($__internal_2a15e4274e8f56025c9588af85002341d1ec33cd1639dded6dd2fee10e1b5150_prof);

        
        $__internal_ea9358929173d010a03a7a4dcfc068375d1adc7e1bae59b606b957d96de56e5b->leave($__internal_ea9358929173d010a03a7a4dcfc068375d1adc7e1bae59b606b957d96de56e5b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03aef7199c1c163a61c639e73047288188ff9d53f354b1da2b40aec491d0d758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03aef7199c1c163a61c639e73047288188ff9d53f354b1da2b40aec491d0d758->enter($__internal_03aef7199c1c163a61c639e73047288188ff9d53f354b1da2b40aec491d0d758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d504ca2da20ba29857b75294ac012c0dcb16e63245767208766cdd68123fcad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d504ca2da20ba29857b75294ac012c0dcb16e63245767208766cdd68123fcad0->enter($__internal_d504ca2da20ba29857b75294ac012c0dcb16e63245767208766cdd68123fcad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "UserBundle:FOSUserBundle/views/Group:new.html.twig", 4)->display($context);
        
        $__internal_d504ca2da20ba29857b75294ac012c0dcb16e63245767208766cdd68123fcad0->leave($__internal_d504ca2da20ba29857b75294ac012c0dcb16e63245767208766cdd68123fcad0_prof);

        
        $__internal_03aef7199c1c163a61c639e73047288188ff9d53f354b1da2b40aec491d0d758->leave($__internal_03aef7199c1c163a61c639e73047288188ff9d53f354b1da2b40aec491d0d758_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:FOSUserBundle/views/Group:new.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Group/new.html.twig");
    }
}
