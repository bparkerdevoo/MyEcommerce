<?php

/* MSFBundle:Ecommerce/inc:promo_panier.html.twig */
class __TwigTemplate_bdb515e84434f359b3df92a96f5d3f3176b7de09f31d16b9995ee913f1814b4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Layout.html.twig", "MSFBundle:Ecommerce/inc:promo_panier.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f065d3cb97ad9e3304c0b72c5cf3eeee9f2dba3fc70b674810afaae86a6ca64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f065d3cb97ad9e3304c0b72c5cf3eeee9f2dba3fc70b674810afaae86a6ca64->enter($__internal_1f065d3cb97ad9e3304c0b72c5cf3eeee9f2dba3fc70b674810afaae86a6ca64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Ecommerce/inc:promo_panier.html.twig"));

        $__internal_8781a12f35ee174a4bea002fdf5546381a59d5bf862ffdbb3337b724beb51f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8781a12f35ee174a4bea002fdf5546381a59d5bf862ffdbb3337b724beb51f8b->enter($__internal_8781a12f35ee174a4bea002fdf5546381a59d5bf862ffdbb3337b724beb51f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Ecommerce/inc:promo_panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f065d3cb97ad9e3304c0b72c5cf3eeee9f2dba3fc70b674810afaae86a6ca64->leave($__internal_1f065d3cb97ad9e3304c0b72c5cf3eeee9f2dba3fc70b674810afaae86a6ca64_prof);

        
        $__internal_8781a12f35ee174a4bea002fdf5546381a59d5bf862ffdbb3337b724beb51f8b->leave($__internal_8781a12f35ee174a4bea002fdf5546381a59d5bf862ffdbb3337b724beb51f8b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f0493dddfd385f8bf1c923748946a7cc865c38a06ea1695afc37ba05efec576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0493dddfd385f8bf1c923748946a7cc865c38a06ea1695afc37ba05efec576->enter($__internal_5f0493dddfd385f8bf1c923748946a7cc865c38a06ea1695afc37ba05efec576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bbd18fcf623987344896cd292468f8b787dbc3fa07ed72f8e3b086f1627a89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbd18fcf623987344896cd292468f8b787dbc3fa07ed72f8e3b086f1627a89d->enter($__internal_2bbd18fcf623987344896cd292468f8b787dbc3fa07ed72f8e3b086f1627a89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 7
        $this->loadTemplate("::layout/modulesUsed/nav.html.twig", "MSFBundle:Ecommerce/inc:promo_panier.html.twig", 7)->display($context);
        // line 8
        echo "            </div>
            <div class=\"span9\">
                <h2>Votre panier</h2>

offre promotionnnel à l'occasion de \"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["evenement"]) || array_key_exists("evenement", $context) ? $context["evenement"] : (function () { throw new Twig_Error_Runtime('Variable "evenement" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "\": ";
        echo twig_escape_filter($this->env, (isset($context["code"]) || array_key_exists("code", $context) ? $context["code"] : (function () { throw new Twig_Error_Runtime('Variable "code" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "

                <div class=\"clearfix\">

                </div>
                <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validation");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue_composition");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>
     ";
        
        $__internal_2bbd18fcf623987344896cd292468f8b787dbc3fa07ed72f8e3b086f1627a89d->leave($__internal_2bbd18fcf623987344896cd292468f8b787dbc3fa07ed72f8e3b086f1627a89d_prof);

        
        $__internal_5f0493dddfd385f8bf1c923748946a7cc865c38a06ea1695afc37ba05efec576->leave($__internal_5f0493dddfd385f8bf1c923748946a7cc865c38a06ea1695afc37ba05efec576_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Ecommerce/inc:promo_panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  76 => 18,  68 => 13,  62 => 12,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Layout.html.twig\" %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                {% include \"::layout/modulesUsed/nav.html.twig\" %}
            </div>
            <div class=\"span9\">
                <h2>Votre panier</h2>

offre promotionnnel à l'occasion de \"{{ evenement }}\": {{ code }}
{{ dump() }}

                <div class=\"clearfix\">

                </div>
                <a href=\"{{ path('validation')}}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"{{ path('catalogue_composition') }}\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>
     {% endblock %}
", "MSFBundle:Ecommerce/inc:promo_panier.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Ecommerce/inc/promo_panier.html.twig");
    }
}
