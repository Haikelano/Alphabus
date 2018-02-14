<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_25fe6d01958d3261429bdb56ecd8a8dfbd04e348304cf881b0703afdfc4dfc83 extends Twig_Template
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
        $__internal_b7febe66dd2439a87588ed488a9322919a5c287ccf4ee8a93756cdf363b94a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7febe66dd2439a87588ed488a9322919a5c287ccf4ee8a93756cdf363b94a0b->enter($__internal_b7febe66dd2439a87588ed488a9322919a5c287ccf4ee8a93756cdf363b94a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b7febe66dd2439a87588ed488a9322919a5c287ccf4ee8a93756cdf363b94a0b->leave($__internal_b7febe66dd2439a87588ed488a9322919a5c287ccf4ee8a93756cdf363b94a0b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
