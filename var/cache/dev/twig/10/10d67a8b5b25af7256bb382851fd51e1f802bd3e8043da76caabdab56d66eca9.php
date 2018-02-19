<?php

/* UserBundle:nav_inc:utilisateursConfirme.html.twig */
class __TwigTemplate_4baccbeec1e64a60233fe31ea2c378d33228f0ca2025e3d441de38d778b91f57 extends Twig_Template
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
        $__internal_e0f40f4eab952b43cbea74a835bb2add5fbcb85f3c84f145e3ba43102a623734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f40f4eab952b43cbea74a835bb2add5fbcb85f3c84f145e3ba43102a623734->enter($__internal_e0f40f4eab952b43cbea74a835bb2add5fbcb85f3c84f145e3ba43102a623734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:nav_inc:utilisateursConfirme.html.twig"));

        $__internal_5e009508201c255d8e5c0f2e05cbc967629a956249468e0762ba5f85656f0345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e009508201c255d8e5c0f2e05cbc967629a956249468e0762ba5f85656f0345->enter($__internal_5e009508201c255d8e5c0f2e05cbc967629a956249468e0762ba5f85656f0345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:nav_inc:utilisateursConfirme.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registered_login");
        echo "\">connexion</a>
        </li>

    </ul>
</div>
";
        
        $__internal_e0f40f4eab952b43cbea74a835bb2add5fbcb85f3c84f145e3ba43102a623734->leave($__internal_e0f40f4eab952b43cbea74a835bb2add5fbcb85f3c84f145e3ba43102a623734_prof);

        
        $__internal_5e009508201c255d8e5c0f2e05cbc967629a956249468e0762ba5f85656f0345->leave($__internal_5e009508201c255d8e5c0f2e05cbc967629a956249468e0762ba5f85656f0345_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:nav_inc:utilisateursConfirme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"{{ path('fos_user_registered_login') }}\">connexion</a>
        </li>

    </ul>
</div>
", "UserBundle:nav_inc:utilisateursConfirme.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/nav_inc/utilisateursConfirme.html.twig");
    }
}
