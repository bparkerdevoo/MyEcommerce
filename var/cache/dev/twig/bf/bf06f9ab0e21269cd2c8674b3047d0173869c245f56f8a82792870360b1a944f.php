<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_9e5c922940414225dddca3e565a908626bda235b5271e7a23ca1a90e68a2f9ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0110772719eca1f119648c7e825df88ad78741beaeaed691e9e29d7f0aee88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0110772719eca1f119648c7e825df88ad78741beaeaed691e9e29d7f0aee88f->enter($__internal_e0110772719eca1f119648c7e825df88ad78741beaeaed691e9e29d7f0aee88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_ffb48027bb991f7391f850b39e2c38d019e340ce9be232d84d40bfa38d32f631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb48027bb991f7391f850b39e2c38d019e340ce9be232d84d40bfa38d32f631->enter($__internal_ffb48027bb991f7391f850b39e2c38d019e340ce9be232d84d40bfa38d32f631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_e0110772719eca1f119648c7e825df88ad78741beaeaed691e9e29d7f0aee88f->leave($__internal_e0110772719eca1f119648c7e825df88ad78741beaeaed691e9e29d7f0aee88f_prof);

        
        $__internal_ffb48027bb991f7391f850b39e2c38d019e340ce9be232d84d40bfa38d32f631->leave($__internal_ffb48027bb991f7391f850b39e2c38d019e340ce9be232d84d40bfa38d32f631_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ea62e6102b7f7923cd6d0765e9b04fb23bc28b6b0a03169ddabd4d5fe4f3ebbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea62e6102b7f7923cd6d0765e9b04fb23bc28b6b0a03169ddabd4d5fe4f3ebbb->enter($__internal_ea62e6102b7f7923cd6d0765e9b04fb23bc28b6b0a03169ddabd4d5fe4f3ebbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_4c931a4b384ee069b08a164ee525670dd6da791c705404ce481e20306d7deeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c931a4b384ee069b08a164ee525670dd6da791c705404ce481e20306d7deeb3->enter($__internal_4c931a4b384ee069b08a164ee525670dd6da791c705404ce481e20306d7deeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_4c931a4b384ee069b08a164ee525670dd6da791c705404ce481e20306d7deeb3->leave($__internal_4c931a4b384ee069b08a164ee525670dd6da791c705404ce481e20306d7deeb3_prof);

        
        $__internal_ea62e6102b7f7923cd6d0765e9b04fb23bc28b6b0a03169ddabd4d5fe4f3ebbb->leave($__internal_ea62e6102b7f7923cd6d0765e9b04fb23bc28b6b0a03169ddabd4d5fe4f3ebbb_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_57f0eeb5bcd522c19e6670ba2745e7fa9f90723fa2b5a12b36c2eb04bef971b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f0eeb5bcd522c19e6670ba2745e7fa9f90723fa2b5a12b36c2eb04bef971b7->enter($__internal_57f0eeb5bcd522c19e6670ba2745e7fa9f90723fa2b5a12b36c2eb04bef971b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f72e6380a8b766b4f563e8d5b3bd46da27c45d22a661bd32a62c83aa570a6218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72e6380a8b766b4f563e8d5b3bd46da27c45d22a661bd32a62c83aa570a6218->enter($__internal_f72e6380a8b766b4f563e8d5b3bd46da27c45d22a661bd32a62c83aa570a6218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_f72e6380a8b766b4f563e8d5b3bd46da27c45d22a661bd32a62c83aa570a6218->leave($__internal_f72e6380a8b766b4f563e8d5b3bd46da27c45d22a661bd32a62c83aa570a6218_prof);

        
        $__internal_57f0eeb5bcd522c19e6670ba2745e7fa9f90723fa2b5a12b36c2eb04bef971b7->leave($__internal_57f0eeb5bcd522c19e6670ba2745e7fa9f90723fa2b5a12b36c2eb04bef971b7_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_655fe08bf1dad90730ffc3a76033b3e39e4eaebf27fb414c69d70639e8091228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655fe08bf1dad90730ffc3a76033b3e39e4eaebf27fb414c69d70639e8091228->enter($__internal_655fe08bf1dad90730ffc3a76033b3e39e4eaebf27fb414c69d70639e8091228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_608093bf0cba4cd9c05e77ad086b0a2c83b793aa6dd15d26b574f55be3b118b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608093bf0cba4cd9c05e77ad086b0a2c83b793aa6dd15d26b574f55be3b118b7->enter($__internal_608093bf0cba4cd9c05e77ad086b0a2c83b793aa6dd15d26b574f55be3b118b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_608093bf0cba4cd9c05e77ad086b0a2c83b793aa6dd15d26b574f55be3b118b7->leave($__internal_608093bf0cba4cd9c05e77ad086b0a2c83b793aa6dd15d26b574f55be3b118b7_prof);

        
        $__internal_655fe08bf1dad90730ffc3a76033b3e39e4eaebf27fb414c69d70639e8091228->leave($__internal_655fe08bf1dad90730ffc3a76033b3e39e4eaebf27fb414c69d70639e8091228_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_64df9b813c7bbb9a88a9f0bf52143e9783991c90c11a0048c32228010618a08c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64df9b813c7bbb9a88a9f0bf52143e9783991c90c11a0048c32228010618a08c->enter($__internal_64df9b813c7bbb9a88a9f0bf52143e9783991c90c11a0048c32228010618a08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3795dfdc3643b2c036039b89b046966a3b8f7d54734211f15ae999192beb43e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3795dfdc3643b2c036039b89b046966a3b8f7d54734211f15ae999192beb43e5->enter($__internal_3795dfdc3643b2c036039b89b046966a3b8f7d54734211f15ae999192beb43e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_3795dfdc3643b2c036039b89b046966a3b8f7d54734211f15ae999192beb43e5->leave($__internal_3795dfdc3643b2c036039b89b046966a3b8f7d54734211f15ae999192beb43e5_prof);

        
        $__internal_64df9b813c7bbb9a88a9f0bf52143e9783991c90c11a0048c32228010618a08c->leave($__internal_64df9b813c7bbb9a88a9f0bf52143e9783991c90c11a0048c32228010618a08c_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_625d5103732cd4bd6cd156a2533fa94e6ba58c21f5c986fac5c4193b84480257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625d5103732cd4bd6cd156a2533fa94e6ba58c21f5c986fac5c4193b84480257->enter($__internal_625d5103732cd4bd6cd156a2533fa94e6ba58c21f5c986fac5c4193b84480257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_38f01f7a622fb6eaf870559fe2e07dd27e8537ff4445c00374961c79e73c6eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f01f7a622fb6eaf870559fe2e07dd27e8537ff4445c00374961c79e73c6eef->enter($__internal_38f01f7a622fb6eaf870559fe2e07dd27e8537ff4445c00374961c79e73c6eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_38f01f7a622fb6eaf870559fe2e07dd27e8537ff4445c00374961c79e73c6eef->leave($__internal_38f01f7a622fb6eaf870559fe2e07dd27e8537ff4445c00374961c79e73c6eef_prof);

        
        $__internal_625d5103732cd4bd6cd156a2533fa94e6ba58c21f5c986fac5c4193b84480257->leave($__internal_625d5103732cd4bd6cd156a2533fa94e6ba58c21f5c986fac5c4193b84480257_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_13989aaf1f2ab5803605a1f0cd5485a649d8f2a78ba995fb42f7142cd6db6090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13989aaf1f2ab5803605a1f0cd5485a649d8f2a78ba995fb42f7142cd6db6090->enter($__internal_13989aaf1f2ab5803605a1f0cd5485a649d8f2a78ba995fb42f7142cd6db6090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_9921bca374801286568d532e2b68706e59d40b7b3aa11ab5500b9d2030d0812f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9921bca374801286568d532e2b68706e59d40b7b3aa11ab5500b9d2030d0812f->enter($__internal_9921bca374801286568d532e2b68706e59d40b7b3aa11ab5500b9d2030d0812f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_9921bca374801286568d532e2b68706e59d40b7b3aa11ab5500b9d2030d0812f->leave($__internal_9921bca374801286568d532e2b68706e59d40b7b3aa11ab5500b9d2030d0812f_prof);

        
        $__internal_13989aaf1f2ab5803605a1f0cd5485a649d8f2a78ba995fb42f7142cd6db6090->leave($__internal_13989aaf1f2ab5803605a1f0cd5485a649d8f2a78ba995fb42f7142cd6db6090_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_aa430c1e1be3a174bbc6c3940f16f5887fe825f6f67533b18723848e8f67d990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa430c1e1be3a174bbc6c3940f16f5887fe825f6f67533b18723848e8f67d990->enter($__internal_aa430c1e1be3a174bbc6c3940f16f5887fe825f6f67533b18723848e8f67d990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_f29d6703be020c4f92bdf169189221e106286e1908419811c802c0560a4cd542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29d6703be020c4f92bdf169189221e106286e1908419811c802c0560a4cd542->enter($__internal_f29d6703be020c4f92bdf169189221e106286e1908419811c802c0560a4cd542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_f29d6703be020c4f92bdf169189221e106286e1908419811c802c0560a4cd542->leave($__internal_f29d6703be020c4f92bdf169189221e106286e1908419811c802c0560a4cd542_prof);

        
        $__internal_aa430c1e1be3a174bbc6c3940f16f5887fe825f6f67533b18723848e8f67d990->leave($__internal_aa430c1e1be3a174bbc6c3940f16f5887fe825f6f67533b18723848e8f67d990_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_bc997fb1dcf0cec90f3fb3d077f7b6690c38a48b95386c22c8d13bd4bcc73ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc997fb1dcf0cec90f3fb3d077f7b6690c38a48b95386c22c8d13bd4bcc73ab6->enter($__internal_bc997fb1dcf0cec90f3fb3d077f7b6690c38a48b95386c22c8d13bd4bcc73ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6035190881376333fe42daf31730c643c42c8a5afb742808506456fbc3cf35bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6035190881376333fe42daf31730c643c42c8a5afb742808506456fbc3cf35bb->enter($__internal_6035190881376333fe42daf31730c643c42c8a5afb742808506456fbc3cf35bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_6035190881376333fe42daf31730c643c42c8a5afb742808506456fbc3cf35bb->leave($__internal_6035190881376333fe42daf31730c643c42c8a5afb742808506456fbc3cf35bb_prof);

        
        $__internal_bc997fb1dcf0cec90f3fb3d077f7b6690c38a48b95386c22c8d13bd4bcc73ab6->leave($__internal_bc997fb1dcf0cec90f3fb3d077f7b6690c38a48b95386c22c8d13bd4bcc73ab6_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
