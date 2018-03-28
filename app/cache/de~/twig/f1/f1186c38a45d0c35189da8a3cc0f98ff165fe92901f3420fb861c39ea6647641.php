<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_3381907d1c9ecc4c0538ed1c2f37a7a761470070ba6f22a90792e411e1916ae0 extends Twig_Template
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
        $__internal_231c12f986c23909050c6c29077f6eb3143b87f403fe5179ab0b88c28c5c5f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231c12f986c23909050c6c29077f6eb3143b87f403fe5179ab0b88c28c5c5f5d->enter($__internal_231c12f986c23909050c6c29077f6eb3143b87f403fe5179ab0b88c28c5c5f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_231c12f986c23909050c6c29077f6eb3143b87f403fe5179ab0b88c28c5c5f5d->leave($__internal_231c12f986c23909050c6c29077f6eb3143b87f403fe5179ab0b88c28c5c5f5d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "/var/www/html/Alphabus/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
