<?php

/* receptionchassis/index.html.twig */
class __TwigTemplate_52e3929523097ffa74e301dc75d667ddafd99c1e008dbba4c34b0f579469822f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "receptionchassis/index.html.twig", 1);
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
        $__internal_9457cde5c0d713a9814357c40ed2f5eee411f6eb5f994f7e70b860e18df8863c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9457cde5c0d713a9814357c40ed2f5eee411f6eb5f994f7e70b860e18df8863c->enter($__internal_9457cde5c0d713a9814357c40ed2f5eee411f6eb5f994f7e70b860e18df8863c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "receptionchassis/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9457cde5c0d713a9814357c40ed2f5eee411f6eb5f994f7e70b860e18df8863c->leave($__internal_9457cde5c0d713a9814357c40ed2f5eee411f6eb5f994f7e70b860e18df8863c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdb4f8cec58fe45afba191da5dfa2c746d2ecdb0143e19fb1ba1100cd51e58a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb4f8cec58fe45afba191da5dfa2c746d2ecdb0143e19fb1ba1100cd51e58a7->enter($__internal_cdb4f8cec58fe45afba191da5dfa2c746d2ecdb0143e19fb1ba1100cd51e58a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Receptionchasses list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Generalchassis</th>
                <th>Huilemoreur</th>
                <th>Boitevitesse</th>
                <th>Huiledirection</th>
                <th>Liquiderefroidisement</th>
                <th>Ventilateur</th>
                <th>Embrayage</th>
                <th>Huilefuitechassis</th>
                <th>Fuitedaire</th>
                <th>Rouesecours</th>
                <th>Filtresecondaire</th>
                <th>Centraleelectrique</th>
                <th>Tableaubord</th>
                <th>Exthuiledirection</th>
                <th>Cledouble</th>
                <th>Docchassis</th>
                <th>Codeereur</th>
                <th>Kitaccesoires</th>
                <th>Remorquage</th>
                <th>Protectionchassis</th>
                <th>Remarques</th>
                <th>Rmqgeneralchassis</th>
                <th>Rmqhuilemoreur</th>
                <th>Rmqboitevitesse</th>
                <th>Rmqhuiledirection</th>
                <th>Rmqliquiderefroidisement</th>
                <th>Rmqventilateur</th>
                <th>Rmqembrayage</th>
                <th>Rmqhuilefuitechassis</th>
                <th>Rmqfuitedaire</th>
                <th>Rmqrouesecours</th>
                <th>Rmqfiltresecondaire</th>
                <th>Rmqcentraleelectrique</th>
                <th>Rmqtableaubord</th>
                <th>Rmqexthuiledirection</th>
                <th>Rmqcledouble</th>
                <th>Rmqdocchassis</th>
                <th>Rmqcodeereur</th>
                <th>Rmqkitaccesoires</th>
                <th>Rmqremorquage</th>
                <th>Rmqprotectionchassis</th>
                <th>Mecanicien</th>
                <th>Contqualite</th>
                <th>Responsablequalite</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["receptionchasses"] ?? $this->getContext($context, "receptionchasses")));
        foreach ($context['_seq'] as $context["_key"] => $context["receptionchassi"]) {
            // line 59
            echo "            <tr>
                <td><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_show", array("id" => $this->getAttribute($context["receptionchassi"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "generalchassis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "huilemoreur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "boitevitesse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "huiledirection", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "liquiderefroidisement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "ventilateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "embrayage", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "huilefuitechassis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "fuitedaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rouesecours", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "filtresecondaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "centraleelectrique", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "tableaubord", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "exthuiledirection", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "cledouble", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "docchassis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "codeereur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "kitaccesoires", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "remorquage", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "protectionchassis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "remarques", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqgeneralchassis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqhuilemoreur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqboitevitesse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqhuiledirection", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqliquiderefroidisement", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqventilateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqembrayage", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqhuilefuitechassis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqfuitedaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqrouesecours", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqfiltresecondaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqcentraleelectrique", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqtableaubord", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqexthuiledirection", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqcledouble", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqdocchassis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqcodeereur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqkitaccesoires", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqremorquage", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "rmqprotectionchassis", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "mecanicien", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "contqualite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "responsablequalite", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_show", array("id" => $this->getAttribute($context["receptionchassi"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_edit", array("id" => $this->getAttribute($context["receptionchassi"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receptionchassi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_new");
        echo "\">Create a new receptionchassi</a>
        </li>
    </ul>
";
        
        $__internal_cdb4f8cec58fe45afba191da5dfa2c746d2ecdb0143e19fb1ba1100cd51e58a7->leave($__internal_cdb4f8cec58fe45afba191da5dfa2c746d2ecdb0143e19fb1ba1100cd51e58a7_prof);

    }

    public function getTemplateName()
    {
        return "receptionchassis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 122,  306 => 117,  294 => 111,  288 => 108,  281 => 104,  277 => 103,  273 => 102,  269 => 101,  265 => 100,  261 => 99,  257 => 98,  253 => 97,  249 => 96,  245 => 95,  241 => 94,  237 => 93,  233 => 92,  229 => 91,  225 => 90,  221 => 89,  217 => 88,  213 => 87,  209 => 86,  205 => 85,  201 => 84,  197 => 83,  193 => 82,  189 => 81,  185 => 80,  181 => 79,  177 => 78,  173 => 77,  169 => 76,  165 => 75,  161 => 74,  157 => 73,  153 => 72,  149 => 71,  145 => 70,  141 => 69,  137 => 68,  133 => 67,  129 => 66,  125 => 65,  121 => 64,  117 => 63,  113 => 62,  109 => 61,  103 => 60,  100 => 59,  96 => 58,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Receptionchasses list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Generalchassis</th>
                <th>Huilemoreur</th>
                <th>Boitevitesse</th>
                <th>Huiledirection</th>
                <th>Liquiderefroidisement</th>
                <th>Ventilateur</th>
                <th>Embrayage</th>
                <th>Huilefuitechassis</th>
                <th>Fuitedaire</th>
                <th>Rouesecours</th>
                <th>Filtresecondaire</th>
                <th>Centraleelectrique</th>
                <th>Tableaubord</th>
                <th>Exthuiledirection</th>
                <th>Cledouble</th>
                <th>Docchassis</th>
                <th>Codeereur</th>
                <th>Kitaccesoires</th>
                <th>Remorquage</th>
                <th>Protectionchassis</th>
                <th>Remarques</th>
                <th>Rmqgeneralchassis</th>
                <th>Rmqhuilemoreur</th>
                <th>Rmqboitevitesse</th>
                <th>Rmqhuiledirection</th>
                <th>Rmqliquiderefroidisement</th>
                <th>Rmqventilateur</th>
                <th>Rmqembrayage</th>
                <th>Rmqhuilefuitechassis</th>
                <th>Rmqfuitedaire</th>
                <th>Rmqrouesecours</th>
                <th>Rmqfiltresecondaire</th>
                <th>Rmqcentraleelectrique</th>
                <th>Rmqtableaubord</th>
                <th>Rmqexthuiledirection</th>
                <th>Rmqcledouble</th>
                <th>Rmqdocchassis</th>
                <th>Rmqcodeereur</th>
                <th>Rmqkitaccesoires</th>
                <th>Rmqremorquage</th>
                <th>Rmqprotectionchassis</th>
                <th>Mecanicien</th>
                <th>Contqualite</th>
                <th>Responsablequalite</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for receptionchassi in receptionchasses %}
            <tr>
                <td><a href=\"{{ path('receptionchassis_show', { 'id': receptionchassi.id }) }}\">{{ receptionchassi.id }}</a></td>
                <td>{{ receptionchassi.generalchassis }}</td>
                <td>{{ receptionchassi.huilemoreur }}</td>
                <td>{{ receptionchassi.boitevitesse }}</td>
                <td>{{ receptionchassi.huiledirection }}</td>
                <td>{{ receptionchassi.liquiderefroidisement }}</td>
                <td>{{ receptionchassi.ventilateur }}</td>
                <td>{{ receptionchassi.embrayage }}</td>
                <td>{{ receptionchassi.huilefuitechassis }}</td>
                <td>{{ receptionchassi.fuitedaire }}</td>
                <td>{{ receptionchassi.rouesecours }}</td>
                <td>{{ receptionchassi.filtresecondaire }}</td>
                <td>{{ receptionchassi.centraleelectrique }}</td>
                <td>{{ receptionchassi.tableaubord }}</td>
                <td>{{ receptionchassi.exthuiledirection }}</td>
                <td>{{ receptionchassi.cledouble }}</td>
                <td>{{ receptionchassi.docchassis }}</td>
                <td>{{ receptionchassi.codeereur }}</td>
                <td>{{ receptionchassi.kitaccesoires }}</td>
                <td>{{ receptionchassi.remorquage }}</td>
                <td>{{ receptionchassi.protectionchassis }}</td>
                <td>{{ receptionchassi.remarques }}</td>
                <td>{{ receptionchassi.rmqgeneralchassis }}</td>
                <td>{{ receptionchassi.rmqhuilemoreur }}</td>
                <td>{{ receptionchassi.rmqboitevitesse }}</td>
                <td>{{ receptionchassi.rmqhuiledirection }}</td>
                <td>{{ receptionchassi.rmqliquiderefroidisement }}</td>
                <td>{{ receptionchassi.rmqventilateur }}</td>
                <td>{{ receptionchassi.rmqembrayage }}</td>
                <td>{{ receptionchassi.rmqhuilefuitechassis }}</td>
                <td>{{ receptionchassi.rmqfuitedaire }}</td>
                <td>{{ receptionchassi.rmqrouesecours }}</td>
                <td>{{ receptionchassi.rmqfiltresecondaire }}</td>
                <td>{{ receptionchassi.rmqcentraleelectrique }}</td>
                <td>{{ receptionchassi.rmqtableaubord }}</td>
                <td>{{ receptionchassi.rmqexthuiledirection }}</td>
                <td>{{ receptionchassi.rmqcledouble }}</td>
                <td>{{ receptionchassi.rmqdocchassis }}</td>
                <td>{{ receptionchassi.rmqcodeereur }}</td>
                <td>{{ receptionchassi.rmqkitaccesoires }}</td>
                <td>{{ receptionchassi.rmqremorquage }}</td>
                <td>{{ receptionchassi.rmqprotectionchassis }}</td>
                <td>{{ receptionchassi.mecanicien }}</td>
                <td>{{ receptionchassi.contqualite }}</td>
                <td>{{ receptionchassi.responsablequalite }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('receptionchassis_show', { 'id': receptionchassi.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('receptionchassis_edit', { 'id': receptionchassi.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('receptionchassis_new') }}\">Create a new receptionchassi</a>
        </li>
    </ul>
{% endblock %}
", "receptionchassis/index.html.twig", "/var/www/html/Alphabus/app/Resources/views/receptionchassis/index.html.twig");
    }
}
