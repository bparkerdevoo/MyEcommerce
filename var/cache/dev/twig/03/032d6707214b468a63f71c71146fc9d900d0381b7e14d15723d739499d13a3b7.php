<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_3bc98a55215581feefdf9e91a9881b6c98fa5c7e42b48e267174b38197e1546d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fc3783dc4b4340c51151557ade2c0db691e1bd07f7ed97f8d30bf6ac3c768d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc3783dc4b4340c51151557ade2c0db691e1bd07f7ed97f8d30bf6ac3c768d9->enter($__internal_9fc3783dc4b4340c51151557ade2c0db691e1bd07f7ed97f8d30bf6ac3c768d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_150d93dead7593d85455aa4f533faf431642521638e1a26b5535afc2256c7c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150d93dead7593d85455aa4f533faf431642521638e1a26b5535afc2256c7c5f->enter($__internal_150d93dead7593d85455aa4f533faf431642521638e1a26b5535afc2256c7c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_9fc3783dc4b4340c51151557ade2c0db691e1bd07f7ed97f8d30bf6ac3c768d9->leave($__internal_9fc3783dc4b4340c51151557ade2c0db691e1bd07f7ed97f8d30bf6ac3c768d9_prof);

        
        $__internal_150d93dead7593d85455aa4f533faf431642521638e1a26b5535afc2256c7c5f->leave($__internal_150d93dead7593d85455aa4f533faf431642521638e1a26b5535afc2256c7c5f_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_6dd2fa949c6f1dd69cbbcbabc6bb342febc5c0764b472321abee84f0ea7c5e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd2fa949c6f1dd69cbbcbabc6bb342febc5c0764b472321abee84f0ea7c5e1a->enter($__internal_6dd2fa949c6f1dd69cbbcbabc6bb342febc5c0764b472321abee84f0ea7c5e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_548b41026ade4896d5b6479a06d4d7d1b05d8159c1be51877549ac1d449dbe54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548b41026ade4896d5b6479a06d4d7d1b05d8159c1be51877549ac1d449dbe54->enter($__internal_548b41026ade4896d5b6479a06d4d7d1b05d8159c1be51877549ac1d449dbe54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_548b41026ade4896d5b6479a06d4d7d1b05d8159c1be51877549ac1d449dbe54->leave($__internal_548b41026ade4896d5b6479a06d4d7d1b05d8159c1be51877549ac1d449dbe54_prof);

        
        $__internal_6dd2fa949c6f1dd69cbbcbabc6bb342febc5c0764b472321abee84f0ea7c5e1a->leave($__internal_6dd2fa949c6f1dd69cbbcbabc6bb342febc5c0764b472321abee84f0ea7c5e1a_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_5fb6dde1ac1ad6e1840f846d5084100671e7622042c67d491ed480f01f2dbdce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb6dde1ac1ad6e1840f846d5084100671e7622042c67d491ed480f01f2dbdce->enter($__internal_5fb6dde1ac1ad6e1840f846d5084100671e7622042c67d491ed480f01f2dbdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_4403ec4c0862328fc9d019c07d65fdb080acfb1a49e200b66f47885651842286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4403ec4c0862328fc9d019c07d65fdb080acfb1a49e200b66f47885651842286->enter($__internal_4403ec4c0862328fc9d019c07d65fdb080acfb1a49e200b66f47885651842286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        <div class=\"vich-file\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4403ec4c0862328fc9d019c07d65fdb080acfb1a49e200b66f47885651842286->leave($__internal_4403ec4c0862328fc9d019c07d65fdb080acfb1a49e200b66f47885651842286_prof);

        
        $__internal_5fb6dde1ac1ad6e1840f846d5084100671e7622042c67d491ed480f01f2dbdce->leave($__internal_5fb6dde1ac1ad6e1840f846d5084100671e7622042c67d491ed480f01f2dbdce_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_2ab7df7d3482a7dfcca8b47d7391cc7f1da734d8089df1f9c299edfa1064013c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab7df7d3482a7dfcca8b47d7391cc7f1da734d8089df1f9c299edfa1064013c->enter($__internal_2ab7df7d3482a7dfcca8b47d7391cc7f1da734d8089df1f9c299edfa1064013c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_bfbe8c5f27af1139611e5778c620616dd1276a76bb8a039040d5da00c903e0f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbe8c5f27af1139611e5778c620616dd1276a76bb8a039040d5da00c903e0f3->enter($__internal_bfbe8c5f27af1139611e5778c620616dd1276a76bb8a039040d5da00c903e0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bfbe8c5f27af1139611e5778c620616dd1276a76bb8a039040d5da00c903e0f3->leave($__internal_bfbe8c5f27af1139611e5778c620616dd1276a76bb8a039040d5da00c903e0f3_prof);

        
        $__internal_2ab7df7d3482a7dfcca8b47d7391cc7f1da734d8089df1f9c299edfa1064013c->leave($__internal_2ab7df7d3482a7dfcca8b47d7391cc7f1da734d8089df1f9c299edfa1064013c_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_3dfb41fd136cd5ddcad6e1e93144286e099ab019cc1017cb0e2505f080890414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfb41fd136cd5ddcad6e1e93144286e099ab019cc1017cb0e2505f080890414->enter($__internal_3dfb41fd136cd5ddcad6e1e93144286e099ab019cc1017cb0e2505f080890414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_8c37d6529f56aaa57e6ca8e4afddbc8f344923b663bcc9299f5d395748483b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c37d6529f56aaa57e6ca8e4afddbc8f344923b663bcc9299f5d395748483b17->enter($__internal_8c37d6529f56aaa57e6ca8e4afddbc8f344923b663bcc9299f5d395748483b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <div class=\"vich-image\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 34, $this->getSourceContext()); })())) {
            // line 35
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"\" /></a>
            ";
        }
        // line 37
        echo "            ";
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 37, $this->getSourceContext()); })())) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 40
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8c37d6529f56aaa57e6ca8e4afddbc8f344923b663bcc9299f5d395748483b17->leave($__internal_8c37d6529f56aaa57e6ca8e4afddbc8f344923b663bcc9299f5d395748483b17_prof);

        
        $__internal_3dfb41fd136cd5ddcad6e1e93144286e099ab019cc1017cb0e2505f080890414->leave($__internal_3dfb41fd136cd5ddcad6e1e93144286e099ab019cc1017cb0e2505f080890414_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 40,  191 => 38,  188 => 37,  180 => 35,  178 => 34,  175 => 33,  169 => 31,  167 => 30,  163 => 29,  160 => 28,  157 => 27,  148 => 26,  138 => 23,  136 => 22,  127 => 21,  115 => 17,  107 => 15,  105 => 14,  102 => 13,  96 => 11,  94 => 10,  90 => 9,  87 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
    {% spaceless %}
        <div class=\"vich-file\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
    {% spaceless %}
        <div class=\"vich-image\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if image_uri %}
                <a href=\"{{ image_uri }}\"><img src=\"{{ image_uri }}\" alt=\"\" /></a>
            {% endif %}
            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
