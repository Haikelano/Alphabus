<?php

/* ::login.html.twig */
class __TwigTemplate_6a2706657ca726072563ba87cdb342ad0907eb933778813c03b6a896fb63c41e extends Twig_Template
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
        $__internal_6d3d7e9532885c645c38925a2ea38854b5d28761747c9f8a7dae15b98ef27fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3d7e9532885c645c38925a2ea38854b5d28761747c9f8a7dae15b98ef27fd0->enter($__internal_6d3d7e9532885c645c38925a2ea38854b5d28761747c9f8a7dae15b98ef27fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::login.html.twig"));

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
        // line 19
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "    </body>
</html>
";
        
        $__internal_6d3d7e9532885c645c38925a2ea38854b5d28761747c9f8a7dae15b98ef27fd0->leave($__internal_6d3d7e9532885c645c38925a2ea38854b5d28761747c9f8a7dae15b98ef27fd0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11fe7127b07eeca7ffc2a98448e40624af11ac256d40ccee485ce2c32215cd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11fe7127b07eeca7ffc2a98448e40624af11ac256d40ccee485ce2c32215cd30->enter($__internal_11fe7127b07eeca7ffc2a98448e40624af11ac256d40ccee485ce2c32215cd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_11fe7127b07eeca7ffc2a98448e40624af11ac256d40ccee485ce2c32215cd30->leave($__internal_11fe7127b07eeca7ffc2a98448e40624af11ac256d40ccee485ce2c32215cd30_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e4946223cee33d14a72938e2ac131724a741b0c9904d4610273636478d31a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4946223cee33d14a72938e2ac131724a741b0c9904d4610273636478d31a94->enter($__internal_9e4946223cee33d14a72938e2ac131724a741b0c9904d4610273636478d31a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->

            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">



        ";
        
        $__internal_9e4946223cee33d14a72938e2ac131724a741b0c9904d4610273636478d31a94->leave($__internal_9e4946223cee33d14a72938e2ac131724a741b0c9904d4610273636478d31a94_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_622820e6d4630915a9647a7e4318ae9a4f00b7ecad1658b53805e3c95397531e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622820e6d4630915a9647a7e4318ae9a4f00b7ecad1658b53805e3c95397531e->enter($__internal_622820e6d4630915a9647a7e4318ae9a4f00b7ecad1658b53805e3c95397531e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_622820e6d4630915a9647a7e4318ae9a4f00b7ecad1658b53805e3c95397531e->leave($__internal_622820e6d4630915a9647a7e4318ae9a4f00b7ecad1658b53805e3c95397531e_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a33923992058eb1b15aa8d095f1f858ec787a4014f4799f09e421fe66f741a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a33923992058eb1b15aa8d095f1f858ec787a4014f4799f09e421fe66f741a2->enter($__internal_7a33923992058eb1b15aa8d095f1f858ec787a4014f4799f09e421fe66f741a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_7a33923992058eb1b15aa8d095f1f858ec787a4014f4799f09e421fe66f741a2->leave($__internal_7a33923992058eb1b15aa8d095f1f858ec787a4014f4799f09e421fe66f741a2_prof);

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
        return array (  136 => 28,  132 => 27,  128 => 26,  125 => 25,  119 => 24,  108 => 23,  96 => 14,  89 => 10,  85 => 9,  81 => 8,  78 => 7,  72 => 6,  60 => 5,  51 => 31,  48 => 24,  46 => 23,  38 => 19,  36 => 6,  32 => 5,  26 => 1,);
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
