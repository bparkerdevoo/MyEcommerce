<?php

/* AppBundle:Blog:Blog_layout.html.twig */
class __TwigTemplate_6a68a6f38cac8ed33aeda0b8930626cc179f18c87fe3ad47dc4c051e71543d65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/Layout.html.twig", "AppBundle:Blog:Blog_layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bab7265a86a80440574dd1dad228aa8d832d7435d088993dd491c0e0329ae953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab7265a86a80440574dd1dad228aa8d832d7435d088993dd491c0e0329ae953->enter($__internal_bab7265a86a80440574dd1dad228aa8d832d7435d088993dd491c0e0329ae953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Blog:Blog_layout.html.twig"));

        $__internal_7ec829c2875734cfbf7b8e5972a6cfb001a20e68559ad7d0a41cf9b2255c2c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec829c2875734cfbf7b8e5972a6cfb001a20e68559ad7d0a41cf9b2255c2c33->enter($__internal_7ec829c2875734cfbf7b8e5972a6cfb001a20e68559ad7d0a41cf9b2255c2c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Blog:Blog_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bab7265a86a80440574dd1dad228aa8d832d7435d088993dd491c0e0329ae953->leave($__internal_bab7265a86a80440574dd1dad228aa8d832d7435d088993dd491c0e0329ae953_prof);

        
        $__internal_7ec829c2875734cfbf7b8e5972a6cfb001a20e68559ad7d0a41cf9b2255c2c33->leave($__internal_7ec829c2875734cfbf7b8e5972a6cfb001a20e68559ad7d0a41cf9b2255c2c33_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c93a5758c946ee0a4d44a6ce494f8ff0a4e8f2ff7d15c6cc9c6e0eb1d62488e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c93a5758c946ee0a4d44a6ce494f8ff0a4e8f2ff7d15c6cc9c6e0eb1d62488e0->enter($__internal_c93a5758c946ee0a4d44a6ce494f8ff0a4e8f2ff7d15c6cc9c6e0eb1d62488e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa8e6907ffa17973a443f5ed6edf2d1149c458040076de2b1ea3c758032d6de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8e6907ffa17973a443f5ed6edf2d1149c458040076de2b1ea3c758032d6de8->enter($__internal_aa8e6907ffa17973a443f5ed6edf2d1149c458040076de2b1ea3c758032d6de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 6
        $this->loadTemplate("::layout/modulesUsed/nav.html.twig", "AppBundle:Blog:Blog_layout.html.twig", 6)->display($context);
        // line 7
        echo "            </div>
        </div>
        <div class=\"span12\">
            <div class=\"span6 offset3\">
                <h1>MY SCENT FACTORY NEWS </h1>
            </div>
            <div class=\"container\">
                <div class=\"span9 offset3\">
                    <h3> MSF BLOG</h3>
                </div>
                <div class=\"span12\">
                    <div class=\"row\">
                        <hr>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"span8 offset2\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-bordered\">
                                <caption>Article</caption>
                                <thead>
                                <tr>
                                    <th scope=\"col\">#</th>
                                    <th scope=\"col\">date</th>
                                    <th scope=\"col\">titre</th>
                                    <th scope=\"col\">article</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope=\"row\"></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <hr>
                </div>



            </div>


        </div>
        <div class=\"container\">
            <div class=\"span12\">
                <div class=\"row\">
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


    </div>
";
        
        $__internal_aa8e6907ffa17973a443f5ed6edf2d1149c458040076de2b1ea3c758032d6de8->leave($__internal_aa8e6907ffa17973a443f5ed6edf2d1149c458040076de2b1ea3c758032d6de8_prof);

        
        $__internal_c93a5758c946ee0a4d44a6ce494f8ff0a4e8f2ff7d15c6cc9c6e0eb1d62488e0->leave($__internal_c93a5758c946ee0a4d44a6ce494f8ff0a4e8f2ff7d15c6cc9c6e0eb1d62488e0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Blog:Blog_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/Layout.html.twig\" %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                {% include \"::layout/modulesUsed/nav.html.twig\" %}
            </div>
        </div>
        <div class=\"span12\">
            <div class=\"span6 offset3\">
                <h1>MY SCENT FACTORY NEWS </h1>
            </div>
            <div class=\"container\">
                <div class=\"span9 offset3\">
                    <h3> MSF BLOG</h3>
                </div>
                <div class=\"span12\">
                    <div class=\"row\">
                        <hr>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"span8 offset2\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-bordered\">
                                <caption>Article</caption>
                                <thead>
                                <tr>
                                    <th scope=\"col\">#</th>
                                    <th scope=\"col\">date</th>
                                    <th scope=\"col\">titre</th>
                                    <th scope=\"col\">article</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope=\"row\"></th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <hr>
                </div>



            </div>


        </div>
        <div class=\"container\">
            <div class=\"span12\">
                <div class=\"row\">
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


    </div>
{% endblock %}", "AppBundle:Blog:Blog_layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/AppBundle/Resources/views/Blog/Blog_layout.html.twig");
    }
}
