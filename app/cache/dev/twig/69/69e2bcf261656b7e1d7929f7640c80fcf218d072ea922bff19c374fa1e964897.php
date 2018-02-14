<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_940630b8c2e24e51403df849796e285b1691d51610865220b2d41f675c6d5d44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_281b361a791221e6060961fd5c153c1d7db70189596811b99bf77525da593ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281b361a791221e6060961fd5c153c1d7db70189596811b99bf77525da593ef1->enter($__internal_281b361a791221e6060961fd5c153c1d7db70189596811b99bf77525da593ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_281b361a791221e6060961fd5c153c1d7db70189596811b99bf77525da593ef1->leave($__internal_281b361a791221e6060961fd5c153c1d7db70189596811b99bf77525da593ef1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74c82cf2ff3fef926063cb0bd462f5fb4b140864ae75c5d387a796062cfd4b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c82cf2ff3fef926063cb0bd462f5fb4b140864ae75c5d387a796062cfd4b55->enter($__internal_74c82cf2ff3fef926063cb0bd462f5fb4b140864ae75c5d387a796062cfd4b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_74c82cf2ff3fef926063cb0bd462f5fb4b140864ae75c5d387a796062cfd4b55->leave($__internal_74c82cf2ff3fef926063cb0bd462f5fb4b140864ae75c5d387a796062cfd4b55_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/Alphabus/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
    }
}
