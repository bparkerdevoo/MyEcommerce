<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_772ad97ec9db0e007dc7519ffc611f6682a0ce318c1906246a9797e83312f259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["admin_pool"]) || array_key_exists("admin_pool", $context) ? $context["admin_pool"] : (function () { throw new Twig_Error_Runtime('Variable "admin_pool" does not exist.', 12, $this->getSourceContext()); })()), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8576b96b8cb115c873b9300c8018a94bc3a7489dce083a38a3d2c37575233b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8576b96b8cb115c873b9300c8018a94bc3a7489dce083a38a3d2c37575233b2->enter($__internal_a8576b96b8cb115c873b9300c8018a94bc3a7489dce083a38a3d2c37575233b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $__internal_3d16e4ee2424b296ccf48f4239b53dfd70cb398cc971dd4d495d5eefeeebc9db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d16e4ee2424b296ccf48f4239b53dfd70cb398cc971dd4d495d5eefeeebc9db->enter($__internal_3d16e4ee2424b296ccf48f4239b53dfd70cb398cc971dd4d495d5eefeeebc9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8576b96b8cb115c873b9300c8018a94bc3a7489dce083a38a3d2c37575233b2->leave($__internal_a8576b96b8cb115c873b9300c8018a94bc3a7489dce083a38a3d2c37575233b2_prof);

        
        $__internal_3d16e4ee2424b296ccf48f4239b53dfd70cb398cc971dd4d495d5eefeeebc9db->leave($__internal_3d16e4ee2424b296ccf48f4239b53dfd70cb398cc971dd4d495d5eefeeebc9db_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_b5cb048773f488c541136dc97c1dbdcf8df52df4d67ed7dc23b6eae5258dad59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5cb048773f488c541136dc97c1dbdcf8df52df4d67ed7dc23b6eae5258dad59->enter($__internal_b5cb048773f488c541136dc97c1dbdcf8df52df4d67ed7dc23b6eae5258dad59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_478aa8964a2c3ce6a43b84316f270c06a3073d31dbb00af2028daf1299550a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478aa8964a2c3ce6a43b84316f270c06a3073d31dbb00af2028daf1299550a60->enter($__internal_478aa8964a2c3ce6a43b84316f270c06a3073d31dbb00af2028daf1299550a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_478aa8964a2c3ce6a43b84316f270c06a3073d31dbb00af2028daf1299550a60->leave($__internal_478aa8964a2c3ce6a43b84316f270c06a3073d31dbb00af2028daf1299550a60_prof);

        
        $__internal_b5cb048773f488c541136dc97c1dbdcf8df52df4d67ed7dc23b6eae5258dad59->leave($__internal_b5cb048773f488c541136dc97c1dbdcf8df52df4d67ed7dc23b6eae5258dad59_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_45bb707485581d44d70c2e89f3aaa8a7630890f4fb91d427d15485ee0d7f6d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45bb707485581d44d70c2e89f3aaa8a7630890f4fb91d427d15485ee0d7f6d7b->enter($__internal_45bb707485581d44d70c2e89f3aaa8a7630890f4fb91d427d15485ee0d7f6d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_bace0901932ad5a1d20346912bc3d9a2afc869c643f846eecfdc135782d4fe84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bace0901932ad5a1d20346912bc3d9a2afc869c643f846eecfdc135782d4fe84->enter($__internal_bace0901932ad5a1d20346912bc3d9a2afc869c643f846eecfdc135782d4fe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_bace0901932ad5a1d20346912bc3d9a2afc869c643f846eecfdc135782d4fe84->leave($__internal_bace0901932ad5a1d20346912bc3d9a2afc869c643f846eecfdc135782d4fe84_prof);

        
        $__internal_45bb707485581d44d70c2e89f3aaa8a7630890f4fb91d427d15485ee0d7f6d7b->leave($__internal_45bb707485581d44d70c2e89f3aaa8a7630890f4fb91d427d15485ee0d7f6d7b_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_8a0e155c7b22875b1c668d3cbd00ae9eb402af1072f983be36e6fc26dd95750c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0e155c7b22875b1c668d3cbd00ae9eb402af1072f983be36e6fc26dd95750c->enter($__internal_8a0e155c7b22875b1c668d3cbd00ae9eb402af1072f983be36e6fc26dd95750c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_91f0904b5cfbc2c3d2ba06cab843701674fc4ea745ade4cde0aeb672bf24175d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f0904b5cfbc2c3d2ba06cab843701674fc4ea745ade4cde0aeb672bf24175d->enter($__internal_91f0904b5cfbc2c3d2ba06cab843701674fc4ea745ade4cde0aeb672bf24175d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_91f0904b5cfbc2c3d2ba06cab843701674fc4ea745ade4cde0aeb672bf24175d->leave($__internal_91f0904b5cfbc2c3d2ba06cab843701674fc4ea745ade4cde0aeb672bf24175d_prof);

        
        $__internal_8a0e155c7b22875b1c668d3cbd00ae9eb402af1072f983be36e6fc26dd95750c->leave($__internal_8a0e155c7b22875b1c668d3cbd00ae9eb402af1072f983be36e6fc26dd95750c_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_94fe45efc97a88fe2b294172fa4a7d9f75dee8d13644d9e3ab7151b3a962f7f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94fe45efc97a88fe2b294172fa4a7d9f75dee8d13644d9e3ab7151b3a962f7f0->enter($__internal_94fe45efc97a88fe2b294172fa4a7d9f75dee8d13644d9e3ab7151b3a962f7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_e3b562ae0032a4f7f38057fdf080cba47c0a1368f4330f3a48c9ffa641532a34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b562ae0032a4f7f38057fdf080cba47c0a1368f4330f3a48c9ffa641532a34->enter($__internal_e3b562ae0032a4f7f38057fdf080cba47c0a1368f4330f3a48c9ffa641532a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_e3b562ae0032a4f7f38057fdf080cba47c0a1368f4330f3a48c9ffa641532a34->leave($__internal_e3b562ae0032a4f7f38057fdf080cba47c0a1368f4330f3a48c9ffa641532a34_prof);

        
        $__internal_94fe45efc97a88fe2b294172fa4a7d9f75dee8d13644d9e3ab7151b3a962f7f0->leave($__internal_94fe45efc97a88fe2b294172fa4a7d9f75dee8d13644d9e3ab7151b3a962f7f0_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7126b98b19afed93a158a081b8ddb33b504f5b5ea8daee0db1c19d940de6114e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7126b98b19afed93a158a081b8ddb33b504f5b5ea8daee0db1c19d940de6114e->enter($__internal_7126b98b19afed93a158a081b8ddb33b504f5b5ea8daee0db1c19d940de6114e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7452ff28fdaa3cdcfe3ad703489bf63b59eb92e65da6bed0e6751a14f13d0ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7452ff28fdaa3cdcfe3ad703489bf63b59eb92e65da6bed0e6751a14f13d0ff7->enter($__internal_7452ff28fdaa3cdcfe3ad703489bf63b59eb92e65da6bed0e6751a14f13d0ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
        
        $__internal_7452ff28fdaa3cdcfe3ad703489bf63b59eb92e65da6bed0e6751a14f13d0ff7->leave($__internal_7452ff28fdaa3cdcfe3ad703489bf63b59eb92e65da6bed0e6751a14f13d0ff7_prof);

        
        $__internal_7126b98b19afed93a158a081b8ddb33b504f5b5ea8daee0db1c19d940de6114e->leave($__internal_7126b98b19afed93a158a081b8ddb33b504f5b5ea8daee0db1c19d940de6114e_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_2e7afa4ab25fed76e206ce281acf1c8b8202ac4bf347e871123b05d8f5b03558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7afa4ab25fed76e206ce281acf1c8b8202ac4bf347e871123b05d8f5b03558->enter($__internal_2e7afa4ab25fed76e206ce281acf1c8b8202ac4bf347e871123b05d8f5b03558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_230903c98c69cb021fd947f358f77be192a58721b455453711e4907dd1413b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230903c98c69cb021fd947f358f77be192a58721b455453711e4907dd1413b68->enter($__internal_230903c98c69cb021fd947f358f77be192a58721b455453711e4907dd1413b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_230903c98c69cb021fd947f358f77be192a58721b455453711e4907dd1413b68->leave($__internal_230903c98c69cb021fd947f358f77be192a58721b455453711e4907dd1413b68_prof);

        
        $__internal_2e7afa4ab25fed76e206ce281acf1c8b8202ac4bf347e871123b05d8f5b03558->leave($__internal_2e7afa4ab25fed76e206ce281acf1c8b8202ac4bf347e871123b05d8f5b03558_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_50ee0b76dc6ad8548a1f56c006f1ca5ab527e91adc64e17cde6b1c45de58def8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ee0b76dc6ad8548a1f56c006f1ca5ab527e91adc64e17cde6b1c45de58def8->enter($__internal_50ee0b76dc6ad8548a1f56c006f1ca5ab527e91adc64e17cde6b1c45de58def8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_ecc14a374a5656c57bf0775c4e6da197f2c3f5c675481d9f8dc8a592e759b385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc14a374a5656c57bf0775c4e6da197f2c3f5c675481d9f8dc8a592e759b385->enter($__internal_ecc14a374a5656c57bf0775c4e6da197f2c3f5c675481d9f8dc8a592e759b385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_ecc14a374a5656c57bf0775c4e6da197f2c3f5c675481d9f8dc8a592e759b385->leave($__internal_ecc14a374a5656c57bf0775c4e6da197f2c3f5c675481d9f8dc8a592e759b385_prof);

        
        $__internal_50ee0b76dc6ad8548a1f56c006f1ca5ab527e91adc64e17cde6b1c45de58def8->leave($__internal_50ee0b76dc6ad8548a1f56c006f1ca5ab527e91adc64e17cde6b1c45de58def8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 32,  151 => 31,  142 => 30,  122 => 20,  113 => 19,  96 => 17,  79 => 16,  62 => 15,  45 => 14,  24 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/sonata-project/admin-bundle/src/Resources/views/empty_layout.html.twig");
    }
}
