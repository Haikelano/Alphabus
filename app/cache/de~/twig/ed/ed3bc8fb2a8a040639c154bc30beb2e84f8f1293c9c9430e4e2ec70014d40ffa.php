<?php

/* accesoirexterieur/new.html.twig */
class __TwigTemplate_c3393310d46b67d57311d69a64624485b76adc05ae9b861b62689b0be0d1e598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "accesoirexterieur/new.html.twig", 1);
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
        $__internal_4c0ed1dee4597e8048c29236392d41453ebcbf1569f9348d748b64f5ddc338f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0ed1dee4597e8048c29236392d41453ebcbf1569f9348d748b64f5ddc338f6->enter($__internal_4c0ed1dee4597e8048c29236392d41453ebcbf1569f9348d748b64f5ddc338f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accesoirexterieur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c0ed1dee4597e8048c29236392d41453ebcbf1569f9348d748b64f5ddc338f6->leave($__internal_4c0ed1dee4597e8048c29236392d41453ebcbf1569f9348d748b64f5ddc338f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d834fad8b6a63f133844ef3e335d6bb83ac76c942ce6522ce2a8cc530a98c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d834fad8b6a63f133844ef3e335d6bb83ac76c942ce6522ce2a8cc530a98c1e->enter($__internal_7d834fad8b6a63f133844ef3e335d6bb83ac76c942ce6522ce2a8cc530a98c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Accesoirexterieur creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accesoirexterieur_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7d834fad8b6a63f133844ef3e335d6bb83ac76c942ce6522ce2a8cc530a98c1e->leave($__internal_7d834fad8b6a63f133844ef3e335d6bb83ac76c942ce6522ce2a8cc530a98c1e_prof);

    }

    public function getTemplateName()
    {
        return "accesoirexterieur/new.html.twig";
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
    <h1>Accesoirexterieur creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('accesoirexterieur_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "accesoirexterieur/new.html.twig", "/var/www/html/Alphabus/app/Resources/views/accesoirexterieur/new.html.twig");
    }
}
