<?php

/* receptionchassis/show.html.twig */
class __TwigTemplate_6f070f56ee16b04b8a54303ea7177c3f90740b6bc339ca2300511fbff4e3ff5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "receptionchassis/show.html.twig", 1);
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
        $__internal_64836002d27a2381a106a6f8e73d08426c94e61c637643210466223492f0419b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64836002d27a2381a106a6f8e73d08426c94e61c637643210466223492f0419b->enter($__internal_64836002d27a2381a106a6f8e73d08426c94e61c637643210466223492f0419b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "receptionchassis/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64836002d27a2381a106a6f8e73d08426c94e61c637643210466223492f0419b->leave($__internal_64836002d27a2381a106a6f8e73d08426c94e61c637643210466223492f0419b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a12908f5f4d5e33894b30fbd512648c752e2eeac7f7da980be6e8e6319e5ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a12908f5f4d5e33894b30fbd512648c752e2eeac7f7da980be6e8e6319e5ff6->enter($__internal_0a12908f5f4d5e33894b30fbd512648c752e2eeac7f7da980be6e8e6319e5ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Receptionchassi</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Generalchassis</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "generalchassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Huilemoreur</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "huilemoreur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Boitevitesse</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "boitevitesse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Huiledirection</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "huiledirection", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Liquiderefroidisement</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "liquiderefroidisement", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ventilateur</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "ventilateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Embrayage</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "embrayage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Huilefuitechassis</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "huilefuitechassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fuitedaire</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "fuitedaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rouesecours</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rouesecours", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Filtresecondaire</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "filtresecondaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Centraleelectrique</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "centraleelectrique", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tableaubord</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "tableaubord", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Exthuiledirection</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "exthuiledirection", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cledouble</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "cledouble", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Docchassis</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "docchassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Codeereur</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "codeereur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Kitaccesoires</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "kitaccesoires", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Remorquage</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "remorquage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Protectionchassis</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "protectionchassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Remarques</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "remarques", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqgeneralchassis</th>
                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqgeneralchassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqhuilemoreur</th>
                <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqhuilemoreur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqboitevitesse</th>
                <td>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqboitevitesse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqhuiledirection</th>
                <td>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqhuiledirection", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqliquiderefroidisement</th>
                <td>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqliquiderefroidisement", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqventilateur</th>
                <td>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqventilateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqembrayage</th>
                <td>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqembrayage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqhuilefuitechassis</th>
                <td>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqhuilefuitechassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqfuitedaire</th>
                <td>";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqfuitedaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqrouesecours</th>
                <td>";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqrouesecours", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqfiltresecondaire</th>
                <td>";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqfiltresecondaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqcentraleelectrique</th>
                <td>";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqcentraleelectrique", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqtableaubord</th>
                <td>";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqtableaubord", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqexthuiledirection</th>
                <td>";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqexthuiledirection", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqcledouble</th>
                <td>";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqcledouble", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqdocchassis</th>
                <td>";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqdocchassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqcodeereur</th>
                <td>";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqcodeereur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqkitaccesoires</th>
                <td>";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqkitaccesoires", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqremorquage</th>
                <td>";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqremorquage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rmqprotectionchassis</th>
                <td>";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "rmqprotectionchassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mecanicien</th>
                <td>";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "mecanicien", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contqualite</th>
                <td>";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "contqualite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Responsablequalite</th>
                <td>";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "responsablequalite", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_edit", array("id" => $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 199
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 201
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0a12908f5f4d5e33894b30fbd512648c752e2eeac7f7da980be6e8e6319e5ff6->leave($__internal_0a12908f5f4d5e33894b30fbd512648c752e2eeac7f7da980be6e8e6319e5ff6_prof);

    }

    public function getTemplateName()
    {
        return "receptionchassis/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 201,  378 => 199,  372 => 196,  366 => 193,  356 => 186,  349 => 182,  342 => 178,  335 => 174,  328 => 170,  321 => 166,  314 => 162,  307 => 158,  300 => 154,  293 => 150,  286 => 146,  279 => 142,  272 => 138,  265 => 134,  258 => 130,  251 => 126,  244 => 122,  237 => 118,  230 => 114,  223 => 110,  216 => 106,  209 => 102,  202 => 98,  195 => 94,  188 => 90,  181 => 86,  174 => 82,  167 => 78,  160 => 74,  153 => 70,  146 => 66,  139 => 62,  132 => 58,  125 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Receptionchassi</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ receptionchassi.id }}</td>
            </tr>
            <tr>
                <th>Generalchassis</th>
                <td>{{ receptionchassi.generalchassis }}</td>
            </tr>
            <tr>
                <th>Huilemoreur</th>
                <td>{{ receptionchassi.huilemoreur }}</td>
            </tr>
            <tr>
                <th>Boitevitesse</th>
                <td>{{ receptionchassi.boitevitesse }}</td>
            </tr>
            <tr>
                <th>Huiledirection</th>
                <td>{{ receptionchassi.huiledirection }}</td>
            </tr>
            <tr>
                <th>Liquiderefroidisement</th>
                <td>{{ receptionchassi.liquiderefroidisement }}</td>
            </tr>
            <tr>
                <th>Ventilateur</th>
                <td>{{ receptionchassi.ventilateur }}</td>
            </tr>
            <tr>
                <th>Embrayage</th>
                <td>{{ receptionchassi.embrayage }}</td>
            </tr>
            <tr>
                <th>Huilefuitechassis</th>
                <td>{{ receptionchassi.huilefuitechassis }}</td>
            </tr>
            <tr>
                <th>Fuitedaire</th>
                <td>{{ receptionchassi.fuitedaire }}</td>
            </tr>
            <tr>
                <th>Rouesecours</th>
                <td>{{ receptionchassi.rouesecours }}</td>
            </tr>
            <tr>
                <th>Filtresecondaire</th>
                <td>{{ receptionchassi.filtresecondaire }}</td>
            </tr>
            <tr>
                <th>Centraleelectrique</th>
                <td>{{ receptionchassi.centraleelectrique }}</td>
            </tr>
            <tr>
                <th>Tableaubord</th>
                <td>{{ receptionchassi.tableaubord }}</td>
            </tr>
            <tr>
                <th>Exthuiledirection</th>
                <td>{{ receptionchassi.exthuiledirection }}</td>
            </tr>
            <tr>
                <th>Cledouble</th>
                <td>{{ receptionchassi.cledouble }}</td>
            </tr>
            <tr>
                <th>Docchassis</th>
                <td>{{ receptionchassi.docchassis }}</td>
            </tr>
            <tr>
                <th>Codeereur</th>
                <td>{{ receptionchassi.codeereur }}</td>
            </tr>
            <tr>
                <th>Kitaccesoires</th>
                <td>{{ receptionchassi.kitaccesoires }}</td>
            </tr>
            <tr>
                <th>Remorquage</th>
                <td>{{ receptionchassi.remorquage }}</td>
            </tr>
            <tr>
                <th>Protectionchassis</th>
                <td>{{ receptionchassi.protectionchassis }}</td>
            </tr>
            <tr>
                <th>Remarques</th>
                <td>{{ receptionchassi.remarques }}</td>
            </tr>
            <tr>
                <th>Rmqgeneralchassis</th>
                <td>{{ receptionchassi.rmqgeneralchassis }}</td>
            </tr>
            <tr>
                <th>Rmqhuilemoreur</th>
                <td>{{ receptionchassi.rmqhuilemoreur }}</td>
            </tr>
            <tr>
                <th>Rmqboitevitesse</th>
                <td>{{ receptionchassi.rmqboitevitesse }}</td>
            </tr>
            <tr>
                <th>Rmqhuiledirection</th>
                <td>{{ receptionchassi.rmqhuiledirection }}</td>
            </tr>
            <tr>
                <th>Rmqliquiderefroidisement</th>
                <td>{{ receptionchassi.rmqliquiderefroidisement }}</td>
            </tr>
            <tr>
                <th>Rmqventilateur</th>
                <td>{{ receptionchassi.rmqventilateur }}</td>
            </tr>
            <tr>
                <th>Rmqembrayage</th>
                <td>{{ receptionchassi.rmqembrayage }}</td>
            </tr>
            <tr>
                <th>Rmqhuilefuitechassis</th>
                <td>{{ receptionchassi.rmqhuilefuitechassis }}</td>
            </tr>
            <tr>
                <th>Rmqfuitedaire</th>
                <td>{{ receptionchassi.rmqfuitedaire }}</td>
            </tr>
            <tr>
                <th>Rmqrouesecours</th>
                <td>{{ receptionchassi.rmqrouesecours }}</td>
            </tr>
            <tr>
                <th>Rmqfiltresecondaire</th>
                <td>{{ receptionchassi.rmqfiltresecondaire }}</td>
            </tr>
            <tr>
                <th>Rmqcentraleelectrique</th>
                <td>{{ receptionchassi.rmqcentraleelectrique }}</td>
            </tr>
            <tr>
                <th>Rmqtableaubord</th>
                <td>{{ receptionchassi.rmqtableaubord }}</td>
            </tr>
            <tr>
                <th>Rmqexthuiledirection</th>
                <td>{{ receptionchassi.rmqexthuiledirection }}</td>
            </tr>
            <tr>
                <th>Rmqcledouble</th>
                <td>{{ receptionchassi.rmqcledouble }}</td>
            </tr>
            <tr>
                <th>Rmqdocchassis</th>
                <td>{{ receptionchassi.rmqdocchassis }}</td>
            </tr>
            <tr>
                <th>Rmqcodeereur</th>
                <td>{{ receptionchassi.rmqcodeereur }}</td>
            </tr>
            <tr>
                <th>Rmqkitaccesoires</th>
                <td>{{ receptionchassi.rmqkitaccesoires }}</td>
            </tr>
            <tr>
                <th>Rmqremorquage</th>
                <td>{{ receptionchassi.rmqremorquage }}</td>
            </tr>
            <tr>
                <th>Rmqprotectionchassis</th>
                <td>{{ receptionchassi.rmqprotectionchassis }}</td>
            </tr>
            <tr>
                <th>Mecanicien</th>
                <td>{{ receptionchassi.mecanicien }}</td>
            </tr>
            <tr>
                <th>Contqualite</th>
                <td>{{ receptionchassi.contqualite }}</td>
            </tr>
            <tr>
                <th>Responsablequalite</th>
                <td>{{ receptionchassi.responsablequalite }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('receptionchassis_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('receptionchassis_edit', { 'id': receptionchassi.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "receptionchassis/show.html.twig", "/var/www/html/Alphabus/app/Resources/views/receptionchassis/show.html.twig");
    }
}
