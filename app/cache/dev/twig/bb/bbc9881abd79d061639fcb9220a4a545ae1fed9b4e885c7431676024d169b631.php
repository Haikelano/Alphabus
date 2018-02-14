<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0bc26454fa1c9128d522187b2ed45c42b715e3201c2dfa79dddd86aadda16791 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_366cc4164d2bffd9280641d08289e68b18530d0e3c46f9c3d8d2e6cd4bf3da03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366cc4164d2bffd9280641d08289e68b18530d0e3c46f9c3d8d2e6cd4bf3da03->enter($__internal_366cc4164d2bffd9280641d08289e68b18530d0e3c46f9c3d8d2e6cd4bf3da03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_366cc4164d2bffd9280641d08289e68b18530d0e3c46f9c3d8d2e6cd4bf3da03->leave($__internal_366cc4164d2bffd9280641d08289e68b18530d0e3c46f9c3d8d2e6cd4bf3da03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_523722325e583e31abcfea85438ece061ff8f49be79dedc5da28cbb18ab261cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523722325e583e31abcfea85438ece061ff8f49be79dedc5da28cbb18ab261cc->enter($__internal_523722325e583e31abcfea85438ece061ff8f49be79dedc5da28cbb18ab261cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_523722325e583e31abcfea85438ece061ff8f49be79dedc5da28cbb18ab261cc->leave($__internal_523722325e583e31abcfea85438ece061ff8f49be79dedc5da28cbb18ab261cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/Alphabus/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
