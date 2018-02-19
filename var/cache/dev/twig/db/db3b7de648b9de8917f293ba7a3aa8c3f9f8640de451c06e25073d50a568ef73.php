<?php

/* UserBundle:modules:ajoutClient.html.twig */
class __TwigTemplate_e2008d1e72f4a4e1888d4c8dec8fabfb2d002b7099e8c33673a4ba97d9eb930b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Layout.html.twig", "UserBundle:modules:ajoutClient.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf0295f77a2abe10ae112bea651088340b27bd1bf86bd6bdd48fee49f0502564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0295f77a2abe10ae112bea651088340b27bd1bf86bd6bdd48fee49f0502564->enter($__internal_cf0295f77a2abe10ae112bea651088340b27bd1bf86bd6bdd48fee49f0502564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:modules:ajoutClient.html.twig"));

        $__internal_440e600d811c978bb0ee1ed493119f85dbabc3f1f1c218b11569e07e07b4474f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440e600d811c978bb0ee1ed493119f85dbabc3f1f1c218b11569e07e07b4474f->enter($__internal_440e600d811c978bb0ee1ed493119f85dbabc3f1f1c218b11569e07e07b4474f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:modules:ajoutClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf0295f77a2abe10ae112bea651088340b27bd1bf86bd6bdd48fee49f0502564->leave($__internal_cf0295f77a2abe10ae112bea651088340b27bd1bf86bd6bdd48fee49f0502564_prof);

        
        $__internal_440e600d811c978bb0ee1ed493119f85dbabc3f1f1c218b11569e07e07b4474f->leave($__internal_440e600d811c978bb0ee1ed493119f85dbabc3f1f1c218b11569e07e07b4474f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1335bc41c8046eed5b9a70729c41366099eb1e6f4019ae098e7298ce30793074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1335bc41c8046eed5b9a70729c41366099eb1e6f4019ae098e7298ce30793074->enter($__internal_1335bc41c8046eed5b9a70729c41366099eb1e6f4019ae098e7298ce30793074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3031200c439d32155a211b72b5418e3217598ed6cff1eac2f360f0f27b0e6e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3031200c439d32155a211b72b5418e3217598ed6cff1eac2f360f0f27b0e6e06->enter($__internal_3031200c439d32155a211b72b5418e3217598ed6cff1eac2f360f0f27b0e6e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 8
        $this->loadTemplate("UserBundle:nav_inc:utilisateursConnecte.html.twig", "UserBundle:modules:ajoutClient.html.twig", 8)->display($context);
        // line 9
        echo "            </div>

            <div class=\"span7\">
                <h1>
                    Espace Client
                </h1>
            </div>
            <div class=\"row\">

                <div class=\"span5\">
                    <h3>Mes Informations</h3>
                </div>
            </div>

        </div>

        <div class=\"row\">

            <div class=\"span8 offset3\">
                <div class=\"form-group\">

                        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'form_start', array("attr" => array("novalidate" => "novalidate", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("information_client"), "method" => "post")));
        // line 34
        echo "
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), 'errors');
        echo "


                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), 'widget');
        echo "
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter"), "html", null, true);
        echo "\" />

                        ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), 'form_end');
        echo "

                </div>

            </div>

        </div>
        <hr>
    </div>
    <div class=\"row\">
        <div class=\"span12\">
            <h3>Produits favoris</h3>
            <ul class=\"thumbnails\">
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 55
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_spray.jpg"), "html", null, true);
            echo "\" alt=\"MSF\" width=\"200\" height=\"200\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 €</p>
                                <a class=\"btn btn-primary\" href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("brochure");
            echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"";
            // line 62
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
        // line 68
        echo "
            </ul>
            <hr>
        </div>

        <div class=\"span12\">

            <h3>Produits recemment consultés</h3>
            <ul class=\"thumbnails\">
                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 78
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_spray.jpg"), "html", null, true);
            echo "\" alt=\"MSF\" width=\"200\" height=\"200\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 €</p>
                                <a class=\"btn btn-primary\" href=\"";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("brochure");
            echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"";
            // line 85
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
        // line 91
        echo "
            </ul>
        </div>
        <div class=\"span12\">
            <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>

        </div>
    </div>
";
        
        $__internal_3031200c439d32155a211b72b5418e3217598ed6cff1eac2f360f0f27b0e6e06->leave($__internal_3031200c439d32155a211b72b5418e3217598ed6cff1eac2f360f0f27b0e6e06_prof);

        
        $__internal_1335bc41c8046eed5b9a70729c41366099eb1e6f4019ae098e7298ce30793074->leave($__internal_1335bc41c8046eed5b9a70729c41366099eb1e6f4019ae098e7298ce30793074_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:modules:ajoutClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 91,  177 => 85,  173 => 84,  166 => 80,  162 => 78,  158 => 77,  147 => 68,  135 => 62,  131 => 61,  124 => 57,  120 => 55,  116 => 54,  100 => 41,  95 => 39,  91 => 38,  85 => 35,  82 => 34,  80 => 30,  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":Layout.html.twig\" %}

{% block body %}

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                {% include 'UserBundle:nav_inc:utilisateursConnecte.html.twig' %}
            </div>

            <div class=\"span7\">
                <h1>
                    Espace Client
                </h1>
            </div>
            <div class=\"row\">

                <div class=\"span5\">
                    <h3>Mes Informations</h3>
                </div>
            </div>

        </div>

        <div class=\"row\">

            <div class=\"span8 offset3\">
                <div class=\"form-group\">

                        {{ form_start(form, {'attr': {
                                                    'novalidate': 'novalidate',
                                                    'action' : path('information_client'),
                                                    'method':'post'}})
                        }}
                            {{ form_errors(form)}}


                        {{ form_widget(form) }}
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'Ajouter'|trans }}\" />

                        {{ form_end(form) }}

                </div>

            </div>

        </div>
        <hr>
    </div>
    <div class=\"row\">
        <div class=\"span12\">
            <h3>Produits favoris</h3>
            <ul class=\"thumbnails\">
                {% for i in 0..3 %}
                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"{{ asset('img/msf_spray.jpg') }}\" alt=\"MSF\" width=\"200\" height=\"200\">
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
        </div>

        <div class=\"span12\">

            <h3>Produits recemment consultés</h3>
            <ul class=\"thumbnails\">
                {% for i in 0..3 %}
                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"{{ asset('img/msf_spray.jpg') }}\" alt=\"MSF\" width=\"200\" height=\"200\">
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
        </div>
        <div class=\"span12\">
            <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
            </div>

        </div>
    </div>
{% endblock %}", "UserBundle:modules:ajoutClient.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/modules/ajoutClient.html.twig");
    }
}
