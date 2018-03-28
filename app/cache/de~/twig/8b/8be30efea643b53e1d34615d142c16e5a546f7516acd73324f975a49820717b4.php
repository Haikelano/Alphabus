<?php

/* MyAlphabusBundle:AfficheAffectation:listaffectations.html.twig */
class __TwigTemplate_de7060e4e98489b0089882ad122bdc4b5cbf40d6d4ddc5b6a4d0d9d1cee98fc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAlphabusBundle:AfficheAffectation:listaffectations.html.twig", 1);
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
        $__internal_bf0d371de42ec7df5dd9a4459643af524a459508d0eaaafee5e43c38aa5f6e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0d371de42ec7df5dd9a4459643af524a459508d0eaaafee5e43c38aa5f6e42->enter($__internal_bf0d371de42ec7df5dd9a4459643af524a459508d0eaaafee5e43c38aa5f6e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAlphabusBundle:AfficheAffectation:listaffectations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf0d371de42ec7df5dd9a4459643af524a459508d0eaaafee5e43c38aa5f6e42->leave($__internal_bf0d371de42ec7df5dd9a4459643af524a459508d0eaaafee5e43c38aa5f6e42_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_479c4dca7bd4cdedf79526fcd6f5a9824b6d30c68180f5eb332364b5ceaef9c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479c4dca7bd4cdedf79526fcd6f5a9824b6d30c68180f5eb332364b5ceaef9c0->enter($__internal_479c4dca7bd4cdedf79526fcd6f5a9824b6d30c68180f5eb332364b5ceaef9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MyAlphabusBundle:AfficheAffectation:listaffectations";
        
        $__internal_479c4dca7bd4cdedf79526fcd6f5a9824b6d30c68180f5eb332364b5ceaef9c0->leave($__internal_479c4dca7bd4cdedf79526fcd6f5a9824b6d30c68180f5eb332364b5ceaef9c0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_41a698f322dab7ebdb33a85728df1177de98021c3a9792d10315d86bb7ed4d64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a698f322dab7ebdb33a85728df1177de98021c3a9792d10315d86bb7ed4d64->enter($__internal_41a698f322dab7ebdb33a85728df1177de98021c3a9792d10315d86bb7ed4d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<div class=\"container\">
<h1>Welcome to listaffectations page</h1>

    <form style=\"margin-bottom: 10px;\" action=\"cherche_affectation\" method=\"GET\">
        <input class=\"form-control\" type=\"text\" placeholder=\"Recherche par N° Clients\" name=\"nclients\" />
    </form>
    <form>
        <table class=\"table\">
            <thead>
            <tr>

                <th>N° Serie Alpha</th>
                <th>Date Réception</th>
                <th>N° Clients</th>
                <th>N° Chassis</th>



            </tr>
            </thead>
            <tbody>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["affectation"] ?? $this->getContext($context, "affectation")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 31
            echo "                <tr>

                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "seriealpha", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["st"], "dateaffectation", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "nclients", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "chassis", array()), "html", null, true);
            echo "</td>


                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "                <tr><td>Aucun Enseignnat n''a été trouvé.</td></tr>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </tbody>
        </table>


    </form>
</div>
";
        
        $__internal_41a698f322dab7ebdb33a85728df1177de98021c3a9792d10315d86bb7ed4d64->leave($__internal_41a698f322dab7ebdb33a85728df1177de98021c3a9792d10315d86bb7ed4d64_prof);

    }

    public function getTemplateName()
    {
        return "MyAlphabusBundle:AfficheAffectation:listaffectations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  110 => 41,  100 => 36,  96 => 35,  92 => 34,  88 => 33,  84 => 31,  79 => 30,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}MyAlphabusBundle:AfficheAffectation:listaffectations{% endblock %}

{% block body %}



<div class=\"container\">
<h1>Welcome to listaffectations page</h1>

    <form style=\"margin-bottom: 10px;\" action=\"cherche_affectation\" method=\"GET\">
        <input class=\"form-control\" type=\"text\" placeholder=\"Recherche par N° Clients\" name=\"nclients\" />
    </form>
    <form>
        <table class=\"table\">
            <thead>
            <tr>

                <th>N° Serie Alpha</th>
                <th>Date Réception</th>
                <th>N° Clients</th>
                <th>N° Chassis</th>



            </tr>
            </thead>
            <tbody>
            {% for st in affectation %}
                <tr>

                    <td>{{ st.seriealpha }}</td>
                    <td>{{ st.dateaffectation|date('d-m-Y') }}</td>
                    <td>{{ st.nclients  }}</td>
                    <td>{{ st.chassis }}</td>


                </tr>
            {% else %}
                <tr><td>Aucun Enseignnat n''a été trouvé.</td></tr>
                </tr>
            {% endfor %}
            </tbody>
        </table>


    </form>
</div>
{% endblock %}
", "MyAlphabusBundle:AfficheAffectation:listaffectations.html.twig", "/var/www/html/Alphabus/src/My/AlphabusBundle/Resources/views/AfficheAffectation/listaffectations.html.twig");
    }
}
