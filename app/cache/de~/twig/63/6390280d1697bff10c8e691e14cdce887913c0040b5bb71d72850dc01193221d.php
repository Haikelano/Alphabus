<?php

/* structure/edit.html.twig */
class __TwigTemplate_1b61bbd4e223ed060f2e7fd8aed895cedccb802e106e5d788f9a5cf6bd56cb82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "structure/edit.html.twig", 1);
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
        $__internal_83cda51d1271b63ec072647fe32e8bd5b4749faca8d7462982dd4158b0ada37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83cda51d1271b63ec072647fe32e8bd5b4749faca8d7462982dd4158b0ada37d->enter($__internal_83cda51d1271b63ec072647fe32e8bd5b4749faca8d7462982dd4158b0ada37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "structure/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83cda51d1271b63ec072647fe32e8bd5b4749faca8d7462982dd4158b0ada37d->leave($__internal_83cda51d1271b63ec072647fe32e8bd5b4749faca8d7462982dd4158b0ada37d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f77b969816a723648492ec295c0b638e1fff61469043f35f700b8d178e407b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77b969816a723648492ec295c0b638e1fff61469043f35f700b8d178e407b46->enter($__internal_f77b969816a723648492ec295c0b638e1fff61469043f35f700b8d178e407b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Structure edit</h1>


    <ul>
        <li>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>

    ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "






";
        
        $__internal_f77b969816a723648492ec295c0b638e1fff61469043f35f700b8d178e407b46->leave($__internal_f77b969816a723648492ec295c0b638e1fff61469043f35f700b8d178e407b46_prof);

    }

    public function getTemplateName()
    {
        return "structure/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  69 => 19,  65 => 18,  58 => 14,  53 => 12,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Structure edit</h1>


    <ul>
        <li>
            <a href=\"{{ path('structure_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}






{% endblock %}
", "structure/edit.html.twig", "/var/www/html/Alphabus/app/Resources/views/structure/edit.html.twig");
    }
}
