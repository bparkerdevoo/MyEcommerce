<?php

/* SonataAdminBundle:CRUD:base_show_macro.html.twig */
class __TwigTemplate_19add3d2597f52d561eb6f95072520c4258146bf72aba31eb37ce230a3a7c015 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61371628fefd2f4b3afeeeb4721e668c97d0a458ab40db0f4a9edc790de548e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61371628fefd2f4b3afeeeb4721e668c97d0a458ab40db0f4a9edc790de548e5->enter($__internal_61371628fefd2f4b3afeeeb4721e668c97d0a458ab40db0f4a9edc790de548e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        $__internal_2c045ff7c5a8408a02e85c4ec14297ac6f1c151b0d0911ed7b9a0964d057bbab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c045ff7c5a8408a02e85c4ec14297ac6f1c151b0d0911ed7b9a0964d057bbab->enter($__internal_2c045ff7c5a8408a02e85c4ec14297ac6f1c151b0d0911ed7b9a0964d057bbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_61371628fefd2f4b3afeeeb4721e668c97d0a458ab40db0f4a9edc790de548e5->leave($__internal_61371628fefd2f4b3afeeeb4721e668c97d0a458ab40db0f4a9edc790de548e5_prof);

        
        $__internal_2c045ff7c5a8408a02e85c4ec14297ac6f1c151b0d0911ed7b9a0964d057bbab->leave($__internal_2c045ff7c5a8408a02e85c4ec14297ac6f1c151b0d0911ed7b9a0964d057bbab_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_1ecaff70afbe1156041764ce8959319f46f4867de69ad8178a9b6ee9b234382b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ecaff70afbe1156041764ce8959319f46f4867de69ad8178a9b6ee9b234382b->enter($__internal_1ecaff70afbe1156041764ce8959319f46f4867de69ad8178a9b6ee9b234382b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_b258f864fbdd783cbcb105bc01e7c6812395aef59edd663b97c952f229e1b9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b258f864fbdd783cbcb105bc01e7c6812395aef59edd663b97c952f229e1b9c7->enter($__internal_b258f864fbdd783cbcb105bc01e7c6812395aef59edd663b97c952f229e1b9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 10, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 11
            echo "        ";
            $context["show_group"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 11, $this->getSourceContext()); })()), "showgroups", array()), $context["code"], array(), "array");
            // line 12
            echo "
        <div class=\"";
            // line 13
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((isset($context["no_padding"]) || array_key_exists("no_padding", $context) ? $context["no_padding"] : (function () { throw new Twig_Error_Runtime('Variable "no_padding" does not exist.', 13, $this->getSourceContext()); })())) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 14, $this->getSourceContext()); })()), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 17
            $this->displayBlock('show_title', $context, $blocks);
            // line 20
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 25, $this->getSourceContext()); })()), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 26
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 33
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b258f864fbdd783cbcb105bc01e7c6812395aef59edd663b97c952f229e1b9c7->leave($__internal_b258f864fbdd783cbcb105bc01e7c6812395aef59edd663b97c952f229e1b9c7_prof);

        
        $__internal_1ecaff70afbe1156041764ce8959319f46f4867de69ad8178a9b6ee9b234382b->leave($__internal_1ecaff70afbe1156041764ce8959319f46f4867de69ad8178a9b6ee9b234382b_prof);

    }

    // line 17
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_b75c6618743270255e5b949df48eb5fe592114e57948e104595d9785c2e4462a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b75c6618743270255e5b949df48eb5fe592114e57948e104595d9785c2e4462a->enter($__internal_b75c6618743270255e5b949df48eb5fe592114e57948e104595d9785c2e4462a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_e00d8578b013aad9cd79a834db20f5629581ad2e47c6e82955ac787c38e6afa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00d8578b013aad9cd79a834db20f5629581ad2e47c6e82955ac787c38e6afa7->enter($__internal_e00d8578b013aad9cd79a834db20f5629581ad2e47c6e82955ac787c38e6afa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 18
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 18, $this->getSourceContext()); })()), "label", array()), array(), ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 18, $this->getSourceContext()); })()), "translation_domain", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["show_group"]) || array_key_exists("show_group", $context) ? $context["show_group"] : (function () { throw new Twig_Error_Runtime('Variable "show_group" does not exist.', 18, $this->getSourceContext()); })()), "translation_domain", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new Twig_Error_Runtime('Variable "admin" does not exist.', 18, $this->getSourceContext()); })()), "translationDomain", array())))), "html", null, true);
        echo "
                        ";
        
        $__internal_e00d8578b013aad9cd79a834db20f5629581ad2e47c6e82955ac787c38e6afa7->leave($__internal_e00d8578b013aad9cd79a834db20f5629581ad2e47c6e82955ac787c38e6afa7_prof);

        
        $__internal_b75c6618743270255e5b949df48eb5fe592114e57948e104595d9785c2e4462a->leave($__internal_b75c6618743270255e5b949df48eb5fe592114e57948e104595d9785c2e4462a_prof);

    }

    // line 26
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_a8d843bc8c6f9099443a4bac8fe6ed31ed86835f90265a2a7851991c8bb235bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d843bc8c6f9099443a4bac8fe6ed31ed86835f90265a2a7851991c8bb235bb->enter($__internal_a8d843bc8c6f9099443a4bac8fe6ed31ed86835f90265a2a7851991c8bb235bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_f3fb9aac67cb7f905e6e79ce71cfcdfd0f64b2e43d354613233ec92de1f20cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fb9aac67cb7f905e6e79ce71cfcdfd0f64b2e43d354613233ec92de1f20cff->enter($__internal_f3fb9aac67cb7f905e6e79ce71cfcdfd0f64b2e43d354613233ec92de1f20cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 27
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 28
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["elements"] ?? null), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 28, $this->getSourceContext()); })()), array(), "array", true, true)) {
            // line 29
            echo "                                        ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["elements"]) || array_key_exists("elements", $context) ? $context["elements"] : (function () { throw new Twig_Error_Runtime('Variable "elements" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["field_name"]) || array_key_exists("field_name", $context) ? $context["field_name"] : (function () { throw new Twig_Error_Runtime('Variable "field_name" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new Twig_Error_Runtime('Variable "object" does not exist.', 29, $this->getSourceContext()); })()));
            echo "
                                    ";
        }
        // line 31
        echo "                                </tr>
                            ";
        
        $__internal_f3fb9aac67cb7f905e6e79ce71cfcdfd0f64b2e43d354613233ec92de1f20cff->leave($__internal_f3fb9aac67cb7f905e6e79ce71cfcdfd0f64b2e43d354613233ec92de1f20cff_prof);

        
        $__internal_a8d843bc8c6f9099443a4bac8fe6ed31ed86835f90265a2a7851991c8bb235bb->leave($__internal_a8d843bc8c6f9099443a4bac8fe6ed31ed86835f90265a2a7851991c8bb235bb_prof);

    }

    // line 3
    public function macro_render_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f72bdb1072f6d04b026addc706726e15291aea2985e8558e93ca6e935719814d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f72bdb1072f6d04b026addc706726e15291aea2985e8558e93ca6e935719814d->enter($__internal_f72bdb1072f6d04b026addc706726e15291aea2985e8558e93ca6e935719814d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_42311aaa256c5c2c532622698876b193a0de66fe1fe5763ae76acd1c26c0b301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_42311aaa256c5c2c532622698876b193a0de66fe1fe5763ae76acd1c26c0b301->enter($__internal_42311aaa256c5c2c532622698876b193a0de66fe1fe5763ae76acd1c26c0b301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 4
            echo "    <div class=\"row\">
        ";
            // line 5
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_42311aaa256c5c2c532622698876b193a0de66fe1fe5763ae76acd1c26c0b301->leave($__internal_42311aaa256c5c2c532622698876b193a0de66fe1fe5763ae76acd1c26c0b301_prof);

            
            $__internal_f72bdb1072f6d04b026addc706726e15291aea2985e8558e93ca6e935719814d->leave($__internal_f72bdb1072f6d04b026addc706726e15291aea2985e8558e93ca6e935719814d_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 5,  234 => 4,  211 => 3,  200 => 31,  194 => 29,  192 => 28,  189 => 27,  180 => 26,  167 => 18,  158 => 17,  131 => 34,  117 => 33,  114 => 26,  97 => 25,  90 => 20,  88 => 17,  82 => 14,  76 => 13,  73 => 12,  70 => 11,  52 => 10,  34 => 9,  31 => 8,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# NEXT_MAJOR: remove this template #}

{% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}
    <div class=\"row\">
        {{ block('field_row') }}
    </div>
{% endmacro %}

{% block field_row %}
    {% for code in groups %}
        {% set show_group = admin.showgroups[code] %}

        <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}\">
            <div class=\"{{ show_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% block show_title %}
                            {{ show_group.label|trans({}, show_group.translation_domain ?: admin.translationDomain) }}
                        {% endblock %}
                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        {% for field_name in show_group.fields %}
                            {% block show_field %}
                                <tr class=\"sonata-ba-view-container\">
                                    {% if elements[field_name] is defined %}
                                        {{ elements[field_name]|render_view_element(object)}}
                                    {% endif %}
                                </tr>
                            {% endblock %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_macro.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/CRUD/base_show_macro.html.twig");
    }
}
