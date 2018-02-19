<?php

/* AppBundle:modules:avis.html.twig */
class __TwigTemplate_181d880ee123cbcee20e2ffc8f1d2a3d8dc6a2ae82832307c60f33b046f3c700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/Layout.html.twig", "AppBundle:modules:avis.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'avis' => array($this, 'block_avis'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19d9cfa598e666a718ab56f57bd64370fbf8a46fda3f77aea1d9ef4c61be84f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d9cfa598e666a718ab56f57bd64370fbf8a46fda3f77aea1d9ef4c61be84f7->enter($__internal_19d9cfa598e666a718ab56f57bd64370fbf8a46fda3f77aea1d9ef4c61be84f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:modules:avis.html.twig"));

        $__internal_0b0a0ed2e6fe9cbf0903f00b9baa234a19975ccea2ada8d6e6b848b1c446b4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0a0ed2e6fe9cbf0903f00b9baa234a19975ccea2ada8d6e6b848b1c446b4de->enter($__internal_0b0a0ed2e6fe9cbf0903f00b9baa234a19975ccea2ada8d6e6b848b1c446b4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:modules:avis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19d9cfa598e666a718ab56f57bd64370fbf8a46fda3f77aea1d9ef4c61be84f7->leave($__internal_19d9cfa598e666a718ab56f57bd64370fbf8a46fda3f77aea1d9ef4c61be84f7_prof);

        
        $__internal_0b0a0ed2e6fe9cbf0903f00b9baa234a19975ccea2ada8d6e6b848b1c446b4de->leave($__internal_0b0a0ed2e6fe9cbf0903f00b9baa234a19975ccea2ada8d6e6b848b1c446b4de_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a624a2ff553fc5799e81ac3049300c20496ada57772a9b28c309ad738a6493e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a624a2ff553fc5799e81ac3049300c20496ada57772a9b28c309ad738a6493e0->enter($__internal_a624a2ff553fc5799e81ac3049300c20496ada57772a9b28c309ad738a6493e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f95ae2f7356613b98e2658032b6f6b40ea0dcdbef445f6e955c25d0abf4a6452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95ae2f7356613b98e2658032b6f6b40ea0dcdbef445f6e955c25d0abf4a6452->enter($__internal_f95ae2f7356613b98e2658032b6f6b40ea0dcdbef445f6e955c25d0abf4a6452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayBlock('avis', $context, $blocks);
        
        $__internal_f95ae2f7356613b98e2658032b6f6b40ea0dcdbef445f6e955c25d0abf4a6452->leave($__internal_f95ae2f7356613b98e2658032b6f6b40ea0dcdbef445f6e955c25d0abf4a6452_prof);

        
        $__internal_a624a2ff553fc5799e81ac3049300c20496ada57772a9b28c309ad738a6493e0->leave($__internal_a624a2ff553fc5799e81ac3049300c20496ada57772a9b28c309ad738a6493e0_prof);

    }

    public function block_avis($context, array $blocks = array())
    {
        $__internal_90092f52a785aeb258454a0e24096a3be92123f64161cb6e66e599fefcd6e55c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90092f52a785aeb258454a0e24096a3be92123f64161cb6e66e599fefcd6e55c->enter($__internal_90092f52a785aeb258454a0e24096a3be92123f64161cb6e66e599fefcd6e55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avis"));

        $__internal_4380ee21c44942dfa40bbaeb14faa5a7828e560ceef442fb75614dd82b3b3299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4380ee21c44942dfa40bbaeb14faa5a7828e560ceef442fb75614dd82b3b3299->enter($__internal_4380ee21c44942dfa40bbaeb14faa5a7828e560ceef442fb75614dd82b3b3299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avis"));

        // line 4
        echo "        <h2>";
        echo twig_escape_filter($this->env, (isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new Twig_Error_Runtime('Variable "avis" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "</h2>
<div class=\"avis-container\">
    <div class=\"msf-img\"></div>
    <div class=\"description\">
        <dl class=\"description-list\">
            <dt>Categorie:</dt>
            <dd>Parfum</dd>
            <dt>Produit associé:</dt>
            <dd>huiles</dd>
            <dt>origines</dt>
            <dd>afrique</dd>
        </dl>
    </div>
</div>
<div id=\"js-avis-wrapper\"></div>




    ";
        
        $__internal_4380ee21c44942dfa40bbaeb14faa5a7828e560ceef442fb75614dd82b3b3299->leave($__internal_4380ee21c44942dfa40bbaeb14faa5a7828e560ceef442fb75614dd82b3b3299_prof);

        
        $__internal_90092f52a785aeb258454a0e24096a3be92123f64161cb6e66e599fefcd6e55c->leave($__internal_90092f52a785aeb258454a0e24096a3be92123f64161cb6e66e599fefcd6e55c_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9dbb0d2552f8d7015973299a1800a49b636de40763d4d64257312384dcc1735c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dbb0d2552f8d7015973299a1800a49b636de40763d4d64257312384dcc1735c->enter($__internal_9dbb0d2552f8d7015973299a1800a49b636de40763d4d64257312384dcc1735c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cdc3c43a11fad1e46955d068c7e758268c856373659a4f07e2cd02b9669b5246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc3c43a11fad1e46955d068c7e758268c856373659a4f07e2cd02b9669b5246->enter($__internal_cdc3c43a11fad1e46955d068c7e758268c856373659a4f07e2cd02b9669b5246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\" (https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"(https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>

    <script src=\"(https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>

    <script type=\"text/babel\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/avis.react.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/babel\">
        var avisUrl = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_avis", array("avis" => (isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new Twig_Error_Runtime('Variable "avis" does not exist.', 35, $this->getSourceContext()); })()))), "html", null, true);
        echo "';
        ReactDOM.render(
            <AvisSection url={avisUrl} />
            document.getElementById('js-avis-wrapper')
        );
    </script>


";
        
        $__internal_cdc3c43a11fad1e46955d068c7e758268c856373659a4f07e2cd02b9669b5246->leave($__internal_cdc3c43a11fad1e46955d068c7e758268c856373659a4f07e2cd02b9669b5246_prof);

        
        $__internal_9dbb0d2552f8d7015973299a1800a49b636de40763d4d64257312384dcc1735c->leave($__internal_9dbb0d2552f8d7015973299a1800a49b636de40763d4d64257312384dcc1735c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:modules:avis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 35,  120 => 33,  110 => 27,  101 => 26,  70 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout/Layout.html.twig\" %}
{% block body %}
    {% block avis %}
        <h2>{{ avis }}</h2>
<div class=\"avis-container\">
    <div class=\"msf-img\"></div>
    <div class=\"description\">
        <dl class=\"description-list\">
            <dt>Categorie:</dt>
            <dd>Parfum</dd>
            <dt>Produit associé:</dt>
            <dd>huiles</dd>
            <dt>origines</dt>
            <dd>afrique</dd>
        </dl>
    </div>
</div>
<div id=\"js-avis-wrapper\"></div>




    {% endblock avis %}
{% endblock body %}

{% block javascripts %}
    {{ parent() }}
    <script src=\" (https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"(https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>

    <script src=\"(https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>

    <script type=\"text/babel\" src=\"{{ asset('js/avis.react.js')}}\"></script>
    <script type=\"text/babel\">
        var avisUrl = '{{ path('afficher_avis', {'avis': avis}) }}';
        ReactDOM.render(
            <AvisSection url={avisUrl} />
            document.getElementById('js-avis-wrapper')
        );
    </script>


{% endblock %}", "AppBundle:modules:avis.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/AppBundle/Resources/views/modules/avis.html.twig");
    }
}
