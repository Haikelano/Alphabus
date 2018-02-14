<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_78267e7326751a82b6a9dbc8bc07076f9c955cc199bb20b19d5e7d9b338cabca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1d6a33d04f33afe54cbbdf3ea2bfcc618df6cd795d6faa5878f17322ef3abcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d6a33d04f33afe54cbbdf3ea2bfcc618df6cd795d6faa5878f17322ef3abcc->enter($__internal_c1d6a33d04f33afe54cbbdf3ea2bfcc618df6cd795d6faa5878f17322ef3abcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1d6a33d04f33afe54cbbdf3ea2bfcc618df6cd795d6faa5878f17322ef3abcc->leave($__internal_c1d6a33d04f33afe54cbbdf3ea2bfcc618df6cd795d6faa5878f17322ef3abcc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e85025da876a99e108a2ab0161d9c6cfd19adca07b7201b0c20d41325036232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e85025da876a99e108a2ab0161d9c6cfd19adca07b7201b0c20d41325036232->enter($__internal_0e85025da876a99e108a2ab0161d9c6cfd19adca07b7201b0c20d41325036232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0e85025da876a99e108a2ab0161d9c6cfd19adca07b7201b0c20d41325036232->leave($__internal_0e85025da876a99e108a2ab0161d9c6cfd19adca07b7201b0c20d41325036232_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f51289c6bb10978c8c4477dc8f97d768eb7dd81b4a170a9281eefcfe7ecd6ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51289c6bb10978c8c4477dc8f97d768eb7dd81b4a170a9281eefcfe7ecd6ae8->enter($__internal_f51289c6bb10978c8c4477dc8f97d768eb7dd81b4a170a9281eefcfe7ecd6ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f51289c6bb10978c8c4477dc8f97d768eb7dd81b4a170a9281eefcfe7ecd6ae8->leave($__internal_f51289c6bb10978c8c4477dc8f97d768eb7dd81b4a170a9281eefcfe7ecd6ae8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_211705ef387806c5b04428f568cd14df5289b8baadd452d410b9a478f7f5a31b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211705ef387806c5b04428f568cd14df5289b8baadd452d410b9a478f7f5a31b->enter($__internal_211705ef387806c5b04428f568cd14df5289b8baadd452d410b9a478f7f5a31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_211705ef387806c5b04428f568cd14df5289b8baadd452d410b9a478f7f5a31b->leave($__internal_211705ef387806c5b04428f568cd14df5289b8baadd452d410b9a478f7f5a31b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
