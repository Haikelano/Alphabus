<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_1af6636893b14fe944a4943412e2665f8a2a3baab192e45f713cf2a68dc6204c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_9c32f9ef2a2ba43d0c8077727cef1b40bc754d58372037d57e1283e5cf102c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c32f9ef2a2ba43d0c8077727cef1b40bc754d58372037d57e1283e5cf102c12->enter($__internal_9c32f9ef2a2ba43d0c8077727cef1b40bc754d58372037d57e1283e5cf102c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c32f9ef2a2ba43d0c8077727cef1b40bc754d58372037d57e1283e5cf102c12->leave($__internal_9c32f9ef2a2ba43d0c8077727cef1b40bc754d58372037d57e1283e5cf102c12_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a912d6f1b2a4d76831142e7708ed61d88a9071e6e7108d36f323f18b3c54fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a912d6f1b2a4d76831142e7708ed61d88a9071e6e7108d36f323f18b3c54fa2->enter($__internal_2a912d6f1b2a4d76831142e7708ed61d88a9071e6e7108d36f323f18b3c54fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a912d6f1b2a4d76831142e7708ed61d88a9071e6e7108d36f323f18b3c54fa2->leave($__internal_2a912d6f1b2a4d76831142e7708ed61d88a9071e6e7108d36f323f18b3c54fa2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cee908bce81004a77d32150986aaffabfb744ae67ab33530773d06801ee723d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee908bce81004a77d32150986aaffabfb744ae67ab33530773d06801ee723d7->enter($__internal_cee908bce81004a77d32150986aaffabfb744ae67ab33530773d06801ee723d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cee908bce81004a77d32150986aaffabfb744ae67ab33530773d06801ee723d7->leave($__internal_cee908bce81004a77d32150986aaffabfb744ae67ab33530773d06801ee723d7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db898952325c1b2f2616a1afc15a86809b332ef9e2df47e5afb7c87c5ea06fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db898952325c1b2f2616a1afc15a86809b332ef9e2df47e5afb7c87c5ea06fb0->enter($__internal_db898952325c1b2f2616a1afc15a86809b332ef9e2df47e5afb7c87c5ea06fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_db898952325c1b2f2616a1afc15a86809b332ef9e2df47e5afb7c87c5ea06fb0->leave($__internal_db898952325c1b2f2616a1afc15a86809b332ef9e2df47e5afb7c87c5ea06fb0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
