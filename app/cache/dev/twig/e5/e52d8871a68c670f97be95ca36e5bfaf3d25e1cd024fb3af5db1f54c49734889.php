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
        $__internal_3683b23a02d31a7bb980928e07284d8c2a645902c06a5be8edae489516fd765d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3683b23a02d31a7bb980928e07284d8c2a645902c06a5be8edae489516fd765d->enter($__internal_3683b23a02d31a7bb980928e07284d8c2a645902c06a5be8edae489516fd765d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3683b23a02d31a7bb980928e07284d8c2a645902c06a5be8edae489516fd765d->leave($__internal_3683b23a02d31a7bb980928e07284d8c2a645902c06a5be8edae489516fd765d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9208dc9ef48e855695b0c4bea64b4b5611ae865e7b446c920f028c3b1b695ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9208dc9ef48e855695b0c4bea64b4b5611ae865e7b446c920f028c3b1b695ce3->enter($__internal_9208dc9ef48e855695b0c4bea64b4b5611ae865e7b446c920f028c3b1b695ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9208dc9ef48e855695b0c4bea64b4b5611ae865e7b446c920f028c3b1b695ce3->leave($__internal_9208dc9ef48e855695b0c4bea64b4b5611ae865e7b446c920f028c3b1b695ce3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62f50de56df4dd86baf35c9cacbeefebf62b749957888b213852d620cf945f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f50de56df4dd86baf35c9cacbeefebf62b749957888b213852d620cf945f7f->enter($__internal_62f50de56df4dd86baf35c9cacbeefebf62b749957888b213852d620cf945f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_62f50de56df4dd86baf35c9cacbeefebf62b749957888b213852d620cf945f7f->leave($__internal_62f50de56df4dd86baf35c9cacbeefebf62b749957888b213852d620cf945f7f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e088438683f454580b3b26ec1260681ca312f843b50047995f646d7bc391f134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e088438683f454580b3b26ec1260681ca312f843b50047995f646d7bc391f134->enter($__internal_e088438683f454580b3b26ec1260681ca312f843b50047995f646d7bc391f134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e088438683f454580b3b26ec1260681ca312f843b50047995f646d7bc391f134->leave($__internal_e088438683f454580b3b26ec1260681ca312f843b50047995f646d7bc391f134_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c6b62f9595b94a8c39ca6dd0e87290b1883bd60f5f522b48e891e66cc9b692dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b62f9595b94a8c39ca6dd0e87290b1883bd60f5f522b48e891e66cc9b692dd->enter($__internal_c6b62f9595b94a8c39ca6dd0e87290b1883bd60f5f522b48e891e66cc9b692dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c6b62f9595b94a8c39ca6dd0e87290b1883bd60f5f522b48e891e66cc9b692dd->leave($__internal_c6b62f9595b94a8c39ca6dd0e87290b1883bd60f5f522b48e891e66cc9b692dd_prof);

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
