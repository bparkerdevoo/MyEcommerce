<?php

/* AppBundle:pages:create.html.twig */
class __TwigTemplate_ba054271d9b2e37468f42a389b9a5625fb02018f069f3f25dd0370fcf6dd9974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/Layout.html.twig", "AppBundle:pages:create.html.twig", 1);
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
        $__internal_af3363903d988cee36a009bfd6d6ed6104ea16c88371235dc7d3d0fccd467010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3363903d988cee36a009bfd6d6ed6104ea16c88371235dc7d3d0fccd467010->enter($__internal_af3363903d988cee36a009bfd6d6ed6104ea16c88371235dc7d3d0fccd467010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:create.html.twig"));

        $__internal_db9714c64aa8be010cc0c5f13ff7be7c2870d7242f3a9bb3006056e00aaff8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9714c64aa8be010cc0c5f13ff7be7c2870d7242f3a9bb3006056e00aaff8b7->enter($__internal_db9714c64aa8be010cc0c5f13ff7be7c2870d7242f3a9bb3006056e00aaff8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af3363903d988cee36a009bfd6d6ed6104ea16c88371235dc7d3d0fccd467010->leave($__internal_af3363903d988cee36a009bfd6d6ed6104ea16c88371235dc7d3d0fccd467010_prof);

        
        $__internal_db9714c64aa8be010cc0c5f13ff7be7c2870d7242f3a9bb3006056e00aaff8b7->leave($__internal_db9714c64aa8be010cc0c5f13ff7be7c2870d7242f3a9bb3006056e00aaff8b7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_538a3b490df963f1f70fe81bcef8ad27922352cb5023d34b40c02b597f490572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538a3b490df963f1f70fe81bcef8ad27922352cb5023d34b40c02b597f490572->enter($__internal_538a3b490df963f1f70fe81bcef8ad27922352cb5023d34b40c02b597f490572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdf0e2fe4d94f5d57828ef39bed774aec5cdcddc1af59f668dec017dff5f85e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf0e2fe4d94f5d57828ef39bed774aec5cdcddc1af59f668dec017dff5f85e3->enter($__internal_fdf0e2fe4d94f5d57828ef39bed774aec5cdcddc1af59f668dec017dff5f85e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 6
        $this->loadTemplate("::layout/modulesUsed/nav.html.twig", "AppBundle:pages:create.html.twig", 6)->display($context);
        // line 7
        echo "            </div>
        </div>
        <div class=\"span12\">
            <div class=\"span6 offset3\">
                <h1>MY SCENT FACTORY (CRUD)</h1>
                <div class=\"span6\">
                    <h2>espace ADMIN</h2>
                </div>
            </div>
            <div class=\"container\">
                <h3>CREATE POSTS</h3>
                <div class=\"span12\">
                    <div class=\"row\">
                        <hr>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"span8 offset2\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-bordered\">
                                <caption></caption>
                                <thead>
                                <tr>
                                    <th scope=\"col\">#</th>
                                    <th scope=\"col\"></th>
                                    <th scope=\"col\"></th>
                                    <th scope=\"col\"></th>
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


                <div class=\"row\">
                    <div class=\"span8 offset2\">
                        <div class=\"table-responsive-sm\">
                            <table class=\"table\">
                                ...
                            </table>
                        </div>

                        <div class=\"table-responsive-md\">
                            <table class=\"table\">
                                ...
                            </table>
                        </div>

                        <div class=\"table-responsive-lg\">
                            <table class=\"table\">
                                ...
                            </table>
                        </div>

                    </div>
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
        
        $__internal_fdf0e2fe4d94f5d57828ef39bed774aec5cdcddc1af59f668dec017dff5f85e3->leave($__internal_fdf0e2fe4d94f5d57828ef39bed774aec5cdcddc1af59f668dec017dff5f85e3_prof);

        
        $__internal_538a3b490df963f1f70fe81bcef8ad27922352cb5023d34b40c02b597f490572->leave($__internal_538a3b490df963f1f70fe81bcef8ad27922352cb5023d34b40c02b597f490572_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pages:create.html.twig";
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
                <h1>MY SCENT FACTORY (CRUD)</h1>
                <div class=\"span6\">
                    <h2>espace ADMIN</h2>
                </div>
            </div>
            <div class=\"container\">
                <h3>CREATE POSTS</h3>
                <div class=\"span12\">
                    <div class=\"row\">
                        <hr>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"span8 offset2\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-bordered\">
                                <caption></caption>
                                <thead>
                                <tr>
                                    <th scope=\"col\">#</th>
                                    <th scope=\"col\"></th>
                                    <th scope=\"col\"></th>
                                    <th scope=\"col\"></th>
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


                <div class=\"row\">
                    <div class=\"span8 offset2\">
                        <div class=\"table-responsive-sm\">
                            <table class=\"table\">
                                ...
                            </table>
                        </div>

                        <div class=\"table-responsive-md\">
                            <table class=\"table\">
                                ...
                            </table>
                        </div>

                        <div class=\"table-responsive-lg\">
                            <table class=\"table\">
                                ...
                            </table>
                        </div>

                    </div>
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
{% endblock %}", "AppBundle:pages:create.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/AppBundle/Resources/views/pages/create.html.twig");
    }
}
