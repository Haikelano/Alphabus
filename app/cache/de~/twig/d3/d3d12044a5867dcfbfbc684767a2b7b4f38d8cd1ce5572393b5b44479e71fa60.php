<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_34a1f0aa292cb2adb5bfcc477944ff95b85c7e765333002d3b3453f9336215ef extends Twig_Template
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
        $__internal_b7b7b3fe5c54aec7ec404f8a5dde4df6668b0daae5b69b758e74d7a27869b79b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b7b3fe5c54aec7ec404f8a5dde4df6668b0daae5b69b758e74d7a27869b79b->enter($__internal_b7b7b3fe5c54aec7ec404f8a5dde4df6668b0daae5b69b758e74d7a27869b79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7b7b3fe5c54aec7ec404f8a5dde4df6668b0daae5b69b758e74d7a27869b79b->leave($__internal_b7b7b3fe5c54aec7ec404f8a5dde4df6668b0daae5b69b758e74d7a27869b79b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3c217ac42848d314a4f795cd0df34a2d6930484fc292e1435e4e01ef85ece94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c217ac42848d314a4f795cd0df34a2d6930484fc292e1435e4e01ef85ece94a->enter($__internal_3c217ac42848d314a4f795cd0df34a2d6930484fc292e1435e4e01ef85ece94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3c217ac42848d314a4f795cd0df34a2d6930484fc292e1435e4e01ef85ece94a->leave($__internal_3c217ac42848d314a4f795cd0df34a2d6930484fc292e1435e4e01ef85ece94a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4be182531f3f4759efcb4406bd9d85443d50ebe41c9c1e52750a8d9237cbe37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4be182531f3f4759efcb4406bd9d85443d50ebe41c9c1e52750a8d9237cbe37->enter($__internal_a4be182531f3f4759efcb4406bd9d85443d50ebe41c9c1e52750a8d9237cbe37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a4be182531f3f4759efcb4406bd9d85443d50ebe41c9c1e52750a8d9237cbe37->leave($__internal_a4be182531f3f4759efcb4406bd9d85443d50ebe41c9c1e52750a8d9237cbe37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_608d0662aa3b528480c46117877cc0062bf5d4b7bb9012bdc9ab33954b40f5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_608d0662aa3b528480c46117877cc0062bf5d4b7bb9012bdc9ab33954b40f5e8->enter($__internal_608d0662aa3b528480c46117877cc0062bf5d4b7bb9012bdc9ab33954b40f5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_608d0662aa3b528480c46117877cc0062bf5d4b7bb9012bdc9ab33954b40f5e8->leave($__internal_608d0662aa3b528480c46117877cc0062bf5d4b7bb9012bdc9ab33954b40f5e8_prof);

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
