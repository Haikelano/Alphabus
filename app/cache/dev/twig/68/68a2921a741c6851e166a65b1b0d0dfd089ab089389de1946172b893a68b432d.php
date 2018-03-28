<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b3ccdf20878a18ff080cf34510e5716d423d56ac3a2e7172987f22d5c0450b43 extends Twig_Template
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
        $__internal_9987f8cd62a185aedd1d785f9a63d8c81b4742570ea75ead39bfdb973f699b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9987f8cd62a185aedd1d785f9a63d8c81b4742570ea75ead39bfdb973f699b57->enter($__internal_9987f8cd62a185aedd1d785f9a63d8c81b4742570ea75ead39bfdb973f699b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9987f8cd62a185aedd1d785f9a63d8c81b4742570ea75ead39bfdb973f699b57->leave($__internal_9987f8cd62a185aedd1d785f9a63d8c81b4742570ea75ead39bfdb973f699b57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_578764bf2f58815bebb392834835348f4e4c4e2bce73007d173cf726c5a110aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578764bf2f58815bebb392834835348f4e4c4e2bce73007d173cf726c5a110aa->enter($__internal_578764bf2f58815bebb392834835348f4e4c4e2bce73007d173cf726c5a110aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_578764bf2f58815bebb392834835348f4e4c4e2bce73007d173cf726c5a110aa->leave($__internal_578764bf2f58815bebb392834835348f4e4c4e2bce73007d173cf726c5a110aa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3b95e8f5adb8c58af2415ef1d72ccba64434a992808f92b11d561321acfaeae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b95e8f5adb8c58af2415ef1d72ccba64434a992808f92b11d561321acfaeae->enter($__internal_c3b95e8f5adb8c58af2415ef1d72ccba64434a992808f92b11d561321acfaeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c3b95e8f5adb8c58af2415ef1d72ccba64434a992808f92b11d561321acfaeae->leave($__internal_c3b95e8f5adb8c58af2415ef1d72ccba64434a992808f92b11d561321acfaeae_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3925035d5034baa1a16ef9aff574c6bb1e49c09231442e993f0f5dd35b25f8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3925035d5034baa1a16ef9aff574c6bb1e49c09231442e993f0f5dd35b25f8f1->enter($__internal_3925035d5034baa1a16ef9aff574c6bb1e49c09231442e993f0f5dd35b25f8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3925035d5034baa1a16ef9aff574c6bb1e49c09231442e993f0f5dd35b25f8f1->leave($__internal_3925035d5034baa1a16ef9aff574c6bb1e49c09231442e993f0f5dd35b25f8f1_prof);

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
