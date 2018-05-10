<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_361cef82133e7f6e2603f91f14d07a728ac9bd06c155491813c95bcfef8d6c02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout2.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b758d9df0ce508786535e8c43439cb9e7b328f503a02e6184cbcd9d5bbdcd75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b758d9df0ce508786535e8c43439cb9e7b328f503a02e6184cbcd9d5bbdcd75d->enter($__internal_b758d9df0ce508786535e8c43439cb9e7b328f503a02e6184cbcd9d5bbdcd75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b758d9df0ce508786535e8c43439cb9e7b328f503a02e6184cbcd9d5bbdcd75d->leave($__internal_b758d9df0ce508786535e8c43439cb9e7b328f503a02e6184cbcd9d5bbdcd75d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8aab6a48c948122db5a61c746e60f0113eddf362f46b12dc75fba0bd4d12c610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aab6a48c948122db5a61c746e60f0113eddf362f46b12dc75fba0bd4d12c610->enter($__internal_8aab6a48c948122db5a61c746e60f0113eddf362f46b12dc75fba0bd4d12c610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8aab6a48c948122db5a61c746e60f0113eddf362f46b12dc75fba0bd4d12c610->leave($__internal_8aab6a48c948122db5a61c746e60f0113eddf362f46b12dc75fba0bd4d12c610_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
        return new Twig_Source("{% extends \"FOSUserBundle::layout2.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/Alphabus/src/My/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
