<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bae1ca5ed3301a625ed22f946468b52603a08ce9222f968487ab672b909637ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5e3cf21034f9d8055ff67a63a7a126c8ee046d3a73fbca5eccc4c2ed459974a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e3cf21034f9d8055ff67a63a7a126c8ee046d3a73fbca5eccc4c2ed459974a->enter($__internal_a5e3cf21034f9d8055ff67a63a7a126c8ee046d3a73fbca5eccc4c2ed459974a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5e3cf21034f9d8055ff67a63a7a126c8ee046d3a73fbca5eccc4c2ed459974a->leave($__internal_a5e3cf21034f9d8055ff67a63a7a126c8ee046d3a73fbca5eccc4c2ed459974a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_17b3ec25c2ca077977dd9301bf4cb602626d952d3aa2f712365aaa67da24aaf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b3ec25c2ca077977dd9301bf4cb602626d952d3aa2f712365aaa67da24aaf7->enter($__internal_17b3ec25c2ca077977dd9301bf4cb602626d952d3aa2f712365aaa67da24aaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_17b3ec25c2ca077977dd9301bf4cb602626d952d3aa2f712365aaa67da24aaf7->leave($__internal_17b3ec25c2ca077977dd9301bf4cb602626d952d3aa2f712365aaa67da24aaf7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df0dc39347b98b0bfc25178a6de3b7cd13519820a1415440ab7db526d0299108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0dc39347b98b0bfc25178a6de3b7cd13519820a1415440ab7db526d0299108->enter($__internal_df0dc39347b98b0bfc25178a6de3b7cd13519820a1415440ab7db526d0299108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df0dc39347b98b0bfc25178a6de3b7cd13519820a1415440ab7db526d0299108->leave($__internal_df0dc39347b98b0bfc25178a6de3b7cd13519820a1415440ab7db526d0299108_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d55e918fc637081eaf02243285707e43fcd8efa05bfbeb0760c519bc1108d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d55e918fc637081eaf02243285707e43fcd8efa05bfbeb0760c519bc1108d30->enter($__internal_0d55e918fc637081eaf02243285707e43fcd8efa05bfbeb0760c519bc1108d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d55e918fc637081eaf02243285707e43fcd8efa05bfbeb0760c519bc1108d30->leave($__internal_0d55e918fc637081eaf02243285707e43fcd8efa05bfbeb0760c519bc1108d30_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
