<?php

/* MSFBundle:Factory:composition.html.twig */
class __TwigTemplate_6762b13efe5536bb2a13e833473e3d97c71f0f03f1570adc50b484ba4255b4c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout.html.twig", "MSFBundle:Factory:composition.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_314bc4e546e8d866bcbb84c09358cd8afa0e2bd077f6b3e815c98c2f22f1eb25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_314bc4e546e8d866bcbb84c09358cd8afa0e2bd077f6b3e815c98c2f22f1eb25->enter($__internal_314bc4e546e8d866bcbb84c09358cd8afa0e2bd077f6b3e815c98c2f22f1eb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Factory:composition.html.twig"));

        $__internal_25b05c2cfa625834a7c1209c3f38a79926709d3d11cb4481430a26a2c099e1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b05c2cfa625834a7c1209c3f38a79926709d3d11cb4481430a26a2c099e1d3->enter($__internal_25b05c2cfa625834a7c1209c3f38a79926709d3d11cb4481430a26a2c099e1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Factory:composition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_314bc4e546e8d866bcbb84c09358cd8afa0e2bd077f6b3e815c98c2f22f1eb25->leave($__internal_314bc4e546e8d866bcbb84c09358cd8afa0e2bd077f6b3e815c98c2f22f1eb25_prof);

        
        $__internal_25b05c2cfa625834a7c1209c3f38a79926709d3d11cb4481430a26a2c099e1d3->leave($__internal_25b05c2cfa625834a7c1209c3f38a79926709d3d11cb4481430a26a2c099e1d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06665842a4b5beae8c008ba195140316d567f9cb591451c4eca10bce8144be27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06665842a4b5beae8c008ba195140316d567f9cb591451c4eca10bce8144be27->enter($__internal_06665842a4b5beae8c008ba195140316d567f9cb591451c4eca10bce8144be27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6bf5f8a19aff4e1d5199a5a6e7fc7f36ac1a5f946f58a77fb8714ac9009d91b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf5f8a19aff4e1d5199a5a6e7fc7f36ac1a5f946f58a77fb8714ac9009d91b3->enter($__internal_6bf5f8a19aff4e1d5199a5a6e7fc7f36ac1a5f946f58a77fb8714ac9009d91b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 7
        $this->loadTemplate("::layout/modulesUsed/nav.html.twig", "MSFBundle:Factory:composition.html.twig", 7)->display($context);
        // line 8
        echo "            </div>
            <div class=\"span12\">
                <H1>Nos suggestion de composition</H1>
                <div class=\"span12\">
                    <div class=\"row\">
                        <hr>
                    </div>
                </div>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["suggestions"]);
        foreach ($context['_seq'] as $context["_key"] => $context["suggestions"]) {
            // line 17
            echo "                <div class=\"span6\">
                    <H2>Ambiance ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["suggestions"], "idParfum", array()), "html", null, true);
            echo " </H2>
                    <div class=\"3\">
                        <h4>description: ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["suggestions"], "idSupport", array()), "html", null, true);
            echo "</h4>
                            <h4>parfum: ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["suggestions"], "idCustom", array()), "html", null, true);
            echo "</h4>
                                <h4>support: ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["suggestions"], "idSupport", array()), "html", null, true);
            echo "</h4>


                    </div>
                </div>
                <div class=\"span2\">
                    <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_spray.jpg"), "html", null, true);
            echo "\" alt=\"MSF\" width=\"300\" height=\"300\">
                </div>
                <div class=\"span2\">
                    <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_spray.jpg"), "html", null, true);
            echo "\" alt=\"MSF\" width=\"300\" height=\"300\">
                </div>
                <div class=\"span12\">
                    <div class=\"row\">
                        <div class=\"span6\">
                            <h4>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["suggestions"], "idSupport", array()), "html", null, true);
            echo " et ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["suggestions"], "idSupport", array()), "html", null, true);
            echo "</h4>
                            <h5>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["suggestions"], "idSupport", array()), "html", null, true);
            echo "</h5>
                            <p>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["suggestions"], "idSupport", array()), "html", null, true);
            echo "</p>
                            <h4>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["suggestions"], "prix", array()), "html", null, true);
            echo "</h4>
                            <form action=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
            echo "\">


                                <select name=\"qte\" class=\"span1\">
                                    <option>1</option>
                                </select>

                                <div>
                                    <button class=\"btn btn-primary\">Ajouter au panier</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suggestions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
                <div class=\"span12\">
                    <div class=\"row\">
                        <hr>
                    </div>
                </div>

            </div>
            <div class=\"span12\">
                <div class=\"row\">
                    <hr>
                </div>
            </div>
    <div class=\"span12\">
        <div class=\"row\">
            <H1>Recemment consulté</H1>

        </div>
    </div>
            <div class=\"span12\">
                <div class=\"row\">
                    <hr>
                </div>
            </div>
            <div class=\"span12\">
                <div class=\"row\">

                    <div class=\"span4\">
                        <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_spray.jpg"), "html", null, true);
        echo "\" alt=\"MSF\" width=\"300\" height=\"300\">
                    </div>

                    <div class=\"span6\">
                        <h4>Item Brand and Category</h4>
                        <h5>AB29837 Item Model</h5>
                        <p>PRÉSENTATION DU PRODUITS.</p>
                        <h4>23.33€</h4>
                        <form action=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("panier");
        echo "\">


                            <select name=\"qte\" class=\"span1\">
                                <option>1</option>
                            </select>

                            <div>
                                <button class=\"btn btn-primary\">Ajouter au panier</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>
