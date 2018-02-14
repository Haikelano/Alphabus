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
        $__internal_10b9de6c8b7e82414226fb47c756442d40628a5b4cf7f53c3a80f51132274747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b9de6c8b7e82414226fb47c756442d40628a5b4cf7f53c3a80f51132274747->enter($__internal_10b9de6c8b7e82414226fb47c756442d40628a5b4cf7f53c3a80f51132274747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_10b9de6c8b7e82414226fb47c756442d40628a5b4cf7f53c3a80f51132274747->leave($__internal_10b9de6c8b7e82414226fb47c756442d40628a5b4cf7f53c3a80f51132274747_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_153e1e7730367f23a6147c6fcc4ae18d8b2886640691b2f34775fe2a7bb7df37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153e1e7730367f23a6147c6fcc4ae18d8b2886640691b2f34775fe2a7bb7df37->enter($__internal_153e1e7730367f23a6147c6fcc4ae18d8b2886640691b2f34775fe2a7bb7df37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_153e1e7730367f23a6147c6fcc4ae18d8b2886640691b2f34775fe2a7bb7df37->leave($__internal_153e1e7730367f23a6147c6fcc4ae18d8b2886640691b2f34775fe2a7bb7df37_prof);

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
