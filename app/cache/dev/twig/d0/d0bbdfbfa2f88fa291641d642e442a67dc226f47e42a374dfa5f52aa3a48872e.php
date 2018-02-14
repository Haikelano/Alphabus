<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e179cf0c76a46865dd575179907decc955241e4f7d44ee804f52aa831ed950a0 extends Twig_Template
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
        $__internal_152d4c32481ec4061d249a7859fc8359069cb3b127f14ab59b54586332a516e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152d4c32481ec4061d249a7859fc8359069cb3b127f14ab59b54586332a516e0->enter($__internal_152d4c32481ec4061d249a7859fc8359069cb3b127f14ab59b54586332a516e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_152d4c32481ec4061d249a7859fc8359069cb3b127f14ab59b54586332a516e0->leave($__internal_152d4c32481ec4061d249a7859fc8359069cb3b127f14ab59b54586332a516e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_76f8b51cbc24ca54ce835a2e67267814d231b6ddbe111eebb0a4be24569b8754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f8b51cbc24ca54ce835a2e67267814d231b6ddbe111eebb0a4be24569b8754->enter($__internal_76f8b51cbc24ca54ce835a2e67267814d231b6ddbe111eebb0a4be24569b8754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_76f8b51cbc24ca54ce835a2e67267814d231b6ddbe111eebb0a4be24569b8754->leave($__internal_76f8b51cbc24ca54ce835a2e67267814d231b6ddbe111eebb0a4be24569b8754_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2eb0b1776769eb2bcb976e5691152802c158f0276319059bab91ac5fb177f32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb0b1776769eb2bcb976e5691152802c158f0276319059bab91ac5fb177f32c->enter($__internal_2eb0b1776769eb2bcb976e5691152802c158f0276319059bab91ac5fb177f32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2eb0b1776769eb2bcb976e5691152802c158f0276319059bab91ac5fb177f32c->leave($__internal_2eb0b1776769eb2bcb976e5691152802c158f0276319059bab91ac5fb177f32c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04674d483ee289e34581aa483d9d91ad375b31f6378233556c43c84b36cd9daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04674d483ee289e34581aa483d9d91ad375b31f6378233556c43c84b36cd9daf->enter($__internal_04674d483ee289e34581aa483d9d91ad375b31f6378233556c43c84b36cd9daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_04674d483ee289e34581aa483d9d91ad375b31f6378233556c43c84b36cd9daf->leave($__internal_04674d483ee289e34581aa483d9d91ad375b31f6378233556c43c84b36cd9daf_prof);

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
