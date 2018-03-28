<?php

/* MyAlphabusBundle:Chassis:editchassis.html.twig */
class __TwigTemplate_7e6ecfdf8c9a4a3f8a8b825e0b946f991a76e86329e707cfe36ffdbd92ada6c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAlphabusBundle:Chassis:editchassis.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_661b09542709bcc03f3efa56b94ebe2e96706004e13f31a35a73ad255260cc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661b09542709bcc03f3efa56b94ebe2e96706004e13f31a35a73ad255260cc67->enter($__internal_661b09542709bcc03f3efa56b94ebe2e96706004e13f31a35a73ad255260cc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAlphabusBundle:Chassis:editchassis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_661b09542709bcc03f3efa56b94ebe2e96706004e13f31a35a73ad255260cc67->leave($__internal_661b09542709bcc03f3efa56b94ebe2e96706004e13f31a35a73ad255260cc67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c37486ef262d6ddc66b38826adb916fd805137b6f283029f9677d34599c6d718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37486ef262d6ddc66b38826adb916fd805137b6f283029f9677d34599c6d718->enter($__internal_c37486ef262d6ddc66b38826adb916fd805137b6f283029f9677d34599c6d718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MyAlphabusBundle:Chassis:editchassis";
        
        $__internal_c37486ef262d6ddc66b38826adb916fd805137b6f283029f9677d34599c6d718->leave($__internal_c37486ef262d6ddc66b38826adb916fd805137b6f283029f9677d34599c6d718_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6f1df30d20d2407405389abc71b54111085be4597cb79d47ba39fd6aaadf08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f1df30d20d2407405389abc71b54111085be4597cb79d47ba39fd6aaadf08b->enter($__internal_e6f1df30d20d2407405389abc71b54111085be4597cb79d47ba39fd6aaadf08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "






    <form action=\"\" method=\"post\" ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["f"] ?? $this->getContext($context, "f")), 'enctype');
        echo " >
        <div class =\"container\">
            <h1>Welcome to the Chassis:editchassis page</h1>
            <div class =\"row\">
                <div class=\"col-md-8\">
                <div class =\"form-group\">
                        <label>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nchassis", array()), 'label');
        echo "</label>
                        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nchassis", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class =\"form-group\">

                        <label>";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "typechassis", array()), 'label');
        echo "</label>
                        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "typechassis", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                </div>

                <div class =\"form-group\">
                        <label>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "datereception", array()), 'label');
        echo "</label>
                        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "datereception", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class =\"form-group\">
                    <label>";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "controler", array()), 'label');
        echo "</label>
                    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "controler", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                    <div class =\"form-group\">
                        <div>
                            <button type=\"submit\" Class =\"btn btn-primary\">
                                <span class =\"glyphicon-plus\"/>Valider
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class =\"form-group\">
                            <p><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_chassis");
        echo " \">Retour à la liste des Enseignants</a></p>
                        ";
        // line 50
        if (($context["message"] ?? $this->getContext($context, "message"))) {
            // line 51
            echo "                            <p class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
            echo "</p>
                        ";
        }
        // line 53
        echo "                    </div>
                </div>
            </div>
                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["f"] ?? $this->getContext($context, "f")), 'widget');
        echo "
            </div>
        </div>
    </form>

";
        
        $__internal_e6f1df30d20d2407405389abc71b54111085be4597cb79d47ba39fd6aaadf08b->leave($__internal_e6f1df30d20d2407405389abc71b54111085be4597cb79d47ba39fd6aaadf08b_prof);

    }

    public function getTemplateName()
    {
        return "MyAlphabusBundle:Chassis:editchassis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 56,  137 => 53,  131 => 51,  129 => 50,  125 => 49,  109 => 36,  105 => 35,  98 => 31,  94 => 30,  86 => 25,  82 => 24,  75 => 20,  71 => 19,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}MyAlphabusBundle:Chassis:editchassis{% endblock %}

{% block body %}







    <form action=\"\" method=\"post\" {{ form_enctype(f) }} >
        <div class =\"container\">
            <h1>Welcome to the Chassis:editchassis page</h1>
            <div class =\"row\">
                <div class=\"col-md-8\">
                <div class =\"form-group\">
                        <label>{{ form_label(f.nchassis) }}</label>
                        {{ form_widget(f.nchassis,{attr:{'class':'form-control'}}) }}
                </div>
                <div class =\"form-group\">

                        <label>{{ form_label(f.typechassis) }}</label>
                        {{ form_widget(f.typechassis,{attr:{'class':'form-control'}}) }}

                </div>

                <div class =\"form-group\">
                        <label>{{ form_label(f.datereception) }}</label>
                        {{ form_widget(f.datereception,{attr:{'class':'form-control'}}) }}
                </div>

                <div class =\"form-group\">
                    <label>{{ form_label(f.controler) }}</label>
                    {{ form_widget(f.controler,{attr:{'class':'form-control'}}) }}
                </div>

                    <div class =\"form-group\">
                        <div>
                            <button type=\"submit\" Class =\"btn btn-primary\">
                                <span class =\"glyphicon-plus\"/>Valider
                            </button>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class =\"form-group\">
                            <p><a href=\"{{ path('list_chassis') }} \">Retour à la liste des Enseignants</a></p>
                        {% if message %}
                            <p class=\"alert alert-success\">{{ message }}</p>
                        {% endif %}
                    </div>
                </div>
            </div>
                {{ form_widget(f) }}
            </div>
        </div>
    </form>

{% endblock %}

", "MyAlphabusBundle:Chassis:editchassis.html.twig", "/var/www/html/Alphabus/src/My/AlphabusBundle/Resources/views/Chassis/editchassis.html.twig");
    }
}
