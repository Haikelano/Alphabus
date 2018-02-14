<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4da5b37102b8df637a5f4c18d2450bf1bd9644f0ece1f296479ade5f0537e4f3 extends Twig_Template
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
        $__internal_7d88cb66da29ce8c7f49e09ad7cda2f6a0945e43d916b85e5c12ad089f1f1b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d88cb66da29ce8c7f49e09ad7cda2f6a0945e43d916b85e5c12ad089f1f1b0a->enter($__internal_7d88cb66da29ce8c7f49e09ad7cda2f6a0945e43d916b85e5c12ad089f1f1b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_7d88cb66da29ce8c7f49e09ad7cda2f6a0945e43d916b85e5c12ad089f1f1b0a->leave($__internal_7d88cb66da29ce8c7f49e09ad7cda2f6a0945e43d916b85e5c12ad089f1f1b0a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
