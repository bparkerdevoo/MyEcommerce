<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_52ece3d5f1e08e3018982bd7272ef30459a516a3782a96183f337268474f1a00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_ef730df5166d1437116a5a2e70e3b03b439838001f9ce802f009a50c47fc02a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef730df5166d1437116a5a2e70e3b03b439838001f9ce802f009a50c47fc02a2->enter($__internal_ef730df5166d1437116a5a2e70e3b03b439838001f9ce802f009a50c47fc02a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_e7e9115e606f5d51c5bd8e67a3719d182327406132474868b0305d6639cb6374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e9115e606f5d51c5bd8e67a3719d182327406132474868b0305d6639cb6374->enter($__internal_e7e9115e606f5d51c5bd8e67a3719d182327406132474868b0305d6639cb6374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef730df5166d1437116a5a2e70e3b03b439838001f9ce802f009a50c47fc02a2->leave($__internal_ef730df5166d1437116a5a2e70e3b03b439838001f9ce802f009a50c47fc02a2_prof);

        
        $__internal_e7e9115e606f5d51c5bd8e67a3719d182327406132474868b0305d6639cb6374->leave($__internal_e7e9115e606f5d51c5bd8e67a3719d182327406132474868b0305d6639cb6374_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d18eabd14b7cad4e5d26917a69e403233a2d08030566ec61c3ff44eb2711fa27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18eabd14b7cad4e5d26917a69e403233a2d08030566ec61c3ff44eb2711fa27->enter($__internal_d18eabd14b7cad4e5d26917a69e403233a2d08030566ec61c3ff44eb2711fa27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5de321d2c6ecedc8556f0085b81f0beb4dbbb964e3550528a6458939bf4c94c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de321d2c6ecedc8556f0085b81f0beb4dbbb964e3550528a6458939bf4c94c3->enter($__internal_5de321d2c6ecedc8556f0085b81f0beb4dbbb964e3550528a6458939bf4c94c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_5de321d2c6ecedc8556f0085b81f0beb4dbbb964e3550528a6458939bf4c94c3->leave($__internal_5de321d2c6ecedc8556f0085b81f0beb4dbbb964e3550528a6458939bf4c94c3_prof);

        
        $__internal_d18eabd14b7cad4e5d26917a69e403233a2d08030566ec61c3ff44eb2711fa27->leave($__internal_d18eabd14b7cad4e5d26917a69e403233a2d08030566ec61c3ff44eb2711fa27_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
