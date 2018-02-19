<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_4d54c9d6dca08553eafce6ec565e6db432d73af9d2230bc46bd92aa91cc05f6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58aa0a3864677ffb96de9a29c70c9a4760cf269d6f1c87bb981e5580dd90bc85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58aa0a3864677ffb96de9a29c70c9a4760cf269d6f1c87bb981e5580dd90bc85->enter($__internal_58aa0a3864677ffb96de9a29c70c9a4760cf269d6f1c87bb981e5580dd90bc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_57ea01e6d4d1b2a34ff23f11be2bcada3889c66c7ae2e0664ee8437ff8e43345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ea01e6d4d1b2a34ff23f11be2bcada3889c66c7ae2e0664ee8437ff8e43345->enter($__internal_57ea01e6d4d1b2a34ff23f11be2bcada3889c66c7ae2e0664ee8437ff8e43345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_58aa0a3864677ffb96de9a29c70c9a4760cf269d6f1c87bb981e5580dd90bc85->leave($__internal_58aa0a3864677ffb96de9a29c70c9a4760cf269d6f1c87bb981e5580dd90bc85_prof);

        
        $__internal_57ea01e6d4d1b2a34ff23f11be2bcada3889c66c7ae2e0664ee8437ff8e43345->leave($__internal_57ea01e6d4d1b2a34ff23f11be2bcada3889c66c7ae2e0664ee8437ff8e43345_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8aaaa422635efea97a2aef86fabc070e26aa3a89a2240ba7471210e16706a108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aaaa422635efea97a2aef86fabc070e26aa3a89a2240ba7471210e16706a108->enter($__internal_8aaaa422635efea97a2aef86fabc070e26aa3a89a2240ba7471210e16706a108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1aa1a8f9302d36ad4001df69014de9334c3a1768e0120d2cd5a525fe7763a0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa1a8f9302d36ad4001df69014de9334c3a1768e0120d2cd5a525fe7763a0d6->enter($__internal_1aa1a8f9302d36ad4001df69014de9334c3a1768e0120d2cd5a525fe7763a0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1aa1a8f9302d36ad4001df69014de9334c3a1768e0120d2cd5a525fe7763a0d6->leave($__internal_1aa1a8f9302d36ad4001df69014de9334c3a1768e0120d2cd5a525fe7763a0d6_prof);

        
        $__internal_8aaaa422635efea97a2aef86fabc070e26aa3a89a2240ba7471210e16706a108->leave($__internal_8aaaa422635efea97a2aef86fabc070e26aa3a89a2240ba7471210e16706a108_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8711302e8b0c6e63b7d284f6a273ac55eb30891e29fd0afdf228c34bb078b1b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8711302e8b0c6e63b7d284f6a273ac55eb30891e29fd0afdf228c34bb078b1b0->enter($__internal_8711302e8b0c6e63b7d284f6a273ac55eb30891e29fd0afdf228c34bb078b1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_caddb5c6a496ce7169f392364a63bc2322252c65a7718c3d7f81dd9d9f85392c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caddb5c6a496ce7169f392364a63bc2322252c65a7718c3d7f81dd9d9f85392c->enter($__internal_caddb5c6a496ce7169f392364a63bc2322252c65a7718c3d7f81dd9d9f85392c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_caddb5c6a496ce7169f392364a63bc2322252c65a7718c3d7f81dd9d9f85392c->leave($__internal_caddb5c6a496ce7169f392364a63bc2322252c65a7718c3d7f81dd9d9f85392c_prof);

        
        $__internal_8711302e8b0c6e63b7d284f6a273ac55eb30891e29fd0afdf228c34bb078b1b0->leave($__internal_8711302e8b0c6e63b7d284f6a273ac55eb30891e29fd0afdf228c34bb078b1b0_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_9e59343f787398093721079fd425fcb5e0cd5cc78ccb1ebaa9cd6fb39d63a7c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e59343f787398093721079fd425fcb5e0cd5cc78ccb1ebaa9cd6fb39d63a7c2->enter($__internal_9e59343f787398093721079fd425fcb5e0cd5cc78ccb1ebaa9cd6fb39d63a7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_da93965385f366fc71e17d1a94f275e5113cae8dab823e39d286a5570d3be84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da93965385f366fc71e17d1a94f275e5113cae8dab823e39d286a5570d3be84b->enter($__internal_da93965385f366fc71e17d1a94f275e5113cae8dab823e39d286a5570d3be84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_da93965385f366fc71e17d1a94f275e5113cae8dab823e39d286a5570d3be84b->leave($__internal_da93965385f366fc71e17d1a94f275e5113cae8dab823e39d286a5570d3be84b_prof);

        
        $__internal_9e59343f787398093721079fd425fcb5e0cd5cc78ccb1ebaa9cd6fb39d63a7c2->leave($__internal_9e59343f787398093721079fd425fcb5e0cd5cc78ccb1ebaa9cd6fb39d63a7c2_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c942035eff2b76bbc054233d524622ebe435770cec4c6ad0bbb38f6c48cb4dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c942035eff2b76bbc054233d524622ebe435770cec4c6ad0bbb38f6c48cb4dc2->enter($__internal_c942035eff2b76bbc054233d524622ebe435770cec4c6ad0bbb38f6c48cb4dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_170d6861a46bbce06852d6fc5bf8869583701ddf66d5296319ff4df2613a23cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170d6861a46bbce06852d6fc5bf8869583701ddf66d5296319ff4df2613a23cf->enter($__internal_170d6861a46bbce06852d6fc5bf8869583701ddf66d5296319ff4df2613a23cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_170d6861a46bbce06852d6fc5bf8869583701ddf66d5296319ff4df2613a23cf->leave($__internal_170d6861a46bbce06852d6fc5bf8869583701ddf66d5296319ff4df2613a23cf_prof);

        
        $__internal_c942035eff2b76bbc054233d524622ebe435770cec4c6ad0bbb38f6c48cb4dc2->leave($__internal_c942035eff2b76bbc054233d524622ebe435770cec4c6ad0bbb38f6c48cb4dc2_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_73852b177f737e1e9439fe6f85dbb6639f9f84fa75c89ff1486a6dbb3cf4fc25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73852b177f737e1e9439fe6f85dbb6639f9f84fa75c89ff1486a6dbb3cf4fc25->enter($__internal_73852b177f737e1e9439fe6f85dbb6639f9f84fa75c89ff1486a6dbb3cf4fc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b612883f2e4d6ad74b45d44ad2bef0d308e0727f741b85f55e1e182bfe90cc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b612883f2e4d6ad74b45d44ad2bef0d308e0727f741b85f55e1e182bfe90cc6f->enter($__internal_b612883f2e4d6ad74b45d44ad2bef0d308e0727f741b85f55e1e182bfe90cc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_b612883f2e4d6ad74b45d44ad2bef0d308e0727f741b85f55e1e182bfe90cc6f->leave($__internal_b612883f2e4d6ad74b45d44ad2bef0d308e0727f741b85f55e1e182bfe90cc6f_prof);

        
        $__internal_73852b177f737e1e9439fe6f85dbb6639f9f84fa75c89ff1486a6dbb3cf4fc25->leave($__internal_73852b177f737e1e9439fe6f85dbb6639f9f84fa75c89ff1486a6dbb3cf4fc25_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_0e417a4d77e6d0c63bcf2057d5edeb3f99754c99c074f6ccdaee8446f13330bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e417a4d77e6d0c63bcf2057d5edeb3f99754c99c074f6ccdaee8446f13330bb->enter($__internal_0e417a4d77e6d0c63bcf2057d5edeb3f99754c99c074f6ccdaee8446f13330bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_74bd271599257ad935e5de6e9ce8680dfd064795ceea89b798467d7a24ec8499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bd271599257ad935e5de6e9ce8680dfd064795ceea89b798467d7a24ec8499->enter($__internal_74bd271599257ad935e5de6e9ce8680dfd064795ceea89b798467d7a24ec8499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_74bd271599257ad935e5de6e9ce8680dfd064795ceea89b798467d7a24ec8499->leave($__internal_74bd271599257ad935e5de6e9ce8680dfd064795ceea89b798467d7a24ec8499_prof);

        
        $__internal_0e417a4d77e6d0c63bcf2057d5edeb3f99754c99c074f6ccdaee8446f13330bb->leave($__internal_0e417a4d77e6d0c63bcf2057d5edeb3f99754c99c074f6ccdaee8446f13330bb_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_7bccb0d54e53d7ad03e15d875c4180131174745d234719e0fa2cc2a4128f86a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bccb0d54e53d7ad03e15d875c4180131174745d234719e0fa2cc2a4128f86a1->enter($__internal_7bccb0d54e53d7ad03e15d875c4180131174745d234719e0fa2cc2a4128f86a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c9cedaf936cf193bf10c8dc3cf391f9cae23a0de06983c8c6a02b28f7f6e91e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9cedaf936cf193bf10c8dc3cf391f9cae23a0de06983c8c6a02b28f7f6e91e8->enter($__internal_c9cedaf936cf193bf10c8dc3cf391f9cae23a0de06983c8c6a02b28f7f6e91e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c9cedaf936cf193bf10c8dc3cf391f9cae23a0de06983c8c6a02b28f7f6e91e8->leave($__internal_c9cedaf936cf193bf10c8dc3cf391f9cae23a0de06983c8c6a02b28f7f6e91e8_prof);

        
        $__internal_7bccb0d54e53d7ad03e15d875c4180131174745d234719e0fa2cc2a4128f86a1->leave($__internal_7bccb0d54e53d7ad03e15d875c4180131174745d234719e0fa2cc2a4128f86a1_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a2fd03137f32e7c11b85df7d75c17f484b765dbc0417a1a80fcc5559501ac99e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fd03137f32e7c11b85df7d75c17f484b765dbc0417a1a80fcc5559501ac99e->enter($__internal_a2fd03137f32e7c11b85df7d75c17f484b765dbc0417a1a80fcc5559501ac99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_c4b84c5d43b8d41c64ea72553eca2904bf0580c48edf45c37ba723ab088630cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b84c5d43b8d41c64ea72553eca2904bf0580c48edf45c37ba723ab088630cf->enter($__internal_c4b84c5d43b8d41c64ea72553eca2904bf0580c48edf45c37ba723ab088630cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c4b84c5d43b8d41c64ea72553eca2904bf0580c48edf45c37ba723ab088630cf->leave($__internal_c4b84c5d43b8d41c64ea72553eca2904bf0580c48edf45c37ba723ab088630cf_prof);

        
        $__internal_a2fd03137f32e7c11b85df7d75c17f484b765dbc0417a1a80fcc5559501ac99e->leave($__internal_a2fd03137f32e7c11b85df7d75c17f484b765dbc0417a1a80fcc5559501ac99e_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_0c9623c5ed0ea33e305c38dd5008baaf6206022e54693408e37e71be2bc37a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c9623c5ed0ea33e305c38dd5008baaf6206022e54693408e37e71be2bc37a85->enter($__internal_0c9623c5ed0ea33e305c38dd5008baaf6206022e54693408e37e71be2bc37a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_d480d41f61ab6f60221bc9e29f0cd2f15440223546a4a088602970224df30c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d480d41f61ab6f60221bc9e29f0cd2f15440223546a4a088602970224df30c84->enter($__internal_d480d41f61ab6f60221bc9e29f0cd2f15440223546a4a088602970224df30c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_d480d41f61ab6f60221bc9e29f0cd2f15440223546a4a088602970224df30c84->leave($__internal_d480d41f61ab6f60221bc9e29f0cd2f15440223546a4a088602970224df30c84_prof);

        
        $__internal_0c9623c5ed0ea33e305c38dd5008baaf6206022e54693408e37e71be2bc37a85->leave($__internal_0c9623c5ed0ea33e305c38dd5008baaf6206022e54693408e37e71be2bc37a85_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a0e181db7802f09ad048a4453584649ac186f2a4f2dfce88c580333b32acb14c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e181db7802f09ad048a4453584649ac186f2a4f2dfce88c580333b32acb14c->enter($__internal_a0e181db7802f09ad048a4453584649ac186f2a4f2dfce88c580333b32acb14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_011e1099d654d7f2edff1f6d22563349ada61269440c65a7dea9df525867699e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011e1099d654d7f2edff1f6d22563349ada61269440c65a7dea9df525867699e->enter($__internal_011e1099d654d7f2edff1f6d22563349ada61269440c65a7dea9df525867699e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_011e1099d654d7f2edff1f6d22563349ada61269440c65a7dea9df525867699e->leave($__internal_011e1099d654d7f2edff1f6d22563349ada61269440c65a7dea9df525867699e_prof);

        
        $__internal_a0e181db7802f09ad048a4453584649ac186f2a4f2dfce88c580333b32acb14c->leave($__internal_a0e181db7802f09ad048a4453584649ac186f2a4f2dfce88c580333b32acb14c_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_17b32c2a8c7d79ac1ac5c9ebadd9b9287d805bbe10df1614b1efd27a1575d6e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b32c2a8c7d79ac1ac5c9ebadd9b9287d805bbe10df1614b1efd27a1575d6e8->enter($__internal_17b32c2a8c7d79ac1ac5c9ebadd9b9287d805bbe10df1614b1efd27a1575d6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_aeee55bdb0917a01823106d375744b68ff563747e1539a10304401095856812c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeee55bdb0917a01823106d375744b68ff563747e1539a10304401095856812c->enter($__internal_aeee55bdb0917a01823106d375744b68ff563747e1539a10304401095856812c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_aeee55bdb0917a01823106d375744b68ff563747e1539a10304401095856812c->leave($__internal_aeee55bdb0917a01823106d375744b68ff563747e1539a10304401095856812c_prof);

        
        $__internal_17b32c2a8c7d79ac1ac5c9ebadd9b9287d805bbe10df1614b1efd27a1575d6e8->leave($__internal_17b32c2a8c7d79ac1ac5c9ebadd9b9287d805bbe10df1614b1efd27a1575d6e8_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_9e841836ef5b68b72b36e6d4805d57fde9c7625673c4847b9af046c4d40e70e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e841836ef5b68b72b36e6d4805d57fde9c7625673c4847b9af046c4d40e70e2->enter($__internal_9e841836ef5b68b72b36e6d4805d57fde9c7625673c4847b9af046c4d40e70e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_206a7ac191a19deec3a85907e5fe955c018bed81c1755117218e5d3dc1e32679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206a7ac191a19deec3a85907e5fe955c018bed81c1755117218e5d3dc1e32679->enter($__internal_206a7ac191a19deec3a85907e5fe955c018bed81c1755117218e5d3dc1e32679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_206a7ac191a19deec3a85907e5fe955c018bed81c1755117218e5d3dc1e32679->leave($__internal_206a7ac191a19deec3a85907e5fe955c018bed81c1755117218e5d3dc1e32679_prof);

        
        $__internal_9e841836ef5b68b72b36e6d4805d57fde9c7625673c4847b9af046c4d40e70e2->leave($__internal_9e841836ef5b68b72b36e6d4805d57fde9c7625673c4847b9af046c4d40e70e2_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_0bb0b848b1090878605b2c81247cff78063789a553b4bcbad226fb2fdcbed6ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb0b848b1090878605b2c81247cff78063789a553b4bcbad226fb2fdcbed6ca->enter($__internal_0bb0b848b1090878605b2c81247cff78063789a553b4bcbad226fb2fdcbed6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9105d4be1e484c25f37f4c303001e0324b1be0eb3e0faa4d343c163805fd9b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9105d4be1e484c25f37f4c303001e0324b1be0eb3e0faa4d343c163805fd9b26->enter($__internal_9105d4be1e484c25f37f4c303001e0324b1be0eb3e0faa4d343c163805fd9b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9105d4be1e484c25f37f4c303001e0324b1be0eb3e0faa4d343c163805fd9b26->leave($__internal_9105d4be1e484c25f37f4c303001e0324b1be0eb3e0faa4d343c163805fd9b26_prof);

        
        $__internal_0bb0b848b1090878605b2c81247cff78063789a553b4bcbad226fb2fdcbed6ca->leave($__internal_0bb0b848b1090878605b2c81247cff78063789a553b4bcbad226fb2fdcbed6ca_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_37635f736666c70f0a24f0ddb8c309d8228717fe07f10c13bc65d56f856353fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37635f736666c70f0a24f0ddb8c309d8228717fe07f10c13bc65d56f856353fe->enter($__internal_37635f736666c70f0a24f0ddb8c309d8228717fe07f10c13bc65d56f856353fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_87515e77132208e764634f1719d909eb83c61934acbec00cdf6b9367aafb361b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87515e77132208e764634f1719d909eb83c61934acbec00cdf6b9367aafb361b->enter($__internal_87515e77132208e764634f1719d909eb83c61934acbec00cdf6b9367aafb361b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_87515e77132208e764634f1719d909eb83c61934acbec00cdf6b9367aafb361b->leave($__internal_87515e77132208e764634f1719d909eb83c61934acbec00cdf6b9367aafb361b_prof);

        
        $__internal_37635f736666c70f0a24f0ddb8c309d8228717fe07f10c13bc65d56f856353fe->leave($__internal_37635f736666c70f0a24f0ddb8c309d8228717fe07f10c13bc65d56f856353fe_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2692b2645351067130f41981442c1f4454c974e59ed2880f74839a91811a08c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2692b2645351067130f41981442c1f4454c974e59ed2880f74839a91811a08c9->enter($__internal_2692b2645351067130f41981442c1f4454c974e59ed2880f74839a91811a08c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c2030f156b97ad97e8ae0823c3e25835958ad15a02fe326d97c10c5e39405d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2030f156b97ad97e8ae0823c3e25835958ad15a02fe326d97c10c5e39405d5f->enter($__internal_c2030f156b97ad97e8ae0823c3e25835958ad15a02fe326d97c10c5e39405d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c2030f156b97ad97e8ae0823c3e25835958ad15a02fe326d97c10c5e39405d5f->leave($__internal_c2030f156b97ad97e8ae0823c3e25835958ad15a02fe326d97c10c5e39405d5f_prof);

        
        $__internal_2692b2645351067130f41981442c1f4454c974e59ed2880f74839a91811a08c9->leave($__internal_2692b2645351067130f41981442c1f4454c974e59ed2880f74839a91811a08c9_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_bcd1651673bbaefa9037ddf48b55f8954b269b9dbdb611b5e43f73dd0842e683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd1651673bbaefa9037ddf48b55f8954b269b9dbdb611b5e43f73dd0842e683->enter($__internal_bcd1651673bbaefa9037ddf48b55f8954b269b9dbdb611b5e43f73dd0842e683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_16c0d36981446370b5cc1519b89b9966149eba2c12b2c7557e8eedec397a5137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c0d36981446370b5cc1519b89b9966149eba2c12b2c7557e8eedec397a5137->enter($__internal_16c0d36981446370b5cc1519b89b9966149eba2c12b2c7557e8eedec397a5137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_16c0d36981446370b5cc1519b89b9966149eba2c12b2c7557e8eedec397a5137->leave($__internal_16c0d36981446370b5cc1519b89b9966149eba2c12b2c7557e8eedec397a5137_prof);

        
        $__internal_bcd1651673bbaefa9037ddf48b55f8954b269b9dbdb611b5e43f73dd0842e683->leave($__internal_bcd1651673bbaefa9037ddf48b55f8954b269b9dbdb611b5e43f73dd0842e683_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5a77fd8e7ab07d1b90471044bd615b42339cc62a40e0cf8214c950fa3bdcb527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a77fd8e7ab07d1b90471044bd615b42339cc62a40e0cf8214c950fa3bdcb527->enter($__internal_5a77fd8e7ab07d1b90471044bd615b42339cc62a40e0cf8214c950fa3bdcb527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_84ea446618742481f309559b679491f1b615fb427b984867eda0af97ec91d614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ea446618742481f309559b679491f1b615fb427b984867eda0af97ec91d614->enter($__internal_84ea446618742481f309559b679491f1b615fb427b984867eda0af97ec91d614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_84ea446618742481f309559b679491f1b615fb427b984867eda0af97ec91d614->leave($__internal_84ea446618742481f309559b679491f1b615fb427b984867eda0af97ec91d614_prof);

        
        $__internal_5a77fd8e7ab07d1b90471044bd615b42339cc62a40e0cf8214c950fa3bdcb527->leave($__internal_5a77fd8e7ab07d1b90471044bd615b42339cc62a40e0cf8214c950fa3bdcb527_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0fba60d0139878854abf372e6af50ceb9fe391581ebc71e3d7b0c6649cbcb2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fba60d0139878854abf372e6af50ceb9fe391581ebc71e3d7b0c6649cbcb2a4->enter($__internal_0fba60d0139878854abf372e6af50ceb9fe391581ebc71e3d7b0c6649cbcb2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_fdcb2c1f43501a02b26a0ca138af03d5f856906323c9033f41af7533f8b4564f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdcb2c1f43501a02b26a0ca138af03d5f856906323c9033f41af7533f8b4564f->enter($__internal_fdcb2c1f43501a02b26a0ca138af03d5f856906323c9033f41af7533f8b4564f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_fdcb2c1f43501a02b26a0ca138af03d5f856906323c9033f41af7533f8b4564f->leave($__internal_fdcb2c1f43501a02b26a0ca138af03d5f856906323c9033f41af7533f8b4564f_prof);

        
        $__internal_0fba60d0139878854abf372e6af50ceb9fe391581ebc71e3d7b0c6649cbcb2a4->leave($__internal_0fba60d0139878854abf372e6af50ceb9fe391581ebc71e3d7b0c6649cbcb2a4_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
