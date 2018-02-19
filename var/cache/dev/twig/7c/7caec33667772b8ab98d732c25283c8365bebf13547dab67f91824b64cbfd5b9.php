<?php

/* UserBundle:modules:updateClient.html.twig */
class __TwigTemplate_8ed6ad8125536c1ab919a183019fccee0cee72e503293949c1e3f635fbb2ba3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Layout.html.twig", "UserBundle:modules:updateClient.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'updateInformation' => array($this, 'block_updateInformation'),
            'updateConnexion' => array($this, 'block_updateConnexion'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8ee2629fe0c5b2f24b9fc9d6cf0111c2b0317ac666686cf1abf37a084bfbf22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ee2629fe0c5b2f24b9fc9d6cf0111c2b0317ac666686cf1abf37a084bfbf22->enter($__internal_f8ee2629fe0c5b2f24b9fc9d6cf0111c2b0317ac666686cf1abf37a084bfbf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:modules:updateClient.html.twig"));

        $__internal_0c835aa91fc8033035ff7a88aba4882e7b966f7a0257744b8350e686111c9719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c835aa91fc8033035ff7a88aba4882e7b966f7a0257744b8350e686111c9719->enter($__internal_0c835aa91fc8033035ff7a88aba4882e7b966f7a0257744b8350e686111c9719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:modules:updateClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8ee2629fe0c5b2f24b9fc9d6cf0111c2b0317ac666686cf1abf37a084bfbf22->leave($__internal_f8ee2629fe0c5b2f24b9fc9d6cf0111c2b0317ac666686cf1abf37a084bfbf22_prof);

        
        $__internal_0c835aa91fc8033035ff7a88aba4882e7b966f7a0257744b8350e686111c9719->leave($__internal_0c835aa91fc8033035ff7a88aba4882e7b966f7a0257744b8350e686111c9719_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3302f1988f63fa8dce8882c40841e135610bd0a82fec7a215b9f81f2a886b13b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3302f1988f63fa8dce8882c40841e135610bd0a82fec7a215b9f81f2a886b13b->enter($__internal_3302f1988f63fa8dce8882c40841e135610bd0a82fec7a215b9f81f2a886b13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1db2b985a96fcad03eed47b3b314064a1c6668144c3cfcf47dc9c2ec22875ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1db2b985a96fcad03eed47b3b314064a1c6668144c3cfcf47dc9c2ec22875ce->enter($__internal_f1db2b985a96fcad03eed47b3b314064a1c6668144c3cfcf47dc9c2ec22875ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 8
        $this->loadTemplate("UserBundle:nav_inc:utilisateursConnecte.html.twig", "UserBundle:modules:updateClient.html.twig", 8)->display($context);
        // line 9
        echo "            </div>

            <div class=\"span7\">
                <h1>
                    Espace Client
                </h1>
            </div>
            <div class=\"row\">

                <div class=\"span5\">
                    <h3>Mettre à jours mes Informations</h3>
                </div>
            </div>

        </div>

        ";
        // line 25
        $this->displayBlock('updateInformation', $context, $blocks);
        // line 29
        echo "        <hr>
        ";
        // line 30
        $this->displayBlock('updateConnexion', $context, $blocks);
        // line 34
        echo "    </div>
    <div class=\"row\">
        <div class=\"span12\">
            <h3>Produits favoris</h3>
            <ul class=\"thumbnails\">
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_spray.jpg"), "html", null, true);
            echo "\" alt=\"MSF\" width=\"200\" height=\"200\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 €</p>
                                <a class=\"btn btn-primary\" href=\"";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("brochures");
            echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"";
            // line 47
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
        // line 53
        echo "
            </ul>
            <hr>
        </div>

        <div class=\"span12\">

            <h3>Produits recemment consultés</h3>
            <ul class=\"thumbnails\">
                ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 63
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_spray.jpg"), "html", null, true);
            echo "\" alt=\"MSF\" width=\"200\" height=\"200\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 €</p>
                                <a class=\"btn btn-primary\" href=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("presentation");
            echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"";
            // line 70
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
        // line 76
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
        
        $__internal_f1db2b985a96fcad03eed47b3b314064a1c6668144c3cfcf47dc9c2ec22875ce->leave($__internal_f1db2b985a96fcad03eed47b3b314064a1c6668144c3cfcf47dc9c2ec22875ce_prof);

        
        $__internal_3302f1988f63fa8dce8882c40841e135610bd0a82fec7a215b9f81f2a886b13b->leave($__internal_3302f1988f63fa8dce8882c40841e135610bd0a82fec7a215b9f81f2a886b13b_prof);

    }

    // line 25
    public function block_updateInformation($context, array $blocks = array())
    {
        $__internal_2fbeab8ef53f270c87d3b7be1702e2b0fcd04a816e8bf56587094f6eb548fc05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fbeab8ef53f270c87d3b7be1702e2b0fcd04a816e8bf56587094f6eb548fc05->enter($__internal_2fbeab8ef53f270c87d3b7be1702e2b0fcd04a816e8bf56587094f6eb548fc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "updateInformation"));

        $__internal_168533d3aa95629ee087adec3afa30485416fe5cafff8774fc5a9e140f8403f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168533d3aa95629ee087adec3afa30485416fe5cafff8774fc5a9e140f8403f9->enter($__internal_168533d3aa95629ee087adec3afa30485416fe5cafff8774fc5a9e140f8403f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "updateInformation"));

        // line 26
        echo "            ";
        $this->loadTemplate("UserBundle:modules:updateClient.html.twig", "UserBundle:modules:updateClient.html.twig", 26)->display($context);
        // line 27
        echo "
        ";
        
        $__internal_168533d3aa95629ee087adec3afa30485416fe5cafff8774fc5a9e140f8403f9->leave($__internal_168533d3aa95629ee087adec3afa30485416fe5cafff8774fc5a9e140f8403f9_prof);

        
        $__internal_2fbeab8ef53f270c87d3b7be1702e2b0fcd04a816e8bf56587094f6eb548fc05->leave($__internal_2fbeab8ef53f270c87d3b7be1702e2b0fcd04a816e8bf56587094f6eb548fc05_prof);

    }

    // line 30
    public function block_updateConnexion($context, array $blocks = array())
    {
        $__internal_631bd655005bfb8b5afdeafa1cb78d6a967cdee29b925b2ed0ed9b7e9b5dc87a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631bd655005bfb8b5afdeafa1cb78d6a967cdee29b925b2ed0ed9b7e9b5dc87a->enter($__internal_631bd655005bfb8b5afdeafa1cb78d6a967cdee29b925b2ed0ed9b7e9b5dc87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "updateConnexion"));

        $__internal_a83beb19c256e3c408d7992bbc6daa38e87d6bb98302338cec2b1f055e6417f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83beb19c256e3c408d7992bbc6daa38e87d6bb98302338cec2b1f055e6417f1->enter($__internal_a83beb19c256e3c408d7992bbc6daa38e87d6bb98302338cec2b1f055e6417f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "updateConnexion"));

        // line 31
        echo "            ";
        $this->loadTemplate("UserBundle:modules:updateConnexion_content.html.twig", "UserBundle:modules:updateClient.html.twig", 31)->display($context);
        // line 32
        echo "
        ";
        
        $__internal_a83beb19c256e3c408d7992bbc6daa38e87d6bb98302338cec2b1f055e6417f1->leave($__internal_a83beb19c256e3c408d7992bbc6daa38e87d6bb98302338cec2b1f055e6417f1_prof);

        
        $__internal_631bd655005bfb8b5afdeafa1cb78d6a967cdee29b925b2ed0ed9b7e9b5dc87a->leave($__internal_631bd655005bfb8b5afdeafa1cb78d6a967cdee29b925b2ed0ed9b7e9b5dc87a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:modules:updateClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 32,  224 => 31,  215 => 30,  204 => 27,  201 => 26,  192 => 25,  164 => 76,  152 => 70,  148 => 69,  141 => 65,  137 => 63,  133 => 62,  122 => 53,  110 => 47,  106 => 46,  99 => 42,  95 => 40,  91 => 39,  84 => 34,  82 => 30,  79 => 29,  77 => 25,  59 => 9,  57 => 8,  51 => 4,  42 => 3,  11 => 1,);
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
                    <h3>Mettre à jours mes Informations</h3>
                </div>
            </div>

        </div>

        {% block updateInformation%}
            {% include \"UserBundle:modules:updateClient.html.twig\" %}

        {% endblock updateInformation%}
        <hr>
        {% block updateConnexion%}
            {% include \"UserBundle:modules:updateConnexion_content.html.twig\" %}

        {% endblock updateConnexion%}
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
                                <a class=\"btn btn-primary\" href=\"{{ path('brochures') }}\">Plus d'infos</a>
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
                                <a class=\"btn btn-primary\" href=\"{{ path('presentation') }}\">Plus d'infos</a>
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
{% endblock %}", "UserBundle:modules:updateClient.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/modules/updateClient.html.twig");
    }
}
