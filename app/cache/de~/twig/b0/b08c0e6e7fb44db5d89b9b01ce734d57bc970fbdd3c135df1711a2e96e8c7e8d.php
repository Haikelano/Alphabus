<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_efd2512fa893eacac950c75334495092b0ac1dc67269e1ff7606ced1d4b56fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_91db067e5937d54bdd9a3c36b342feb5439198184225736ca71a9bb5f6c61a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91db067e5937d54bdd9a3c36b342feb5439198184225736ca71a9bb5f6c61a70->enter($__internal_91db067e5937d54bdd9a3c36b342feb5439198184225736ca71a9bb5f6c61a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91db067e5937d54bdd9a3c36b342feb5439198184225736ca71a9bb5f6c61a70->leave($__internal_91db067e5937d54bdd9a3c36b342feb5439198184225736ca71a9bb5f6c61a70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a15d23216863003667775a5cbae5c9c4aa65fb63859cb17e2137bbbd290f8569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15d23216863003667775a5cbae5c9c4aa65fb63859cb17e2137bbbd290f8569->enter($__internal_a15d23216863003667775a5cbae5c9c4aa65fb63859cb17e2137bbbd290f8569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a15d23216863003667775a5cbae5c9c4aa65fb63859cb17e2137bbbd290f8569->leave($__internal_a15d23216863003667775a5cbae5c9c4aa65fb63859cb17e2137bbbd290f8569_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_175aac5d29532027a297d2d29dc4df21139acbe8f060f71fc82aa74043a7bae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175aac5d29532027a297d2d29dc4df21139acbe8f060f71fc82aa74043a7bae8->enter($__internal_175aac5d29532027a297d2d29dc4df21139acbe8f060f71fc82aa74043a7bae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_175aac5d29532027a297d2d29dc4df21139acbe8f060f71fc82aa74043a7bae8->leave($__internal_175aac5d29532027a297d2d29dc4df21139acbe8f060f71fc82aa74043a7bae8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4c6c0815896324d2734f2534fda1e3160b0fca5c1479d955f506091262621bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c6c0815896324d2734f2534fda1e3160b0fca5c1479d955f506091262621bc->enter($__internal_b4c6c0815896324d2734f2534fda1e3160b0fca5c1479d955f506091262621bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b4c6c0815896324d2734f2534fda1e3160b0fca5c1479d955f506091262621bc->leave($__internal_b4c6c0815896324d2734f2534fda1e3160b0fca5c1479d955f506091262621bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
