<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b3ccdf20878a18ff080cf34510e5716d423d56ac3a2e7172987f22d5c0450b43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_3b3df57c938a3f808e45eb0c110ac1cae8a38bebe54c93489ad1232906898d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3df57c938a3f808e45eb0c110ac1cae8a38bebe54c93489ad1232906898d3c->enter($__internal_3b3df57c938a3f808e45eb0c110ac1cae8a38bebe54c93489ad1232906898d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b3df57c938a3f808e45eb0c110ac1cae8a38bebe54c93489ad1232906898d3c->leave($__internal_3b3df57c938a3f808e45eb0c110ac1cae8a38bebe54c93489ad1232906898d3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f6a71220608b42bf163953d3e41db5a03a90ad6143a145a9b5bfbefd884f2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6a71220608b42bf163953d3e41db5a03a90ad6143a145a9b5bfbefd884f2d0->enter($__internal_2f6a71220608b42bf163953d3e41db5a03a90ad6143a145a9b5bfbefd884f2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f6a71220608b42bf163953d3e41db5a03a90ad6143a145a9b5bfbefd884f2d0->leave($__internal_2f6a71220608b42bf163953d3e41db5a03a90ad6143a145a9b5bfbefd884f2d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_30c25c2e1a83a4af1c53bfc6609e823a7344ebe173ac8a4c73bac1bcf3da63ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c25c2e1a83a4af1c53bfc6609e823a7344ebe173ac8a4c73bac1bcf3da63ac->enter($__internal_30c25c2e1a83a4af1c53bfc6609e823a7344ebe173ac8a4c73bac1bcf3da63ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_30c25c2e1a83a4af1c53bfc6609e823a7344ebe173ac8a4c73bac1bcf3da63ac->leave($__internal_30c25c2e1a83a4af1c53bfc6609e823a7344ebe173ac8a4c73bac1bcf3da63ac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5416e32564c9f79d7d921992063c459cf82ba636b0b5d74cb4207368df80a427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5416e32564c9f79d7d921992063c459cf82ba636b0b5d74cb4207368df80a427->enter($__internal_5416e32564c9f79d7d921992063c459cf82ba636b0b5d74cb4207368df80a427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5416e32564c9f79d7d921992063c459cf82ba636b0b5d74cb4207368df80a427->leave($__internal_5416e32564c9f79d7d921992063c459cf82ba636b0b5d74cb4207368df80a427_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
