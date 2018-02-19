<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_d3305a67900a719825a742943221812b5210c2487ab82981140b56f03c4ef51c extends Twig_Template
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
        $__internal_90e4cd87fe2a592a1a9988f0a1fdc69d0b3e8e4f34556e8b0c0140b6633644c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e4cd87fe2a592a1a9988f0a1fdc69d0b3e8e4f34556e8b0c0140b6633644c3->enter($__internal_90e4cd87fe2a592a1a9988f0a1fdc69d0b3e8e4f34556e8b0c0140b6633644c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_575ff4ca0ab000d396453f63b332b3f5e5106e5604386f9f3d145c685c53c1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_575ff4ca0ab000d396453f63b332b3f5e5106e5604386f9f3d145c685c53c1e2->enter($__internal_575ff4ca0ab000d396453f63b332b3f5e5106e5604386f9f3d145c685c53c1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_90e4cd87fe2a592a1a9988f0a1fdc69d0b3e8e4f34556e8b0c0140b6633644c3->leave($__internal_90e4cd87fe2a592a1a9988f0a1fdc69d0b3e8e4f34556e8b0c0140b6633644c3_prof);

        
        $__internal_575ff4ca0ab000d396453f63b332b3f5e5106e5604386f9f3d145c685c53c1e2->leave($__internal_575ff4ca0ab000d396453f63b332b3f5e5106e5604386f9f3d145c685c53c1e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}
