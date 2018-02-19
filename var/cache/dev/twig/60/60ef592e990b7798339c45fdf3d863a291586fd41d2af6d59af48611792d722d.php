<?php

/* MSFBundle:Default:index.html.twig */
class __TwigTemplate_7201b7127babf0ad57720b44bb9789d90fc15542c146ac0a4fc0abdafd108f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Layout.html.twig", "MSFBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'citations' => array($this, 'block_citations'),
            'introduction' => array($this, 'block_introduction'),
            'blog' => array($this, 'block_blog'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70747debf2c465e5c07e524f909e9c47e5922473f7361d0d48a88277a1663482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70747debf2c465e5c07e524f909e9c47e5922473f7361d0d48a88277a1663482->enter($__internal_70747debf2c465e5c07e524f909e9c47e5922473f7361d0d48a88277a1663482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Default:index.html.twig"));

        $__internal_de38123ad59704dd69ebac02807e25effb339ee31e05cb9142e2837f3f309dfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de38123ad59704dd69ebac02807e25effb339ee31e05cb9142e2837f3f309dfb->enter($__internal_de38123ad59704dd69ebac02807e25effb339ee31e05cb9142e2837f3f309dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MSFBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70747debf2c465e5c07e524f909e9c47e5922473f7361d0d48a88277a1663482->leave($__internal_70747debf2c465e5c07e524f909e9c47e5922473f7361d0d48a88277a1663482_prof);

        
        $__internal_de38123ad59704dd69ebac02807e25effb339ee31e05cb9142e2837f3f309dfb->leave($__internal_de38123ad59704dd69ebac02807e25effb339ee31e05cb9142e2837f3f309dfb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f14b001c6ac5ef8ad33ed16dc10e126bd1e1f568d906d3f2b291742dcad99fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14b001c6ac5ef8ad33ed16dc10e126bd1e1f568d906d3f2b291742dcad99fc7->enter($__internal_f14b001c6ac5ef8ad33ed16dc10e126bd1e1f568d906d3f2b291742dcad99fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b643c187869c0fcd6b25ce24171ee1c18a7d81804789f4d3231e0aea5785e7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b643c187869c0fcd6b25ce24171ee1c18a7d81804789f4d3231e0aea5785e7d5->enter($__internal_b643c187869c0fcd6b25ce24171ee1c18a7d81804789f4d3231e0aea5785e7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <hr>
        <div class=\"row\">
            <div class=\"span8 offset2\">
                <h1>BIENVENUE CHEZ MY SCENT FACTORY</h1>
                <h4>Le Bar d'ambiances</h4>
            </div>

        </div>
        <div class=\"row\">
            <div class=\"span10 offset2\">

            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new Twig_Error_Runtime('Variable "image" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 17
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(twig_get_attribute($this->env, $this->getSourceContext(), $context["photo"], "path", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["photo"], "alt", array()), "html", null, true);
            echo "\" height=\"200\" width=\"200\"  >

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                        </div>
                </div>

            </div>
    <hr>
    <div class=\"row\">

    ";
        // line 27
        $this->displayBlock('citations', $context, $blocks);
        // line 40
        echo "    </div>
    <hr>
    <div class=\"row\">

            <div class=\"span12\">

                <h2>Shopping creation</h2>

            </div>


        ";
        // line 51
        $this->displayBlock('introduction', $context, $blocks);
        // line 110
        echo "
        <div class=\"row\">
            <div class=\"span12\">
                <hr>
                <H2>Le concept ... <a href=\"\">A propos de la créatrice</a></H2>
                    <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_blog1.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
";
        // line 118
        $this->displayBlock('blog', $context, $blocks);
        // line 173
        echo "

";
        
        $__internal_b643c187869c0fcd6b25ce24171ee1c18a7d81804789f4d3231e0aea5785e7d5->leave($__internal_b643c187869c0fcd6b25ce24171ee1c18a7d81804789f4d3231e0aea5785e7d5_prof);

        
        $__internal_f14b001c6ac5ef8ad33ed16dc10e126bd1e1f568d906d3f2b291742dcad99fc7->leave($__internal_f14b001c6ac5ef8ad33ed16dc10e126bd1e1f568d906d3f2b291742dcad99fc7_prof);

    }

    // line 27
    public function block_citations($context, array $blocks = array())
    {
        $__internal_be48795456f27f139d5b8154c0b29fc1c5a4887a6502eddd37daa90630a0d60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be48795456f27f139d5b8154c0b29fc1c5a4887a6502eddd37daa90630a0d60a->enter($__internal_be48795456f27f139d5b8154c0b29fc1c5a4887a6502eddd37daa90630a0d60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "citations"));

        $__internal_f3bd7f4350e4665b2c83d1e29d6482a3ff9f99ac372da1f450927bb31dd1411a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bd7f4350e4665b2c83d1e29d6482a3ff9f99ac372da1f450927bb31dd1411a->enter($__internal_f3bd7f4350e4665b2c83d1e29d6482a3ff9f99ac372da1f450927bb31dd1411a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "citations"));

        // line 28
        echo "                    <div class=\"span6\">
                        <p>Ici laissez libre court à vos désires d'ambiance.</p>
                        <p>MyScentFactory - <em>'Mon laboratoire de parfum'</em>, vos propose une opportunité de jouer à l'apprenti parfumeur , en association divers
                            <a href=\"\">fragrance</a>, au <a href=\"\">support</a> de diffusion de votre choix.</p>
                    </div>
        <div class=\"span6\">

        <p> MSF est votre terrain de jeux, pour recevoir  ou offrir un parfum d'ambiance des plus personnalisé, mais aussi naturels.</p>

                    </div>

                ";
        
        $__internal_f3bd7f4350e4665b2c83d1e29d6482a3ff9f99ac372da1f450927bb31dd1411a->leave($__internal_f3bd7f4350e4665b2c83d1e29d6482a3ff9f99ac372da1f450927bb31dd1411a_prof);

        
        $__internal_be48795456f27f139d5b8154c0b29fc1c5a4887a6502eddd37daa90630a0d60a->leave($__internal_be48795456f27f139d5b8154c0b29fc1c5a4887a6502eddd37daa90630a0d60a_prof);

    }

    // line 51
    public function block_introduction($context, array $blocks = array())
    {
        $__internal_3cdb3e71282e57c9ad09d9865fcd399d72b15c8733981511bec90f4cebbf84c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cdb3e71282e57c9ad09d9865fcd399d72b15c8733981511bec90f4cebbf84c9->enter($__internal_3cdb3e71282e57c9ad09d9865fcd399d72b15c8733981511bec90f4cebbf84c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "introduction"));

        $__internal_93b220598020926fa01a55f889eb88408671a8dc906f4e2018d0604f4af2f6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b220598020926fa01a55f889eb88408671a8dc906f4e2018d0604f4af2f6fb->enter($__internal_93b220598020926fa01a55f889eb88408671a8dc906f4e2018d0604f4af2f6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "introduction"));

        // line 52
        echo "                    <div class=\"  span3 offset1 \">

                        <div class=\"span3\">
                            <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fragrance_helper1.jpg"), "html", null, true);
        echo "\" alt=\"inspiration\" height=\"100\" width=\"100\" ) >
                        </div>
                        <div class=\"span3\">
                            <hr>
                        </div>
                        <div class=\"span3\">
                            <a href=\"\" class=\"btn btn-default\">INSPIRATION</a>
                        </div>
                        <div class=\"span3\">
                            <hr>
                        </div>
                        <div class=\"span3\">
                            <H4>1- Selectionner une inspiration</H4>
                        </div>
                    </div>

                    <div class=\"  span3 offset1\">

                        <div class=\"span3\">
                            <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_spray.jpg"), "html", null, true);
        echo "\" alt=\"inspiration\" height=\"100\" width=\"100\" ) >
                        </div>
                        <div class=\"span3\">
                            <hr>
                        </div>
                        <div class=\"span3\">
                            <a href=\"\" class=\"btn btn-default\">CHOIX DE PARFUMS</a>
                        </div>
                        <div class=\"span3\">
                            <hr>
                        </div>
                        <div class=\"span3\">
                            <h4>2 - Composer parmis nos divers parfums</h4>

                        </div>
                    </div>
                    <div class=\"span3 offset1\">

                        <div class=\"span3\">
                            <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_burner.png"), "html", null, true);
        echo "\" alt=\"inspiration\" height=\"100\" width=\"100\" ) >
                        </div>
                        <div class=\"span3\">
                            <hr>
                        </div>
                        <div class=\"span3\">
                            <a href=\"\" class=\"btn btn-default\">CHOIX DE SUPPORTS</a>
                        </div>
                        <div class=\"span3\">
                            <hr>
                        </div>
                        <div class=\"span3\">

                            <h4>3 - Associez votre support au parfum choisi</h4>
                        </div>
                    </div>
                ";
        
        $__internal_93b220598020926fa01a55f889eb88408671a8dc906f4e2018d0604f4af2f6fb->leave($__internal_93b220598020926fa01a55f889eb88408671a8dc906f4e2018d0604f4af2f6fb_prof);

        
        $__internal_3cdb3e71282e57c9ad09d9865fcd399d72b15c8733981511bec90f4cebbf84c9->leave($__internal_3cdb3e71282e57c9ad09d9865fcd399d72b15c8733981511bec90f4cebbf84c9_prof);

    }

    // line 118
    public function block_blog($context, array $blocks = array())
    {
        $__internal_89fe629901cca683190a63e966836e6a1a1dad9a4c1c3737311f685debf07abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89fe629901cca683190a63e966836e6a1a1dad9a4c1c3737311f685debf07abc->enter($__internal_89fe629901cca683190a63e966836e6a1a1dad9a4c1c3737311f685debf07abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog"));

        $__internal_4dd5386c82d7e8c4b09a75e3d24c3460310827dc33c1a029ba7e62f1a9602db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd5386c82d7e8c4b09a75e3d24c3460310827dc33c1a029ba7e62f1a9602db6->enter($__internal_4dd5386c82d7e8c4b09a75e3d24c3460310827dc33c1a029ba7e62f1a9602db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog"));

        // line 119
        echo "    <div class=\"container-fluid\">
    <hr>
        <div class=\"row\">
            <div class=\"span12\">

            <div class=\"span4 offset-2 \">



                        <h3>BLOG #msfFamilly</h3>


                        <hr>
                        <p>Nos clients sont les mieux placé pour décrire leurs expériences MSF</p>
                        <a href=\"\">En Savoir plus</a>
            </div>
            <div class=\"span4 offset2\">




                <a href=\"\"><img class=\"rounded\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_situation2.jpg"), "html", null, true);
        echo "\" alt=\"\"height=\"500\" width=\"500\"></a>
            </div>
    </div>

    </div>
        <hr>
        <div class=\"row\">
            <div class=\"span12\">

                <div class=\"span4 offset-2 \">
                    <a href=\"\"><img class=\"rounded\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/msf_situation1.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"500\" width=\"500\" ></a>



                </div>
                <div class=\"span4 offset2\">

                    <h3>News #msfÉvènement</h3>

                    <hr>
                    <a href=\"\">MSFEvents propose:</a>
                    <p>Des ateliers découverte de senteurs, de la confection artisanal, parfum ma maison DIY, et plus encore</p>

                </div>
            </div>

        </div>


    </div>
    </div>

    ";
        
        $__internal_4dd5386c82d7e8c4b09a75e3d24c3460310827dc33c1a029ba7e62f1a9602db6->leave($__internal_4dd5386c82d7e8c4b09a75e3d24c3460310827dc33c1a029ba7e62f1a9602db6_prof);

        
        $__internal_89fe629901cca683190a63e966836e6a1a1dad9a4c1c3737311f685debf07abc->leave($__internal_89fe629901cca683190a63e966836e6a1a1dad9a4c1c3737311f685debf07abc_prof);

    }

    public function getTemplateName()
    {
        return "MSFBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 150,  282 => 140,  259 => 119,  250 => 118,  223 => 93,  201 => 74,  179 => 55,  174 => 52,  165 => 51,  144 => 28,  135 => 27,  123 => 173,  121 => 118,  115 => 115,  108 => 110,  106 => 51,  93 => 40,  91 => 27,  82 => 20,  70 => 17,  66 => 16,  52 => 4,  43 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::Layout.html.twig\" %}

{% block body %}
    <div class=\"container\">
        <hr>
        <div class=\"row\">
            <div class=\"span8 offset2\">
                <h1>BIENVENUE CHEZ MY SCENT FACTORY</h1>
                <h4>Le Bar d'ambiances</h4>
            </div>

        </div>
        <div class=\"row\">
            <div class=\"span10 offset2\">

            {% for photo in image %}
                <img src=\"{{ asset(photo.path) }}\" alt=\"{{ photo.alt }}\" height=\"200\" width=\"200\"  >

            {%  endfor %}
                        </div>
                </div>

            </div>
    <hr>
    <div class=\"row\">

    {% block citations %}
                    <div class=\"span6\">
                        <p>Ici laissez libre court à vos désires d'ambiance.</p>
                        <p>MyScentFactory - <em>'Mon laboratoire de parfum'</em>, vos propose une opportunité de jouer à l'apprenti parfumeur , en association divers
                            <a href=\"\">fragrance</a>, au <a href=\"\">support</a> de diffusion de votre choix.</p>
                    </div>
        <div class=\"span6\">

        <p> MSF est votre terrain de jeux, pour recevoir  ou offrir un parfum d'ambiance des plus personnalisé, mais aussi naturels.</p>

                    </div>

                {% endblock citations %}
    </div>
    <hr>
    <div class=\"row\">

            <div class=\"span12\">

                <h2>Shopping creation</h2>

            </div>


        {% block introduction %}
                    <div class=\"  span3 offset1 \">

                        <div class=\"span3\">
                            <img src=\"{{ asset('img/fragrance_helper1.jpg') }}\" alt=\"inspiration\" height=\"100\" width=\"100\" ) >
                        </div>
                        <div class=\"span3\">
                            <hr>
                        </div>
                        <div class=\"span3\">
                            <a href=\"\" class=\"btn btn-default\">INSPIRATION</a>
                        </div>
                        <div class=\"span3\">
                            <hr>
                        </div>
                        <div class=\"span3\">
                            <H4>1- Selectionner une inspiration</H4>
                        </div>
                    </div>

                    <div class=\"  span3 offset1\">

                        <div class=\"span3\">
                            <img src=\"{{ asset('img/msf_spray.jpg') }}\" alt=\"inspiration\" height=\"100\" width=\"100\" ) >
                        </div>
                        <div class=\"span3\">
                            <hr>
                        </div>
                        <div class=\"span3\">
                            <a href=\"\" class=\"btn btn-default\">CHOIX DE PARFUMS</a>
                        </div>
                        <div class=\"span3\">
                            <hr>
                        </div>
                        <div class=\"span3\">
                            <h4>2 - Composer parmis nos divers parfums</h4>

                        </div>
                    </div>
                    <div class=\"span3 offset1\">

                        <div class=\"span3\">
                            <img src=\"{{ asset('img/msf_burner.png') }}\" alt=\"inspiration\" height=\"100\" width=\"100\" ) >
                        </div>
                        <div class=\"span3\">
                            <hr>
                        </div>
                        <div class=\"span3\">
                            <a href=\"\" class=\"btn btn-default\">CHOIX DE SUPPORTS</a>
                        </div>
                        <div class=\"span3\">
                            <hr>
                        </div>
                        <div class=\"span3\">

                            <h4>3 - Associez votre support au parfum choisi</h4>
                        </div>
                    </div>
                {% endblock introduction %}

        <div class=\"row\">
            <div class=\"span12\">
                <hr>
                <H2>Le concept ... <a href=\"\">A propos de la créatrice</a></H2>
                    <img src=\"{{ asset('img/msf_blog1.png') }}\" alt=\"\">
            </div>
        </div>
{% block blog %}
    <div class=\"container-fluid\">
    <hr>
        <div class=\"row\">
            <div class=\"span12\">

            <div class=\"span4 offset-2 \">



                        <h3>BLOG #msfFamilly</h3>


                        <hr>
                        <p>Nos clients sont les mieux placé pour décrire leurs expériences MSF</p>
                        <a href=\"\">En Savoir plus</a>
            </div>
            <div class=\"span4 offset2\">




                <a href=\"\"><img class=\"rounded\" src=\"{{ asset('img/msf_situation2.jpg') }}\" alt=\"\"height=\"500\" width=\"500\"></a>
            </div>
    </div>

    </div>
        <hr>
        <div class=\"row\">
            <div class=\"span12\">

                <div class=\"span4 offset-2 \">
                    <a href=\"\"><img class=\"rounded\" src=\"{{ asset('img/msf_situation1.jpg') }}\" alt=\"\" height=\"500\" width=\"500\" ></a>



                </div>
                <div class=\"span4 offset2\">

                    <h3>News #msfÉvènement</h3>

                    <hr>
                    <a href=\"\">MSFEvents propose:</a>
                    <p>Des ateliers découverte de senteurs, de la confection artisanal, parfum ma maison DIY, et plus encore</p>

                </div>
            </div>

        </div>


    </div>
    </div>

    {% endblock blog %}


{% endblock %}", "MSFBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/src/MyScentFactory/MSFBundle/Resources/views/Default/index.html.twig");
    }
}
