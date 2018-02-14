<?php

/* MyUserBundle:Default:index.html.twig */
class __TwigTemplate_9b15e7f8bb4f15ff7f8d90ef8e55dc645e055fefdcaf05b4c6392b9631aaaa9a extends Twig_Template
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
        $__internal_af082636f1889c7d124ed6e1b7ebffbe8a1e2eb2a66ed6fe9c95d8993845862f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af082636f1889c7d124ed6e1b7ebffbe8a1e2eb2a66ed6fe9c95d8993845862f->enter($__internal_af082636f1889c7d124ed6e1b7ebffbe8a1e2eb2a66ed6fe9c95d8993845862f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyUserBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_af082636f1889c7d124ed6e1b7ebffbe8a1e2eb2a66ed6fe9c95d8993845862f->leave($__internal_af082636f1889c7d124ed6e1b7ebffbe8a1e2eb2a66ed6fe9c95d8993845862f_prof);

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
