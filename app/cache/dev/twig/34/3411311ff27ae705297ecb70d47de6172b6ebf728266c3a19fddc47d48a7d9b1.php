<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_80a364e2af81d51ebf1d3d43fe6a67e399b2fb0cacd52fe4f1572d8791b38e01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_f0e165c46eb5d04254826a07549bc059f7630fe26e234c0e2f30d7e91b57cb55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e165c46eb5d04254826a07549bc059f7630fe26e234c0e2f30d7e91b57cb55->enter($__internal_f0e165c46eb5d04254826a07549bc059f7630fe26e234c0e2f30d7e91b57cb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e165c46eb5d04254826a07549bc059f7630fe26e234c0e2f30d7e91b57cb55->leave($__internal_f0e165c46eb5d04254826a07549bc059f7630fe26e234c0e2f30d7e91b57cb55_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_899e5d2a66b2363e8746e059b587a75f0249c8bfe82c319ae08dc44411ed77c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899e5d2a66b2363e8746e059b587a75f0249c8bfe82c319ae08dc44411ed77c5->enter($__internal_899e5d2a66b2363e8746e059b587a75f0249c8bfe82c319ae08dc44411ed77c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_899e5d2a66b2363e8746e059b587a75f0249c8bfe82c319ae08dc44411ed77c5->leave($__internal_899e5d2a66b2363e8746e059b587a75f0249c8bfe82c319ae08dc44411ed77c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/Alphabus/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
