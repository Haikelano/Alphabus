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
        $__internal_0b60d3493bb6b0cc7ca0886de17fd7d94b1355033d326b84a6f14e214e514685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b60d3493bb6b0cc7ca0886de17fd7d94b1355033d326b84a6f14e214e514685->enter($__internal_0b60d3493bb6b0cc7ca0886de17fd7d94b1355033d326b84a6f14e214e514685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b60d3493bb6b0cc7ca0886de17fd7d94b1355033d326b84a6f14e214e514685->leave($__internal_0b60d3493bb6b0cc7ca0886de17fd7d94b1355033d326b84a6f14e214e514685_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c5133eb71e7cb5981e4312dc11fb15488942d30f11c8a64097b094f05f21f11d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5133eb71e7cb5981e4312dc11fb15488942d30f11c8a64097b094f05f21f11d->enter($__internal_c5133eb71e7cb5981e4312dc11fb15488942d30f11c8a64097b094f05f21f11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c5133eb71e7cb5981e4312dc11fb15488942d30f11c8a64097b094f05f21f11d->leave($__internal_c5133eb71e7cb5981e4312dc11fb15488942d30f11c8a64097b094f05f21f11d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_310ff00c2c9263fe32ba651ab34f529a94c5724fce51c0989aa265eb5b13f2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310ff00c2c9263fe32ba651ab34f529a94c5724fce51c0989aa265eb5b13f2f4->enter($__internal_310ff00c2c9263fe32ba651ab34f529a94c5724fce51c0989aa265eb5b13f2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_310ff00c2c9263fe32ba651ab34f529a94c5724fce51c0989aa265eb5b13f2f4->leave($__internal_310ff00c2c9263fe32ba651ab34f529a94c5724fce51c0989aa265eb5b13f2f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5a928a197344a73b76ab94d3ca7a57595323278919f353f55850f91873edbacd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a928a197344a73b76ab94d3ca7a57595323278919f353f55850f91873edbacd->enter($__internal_5a928a197344a73b76ab94d3ca7a57595323278919f353f55850f91873edbacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5a928a197344a73b76ab94d3ca7a57595323278919f353f55850f91873edbacd->leave($__internal_5a928a197344a73b76ab94d3ca7a57595323278919f353f55850f91873edbacd_prof);

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
