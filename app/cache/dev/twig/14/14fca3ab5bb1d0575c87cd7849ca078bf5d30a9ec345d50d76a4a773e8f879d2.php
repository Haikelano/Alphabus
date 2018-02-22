<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_aa0c2287aed8725253988db8b891df4513ea057173c43e8c7c34a1d3bba002f6 extends Twig_Template
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
        $__internal_b5f3d3d1b77b177d29131c106974522c0ded193b31017717b0f5df0710bf1099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f3d3d1b77b177d29131c106974522c0ded193b31017717b0f5df0710bf1099->enter($__internal_b5f3d3d1b77b177d29131c106974522c0ded193b31017717b0f5df0710bf1099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f3d3d1b77b177d29131c106974522c0ded193b31017717b0f5df0710bf1099->leave($__internal_b5f3d3d1b77b177d29131c106974522c0ded193b31017717b0f5df0710bf1099_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f848fcdc5638070c2b0c888e2647a90aa0bc48668d84b408c8d2431a3f932a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f848fcdc5638070c2b0c888e2647a90aa0bc48668d84b408c8d2431a3f932a7b->enter($__internal_f848fcdc5638070c2b0c888e2647a90aa0bc48668d84b408c8d2431a3f932a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f848fcdc5638070c2b0c888e2647a90aa0bc48668d84b408c8d2431a3f932a7b->leave($__internal_f848fcdc5638070c2b0c888e2647a90aa0bc48668d84b408c8d2431a3f932a7b_prof);

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
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/Alphabus/src/My/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
