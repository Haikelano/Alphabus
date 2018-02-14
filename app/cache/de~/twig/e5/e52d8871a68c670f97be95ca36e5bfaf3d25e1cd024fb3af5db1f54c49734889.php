<?php

/* ::base.html.twig */
class __TwigTemplate_a0197d20bdc2f1a27fa39ac6a02e89c12d943e882c5d1801781fc58064ce6e06 extends Twig_Template
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
        $__internal_33fb39a37fb454a943443bf1c641288ec5f6a194e9cf19a259e7a6186eba41b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33fb39a37fb454a943443bf1c641288ec5f6a194e9cf19a259e7a6186eba41b0->enter($__internal_33fb39a37fb454a943443bf1c641288ec5f6a194e9cf19a259e7a6186eba41b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_33fb39a37fb454a943443bf1c641288ec5f6a194e9cf19a259e7a6186eba41b0->leave($__internal_33fb39a37fb454a943443bf1c641288ec5f6a194e9cf19a259e7a6186eba41b0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_382885398ca5cd04255ba18f217d4f07eb5d1e6bc9d82e9a618dfe92e88595fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382885398ca5cd04255ba18f217d4f07eb5d1e6bc9d82e9a618dfe92e88595fd->enter($__internal_382885398ca5cd04255ba18f217d4f07eb5d1e6bc9d82e9a618dfe92e88595fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_382885398ca5cd04255ba18f217d4f07eb5d1e6bc9d82e9a618dfe92e88595fd->leave($__internal_382885398ca5cd04255ba18f217d4f07eb5d1e6bc9d82e9a618dfe92e88595fd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e997c28761f859961f1d10424ac94634df36aee19e65a4e512a9f28069f2ebaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e997c28761f859961f1d10424ac94634df36aee19e65a4e512a9f28069f2ebaf->enter($__internal_e997c28761f859961f1d10424ac94634df36aee19e65a4e512a9f28069f2ebaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e997c28761f859961f1d10424ac94634df36aee19e65a4e512a9f28069f2ebaf->leave($__internal_e997c28761f859961f1d10424ac94634df36aee19e65a4e512a9f28069f2ebaf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7fa59819f17ecde63b45d69959cef5a54da05c74fc4542cf2aeaf10c76d6156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fa59819f17ecde63b45d69959cef5a54da05c74fc4542cf2aeaf10c76d6156->enter($__internal_a7fa59819f17ecde63b45d69959cef5a54da05c74fc4542cf2aeaf10c76d6156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a7fa59819f17ecde63b45d69959cef5a54da05c74fc4542cf2aeaf10c76d6156->leave($__internal_a7fa59819f17ecde63b45d69959cef5a54da05c74fc4542cf2aeaf10c76d6156_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a1ba717de8821379dce8c7d92d8f7bc9dc7bc8ae33367e987414563af7f935c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1ba717de8821379dce8c7d92d8f7bc9dc7bc8ae33367e987414563af7f935c->enter($__internal_1a1ba717de8821379dce8c7d92d8f7bc9dc7bc8ae33367e987414563af7f935c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1a1ba717de8821379dce8c7d92d8f7bc9dc7bc8ae33367e987414563af7f935c->leave($__internal_1a1ba717de8821379dce8c7d92d8f7bc9dc7bc8ae33367e987414563af7f935c_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/Alphabus/app/Resources/views/base.html.twig");
    }
}
