<?php

/* MSFBundle:Page/inc:catalogue_support.html.twig */
class __TwigTemplate_fd9b80a2eeb98434aef483da42c61b5d238cae9d799b6608b8b20f4931899872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'support' => array($this, 'block_support'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8efdb56d7df78239f958b333d58412b00388cedc26d19bdcb2e1665b98fd54f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8efdb56d7df78239f958b333d58412b00388cedc26d19bdcb2e1665b98fd54f->enter($__internal_b8efdb56d7df78239f958b333d58412b00388cedc26d19bdcb2e1665b98fd54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page/inc:catalogue_support.html.twig"));

        $__internal_1d587dc41a0c7aec2a295d3d0fa598775ddef265cf279bf69d3eadfea2411de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d587dc41a0c7aec2a295d3d0fa598775ddef265cf279bf69d3eadfea2411de8->enter($__internal_1d587dc41a0c7aec2a295d3d0fa598775ddef265cf279bf69d3eadfea2411de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page/inc:catalogue_support.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('support', $context, $blocks);
        
        $__internal_b8efdb56d7df78239f958b333d58412b00388cedc26d19bdcb2e1665b98fd54f->leave($__internal_b8efdb56d7df78239f958b333d58412b00388cedc26d19bdcb2e1665b98fd54f_prof);

        
        $__internal_1d587dc41a0c7aec2a295d3d0fa598775ddef265cf279bf69d3eadfea2411de8->leave($__internal_1d587dc41a0c7aec2a295d3d0fa598775ddef265cf279bf69d3eadfea2411de8_prof);

    }

    public function block_support($context, array $blocks = array())
    {
        $__internal_121bf2c317acb9d43c1e4695d1d1e784f0e06bef748f19c0a1e57e373d2620e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121bf2c317acb9d43c1e4695d1d1e784f0e06bef748f19c0a1e57e373d2620e8->enter($__internal_121bf2c317acb9d43c1e4695d1d1e784f0e06bef748f19c0a1e57e373d2620e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "support"));

        $__internal_0ea467f579c78954cb0698a32964caa940f93720e104c12a2f73a8822222f092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea467f579c78954cb0698a32964caa940f93720e104c12a2f73a8822222f092->enter($__internal_0ea467f579c78954cb0698a32964caa940f93720e104c12a2f73a8822222f092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "support"));

        // line 3
        echo "    <hr>
    <h3>Nos supports</h3>

    <ul class=\"thumbnails\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "            <li class=\"span2\">
                <div class=\"thumbnail\">
                    <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/holder.png"), "html", null, true);
            echo "\" alt=\"MSF\" width=\"300\" height=\"300\">
                    <div class=\"caption\">
                        <h4>Thumbnail label</h4>
                        <p>100,00 €</p>
                        <a class=\"btn btn-primary\" href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("brochure");
            echo "\">Plus d'infos</a>
                        <a class=\"btn btn-success\" href=\"";
            // line 15
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
        // line 20
        echo "
    </ul>
    <hr>
";
        
        $__internal_0ea467f579c78954cb0698a32964caa940f93720e104c12a2f73a8822222f092->leave($__internal_0ea467f579c78954cb0698a32964caa940f93720e104c12a2f73a8822222f092_prof);

        
        $__internal_121bf2c317acb9d43c1e4695d1d1e784f0e06bef748f19c0a1e57e373d2620e8->leave($__internal_121bf2c317acb9d43c1e4695d1d1e784f0e06bef748f19c0a1e57e373d2620e8_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Page/inc:catalogue_support.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  72 => 15,  68 => 14,  61 => 10,  57 => 8,  53 => 7,  47 => 3,  29 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block support %}
    <hr>
    <h3>Nos supports</h3>

    <ul class=\"thumbnails\">
        {% for i in 0..5 %}
            <li class=\"span2\">
                <div class=\"thumbnail\">
                    <img src=\"{{ asset('img/holder.png') }}\" alt=\"MSF\" width=\"300\" height=\"300\">
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
{% endblock %}", "MSFBundle:Page/inc:catalogue_support.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Page/inc/catalogue_support.html.twig");
    }
}
