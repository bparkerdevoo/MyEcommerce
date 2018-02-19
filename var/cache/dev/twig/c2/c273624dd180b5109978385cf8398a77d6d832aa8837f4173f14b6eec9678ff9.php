<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_154c1e5bc9f09d1ce1a2278a04c1965d5547386dd6a57baca8b4f1839125c8b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8a29ee04291003a048ab642394e88cbabb703e7304760b3d6bb484a5359e7ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a29ee04291003a048ab642394e88cbabb703e7304760b3d6bb484a5359e7ce->enter($__internal_b8a29ee04291003a048ab642394e88cbabb703e7304760b3d6bb484a5359e7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_bcc34ab7907c4e8daf8cd7f6ed9937a7ab49a6afc9ae7afca88180eedc600e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc34ab7907c4e8daf8cd7f6ed9937a7ab49a6afc9ae7afca88180eedc600e20->enter($__internal_bcc34ab7907c4e8daf8cd7f6ed9937a7ab49a6afc9ae7afca88180eedc600e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8a29ee04291003a048ab642394e88cbabb703e7304760b3d6bb484a5359e7ce->leave($__internal_b8a29ee04291003a048ab642394e88cbabb703e7304760b3d6bb484a5359e7ce_prof);

        
        $__internal_bcc34ab7907c4e8daf8cd7f6ed9937a7ab49a6afc9ae7afca88180eedc600e20->leave($__internal_bcc34ab7907c4e8daf8cd7f6ed9937a7ab49a6afc9ae7afca88180eedc600e20_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed9c766b5de9531cb9b2fa2d00f96300ad4a30668010e588b13df950cbbe80ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9c766b5de9531cb9b2fa2d00f96300ad4a30668010e588b13df950cbbe80ec->enter($__internal_ed9c766b5de9531cb9b2fa2d00f96300ad4a30668010e588b13df950cbbe80ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bdbb039dd454497758a812919a3ebe4529cd19d5c5b4e7f2f317bd1d9a0154b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdbb039dd454497758a812919a3ebe4529cd19d5c5b4e7f2f317bd1d9a0154b1->enter($__internal_bdbb039dd454497758a812919a3ebe4529cd19d5c5b4e7f2f317bd1d9a0154b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bdbb039dd454497758a812919a3ebe4529cd19d5c5b4e7f2f317bd1d9a0154b1->leave($__internal_bdbb039dd454497758a812919a3ebe4529cd19d5c5b4e7f2f317bd1d9a0154b1_prof);

        
        $__internal_ed9c766b5de9531cb9b2fa2d00f96300ad4a30668010e588b13df950cbbe80ec->leave($__internal_ed9c766b5de9531cb9b2fa2d00f96300ad4a30668010e588b13df950cbbe80ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
