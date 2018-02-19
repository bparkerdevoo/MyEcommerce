<?php

/* UserBundle:FOSUserBundle/views/ChangePassword:change_password_content.html.twig */
class __TwigTemplate_6fa29a19363ce5b46daa77781a11e0c93d5b28e264de711499bc249b4ac6178c extends Twig_Template
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
        $__internal_f44be962d4abfa25385308c2d5904927dccb426e9099f3b84fbb37f1e3653c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f44be962d4abfa25385308c2d5904927dccb426e9099f3b84fbb37f1e3653c93->enter($__internal_f44be962d4abfa25385308c2d5904927dccb426e9099f3b84fbb37f1e3653c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/ChangePassword:change_password_content.html.twig"));

        $__internal_425c5595552b46c3ca4db68044af69f2feaa993195aaf8f4a19027436e9b0265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425c5595552b46c3ca4db68044af69f2feaa993195aaf8f4a19027436e9b0265->enter($__internal_425c5595552b46c3ca4db68044af69f2feaa993195aaf8f4a19027436e9b0265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/ChangePassword:change_password_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">

    <div class=\"span3\">
        ";
        // line 6
        $this->loadTemplate("UserBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "UserBundle:FOSUserBundle/views/ChangePassword:change_password_content.html.twig", 6)->display($context);
        // line 7
        echo "    </div>
    <div class=\"span9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4\">
                    <h4>Changer le mot de pass</h4>
                    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'widget');
        echo "

                    <br />

                    <input type=\"submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </div>
                ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
</div>



";
        
        $__internal_f44be962d4abfa25385308c2d5904927dccb426e9099f3b84fbb37f1e3653c93->leave($__internal_f44be962d4abfa25385308c2d5904927dccb426e9099f3b84fbb37f1e3653c93_prof);

        
        $__internal_425c5595552b46c3ca4db68044af69f2feaa993195aaf8f4a19027436e9b0265->leave($__internal_425c5595552b46c3ca4db68044af69f2feaa993195aaf8f4a19027436e9b0265_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/ChangePassword:change_password_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  54 => 20,  47 => 16,  43 => 15,  33 => 7,  31 => 6,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"row\">

    <div class=\"span3\">
        {% include 'UserBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}
    </div>
    <div class=\"span9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4\">
                    <h4>Changer le mot de pass</h4>
                    {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
                    {{ form_widget(form) }}

                    <br />

                    <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>



", "UserBundle:FOSUserBundle/views/ChangePassword:change_password_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/ChangePassword/change_password_content.html.twig");
    }
}
