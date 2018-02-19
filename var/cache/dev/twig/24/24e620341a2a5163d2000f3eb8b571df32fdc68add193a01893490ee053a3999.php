<?php

/* MSFBundle:Ecommerce:panier.html.twig */
class __TwigTemplate_d647aaaa9e4b63ffbe5f8d9f6a1d6ef3fbe11250470983867d81af2bd96be176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout.html.twig", "MSFBundle:Ecommerce:panier.html.twig", 1);
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
        $__internal_734afa01f29b6c658c1187ed1d79949db34f3ae9ea508f7e39625c4a7c6f0268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734afa01f29b6c658c1187ed1d79949db34f3ae9ea508f7e39625c4a7c6f0268->enter($__internal_734afa01f29b6c658c1187ed1d79949db34f3ae9ea508f7e39625c4a7c6f0268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Ecommerce:panier.html.twig"));

        $__internal_787179ef42c5b4fc94ca2751466981b3e58827dc8ac01d6d29faa8ac23a2093d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787179ef42c5b4fc94ca2751466981b3e58827dc8ac01d6d29faa8ac23a2093d->enter($__internal_787179ef42c5b4fc94ca2751466981b3e58827dc8ac01d6d29faa8ac23a2093d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Ecommerce:panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_734afa01f29b6c658c1187ed1d79949db34f3ae9ea508f7e39625c4a7c6f0268->leave($__internal_734afa01f29b6c658c1187ed1d79949db34f3ae9ea508f7e39625c4a7c6f0268_prof);

        
        $__internal_787179ef42c5b4fc94ca2751466981b3e58827dc8ac01d6d29faa8ac23a2093d->leave($__internal_787179ef42c5b4fc94ca2751466981b3e58827dc8ac01d6d29faa8ac23a2093d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca7f286e82c55d0dc1d27e99cd3759c55aa02cf0865291c76a8eaa8f9611d1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7f286e82c55d0dc1d27e99cd3759c55aa02cf0865291c76a8eaa8f9611d1fa->enter($__internal_ca7f286e82c55d0dc1d27e99cd3759c55aa02cf0865291c76a8eaa8f9611d1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a58b22165490e666ee8b0a6c32ff21d19456e4e00f00df91e9563b61037258a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a58b22165490e666ee8b0a6c32ff21d19456e4e00f00df91e9563b61037258a1->enter($__internal_a58b22165490e666ee8b0a6c32ff21d19456e4e00f00df91e9563b61037258a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"span3\">
        ";
        // line 6
        $this->loadTemplate("::layout/modulesUsed/nav.html.twig", "MSFBundle:Ecommerce:panier.html.twig", 6)->display($context);
        // line 7
        echo "    </div>

    <div class=\"span4 offset3\">
        <h2>MON PANIER</h2>
    </div>
    <div class=\"row\">
        <div class=\"span10 offset2\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-bordered\">
                    <caption>Ma Composition  </caption>
                        ";
        // line 17
        if (array_key_exists("panier", $context)) {
            // line 18
            echo "                            <table class=\"table table-striped table-hover\">
                                <thead>

                                <tr>
                                    <th>img</th>
                                    <th>Références</th>
                                    <th>Nom</th>
                                    <th>Quantité</th>
                                    <th>Description</th>
                                    <th>Prix unitaire</th>
                                    <th>Total HT</th>
                                    <th>TVA</th>
                                    <th>*</th>

                                </tr>
                                </thead>
                                <tbody>
                                 ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 35, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["composition"]) {
                // line 36
                echo "
                                <tr>
                                    <td><img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["composition"], "photo", array()), "imageName", array()), "html", null, true);
                echo "\" alt=\"\"></td>
                                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["composition"], "produit", array()), "id", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["composition"], "produit", array()), "nom", array()), "html", null, true);
                echo "</td>
                                    <td>
                                        <form action=\"\">
                                            <input type=\"number\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["composition"], "quantite", array()), "html", null, true);
                echo "\" name=\"quantité\" >
                                            <input type=\"submit\" class=\"btn btn-default\" value=\"envoyer\"> </form>&nbsp

                                    </td>
                                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["composition"], "produit", array()), "description", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["composition"], "produit", array()), "prix", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["composition"], "produit", array()), "prix", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["composition"], "produit", array()), "tva", array()), "html", null, true);
                echo "</td>

                                    <td>
                                        <a href=\"#\"><i class=\"fa fa-refresh\"></i></a>
                                        <a href=\"#\"><i class=\"fa fa-trash\"></i></a>
                                    </td>

                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['composition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "

                                        <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                        <a href=\"#\"><i class=\"icon-trash\"></i></a>

                                </tbody>
                            </table>

                            ";
        }
        // line 68
        echo "            </div>
        </div>
    </div>
    <div class=\"row\">
        <hr>
    </div>

    </div>
    </div>

    ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 78, $this->getSourceContext()); })()));
        echo "

        <dl class=\"dl-horizontal pull-right\">
            <dt>Total HT :</dt>
            <dd>79,99€</dd>

            <dt>TVA :</dt>
            <dd>200€</dd>

            <dt>Total:</dt>
            <dd>99,99€</dd>
        </dl>
        <div class=\"clearfix\"></div>
        <a href=\"\" class=\"btn btn-success pull-right\">Valider mon panier</a>
        <a href=\"\" class=\"btn btn-primary\">Offre Promotionnelle</a>
        <a href=\"\" class=\"btn btn-primary\">Continuer mes achats</a>
    </div>

    <div class=\"span8\">


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
    </div>
