<?php

/* MyControlerBundle:Default:index.html.twig */
class __TwigTemplate_526585c01928929585c0b78995f47bf0f4945ee5d635a470492d7497178eff32 extends Twig_Template
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
        $__internal_1b2fce78ccb1dbf2552a2e5e97e76fa12b1226c3b78db383e75179b076514e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2fce78ccb1dbf2552a2e5e97e76fa12b1226c3b78db383e75179b076514e68->enter($__internal_1b2fce78ccb1dbf2552a2e5e97e76fa12b1226c3b78db383e75179b076514e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyControlerBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_1b2fce78ccb1dbf2552a2e5e97e76fa12b1226c3b78db383e75179b076514e68->leave($__internal_1b2fce78ccb1dbf2552a2e5e97e76fa12b1226c3b78db383e75179b076514e68_prof);

    }

    public function getTemplateName()
    {
        return "MyControlerBundle:Default:index.html.twig";
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
", "MyControlerBundle:Default:index.html.twig", "/var/www/html/Alphabus/src/My/ControlerBundle/Resources/views/Default/index.html.twig");
    }
}
