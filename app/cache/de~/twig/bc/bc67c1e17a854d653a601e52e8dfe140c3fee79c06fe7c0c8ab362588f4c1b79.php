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
        $__internal_f1549d04baf77ebd5fb36f84f036d96ceb34b91469d95725f6ffdea1f0b84b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1549d04baf77ebd5fb36f84f036d96ceb34b91469d95725f6ffdea1f0b84b84->enter($__internal_f1549d04baf77ebd5fb36f84f036d96ceb34b91469d95725f6ffdea1f0b84b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

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
        
        $__internal_f1549d04baf77ebd5fb36f84f036d96ceb34b91469d95725f6ffdea1f0b84b84->leave($__internal_f1549d04baf77ebd5fb36f84f036d96ceb34b91469d95725f6ffdea1f0b84b84_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bc9a86bf46e15cccdf0fad0007ece3ac64ea91d1986d5108febd9de5ea8b7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc9a86bf46e15cccdf0fad0007ece3ac64ea91d1986d5108febd9de5ea8b7bc->enter($__internal_1bc9a86bf46e15cccdf0fad0007ece3ac64ea91d1986d5108febd9de5ea8b7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_1bc9a86bf46e15cccdf0fad0007ece3ac64ea91d1986d5108febd9de5ea8b7bc->leave($__internal_1bc9a86bf46e15cccdf0fad0007ece3ac64ea91d1986d5108febd9de5ea8b7bc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f3a5a8bea00c351dadf1c88d3d0816eec305821fb99af58547c63b4bb2a2d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3a5a8bea00c351dadf1c88d3d0816eec305821fb99af58547c63b4bb2a2d4f->enter($__internal_0f3a5a8bea00c351dadf1c88d3d0816eec305821fb99af58547c63b4bb2a2d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_0f3a5a8bea00c351dadf1c88d3d0816eec305821fb99af58547c63b4bb2a2d4f->leave($__internal_0f3a5a8bea00c351dadf1c88d3d0816eec305821fb99af58547c63b4bb2a2d4f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7ce05585ed855843a1d40d4144851bc4cc4c787d4352855b44cfb9150d0baee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ce05585ed855843a1d40d4144851bc4cc4c787d4352855b44cfb9150d0baee->enter($__internal_d7ce05585ed855843a1d40d4144851bc4cc4c787d4352855b44cfb9150d0baee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_d7ce05585ed855843a1d40d4144851bc4cc4c787d4352855b44cfb9150d0baee->leave($__internal_d7ce05585ed855843a1d40d4144851bc4cc4c787d4352855b44cfb9150d0baee_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da47213b3c94d07fa5358a6534064bc5ebca5b01ea4fddd2645e571cb9fa07a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da47213b3c94d07fa5358a6534064bc5ebca5b01ea4fddd2645e571cb9fa07a5->enter($__internal_da47213b3c94d07fa5358a6534064bc5ebca5b01ea4fddd2645e571cb9fa07a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_da47213b3c94d07fa5358a6534064bc5ebca5b01ea4fddd2645e571cb9fa07a5->leave($__internal_da47213b3c94d07fa5358a6534064bc5ebca5b01ea4fddd2645e571cb9fa07a5_prof);

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
