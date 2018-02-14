<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_25fcba16076efab9ddd01520facfe73bb36a46c7fdf7535dcf257bb29d14ff17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a162ae5810eb1b3ba2670ebdc9cd37ecfee0a5a81dc865495a54813ea1f95d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a162ae5810eb1b3ba2670ebdc9cd37ecfee0a5a81dc865495a54813ea1f95d00->enter($__internal_a162ae5810eb1b3ba2670ebdc9cd37ecfee0a5a81dc865495a54813ea1f95d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a162ae5810eb1b3ba2670ebdc9cd37ecfee0a5a81dc865495a54813ea1f95d00->leave($__internal_a162ae5810eb1b3ba2670ebdc9cd37ecfee0a5a81dc865495a54813ea1f95d00_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f3ff0b7cdeb71fb4560256b1a4604de79e3a844d8da7783e08ac2e5b5e0bd38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3ff0b7cdeb71fb4560256b1a4604de79e3a844d8da7783e08ac2e5b5e0bd38->enter($__internal_7f3ff0b7cdeb71fb4560256b1a4604de79e3a844d8da7783e08ac2e5b5e0bd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_7f3ff0b7cdeb71fb4560256b1a4604de79e3a844d8da7783e08ac2e5b5e0bd38->leave($__internal_7f3ff0b7cdeb71fb4560256b1a4604de79e3a844d8da7783e08ac2e5b5e0bd38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/Alphabus/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
