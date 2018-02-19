<?php

/* @AppBundle/Resources/SonataTemplates/views/standard_layout.html.twig */
class __TwigTemplate_25db0c5175d30a660a85e3ee02f5d4740cbaf78e10f4deda3bb3661d5ceb6713 extends Twig_Template
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
        $__internal_3b90b481bd054f958d25b1ebd9e8211523cacce56ce6b6e7887af068da66863d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b90b481bd054f958d25b1ebd9e8211523cacce56ce6b6e7887af068da66863d->enter($__internal_3b90b481bd054f958d25b1ebd9e8211523cacce56ce6b6e7887af068da66863d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/SonataTemplates/views/standard_layout.html.twig"));

        $__internal_9c818c8720a7616618713d78d662f507a32886f1c33b5cf6a21a3203d437d4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c818c8720a7616618713d78d662f507a32886f1c33b5cf6a21a3203d437d4b4->enter($__internal_9c818c8720a7616618713d78d662f507a32886f1c33b5cf6a21a3203d437d4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBundle/Resources/SonataTemplates/views/standard_layout.html.twig"));

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
        // line 367
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 367, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 368
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 374
            echo "    ";
        }
        // line 375
        echo "
    </body>
</html>
";
        
        $__internal_3b90b481bd054f958d25b1ebd9e8211523cacce56ce6b6e7887af068da66863d->leave($__internal_3b90b481bd054f958d25b1ebd9e8211523cacce56ce6b6e7887af068da66863d_prof);

        
        $__internal_9c818c8720a7616618713d78d662f507a32886f1c33b5cf6a21a3203d437d4b4->leave($__internal_9c818c8720a7616618713d78d662f507a32886f1c33b5cf6a21a3203d437d4b4_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_43f0baa063caf31d8b2db30aeccf82280eca1ad14de27d91cc3581ac2e1ce9cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f0baa063caf31d8b2db30aeccf82280eca1ad14de27d91cc3581ac2e1ce9cc->enter($__internal_43f0baa063caf31d8b2db30aeccf82280eca1ad14de27d91cc3581ac2e1ce9cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_41e0d734802a550af4142f672c0d4aa6eb7520a22610ef49caa9417033136140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e0d734802a550af4142f672c0d4aa6eb7520a22610ef49caa9417033136140->enter($__internal_41e0d734802a550af4142f672c0d4aa6eb7520a22610ef49caa9417033136140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_41e0d734802a550af4142f672c0d4aa6eb7520a22610ef49caa9417033136140->leave($__internal_41e0d734802a550af4142f672c0d4aa6eb7520a22610ef49caa9417033136140_prof);

        
        $__internal_43f0baa063caf31d8b2db30aeccf82280eca1ad14de27d91cc3581ac2e1ce9cc->leave($__internal_43f0baa063caf31d8b2db30aeccf82280eca1ad14de27d91cc3581ac2e1ce9cc_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_c47a3a60c03183a06d05e4c80aae2d9fc3062f6f044ce86c42fa4c727e13d79d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47a3a60c03183a06d05e4c80aae2d9fc3062f6f044ce86c42fa4c727e13d79d->enter($__internal_c47a3a60c03183a06d05e4c80aae2d9fc3062f6f044ce86c42fa4c727e13d79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_d63efd2de852dd0f60a56e13fa3f8c63c0d09e253648e3d0e28a58629a4b9923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63efd2de852dd0f60a56e13fa3f8c63c0d09e253648e3d0e28a58629a4b9923->enter($__internal_d63efd2de852dd0f60a56e13fa3f8c63c0d09e253648e3d0e28a58629a4b9923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_d63efd2de852dd0f60a56e13fa3f8c63c0d09e253648e3d0e28a58629a4b9923->leave($__internal_d63efd2de852dd0f60a56e13fa3f8c63c0d09e253648e3d0e28a58629a4b9923_prof);

        
        $__internal_c47a3a60c03183a06d05e4c80aae2d9fc3062f6f044ce86c42fa4c727e13d79d->leave($__internal_c47a3a60c03183a06d05e4c80aae2d9fc3062f6f044ce86c42fa4c727e13d79d_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3dbcd9e7d24ac1b467134bfc1be7650b3cc781115c51513c13713ce3ed25d71b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dbcd9e7d24ac1b467134bfc1be7650b3cc781115c51513c13713ce3ed25d71b->enter($__internal_3dbcd9e7d24ac1b467134bfc1be7650b3cc781115c51513c13713ce3ed25d71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_492d16362f16f730254e773d1aa827ef1a93b8e21be940281a6f37aeefae2463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492d16362f16f730254e773d1aa827ef1a93b8e21be940281a6f37aeefae2463->enter($__internal_492d16362f16f730254e773d1aa827ef1a93b8e21be940281a6f37aeefae2463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_492d16362f16f730254e773d1aa827ef1a93b8e21be940281a6f37aeefae2463->leave($__internal_492d16362f16f730254e773d1aa827ef1a93b8e21be940281a6f37aeefae2463_prof);

        
        $__internal_3dbcd9e7d24ac1b467134bfc1be7650b3cc781115c51513c13713ce3ed25d71b->leave($__internal_3dbcd9e7d24ac1b467134bfc1be7650b3cc781115c51513c13713ce3ed25d71b_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d24eceb66b41f16bbd18e8647a93d36a2caf4b392d2dbaec7f39de8bdd14bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d24eceb66b41f16bbd18e8647a93d36a2caf4b392d2dbaec7f39de8bdd14bfd->enter($__internal_8d24eceb66b41f16bbd18e8647a93d36a2caf4b392d2dbaec7f39de8bdd14bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0efc51a24b685906ba21155eea99ab3002d52278709752d5d63bd884c8f7c251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0efc51a24b685906ba21155eea99ab3002d52278709752d5d63bd884c8f7c251->enter($__internal_0efc51a24b685906ba21155eea99ab3002d52278709752d5d63bd884c8f7c251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0efc51a24b685906ba21155eea99ab3002d52278709752d5d63bd884c8f7c251->leave($__internal_0efc51a24b685906ba21155eea99ab3002d52278709752d5d63bd884c8f7c251_prof);

        
        $__internal_8d24eceb66b41f16bbd18e8647a93d36a2caf4b392d2dbaec7f39de8bdd14bfd->leave($__internal_8d24eceb66b41f16bbd18e8647a93d36a2caf4b392d2dbaec7f39de8bdd14bfd_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_da01092ef2015c558e5657ce1eb9006025a0f3022bad6e7d40f0e2f7831e9e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da01092ef2015c558e5657ce1eb9006025a0f3022bad6e7d40f0e2f7831e9e63->enter($__internal_da01092ef2015c558e5657ce1eb9006025a0f3022bad6e7d40f0e2f7831e9e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_41a658d109b455caeeb7ed59909de16b2e90cbf07f8227d13e654b74b8e2000a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a658d109b455caeeb7ed59909de16b2e90cbf07f8227d13e654b74b8e2000a->enter($__internal_41a658d109b455caeeb7ed59909de16b2e90cbf07f8227d13e654b74b8e2000a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

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
        
        $__internal_41a658d109b455caeeb7ed59909de16b2e90cbf07f8227d13e654b74b8e2000a->leave($__internal_41a658d109b455caeeb7ed59909de16b2e90cbf07f8227d13e654b74b8e2000a_prof);

        
        $__internal_da01092ef2015c558e5657ce1eb9006025a0f3022bad6e7d40f0e2f7831e9e63->leave($__internal_da01092ef2015c558e5657ce1eb9006025a0f3022bad6e7d40f0e2f7831e9e63_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_251110629c490fdebb5d08eef5287689fdc2c63b0942dc90a8e013f3d6085dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251110629c490fdebb5d08eef5287689fdc2c63b0942dc90a8e013f3d6085dba->enter($__internal_251110629c490fdebb5d08eef5287689fdc2c63b0942dc90a8e013f3d6085dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_7abed2cab3de4dcc8c2a3c4acf5ade735f222fbeba8f7899d6895356935d4e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7abed2cab3de4dcc8c2a3c4acf5ade735f222fbeba8f7899d6895356935d4e19->enter($__internal_7abed2cab3de4dcc8c2a3c4acf5ade735f222fbeba8f7899d6895356935d4e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

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
        
        $__internal_7abed2cab3de4dcc8c2a3c4acf5ade735f222fbeba8f7899d6895356935d4e19->leave($__internal_7abed2cab3de4dcc8c2a3c4acf5ade735f222fbeba8f7899d6895356935d4e19_prof);

        
        $__internal_251110629c490fdebb5d08eef5287689fdc2c63b0942dc90a8e013f3d6085dba->leave($__internal_251110629c490fdebb5d08eef5287689fdc2c63b0942dc90a8e013f3d6085dba_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_14d8eb857338071162f94995aec2388d1da5d32a2a2a274022d39c6c304a86a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d8eb857338071162f94995aec2388d1da5d32a2a2a274022d39c6c304a86a6->enter($__internal_14d8eb857338071162f94995aec2388d1da5d32a2a2a274022d39c6c304a86a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_47a88b1f7461e94f4b83ade26f13a3e66751babffdc968162d267c53a4e051d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a88b1f7461e94f4b83ade26f13a3e66751babffdc968162d267c53a4e051d3->enter($__internal_47a88b1f7461e94f4b83ade26f13a3e66751babffdc968162d267c53a4e051d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

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
        
        $__internal_47a88b1f7461e94f4b83ade26f13a3e66751babffdc968162d267c53a4e051d3->leave($__internal_47a88b1f7461e94f4b83ade26f13a3e66751babffdc968162d267c53a4e051d3_prof);

        
        $__internal_14d8eb857338071162f94995aec2388d1da5d32a2a2a274022d39c6c304a86a6->leave($__internal_14d8eb857338071162f94995aec2388d1da5d32a2a2a274022d39c6c304a86a6_prof);

    }

    // line 119
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_42d7f41cdec587ae52fd3cc9f6d82658b244edc6353ce686c792809b3b7e9020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d7f41cdec587ae52fd3cc9f6d82658b244edc6353ce686c792809b3b7e9020->enter($__internal_42d7f41cdec587ae52fd3cc9f6d82658b244edc6353ce686c792809b3b7e9020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_203a7b06c3002cd32d99f88df737fe13dd5c2c1aa15896dab42e59b028297e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203a7b06c3002cd32d99f88df737fe13dd5c2c1aa15896dab42e59b028297e4a->enter($__internal_203a7b06c3002cd32d99f88df737fe13dd5c2c1aa15896dab42e59b028297e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

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
        
        $__internal_203a7b06c3002cd32d99f88df737fe13dd5c2c1aa15896dab42e59b028297e4a->leave($__internal_203a7b06c3002cd32d99f88df737fe13dd5c2c1aa15896dab42e59b028297e4a_prof);

        
        $__internal_42d7f41cdec587ae52fd3cc9f6d82658b244edc6353ce686c792809b3b7e9020->leave($__internal_42d7f41cdec587ae52fd3cc9f6d82658b244edc6353ce686c792809b3b7e9020_prof);

    }

    // line 129
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_ba2c1d5dcaba093b24da75387884f6a38b8158ecb9f88c0f6db38ab3161a0183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2c1d5dcaba093b24da75387884f6a38b8158ecb9f88c0f6db38ab3161a0183->enter($__internal_ba2c1d5dcaba093b24da75387884f6a38b8158ecb9f88c0f6db38ab3161a0183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_e39d40f75ec9660a8262695c7ecbc777e6bfab45fb3de6a812e7ecb234a30d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39d40f75ec9660a8262695c7ecbc777e6bfab45fb3de6a812e7ecb234a30d8d->enter($__internal_e39d40f75ec9660a8262695c7ecbc777e6bfab45fb3de6a812e7ecb234a30d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

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
        
        $__internal_e39d40f75ec9660a8262695c7ecbc777e6bfab45fb3de6a812e7ecb234a30d8d->leave($__internal_e39d40f75ec9660a8262695c7ecbc777e6bfab45fb3de6a812e7ecb234a30d8d_prof);

        
        $__internal_ba2c1d5dcaba093b24da75387884f6a38b8158ecb9f88c0f6db38ab3161a0183->leave($__internal_ba2c1d5dcaba093b24da75387884f6a38b8158ecb9f88c0f6db38ab3161a0183_prof);

    }

    // line 131
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_da0daafe95e756b81c20bb4242b67d7fb19c2e00132ee924dc46fd61d69ef634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0daafe95e756b81c20bb4242b67d7fb19c2e00132ee924dc46fd61d69ef634->enter($__internal_da0daafe95e756b81c20bb4242b67d7fb19c2e00132ee924dc46fd61d69ef634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_008f3274c7bab8ab222c08674b124f1fb46e3c3ef136d72779efff9d75be76c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008f3274c7bab8ab222c08674b124f1fb46e3c3ef136d72779efff9d75be76c9->enter($__internal_008f3274c7bab8ab222c08674b124f1fb46e3c3ef136d72779efff9d75be76c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

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
        
        $__internal_008f3274c7bab8ab222c08674b124f1fb46e3c3ef136d72779efff9d75be76c9->leave($__internal_008f3274c7bab8ab222c08674b124f1fb46e3c3ef136d72779efff9d75be76c9_prof);

        
        $__internal_da0daafe95e756b81c20bb4242b67d7fb19c2e00132ee924dc46fd61d69ef634->leave($__internal_da0daafe95e756b81c20bb4242b67d7fb19c2e00132ee924dc46fd61d69ef634_prof);

    }

    // line 138
    public function block_logo($context, array $blocks = array())
    {
        $__internal_4e998667b77457f8989db71879fbe3abe1617b88dd8830fff06f78a43eafeb70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e998667b77457f8989db71879fbe3abe1617b88dd8830fff06f78a43eafeb70->enter($__internal_4e998667b77457f8989db71879fbe3abe1617b88dd8830fff06f78a43eafeb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_5fe3c0b7fc8cbd419d1304bf4058561885ce223a57dde7032cfe51affe6cdd74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe3c0b7fc8cbd419d1304bf4058561885ce223a57dde7032cfe51affe6cdd74->enter($__internal_5fe3c0b7fc8cbd419d1304bf4058561885ce223a57dde7032cfe51affe6cdd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

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
        
        $__internal_5fe3c0b7fc8cbd419d1304bf4058561885ce223a57dde7032cfe51affe6cdd74->leave($__internal_5fe3c0b7fc8cbd419d1304bf4058561885ce223a57dde7032cfe51affe6cdd74_prof);

        
        $__internal_4e998667b77457f8989db71879fbe3abe1617b88dd8830fff06f78a43eafeb70->leave($__internal_4e998667b77457f8989db71879fbe3abe1617b88dd8830fff06f78a43eafeb70_prof);

    }

    // line 150
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_6b10c239084cdb1edb4b99f40a4d507c94f1a0a9fbd8e8f68a3022959e31d6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b10c239084cdb1edb4b99f40a4d507c94f1a0a9fbd8e8f68a3022959e31d6dd->enter($__internal_6b10c239084cdb1edb4b99f40a4d507c94f1a0a9fbd8e8f68a3022959e31d6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_66d88f4431b58712cb99f1cbbf49d54c8f59f964ef1d35a8db0259dd9f64b239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d88f4431b58712cb99f1cbbf49d54c8f59f964ef1d35a8db0259dd9f64b239->enter($__internal_66d88f4431b58712cb99f1cbbf49d54c8f59f964ef1d35a8db0259dd9f64b239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

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
        
        $__internal_66d88f4431b58712cb99f1cbbf49d54c8f59f964ef1d35a8db0259dd9f64b239->leave($__internal_66d88f4431b58712cb99f1cbbf49d54c8f59f964ef1d35a8db0259dd9f64b239_prof);

        
        $__internal_6b10c239084cdb1edb4b99f40a4d507c94f1a0a9fbd8e8f68a3022959e31d6dd->leave($__internal_6b10c239084cdb1edb4b99f40a4d507c94f1a0a9fbd8e8f68a3022959e31d6dd_prof);

    }

    // line 157
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_acac4a5aea990d310571315d40392477813f331616d3b8c19bfe3659dd5e4177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acac4a5aea990d310571315d40392477813f331616d3b8c19bfe3659dd5e4177->enter($__internal_acac4a5aea990d310571315d40392477813f331616d3b8c19bfe3659dd5e4177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_1fe7174b65a4c73cde628766a9eb2b0f1e72af9d56598be1a2b42a43f61aa897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe7174b65a4c73cde628766a9eb2b0f1e72af9d56598be1a2b42a43f61aa897->enter($__internal_1fe7174b65a4c73cde628766a9eb2b0f1e72af9d56598be1a2b42a43f61aa897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

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
        
        $__internal_1fe7174b65a4c73cde628766a9eb2b0f1e72af9d56598be1a2b42a43f61aa897->leave($__internal_1fe7174b65a4c73cde628766a9eb2b0f1e72af9d56598be1a2b42a43f61aa897_prof);

        
        $__internal_acac4a5aea990d310571315d40392477813f331616d3b8c19bfe3659dd5e4177->leave($__internal_acac4a5aea990d310571315d40392477813f331616d3b8c19bfe3659dd5e4177_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_ea1de1d5285237474c3d7d128a5deddb1acd00cc015282db8c7518624df151ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1de1d5285237474c3d7d128a5deddb1acd00cc015282db8c7518624df151ed->enter($__internal_ea1de1d5285237474c3d7d128a5deddb1acd00cc015282db8c7518624df151ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_d64bab876554170891c6b7d5037c3620b0982d90fd98cec33e858cd2f2afd678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64bab876554170891c6b7d5037c3620b0982d90fd98cec33e858cd2f2afd678->enter($__internal_d64bab876554170891c6b7d5037c3620b0982d90fd98cec33e858cd2f2afd678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

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
        
        $__internal_d64bab876554170891c6b7d5037c3620b0982d90fd98cec33e858cd2f2afd678->leave($__internal_d64bab876554170891c6b7d5037c3620b0982d90fd98cec33e858cd2f2afd678_prof);

        
        $__internal_ea1de1d5285237474c3d7d128a5deddb1acd00cc015282db8c7518624df151ed->leave($__internal_ea1de1d5285237474c3d7d128a5deddb1acd00cc015282db8c7518624df151ed_prof);

    }

    // line 202
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_b83e2941bf16d1e13467b1c1c98add42886369e41fcf0ba4614738f49d9e8771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b83e2941bf16d1e13467b1c1c98add42886369e41fcf0ba4614738f49d9e8771->enter($__internal_b83e2941bf16d1e13467b1c1c98add42886369e41fcf0ba4614738f49d9e8771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_dfe8e208afca3ebc52b201edb48f2aa891a574f9f66f3186681066da34fc921f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe8e208afca3ebc52b201edb48f2aa891a574f9f66f3186681066da34fc921f->enter($__internal_dfe8e208afca3ebc52b201edb48f2aa891a574f9f66f3186681066da34fc921f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 203
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 207
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 207, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "@AppBundle/Resources/SonataTemplates/views/standard_layout.html.twig", 207)->display($context);
        // line 208
        echo "                                            </li>
                                        ";
        
        $__internal_dfe8e208afca3ebc52b201edb48f2aa891a574f9f66f3186681066da34fc921f->leave($__internal_dfe8e208afca3ebc52b201edb48f2aa891a574f9f66f3186681066da34fc921f_prof);

        
        $__internal_b83e2941bf16d1e13467b1c1c98add42886369e41fcf0ba4614738f49d9e8771->leave($__internal_b83e2941bf16d1e13467b1c1c98add42886369e41fcf0ba4614738f49d9e8771_prof);

    }

    // line 210
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_37c7cf407e506fefd061a32830e652cda17b61b805619546f21b16a75946d1a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c7cf407e506fefd061a32830e652cda17b61b805619546f21b16a75946d1a0->enter($__internal_37c7cf407e506fefd061a32830e652cda17b61b805619546f21b16a75946d1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_c0a770345a8435fc3441778b2349dc17b21a74ca116c01773bfad8c578fb17cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a770345a8435fc3441778b2349dc17b21a74ca116c01773bfad8c578fb17cc->enter($__internal_c0a770345a8435fc3441778b2349dc17b21a74ca116c01773bfad8c578fb17cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 211
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 216
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 216, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "@AppBundle/Resources/SonataTemplates/views/standard_layout.html.twig", 216)->display($context);
        // line 217
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_c0a770345a8435fc3441778b2349dc17b21a74ca116c01773bfad8c578fb17cc->leave($__internal_c0a770345a8435fc3441778b2349dc17b21a74ca116c01773bfad8c578fb17cc_prof);

        
        $__internal_37c7cf407e506fefd061a32830e652cda17b61b805619546f21b16a75946d1a0->leave($__internal_37c7cf407e506fefd061a32830e652cda17b61b805619546f21b16a75946d1a0_prof);

    }

    // line 229
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_15160d208d04b31bf7dddf4fcf8546f71e9d4b189ee72dc7c1d86e101d1fd13f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15160d208d04b31bf7dddf4fcf8546f71e9d4b189ee72dc7c1d86e101d1fd13f->enter($__internal_15160d208d04b31bf7dddf4fcf8546f71e9d4b189ee72dc7c1d86e101d1fd13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_656b354a29158b6e6c898358cc64ea852247c11a101d1972d5529f30a01657d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656b354a29158b6e6c898358cc64ea852247c11a101d1972d5529f30a01657d9->enter($__internal_656b354a29158b6e6c898358cc64ea852247c11a101d1972d5529f30a01657d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

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
        
        $__internal_656b354a29158b6e6c898358cc64ea852247c11a101d1972d5529f30a01657d9->leave($__internal_656b354a29158b6e6c898358cc64ea852247c11a101d1972d5529f30a01657d9_prof);

        
        $__internal_15160d208d04b31bf7dddf4fcf8546f71e9d4b189ee72dc7c1d86e101d1fd13f->leave($__internal_15160d208d04b31bf7dddf4fcf8546f71e9d4b189ee72dc7c1d86e101d1fd13f_prof);

    }

    // line 230
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_18a78e9b14542aaf8c45bdfc4b0a67b22aa58886643099b3c08386cc78f207c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a78e9b14542aaf8c45bdfc4b0a67b22aa58886643099b3c08386cc78f207c3->enter($__internal_18a78e9b14542aaf8c45bdfc4b0a67b22aa58886643099b3c08386cc78f207c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_c7f5cca644ac559cf7130fe96db04cbcc9377fa54a1717f8be32bd568f455aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f5cca644ac559cf7130fe96db04cbcc9377fa54a1717f8be32bd568f455aa2->enter($__internal_c7f5cca644ac559cf7130fe96db04cbcc9377fa54a1717f8be32bd568f455aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

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
        
        $__internal_c7f5cca644ac559cf7130fe96db04cbcc9377fa54a1717f8be32bd568f455aa2->leave($__internal_c7f5cca644ac559cf7130fe96db04cbcc9377fa54a1717f8be32bd568f455aa2_prof);

        
        $__internal_18a78e9b14542aaf8c45bdfc4b0a67b22aa58886643099b3c08386cc78f207c3->leave($__internal_18a78e9b14542aaf8c45bdfc4b0a67b22aa58886643099b3c08386cc78f207c3_prof);

    }

    // line 233
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_9bdba2f5e35bc7afb5d549a94af9a884edc0487548751147c9a58687a81cea2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdba2f5e35bc7afb5d549a94af9a884edc0487548751147c9a58687a81cea2f->enter($__internal_9bdba2f5e35bc7afb5d549a94af9a884edc0487548751147c9a58687a81cea2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_ec89b2f23e35d5cf0e8c7645a85944b12204cff259fd0058be1cfca813f8e186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec89b2f23e35d5cf0e8c7645a85944b12204cff259fd0058be1cfca813f8e186->enter($__internal_ec89b2f23e35d5cf0e8c7645a85944b12204cff259fd0058be1cfca813f8e186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

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
        
        $__internal_ec89b2f23e35d5cf0e8c7645a85944b12204cff259fd0058be1cfca813f8e186->leave($__internal_ec89b2f23e35d5cf0e8c7645a85944b12204cff259fd0058be1cfca813f8e186_prof);

        
        $__internal_9bdba2f5e35bc7afb5d549a94af9a884edc0487548751147c9a58687a81cea2f->leave($__internal_9bdba2f5e35bc7afb5d549a94af9a884edc0487548751147c9a58687a81cea2f_prof);

    }

    // line 234
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_b52634c781159de8127d5405fa60b07f663f3d3888f6d309c4cf213dd059eea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52634c781159de8127d5405fa60b07f663f3d3888f6d309c4cf213dd059eea6->enter($__internal_b52634c781159de8127d5405fa60b07f663f3d3888f6d309c4cf213dd059eea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_6861c2ba104a5a364cc4c04e3667d38ec2caedbb27157f388a05783ff04a42ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6861c2ba104a5a364cc4c04e3667d38ec2caedbb27157f388a05783ff04a42ba->enter($__internal_6861c2ba104a5a364cc4c04e3667d38ec2caedbb27157f388a05783ff04a42ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

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
        
        $__internal_6861c2ba104a5a364cc4c04e3667d38ec2caedbb27157f388a05783ff04a42ba->leave($__internal_6861c2ba104a5a364cc4c04e3667d38ec2caedbb27157f388a05783ff04a42ba_prof);

        
        $__internal_b52634c781159de8127d5405fa60b07f663f3d3888f6d309c4cf213dd059eea6->leave($__internal_b52634c781159de8127d5405fa60b07f663f3d3888f6d309c4cf213dd059eea6_prof);

    }

    // line 247
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_10bd5cdf5d483fef6d97e32c33372bd3497d439ae7106f13ea95121ca4b58ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10bd5cdf5d483fef6d97e32c33372bd3497d439ae7106f13ea95121ca4b58ad6->enter($__internal_10bd5cdf5d483fef6d97e32c33372bd3497d439ae7106f13ea95121ca4b58ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_470e9e02f0a8f9c48a2882cfc3909b8ef1618f59cc20905c4ca11d98890228a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470e9e02f0a8f9c48a2882cfc3909b8ef1618f59cc20905c4ca11d98890228a8->enter($__internal_470e9e02f0a8f9c48a2882cfc3909b8ef1618f59cc20905c4ca11d98890228a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_470e9e02f0a8f9c48a2882cfc3909b8ef1618f59cc20905c4ca11d98890228a8->leave($__internal_470e9e02f0a8f9c48a2882cfc3909b8ef1618f59cc20905c4ca11d98890228a8_prof);

        
        $__internal_10bd5cdf5d483fef6d97e32c33372bd3497d439ae7106f13ea95121ca4b58ad6->leave($__internal_10bd5cdf5d483fef6d97e32c33372bd3497d439ae7106f13ea95121ca4b58ad6_prof);

    }

    // line 248
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_c1e66e562f3f47894e4040b9de842fe20c88e089e9a7bf7a8013f13393aa8098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e66e562f3f47894e4040b9de842fe20c88e089e9a7bf7a8013f13393aa8098->enter($__internal_c1e66e562f3f47894e4040b9de842fe20c88e089e9a7bf7a8013f13393aa8098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_898ea31968ca3b996621842a0bd0ddc96b7ff79064b0bbd28f4b3f8d991d778a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_898ea31968ca3b996621842a0bd0ddc96b7ff79064b0bbd28f4b3f8d991d778a->enter($__internal_898ea31968ca3b996621842a0bd0ddc96b7ff79064b0bbd28f4b3f8d991d778a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 249
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 249, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_898ea31968ca3b996621842a0bd0ddc96b7ff79064b0bbd28f4b3f8d991d778a->leave($__internal_898ea31968ca3b996621842a0bd0ddc96b7ff79064b0bbd28f4b3f8d991d778a_prof);

        
        $__internal_c1e66e562f3f47894e4040b9de842fe20c88e089e9a7bf7a8013f13393aa8098->leave($__internal_c1e66e562f3f47894e4040b9de842fe20c88e089e9a7bf7a8013f13393aa8098_prof);

    }

    // line 251
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_3995bb03feadc868f8eda14da19760a797bccde7f398d62bf6aa9f509a6a6118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3995bb03feadc868f8eda14da19760a797bccde7f398d62bf6aa9f509a6a6118->enter($__internal_3995bb03feadc868f8eda14da19760a797bccde7f398d62bf6aa9f509a6a6118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_1f97644782d1ff1fa2f0dbf42cef73e809b38e0bc72600d7334df4e07deb1ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f97644782d1ff1fa2f0dbf42cef73e809b38e0bc72600d7334df4e07deb1ab7->enter($__internal_1f97644782d1ff1fa2f0dbf42cef73e809b38e0bc72600d7334df4e07deb1ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 252
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 253
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 256
        echo "                                </p>
                            ";
        
        $__internal_1f97644782d1ff1fa2f0dbf42cef73e809b38e0bc72600d7334df4e07deb1ab7->leave($__internal_1f97644782d1ff1fa2f0dbf42cef73e809b38e0bc72600d7334df4e07deb1ab7_prof);

        
        $__internal_3995bb03feadc868f8eda14da19760a797bccde7f398d62bf6aa9f509a6a6118->leave($__internal_3995bb03feadc868f8eda14da19760a797bccde7f398d62bf6aa9f509a6a6118_prof);

    }

    // line 253
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_f155bc52624760ff5f6e837a76db3b7c1d0474019fc8c773b417092fd39061c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f155bc52624760ff5f6e837a76db3b7c1d0474019fc8c773b417092fd39061c3->enter($__internal_f155bc52624760ff5f6e837a76db3b7c1d0474019fc8c773b417092fd39061c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_3c8860a6480c9995b7f41843239f982d5e04f242a3ebdcb13b730ef50b9d1afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8860a6480c9995b7f41843239f982d5e04f242a3ebdcb13b730ef50b9d1afa->enter($__internal_3c8860a6480c9995b7f41843239f982d5e04f242a3ebdcb13b730ef50b9d1afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 254
        echo "                                        <a href=\"http://localhost/MyEcommerce/web/app_dev.php/login\" rel=\"noreferrer\" target=\"_blank\">MyScentFactory project</a>
                                    ";
        
        $__internal_3c8860a6480c9995b7f41843239f982d5e04f242a3ebdcb13b730ef50b9d1afa->leave($__internal_3c8860a6480c9995b7f41843239f982d5e04f242a3ebdcb13b730ef50b9d1afa_prof);

        
        $__internal_f155bc52624760ff5f6e837a76db3b7c1d0474019fc8c773b417092fd39061c3->leave($__internal_f155bc52624760ff5f6e837a76db3b7c1d0474019fc8c773b417092fd39061c3_prof);

    }

    // line 264
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_1e7d20c591c669756781495c6c564375e25fa50a0c4c441c1ef6ba53e3ba0ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e7d20c591c669756781495c6c564375e25fa50a0c4c441c1ef6ba53e3ba0ead->enter($__internal_1e7d20c591c669756781495c6c564375e25fa50a0c4c441c1ef6ba53e3ba0ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_0fd7ca05923fbf3698ae7eba56e84643bf304d3df44479fb6f64379c5f9d8c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd7ca05923fbf3698ae7eba56e84643bf304d3df44479fb6f64379c5f9d8c00->enter($__internal_0fd7ca05923fbf3698ae7eba56e84643bf304d3df44479fb6f64379c5f9d8c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

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
        
        $__internal_0fd7ca05923fbf3698ae7eba56e84643bf304d3df44479fb6f64379c5f9d8c00->leave($__internal_0fd7ca05923fbf3698ae7eba56e84643bf304d3df44479fb6f64379c5f9d8c00_prof);

        
        $__internal_1e7d20c591c669756781495c6c564375e25fa50a0c4c441c1ef6ba53e3ba0ead->leave($__internal_1e7d20c591c669756781495c6c564375e25fa50a0c4c441c1ef6ba53e3ba0ead_prof);

    }

    // line 267
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_98357425a390871b5c3078cab413b25f23889fb8f170c780dbdc23f0c0a9c713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98357425a390871b5c3078cab413b25f23889fb8f170c780dbdc23f0c0a9c713->enter($__internal_98357425a390871b5c3078cab413b25f23889fb8f170c780dbdc23f0c0a9c713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_8ad2c9040955e64fbcdc83ae5a04003300e180f8b2f7a9c0dff1d35abeae5ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad2c9040955e64fbcdc83ae5a04003300e180f8b2f7a9c0dff1d35abeae5ffb->enter($__internal_8ad2c9040955e64fbcdc83ae5a04003300e180f8b2f7a9c0dff1d35abeae5ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 268
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 324
        echo "                        ";
        
        $__internal_8ad2c9040955e64fbcdc83ae5a04003300e180f8b2f7a9c0dff1d35abeae5ffb->leave($__internal_8ad2c9040955e64fbcdc83ae5a04003300e180f8b2f7a9c0dff1d35abeae5ffb_prof);

        
        $__internal_98357425a390871b5c3078cab413b25f23889fb8f170c780dbdc23f0c0a9c713->leave($__internal_98357425a390871b5c3078cab413b25f23889fb8f170c780dbdc23f0c0a9c713_prof);

    }

    // line 268
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_612f33765d904d6c4ed7b227b6e33b911308e13e0f2237377f1abd289fb9e874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612f33765d904d6c4ed7b227b6e33b911308e13e0f2237377f1abd289fb9e874->enter($__internal_612f33765d904d6c4ed7b227b6e33b911308e13e0f2237377f1abd289fb9e874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_27611b2741b9d8208b87ceb6c49de10a1edf06c7e1e371188bc5f62ac2dfe1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27611b2741b9d8208b87ceb6c49de10a1edf06c7e1e371188bc5f62ac2dfe1cb->enter($__internal_27611b2741b9d8208b87ceb6c49de10a1edf06c7e1e371188bc5f62ac2dfe1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

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
        
        $__internal_27611b2741b9d8208b87ceb6c49de10a1edf06c7e1e371188bc5f62ac2dfe1cb->leave($__internal_27611b2741b9d8208b87ceb6c49de10a1edf06c7e1e371188bc5f62ac2dfe1cb_prof);

        
        $__internal_612f33765d904d6c4ed7b227b6e33b911308e13e0f2237377f1abd289fb9e874->leave($__internal_612f33765d904d6c4ed7b227b6e33b911308e13e0f2237377f1abd289fb9e874_prof);

    }

    // line 276
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_391466bd3fe346858282bf733cf9c0d62d0277ad27bb092b2d05c4fb052d514b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391466bd3fe346858282bf733cf9c0d62d0277ad27bb092b2d05c4fb052d514b->enter($__internal_391466bd3fe346858282bf733cf9c0d62d0277ad27bb092b2d05c4fb052d514b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_61ef20ed01970d8b8f98f371972237060b2387da5018472d3f4bfab859bef87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ef20ed01970d8b8f98f371972237060b2387da5018472d3f4bfab859bef87e->enter($__internal_61ef20ed01970d8b8f98f371972237060b2387da5018472d3f4bfab859bef87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

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
        
        $__internal_61ef20ed01970d8b8f98f371972237060b2387da5018472d3f4bfab859bef87e->leave($__internal_61ef20ed01970d8b8f98f371972237060b2387da5018472d3f4bfab859bef87e_prof);

        
        $__internal_391466bd3fe346858282bf733cf9c0d62d0277ad27bb092b2d05c4fb052d514b->leave($__internal_391466bd3fe346858282bf733cf9c0d62d0277ad27bb092b2d05c4fb052d514b_prof);

    }

    // line 299
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_50d3376c87c3b7b7d2b11052ab4263dd43a4475a8aab1eee706101341bc335e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d3376c87c3b7b7d2b11052ab4263dd43a4475a8aab1eee706101341bc335e3->enter($__internal_50d3376c87c3b7b7d2b11052ab4263dd43a4475a8aab1eee706101341bc335e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_ebf422e99188471ff26e4bcbe788ae223ba1bf84097d43e64cb0086251de073d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf422e99188471ff26e4bcbe788ae223ba1bf84097d43e64cb0086251de073d->enter($__internal_ebf422e99188471ff26e4bcbe788ae223ba1bf84097d43e64cb0086251de073d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

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
        
        $__internal_ebf422e99188471ff26e4bcbe788ae223ba1bf84097d43e64cb0086251de073d->leave($__internal_ebf422e99188471ff26e4bcbe788ae223ba1bf84097d43e64cb0086251de073d_prof);

        
        $__internal_50d3376c87c3b7b7d2b11052ab4263dd43a4475a8aab1eee706101341bc335e3->leave($__internal_50d3376c87c3b7b7d2b11052ab4263dd43a4475a8aab1eee706101341bc335e3_prof);

    }

    // line 328
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_655260a430710acc370fe76839a21c6a730fa7df4fca3e62bc2dc628293949a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655260a430710acc370fe76839a21c6a730fa7df4fca3e62bc2dc628293949a0->enter($__internal_655260a430710acc370fe76839a21c6a730fa7df4fca3e62bc2dc628293949a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_82d2415dbf19149d6ec80ae69132aa9ffad0a297797b0e57c3f0e0d91b3fe215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d2415dbf19149d6ec80ae69132aa9ffad0a297797b0e57c3f0e0d91b3fe215->enter($__internal_82d2415dbf19149d6ec80ae69132aa9ffad0a297797b0e57c3f0e0d91b3fe215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

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
        
        $__internal_82d2415dbf19149d6ec80ae69132aa9ffad0a297797b0e57c3f0e0d91b3fe215->leave($__internal_82d2415dbf19149d6ec80ae69132aa9ffad0a297797b0e57c3f0e0d91b3fe215_prof);

        
        $__internal_655260a430710acc370fe76839a21c6a730fa7df4fca3e62bc2dc628293949a0->leave($__internal_655260a430710acc370fe76839a21c6a730fa7df4fca3e62bc2dc628293949a0_prof);

    }

    // line 330
    public function block_notice($context, array $blocks = array())
    {
        $__internal_179e41324903854e6f3fd4e281808dc3fae672f513b068eabc469375e02cc710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179e41324903854e6f3fd4e281808dc3fae672f513b068eabc469375e02cc710->enter($__internal_179e41324903854e6f3fd4e281808dc3fae672f513b068eabc469375e02cc710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_1f799d956c0a41d669b55f623b9c9d8bb37fbeed44b536089f5161f5712a3542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f799d956c0a41d669b55f623b9c9d8bb37fbeed44b536089f5161f5712a3542->enter($__internal_1f799d956c0a41d669b55f623b9c9d8bb37fbeed44b536089f5161f5712a3542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 331
        echo "                                ";
        $this->loadTemplate("@SonataCore/FlashMessage/render.html.twig", "@AppBundle/Resources/SonataTemplates/views/standard_layout.html.twig", 331)->display($context);
        // line 332
        echo "                            ";
        
        $__internal_1f799d956c0a41d669b55f623b9c9d8bb37fbeed44b536089f5161f5712a3542->leave($__internal_1f799d956c0a41d669b55f623b9c9d8bb37fbeed44b536089f5161f5712a3542_prof);

        
        $__internal_179e41324903854e6f3fd4e281808dc3fae672f513b068eabc469375e02cc710->leave($__internal_179e41324903854e6f3fd4e281808dc3fae672f513b068eabc469375e02cc710_prof);

    }

    // line 368
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_5fc8af929d3f043bfe097f77946966501716956ac9919a2fc5ced3a9703fb776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc8af929d3f043bfe097f77946966501716956ac9919a2fc5ced3a9703fb776->enter($__internal_5fc8af929d3f043bfe097f77946966501716956ac9919a2fc5ced3a9703fb776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_cdd4ee2eba3f956d804484c7e9322aa0566b0ce0cddbbf9d4f5e95a9f80cfcd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd4ee2eba3f956d804484c7e9322aa0566b0ce0cddbbf9d4f5e95a9f80cfcd4->enter($__internal_cdd4ee2eba3f956d804484c7e9322aa0566b0ce0cddbbf9d4f5e95a9f80cfcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 369
        echo "            ";
        // line 370
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_cdd4ee2eba3f956d804484c7e9322aa0566b0ce0cddbbf9d4f5e95a9f80cfcd4->leave($__internal_cdd4ee2eba3f956d804484c7e9322aa0566b0ce0cddbbf9d4f5e95a9f80cfcd4_prof);

        
        $__internal_5fc8af929d3f043bfe097f77946966501716956ac9919a2fc5ced3a9703fb776->leave($__internal_5fc8af929d3f043bfe097f77946966501716956ac9919a2fc5ced3a9703fb776_prof);

    }

    public function getTemplateName()
    {
        return "@AppBundle/Resources/SonataTemplates/views/standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1465 => 370,  1463 => 369,  1454 => 368,  1444 => 332,  1441 => 331,  1432 => 330,  1422 => 361,  1416 => 358,  1413 => 357,  1411 => 356,  1408 => 355,  1402 => 352,  1399 => 351,  1397 => 350,  1394 => 349,  1388 => 347,  1386 => 346,  1383 => 345,  1377 => 343,  1375 => 342,  1372 => 341,  1366 => 339,  1364 => 338,  1361 => 337,  1355 => 335,  1353 => 334,  1350 => 333,  1348 => 330,  1345 => 329,  1336 => 328,  1326 => 314,  1322 => 312,  1316 => 310,  1309 => 306,  1304 => 304,  1301 => 303,  1299 => 302,  1296 => 301,  1293 => 300,  1284 => 299,  1274 => 282,  1268 => 279,  1265 => 278,  1262 => 277,  1253 => 276,  1243 => 323,  1237 => 319,  1231 => 317,  1229 => 316,  1226 => 315,  1224 => 299,  1221 => 298,  1217 => 296,  1202 => 294,  1198 => 293,  1195 => 292,  1193 => 291,  1190 => 290,  1184 => 287,  1181 => 286,  1179 => 285,  1175 => 283,  1173 => 276,  1169 => 274,  1167 => 272,  1166 => 271,  1165 => 270,  1163 => 269,  1154 => 268,  1144 => 324,  1141 => 268,  1132 => 267,  1121 => 362,  1119 => 328,  1114 => 325,  1112 => 267,  1108 => 265,  1099 => 264,  1088 => 254,  1079 => 253,  1068 => 256,  1066 => 253,  1063 => 252,  1054 => 251,  1041 => 249,  1032 => 248,  1014 => 247,  993 => 237,  987 => 235,  978 => 234,  968 => 258,  965 => 251,  962 => 248,  960 => 247,  957 => 246,  954 => 234,  945 => 233,  933 => 259,  931 => 233,  927 => 231,  918 => 230,  907 => 364,  905 => 264,  901 => 262,  898 => 230,  889 => 229,  877 => 217,  875 => 216,  868 => 211,  859 => 210,  848 => 208,  846 => 207,  840 => 203,  831 => 202,  821 => 223,  816 => 220,  813 => 210,  811 => 202,  807 => 200,  804 => 199,  795 => 198,  784 => 194,  780 => 192,  774 => 190,  771 => 189,  768 => 188,  754 => 187,  748 => 185,  744 => 183,  738 => 181,  734 => 179,  731 => 177,  728 => 175,  726 => 174,  721 => 173,  719 => 172,  716 => 171,  714 => 170,  711 => 167,  709 => 166,  707 => 165,  705 => 164,  687 => 163,  684 => 162,  682 => 161,  679 => 160,  677 => 159,  674 => 158,  665 => 157,  654 => 224,  652 => 198,  648 => 196,  646 => 157,  638 => 151,  629 => 150,  619 => 149,  615 => 147,  609 => 145,  606 => 144,  600 => 142,  598 => 141,  593 => 140,  590 => 139,  581 => 138,  567 => 134,  563 => 132,  554 => 131,  543 => 226,  540 => 150,  537 => 138,  535 => 131,  532 => 130,  523 => 129,  513 => 123,  510 => 122,  508 => 121,  505 => 120,  496 => 119,  486 => 115,  483 => 114,  480 => 113,  466 => 112,  461 => 110,  458 => 107,  456 => 106,  454 => 105,  452 => 104,  448 => 101,  445 => 100,  442 => 99,  425 => 98,  422 => 97,  419 => 96,  413 => 94,  411 => 93,  405 => 91,  396 => 90,  386 => 66,  377 => 64,  372 => 63,  363 => 62,  342 => 50,  338 => 48,  332 => 47,  324 => 46,  316 => 45,  308 => 44,  304 => 42,  295 => 41,  285 => 87,  282 => 86,  276 => 84,  273 => 83,  270 => 81,  265 => 80,  262 => 79,  259 => 77,  255 => 75,  253 => 73,  251 => 71,  248 => 70,  246 => 69,  244 => 68,  241 => 67,  239 => 62,  236 => 61,  233 => 41,  224 => 40,  214 => 38,  205 => 36,  200 => 35,  191 => 34,  178 => 29,  169 => 28,  151 => 26,  138 => 375,  135 => 374,  132 => 368,  130 => 367,  127 => 366,  125 => 229,  122 => 228,  120 => 129,  114 => 125,  112 => 119,  107 => 116,  105 => 90,  101 => 88,  99 => 40,  96 => 39,  94 => 34,  91 => 33,  89 => 28,  84 => 26,  81 => 25,  79 => 23,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  59 => 13,  57 => 12,);
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
", "@AppBundle/Resources/SonataTemplates/views/standard_layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/AppBundle/Resources/SonataTemplates/views/standard_layout.html.twig");
    }
}
