<?php

/* structure/show.html.twig */
class __TwigTemplate_714a2ce31eb87591477ae6d797b09130d10d70579ae3a732ecaefd859007d5d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "structure/show.html.twig", 1);
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
        $__internal_bc6e776bcd96a35021e7997d5c03536820ae8be5d99d7b4e55d78005ccfb21ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6e776bcd96a35021e7997d5c03536820ae8be5d99d7b4e55d78005ccfb21ff->enter($__internal_bc6e776bcd96a35021e7997d5c03536820ae8be5d99d7b4e55d78005ccfb21ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "structure/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc6e776bcd96a35021e7997d5c03536820ae8be5d99d7b4e55d78005ccfb21ff->leave($__internal_bc6e776bcd96a35021e7997d5c03536820ae8be5d99d7b4e55d78005ccfb21ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f425dc0575d1e678577c9293c81e033d970c68c7b6b3970fe8410a1ada544323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f425dc0575d1e678577c9293c81e033d970c68c7b6b3970fe8410a1ada544323->enter($__internal_f425dc0575d1e678577c9293c81e033d970c68c7b6b3970fe8410a1ada544323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Structure</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Protectionchassis</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "protectionchassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Niveauchassis</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "niveauchassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Geometriechassis</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "geometriechassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Geometriecarrosserie</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "geometriecarrosserie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Renfort</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "renfort", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Soudureconection</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "soudureconection", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Soudurecarroserie</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "soudurecarroserie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fixationtolehabillage</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "fixationtolehabillage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cadreparebrise</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "cadreparebrise", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cadreporte</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "cadreporte", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cadrevitre</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "cadrevitre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Jointbutyl</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "jointbutyl", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Masitcportecofre</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "masitcportecofre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Poitssoudure</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "poitssoudure", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Abspiecepolyester</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "abspiecepolyester", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Surfacetoles</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "surfacetoles", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Remarques</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "remarques", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repprotectionchassis</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repprotectionchassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repniveauchassis</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repniveauchassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repgeometriechassis</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repgeometriechassis", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repgeometriecarrosserie</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repgeometriecarrosserie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reprenfort</th>
                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "reprenfort", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repsoudureconection</th>
                <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repsoudureconection", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repsoudurecarroserie</th>
                <td>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repsoudurecarroserie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repfixationtolehabillage</th>
                <td>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repfixationtolehabillage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repcadreparebrise</th>
                <td>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repcadreparebrise", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repcadreporte</th>
                <td>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repcadreporte", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repcadrevitre</th>
                <td>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repcadrevitre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repjointbutyl</th>
                <td>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repjointbutyl", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repmasitcportecofre</th>
                <td>";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repmasitcportecofre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Reppoitssoudure</th>
                <td>";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "reppoitssoudure", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repabspiecepolyester</th>
                <td>";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repabspiecepolyester", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repsurfacetoles</th>
                <td>";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repsurfacetoles", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Repremarques</th>
                <td>";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "repremarques", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 153
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_edit", array("id" => $this->getAttribute(($context["structure"] ?? $this->getContext($context, "structure")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 159
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 161
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f425dc0575d1e678577c9293c81e033d970c68c7b6b3970fe8410a1ada544323->leave($__internal_f425dc0575d1e678577c9293c81e033d970c68c7b6b3970fe8410a1ada544323_prof);

    }

    public function getTemplateName()
    {
        return "structure/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 161,  308 => 159,  302 => 156,  296 => 153,  286 => 146,  279 => 142,  272 => 138,  265 => 134,  258 => 130,  251 => 126,  244 => 122,  237 => 118,  230 => 114,  223 => 110,  216 => 106,  209 => 102,  202 => 98,  195 => 94,  188 => 90,  181 => 86,  174 => 82,  167 => 78,  160 => 74,  153 => 70,  146 => 66,  139 => 62,  132 => 58,  125 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Structure</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ structure.id }}</td>
            </tr>
            <tr>
                <th>Protectionchassis</th>
                <td>{{ structure.protectionchassis }}</td>
            </tr>
            <tr>
                <th>Niveauchassis</th>
                <td>{{ structure.niveauchassis }}</td>
            </tr>
            <tr>
                <th>Geometriechassis</th>
                <td>{{ structure.geometriechassis }}</td>
            </tr>
            <tr>
                <th>Geometriecarrosserie</th>
                <td>{{ structure.geometriecarrosserie }}</td>
            </tr>
            <tr>
                <th>Renfort</th>
                <td>{{ structure.renfort }}</td>
            </tr>
            <tr>
                <th>Soudureconection</th>
                <td>{{ structure.soudureconection }}</td>
            </tr>
            <tr>
                <th>Soudurecarroserie</th>
                <td>{{ structure.soudurecarroserie }}</td>
            </tr>
            <tr>
                <th>Fixationtolehabillage</th>
                <td>{{ structure.fixationtolehabillage }}</td>
            </tr>
            <tr>
                <th>Cadreparebrise</th>
                <td>{{ structure.cadreparebrise }}</td>
            </tr>
            <tr>
                <th>Cadreporte</th>
                <td>{{ structure.cadreporte }}</td>
            </tr>
            <tr>
                <th>Cadrevitre</th>
                <td>{{ structure.cadrevitre }}</td>
            </tr>
            <tr>
                <th>Jointbutyl</th>
                <td>{{ structure.jointbutyl }}</td>
            </tr>
            <tr>
                <th>Masitcportecofre</th>
                <td>{{ structure.masitcportecofre }}</td>
            </tr>
            <tr>
                <th>Poitssoudure</th>
                <td>{{ structure.poitssoudure }}</td>
            </tr>
            <tr>
                <th>Abspiecepolyester</th>
                <td>{{ structure.abspiecepolyester }}</td>
            </tr>
            <tr>
                <th>Surfacetoles</th>
                <td>{{ structure.surfacetoles }}</td>
            </tr>
            <tr>
                <th>Remarques</th>
                <td>{{ structure.remarques }}</td>
            </tr>
            <tr>
                <th>Repprotectionchassis</th>
                <td>{{ structure.repprotectionchassis }}</td>
            </tr>
            <tr>
                <th>Repniveauchassis</th>
                <td>{{ structure.repniveauchassis }}</td>
            </tr>
            <tr>
                <th>Repgeometriechassis</th>
                <td>{{ structure.repgeometriechassis }}</td>
            </tr>
            <tr>
                <th>Repgeometriecarrosserie</th>
                <td>{{ structure.repgeometriecarrosserie }}</td>
            </tr>
            <tr>
                <th>Reprenfort</th>
                <td>{{ structure.reprenfort }}</td>
            </tr>
            <tr>
                <th>Repsoudureconection</th>
                <td>{{ structure.repsoudureconection }}</td>
            </tr>
            <tr>
                <th>Repsoudurecarroserie</th>
                <td>{{ structure.repsoudurecarroserie }}</td>
            </tr>
            <tr>
                <th>Repfixationtolehabillage</th>
                <td>{{ structure.repfixationtolehabillage }}</td>
            </tr>
            <tr>
                <th>Repcadreparebrise</th>
                <td>{{ structure.repcadreparebrise }}</td>
            </tr>
            <tr>
                <th>Repcadreporte</th>
                <td>{{ structure.repcadreporte }}</td>
            </tr>
            <tr>
                <th>Repcadrevitre</th>
                <td>{{ structure.repcadrevitre }}</td>
            </tr>
            <tr>
                <th>Repjointbutyl</th>
                <td>{{ structure.repjointbutyl }}</td>
            </tr>
            <tr>
                <th>Repmasitcportecofre</th>
                <td>{{ structure.repmasitcportecofre }}</td>
            </tr>
            <tr>
                <th>Reppoitssoudure</th>
                <td>{{ structure.reppoitssoudure }}</td>
            </tr>
            <tr>
                <th>Repabspiecepolyester</th>
                <td>{{ structure.repabspiecepolyester }}</td>
            </tr>
            <tr>
                <th>Repsurfacetoles</th>
                <td>{{ structure.repsurfacetoles }}</td>
            </tr>
            <tr>
                <th>Repremarques</th>
                <td>{{ structure.repremarques }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('structure_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('structure_edit', { 'id': structure.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "structure/show.html.twig", "/var/www/html/Alphabus/app/Resources/views/structure/show.html.twig");
    }
}
