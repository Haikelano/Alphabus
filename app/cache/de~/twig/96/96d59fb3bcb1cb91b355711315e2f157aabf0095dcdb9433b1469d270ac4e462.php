<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_2cebbbf72df2b38b9dfa5cbe71b4d3b5553ff63356f58deb0ff5984e84397cc3 extends Twig_Template
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
        $__internal_09f0fa70a45a73fddc0402defb4c07a24469f4861980e642017e79ce75252c38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f0fa70a45a73fddc0402defb4c07a24469f4861980e642017e79ce75252c38->enter($__internal_09f0fa70a45a73fddc0402defb4c07a24469f4861980e642017e79ce75252c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_09f0fa70a45a73fddc0402defb4c07a24469f4861980e642017e79ce75252c38->leave($__internal_09f0fa70a45a73fddc0402defb4c07a24469f4861980e642017e79ce75252c38_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_date.html.twig", "/var/www/html/Alphabus/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
