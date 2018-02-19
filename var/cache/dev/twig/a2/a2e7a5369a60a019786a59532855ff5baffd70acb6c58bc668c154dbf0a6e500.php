<?php

/* UserBundle:FOSUserBundle/views:layout.html.twig */
class __TwigTemplate_f8391ad9d10b328d2c472cbc0793d88fd0d9666a3f920d41ef58a676eb056723 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout.html.twig", "UserBundle:FOSUserBundle/views:layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56251c1a905005eefac543bf82a09552a074f921cbaf2b32d1550828d42a2b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56251c1a905005eefac543bf82a09552a074f921cbaf2b32d1550828d42a2b20->enter($__internal_56251c1a905005eefac543bf82a09552a074f921cbaf2b32d1550828d42a2b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views:layout.html.twig"));

        $__internal_4371340da7c4a63700fc603e5aafb3df53dd3e675008679c6fe5e8c2952da279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4371340da7c4a63700fc603e5aafb3df53dd3e675008679c6fe5e8c2952da279->enter($__internal_4371340da7c4a63700fc603e5aafb3df53dd3e675008679c6fe5e8c2952da279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56251c1a905005eefac543bf82a09552a074f921cbaf2b32d1550828d42a2b20->leave($__internal_56251c1a905005eefac543bf82a09552a074f921cbaf2b32d1550828d42a2b20_prof);

        
        $__internal_4371340da7c4a63700fc603e5aafb3df53dd3e675008679c6fe5e8c2952da279->leave($__internal_4371340da7c4a63700fc603e5aafb3df53dd3e675008679c6fe5e8c2952da279_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9bcb3e5cafa127ed6ebc4b3043034353fb98cc3517d0ebcf9b7f003e125e8a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9bcb3e5cafa127ed6ebc4b3043034353fb98cc3517d0ebcf9b7f003e125e8a1->enter($__internal_e9bcb3e5cafa127ed6ebc4b3043034353fb98cc3517d0ebcf9b7f003e125e8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61e77bc67ca1b5bf2c67ac21fdf64330d7250a851acd57dd997396dda360b735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e77bc67ca1b5bf2c67ac21fdf64330d7250a851acd57dd997396dda360b735->enter($__internal_61e77bc67ca1b5bf2c67ac21fdf64330d7250a851acd57dd997396dda360b735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"span6\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 7
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "                    <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                        ";
                // line 9
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>

    </div>
    ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "</div>
   ";
        
        $__internal_61e77bc67ca1b5bf2c67ac21fdf64330d7250a851acd57dd997396dda360b735->leave($__internal_61e77bc67ca1b5bf2c67ac21fdf64330d7250a851acd57dd997396dda360b735_prof);

        
        $__internal_e9bcb3e5cafa127ed6ebc4b3043034353fb98cc3517d0ebcf9b7f003e125e8a1->leave($__internal_e9bcb3e5cafa127ed6ebc4b3043034353fb98cc3517d0ebcf9b7f003e125e8a1_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d31945199ff203e708ffa7af725d3869d8ca385165319821d842a203b6c507af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d31945199ff203e708ffa7af725d3869d8ca385165319821d842a203b6c507af->enter($__internal_d31945199ff203e708ffa7af725d3869d8ca385165319821d842a203b6c507af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fa85f02d4ab0357e14f47cf0706d4f296ebf6b737e2cd82f2e580a68e93e0272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa85f02d4ab0357e14f47cf0706d4f296ebf6b737e2cd82f2e580a68e93e0272->enter($__internal_fa85f02d4ab0357e14f47cf0706d4f296ebf6b737e2cd82f2e580a68e93e0272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "    ";
        
        $__internal_fa85f02d4ab0357e14f47cf0706d4f296ebf6b737e2cd82f2e580a68e93e0272->leave($__internal_fa85f02d4ab0357e14f47cf0706d4f296ebf6b737e2cd82f2e580a68e93e0272_prof);

        
        $__internal_d31945199ff203e708ffa7af725d3869d8ca385165319821d842a203b6c507af->leave($__internal_d31945199ff203e708ffa7af725d3869d8ca385165319821d842a203b6c507af_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 17,  102 => 16,  91 => 18,  89 => 16,  84 => 13,  78 => 12,  69 => 9,  64 => 8,  59 => 7,  55 => 6,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout.html.twig\" %}
{% block body %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span6\">
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        </div>

    </div>
    {% block fos_user_content %}
    {% endblock fos_user_content %}
</div>
   {% endblock %}
", "UserBundle:FOSUserBundle/views:layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/layout.html.twig");
    }
}
