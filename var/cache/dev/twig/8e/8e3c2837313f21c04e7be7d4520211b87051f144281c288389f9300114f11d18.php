<?php

/* UserBundle:FOSUserBundle/views/Group:list.html.twig */
class __TwigTemplate_dbbe094ca9706b9dac6ae8455e7b8ddb1541d4c4ef9eac88af0f86f019f617de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b489822d96b6f8570d89cc802e1f82eb9ea894cd09d11feac38d803378316f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b489822d96b6f8570d89cc802e1f82eb9ea894cd09d11feac38d803378316f5->enter($__internal_6b489822d96b6f8570d89cc802e1f82eb9ea894cd09d11feac38d803378316f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:list.html.twig"));

        $__internal_8bf88c7b20d0c45ea1e67b5533b66962ca319dd6e406c6276adf7b729e0ec407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bf88c7b20d0c45ea1e67b5533b66962ca319dd6e406c6276adf7b729e0ec407->enter($__internal_8bf88c7b20d0c45ea1e67b5533b66962ca319dd6e406c6276adf7b729e0ec407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b489822d96b6f8570d89cc802e1f82eb9ea894cd09d11feac38d803378316f5->leave($__internal_6b489822d96b6f8570d89cc802e1f82eb9ea894cd09d11feac38d803378316f5_prof);

        
        $__internal_8bf88c7b20d0c45ea1e67b5533b66962ca319dd6e406c6276adf7b729e0ec407->leave($__internal_8bf88c7b20d0c45ea1e67b5533b66962ca319dd6e406c6276adf7b729e0ec407_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1cedb457f511820aad1dc8ca8259b17b3818835aaba8a4110226f870e2192c9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cedb457f511820aad1dc8ca8259b17b3818835aaba8a4110226f870e2192c9b->enter($__internal_1cedb457f511820aad1dc8ca8259b17b3818835aaba8a4110226f870e2192c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e7f6cb5583e5c7e0694b763218d0b8cbe4ac496a113fcebd56ce6a938991031a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f6cb5583e5c7e0694b763218d0b8cbe4ac496a113fcebd56ce6a938991031a->enter($__internal_e7f6cb5583e5c7e0694b763218d0b8cbe4ac496a113fcebd56ce6a938991031a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "UserBundle:FOSUserBundle/views/Group:list.html.twig", 4)->display($context);
        
        $__internal_e7f6cb5583e5c7e0694b763218d0b8cbe4ac496a113fcebd56ce6a938991031a->leave($__internal_e7f6cb5583e5c7e0694b763218d0b8cbe4ac496a113fcebd56ce6a938991031a_prof);

        
        $__internal_1cedb457f511820aad1dc8ca8259b17b3818835aaba8a4110226f870e2192c9b->leave($__internal_1cedb457f511820aad1dc8ca8259b17b3818835aaba8a4110226f870e2192c9b_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:FOSUserBundle/views/Group:list.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Group/list.html.twig");
    }
}
