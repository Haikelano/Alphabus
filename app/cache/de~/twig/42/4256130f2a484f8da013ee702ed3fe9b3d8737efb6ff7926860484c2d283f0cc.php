<?php

/* accesoirexterieur/show.html.twig */
class __TwigTemplate_3edc03fc21682c45f979f15673fba795e439a08a59b693b01595435a66fc68cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "accesoirexterieur/show.html.twig", 1);
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
        $__internal_031cb266bb80dfa6eb7c549c097a919411220e2c6831f06d9df3e4a8185a82a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031cb266bb80dfa6eb7c549c097a919411220e2c6831f06d9df3e4a8185a82a9->enter($__internal_031cb266bb80dfa6eb7c549c097a919411220e2c6831f06d9df3e4a8185a82a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accesoirexterieur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_031cb266bb80dfa6eb7c549c097a919411220e2c6831f06d9df3e4a8185a82a9->leave($__internal_031cb266bb80dfa6eb7c549c097a919411220e2c6831f06d9df3e4a8185a82a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e69a077665142bcd3c587c33666da55c9f51e177356fcf53485f00514ebcea27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69a077665142bcd3c587c33666da55c9f51e177356fcf53485f00514ebcea27->enter($__internal_e69a077665142bcd3c587c33666da55c9f51e177356fcf53485f00514ebcea27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
    [class*=\"alert\"]{
        border-radius: 6px;
        line-height: 40px;
        text-align: center;
    }
</style>
<div class=\"container\">
    <h2>Accessoir Exterier :</h2>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <p><h4><span class=\"badge badge-secondary\">N°Chassis <span class=\"badge badge-warning\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "chassis", array()), "html", null, true);
        echo "</span></span></h4></p>
        </div>
        <div class=\"col-md-4\">
            <p><h4><span class=\"badge badge-secondary\">Date d'ajout <span class=\"badge badge-warning\">";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo " </span></span></h4></p>
        </div>
        ";
        // line 20
        if ((($context["client"] ?? $this->getContext($context, "client")) != "")) {
            // line 21
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["client"] ?? $this->getContext($context, "client")));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 22
                echo "                <div class=\"col-md-4\">
                    <p><h4><span class=\"badge badge-secondary\">Affecter à <span class=\"badge badge-warning\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["id"], "nclients", array()), "html", null, true);
                echo "</span></span></h4></p>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        }
        // line 27
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-lg-10\">
            <table class=\"table  table-striped\">
                <tbody>
                <thead class=\"table-dark\">
                <tr>
                    <th scope=\"col\" class=\"col-sm-1\">Code</th>
                    <th scope=\"col\" class=\"col-lg-3\"> Désignation</th>
                    <th scope=\"col\" class=\"col-md-2\">Confirme/Non</th>
                    <th scope=\"col\" class=\"col-md-4\">Remarque</th>
                </tr>
                </thead>

            <tr>
                <th>10</th>
                <th>Isolation thermique CM</th>
                <td>";
        // line 45
        if (((($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "isolation", array()) == "") || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "isolation", array()) == "OK")) || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "isolation", array()) == "ok"))) {
            // line 46
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 48
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 49
        echo "</td>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "rmqisolation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>11</th>
                <th>Finition décoration & sérigraphi</th>
                <td>";
        // line 55
        if (((($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "finition", array()) == "") || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "finition", array()) == "OK")) || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "finition", array()) == "ok"))) {
            // line 56
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 58
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 59
        echo "</td>

                <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "rmqfinition", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>12</th>
                <th>Reglage Rétroviseur</th>
                <td>";
        // line 66
        if (((($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "retroviseur", array()) == "") || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "retroviseur", array()) == "OK")) || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "retroviseu", array()) == "ok"))) {
            // line 67
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 69
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 70
        echo "</td>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "rmqretroviseur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>14</th>
                <th>Fixation parachoc</th>
                <td>";
        // line 76
        if (((($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "fixationpara", array()) == "") || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "fixationpara", array()) == "OK")) || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "fixationpara", array()) == "ok"))) {
            // line 77
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 79
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 80
        echo "</td>
                <td>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "rmqfixationpara", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>15</th>
                <th>Etat du Parachoc</th>
                <td>";
        // line 86
        if (((($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "etatparachoc", array()) == "") || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "etatparachoc", array()) == "OK")) || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "etatparachoc", array()) == "ok"))) {
            // line 87
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 89
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 90
        echo "</td>
                <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "rmqetatparachoc", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>16</th>
                <th>Cache feu de route</th>
                <td>";
        // line 96
        if (((($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "cachefeu", array()) == "") || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "cachefeu", array()) == "OK")) || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "cachefeu", array()) == "ok"))) {
            // line 97
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 99
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 100
        echo "</td>
                <td>";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "rmqcachefeu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>17</th>
                <th>Grille des bouches d'aeration moteur</th>
                <td>";
        // line 106
        if (((($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "grillebouches", array()) == "") || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "grillebouches", array()) == "OK")) || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "grillebouches", array()) == "ok"))) {
            // line 107
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 109
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 110
        echo "</td>
                <td>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "rmqgrillebouches", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>18</th>
                <th>Baguette</th>
                <td>";
        // line 116
        if (((($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "baguette", array()) == "") || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "baguette", array()) == "OK")) || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "baguette", array()) == "ok"))) {
            // line 117
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 119
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 120
        echo "</td>
                <td>";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "rmqbaguette", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>19</th>
                <th>Porte réservoir</th>
                <td>";
        // line 126
        if (((($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "porte", array()) == "") || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "porte", array()) == "OK")) || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "porte", array()) == "ok"))) {
            // line 127
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 129
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 130
        echo "</td>
                <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "rmqporte", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>20</th>
                <th>Essuie glaces & lave glace</th>
                <td>";
        // line 136
        if (((($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "essui", array()) == "") || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "essui", array()) == "OK")) || ($this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "essui", array()) == "ok"))) {
            // line 137
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 139
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 140
        echo "</td>
                <td>";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "rmqessui", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>
        </div>


        <div id=\"aa\" class=\"col-md-2\">
            <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
                <li class=\"list-group-item\"><a class=\"alert-info\" href=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accesoirexterieur_index");
        echo "\">Rétourner à la liste</a></li>
                <li class=\"list-group-item\"><a class=\"alert-info\" href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accesoirexterieur_edit", array("id" => $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "id", array()))), "html", null, true);
        echo "\">Modifier</a></li>
            </ul>
        </div>

    </div>
