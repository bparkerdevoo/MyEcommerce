<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_3110c045d8dfec5fce0b2bf6496d1ae40eb8eeb273b65ed4a1a6c9a3ede28b06 extends Twig_Template
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
        // line 11
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_block"]) || array_key_exists("sonata_block", $context) ? $context["sonata_block"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_block" does not exist.', 11, $this->getSourceContext()); })()), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_rss.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8be10a4368c0e56a836253ae919edf0932d52428840ede43e5888ea37ed373e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be10a4368c0e56a836253ae919edf0932d52428840ede43e5888ea37ed373e8->enter($__internal_8be10a4368c0e56a836253ae919edf0932d52428840ede43e5888ea37ed373e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $__internal_7978fc601aacb8733e0e359a1b1f426a48afbda43b687e818ca8d039504d9c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7978fc601aacb8733e0e359a1b1f426a48afbda43b687e818ca8d039504d9c7e->enter($__internal_7978fc601aacb8733e0e359a1b1f426a48afbda43b687e818ca8d039504d9c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8be10a4368c0e56a836253ae919edf0932d52428840ede43e5888ea37ed373e8->leave($__internal_8be10a4368c0e56a836253ae919edf0932d52428840ede43e5888ea37ed373e8_prof);

        
        $__internal_7978fc601aacb8733e0e359a1b1f426a48afbda43b687e818ca8d039504d9c7e->leave($__internal_7978fc601aacb8733e0e359a1b1f426a48afbda43b687e818ca8d039504d9c7e_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_9ea88dfbe1cd19b61780885bc5957cf1838a0623bfe83570575a0fd5c29ecbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea88dfbe1cd19b61780885bc5957cf1838a0623bfe83570575a0fd5c29ecbdf->enter($__internal_9ea88dfbe1cd19b61780885bc5957cf1838a0623bfe83570575a0fd5c29ecbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_ad97cd3af68b5448b1a5ce4c0ab426ca58b2d31c006c1e2e1fba71389396b896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad97cd3af68b5448b1a5ce4c0ab426ca58b2d31c006c1e2e1fba71389396b896->enter($__internal_ad97cd3af68b5448b1a5ce4c0ab426ca58b2d31c006c1e2e1fba71389396b896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <div class=\"panel panel-default ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 14, $this->getSourceContext()); })()), "class", array()), "html", null, true);
        echo "\">
        ";
        // line 15
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 15, $this->getSourceContext()); })()), "title", array()))) {
            // line 16
            echo "            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    ";
            // line 18
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 18, $this->getSourceContext()); })()), "icon", array())) {
                // line 19
                echo "                        <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 19, $this->getSourceContext()); })()), "icon", array()), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                    ";
            }
            // line 21
            echo "                    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 21, $this->getSourceContext()); })()), "translation_domain", array())) {
                // line 22
                echo "                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 22, $this->getSourceContext()); })()), "title", array()), array(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 22, $this->getSourceContext()); })()), "translation_domain", array())), "html", null, true);
                echo "
                    ";
            } else {
                // line 24
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new Twig_Error_Runtime('Variable "settings" does not exist.', 24, $this->getSourceContext()); })()), "title", array()), "html", null, true);
                echo "
                    ";
            }
            // line 26
            echo "                </h4>
            </div>
        ";
        }
        // line 29
        echo "
        <div class=\"panel-body\">
            <div class=\"media\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) || array_key_exists("feeds", $context) ? $context["feeds"] : (function () { throw new Twig_Error_Runtime('Variable "feeds" does not exist.', 32, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 33
            echo "                    <div class=\"media-body\">
                        <h5 class=\"media-heading\">
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "title", array()), "html", null, true);
            echo "</a>
                        </h5>
                        ";
            // line 37
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["feed"], "description", array());
            echo "
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                    No feeds available.
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_ad97cd3af68b5448b1a5ce4c0ab426ca58b2d31c006c1e2e1fba71389396b896->leave($__internal_ad97cd3af68b5448b1a5ce4c0ab426ca58b2d31c006c1e2e1fba71389396b896_prof);

        
        $__internal_9ea88dfbe1cd19b61780885bc5957cf1838a0623bfe83570575a0fd5c29ecbdf->leave($__internal_9ea88dfbe1cd19b61780885bc5957cf1838a0623bfe83570575a0fd5c29ecbdf_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  118 => 40,  110 => 37,  101 => 35,  97 => 33,  92 => 32,  87 => 29,  82 => 26,  76 => 24,  70 => 22,  67 => 21,  61 => 19,  59 => 18,  55 => 16,  53 => 15,  48 => 14,  39 => 13,  18 => 11,);
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

{% block block %}
    <div class=\"panel panel-default {{ settings.class }}\">
        {% if settings.title is not empty %}
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    {% if settings.icon %}
                        <i class=\"{{ settings.icon }}\" aria-hidden=\"true\"></i>
                    {% endif %}
                    {% if settings.translation_domain %}
                        {{ settings.title|trans({}, settings.translation_domain) }}
                    {% else %}
                        {{ settings.title }}
                    {% endif %}
                </h4>
            </div>
        {% endif %}

        <div class=\"panel-body\">
            <div class=\"media\">
                {% for feed in feeds %}
                    <div class=\"media-body\">
                        <h5 class=\"media-heading\">
                            <a href=\"{{ feed.link }}\" rel=\"nofollow\" title=\"{{ feed.title }}\">{{ feed.title }}</a>
                        </h5>
                        {{ feed.description|raw }}
                    </div>
                {% else %}
                    No feeds available.
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_core_rss.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/block-bundle/src/Resources/views/Block/block_core_rss.html.twig");
    }
}
