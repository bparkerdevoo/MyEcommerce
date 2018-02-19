<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_0ff9395e9a5e018a8b1ad9117cd1ef46f4b9505a266a75647215f1110654e708 extends Twig_Template
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
        $__internal_74741fe8600187c8c39e508bab428a93fcde89f8b2cdfe5084d2b25281829f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74741fe8600187c8c39e508bab428a93fcde89f8b2cdfe5084d2b25281829f62->enter($__internal_74741fe8600187c8c39e508bab428a93fcde89f8b2cdfe5084d2b25281829f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        $__internal_38baac927ffc82e878cec6e44309b0bfa3e356bd0b53ec53fbb60faa01e208ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38baac927ffc82e878cec6e44309b0bfa3e356bd0b53ec53fbb60faa01e208ab->enter($__internal_38baac927ffc82e878cec6e44309b0bfa3e356bd0b53ec53fbb60faa01e208ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["revision"]) || array_key_exists("revision", $context) ? $context["revision"] : (function () { throw new Twig_Error_Runtime('Variable "revision" does not exist.', 12, $this->getSourceContext()); })()), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_74741fe8600187c8c39e508bab428a93fcde89f8b2cdfe5084d2b25281829f62->leave($__internal_74741fe8600187c8c39e508bab428a93fcde89f8b2cdfe5084d2b25281829f62_prof);

        
        $__internal_38baac927ffc82e878cec6e44309b0bfa3e356bd0b53ec53fbb60faa01e208ab->leave($__internal_38baac927ffc82e878cec6e44309b0bfa3e356bd0b53ec53fbb60faa01e208ab_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
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

{{ revision.timestamp|date }}
", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
