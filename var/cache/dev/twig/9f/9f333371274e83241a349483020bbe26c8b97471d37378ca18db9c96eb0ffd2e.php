<?php

/* MSFBundle:Page/inc:catalogue_inc.html.twig */
class __TwigTemplate_788dee8a086afb690707abf02b05385327f267028dac530c62d688e236ca3d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'catalogue' => array($this, 'block_catalogue'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b759ec6afc23c32c4b2865740329a398cce5a81f3d4cc80a6b1fdff8543e51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b759ec6afc23c32c4b2865740329a398cce5a81f3d4cc80a6b1fdff8543e51a->enter($__internal_9b759ec6afc23c32c4b2865740329a398cce5a81f3d4cc80a6b1fdff8543e51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page/inc:catalogue_inc.html.twig"));

        $__internal_00a921270dbfe1e37a3a0e73413b68f3681a04a3a2102280eec2856277071bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a921270dbfe1e37a3a0e73413b68f3681a04a3a2102280eec2856277071bcd->enter($__internal_00a921270dbfe1e37a3a0e73413b68f3681a04a3a2102280eec2856277071bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page/inc:catalogue_inc.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('catalogue', $context, $blocks);
        
        $__internal_9b759ec6afc23c32c4b2865740329a398cce5a81f3d4cc80a6b1fdff8543e51a->leave($__internal_9b759ec6afc23c32c4b2865740329a398cce5a81f3d4cc80a6b1fdff8543e51a_prof);

        
        $__internal_00a921270dbfe1e37a3a0e73413b68f3681a04a3a2102280eec2856277071bcd->leave($__internal_00a921270dbfe1e37a3a0e73413b68f3681a04a3a2102280eec2856277071bcd_prof);

    }

    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_50cf62805bac445cb8fff1d9dfbc072a338556b4b05447536f64efd4989125e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50cf62805bac445cb8fff1d9dfbc072a338556b4b05447536f64efd4989125e4->enter($__internal_50cf62805bac445cb8fff1d9dfbc072a338556b4b05447536f64efd4989125e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_2fdb2e0379271b918f04066803198b82a7a4f8df42d3dada96718686546214d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdb2e0379271b918f04066803198b82a7a4f8df42d3dada96718686546214d2->enter($__internal_2fdb2e0379271b918f04066803198b82a7a4f8df42d3dada96718686546214d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 3
        echo "    <hr>
<h2> ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new Twig_Error_Runtime('Variable "categorie" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "</h2>                <ul class=\"thumbnails\">
                    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "                        <li class=\"span2\">
                            <div class=\"thumbnail\">
                                <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_spray.jpg"), "html", null, true);
            echo "\" alt=\"MSF\" width=\"300\" height=\"300\">
                                <div class=\"caption\">
                                    <h4>Thumbnail label</h4>
                                    <p>100,00 €</p>
                                    <a class=\"btn btn-primary\" href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("brochure");
            echo "\">Plus d'infos</a>
                                    <a class=\"btn btn-success\" href=\"";
            // line 13
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
        // line 18
        echo "
                </ul>
    <hr>
";
        
        $__internal_2fdb2e0379271b918f04066803198b82a7a4f8df42d3dada96718686546214d2->leave($__internal_2fdb2e0379271b918f04066803198b82a7a4f8df42d3dada96718686546214d2_prof);

        
        $__internal_50cf62805bac445cb8fff1d9dfbc072a338556b4b05447536f64efd4989125e4->leave($__internal_50cf62805bac445cb8fff1d9dfbc072a338556b4b05447536f64efd4989125e4_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Page/inc:catalogue_inc.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  73 => 13,  69 => 12,  62 => 8,  58 => 6,  54 => 5,  50 => 4,  47 => 3,  29 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block catalogue %}
    <hr>
<h2> {{ categorie }}</h2>                <ul class=\"thumbnails\">
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
{% endblock %}", "MSFBundle:Page/inc:catalogue_inc.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Page/inc/catalogue_inc.html.twig");
    }
}
