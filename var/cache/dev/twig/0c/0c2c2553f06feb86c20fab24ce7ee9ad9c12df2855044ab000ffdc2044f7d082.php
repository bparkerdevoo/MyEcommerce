<?php

/* UserBundle:nav_inc:utilisateursConnecte.html.twig */
class __TwigTemplate_de316514632f67eaf4606c69eb6795aa576e8563786687e111263c3b0e220030 extends Twig_Template
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
        $__internal_e882b3876c7bbff3f087611181d81dea8cc8bcbf7be311fb9838febb2ff1429d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e882b3876c7bbff3f087611181d81dea8cc8bcbf7be311fb9838febb2ff1429d->enter($__internal_e882b3876c7bbff3f087611181d81dea8cc8bcbf7be311fb9838febb2ff1429d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:nav_inc:utilisateursConnecte.html.twig"));

        $__internal_42240e97834b47dcc9ad4c622f0e4f864a685334c8a88e3e917ca04c23a8d422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42240e97834b47dcc9ad4c622f0e4f864a685334c8a88e3e917ca04c23a8d422->enter($__internal_42240e97834b47dcc9ad4c622f0e4f864a685334c8a88e3e917ca04c23a8d422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:nav_inc:utilisateursConnecte.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">...Mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("information_client");
        echo "\">Editer Mes informations client</a>
        </li>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Changer Mot de pass</a>
        </li>
        <li>
            <a href=\"facture.php\">Mes factures</a>
        </li>
        <li>
            <a href=\"adresses.php\">Mes adresses</a>
        </li>
        <li>
            <a href=\"mon-compte.php\">Mes favoris</a>
        </li>
        <li>
            <a href=\"mon-compte.php\">Mes compositions</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Deconnexion</a>
        </li>
    </ul>
</div>
";
        
        $__internal_e882b3876c7bbff3f087611181d81dea8cc8bcbf7be311fb9838febb2ff1429d->leave($__internal_e882b3876c7bbff3f087611181d81dea8cc8bcbf7be311fb9838febb2ff1429d_prof);

        
        $__internal_42240e97834b47dcc9ad4c622f0e4f864a685334c8a88e3e917ca04c23a8d422->leave($__internal_42240e97834b47dcc9ad4c622f0e4f864a685334c8a88e3e917ca04c23a8d422_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:nav_inc:utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 28,  48 => 13,  42 => 10,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"{{ path('fos_user_profile_show') }}\">Mes informations</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_profile_edit') }}\">...Mes informations</a>
        </li>
        <li>
            <a href=\"{{ path('information_client') }}\">Editer Mes informations client</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_change_password') }}\">Changer Mot de pass</a>
        </li>
        <li>
            <a href=\"facture.php\">Mes factures</a>
        </li>
        <li>
            <a href=\"adresses.php\">Mes adresses</a>
        </li>
        <li>
            <a href=\"mon-compte.php\">Mes favoris</a>
        </li>
        <li>
            <a href=\"mon-compte.php\">Mes compositions</a>
        </li>
        <li>
            <a href=\"{{ path('fos_user_security_logout') }}\">Deconnexion</a>
        </li>
    </ul>
</div>
", "UserBundle:nav_inc:utilisateursConnecte.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/nav_inc/utilisateursConnecte.html.twig");
    }
}
