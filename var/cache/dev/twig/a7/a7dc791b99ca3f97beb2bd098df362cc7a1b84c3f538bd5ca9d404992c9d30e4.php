<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_b5e7a3df2dc9c4f018994b684290995885ae33f1cee36ba896e539d20e804b0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b8430567f36b4de44eb8d4804f06fc1efe7c16d39dc9e8c59357e06d7713319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8430567f36b4de44eb8d4804f06fc1efe7c16d39dc9e8c59357e06d7713319->enter($__internal_1b8430567f36b4de44eb8d4804f06fc1efe7c16d39dc9e8c59357e06d7713319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e8db075596dbd0feee191e6a3c720e15df88759c68831cf5b5cc0594e0a60a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8db075596dbd0feee191e6a3c720e15df88759c68831cf5b5cc0594e0a60a86->enter($__internal_e8db075596dbd0feee191e6a3c720e15df88759c68831cf5b5cc0594e0a60a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1b8430567f36b4de44eb8d4804f06fc1efe7c16d39dc9e8c59357e06d7713319->leave($__internal_1b8430567f36b4de44eb8d4804f06fc1efe7c16d39dc9e8c59357e06d7713319_prof);

        
        $__internal_e8db075596dbd0feee191e6a3c720e15df88759c68831cf5b5cc0594e0a60a86->leave($__internal_e8db075596dbd0feee191e6a3c720e15df88759c68831cf5b5cc0594e0a60a86_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dafdbbbc211712bc92262dace6f0e28bc56333adc82a76325aaeff4196131aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafdbbbc211712bc92262dace6f0e28bc56333adc82a76325aaeff4196131aaa->enter($__internal_dafdbbbc211712bc92262dace6f0e28bc56333adc82a76325aaeff4196131aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c4dc5a99f39f04742ab62751b9da692ccfa044f159a6dfeb4931893207a7e46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4dc5a99f39f04742ab62751b9da692ccfa044f159a6dfeb4931893207a7e46c->enter($__internal_c4dc5a99f39f04742ab62751b9da692ccfa044f159a6dfeb4931893207a7e46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c4dc5a99f39f04742ab62751b9da692ccfa044f159a6dfeb4931893207a7e46c->leave($__internal_c4dc5a99f39f04742ab62751b9da692ccfa044f159a6dfeb4931893207a7e46c_prof);

        
        $__internal_dafdbbbc211712bc92262dace6f0e28bc56333adc82a76325aaeff4196131aaa->leave($__internal_dafdbbbc211712bc92262dace6f0e28bc56333adc82a76325aaeff4196131aaa_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e820a0f9c3e47e50b0e7e9d6479aeb2e09357685810a9d54ac086235bc74f151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e820a0f9c3e47e50b0e7e9d6479aeb2e09357685810a9d54ac086235bc74f151->enter($__internal_e820a0f9c3e47e50b0e7e9d6479aeb2e09357685810a9d54ac086235bc74f151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_928e5fb1686c5999d0918842a5a9da456096f4d026e300df27c849bfbf22a978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928e5fb1686c5999d0918842a5a9da456096f4d026e300df27c849bfbf22a978->enter($__internal_928e5fb1686c5999d0918842a5a9da456096f4d026e300df27c849bfbf22a978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_928e5fb1686c5999d0918842a5a9da456096f4d026e300df27c849bfbf22a978->leave($__internal_928e5fb1686c5999d0918842a5a9da456096f4d026e300df27c849bfbf22a978_prof);

        
        $__internal_e820a0f9c3e47e50b0e7e9d6479aeb2e09357685810a9d54ac086235bc74f151->leave($__internal_e820a0f9c3e47e50b0e7e9d6479aeb2e09357685810a9d54ac086235bc74f151_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0cae9a749dd729e9bd7432a9e73db137e94e199645a61e47fcc2c9b0e5d528e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0cae9a749dd729e9bd7432a9e73db137e94e199645a61e47fcc2c9b0e5d528e->enter($__internal_b0cae9a749dd729e9bd7432a9e73db137e94e199645a61e47fcc2c9b0e5d528e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0bc8482a9a424899a6fc2ae983874b60c0145254130da375bed93c97f310084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bc8482a9a424899a6fc2ae983874b60c0145254130da375bed93c97f310084->enter($__internal_d0bc8482a9a424899a6fc2ae983874b60c0145254130da375bed93c97f310084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d0bc8482a9a424899a6fc2ae983874b60c0145254130da375bed93c97f310084->leave($__internal_d0bc8482a9a424899a6fc2ae983874b60c0145254130da375bed93c97f310084_prof);

        
        $__internal_b0cae9a749dd729e9bd7432a9e73db137e94e199645a61e47fcc2c9b0e5d528e->leave($__internal_b0cae9a749dd729e9bd7432a9e73db137e94e199645a61e47fcc2c9b0e5d528e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/MyEcommerce/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
