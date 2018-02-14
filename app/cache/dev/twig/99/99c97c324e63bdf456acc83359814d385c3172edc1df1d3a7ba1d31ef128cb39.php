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
        $__internal_bcb295853bdd5bdc4a8dfdc382ca6e9f1834435e323ac33e9565c75998ef33a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb295853bdd5bdc4a8dfdc382ca6e9f1834435e323ac33e9565c75998ef33a4->enter($__internal_bcb295853bdd5bdc4a8dfdc382ca6e9f1834435e323ac33e9565c75998ef33a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_bcb295853bdd5bdc4a8dfdc382ca6e9f1834435e323ac33e9565c75998ef33a4->leave($__internal_bcb295853bdd5bdc4a8dfdc382ca6e9f1834435e323ac33e9565c75998ef33a4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d0166eb879e8254ee896e92d0a1e661793b8c3a31afba4f3651a0320e3fd555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0166eb879e8254ee896e92d0a1e661793b8c3a31afba4f3651a0320e3fd555->enter($__internal_7d0166eb879e8254ee896e92d0a1e661793b8c3a31afba4f3651a0320e3fd555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_7d0166eb879e8254ee896e92d0a1e661793b8c3a31afba4f3651a0320e3fd555->leave($__internal_7d0166eb879e8254ee896e92d0a1e661793b8c3a31afba4f3651a0320e3fd555_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_473ed53a3a78af45c08cbe064bb37db26fd4d9fff867db0219ffccf4eac45267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473ed53a3a78af45c08cbe064bb37db26fd4d9fff867db0219ffccf4eac45267->enter($__internal_473ed53a3a78af45c08cbe064bb37db26fd4d9fff867db0219ffccf4eac45267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_473ed53a3a78af45c08cbe064bb37db26fd4d9fff867db0219ffccf4eac45267->leave($__internal_473ed53a3a78af45c08cbe064bb37db26fd4d9fff867db0219ffccf4eac45267_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_88e452893d93e9bda98bb8853106ceec2aa7d7f613b0605b1b70d4ccbf7346de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e452893d93e9bda98bb8853106ceec2aa7d7f613b0605b1b70d4ccbf7346de->enter($__internal_88e452893d93e9bda98bb8853106ceec2aa7d7f613b0605b1b70d4ccbf7346de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_88e452893d93e9bda98bb8853106ceec2aa7d7f613b0605b1b70d4ccbf7346de->leave($__internal_88e452893d93e9bda98bb8853106ceec2aa7d7f613b0605b1b70d4ccbf7346de_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e48bf5881a4330bab19351a26465fc2a035adb057e882e2768a42bdb0652a9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48bf5881a4330bab19351a26465fc2a035adb057e882e2768a42bdb0652a9c9->enter($__internal_e48bf5881a4330bab19351a26465fc2a035adb057e882e2768a42bdb0652a9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_e48bf5881a4330bab19351a26465fc2a035adb057e882e2768a42bdb0652a9c9->leave($__internal_e48bf5881a4330bab19351a26465fc2a035adb057e882e2768a42bdb0652a9c9_prof);

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
