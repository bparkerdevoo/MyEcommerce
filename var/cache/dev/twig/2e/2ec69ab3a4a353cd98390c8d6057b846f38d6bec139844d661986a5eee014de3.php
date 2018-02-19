<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_1002c4d7416b335aca883b0462fd30c4bd4f30b8b8861a8c26d82ad147e085cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_ab54927da8736165994bafab0ec270fbd3c72fcd561b1775601df2abd4994fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab54927da8736165994bafab0ec270fbd3c72fcd561b1775601df2abd4994fad->enter($__internal_ab54927da8736165994bafab0ec270fbd3c72fcd561b1775601df2abd4994fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_7d979519f8b9a6cb220c28e67a514d3859ceb76612f396efeb48fb17e57bbb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d979519f8b9a6cb220c28e67a514d3859ceb76612f396efeb48fb17e57bbb5f->enter($__internal_7d979519f8b9a6cb220c28e67a514d3859ceb76612f396efeb48fb17e57bbb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab54927da8736165994bafab0ec270fbd3c72fcd561b1775601df2abd4994fad->leave($__internal_ab54927da8736165994bafab0ec270fbd3c72fcd561b1775601df2abd4994fad_prof);

        
        $__internal_7d979519f8b9a6cb220c28e67a514d3859ceb76612f396efeb48fb17e57bbb5f->leave($__internal_7d979519f8b9a6cb220c28e67a514d3859ceb76612f396efeb48fb17e57bbb5f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7d7b2d52b2261cffc4135f7f2548220dadf0d5637decaf8c351b55f5256e038e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7b2d52b2261cffc4135f7f2548220dadf0d5637decaf8c351b55f5256e038e->enter($__internal_7d7b2d52b2261cffc4135f7f2548220dadf0d5637decaf8c351b55f5256e038e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_119fd949191ce365bea8daea48b228611e93a02b57023828de0fcd6c5d51777d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119fd949191ce365bea8daea48b228611e93a02b57023828de0fcd6c5d51777d->enter($__internal_119fd949191ce365bea8daea48b228611e93a02b57023828de0fcd6c5d51777d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_119fd949191ce365bea8daea48b228611e93a02b57023828de0fcd6c5d51777d->leave($__internal_119fd949191ce365bea8daea48b228611e93a02b57023828de0fcd6c5d51777d_prof);

        
        $__internal_7d7b2d52b2261cffc4135f7f2548220dadf0d5637decaf8c351b55f5256e038e->leave($__internal_7d7b2d52b2261cffc4135f7f2548220dadf0d5637decaf8c351b55f5256e038e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
