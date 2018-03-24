<?php

/* receptionchassis/new.html.twig */
class __TwigTemplate_9a6289839323cca3e2c0b78d4d96affa6e70f43b6db346bf86744756b4d85e23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "receptionchassis/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adabd44b35f4431ca2440edc1c2e5e6099da418ba2f62d327aa40dc381d20b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adabd44b35f4431ca2440edc1c2e5e6099da418ba2f62d327aa40dc381d20b32->enter($__internal_adabd44b35f4431ca2440edc1c2e5e6099da418ba2f62d327aa40dc381d20b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "receptionchassis/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adabd44b35f4431ca2440edc1c2e5e6099da418ba2f62d327aa40dc381d20b32->leave($__internal_adabd44b35f4431ca2440edc1c2e5e6099da418ba2f62d327aa40dc381d20b32_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cf77b73fabd469989e2ec5dfc7e79b4528f6f04acb216f01061adab7db12988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf77b73fabd469989e2ec5dfc7e79b4528f6f04acb216f01061adab7db12988->enter($__internal_0cf77b73fabd469989e2ec5dfc7e79b4528f6f04acb216f01061adab7db12988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Receptionchassi creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0cf77b73fabd469989e2ec5dfc7e79b4528f6f04acb216f01061adab7db12988->leave($__internal_0cf77b73fabd469989e2ec5dfc7e79b4528f6f04acb216f01061adab7db12988_prof);

    }

    public function getTemplateName()
    {
        return "receptionchassis/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Receptionchassi creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('receptionchassis_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "receptionchassis/new.html.twig", "/var/www/html/Alphabus/app/Resources/views/receptionchassis/new.html.twig");
    }
}
