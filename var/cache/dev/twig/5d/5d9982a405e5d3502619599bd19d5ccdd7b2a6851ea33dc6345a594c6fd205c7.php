<?php

/* UserBundle:FOSUserBundle/views/Profile:show_profile.html.twig */
class __TwigTemplate_aa99894cd639896a9d747789eb0a6e0da4bf571eebb2f6b141a1d42327fdf3b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Profile:show_profile.html.twig", 1);
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
        $__internal_93b1160ef173267169070a7e60a6345b2f8e5643d92839538edd46c45d99445d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b1160ef173267169070a7e60a6345b2f8e5643d92839538edd46c45d99445d->enter($__internal_93b1160ef173267169070a7e60a6345b2f8e5643d92839538edd46c45d99445d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show_profile.html.twig"));

        $__internal_680dbe9fac926ebafbedcf69d8d9e72a458b40ced1f38a979ee6c851eb6839ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680dbe9fac926ebafbedcf69d8d9e72a458b40ced1f38a979ee6c851eb6839ef->enter($__internal_680dbe9fac926ebafbedcf69d8d9e72a458b40ced1f38a979ee6c851eb6839ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show_profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93b1160ef173267169070a7e60a6345b2f8e5643d92839538edd46c45d99445d->leave($__internal_93b1160ef173267169070a7e60a6345b2f8e5643d92839538edd46c45d99445d_prof);

        
        $__internal_680dbe9fac926ebafbedcf69d8d9e72a458b40ced1f38a979ee6c851eb6839ef->leave($__internal_680dbe9fac926ebafbedcf69d8d9e72a458b40ced1f38a979ee6c851eb6839ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a115e2b3e458abd29e95ffff18c6b18537678682ec11f864bced0ca838e2f81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a115e2b3e458abd29e95ffff18c6b18537678682ec11f864bced0ca838e2f81f->enter($__internal_a115e2b3e458abd29e95ffff18c6b18537678682ec11f864bced0ca838e2f81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a62ca0e811369a2ea4d80c5518d38dbc78ffc534ba48569ac443d899f829c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a62ca0e811369a2ea4d80c5518d38dbc78ffc534ba48569ac443d899f829c90->enter($__internal_4a62ca0e811369a2ea4d80c5518d38dbc78ffc534ba48569ac443d899f829c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Profile:show_content_client.html.twig", "UserBundle:FOSUserBundle/views/Profile:show_profile.html.twig", 4)->display($context);
        
        $__internal_4a62ca0e811369a2ea4d80c5518d38dbc78ffc534ba48569ac443d899f829c90->leave($__internal_4a62ca0e811369a2ea4d80c5518d38dbc78ffc534ba48569ac443d899f829c90_prof);

        
        $__internal_a115e2b3e458abd29e95ffff18c6b18537678682ec11f864bced0ca838e2f81f->leave($__internal_a115e2b3e458abd29e95ffff18c6b18537678682ec11f864bced0ca838e2f81f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Profile:show_profile.html.twig";
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
{% endblock fos_user_content %}", "UserBundle:FOSUserBundle/views/Profile:show_profile.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Profile/show_profile.html.twig");
    }
}
