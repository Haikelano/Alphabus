<?php

/* circuitelectrique/new.html.twig */
class __TwigTemplate_1efade3a011fbbe6f519ebd49945feeb7b99749be6763cb0bc3927fce216d3a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "circuitelectrique/new.html.twig", 1);
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
        $__internal_bb48deae3113b235184d5410df1cee461bebe04d4bf463074f5bec114ae217f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb48deae3113b235184d5410df1cee461bebe04d4bf463074f5bec114ae217f0->enter($__internal_bb48deae3113b235184d5410df1cee461bebe04d4bf463074f5bec114ae217f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuitelectrique/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb48deae3113b235184d5410df1cee461bebe04d4bf463074f5bec114ae217f0->leave($__internal_bb48deae3113b235184d5410df1cee461bebe04d4bf463074f5bec114ae217f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad80e7126999609eae54a93924e0d0df96bcc3077616550024e5ae1a9b56d3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad80e7126999609eae54a93924e0d0df96bcc3077616550024e5ae1a9b56d3ea->enter($__internal_ad80e7126999609eae54a93924e0d0df96bcc3077616550024e5ae1a9b56d3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Circuitelectrique creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circuitelectrique_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ad80e7126999609eae54a93924e0d0df96bcc3077616550024e5ae1a9b56d3ea->leave($__internal_ad80e7126999609eae54a93924e0d0df96bcc3077616550024e5ae1a9b56d3ea_prof);

    }

    public function getTemplateName()
    {
        return "circuitelectrique/new.html.twig";
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
    <h1>Circuitelectrique creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('circuitelectrique_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "circuitelectrique/new.html.twig", "/var/www/html/Alphabus/app/Resources/views/circuitelectrique/new.html.twig");
    }
}
