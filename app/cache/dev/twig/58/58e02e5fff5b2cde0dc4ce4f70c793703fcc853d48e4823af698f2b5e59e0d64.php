<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b6ca157907d6cae2e9edfa6a67311cebc98f5e7c3226ae6308f8ffd81fbfd661 extends Twig_Template
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
        $__internal_d1659f7fa29175f3c4b1a552834a6866c1fee261a87338512e3dcde8ddc5ccef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1659f7fa29175f3c4b1a552834a6866c1fee261a87338512e3dcde8ddc5ccef->enter($__internal_d1659f7fa29175f3c4b1a552834a6866c1fee261a87338512e3dcde8ddc5ccef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d1659f7fa29175f3c4b1a552834a6866c1fee261a87338512e3dcde8ddc5ccef->leave($__internal_d1659f7fa29175f3c4b1a552834a6866c1fee261a87338512e3dcde8ddc5ccef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
