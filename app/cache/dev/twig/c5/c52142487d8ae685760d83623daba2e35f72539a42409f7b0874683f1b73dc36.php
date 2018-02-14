<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_7fc0b558d7ba0f89b52077d0ca6697134cab32083543da77f725f3074f522cb7 extends Twig_Template
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
        $__internal_69fcf1fcfd35bb628fd0e18bce5ca058020a332b57532f51e2106378e256ff5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69fcf1fcfd35bb628fd0e18bce5ca058020a332b57532f51e2106378e256ff5f->enter($__internal_69fcf1fcfd35bb628fd0e18bce5ca058020a332b57532f51e2106378e256ff5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_69fcf1fcfd35bb628fd0e18bce5ca058020a332b57532f51e2106378e256ff5f->leave($__internal_69fcf1fcfd35bb628fd0e18bce5ca058020a332b57532f51e2106378e256ff5f_prof);

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
