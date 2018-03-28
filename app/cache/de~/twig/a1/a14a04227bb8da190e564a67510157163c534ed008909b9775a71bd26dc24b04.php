<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_a1bbd510397511134bbf09dd0de65aa9f8a736179272ba6349f9b9ee3f3f0a95 extends Twig_Template
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
        $__internal_8be94856594d94d962d20aa53920aa3e298321717f0c549ae3adc246f353fb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be94856594d94d962d20aa53920aa3e298321717f0c549ae3adc246f353fb03->enter($__internal_8be94856594d94d962d20aa53920aa3e298321717f0c549ae3adc246f353fb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_8be94856594d94d962d20aa53920aa3e298321717f0c549ae3adc246f353fb03->leave($__internal_8be94856594d94d962d20aa53920aa3e298321717f0c549ae3adc246f353fb03_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "/var/www/html/Alphabus/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}
