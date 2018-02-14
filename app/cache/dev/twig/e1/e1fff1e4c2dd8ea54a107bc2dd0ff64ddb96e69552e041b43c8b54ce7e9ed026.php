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
        $__internal_ecc10f19267510110fddf528428c2bbc9f482d8a77f8d30e607d723cfdb0cefd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecc10f19267510110fddf528428c2bbc9f482d8a77f8d30e607d723cfdb0cefd->enter($__internal_ecc10f19267510110fddf528428c2bbc9f482d8a77f8d30e607d723cfdb0cefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecc10f19267510110fddf528428c2bbc9f482d8a77f8d30e607d723cfdb0cefd->leave($__internal_ecc10f19267510110fddf528428c2bbc9f482d8a77f8d30e607d723cfdb0cefd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6919b6ad1b9de35a5a25427b18433c9272094237d8eb072819cbe072df9cd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6919b6ad1b9de35a5a25427b18433c9272094237d8eb072819cbe072df9cd93->enter($__internal_e6919b6ad1b9de35a5a25427b18433c9272094237d8eb072819cbe072df9cd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e6919b6ad1b9de35a5a25427b18433c9272094237d8eb072819cbe072df9cd93->leave($__internal_e6919b6ad1b9de35a5a25427b18433c9272094237d8eb072819cbe072df9cd93_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86b7f7722ee6b933091ee5dd7e7f81e4dfaccf0a710bb1844e82376a9583ee83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b7f7722ee6b933091ee5dd7e7f81e4dfaccf0a710bb1844e82376a9583ee83->enter($__internal_86b7f7722ee6b933091ee5dd7e7f81e4dfaccf0a710bb1844e82376a9583ee83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_86b7f7722ee6b933091ee5dd7e7f81e4dfaccf0a710bb1844e82376a9583ee83->leave($__internal_86b7f7722ee6b933091ee5dd7e7f81e4dfaccf0a710bb1844e82376a9583ee83_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_862de8ddbedb52e6b7646bb5f7b9c4ee064b34b136ff305d91347e187df41896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862de8ddbedb52e6b7646bb5f7b9c4ee064b34b136ff305d91347e187df41896->enter($__internal_862de8ddbedb52e6b7646bb5f7b9c4ee064b34b136ff305d91347e187df41896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_862de8ddbedb52e6b7646bb5f7b9c4ee064b34b136ff305d91347e187df41896->leave($__internal_862de8ddbedb52e6b7646bb5f7b9c4ee064b34b136ff305d91347e187df41896_prof);

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
