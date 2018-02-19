<?php

/* UserBundle:FOSUserBundle/views/Profile:show_content_client_profile.html.twig */
class __TwigTemplate_1a3b06746b58cd76025dfbf9b19435b112f50700af0ea5e98f68d98ec9ccb3bd extends Twig_Template
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
        $__internal_35258d785644acf275cdc7077fc268f0ba8b5d10600f83cfab6e1e2af768de17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35258d785644acf275cdc7077fc268f0ba8b5d10600f83cfab6e1e2af768de17->enter($__internal_35258d785644acf275cdc7077fc268f0ba8b5d10600f83cfab6e1e2af768de17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show_content_client_profile.html.twig"));

        $__internal_03c641fd3d3fd9baa73fee61d5af2925d21ddcca2c9b9331e6288fac7b692d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c641fd3d3fd9baa73fee61d5af2925d21ddcca2c9b9331e6288fac7b692d0b->enter($__internal_03c641fd3d3fd9baa73fee61d5af2925d21ddcca2c9b9331e6288fac7b692d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show_content_client_profile.html.twig"));

        // line 2
        echo "
<div class=\"span4\">
    <h4>Mes informations                     ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "
        client</h4>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo "</p>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 7, $this->getSourceContext()); })()), "html", null, true);
        echo "</p>
    <br />
    <button class=\"btn btn-primary\">Modifier</button>
    </form>
ggg
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new Twig_Error_Runtime('Variable "client" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["clients"]) {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["clients"], "prenom", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clients'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>";
        
        $__internal_35258d785644acf275cdc7077fc268f0ba8b5d10600f83cfab6e1e2af768de17->leave($__internal_35258d785644acf275cdc7077fc268f0ba8b5d10600f83cfab6e1e2af768de17_prof);

        
        $__internal_03c641fd3d3fd9baa73fee61d5af2925d21ddcca2c9b9331e6288fac7b692d0b->leave($__internal_03c641fd3d3fd9baa73fee61d5af2925d21ddcca2c9b9331e6288fac7b692d0b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Profile:show_content_client_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  54 => 13,  50 => 12,  40 => 7,  34 => 6,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"span4\">
    <h4>Mes informations                     {{ client }}
        client</h4>
    <p>{{ 'profile.show.username'|trans }}: {{ client }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ client }}</p>
    <br />
    <button class=\"btn btn-primary\">Modifier</button>
    </form>
ggg
    {% for clients in client %}
        {{ clients.prenom }}
    {% endfor %}
</div>", "UserBundle:FOSUserBundle/views/Profile:show_content_client_profile.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Profile/show_content_client_profile.html.twig");
    }
}
