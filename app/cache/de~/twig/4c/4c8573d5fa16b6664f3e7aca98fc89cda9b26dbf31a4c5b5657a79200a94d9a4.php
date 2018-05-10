<?php

/* affectation/index.html.twig */
class __TwigTemplate_b1c3b8371ad4d7c2a54b7211043df9009e77c8ce8e20c73be557823f13e298b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "affectation/index.html.twig", 1);
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
        $__internal_b40206c26878043ba376a57ffbf041ccb4878fe4dcf94ac7e46608d0ab2d3858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40206c26878043ba376a57ffbf041ccb4878fe4dcf94ac7e46608d0ab2d3858->enter($__internal_b40206c26878043ba376a57ffbf041ccb4878fe4dcf94ac7e46608d0ab2d3858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "affectation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b40206c26878043ba376a57ffbf041ccb4878fe4dcf94ac7e46608d0ab2d3858->leave($__internal_b40206c26878043ba376a57ffbf041ccb4878fe4dcf94ac7e46608d0ab2d3858_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecf87429b6db3264e0f5cff7ddc8a5a79c539611cab9a14d702ed5237a03e6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf87429b6db3264e0f5cff7ddc8a5a79c539611cab9a14d702ed5237a03e6aa->enter($__internal_ecf87429b6db3264e0f5cff7ddc8a5a79c539611cab9a14d702ed5237a03e6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Affectations list</h1>
      <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Seriealpha</th>
                <th>Dateaffectation</th>
                <th>Controleacier</th>
                <th>Dateacier</th>
                <th>Controlepeinture</th>
                <th>Datepeinture</th>
                <th>Controlcontroler</th>
                <th>Datecontrole</th>
                <th>Controleessai</th>
                <th>Dateessai</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["affectations"] ?? $this->getContext($context, "affectations")));
        foreach ($context['_seq'] as $context["_key"] => $context["affectation"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectation_show", array("id" => $this->getAttribute($context["affectation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["affectation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["affectation"], "seriealpha", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["affectation"], "dateaffectation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["affectation"], "dateaffectation", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["affectation"], "controleacier", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            if ($this->getAttribute($context["affectation"], "dateacier", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["affectation"], "dateacier", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["affectation"], "controlepeinture", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["affectation"], "datepeinture", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["affectation"], "datepeinture", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["affectation"], "controlcontroler", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if ($this->getAttribute($context["affectation"], "datecontrole", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["affectation"], "datecontrole", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["affectation"], "controleessai", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            if ($this->getAttribute($context["affectation"], "dateessai", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["affectation"], "dateessai", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectation_show", array("id" => $this->getAttribute($context["affectation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectation_edit", array("id" => $this->getAttribute($context["affectation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['affectation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>


";
        
        $__internal_ecf87429b6db3264e0f5cff7ddc8a5a79c539611cab9a14d702ed5237a03e6aa->leave($__internal_ecf87429b6db3264e0f5cff7ddc8a5a79c539611cab9a14d702ed5237a03e6aa_prof);

    }

    public function getTemplateName()
    {
        return "affectation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  133 => 42,  127 => 39,  118 => 35,  114 => 34,  108 => 33,  104 => 32,  98 => 31,  94 => 30,  88 => 29,  84 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Affectations list</h1>
      <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Seriealpha</th>
                <th>Dateaffectation</th>
                <th>Controleacier</th>
                <th>Dateacier</th>
                <th>Controlepeinture</th>
                <th>Datepeinture</th>
                <th>Controlcontroler</th>
                <th>Datecontrole</th>
                <th>Controleessai</th>
                <th>Dateessai</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for affectation in affectations %}
            <tr>
                <td><a href=\"{{ path('affectation_show', { 'id': affectation.id }) }}\">{{ affectation.id }}</a></td>
                <td>{{ affectation.seriealpha }}</td>
                <td>{% if affectation.dateaffectation %}{{ affectation.dateaffectation|date('Y-m-d') }}{% endif %}</td>
                <td>{{ affectation.controleacier }}</td>
                <td>{% if affectation.dateacier %}{{ affectation.dateacier|date('Y-m-d') }}{% endif %}</td>
                <td>{{ affectation.controlepeinture }}</td>
                <td>{% if affectation.datepeinture %}{{ affectation.datepeinture|date('Y-m-d') }}{% endif %}</td>
                <td>{{ affectation.controlcontroler }}</td>
                <td>{% if affectation.datecontrole %}{{ affectation.datecontrole|date('Y-m-d') }}{% endif %}</td>
                <td>{{ affectation.controleessai }}</td>
                <td>{% if affectation.dateessai %}{{ affectation.dateessai|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('affectation_show', { 'id': affectation.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('affectation_edit', { 'id': affectation.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "affectation/index.html.twig", "/var/www/html/Alphabus/app/Resources/views/affectation/index.html.twig");
    }
}
