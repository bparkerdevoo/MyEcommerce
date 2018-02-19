<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_2f24ec954c113eef0d5aa6e50b39d01b98d464d7771534ece8ff326696e18315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_groups' => array($this, 'block_show_groups'),
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_331dcfb5e34a773d7722b2007bf0a095cbfaf8b641f13b9e41685e452257528a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331dcfb5e34a773d7722b2007bf0a095cbfaf8b641f13b9e41685e452257528a->enter($__internal_331dcfb5e34a773d7722b2007bf0a095cbfaf8b641f13b9e41685e452257528a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $__internal_b73b38a16cb990985ab57b319c81f147f40e119102b2d954a3895fae0481eb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73b38a16cb990985ab57b319c81f147f40e119102b2d954a3895fae0481eb6c->enter($__internal_b73b38a16cb990985ab57b319c81f147f40e119102b2d954a3895fae0481eb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_331dcfb5e34a773d7722b2007bf0a095cbfaf8b641f13b9e41685e452257528a->leave($__internal_331dcfb5e34a773d7722b2007bf0a095cbfaf8b641f13b9e41685e452257528a_prof);

        
        $__internal_b73b38a16cb990985ab57b319c81f147f40e119102b2d954a3895fae0481eb6c->leave($__internal_b73b38a16cb990985ab57b319c81f147f40e119102b2d954a3895fae0481eb6c_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f315f20beccae817b59242c88b9336d18a30f00efc9ef5c6602df06dbf53b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f315f20beccae817b59242c88b9336d18a30f00efc9ef5c6602df06dbf53b0a->enter($__internal_3f315f20beccae817b59242c88b9336d18a30f00efc9ef5c6602df06dbf53b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ec0eb66a525909a3a525b31e24591d588d86c16cd91da3e78edbf599799d4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec0eb66a525909a3a525b31e24591d588d86c16cd91da3e78edbf599799d4b1->enter($__internal_4ec0eb66a525909a3a525b31e24591d588d86c16cd91da3e78edbf599799d4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_show", array("%name%" => twig_truncate_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 15, $this->getSourceContext()); })()), "toString", array(0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 15, $this->getSourceContext()); })())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
        echo "
";
        
        $__internal_4ec0eb66a525909a3a525b31e24591d588d86c16cd91da3e78edbf599799d4b1->leave($__internal_4ec0eb66a525909a3a525b31e24591d588d86c16cd91da3e78edbf599799d4b1_prof);

        
        $__internal_3f315f20beccae817b59242c88b9336d18a30f00efc9ef5c6602df06dbf53b0a->leave($__internal_3f315f20beccae817b59242c88b9336d18a30f00efc9ef5c6602df06dbf53b0a_prof);

    }

    // line 18
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_c5c0e0466dbd44d9dc418fb842b9caaf9f8d11b4fe150e0b6a3d93f6f39ef11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c0e0466dbd44d9dc418fb842b9caaf9f8d11b4fe150e0b6a3d93f6f39ef11f->enter($__internal_c5c0e0466dbd44d9dc418fb842b9caaf9f8d11b4fe150e0b6a3d93f6f39ef11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_8a906b7e397ae6a2877478a48d513b57dadbbb0f94eb953ad9ee63e81e238aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a906b7e397ae6a2877478a48d513b57dadbbb0f94eb953ad9ee63e81e238aef->enter($__internal_8a906b7e397ae6a2877478a48d513b57dadbbb0f94eb953ad9ee63e81e238aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 19
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8a906b7e397ae6a2877478a48d513b57dadbbb0f94eb953ad9ee63e81e238aef->leave($__internal_8a906b7e397ae6a2877478a48d513b57dadbbb0f94eb953ad9ee63e81e238aef_prof);

        
        $__internal_c5c0e0466dbd44d9dc418fb842b9caaf9f8d11b4fe150e0b6a3d93f6f39ef11f->leave($__internal_c5c0e0466dbd44d9dc418fb842b9caaf9f8d11b4fe150e0b6a3d93f6f39ef11f_prof);

    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e47c6c1fdfcff86cb4ea9cbbc9f4ae188a11ee41c98fedbec9130663a7927261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47c6c1fdfcff86cb4ea9cbbc9f4ae188a11ee41c98fedbec9130663a7927261->enter($__internal_e47c6c1fdfcff86cb4ea9cbbc9f4ae188a11ee41c98fedbec9130663a7927261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_77691834d082d986cc276431cc543814385ef76f4d952df7a182e406fd7592bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77691834d082d986cc276431cc543814385ef76f4d952df7a182e406fd7592bf->enter($__internal_77691834d082d986cc276431cc543814385ef76f4d952df7a182e406fd7592bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 23
        $this->loadTemplate("@SonataAdmin/CRUD/action_buttons.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 23)->display($context);
        
        $__internal_77691834d082d986cc276431cc543814385ef76f4d952df7a182e406fd7592bf->leave($__internal_77691834d082d986cc276431cc543814385ef76f4d952df7a182e406fd7592bf_prof);

        
        $__internal_e47c6c1fdfcff86cb4ea9cbbc9f4ae188a11ee41c98fedbec9130663a7927261->leave($__internal_e47c6c1fdfcff86cb4ea9cbbc9f4ae188a11ee41c98fedbec9130663a7927261_prof);

    }

    // line 26
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_398f6db8e0b39e30fa8e45b6a4f6a5da1f3056ec2e872a4e90494df361ebd9aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398f6db8e0b39e30fa8e45b6a4f6a5da1f3056ec2e872a4e90494df361ebd9aa->enter($__internal_398f6db8e0b39e30fa8e45b6a4f6a5da1f3056ec2e872a4e90494df361ebd9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_3675a79ea9dae70b216ba9732a4b5ed653a28b13d5e8e49fcddd5c78b6e8c8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3675a79ea9dae70b216ba9732a4b5ed653a28b13d5e8e49fcddd5c78b6e8c8d4->enter($__internal_3675a79ea9dae70b216ba9732a4b5ed653a28b13d5e8e49fcddd5c78b6e8c8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 27
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 27, $this->getSourceContext()); })()), "sidemenu", array(0 => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 27, $this->getSourceContext()); })())), "method"), array("currentClass" => "active", "template" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 29
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 29, $this->getSourceContext()); })()), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 30
        echo "
