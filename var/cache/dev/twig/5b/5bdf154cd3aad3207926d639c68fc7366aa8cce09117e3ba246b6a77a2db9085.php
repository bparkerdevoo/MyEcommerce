<?php

/* UserBundle:FOSUserBundle/views/Profile:show_client.html.twig */
class __TwigTemplate_7b8e65fee1400716797ea4be0da62532dd324c3c655320633ee3b7c1639c46a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Profile:show_client.html.twig", 1);
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
        $__internal_8d8d6bebf021422069041d99816111b7f940d7262185cd5f156e755c07d5123e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8d6bebf021422069041d99816111b7f940d7262185cd5f156e755c07d5123e->enter($__internal_8d8d6bebf021422069041d99816111b7f940d7262185cd5f156e755c07d5123e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show_client.html.twig"));

        $__internal_53f53426114f91afd72095e956494064d6ad811d82ee25d47b7d78b251f680f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f53426114f91afd72095e956494064d6ad811d82ee25d47b7d78b251f680f6->enter($__internal_53f53426114f91afd72095e956494064d6ad811d82ee25d47b7d78b251f680f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show_client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d8d6bebf021422069041d99816111b7f940d7262185cd5f156e755c07d5123e->leave($__internal_8d8d6bebf021422069041d99816111b7f940d7262185cd5f156e755c07d5123e_prof);

        
        $__internal_53f53426114f91afd72095e956494064d6ad811d82ee25d47b7d78b251f680f6->leave($__internal_53f53426114f91afd72095e956494064d6ad811d82ee25d47b7d78b251f680f6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90e0e79431111fadc61bf90cc978a028c1494c0eee0b99db25d9173103e1a22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e0e79431111fadc61bf90cc978a028c1494c0eee0b99db25d9173103e1a22f->enter($__internal_90e0e79431111fadc61bf90cc978a028c1494c0eee0b99db25d9173103e1a22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_17b4133703b5535a1fbb9c2e4c0063fce2eb1bbee6a83d6963615da9133d868f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b4133703b5535a1fbb9c2e4c0063fce2eb1bbee6a83d6963615da9133d868f->enter($__internal_17b4133703b5535a1fbb9c2e4c0063fce2eb1bbee6a83d6963615da9133d868f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Profile:show_content_client.html.twig", "UserBundle:FOSUserBundle/views/Profile:show_client.html.twig", 4)->display($context);
        
        $__internal_17b4133703b5535a1fbb9c2e4c0063fce2eb1bbee6a83d6963615da9133d868f->leave($__internal_17b4133703b5535a1fbb9c2e4c0063fce2eb1bbee6a83d6963615da9133d868f_prof);

        
        $__internal_90e0e79431111fadc61bf90cc978a028c1494c0eee0b99db25d9173103e1a22f->leave($__internal_90e0e79431111fadc61bf90cc978a028c1494c0eee0b99db25d9173103e1a22f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Profile:show_client.html.twig";
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
    {% include \"FOSUserBundle:Profile:show_content_client.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:FOSUserBundle/views/Profile:show_client.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Profile/show_client.html.twig");
    }
}
