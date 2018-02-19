<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_fbd4e6f3c896904d3f06ef00f4b40601c72149327080c857b1c46553ce906509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4caa383f9cc751dcb6780d52f474a41651d6ed9a1719696247a954cf0bc1be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4caa383f9cc751dcb6780d52f474a41651d6ed9a1719696247a954cf0bc1be4->enter($__internal_b4caa383f9cc751dcb6780d52f474a41651d6ed9a1719696247a954cf0bc1be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        $__internal_8ad7b4f3056bcd3be37f076fd94ca684aa79f4b863d1ef7ebaeb7acd3d0661b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad7b4f3056bcd3be37f076fd94ca684aa79f4b863d1ef7ebaeb7acd3d0661b3->enter($__internal_8ad7b4f3056bcd3be37f076fd94ca684aa79f4b863d1ef7ebaeb7acd3d0661b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_b4caa383f9cc751dcb6780d52f474a41651d6ed9a1719696247a954cf0bc1be4->leave($__internal_b4caa383f9cc751dcb6780d52f474a41651d6ed9a1719696247a954cf0bc1be4_prof);

        
        $__internal_8ad7b4f3056bcd3be37f076fd94ca684aa79f4b863d1ef7ebaeb7acd3d0661b3->leave($__internal_8ad7b4f3056bcd3be37f076fd94ca684aa79f4b863d1ef7ebaeb7acd3d0661b3_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_d055b22327382198a040af60c1fc7f88c5c8d480adfc369f386c2417d2f33cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d055b22327382198a040af60c1fc7f88c5c8d480adfc369f386c2417d2f33cc7->enter($__internal_d055b22327382198a040af60c1fc7f88c5c8d480adfc369f386c2417d2f33cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_0a0d76c4c4eaaac615436d3acf2de0b794a0b9b57cd1c3bf66dfd4037d9b91b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0d76c4c4eaaac615436d3acf2de0b794a0b9b57cd1c3bf66dfd4037d9b91b6->enter($__internal_0a0d76c4c4eaaac615436d3acf2de0b794a0b9b57cd1c3bf66dfd4037d9b91b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 24, $this->getSourceContext()); })()), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0a0d76c4c4eaaac615436d3acf2de0b794a0b9b57cd1c3bf66dfd4037d9b91b6->leave($__internal_0a0d76c4c4eaaac615436d3acf2de0b794a0b9b57cd1c3bf66dfd4037d9b91b6_prof);

        
        $__internal_d055b22327382198a040af60c1fc7f88c5c8d480adfc369f386c2417d2f33cc7->leave($__internal_d055b22327382198a040af60c1fc7f88c5c8d480adfc369f386c2417d2f33cc7_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  51 => 14,  49 => 13,  44 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
", "SonataCoreBundle:Form:colorpicker.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/core-bundle/src/Resources/views/Form/colorpicker.html.twig");
    }
}
