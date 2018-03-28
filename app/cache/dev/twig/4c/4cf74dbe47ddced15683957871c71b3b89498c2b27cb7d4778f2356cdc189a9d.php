<?php

/* MyAlphabusBundle:Default:index.html.twig */
class __TwigTemplate_52c2e5b54229cc6dc8c10de389e1ab553b9ad670618452f64ddd5a85832b88b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyAlphabusBundle:Default:index.html.twig", 1);
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
        $__internal_78949c71807e4e9dedfd56d13fad30f8df0fb5cf671f4c7ca7533a8f812c45b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78949c71807e4e9dedfd56d13fad30f8df0fb5cf671f4c7ca7533a8f812c45b9->enter($__internal_78949c71807e4e9dedfd56d13fad30f8df0fb5cf671f4c7ca7533a8f812c45b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAlphabusBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78949c71807e4e9dedfd56d13fad30f8df0fb5cf671f4c7ca7533a8f812c45b9->leave($__internal_78949c71807e4e9dedfd56d13fad30f8df0fb5cf671f4c7ca7533a8f812c45b9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf0f6a86400e59218e2392c0db5a6dd57f5e645e942a98ee0da2dc9975d37d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0f6a86400e59218e2392c0db5a6dd57f5e645e942a98ee0da2dc9975d37d26->enter($__internal_cf0f6a86400e59218e2392c0db5a6dd57f5e645e942a98ee0da2dc9975d37d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
Hello World Haykel page indexation par le controle user bundle  de page client!
<p> <H1>Votre page de client </H1></p>
    <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" >Déconecter</a>
</div>
";
        
        $__internal_cf0f6a86400e59218e2392c0db5a6dd57f5e645e942a98ee0da2dc9975d37d26->leave($__internal_cf0f6a86400e59218e2392c0db5a6dd57f5e645e942a98ee0da2dc9975d37d26_prof);

    }

    public function getTemplateName()
    {
        return "MyAlphabusBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
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
<div class=\"container\">
Hello World Haykel page indexation par le controle user bundle  de page client!
<p> <H1>Votre page de client </H1></p>
    <a href=\"{{ path('fos_user_security_logout') }}\" >Déconecter</a>
</div>
{% endblock %}", "MyAlphabusBundle:Default:index.html.twig", "/var/www/html/Alphabus/src/My/AlphabusBundle/Resources/views/Default/index.html.twig");
    }
}
