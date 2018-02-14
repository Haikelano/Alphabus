<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ccdb5e61d019840609d3b1ae7d6e7aaec4ba60545a0e51d91ca90ec578222b76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_e489d6773240fc2607e3937bd61f6383b1ec00cc11cd2e19065a89b55339375a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e489d6773240fc2607e3937bd61f6383b1ec00cc11cd2e19065a89b55339375a->enter($__internal_e489d6773240fc2607e3937bd61f6383b1ec00cc11cd2e19065a89b55339375a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e489d6773240fc2607e3937bd61f6383b1ec00cc11cd2e19065a89b55339375a->leave($__internal_e489d6773240fc2607e3937bd61f6383b1ec00cc11cd2e19065a89b55339375a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf77c0278167f15fa5557a805666a94e4c1eb26c82b2ccdb3cb7e33e6517cb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf77c0278167f15fa5557a805666a94e4c1eb26c82b2ccdb3cb7e33e6517cb6f->enter($__internal_bf77c0278167f15fa5557a805666a94e4c1eb26c82b2ccdb3cb7e33e6517cb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bf77c0278167f15fa5557a805666a94e4c1eb26c82b2ccdb3cb7e33e6517cb6f->leave($__internal_bf77c0278167f15fa5557a805666a94e4c1eb26c82b2ccdb3cb7e33e6517cb6f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_807f4ce940c8707c0e47a565fec1d9101f14e3994756a5dc166b802a68c747dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807f4ce940c8707c0e47a565fec1d9101f14e3994756a5dc166b802a68c747dc->enter($__internal_807f4ce940c8707c0e47a565fec1d9101f14e3994756a5dc166b802a68c747dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_807f4ce940c8707c0e47a565fec1d9101f14e3994756a5dc166b802a68c747dc->leave($__internal_807f4ce940c8707c0e47a565fec1d9101f14e3994756a5dc166b802a68c747dc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
