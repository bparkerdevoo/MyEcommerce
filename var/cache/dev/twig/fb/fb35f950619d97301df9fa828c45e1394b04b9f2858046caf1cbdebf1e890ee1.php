<?php

/* UserBundle:modules:updateClient_content.html.twig */
class __TwigTemplate_bb892117d886839dfa5409b00300695c443bb863803bf8f5eab65bddbd58575f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'updateInformation' => array($this, 'block_updateInformation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca91e93608d6f40a98497a54308469c886d9462d07e446216918c7abeec03177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca91e93608d6f40a98497a54308469c886d9462d07e446216918c7abeec03177->enter($__internal_ca91e93608d6f40a98497a54308469c886d9462d07e446216918c7abeec03177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:modules:updateClient_content.html.twig"));

        $__internal_30dca07dd057a9472b4d9a27eba729f7f7b2b3de77c474f9fb325a0059683357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30dca07dd057a9472b4d9a27eba729f7f7b2b3de77c474f9fb325a0059683357->enter($__internal_30dca07dd057a9472b4d9a27eba729f7f7b2b3de77c474f9fb325a0059683357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:modules:updateClient_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('updateInformation', $context, $blocks);
        
        $__internal_ca91e93608d6f40a98497a54308469c886d9462d07e446216918c7abeec03177->leave($__internal_ca91e93608d6f40a98497a54308469c886d9462d07e446216918c7abeec03177_prof);

        
        $__internal_30dca07dd057a9472b4d9a27eba729f7f7b2b3de77c474f9fb325a0059683357->leave($__internal_30dca07dd057a9472b4d9a27eba729f7f7b2b3de77c474f9fb325a0059683357_prof);

    }

    public function block_updateInformation($context, array $blocks = array())
    {
        $__internal_eeb1c000ac80490fc0d200dfd9bda04d2e7796d264f896dd4954efabc6f891d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb1c000ac80490fc0d200dfd9bda04d2e7796d264f896dd4954efabc6f891d2->enter($__internal_eeb1c000ac80490fc0d200dfd9bda04d2e7796d264f896dd4954efabc6f891d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "updateInformation"));

        $__internal_5c998ee2f742d9ed71011744e894cc0c6b3028bd2cde352ab481851ab3dce1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c998ee2f742d9ed71011744e894cc0c6b3028bd2cde352ab481851ab3dce1d6->enter($__internal_5c998ee2f742d9ed71011744e894cc0c6b3028bd2cde352ab481851ab3dce1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "updateInformation"));

        // line 4
        echo "
        <div class=\"row\">

            <div class=\"span8 offset3\">
                <div class=\"form-group\">

                    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start', array("attr" => array("novalidate" => "novalidate", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("information_client"), "method" => "post")));
        // line 14
        echo "
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'errors');
        echo "


                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'widget');
        echo "
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ajouter", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

                    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'form_end');
        echo "

                </div>

            </div>

        </div>
<hr>
";
        
        $__internal_5c998ee2f742d9ed71011744e894cc0c6b3028bd2cde352ab481851ab3dce1d6->leave($__internal_5c998ee2f742d9ed71011744e894cc0c6b3028bd2cde352ab481851ab3dce1d6_prof);

        
        $__internal_eeb1c000ac80490fc0d200dfd9bda04d2e7796d264f896dd4954efabc6f891d2->leave($__internal_eeb1c000ac80490fc0d200dfd9bda04d2e7796d264f896dd4954efabc6f891d2_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:modules:updateClient_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  70 => 19,  66 => 18,  60 => 15,  57 => 14,  55 => 10,  47 => 4,  29 => 3,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block updateInformation%}

        <div class=\"row\">

            <div class=\"span8 offset3\">
                <div class=\"form-group\">

                    {{ form_start(form, {'attr': {
                            'novalidate': 'novalidate',
                            'action' : path('information_client'),
                            'method':'post'}})
                        }}
                    {{ form_errors(form)}}


                    {{ form_widget(form) }}
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'Ajouter'|trans }}\" />

                    {{ form_end(form) }}

                </div>

            </div>

        </div>
<hr>
{% endblock updateInformation%}
", "UserBundle:modules:updateClient_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/modules/updateClient_content.html.twig");
    }
}
