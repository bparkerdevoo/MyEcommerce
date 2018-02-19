<?php

/* :layout/modulesUsed:navAdd.html.twig */
class __TwigTemplate_cb19a4c5d5a2c2e6a39ed2bf85711fbf238f4d062633bb53658bdc5670b19140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07fc2cbb3fe822b6e9dd63da4a88cb8df067fc9a0899f51d6e4e9c4e0392f40d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07fc2cbb3fe822b6e9dd63da4a88cb8df067fc9a0899f51d6e4e9c4e0392f40d->enter($__internal_07fc2cbb3fe822b6e9dd63da4a88cb8df067fc9a0899f51d6e4e9c4e0392f40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout/modulesUsed:navAdd.html.twig"));

        $__internal_a11ef53cbff46e0dd60bd6fc268747ca92c1a571ce3a61d1afe40d1d683dbdbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11ef53cbff46e0dd60bd6fc268747ca92c1a571ce3a61d1afe40d1d683dbdbd->enter($__internal_a11ef53cbff46e0dd60bd6fc268747ca92c1a571ce3a61d1afe40d1d683dbdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout/modulesUsed:navAdd.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_07fc2cbb3fe822b6e9dd63da4a88cb8df067fc9a0899f51d6e4e9c4e0392f40d->leave($__internal_07fc2cbb3fe822b6e9dd63da4a88cb8df067fc9a0899f51d6e4e9c4e0392f40d_prof);

        
        $__internal_a11ef53cbff46e0dd60bd6fc268747ca92c1a571ce3a61d1afe40d1d683dbdbd->leave($__internal_a11ef53cbff46e0dd60bd6fc268747ca92c1a571ce3a61d1afe40d1d683dbdbd_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_5fc8fd09194a52ae1018e07b4d97b9886b52223cd9d7561c484b6166a7ff61c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc8fd09194a52ae1018e07b4d97b9886b52223cd9d7561c484b6166a7ff61c1->enter($__internal_5fc8fd09194a52ae1018e07b4d97b9886b52223cd9d7561c484b6166a7ff61c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3459b740c1d0943796a98ca2600174ccf3573b499bdd92ed3385f0431fe16266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3459b740c1d0943796a98ca2600174ccf3573b499bdd92ed3385f0431fe16266->enter($__internal_3459b740c1d0943796a98ca2600174ccf3573b499bdd92ed3385f0431fe16266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
     <div class=\"span3\">
     <div class=\"well\">
            <ul class=\"nav nav-list\">
                <li class=\"nav-header\"> My Scent Factory</li>
                <li class=\"active\">
                    <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue_composition");
        echo "\">Categorie Supports</a>
                </li>
                <li>
                    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue_composition");
        echo "\">Categorie des parfums</a>
                </li>
                <li>
                    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue_composition");
        echo "\">Composition</a>
                </li>
                <li>
                    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogue_composition");
        echo "\">Accessoires</a>
                </li>
            </ul>
        </div>
    </div>

";
        
        $__internal_3459b740c1d0943796a98ca2600174ccf3573b499bdd92ed3385f0431fe16266->leave($__internal_3459b740c1d0943796a98ca2600174ccf3573b499bdd92ed3385f0431fe16266_prof);

        
        $__internal_5fc8fd09194a52ae1018e07b4d97b9886b52223cd9d7561c484b6166a7ff61c1->leave($__internal_5fc8fd09194a52ae1018e07b4d97b9886b52223cd9d7561c484b6166a7ff61c1_prof);

    }

    public function getTemplateName()
    {
        return ":layout/modulesUsed:navAdd.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  64 => 14,  58 => 11,  52 => 8,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}

     <div class=\"span3\">
     <div class=\"well\">
            <ul class=\"nav nav-list\">
                <li class=\"nav-header\"> My Scent Factory</li>
                <li class=\"active\">
                    <a href=\"{{ path('catalogue_composition') }}\">Categorie Supports</a>
                </li>
                <li>
                    <a href=\"{{ path('catalogue_composition') }}\">Categorie des parfums</a>
                </li>
                <li>
                    <a href=\"{{ path('catalogue_composition') }}\">Composition</a>
                </li>
                <li>
                    <a href=\"{{ path('catalogue_composition') }}\">Accessoires</a>
                </li>
            </ul>
        </div>
    </div>

{% endblock %}
", ":layout/modulesUsed:navAdd.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/app/Resources/views/layout/modulesUsed/navAdd.html.twig");
    }
}
