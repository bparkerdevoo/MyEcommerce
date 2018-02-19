<?php

/* UserBundle:FOSUserBundle/views/Resetting:reset_content.html.twig */
class __TwigTemplate_762fc0105b3ade6adee8ad0d2d68982a49a30e630f6aac3bbe7d76993e5c1ffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13eeec31c219e116d59bc518906abca680d7c76f04e8802de34ae72e5e6b5923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13eeec31c219e116d59bc518906abca680d7c76f04e8802de34ae72e5e6b5923->enter($__internal_13eeec31c219e116d59bc518906abca680d7c76f04e8802de34ae72e5e6b5923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Resetting:reset_content.html.twig"));

        $__internal_88182a989c46d3d78dfa47c87158e7544c1f781559a298c1d34356281d232725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88182a989c46d3d78dfa47c87158e7544c1f781559a298c1d34356281d232725->enter($__internal_88182a989c46d3d78dfa47c87158e7544c1f781559a298c1d34356281d232725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Resetting:reset_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Récupération du mot de passe ?</h4>
                    <em>
                        Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />
                        Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 17, $this->getSourceContext()); })()))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'widget');
        echo "
                        <br />
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

                    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>





";
        
        $__internal_13eeec31c219e116d59bc518906abca680d7c76f04e8802de34ae72e5e6b5923->leave($__internal_13eeec31c219e116d59bc518906abca680d7c76f04e8802de34ae72e5e6b5923_prof);

        
        $__internal_88182a989c46d3d78dfa47c87158e7544c1f781559a298c1d34356281d232725->leave($__internal_88182a989c46d3d78dfa47c87158e7544c1f781559a298c1d34356281d232725_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  51 => 20,  46 => 18,  42 => 17,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"row\">
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Récupération du mot de passe ?</h4>
                    <em>
                        Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />
                        Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
                    {{ form_widget(form) }}
                        <br />
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>





", "UserBundle:FOSUserBundle/views/Resetting:reset_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
