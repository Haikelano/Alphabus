<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6e31809c359462a6d73ecf61d29f9b3b14b7bd51d0f078d1bfbb8e4c174ef674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2be1b7e30b1c5616fa23e3dc3acd19bd9e2e6ff688ab967fb7e736fc1ec526a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be1b7e30b1c5616fa23e3dc3acd19bd9e2e6ff688ab967fb7e736fc1ec526a8->enter($__internal_2be1b7e30b1c5616fa23e3dc3acd19bd9e2e6ff688ab967fb7e736fc1ec526a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be1b7e30b1c5616fa23e3dc3acd19bd9e2e6ff688ab967fb7e736fc1ec526a8->leave($__internal_2be1b7e30b1c5616fa23e3dc3acd19bd9e2e6ff688ab967fb7e736fc1ec526a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_14082527b83ba03ac6d7220f662992ebe72e08a8508dd1d465b3594186a4b711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14082527b83ba03ac6d7220f662992ebe72e08a8508dd1d465b3594186a4b711->enter($__internal_14082527b83ba03ac6d7220f662992ebe72e08a8508dd1d465b3594186a4b711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_14082527b83ba03ac6d7220f662992ebe72e08a8508dd1d465b3594186a4b711->leave($__internal_14082527b83ba03ac6d7220f662992ebe72e08a8508dd1d465b3594186a4b711_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_02edba88e6eea6836e1fd50f809358e4452813bc4318ad2ae6a8e0e596e7e2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02edba88e6eea6836e1fd50f809358e4452813bc4318ad2ae6a8e0e596e7e2dc->enter($__internal_02edba88e6eea6836e1fd50f809358e4452813bc4318ad2ae6a8e0e596e7e2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02edba88e6eea6836e1fd50f809358e4452813bc4318ad2ae6a8e0e596e7e2dc->leave($__internal_02edba88e6eea6836e1fd50f809358e4452813bc4318ad2ae6a8e0e596e7e2dc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee3746875b6bb94d9681bc9103e07ca3c6119c48b5a4be3834d2c5a2b1cea495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3746875b6bb94d9681bc9103e07ca3c6119c48b5a4be3834d2c5a2b1cea495->enter($__internal_ee3746875b6bb94d9681bc9103e07ca3c6119c48b5a4be3834d2c5a2b1cea495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ee3746875b6bb94d9681bc9103e07ca3c6119c48b5a4be3834d2c5a2b1cea495->leave($__internal_ee3746875b6bb94d9681bc9103e07ca3c6119c48b5a4be3834d2c5a2b1cea495_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
