<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_faef478adfe6f987d7039f25aa9e506644f39dfe4efc7b9822404d9ab99b85bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:Core:search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3efcd1ff0fd642052062efb5422040a1c26defb0205f3daaf13ff9e2597bbafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3efcd1ff0fd642052062efb5422040a1c26defb0205f3daaf13ff9e2597bbafd->enter($__internal_3efcd1ff0fd642052062efb5422040a1c26defb0205f3daaf13ff9e2597bbafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $__internal_7c51637631635d9dd3624e8130be7d4bbe8825f4d9fb33311297937759260b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c51637631635d9dd3624e8130be7d4bbe8825f4d9fb33311297937759260b3e->enter($__internal_7c51637631635d9dd3624e8130be7d4bbe8825f4d9fb33311297937759260b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3efcd1ff0fd642052062efb5422040a1c26defb0205f3daaf13ff9e2597bbafd->leave($__internal_3efcd1ff0fd642052062efb5422040a1c26defb0205f3daaf13ff9e2597bbafd_prof);

        
        $__internal_7c51637631635d9dd3624e8130be7d4bbe8825f4d9fb33311297937759260b3e->leave($__internal_7c51637631635d9dd3624e8130be7d4bbe8825f4d9fb33311297937759260b3e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_8705d5773a3e25294a759bec93429093707664a746b0c601d5f6e11c0b1a4517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8705d5773a3e25294a759bec93429093707664a746b0c601d5f6e11c0b1a4517->enter($__internal_8705d5773a3e25294a759bec93429093707664a746b0c601d5f6e11c0b1a4517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15d796eb3059d58e6a040fc5e14bea0b53442aa7ada4f9c95a4dfa19342ebca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d796eb3059d58e6a040fc5e14bea0b53442aa7ada4f9c95a4dfa19342ebca3->enter($__internal_15d796eb3059d58e6a040fc5e14bea0b53442aa7ada4f9c95a4dfa19342ebca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 14, $this->getSourceContext()); })())), "SonataAdminBundle"), "html", null, true);
        
        $__internal_15d796eb3059d58e6a040fc5e14bea0b53442aa7ada4f9c95a4dfa19342ebca3->leave($__internal_15d796eb3059d58e6a040fc5e14bea0b53442aa7ada4f9c95a4dfa19342ebca3_prof);

        
        $__internal_8705d5773a3e25294a759bec93429093707664a746b0c601d5f6e11c0b1a4517->leave($__internal_8705d5773a3e25294a759bec93429093707664a746b0c601d5f6e11c0b1a4517_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_800f19d5dc871925df1499680ac4b652850287be6b7b0aece8015ba2697bfa6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800f19d5dc871925df1499680ac4b652850287be6b7b0aece8015ba2697bfa6f->enter($__internal_800f19d5dc871925df1499680ac4b652850287be6b7b0aece8015ba2697bfa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_f978aaccdf596bdb7a8172059535611ba4f5bfc948c3486160791266bac54ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f978aaccdf596bdb7a8172059535611ba4f5bfc948c3486160791266bac54ee8->enter($__internal_f978aaccdf596bdb7a8172059535611ba4f5bfc948c3486160791266bac54ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_f978aaccdf596bdb7a8172059535611ba4f5bfc948c3486160791266bac54ee8->leave($__internal_f978aaccdf596bdb7a8172059535611ba4f5bfc948c3486160791266bac54ee8_prof);

        
        $__internal_800f19d5dc871925df1499680ac4b652850287be6b7b0aece8015ba2697bfa6f->leave($__internal_800f19d5dc871925df1499680ac4b652850287be6b7b0aece8015ba2697bfa6f_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a1b25c4e80c544dd10242aac634c63a7d63b5a7e79774e5e459b5389ffc58c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1b25c4e80c544dd10242aac634c63a7d63b5a7e79774e5e459b5389ffc58c8->enter($__internal_3a1b25c4e80c544dd10242aac634c63a7d63b5a7e79774e5e459b5389ffc58c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_893c1804770c2cdff25fe2be59bdd01e50b9276b34d494795d9ecd07244a7688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893c1804770c2cdff25fe2be59bdd01e50b9276b34d494795d9ecd07244a7688->enter($__internal_893c1804770c2cdff25fe2be59bdd01e50b9276b34d494795d9ecd07244a7688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 17, $this->getSourceContext()); })())), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 19, $this->getSourceContext()); })()) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 22, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "            ";
                $context["display"] = (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 23, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "role_super_admin"), "method")));
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 24, $this->getSourceContext()); })())) {
                        // line 25
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 26
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "
            ";
                // line 28
                if ((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 28, $this->getSourceContext()); })())) {
                    // line 29
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 30
                        echo "                    ";
                        $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new Twig_Error_Runtime('Variable "count" does not exist.', 30, $this->getSourceContext()); })()) + 1);
                        // line 31
                        echo "                    ";
                        if (((twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasRoute", array(0 => "create"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasAccess", array(0 => "create"), "method")) || (twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasRoute", array(0 => "list"), "method") && twig_get_attribute($this->env, $this->getSourceContext(), $context["admin"], "hasAccess", array(0 => "list"), "method")))) {
                            // line 32
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 35
(isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 35, $this->getSourceContext()); })()), "admin_code" => twig_get_attribute($this->env, $this->getSourceContext(),                             // line 36
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => twig_get_attribute($this->env, $this->getSourceContext(),                             // line 39
$context["group"], "icon", array()))));
                            // line 40
                            echo "
                    ";
                        }
                        // line 42
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "            ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </div>
    ";
        }
        // line 47
        echo "
";
        
        $__internal_893c1804770c2cdff25fe2be59bdd01e50b9276b34d494795d9ecd07244a7688->leave($__internal_893c1804770c2cdff25fe2be59bdd01e50b9276b34d494795d9ecd07244a7688_prof);

        
        $__internal_3a1b25c4e80c544dd10242aac634c63a7d63b5a7e79774e5e459b5389ffc58c8->leave($__internal_3a1b25c4e80c544dd10242aac634c63a7d63b5a7e79774e5e459b5389ffc58c8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 47,  163 => 45,  157 => 44,  154 => 43,  148 => 42,  144 => 40,  142 => 39,  141 => 36,  140 => 35,  138 => 32,  135 => 31,  132 => 30,  127 => 29,  125 => 28,  122 => 27,  115 => 26,  112 => 25,  106 => 24,  103 => 23,  99 => 22,  96 => 21,  93 => 20,  91 => 19,  85 => 17,  76 => 16,  59 => 15,  41 => 14,  20 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}
    <h2 class=\"page-header\">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>

    {% if query is defined and query is not same as(false) %}
        {% set count = 0 %}
        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        {% for group in groups %}
            {% set display = (group.roles is empty or is_granted(sonata_admin.adminPool.getOption('role_super_admin')) ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}
                {% for admin in group.items %}
                    {% set count = count + 1 %}
                    {% if admin.hasRoute('create') and admin.hasAccess('create') or admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ sonata_block_render({
                            'type': 'sonata.admin.block.search_result'
                        }, {
                            'query': query,
                            'admin_code': admin.code,
                            'page': 0,
                            'per_page': 10,
                            'icon': group.icon
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endblock %}
", "SonataAdminBundle:Core:search.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/Core/search.html.twig");
    }
}
