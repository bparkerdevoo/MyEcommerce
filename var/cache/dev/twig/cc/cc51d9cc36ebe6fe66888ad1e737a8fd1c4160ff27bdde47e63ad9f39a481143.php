<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_df8a70657adbb4bfd341480a7f9857b12d8bea8e861bc379683ed0968b1e3748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8003e6977f7828a8f91ed1ea6bb6aab20c4345bcfcdd99da59b2e63eaf717c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8003e6977f7828a8f91ed1ea6bb6aab20c4345bcfcdd99da59b2e63eaf717c4->enter($__internal_e8003e6977f7828a8f91ed1ea6bb6aab20c4345bcfcdd99da59b2e63eaf717c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_048de8b2b29ccc45c81dbdd4ae3abe7049cf7b011a53df644d756056f14544b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048de8b2b29ccc45c81dbdd4ae3abe7049cf7b011a53df644d756056f14544b5->enter($__internal_048de8b2b29ccc45c81dbdd4ae3abe7049cf7b011a53df644d756056f14544b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8003e6977f7828a8f91ed1ea6bb6aab20c4345bcfcdd99da59b2e63eaf717c4->leave($__internal_e8003e6977f7828a8f91ed1ea6bb6aab20c4345bcfcdd99da59b2e63eaf717c4_prof);

        
        $__internal_048de8b2b29ccc45c81dbdd4ae3abe7049cf7b011a53df644d756056f14544b5->leave($__internal_048de8b2b29ccc45c81dbdd4ae3abe7049cf7b011a53df644d756056f14544b5_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_7c771e706852ad6b0987439f08a121e468bca51691fa4ca608c62a366e9755dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c771e706852ad6b0987439f08a121e468bca51691fa4ca608c62a366e9755dd->enter($__internal_7c771e706852ad6b0987439f08a121e468bca51691fa4ca608c62a366e9755dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_8de0d89f5f7d995eec8f296c661150e1c2d2748bfb741bf8f302fd1db7db5812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de0d89f5f7d995eec8f296c661150e1c2d2748bfb741bf8f302fd1db7db5812->enter($__internal_8de0d89f5f7d995eec8f296c661150e1c2d2748bfb741bf8f302fd1db7db5812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->getSourceContext()); })()), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "extra", array(0 => "request"), "method")) ? (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->getSourceContext()); })()), "extra", array(0 => "request"), "method")) : (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_8de0d89f5f7d995eec8f296c661150e1c2d2748bfb741bf8f302fd1db7db5812->leave($__internal_8de0d89f5f7d995eec8f296c661150e1c2d2748bfb741bf8f302fd1db7db5812_prof);

        
        $__internal_7c771e706852ad6b0987439f08a121e468bca51691fa4ca608c62a366e9755dd->leave($__internal_7c771e706852ad6b0987439f08a121e468bca51691fa4ca608c62a366e9755dd_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_c0d9be504cda28955031ddddf41e847d895df4f646007471c1c69a166f52d7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d9be504cda28955031ddddf41e847d895df4f646007471c1c69a166f52d7ff->enter($__internal_c0d9be504cda28955031ddddf41e847d895df4f646007471c1c69a166f52d7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_e3347abf8b6f0a72d4d6017ffaff7a2e5b85a927d040c500de1593fd5d44ea6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3347abf8b6f0a72d4d6017ffaff7a2e5b85a927d040c500de1593fd5d44ea6a->enter($__internal_e3347abf8b6f0a72d4d6017ffaff7a2e5b85a927d040c500de1593fd5d44ea6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 10, $this->getSourceContext()); })()), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 12, $this->getSourceContext()); })()), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 12, $this->getSourceContext()); })()), "adminPool", array()), "getOption", array(0 => "role_super_admin"), "method")));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 13, $this->getSourceContext()); })()), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 13, $this->getSourceContext()); })())) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new Twig_Error_Runtime('Variable "display" does not exist.', 18, $this->getSourceContext()); })()))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 19, $this->getSourceContext()); })()), array("branch_class" => "treeview", "currentClass" => "active", "ancestorClass" => "active"));
            // line 20
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->getSourceContext()); })()), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 20, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->getSourceContext()); })()), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 21, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_e3347abf8b6f0a72d4d6017ffaff7a2e5b85a927d040c500de1593fd5d44ea6a->leave($__internal_e3347abf8b6f0a72d4d6017ffaff7a2e5b85a927d040c500de1593fd5d44ea6a_prof);

        
        $__internal_c0d9be504cda28955031ddddf41e847d895df4f646007471c1c69a166f52d7ff->leave($__internal_c0d9be504cda28955031ddddf41e847d895df4f646007471c1c69a166f52d7ff_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_2b0f261923a44d2f9d11a112997ddf09aeec63c97ce9159ac14f1e54c4331f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0f261923a44d2f9d11a112997ddf09aeec63c97ce9159ac14f1e54c4331f1e->enter($__internal_2b0f261923a44d2f9d11a112997ddf09aeec63c97ce9159ac14f1e54c4331f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_b871a6d471200646469893f148471f78b2e67111cec49f0f0dda90d02c714932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b871a6d471200646469893f148471f78b2e67111cec49f0f0dda90d02c714932->enter($__internal_b871a6d471200646469893f148471f78b2e67111cec49f0f0dda90d02c714932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 28, $this->getSourceContext()); })()), "extra", array(0 => "label_catalogue", 1 => "messages"), "method");
        // line 29
        echo "        ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 29, $this->getSourceContext()); })()), "extra", array(0 => "on_top"), "method"))) {
            // line 30
            echo "            ";
            $context["icon"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "icon"), "method"), (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->getSourceContext()); })()), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : ((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 30, $this->getSourceContext()); })()), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 32, $this->getSourceContext()); })()), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b871a6d471200646469893f148471f78b2e67111cec49f0f0dda90d02c714932->leave($__internal_b871a6d471200646469893f148471f78b2e67111cec49f0f0dda90d02c714932_prof);

        
        $__internal_2b0f261923a44d2f9d11a112997ddf09aeec63c97ce9159ac14f1e54c4331f1e->leave($__internal_2b0f261923a44d2f9d11a112997ddf09aeec63c97ce9159ac14f1e54c4331f1e_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_7a405eef9d9eb04bdcce17dc0f09aa1005214b1465b0f5520a19f1f851e43116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a405eef9d9eb04bdcce17dc0f09aa1005214b1465b0f5520a19f1f851e43116->enter($__internal_7a405eef9d9eb04bdcce17dc0f09aa1005214b1465b0f5520a19f1f851e43116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_981236e6fe6846c55a2b954571572b1430cf0efd200627b0267f6ab6e4900443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981236e6fe6846c55a2b954571572b1430cf0efd200627b0267f6ab6e4900443->enter($__internal_981236e6fe6846c55a2b954571572b1430cf0efd200627b0267f6ab6e4900443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 42, $this->getSourceContext()); })()), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 44, $this->getSourceContext()); })());
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["item"] ?? null), "extra", array(0 => "keep_open"), "method", true, true) ||  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 46, $this->getSourceContext()); })()), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_981236e6fe6846c55a2b954571572b1430cf0efd200627b0267f6ab6e4900443->leave($__internal_981236e6fe6846c55a2b954571572b1430cf0efd200627b0267f6ab6e4900443_prof);

        
        $__internal_7a405eef9d9eb04bdcce17dc0f09aa1005214b1465b0f5520a19f1f851e43116->leave($__internal_7a405eef9d9eb04bdcce17dc0f09aa1005214b1465b0f5520a19f1f851e43116_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_25cb6446f9de89d0ce996602bb2cbdd8696330c092217559f93d20e386bf722f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25cb6446f9de89d0ce996602bb2cbdd8696330c092217559f93d20e386bf722f->enter($__internal_25cb6446f9de89d0ce996602bb2cbdd8696330c092217559f93d20e386bf722f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_f6d4befe6fbbe4f089a6761f3a5f10c105d7d642f16cc7d77acf6275e566dd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d4befe6fbbe4f089a6761f3a5f10c105d7d642f16cc7d77acf6275e566dd7a->enter($__internal_f6d4befe6fbbe4f089a6761f3a5f10c105d7d642f16cc7d77acf6275e566dd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && (isset($context["is_link"]) || array_key_exists("is_link", $context) ? $context["is_link"] : (function () { throw new Twig_Error_Runtime('Variable "is_link" does not exist.', 53, $this->getSourceContext()); })()))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 53, $this->getSourceContext()); })()))) : (""));
        }
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 53, $this->getSourceContext()); })()), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 53, $this->getSourceContext()); })()), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 53, $this->getSourceContext()); })()), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 53, $this->getSourceContext()); })()), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 53, $this->getSourceContext()); })()), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_f6d4befe6fbbe4f089a6761f3a5f10c105d7d642f16cc7d77acf6275e566dd7a->leave($__internal_f6d4befe6fbbe4f089a6761f3a5f10c105d7d642f16cc7d77acf6275e566dd7a_prof);

        
        $__internal_25cb6446f9de89d0ce996602bb2cbdd8696330c092217559f93d20e386bf722f->leave($__internal_25cb6446f9de89d0ce996602bb2cbdd8696330c092217559f93d20e386bf722f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 53,  196 => 49,  193 => 47,  191 => 46,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted(sonata_admin.adminPool.getOption('role_super_admin')) ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\", ancestorClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% set translation_domain = item.extra('label_catalogue', 'messages') %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set icon = item.extra('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/Menu/sonata_menu.html.twig");
    }
}
