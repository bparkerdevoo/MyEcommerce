<?php

/* UserBundle:FOSUserBundle/views/Profile:show_content_client.html.twig */
class __TwigTemplate_a6aea61c45dd51884a6dda65617609573358604ea622694645745af689a45f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'client_content' => array($this, 'block_client_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84b37053c324a3babac81d41e579e7d17d006eb692be8c743bc74754af2129ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b37053c324a3babac81d41e579e7d17d006eb692be8c743bc74754af2129ec->enter($__internal_84b37053c324a3babac81d41e579e7d17d006eb692be8c743bc74754af2129ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show_content_client.html.twig"));

        $__internal_df0f6504c5d2cb78bcd2971e4779683890832bc520e38739187cca33e496e5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0f6504c5d2cb78bcd2971e4779683890832bc520e38739187cca33e496e5b9->enter($__internal_df0f6504c5d2cb78bcd2971e4779683890832bc520e38739187cca33e496e5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show_content_client.html.twig"));

        // line 2
        echo "
<div class=\"row\">
<div class=\"span3\">
    ";
        // line 5
        $this->loadTemplate("UserBundle:nav_inc:utilisateursConnecte.html.twig", "UserBundle:FOSUserBundle/views/Profile:show_content_client.html.twig", 5)->display($context);
        // line 6
        echo "</div>
    <div class=\"span9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">



                ";
        // line 14
        $this->displayBlock('client_content', $context, $blocks);
        // line 17
        echo "            </div>
        </div>
    </div>
</div>


<div class=\"fos_user_user_show\">

</div>
";
        
        $__internal_84b37053c324a3babac81d41e579e7d17d006eb692be8c743bc74754af2129ec->leave($__internal_84b37053c324a3babac81d41e579e7d17d006eb692be8c743bc74754af2129ec_prof);

        
        $__internal_df0f6504c5d2cb78bcd2971e4779683890832bc520e38739187cca33e496e5b9->leave($__internal_df0f6504c5d2cb78bcd2971e4779683890832bc520e38739187cca33e496e5b9_prof);

    }

    // line 14
    public function block_client_content($context, array $blocks = array())
    {
        $__internal_7aeac1b2f9ab4569eccb02c6fabea4d364922f655c064e50faab5bcb218d96df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aeac1b2f9ab4569eccb02c6fabea4d364922f655c064e50faab5bcb218d96df->enter($__internal_7aeac1b2f9ab4569eccb02c6fabea4d364922f655c064e50faab5bcb218d96df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client_content"));

        $__internal_7efa37a6edd2afa5ec5c0461530a26076afecf160904a64c3f65deebeff83998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7efa37a6edd2afa5ec5c0461530a26076afecf160904a64c3f65deebeff83998->enter($__internal_7efa37a6edd2afa5ec5c0461530a26076afecf160904a64c3f65deebeff83998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "client_content"));

        // line 15
        echo "                    ";
        $this->loadTemplate("FOSUserBundle:Profile:show_content_client_profile.html.twig", "UserBundle:FOSUserBundle/views/Profile:show_content_client.html.twig", 15)->display($context);
        // line 16
        echo "                ";
        
        $__internal_7efa37a6edd2afa5ec5c0461530a26076afecf160904a64c3f65deebeff83998->leave($__internal_7efa37a6edd2afa5ec5c0461530a26076afecf160904a64c3f65deebeff83998_prof);

        
        $__internal_7aeac1b2f9ab4569eccb02c6fabea4d364922f655c064e50faab5bcb218d96df->leave($__internal_7aeac1b2f9ab4569eccb02c6fabea4d364922f655c064e50faab5bcb218d96df_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Profile:show_content_client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  73 => 15,  64 => 14,  45 => 17,  43 => 14,  33 => 6,  31 => 5,  26 => 2,);
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



                {% block client_content %}
                    {% include \"FOSUserBundle:Profile:show_content_client_profile.html.twig\" %}
                {% endblock client_content %}
            </div>
        </div>
    </div>
</div>


<div class=\"fos_user_user_show\">

</div>
", "UserBundle:FOSUserBundle/views/Profile:show_content_client.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Profile/show_content_client.html.twig");
    }
}
