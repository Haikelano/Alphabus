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
        $__internal_43d2f0c4139ee72342ce0bdcecf6ee5cb1c544d0aebf3074fc0f6a83291090cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d2f0c4139ee72342ce0bdcecf6ee5cb1c544d0aebf3074fc0f6a83291090cf->enter($__internal_43d2f0c4139ee72342ce0bdcecf6ee5cb1c544d0aebf3074fc0f6a83291090cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43d2f0c4139ee72342ce0bdcecf6ee5cb1c544d0aebf3074fc0f6a83291090cf->leave($__internal_43d2f0c4139ee72342ce0bdcecf6ee5cb1c544d0aebf3074fc0f6a83291090cf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2db9add7b59615dac1c8bd6093a15642bafeaf0f7037fae0a11a1d97ac6366a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db9add7b59615dac1c8bd6093a15642bafeaf0f7037fae0a11a1d97ac6366a3->enter($__internal_2db9add7b59615dac1c8bd6093a15642bafeaf0f7037fae0a11a1d97ac6366a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2db9add7b59615dac1c8bd6093a15642bafeaf0f7037fae0a11a1d97ac6366a3->leave($__internal_2db9add7b59615dac1c8bd6093a15642bafeaf0f7037fae0a11a1d97ac6366a3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ee93a3e9bc25288f8b035d867c43ba26e14c7cf5e98203f1df64857eb64ea0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee93a3e9bc25288f8b035d867c43ba26e14c7cf5e98203f1df64857eb64ea0b->enter($__internal_8ee93a3e9bc25288f8b035d867c43ba26e14c7cf5e98203f1df64857eb64ea0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8ee93a3e9bc25288f8b035d867c43ba26e14c7cf5e98203f1df64857eb64ea0b->leave($__internal_8ee93a3e9bc25288f8b035d867c43ba26e14c7cf5e98203f1df64857eb64ea0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_176c2564632df4edd88564a664dd6ceaf6f37b89f7ff73b7423dce01ce7cdb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176c2564632df4edd88564a664dd6ceaf6f37b89f7ff73b7423dce01ce7cdb3e->enter($__internal_176c2564632df4edd88564a664dd6ceaf6f37b89f7ff73b7423dce01ce7cdb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_176c2564632df4edd88564a664dd6ceaf6f37b89f7ff73b7423dce01ce7cdb3e->leave($__internal_176c2564632df4edd88564a664dd6ceaf6f37b89f7ff73b7423dce01ce7cdb3e_prof);

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
