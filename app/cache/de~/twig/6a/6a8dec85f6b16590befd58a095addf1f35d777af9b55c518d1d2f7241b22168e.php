<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d66eb56c22cf7b246605e0a0cc7d880c072443d78466cf6436084e8d733a6e24 extends Twig_Template
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
        $__internal_ccc55eec2d2d1b3c1190e132136ccbb00208cdebcb18178bf8c894b4fc42c302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc55eec2d2d1b3c1190e132136ccbb00208cdebcb18178bf8c894b4fc42c302->enter($__internal_ccc55eec2d2d1b3c1190e132136ccbb00208cdebcb18178bf8c894b4fc42c302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccc55eec2d2d1b3c1190e132136ccbb00208cdebcb18178bf8c894b4fc42c302->leave($__internal_ccc55eec2d2d1b3c1190e132136ccbb00208cdebcb18178bf8c894b4fc42c302_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1afcc6d5fea6b2e0a1cdc23d540a61881dd3926949eb7df9ffdc5fbc0a8359b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afcc6d5fea6b2e0a1cdc23d540a61881dd3926949eb7df9ffdc5fbc0a8359b7->enter($__internal_1afcc6d5fea6b2e0a1cdc23d540a61881dd3926949eb7df9ffdc5fbc0a8359b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 5)->display($context);
        
        $__internal_1afcc6d5fea6b2e0a1cdc23d540a61881dd3926949eb7df9ffdc5fbc0a8359b7->leave($__internal_1afcc6d5fea6b2e0a1cdc23d540a61881dd3926949eb7df9ffdc5fbc0a8359b7_prof);

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
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/Alphabus/src/My/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
