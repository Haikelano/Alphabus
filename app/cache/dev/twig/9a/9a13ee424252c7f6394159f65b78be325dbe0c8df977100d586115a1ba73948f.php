<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1c542d7f24e7fa49a7b0c60e96f37d95fbb06ce79ad8bf01086a8d3c46ac692e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_79fbcbef94e39dbd66876986dfdd6a67a22e9de891e083aef6bcf8888f246057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79fbcbef94e39dbd66876986dfdd6a67a22e9de891e083aef6bcf8888f246057->enter($__internal_79fbcbef94e39dbd66876986dfdd6a67a22e9de891e083aef6bcf8888f246057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79fbcbef94e39dbd66876986dfdd6a67a22e9de891e083aef6bcf8888f246057->leave($__internal_79fbcbef94e39dbd66876986dfdd6a67a22e9de891e083aef6bcf8888f246057_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_802ffea0528e0b10e4acb1cfe52864ee6ca64a23274e4a8aab0f3289a19585c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802ffea0528e0b10e4acb1cfe52864ee6ca64a23274e4a8aab0f3289a19585c8->enter($__internal_802ffea0528e0b10e4acb1cfe52864ee6ca64a23274e4a8aab0f3289a19585c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_802ffea0528e0b10e4acb1cfe52864ee6ca64a23274e4a8aab0f3289a19585c8->leave($__internal_802ffea0528e0b10e4acb1cfe52864ee6ca64a23274e4a8aab0f3289a19585c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/Alphabus/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
