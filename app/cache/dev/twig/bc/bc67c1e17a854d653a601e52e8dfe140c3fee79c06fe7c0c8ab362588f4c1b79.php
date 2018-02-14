<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_2e30f742589f6b8ccc129be7f90d5a444f64d215178a46f7a54995d6d848f04c extends Twig_Template
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
        $__internal_641addf59e8e2a8633bb25230f3e7a3138a71d900554f0173971fe8ef2ede2f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641addf59e8e2a8633bb25230f3e7a3138a71d900554f0173971fe8ef2ede2f3->enter($__internal_641addf59e8e2a8633bb25230f3e7a3138a71d900554f0173971fe8ef2ede2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_641addf59e8e2a8633bb25230f3e7a3138a71d900554f0173971fe8ef2ede2f3->leave($__internal_641addf59e8e2a8633bb25230f3e7a3138a71d900554f0173971fe8ef2ede2f3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_912e8b0bc35487a7b04d7c5ac3f66aeb2ed00447bfd7b9727ab7c7a5e3f02b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912e8b0bc35487a7b04d7c5ac3f66aeb2ed00447bfd7b9727ab7c7a5e3f02b89->enter($__internal_912e8b0bc35487a7b04d7c5ac3f66aeb2ed00447bfd7b9727ab7c7a5e3f02b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_912e8b0bc35487a7b04d7c5ac3f66aeb2ed00447bfd7b9727ab7c7a5e3f02b89->leave($__internal_912e8b0bc35487a7b04d7c5ac3f66aeb2ed00447bfd7b9727ab7c7a5e3f02b89_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c10790c5e97e7a0b605ee777fe3e7172c756856b3635d69d756514980e50815f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10790c5e97e7a0b605ee777fe3e7172c756856b3635d69d756514980e50815f->enter($__internal_c10790c5e97e7a0b605ee777fe3e7172c756856b3635d69d756514980e50815f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_c10790c5e97e7a0b605ee777fe3e7172c756856b3635d69d756514980e50815f->leave($__internal_c10790c5e97e7a0b605ee777fe3e7172c756856b3635d69d756514980e50815f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3dee3a7813c87fddfbb21f6fe8be42f14311414e3729831ce726a075e21a0ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dee3a7813c87fddfbb21f6fe8be42f14311414e3729831ce726a075e21a0ea3->enter($__internal_3dee3a7813c87fddfbb21f6fe8be42f14311414e3729831ce726a075e21a0ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_3dee3a7813c87fddfbb21f6fe8be42f14311414e3729831ce726a075e21a0ea3->leave($__internal_3dee3a7813c87fddfbb21f6fe8be42f14311414e3729831ce726a075e21a0ea3_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_876b9070a11def2e73fa7e45cebf05db8f387272a0a48581e7fdf901e0a20792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876b9070a11def2e73fa7e45cebf05db8f387272a0a48581e7fdf901e0a20792->enter($__internal_876b9070a11def2e73fa7e45cebf05db8f387272a0a48581e7fdf901e0a20792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_876b9070a11def2e73fa7e45cebf05db8f387272a0a48581e7fdf901e0a20792->leave($__internal_876b9070a11def2e73fa7e45cebf05db8f387272a0a48581e7fdf901e0a20792_prof);

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