";
        
        $__internal_3675a79ea9dae70b216ba9732a4b5ed653a28b13d5e8e49fcddd5c78b6e8c8d4->leave($__internal_3675a79ea9dae70b216ba9732a4b5ed653a28b13d5e8e49fcddd5c78b6e8c8d4_prof);

        
        $__internal_398f6db8e0b39e30fa8e45b6a4f6a5da1f3056ec2e872a4e90494df361ebd9aa->leave($__internal_398f6db8e0b39e30fa8e45b6a4f6a5da1f3056ec2e872a4e90494df361ebd9aa_prof);

    }

    // line 33
    public function block_show($context, array $blocks = array())
    {
        $__internal_7f3bddb47c2a15961a94fb6ab1e1eb360e57f98bab88746e794d4a6fea981367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3bddb47c2a15961a94fb6ab1e1eb360e57f98bab88746e794d4a6fea981367->enter($__internal_7f3bddb47c2a15961a94fb6ab1e1eb360e57f98bab88746e794d4a6fea981367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_254f6f3ebced8cbef2fceb72ffe0e8aaeadc2ea753305d03b5adb39d008c9792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254f6f3ebced8cbef2fceb72ffe0e8aaeadc2ea753305d03b5adb39d008c9792->enter($__internal_254f6f3ebced8cbef2fceb72ffe0e8aaeadc2ea753305d03b5adb39d008c9792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 34
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 36, $this->getSourceContext()); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 36, $this->getSourceContext()); })()))));
        echo "

        ";
        // line 38
        $context["has_tab"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "showtabs", array())) == 1) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_array_keys_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 38, $this->getSourceContext()); })()), "showtabs", array())) > 1));
        // line 39
        echo "
        ";
        // line 40
        if ((isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new Twig_Error_Runtime('Variable "has_tab" does not exist.', 40, $this->getSourceContext()); })())) {
            // line 41
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 43, $this->getSourceContext()); })()), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 44
                echo "                        <li";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 45, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "translation_domain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 47, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 54, $this->getSourceContext()); })()), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 55
                echo "                        <div
                                class=\"tab-pane fade";
                // line 56
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 57, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 61
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "description", array()) != false)) {
                    // line 62
                    echo "                                        <p>";
                    echo twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 64
                echo "
                                    ";
                // line 65
                $context["groups"] = twig_get_attribute($this->env, $this->getSourceContext(), $context["show_tab"], "groups", array());
                // line 66
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        </div>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable(twig_get_attribute($this->env, $this->getSourceContext(),         // line 73
(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 73, $this->getSourceContext()); })()), "showtabs", array()))) {
            // line 74
            echo "            ";
            $context["groups"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 74, $this->getSourceContext()); })()), "showtabs", array()), "default", array()), "groups", array());
            // line 75
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 77
        echo "
    </div>

    ";
        // line 80
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 80, $this->getSourceContext()); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 80, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_254f6f3ebced8cbef2fceb72ffe0e8aaeadc2ea753305d03b5adb39d008c9792->leave($__internal_254f6f3ebced8cbef2fceb72ffe0e8aaeadc2ea753305d03b5adb39d008c9792_prof);

        
        $__internal_7f3bddb47c2a15961a94fb6ab1e1eb360e57f98bab88746e794d4a6fea981367->leave($__internal_7f3bddb47c2a15961a94fb6ab1e1eb360e57f98bab88746e794d4a6fea981367_prof);

    }

    // line 83
    public function block_show_groups($context, array $blocks = array())
    {
        $__internal_7a220667bf3f436599cdfb2910fa05260c75d9dca435774c598bed7ad6dbbe46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a220667bf3f436599cdfb2910fa05260c75d9dca435774c598bed7ad6dbbe46->enter($__internal_7a220667bf3f436599cdfb2910fa05260c75d9dca435774c598bed7ad6dbbe46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        $__internal_5accf4609796b4c00f6c7779dfb0671fe4a3e18e7ad82bce6d19656256cee6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5accf4609796b4c00f6c7779dfb0671fe4a3e18e7ad82bce6d19656256cee6ad->enter($__internal_5accf4609796b4c00f6c7779dfb0671fe4a3e18e7ad82bce6d19656256cee6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        // line 84
        echo "    <div class=\"row\">
        ";
        // line 85
        $this->displayBlock('field_row', $context, $blocks);
        // line 117
        echo "
    </div>
";
        
        $__internal_5accf4609796b4c00f6c7779dfb0671fe4a3e18e7ad82bce6d19656256cee6ad->leave($__internal_5accf4609796b4c00f6c7779dfb0671fe4a3e18e7ad82bce6d19656256cee6ad_prof);

        
        $__internal_7a220667bf3f436599cdfb2910fa05260c75d9dca435774c598bed7ad6dbbe46->leave($__internal_7a220667bf3f436599cdfb2910fa05260c75d9dca435774c598bed7ad6dbbe46_prof);

    }

    // line 85
    public function block_field_row($context, array $blocks = array())
    {
        $__internal_3f8902429dfaa740d9a17f6187d051cd347e1e22f5630fde5d6a3cc971b20d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8902429dfaa740d9a17f6187d051cd347e1e22f5630fde5d6a3cc971b20d14->enter($__internal_3f8902429dfaa740d9a17f6187d051cd347e1e22f5630fde5d6a3cc971b20d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_3fd230a1352740bc64f860f7f0a537061bd05f8fd31a8a0449062b67610116f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd230a1352740bc64f860f7f0a537061bd05f8fd31a8a0449062b67610116f5->enter($__internal_3fd230a1352740bc64f860f7f0a537061bd05f8fd31a8a0449062b67610116f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 86
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 86, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 87
            echo "                ";
            $context["show_group"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 87, $this->getSourceContext()); })()), "showgroups", array()), $context["code"], array(), "array");
            // line 88
            echo "
                <div class=\"";
            // line 89
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((((array_key_exists("no_padding", $context)) ? (_twig_default_filter((isset($context["no_padding"]) || array_key_exists("no_padding", $context) ? $context["no_padding"] : (function () { throw new Twig_Error_Runtime('Variable "no_padding" does not exist.', 89, $this->getSourceContext()); })()), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 90, $this->getSourceContext()); })()), "box_class", array()), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 93
            $this->displayBlock('show_title', $context, $blocks);
            // line 96
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 101, $this->getSourceContext()); })()), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 102
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 109
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        ";
        
        $__internal_3fd230a1352740bc64f860f7f0a537061bd05f8fd31a8a0449062b67610116f5->leave($__internal_3fd230a1352740bc64f860f7f0a537061bd05f8fd31a8a0449062b67610116f5_prof);

        
        $__internal_3f8902429dfaa740d9a17f6187d051cd347e1e22f5630fde5d6a3cc971b20d14->leave($__internal_3f8902429dfaa740d9a17f6187d051cd347e1e22f5630fde5d6a3cc971b20d14_prof);

    }

    // line 93
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_b43b180bd7821e85ba8b3525dc4ffb44957bb420219d413d2484cd28ae22c98b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43b180bd7821e85ba8b3525dc4ffb44957bb420219d413d2484cd28ae22c98b->enter($__internal_b43b180bd7821e85ba8b3525dc4ffb44957bb420219d413d2484cd28ae22c98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_33dee559d153b2f0c24177b2b1e68c4a9c03cdb7101220ac1391b411da5b5b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33dee559d153b2f0c24177b2b1e68c4a9c03cdb7101220ac1391b411da5b5b60->enter($__internal_33dee559d153b2f0c24177b2b1e68c4a9c03cdb7101220ac1391b411da5b5b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 94
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 94, $this->getSourceContext()); })()), "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "translation_domain", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 94, $this->getSourceContext()); })()), "translationDomain", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 94, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
        
        $__internal_33dee559d153b2f0c24177b2b1e68c4a9c03cdb7101220ac1391b411da5b5b60->leave($__internal_33dee559d153b2f0c24177b2b1e68c4a9c03cdb7101220ac1391b411da5b5b60_prof);

        
        $__internal_b43b180bd7821e85ba8b3525dc4ffb44957bb420219d413d2484cd28ae22c98b->leave($__internal_b43b180bd7821e85ba8b3525dc4ffb44957bb420219d413d2484cd28ae22c98b_prof);

    }

    // line 102
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_f25e95e63b24e48ac34bb88e07701cfc4c6bd43c8268119269e8b9f67c35fa2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25e95e63b24e48ac34bb88e07701cfc4c6bd43c8268119269e8b9f67c35fa2c->enter($__internal_f25e95e63b24e48ac34bb88e07701cfc4c6bd43c8268119269e8b9f67c35fa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_c674f6225c0a18abd09aef80d94489111cc890ee89fd29eea929b9c5ec85f3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c674f6225c0a18abd09aef80d94489111cc890ee89fd29eea929b9c5ec85f3f8->enter($__internal_c674f6225c0a18abd09aef80d94489111cc890ee89fd29eea929b9c5ec85f3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 103
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 104
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["elements"] ?? null), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 104, $this->getSourceContext()); })()), array(), "array", true, true)) {
            // line 105
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 105, $this->getSourceContext()); })()), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 105, $this->getSourceContext()); })()), array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 105, $this->getSourceContext()); })()));
            echo "
                                            ";
        }
        // line 107
        echo "                                        </tr>
                                    ";
        
        $__internal_c674f6225c0a18abd09aef80d94489111cc890ee89fd29eea929b9c5ec85f3f8->leave($__internal_c674f6225c0a18abd09aef80d94489111cc890ee89fd29eea929b9c5ec85f3f8_prof);

        
        $__internal_f25e95e63b24e48ac34bb88e07701cfc4c6bd43c8268119269e8b9f67c35fa2c->leave($__internal_f25e95e63b24e48ac34bb88e07701cfc4c6bd43c8268119269e8b9f67c35fa2c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 107,  496 => 105,  494 => 104,  491 => 103,  482 => 102,  469 => 94,  460 => 93,  450 => 116,  431 => 110,  417 => 109,  414 => 102,  397 => 101,  390 => 96,  388 => 93,  382 => 90,  376 => 89,  373 => 88,  370 => 87,  352 => 86,  343 => 85,  331 => 117,  329 => 85,  326 => 84,  317 => 83,  305 => 80,  300 => 77,  294 => 75,  291 => 74,  289 => 73,  285 => 71,  265 => 66,  263 => 65,  260 => 64,  254 => 62,  252 => 61,  243 => 57,  237 => 56,  234 => 55,  217 => 54,  212 => 51,  194 => 47,  187 => 45,  180 => 44,  163 => 43,  159 => 41,  157 => 40,  154 => 39,  152 => 38,  147 => 36,  143 => 34,  134 => 33,  123 => 30,  121 => 29,  119 => 27,  110 => 26,  100 => 23,  91 => 22,  78 => 19,  69 => 18,  56 => 15,  47 => 14,  26 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block title %}
    {{ \"title_show\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include '@SonataAdmin/CRUD/action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': sonata_admin.adminPool.getTemplate('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}

        {% if has_tab %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in admin.showtabs %}
                        <li{% if loop.first %} class=\"active\"{% endif %}>
                            <a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                {{ show_tab.label|trans({}, show_tab.translation_domain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in admin.showtabs %}
                        <div
                                class=\"tab-pane fade{% if loop.first %} in active{% endif %}\"
                                id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif admin.showtabs is iterable %}
            {% set groups = admin.showtabs.default.groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {{ show_group.label|trans({}, show_group.translation_domain|default(admin.translationDomain)) }}
                                {% endblock %}
                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                {% for field_name in show_group.fields %}
                                    {% block show_field %}
                                        <tr class=\"sonata-ba-view-container\">
                                            {% if elements[field_name] is defined %}
                                                {{ elements[field_name]|render_view_element(object)}}
                                            {% endif %}
                                        </tr>
                                    {% endblock %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endblock %}

    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_show.html.twig");
    }
}
