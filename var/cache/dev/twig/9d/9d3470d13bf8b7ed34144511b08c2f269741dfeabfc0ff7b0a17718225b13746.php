<?php

/* SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig */
class __TwigTemplate_edadf445785b85bf757b2ec299a1f7b75c9b24a68cba4297adbacabd950ae955 extends Twig_Template
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
        $__internal_de9ae321eab97ae9bdc10124a444b1b228bb2fe4530642136b9a9de5979e1eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9ae321eab97ae9bdc10124a444b1b228bb2fe4530642136b9a9de5979e1eb1->enter($__internal_de9ae321eab97ae9bdc10124a444b1b228bb2fe4530642136b9a9de5979e1eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        $__internal_c535fbe3090ca55f1625faf1657cf2b351af1e72f1e419f27fe0e9f2524c4983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c535fbe3090ca55f1625faf1657cf2b351af1e72f1e419f27fe0e9f2524c4983->enter($__internal_c535fbe3090ca55f1625faf1657cf2b351af1e72f1e419f27fe0e9f2524c4983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 2
            echo "    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_de9ae321eab97ae9bdc10124a444b1b228bb2fe4530642136b9a9de5979e1eb1->leave($__internal_de9ae321eab97ae9bdc10124a444b1b228bb2fe4530642136b9a9de5979e1eb1_prof);

        
        $__internal_c535fbe3090ca55f1625faf1657cf2b351af1e72f1e419f27fe0e9f2524c4983->leave($__internal_c535fbe3090ca55f1625faf1657cf2b351af1e72f1e419f27fe0e9f2524c4983_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for error in form.vars.errors %}
    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        {{ error.message }}
    </div>
{% endfor %}
", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/Helper/render_form_dismissable_errors.html.twig");
    }
}
