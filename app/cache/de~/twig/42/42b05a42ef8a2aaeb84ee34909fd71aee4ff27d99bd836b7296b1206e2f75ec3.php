<?php

/* ::login.html.twig */
class __TwigTemplate_15d85adab2a2e508f4ec26f953579a15be4302e4111f19fa72497f50d2063361 extends Twig_Template
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
        $__internal_7c3f9f8014feb0d22515bbfaaf418842eb3f5ad9c1acbb68ed61c4503b874051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3f9f8014feb0d22515bbfaaf418842eb3f5ad9c1acbb68ed61c4503b874051->enter($__internal_7c3f9f8014feb0d22515bbfaaf418842eb3f5ad9c1acbb68ed61c4503b874051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login.html.twig"));

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
        // line 18
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
        
        $__internal_7c3f9f8014feb0d22515bbfaaf418842eb3f5ad9c1acbb68ed61c4503b874051->leave($__internal_7c3f9f8014feb0d22515bbfaaf418842eb3f5ad9c1acbb68ed61c4503b874051_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aebae678cb2098622fe2dca961faa048d657fd85a6230ef1a500c31ba9e8c6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebae678cb2098622fe2dca961faa048d657fd85a6230ef1a500c31ba9e8c6b9->enter($__internal_aebae678cb2098622fe2dca961faa048d657fd85a6230ef1a500c31ba9e8c6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_aebae678cb2098622fe2dca961faa048d657fd85a6230ef1a500c31ba9e8c6b9->leave($__internal_aebae678cb2098622fe2dca961faa048d657fd85a6230ef1a500c31ba9e8c6b9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fcd5c59590385c6b22b10b1a6f1185461196f380c124250b4ac2cd0862535007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd5c59590385c6b22b10b1a6f1185461196f380c124250b4ac2cd0862535007->enter($__internal_fcd5c59590385c6b22b10b1a6f1185461196f380c124250b4ac2cd0862535007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("login/bootsrap.min.css"), "html", null, true);
        echo "\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->

            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">



        ";
        
        $__internal_fcd5c59590385c6b22b10b1a6f1185461196f380c124250b4ac2cd0862535007->leave($__internal_fcd5c59590385c6b22b10b1a6f1185461196f380c124250b4ac2cd0862535007_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfc4ba2b55712202221b61c5b15481ee646caa78efe1c9036494eb2d00c1fabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc4ba2b55712202221b61c5b15481ee646caa78efe1c9036494eb2d00c1fabc->enter($__internal_cfc4ba2b55712202221b61c5b15481ee646caa78efe1c9036494eb2d00c1fabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cfc4ba2b55712202221b61c5b15481ee646caa78efe1c9036494eb2d00c1fabc->leave($__internal_cfc4ba2b55712202221b61c5b15481ee646caa78efe1c9036494eb2d00c1fabc_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1744db2df79ee1f2a3dd27b1c919f9234874095c5f67620e11a5f2f3ea0314da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1744db2df79ee1f2a3dd27b1c919f9234874095c5f67620e11a5f2f3ea0314da->enter($__internal_1744db2df79ee1f2a3dd27b1c919f9234874095c5f67620e11a5f2f3ea0314da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_1744db2df79ee1f2a3dd27b1c919f9234874095c5f67620e11a5f2f3ea0314da->leave($__internal_1744db2df79ee1f2a3dd27b1c919f9234874095c5f67620e11a5f2f3ea0314da_prof);

    }

    public function getTemplateName()
    {
        return "::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 27,  128 => 26,  124 => 25,  121 => 24,  115 => 23,  104 => 22,  92 => 13,  85 => 9,  81 => 8,  78 => 7,  72 => 6,  60 => 5,  51 => 30,  48 => 23,  46 => 22,  38 => 18,  36 => 6,  32 => 5,  26 => 1,);
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

            <link rel=\"stylesheet\" href=\"{{ asset('login/bootstrap.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('login/bootsrap.min.css') }}\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->

            <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\">



        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>

        {% endblock %}
    </body>
</html>
", "::login.html.twig", "/var/www/html/Alphabus/app/Resources/views/login.html.twig");
    }
}