</div>

";
        
        $__internal_e69a077665142bcd3c587c33666da55c9f51e177356fcf53485f00514ebcea27->leave($__internal_e69a077665142bcd3c587c33666da55c9f51e177356fcf53485f00514ebcea27_prof);

    }

    public function getTemplateName()
    {
        return "accesoirexterieur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 152,  322 => 151,  309 => 141,  306 => 140,  302 => 139,  298 => 137,  296 => 136,  288 => 131,  285 => 130,  281 => 129,  277 => 127,  275 => 126,  267 => 121,  264 => 120,  260 => 119,  256 => 117,  254 => 116,  246 => 111,  243 => 110,  239 => 109,  235 => 107,  233 => 106,  225 => 101,  222 => 100,  218 => 99,  214 => 97,  212 => 96,  204 => 91,  201 => 90,  197 => 89,  193 => 87,  191 => 86,  183 => 81,  180 => 80,  176 => 79,  172 => 77,  170 => 76,  162 => 71,  159 => 70,  155 => 69,  151 => 67,  149 => 66,  141 => 61,  137 => 59,  133 => 58,  129 => 56,  127 => 55,  119 => 50,  116 => 49,  112 => 48,  108 => 46,  106 => 45,  86 => 27,  83 => 26,  74 => 23,  71 => 22,  66 => 21,  64 => 20,  59 => 18,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
<style>
    [class*=\"alert\"]{
        border-radius: 6px;
        line-height: 40px;
        text-align: center;
    }
</style>
<div class=\"container\">
    <h2>Accessoir Exterier :</h2>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <p><h4><span class=\"badge badge-secondary\">N°Chassis <span class=\"badge badge-warning\">{{ accesoirexterieur.chassis }}</span></span></h4></p>
        </div>
        <div class=\"col-md-4\">
            <p><h4><span class=\"badge badge-secondary\">Date d'ajout <span class=\"badge badge-warning\">{{ accesoirexterieur.date|date('Y-m-d H:i:s') }} </span></span></h4></p>
        </div>
        {% if client != '' %}
            {% for id in client %}
                <div class=\"col-md-4\">
                    <p><h4><span class=\"badge badge-secondary\">Affecter à <span class=\"badge badge-warning\">{{ id.nclients }}</span></span></h4></p>
                </div>
            {% endfor %}
        {% endif %}
    </div>

    <div class=\"row\">
        <div class=\"col-lg-10\">
            <table class=\"table  table-striped\">
                <tbody>
                <thead class=\"table-dark\">
                <tr>
                    <th scope=\"col\" class=\"col-sm-1\">Code</th>
                    <th scope=\"col\" class=\"col-lg-3\"> Désignation</th>
                    <th scope=\"col\" class=\"col-md-2\">Confirme/Non</th>
                    <th scope=\"col\" class=\"col-md-4\">Remarque</th>
                </tr>
                </thead>

            <tr>
                <th>10</th>
                <th>Isolation thermique CM</th>
                <td>{% if accesoirexterieur.isolation == \"\" or accesoirexterieur.isolation == \"OK\" or accesoirexterieur.isolation == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ accesoirexterieur.rmqisolation }}</td>
            </tr>
            <tr>
                <th>11</th>
                <th>Finition décoration & sérigraphi</th>
                <td>{% if accesoirexterieur.finition == \"\" or accesoirexterieur.finition == \"OK\" or accesoirexterieur.finition == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>

                <td>{{ accesoirexterieur.rmqfinition }}</td>
            </tr>
            <tr>
                <th>12</th>
                <th>Reglage Rétroviseur</th>
                <td>{% if accesoirexterieur.retroviseur == \"\" or accesoirexterieur.retroviseur == \"OK\" or accesoirexterieur.retroviseu == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ accesoirexterieur.rmqretroviseur }}</td>
            </tr>
            <tr>
                <th>14</th>
                <th>Fixation parachoc</th>
                <td>{% if accesoirexterieur.fixationpara == \"\" or accesoirexterieur.fixationpara == \"OK\" or accesoirexterieur.fixationpara == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ accesoirexterieur.rmqfixationpara }}</td>
            </tr>
            <tr>
                <th>15</th>
                <th>Etat du Parachoc</th>
                <td>{% if accesoirexterieur.etatparachoc == \"\" or accesoirexterieur.etatparachoc == \"OK\" or accesoirexterieur.etatparachoc == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ accesoirexterieur.rmqetatparachoc }}</td>
            </tr>
            <tr>
                <th>16</th>
                <th>Cache feu de route</th>
                <td>{% if accesoirexterieur.cachefeu == \"\" or accesoirexterieur.cachefeu == \"OK\" or accesoirexterieur.cachefeu == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ accesoirexterieur.rmqcachefeu }}</td>
            </tr>
            <tr>
                <th>17</th>
                <th>Grille des bouches d'aeration moteur</th>
                <td>{% if accesoirexterieur.grillebouches == \"\" or accesoirexterieur.grillebouches == \"OK\" or accesoirexterieur.grillebouches == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ accesoirexterieur.rmqgrillebouches }}</td>
            </tr>
            <tr>
                <th>18</th>
                <th>Baguette</th>
                <td>{% if accesoirexterieur.baguette == \"\" or accesoirexterieur.baguette == \"OK\" or accesoirexterieur.baguette == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ accesoirexterieur.rmqbaguette }}</td>
            </tr>
            <tr>
                <th>19</th>
                <th>Porte réservoir</th>
                <td>{% if accesoirexterieur.porte == \"\" or accesoirexterieur.porte == \"OK\" or accesoirexterieur.porte == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ accesoirexterieur.rmqporte }}</td>
            </tr>
            <tr>
                <th>20</th>
                <th>Essuie glaces & lave glace</th>
                <td>{% if accesoirexterieur.essui == \"\" or accesoirexterieur.essui == \"OK\" or accesoirexterieur.essui == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ accesoirexterieur.rmqessui }}</td>
            </tr>

        </tbody>
    </table>
        </div>


        <div id=\"aa\" class=\"col-md-2\">
            <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
                <li class=\"list-group-item\"><a class=\"alert-info\" href=\"{{ path('accesoirexterieur_index') }}\">Rétourner à la liste</a></li>
                <li class=\"list-group-item\"><a class=\"alert-info\" href=\"{{ path('accesoirexterieur_edit', { 'id': accesoirexterieur.id }) }}\">Modifier</a></li>
            </ul>
        </div>

    </div>
</div>

{% endblock %}
", "accesoirexterieur/show.html.twig", "/var/www/html/Alphabus/app/Resources/views/accesoirexterieur/show.html.twig");
    }
}
