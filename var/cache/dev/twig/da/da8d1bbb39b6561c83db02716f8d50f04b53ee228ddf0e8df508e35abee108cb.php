<?php

/* ::layout/modulesUsed/nav.html.twig */
class __TwigTemplate_b700e25532b007e4eaaabe55af8834b3367423070c67d91e0d6f3bc9dc5bd061 extends Twig_Template
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
        $__internal_cb2a16c751825e75a905de14087fe0080eafa2dd08e7759f6e1ddd5b070bc34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2a16c751825e75a905de14087fe0080eafa2dd08e7759f6e1ddd5b070bc34b->enter($__internal_cb2a16c751825e75a905de14087fe0080eafa2dd08e7759f6e1ddd5b070bc34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/modulesUsed/nav.html.twig"));

        $__internal_e71e5fa2049ad3df1f15ed083a9b3b3c1b810ec0b29994863d5e4fcdd6dae4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71e5fa2049ad3df1f15ed083a9b3b3c1b810ec0b29994863d5e4fcdd6dae4a4->enter($__internal_e71e5fa2049ad3df1f15ed083a9b3b3c1b810ec0b29994863d5e4fcdd6dae4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/modulesUsed/nav.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_cb2a16c751825e75a905de14087fe0080eafa2dd08e7759f6e1ddd5b070bc34b->leave($__internal_cb2a16c751825e75a905de14087fe0080eafa2dd08e7759f6e1ddd5b070bc34b_prof);

        
        $__internal_e71e5fa2049ad3df1f15ed083a9b3b3c1b810ec0b29994863d5e4fcdd6dae4a4->leave($__internal_e71e5fa2049ad3df1f15ed083a9b3b3c1b810ec0b29994863d5e4fcdd6dae4a4_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_2d7100959bc0dbd59ba31088b585f4cf6a1494b8ee6d2ecbb98df32113351b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7100959bc0dbd59ba31088b585f4cf6a1494b8ee6d2ecbb98df32113351b4c->enter($__internal_2d7100959bc0dbd59ba31088b585f4cf6a1494b8ee6d2ecbb98df32113351b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5848b3562ba3ea14f259dd3730fe3bb41d3461277a40083d97598c410b147504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5848b3562ba3ea14f259dd3730fe3bb41d3461277a40083d97598c410b147504->enter($__internal_5848b3562ba3ea14f259dd3730fe3bb41d3461277a40083d97598c410b147504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
     <div class=\"span3\">
     <div class=\"well\">
            <ul class=\"nav nav-list\">
                <li class=\"nav-header\"> My Scent Factory</li>
                <li class=\"active\">
                    <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue");
        echo "\">Catalogue des Supports</a>
                </li>
                <li>
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue");
        echo "\">Catalogue des parfums</a>
                </li>
                <li>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue");
        echo "\">Les accessoires</a>
                </li>
                <li>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue");
        echo "\">Nos Suggestions</a>
                </li>
            </ul>
        </div>
    </div>

";
        
        $__internal_5848b3562ba3ea14f259dd3730fe3bb41d3461277a40083d97598c410b147504->leave($__internal_5848b3562ba3ea14f259dd3730fe3bb41d3461277a40083d97598c410b147504_prof);

        
        $__internal_2d7100959bc0dbd59ba31088b585f4cf6a1494b8ee6d2ecbb98df32113351b4c->leave($__internal_2d7100959bc0dbd59ba31088b585f4cf6a1494b8ee6d2ecbb98df32113351b4c_prof);

    }

    public function getTemplateName()
    {
        return "::layout/modulesUsed/nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  64 => 14,  58 => 11,  52 => 8,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}

     <div class=\"span3\">
     <div class=\"well\">
            <ul class=\"nav nav-list\">
                <li class=\"nav-header\"> My Scent Factory</li>
                <li class=\"active\">
                    <a href=\"{{ path('catalogue') }}\">Catalogue des Supports</a>
                </li>
                <li>
                    <a href=\"{{ path('catalogue') }}\">Catalogue des parfums</a>
                </li>
                <li>
                    <a href=\"{{ path('catalogue') }}\">Les accessoires</a>
                </li>
                <li>
                    <a href=\"{{ path('catalogue') }}\">Nos Suggestions</a>
                </li>
            </ul>
        </div>
    </div>

{% endblock %}
", "::layout/modulesUsed/nav.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/app/Resources/views/layout/modulesUsed/nav.html.twig");
    }
}
