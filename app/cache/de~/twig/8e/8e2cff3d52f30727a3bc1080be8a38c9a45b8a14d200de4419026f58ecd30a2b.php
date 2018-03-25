<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3927d3259015bfaeee01b0bc81ce9ada2bf6e3aef83c7ded818fdf40974396e8 extends Twig_Template
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
        $__internal_e492b5064490a8a2252e919d6f0ffb9619ad57fd75c47b6b2d7069a2b5d32c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e492b5064490a8a2252e919d6f0ffb9619ad57fd75c47b6b2d7069a2b5d32c5a->enter($__internal_e492b5064490a8a2252e919d6f0ffb9619ad57fd75c47b6b2d7069a2b5d32c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e492b5064490a8a2252e919d6f0ffb9619ad57fd75c47b6b2d7069a2b5d32c5a->leave($__internal_e492b5064490a8a2252e919d6f0ffb9619ad57fd75c47b6b2d7069a2b5d32c5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f775179e765d7740394680d0211869dba646ade2fb80242d71039d1830f62981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f775179e765d7740394680d0211869dba646ade2fb80242d71039d1830f62981->enter($__internal_f775179e765d7740394680d0211869dba646ade2fb80242d71039d1830f62981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f775179e765d7740394680d0211869dba646ade2fb80242d71039d1830f62981->leave($__internal_f775179e765d7740394680d0211869dba646ade2fb80242d71039d1830f62981_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b98cccab5b9c6f38af1c46284beac254c28cc1260588f3e838d512d1f7803e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b98cccab5b9c6f38af1c46284beac254c28cc1260588f3e838d512d1f7803e7->enter($__internal_5b98cccab5b9c6f38af1c46284beac254c28cc1260588f3e838d512d1f7803e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5b98cccab5b9c6f38af1c46284beac254c28cc1260588f3e838d512d1f7803e7->leave($__internal_5b98cccab5b9c6f38af1c46284beac254c28cc1260588f3e838d512d1f7803e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa09c298e0e20532418ba595ee16f8caa8001115adf8dc3945788409649fc0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa09c298e0e20532418ba595ee16f8caa8001115adf8dc3945788409649fc0e5->enter($__internal_fa09c298e0e20532418ba595ee16f8caa8001115adf8dc3945788409649fc0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fa09c298e0e20532418ba595ee16f8caa8001115adf8dc3945788409649fc0e5->leave($__internal_fa09c298e0e20532418ba595ee16f8caa8001115adf8dc3945788409649fc0e5_prof);

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
