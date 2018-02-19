<?php

/* UserBundle:FOSUserBundle/views/Security:login.html.twig */
class __TwigTemplate_e0cda06860eade5c53e69250811ec6eb445c2abd3952b84b7a1db8ee61ca2b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Security:login.html.twig", 1);
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
        $__internal_77a5909c08e101539c215683401f27d5b26571f8f8b0305e151ef0a15405e1f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a5909c08e101539c215683401f27d5b26571f8f8b0305e151ef0a15405e1f8->enter($__internal_77a5909c08e101539c215683401f27d5b26571f8f8b0305e151ef0a15405e1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Security:login.html.twig"));

        $__internal_714d01b33a0292a005a1f1fb57c700a2ecc4f6a2b7263eb7bbac87656dad852e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714d01b33a0292a005a1f1fb57c700a2ecc4f6a2b7263eb7bbac87656dad852e->enter($__internal_714d01b33a0292a005a1f1fb57c700a2ecc4f6a2b7263eb7bbac87656dad852e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77a5909c08e101539c215683401f27d5b26571f8f8b0305e151ef0a15405e1f8->leave($__internal_77a5909c08e101539c215683401f27d5b26571f8f8b0305e151ef0a15405e1f8_prof);

        
        $__internal_714d01b33a0292a005a1f1fb57c700a2ecc4f6a2b7263eb7bbac87656dad852e->leave($__internal_714d01b33a0292a005a1f1fb57c700a2ecc4f6a2b7263eb7bbac87656dad852e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_160f65848344b85e776ba2df5654a60f2ae4221743665768be4d53ae2e23a387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160f65848344b85e776ba2df5654a60f2ae4221743665768be4d53ae2e23a387->enter($__internal_160f65848344b85e776ba2df5654a60f2ae4221743665768be4d53ae2e23a387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_29be561363ed7816481b3c65d543aff859d7e796f418fe03def03065c4a9dd72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29be561363ed7816481b3c65d543aff859d7e796f418fe03def03065c4a9dd72->enter($__internal_29be561363ed7816481b3c65d543aff859d7e796f418fe03def03065c4a9dd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_29be561363ed7816481b3c65d543aff859d7e796f418fe03def03065c4a9dd72->leave($__internal_29be561363ed7816481b3c65d543aff859d7e796f418fe03def03065c4a9dd72_prof);

        
        $__internal_160f65848344b85e776ba2df5654a60f2ae4221743665768be4d53ae2e23a387->leave($__internal_160f65848344b85e776ba2df5654a60f2ae4221743665768be4d53ae2e23a387_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "UserBundle:FOSUserBundle/views/Security:login.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Security/login.html.twig");
    }
}
