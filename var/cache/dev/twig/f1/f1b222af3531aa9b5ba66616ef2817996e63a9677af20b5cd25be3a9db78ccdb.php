<?php

/* UserBundle:FOSUserBundle/views/Profile:show_content.html.twig */
class __TwigTemplate_ce2b8b86fabfb9ce97663d6b4a040605d06ec98272898227d4f78a76012ad52a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92a0eeed5a6dc9687383cf50e8662b34c8d633142778c8e61fcf000dc76fea34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92a0eeed5a6dc9687383cf50e8662b34c8d633142778c8e61fcf000dc76fea34->enter($__internal_92a0eeed5a6dc9687383cf50e8662b34c8d633142778c8e61fcf000dc76fea34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show_content.html.twig"));

        $__internal_32c12af01e336b733f4c455e66f41a576936cf6c6b35dfa1a296cfb7fee20c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c12af01e336b733f4c455e66f41a576936cf6c6b35dfa1a296cfb7fee20c25->enter($__internal_32c12af01e336b733f4c455e66f41a576936cf6c6b35dfa1a296cfb7fee20c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
<div class=\"span3\">
    ";
        // line 5
        $this->loadTemplate("UserBundle:nav_inc:utilisateursConnecte.html.twig", "UserBundle:FOSUserBundle/views/Profile:show_content.html.twig", 5)->display($context);
        // line 6
        echo "</div>
    <div class=\"span9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                ";
        // line 12
        $this->displayBlock('user_content', $context, $blocks);
        // line 15
        echo "

            </div>
        </div>
    </div>
</div>


<div class=\"fos_user_user_show\">

</div>
";
        
        $__internal_92a0eeed5a6dc9687383cf50e8662b34c8d633142778c8e61fcf000dc76fea34->leave($__internal_92a0eeed5a6dc9687383cf50e8662b34c8d633142778c8e61fcf000dc76fea34_prof);

        
        $__internal_32c12af01e336b733f4c455e66f41a576936cf6c6b35dfa1a296cfb7fee20c25->leave($__internal_32c12af01e336b733f4c455e66f41a576936cf6c6b35dfa1a296cfb7fee20c25_prof);

    }

    // line 12
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_b94177ce180d0f6fd6923cd7c054e46bb7ff749c62c8ac2f65dae3814173a88a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b94177ce180d0f6fd6923cd7c054e46bb7ff749c62c8ac2f65dae3814173a88a->enter($__internal_b94177ce180d0f6fd6923cd7c054e46bb7ff749c62c8ac2f65dae3814173a88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        $__internal_affcb256abf40aa6e682dcc4c3a82d26f3984321e12e4cde72b608f1cb1e5a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affcb256abf40aa6e682dcc4c3a82d26f3984321e12e4cde72b608f1cb1e5a99->enter($__internal_affcb256abf40aa6e682dcc4c3a82d26f3984321e12e4cde72b608f1cb1e5a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        // line 13
        echo "                    ";
        $this->loadTemplate("FOSUserBundle:Profile:show_content_user_profile.html.twig", "UserBundle:FOSUserBundle/views/Profile:show_content.html.twig", 13)->display($context);
        // line 14
        echo "                ";
        
        $__internal_affcb256abf40aa6e682dcc4c3a82d26f3984321e12e4cde72b608f1cb1e5a99->leave($__internal_affcb256abf40aa6e682dcc4c3a82d26f3984321e12e4cde72b608f1cb1e5a99_prof);

        
        $__internal_b94177ce180d0f6fd6923cd7c054e46bb7ff749c62c8ac2f65dae3814173a88a->leave($__internal_b94177ce180d0f6fd6923cd7c054e46bb7ff749c62c8ac2f65dae3814173a88a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  73 => 13,  64 => 12,  43 => 15,  41 => 12,  33 => 6,  31 => 5,  26 => 2,);
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

                {% block user_content %}
                    {% include \"FOSUserBundle:Profile:show_content_user_profile.html.twig\" %}
                {% endblock user_content %}


            </div>
        </div>
    </div>
</div>


<div class=\"fos_user_user_show\">

</div>
", "UserBundle:FOSUserBundle/views/Profile:show_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
