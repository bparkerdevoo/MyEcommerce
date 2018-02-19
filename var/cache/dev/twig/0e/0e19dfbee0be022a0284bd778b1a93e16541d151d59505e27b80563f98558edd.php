<?php

/* UserBundle:nav_inc:utilisateurs.html.twig */
class __TwigTemplate_dcf7fa4a8d43e0a7426f47bc0ea5e9b7d776ccc0dbb186ab57e9cfdd3419407d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcca68f18efaa24807148b3a690467322f30fc5f1aeb591653e39a0950040b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcca68f18efaa24807148b3a690467322f30fc5f1aeb591653e39a0950040b15->enter($__internal_dcca68f18efaa24807148b3a690467322f30fc5f1aeb591653e39a0950040b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:nav_inc:utilisateurs.html.twig"));

        $__internal_391caa4b4ccc40e00d812608488840871a9e28eb4df2f0d5ab765ec182828f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391caa4b4ccc40e00d812608488840871a9e28eb4df2f0d5ab765ec182828f6f->enter($__internal_391caa4b4ccc40e00d812608488840871a9e28eb4df2f0d5ab765ec182828f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:nav_inc:utilisateurs.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </li>
    </ul>
</div>
";
        
        $__internal_dcca68f18efaa24807148b3a690467322f30fc5f1aeb591653e39a0950040b15->leave($__internal_dcca68f18efaa24807148b3a690467322f30fc5f1aeb591653e39a0950040b15_prof);

        
        $__internal_391caa4b4ccc40e00d812608488840871a9e28eb4df2f0d5ab765ec182828f6f->leave($__internal_391caa4b4ccc40e00d812608488840871a9e28eb4df2f0d5ab765ec182828f6f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:nav_inc:utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a>
        </li>
    </ul>
</div>
", "UserBundle:nav_inc:utilisateurs.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/nav_inc/utilisateurs.html.twig");
    }
}
