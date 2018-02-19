<?php

/* UserBundle:registered:registered_content.html.twig */
class __TwigTemplate_fb05aa4237231619ddcc953da56a5d8113519863db45b4015e9a903a9c10b497 extends Twig_Template
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
        $__internal_1109d495fb456813743408871ad586f95b94fb638b475be604a7a9498a4dea44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1109d495fb456813743408871ad586f95b94fb638b475be604a7a9498a4dea44->enter($__internal_1109d495fb456813743408871ad586f95b94fb638b475be604a7a9498a4dea44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:registered:registered_content.html.twig"));

        $__internal_985337a9d07cf8c3aef8de82c0d357867fd25bf9b53d7641784f63737c07445c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985337a9d07cf8c3aef8de82c0d357867fd25bf9b53d7641784f63737c07445c->enter($__internal_985337a9d07cf8c3aef8de82c0d357867fd25bf9b53d7641784f63737c07445c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:registered:registered_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<div class=\"row\">
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4 offset2\">
                    <h4>Je me Connect</h4>
                    <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        ";
        // line 16
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 16, $this->getSourceContext()); })())) {
            // line 17
            echo "
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
                        ";
        }
        // line 20
        echo "                        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 21, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />

                        <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                        <br>
                        <input class=\"btn btn-primary\" type=\"submit\"  value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
                <div class=\"span8 offset2\">
                    <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
                </div>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_1109d495fb456813743408871ad586f95b94fb638b475be604a7a9498a4dea44->leave($__internal_1109d495fb456813743408871ad586f95b94fb638b475be604a7a9498a4dea44_prof);

        
        $__internal_985337a9d07cf8c3aef8de82c0d357867fd25bf9b53d7641784f63737c07445c->leave($__internal_985337a9d07cf8c3aef8de82c0d357867fd25bf9b53d7641784f63737c07445c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:registered:registered_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  77 => 26,  71 => 23,  66 => 21,  61 => 20,  56 => 18,  53 => 17,  51 => 16,  47 => 15,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"row\">
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4 offset2\">
                    <h4>Je me Connect</h4>
                    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                        {% if csrf_token %}

                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                        {% endif %}
                        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

                        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                        <br>
                        <input class=\"btn btn-primary\" type=\"submit\"  value=\"{{ 'security.login.submit'|trans }}\" />
                    </form>
                </div>
                <div class=\"span8 offset2\">
                    <a href=\"{{ path('fos_user_resetting_request') }}\">Mot de passe perdu ?</a>
                </div>
            </div>
        </div>
    </div>
</div>


", "UserBundle:registered:registered_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/registered/registered_content.html.twig");
    }
}
