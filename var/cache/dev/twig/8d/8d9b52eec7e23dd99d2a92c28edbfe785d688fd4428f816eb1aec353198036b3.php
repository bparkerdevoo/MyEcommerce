<?php

/* MSFBundle:Factory:personalisation.html.twig */
class __TwigTemplate_d19eb249303117dd52667d319a209b447f143387eda2f02d0e50f3340b9a3560 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Layout.html.twig", "MSFBundle:Factory:personalisation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34cbdf68cdd204e903696d8615ab36ea6933141d14310a476aaf6a42b72281f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34cbdf68cdd204e903696d8615ab36ea6933141d14310a476aaf6a42b72281f9->enter($__internal_34cbdf68cdd204e903696d8615ab36ea6933141d14310a476aaf6a42b72281f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Factory:personalisation.html.twig"));

        $__internal_2efcf70b302ea69c4f509998ffde74e21d5febe018eae7e783753eedae30baeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2efcf70b302ea69c4f509998ffde74e21d5febe018eae7e783753eedae30baeb->enter($__internal_2efcf70b302ea69c4f509998ffde74e21d5febe018eae7e783753eedae30baeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Factory:personalisation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34cbdf68cdd204e903696d8615ab36ea6933141d14310a476aaf6a42b72281f9->leave($__internal_34cbdf68cdd204e903696d8615ab36ea6933141d14310a476aaf6a42b72281f9_prof);

        
        $__internal_2efcf70b302ea69c4f509998ffde74e21d5febe018eae7e783753eedae30baeb->leave($__internal_2efcf70b302ea69c4f509998ffde74e21d5febe018eae7e783753eedae30baeb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f2d6bffc0800ccb41eeacd94a5468cfd4bbbb5efc8da002ac9b5e6778ced7b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2d6bffc0800ccb41eeacd94a5468cfd4bbbb5efc8da002ac9b5e6778ced7b3->enter($__internal_6f2d6bffc0800ccb41eeacd94a5468cfd4bbbb5efc8da002ac9b5e6778ced7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9696c485e6fa0293db36a106360091c31856cdce3c18be28e0c0c2cbde089a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9696c485e6fa0293db36a106360091c31856cdce3c18be28e0c0c2cbde089a3e->enter($__internal_9696c485e6fa0293db36a106360091c31856cdce3c18be28e0c0c2cbde089a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "personalisation";
        
        $__internal_9696c485e6fa0293db36a106360091c31856cdce3c18be28e0c0c2cbde089a3e->leave($__internal_9696c485e6fa0293db36a106360091c31856cdce3c18be28e0c0c2cbde089a3e_prof);

        
        $__internal_6f2d6bffc0800ccb41eeacd94a5468cfd4bbbb5efc8da002ac9b5e6778ced7b3->leave($__internal_6f2d6bffc0800ccb41eeacd94a5468cfd4bbbb5efc8da002ac9b5e6778ced7b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f64332766258e8b1ddae002ac8cd901b8e59a3e0d6d11f9a0e192852d65da7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f64332766258e8b1ddae002ac8cd901b8e59a3e0d6d11f9a0e192852d65da7c->enter($__internal_6f64332766258e8b1ddae002ac8cd901b8e59a3e0d6d11f9a0e192852d65da7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_774dee0dbddcbaa91d179004f6f42875156f0020cc6d83d318f690ce09df0d60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774dee0dbddcbaa91d179004f6f42875156f0020cc6d83d318f690ce09df0d60->enter($__internal_774dee0dbddcbaa91d179004f6f42875156f0020cc6d83d318f690ce09df0d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\">
        <div class=\"span12\">
            <div class=\"row\">
                <h1>Welcome to the Produits:personalisation page</h1>
                <p>ici nommer votre composition</p>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"span6 offset3\">
            <div class=\"container\">

                ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'form_start');
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), 'widget');
        echo "
                <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customiser"), "html", null, true);
        echo "\" />
                ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'form_end');
        echo "

            </div>
        </div>
    </div>


    <div class=\"row\">
        <div class=\"span6\">

            <div class=\"container\">



                <div class=\"span12\">
                    <div class=\"row\">
                        <hr>
                    </div>
                </div>
                <div class=\"row\">

                    <div class=\"span8 offset2\">
                        <h3>Tableau de Vos produits customisé</h3>

                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-bordered\">
                                <caption>Votre boudoire</caption>
                                <thead>
                                <tr>
                                    <th scope=\"col\">id client</th>
                                    <th scope=\"col\">DATE</th>
                                    <th scope=\"col\">PRODUIT</th>
                                    <th scope=\"col\">NOM CUSTOMISE</th>
                                    <th scope=\"col\">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom"]) || array_key_exists("custom", $context) ? $context["custom"] : (function () { throw new Twig_Error_Runtime('Variable "custom" does not exist.', 60, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["customName"]) {
            // line 61
            echo "                                <tr>
                                    <th scope=\"row\">id client</th>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["customName"], "dateCreation", array()), "date", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["customName"], "id", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["customName"], "titre", array()), "html", null, true);
            echo "</td>

                                    <td></td>
                                </tr>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "                                        <tr>
                                            <th scope=\"row\"></th>
                                            <td>N/a</td>

                                        </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
                            </table>

                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <hr>
                </div>


                <div class=\"row\">
                    <div class=\"span8 offset2\">
                        <div class=\"table-responsive-sm\">
                            <table class=\"table\">
                                ...
                            </table>
                        </div>

                        <div class=\"table-responsive-md\">
                            <table class=\"table\">
                                ...
                            </table>
                        </div>

                        <div class=\"table-responsive-lg\">
                            <table class=\"table\">
                                ...
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


";
        
        $__internal_774dee0dbddcbaa91d179004f6f42875156f0020cc6d83d318f690ce09df0d60->leave($__internal_774dee0dbddcbaa91d179004f6f42875156f0020cc6d83d318f690ce09df0d60_prof);

        
        $__internal_6f64332766258e8b1ddae002ac8cd901b8e59a3e0d6d11f9a0e192852d65da7c->leave($__internal_6f64332766258e8b1ddae002ac8cd901b8e59a3e0d6d11f9a0e192852d65da7c_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Factory:personalisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 76,  163 => 70,  153 => 65,  149 => 64,  145 => 63,  141 => 61,  136 => 60,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Layout.html.twig\" %}

{% block title %}personalisation{% endblock %}

{% block body %}

    <div class=\"container\">
        <div class=\"span12\">
            <div class=\"row\">
                <h1>Welcome to the Produits:personalisation page</h1>
                <p>ici nommer votre composition</p>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"span6 offset3\">
            <div class=\"container\">

                {{ form_start(form) }}
                {{ form_widget(form) }}
                <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'Customiser'|trans }}\" />
                {{ form_end(form) }}

            </div>
        </div>
    </div>


    <div class=\"row\">
        <div class=\"span6\">

            <div class=\"container\">



                <div class=\"span12\">
                    <div class=\"row\">
                        <hr>
                    </div>
                </div>
                <div class=\"row\">

                    <div class=\"span8 offset2\">
                        <h3>Tableau de Vos produits customisé</h3>

                        <div class=\"table-responsive\">
                            <table class=\"table table-hover table-bordered\">
                                <caption>Votre boudoire</caption>
                                <thead>
                                <tr>
                                    <th scope=\"col\">id client</th>
                                    <th scope=\"col\">DATE</th>
                                    <th scope=\"col\">PRODUIT</th>
                                    <th scope=\"col\">NOM CUSTOMISE</th>
                                    <th scope=\"col\">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                {%  for customName in custom %}
                                <tr>
                                    <th scope=\"row\">id client</th>
                                    <td>{{ customName.dateCreation.date }}</td>
                                    <td>{{ customName.id }}</td>
                                    <td>{{ customName.titre }}</td>

                                    <td></td>
                                </tr>
                                    {% else %}
                                        <tr>
                                            <th scope=\"row\"></th>
                                            <td>N/a</td>

                                        </tr>
                                {% endfor %}

                            </table>

                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <hr>
                </div>


                <div class=\"row\">
                    <div class=\"span8 offset2\">
                        <div class=\"table-responsive-sm\">
                            <table class=\"table\">
                                ...
                            </table>
                        </div>

                        <div class=\"table-responsive-md\">
                            <table class=\"table\">
                                ...
                            </table>
                        </div>

                        <div class=\"table-responsive-lg\">
                            <table class=\"table\">
                                ...
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>


{% endblock %}
", "MSFBundle:Factory:personalisation.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Factory/personalisation.html.twig");
    }
}
