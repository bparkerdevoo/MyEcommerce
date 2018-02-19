<?php

/* ::Layout.html.twig */
class __TwigTemplate_056a212ba3d15a8abff69d83583a8f248b0991904e53169a3e52ce91781da42d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f05d3e1d173bf6208bbd29872ab5052ef07770ecf359e2aa35ddc1612962f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f05d3e1d173bf6208bbd29872ab5052ef07770ecf359e2aa35ddc1612962f89->enter($__internal_3f05d3e1d173bf6208bbd29872ab5052ef07770ecf359e2aa35ddc1612962f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Layout.html.twig"));

        $__internal_61086763d491f7b5975595ab8b435122da11594eb60a47c93de2a1054114ed13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61086763d491f7b5975595ab8b435122da11594eb60a47c93de2a1054114ed13->enter($__internal_61086763d491f7b5975595ab8b435122da11594eb60a47c93de2a1054114ed13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

</head>
<body>
<header>
    <div class=\"navbar navbar-inverse navbar-fixed-top\">

        <div class=\"navbar-inner\">
            <div class=\"container\">
                <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"brand\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bienvenue");
        echo "\">My Scent Factory</a>


                <div class=\"nav-collapse collapse\">
                    <form class=\"navbar-form form-search pull-right\">
                        <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                        <button type=\"submit\" class=\"btn\">Rechercher</button>


                        ";
        // line 42
        echo "
                        <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\"><i class=\"fa fa-user-circle fa-2x\"></i></a>

                        <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\"><i class=\"fa fa-cart fa-2x\"></i></a>
                    </form>





                </div>
            </div>
        </div>
    </div>
</header>
<body class=\"container-fluid\" >
";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "
</body>


<hr />
<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\" >
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("condition");
        echo "\">MENTIONS LEGALES</a></li>


                </ul>
            </div>
            <div class=\"span4\">
                <h4>Notre boutique</h4>
                <p><i class=\"fa fa-location\"></i>&nbsp;Meudon 92000s</p>
            </div>
            <div class=\"span2\">
                <h4>Nous contacter</h4>
                <i class=\"fa fa-envelope-o fa-1x\"></i>


                <p><i class=\"fa fa-phone\"></i>&nbsp;Tel: 01 54 00 00</p>
                <p><i class=\"fa fa-print\"></i>&nbsp;Fax: 01 54 00 00 00</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2017 - ParkerCom</p>
            </div>
        </div>
    </div>
</footer>
";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 106
        echo "</body>
</html>

";
        
        $__internal_3f05d3e1d173bf6208bbd29872ab5052ef07770ecf359e2aa35ddc1612962f89->leave($__internal_3f05d3e1d173bf6208bbd29872ab5052ef07770ecf359e2aa35ddc1612962f89_prof);

        
        $__internal_61086763d491f7b5975595ab8b435122da11594eb60a47c93de2a1054114ed13->leave($__internal_61086763d491f7b5975595ab8b435122da11594eb60a47c93de2a1054114ed13_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c86521869d80631f1e570b5bd6b7beb38a938952c7c40d661d223edc343ebafb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86521869d80631f1e570b5bd6b7beb38a938952c7c40d661d223edc343ebafb->enter($__internal_c86521869d80631f1e570b5bd6b7beb38a938952c7c40d661d223edc343ebafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e29e7b229e5c9496c311c79306c145c33c6ca63666ada7f1ef9f4bdccd033937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29e7b229e5c9496c311c79306c145c33c6ca63666ada7f1ef9f4bdccd033937->enter($__internal_e29e7b229e5c9496c311c79306c145c33c6ca63666ada7f1ef9f4bdccd033937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MyScentFactory";
        
        $__internal_e29e7b229e5c9496c311c79306c145c33c6ca63666ada7f1ef9f4bdccd033937->leave($__internal_e29e7b229e5c9496c311c79306c145c33c6ca63666ada7f1ef9f4bdccd033937_prof);

        
        $__internal_c86521869d80631f1e570b5bd6b7beb38a938952c7c40d661d223edc343ebafb->leave($__internal_c86521869d80631f1e570b5bd6b7beb38a938952c7c40d661d223edc343ebafb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_216716bca05b5704121e581b19d5d8303886c7cd574c6c1c6167d68d168bc567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216716bca05b5704121e581b19d5d8303886c7cd574c6c1c6167d68d168bc567->enter($__internal_216716bca05b5704121e581b19d5d8303886c7cd574c6c1c6167d68d168bc567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b4c218573c362eef57e79f40527ef94e7f2ab3cc006a5a38ef56b691b16776e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c218573c362eef57e79f40527ef94e7f2ab3cc006a5a38ef56b691b16776e4->enter($__internal_b4c218573c362eef57e79f40527ef94e7f2ab3cc006a5a38ef56b691b16776e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\" ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\" ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\" ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fontawesome.css"), "html", null, true);
        echo "\" />

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bmatznerfontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_b4c218573c362eef57e79f40527ef94e7f2ab3cc006a5a38ef56b691b16776e4->leave($__internal_b4c218573c362eef57e79f40527ef94e7f2ab3cc006a5a38ef56b691b16776e4_prof);

        
        $__internal_216716bca05b5704121e581b19d5d8303886c7cd574c6c1c6167d68d168bc567->leave($__internal_216716bca05b5704121e581b19d5d8303886c7cd574c6c1c6167d68d168bc567_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc768725e8bf3d8bd1261b43e1e37eddc9e1e378a8ad42389051d979237c09bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc768725e8bf3d8bd1261b43e1e37eddc9e1e378a8ad42389051d979237c09bd->enter($__internal_fc768725e8bf3d8bd1261b43e1e37eddc9e1e378a8ad42389051d979237c09bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90d39c1da84eeb0e3ab405d5d444c08093881fb00be75a111d9a603ff3ffaf85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d39c1da84eeb0e3ab405d5d444c08093881fb00be75a111d9a603ff3ffaf85->enter($__internal_90d39c1da84eeb0e3ab405d5d444c08093881fb00be75a111d9a603ff3ffaf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 59
        echo "    <div class=\"row\">
        <h1 class=\"page-header text-center\">
            Bienvenue
            ";
        // line 63
        echo "        </h1>
    </div>
";
        
        $__internal_90d39c1da84eeb0e3ab405d5d444c08093881fb00be75a111d9a603ff3ffaf85->leave($__internal_90d39c1da84eeb0e3ab405d5d444c08093881fb00be75a111d9a603ff3ffaf85_prof);

        
        $__internal_fc768725e8bf3d8bd1261b43e1e37eddc9e1e378a8ad42389051d979237c09bd->leave($__internal_fc768725e8bf3d8bd1261b43e1e37eddc9e1e378a8ad42389051d979237c09bd_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2903f8344b934760d912a119bcd7e22e797c171c0ecdf7f2718c8f19859d5d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2903f8344b934760d912a119bcd7e22e797c171c0ecdf7f2718c8f19859d5d8b->enter($__internal_2903f8344b934760d912a119bcd7e22e797c171c0ecdf7f2718c8f19859d5d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_484b89b71f60b496b467e218dfbbeb5ad6a254bc67acbe188a7604d7e0acacfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_484b89b71f60b496b467e218dfbbeb5ad6a254bc67acbe188a7604d7e0acacfc->enter($__internal_484b89b71f60b496b467e218dfbbeb5ad6a254bc67acbe188a7604d7e0acacfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_484b89b71f60b496b467e218dfbbeb5ad6a254bc67acbe188a7604d7e0acacfc->leave($__internal_484b89b71f60b496b467e218dfbbeb5ad6a254bc67acbe188a7604d7e0acacfc_prof);

        
        $__internal_2903f8344b934760d912a119bcd7e22e797c171c0ecdf7f2718c8f19859d5d8b->leave($__internal_2903f8344b934760d912a119bcd7e22e797c171c0ecdf7f2718c8f19859d5d8b_prof);

    }

    public function getTemplateName()
    {
        return "::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 104,  245 => 103,  236 => 102,  224 => 63,  219 => 59,  210 => 58,  198 => 12,  193 => 10,  189 => 9,  185 => 8,  180 => 7,  171 => 6,  153 => 5,  140 => 106,  138 => 102,  110 => 77,  97 => 66,  95 => 58,  79 => 45,  74 => 43,  71 => 42,  59 => 28,  41 => 14,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}MyScentFactory{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\" {{ asset ('css/bootstrap.css') }}\" />
        <link rel=\"stylesheet\" href=\" {{ asset ('css/bootstrap-responsive.css') }}\" />
        <link rel=\"stylesheet\" href=\" {{ asset ('css/style.css') }}\" />
        <link rel=\"stylesheet\" href=\" {{ asset ('css/fontawesome.css') }}\" />

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/bmatznerfontawesome/css/font-awesome.min.css') }}\" />
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

</head>
<body>
<header>
    <div class=\"navbar navbar-inverse navbar-fixed-top\">

        <div class=\"navbar-inner\">
            <div class=\"container\">
                <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"brand\" href=\"{{ path('bienvenue') }}\">My Scent Factory</a>


                <div class=\"nav-collapse collapse\">
                    <form class=\"navbar-form form-search pull-right\">
                        <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                        <button type=\"submit\" class=\"btn\">Rechercher</button>


                        {## if is_granted('ROLE_USER') %}
                            <li><a href=\"{{ path('security_logout') }}\">Logout</a></li>
                        {% else %}
                            <li><a href=\"{{ path('security_login') }}\">Login</a></li>
                        {% endif #}

                        <a href=\"{{ path('fos_user_profile_show') }}\"><i class=\"fa fa-user-circle fa-2x\"></i></a>

                        <a href=\"{{ path('fos_user_profile_show') }}\"><i class=\"fa fa-cart fa-2x\"></i></a>
                    </form>





                </div>
            </div>
        </div>
    </div>
</header>
<body class=\"container-fluid\" >
{% block body %}
    <div class=\"row\">
        <h1 class=\"page-header text-center\">
            Bienvenue
            {#{#}{# app.user ? app.user.email : '' }}!#}
        </h1>
    </div>
{% endblock %}

</body>


<hr />
<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\" >
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    <li><a href=\"{{ path('condition') }}\">MENTIONS LEGALES</a></li>


                </ul>
            </div>
            <div class=\"span4\">
                <h4>Notre boutique</h4>
                <p><i class=\"fa fa-location\"></i>&nbsp;Meudon 92000s</p>
            </div>
            <div class=\"span2\">
                <h4>Nous contacter</h4>
                <i class=\"fa fa-envelope-o fa-1x\"></i>


                <p><i class=\"fa fa-phone\"></i>&nbsp;Tel: 01 54 00 00</p>
                <p><i class=\"fa fa-print\"></i>&nbsp;Fax: 01 54 00 00 00</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2017 - ParkerCom</p>
            </div>
        </div>
    </div>
</footer>
{% block javascripts %}
    <script src=\"{{ asset('js/jquery-3.3.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
{% endblock %}
</body>
</html>

", "::Layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/app/Resources/views/Layout.html.twig");
    }
}