";
        
        $__internal_6bf5f8a19aff4e1d5199a5a6e7fc7f36ac1a5f946f58a77fb8714ac9009d91b3->leave($__internal_6bf5f8a19aff4e1d5199a5a6e7fc7f36ac1a5f946f58a77fb8714ac9009d91b3_prof);

        
        $__internal_06665842a4b5beae8c008ba195140316d567f9cb591451c4eca10bce8144be27->leave($__internal_06665842a4b5beae8c008ba195140316d567f9cb591451c4eca10bce8144be27_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Factory:composition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 93,  180 => 85,  150 => 57,  127 => 40,  123 => 39,  119 => 38,  115 => 37,  109 => 36,  101 => 31,  95 => 28,  86 => 22,  82 => 21,  78 => 20,  73 => 18,  70 => 17,  66 => 16,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout.html.twig\" %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                {% include \"::layout/modulesUsed/nav.html.twig\" %}
            </div>
            <div class=\"span12\">
                <H1>Nos suggestion de composition</H1>
                <div class=\"span12\">
                    <div class=\"row\">
                        <hr>
                    </div>
                </div>
    {% for suggestions in suggestions %}
                <div class=\"span6\">
                    <H2>Ambiance {{ suggestions.idParfum }} </H2>
                    <div class=\"3\">
                        <h4>description: {{ suggestions.idSupport }}</h4>
                            <h4>parfum: {{ suggestions.idCustom }}</h4>
                                <h4>support: {{ suggestions.idSupport }}</h4>


                    </div>
                </div>
                <div class=\"span2\">
                    <img src=\"{{ asset('img/msf_spray.jpg') }}\" alt=\"MSF\" width=\"300\" height=\"300\">
                </div>
                <div class=\"span2\">
                    <img src=\"{{ asset('img/msf_spray.jpg') }}\" alt=\"MSF\" width=\"300\" height=\"300\">
                </div>
                <div class=\"span12\">
                    <div class=\"row\">
                        <div class=\"span6\">
                            <h4>{{ suggestions.idSupport }} et {{ suggestions.idSupport }}</h4>
                            <h5>{{ suggestions.idSupport }}</h5>
                            <p>{{ suggestions.idSupport }}</p>
                            <h4>{{ suggestions.prix }}</h4>
                            <form action=\"{{ path('panier') }}\">


                                <select name=\"qte\" class=\"span1\">
                                    <option>1</option>
                                </select>

                                <div>
                                    <button class=\"btn btn-primary\">Ajouter au panier</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

      {% endfor %}

                <div class=\"span12\">
                    <div class=\"row\">
                        <hr>
                    </div>
                </div>

            </div>
            <div class=\"span12\">
                <div class=\"row\">
                    <hr>
                </div>
            </div>
    <div class=\"span12\">
        <div class=\"row\">
            <H1>Recemment consulté</H1>

        </div>
    </div>
            <div class=\"span12\">
                <div class=\"row\">
                    <hr>
                </div>
            </div>
            <div class=\"span12\">
                <div class=\"row\">

                    <div class=\"span4\">
                        <img src=\"{{ asset('img/msf_spray.jpg') }}\" alt=\"MSF\" width=\"300\" height=\"300\">
                    </div>

                    <div class=\"span6\">
                        <h4>Item Brand and Category</h4>
                        <h5>AB29837 Item Model</h5>
                        <p>PRÉSENTATION DU PRODUITS.</p>
                        <h4>23.33€</h4>
                        <form action=\"{{ path('panier') }}\">


                            <select name=\"qte\" class=\"span1\">
                                <option>1</option>
                            </select>

                            <div>
                                <button class=\"btn btn-primary\">Ajouter au panier</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>
{% endblock %}", "MSFBundle:Factory:composition.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Factory/composition.html.twig");
    }
}
