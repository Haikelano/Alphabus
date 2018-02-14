<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_73a7312fd2fd15670303310922b6538ec1be21362c56fcae690f4d2b902326b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_617c5e3c1aff2a05de8d7c3f1d8a9ef7079a6c2ad6b42d0b92d72ed793783d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617c5e3c1aff2a05de8d7c3f1d8a9ef7079a6c2ad6b42d0b92d72ed793783d3b->enter($__internal_617c5e3c1aff2a05de8d7c3f1d8a9ef7079a6c2ad6b42d0b92d72ed793783d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_617c5e3c1aff2a05de8d7c3f1d8a9ef7079a6c2ad6b42d0b92d72ed793783d3b->leave($__internal_617c5e3c1aff2a05de8d7c3f1d8a9ef7079a6c2ad6b42d0b92d72ed793783d3b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6335fc6c8ac5a35e3301bead05b0f8720625c7480cfe72556ed5f19f9b8b1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6335fc6c8ac5a35e3301bead05b0f8720625c7480cfe72556ed5f19f9b8b1bf->enter($__internal_b6335fc6c8ac5a35e3301bead05b0f8720625c7480cfe72556ed5f19f9b8b1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b6335fc6c8ac5a35e3301bead05b0f8720625c7480cfe72556ed5f19f9b8b1bf->leave($__internal_b6335fc6c8ac5a35e3301bead05b0f8720625c7480cfe72556ed5f19f9b8b1bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "/var/www/html/Alphabus/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
