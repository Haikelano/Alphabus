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
        $__internal_6cea80f36159f25bb738a25e69064985c2356de22487adde3e4573439d12db49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cea80f36159f25bb738a25e69064985c2356de22487adde3e4573439d12db49->enter($__internal_6cea80f36159f25bb738a25e69064985c2356de22487adde3e4573439d12db49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cea80f36159f25bb738a25e69064985c2356de22487adde3e4573439d12db49->leave($__internal_6cea80f36159f25bb738a25e69064985c2356de22487adde3e4573439d12db49_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_48f0c3d3adf39c411b515ffb0c3cb0974001f664d8c008aecf3f4ad14a8417e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f0c3d3adf39c411b515ffb0c3cb0974001f664d8c008aecf3f4ad14a8417e2->enter($__internal_48f0c3d3adf39c411b515ffb0c3cb0974001f664d8c008aecf3f4ad14a8417e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_48f0c3d3adf39c411b515ffb0c3cb0974001f664d8c008aecf3f4ad14a8417e2->leave($__internal_48f0c3d3adf39c411b515ffb0c3cb0974001f664d8c008aecf3f4ad14a8417e2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e78ff148812af1962bc8e79d40a710f3c209878be4b104123050d3249ca29e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e78ff148812af1962bc8e79d40a710f3c209878be4b104123050d3249ca29e7->enter($__internal_3e78ff148812af1962bc8e79d40a710f3c209878be4b104123050d3249ca29e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e78ff148812af1962bc8e79d40a710f3c209878be4b104123050d3249ca29e7->leave($__internal_3e78ff148812af1962bc8e79d40a710f3c209878be4b104123050d3249ca29e7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f0ff65da199a0935bccc5ef76e061e1de24823d53b50ad870ea1025953134e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0ff65da199a0935bccc5ef76e061e1de24823d53b50ad870ea1025953134e4->enter($__internal_2f0ff65da199a0935bccc5ef76e061e1de24823d53b50ad870ea1025953134e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2f0ff65da199a0935bccc5ef76e061e1de24823d53b50ad870ea1025953134e4->leave($__internal_2f0ff65da199a0935bccc5ef76e061e1de24823d53b50ad870ea1025953134e4_prof);

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
