<?php

/* UserBundle:FOSUserBundle/views/Registration:confirmed.html.twig */
class __TwigTemplate_56fd2b0c9e9e25de11c93bafcb5313808826ab03b401afc8cb08ed0603a23409 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f97d4b2999bb9253b9c7eeb5fd0046004c8af4fb59d017424afc50ce0fe14d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f97d4b2999bb9253b9c7eeb5fd0046004c8af4fb59d017424afc50ce0fe14d9->enter($__internal_2f97d4b2999bb9253b9c7eeb5fd0046004c8af4fb59d017424afc50ce0fe14d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Registration:confirmed.html.twig"));

        $__internal_c085cedee4a09ba3a2c1be96888d87e8645e345259869619b35a7c23d5984dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c085cedee4a09ba3a2c1be96888d87e8645e345259869619b35a7c23d5984dee->enter($__internal_c085cedee4a09ba3a2c1be96888d87e8645e345259869619b35a7c23d5984dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f97d4b2999bb9253b9c7eeb5fd0046004c8af4fb59d017424afc50ce0fe14d9->leave($__internal_2f97d4b2999bb9253b9c7eeb5fd0046004c8af4fb59d017424afc50ce0fe14d9_prof);

        
        $__internal_c085cedee4a09ba3a2c1be96888d87e8645e345259869619b35a7c23d5984dee->leave($__internal_c085cedee4a09ba3a2c1be96888d87e8645e345259869619b35a7c23d5984dee_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01392d2107dff658ca1b67f0f7084169ba993a87fc05c07d9bbf55716c5a81d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01392d2107dff658ca1b67f0f7084169ba993a87fc05c07d9bbf55716c5a81d5->enter($__internal_01392d2107dff658ca1b67f0f7084169ba993a87fc05c07d9bbf55716c5a81d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5fca3d950cea141a77edd24f6ba766c083df8e142e2a96f16dc0fa03a6726e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fca3d950cea141a77edd24f6ba766c083df8e142e2a96f16dc0fa03a6726e24->enter($__internal_5fca3d950cea141a77edd24f6ba766c083df8e142e2a96f16dc0fa03a6726e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <div class=\"row\">
        <h2>Enregistrement réussi!!!</h2>
    </div>
    <div class=\"row\">
        <h4>vous pouvez vous connecter</h4>
    </div>
    <div class=\"span4\">
        <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
        ";
        // line 14
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "            <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
        ";
        }
        // line 17
        echo "    </div>
    <div class=\"span4 offset2\">
        ";
        // line 19
        $this->loadTemplate("UserBundle:nav_inc:utilisateursConfirme.html.twig", "UserBundle:FOSUserBundle/views/Registration:confirmed.html.twig", 19)->display($context);
        // line 20
        echo "    </div>






";
        
        $__internal_5fca3d950cea141a77edd24f6ba766c083df8e142e2a96f16dc0fa03a6726e24->leave($__internal_5fca3d950cea141a77edd24f6ba766c083df8e142e2a96f16dc0fa03a6726e24_prof);

        
        $__internal_01392d2107dff658ca1b67f0f7084169ba993a87fc05c07d9bbf55716c5a81d5->leave($__internal_01392d2107dff658ca1b67f0f7084169ba993a87fc05c07d9bbf55716c5a81d5_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  76 => 19,  72 => 17,  64 => 15,  62 => 14,  58 => 13,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <div class=\"row\">
        <h2>Enregistrement réussi!!!</h2>
    </div>
    <div class=\"row\">
        <h4>vous pouvez vous connecter</h4>
    </div>
    <div class=\"span4\">
        <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
        {% if targetUrl %}
            <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
        {% endif %}
    </div>
    <div class=\"span4 offset2\">
        {% include 'UserBundle:nav_inc:utilisateursConfirme.html.twig' %}
    </div>






{% endblock fos_user_content %}
", "UserBundle:FOSUserBundle/views/Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
