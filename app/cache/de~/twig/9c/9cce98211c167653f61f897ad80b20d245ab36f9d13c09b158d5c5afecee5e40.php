<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_ebdb3e409bcbce18077f4356da815caeef8101724eb764744250d4f508d6ef3d extends Twig_Template
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
        $__internal_073b6b7c39f67d3df4895ae52bddb7e592d4d31bfed1ba83b84870c4263ce6e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073b6b7c39f67d3df4895ae52bddb7e592d4d31bfed1ba83b84870c4263ce6e2->enter($__internal_073b6b7c39f67d3df4895ae52bddb7e592d4d31bfed1ba83b84870c4263ce6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_073b6b7c39f67d3df4895ae52bddb7e592d4d31bfed1ba83b84870c4263ce6e2->leave($__internal_073b6b7c39f67d3df4895ae52bddb7e592d4d31bfed1ba83b84870c4263ce6e2_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
", "@EasyAdmin/default/field_datetime.html.twig", "/var/www/html/Alphabus/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
