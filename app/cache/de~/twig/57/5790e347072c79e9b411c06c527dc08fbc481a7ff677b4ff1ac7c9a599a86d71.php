<?php

/* post/edit.html.twig */
class __TwigTemplate_9d1b52e3f486fcd7a104498c2a85d70bb2891ffd89e14a41956b965d3ceb4fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/edit.html.twig", 1);
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
        $__internal_12bf592eb1fdb89d1b94a3612a10959cbfbe3f8761dbb67fecd73b8575e15be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bf592eb1fdb89d1b94a3612a10959cbfbe3f8761dbb67fecd73b8575e15be9->enter($__internal_12bf592eb1fdb89d1b94a3612a10959cbfbe3f8761dbb67fecd73b8575e15be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12bf592eb1fdb89d1b94a3612a10959cbfbe3f8761dbb67fecd73b8575e15be9->leave($__internal_12bf592eb1fdb89d1b94a3612a10959cbfbe3f8761dbb67fecd73b8575e15be9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99e44b775d4e77cdaff4a3d5463ecda9138c6ba572d6d8895b2210443758b361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e44b775d4e77cdaff4a3d5463ecda9138c6ba572d6d8895b2210443758b361->enter($__internal_99e44b775d4e77cdaff4a3d5463ecda9138c6ba572d6d8895b2210443758b361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post edit</h1>

";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_start');
        echo "

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">


                    <div class=\"form-group\">
                        <h4>Titre de votre Problème : </h4>
                        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <h4>Votre Remarques  : </h4>
                        ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "remarques", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <h4>Upload your file : </h4>
                        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "file", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>


                    <div class =\"form-group\">
                        <button type=\"submit\" Class =\"btn btn-primary\">
                            <span class =\"glyphicon-plus\"/>Valider
                        </button>
                    </div>
                </div>
            </div>
        </div>

    ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_end');
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 42
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <input type=\"submit\" value=\"Delete\">
            ";
        // line 44
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_99e44b775d4e77cdaff4a3d5463ecda9138c6ba572d6d8895b2210443758b361->leave($__internal_99e44b775d4e77cdaff4a3d5463ecda9138c6ba572d6d8895b2210443758b361_prof);

    }

    public function getTemplateName()
    {
        return "post/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 44,  98 => 42,  92 => 39,  86 => 36,  70 => 23,  63 => 19,  56 => 15,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Post edit</h1>

{{ form_start(f) }}

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">


                    <div class=\"form-group\">
                        <h4>Titre de votre Problème : </h4>
                        {{ form_widget(f.titre,{attr:{'class':'form-control'}}) }}
                    </div>
                    <div class=\"form-group\">
                        <h4>Votre Remarques  : </h4>
                        {{ form_widget(f.remarques,{attr:{'class':'form-control'}}) }}
                    </div>
                    <div class=\"form-group\">
                        <h4>Upload your file : </h4>
                        {{ form_widget(f.file,{attr:{'class':'form-control'}}) }}
                    </div>


                    <div class =\"form-group\">
                        <button type=\"submit\" Class =\"btn btn-primary\">
                            <span class =\"glyphicon-plus\"/>Valider
                        </button>
                    </div>
                </div>
            </div>
        </div>

    {{ form_end(f) }}
    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "post/edit.html.twig", "/var/www/html/Alphabus/app/Resources/views/post/edit.html.twig");
    }
}
