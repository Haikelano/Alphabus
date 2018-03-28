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
        $__internal_10914b1afb007f5eb77b7ef905bdf0dfe7005057bc7b797977061fd24add4fc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10914b1afb007f5eb77b7ef905bdf0dfe7005057bc7b797977061fd24add4fc8->enter($__internal_10914b1afb007f5eb77b7ef905bdf0dfe7005057bc7b797977061fd24add4fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10914b1afb007f5eb77b7ef905bdf0dfe7005057bc7b797977061fd24add4fc8->leave($__internal_10914b1afb007f5eb77b7ef905bdf0dfe7005057bc7b797977061fd24add4fc8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_16e093ad1692f315863216b867d52d0c43b83d982e0177bc403e47ed71956878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e093ad1692f315863216b867d52d0c43b83d982e0177bc403e47ed71956878->enter($__internal_16e093ad1692f315863216b867d52d0c43b83d982e0177bc403e47ed71956878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_16e093ad1692f315863216b867d52d0c43b83d982e0177bc403e47ed71956878->leave($__internal_16e093ad1692f315863216b867d52d0c43b83d982e0177bc403e47ed71956878_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8078d3d3a0572d58d9c3cf47c0540d7fc2264d9996895bf0c332641ce325f7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8078d3d3a0572d58d9c3cf47c0540d7fc2264d9996895bf0c332641ce325f7d3->enter($__internal_8078d3d3a0572d58d9c3cf47c0540d7fc2264d9996895bf0c332641ce325f7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8078d3d3a0572d58d9c3cf47c0540d7fc2264d9996895bf0c332641ce325f7d3->leave($__internal_8078d3d3a0572d58d9c3cf47c0540d7fc2264d9996895bf0c332641ce325f7d3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ff23163a0dab0d5c368ca8beae7ed35b207d8910cad5641322e34ec744f5dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff23163a0dab0d5c368ca8beae7ed35b207d8910cad5641322e34ec744f5dd0->enter($__internal_6ff23163a0dab0d5c368ca8beae7ed35b207d8910cad5641322e34ec744f5dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6ff23163a0dab0d5c368ca8beae7ed35b207d8910cad5641322e34ec744f5dd0->leave($__internal_6ff23163a0dab0d5c368ca8beae7ed35b207d8910cad5641322e34ec744f5dd0_prof);

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
