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
        $__internal_3409d5be486fa4818be2cb474df6e1407e3cfd2097348078a1f170e2572001b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3409d5be486fa4818be2cb474df6e1407e3cfd2097348078a1f170e2572001b6->enter($__internal_3409d5be486fa4818be2cb474df6e1407e3cfd2097348078a1f170e2572001b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3409d5be486fa4818be2cb474df6e1407e3cfd2097348078a1f170e2572001b6->leave($__internal_3409d5be486fa4818be2cb474df6e1407e3cfd2097348078a1f170e2572001b6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d6c3233d5035b90eae70f79d8cb80719b051da8c1c51c8b1b3565718319fb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d6c3233d5035b90eae70f79d8cb80719b051da8c1c51c8b1b3565718319fb31->enter($__internal_9d6c3233d5035b90eae70f79d8cb80719b051da8c1c51c8b1b3565718319fb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d6c3233d5035b90eae70f79d8cb80719b051da8c1c51c8b1b3565718319fb31->leave($__internal_9d6c3233d5035b90eae70f79d8cb80719b051da8c1c51c8b1b3565718319fb31_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b07c4394abb880c0926f7e605052eb5492abde0d6651c80822c1c2200a5ef35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07c4394abb880c0926f7e605052eb5492abde0d6651c80822c1c2200a5ef35d->enter($__internal_b07c4394abb880c0926f7e605052eb5492abde0d6651c80822c1c2200a5ef35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b07c4394abb880c0926f7e605052eb5492abde0d6651c80822c1c2200a5ef35d->leave($__internal_b07c4394abb880c0926f7e605052eb5492abde0d6651c80822c1c2200a5ef35d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39ab7cbcf616310671dfa0246c463fba4a0f8e0f513a9710f361768703b08a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ab7cbcf616310671dfa0246c463fba4a0f8e0f513a9710f361768703b08a05->enter($__internal_39ab7cbcf616310671dfa0246c463fba4a0f8e0f513a9710f361768703b08a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_39ab7cbcf616310671dfa0246c463fba4a0f8e0f513a9710f361768703b08a05->leave($__internal_39ab7cbcf616310671dfa0246c463fba4a0f8e0f513a9710f361768703b08a05_prof);

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
