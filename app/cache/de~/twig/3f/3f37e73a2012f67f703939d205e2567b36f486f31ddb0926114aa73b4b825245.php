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
        $__internal_8a0aa4fc400e8fd73d1777f6cef138103a7927ade1858a9625e8f0c7b7d3e045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0aa4fc400e8fd73d1777f6cef138103a7927ade1858a9625e8f0c7b7d3e045->enter($__internal_8a0aa4fc400e8fd73d1777f6cef138103a7927ade1858a9625e8f0c7b7d3e045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a0aa4fc400e8fd73d1777f6cef138103a7927ade1858a9625e8f0c7b7d3e045->leave($__internal_8a0aa4fc400e8fd73d1777f6cef138103a7927ade1858a9625e8f0c7b7d3e045_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_db8a9941b5b5c2871f6a7b343e6c6dbf18e0ca24f0f26d61369b2813ff5ae55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8a9941b5b5c2871f6a7b343e6c6dbf18e0ca24f0f26d61369b2813ff5ae55c->enter($__internal_db8a9941b5b5c2871f6a7b343e6c6dbf18e0ca24f0f26d61369b2813ff5ae55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db8a9941b5b5c2871f6a7b343e6c6dbf18e0ca24f0f26d61369b2813ff5ae55c->leave($__internal_db8a9941b5b5c2871f6a7b343e6c6dbf18e0ca24f0f26d61369b2813ff5ae55c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f9f0faadb6b0940d3a167b25cb9d009d795308021be66831accded21467d5937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f0faadb6b0940d3a167b25cb9d009d795308021be66831accded21467d5937->enter($__internal_f9f0faadb6b0940d3a167b25cb9d009d795308021be66831accded21467d5937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f9f0faadb6b0940d3a167b25cb9d009d795308021be66831accded21467d5937->leave($__internal_f9f0faadb6b0940d3a167b25cb9d009d795308021be66831accded21467d5937_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ccf74b66f0ab70d3db10754a5c3073fdccc393bc4e60648963b126af98df708a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccf74b66f0ab70d3db10754a5c3073fdccc393bc4e60648963b126af98df708a->enter($__internal_ccf74b66f0ab70d3db10754a5c3073fdccc393bc4e60648963b126af98df708a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ccf74b66f0ab70d3db10754a5c3073fdccc393bc4e60648963b126af98df708a->leave($__internal_ccf74b66f0ab70d3db10754a5c3073fdccc393bc4e60648963b126af98df708a_prof);

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
