<?php

/* MyAlphabusBundle:Default:index.html.twig */
class __TwigTemplate_d74a23ca3c31d36f3efc74559889ffab668ac6098336e8e7e066a7926c9bed8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3015aebe436c79177f6d1c507c901b9d44b85ae76606272c076e54b2a2f64555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3015aebe436c79177f6d1c507c901b9d44b85ae76606272c076e54b2a2f64555->enter($__internal_3015aebe436c79177f6d1c507c901b9d44b85ae76606272c076e54b2a2f64555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAlphabusBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_3015aebe436c79177f6d1c507c901b9d44b85ae76606272c076e54b2a2f64555->leave($__internal_3015aebe436c79177f6d1c507c901b9d44b85ae76606272c076e54b2a2f64555_prof);

    }

    public function getTemplateName()
    {
        return "MyAlphabusBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "MyAlphabusBundle:Default:index.html.twig", "/var/www/html/Alphabus/src/My/AlphabusBundle/Resources/views/Default/index.html.twig");
    }
}
