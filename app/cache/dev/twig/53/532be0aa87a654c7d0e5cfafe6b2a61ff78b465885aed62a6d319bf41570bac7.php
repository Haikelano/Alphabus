<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_af254bdc261f95478f44362101a097385f390a2e83cbddb28fa8079d53eaf943 extends Twig_Template
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
        $__internal_07d67a12a8774f2176c04f340d2524949c9ce7adaaf69422c4cb37b6b8108170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d67a12a8774f2176c04f340d2524949c9ce7adaaf69422c4cb37b6b8108170->enter($__internal_07d67a12a8774f2176c04f340d2524949c9ce7adaaf69422c4cb37b6b8108170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_07d67a12a8774f2176c04f340d2524949c9ce7adaaf69422c4cb37b6b8108170->leave($__internal_07d67a12a8774f2176c04f340d2524949c9ce7adaaf69422c4cb37b6b8108170_prof);

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