";
        
        $__internal_a58b22165490e666ee8b0a6c32ff21d19456e4e00f00df91e9563b61037258a1->leave($__internal_a58b22165490e666ee8b0a6c32ff21d19456e4e00f00df91e9563b61037258a1_prof);

        
        $__internal_ca7f286e82c55d0dc1d27e99cd3759c55aa02cf0865291c76a8eaa8f9611d1fa->leave($__internal_ca7f286e82c55d0dc1d27e99cd3759c55aa02cf0865291c76a8eaa8f9611d1fa_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Ecommerce:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 78,  156 => 68,  145 => 59,  130 => 50,  126 => 49,  122 => 48,  118 => 47,  111 => 43,  105 => 40,  101 => 39,  96 => 38,  92 => 36,  88 => 35,  69 => 18,  67 => 17,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout.html.twig\" %}

{% block body %}

    <div class=\"span3\">
        {% include \"::layout/modulesUsed/nav.html.twig\" %}
    </div>

    <div class=\"span4 offset3\">
        <h2>MON PANIER</h2>
    </div>
    <div class=\"row\">
        <div class=\"span10 offset2\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-bordered\">
                    <caption>Ma Composition  </caption>
                        {% if panier is defined %}
                            <table class=\"table table-striped table-hover\">
                                <thead>

                                <tr>
                                    <th>img</th>
                                    <th>Références</th>
                                    <th>Nom</th>
                                    <th>Quantité</th>
                                    <th>Description</th>
                                    <th>Prix unitaire</th>
                                    <th>Total HT</th>
                                    <th>TVA</th>
                                    <th>*</th>

                                </tr>
                                </thead>
                                <tbody>
                                 {% for composition in panier %}

                                <tr>
                                    <td><img src=\"{{ asset('img/') }}{{ composition.photo.imageName }}\" alt=\"\"></td>
                                    <td>{{ composition.produit.id }}</td>
                                    <td>{{ composition.produit.nom }}</td>
                                    <td>
                                        <form action=\"\">
                                            <input type=\"number\" value=\"{{ composition.quantite }}\" name=\"quantité\" >
                                            <input type=\"submit\" class=\"btn btn-default\" value=\"envoyer\"> </form>&nbsp

                                    </td>
                                    <td>{{ composition.produit.description }}</td>
                                    <td>{{ composition.produit.prix }}</td>
                                    <td>{{ composition.produit.prix }}</td>
                                    <td>{{ composition.produit.tva }}</td>

                                    <td>
                                        <a href=\"#\"><i class=\"fa fa-refresh\"></i></a>
                                        <a href=\"#\"><i class=\"fa fa-trash\"></i></a>
                                    </td>

                                </tr>
                                {% endfor %}


                                        <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                        <a href=\"#\"><i class=\"icon-trash\"></i></a>

                                </tbody>
                            </table>

                            {% endif %}
            </div>
        </div>
    </div>
    <div class=\"row\">
        <hr>
    </div>

    </div>
    </div>

    {{ dump(panier) }}

        <dl class=\"dl-horizontal pull-right\">
            <dt>Total HT :</dt>
            <dd>79,99€</dd>

            <dt>TVA :</dt>
            <dd>200€</dd>

            <dt>Total:</dt>
            <dd>99,99€</dd>
        </dl>
        <div class=\"clearfix\"></div>
        <a href=\"\" class=\"btn btn-success pull-right\">Valider mon panier</a>
        <a href=\"\" class=\"btn btn-primary\">Offre Promotionnelle</a>
        <a href=\"\" class=\"btn btn-primary\">Continuer mes achats</a>
    </div>

    <div class=\"span8\">


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
    </div>
{% endblock %}", "MSFBundle:Ecommerce:panier.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Ecommerce/panier.html.twig");
    }
}
