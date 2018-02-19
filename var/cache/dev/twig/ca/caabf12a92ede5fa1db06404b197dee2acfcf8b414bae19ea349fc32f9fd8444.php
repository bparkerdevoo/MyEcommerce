<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_199af7940a747cab3bb25b73d3fe485eb0adecedc0d6ec18c17d5629a09532d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_658dc1bdad8482e677649ccfa90621aa38f6a8937c15979e9c03d98fbb0a17e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658dc1bdad8482e677649ccfa90621aa38f6a8937c15979e9c03d98fbb0a17e2->enter($__internal_658dc1bdad8482e677649ccfa90621aa38f6a8937c15979e9c03d98fbb0a17e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_9f6a58245b2ecda54c72f634521780e2f5d8de56b636c70c11bdbe675ea77644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6a58245b2ecda54c72f634521780e2f5d8de56b636c70c11bdbe675ea77644->enter($__internal_9f6a58245b2ecda54c72f634521780e2f5d8de56b636c70c11bdbe675ea77644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_658dc1bdad8482e677649ccfa90621aa38f6a8937c15979e9c03d98fbb0a17e2->leave($__internal_658dc1bdad8482e677649ccfa90621aa38f6a8937c15979e9c03d98fbb0a17e2_prof);

        
        $__internal_9f6a58245b2ecda54c72f634521780e2f5d8de56b636c70c11bdbe675ea77644->leave($__internal_9f6a58245b2ecda54c72f634521780e2f5d8de56b636c70c11bdbe675ea77644_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_cff7b9fac71c2290ba70428b7705cfd959a7136cd54a36ea7d110518da03dd96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff7b9fac71c2290ba70428b7705cfd959a7136cd54a36ea7d110518da03dd96->enter($__internal_cff7b9fac71c2290ba70428b7705cfd959a7136cd54a36ea7d110518da03dd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_16441333fc3e615bbcf526a306799319f3c115fb395017e50540054cc6f3870e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16441333fc3e615bbcf526a306799319f3c115fb395017e50540054cc6f3870e->enter($__internal_16441333fc3e615bbcf526a306799319f3c115fb395017e50540054cc6f3870e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 13, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_16441333fc3e615bbcf526a306799319f3c115fb395017e50540054cc6f3870e->leave($__internal_16441333fc3e615bbcf526a306799319f3c115fb395017e50540054cc6f3870e_prof);

        
        $__internal_cff7b9fac71c2290ba70428b7705cfd959a7136cd54a36ea7d110518da03dd96->leave($__internal_cff7b9fac71c2290ba70428b7705cfd959a7136cd54a36ea7d110518da03dd96_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_8d2af4db69f47fd9b95606106a722a41e861f74761843b0e57916a75833401a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d2af4db69f47fd9b95606106a722a41e861f74761843b0e57916a75833401a2->enter($__internal_8d2af4db69f47fd9b95606106a722a41e861f74761843b0e57916a75833401a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_5650307c4d9db015356a177347d40f646378418105d560038d205fc51cb4f547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5650307c4d9db015356a177347d40f646378418105d560038d205fc51cb4f547->enter($__internal_5650307c4d9db015356a177347d40f646378418105d560038d205fc51cb4f547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_5650307c4d9db015356a177347d40f646378418105d560038d205fc51cb4f547->leave($__internal_5650307c4d9db015356a177347d40f646378418105d560038d205fc51cb4f547_prof);

        
        $__internal_8d2af4db69f47fd9b95606106a722a41e861f74761843b0e57916a75833401a2->leave($__internal_8d2af4db69f47fd9b95606106a722a41e861f74761843b0e57916a75833401a2_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_3c80558bd0ea24d8347900fe314efe947d228d04eb0863bd6b8190a2de6ade8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c80558bd0ea24d8347900fe314efe947d228d04eb0863bd6b8190a2de6ade8f->enter($__internal_3c80558bd0ea24d8347900fe314efe947d228d04eb0863bd6b8190a2de6ade8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_e8c0bb33c1e1bdf6a9fe0cf1eb32600923e4bc622c0c82428632226887471c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c0bb33c1e1bdf6a9fe0cf1eb32600923e4bc622c0c82428632226887471c30->enter($__internal_e8c0bb33c1e1bdf6a9fe0cf1eb32600923e4bc622c0c82428632226887471c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 23, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 24, $this->getSourceContext()); })()), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 25, $this->getSourceContext()); })()), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 26, $this->getSourceContext()); })()), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 26, $this->getSourceContext()); })()), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 26, $this->getSourceContext()); })()), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_e8c0bb33c1e1bdf6a9fe0cf1eb32600923e4bc622c0c82428632226887471c30->leave($__internal_e8c0bb33c1e1bdf6a9fe0cf1eb32600923e4bc622c0c82428632226887471c30_prof);

        
        $__internal_3c80558bd0ea24d8347900fe314efe947d228d04eb0863bd6b8190a2de6ade8f->leave($__internal_3c80558bd0ea24d8347900fe314efe947d228d04eb0863bd6b8190a2de6ade8f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/Pager/base_results.html.twig");
    }
}
