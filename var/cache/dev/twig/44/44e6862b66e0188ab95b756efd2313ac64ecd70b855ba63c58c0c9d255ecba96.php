<?php

/* UserBundle:FOSUserBundle/views/Profile:show_content_user_profile.html.twig */
class __TwigTemplate_9eb854a921b45108905d77e05ed5c0a8ba8573b982db1e21c296ae82d64a5980 extends Twig_Template
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
        $__internal_48564d042ca44690b2febb42c797fbf24577dcc58eda87229bf0412b2407e24d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48564d042ca44690b2febb42c797fbf24577dcc58eda87229bf0412b2407e24d->enter($__internal_48564d042ca44690b2febb42c797fbf24577dcc58eda87229bf0412b2407e24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show_content_user_profile.html.twig"));

        $__internal_df78a9e8dd49db96b2bd1d245f4f6fe876a2f11a784f085b6e786e7d9077e3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df78a9e8dd49db96b2bd1d245f4f6fe876a2f11a784f085b6e786e7d9077e3e0->enter($__internal_df78a9e8dd49db96b2bd1d245f4f6fe876a2f11a784f085b6e786e7d9077e3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show_content_user_profile.html.twig"));

        // line 2
        echo "
<div class=\"span4\">
    <h4>Mes informations de connexion  </h4>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
    <br />
    <button class=\"btn btn-primary\">Modifier</button>
    </form>
</div>

";
        
        $__internal_48564d042ca44690b2febb42c797fbf24577dcc58eda87229bf0412b2407e24d->leave($__internal_48564d042ca44690b2febb42c797fbf24577dcc58eda87229bf0412b2407e24d_prof);

        
        $__internal_df78a9e8dd49db96b2bd1d245f4f6fe876a2f11a784f085b6e786e7d9077e3e0->leave($__internal_df78a9e8dd49db96b2bd1d245f4f6fe876a2f11a784f085b6e786e7d9077e3e0_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Profile:show_content_user_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"span4\">
    <h4>Mes informations de connexion  </h4>
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
    <br />
    <button class=\"btn btn-primary\">Modifier</button>
    </form>
</div>

", "UserBundle:FOSUserBundle/views/Profile:show_content_user_profile.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Profile/show_content_user_profile.html.twig");
    }
}
