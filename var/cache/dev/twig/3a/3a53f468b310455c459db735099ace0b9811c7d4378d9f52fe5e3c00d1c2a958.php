<?php

/* form_table_layout.html.twig */
class __TwigTemplate_0231bc3afb8e9505d60879a2d3bb4da2bb0e773b14a61a845a36b815973d3b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50b4f55e2e4b891977423a33e9a8bf16cc48ec8ea0e32648644eaa099dd1067b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b4f55e2e4b891977423a33e9a8bf16cc48ec8ea0e32648644eaa099dd1067b->enter($__internal_50b4f55e2e4b891977423a33e9a8bf16cc48ec8ea0e32648644eaa099dd1067b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_eb2dcdc009971bf458399ff5c049649e85acfbb8192d2062eb628d38cf8d786c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2dcdc009971bf458399ff5c049649e85acfbb8192d2062eb628d38cf8d786c->enter($__internal_eb2dcdc009971bf458399ff5c049649e85acfbb8192d2062eb628d38cf8d786c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_50b4f55e2e4b891977423a33e9a8bf16cc48ec8ea0e32648644eaa099dd1067b->leave($__internal_50b4f55e2e4b891977423a33e9a8bf16cc48ec8ea0e32648644eaa099dd1067b_prof);

        
        $__internal_eb2dcdc009971bf458399ff5c049649e85acfbb8192d2062eb628d38cf8d786c->leave($__internal_eb2dcdc009971bf458399ff5c049649e85acfbb8192d2062eb628d38cf8d786c_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e325aa86450458423861a59a41e5a775a5ff48549d3dbbf35d67cd2a83296821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e325aa86450458423861a59a41e5a775a5ff48549d3dbbf35d67cd2a83296821->enter($__internal_e325aa86450458423861a59a41e5a775a5ff48549d3dbbf35d67cd2a83296821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2bcf326248cc16fdf0a55af11c0b28f9a9b1950d0f7bb162839ebece42cebbd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcf326248cc16fdf0a55af11c0b28f9a9b1950d0f7bb162839ebece42cebbd1->enter($__internal_2bcf326248cc16fdf0a55af11c0b28f9a9b1950d0f7bb162839ebece42cebbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_2bcf326248cc16fdf0a55af11c0b28f9a9b1950d0f7bb162839ebece42cebbd1->leave($__internal_2bcf326248cc16fdf0a55af11c0b28f9a9b1950d0f7bb162839ebece42cebbd1_prof);

        
        $__internal_e325aa86450458423861a59a41e5a775a5ff48549d3dbbf35d67cd2a83296821->leave($__internal_e325aa86450458423861a59a41e5a775a5ff48549d3dbbf35d67cd2a83296821_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1149493799f5991769c7aba053fdba90607a2d3f68e0383687da1c41d41a701f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1149493799f5991769c7aba053fdba90607a2d3f68e0383687da1c41d41a701f->enter($__internal_1149493799f5991769c7aba053fdba90607a2d3f68e0383687da1c41d41a701f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_89684973f0edd0b03b217f8fd2de576ed201eacf589f06ca83d76878c9df860e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89684973f0edd0b03b217f8fd2de576ed201eacf589f06ca83d76878c9df860e->enter($__internal_89684973f0edd0b03b217f8fd2de576ed201eacf589f06ca83d76878c9df860e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_89684973f0edd0b03b217f8fd2de576ed201eacf589f06ca83d76878c9df860e->leave($__internal_89684973f0edd0b03b217f8fd2de576ed201eacf589f06ca83d76878c9df860e_prof);

        
        $__internal_1149493799f5991769c7aba053fdba90607a2d3f68e0383687da1c41d41a701f->leave($__internal_1149493799f5991769c7aba053fdba90607a2d3f68e0383687da1c41d41a701f_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_8e5eeea3330c226cb2a0c9b58debb7630117a29fc6c675b0c4ae4daaa5720d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5eeea3330c226cb2a0c9b58debb7630117a29fc6c675b0c4ae4daaa5720d35->enter($__internal_8e5eeea3330c226cb2a0c9b58debb7630117a29fc6c675b0c4ae4daaa5720d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_271fff25f46b247df3bc045bf3ff29f4178545a8a490e4be3cc2a64308659a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271fff25f46b247df3bc045bf3ff29f4178545a8a490e4be3cc2a64308659a92->enter($__internal_271fff25f46b247df3bc045bf3ff29f4178545a8a490e4be3cc2a64308659a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_271fff25f46b247df3bc045bf3ff29f4178545a8a490e4be3cc2a64308659a92->leave($__internal_271fff25f46b247df3bc045bf3ff29f4178545a8a490e4be3cc2a64308659a92_prof);

        
        $__internal_8e5eeea3330c226cb2a0c9b58debb7630117a29fc6c675b0c4ae4daaa5720d35->leave($__internal_8e5eeea3330c226cb2a0c9b58debb7630117a29fc6c675b0c4ae4daaa5720d35_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_982efda6e1950aacba57a118154f90d8dab6298c722585278c69e97b37f6a85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982efda6e1950aacba57a118154f90d8dab6298c722585278c69e97b37f6a85c->enter($__internal_982efda6e1950aacba57a118154f90d8dab6298c722585278c69e97b37f6a85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_21895727a336a17225cf6a5c8a41ea62f09aa7b132b7d611277fb554befec420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21895727a336a17225cf6a5c8a41ea62f09aa7b132b7d611277fb554befec420->enter($__internal_21895727a336a17225cf6a5c8a41ea62f09aa7b132b7d611277fb554befec420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_21895727a336a17225cf6a5c8a41ea62f09aa7b132b7d611277fb554befec420->leave($__internal_21895727a336a17225cf6a5c8a41ea62f09aa7b132b7d611277fb554befec420_prof);

        
        $__internal_982efda6e1950aacba57a118154f90d8dab6298c722585278c69e97b37f6a85c->leave($__internal_982efda6e1950aacba57a118154f90d8dab6298c722585278c69e97b37f6a85c_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
