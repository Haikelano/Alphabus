<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_014faeee6ac6176bd7fc0d8dbe18adf9d5a2990a5629fb06afa65c2681fcc8e6 extends Twig_Template
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
        $__internal_1bc9efa9f7fcdbaf5c5a4455d3944240f3bdb4b46c200a558ba25eb7d7ad0dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc9efa9f7fcdbaf5c5a4455d3944240f3bdb4b46c200a558ba25eb7d7ad0dba->enter($__internal_1bc9efa9f7fcdbaf5c5a4455d3944240f3bdb4b46c200a558ba25eb7d7ad0dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_1bc9efa9f7fcdbaf5c5a4455d3944240f3bdb4b46c200a558ba25eb7d7ad0dba->leave($__internal_1bc9efa9f7fcdbaf5c5a4455d3944240f3bdb4b46c200a558ba25eb7d7ad0dba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
