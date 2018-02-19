<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_55db837328c18627a8310eb62ba578363e9a95e9ddbb87eae8dd5cf8d54dabc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8036895edc7437478b4255dcf6f8ab2c03d3519dd5d0ab8be915eaff7080d2e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8036895edc7437478b4255dcf6f8ab2c03d3519dd5d0ab8be915eaff7080d2e8->enter($__internal_8036895edc7437478b4255dcf6f8ab2c03d3519dd5d0ab8be915eaff7080d2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_bcfaf955a5084aa7d8fc4dded2537720657dc6a49e6cb50f057e8b094499bc64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfaf955a5084aa7d8fc4dded2537720657dc6a49e6cb50f057e8b094499bc64->enter($__internal_bcfaf955a5084aa7d8fc4dded2537720657dc6a49e6cb50f057e8b094499bc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8036895edc7437478b4255dcf6f8ab2c03d3519dd5d0ab8be915eaff7080d2e8->leave($__internal_8036895edc7437478b4255dcf6f8ab2c03d3519dd5d0ab8be915eaff7080d2e8_prof);

        
        $__internal_bcfaf955a5084aa7d8fc4dded2537720657dc6a49e6cb50f057e8b094499bc64->leave($__internal_bcfaf955a5084aa7d8fc4dded2537720657dc6a49e6cb50f057e8b094499bc64_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0b91e9362774eb2b712878e4a9e827ac555caa7780471721eefbbd9f235f1e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b91e9362774eb2b712878e4a9e827ac555caa7780471721eefbbd9f235f1e00->enter($__internal_0b91e9362774eb2b712878e4a9e827ac555caa7780471721eefbbd9f235f1e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a52b8cbcbab63d16aab8386f86de72c737f093543f815a0bfaf495e7a92f5b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52b8cbcbab63d16aab8386f86de72c737f093543f815a0bfaf495e7a92f5b4f->enter($__internal_a52b8cbcbab63d16aab8386f86de72c737f093543f815a0bfaf495e7a92f5b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_a52b8cbcbab63d16aab8386f86de72c737f093543f815a0bfaf495e7a92f5b4f->leave($__internal_a52b8cbcbab63d16aab8386f86de72c737f093543f815a0bfaf495e7a92f5b4f_prof);

        
        $__internal_0b91e9362774eb2b712878e4a9e827ac555caa7780471721eefbbd9f235f1e00->leave($__internal_0b91e9362774eb2b712878e4a9e827ac555caa7780471721eefbbd9f235f1e00_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_58f3ca0715bd7d1cedd1845a477506c16a86375080edac2e6c2ab181293208aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58f3ca0715bd7d1cedd1845a477506c16a86375080edac2e6c2ab181293208aa->enter($__internal_58f3ca0715bd7d1cedd1845a477506c16a86375080edac2e6c2ab181293208aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_0230dd74e0a710a32a085b54a80ad56b0d3d9b3d92423d8ca4097979fc356912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0230dd74e0a710a32a085b54a80ad56b0d3d9b3d92423d8ca4097979fc356912->enter($__internal_0230dd74e0a710a32a085b54a80ad56b0d3d9b3d92423d8ca4097979fc356912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_0230dd74e0a710a32a085b54a80ad56b0d3d9b3d92423d8ca4097979fc356912->leave($__internal_0230dd74e0a710a32a085b54a80ad56b0d3d9b3d92423d8ca4097979fc356912_prof);

        
        $__internal_58f3ca0715bd7d1cedd1845a477506c16a86375080edac2e6c2ab181293208aa->leave($__internal_58f3ca0715bd7d1cedd1845a477506c16a86375080edac2e6c2ab181293208aa_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_18d0ef89bd8a982543aad804f3f393f3564daa3169fd9a75838a0e7098643851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18d0ef89bd8a982543aad804f3f393f3564daa3169fd9a75838a0e7098643851->enter($__internal_18d0ef89bd8a982543aad804f3f393f3564daa3169fd9a75838a0e7098643851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_37215c6feb6295f3a1572a2a6c7f0d0fe69acc5cac4ae824c53dc5e34e735ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37215c6feb6295f3a1572a2a6c7f0d0fe69acc5cac4ae824c53dc5e34e735ede->enter($__internal_37215c6feb6295f3a1572a2a6c7f0d0fe69acc5cac4ae824c53dc5e34e735ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_37215c6feb6295f3a1572a2a6c7f0d0fe69acc5cac4ae824c53dc5e34e735ede->leave($__internal_37215c6feb6295f3a1572a2a6c7f0d0fe69acc5cac4ae824c53dc5e34e735ede_prof);

        
        $__internal_18d0ef89bd8a982543aad804f3f393f3564daa3169fd9a75838a0e7098643851->leave($__internal_18d0ef89bd8a982543aad804f3f393f3564daa3169fd9a75838a0e7098643851_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
