<?php

/* ::base.html.twig */
class __TwigTemplate_e97d4ea769cd13ae81f93f7bd62a407c6f7a6019fb5237a37454605b01d1265c extends Twig_Template
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
        $__internal_3b3ae1c68fdda4378008e26a97daddabd4938578d4b475eb49a4290859712bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b3ae1c68fdda4378008e26a97daddabd4938578d4b475eb49a4290859712bdb->enter($__internal_3b3ae1c68fdda4378008e26a97daddabd4938578d4b475eb49a4290859712bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3b3ae1c68fdda4378008e26a97daddabd4938578d4b475eb49a4290859712bdb->leave($__internal_3b3ae1c68fdda4378008e26a97daddabd4938578d4b475eb49a4290859712bdb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe92c9993730c7e5995b6c3e1d443fe5c4851d011932d753bf81152e3318b01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe92c9993730c7e5995b6c3e1d443fe5c4851d011932d753bf81152e3318b01f->enter($__internal_fe92c9993730c7e5995b6c3e1d443fe5c4851d011932d753bf81152e3318b01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fe92c9993730c7e5995b6c3e1d443fe5c4851d011932d753bf81152e3318b01f->leave($__internal_fe92c9993730c7e5995b6c3e1d443fe5c4851d011932d753bf81152e3318b01f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f65fdefde4bc7e5553bb83e3aaa96f92aff98947cd5a752fbf6215c88e96df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f65fdefde4bc7e5553bb83e3aaa96f92aff98947cd5a752fbf6215c88e96df8->enter($__internal_4f65fdefde4bc7e5553bb83e3aaa96f92aff98947cd5a752fbf6215c88e96df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4f65fdefde4bc7e5553bb83e3aaa96f92aff98947cd5a752fbf6215c88e96df8->leave($__internal_4f65fdefde4bc7e5553bb83e3aaa96f92aff98947cd5a752fbf6215c88e96df8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d91316479106f7e4120f32a4527cdfa15a7167e9c62daa6468250ba7c4d7b1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91316479106f7e4120f32a4527cdfa15a7167e9c62daa6468250ba7c4d7b1cf->enter($__internal_d91316479106f7e4120f32a4527cdfa15a7167e9c62daa6468250ba7c4d7b1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d91316479106f7e4120f32a4527cdfa15a7167e9c62daa6468250ba7c4d7b1cf->leave($__internal_d91316479106f7e4120f32a4527cdfa15a7167e9c62daa6468250ba7c4d7b1cf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_de1648c51e046eb6382d5c834fabe6d416e456fc23ba70bb52e7857095376340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1648c51e046eb6382d5c834fabe6d416e456fc23ba70bb52e7857095376340->enter($__internal_de1648c51e046eb6382d5c834fabe6d416e456fc23ba70bb52e7857095376340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_de1648c51e046eb6382d5c834fabe6d416e456fc23ba70bb52e7857095376340->leave($__internal_de1648c51e046eb6382d5c834fabe6d416e456fc23ba70bb52e7857095376340_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/var/www/html/Alphabus/app/Resources/views/base.html.twig");
    }
}
