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
        $__internal_4e9565c4621569a095a808391b418c5df876607562738cf683372b7ee8ac64c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9565c4621569a095a808391b418c5df876607562738cf683372b7ee8ac64c7->enter($__internal_4e9565c4621569a095a808391b418c5df876607562738cf683372b7ee8ac64c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e9565c4621569a095a808391b418c5df876607562738cf683372b7ee8ac64c7->leave($__internal_4e9565c4621569a095a808391b418c5df876607562738cf683372b7ee8ac64c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58c5e31583fa34b396044605168d4bbe74c2c693427063f58b3f8af47d8e88b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c5e31583fa34b396044605168d4bbe74c2c693427063f58b3f8af47d8e88b4->enter($__internal_58c5e31583fa34b396044605168d4bbe74c2c693427063f58b3f8af47d8e88b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_58c5e31583fa34b396044605168d4bbe74c2c693427063f58b3f8af47d8e88b4->leave($__internal_58c5e31583fa34b396044605168d4bbe74c2c693427063f58b3f8af47d8e88b4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c486aa99ab1d8ca78be940be048f65e1a3828e540e8104a9340340a1e0446abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c486aa99ab1d8ca78be940be048f65e1a3828e540e8104a9340340a1e0446abd->enter($__internal_c486aa99ab1d8ca78be940be048f65e1a3828e540e8104a9340340a1e0446abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c486aa99ab1d8ca78be940be048f65e1a3828e540e8104a9340340a1e0446abd->leave($__internal_c486aa99ab1d8ca78be940be048f65e1a3828e540e8104a9340340a1e0446abd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14f7873a2eb73b0882e4fa17c7b2d2428c7279269830bff5e2ebffc418a3ce33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f7873a2eb73b0882e4fa17c7b2d2428c7279269830bff5e2ebffc418a3ce33->enter($__internal_14f7873a2eb73b0882e4fa17c7b2d2428c7279269830bff5e2ebffc418a3ce33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_14f7873a2eb73b0882e4fa17c7b2d2428c7279269830bff5e2ebffc418a3ce33->leave($__internal_14f7873a2eb73b0882e4fa17c7b2d2428c7279269830bff5e2ebffc418a3ce33_prof);

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
