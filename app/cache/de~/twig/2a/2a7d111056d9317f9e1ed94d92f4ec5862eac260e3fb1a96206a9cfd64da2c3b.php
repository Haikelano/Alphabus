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
        $__internal_8dfbaf91142e0f1f6977252403109d465005f4d401f8f15fb7cad3d81c8fae8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfbaf91142e0f1f6977252403109d465005f4d401f8f15fb7cad3d81c8fae8e->enter($__internal_8dfbaf91142e0f1f6977252403109d465005f4d401f8f15fb7cad3d81c8fae8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dfbaf91142e0f1f6977252403109d465005f4d401f8f15fb7cad3d81c8fae8e->leave($__internal_8dfbaf91142e0f1f6977252403109d465005f4d401f8f15fb7cad3d81c8fae8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_594a0ecd552d9130b93ab23990bb8681592d0318cd0cea1d24c1b29c2c875140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594a0ecd552d9130b93ab23990bb8681592d0318cd0cea1d24c1b29c2c875140->enter($__internal_594a0ecd552d9130b93ab23990bb8681592d0318cd0cea1d24c1b29c2c875140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_594a0ecd552d9130b93ab23990bb8681592d0318cd0cea1d24c1b29c2c875140->leave($__internal_594a0ecd552d9130b93ab23990bb8681592d0318cd0cea1d24c1b29c2c875140_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0446316e962c289ba381ace2e31d8d3e2ee6f547e0d64cd015071afd767c372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0446316e962c289ba381ace2e31d8d3e2ee6f547e0d64cd015071afd767c372->enter($__internal_c0446316e962c289ba381ace2e31d8d3e2ee6f547e0d64cd015071afd767c372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c0446316e962c289ba381ace2e31d8d3e2ee6f547e0d64cd015071afd767c372->leave($__internal_c0446316e962c289ba381ace2e31d8d3e2ee6f547e0d64cd015071afd767c372_prof);

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
