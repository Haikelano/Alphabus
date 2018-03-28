<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_4a56d58c6ac018f08ace34fb9efc27479666216f5b57b1bd11bb46e3f19ed7ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3a03e3e877e63329d032bde8b0dd371c28583cab34fc2dcd5c8d7c71c1197f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a03e3e877e63329d032bde8b0dd371c28583cab34fc2dcd5c8d7c71c1197f2->enter($__internal_f3a03e3e877e63329d032bde8b0dd371c28583cab34fc2dcd5c8d7c71c1197f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_f3a03e3e877e63329d032bde8b0dd371c28583cab34fc2dcd5c8d7c71c1197f2->leave($__internal_f3a03e3e877e63329d032bde8b0dd371c28583cab34fc2dcd5c8d7c71c1197f2_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "/var/www/html/Alphabus/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
