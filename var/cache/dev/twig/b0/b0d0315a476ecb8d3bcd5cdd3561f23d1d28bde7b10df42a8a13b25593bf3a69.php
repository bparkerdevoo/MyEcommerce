<?php

/* UserBundle:FOSUserBundle/views/Group:show.html.twig */
class __TwigTemplate_40407384bd120df09fa5fa5d37ea5cc4c946d729cc08928cef14f793d11cb8d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:FOSUserBundle/views/Group:show.html.twig", 1);
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
        $__internal_ded6f9adf1417d6b2051824223abfdb6b726ee6674655cbdfb1167da66af3d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded6f9adf1417d6b2051824223abfdb6b726ee6674655cbdfb1167da66af3d0c->enter($__internal_ded6f9adf1417d6b2051824223abfdb6b726ee6674655cbdfb1167da66af3d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:show.html.twig"));

        $__internal_07f539b5ef908604f3d388870f314a815fb9c85c8e2cd04d7f5a179832abb3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f539b5ef908604f3d388870f314a815fb9c85c8e2cd04d7f5a179832abb3a3->enter($__internal_07f539b5ef908604f3d388870f314a815fb9c85c8e2cd04d7f5a179832abb3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:FOSUserBundle/views/Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ded6f9adf1417d6b2051824223abfdb6b726ee6674655cbdfb1167da66af3d0c->leave($__internal_ded6f9adf1417d6b2051824223abfdb6b726ee6674655cbdfb1167da66af3d0c_prof);

        
        $__internal_07f539b5ef908604f3d388870f314a815fb9c85c8e2cd04d7f5a179832abb3a3->leave($__internal_07f539b5ef908604f3d388870f314a815fb9c85c8e2cd04d7f5a179832abb3a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_192bdf3ab44e26a2a9be5ec711e55ec67854041b9a1f1dfe99005fde04315eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192bdf3ab44e26a2a9be5ec711e55ec67854041b9a1f1dfe99005fde04315eaf->enter($__internal_192bdf3ab44e26a2a9be5ec711e55ec67854041b9a1f1dfe99005fde04315eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c240ce1becff2988aaafcb23bf2b9e2d665202fcc5955a7f68eae1a9e9617f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c240ce1becff2988aaafcb23bf2b9e2d665202fcc5955a7f68eae1a9e9617f4a->enter($__internal_c240ce1becff2988aaafcb23bf2b9e2d665202fcc5955a7f68eae1a9e9617f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "UserBundle:FOSUserBundle/views/Group:show.html.twig", 4)->display($context);
        
        $__internal_c240ce1becff2988aaafcb23bf2b9e2d665202fcc5955a7f68eae1a9e9617f4a->leave($__internal_c240ce1becff2988aaafcb23bf2b9e2d665202fcc5955a7f68eae1a9e9617f4a_prof);

        
        $__internal_192bdf3ab44e26a2a9be5ec711e55ec67854041b9a1f1dfe99005fde04315eaf->leave($__internal_192bdf3ab44e26a2a9be5ec711e55ec67854041b9a1f1dfe99005fde04315eaf_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:FOSUserBundle/views/Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:FOSUserBundle/views/Group:show.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/UserBundle/Resources/views/FOSUserBundle/views/Group/show.html.twig");
    }
}
