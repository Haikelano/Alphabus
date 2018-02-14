<?php

/* base.html.twig */
class __TwigTemplate_eacc3447d728cd67eb4cfaf8d58f757498a1179a9afc717c304e5e3a4e552ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a67e244ab6c8899e68979895d50e733199b9f80a91302871fa7a62225c5df11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67e244ab6c8899e68979895d50e733199b9f80a91302871fa7a62225c5df11f->enter($__internal_a67e244ab6c8899e68979895d50e733199b9f80a91302871fa7a62225c5df11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a67e244ab6c8899e68979895d50e733199b9f80a91302871fa7a62225c5df11f->leave($__internal_a67e244ab6c8899e68979895d50e733199b9f80a91302871fa7a62225c5df11f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_56dcbb1eefa606b608583da7ace0e5064f351fbbd5822117c6381bcdb405079d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56dcbb1eefa606b608583da7ace0e5064f351fbbd5822117c6381bcdb405079d->enter($__internal_56dcbb1eefa606b608583da7ace0e5064f351fbbd5822117c6381bcdb405079d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_56dcbb1eefa606b608583da7ace0e5064f351fbbd5822117c6381bcdb405079d->leave($__internal_56dcbb1eefa606b608583da7ace0e5064f351fbbd5822117c6381bcdb405079d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd48bb75c767e74f5af2d37de2d45f69f3e13802d7d88616b44530aec7d5dd3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd48bb75c767e74f5af2d37de2d45f69f3e13802d7d88616b44530aec7d5dd3b->enter($__internal_fd48bb75c767e74f5af2d37de2d45f69f3e13802d7d88616b44530aec7d5dd3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fd48bb75c767e74f5af2d37de2d45f69f3e13802d7d88616b44530aec7d5dd3b->leave($__internal_fd48bb75c767e74f5af2d37de2d45f69f3e13802d7d88616b44530aec7d5dd3b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f53d3b001e69db742d3d99a78bd0c1f81007a97dfd392e7ca32d06f1c9c3173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f53d3b001e69db742d3d99a78bd0c1f81007a97dfd392e7ca32d06f1c9c3173->enter($__internal_1f53d3b001e69db742d3d99a78bd0c1f81007a97dfd392e7ca32d06f1c9c3173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f53d3b001e69db742d3d99a78bd0c1f81007a97dfd392e7ca32d06f1c9c3173->leave($__internal_1f53d3b001e69db742d3d99a78bd0c1f81007a97dfd392e7ca32d06f1c9c3173_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d4669e6792b8db69e9c62704579f527c0a8555f4d6b1ad0c31a0f6a8008b47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4669e6792b8db69e9c62704579f527c0a8555f4d6b1ad0c31a0f6a8008b47c->enter($__internal_1d4669e6792b8db69e9c62704579f527c0a8555f4d6b1ad0c31a0f6a8008b47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1d4669e6792b8db69e9c62704579f527c0a8555f4d6b1ad0c31a0f6a8008b47c->leave($__internal_1d4669e6792b8db69e9c62704579f527c0a8555f4d6b1ad0c31a0f6a8008b47c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Alphabus/app/Resources/views/base.html.twig");
    }
}
