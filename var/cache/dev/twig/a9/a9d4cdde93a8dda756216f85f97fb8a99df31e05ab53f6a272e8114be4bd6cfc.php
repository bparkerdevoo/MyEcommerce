<?php

/* UserBundle:FOSUserBundle/views/Registration:register_content.html.twig */
class __TwigTemplate_ac1c79860c34338f877a8bfeec7806ba33b2432df1723a0a261172e356619693 extends Twig_Template
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
        $__internal_8af878dbb480d41531be2c171c8fb929e8ea4efcdff1bdd33ffd98242bae0617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af878dbb480d41531be2c171c8fb929e8ea4efcdff1bdd33ffd98242bae0617->enter($__internal_8af878dbb480d41531be2c171c8fb929e8ea4efcdff1bdd33ffd98242bae0617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Registration:register_content.html.twig"));

        $__internal_15d0a28fcb5cffb35770b48dfed1ce503c9c1e8a5995fd42b515d9add052a809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d0a28fcb5cffb35770b48dfed1ce503c9c1e8a5995fd42b515d9add052a809->enter($__internal_15d0a28fcb5cffb35770b48dfed1ce503c9c1e8a5995fd42b515d9add052a809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Registration:register_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Pas encore inscrit ?</h4>
                    <em>
                        nous vous invitons à vous inscrire<br />
                        afin de créer votre ambiance.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    <h4>Inscription</h4>
                    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "_token", array()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'widget');
        echo "
                        <br />




                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />


                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_8af878dbb480d41531be2c171c8fb929e8ea4efcdff1bdd33ffd98242bae0617->leave($__internal_8af878dbb480d41531be2c171c8fb929e8ea4efcdff1bdd33ffd98242bae0617_prof);

        
        $__internal_15d0a28fcb5cffb35770b48dfed1ce503c9c1e8a5995fd42b515d9add052a809->leave($__internal_15d0a28fcb5cffb35770b48dfed1ce503c9c1e8a5995fd42b515d9add052a809_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 29,  57 => 26,  48 => 20,  43 => 18,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"row\">
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Pas encore inscrit ?</h4>
                    <em>
                        nous vous invitons à vous inscrire<br />
                        afin de créer votre ambiance.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    <h4>Inscription</h4>
                    {{ form_start(form._token, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

                    {{ form_widget(form) }}
                        <br />




                        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />


                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>


", "UserBundle:FOSUserBundle/views/Registration:register_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
