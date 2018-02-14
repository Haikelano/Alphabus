<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3927d3259015bfaeee01b0bc81ce9ada2bf6e3aef83c7ded818fdf40974396e8 extends Twig_Template
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
        $__internal_4b09d89cd086240c0ca9b03952774861a13b0ee79945c95f1f09515971f1fe76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b09d89cd086240c0ca9b03952774861a13b0ee79945c95f1f09515971f1fe76->enter($__internal_4b09d89cd086240c0ca9b03952774861a13b0ee79945c95f1f09515971f1fe76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b09d89cd086240c0ca9b03952774861a13b0ee79945c95f1f09515971f1fe76->leave($__internal_4b09d89cd086240c0ca9b03952774861a13b0ee79945c95f1f09515971f1fe76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4f1d503724312562651f920c98366e15cab38c581ea81bad2c0e7fc1bf3c31fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1d503724312562651f920c98366e15cab38c581ea81bad2c0e7fc1bf3c31fa->enter($__internal_4f1d503724312562651f920c98366e15cab38c581ea81bad2c0e7fc1bf3c31fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4f1d503724312562651f920c98366e15cab38c581ea81bad2c0e7fc1bf3c31fa->leave($__internal_4f1d503724312562651f920c98366e15cab38c581ea81bad2c0e7fc1bf3c31fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e91090dc59683222d0799847d4695c7a845bc10aaba08648636e6c671a11ab11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91090dc59683222d0799847d4695c7a845bc10aaba08648636e6c671a11ab11->enter($__internal_e91090dc59683222d0799847d4695c7a845bc10aaba08648636e6c671a11ab11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e91090dc59683222d0799847d4695c7a845bc10aaba08648636e6c671a11ab11->leave($__internal_e91090dc59683222d0799847d4695c7a845bc10aaba08648636e6c671a11ab11_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2f7b73d083466d1f9bc057ff7a68116cc307ce83af026ba9f5091fa950fced1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f7b73d083466d1f9bc057ff7a68116cc307ce83af026ba9f5091fa950fced1->enter($__internal_a2f7b73d083466d1f9bc057ff7a68116cc307ce83af026ba9f5091fa950fced1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a2f7b73d083466d1f9bc057ff7a68116cc307ce83af026ba9f5091fa950fced1->leave($__internal_a2f7b73d083466d1f9bc057ff7a68116cc307ce83af026ba9f5091fa950fced1_prof);

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
