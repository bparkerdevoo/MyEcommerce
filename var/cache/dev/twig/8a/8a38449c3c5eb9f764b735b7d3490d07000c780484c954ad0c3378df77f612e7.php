<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_68a20a3ea16132ede19fe037cd1adb5169465c8e2b808f2978f766723b530bdb extends Twig_Template
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
        $__internal_84643678793a59e1e40cd9e5e15b1403719d73896ebcd9e7fa42390863f8aea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84643678793a59e1e40cd9e5e15b1403719d73896ebcd9e7fa42390863f8aea3->enter($__internal_84643678793a59e1e40cd9e5e15b1403719d73896ebcd9e7fa42390863f8aea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_a928d496b382a8eef4576a4c981f8ae2da061f0e3ddef36d04d12bc16a671984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a928d496b382a8eef4576a4c981f8ae2da061f0e3ddef36d04d12bc16a671984->enter($__internal_a928d496b382a8eef4576a4c981f8ae2da061f0e3ddef36d04d12bc16a671984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_84643678793a59e1e40cd9e5e15b1403719d73896ebcd9e7fa42390863f8aea3->leave($__internal_84643678793a59e1e40cd9e5e15b1403719d73896ebcd9e7fa42390863f8aea3_prof);

        
        $__internal_a928d496b382a8eef4576a4c981f8ae2da061f0e3ddef36d04d12bc16a671984->leave($__internal_a928d496b382a8eef4576a4c981f8ae2da061f0e3ddef36d04d12bc16a671984_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
