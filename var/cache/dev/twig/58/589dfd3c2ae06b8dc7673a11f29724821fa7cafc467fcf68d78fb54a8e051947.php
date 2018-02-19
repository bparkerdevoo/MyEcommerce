<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_2eec065a80a6794b303a619d24f1433d55c45be0fb0b1875902c0d2eac7b3b49 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) || array_key_exists("base_template", $context) ? $context["base_template"] : (function () { throw new Twig_Error_Runtime('Variable "base_template" does not exist.', 12, $this->getSourceContext()); })()), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1398a38f6c240681fa2789ca05ea03d8386c9db87c308641dfda99b65f87d60c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1398a38f6c240681fa2789ca05ea03d8386c9db87c308641dfda99b65f87d60c->enter($__internal_1398a38f6c240681fa2789ca05ea03d8386c9db87c308641dfda99b65f87d60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $__internal_d9350334d69926780badc7d4803bea20e24f76312fc778d2c67cd51ebaed172d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9350334d69926780badc7d4803bea20e24f76312fc778d2c67cd51ebaed172d->enter($__internal_d9350334d69926780badc7d4803bea20e24f76312fc778d2c67cd51ebaed172d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1398a38f6c240681fa2789ca05ea03d8386c9db87c308641dfda99b65f87d60c->leave($__internal_1398a38f6c240681fa2789ca05ea03d8386c9db87c308641dfda99b65f87d60c_prof);

        
        $__internal_d9350334d69926780badc7d4803bea20e24f76312fc778d2c67cd51ebaed172d->leave($__internal_d9350334d69926780badc7d4803bea20e24f76312fc778d2c67cd51ebaed172d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}
", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/edit_sonata_type_immutable_array.html.twig");
    }
}
