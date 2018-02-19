<?php

/* SonataAdminBundle:CRUD/Association:edit_modal.html.twig */
class __TwigTemplate_67d0905d7de8c78d123518bec8ea06e36c3a457ada2c896da3e8bdd0c42ad645 extends Twig_Template
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
        $__internal_8d9f01da12ad3f191a3c366c56b9bde2084f8c8c8395f92a0f43ea0a8642526e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9f01da12ad3f191a3c366c56b9bde2084f8c8c8395f92a0f43ea0a8642526e->enter($__internal_8d9f01da12ad3f191a3c366c56b9bde2084f8c8c8395f92a0f43ea0a8642526e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:edit_modal.html.twig"));

        $__internal_6a2eec964513eb3db667c7b1018790656aa20b5ffc95d5849125cf992394f72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2eec964513eb3db667c7b1018790656aa20b5ffc95d5849125cf992394f72d->enter($__internal_6a2eec964513eb3db667c7b1018790656aa20b5ffc95d5849125cf992394f72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:edit_modal.html.twig"));

        // line 11
        echo "
<div class=\"modal fade\" id=\"field_dialog_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_8d9f01da12ad3f191a3c366c56b9bde2084f8c8c8395f92a0f43ea0a8642526e->leave($__internal_8d9f01da12ad3f191a3c366c56b9bde2084f8c8c8395f92a0f43ea0a8642526e_prof);

        
        $__internal_6a2eec964513eb3db667c7b1018790656aa20b5ffc95d5849125cf992394f72d->leave($__internal_6a2eec964513eb3db667c7b1018790656aa20b5ffc95d5849125cf992394f72d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:edit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div class=\"modal fade\" id=\"field_dialog_{{ id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
", "SonataAdminBundle:CRUD/Association:edit_modal.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/Association/edit_modal.html.twig");
    }
}
