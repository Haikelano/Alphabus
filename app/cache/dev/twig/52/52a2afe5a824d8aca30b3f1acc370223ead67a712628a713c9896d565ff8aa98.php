<?php

/* MyUserBundle:Default:index.html.twig */
class __TwigTemplate_7f1a1193b03647a3d2ceca8b8c85a64cb266b96c6188846316033f052c4072ba extends Twig_Template
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
        $__internal_ec642c139200264dd34c9d55183284bee90f64bdd5ec4f95694f230c5778c92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec642c139200264dd34c9d55183284bee90f64bdd5ec4f95694f230c5778c92a->enter($__internal_ec642c139200264dd34c9d55183284bee90f64bdd5ec4f95694f230c5778c92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyUserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_ec642c139200264dd34c9d55183284bee90f64bdd5ec4f95694f230c5778c92a->leave($__internal_ec642c139200264dd34c9d55183284bee90f64bdd5ec4f95694f230c5778c92a_prof);

    }

    public function getTemplateName()
    {
        return "MyUserBundle:Default:index.html.twig";
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
", "MyUserBundle:Default:index.html.twig", "/var/www/html/Alphabus/src/My/UserBundle/Resources/views/Default/index.html.twig");
    }
}
