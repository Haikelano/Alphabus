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
        $__internal_2e5a65e06aaf3be45c7a029f649d4abb1032410853726648f6884849f16d4e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5a65e06aaf3be45c7a029f649d4abb1032410853726648f6884849f16d4e4e->enter($__internal_2e5a65e06aaf3be45c7a029f649d4abb1032410853726648f6884849f16d4e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "receptionchassis/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e5a65e06aaf3be45c7a029f649d4abb1032410853726648f6884849f16d4e4e->leave($__internal_2e5a65e06aaf3be45c7a029f649d4abb1032410853726648f6884849f16d4e4e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eaf8a37a49c22ccc75d565811e5653c7ad9b7a8a8c18f55961c8a6cfe29d8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eaf8a37a49c22ccc75d565811e5653c7ad9b7a8a8c18f55961c8a6cfe29d8fa->enter($__internal_8eaf8a37a49c22ccc75d565811e5653c7ad9b7a8a8c18f55961c8a6cfe29d8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8eaf8a37a49c22ccc75d565811e5653c7ad9b7a8a8c18f55961c8a6cfe29d8fa->leave($__internal_8eaf8a37a49c22ccc75d565811e5653c7ad9b7a8a8c18f55961c8a6cfe29d8fa_prof);

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
