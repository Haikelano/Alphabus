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
        $__internal_30f8a85f8b2f6f1a8711a2fc6a586ce3608050d343955ebb6fba6f496a32d037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f8a85f8b2f6f1a8711a2fc6a586ce3608050d343955ebb6fba6f496a32d037->enter($__internal_30f8a85f8b2f6f1a8711a2fc6a586ce3608050d343955ebb6fba6f496a32d037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30f8a85f8b2f6f1a8711a2fc6a586ce3608050d343955ebb6fba6f496a32d037->leave($__internal_30f8a85f8b2f6f1a8711a2fc6a586ce3608050d343955ebb6fba6f496a32d037_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_14cc0cd5c51c66ea6ba4e85305635c3df3a1164e6c8b340f61604f47b59f2062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14cc0cd5c51c66ea6ba4e85305635c3df3a1164e6c8b340f61604f47b59f2062->enter($__internal_14cc0cd5c51c66ea6ba4e85305635c3df3a1164e6c8b340f61604f47b59f2062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_14cc0cd5c51c66ea6ba4e85305635c3df3a1164e6c8b340f61604f47b59f2062->leave($__internal_14cc0cd5c51c66ea6ba4e85305635c3df3a1164e6c8b340f61604f47b59f2062_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f93218cf3f7750b617381dcd553bfe7fb86ecae2e5964f9ed8e909f9d043f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f93218cf3f7750b617381dcd553bfe7fb86ecae2e5964f9ed8e909f9d043f56->enter($__internal_5f93218cf3f7750b617381dcd553bfe7fb86ecae2e5964f9ed8e909f9d043f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5f93218cf3f7750b617381dcd553bfe7fb86ecae2e5964f9ed8e909f9d043f56->leave($__internal_5f93218cf3f7750b617381dcd553bfe7fb86ecae2e5964f9ed8e909f9d043f56_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab3c694aa271e77792baaa264fb22335c4f808d8109a0c61e90b6764cf5e91a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3c694aa271e77792baaa264fb22335c4f808d8109a0c61e90b6764cf5e91a8->enter($__internal_ab3c694aa271e77792baaa264fb22335c4f808d8109a0c61e90b6764cf5e91a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ab3c694aa271e77792baaa264fb22335c4f808d8109a0c61e90b6764cf5e91a8->leave($__internal_ab3c694aa271e77792baaa264fb22335c4f808d8109a0c61e90b6764cf5e91a8_prof);

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
