<?php

/* basdecaisse/show.html.twig */
class __TwigTemplate_794766e1d7651e02e6541e4ed9fde5c430a2762c47fc4c05bcc8130403614171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "basdecaisse/show.html.twig", 1);
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
        $__internal_7b879a9a53aa6372219ba84c87136789a56cd4199d8f8966807ac7195f7022b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b879a9a53aa6372219ba84c87136789a56cd4199d8f8966807ac7195f7022b8->enter($__internal_7b879a9a53aa6372219ba84c87136789a56cd4199d8f8966807ac7195f7022b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basdecaisse/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b879a9a53aa6372219ba84c87136789a56cd4199d8f8966807ac7195f7022b8->leave($__internal_7b879a9a53aa6372219ba84c87136789a56cd4199d8f8966807ac7195f7022b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f1fb5ea6be3fd9192590153a8e1cc5936119aed1bfaa9eb32a708ee7ce14384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1fb5ea6be3fd9192590153a8e1cc5936119aed1bfaa9eb32a708ee7ce14384->enter($__internal_4f1fb5ea6be3fd9192590153a8e1cc5936119aed1bfaa9eb32a708ee7ce14384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
        [class*=\"alert\"]{
            border-radius: 6px;
            line-height: 40px;
            text-align: center;
        }
    </style>
    <div class=\"container\">
        <h2>Test Carosserie :</h2>
                    <div class=\"row\">
                         <div class=\"col-md-4\">
                             <p><h4><span class=\"badge badge-secondary\">N°Chassis <span class=\"badge badge-warning\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "chassis", array()), "html", null, true);
        echo "</span></span></h4></p>
                         </div>
                        <div class=\"col-md-4\">
                            <p><h4><span class=\"badge badge-secondary\">Date d'ajout <span class=\"badge badge-warning\">";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo " </span></span></h4></p>
                         </div>
                        ";
        // line 20
        if ((($context["client"] ?? $this->getContext($context, "client")) != "")) {
            // line 21
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["client"] ?? $this->getContext($context, "client")));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 22
                echo "                         <div class=\"col-md-4\">
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
            echo "                        ";
        }
        // line 27
        echo "                    </div>
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
                            <th>1</th>
                            <th name=\"a\">Soudure des connections</th>

                            <td>";
        // line 44
        if (((($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "soudurecnx", array()) == "") || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "soudurecnx", array()) == "OK")) || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "soudurecnx", array()) == "ok"))) {
            // line 45
            echo "                                    <span class=\"alert alert-success\">Confirme</span>
                                ";
        } else {
            // line 47
            echo "                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                ";
        }
        // line 48
        echo "</td>
                             <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "rmqsoudurecnx", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th name=\"a\">Fixation des boulons des membrures</th>
                            <td>";
        // line 54
        if (((($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "fixation", array()) == "") || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "fixation", array()) == "OK")) || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "fixation", array()) == "ok"))) {
            // line 55
            echo "                                    <span class=\"alert alert-success\">Confirme</span>
                                ";
        } else {
            // line 57
            echo "                                    <span class=\"alert alert-danger\">Non Confirme</span>
                                ";
        }
        // line 58
        echo "</td>
                            <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "rmqfixation", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th name=\"a\">Etancheite de la carrosseriere</th>
                            <td>";
        // line 64
        if (((($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "etancheite", array()) == "") || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "etancheite", array()) == "OK")) || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "etancheite", array()) == "ok"))) {
            // line 65
            echo "                                    <span class=\"alert alert-success\">Confirme</span>
                                ";
        } else {
            // line 67
            echo "                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                ";
        }
        // line 68
        echo "</td>
                            <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "rmqetancheite", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <th name=\"a\">Peinture bas de caisse</th>
                               <td>";
        // line 74
        if (((($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "peinture", array()) == "") || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "peinture", array()) == "OK")) || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "peinture", array()) == "ok"))) {
            // line 75
            echo "                                    <span class=\"alert alert-success\">Confirme</span>
                                ";
        } else {
            // line 77
            echo "                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                ";
        }
        // line 78
        echo "</td>
                            <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "rmqpeinture", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <th name=\"a\">Absence depassement Visserie</th>
                               <td>";
        // line 84
        if (((($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "visserie", array()) == "") || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "visserie", array()) == "OK")) || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "visserie", array()) == "ok"))) {
            // line 85
            echo "                                    <span class=\"alert alert-success\">Confirme</span>
                                ";
        } else {
            // line 87
            echo "                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                ";
        }
        // line 88
        echo "</td>
                            <td>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "rmqvisserie", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <th name=\"a\">Absence de déchet de Carrosserie</th>
                             <td>";
        // line 94
        if (((($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "carrosserie", array()) == "") || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "carrosserie", array()) == "OK")) || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "carrosserie", array()) == "ok"))) {
            // line 95
            echo "                                    <span class=\"alert alert-success\">Confirme</span>
                                ";
        } else {
            // line 97
            echo "                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                ";
        }
        // line 98
        echo "</td>
                            <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "rmqcarrosserie", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>7</th>
                            <th name=\"a\">Absence de Frottement entre</th>
                            <td>";
        // line 104
        if (((($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "frottement", array()) == "") || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "frottement", array()) == "OK")) || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "frottement", array()) == "ok"))) {
            // line 105
            echo "                                    <span class=\"alert alert-success\">Confirme</span>
                                ";
        } else {
            // line 107
            echo "                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                ";
        }
        // line 108
        echo "</td>
                            <td>";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "rmqfrottement", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>8</th>
                            <th name=\"a\">Fixation Roue de secours</th>
                               <td>";
        // line 114
        if (((($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "fixationroue", array()) == "") || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "fixationroue", array()) == "OK")) || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "fixationroue", array()) == "ok"))) {
            // line 115
            echo "                                    <span class=\"alert alert-success\">Confirme</span>
                                ";
        } else {
            // line 117
            echo "                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                ";
        }
        // line 118
        echo "</td>
                            <td>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "rmqfixationroue", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>9</th>
                            <th name=\"a\">Passage et fixation des cables et flexibles</th>
                            <td>";
        // line 124
        if (((($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "fixationcable", array()) == "") || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "fixationcable", array()) == "OK")) || ($this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "fixationcable", array()) == "ok"))) {
            // line 125
            echo "                                    <span class=\"alert alert-success\">Confirme</span>
                                ";
        } else {
            // line 127
            echo "                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                ";
        }
        // line 128
        echo "</td>
                            <td>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "rmqfixationcable", array()), "html", null, true);
        echo "</td>
                        </tr>

                    </tbody>
                </table>
            </div>

          <div id=\"aa\" class=\"col-md-2\">
            <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
               <li class=\"list-group-item\"><a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basdecaisse_index");
        echo "\">Back to the list</a></li>
               <li class=\"list-group-item\"><a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basdecaisse_edit", array("id" => $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "id", array()))), "html", null, true);
        echo "\">Edit</a></li>
            </ul>
          </div>

        </div>
    </div>
