<?php

/* UserBundle:FOSUserBundle/views/Group:list_content.html.twig */
class __TwigTemplate_7236796275b4003222f8d53556e45dd142398dff17a49a519b8a5b161e76a300 extends Twig_Template
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
        $__internal_7518cda97bb06d311efc5fe1f2e92690c6ac4a46fb7def30e9232e705d9d6dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7518cda97bb06d311efc5fe1f2e92690c6ac4a46fb7def30e9232e705d9d6dcc->enter($__internal_7518cda97bb06d311efc5fe1f2e92690c6ac4a46fb7def30e9232e705d9d6dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:list_content.html.twig"));

        $__internal_6d251f24681836033a7a09000a27d04f6fc96d70827ac0bf3e0974101086641c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d251f24681836033a7a09000a27d04f6fc96d70827ac0bf3e0974101086641c->enter($__internal_6d251f24681836033a7a09000a27d04f6fc96d70827ac0bf3e0974101086641c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:list_content.html.twig"));

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
        
        $__internal_7518cda97bb06d311efc5fe1f2e92690c6ac4a46fb7def30e9232e705d9d6dcc->leave($__internal_7518cda97bb06d311efc5fe1f2e92690c6ac4a46fb7def30e9232e705d9d6dcc_prof);

        
        $__internal_6d251f24681836033a7a09000a27d04f6fc96d70827ac0bf3e0974101086641c->leave($__internal_6d251f24681836033a7a09000a27d04f6fc96d70827ac0bf3e0974101086641c_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Group:list_content.html.twig";
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
", "UserBundle:FOSUserBundle/views/Group:list_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
