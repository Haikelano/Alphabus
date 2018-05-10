<?php

/* peinture/show.html.twig */
class __TwigTemplate_67dd704992ce21ac51da031cf80bc54a6045cb72d604bf365dd158806dc2d94c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "peinture/show.html.twig", 1);
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
        $__internal_26168f29c8d87a27c09b71bd28c56023d4c4bbdc07d6942e3ed8fb1348350568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26168f29c8d87a27c09b71bd28c56023d4c4bbdc07d6942e3ed8fb1348350568->enter($__internal_26168f29c8d87a27c09b71bd28c56023d4c4bbdc07d6942e3ed8fb1348350568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "peinture/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26168f29c8d87a27c09b71bd28c56023d4c4bbdc07d6942e3ed8fb1348350568->leave($__internal_26168f29c8d87a27c09b71bd28c56023d4c4bbdc07d6942e3ed8fb1348350568_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbf2a45cbe7e49ce59ef71c5dfcb5f25f6271ce5e943942cff9f7993c5d5056d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf2a45cbe7e49ce59ef71c5dfcb5f25f6271ce5e943942cff9f7993c5d5056d->enter($__internal_dbf2a45cbe7e49ce59ef71c5dfcb5f25f6271ce5e943942cff9f7993c5d5056d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Peinture</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 14
        if ($this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Protectionrouille</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "protectionrouille", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Couchepeinture</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "couchepeinture", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Peinturefaceav</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "peinturefaceav", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Peinturefacear</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "peinturefacear", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Peinturefacedr</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "peinturefacedr", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Peinturefaceg</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "peinturefaceg", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etanchete</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "etanchete", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Interrieur</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "interrieur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bascaisse</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "bascaisse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Decorationclient</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "decorationclient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Remarques</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "remarques", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repprotectionrouille</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "repprotectionrouille", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repcouchepeinture</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "repcouchepeinture", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reppeinturefaceav</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "reppeinturefaceav", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reppeinturefacear</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "reppeinturefacear", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reppeinturefacedr</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "reppeinturefacedr", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reppeinturefaceg</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "reppeinturefaceg", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repetanchete</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "repetanchete", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repinterrieur</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "repinterrieur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repbascaisse</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "repbascaisse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repdecorationclient</th>
                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "repdecorationclient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repremarques</th>
                <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "repremarques", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_edit", array("id" => $this->getAttribute(($context["peinture"] ?? $this->getContext($context, "peinture")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 115
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 117
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_dbf2a45cbe7e49ce59ef71c5dfcb5f25f6271ce5e943942cff9f7993c5d5056d->leave($__internal_dbf2a45cbe7e49ce59ef71c5dfcb5f25f6271ce5e943942cff9f7993c5d5056d_prof);

    }

    public function getTemplateName()
    {
        return "peinture/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 117,  233 => 115,  227 => 112,  221 => 109,  211 => 102,  204 => 98,  197 => 94,  190 => 90,  183 => 86,  176 => 82,  169 => 78,  162 => 74,  155 => 70,  148 => 66,  141 => 62,  134 => 58,  127 => 54,  120 => 50,  113 => 46,  106 => 42,  99 => 38,  92 => 34,  85 => 30,  78 => 26,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Peinture</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ peinture.id }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if peinture.date %}{{ peinture.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Protectionrouille</th>
                <td>{{ peinture.protectionrouille }}</td>
            </tr>
            <tr>
                <th>Couchepeinture</th>
                <td>{{ peinture.couchepeinture }}</td>
            </tr>
            <tr>
                <th>Peinturefaceav</th>
                <td>{{ peinture.peinturefaceav }}</td>
            </tr>
            <tr>
                <th>Peinturefacear</th>
                <td>{{ peinture.peinturefacear }}</td>
            </tr>
            <tr>
                <th>Peinturefacedr</th>
                <td>{{ peinture.peinturefacedr }}</td>
            </tr>
            <tr>
                <th>Peinturefaceg</th>
                <td>{{ peinture.peinturefaceg }}</td>
            </tr>
            <tr>
                <th>Etanchete</th>
                <td>{{ peinture.etanchete }}</td>
            </tr>
            <tr>
                <th>Interrieur</th>
                <td>{{ peinture.interrieur }}</td>
            </tr>
            <tr>
                <th>Bascaisse</th>
                <td>{{ peinture.bascaisse }}</td>
            </tr>
            <tr>
                <th>Decorationclient</th>
                <td>{{ peinture.decorationclient }}</td>
            </tr>
            <tr>
                <th>Remarques</th>
                <td>{{ peinture.remarques }}</td>
            </tr>
            <tr>
                <th>Repprotectionrouille</th>
                <td>{{ peinture.repprotectionrouille }}</td>
            </tr>
            <tr>
                <th>Repcouchepeinture</th>
                <td>{{ peinture.repcouchepeinture }}</td>
            </tr>
            <tr>
                <th>Reppeinturefaceav</th>
                <td>{{ peinture.reppeinturefaceav }}</td>
            </tr>
            <tr>
                <th>Reppeinturefacear</th>
                <td>{{ peinture.reppeinturefacear }}</td>
            </tr>
            <tr>
                <th>Reppeinturefacedr</th>
                <td>{{ peinture.reppeinturefacedr }}</td>
            </tr>
            <tr>
                <th>Reppeinturefaceg</th>
                <td>{{ peinture.reppeinturefaceg }}</td>
            </tr>
            <tr>
                <th>Repetanchete</th>
                <td>{{ peinture.repetanchete }}</td>
            </tr>
            <tr>
                <th>Repinterrieur</th>
                <td>{{ peinture.repinterrieur }}</td>
            </tr>
            <tr>
                <th>Repbascaisse</th>
                <td>{{ peinture.repbascaisse }}</td>
            </tr>
            <tr>
                <th>Repdecorationclient</th>
                <td>{{ peinture.repdecorationclient }}</td>
            </tr>
            <tr>
                <th>Repremarques</th>
                <td>{{ peinture.repremarques }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('peinture_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('peinture_edit', { 'id': peinture.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "peinture/show.html.twig", "/var/www/html/Alphabus/app/Resources/views/peinture/show.html.twig");
    }
}
