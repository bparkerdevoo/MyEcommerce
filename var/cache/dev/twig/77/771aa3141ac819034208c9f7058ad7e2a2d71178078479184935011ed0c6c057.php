<?php

/* MSFBundle:Page:page.html.twig */
class __TwigTemplate_15bc3776512f5f1508555fec287a729df86888a2358fdf06cb693e1ddd05c383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Layout.html.twig", "MSFBundle:Page:page.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'cgv' => array($this, 'block_cgv'),
            'cgu' => array($this, 'block_cgu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d08a328ddfb7dd0f2270b6d415b035c06245fbe13787d38d64ef163ea2efdba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d08a328ddfb7dd0f2270b6d415b035c06245fbe13787d38d64ef163ea2efdba->enter($__internal_6d08a328ddfb7dd0f2270b6d415b035c06245fbe13787d38d64ef163ea2efdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page:page.html.twig"));

        $__internal_0df4d19f7927ce9e9adbbbe80d6d9223e952fdb6c9f6e70694e1624127a9ded9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df4d19f7927ce9e9adbbbe80d6d9223e952fdb6c9f6e70694e1624127a9ded9->enter($__internal_0df4d19f7927ce9e9adbbbe80d6d9223e952fdb6c9f6e70694e1624127a9ded9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page:page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d08a328ddfb7dd0f2270b6d415b035c06245fbe13787d38d64ef163ea2efdba->leave($__internal_6d08a328ddfb7dd0f2270b6d415b035c06245fbe13787d38d64ef163ea2efdba_prof);

        
        $__internal_0df4d19f7927ce9e9adbbbe80d6d9223e952fdb6c9f6e70694e1624127a9ded9->leave($__internal_0df4d19f7927ce9e9adbbbe80d6d9223e952fdb6c9f6e70694e1624127a9ded9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68c44260886d4d8b1cbe0efbb54d91fc3f8afc31bb54585de151ccce6883f618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68c44260886d4d8b1cbe0efbb54d91fc3f8afc31bb54585de151ccce6883f618->enter($__internal_68c44260886d4d8b1cbe0efbb54d91fc3f8afc31bb54585de151ccce6883f618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_649e142a0901619695287f886a3706f16dc07cb4efb3558b4215b4b4050e523a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649e142a0901619695287f886a3706f16dc07cb4efb3558b4215b4b4050e523a->enter($__internal_649e142a0901619695287f886a3706f16dc07cb4efb3558b4215b4b4050e523a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <H1>Mentions Legales</H1>

            <div class=\"span12\">
                <div class=\"span3\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/holder.png"), "html", null, true);
        echo "\" alt=\"MSF\" width=\"470\" height=\"310\">
                </div>

            </div>

            <div class=\"row\">
                ";
        // line 16
        $this->displayBlock('cgv', $context, $blocks);
        // line 19
        echo "            </div>
            <div class=\"row\">
                ";
        // line 21
        $this->displayBlock('cgu', $context, $blocks);
        // line 24
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_649e142a0901619695287f886a3706f16dc07cb4efb3558b4215b4b4050e523a->leave($__internal_649e142a0901619695287f886a3706f16dc07cb4efb3558b4215b4b4050e523a_prof);

        
        $__internal_68c44260886d4d8b1cbe0efbb54d91fc3f8afc31bb54585de151ccce6883f618->leave($__internal_68c44260886d4d8b1cbe0efbb54d91fc3f8afc31bb54585de151ccce6883f618_prof);

    }

    // line 16
    public function block_cgv($context, array $blocks = array())
    {
        $__internal_f02ed72b97da984789e016f99b0c34fe333d0c0a5237454477cefd155d05c256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02ed72b97da984789e016f99b0c34fe333d0c0a5237454477cefd155d05c256->enter($__internal_f02ed72b97da984789e016f99b0c34fe333d0c0a5237454477cefd155d05c256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cgv"));

        $__internal_6ec6047251db8f8c157e0f2371749fcb464fcf105915b5951b65c1a905456b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec6047251db8f8c157e0f2371749fcb464fcf105915b5951b65c1a905456b72->enter($__internal_6ec6047251db8f8c157e0f2371749fcb464fcf105915b5951b65c1a905456b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cgv"));

        // line 17
        echo "                    ";
        $this->loadTemplate("MSFBundle:Page/inc:cgv.html.twig", "MSFBundle:Page:page.html.twig", 17)->display($context);
        // line 18
        echo "                ";
        
        $__internal_6ec6047251db8f8c157e0f2371749fcb464fcf105915b5951b65c1a905456b72->leave($__internal_6ec6047251db8f8c157e0f2371749fcb464fcf105915b5951b65c1a905456b72_prof);

        
        $__internal_f02ed72b97da984789e016f99b0c34fe333d0c0a5237454477cefd155d05c256->leave($__internal_f02ed72b97da984789e016f99b0c34fe333d0c0a5237454477cefd155d05c256_prof);

    }

    // line 21
    public function block_cgu($context, array $blocks = array())
    {
        $__internal_f564592cb8930e3891b3b00d276853ca2683ad31db57ef20590f281b8c5529d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f564592cb8930e3891b3b00d276853ca2683ad31db57ef20590f281b8c5529d7->enter($__internal_f564592cb8930e3891b3b00d276853ca2683ad31db57ef20590f281b8c5529d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cgu"));

        $__internal_639406f671ffde7a9d92174e19cc75035d17009d13095c5a969242d3b800f74e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639406f671ffde7a9d92174e19cc75035d17009d13095c5a969242d3b800f74e->enter($__internal_639406f671ffde7a9d92174e19cc75035d17009d13095c5a969242d3b800f74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cgu"));

        // line 22
        echo "                    ";
        $this->loadTemplate("MSFBundle:Page/inc:cgu.html.twig", "MSFBundle:Page:page.html.twig", 22)->display($context);
        // line 23
        echo "                ";
        
        $__internal_639406f671ffde7a9d92174e19cc75035d17009d13095c5a969242d3b800f74e->leave($__internal_639406f671ffde7a9d92174e19cc75035d17009d13095c5a969242d3b800f74e_prof);

        
        $__internal_f564592cb8930e3891b3b00d276853ca2683ad31db57ef20590f281b8c5529d7->leave($__internal_f564592cb8930e3891b3b00d276853ca2683ad31db57ef20590f281b8c5529d7_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Page:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 23,  120 => 22,  111 => 21,  101 => 18,  98 => 17,  89 => 16,  76 => 24,  74 => 21,  70 => 19,  68 => 16,  59 => 10,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":Layout.html.twig\" %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <H1>Mentions Legales</H1>

            <div class=\"span12\">
                <div class=\"span3\">
                    <img src=\"{{ asset('img/holder.png') }}\" alt=\"MSF\" width=\"470\" height=\"310\">
                </div>

            </div>

            <div class=\"row\">
                {% block cgv %}
                    {% include \"MSFBundle:Page/inc:cgv.html.twig\" %}
                {% endblock  %}
            </div>
            <div class=\"row\">
                {% block cgu %}
                    {% include \"MSFBundle:Page/inc:cgu.html.twig\" %}
                {% endblock  %}
            </div>
        </div>
    </div>
{% endblock %}", "MSFBundle:Page:page.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Page/page.html.twig");
    }
}
