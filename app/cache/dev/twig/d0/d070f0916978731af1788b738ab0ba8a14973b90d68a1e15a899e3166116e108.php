<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d0b07d9e87b86952777e9a5c276be3b221d6d9e1679f6fbdfd48f4df43006734 extends Twig_Template
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
        $__internal_7c31d4f5c86eb101f3673c0c8b68078cd13a0acbe400f22ef1b1e9975f37c734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c31d4f5c86eb101f3673c0c8b68078cd13a0acbe400f22ef1b1e9975f37c734->enter($__internal_7c31d4f5c86eb101f3673c0c8b68078cd13a0acbe400f22ef1b1e9975f37c734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_7c31d4f5c86eb101f3673c0c8b68078cd13a0acbe400f22ef1b1e9975f37c734->leave($__internal_7c31d4f5c86eb101f3673c0c8b68078cd13a0acbe400f22ef1b1e9975f37c734_prof);

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
