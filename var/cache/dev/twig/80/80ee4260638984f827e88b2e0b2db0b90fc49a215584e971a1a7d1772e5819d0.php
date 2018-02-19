<?php

/* MSFBundle:Page/inc:catalogue_composition.html.twig */
class __TwigTemplate_f3cf3ef0464ce31027536dab6581a8bd3ba936e3ba255e55ff3f746e31510040 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'composition' => array($this, 'block_composition'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b8f4d767ddc14f71429664246638bb3a4efbfa3f00e3d231c2790830b1fa28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8f4d767ddc14f71429664246638bb3a4efbfa3f00e3d231c2790830b1fa28b->enter($__internal_7b8f4d767ddc14f71429664246638bb3a4efbfa3f00e3d231c2790830b1fa28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page/inc:catalogue_composition.html.twig"));

        $__internal_e7c4a0dcd296917cf4dc4496a6ac94216a0ce2a92b9540f96cbf3c89440b5a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c4a0dcd296917cf4dc4496a6ac94216a0ce2a92b9540f96cbf3c89440b5a3c->enter($__internal_e7c4a0dcd296917cf4dc4496a6ac94216a0ce2a92b9540f96cbf3c89440b5a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page/inc:catalogue_composition.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('composition', $context, $blocks);
        
        $__internal_7b8f4d767ddc14f71429664246638bb3a4efbfa3f00e3d231c2790830b1fa28b->leave($__internal_7b8f4d767ddc14f71429664246638bb3a4efbfa3f00e3d231c2790830b1fa28b_prof);

        
        $__internal_e7c4a0dcd296917cf4dc4496a6ac94216a0ce2a92b9540f96cbf3c89440b5a3c->leave($__internal_e7c4a0dcd296917cf4dc4496a6ac94216a0ce2a92b9540f96cbf3c89440b5a3c_prof);

    }

    public function block_composition($context, array $blocks = array())
    {
        $__internal_e27432216f6a0de71218f1ce0b99faf3d611b12b1ada78804df5bd1f53cfe888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e27432216f6a0de71218f1ce0b99faf3d611b12b1ada78804df5bd1f53cfe888->enter($__internal_e27432216f6a0de71218f1ce0b99faf3d611b12b1ada78804df5bd1f53cfe888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "composition"));

        $__internal_e8fdcb94b9f3f88a492919a420c1dd6f77f9104a0599e9885c10c3f7c803fdd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fdcb94b9f3f88a492919a420c1dd6f77f9104a0599e9885c10c3f7c803fdd4->enter($__internal_e8fdcb94b9f3f88a492919a420c1dd6f77f9104a0599e9885c10c3f7c803fdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "composition"));

        // line 3
        echo "    <hr>
                <h3>Inspirez vous de nos compositions</h3>
                <ul class=\"thumbnails\">
                    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 7
            echo "                        <li class=\"span2\">
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suggestion");
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
        
        $__internal_e8fdcb94b9f3f88a492919a420c1dd6f77f9104a0599e9885c10c3f7c803fdd4->leave($__internal_e8fdcb94b9f3f88a492919a420c1dd6f77f9104a0599e9885c10c3f7c803fdd4_prof);

        
        $__internal_e27432216f6a0de71218f1ce0b99faf3d611b12b1ada78804df5bd1f53cfe888->leave($__internal_e27432216f6a0de71218f1ce0b99faf3d611b12b1ada78804df5bd1f53cfe888_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Page/inc:catalogue_composition.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  71 => 14,  67 => 13,  60 => 9,  56 => 7,  52 => 6,  47 => 3,  29 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% block composition %}
    <hr>
                <h3>Inspirez vous de nos compositions</h3>
                <ul class=\"thumbnails\">
                    {% for i in 0..5 %}
                        <li class=\"span2\">
                            <div class=\"thumbnail\">
                                <img src=\"{{ asset('img/msf_spray.jpg') }}\" alt=\"MSF\" width=\"300\" height=\"300\">
                                <div class=\"caption\">
                                    <h4>Thumbnail label</h4>
                                    <p>100,00 €</p>
                                    <a class=\"btn btn-primary\" href=\"{{ path('suggestion') }}\">Plus d'infos</a>
                                    <a class=\"btn btn-success\" href=\"{{ path('panier') }}\">Ajouter au panier</a>
                                </div>
                            </div>
                        </li>
                    {% endfor %}

                </ul>
    <hr>
{% endblock %}", "MSFBundle:Page/inc:catalogue_composition.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Page/inc/catalogue_composition.html.twig");
    }
}
