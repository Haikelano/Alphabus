<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_98d55bec9e7b7519007396fabb98866c7c061d5affca1bda950025bbc2570430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout2.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_ef0a614b982dff0767e778ceed5ad5b738e395022f1225834b44a0c26a1b5158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0a614b982dff0767e778ceed5ad5b738e395022f1225834b44a0c26a1b5158->enter($__internal_ef0a614b982dff0767e778ceed5ad5b738e395022f1225834b44a0c26a1b5158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef0a614b982dff0767e778ceed5ad5b738e395022f1225834b44a0c26a1b5158->leave($__internal_ef0a614b982dff0767e778ceed5ad5b738e395022f1225834b44a0c26a1b5158_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_337dc60fb7f36d9cf14d5d0e37c207b6452d60e70a058d9eff2da2a53ebc7000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337dc60fb7f36d9cf14d5d0e37c207b6452d60e70a058d9eff2da2a53ebc7000->enter($__internal_337dc60fb7f36d9cf14d5d0e37c207b6452d60e70a058d9eff2da2a53ebc7000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 5)->display($context);
        
        $__internal_337dc60fb7f36d9cf14d5d0e37c207b6452d60e70a058d9eff2da2a53ebc7000->leave($__internal_337dc60fb7f36d9cf14d5d0e37c207b6452d60e70a058d9eff2da2a53ebc7000_prof);

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
        return new Twig_Source("{% extends \"FOSUserBundle::layout2.html.twig\" %}

{% block fos_user_content %}

{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/Alphabus/src/My/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
