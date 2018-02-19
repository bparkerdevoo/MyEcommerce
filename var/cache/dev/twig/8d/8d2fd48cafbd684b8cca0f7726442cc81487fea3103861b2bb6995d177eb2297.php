<?php

/* :layout:navigation.html.twig */
class __TwigTemplate_ff9f13641a3a1c4f20441eb1ee20b493669dd87a92aa227da71f7f3dd02f56f2 extends Twig_Template
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
        $__internal_7654657893080491200b7666de6c2749bd8876bd07cebbbc0b9a6a4bf9a09ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7654657893080491200b7666de6c2749bd8876bd07cebbbc0b9a6a4bf9a09ca2->enter($__internal_7654657893080491200b7666de6c2749bd8876bd07cebbbc0b9a6a4bf9a09ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:navigation.html.twig"));

        $__internal_1d2e3402da55a397fa307574ed63f426c34bb6d1aacb599beb086240f0134365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2e3402da55a397fa307574ed63f426c34bb6d1aacb599beb086240f0134365->enter($__internal_1d2e3402da55a397fa307574ed63f426c34bb6d1aacb599beb086240f0134365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:navigation.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_7654657893080491200b7666de6c2749bd8876bd07cebbbc0b9a6a4bf9a09ca2->leave($__internal_7654657893080491200b7666de6c2749bd8876bd07cebbbc0b9a6a4bf9a09ca2_prof);

        
        $__internal_1d2e3402da55a397fa307574ed63f426c34bb6d1aacb599beb086240f0134365->leave($__internal_1d2e3402da55a397fa307574ed63f426c34bb6d1aacb599beb086240f0134365_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_926dcbc6a0dccfba7e4478a5819d4e2cf975effb167edc13d5e17441d7d2a91b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926dcbc6a0dccfba7e4478a5819d4e2cf975effb167edc13d5e17441d7d2a91b->enter($__internal_926dcbc6a0dccfba7e4478a5819d4e2cf975effb167edc13d5e17441d7d2a91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6187e01956e9e1f1bf861a3d411f3344f91591a6f6d6347cf8e5db9b4ee9c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6187e01956e9e1f1bf861a3d411f3344f91591a6f6d6347cf8e5db9b4ee9c3f->enter($__internal_f6187e01956e9e1f1bf861a3d411f3344f91591a6f6d6347cf8e5db9b4ee9c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div class=\"span3\">
    <div class=\"well\">
        <div class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-shoping-cart fa-6x\"></i>
                3 item - 54,27 €
                <b class=\"caret\"></b></a>

            </a>

            <div class=\"dropdown-menu well\" role=\"menu\" aria-labelledby=\"dLabel\">
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\" class=\"btn btn-primary\">Mon Panier</a>
            </div>
        </div>
    </div>
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"connexion.php\">Se connecter</a>
            </li>
            <li>
                <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>
            </li>
        </ul>
    </div>


    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos produits</li>
            <li class=\"active\">
                <a href=\"#\"></a>
            </li>
            <li>
                <a href=\"#\"></a>
            </li>
        </ul>
    </div>
</div>
     ";
        
        $__internal_f6187e01956e9e1f1bf861a3d411f3344f91591a6f6d6347cf8e5db9b4ee9c3f->leave($__internal_f6187e01956e9e1f1bf861a3d411f3344f91591a6f6d6347cf8e5db9b4ee9c3f_prof);

        
        $__internal_926dcbc6a0dccfba7e4478a5819d4e2cf975effb167edc13d5e17441d7d2a91b->leave($__internal_926dcbc6a0dccfba7e4478a5819d4e2cf975effb167edc13d5e17441d7d2a91b_prof);

    }

    public function getTemplateName()
    {
        return ":layout:navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  60 => 16,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
<div class=\"span3\">
    <div class=\"well\">
        <div class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"fa fa-shoping-cart fa-6x\"></i>
                3 item - 54,27 €
                <b class=\"caret\"></b></a>

            </a>

            <div class=\"dropdown-menu well\" role=\"menu\" aria-labelledby=\"dLabel\">
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <a href=\"{{ path('panier') }}\" class=\"btn btn-primary\">Mon Panier</a>
            </div>
        </div>
    </div>
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"connexion.php\">Se connecter</a>
            </li>
            <li>
                <a href=\"{{ path('fos_user_registration_register') }}\" class=\"btn btn-primary\">S'inscrire</a>
            </li>
        </ul>
    </div>


    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos produits</li>
            <li class=\"active\">
                <a href=\"#\"></a>
            </li>
            <li>
                <a href=\"#\"></a>
            </li>
        </ul>
    </div>
</div>
     {% endblock %}
", ":layout:navigation.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/app/Resources/views/layout/navigation.html.twig");
    }
}
