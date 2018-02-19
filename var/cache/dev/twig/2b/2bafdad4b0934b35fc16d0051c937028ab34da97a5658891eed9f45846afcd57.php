<?php

/* :layout/modulesUsed:user.html.twig */
class __TwigTemplate_ad1f28fd96449ea3c345dc17a2ee69b505a1a9dd96c3800b02b3514c61e93bb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c07684aeab66dac814ee657d2bc1d281ab73ae2f0c65dbcaaa5cb5e8a828f98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c07684aeab66dac814ee657d2bc1d281ab73ae2f0c65dbcaaa5cb5e8a828f98->enter($__internal_8c07684aeab66dac814ee657d2bc1d281ab73ae2f0c65dbcaaa5cb5e8a828f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout/modulesUsed:user.html.twig"));

        $__internal_ac60482d36a44ff38625295fef7834c7864b62d0c5f49de3aded9b1b818a4b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac60482d36a44ff38625295fef7834c7864b62d0c5f49de3aded9b1b818a4b04->enter($__internal_ac60482d36a44ff38625295fef7834c7864b62d0c5f49de3aded9b1b818a4b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout/modulesUsed:user.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8c07684aeab66dac814ee657d2bc1d281ab73ae2f0c65dbcaaa5cb5e8a828f98->leave($__internal_8c07684aeab66dac814ee657d2bc1d281ab73ae2f0c65dbcaaa5cb5e8a828f98_prof);

        
        $__internal_ac60482d36a44ff38625295fef7834c7864b62d0c5f49de3aded9b1b818a4b04->leave($__internal_ac60482d36a44ff38625295fef7834c7864b62d0c5f49de3aded9b1b818a4b04_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a2977094f0d8f764b8d582096e66dc40cc11984fb86bd3bdf0949247671b08aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2977094f0d8f764b8d582096e66dc40cc11984fb86bd3bdf0949247671b08aa->enter($__internal_a2977094f0d8f764b8d582096e66dc40cc11984fb86bd3bdf0949247671b08aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4247d4cfde6c74b3abc973c7e40df6d93cd59adecb05d1ffcc3f2ea91b02fce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4247d4cfde6c74b3abc973c7e40df6d93cd59adecb05d1ffcc3f2ea91b02fce0->enter($__internal_4247d4cfde6c74b3abc973c7e40df6d93cd59adecb05d1ffcc3f2ea91b02fce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div class=\"span3\">
        <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
            </li>
            <li>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
            </li>
        </ul>
    </div>

</div>
     ";
        
        $__internal_4247d4cfde6c74b3abc973c7e40df6d93cd59adecb05d1ffcc3f2ea91b02fce0->leave($__internal_4247d4cfde6c74b3abc973c7e40df6d93cd59adecb05d1ffcc3f2ea91b02fce0_prof);

        
        $__internal_a2977094f0d8f764b8d582096e66dc40cc11984fb86bd3bdf0949247671b08aa->leave($__internal_a2977094f0d8f764b8d582096e66dc40cc11984fb86bd3bdf0949247671b08aa_prof);

    }

    public function getTemplateName()
    {
        return ":layout/modulesUsed:user.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  50 => 6,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
<div class=\"span3\">
        <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a>
            </li>
            <li>
                <a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a>
            </li>
        </ul>
    </div>

</div>
     {% endblock %}
", ":layout/modulesUsed:user.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/app/Resources/views/layout/modulesUsed/user.html.twig");
    }
}
