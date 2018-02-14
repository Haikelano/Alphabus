<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_433c3dfe2556efc7759365799c4fa9abc655d3a78fb8c04e39f19071775e61cb extends Twig_Template
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
        $__internal_c650032f4de2f59f842a451659091993ff8153200b6c92c14a39744d74096fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c650032f4de2f59f842a451659091993ff8153200b6c92c14a39744d74096fe6->enter($__internal_c650032f4de2f59f842a451659091993ff8153200b6c92c14a39744d74096fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_c650032f4de2f59f842a451659091993ff8153200b6c92c14a39744d74096fe6->leave($__internal_c650032f4de2f59f842a451659091993ff8153200b6c92c14a39744d74096fe6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7dc055285f6e1ca366b104609399600861ea7f6e81f779b81030f9ce2d343b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc055285f6e1ca366b104609399600861ea7f6e81f779b81030f9ce2d343b20->enter($__internal_7dc055285f6e1ca366b104609399600861ea7f6e81f779b81030f9ce2d343b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_7dc055285f6e1ca366b104609399600861ea7f6e81f779b81030f9ce2d343b20->leave($__internal_7dc055285f6e1ca366b104609399600861ea7f6e81f779b81030f9ce2d343b20_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_565071db4dbed59134ba57c79ef5a7852c9633877ac0e818d20aa13e0d048257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565071db4dbed59134ba57c79ef5a7852c9633877ac0e818d20aa13e0d048257->enter($__internal_565071db4dbed59134ba57c79ef5a7852c9633877ac0e818d20aa13e0d048257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_565071db4dbed59134ba57c79ef5a7852c9633877ac0e818d20aa13e0d048257->leave($__internal_565071db4dbed59134ba57c79ef5a7852c9633877ac0e818d20aa13e0d048257_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_92712b185bcbcbb5ae5fc6857882680f85f0827e4e91646da9e77c0e096f00d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92712b185bcbcbb5ae5fc6857882680f85f0827e4e91646da9e77c0e096f00d2->enter($__internal_92712b185bcbcbb5ae5fc6857882680f85f0827e4e91646da9e77c0e096f00d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_92712b185bcbcbb5ae5fc6857882680f85f0827e4e91646da9e77c0e096f00d2->leave($__internal_92712b185bcbcbb5ae5fc6857882680f85f0827e4e91646da9e77c0e096f00d2_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7febd5deeeba9485c81fc4d31d22ab1dfa62006bf27aa30eb2a9677dfce65cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7febd5deeeba9485c81fc4d31d22ab1dfa62006bf27aa30eb2a9677dfce65cf->enter($__internal_e7febd5deeeba9485c81fc4d31d22ab1dfa62006bf27aa30eb2a9677dfce65cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e7febd5deeeba9485c81fc4d31d22ab1dfa62006bf27aa30eb2a9677dfce65cf->leave($__internal_e7febd5deeeba9485c81fc4d31d22ab1dfa62006bf27aa30eb2a9677dfce65cf_prof);

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
