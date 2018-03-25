<?php

/* receptionchassis/edit.html.twig */
class __TwigTemplate_64d07d2416f71e1e42d62434c61a6f1d95b37faa4065c41751d8f88f68895bac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "receptionchassis/edit.html.twig", 1);
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
        $__internal_a520606aa7e8a6c6561622b81d7d94289810ff73e6a783fbedb4043e31448b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a520606aa7e8a6c6561622b81d7d94289810ff73e6a783fbedb4043e31448b81->enter($__internal_a520606aa7e8a6c6561622b81d7d94289810ff73e6a783fbedb4043e31448b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "receptionchassis/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a520606aa7e8a6c6561622b81d7d94289810ff73e6a783fbedb4043e31448b81->leave($__internal_a520606aa7e8a6c6561622b81d7d94289810ff73e6a783fbedb4043e31448b81_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_63f571acc943a139d6f844414dba55e7866981aaf3d0fc827fb2c85659e85ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f571acc943a139d6f844414dba55e7866981aaf3d0fc827fb2c85659e85ef5->enter($__internal_63f571acc943a139d6f844414dba55e7866981aaf3d0fc827fb2c85659e85ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Receptionchassi edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_63f571acc943a139d6f844414dba55e7866981aaf3d0fc827fb2c85659e85ef5->leave($__internal_63f571acc943a139d6f844414dba55e7866981aaf3d0fc827fb2c85659e85ef5_prof);

    }

    public function getTemplateName()
    {
        return "receptionchassis/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Receptionchassi edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('receptionchassis_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "receptionchassis/edit.html.twig", "/var/www/html/Alphabus/app/Resources/views/receptionchassis/edit.html.twig");
    }
}
