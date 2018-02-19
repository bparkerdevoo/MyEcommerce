<?php

/* SonataAdminBundle:Block:block_stats.html.twig */
class __TwigTemplate_b311172d30908e309c29844728f24473b09a0eb25a08e5cc48db3338808f8fef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 12, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d19e12c37b532ee37bccd798d2c974c481713c31c0fe02cd86ae7ce3343c4062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19e12c37b532ee37bccd798d2c974c481713c31c0fe02cd86ae7ce3343c4062->enter($__internal_d19e12c37b532ee37bccd798d2c974c481713c31c0fe02cd86ae7ce3343c4062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $__internal_604119615ae88af82eefa6f3eed0a6d27ddc2014eb12a507cdeb90684dade1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604119615ae88af82eefa6f3eed0a6d27ddc2014eb12a507cdeb90684dade1a8->enter($__internal_604119615ae88af82eefa6f3eed0a6d27ddc2014eb12a507cdeb90684dade1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        // line 14
        $context["translation_domain"] = (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "translation_domain", array(), "any", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "translation_domain", array())))) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["settings"] ?? null), "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 14, $this->getSourceContext()); })()), "translationDomain", array())));
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d19e12c37b532ee37bccd798d2c974c481713c31c0fe02cd86ae7ce3343c4062->leave($__internal_d19e12c37b532ee37bccd798d2c974c481713c31c0fe02cd86ae7ce3343c4062_prof);

        
        $__internal_604119615ae88af82eefa6f3eed0a6d27ddc2014eb12a507cdeb90684dade1a8->leave($__internal_604119615ae88af82eefa6f3eed0a6d27ddc2014eb12a507cdeb90684dade1a8_prof);

    }

    // line 16
    public function block_block($context, array $blocks = array())
    {
        $__internal_85d4180431da7a6002a5e9c778abe3e3e74364d4fd1b28204d41aa38c066dcc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d4180431da7a6002a5e9c778abe3e3e74364d4fd1b28204d41aa38c066dcc2->enter($__internal_85d4180431da7a6002a5e9c778abe3e3e74364d4fd1b28204d41aa38c066dcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_3bc2d896002e17812ca8c53375a7bdd8bbdc84c666d8bc70a161bb09aef2a771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc2d896002e17812ca8c53375a7bdd8bbdc84c666d8bc70a161bb09aef2a771->enter($__internal_3bc2d896002e17812ca8c53375a7bdd8bbdc84c666d8bc70a161bb09aef2a771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 17
        echo "    <!-- small box -->
    <div class=\"small-box ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 18, $this->getSourceContext()); })()), "color", array()), "html", null, true);
        echo "\">
        <div class=\"inner\">
            <h3>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new Twig_Error_Runtime('Variable "pager" does not exist.', 20, $this->getSourceContext()); })()), "count", array(), "method"), "html", null, true);
        echo "</h3>
            <p>
                ";
        // line 22
        if ((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 22, $this->getSourceContext()); })())) {
            // line 23
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 23, $this->getSourceContext()); })()), "text", array()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 23, $this->getSourceContext()); })())), "html", null, true);
            echo "
                ";
        } else {
            // line 25
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 25, $this->getSourceContext()); })()), "text", array()), "html", null, true);
            echo "
                ";
        }
        // line 27
        echo "            </p>
        </div>
        <div class=\"icon\">
            <i class=\"fa ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 30, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
        echo "\"></i>
        </div>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 32, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => array("filter" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 32, $this->getSourceContext()); })()), "filters", array()))), "method"), "html", null, true);
        echo "\" class=\"small-box-footer\">
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("stats_view_more", array(), "SonataAdminBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
";
        
        $__internal_3bc2d896002e17812ca8c53375a7bdd8bbdc84c666d8bc70a161bb09aef2a771->leave($__internal_3bc2d896002e17812ca8c53375a7bdd8bbdc84c666d8bc70a161bb09aef2a771_prof);

        
        $__internal_85d4180431da7a6002a5e9c778abe3e3e74364d4fd1b28204d41aa38c066dcc2->leave($__internal_85d4180431da7a6002a5e9c778abe3e3e74364d4fd1b28204d41aa38c066dcc2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  88 => 32,  83 => 30,  78 => 27,  72 => 25,  66 => 23,  64 => 22,  59 => 20,  54 => 18,  51 => 17,  42 => 16,  32 => 12,  30 => 14,  18 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends sonata_block.templates.block_base %}

{% set translation_domain = settings.translation_domain ?? admin.translationDomain %}

{% block block %}
    <!-- small box -->
    <div class=\"small-box {{ settings.color }}\">
        <div class=\"inner\">
            <h3>{{ pager.count() }}</h3>
            <p>
                {% if translation_domain %}
                    {{ settings.text|trans({}, translation_domain) }}
                {% else %}
                    {{ settings.text }}
                {% endif %}
            </p>
        </div>
        <div class=\"icon\">
            <i class=\"fa {{ settings.icon }}\"></i>
        </div>
        <a href=\"{{ admin.generateUrl('list', {filter: settings.filters}) }}\" class=\"small-box-footer\">
            {{ 'stats_view_more'|trans({}, 'SonataAdminBundle') }} <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_stats.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/Block/block_stats.html.twig");
    }
}
