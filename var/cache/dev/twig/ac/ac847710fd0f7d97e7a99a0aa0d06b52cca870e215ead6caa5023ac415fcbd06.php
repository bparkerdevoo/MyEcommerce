<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_b220911eaba415f62bc2e4a5015cb280a6a1e3a7303bd0bd9e9bf48099d044ff extends Twig_Template
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
        $__internal_890039bd92bcb0d92cc31a7b0d636d7f58c2dd6c9f91cbf95e19b68586acb6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890039bd92bcb0d92cc31a7b0d636d7f58c2dd6c9f91cbf95e19b68586acb6c6->enter($__internal_890039bd92bcb0d92cc31a7b0d636d7f58c2dd6c9f91cbf95e19b68586acb6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_3e0cb6109b278f203260e41038635c0b4f4e5064268956d662b7217940f443bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e0cb6109b278f203260e41038635c0b4f4e5064268956d662b7217940f443bd->enter($__internal_3e0cb6109b278f203260e41038635c0b4f4e5064268956d662b7217940f443bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

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
        // line 86
        echo "
        <title>
        ";
        // line 88
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 114
        echo "        </title>
    </head>
    <body
            ";
        // line 117
        $this->displayBlock('body_attributes', $context, $blocks);
        // line 123
        echo ">

    <div class=\"wrapper\">

        ";
        // line 127
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 226
        echo "
        ";
        // line 227
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 364
        echo "    </div>

    ";
        // line 366
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 366, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 367
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 373
            echo "    ";
        }
        // line 374
        echo "
    </body>
</html>
";
        
        $__internal_890039bd92bcb0d92cc31a7b0d636d7f58c2dd6c9f91cbf95e19b68586acb6c6->leave($__internal_890039bd92bcb0d92cc31a7b0d636d7f58c2dd6c9f91cbf95e19b68586acb6c6_prof);

        
        $__internal_3e0cb6109b278f203260e41038635c0b4f4e5064268956d662b7217940f443bd->leave($__internal_3e0cb6109b278f203260e41038635c0b4f4e5064268956d662b7217940f443bd_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_e426a09e2f726c5916b78091be0215c48557d80f3230e8f221505e384035eb61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e426a09e2f726c5916b78091be0215c48557d80f3230e8f221505e384035eb61->enter($__internal_e426a09e2f726c5916b78091be0215c48557d80f3230e8f221505e384035eb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_a7f6247cec7a47485a919becda9ea38446f2b04ead718994313d40b8a9fffad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f6247cec7a47485a919becda9ea38446f2b04ead718994313d40b8a9fffad9->enter($__internal_a7f6247cec7a47485a919becda9ea38446f2b04ead718994313d40b8a9fffad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_a7f6247cec7a47485a919becda9ea38446f2b04ead718994313d40b8a9fffad9->leave($__internal_a7f6247cec7a47485a919becda9ea38446f2b04ead718994313d40b8a9fffad9_prof);

        
        $__internal_e426a09e2f726c5916b78091be0215c48557d80f3230e8f221505e384035eb61->leave($__internal_e426a09e2f726c5916b78091be0215c48557d80f3230e8f221505e384035eb61_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_835bdc2cbc547e6f6369a4f563a371784ed35cac6ac5690950bb17570ac15ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_835bdc2cbc547e6f6369a4f563a371784ed35cac6ac5690950bb17570ac15ecb->enter($__internal_835bdc2cbc547e6f6369a4f563a371784ed35cac6ac5690950bb17570ac15ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_a4f53c5a783ec54d7a135f7e0f90874479fee7a482c4a78f7180c1f0ca32f7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f53c5a783ec54d7a135f7e0f90874479fee7a482c4a78f7180c1f0ca32f7da->enter($__internal_a4f53c5a783ec54d7a135f7e0f90874479fee7a482c4a78f7180c1f0ca32f7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_a4f53c5a783ec54d7a135f7e0f90874479fee7a482c4a78f7180c1f0ca32f7da->leave($__internal_a4f53c5a783ec54d7a135f7e0f90874479fee7a482c4a78f7180c1f0ca32f7da_prof);

        
        $__internal_835bdc2cbc547e6f6369a4f563a371784ed35cac6ac5690950bb17570ac15ecb->leave($__internal_835bdc2cbc547e6f6369a4f563a371784ed35cac6ac5690950bb17570ac15ecb_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4f15964579011d3716db5d62b75fd699598bd63c9bba5530a657fe259dae60e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f15964579011d3716db5d62b75fd699598bd63c9bba5530a657fe259dae60e->enter($__internal_d4f15964579011d3716db5d62b75fd699598bd63c9bba5530a657fe259dae60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bedd403228ba97481fa7749acd97f72a4f19e8af05c640184d4da358cd93fd44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bedd403228ba97481fa7749acd97f72a4f19e8af05c640184d4da358cd93fd44->enter($__internal_bedd403228ba97481fa7749acd97f72a4f19e8af05c640184d4da358cd93fd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bedd403228ba97481fa7749acd97f72a4f19e8af05c640184d4da358cd93fd44->leave($__internal_bedd403228ba97481fa7749acd97f72a4f19e8af05c640184d4da358cd93fd44_prof);

        
        $__internal_d4f15964579011d3716db5d62b75fd699598bd63c9bba5530a657fe259dae60e->leave($__internal_d4f15964579011d3716db5d62b75fd699598bd63c9bba5530a657fe259dae60e_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5a6730b2d0952fb5fb02f8f3e2ad1d10ff8898014228bed22b6d0243cdfd66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a6730b2d0952fb5fb02f8f3e2ad1d10ff8898014228bed22b6d0243cdfd66b->enter($__internal_d5a6730b2d0952fb5fb02f8f3e2ad1d10ff8898014228bed22b6d0243cdfd66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dda6ce4409e6a65f46953c87d1e5f2ba2789f17523f2158285c29930cd722383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda6ce4409e6a65f46953c87d1e5f2ba2789f17523f2158285c29930cd722383->enter($__internal_dda6ce4409e6a65f46953c87d1e5f2ba2789f17523f2158285c29930cd722383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        // line 69
        echo "            ";
        $context["localeForMoment"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getCanonicalizedLocaleForMoment($context);
        // line 70
        echo "            ";
        if ((isset($context["localeForMoment"]) || array_key_exists("localeForMoment", $context) ? $context["localeForMoment"] : (function () { throw new Twig_Error_Runtime('Variable "localeForMoment" does not exist.', 70, $this->getSourceContext()); })())) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" .             // line 73
(isset($context["localeForMoment"]) || array_key_exists("localeForMoment", $context) ? $context["localeForMoment"] : (function () { throw new Twig_Error_Runtime('Variable "localeForMoment" does not exist.', 73, $this->getSourceContext()); })())) . ".js")), "html", null, true);
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
            $context["localeForSelect2"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getCanonicalizedLocaleForSelect2($context);
            // line 81
            echo "                ";
            if ((isset($context["localeForSelect2"]) || array_key_exists("localeForSelect2", $context) ? $context["localeForSelect2"] : (function () { throw new Twig_Error_Runtime('Variable "localeForSelect2" does not exist.', 81, $this->getSourceContext()); })())) {
                // line 82
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . (isset($context["localeForSelect2"]) || array_key_exists("localeForSelect2", $context) ? $context["localeForSelect2"] : (function () { throw new Twig_Error_Runtime('Variable "localeForSelect2" does not exist.', 82, $this->getSourceContext()); })())) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 84
            echo "            ";
        }
        // line 85
        echo "        ";
        
        $__internal_dda6ce4409e6a65f46953c87d1e5f2ba2789f17523f2158285c29930cd722383->leave($__internal_dda6ce4409e6a65f46953c87d1e5f2ba2789f17523f2158285c29930cd722383_prof);

        
        $__internal_d5a6730b2d0952fb5fb02f8f3e2ad1d10ff8898014228bed22b6d0243cdfd66b->leave($__internal_d5a6730b2d0952fb5fb02f8f3e2ad1d10ff8898014228bed22b6d0243cdfd66b_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_1d5acc85d7d31b3c9b5669c176292949a45db87908b76ba9bea79db0cd32f17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5acc85d7d31b3c9b5669c176292949a45db87908b76ba9bea79db0cd32f17f->enter($__internal_1d5acc85d7d31b3c9b5669c176292949a45db87908b76ba9bea79db0cd32f17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_ade793a7ed6b349ea51c72fe93897709cd3d0a8c32057c269637e3d45f5a3892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade793a7ed6b349ea51c72fe93897709cd3d0a8c32057c269637e3d45f5a3892->enter($__internal_ade793a7ed6b349ea51c72fe93897709cd3d0a8c32057c269637e3d45f5a3892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

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
        
        $__internal_ade793a7ed6b349ea51c72fe93897709cd3d0a8c32057c269637e3d45f5a3892->leave($__internal_ade793a7ed6b349ea51c72fe93897709cd3d0a8c32057c269637e3d45f5a3892_prof);

        
        $__internal_1d5acc85d7d31b3c9b5669c176292949a45db87908b76ba9bea79db0cd32f17f->leave($__internal_1d5acc85d7d31b3c9b5669c176292949a45db87908b76ba9bea79db0cd32f17f_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_a987c74e442ee46df29dc6d8abe9c199f01d7a9a73be304d02dc9c26dfa37e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a987c74e442ee46df29dc6d8abe9c199f01d7a9a73be304d02dc9c26dfa37e79->enter($__internal_a987c74e442ee46df29dc6d8abe9c199f01d7a9a73be304d02dc9c26dfa37e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_70359434c4456ff1dd403c0da457ab7768a09220a813cbe413b06e13741e9a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70359434c4456ff1dd403c0da457ab7768a09220a813cbe413b06e13741e9a2d->enter($__internal_70359434c4456ff1dd403c0da457ab7768a09220a813cbe413b06e13741e9a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

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
        
        $__internal_70359434c4456ff1dd403c0da457ab7768a09220a813cbe413b06e13741e9a2d->leave($__internal_70359434c4456ff1dd403c0da457ab7768a09220a813cbe413b06e13741e9a2d_prof);

        
        $__internal_a987c74e442ee46df29dc6d8abe9c199f01d7a9a73be304d02dc9c26dfa37e79->leave($__internal_a987c74e442ee46df29dc6d8abe9c199f01d7a9a73be304d02dc9c26dfa37e79_prof);

    }

    // line 88
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_b04c8e96f4c0c2722220b760c3e3466ae2c5ff537ab34769953d3492511645e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b04c8e96f4c0c2722220b760c3e3466ae2c5ff537ab34769953d3492511645e5->enter($__internal_b04c8e96f4c0c2722220b760c3e3466ae2c5ff537ab34769953d3492511645e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_efd448d5fdcbd2cca614e4c73e61109f5c5a527b9d5877687ef69660241a457a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd448d5fdcbd2cca614e4c73e61109f5c5a527b9d5877687ef69660241a457a->enter($__internal_efd448d5fdcbd2cca614e4c73e61109f5c5a527b9d5877687ef69660241a457a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 89
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 91
        if ( !twig_test_empty((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new Twig_Error_Runtime('Variable "_title" does not exist.', 91, $this->getSourceContext()); })()))) {
            // line 92
            echo "                ";
            echo strip_tags((isset($context["_title"]) || array_key_exists("_title", $context) ? $context["_title"] : (function () { throw new Twig_Error_Runtime('Variable "_title" does not exist.', 92, $this->getSourceContext()); })()));
            echo "
            ";
        } else {
            // line 94
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 95
                echo "                    -
                    ";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["breadcrumbs_builder"]) || array_key_exists("breadcrumbs_builder", $context) ? $context["breadcrumbs_builder"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs_builder" does not exist.', 96, $this->getSourceContext()); })()), "breadcrumbs", array(0 => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 96, $this->getSourceContext()); })()), 1 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 96, $this->getSourceContext()); })())), "method"));
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
                    // line 97
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                        // line 98
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) != 2)) {
                            // line 99
                            echo "                                &gt;
                            ";
                        }
                        // line 102
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 103
                        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "label", array());
                        // line 104
                        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 104, $this->getSourceContext()); })()) === false)) {
                            // line 105
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 105, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 105, $this->getSourceContext()); })()));
                        }
                        // line 108
                        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 108, $this->getSourceContext()); })()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 110
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
                // line 111
                echo "                ";
            }
            // line 112
            echo "            ";
        }
        // line 113
        echo "        ";
        
        $__internal_efd448d5fdcbd2cca614e4c73e61109f5c5a527b9d5877687ef69660241a457a->leave($__internal_efd448d5fdcbd2cca614e4c73e61109f5c5a527b9d5877687ef69660241a457a_prof);

        
        $__internal_b04c8e96f4c0c2722220b760c3e3466ae2c5ff537ab34769953d3492511645e5->leave($__internal_b04c8e96f4c0c2722220b760c3e3466ae2c5ff537ab34769953d3492511645e5_prof);

    }

    // line 117
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_ec2872f23b6677ffd6e63497a697f66b2452bc8c7c66aada4ed9a49666069531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2872f23b6677ffd6e63497a697f66b2452bc8c7c66aada4ed9a49666069531->enter($__internal_ec2872f23b6677ffd6e63497a697f66b2452bc8c7c66aada4ed9a49666069531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_fd17cb8d7eccc852a86c6232b35461330ec0ad8996c6ecaf7d5e2c49877800bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd17cb8d7eccc852a86c6232b35461330ec0ad8996c6ecaf7d5e2c49877800bf->enter($__internal_fd17cb8d7eccc852a86c6232b35461330ec0ad8996c6ecaf7d5e2c49877800bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        // line 118
        echo "class=\"sonata-bc skin-black fixed
                ";
        // line 119
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 119, $this->getSourceContext()); })()), "request", array()), "cookies", array()), "get", array(0 => "sonata_sidebar_hide"), "method")) {
            // line 120
            echo "sidebar-collapse";
        }
        // line 121
        echo "\"";
        
        $__internal_fd17cb8d7eccc852a86c6232b35461330ec0ad8996c6ecaf7d5e2c49877800bf->leave($__internal_fd17cb8d7eccc852a86c6232b35461330ec0ad8996c6ecaf7d5e2c49877800bf_prof);

        
        $__internal_ec2872f23b6677ffd6e63497a697f66b2452bc8c7c66aada4ed9a49666069531->leave($__internal_ec2872f23b6677ffd6e63497a697f66b2452bc8c7c66aada4ed9a49666069531_prof);

    }

    // line 127
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_bf37a11b476f7208b820ea6592eeba9879061d8ed309848361544eef81e72f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf37a11b476f7208b820ea6592eeba9879061d8ed309848361544eef81e72f99->enter($__internal_bf37a11b476f7208b820ea6592eeba9879061d8ed309848361544eef81e72f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_fd7eb24e4693d3d2bce5c646153e0dccc0ae62410b9974cc51c22fa2d4854b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7eb24e4693d3d2bce5c646153e0dccc0ae62410b9974cc51c22fa2d4854b6c->enter($__internal_fd7eb24e4693d3d2bce5c646153e0dccc0ae62410b9974cc51c22fa2d4854b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 128
        echo "            <header class=\"main-header\">
                ";
        // line 129
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 136
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 148
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 224
        echo "            </header>
        ";
        
        $__internal_fd7eb24e4693d3d2bce5c646153e0dccc0ae62410b9974cc51c22fa2d4854b6c->leave($__internal_fd7eb24e4693d3d2bce5c646153e0dccc0ae62410b9974cc51c22fa2d4854b6c_prof);

        
        $__internal_bf37a11b476f7208b820ea6592eeba9879061d8ed309848361544eef81e72f99->leave($__internal_bf37a11b476f7208b820ea6592eeba9879061d8ed309848361544eef81e72f99_prof);

    }

    // line 129
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_b0947a70388eb04829f2674c8c7ae4608bc58b400c40f92a38fa6a4e0aa9d496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0947a70388eb04829f2674c8c7ae4608bc58b400c40f92a38fa6a4e0aa9d496->enter($__internal_b0947a70388eb04829f2674c8c7ae4608bc58b400c40f92a38fa6a4e0aa9d496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_a5b53169427b066f027099183540a07b05968ac2feecfb6cb60ffa41a60925e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b53169427b066f027099183540a07b05968ac2feecfb6cb60ffa41a60925e6->enter($__internal_a5b53169427b066f027099183540a07b05968ac2feecfb6cb60ffa41a60925e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 130
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_a5b53169427b066f027099183540a07b05968ac2feecfb6cb60ffa41a60925e6->leave($__internal_a5b53169427b066f027099183540a07b05968ac2feecfb6cb60ffa41a60925e6_prof);

        
        $__internal_b0947a70388eb04829f2674c8c7ae4608bc58b400c40f92a38fa6a4e0aa9d496->leave($__internal_b0947a70388eb04829f2674c8c7ae4608bc58b400c40f92a38fa6a4e0aa9d496_prof);

    }

    // line 136
    public function block_logo($context, array $blocks = array())
    {
        $__internal_e48848a7b730e1848507d277ab987439ad56cc67339e2a8c26e9eb1baeda0a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48848a7b730e1848507d277ab987439ad56cc67339e2a8c26e9eb1baeda0a14->enter($__internal_e48848a7b730e1848507d277ab987439ad56cc67339e2a8c26e9eb1baeda0a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_db1a5878e41669bcab5c8b2d8caf85cafac4d101467b70b02f66e2d5f65a719b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1a5878e41669bcab5c8b2d8caf85cafac4d101467b70b02f66e2d5f65a719b->enter($__internal_db1a5878e41669bcab5c8b2d8caf85cafac4d101467b70b02f66e2d5f65a719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 137
        echo "                    ";
        ob_start();
        // line 138
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 139
        if ((("single_image" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 139, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 139, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 140
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 140, $this->getSourceContext()); })()), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 140, $this->getSourceContext()); })()), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 142
        echo "                            ";
        if ((("single_text" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 142, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 142, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 143
            echo "                                <span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 143, $this->getSourceContext()); })()), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 145
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 147
        echo "                ";
        
        $__internal_db1a5878e41669bcab5c8b2d8caf85cafac4d101467b70b02f66e2d5f65a719b->leave($__internal_db1a5878e41669bcab5c8b2d8caf85cafac4d101467b70b02f66e2d5f65a719b_prof);

        
        $__internal_e48848a7b730e1848507d277ab987439ad56cc67339e2a8c26e9eb1baeda0a14->leave($__internal_e48848a7b730e1848507d277ab987439ad56cc67339e2a8c26e9eb1baeda0a14_prof);

    }

    // line 148
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_5994556b4d4800f2b182b98948d18808c5e32c9ae383428728f67ab263072e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5994556b4d4800f2b182b98948d18808c5e32c9ae383428728f67ab263072e09->enter($__internal_5994556b4d4800f2b182b98948d18808c5e32c9ae383428728f67ab263072e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_f19c9d58e7c177bff28797a6c946b1284490f35443ae2b95fbdaf07ded1d0c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19c9d58e7c177bff28797a6c946b1284490f35443ae2b95fbdaf07ded1d0c69->enter($__internal_f19c9d58e7c177bff28797a6c946b1284490f35443ae2b95fbdaf07ded1d0c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 149
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "SonataAdminBundle"), "html", null, true);
        echo "</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 155
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 194
        echo "                        </div>

                        ";
        // line 196
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 222
        echo "                    </nav>
                ";
        
        $__internal_f19c9d58e7c177bff28797a6c946b1284490f35443ae2b95fbdaf07ded1d0c69->leave($__internal_f19c9d58e7c177bff28797a6c946b1284490f35443ae2b95fbdaf07ded1d0c69_prof);

        
        $__internal_5994556b4d4800f2b182b98948d18808c5e32c9ae383428728f67ab263072e09->leave($__internal_5994556b4d4800f2b182b98948d18808c5e32c9ae383428728f67ab263072e09_prof);

    }

    // line 155
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_cb706fd52c186d415a597cf299e21dbd5392b70e4c27ddd7a6635d2009fffd3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb706fd52c186d415a597cf299e21dbd5392b70e4c27ddd7a6635d2009fffd3c->enter($__internal_cb706fd52c186d415a597cf299e21dbd5392b70e4c27ddd7a6635d2009fffd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_e36e9b37186f3c84c54e6bdd04783693934930f395f21e22ec148f9b56a28b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36e9b37186f3c84c54e6bdd04783693934930f395f21e22ec148f9b56a28b0e->enter($__internal_e36e9b37186f3c84c54e6bdd04783693934930f395f21e22ec148f9b56a28b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 156
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 157
        if (( !twig_test_empty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 157, $this->getSourceContext()); })())) || array_key_exists("action", $context))) {
            // line 158
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 159
            if (twig_test_empty((isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 159, $this->getSourceContext()); })()))) {
                // line 160
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 161
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["breadcrumbs_builder"]) || array_key_exists("breadcrumbs_builder", $context) ? $context["breadcrumbs_builder"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs_builder" does not exist.', 161, $this->getSourceContext()); })()), "breadcrumbs", array(0 => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 161, $this->getSourceContext()); })()), 1 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 161, $this->getSourceContext()); })())), "method"));
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
                        // line 162
                        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 163
                        $context["label"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "label", array());
                        // line 164
                        if ( !((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 164, $this->getSourceContext()); })()) === false)) {
                            // line 165
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 165, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 165, $this->getSourceContext()); })()));
                        }
                        // line 168
                        if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                            // line 169
                            echo "                                                            <li>
                                                                ";
                            // line 170
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "uri", array()))) {
                                // line 171
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 172
                                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 173
                                    echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 173, $this->getSourceContext()); })());
                                } else {
                                    // line 175
                                    echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 175, $this->getSourceContext()); })()), "html", null, true);
                                }
                                // line 177
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 179
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 179, $this->getSourceContext()); })()), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 181
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 183
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 183, $this->getSourceContext()); })()), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 185
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
                    // line 186
                    echo "                                                ";
                }
                // line 187
                echo "                                            ";
            } else {
                // line 188
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) || array_key_exists("_breadcrumb", $context) ? $context["_breadcrumb"] : (function () { throw new Twig_Error_Runtime('Variable "_breadcrumb" does not exist.', 188, $this->getSourceContext()); })());
                echo "
                                            ";
            }
            // line 190
            echo "                                        </ol>
                                    ";
        }
        // line 192
        echo "                                </div>
                            ";
        
        $__internal_e36e9b37186f3c84c54e6bdd04783693934930f395f21e22ec148f9b56a28b0e->leave($__internal_e36e9b37186f3c84c54e6bdd04783693934930f395f21e22ec148f9b56a28b0e_prof);

        
        $__internal_cb706fd52c186d415a597cf299e21dbd5392b70e4c27ddd7a6635d2009fffd3c->leave($__internal_cb706fd52c186d415a597cf299e21dbd5392b70e4c27ddd7a6635d2009fffd3c_prof);

    }

    // line 196
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_a162d5810615f3170bbfb074dfcfd346d1e73ff15e19290490d630c3fe76f09e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a162d5810615f3170bbfb074dfcfd346d1e73ff15e19290490d630c3fe76f09e->enter($__internal_a162d5810615f3170bbfb074dfcfd346d1e73ff15e19290490d630c3fe76f09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_ec5c5499456dd9769c3a0b763cd9990a589f36f119f4927f0786a2be7d11b803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec5c5499456dd9769c3a0b763cd9990a589f36f119f4927f0786a2be7d11b803->enter($__internal_ec5c5499456dd9769c3a0b763cd9990a589f36f119f4927f0786a2be7d11b803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 197
        echo "                            ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 197, $this->getSourceContext()); })()), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 197, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "role_admin"), "method")))) {
            // line 198
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 200
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 208
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 218
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 221
        echo "                        ";
        
        $__internal_ec5c5499456dd9769c3a0b763cd9990a589f36f119f4927f0786a2be7d11b803->leave($__internal_ec5c5499456dd9769c3a0b763cd9990a589f36f119f4927f0786a2be7d11b803_prof);

        
        $__internal_a162d5810615f3170bbfb074dfcfd346d1e73ff15e19290490d630c3fe76f09e->leave($__internal_a162d5810615f3170bbfb074dfcfd346d1e73ff15e19290490d630c3fe76f09e_prof);

    }

    // line 200
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_6a7ccf3a28ba42abee2047c1df063cd063dab3bd15885c63a1a3d47ca5e14e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7ccf3a28ba42abee2047c1df063cd063dab3bd15885c63a1a3d47ca5e14e20->enter($__internal_6a7ccf3a28ba42abee2047c1df063cd063dab3bd15885c63a1a3d47ca5e14e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_80c0eb95401df84d3021053b4935dcc24ee6ff5574dfcbd7630033eef490fe24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c0eb95401df84d3021053b4935dcc24ee6ff5574dfcbd7630033eef490fe24->enter($__internal_80c0eb95401df84d3021053b4935dcc24ee6ff5574dfcbd7630033eef490fe24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 201
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 205
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 205, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 205)->display($context);
        // line 206
        echo "                                            </li>
                                        ";
        
        $__internal_80c0eb95401df84d3021053b4935dcc24ee6ff5574dfcbd7630033eef490fe24->leave($__internal_80c0eb95401df84d3021053b4935dcc24ee6ff5574dfcbd7630033eef490fe24_prof);

        
        $__internal_6a7ccf3a28ba42abee2047c1df063cd063dab3bd15885c63a1a3d47ca5e14e20->leave($__internal_6a7ccf3a28ba42abee2047c1df063cd063dab3bd15885c63a1a3d47ca5e14e20_prof);

    }

    // line 208
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_d87c12221f91c478b2a25682d971f6872616b229be6c99ddf37c59559bbfa4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d87c12221f91c478b2a25682d971f6872616b229be6c99ddf37c59559bbfa4d4->enter($__internal_d87c12221f91c478b2a25682d971f6872616b229be6c99ddf37c59559bbfa4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_7bc9fde88f43afcc4542155a1e733abe5e5c8b5eb781e43d2946f9387fe028f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc9fde88f43afcc4542155a1e733abe5e5c8b5eb781e43d2946f9387fe028f5->enter($__internal_7bc9fde88f43afcc4542155a1e733abe5e5c8b5eb781e43d2946f9387fe028f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 209
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 214
        $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 214, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 214)->display($context);
        // line 215
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_7bc9fde88f43afcc4542155a1e733abe5e5c8b5eb781e43d2946f9387fe028f5->leave($__internal_7bc9fde88f43afcc4542155a1e733abe5e5c8b5eb781e43d2946f9387fe028f5_prof);

        
        $__internal_d87c12221f91c478b2a25682d971f6872616b229be6c99ddf37c59559bbfa4d4->leave($__internal_d87c12221f91c478b2a25682d971f6872616b229be6c99ddf37c59559bbfa4d4_prof);

    }

    // line 227
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_efc39140786f321d9477729085c4d418d37e34d496ccca31e3b78770bdb09ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc39140786f321d9477729085c4d418d37e34d496ccca31e3b78770bdb09ffb->enter($__internal_efc39140786f321d9477729085c4d418d37e34d496ccca31e3b78770bdb09ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_3222f5717b3a14796cb25ee1cb3517e75309ca6c1c94a38d8b2c46b4961a727d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3222f5717b3a14796cb25ee1cb3517e75309ca6c1c94a38d8b2c46b4961a727d->enter($__internal_3222f5717b3a14796cb25ee1cb3517e75309ca6c1c94a38d8b2c46b4961a727d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 228
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 260
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 262
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 362
        echo "            </div>
        ";
        
        $__internal_3222f5717b3a14796cb25ee1cb3517e75309ca6c1c94a38d8b2c46b4961a727d->leave($__internal_3222f5717b3a14796cb25ee1cb3517e75309ca6c1c94a38d8b2c46b4961a727d_prof);

        
        $__internal_efc39140786f321d9477729085c4d418d37e34d496ccca31e3b78770bdb09ffb->leave($__internal_efc39140786f321d9477729085c4d418d37e34d496ccca31e3b78770bdb09ffb_prof);

    }

    // line 228
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_1aeb0370f1c978691ba1d21e8c0245adbec757d7a5b6c4e4b8fb12e123cc52c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aeb0370f1c978691ba1d21e8c0245adbec757d7a5b6c4e4b8fb12e123cc52c4->enter($__internal_1aeb0370f1c978691ba1d21e8c0245adbec757d7a5b6c4e4b8fb12e123cc52c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_e167026ef34daf9b2ac2708c8eb2ad2919e3b8d1740d1a8b4ade82726e95aee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e167026ef34daf9b2ac2708c8eb2ad2919e3b8d1740d1a8b4ade82726e95aee1->enter($__internal_e167026ef34daf9b2ac2708c8eb2ad2919e3b8d1740d1a8b4ade82726e95aee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 229
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 231
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 257
        echo "                    </section>
                </aside>
            ";
        
        $__internal_e167026ef34daf9b2ac2708c8eb2ad2919e3b8d1740d1a8b4ade82726e95aee1->leave($__internal_e167026ef34daf9b2ac2708c8eb2ad2919e3b8d1740d1a8b4ade82726e95aee1_prof);

        
        $__internal_1aeb0370f1c978691ba1d21e8c0245adbec757d7a5b6c4e4b8fb12e123cc52c4->leave($__internal_1aeb0370f1c978691ba1d21e8c0245adbec757d7a5b6c4e4b8fb12e123cc52c4_prof);

    }

    // line 231
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_b208755d5796b6ac2153a20d2ba9bd60c2b2e1aa735ea0ec800702916ab3db83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b208755d5796b6ac2153a20d2ba9bd60c2b2e1aa735ea0ec800702916ab3db83->enter($__internal_b208755d5796b6ac2153a20d2ba9bd60c2b2e1aa735ea0ec800702916ab3db83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_f6cf9ae3673d2624efe8ab5d54b5c3e3c4d3211e19642f2fd6e0eaed86ed4b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6cf9ae3673d2624efe8ab5d54b5c3e3c4d3211e19642f2fd6e0eaed86ed4b8e->enter($__internal_f6cf9ae3673d2624efe8ab5d54b5c3e3c4d3211e19642f2fd6e0eaed86ed4b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 232
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 244
        echo "
                            ";
        // line 245
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 246
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 249
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 256
        echo "                        ";
        
        $__internal_f6cf9ae3673d2624efe8ab5d54b5c3e3c4d3211e19642f2fd6e0eaed86ed4b8e->leave($__internal_f6cf9ae3673d2624efe8ab5d54b5c3e3c4d3211e19642f2fd6e0eaed86ed4b8e_prof);

        
        $__internal_b208755d5796b6ac2153a20d2ba9bd60c2b2e1aa735ea0ec800702916ab3db83->leave($__internal_b208755d5796b6ac2153a20d2ba9bd60c2b2e1aa735ea0ec800702916ab3db83_prof);

    }

    // line 232
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_f2495a52772f842c83dcb13e669dc33f5bbd4b3879e4e7c9579d2e41bb3c82db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2495a52772f842c83dcb13e669dc33f5bbd4b3879e4e7c9579d2e41bb3c82db->enter($__internal_f2495a52772f842c83dcb13e669dc33f5bbd4b3879e4e7c9579d2e41bb3c82db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_7924a1973056b67137fe044c065655bc6ed4b5787d6b273a725acf199ca72cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7924a1973056b67137fe044c065655bc6ed4b5787d6b273a725acf199ca72cff->enter($__internal_7924a1973056b67137fe044c065655bc6ed4b5787d6b273a725acf199ca72cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 233
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 235, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
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
        
        $__internal_7924a1973056b67137fe044c065655bc6ed4b5787d6b273a725acf199ca72cff->leave($__internal_7924a1973056b67137fe044c065655bc6ed4b5787d6b273a725acf199ca72cff_prof);

        
        $__internal_f2495a52772f842c83dcb13e669dc33f5bbd4b3879e4e7c9579d2e41bb3c82db->leave($__internal_f2495a52772f842c83dcb13e669dc33f5bbd4b3879e4e7c9579d2e41bb3c82db_prof);

    }

    // line 245
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_3dfd55ceb59cef29035198fede062af8b220570a89dd79261313b7d5278bfb62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfd55ceb59cef29035198fede062af8b220570a89dd79261313b7d5278bfb62->enter($__internal_3dfd55ceb59cef29035198fede062af8b220570a89dd79261313b7d5278bfb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_007d90d5c0e195bfd0dd04f1b184e6fdb48ac69b107450cb7a75b0690e02803d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007d90d5c0e195bfd0dd04f1b184e6fdb48ac69b107450cb7a75b0690e02803d->enter($__internal_007d90d5c0e195bfd0dd04f1b184e6fdb48ac69b107450cb7a75b0690e02803d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_007d90d5c0e195bfd0dd04f1b184e6fdb48ac69b107450cb7a75b0690e02803d->leave($__internal_007d90d5c0e195bfd0dd04f1b184e6fdb48ac69b107450cb7a75b0690e02803d_prof);

        
        $__internal_3dfd55ceb59cef29035198fede062af8b220570a89dd79261313b7d5278bfb62->leave($__internal_3dfd55ceb59cef29035198fede062af8b220570a89dd79261313b7d5278bfb62_prof);

    }

    // line 246
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_bd1ad1ae974659925857a404e988a952e24b758ab06ce76a53e13cb0b806c6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1ad1ae974659925857a404e988a952e24b758ab06ce76a53e13cb0b806c6c6->enter($__internal_bd1ad1ae974659925857a404e988a952e24b758ab06ce76a53e13cb0b806c6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_9a8f848838b77c47fead52cf5abb55d4895d70e922db798b2f309ddc1532a78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8f848838b77c47fead52cf5abb55d4895d70e922db798b2f309ddc1532a78c->enter($__internal_9a8f848838b77c47fead52cf5abb55d4895d70e922db798b2f309ddc1532a78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 247
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 247, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_9a8f848838b77c47fead52cf5abb55d4895d70e922db798b2f309ddc1532a78c->leave($__internal_9a8f848838b77c47fead52cf5abb55d4895d70e922db798b2f309ddc1532a78c_prof);

        
        $__internal_bd1ad1ae974659925857a404e988a952e24b758ab06ce76a53e13cb0b806c6c6->leave($__internal_bd1ad1ae974659925857a404e988a952e24b758ab06ce76a53e13cb0b806c6c6_prof);

    }

    // line 249
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_71bac589b5a0b9a4f4c50afef899d56865b52ba6802603585f7d5287573a9f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71bac589b5a0b9a4f4c50afef899d56865b52ba6802603585f7d5287573a9f79->enter($__internal_71bac589b5a0b9a4f4c50afef899d56865b52ba6802603585f7d5287573a9f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_a23e50b97d69cebb9dd426b9d4bd1866ae41c1edf6e3129423d9f3040c889795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23e50b97d69cebb9dd426b9d4bd1866ae41c1edf6e3129423d9f3040c889795->enter($__internal_a23e50b97d69cebb9dd426b9d4bd1866ae41c1edf6e3129423d9f3040c889795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 250
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 251
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 254
        echo "                                </p>
                            ";
        
        $__internal_a23e50b97d69cebb9dd426b9d4bd1866ae41c1edf6e3129423d9f3040c889795->leave($__internal_a23e50b97d69cebb9dd426b9d4bd1866ae41c1edf6e3129423d9f3040c889795_prof);

        
        $__internal_71bac589b5a0b9a4f4c50afef899d56865b52ba6802603585f7d5287573a9f79->leave($__internal_71bac589b5a0b9a4f4c50afef899d56865b52ba6802603585f7d5287573a9f79_prof);

    }

    // line 251
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_54e25c7a4d70584a7a4f894ffe4a31859e34e3f34c0c958542327095e0f3c1f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e25c7a4d70584a7a4f894ffe4a31859e34e3f34c0c958542327095e0f3c1f4->enter($__internal_54e25c7a4d70584a7a4f894ffe4a31859e34e3f34c0c958542327095e0f3c1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_da04660a1651b34105f996bb2604ba860b2f46cd413ecc38acbee32a805d1cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da04660a1651b34105f996bb2604ba860b2f46cd413ecc38acbee32a805d1cc0->enter($__internal_da04660a1651b34105f996bb2604ba860b2f46cd413ecc38acbee32a805d1cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 252
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_da04660a1651b34105f996bb2604ba860b2f46cd413ecc38acbee32a805d1cc0->leave($__internal_da04660a1651b34105f996bb2604ba860b2f46cd413ecc38acbee32a805d1cc0_prof);

        
        $__internal_54e25c7a4d70584a7a4f894ffe4a31859e34e3f34c0c958542327095e0f3c1f4->leave($__internal_54e25c7a4d70584a7a4f894ffe4a31859e34e3f34c0c958542327095e0f3c1f4_prof);

    }

    // line 262
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_329c698b4b9d9976f77f022ee8ab6997ff25f416ffa3e9e1a32570f30e6295b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_329c698b4b9d9976f77f022ee8ab6997ff25f416ffa3e9e1a32570f30e6295b3->enter($__internal_329c698b4b9d9976f77f022ee8ab6997ff25f416ffa3e9e1a32570f30e6295b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_5a55adde1ed13115796eb21d678290214ccd89bf606b12978943fc3b971531d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a55adde1ed13115796eb21d678290214ccd89bf606b12978943fc3b971531d4->enter($__internal_5a55adde1ed13115796eb21d678290214ccd89bf606b12978943fc3b971531d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 263
        echo "                    <section class=\"content-header\">

                        ";
        // line 265
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 323
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 326
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 360
        echo "                    </section>
                ";
        
        $__internal_5a55adde1ed13115796eb21d678290214ccd89bf606b12978943fc3b971531d4->leave($__internal_5a55adde1ed13115796eb21d678290214ccd89bf606b12978943fc3b971531d4_prof);

        
        $__internal_329c698b4b9d9976f77f022ee8ab6997ff25f416ffa3e9e1a32570f30e6295b3->leave($__internal_329c698b4b9d9976f77f022ee8ab6997ff25f416ffa3e9e1a32570f30e6295b3_prof);

    }

    // line 265
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_b9eb71fafd4dda677e58ee1cd9fbf863b63e22b0c7d38f73821963b4b07a5e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9eb71fafd4dda677e58ee1cd9fbf863b63e22b0c7d38f73821963b4b07a5e98->enter($__internal_b9eb71fafd4dda677e58ee1cd9fbf863b63e22b0c7d38f73821963b4b07a5e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_7ffd0ddb8809f563f1991552582de00f923467941f86d73b2366f017b589159b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffd0ddb8809f563f1991552582de00f923467941f86d73b2366f017b589159b->enter($__internal_7ffd0ddb8809f563f1991552582de00f923467941f86d73b2366f017b589159b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 266
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 322
        echo "                        ";
        
        $__internal_7ffd0ddb8809f563f1991552582de00f923467941f86d73b2366f017b589159b->leave($__internal_7ffd0ddb8809f563f1991552582de00f923467941f86d73b2366f017b589159b_prof);

        
        $__internal_b9eb71fafd4dda677e58ee1cd9fbf863b63e22b0c7d38f73821963b4b07a5e98->leave($__internal_b9eb71fafd4dda677e58ee1cd9fbf863b63e22b0c7d38f73821963b4b07a5e98_prof);

    }

    // line 266
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_b92a158e388a67f51cc21c8ccaf496784e70e80a400ebc4ccaacdc4422b4646b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92a158e388a67f51cc21c8ccaf496784e70e80a400ebc4ccaacdc4422b4646b->enter($__internal_b92a158e388a67f51cc21c8ccaf496784e70e80a400ebc4ccaacdc4422b4646b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_6ca94b716dfa247094ca7a7c93c1442bfa223af84212c55b05985b1dc8568ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca94b716dfa247094ca7a7c93c1442bfa223af84212c55b05985b1dc8568ff6->enter($__internal_6ca94b716dfa247094ca7a7c93c1442bfa223af84212c55b05985b1dc8568ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 267
        echo "                                ";
        if (((( !twig_test_empty((isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new Twig_Error_Runtime('Variable "_navbar_title" does not exist.', 267, $this->getSourceContext()); })())) ||  !twig_test_empty(        // line 268
(isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 268, $this->getSourceContext()); })()))) ||  !twig_test_empty(        // line 269
(isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 269, $this->getSourceContext()); })()))) ||  !twig_test_empty(        // line 270
(isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 270, $this->getSourceContext()); })())))) {
            // line 272
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 274
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 281
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 283
            if ( !twig_test_empty((isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 283, $this->getSourceContext()); })()))) {
                // line 284
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 285
                echo (isset($context["_tab_menu"]) || array_key_exists("_tab_menu", $context) ? $context["_tab_menu"] : (function () { throw new Twig_Error_Runtime('Variable "_tab_menu" does not exist.', 285, $this->getSourceContext()); })());
                echo "
                                                    </div>
                                                ";
            }
            // line 288
            echo "
                                                ";
            // line 289
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 289, $this->getSourceContext()); })()) == "list")) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 289, $this->getSourceContext()); })()), "listModes", array())) > 1))) {
                // line 290
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 291
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 291, $this->getSourceContext()); })()), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 292
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 292, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 292, $this->getSourceContext()); })()), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 292, $this->getSourceContext()); })()), "getListMode", array(), "method") == $context["mode"])) {
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
                // line 294
                echo "                                                    </div>
                                                ";
            }
            // line 296
            echo "
                                                ";
            // line 297
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 313
            echo "
                                                ";
            // line 314
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 314, $this->getSourceContext()); })()))) {
                // line 315
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) || array_key_exists("_list_filters_actions", $context) ? $context["_list_filters_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters_actions" does not exist.', 315, $this->getSourceContext()); })());
                echo "
                                                ";
            }
            // line 317
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 321
        echo "                            ";
        
        $__internal_6ca94b716dfa247094ca7a7c93c1442bfa223af84212c55b05985b1dc8568ff6->leave($__internal_6ca94b716dfa247094ca7a7c93c1442bfa223af84212c55b05985b1dc8568ff6_prof);

        
        $__internal_b92a158e388a67f51cc21c8ccaf496784e70e80a400ebc4ccaacdc4422b4646b->leave($__internal_b92a158e388a67f51cc21c8ccaf496784e70e80a400ebc4ccaacdc4422b4646b_prof);

    }

    // line 274
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_e40bf4524da4cd166d0673b097b4ab0ac140636267d0049537cf2fbff8f8aae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40bf4524da4cd166d0673b097b4ab0ac140636267d0049537cf2fbff8f8aae9->enter($__internal_e40bf4524da4cd166d0673b097b4ab0ac140636267d0049537cf2fbff8f8aae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_7d09ebe4eb1ed55f26f01f74219f29f66adecebf44870bcc3af4c568748b720e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d09ebe4eb1ed55f26f01f74219f29f66adecebf44870bcc3af4c568748b720e->enter($__internal_7d09ebe4eb1ed55f26f01f74219f29f66adecebf44870bcc3af4c568748b720e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 275
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new Twig_Error_Runtime('Variable "_navbar_title" does not exist.', 275, $this->getSourceContext()); })()))) {
            // line 276
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 277
            echo (isset($context["_navbar_title"]) || array_key_exists("_navbar_title", $context) ? $context["_navbar_title"] : (function () { throw new Twig_Error_Runtime('Variable "_navbar_title" does not exist.', 277, $this->getSourceContext()); })());
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 280
        echo "                                            ";
        
        $__internal_7d09ebe4eb1ed55f26f01f74219f29f66adecebf44870bcc3af4c568748b720e->leave($__internal_7d09ebe4eb1ed55f26f01f74219f29f66adecebf44870bcc3af4c568748b720e_prof);

        
        $__internal_e40bf4524da4cd166d0673b097b4ab0ac140636267d0049537cf2fbff8f8aae9->leave($__internal_e40bf4524da4cd166d0673b097b4ab0ac140636267d0049537cf2fbff8f8aae9_prof);

    }

    // line 297
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_d8866d20eb3cd425006c121b66e387efe37843bd77d50e6fd003065c4289e903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8866d20eb3cd425006c121b66e387efe37843bd77d50e6fd003065c4289e903->enter($__internal_d8866d20eb3cd425006c121b66e387efe37843bd77d50e6fd003065c4289e903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_318ef18bef38cd2b7341f2e5c678e2ac92119ccd5e36692016ad87525dd257c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318ef18bef38cd2b7341f2e5c678e2ac92119ccd5e36692016ad87525dd257c5->enter($__internal_318ef18bef38cd2b7341f2e5c678e2ac92119ccd5e36692016ad87525dd257c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 298
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter((isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 298, $this->getSourceContext()); })()), array("<li>" => "", "</li>" => ""))))) {
            // line 299
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 300
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 300, $this->getSourceContext()); })()), "</a>")) > 2)) {
                // line 301
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 302
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 304
                echo (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 304, $this->getSourceContext()); })());
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 308
                echo "                                                            ";
                echo (isset($context["_actions"]) || array_key_exists("_actions", $context) ? $context["_actions"] : (function () { throw new Twig_Error_Runtime('Variable "_actions" does not exist.', 308, $this->getSourceContext()); })());
                echo "
                                                        ";
            }
            // line 310
            echo "                                                        </ul>
                                                    ";
        }
        // line 312
        echo "                                                ";
        
        $__internal_318ef18bef38cd2b7341f2e5c678e2ac92119ccd5e36692016ad87525dd257c5->leave($__internal_318ef18bef38cd2b7341f2e5c678e2ac92119ccd5e36692016ad87525dd257c5_prof);

        
        $__internal_d8866d20eb3cd425006c121b66e387efe37843bd77d50e6fd003065c4289e903->leave($__internal_d8866d20eb3cd425006c121b66e387efe37843bd77d50e6fd003065c4289e903_prof);

    }

    // line 326
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_74504722c1f3eabe5820743462dcab9ea140171bb8c2189ba7b3b88d81137964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74504722c1f3eabe5820743462dcab9ea140171bb8c2189ba7b3b88d81137964->enter($__internal_74504722c1f3eabe5820743462dcab9ea140171bb8c2189ba7b3b88d81137964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_1c3b5d8658eaadc20156cbe0c9672a858f210a97a9e9b393f3c6c767083ea476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3b5d8658eaadc20156cbe0c9672a858f210a97a9e9b393f3c6c767083ea476->enter($__internal_1c3b5d8658eaadc20156cbe0c9672a858f210a97a9e9b393f3c6c767083ea476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 327
        echo "
                            ";
        // line 328
        $this->displayBlock('notice', $context, $blocks);
        // line 331
        echo "
                            ";
        // line 332
        if ( !twig_test_empty((isset($context["_preview"]) || array_key_exists("_preview", $context) ? $context["_preview"] : (function () { throw new Twig_Error_Runtime('Variable "_preview" does not exist.', 332, $this->getSourceContext()); })()))) {
            // line 333
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) || array_key_exists("_preview", $context) ? $context["_preview"] : (function () { throw new Twig_Error_Runtime('Variable "_preview" does not exist.', 333, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 335
        echo "
                            ";
        // line 336
        if ( !twig_test_empty((isset($context["_content"]) || array_key_exists("_content", $context) ? $context["_content"] : (function () { throw new Twig_Error_Runtime('Variable "_content" does not exist.', 336, $this->getSourceContext()); })()))) {
            // line 337
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) || array_key_exists("_content", $context) ? $context["_content"] : (function () { throw new Twig_Error_Runtime('Variable "_content" does not exist.', 337, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 339
        echo "
                            ";
        // line 340
        if ( !twig_test_empty((isset($context["_show"]) || array_key_exists("_show", $context) ? $context["_show"] : (function () { throw new Twig_Error_Runtime('Variable "_show" does not exist.', 340, $this->getSourceContext()); })()))) {
            // line 341
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) || array_key_exists("_show", $context) ? $context["_show"] : (function () { throw new Twig_Error_Runtime('Variable "_show" does not exist.', 341, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 343
        echo "
                            ";
        // line 344
        if ( !twig_test_empty((isset($context["_form"]) || array_key_exists("_form", $context) ? $context["_form"] : (function () { throw new Twig_Error_Runtime('Variable "_form" does not exist.', 344, $this->getSourceContext()); })()))) {
            // line 345
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) || array_key_exists("_form", $context) ? $context["_form"] : (function () { throw new Twig_Error_Runtime('Variable "_form" does not exist.', 345, $this->getSourceContext()); })());
            echo "</div>
                            ";
        }
        // line 347
        echo "
                            ";
        // line 348
        if ( !twig_test_empty((isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 348, $this->getSourceContext()); })()))) {
            // line 349
            echo "                                <div class=\"row\">
                                    ";
            // line 350
            echo (isset($context["_list_filters"]) || array_key_exists("_list_filters", $context) ? $context["_list_filters"] : (function () { throw new Twig_Error_Runtime('Variable "_list_filters" does not exist.', 350, $this->getSourceContext()); })());
            echo "
                                </div>
                            ";
        }
        // line 353
        echo "
                            ";
        // line 354
        if ( !twig_test_empty((isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 354, $this->getSourceContext()); })()))) {
            // line 355
            echo "                                <div class=\"row\">
                                    ";
            // line 356
            echo (isset($context["_list_table"]) || array_key_exists("_list_table", $context) ? $context["_list_table"] : (function () { throw new Twig_Error_Runtime('Variable "_list_table" does not exist.', 356, $this->getSourceContext()); })());
            echo "
                                </div>
                            ";
        }
        // line 359
        echo "                        ";
        
        $__internal_1c3b5d8658eaadc20156cbe0c9672a858f210a97a9e9b393f3c6c767083ea476->leave($__internal_1c3b5d8658eaadc20156cbe0c9672a858f210a97a9e9b393f3c6c767083ea476_prof);

        
        $__internal_74504722c1f3eabe5820743462dcab9ea140171bb8c2189ba7b3b88d81137964->leave($__internal_74504722c1f3eabe5820743462dcab9ea140171bb8c2189ba7b3b88d81137964_prof);

    }

    // line 328
    public function block_notice($context, array $blocks = array())
    {
        $__internal_7c21744db90a4494105f6403dac980934a9659affe7d397603c81cf52c8f7267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c21744db90a4494105f6403dac980934a9659affe7d397603c81cf52c8f7267->enter($__internal_7c21744db90a4494105f6403dac980934a9659affe7d397603c81cf52c8f7267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_39980b27b2b025986f5f411b1ec7456ede6e4853206d74f174397506d44f5c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39980b27b2b025986f5f411b1ec7456ede6e4853206d74f174397506d44f5c6e->enter($__internal_39980b27b2b025986f5f411b1ec7456ede6e4853206d74f174397506d44f5c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 329
        echo "                                ";
        $this->loadTemplate("@SonataCore/FlashMessage/render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 329)->display($context);
        // line 330
        echo "                            ";
        
        $__internal_39980b27b2b025986f5f411b1ec7456ede6e4853206d74f174397506d44f5c6e->leave($__internal_39980b27b2b025986f5f411b1ec7456ede6e4853206d74f174397506d44f5c6e_prof);

        
        $__internal_7c21744db90a4494105f6403dac980934a9659affe7d397603c81cf52c8f7267->leave($__internal_7c21744db90a4494105f6403dac980934a9659affe7d397603c81cf52c8f7267_prof);

    }

    // line 367
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_495f0fc161f456c37065e2547c1db71dd4b93e0c2aea6a3eca08c791e166ffaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495f0fc161f456c37065e2547c1db71dd4b93e0c2aea6a3eca08c791e166ffaa->enter($__internal_495f0fc161f456c37065e2547c1db71dd4b93e0c2aea6a3eca08c791e166ffaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_4aaf14ecfd15b8dcf54f32028602b5b10f5e0eccba0122eb78e061e75b3f4b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aaf14ecfd15b8dcf54f32028602b5b10f5e0eccba0122eb78e061e75b3f4b7d->enter($__internal_4aaf14ecfd15b8dcf54f32028602b5b10f5e0eccba0122eb78e061e75b3f4b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 368
        echo "            ";
        // line 369
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_4aaf14ecfd15b8dcf54f32028602b5b10f5e0eccba0122eb78e061e75b3f4b7d->leave($__internal_4aaf14ecfd15b8dcf54f32028602b5b10f5e0eccba0122eb78e061e75b3f4b7d_prof);

        
        $__internal_495f0fc161f456c37065e2547c1db71dd4b93e0c2aea6a3eca08c791e166ffaa->leave($__internal_495f0fc161f456c37065e2547c1db71dd4b93e0c2aea6a3eca08c791e166ffaa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1465 => 369,  1463 => 368,  1454 => 367,  1444 => 330,  1441 => 329,  1432 => 328,  1422 => 359,  1416 => 356,  1413 => 355,  1411 => 354,  1408 => 353,  1402 => 350,  1399 => 349,  1397 => 348,  1394 => 347,  1388 => 345,  1386 => 344,  1383 => 343,  1377 => 341,  1375 => 340,  1372 => 339,  1366 => 337,  1364 => 336,  1361 => 335,  1355 => 333,  1353 => 332,  1350 => 331,  1348 => 328,  1345 => 327,  1336 => 326,  1326 => 312,  1322 => 310,  1316 => 308,  1309 => 304,  1304 => 302,  1301 => 301,  1299 => 300,  1296 => 299,  1293 => 298,  1284 => 297,  1274 => 280,  1268 => 277,  1265 => 276,  1262 => 275,  1253 => 274,  1243 => 321,  1237 => 317,  1231 => 315,  1229 => 314,  1226 => 313,  1224 => 297,  1221 => 296,  1217 => 294,  1202 => 292,  1198 => 291,  1195 => 290,  1193 => 289,  1190 => 288,  1184 => 285,  1181 => 284,  1179 => 283,  1175 => 281,  1173 => 274,  1169 => 272,  1167 => 270,  1166 => 269,  1165 => 268,  1163 => 267,  1154 => 266,  1144 => 322,  1141 => 266,  1132 => 265,  1121 => 360,  1119 => 326,  1114 => 323,  1112 => 265,  1108 => 263,  1099 => 262,  1088 => 252,  1079 => 251,  1068 => 254,  1066 => 251,  1063 => 250,  1054 => 249,  1041 => 247,  1032 => 246,  1014 => 245,  993 => 235,  987 => 233,  978 => 232,  968 => 256,  965 => 249,  962 => 246,  960 => 245,  957 => 244,  954 => 232,  945 => 231,  933 => 257,  931 => 231,  927 => 229,  918 => 228,  907 => 362,  905 => 262,  901 => 260,  898 => 228,  889 => 227,  877 => 215,  875 => 214,  868 => 209,  859 => 208,  848 => 206,  846 => 205,  840 => 201,  831 => 200,  821 => 221,  816 => 218,  813 => 208,  811 => 200,  807 => 198,  804 => 197,  795 => 196,  784 => 192,  780 => 190,  774 => 188,  771 => 187,  768 => 186,  754 => 185,  748 => 183,  744 => 181,  738 => 179,  734 => 177,  731 => 175,  728 => 173,  726 => 172,  721 => 171,  719 => 170,  716 => 169,  714 => 168,  711 => 165,  709 => 164,  707 => 163,  705 => 162,  687 => 161,  684 => 160,  682 => 159,  679 => 158,  677 => 157,  674 => 156,  665 => 155,  654 => 222,  652 => 196,  648 => 194,  646 => 155,  639 => 151,  635 => 149,  626 => 148,  616 => 147,  612 => 145,  606 => 143,  603 => 142,  595 => 140,  593 => 139,  588 => 138,  585 => 137,  576 => 136,  562 => 132,  558 => 130,  549 => 129,  538 => 224,  535 => 148,  532 => 136,  530 => 129,  527 => 128,  518 => 127,  508 => 121,  505 => 120,  503 => 119,  500 => 118,  491 => 117,  481 => 113,  478 => 112,  475 => 111,  461 => 110,  456 => 108,  453 => 105,  451 => 104,  449 => 103,  447 => 102,  443 => 99,  440 => 98,  437 => 97,  420 => 96,  417 => 95,  414 => 94,  408 => 92,  406 => 91,  400 => 89,  391 => 88,  381 => 66,  372 => 64,  367 => 63,  358 => 62,  337 => 50,  333 => 48,  327 => 47,  319 => 46,  311 => 45,  303 => 44,  299 => 42,  290 => 41,  280 => 85,  277 => 84,  271 => 82,  268 => 81,  265 => 80,  262 => 79,  259 => 77,  255 => 75,  253 => 73,  251 => 71,  248 => 70,  245 => 69,  242 => 67,  240 => 62,  237 => 61,  234 => 41,  225 => 40,  215 => 38,  206 => 36,  201 => 35,  192 => 34,  179 => 29,  170 => 28,  152 => 26,  139 => 374,  136 => 373,  133 => 367,  131 => 366,  127 => 364,  125 => 227,  122 => 226,  120 => 127,  114 => 123,  112 => 117,  107 => 114,  105 => 88,  101 => 86,  99 => 40,  96 => 39,  94 => 34,  91 => 33,  89 => 28,  84 => 26,  81 => 25,  79 => 23,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  59 => 13,  57 => 12,);
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

            {# localize moment #}
            {% set localeForMoment = canonicalize_locale_for_moment() %}
            {% if localeForMoment %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    localeForMoment ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% set localeForSelect2 = canonicalize_locale_for_select2() %}
                {% if localeForSelect2 %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ localeForSelect2 ~ '.js') }}\"></script>
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
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">{{ 'toggle_navigation'|trans({}, 'SonataAdminBundle') }}</span>
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
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
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
", "SonataAdminBundle::standard_layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/standard_layout.html.twig");
    }
}