";
        
        $__internal_4f1fb5ea6be3fd9192590153a8e1cc5936119aed1bfaa9eb32a708ee7ce14384->leave($__internal_4f1fb5ea6be3fd9192590153a8e1cc5936119aed1bfaa9eb32a708ee7ce14384_prof);

    }

    public function getTemplateName()
    {
        return "basdecaisse/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 139,  298 => 138,  286 => 129,  283 => 128,  279 => 127,  275 => 125,  273 => 124,  265 => 119,  262 => 118,  258 => 117,  254 => 115,  252 => 114,  244 => 109,  241 => 108,  237 => 107,  233 => 105,  231 => 104,  223 => 99,  220 => 98,  216 => 97,  212 => 95,  210 => 94,  202 => 89,  199 => 88,  195 => 87,  191 => 85,  189 => 84,  181 => 79,  178 => 78,  174 => 77,  170 => 75,  168 => 74,  160 => 69,  157 => 68,  153 => 67,  149 => 65,  147 => 64,  139 => 59,  136 => 58,  132 => 57,  128 => 55,  126 => 54,  118 => 49,  115 => 48,  111 => 47,  107 => 45,  105 => 44,  86 => 27,  83 => 26,  74 => 23,  71 => 22,  66 => 21,  64 => 20,  59 => 18,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
        <h2>Test Carosserie :</h2>
                    <div class=\"row\">
                         <div class=\"col-md-4\">
                             <p><h4><span class=\"badge badge-secondary\">N°Chassis <span class=\"badge badge-warning\">{{ basdecaisse.chassis }}</span></span></h4></p>
                         </div>
                        <div class=\"col-md-4\">
                            <p><h4><span class=\"badge badge-secondary\">Date d'ajout <span class=\"badge badge-warning\">{{ basdecaisse.date|date('Y-m-d H:i:s') }} </span></span></h4></p>
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
                            <th>1</th>
                            <th name=\"a\">Soudure des connections</th>

                            <td>{% if basdecaisse.soudurecnx == \"\" or basdecaisse.soudurecnx == \"OK\" or basdecaisse.soudurecnx == \"ok\"  %}
                                    <span class=\"alert alert-success\">Confirme</span>
                                {% else %}
                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                {% endif %}</td>
                             <td>{{ basdecaisse.rmqsoudurecnx }}</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <th name=\"a\">Fixation des boulons des membrures</th>
                            <td>{% if basdecaisse.fixation == \"\" or basdecaisse.fixation == \"OK\" or basdecaisse.fixation == \"ok\"  %}
                                    <span class=\"alert alert-success\">Confirme</span>
                                {% else %}
                                    <span class=\"alert alert-danger\">Non Confirme</span>
                                {% endif %}</td>
                            <td>{{ basdecaisse.rmqfixation }}</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th name=\"a\">Etancheite de la carrosseriere</th>
                            <td>{% if basdecaisse.etancheite == \"\" or basdecaisse.etancheite == \"OK\" or basdecaisse.etancheite == \"ok\"  %}
                                    <span class=\"alert alert-success\">Confirme</span>
                                {% else %}
                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                {% endif %}</td>
                            <td>{{ basdecaisse.rmqetancheite }}</td>
                        </tr>
                        <tr>
                            <th>4</th>
                            <th name=\"a\">Peinture bas de caisse</th>
                               <td>{% if basdecaisse.peinture == \"\" or basdecaisse.peinture == \"OK\" or basdecaisse.peinture == \"ok\"  %}
                                    <span class=\"alert alert-success\">Confirme</span>
                                {% else %}
                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                {% endif %}</td>
                            <td>{{ basdecaisse.rmqpeinture }}</td>
                        </tr>
                        <tr>
                            <th>5</th>
                            <th name=\"a\">Absence depassement Visserie</th>
                               <td>{% if basdecaisse.visserie == \"\" or basdecaisse.visserie == \"OK\" or basdecaisse.visserie == \"ok\"  %}
                                    <span class=\"alert alert-success\">Confirme</span>
                                {% else %}
                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                {% endif %}</td>
                            <td>{{ basdecaisse.rmqvisserie }}</td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <th name=\"a\">Absence de déchet de Carrosserie</th>
                             <td>{% if basdecaisse.carrosserie == \"\" or basdecaisse.carrosserie == \"OK\" or basdecaisse.carrosserie == \"ok\"  %}
                                    <span class=\"alert alert-success\">Confirme</span>
                                {% else %}
                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                {% endif %}</td>
                            <td>{{ basdecaisse.rmqcarrosserie }}</td>
                        </tr>
                        <tr>
                            <th>7</th>
                            <th name=\"a\">Absence de Frottement entre</th>
                            <td>{% if basdecaisse.frottement == \"\" or basdecaisse.frottement == \"OK\" or basdecaisse.frottement == \"ok\"  %}
                                    <span class=\"alert alert-success\">Confirme</span>
                                {% else %}
                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                {% endif %}</td>
                            <td>{{ basdecaisse.rmqfrottement }}</td>
                        </tr>
                        <tr>
                            <th>8</th>
                            <th name=\"a\">Fixation Roue de secours</th>
                               <td>{% if basdecaisse.fixationroue == \"\" or basdecaisse.fixationroue == \"OK\" or basdecaisse.fixationroue == \"ok\"  %}
                                    <span class=\"alert alert-success\">Confirme</span>
                                {% else %}
                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                {% endif %}</td>
                            <td>{{ basdecaisse.rmqfixationroue }}</td>
                        </tr>
                        <tr>
                            <th>9</th>
                            <th name=\"a\">Passage et fixation des cables et flexibles</th>
                            <td>{% if basdecaisse.fixationcable == \"\" or basdecaisse.fixationcable == \"OK\" or basdecaisse.fixationcable == \"ok\"  %}
                                    <span class=\"alert alert-success\">Confirme</span>
                                {% else %}
                                    <span class=\"alert alert-danger\" >Non Confirme</span>
                                {% endif %}</td>
                            <td>{{ basdecaisse.rmqfixationcable }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

          <div id=\"aa\" class=\"col-md-2\">
            <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
               <li class=\"list-group-item\"><a href=\"{{ path('basdecaisse_index') }}\">Back to the list</a></li>
               <li class=\"list-group-item\"><a href=\"{{ path('basdecaisse_edit', { 'id': basdecaisse.id }) }}\">Edit</a></li>
            </ul>
          </div>

        </div>
    </div>
{% endblock %}
", "basdecaisse/show.html.twig", "/var/www/html/Alphabus/app/Resources/views/basdecaisse/show.html.twig");
    }
}
