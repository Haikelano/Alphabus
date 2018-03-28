<?php

/* @EasyAdmin/default/label_inaccessible.html.twig */
class __TwigTemplate_c6db8b01d6e1551ced05aae4025734d70d70f4854c8edf42c710df31d4aaa231 extends Twig_Template
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
        $__internal_45082d4132449c17c68697bbbddd9f23f5f2ce6c3287fde3d96aea2d6804eb17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45082d4132449c17c68697bbbddd9f23f5f2ce6c3287fde3d96aea2d6804eb17->enter($__internal_45082d4132449c17c68697bbbddd9f23f5f2ce6c3287fde3d96aea2d6804eb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_45082d4132449c17c68697bbbddd9f23f5f2ce6c3287fde3d96aea2d6804eb17->leave($__internal_45082d4132449c17c68697bbbddd9f23f5f2ce6c3287fde3d96aea2d6804eb17_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "@EasyAdmin/default/label_inaccessible.html.twig", "/var/www/html/Alphabus/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_inaccessible.html.twig");
    }
}
