<?php

/* :layout/modulesUsed:panier.html.twig */
class __TwigTemplate_79a8b191dc859bf192568eef9566a1972efaa8fadd7311a3fb4bde77fbd04863 extends Twig_Template
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
        $__internal_bacf0ca6c83a74f4d8ba0b5c76a54eaa7a5125b78beface68c2d7fc56970eb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bacf0ca6c83a74f4d8ba0b5c76a54eaa7a5125b78beface68c2d7fc56970eb52->enter($__internal_bacf0ca6c83a74f4d8ba0b5c76a54eaa7a5125b78beface68c2d7fc56970eb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout/modulesUsed:panier.html.twig"));

        $__internal_8dcf4d4f9f2463400c0b903d079a2ade7fd3e316b00bed148792086f6a748a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dcf4d4f9f2463400c0b903d079a2ade7fd3e316b00bed148792086f6a748a7a->enter($__internal_8dcf4d4f9f2463400c0b903d079a2ade7fd3e316b00bed148792086f6a748a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout/modulesUsed:panier.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_bacf0ca6c83a74f4d8ba0b5c76a54eaa7a5125b78beface68c2d7fc56970eb52->leave($__internal_bacf0ca6c83a74f4d8ba0b5c76a54eaa7a5125b78beface68c2d7fc56970eb52_prof);

        
        $__internal_8dcf4d4f9f2463400c0b903d079a2ade7fd3e316b00bed148792086f6a748a7a->leave($__internal_8dcf4d4f9f2463400c0b903d079a2ade7fd3e316b00bed148792086f6a748a7a_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_cffd78a4555558f87e66269335f3e32b9b4928be722b70df93e9bd0e301ae946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cffd78a4555558f87e66269335f3e32b9b4928be722b70df93e9bd0e301ae946->enter($__internal_cffd78a4555558f87e66269335f3e32b9b4928be722b70df93e9bd0e301ae946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06dc11f40c90da0ad4671c2758f4ce7b8f870ef7726141968cae233725d04f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06dc11f40c90da0ad4671c2758f4ce7b8f870ef7726141968cae233725d04f55->enter($__internal_06dc11f40c90da0ad4671c2758f4ce7b8f870ef7726141968cae233725d04f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 5
        $this->loadTemplate("::layout/modulesUsed/nav.html.twig", ":layout/modulesUsed:panier.html.twig", 5)->display($context);
        // line 6
        echo "            </div>
            <div class=\"span9\">
                <h2>Votre panier</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>Références</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Total HT</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>TCHIOURAY</td>
                            <td>
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>33,33€</td>
                            <td>33,33€</td>
                        </tr>
                        <tr>
                            <td>Ceramique</td>
                            <td>
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>56,33€</td>
                            <td>56,66€</td>
                        </tr>
                        </tbody>
                    </table>
                </form>

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

        </div>
    </div>
     ";
        
        $__internal_06dc11f40c90da0ad4671c2758f4ce7b8f870ef7726141968cae233725d04f55->leave($__internal_06dc11f40c90da0ad4671c2758f4ce7b8f870ef7726141968cae233725d04f55_prof);

        
        $__internal_cffd78a4555558f87e66269335f3e32b9b4928be722b70df93e9bd0e301ae946->leave($__internal_cffd78a4555558f87e66269335f3e32b9b4928be722b70df93e9bd0e301ae946_prof);

    }

    public function getTemplateName()
    {
        return ":layout/modulesUsed:panier.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  49 => 5,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                {% include \"::layout/modulesUsed/nav.html.twig\" %}
            </div>
            <div class=\"span9\">
                <h2>Votre panier</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>Références</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Total HT</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>TCHIOURAY</td>
                            <td>
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>33,33€</td>
                            <td>33,33€</td>
                        </tr>
                        <tr>
                            <td>Ceramique</td>
                            <td>
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>56,33€</td>
                            <td>56,66€</td>
                        </tr>
                        </tbody>
                    </table>
                </form>

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

        </div>
    </div>
     {% endblock %}
", ":layout/modulesUsed:panier.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/app/Resources/views/layout/modulesUsed/panier.html.twig");
    }
}
