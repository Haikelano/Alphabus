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
        $__internal_bc78faf90e74e16d0995c1a36767ab1916db7183150cb83b8b584668d8b09935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc78faf90e74e16d0995c1a36767ab1916db7183150cb83b8b584668d8b09935->enter($__internal_bc78faf90e74e16d0995c1a36767ab1916db7183150cb83b8b584668d8b09935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bc78faf90e74e16d0995c1a36767ab1916db7183150cb83b8b584668d8b09935->leave($__internal_bc78faf90e74e16d0995c1a36767ab1916db7183150cb83b8b584668d8b09935_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d7fe400364036e7cbd602fe57a0fa279f983d1c567305795f81717200682136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7fe400364036e7cbd602fe57a0fa279f983d1c567305795f81717200682136->enter($__internal_1d7fe400364036e7cbd602fe57a0fa279f983d1c567305795f81717200682136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1d7fe400364036e7cbd602fe57a0fa279f983d1c567305795f81717200682136->leave($__internal_1d7fe400364036e7cbd602fe57a0fa279f983d1c567305795f81717200682136_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b48feec8be79b51839baad98e1a081b153feb20b90b54338f621d3541e6f0c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48feec8be79b51839baad98e1a081b153feb20b90b54338f621d3541e6f0c01->enter($__internal_b48feec8be79b51839baad98e1a081b153feb20b90b54338f621d3541e6f0c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b48feec8be79b51839baad98e1a081b153feb20b90b54338f621d3541e6f0c01->leave($__internal_b48feec8be79b51839baad98e1a081b153feb20b90b54338f621d3541e6f0c01_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a33b2cc7dd1d676d41d950dadb9c7e57cb036162c46f82444f4f40b194407be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33b2cc7dd1d676d41d950dadb9c7e57cb036162c46f82444f4f40b194407be4->enter($__internal_a33b2cc7dd1d676d41d950dadb9c7e57cb036162c46f82444f4f40b194407be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a33b2cc7dd1d676d41d950dadb9c7e57cb036162c46f82444f4f40b194407be4->leave($__internal_a33b2cc7dd1d676d41d950dadb9c7e57cb036162c46f82444f4f40b194407be4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae35edcc256affb41143519336bbd0b3fccff36ffec8357df3cbbe7b4e3f53f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae35edcc256affb41143519336bbd0b3fccff36ffec8357df3cbbe7b4e3f53f1->enter($__internal_ae35edcc256affb41143519336bbd0b3fccff36ffec8357df3cbbe7b4e3f53f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ae35edcc256affb41143519336bbd0b3fccff36ffec8357df3cbbe7b4e3f53f1->leave($__internal_ae35edcc256affb41143519336bbd0b3fccff36ffec8357df3cbbe7b4e3f53f1_prof);

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
