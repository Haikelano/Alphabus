<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_4accec1ed25755c11fc7b77779bed3ed604dcd284f1ab0087986d49ed49fa445 extends Twig_Template
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
        $__internal_7ca9f057198faaa44db4f92534ba2b7181a4ac996529d2e3e81199b787169c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca9f057198faaa44db4f92534ba2b7181a4ac996529d2e3e81199b787169c4e->enter($__internal_7ca9f057198faaa44db4f92534ba2b7181a4ac996529d2e3e81199b787169c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7ca9f057198faaa44db4f92534ba2b7181a4ac996529d2e3e81199b787169c4e->leave($__internal_7ca9f057198faaa44db4f92534ba2b7181a4ac996529d2e3e81199b787169c4e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_64cd34727271872845de8aa0e0fbbee85ac63756d7a1469fc02b6badb00a0e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cd34727271872845de8aa0e0fbbee85ac63756d7a1469fc02b6badb00a0e8e->enter($__internal_64cd34727271872845de8aa0e0fbbee85ac63756d7a1469fc02b6badb00a0e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_64cd34727271872845de8aa0e0fbbee85ac63756d7a1469fc02b6badb00a0e8e->leave($__internal_64cd34727271872845de8aa0e0fbbee85ac63756d7a1469fc02b6badb00a0e8e_prof);

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
