<?php

/* SonataAdminBundle:Block:block_rss_dashboard.html.twig */
class __TwigTemplate_297aa27ed4367f438c2aebdacab0895fb0c69344a0432ebcbe104573847cb50d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("@SonataBlock/Block/block_core_rss.html.twig", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SonataBlock/Block/block_core_rss.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a689ac2cc006bc6e4f616f738624ccbca8640e849bfc24afca208c4a9d4dc6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a689ac2cc006bc6e4f616f738624ccbca8640e849bfc24afca208c4a9d4dc6a->enter($__internal_8a689ac2cc006bc6e4f616f738624ccbca8640e849bfc24afca208c4a9d4dc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $__internal_ec363450e97c27eea1040869ee1d8959e4fa5dc77ca3902604267b12fd24490a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec363450e97c27eea1040869ee1d8959e4fa5dc77ca3902604267b12fd24490a->enter($__internal_ec363450e97c27eea1040869ee1d8959e4fa5dc77ca3902604267b12fd24490a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a689ac2cc006bc6e4f616f738624ccbca8640e849bfc24afca208c4a9d4dc6a->leave($__internal_8a689ac2cc006bc6e4f616f738624ccbca8640e849bfc24afca208c4a9d4dc6a_prof);

        
        $__internal_ec363450e97c27eea1040869ee1d8959e4fa5dc77ca3902604267b12fd24490a->leave($__internal_ec363450e97c27eea1040869ee1d8959e4fa5dc77ca3902604267b12fd24490a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2748543e8bc10019fb2ecdf2e38c47e838a18f5e783e934a2b6c2d5a944cf11a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2748543e8bc10019fb2ecdf2e38c47e838a18f5e783e934a2b6c2d5a944cf11a->enter($__internal_2748543e8bc10019fb2ecdf2e38c47e838a18f5e783e934a2b6c2d5a944cf11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_d559ec9190595170c8a7823d9ddd41d06f6fdadc0ad9c94bfaeb955f46860c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d559ec9190595170c8a7823d9ddd41d06f6fdadc0ad9c94bfaeb955f46860c2b->enter($__internal_d559ec9190595170c8a7823d9ddd41d06f6fdadc0ad9c94bfaeb955f46860c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 17, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) || array_key_exists("feeds", $context) ? $context["feeds"] : (function () { throw new Twig_Error_Runtime('Variable "feeds" does not exist.', 21, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "                <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "title", array()), "html", null, true);
            echo "\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "title", array()), "html", null, true);
            echo "</strong>
                    <div>";
            // line 24
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "description", array());
            echo "</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <div class=\"list-group-item\">No feeds available.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_d559ec9190595170c8a7823d9ddd41d06f6fdadc0ad9c94bfaeb955f46860c2b->leave($__internal_d559ec9190595170c8a7823d9ddd41d06f6fdadc0ad9c94bfaeb955f46860c2b_prof);

        
        $__internal_2748543e8bc10019fb2ecdf2e38c47e838a18f5e783e934a2b6c2d5a944cf11a->leave($__internal_2748543e8bc10019fb2ecdf2e38c47e838a18f5e783e934a2b6c2d5a944cf11a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_rss_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  84 => 27,  76 => 24,  72 => 23,  65 => 22,  60 => 21,  53 => 17,  49 => 15,  40 => 14,  11 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends \"@SonataBlock/Block/block_core_rss.html.twig\" %}

{% block block %}
    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ settings.title }}</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            {% for feed in feeds %}
                <a class=\"list-group-item\" href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">
                    <strong>{{ feed.title }}</strong>
                    <div>{{ feed.description|raw }}</div>
                </a>
            {% else %}
                <div class=\"list-group-item\">No feeds available.</div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/Block/block_rss_dashboard.html.twig");
    }
}
