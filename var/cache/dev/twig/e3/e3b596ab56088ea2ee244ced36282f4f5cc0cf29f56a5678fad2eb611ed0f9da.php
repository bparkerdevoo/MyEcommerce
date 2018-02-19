<?php

/* AppBundle:Blog:custom_layout.html.twig */
class __TwigTemplate_efeb6775a52845d6fbdc888f998641dcc05bc1b069b37947c24b417ccdf0fc14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c83836d7930c361840c4f17b37e1aad6e663d50d10727a2a0d962ea0b9c96d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c83836d7930c361840c4f17b37e1aad6e663d50d10727a2a0d962ea0b9c96d85->enter($__internal_c83836d7930c361840c4f17b37e1aad6e663d50d10727a2a0d962ea0b9c96d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Blog:custom_layout.html.twig"));

        $__internal_90f547a3fd77f8a1236cffee9437bcf349be039664f30353586d9087199a19b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f547a3fd77f8a1236cffee9437bcf349be039664f30353586d9087199a19b7->enter($__internal_90f547a3fd77f8a1236cffee9437bcf349be039664f30353586d9087199a19b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Blog:custom_layout.html.twig"));

        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 25
        echo "<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body
            ";
        // line 119
        $this->displayBlock('body_attributes', $context, $blocks);
        // line 125
        echo ">

    <div class=\"wrapper\">

        ";
        // line 129
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 228
        echo "
        ";
        // line 229
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 366
        echo "    </div>

    ";
        // line 368
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 368, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 369
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 375
            echo "    ";
        }
        // line 376
        echo "
    </body>
</html>
";
        
        $__internal_c83836d7930c361840c4f17b37e1aad6e663d50d10727a2a0d962ea0b9c96d85->leave($__internal_c83836d7930c361840c4f17b37e1aad6e663d50d10727a2a0d962ea0b9c96d85_prof);

        
        $__internal_90f547a3fd77f8a1236cffee9437bcf349be039664f30353586d9087199a19b7->leave($__internal_90f547a3fd77f8a1236cffee9437bcf349be039664f30353586d9087199a19b7_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_8f7531354b6db69d973b5643097a2fbde32fbf593de865fea43a06d33db3cc02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f7531354b6db69d973b5643097a2fbde32fbf593de865fea43a06d33db3cc02->enter($__internal_8f7531354b6db69d973b5643097a2fbde32fbf593de865fea43a06d33db3cc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_e42c6b6a178fea7c5d2182f614b6800411cb83731b568d23e8eff0595e9e3fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42c6b6a178fea7c5d2182f614b6800411cb83731b568d23e8eff0595e9e3fbf->enter($__internal_e42c6b6a178fea7c5d2182f614b6800411cb83731b568d23e8eff0595e9e3fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_e42c6b6a178fea7c5d2182f614b6800411cb83731b568d23e8eff0595e9e3fbf->leave($__internal_e42c6b6a178fea7c5d2182f614b6800411cb83731b568d23e8eff0595e9e3fbf_prof);

        
        $__internal_8f7531354b6db69d973b5643097a2fbde32fbf593de865fea43a06d33db3cc02->leave($__internal_8f7531354b6db69d973b5643097a2fbde32fbf593de865fea43a06d33db3cc02_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_c3751e2272de43da60db095ebb0d330a4b64e7a92a0288c491dd4a9801c2a2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3751e2272de43da60db095ebb0d330a4b64e7a92a0288c491dd4a9801c2a2ca->enter($__internal_c3751e2272de43da60db095ebb0d330a4b64e7a92a0288c491dd4a9801c2a2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_b1236fea084cb640d3a2d0537daedda5ebebb1fbecda81793bdd20dadd08d699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1236fea084cb640d3a2d0537daedda5ebebb1fbecda81793bdd20dadd08d699->enter($__internal_b1236fea084cb640d3a2d0537daedda5ebebb1fbecda81793bdd20dadd08d699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_b1236fea084cb640d3a2d0537daedda5ebebb1fbecda81793bdd20dadd08d699->leave($__internal_b1236fea084cb640d3a2d0537daedda5ebebb1fbecda81793bdd20dadd08d699_prof);

        
        $__internal_c3751e2272de43da60db095ebb0d330a4b64e7a92a0288c491dd4a9801c2a2ca->leave($__internal_c3751e2272de43da60db095ebb0d330a4b64e7a92a0288c491dd4a9801c2a2ca_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f45e3c7c337ce2a177aa70f5a474f58f4ad705cb7a5d2cdf13b527003f7e8860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45e3c7c337ce2a177aa70f5a474f58f4ad705cb7a5d2cdf13b527003f7e8860->enter($__internal_f45e3c7c337ce2a177aa70f5a474f58f4ad705cb7a5d2cdf13b527003f7e8860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cdac9252706e68a87e2bc1ab07d529c07fc503155ac2be24313b2f9b2802e998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdac9252706e68a87e2bc1ab07d529c07fc503155ac2be24313b2f9b2802e998->enter($__internal_cdac9252706e68a87e2bc1ab07d529c07fc503155ac2be24313b2f9b2802e998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 35, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_cdac9252706e68a87e2bc1ab07d529c07fc503155ac2be24313b2f9b2802e998->leave($__internal_cdac9252706e68a87e2bc1ab07d529c07fc503155ac2be24313b2f9b2802e998_prof);

        
        $__internal_f45e3c7c337ce2a177aa70f5a474f58f4ad705cb7a5d2cdf13b527003f7e8860->leave($__internal_f45e3c7c337ce2a177aa70f5a474f58f4ad705cb7a5d2cdf13b527003f7e8860_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa192789f3c9e27e75c9eaf87eab66ad4d882ebe312f1c08a2d616423ae9e431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa192789f3c9e27e75c9eaf87eab66ad4d882ebe312f1c08a2d616423ae9e431->enter($__internal_aa192789f3c9e27e75c9eaf87eab66ad4d882ebe312f1c08a2d616423ae9e431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2189fe243286e2d5cacb05ca74b5e7e02110bbebf84b01a79dd7535042df880d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2189fe243286e2d5cacb05ca74b5e7e02110bbebf84b01a79dd7535042df880d->enter($__internal_2189fe243286e2d5cacb05ca74b5e7e02110bbebf84b01a79dd7535042df880d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 68, $this->getSourceContext()); })()), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 70, $this->getSourceContext()); })()), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
(isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 73, $this->getSourceContext()); })())), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 79, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if (((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 80, $this->getSourceContext()); })()) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 83, $this->getSourceContext()); })()), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 84, $this->getSourceContext()); })()), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_2189fe243286e2d5cacb05ca74b5e7e02110bbebf84b01a79dd7535042df880d->leave($__internal_2189fe243286e2d5cacb05ca74b5e7e02110bbebf84b01a79dd7535042df880d_prof);

        
        $__internal_aa192789f3c9e27e75c9eaf87eab66ad4d882ebe312f1c08a2d616423ae9e431->leave($__internal_aa192789f3c9e27e75c9eaf87eab66ad4d882ebe312f1c08a2d616423ae9e431_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_01cb14b1755eae86cb841f36897788b8cd8759aa37461d5587ff63b4fb6ddd8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cb14b1755eae86cb841f36897788b8cd8759aa37461d5587ff63b4fb6ddd8f->enter($__internal_01cb14b1755eae86cb841f36897788b8cd8759aa37461d5587ff63b4fb6ddd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_424457e9ea70f21f4711ff563ff517e2e8be6492968de39af4b8a2c3b90230fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424457e9ea70f21f4711ff563ff517e2e8be6492968de39af4b8a2c3b90230fc->enter($__internal_424457e9ea70f21f4711ff563ff517e2e8be6492968de39af4b8a2c3b90230fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 44, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 45, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 46, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 47, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_424457e9ea70f21f4711ff563ff517e2e8be6492968de39af4b8a2c3b90230fc->leave($__internal_424457e9ea70f21f4711ff563ff517e2e8be6492968de39af4b8a2c3b90230fc_prof);

        
        $__internal_01cb14b1755eae86cb841f36897788b8cd8759aa37461d5587ff63b4fb6ddd8f->leave($__internal_01cb14b1755eae86cb841f36897788b8cd8759aa37461d5587ff63b4fb6ddd8f_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_7b739e24379fc6f33b646187620dfad0d65fb13686d623b225a37da959cdf46e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b739e24379fc6f33b646187620dfad0d65fb13686d623b225a37da959cdf46e->enter($__internal_7b739e24379fc6f33b646187620dfad0d65fb13686d623b225a37da959cdf46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_7764e3feea5695009e81bcfeb263fd82da797c572df63ac0b74a648ad7e8f433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7764e3feea5695009e81bcfeb263fd82da797c572df63ac0b74a648ad7e8f433->enter($__internal_7764e3feea5695009e81bcfeb263fd82da797c572df63ac0b74a648ad7e8f433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 63, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_7764e3feea5695009e81bcfeb263fd82da797c572df63ac0b74a648ad7e8f433->leave($__internal_7764e3feea5695009e81bcfeb263fd82da797c572df63ac0b74a648ad7e8f433_prof);

        
        $__internal_7b739e24379fc6f33b646187620dfad0d65fb13686d623b225a37da959cdf46e->leave($__internal_7b739e24379fc6f33b646187620dfad0d65fb13686d623b225a37da959cdf46e_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_abedac756b65c8ee7fa701baeb9f5e6274b32030e51beef850f543d643adfa28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abedac756b65c8ee7fa701baeb9f5e6274b32030e51beef850f543d643adfa28->enter($__internal_abedac756b65c8ee7fa701baeb9f5e6274b32030e51beef850f543d643adfa28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_d3aaaafa63a244059acbcccb2da78d4da6accbd7acbf608fa7451afa00e7f259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3aaaafa63a244059acbcccb2da78d4da6accbd7acbf608fa7451afa00e7f259->enter($__internal_d3aaaafa63a244059acbcccb2da78d4da6accbd7acbf608fa7451afa00e7f259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new Twig_Error_Runtime('Variable "_title" does not exist.', 93, $this->getSourceContext()); })()))) {
            // line 94
            echo "                ";
            echo strip_tags((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new Twig_Error_Runtime('Variable "_title" does not exist.', 94, $this->getSourceContext()); })()));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["breadcrumbs_builder"]) || array_key_exists("breadcrumbs_builder", $context) ? $context["breadcrumbs_builder"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs_builder" does not exist.', 98, $this->getSourceContext()); })()), "breadcrumbs", array(0 => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 98, $this->getSourceContext()); })()), 1 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 98, $this->getSourceContext()); })())), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "label", array());
                        // line 106
                        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 106, $this->getSourceContext()); })()) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 107, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 107, $this->getSourceContext()); })()));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 110, $this->getSourceContext()); })()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_d3aaaafa63a244059acbcccb2da78d4da6accbd7acbf608fa7451afa00e7f259->leave($__internal_d3aaaafa63a244059acbcccb2da78d4da6accbd7acbf608fa7451afa00e7f259_prof);

        
        $__internal_abedac756b65c8ee7fa701baeb9f5e6274b32030e51beef850f543d643adfa28->leave($__internal_abedac756b65c8ee7fa701baeb9f5e6274b32030e51beef850f543d643adfa28_prof);

    }

    // line 119
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_b6811b94ab83e9edd8db91cb25e770265de97270cde8c55fb6bcf009a7d8924a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6811b94ab83e9edd8db91cb25e770265de97270cde8c55fb6bcf009a7d8924a->enter($__internal_b6811b94ab83e9edd8db91cb25e770265de97270cde8c55fb6bcf009a7d8924a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_5a787009b58c6bd55d46c0b2846375c3df2702a66c3000ed3cfe64c79a26c6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a787009b58c6bd55d46c0b2846375c3df2702a66c3000ed3cfe64c79a26c6fe->enter($__internal_5a787009b58c6bd55d46c0b2846375c3df2702a66c3000ed3cfe64c79a26c6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        // line 120
        echo "class=\"sonata-bc skin-black fixed
                ";
        // line 121
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 121, $this->getSourceContext()); })()), "request", array()), "cookies", array()), "get", array(0 => "sonata_sidebar_hide"), "method")) {
            // line 122
            echo "sidebar-collapse";
        }
        // line 123
        echo "\"";
        
        $__internal_5a787009b58c6bd55d46c0b2846375c3df2702a66c3000ed3cfe64c79a26c6fe->leave($__internal_5a787009b58c6bd55d46c0b2846375c3df2702a66c3000ed3cfe64c79a26c6fe_prof);

        
        $__internal_b6811b94ab83e9edd8db91cb25e770265de97270cde8c55fb6bcf009a7d8924a->leave($__internal_b6811b94ab83e9edd8db91cb25e770265de97270cde8c55fb6bcf009a7d8924a_prof);

    }

    // line 129
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_190c9278b30de7cacc7b6446c7f81ec14c4f6922a78002f6353ccf5801b814ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190c9278b30de7cacc7b6446c7f81ec14c4f6922a78002f6353ccf5801b814ad->enter($__internal_190c9278b30de7cacc7b6446c7f81ec14c4f6922a78002f6353ccf5801b814ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_577a58e6920f6f354ba2c072fa447d62eddea1c5df952acf3eb1fde3c28b732d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577a58e6920f6f354ba2c072fa447d62eddea1c5df952acf3eb1fde3c28b732d->enter($__internal_577a58e6920f6f354ba2c072fa447d62eddea1c5df952acf3eb1fde3c28b732d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 130
        echo "            <header class=\"main-header\">
                ";
        // line 131
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 138
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 150
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 226
        echo "            </header>
        ";
        
        $__internal_577a58e6920f6f354ba2c072fa447d62eddea1c5df952acf3eb1fde3c28b732d->leave($__internal_577a58e6920f6f354ba2c072fa447d62eddea1c5df952acf3eb1fde3c28b732d_prof);

        
        $__internal_190c9278b30de7cacc7b6446c7f81ec14c4f6922a78002f6353ccf5801b814ad->leave($__internal_190c9278b30de7cacc7b6446c7f81ec14c4f6922a78002f6353ccf5801b814ad_prof);

    }

    // line 131
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_8c6480a3357bb2ab6bb667f6d3f666778d309136b90c901f4fe5e740e0a72ac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6480a3357bb2ab6bb667f6d3f666778d309136b90c901f4fe5e740e0a72ac1->enter($__internal_8c6480a3357bb2ab6bb667f6d3f666778d309136b90c901f4fe5e740e0a72ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_9f48b5282deec20b4d6189f9e1b1a9a2a1f04ec309fceb21147f7f0a6f16c5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f48b5282deec20b4d6189f9e1b1a9a2a1f04ec309fceb21147f7f0a6f16c5b2->enter($__internal_9f48b5282deec20b4d6189f9e1b1a9a2a1f04ec309fceb21147f7f0a6f16c5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 132
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_9f48b5282deec20b4d6189f9e1b1a9a2a1f04ec309fceb21147f7f0a6f16c5b2->leave($__internal_9f48b5282deec20b4d6189f9e1b1a9a2a1f04ec309fceb21147f7f0a6f16c5b2_prof);

        
        $__internal_8c6480a3357bb2ab6bb667f6d3f666778d309136b90c901f4fe5e740e0a72ac1->leave($__internal_8c6480a3357bb2ab6bb667f6d3f666778d309136b90c901f4fe5e740e0a72ac1_prof);

    }

    // line 138
    public function block_logo($context, array $blocks = array())
    {
        $__internal_90d6aebac7fa03afcecf857db84bd89b1de6e835240d2a654f6c968bfd78906a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d6aebac7fa03afcecf857db84bd89b1de6e835240d2a654f6c968bfd78906a->enter($__internal_90d6aebac7fa03afcecf857db84bd89b1de6e835240d2a654f6c968bfd78906a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_73e0971855e39309292f4c402e30b544aa8a11ba8bcadcf342d0c9ce50e807f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e0971855e39309292f4c402e30b544aa8a11ba8bcadcf342d0c9ce50e807f9->enter($__internal_73e0971855e39309292f4c402e30b544aa8a11ba8bcadcf342d0c9ce50e807f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 139
        echo "                    ";
        ob_start();
        // line 140
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 141
        if ((("single_image" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 141, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 141, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 142
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_spray.jpg"), "html", null, true);
            echo "\" alt=\" msf\">
                            ";
        }
        // line 144
        echo "                            ";
        if ((("single_text" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 144, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 144, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 145
            echo "                                <span>";
            echo "MSF Admin";
            echo "</span>
                            ";
        }
        // line 147
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 149
        echo "                ";
        
        $__internal_73e0971855e39309292f4c402e30b544aa8a11ba8bcadcf342d0c9ce50e807f9->leave($__internal_73e0971855e39309292f4c402e30b544aa8a11ba8bcadcf342d0c9ce50e807f9_prof);

        
        $__internal_90d6aebac7fa03afcecf857db84bd89b1de6e835240d2a654f6c968bfd78906a->leave($__internal_90d6aebac7fa03afcecf857db84bd89b1de6e835240d2a654f6c968bfd78906a_prof);

    }

    // line 150
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_b48d5bf255de097d4dd92a9341fc464ac75e9e8f0e6cc15add6158166b723bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b48d5bf255de097d4dd92a9341fc464ac75e9e8f0e6cc15add6158166b723bbd->enter($__internal_b48d5bf255de097d4dd92a9341fc464ac75e9e8f0e6cc15add6158166b723bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_51d0976c0830baa71a34c3c357d3b2870085ed82820aab62f1333f6488b1cf6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d0976c0830baa71a34c3c357d3b2870085ed82820aab62f1333f6488b1cf6c->enter($__internal_51d0976c0830baa71a34c3c357d3b2870085ed82820aab62f1333f6488b1cf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 151
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 157
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 196
        echo "                        </div>

                        ";
        // line 198
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 224
        echo "                    </nav>
                ";
        
        $__internal_51d0976c0830baa71a34c3c357d3b2870085ed82820aab62f1333f6488b1cf6c->leave($__internal_51d0976c0830baa71a34c3c357d3b2870085ed82820aab62f1333f6488b1cf6c_prof);

        
        $__internal_b48d5bf255de097d4dd92a9341fc464ac75e9e8f0e6cc15add6158166b723bbd->leave($__internal_b48d5bf255de097d4dd92a9341fc464ac75e9e8f0e6cc15add6158166b723bbd_prof);

    }

    // line 157
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_1dc6f0b6ab85e55c4bd4716637336dc1d706124ad161f72aec3fe82212f8f51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc6f0b6ab85e55c4bd4716637336dc1d706124ad161f72aec3fe82212f8f51a->enter($__internal_1dc6f0b6ab85e55c4bd4716637336dc1d706124ad161f72aec3fe82212f8f51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_37daf1518bc58e259e72fca086ee928728339504ab8625855cd7567da794fc0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37daf1518bc58e259e72fca086ee928728339504ab8625855cd7567da794fc0a->enter($__internal_37daf1518bc58e259e72fca086ee928728339504ab8625855cd7567da794fc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 158
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 159
        if (( !twig_test_empty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 159, $this->getSourceContext()); })())) || array_key_exists("action", $context))) {
            // line 160
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 161
            if (twig_test_empty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 161, $this->getSourceContext()); })()))) {
                // line 162
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 163
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["breadcrumbs_builder"]) || array_key_exists("breadcrumbs_builder", $context) ? $context["breadcrumbs_builder"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs_builder" does not exist.', 163, $this->getSourceContext()); })()), "breadcrumbs", array(0 => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 163, $this->getSourceContext()); })()), 1 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 163, $this->getSourceContext()); })())), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 164
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 165
                        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "label", array());
                        // line 166
                        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 166, $this->getSourceContext()); })()) === false)) {
                            // line 167
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 167, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 167, $this->getSourceContext()); })()));
                        }
                        // line 170
                        if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                            // line 171
                            echo "                                                            <li>
                                                                ";
                            // line 172
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "uri", array()))) {
                                // line 173
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 174
                                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 175
                                    echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 175, $this->getSourceContext()); })());
                                } else {
                                    // line 177
                                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 177, $this->getSourceContext()); })()), "html", null, true);
                                }
                                // line 179
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 181
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 181, $this->getSourceContext()); })()), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 183
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 185
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 185, $this->getSourceContext()); })()), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 187
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "                                                ";
                }
                // line 189
                echo "                                            ";
            } else {
                // line 190
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 190, $this->getSourceContext()); })());
                echo "
                                            ";
            }
            // line 192
            echo "                                        </ol>
                                    ";
        }
        // line 194
        echo "                                </div>
                            ";
        
        $__internal_37daf1518bc58e259e72fca086ee928728339504ab8625855cd7567da794fc0a->leave($__internal_37daf1518bc58e259e72fca086ee928728339504ab8625855cd7567da794fc0a_prof);

        
        $__internal_1dc6f0b6ab85e55c4bd4716637336dc1d706124ad161f72aec3fe82212f8f51a->leave($__internal_1dc6f0b6ab85e55c4bd4716637336dc1d706124ad161f72aec3fe82212f8f51a_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_54a0cd89307d282d90f4aba29e32a30abe38d62aa90069ebf86706c4d5b2cea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a0cd89307d282d90f4aba29e32a30abe38d62aa90069ebf86706c4d5b2cea7->enter($__internal_54a0cd89307d282d90f4aba29e32a30abe38d62aa90069ebf86706c4d5b2cea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_1e0622878661246eef2658d57aa65d80521b7f2f435c2f897a019b29278e994a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0622878661246eef2658d57aa65d80521b7f2f435c2f897a019b29278e994a->enter($__internal_1e0622878661246eef2658d57aa65d80521b7f2f435c2f897a019b29278e994a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 199
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 199, $this->getSourceContext()); })()), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 199, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "role_admin"), "method")))) {
            // line 200
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 202
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 210
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 220
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 223
        echo "                        ";
        
        $__internal_1e0622878661246eef2658d57aa65d80521b7f2f435c2f897a019b29278e994a->leave($__internal_1e0622878661246eef2658d57aa65d80521b7f2f435c2f897a019b29278e994a_prof);

        
        $__internal_54a0cd89307d282d90f4aba29e32a30abe38d62aa90069ebf86706c4d5b2cea7->leave($__internal_54a0cd89307d282d90f4aba29e32a30abe38d62aa90069ebf86706c4d5b2cea7_prof);

    }

    // line 202
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_1bfa99b8c442c29b3a306e759f198f4c2a68ee528eeb3f5e2bc4e73ea1fdb769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bfa99b8c442c29b3a306e759f198f4c2a68ee528eeb3f5e2bc4e73ea1fdb769->enter($__internal_1bfa99b8c442c29b3a306e759f198f4c2a68ee528eeb3f5e2bc4e73ea1fdb769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_0f712162517a5fdeba10fa801fb0ee554a335206ea931e08f0e9ecc2b81da7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f712162517a5fdeba10fa801fb0ee554a335206ea931e08f0e9ecc2b81da7fe->enter($__internal_0f712162517a5fdeba10fa801fb0ee554a335206ea931e08f0e9ecc2b81da7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 203
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 207
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 207, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "AppBundle:Blog:custom_layout.html.twig", 207)->display($context);
        // line 208
        echo "                                            </li>
                                        ";
        
        $__internal_0f712162517a5fdeba10fa801fb0ee554a335206ea931e08f0e9ecc2b81da7fe->leave($__internal_0f712162517a5fdeba10fa801fb0ee554a335206ea931e08f0e9ecc2b81da7fe_prof);

        
        $__internal_1bfa99b8c442c29b3a306e759f198f4c2a68ee528eeb3f5e2bc4e73ea1fdb769->leave($__internal_1bfa99b8c442c29b3a306e759f198f4c2a68ee528eeb3f5e2bc4e73ea1fdb769_prof);

    }

    // line 210
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_7bd531098123410c16ac96b6fb30dc428cbe545de6901f3a50e6905fdeb521d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd531098123410c16ac96b6fb30dc428cbe545de6901f3a50e6905fdeb521d3->enter($__internal_7bd531098123410c16ac96b6fb30dc428cbe545de6901f3a50e6905fdeb521d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_f069d299c193562da647e4cac5f90302d46e7c9f1f452750a34338dacc3cfb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f069d299c193562da647e4cac5f90302d46e7c9f1f452750a34338dacc3cfb7f->enter($__internal_f069d299c193562da647e4cac5f90302d46e7c9f1f452750a34338dacc3cfb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 211
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 216
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 216, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "AppBundle:Blog:custom_layout.html.twig", 216)->display($context);
        // line 217
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_f069d299c193562da647e4cac5f90302d46e7c9f1f452750a34338dacc3cfb7f->leave($__internal_f069d299c193562da647e4cac5f90302d46e7c9f1f452750a34338dacc3cfb7f_prof);

        
        $__internal_7bd531098123410c16ac96b6fb30dc428cbe545de6901f3a50e6905fdeb521d3->leave($__internal_7bd531098123410c16ac96b6fb30dc428cbe545de6901f3a50e6905fdeb521d3_prof);

    }

    // line 229
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_42094fcf71e0ac73e5b7f411f3e7b29880bdde62986a121db6fa1f292efda390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42094fcf71e0ac73e5b7f411f3e7b29880bdde62986a121db6fa1f292efda390->enter($__internal_42094fcf71e0ac73e5b7f411f3e7b29880bdde62986a121db6fa1f292efda390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_885cd01aa4fb77f20993cbbbd424c214cf2f6d1af41bcfde5ea454d8914038c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885cd01aa4fb77f20993cbbbd424c214cf2f6d1af41bcfde5ea454d8914038c4->enter($__internal_885cd01aa4fb77f20993cbbbd424c214cf2f6d1af41bcfde5ea454d8914038c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 230
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 262
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 264
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 364
        echo "            </div>
        ";
        
        $__internal_885cd01aa4fb77f20993cbbbd424c214cf2f6d1af41bcfde5ea454d8914038c4->leave($__internal_885cd01aa4fb77f20993cbbbd424c214cf2f6d1af41bcfde5ea454d8914038c4_prof);

        
        $__internal_42094fcf71e0ac73e5b7f411f3e7b29880bdde62986a121db6fa1f292efda390->leave($__internal_42094fcf71e0ac73e5b7f411f3e7b29880bdde62986a121db6fa1f292efda390_prof);

    }

    // line 230
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_1d40c36f6ab38ee497c5da275549811141b2f9c04acd04e83ce11282175e64b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d40c36f6ab38ee497c5da275549811141b2f9c04acd04e83ce11282175e64b7->enter($__internal_1d40c36f6ab38ee497c5da275549811141b2f9c04acd04e83ce11282175e64b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_ea0b1fed364f2bc8a66b0425905559bc13ac8aca8c9306a1dccc5aa83241f7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0b1fed364f2bc8a66b0425905559bc13ac8aca8c9306a1dccc5aa83241f7bc->enter($__internal_ea0b1fed364f2bc8a66b0425905559bc13ac8aca8c9306a1dccc5aa83241f7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 231
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 233
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 259
        echo "                    </section>
                </aside>
            ";
        
        $__internal_ea0b1fed364f2bc8a66b0425905559bc13ac8aca8c9306a1dccc5aa83241f7bc->leave($__internal_ea0b1fed364f2bc8a66b0425905559bc13ac8aca8c9306a1dccc5aa83241f7bc_prof);

        
        $__internal_1d40c36f6ab38ee497c5da275549811141b2f9c04acd04e83ce11282175e64b7->leave($__internal_1d40c36f6ab38ee497c5da275549811141b2f9c04acd04e83ce11282175e64b7_prof);

    }

    // line 233
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_eb6ea88a429db6d433295629b6ccaf6c43ab3abd9f3a8cd0137b50b56a0fd9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6ea88a429db6d433295629b6ccaf6c43ab3abd9f3a8cd0137b50b56a0fd9c5->enter($__internal_eb6ea88a429db6d433295629b6ccaf6c43ab3abd9f3a8cd0137b50b56a0fd9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_96e139c1441369e5a99535ba00e7fd12879481060c28e233110f769500d5803d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e139c1441369e5a99535ba00e7fd12879481060c28e233110f769500d5803d->enter($__internal_96e139c1441369e5a99535ba00e7fd12879481060c28e233110f769500d5803d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 234
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 246
        echo "
                            ";
        // line 247
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 248
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 251
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 258
        echo "                        ";
        
        $__internal_96e139c1441369e5a99535ba00e7fd12879481060c28e233110f769500d5803d->leave($__internal_96e139c1441369e5a99535ba00e7fd12879481060c28e233110f769500d5803d_prof);

        
        $__internal_eb6ea88a429db6d433295629b6ccaf6c43ab3abd9f3a8cd0137b50b56a0fd9c5->leave($__internal_eb6ea88a429db6d433295629b6ccaf6c43ab3abd9f3a8cd0137b50b56a0fd9c5_prof);

    }

    // line 234
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_276c946f4aefd050744f850849f85ed7ffe2adeccc2ef296492c83c7c6084f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276c946f4aefd050744f850849f85ed7ffe2adeccc2ef296492c83c7c6084f8a->enter($__internal_276c946f4aefd050744f850849f85ed7ffe2adeccc2ef296492c83c7c6084f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_5f257bebf8bf0fccf6ef4763b97b7863b5725fdbef9b47ba5ea72e78ca31765d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f257bebf8bf0fccf6ef4763b97b7863b5725fdbef9b47ba5ea72e78ca31765d->enter($__internal_5f257bebf8bf0fccf6ef4763b97b7863b5725fdbef9b47ba5ea72e78ca31765d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 235
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 237, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_5f257bebf8bf0fccf6ef4763b97b7863b5725fdbef9b47ba5ea72e78ca31765d->leave($__internal_5f257bebf8bf0fccf6ef4763b97b7863b5725fdbef9b47ba5ea72e78ca31765d_prof);

        
        $__internal_276c946f4aefd050744f850849f85ed7ffe2adeccc2ef296492c83c7c6084f8a->leave($__internal_276c946f4aefd050744f850849f85ed7ffe2adeccc2ef296492c83c7c6084f8a_prof);

    }

    // line 247
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_f2877ae8eacb084ff9e0ab5090b09243655d024daa97b6b6401ac2860bbfc1f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2877ae8eacb084ff9e0ab5090b09243655d024daa97b6b6401ac2860bbfc1f8->enter($__internal_f2877ae8eacb084ff9e0ab5090b09243655d024daa97b6b6401ac2860bbfc1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_129832454e116c2a245d72d776f3382599aba0659a1cf5e6f949f18816fa2fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_129832454e116c2a245d72d776f3382599aba0659a1cf5e6f949f18816fa2fc8->enter($__internal_129832454e116c2a245d72d776f3382599aba0659a1cf5e6f949f18816fa2fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_129832454e116c2a245d72d776f3382599aba0659a1cf5e6f949f18816fa2fc8->leave($__internal_129832454e116c2a245d72d776f3382599aba0659a1cf5e6f949f18816fa2fc8_prof);

        
        $__internal_f2877ae8eacb084ff9e0ab5090b09243655d024daa97b6b6401ac2860bbfc1f8->leave($__internal_f2877ae8eacb084ff9e0ab5090b09243655d024daa97b6b6401ac2860bbfc1f8_prof);

    }

    // line 248
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_90a214f3ef7d45bc1d11c29de28feed8b3ec9565ef5451b8e713973754451878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a214f3ef7d45bc1d11c29de28feed8b3ec9565ef5451b8e713973754451878->enter($__internal_90a214f3ef7d45bc1d11c29de28feed8b3ec9565ef5451b8e713973754451878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_27cc3da55fd57766ad4d97c3d5fa28c7f6a36ee19a7dc4b5825256e52e2b5b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cc3da55fd57766ad4d97c3d5fa28c7f6a36ee19a7dc4b5825256e52e2b5b9b->enter($__internal_27cc3da55fd57766ad4d97c3d5fa28c7f6a36ee19a7dc4b5825256e52e2b5b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 249
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 249, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_27cc3da55fd57766ad4d97c3d5fa28c7f6a36ee19a7dc4b5825256e52e2b5b9b->leave($__internal_27cc3da55fd57766ad4d97c3d5fa28c7f6a36ee19a7dc4b5825256e52e2b5b9b_prof);

        
        $__internal_90a214f3ef7d45bc1d11c29de28feed8b3ec9565ef5451b8e713973754451878->leave($__internal_90a214f3ef7d45bc1d11c29de28feed8b3ec9565ef5451b8e713973754451878_prof);

    }

    // line 251
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_d45f30fda8dc4ba2e14c94e7a79260171534d73e459dfa8759732141880f2f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45f30fda8dc4ba2e14c94e7a79260171534d73e459dfa8759732141880f2f11->enter($__internal_d45f30fda8dc4ba2e14c94e7a79260171534d73e459dfa8759732141880f2f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_2ae5ac3807e7264bc6e9664fe24b981c8a41bf6cc55f1007bd35ec1135287828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae5ac3807e7264bc6e9664fe24b981c8a41bf6cc55f1007bd35ec1135287828->enter($__internal_2ae5ac3807e7264bc6e9664fe24b981c8a41bf6cc55f1007bd35ec1135287828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 252
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 253
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 256
        echo "                                </p>
                            ";
        
        $__internal_2ae5ac3807e7264bc6e9664fe24b981c8a41bf6cc55f1007bd35ec1135287828->leave($__internal_2ae5ac3807e7264bc6e9664fe24b981c8a41bf6cc55f1007bd35ec1135287828_prof);

        
        $__internal_d45f30fda8dc4ba2e14c94e7a79260171534d73e459dfa8759732141880f2f11->leave($__internal_d45f30fda8dc4ba2e14c94e7a79260171534d73e459dfa8759732141880f2f11_prof);

    }

    // line 253
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_5f28e1c270debbb46e6d9c03ba31b1dbce32e6f815d03e2ddc13704997a93a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f28e1c270debbb46e6d9c03ba31b1dbce32e6f815d03e2ddc13704997a93a8c->enter($__internal_5f28e1c270debbb46e6d9c03ba31b1dbce32e6f815d03e2ddc13704997a93a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_d1db78a2e4cd25b786fe2357c727107b34a31a2804faddddba1ff4e84aa314bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1db78a2e4cd25b786fe2357c727107b34a31a2804faddddba1ff4e84aa314bf->enter($__internal_d1db78a2e4cd25b786fe2357c727107b34a31a2804faddddba1ff4e84aa314bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 254
        echo "                                        <a href=\"http://localhost/MyEcommerce/web/app_dev.php/login\" rel=\"noreferrer\" target=\"_blank\">MyScentFactory project</a>
                                    ";
        
        $__internal_d1db78a2e4cd25b786fe2357c727107b34a31a2804faddddba1ff4e84aa314bf->leave($__internal_d1db78a2e4cd25b786fe2357c727107b34a31a2804faddddba1ff4e84aa314bf_prof);

        
        $__internal_5f28e1c270debbb46e6d9c03ba31b1dbce32e6f815d03e2ddc13704997a93a8c->leave($__internal_5f28e1c270debbb46e6d9c03ba31b1dbce32e6f815d03e2ddc13704997a93a8c_prof);

    }

    // line 264
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_5d0f939f4db331c0286086c8a8f7abe2059dae4f1a24fe8b3f2548781ed3949c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0f939f4db331c0286086c8a8f7abe2059dae4f1a24fe8b3f2548781ed3949c->enter($__internal_5d0f939f4db331c0286086c8a8f7abe2059dae4f1a24fe8b3f2548781ed3949c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_09b7b44bb7a0aa81eb3a9ad72d6d26a0ad094a4f173e6af6cf44176494a63cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b7b44bb7a0aa81eb3a9ad72d6d26a0ad094a4f173e6af6cf44176494a63cd7->enter($__internal_09b7b44bb7a0aa81eb3a9ad72d6d26a0ad094a4f173e6af6cf44176494a63cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 265
        echo "                    <section class=\"content-header\">

                        ";
        // line 267
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 325
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 328
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 362
        echo "                    </section>
                ";
        
        $__internal_09b7b44bb7a0aa81eb3a9ad72d6d26a0ad094a4f173e6af6cf44176494a63cd7->leave($__internal_09b7b44bb7a0aa81eb3a9ad72d6d26a0ad094a4f173e6af6cf44176494a63cd7_prof);

        
        $__internal_5d0f939f4db331c0286086c8a8f7abe2059dae4f1a24fe8b3f2548781ed3949c->leave($__internal_5d0f939f4db331c0286086c8a8f7abe2059dae4f1a24fe8b3f2548781ed3949c_prof);

    }

    // line 267
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_9021c6c2492c11d927e556f2c7c75304a48fee4b659f61094493749bb882d349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9021c6c2492c11d927e556f2c7c75304a48fee4b659f61094493749bb882d349->enter($__internal_9021c6c2492c11d927e556f2c7c75304a48fee4b659f61094493749bb882d349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_e69d9693fbcaab1b9e70ba859658b6252b574b485acdd346862049e9167428f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69d9693fbcaab1b9e70ba859658b6252b574b485acdd346862049e9167428f5->enter($__internal_e69d9693fbcaab1b9e70ba859658b6252b574b485acdd346862049e9167428f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 268
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 324
        echo "                        ";
        
        $__internal_e69d9693fbcaab1b9e70ba859658b6252b574b485acdd346862049e9167428f5->leave($__internal_e69d9693fbcaab1b9e70ba859658b6252b574b485acdd346862049e9167428f5_prof);

        
        $__internal_9021c6c2492c11d927e556f2c7c75304a48fee4b659f61094493749bb882d349->leave($__internal_9021c6c2492c11d927e556f2c7c75304a48fee4b659f61094493749bb882d349_prof);

    }

    // line 268
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_4aefefa9c29c20369b8367bf663972e9149f9d8affe1b2e87b78c7eae264dcdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aefefa9c29c20369b8367bf663972e9149f9d8affe1b2e87b78c7eae264dcdc->enter($__internal_4aefefa9c29c20369b8367bf663972e9149f9d8affe1b2e87b78c7eae264dcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_bdb71272b947b2619445318a9aa0b792f6f8c8dd11f309b0292022517c10dbd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb71272b947b2619445318a9aa0b792f6f8c8dd11f309b0292022517c10dbd9->enter($__internal_bdb71272b947b2619445318a9aa0b792f6f8c8dd11f309b0292022517c10dbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 269
        echo "                                ";
        if (((( !twig_test_empty((isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new Twig_Error_Runtime('Variable "_navbar_title" does not exist.', 269, $this->getSourceContext()); })())) ||  !twig_test_empty(        // line 270
(isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 270, $this->getSourceContext()); })()))) ||  !twig_test_empty(        // line 271
(isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 271, $this->getSourceContext()); })()))) ||  !twig_test_empty(        // line 272
(isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 272, $this->getSourceContext()); })())))) {
            // line 274
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 276
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 283
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 285
            if ( !twig_test_empty((isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 285, $this->getSourceContext()); })()))) {
                // line 286
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 287
                echo (isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 287, $this->getSourceContext()); })());
                echo "
                                                    </div>
                                                ";
            }
            // line 290
            echo "
                                                ";
            // line 291
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 291, $this->getSourceContext()); })()) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 291, $this->getSourceContext()); })()), "listModes", array())) > 1))) {
                // line 292
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 293
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 293, $this->getSourceContext()); })()), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 294
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 294, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 294, $this->getSourceContext()); })()), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 294, $this->getSourceContext()); })()), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 296
                echo "                                                    </div>
                                                ";
            }
            // line 298
            echo "
                                                ";
            // line 299
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 315
            echo "
                                                ";
            // line 316
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 316, $this->getSourceContext()); })()))) {
                // line 317
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 317, $this->getSourceContext()); })());
                echo "
                                                ";
            }
            // line 319
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 323
        echo "                            ";
        
        $__internal_bdb71272b947b2619445318a9aa0b792f6f8c8dd11f309b0292022517c10dbd9->leave($__internal_bdb71272b947b2619445318a9aa0b792f6f8c8dd11f309b0292022517c10dbd9_prof);

        
        $__internal_4aefefa9c29c20369b8367bf663972e9149f9d8affe1b2e87b78c7eae264dcdc->leave($__internal_4aefefa9c29c20369b8367bf663972e9149f9d8affe1b2e87b78c7eae264dcdc_prof);

    }

    // line 276
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_e409558cc86a29d45ef7ca0c4d5dfcba641d83400796544baf55d90700435c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e409558cc86a29d45ef7ca0c4d5dfcba641d83400796544baf55d90700435c51->enter($__internal_e409558cc86a29d45ef7ca0c4d5dfcba641d83400796544baf55d90700435c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_6e82310d8b78eb80542745581bac5dba08a3b52fafa2bcfb48a41fa40f3efae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e82310d8b78eb80542745581bac5dba08a3b52fafa2bcfb48a41fa40f3efae5->enter($__internal_6e82310d8b78eb80542745581bac5dba08a3b52fafa2bcfb48a41fa40f3efae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 277
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new Twig_Error_Runtime('Variable "_navbar_title" does not exist.', 277, $this->getSourceContext()); })()))) {
            // line 278
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 279
            echo (isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new Twig_Error_Runtime('Variable "_navbar_title" does not exist.', 279, $this->getSourceContext()); })());
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 282
        echo "                                            ";
        
        $__internal_6e82310d8b78eb80542745581bac5dba08a3b52fafa2bcfb48a41fa40f3efae5->leave($__internal_6e82310d8b78eb80542745581bac5dba08a3b52fafa2bcfb48a41fa40f3efae5_prof);

        
        $__internal_e409558cc86a29d45ef7ca0c4d5dfcba641d83400796544baf55d90700435c51->leave($__internal_e409558cc86a29d45ef7ca0c4d5dfcba641d83400796544baf55d90700435c51_prof);

    }

    // line 299
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_09638decfd7821d94778979416a4bf02be2bedf15bae599c4c2231e2145b592d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09638decfd7821d94778979416a4bf02be2bedf15bae599c4c2231e2145b592d->enter($__internal_09638decfd7821d94778979416a4bf02be2bedf15bae599c4c2231e2145b592d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_55683944d3053389de1f2a663dcb3ea32e2ac8fa160ed60e33e850298e7c55d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55683944d3053389de1f2a663dcb3ea32e2ac8fa160ed60e33e850298e7c55d0->enter($__internal_55683944d3053389de1f2a663dcb3ea32e2ac8fa160ed60e33e850298e7c55d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 300
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter((isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 300, $this->getSourceContext()); })()), array("<li>" => "", "</li>" => ""))))) {
            // line 301
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 302
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 302, $this->getSourceContext()); })()), "</a>")) > 2)) {
                // line 303
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 304
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 306
                echo (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 306, $this->getSourceContext()); })());
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 310
                echo "                                                            ";
                echo (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 310, $this->getSourceContext()); })());
                echo "
                                                        ";
            }
            // line 312
            echo "                                                        </ul>
                                                    ";
        }
        // line 314
        echo "                                                ";
        
        $__internal_55683944d3053389de1f2a663dcb3ea32e2ac8fa160ed60e33e850298e7c55d0->leave($__internal_55683944d3053389de1f2a663dcb3ea32e2ac8fa160ed60e33e850298e7c55d0_prof);

        
        $__internal_09638decfd7821d94778979416a4bf02be2bedf15bae599c4c2231e2145b592d->leave($__internal_09638decfd7821d94778979416a4bf02be2bedf15bae599c4c2231e2145b592d_prof);

    }

    // line 328
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_c8c1eac2e30649368e84721d7d23e4ae51beb95ab0693ba822a315ce2fff37a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c1eac2e30649368e84721d7d23e4ae51beb95ab0693ba822a315ce2fff37a0->enter($__internal_c8c1eac2e30649368e84721d7d23e4ae51beb95ab0693ba822a315ce2fff37a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_839aefc607800d8c1a69ed7d589bde8d9c4d008a8b286a2af54591ab5b905dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839aefc607800d8c1a69ed7d589bde8d9c4d008a8b286a2af54591ab5b905dfa->enter($__internal_839aefc607800d8c1a69ed7d589bde8d9c4d008a8b286a2af54591ab5b905dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 329
        echo "
                            ";
        // line 330
        $this->displayBlock('notice', $context, $blocks);
        // line 333
        echo "
                            ";
        // line 334
        if ( !twig_test_empty((isset($context["_preview"]) || array_key_exists("_preview", $context) ? $context["_preview"] : (function () { throw new Twig_Error_Runtime('Variable "_preview" does not exist.', 334, $this->getSourceContext()); })()))) {
            // line 335
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) || array_key_exists("_preview", $context) ? $context["_preview"] : (function () { throw new Twig_Error_Runtime('Variable "_preview" does not exist.', 335, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 337
        echo "
                            ";
        // line 338
        if ( !twig_test_empty((isset($context["_content"]) || array_key_exists("_content", $context) ? $context["_content"] : (function () { throw new Twig_Error_Runtime('Variable "_content" does not exist.', 338, $this->getSourceContext()); })()))) {
            // line 339
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) || array_key_exists("_content", $context) ? $context["_content"] : (function () { throw new Twig_Error_Runtime('Variable "_content" does not exist.', 339, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 341
        echo "
                            ";
        // line 342
        if ( !twig_test_empty((isset($context["_show"]) || array_key_exists("_show", $context) ? $context["_show"] : (function () { throw new Twig_Error_Runtime('Variable "_show" does not exist.', 342, $this->getSourceContext()); })()))) {
            // line 343
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) || array_key_exists("_show", $context) ? $context["_show"] : (function () { throw new Twig_Error_Runtime('Variable "_show" does not exist.', 343, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 345
        echo "
                            ";
        // line 346
        if ( !twig_test_empty((isset($context["_form"]) || array_key_exists("_form", $context) ? $context["_form"] : (function () { throw new Twig_Error_Runtime('Variable "_form" does not exist.', 346, $this->getSourceContext()); })()))) {
            // line 347
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) || array_key_exists("_form", $context) ? $context["_form"] : (function () { throw new Twig_Error_Runtime('Variable "_form" does not exist.', 347, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 349
        echo "
                            ";
        // line 350
        if ( !twig_test_empty((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 350, $this->getSourceContext()); })()))) {
            // line 351
            echo "                                <div class=\"row\">
                                    ";
            // line 352
            echo (isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 352, $this->getSourceContext()); })());
            echo "
                                </div>
                            ";
        }
        // line 355
        echo "
                            ";
        // line 356
        if ( !twig_test_empty((isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 356, $this->getSourceContext()); })()))) {
            // line 357
            echo "                                <div class=\"row\">
                                    ";
            // line 358
            echo (isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 358, $this->getSourceContext()); })());
            echo "
                                </div>
                            ";
        }
        // line 361
        echo "                        ";
        
        $__internal_839aefc607800d8c1a69ed7d589bde8d9c4d008a8b286a2af54591ab5b905dfa->leave($__internal_839aefc607800d8c1a69ed7d589bde8d9c4d008a8b286a2af54591ab5b905dfa_prof);

        
        $__internal_c8c1eac2e30649368e84721d7d23e4ae51beb95ab0693ba822a315ce2fff37a0->leave($__internal_c8c1eac2e30649368e84721d7d23e4ae51beb95ab0693ba822a315ce2fff37a0_prof);

    }

    // line 330
    public function block_notice($context, array $blocks = array())
    {
        $__internal_295496638ff00ccbd383090d6586d9333792a585251945d3a980e0e35b8cd636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295496638ff00ccbd383090d6586d9333792a585251945d3a980e0e35b8cd636->enter($__internal_295496638ff00ccbd383090d6586d9333792a585251945d3a980e0e35b8cd636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_80df3efa8c8de4ed7899bf74d194d3311ec8670617a1470f83a3b1f4978f3eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80df3efa8c8de4ed7899bf74d194d3311ec8670617a1470f83a3b1f4978f3eb6->enter($__internal_80df3efa8c8de4ed7899bf74d194d3311ec8670617a1470f83a3b1f4978f3eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 331
        echo "                                ";
        $this->loadTemplate("@SonataCore/FlashMessage/render.html.twig", "AppBundle:Blog:custom_layout.html.twig", 331)->display($context);
        // line 332
        echo "                            ";
        
        $__internal_80df3efa8c8de4ed7899bf74d194d3311ec8670617a1470f83a3b1f4978f3eb6->leave($__internal_80df3efa8c8de4ed7899bf74d194d3311ec8670617a1470f83a3b1f4978f3eb6_prof);

        
        $__internal_295496638ff00ccbd383090d6586d9333792a585251945d3a980e0e35b8cd636->leave($__internal_295496638ff00ccbd383090d6586d9333792a585251945d3a980e0e35b8cd636_prof);

    }

    // line 369
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_ccb722a047ab95a6fccc7f8c06488b920dae920d44bef8cb343a228a68c65289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb722a047ab95a6fccc7f8c06488b920dae920d44bef8cb343a228a68c65289->enter($__internal_ccb722a047ab95a6fccc7f8c06488b920dae920d44bef8cb343a228a68c65289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_68502c95a013d8d39e989c7c2017f936b99f13ba69d52ddc803116872eb5ca19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68502c95a013d8d39e989c7c2017f936b99f13ba69d52ddc803116872eb5ca19->enter($__internal_68502c95a013d8d39e989c7c2017f936b99f13ba69d52ddc803116872eb5ca19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 370
        echo "            ";
        // line 371
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_68502c95a013d8d39e989c7c2017f936b99f13ba69d52ddc803116872eb5ca19->leave($__internal_68502c95a013d8d39e989c7c2017f936b99f13ba69d52ddc803116872eb5ca19_prof);

        
        $__internal_ccb722a047ab95a6fccc7f8c06488b920dae920d44bef8cb343a228a68c65289->leave($__internal_ccb722a047ab95a6fccc7f8c06488b920dae920d44bef8cb343a228a68c65289_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Blog:custom_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1466 => 371,  1464 => 370,  1455 => 369,  1445 => 332,  1442 => 331,  1433 => 330,  1423 => 361,  1417 => 358,  1414 => 357,  1412 => 356,  1409 => 355,  1403 => 352,  1400 => 351,  1398 => 350,  1395 => 349,  1389 => 347,  1387 => 346,  1384 => 345,  1378 => 343,  1376 => 342,  1373 => 341,  1367 => 339,  1365 => 338,  1362 => 337,  1356 => 335,  1354 => 334,  1351 => 333,  1349 => 330,  1346 => 329,  1337 => 328,  1327 => 314,  1323 => 312,  1317 => 310,  1310 => 306,  1305 => 304,  1302 => 303,  1300 => 302,  1297 => 301,  1294 => 300,  1285 => 299,  1275 => 282,  1269 => 279,  1266 => 278,  1263 => 277,  1254 => 276,  1244 => 323,  1238 => 319,  1232 => 317,  1230 => 316,  1227 => 315,  1225 => 299,  1222 => 298,  1218 => 296,  1203 => 294,  1199 => 293,  1196 => 292,  1194 => 291,  1191 => 290,  1185 => 287,  1182 => 286,  1180 => 285,  1176 => 283,  1174 => 276,  1170 => 274,  1168 => 272,  1167 => 271,  1166 => 270,  1164 => 269,  1155 => 268,  1145 => 324,  1142 => 268,  1133 => 267,  1122 => 362,  1120 => 328,  1115 => 325,  1113 => 267,  1109 => 265,  1100 => 264,  1089 => 254,  1080 => 253,  1069 => 256,  1067 => 253,  1064 => 252,  1055 => 251,  1042 => 249,  1033 => 248,  1015 => 247,  994 => 237,  988 => 235,  979 => 234,  969 => 258,  966 => 251,  963 => 248,  961 => 247,  958 => 246,  955 => 234,  946 => 233,  934 => 259,  932 => 233,  928 => 231,  919 => 230,  908 => 364,  906 => 264,  902 => 262,  899 => 230,  890 => 229,  878 => 217,  876 => 216,  869 => 211,  860 => 210,  849 => 208,  847 => 207,  841 => 203,  832 => 202,  822 => 223,  817 => 220,  814 => 210,  812 => 202,  808 => 200,  805 => 199,  796 => 198,  785 => 194,  781 => 192,  775 => 190,  772 => 189,  769 => 188,  755 => 187,  749 => 185,  745 => 183,  739 => 181,  735 => 179,  732 => 177,  729 => 175,  727 => 174,  722 => 173,  720 => 172,  717 => 171,  715 => 170,  712 => 167,  710 => 166,  708 => 165,  706 => 164,  688 => 163,  685 => 162,  683 => 161,  680 => 160,  678 => 159,  675 => 158,  666 => 157,  655 => 224,  653 => 198,  649 => 196,  647 => 157,  639 => 151,  630 => 150,  620 => 149,  616 => 147,  610 => 145,  607 => 144,  601 => 142,  599 => 141,  594 => 140,  591 => 139,  582 => 138,  568 => 134,  564 => 132,  555 => 131,  544 => 226,  541 => 150,  538 => 138,  536 => 131,  533 => 130,  524 => 129,  514 => 123,  511 => 122,  509 => 121,  506 => 120,  497 => 119,  487 => 115,  484 => 114,  481 => 113,  467 => 112,  462 => 110,  459 => 107,  457 => 106,  455 => 105,  453 => 104,  449 => 101,  446 => 100,  443 => 99,  426 => 98,  423 => 97,  420 => 96,  414 => 94,  412 => 93,  406 => 91,  397 => 90,  387 => 66,  378 => 64,  373 => 63,  364 => 62,  343 => 50,  339 => 48,  333 => 47,  325 => 46,  317 => 45,  309 => 44,  305 => 42,  296 => 41,  286 => 87,  283 => 86,  277 => 84,  274 => 83,  271 => 81,  266 => 80,  263 => 79,  260 => 77,  256 => 75,  254 => 73,  252 => 71,  249 => 70,  247 => 69,  245 => 68,  242 => 67,  240 => 62,  237 => 61,  234 => 41,  225 => 40,  215 => 38,  206 => 36,  201 => 35,  192 => 34,  179 => 29,  170 => 28,  152 => 26,  139 => 376,  136 => 375,  133 => 369,  131 => 368,  127 => 366,  125 => 229,  122 => 228,  120 => 129,  114 => 125,  112 => 119,  107 => 116,  105 => 90,  101 => 88,  99 => 40,  96 => 39,  94 => 34,  91 => 33,  89 => 28,  84 => 26,  81 => 25,  79 => 23,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  59 => 13,  57 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{%- set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null -%}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|striptags|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body
            {% block body_attributes -%}
                class=\"sonata-bc skin-black fixed
                {% if app.request.cookies.get('sonata_sidebar_hide') -%}
                    sidebar-collapse
                {%- endif -%}\"
            {%- endblock -%}
    >

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset('img/msf_spray.jpg') }}\" alt=\" msf\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ 'MSF Admin' }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted(sonata_admin.adminPool.getOption('role_admin')) %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"http://localhost/MyEcommerce/web/app_dev.php/login\" rel=\"noreferrer\" target=\"_blank\">MyScentFactory project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _navbar_title is not empty
                                  or _tab_menu is not empty
                                  or _actions is not empty
                                  or _list_filters_actions is not empty
                                 %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include '@SonataCore/FlashMessage/render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "AppBundle:Blog:custom_layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/AppBundle/Resources/views/Blog/custom_layout.html.twig");
    }
}
