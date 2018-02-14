<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_257fa4f412cf474320c38b64189637742140620c5b977d4428aa9ae2764c3870 extends Twig_Template
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
        $__internal_79e599afefde28f7f5c21e5cf852f0b96394c6dcc534f0e766fc0e815367993a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e599afefde28f7f5c21e5cf852f0b96394c6dcc534f0e766fc0e815367993a->enter($__internal_79e599afefde28f7f5c21e5cf852f0b96394c6dcc534f0e766fc0e815367993a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79e599afefde28f7f5c21e5cf852f0b96394c6dcc534f0e766fc0e815367993a->leave($__internal_79e599afefde28f7f5c21e5cf852f0b96394c6dcc534f0e766fc0e815367993a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06a73f9e82085156be9e86f258879149246327526e9092eb9932aaad3bbe12ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a73f9e82085156be9e86f258879149246327526e9092eb9932aaad3bbe12ba->enter($__internal_06a73f9e82085156be9e86f258879149246327526e9092eb9932aaad3bbe12ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06a73f9e82085156be9e86f258879149246327526e9092eb9932aaad3bbe12ba->leave($__internal_06a73f9e82085156be9e86f258879149246327526e9092eb9932aaad3bbe12ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fdd213251aa9c27988e4f729024dfe194726bd882ee4f2bccc84d4e0945bc8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd213251aa9c27988e4f729024dfe194726bd882ee4f2bccc84d4e0945bc8a6->enter($__internal_fdd213251aa9c27988e4f729024dfe194726bd882ee4f2bccc84d4e0945bc8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fdd213251aa9c27988e4f729024dfe194726bd882ee4f2bccc84d4e0945bc8a6->leave($__internal_fdd213251aa9c27988e4f729024dfe194726bd882ee4f2bccc84d4e0945bc8a6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f77174ed9beaa1dba86812923cf4f47a07712dee5f6c8952399e110dfb11cce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77174ed9beaa1dba86812923cf4f47a07712dee5f6c8952399e110dfb11cce2->enter($__internal_f77174ed9beaa1dba86812923cf4f47a07712dee5f6c8952399e110dfb11cce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f77174ed9beaa1dba86812923cf4f47a07712dee5f6c8952399e110dfb11cce2->leave($__internal_f77174ed9beaa1dba86812923cf4f47a07712dee5f6c8952399e110dfb11cce2_prof);

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
