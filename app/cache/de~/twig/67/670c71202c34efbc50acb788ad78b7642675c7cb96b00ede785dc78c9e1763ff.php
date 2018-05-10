<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_2934866f567b29caa5b8ed9e765d2bc3f384904ce72e473c2954a9805212be8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccdb56a22eb5d559615ae4cee058c60e2d1cdece96f2920e831568a3e4d9c4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccdb56a22eb5d559615ae4cee058c60e2d1cdece96f2920e831568a3e4d9c4b3->enter($__internal_ccdb56a22eb5d559615ae4cee058c60e2d1cdece96f2920e831568a3e4d9c4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_ccdb56a22eb5d559615ae4cee058c60e2d1cdece96f2920e831568a3e4d9c4b3->leave($__internal_ccdb56a22eb5d559615ae4cee058c60e2d1cdece96f2920e831568a3e4d9c4b3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_17011543da08e6e76324dd55a26eb475f3f5894f5936803206307936fa6bb968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17011543da08e6e76324dd55a26eb475f3f5894f5936803206307936fa6bb968->enter($__internal_17011543da08e6e76324dd55a26eb475f3f5894f5936803206307936fa6bb968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_17011543da08e6e76324dd55a26eb475f3f5894f5936803206307936fa6bb968->leave($__internal_17011543da08e6e76324dd55a26eb475f3f5894f5936803206307936fa6bb968_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4de3cdfc21f1d9cfdd9706f869549e5af62deaa386f1c27995a84522269e66b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de3cdfc21f1d9cfdd9706f869549e5af62deaa386f1c27995a84522269e66b1->enter($__internal_4de3cdfc21f1d9cfdd9706f869549e5af62deaa386f1c27995a84522269e66b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_4de3cdfc21f1d9cfdd9706f869549e5af62deaa386f1c27995a84522269e66b1->leave($__internal_4de3cdfc21f1d9cfdd9706f869549e5af62deaa386f1c27995a84522269e66b1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3cc27c5f598f89daa5430a852b8e9fb4174aa6a2f9d3671918250a74d1083ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3cc27c5f598f89daa5430a852b8e9fb4174aa6a2f9d3671918250a74d1083ee->enter($__internal_b3cc27c5f598f89daa5430a852b8e9fb4174aa6a2f9d3671918250a74d1083ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_b3cc27c5f598f89daa5430a852b8e9fb4174aa6a2f9d3671918250a74d1083ee->leave($__internal_b3cc27c5f598f89daa5430a852b8e9fb4174aa6a2f9d3671918250a74d1083ee_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0dec8c27611c41cd486afba03ff44fe4b008ca63eb9f05233fe9b069f4a6d953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dec8c27611c41cd486afba03ff44fe4b008ca63eb9f05233fe9b069f4a6d953->enter($__internal_0dec8c27611c41cd486afba03ff44fe4b008ca63eb9f05233fe9b069f4a6d953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_0dec8c27611c41cd486afba03ff44fe4b008ca63eb9f05233fe9b069f4a6d953->leave($__internal_0dec8c27611c41cd486afba03ff44fe4b008ca63eb9f05233fe9b069f4a6d953_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/var/www/html/Alphabus/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
