<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_93b6be92896dbd9faa5d58273d0e8d58b4ec83ebd41cbfa1884e4a18fea5dc72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_cdfb3f109fafcf5dcc143abefc31f4c1309a8eb3e03556991844ba03bb9f21c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfb3f109fafcf5dcc143abefc31f4c1309a8eb3e03556991844ba03bb9f21c3->enter($__internal_cdfb3f109fafcf5dcc143abefc31f4c1309a8eb3e03556991844ba03bb9f21c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdfb3f109fafcf5dcc143abefc31f4c1309a8eb3e03556991844ba03bb9f21c3->leave($__internal_cdfb3f109fafcf5dcc143abefc31f4c1309a8eb3e03556991844ba03bb9f21c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01480fa037d3d4e2739aa2f893ec7129e6dab858969c48aa4434e2d2b1066bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01480fa037d3d4e2739aa2f893ec7129e6dab858969c48aa4434e2d2b1066bd8->enter($__internal_01480fa037d3d4e2739aa2f893ec7129e6dab858969c48aa4434e2d2b1066bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_01480fa037d3d4e2739aa2f893ec7129e6dab858969c48aa4434e2d2b1066bd8->leave($__internal_01480fa037d3d4e2739aa2f893ec7129e6dab858969c48aa4434e2d2b1066bd8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/Alphabus/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/new.html.twig");
    }
}
