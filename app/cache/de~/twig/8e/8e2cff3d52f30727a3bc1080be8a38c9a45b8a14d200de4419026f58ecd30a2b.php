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
        $__internal_3ef5be753b4235c48e9c74514907bfa045dc73a10193e7b22cd76bb3e57c3818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef5be753b4235c48e9c74514907bfa045dc73a10193e7b22cd76bb3e57c3818->enter($__internal_3ef5be753b4235c48e9c74514907bfa045dc73a10193e7b22cd76bb3e57c3818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ef5be753b4235c48e9c74514907bfa045dc73a10193e7b22cd76bb3e57c3818->leave($__internal_3ef5be753b4235c48e9c74514907bfa045dc73a10193e7b22cd76bb3e57c3818_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80552a816f524f57befd23d80dda61198449aec956691fa734cecc349d778eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80552a816f524f57befd23d80dda61198449aec956691fa734cecc349d778eeb->enter($__internal_80552a816f524f57befd23d80dda61198449aec956691fa734cecc349d778eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_80552a816f524f57befd23d80dda61198449aec956691fa734cecc349d778eeb->leave($__internal_80552a816f524f57befd23d80dda61198449aec956691fa734cecc349d778eeb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e99ce3a3f18d39786137efbe5d761638d420a601cfdf3ea90804f912684149ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99ce3a3f18d39786137efbe5d761638d420a601cfdf3ea90804f912684149ac->enter($__internal_e99ce3a3f18d39786137efbe5d761638d420a601cfdf3ea90804f912684149ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e99ce3a3f18d39786137efbe5d761638d420a601cfdf3ea90804f912684149ac->leave($__internal_e99ce3a3f18d39786137efbe5d761638d420a601cfdf3ea90804f912684149ac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab0a00e4f9fb2df727f34e69854033cdc899433883ba1ff40f649ebd633f6968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0a00e4f9fb2df727f34e69854033cdc899433883ba1ff40f649ebd633f6968->enter($__internal_ab0a00e4f9fb2df727f34e69854033cdc899433883ba1ff40f649ebd633f6968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ab0a00e4f9fb2df727f34e69854033cdc899433883ba1ff40f649ebd633f6968->leave($__internal_ab0a00e4f9fb2df727f34e69854033cdc899433883ba1ff40f649ebd633f6968_prof);

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
