<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_b96362bc431d62ad608e6021c6eaa07fe304f3e9a6773c7fa001c83056066b75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_4fe5bbad55d9564d8d9617d7752dd710a5312169311faf68d00727381d7aa7e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe5bbad55d9564d8d9617d7752dd710a5312169311faf68d00727381d7aa7e2->enter($__internal_4fe5bbad55d9564d8d9617d7752dd710a5312169311faf68d00727381d7aa7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_cf053d5167762f48db44a40095a80d5de7143197700e3dc21eca6a53cf3289ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf053d5167762f48db44a40095a80d5de7143197700e3dc21eca6a53cf3289ec->enter($__internal_cf053d5167762f48db44a40095a80d5de7143197700e3dc21eca6a53cf3289ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe5bbad55d9564d8d9617d7752dd710a5312169311faf68d00727381d7aa7e2->leave($__internal_4fe5bbad55d9564d8d9617d7752dd710a5312169311faf68d00727381d7aa7e2_prof);

        
        $__internal_cf053d5167762f48db44a40095a80d5de7143197700e3dc21eca6a53cf3289ec->leave($__internal_cf053d5167762f48db44a40095a80d5de7143197700e3dc21eca6a53cf3289ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be6ad605159808a4bf8b8ab62c07fca35dcb36e7f34f296cce4d77f414244efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be6ad605159808a4bf8b8ab62c07fca35dcb36e7f34f296cce4d77f414244efb->enter($__internal_be6ad605159808a4bf8b8ab62c07fca35dcb36e7f34f296cce4d77f414244efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_95097c57df95e91efcf4d13eb05d7c4f713760c5e3310305519472316350c731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95097c57df95e91efcf4d13eb05d7c4f713760c5e3310305519472316350c731->enter($__internal_95097c57df95e91efcf4d13eb05d7c4f713760c5e3310305519472316350c731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_95097c57df95e91efcf4d13eb05d7c4f713760c5e3310305519472316350c731->leave($__internal_95097c57df95e91efcf4d13eb05d7c4f713760c5e3310305519472316350c731_prof);

        
        $__internal_be6ad605159808a4bf8b8ab62c07fca35dcb36e7f34f296cce4d77f414244efb->leave($__internal_be6ad605159808a4bf8b8ab62c07fca35dcb36e7f34f296cce4d77f414244efb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
