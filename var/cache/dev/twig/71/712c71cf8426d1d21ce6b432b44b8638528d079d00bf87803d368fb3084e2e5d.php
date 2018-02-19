<?php

/* MSFBundle:Page/inc:cgu.html.twig */
class __TwigTemplate_e519b99aba7175bc4c9d509e0bf6c5e5fb59c93e44a7b86dcfa7eb8476f321f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'cgu' => array($this, 'block_cgu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a273141864219e348e64bd790a450fba739ac4b9ba25b8d158199b1d9b1fba0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a273141864219e348e64bd790a450fba739ac4b9ba25b8d158199b1d9b1fba0f->enter($__internal_a273141864219e348e64bd790a450fba739ac4b9ba25b8d158199b1d9b1fba0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page/inc:cgu.html.twig"));

        $__internal_f6dda4d10e79b7ebe05f9b26b5911e55b9c9fb67775495b079c33ff975039356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6dda4d10e79b7ebe05f9b26b5911e55b9c9fb67775495b079c33ff975039356->enter($__internal_f6dda4d10e79b7ebe05f9b26b5911e55b9c9fb67775495b079c33ff975039356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Page/inc:cgu.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('cgu', $context, $blocks);
        
        $__internal_a273141864219e348e64bd790a450fba739ac4b9ba25b8d158199b1d9b1fba0f->leave($__internal_a273141864219e348e64bd790a450fba739ac4b9ba25b8d158199b1d9b1fba0f_prof);

        
        $__internal_f6dda4d10e79b7ebe05f9b26b5911e55b9c9fb67775495b079c33ff975039356->leave($__internal_f6dda4d10e79b7ebe05f9b26b5911e55b9c9fb67775495b079c33ff975039356_prof);

    }

    public function block_cgu($context, array $blocks = array())
    {
        $__internal_67e78b9eb7ab053abf793b566dc4e7c013d1d8b1ce1900b1cc44c0e6f7f7210f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e78b9eb7ab053abf793b566dc4e7c013d1d8b1ce1900b1cc44c0e6f7f7210f->enter($__internal_67e78b9eb7ab053abf793b566dc4e7c013d1d8b1ce1900b1cc44c0e6f7f7210f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cgu"));

        $__internal_6448770b8009904901d64dd6be2a204583bdb294e2d34e0dea43a402d9dbd970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6448770b8009904901d64dd6be2a204583bdb294e2d34e0dea43a402d9dbd970->enter($__internal_6448770b8009904901d64dd6be2a204583bdb294e2d34e0dea43a402d9dbd970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cgu"));

        // line 4
        echo "<div class=\"container\">
    <div class=\"row\">
        <H3>CGU</H3>

        <div class=\"span12\">
            <div class=\"span3\">
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/holder.png"), "html", null, true);
        echo "\" alt=\"MSF\" width=\"470\" height=\"310\">
            </div>

            <div class=\"row\">
                <h4>Item Brand and Category</h4>
                <h5>AB29837 Item Model</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>

        </div>
    </div>
</div>
";
        
        $__internal_6448770b8009904901d64dd6be2a204583bdb294e2d34e0dea43a402d9dbd970->leave($__internal_6448770b8009904901d64dd6be2a204583bdb294e2d34e0dea43a402d9dbd970_prof);

        
        $__internal_67e78b9eb7ab053abf793b566dc4e7c013d1d8b1ce1900b1cc44c0e6f7f7210f->leave($__internal_67e78b9eb7ab053abf793b566dc4e7c013d1d8b1ce1900b1cc44c0e6f7f7210f_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Page/inc:cgu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  48 => 4,  30 => 3,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% block cgu %}
<div class=\"container\">
    <div class=\"row\">
        <H3>CGU</H3>

        <div class=\"span12\">
            <div class=\"span3\">
                <img src=\"{{ asset('img/holder.png') }}\" alt=\"MSF\" width=\"470\" height=\"310\">
            </div>

            <div class=\"row\">
                <h4>Item Brand and Category</h4>
                <h5>AB29837 Item Model</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>

        </div>
    </div>
</div>
{% endblock cgu %}
", "MSFBundle:Page/inc:cgu.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Page/inc/cgu.html.twig");
    }
}
