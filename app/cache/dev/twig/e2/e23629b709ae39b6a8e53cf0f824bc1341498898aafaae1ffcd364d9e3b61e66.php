<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_a280025097eb4df96f7805ede7fb611ccc838306756be1aadb1d117856da2d7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_dd35a82facce14bf69e8a483b2c195c5f792c35c24de82d62fc6de48ac0719a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd35a82facce14bf69e8a483b2c195c5f792c35c24de82d62fc6de48ac0719a0->enter($__internal_dd35a82facce14bf69e8a483b2c195c5f792c35c24de82d62fc6de48ac0719a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd35a82facce14bf69e8a483b2c195c5f792c35c24de82d62fc6de48ac0719a0->leave($__internal_dd35a82facce14bf69e8a483b2c195c5f792c35c24de82d62fc6de48ac0719a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99208a7318e54fe725afb6676a65419af884ed4ce200201b5be34078570989a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99208a7318e54fe725afb6676a65419af884ed4ce200201b5be34078570989a4->enter($__internal_99208a7318e54fe725afb6676a65419af884ed4ce200201b5be34078570989a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_99208a7318e54fe725afb6676a65419af884ed4ce200201b5be34078570989a4->leave($__internal_99208a7318e54fe725afb6676a65419af884ed4ce200201b5be34078570989a4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/Alphabus/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit.html.twig");
    }
}
