<?php

/* peinture/index.html.twig */
class __TwigTemplate_80834ecf833acc20b6015ea3772fb33293925c5355daab6c1b6f0044832ed66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "peinture/index.html.twig", 1);
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
        $__internal_a0fa38f69dc26f8f93747edc7a7196cf8481484dc94c7010f737214364043731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0fa38f69dc26f8f93747edc7a7196cf8481484dc94c7010f737214364043731->enter($__internal_a0fa38f69dc26f8f93747edc7a7196cf8481484dc94c7010f737214364043731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "peinture/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0fa38f69dc26f8f93747edc7a7196cf8481484dc94c7010f737214364043731->leave($__internal_a0fa38f69dc26f8f93747edc7a7196cf8481484dc94c7010f737214364043731_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cde28e895f88e4184cf7f3e6a52cfcbb9dc7d0f1d65acddc9a39883c2caf4bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde28e895f88e4184cf7f3e6a52cfcbb9dc7d0f1d65acddc9a39883c2caf4bb3->enter($__internal_cde28e895f88e4184cf7f3e6a52cfcbb9dc7d0f1d65acddc9a39883c2caf4bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10\">
    <h1>Peintures list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>N° Chassis</th>
                <th>Etat</th>
                <th>Date Entré en Usine</th>
               
                <th>Repremarques</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["peintures"] ?? $this->getContext($context, "peintures")));
        foreach ($context['_seq'] as $context["_key"] => $context["peinture"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["peinture"], "chassis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if (($this->getAttribute($context["peinture"], "repremarques", array()) == null)) {
                // line 27
                echo "                        <span class=\"label label-success\">fonctionnement</span>
                    ";
            } else {
                // line 29
                echo "                        <span class=\"label label-danger\">Etat critique</span>
                    ";
            }
            // line 30
            echo " </td>
                <td>";
            // line 31
            if ($this->getAttribute($context["peinture"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["peinture"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
               
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["peinture"], "repremarques", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_show", array("id" => $this->getAttribute($context["peinture"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_edit", array("id" => $this->getAttribute($context["peinture"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['peinture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_new");
        echo "\">Create a new peinture</a>
        </li>
    </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_cde28e895f88e4184cf7f3e6a52cfcbb9dc7d0f1d65acddc9a39883c2caf4bb3->leave($__internal_cde28e895f88e4184cf7f3e6a52cfcbb9dc7d0f1d65acddc9a39883c2caf4bb3_prof);

    }

    public function getTemplateName()
    {
        return "peinture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 51,  117 => 46,  105 => 40,  99 => 37,  92 => 33,  85 => 31,  82 => 30,  78 => 29,  74 => 27,  72 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
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
    
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10\">
    <h1>Peintures list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>N° Chassis</th>
                <th>Etat</th>
                <th>Date Entré en Usine</th>
               
                <th>Repremarques</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

        {% for peinture in peintures %}
            <tr>
                <td>{{ peinture.chassis }}</td>
                <td>{% if peinture.repremarques == null %}
                        <span class=\"label label-success\">fonctionnement</span>
                    {% else %}
                        <span class=\"label label-danger\">Etat critique</span>
                    {% endif %} </td>
                <td>{% if peinture.date %}{{ peinture.date|date('Y-m-d') }}{% endif %}</td>
               
                <td>{{ peinture.repremarques }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('peinture_show', { 'id': peinture.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('peinture_edit', { 'id': peinture.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('peinture_new') }}\">Create a new peinture</a>
        </li>
    </ul>
            </div>
        </div>
    </div>
{% endblock %}
", "peinture/index.html.twig", "/var/www/html/Alphabus/app/Resources/views/peinture/index.html.twig");
    }
}
