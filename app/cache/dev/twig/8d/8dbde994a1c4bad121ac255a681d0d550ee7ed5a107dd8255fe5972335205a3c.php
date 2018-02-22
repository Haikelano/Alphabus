<?php

/* ::base.html.twig */
class __TwigTemplate_eacc3447d728cd67eb4cfaf8d58f757498a1179a9afc717c304e5e3a4e552ce7 extends Twig_Template
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
        $__internal_96029509e52dbabcf6e1a2c1421866599a8d66f3f1403da35cfca906abb463f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96029509e52dbabcf6e1a2c1421866599a8d66f3f1403da35cfca906abb463f1->enter($__internal_96029509e52dbabcf6e1a2c1421866599a8d66f3f1403da35cfca906abb463f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
        
        $__internal_96029509e52dbabcf6e1a2c1421866599a8d66f3f1403da35cfca906abb463f1->leave($__internal_96029509e52dbabcf6e1a2c1421866599a8d66f3f1403da35cfca906abb463f1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8a76bbe5c1bc79c07829bb4d32045850cbcc0881abae38aacf601672ca6a8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a76bbe5c1bc79c07829bb4d32045850cbcc0881abae38aacf601672ca6a8a3->enter($__internal_e8a76bbe5c1bc79c07829bb4d32045850cbcc0881abae38aacf601672ca6a8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e8a76bbe5c1bc79c07829bb4d32045850cbcc0881abae38aacf601672ca6a8a3->leave($__internal_e8a76bbe5c1bc79c07829bb4d32045850cbcc0881abae38aacf601672ca6a8a3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7317ce92ee6329eb124ebe71bd0cfa4062016df59aae5740d18a84fd9fc94cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7317ce92ee6329eb124ebe71bd0cfa4062016df59aae5740d18a84fd9fc94cd->enter($__internal_c7317ce92ee6329eb124ebe71bd0cfa4062016df59aae5740d18a84fd9fc94cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">





        ";
        
        $__internal_c7317ce92ee6329eb124ebe71bd0cfa4062016df59aae5740d18a84fd9fc94cd->leave($__internal_c7317ce92ee6329eb124ebe71bd0cfa4062016df59aae5740d18a84fd9fc94cd_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_eacca9e8a9f2b52a3294303e79d402b8eed4b92399e0acc5e823ad043e697648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eacca9e8a9f2b52a3294303e79d402b8eed4b92399e0acc5e823ad043e697648->enter($__internal_eacca9e8a9f2b52a3294303e79d402b8eed4b92399e0acc5e823ad043e697648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eacca9e8a9f2b52a3294303e79d402b8eed4b92399e0acc5e823ad043e697648->leave($__internal_eacca9e8a9f2b52a3294303e79d402b8eed4b92399e0acc5e823ad043e697648_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3c6a605a1376b00875f80f1b5991c826a44bf96e0e221aea05e644accf26652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c6a605a1376b00875f80f1b5991c826a44bf96e0e221aea05e644accf26652->enter($__internal_a3c6a605a1376b00875f80f1b5991c826a44bf96e0e221aea05e644accf26652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_a3c6a605a1376b00875f80f1b5991c826a44bf96e0e221aea05e644accf26652->leave($__internal_a3c6a605a1376b00875f80f1b5991c826a44bf96e0e221aea05e644accf26652_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 24,  124 => 23,  119 => 22,  113 => 21,  102 => 20,  88 => 10,  84 => 9,  80 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 27,  47 => 21,  45 => 20,  38 => 17,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}

            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">





        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>

        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/Alphabus/app/Resources/views/base.html.twig");
    }
}
