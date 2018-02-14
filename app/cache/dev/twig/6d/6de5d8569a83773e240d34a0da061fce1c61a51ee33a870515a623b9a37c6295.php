<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3c90dc627ea4c46d117fe9d2597fbf4e1b65dcd5681370baf32cbc46883b3bc5 extends Twig_Template
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
        $__internal_5d7215cefa29b8ce74a05be7d6a160e03b4a6e5e2a52e1f88ee737f37e6e7f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7215cefa29b8ce74a05be7d6a160e03b4a6e5e2a52e1f88ee737f37e6e7f09->enter($__internal_5d7215cefa29b8ce74a05be7d6a160e03b4a6e5e2a52e1f88ee737f37e6e7f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5d7215cefa29b8ce74a05be7d6a160e03b4a6e5e2a52e1f88ee737f37e6e7f09->leave($__internal_5d7215cefa29b8ce74a05be7d6a160e03b4a6e5e2a52e1f88ee737f37e6e7f09_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
