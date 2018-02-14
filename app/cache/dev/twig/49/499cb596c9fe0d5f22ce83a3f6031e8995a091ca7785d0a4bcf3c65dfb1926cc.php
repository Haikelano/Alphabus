<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_94c728b53924bf12aa76e44c7151dc5efba4a2faafc11a95d85491b136834ba1 extends Twig_Template
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
        $__internal_ebc92545eb58f8032cf65704e45f76c6c86c321602bb3f072d67d89c70870501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc92545eb58f8032cf65704e45f76c6c86c321602bb3f072d67d89c70870501->enter($__internal_ebc92545eb58f8032cf65704e45f76c6c86c321602bb3f072d67d89c70870501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_ebc92545eb58f8032cf65704e45f76c6c86c321602bb3f072d67d89c70870501->leave($__internal_ebc92545eb58f8032cf65704e45f76c6c86c321602bb3f072d67d89c70870501_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f23212166e2f073ca325709c1e42fdbe393a14af88e829db2374764bf9ec57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f23212166e2f073ca325709c1e42fdbe393a14af88e829db2374764bf9ec57d->enter($__internal_3f23212166e2f073ca325709c1e42fdbe393a14af88e829db2374764bf9ec57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_3f23212166e2f073ca325709c1e42fdbe393a14af88e829db2374764bf9ec57d->leave($__internal_3f23212166e2f073ca325709c1e42fdbe393a14af88e829db2374764bf9ec57d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_90e50f8e9f9c2c68cfb252e8ea3b1e7f01384849bf287f66c48f71456155cc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e50f8e9f9c2c68cfb252e8ea3b1e7f01384849bf287f66c48f71456155cc70->enter($__internal_90e50f8e9f9c2c68cfb252e8ea3b1e7f01384849bf287f66c48f71456155cc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_90e50f8e9f9c2c68cfb252e8ea3b1e7f01384849bf287f66c48f71456155cc70->leave($__internal_90e50f8e9f9c2c68cfb252e8ea3b1e7f01384849bf287f66c48f71456155cc70_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_297587a95056d650f50ad8f5a05f6ac63577d6d50f4c4f2b8e8847426cd441b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297587a95056d650f50ad8f5a05f6ac63577d6d50f4c4f2b8e8847426cd441b5->enter($__internal_297587a95056d650f50ad8f5a05f6ac63577d6d50f4c4f2b8e8847426cd441b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_297587a95056d650f50ad8f5a05f6ac63577d6d50f4c4f2b8e8847426cd441b5->leave($__internal_297587a95056d650f50ad8f5a05f6ac63577d6d50f4c4f2b8e8847426cd441b5_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a860754af5ed09bbf1a05eb733c7426850ae20db58854ebee36b943ca608a6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a860754af5ed09bbf1a05eb733c7426850ae20db58854ebee36b943ca608a6da->enter($__internal_a860754af5ed09bbf1a05eb733c7426850ae20db58854ebee36b943ca608a6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a860754af5ed09bbf1a05eb733c7426850ae20db58854ebee36b943ca608a6da->leave($__internal_a860754af5ed09bbf1a05eb733c7426850ae20db58854ebee36b943ca608a6da_prof);

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
