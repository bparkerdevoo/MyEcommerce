<?php

/* MSFBundle:Page/inc:catalogue_parfum.html.twig */
class __TwigTemplate_2864efe17c833f87722d009f3c09e1a082cbd40b556b5cbb59cd796f61ea0152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'parfum' => array($this, 'block_parfum'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca942d320cc966a9256ab4dc555dbea68603e1482ba1dbb8838d37830ac7bf6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca942d320cc966a9256ab4dc555dbea68603e1482ba1dbb8838d37830ac7bf6d->enter($__internal_ca942d320cc966a9256ab4dc555dbea68603e1482ba1dbb8838d37830ac7bf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page/inc:catalogue_parfum.html.twig"));

        $__internal_4967f820bae1127fb8f99644c80d00ceeb8c128c55226f933f47d3305dfacb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4967f820bae1127fb8f99644c80d00ceeb8c128c55226f933f47d3305dfacb9a->enter($__internal_4967f820bae1127fb8f99644c80d00ceeb8c128c55226f933f47d3305dfacb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page/inc:catalogue_parfum.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('parfum', $context, $blocks);
        
        $__internal_ca942d320cc966a9256ab4dc555dbea68603e1482ba1dbb8838d37830ac7bf6d->leave($__internal_ca942d320cc966a9256ab4dc555dbea68603e1482ba1dbb8838d37830ac7bf6d_prof);

        
        $__internal_4967f820bae1127fb8f99644c80d00ceeb8c128c55226f933f47d3305dfacb9a->leave($__internal_4967f820bae1127fb8f99644c80d00ceeb8c128c55226f933f47d3305dfacb9a_prof);

    }

    public function block_parfum($context, array $blocks = array())
    {
        $__internal_2a6e810fa0fcba3268d5970cfb48c4c8814913bcc33a8945149bb955f76303d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6e810fa0fcba3268d5970cfb48c4c8814913bcc33a8945149bb955f76303d9->enter($__internal_2a6e810fa0fcba3268d5970cfb48c4c8814913bcc33a8945149bb955f76303d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "parfum"));

        $__internal_5a6999f97a4ae6f99ac1c094954ee08bcecb11e4b1b880b3bb4620873c20ec45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6999f97a4ae6f99ac1c094954ee08bcecb11e4b1b880b3bb4620873c20ec45->enter($__internal_5a6999f97a4ae6f99ac1c094954ee08bcecb11e4b1b880b3bb4620873c20ec45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "parfum"));

        // line 3
        echo "    <hr>
    <h3>Nos Essences</h3>
    <ul class=\"thumbnails\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "            <li class=\"span2\">
                <div class=\"thumbnail\">
                    <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_spray.jpg"), "html", null, true);
            echo "\" alt=\"MSF\" width=\"300\" height=\"300\">
                    <div class=\"caption\">
                        <h4>Thumbnail label</h4>
                        <p>100,00 €</p>
                        <a class=\"btn btn-primary\" href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("brochure");
            echo "\">Plus d'infos</a>
                        <a class=\"btn btn-success\" href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
            echo "\">Ajouter au panier</a>
                    </div>
                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    </ul>
    <hr>
";
        
        $__internal_5a6999f97a4ae6f99ac1c094954ee08bcecb11e4b1b880b3bb4620873c20ec45->leave($__internal_5a6999f97a4ae6f99ac1c094954ee08bcecb11e4b1b880b3bb4620873c20ec45_prof);

        
        $__internal_2a6e810fa0fcba3268d5970cfb48c4c8814913bcc33a8945149bb955f76303d9->leave($__internal_2a6e810fa0fcba3268d5970cfb48c4c8814913bcc33a8945149bb955f76303d9_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Page/inc:catalogue_parfum.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  71 => 14,  67 => 13,  60 => 9,  56 => 7,  52 => 6,  47 => 3,  29 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block parfum %}
    <hr>
    <h3>Nos Essences</h3>
    <ul class=\"thumbnails\">
        {% for i in 0..5 %}
            <li class=\"span2\">
                <div class=\"thumbnail\">
                    <img src=\"{{ asset('img/msf_spray.jpg') }}\" alt=\"MSF\" width=\"300\" height=\"300\">
                    <div class=\"caption\">
                        <h4>Thumbnail label</h4>
                        <p>100,00 €</p>
                        <a class=\"btn btn-primary\" href=\"{{ path('brochure') }}\">Plus d'infos</a>
                        <a class=\"btn btn-success\" href=\"{{ path('panier') }}\">Ajouter au panier</a>
                    </div>
                </div>
            </li>
        {% endfor %}

    </ul>
    <hr>
{% endblock %}", "MSFBundle:Page/inc:catalogue_parfum.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Page/inc/catalogue_parfum.html.twig");
    }
}
