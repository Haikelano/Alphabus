<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ec35b9e446a4a5d4512575a1cb12e1e70e556c3eb91aff9a30b4e2227fe641cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_623e4c99bb1833ac0a3258eb9ff7f01703c4fbea2685ec34acbe26d80231e481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623e4c99bb1833ac0a3258eb9ff7f01703c4fbea2685ec34acbe26d80231e481->enter($__internal_623e4c99bb1833ac0a3258eb9ff7f01703c4fbea2685ec34acbe26d80231e481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_623e4c99bb1833ac0a3258eb9ff7f01703c4fbea2685ec34acbe26d80231e481->leave($__internal_623e4c99bb1833ac0a3258eb9ff7f01703c4fbea2685ec34acbe26d80231e481_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9397337b03b2a210443c1c8b01caab3b9a5e1fdf417a7029ac224a7d39eda5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9397337b03b2a210443c1c8b01caab3b9a5e1fdf417a7029ac224a7d39eda5ef->enter($__internal_9397337b03b2a210443c1c8b01caab3b9a5e1fdf417a7029ac224a7d39eda5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9397337b03b2a210443c1c8b01caab3b9a5e1fdf417a7029ac224a7d39eda5ef->leave($__internal_9397337b03b2a210443c1c8b01caab3b9a5e1fdf417a7029ac224a7d39eda5ef_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
