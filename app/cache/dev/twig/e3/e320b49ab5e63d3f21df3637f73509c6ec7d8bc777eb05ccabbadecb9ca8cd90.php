<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_d928ec86d85d1fa43fc381b4034011e37252116b3c0a54b7c03fe5ecc28e83a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f9903f3cf0e5f72aba026e286dd7f282318d1231aced11f187b588bbe626277c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9903f3cf0e5f72aba026e286dd7f282318d1231aced11f187b588bbe626277c->enter($__internal_f9903f3cf0e5f72aba026e286dd7f282318d1231aced11f187b588bbe626277c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9903f3cf0e5f72aba026e286dd7f282318d1231aced11f187b588bbe626277c->leave($__internal_f9903f3cf0e5f72aba026e286dd7f282318d1231aced11f187b588bbe626277c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ecb94997010e90c243332c41a3d2eedbebb1d6c3d95ffa897299684aa77f095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ecb94997010e90c243332c41a3d2eedbebb1d6c3d95ffa897299684aa77f095->enter($__internal_7ecb94997010e90c243332c41a3d2eedbebb1d6c3d95ffa897299684aa77f095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_7ecb94997010e90c243332c41a3d2eedbebb1d6c3d95ffa897299684aa77f095->leave($__internal_7ecb94997010e90c243332c41a3d2eedbebb1d6c3d95ffa897299684aa77f095_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/Alphabus/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list.html.twig");
    }
}
