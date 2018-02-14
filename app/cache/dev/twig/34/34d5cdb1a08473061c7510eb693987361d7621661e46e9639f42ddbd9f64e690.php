<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e3bd0374878f5cebf7411552831df920c0540d3ef7ff48f81b616bbdf4653f65 extends Twig_Template
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
        $__internal_e1a29f7b5b840d684874fe1f04705d24ae9b8b05124d0b73445f6c517b5bd652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a29f7b5b840d684874fe1f04705d24ae9b8b05124d0b73445f6c517b5bd652->enter($__internal_e1a29f7b5b840d684874fe1f04705d24ae9b8b05124d0b73445f6c517b5bd652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1a29f7b5b840d684874fe1f04705d24ae9b8b05124d0b73445f6c517b5bd652->leave($__internal_e1a29f7b5b840d684874fe1f04705d24ae9b8b05124d0b73445f6c517b5bd652_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a462f637999cf2d94a314868a66eb0a14153b8e2eb9b347c055ebddfa0858bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a462f637999cf2d94a314868a66eb0a14153b8e2eb9b347c055ebddfa0858bf0->enter($__internal_a462f637999cf2d94a314868a66eb0a14153b8e2eb9b347c055ebddfa0858bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a462f637999cf2d94a314868a66eb0a14153b8e2eb9b347c055ebddfa0858bf0->leave($__internal_a462f637999cf2d94a314868a66eb0a14153b8e2eb9b347c055ebddfa0858bf0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d7f06fc0b187c44825d732e70394302bc3928dae69dd2fd511f9877d08dfdda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7f06fc0b187c44825d732e70394302bc3928dae69dd2fd511f9877d08dfdda->enter($__internal_1d7f06fc0b187c44825d732e70394302bc3928dae69dd2fd511f9877d08dfdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1d7f06fc0b187c44825d732e70394302bc3928dae69dd2fd511f9877d08dfdda->leave($__internal_1d7f06fc0b187c44825d732e70394302bc3928dae69dd2fd511f9877d08dfdda_prof);

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
