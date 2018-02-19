<?php

/* MSFBundle:Ecommerce:produit.html.twig */
class __TwigTemplate_5dd94ccc87dcdc41460ee96778eddfd01e6b76265d50c591662f5614c086ce4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout.html.twig", "MSFBundle:Ecommerce:produit.html.twig", 1);
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
        $__internal_b91a88b14a88d165d37fb5b4a52ff5ef84233c2d2569599683b8a1205c34525d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91a88b14a88d165d37fb5b4a52ff5ef84233c2d2569599683b8a1205c34525d->enter($__internal_b91a88b14a88d165d37fb5b4a52ff5ef84233c2d2569599683b8a1205c34525d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Ecommerce:produit.html.twig"));

        $__internal_6350ab8c72b6988d5600553724e2af0b26a7a03c60f5929542a77fb5c2b893ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6350ab8c72b6988d5600553724e2af0b26a7a03c60f5929542a77fb5c2b893ef->enter($__internal_6350ab8c72b6988d5600553724e2af0b26a7a03c60f5929542a77fb5c2b893ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Ecommerce:produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91a88b14a88d165d37fb5b4a52ff5ef84233c2d2569599683b8a1205c34525d->leave($__internal_b91a88b14a88d165d37fb5b4a52ff5ef84233c2d2569599683b8a1205c34525d_prof);

        
        $__internal_6350ab8c72b6988d5600553724e2af0b26a7a03c60f5929542a77fb5c2b893ef->leave($__internal_6350ab8c72b6988d5600553724e2af0b26a7a03c60f5929542a77fb5c2b893ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_174bb76decbd2327c315af5e4a619eda365a892898af9f7812264789fd6eaf74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174bb76decbd2327c315af5e4a619eda365a892898af9f7812264789fd6eaf74->enter($__internal_174bb76decbd2327c315af5e4a619eda365a892898af9f7812264789fd6eaf74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3e44ad68c1bf9615567bc0f2f5e7c0598d3de1ec2a59a1af520530a55c76aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e44ad68c1bf9615567bc0f2f5e7c0598d3de1ec2a59a1af520530a55c76aae->enter($__internal_f3e44ad68c1bf9615567bc0f2f5e7c0598d3de1ec2a59a1af520530a55c76aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"span3\">
        ";
        // line 6
        $this->loadTemplate("::layout/modulesUsed/nav.html.twig", "MSFBundle:Ecommerce:produit.html.twig", 6)->display($context);
        // line 7
        echo "    </div>

    <div class=\"span4 offset3\">
<h2>LISTE PRODUITS</h2>

    </div>
            <div class=\"row\">
                <div class=\"span8 offset2\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-bordered\">
                            <caption></caption>
                            <thead>
                            <tr>
                                <th scope=\"col\"></th>
                                <th scope=\"col\"> nom produit</th>
                                <th scope=\"col\">Categorie</th>
                                <th scope=\"col\">Description</th>
                                <th scope=\"col\">PRIX</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 28, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 29
            echo "                            <tr>
                                <td scope=\"row\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "brochure", array()), "html", null, true);
            echo "</td>
                                <td scope=\"row\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "description", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "prix", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "description", array()), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterAuPanier", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produit"], "id", array()))), "html", null, true);
            echo "\">Panier</a></td>
                                
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                        </table>
                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->getSourceContext()); })()), "session", array()), "get", array(0 => "panier"), "method"));
        echo "

                    </div>
                </div>
            </div>
            <div class=\"row\">
                <hr>
            </div>

    </div>
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
        
        $__internal_f3e44ad68c1bf9615567bc0f2f5e7c0598d3de1ec2a59a1af520530a55c76aae->leave($__internal_f3e44ad68c1bf9615567bc0f2f5e7c0598d3de1ec2a59a1af520530a55c76aae_prof);

        
        $__internal_174bb76decbd2327c315af5e4a619eda365a892898af9f7812264789fd6eaf74->leave($__internal_174bb76decbd2327c315af5e4a619eda365a892898af9f7812264789fd6eaf74_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Ecommerce:produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  115 => 39,  105 => 35,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  85 => 30,  82 => 29,  78 => 28,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout.html.twig\" %}

{% block body %}

    <div class=\"span3\">
        {% include \"::layout/modulesUsed/nav.html.twig\" %}
    </div>

    <div class=\"span4 offset3\">
<h2>LISTE PRODUITS</h2>

    </div>
            <div class=\"row\">
                <div class=\"span8 offset2\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-bordered\">
                            <caption></caption>
                            <thead>
                            <tr>
                                <th scope=\"col\"></th>
                                <th scope=\"col\"> nom produit</th>
                                <th scope=\"col\">Categorie</th>
                                <th scope=\"col\">Description</th>
                                <th scope=\"col\">PRIX</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for produit in produits %}
                            <tr>
                                <td scope=\"row\">{{ produit.brochure }}</td>
                                <td scope=\"row\">{{ produit.nom }}</td>
                                <td>{{ produit.description }}</td>
                                <td>{{ produit.prix }}</td>
                                <td>{{ produit.description }}</td>
                                <td><a href=\"{{ path('ajouterAuPanier', {'id':produit.id}) }}\">Panier</a></td>
                                
                            </tr>
                            {% endfor %}
                        </table>
                        {{ dump(app.session.get('panier')) }}

                    </div>
                </div>
            </div>
            <div class=\"row\">
                <hr>
            </div>

    </div>
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
{% endblock %}", "MSFBundle:Ecommerce:produit.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Ecommerce/produit.html.twig");
    }
}
