<?php

/* MyAlphabusBundle:Default:admin.html.twig */
class __TwigTemplate_ba28dca94863406c0e25b2db382bc406f357b11eb00b6b52fc99f5f812bec510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyAlphabusBundle:Default:admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cef28bfc0bd3b9c64a35f826165be3e2dcc1adb138c5c8053b92e6be08984d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cef28bfc0bd3b9c64a35f826165be3e2dcc1adb138c5c8053b92e6be08984d6->enter($__internal_0cef28bfc0bd3b9c64a35f826165be3e2dcc1adb138c5c8053b92e6be08984d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAlphabusBundle:Default:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cef28bfc0bd3b9c64a35f826165be3e2dcc1adb138c5c8053b92e6be08984d6->leave($__internal_0cef28bfc0bd3b9c64a35f826165be3e2dcc1adb138c5c8053b92e6be08984d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf77805f895c1acaecdaf581d569c854883e3bae17e4c6c40e5b11c284c9e35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf77805f895c1acaecdaf581d569c854883e3bae17e4c6c40e5b11c284c9e35b->enter($__internal_cf77805f895c1acaecdaf581d569c854883e3bae17e4c6c40e5b11c284c9e35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<p>Vous avez connectez sur les pages admin</p>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" >Déconecter</a>
";
        
        $__internal_cf77805f895c1acaecdaf581d569c854883e3bae17e4c6c40e5b11c284c9e35b->leave($__internal_cf77805f895c1acaecdaf581d569c854883e3bae17e4c6c40e5b11c284c9e35b_prof);

    }

    public function getTemplateName()
    {
        return "MyAlphabusBundle:Default:admin.html.twig";
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
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
<p>Vous avez connectez sur les pages admin</p>
    <a href=\"{{ path('fos_user_security_logout') }}\" >Déconecter</a>
{% endblock %}", "MyAlphabusBundle:Default:admin.html.twig", "/var/www/html/Alphabus/src/My/AlphabusBundle/Resources/views/Default/admin.html.twig");
    }
}
