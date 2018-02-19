<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_7be84de09619c871088347ab173e024fb8ea2b5211eb3a70411de1a4876be161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a71bab60d101c1ce8e0ce3caa522be3377038229fddd30b7b6c58c87682791c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a71bab60d101c1ce8e0ce3caa522be3377038229fddd30b7b6c58c87682791c->enter($__internal_8a71bab60d101c1ce8e0ce3caa522be3377038229fddd30b7b6c58c87682791c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_3195e7c519e7cdf12f7a44e850ac1837366cbfc1680d1536a295c1d42da6f12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3195e7c519e7cdf12f7a44e850ac1837366cbfc1680d1536a295c1d42da6f12e->enter($__internal_3195e7c519e7cdf12f7a44e850ac1837366cbfc1680d1536a295c1d42da6f12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_8a71bab60d101c1ce8e0ce3caa522be3377038229fddd30b7b6c58c87682791c->leave($__internal_8a71bab60d101c1ce8e0ce3caa522be3377038229fddd30b7b6c58c87682791c_prof);

        
        $__internal_3195e7c519e7cdf12f7a44e850ac1837366cbfc1680d1536a295c1d42da6f12e->leave($__internal_3195e7c519e7cdf12f7a44e850ac1837366cbfc1680d1536a295c1d42da6f12e_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e77ba19bbb0a06d25865b4270c78922a9e103613f495741bbc8deb7228fe00a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77ba19bbb0a06d25865b4270c78922a9e103613f495741bbc8deb7228fe00a6->enter($__internal_e77ba19bbb0a06d25865b4270c78922a9e103613f495741bbc8deb7228fe00a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7d26aef4cd078cbb077489b15f89630906179df84a9581312a9030fbe285d8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d26aef4cd078cbb077489b15f89630906179df84a9581312a9030fbe285d8be->enter($__internal_7d26aef4cd078cbb077489b15f89630906179df84a9581312a9030fbe285d8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_7d26aef4cd078cbb077489b15f89630906179df84a9581312a9030fbe285d8be->leave($__internal_7d26aef4cd078cbb077489b15f89630906179df84a9581312a9030fbe285d8be_prof);

        
        $__internal_e77ba19bbb0a06d25865b4270c78922a9e103613f495741bbc8deb7228fe00a6->leave($__internal_e77ba19bbb0a06d25865b4270c78922a9e103613f495741bbc8deb7228fe00a6_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_bdd5980c453fc00464a1a1aa38ac81e15adb7a84e2a711fa86f199150e866d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd5980c453fc00464a1a1aa38ac81e15adb7a84e2a711fa86f199150e866d1e->enter($__internal_bdd5980c453fc00464a1a1aa38ac81e15adb7a84e2a711fa86f199150e866d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_53f7feffa6fde858a31b34ebf3f6c58a14c947b84935526d9e31ba254b290231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f7feffa6fde858a31b34ebf3f6c58a14c947b84935526d9e31ba254b290231->enter($__internal_53f7feffa6fde858a31b34ebf3f6c58a14c947b84935526d9e31ba254b290231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_53f7feffa6fde858a31b34ebf3f6c58a14c947b84935526d9e31ba254b290231->leave($__internal_53f7feffa6fde858a31b34ebf3f6c58a14c947b84935526d9e31ba254b290231_prof);

        
        $__internal_bdd5980c453fc00464a1a1aa38ac81e15adb7a84e2a711fa86f199150e866d1e->leave($__internal_bdd5980c453fc00464a1a1aa38ac81e15adb7a84e2a711fa86f199150e866d1e_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_07ca3f821249d82f7dfd575f84d8a85cdac28b819fdf9afab41fab30d803600d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07ca3f821249d82f7dfd575f84d8a85cdac28b819fdf9afab41fab30d803600d->enter($__internal_07ca3f821249d82f7dfd575f84d8a85cdac28b819fdf9afab41fab30d803600d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_54b78564b49746e9e8b17d64af5ccf143fcca95c7e2025ebfd869b26a56d220b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b78564b49746e9e8b17d64af5ccf143fcca95c7e2025ebfd869b26a56d220b->enter($__internal_54b78564b49746e9e8b17d64af5ccf143fcca95c7e2025ebfd869b26a56d220b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_54b78564b49746e9e8b17d64af5ccf143fcca95c7e2025ebfd869b26a56d220b->leave($__internal_54b78564b49746e9e8b17d64af5ccf143fcca95c7e2025ebfd869b26a56d220b_prof);

        
        $__internal_07ca3f821249d82f7dfd575f84d8a85cdac28b819fdf9afab41fab30d803600d->leave($__internal_07ca3f821249d82f7dfd575f84d8a85cdac28b819fdf9afab41fab30d803600d_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_114cd5fd3cf5c31d6708d2c7eac2ace820011828874a13d3750da5d89ffa22ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_114cd5fd3cf5c31d6708d2c7eac2ace820011828874a13d3750da5d89ffa22ff->enter($__internal_114cd5fd3cf5c31d6708d2c7eac2ace820011828874a13d3750da5d89ffa22ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_595c4f762ee7e805a24c404b34e14cd7a4704867f2161938605f16045e3fba99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595c4f762ee7e805a24c404b34e14cd7a4704867f2161938605f16045e3fba99->enter($__internal_595c4f762ee7e805a24c404b34e14cd7a4704867f2161938605f16045e3fba99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_595c4f762ee7e805a24c404b34e14cd7a4704867f2161938605f16045e3fba99->leave($__internal_595c4f762ee7e805a24c404b34e14cd7a4704867f2161938605f16045e3fba99_prof);

        
        $__internal_114cd5fd3cf5c31d6708d2c7eac2ace820011828874a13d3750da5d89ffa22ff->leave($__internal_114cd5fd3cf5c31d6708d2c7eac2ace820011828874a13d3750da5d89ffa22ff_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_d4f0121cdb844dab5afc611ebbe64c2b60a84896219ce4a1606caf266e3931af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f0121cdb844dab5afc611ebbe64c2b60a84896219ce4a1606caf266e3931af->enter($__internal_d4f0121cdb844dab5afc611ebbe64c2b60a84896219ce4a1606caf266e3931af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_4ac34744fe7e3cfeac8f57d940743986e5677fc6b0f636faa9c4cdcfd34517df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac34744fe7e3cfeac8f57d940743986e5677fc6b0f636faa9c4cdcfd34517df->enter($__internal_4ac34744fe7e3cfeac8f57d940743986e5677fc6b0f636faa9c4cdcfd34517df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_4ac34744fe7e3cfeac8f57d940743986e5677fc6b0f636faa9c4cdcfd34517df->leave($__internal_4ac34744fe7e3cfeac8f57d940743986e5677fc6b0f636faa9c4cdcfd34517df_prof);

        
        $__internal_d4f0121cdb844dab5afc611ebbe64c2b60a84896219ce4a1606caf266e3931af->leave($__internal_d4f0121cdb844dab5afc611ebbe64c2b60a84896219ce4a1606caf266e3931af_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_fac13cdae6bae1dd0146423fc165a72654d977776cdcfc61159ec28534b1a1a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac13cdae6bae1dd0146423fc165a72654d977776cdcfc61159ec28534b1a1a0->enter($__internal_fac13cdae6bae1dd0146423fc165a72654d977776cdcfc61159ec28534b1a1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_7be412bce8c519972ee79597b0c5aeef2cd345e4ee438f7fb207790240eeec9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be412bce8c519972ee79597b0c5aeef2cd345e4ee438f7fb207790240eeec9c->enter($__internal_7be412bce8c519972ee79597b0c5aeef2cd345e4ee438f7fb207790240eeec9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_7be412bce8c519972ee79597b0c5aeef2cd345e4ee438f7fb207790240eeec9c->leave($__internal_7be412bce8c519972ee79597b0c5aeef2cd345e4ee438f7fb207790240eeec9c_prof);

        
        $__internal_fac13cdae6bae1dd0146423fc165a72654d977776cdcfc61159ec28534b1a1a0->leave($__internal_fac13cdae6bae1dd0146423fc165a72654d977776cdcfc61159ec28534b1a1a0_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_632a7592e9a8308e0bd9d774f917d4e291a07eba7c46c55c6ba615d66fb829b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632a7592e9a8308e0bd9d774f917d4e291a07eba7c46c55c6ba615d66fb829b4->enter($__internal_632a7592e9a8308e0bd9d774f917d4e291a07eba7c46c55c6ba615d66fb829b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_cacd8b968288ea698967f9a421d1e2e3e60f958bc390b74d8fbfdea8e1eb5032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cacd8b968288ea698967f9a421d1e2e3e60f958bc390b74d8fbfdea8e1eb5032->enter($__internal_cacd8b968288ea698967f9a421d1e2e3e60f958bc390b74d8fbfdea8e1eb5032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_cacd8b968288ea698967f9a421d1e2e3e60f958bc390b74d8fbfdea8e1eb5032->leave($__internal_cacd8b968288ea698967f9a421d1e2e3e60f958bc390b74d8fbfdea8e1eb5032_prof);

        
        $__internal_632a7592e9a8308e0bd9d774f917d4e291a07eba7c46c55c6ba615d66fb829b4->leave($__internal_632a7592e9a8308e0bd9d774f917d4e291a07eba7c46c55c6ba615d66fb829b4_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_60c196bb266c47188b63de2480e3cf0c0716aa486861781d908c3ed1da574eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c196bb266c47188b63de2480e3cf0c0716aa486861781d908c3ed1da574eca->enter($__internal_60c196bb266c47188b63de2480e3cf0c0716aa486861781d908c3ed1da574eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_de4a33cd70cf1c39f506f826c629d1fe8a1371706d9e61273c88f51fc290be9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4a33cd70cf1c39f506f826c629d1fe8a1371706d9e61273c88f51fc290be9e->enter($__internal_de4a33cd70cf1c39f506f826c629d1fe8a1371706d9e61273c88f51fc290be9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_de4a33cd70cf1c39f506f826c629d1fe8a1371706d9e61273c88f51fc290be9e->leave($__internal_de4a33cd70cf1c39f506f826c629d1fe8a1371706d9e61273c88f51fc290be9e_prof);

        
        $__internal_60c196bb266c47188b63de2480e3cf0c0716aa486861781d908c3ed1da574eca->leave($__internal_60c196bb266c47188b63de2480e3cf0c0716aa486861781d908c3ed1da574eca_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
