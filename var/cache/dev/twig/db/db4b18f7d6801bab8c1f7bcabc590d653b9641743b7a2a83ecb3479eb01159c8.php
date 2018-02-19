<?php

/* UserBundle:FOSUserBundle/views/Profile:edit_content.html.twig */
class __TwigTemplate_8c9d9aa656d94d27fec36390db0c5070dceb0c3e96032519ab91ae20b5b357ab extends Twig_Template
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
        $__internal_b85f86b06c48bf4d36382a1ff8ba9316a5992a091aac5ed1b92c61895616da85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85f86b06c48bf4d36382a1ff8ba9316a5992a091aac5ed1b92c61895616da85->enter($__internal_b85f86b06c48bf4d36382a1ff8ba9316a5992a091aac5ed1b92c61895616da85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:edit_content.html.twig"));

        $__internal_2a935ddd68676623d75968081dd55fc5f4e4338f6217f8bf08223915c444701b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a935ddd68676623d75968081dd55fc5f4e4338f6217f8bf08223915c444701b->enter($__internal_2a935ddd68676623d75968081dd55fc5f4e4338f6217f8bf08223915c444701b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:edit_content.html.twig"));

        // line 2
        echo "<div class=\"row\">

    <div class=\"span3\">
        ";
        // line 5
        $this->loadTemplate("UserBundle:nav_inc:utilisateursConnecte.html.twig", "UserBundle:FOSUserBundle/views/Profile:edit_content.html.twig", 5)->display($context);
        // line 6
        echo "    </div>
    <div class=\"span9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4\">
                    <h4>Modifier mes informations</h4>
                    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        // line 15
        echo "
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'widget');
        echo "

                    <br />

                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
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
</div>

";
        
        $__internal_b85f86b06c48bf4d36382a1ff8ba9316a5992a091aac5ed1b92c61895616da85->leave($__internal_b85f86b06c48bf4d36382a1ff8ba9316a5992a091aac5ed1b92c61895616da85_prof);

        
        $__internal_2a935ddd68676623d75968081dd55fc5f4e4338f6217f8bf08223915c444701b->leave($__internal_2a935ddd68676623d75968081dd55fc5f4e4338f6217f8bf08223915c444701b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  54 => 20,  47 => 16,  44 => 15,  42 => 14,  32 => 6,  30 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"row\">

    <div class=\"span3\">
        {% include 'UserBundle:nav_inc:utilisateursConnecte.html.twig' %}
    </div>
    <div class=\"span9\">
        <h2>Mes informations</h2>
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
        </div>
    </div>
</div>

", "UserBundle:FOSUserBundle/views/Profile:edit_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
