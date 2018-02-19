<?php

/* UserBundle:modules:updateConnexion_content.html.twig */
class __TwigTemplate_0cb87c36268841caa7afc8f18b36a142541f616b8726192f84920d617862cc62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'updateConnexion' => array($this, 'block_updateConnexion'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_638d1c3e2f8ed77739a625733d9d440306ddbc0c032b560baecd2f75d0f5ec37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638d1c3e2f8ed77739a625733d9d440306ddbc0c032b560baecd2f75d0f5ec37->enter($__internal_638d1c3e2f8ed77739a625733d9d440306ddbc0c032b560baecd2f75d0f5ec37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:modules:updateConnexion_content.html.twig"));

        $__internal_c0188fb92f0970e6e7b1a84deded68c645528f429d043dcf3eb06502452cac94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0188fb92f0970e6e7b1a84deded68c645528f429d043dcf3eb06502452cac94->enter($__internal_c0188fb92f0970e6e7b1a84deded68c645528f429d043dcf3eb06502452cac94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:modules:updateConnexion_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('updateConnexion', $context, $blocks);
        
        $__internal_638d1c3e2f8ed77739a625733d9d440306ddbc0c032b560baecd2f75d0f5ec37->leave($__internal_638d1c3e2f8ed77739a625733d9d440306ddbc0c032b560baecd2f75d0f5ec37_prof);

        
        $__internal_c0188fb92f0970e6e7b1a84deded68c645528f429d043dcf3eb06502452cac94->leave($__internal_c0188fb92f0970e6e7b1a84deded68c645528f429d043dcf3eb06502452cac94_prof);

    }

    public function block_updateConnexion($context, array $blocks = array())
    {
        $__internal_591d821cc524b8e4175d51e297090fd54cba19d6308c7a4ee245cd57ce54aa37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591d821cc524b8e4175d51e297090fd54cba19d6308c7a4ee245cd57ce54aa37->enter($__internal_591d821cc524b8e4175d51e297090fd54cba19d6308c7a4ee245cd57ce54aa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "updateConnexion"));

        $__internal_9b6be9cecddc445309559ffd0297a89cf68c77749da04b3c24581f2746e86782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6be9cecddc445309559ffd0297a89cf68c77749da04b3c24581f2746e86782->enter($__internal_9b6be9cecddc445309559ffd0297a89cf68c77749da04b3c24581f2746e86782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "updateConnexion"));

        // line 4
        echo "
    <div id=\"collapseOne\" class=\"accordion-body collapse in\">
        <div class=\"accordion-inner\">

            <div class=\"span4\">
                <h4>Modifier mes informations</h4>
                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        // line 11
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'widget');
        echo "

                <br />

                <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
            </div>
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
<hr>
";
        
        $__internal_9b6be9cecddc445309559ffd0297a89cf68c77749da04b3c24581f2746e86782->leave($__internal_9b6be9cecddc445309559ffd0297a89cf68c77749da04b3c24581f2746e86782_prof);

        
        $__internal_591d821cc524b8e4175d51e297090fd54cba19d6308c7a4ee245cd57ce54aa37->leave($__internal_591d821cc524b8e4175d51e297090fd54cba19d6308c7a4ee245cd57ce54aa37_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:modules:updateConnexion_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  67 => 16,  60 => 12,  57 => 11,  55 => 10,  47 => 4,  29 => 3,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block updateConnexion%}

    <div id=\"collapseOne\" class=\"accordion-body collapse in\">
        <div class=\"accordion-inner\">

            <div class=\"span4\">
                <h4>Modifier mes informations</h4>
                {{ form_start(form, { 'action': path('fos_user_profile_edit'),
                    'attr': { 'class': 'fos_user_profile_edit' } }) }}
                {{ form_widget(form) }}

                <br />

                <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
            </div>
            {{ form_end(form) }}
        </div>
    </div>
<hr>
{% endblock updateConnexion%}
", "UserBundle:modules:updateConnexion_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/modules/updateConnexion_content.html.twig");
    }
}
