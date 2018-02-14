<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_2305f49b86f323be73378b37bb61b208bdb7ce19296a608583781543892b4379 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0323efd4f9846ff5e012938a20aecb2677bcaf4bddeda5c7cc3612a89cbc40e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0323efd4f9846ff5e012938a20aecb2677bcaf4bddeda5c7cc3612a89cbc40e4->enter($__internal_0323efd4f9846ff5e012938a20aecb2677bcaf4bddeda5c7cc3612a89cbc40e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0323efd4f9846ff5e012938a20aecb2677bcaf4bddeda5c7cc3612a89cbc40e4->leave($__internal_0323efd4f9846ff5e012938a20aecb2677bcaf4bddeda5c7cc3612a89cbc40e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1cf26c8452accc404f1ebc7e187ff81998ad2962666358bd093bdd3194a8fa70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf26c8452accc404f1ebc7e187ff81998ad2962666358bd093bdd3194a8fa70->enter($__internal_1cf26c8452accc404f1ebc7e187ff81998ad2962666358bd093bdd3194a8fa70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_1cf26c8452accc404f1ebc7e187ff81998ad2962666358bd093bdd3194a8fa70->leave($__internal_1cf26c8452accc404f1ebc7e187ff81998ad2962666358bd093bdd3194a8fa70_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/Alphabus/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
