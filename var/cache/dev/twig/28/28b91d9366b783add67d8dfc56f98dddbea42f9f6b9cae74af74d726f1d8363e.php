<?php

/* UserBundle:FOSUserBundle/views/Registration:check_email.html.twig */
class __TwigTemplate_8dc206515ce6f7b9b4d895e6677ed8c097cac0e1f37ce00802c629cfd9ee643e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Registration:check_email.html.twig", 1);
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
        $__internal_47eb3385bfc74e9d34a76f2e36f43d54ec2390401ccec7367b040c804ff8b862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47eb3385bfc74e9d34a76f2e36f43d54ec2390401ccec7367b040c804ff8b862->enter($__internal_47eb3385bfc74e9d34a76f2e36f43d54ec2390401ccec7367b040c804ff8b862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Registration:check_email.html.twig"));

        $__internal_399a8bbd8964b0b6b5d063b64cf20d4913467928106f314af9107034eac06d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399a8bbd8964b0b6b5d063b64cf20d4913467928106f314af9107034eac06d07->enter($__internal_399a8bbd8964b0b6b5d063b64cf20d4913467928106f314af9107034eac06d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47eb3385bfc74e9d34a76f2e36f43d54ec2390401ccec7367b040c804ff8b862->leave($__internal_47eb3385bfc74e9d34a76f2e36f43d54ec2390401ccec7367b040c804ff8b862_prof);

        
        $__internal_399a8bbd8964b0b6b5d063b64cf20d4913467928106f314af9107034eac06d07->leave($__internal_399a8bbd8964b0b6b5d063b64cf20d4913467928106f314af9107034eac06d07_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54af8fc1bf58d347dad60958fdfc1be8cde98d04bb9577f352c9d1b419f48815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54af8fc1bf58d347dad60958fdfc1be8cde98d04bb9577f352c9d1b419f48815->enter($__internal_54af8fc1bf58d347dad60958fdfc1be8cde98d04bb9577f352c9d1b419f48815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7bad316b3239c045c2cfa5e3a6427ae115a2fa3d020d0dd52a12bee484a24ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bad316b3239c045c2cfa5e3a6427ae115a2fa3d020d0dd52a12bee484a24ce2->enter($__internal_7bad316b3239c045c2cfa5e3a6427ae115a2fa3d020d0dd52a12bee484a24ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7bad316b3239c045c2cfa5e3a6427ae115a2fa3d020d0dd52a12bee484a24ce2->leave($__internal_7bad316b3239c045c2cfa5e3a6427ae115a2fa3d020d0dd52a12bee484a24ce2_prof);

        
        $__internal_54af8fc1bf58d347dad60958fdfc1be8cde98d04bb9577f352c9d1b419f48815->leave($__internal_54af8fc1bf58d347dad60958fdfc1be8cde98d04bb9577f352c9d1b419f48815_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "UserBundle:FOSUserBundle/views/Registration:check_email.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
