<?php

/* circuitelectrique/show.html.twig */
class __TwigTemplate_d9c8a8742958a3f45f7798d9f6dfb23a924fdb2d80708b1f5c0e92c82f581927 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "circuitelectrique/show.html.twig", 1);
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
        $__internal_7df3031b79d396ef7688777bfb47d7290f387deb503794d62be9059fd1cb8440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df3031b79d396ef7688777bfb47d7290f387deb503794d62be9059fd1cb8440->enter($__internal_7df3031b79d396ef7688777bfb47d7290f387deb503794d62be9059fd1cb8440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuitelectrique/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df3031b79d396ef7688777bfb47d7290f387deb503794d62be9059fd1cb8440->leave($__internal_7df3031b79d396ef7688777bfb47d7290f387deb503794d62be9059fd1cb8440_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4741aef8d073949ec144e6e5adc340ac135b3fc4c75d31deb27d108208144e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4741aef8d073949ec144e6e5adc340ac135b3fc4c75d31deb27d108208144e84->enter($__internal_4741aef8d073949ec144e6e5adc340ac135b3fc4c75d31deb27d108208144e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
    [class*=\"alert\"]{
        border-radius: 6px;
        line-height: 40px;
        text-align: center;
    }
</style>
<div class=\"container\">
    <h2>Circuit Electrique:</h2>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <p><h4><span class=\"badge badge-secondary\">N°Chassis <span class=\"badge badge-warning\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "chassis", array()), "html", null, true);
        echo "</span></span></h4></p>
        </div>
        <div class=\"col-md-4\">
            <p><h4><span class=\"badge badge-secondary\">Date d'ajout <span class=\"badge badge-warning\">";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
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
                 <th>21</th>
                <th>Eclairage extérieur</th>
                    <td>";
        // line 45
        if (((($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "eclairage", array()) == "") || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "eclairage", array()) == "OK")) || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "eclairage", array()) == "ok"))) {
            // line 46
            echo "                            <span class=\"alert alert-success\">Confirme</span>
                        ";
        } else {
            // line 48
            echo "                            <span class=\"alert alert-danger\" >Non Confirme</span>
                        ";
        }
        // line 49
        echo "</td>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "rmqeclairage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>22</th>
                <th>Eclairage intérieur</th>
                <td>";
        // line 55
        if (((($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "eclairageinter", array()) == "") || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "eclairageinter", array()) == "OK")) || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "eclairageinter", array()) == "ok"))) {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "rmqeclairageinter", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>23</th>
                <th>Fonctionnement des boutons</th>
                <td>";
        // line 66
        if (((($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "fonctbutton", array()) == "") || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "fonctbutton", array()) == "OK")) || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "fonctbutton", array()) == "ok"))) {
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
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "rmqfonctbutton", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>24</th>
                <th>Fonctionnement frein d'arret</th>
                <td>";
        // line 77
        if (((($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "foncfreint", array()) == "") || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "foncfreint", array()) == "OK")) || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "foncfreint", array()) == "ok"))) {
            // line 78
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 80
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 81
        echo "</td>
                 <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "rmqfoncfreint", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>25</th>
                <th>Button reglage volant</th>
                <td>";
        // line 87
        if (((($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "buttonregl", array()) == "") || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "buttonregl", array()) == "OK")) || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "buttonregl", array()) == "ok"))) {
            // line 88
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 90
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 91
        echo "</td>
                <td>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "rmqbuttonregl", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>26</th>
                <th>Button poste receveur</th>
                <td>";
        // line 97
        if (((($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "buttonposte", array()) == "") || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "buttonposte", array()) == "OK")) || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "buttonposte", array()) == "ok"))) {
            // line 98
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 100
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 101
        echo "</td>
                <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "rmqbuttonposte", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>27</th>
                <th>Controle charge batterie</th>
                <td>";
        // line 107
        if (((($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "controlecharge", array()) == "") || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "controlecharge", array()) == "OK")) || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "controlecharge", array()) == "ok"))) {
            // line 108
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 110
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 111
        echo "</td>

                <td>";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "rmqcontrolecharge", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>28</th>
                <th>Fonct de l'avertissuer sonore</th>
                <td>";
        // line 118
        if (((($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "fonctavertiseur", array()) == "") || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "fonctavertiseur", array()) == "OK")) || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "fonctavertiseur", array()) == "ok"))) {
            // line 119
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 121
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 122
        echo "</td>
               <td>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "rmqfonctavertiseur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>29</th>
                <th>Fonctionnement capteur incendie moteur</th>
                <td>";
        // line 128
        if (((($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "fonctcapteur", array()) == "") || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "fonctcapteur", array()) == "OK")) || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "fonctcapteur", array()) == "ok"))) {
            // line 129
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 131
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 132
        echo "</td>
                <td>";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "rmqfonctcapteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>30</th>
                <th>Sonnerie marche arriére</th>
                <td>";
        // line 138
        if (((($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "sonneriemarche", array()) == "") || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "sonneriemarche", array()) == "OK")) || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "sonneriemarche", array()) == "ok"))) {
            // line 139
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 141
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 142
        echo "</td>
                <td>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "rmqsonneriemarche", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>31</th>
                <th>Fonctionnement button arret moteur</th>
                <td>";
        // line 148
        if (((($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "fontbuttonmoteur", array()) == "") || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "fontbuttonmoteur", array()) == "OK")) || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "fontbuttonmoteur", array()) == "ok"))) {
            // line 149
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 151
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 152
        echo "</td>
                <td>";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "rmqfontbuttonmoteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>32</th>
                <th>Capteur porte moteur</th>
                <td>";
        // line 158
        if (((($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "capteurportemoteur", array()) == "") || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "capteurportemoteur", array()) == "OK")) || ($this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "capteurportemoteur", array()) == "ok"))) {
            // line 159
            echo "                        <span class=\"alert alert-success\">Confirme</span>
                    ";
        } else {
            // line 161
            echo "                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    ";
        }
        // line 162
        echo "</td>
                <td>";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "rmqcapteurportemoteur", array()), "html", null, true);
        echo "</td>
            </tr>

        </tbody>
    </table>
        </div>


        <div id=\"aa\" class=\"col-md-2\">
            <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
                <li class=\"list-group-item\"><a class=\"alert-info\" href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circuitelectrique_index");
        echo "\">Rétourner à la liste</a></li>
                <li class=\"list-group-item\"><a class=\"alert-info\" href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circuitelectrique_edit", array("id" => $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "id", array()))), "html", null, true);
        echo "\">Modifier</a></li>
            </ul>
        </div>

    </div>
</div>

";
        
        $__internal_4741aef8d073949ec144e6e5adc340ac135b3fc4c75d31deb27d108208144e84->leave($__internal_4741aef8d073949ec144e6e5adc340ac135b3fc4c75d31deb27d108208144e84_prof);

    }

    public function getTemplateName()
    {
        return "circuitelectrique/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 174,  366 => 173,  353 => 163,  350 => 162,  346 => 161,  342 => 159,  340 => 158,  332 => 153,  329 => 152,  325 => 151,  321 => 149,  319 => 148,  311 => 143,  308 => 142,  304 => 141,  300 => 139,  298 => 138,  290 => 133,  287 => 132,  283 => 131,  279 => 129,  277 => 128,  269 => 123,  266 => 122,  262 => 121,  258 => 119,  256 => 118,  248 => 113,  244 => 111,  240 => 110,  236 => 108,  234 => 107,  226 => 102,  223 => 101,  219 => 100,  215 => 98,  213 => 97,  205 => 92,  202 => 91,  198 => 90,  194 => 88,  192 => 87,  184 => 82,  181 => 81,  177 => 80,  173 => 78,  171 => 77,  163 => 72,  159 => 70,  155 => 69,  151 => 67,  149 => 66,  141 => 61,  137 => 59,  133 => 58,  129 => 56,  127 => 55,  119 => 50,  116 => 49,  112 => 48,  108 => 46,  106 => 45,  86 => 27,  83 => 26,  74 => 23,  71 => 22,  66 => 21,  64 => 20,  59 => 18,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h2>Circuit Electrique:</h2>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <p><h4><span class=\"badge badge-secondary\">N°Chassis <span class=\"badge badge-warning\">{{ circuitelectrique.chassis }}</span></span></h4></p>
        </div>
        <div class=\"col-md-4\">
            <p><h4><span class=\"badge badge-secondary\">Date d'ajout <span class=\"badge badge-warning\">{{ circuitelectrique.date|date('Y-m-d H:i:s') }} </span></span></h4></p>
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
                 <th>21</th>
                <th>Eclairage extérieur</th>
                    <td>{% if circuitelectrique.eclairage == \"\" or circuitelectrique.eclairage == \"OK\" or circuitelectrique.eclairage == \"ok\"  %}
                            <span class=\"alert alert-success\">Confirme</span>
                        {% else %}
                            <span class=\"alert alert-danger\" >Non Confirme</span>
                        {% endif %}</td>
                <td>{{ circuitelectrique.rmqeclairage }}</td>
            </tr>
            <tr>
                <th>22</th>
                <th>Eclairage intérieur</th>
                <td>{% if circuitelectrique.eclairageinter == \"\" or circuitelectrique.eclairageinter == \"OK\" or circuitelectrique.eclairageinter == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>

                <td>{{ circuitelectrique.rmqeclairageinter }}</td>
            </tr>
            <tr>
                <th>23</th>
                <th>Fonctionnement des boutons</th>
                <td>{% if circuitelectrique.fonctbutton == \"\" or circuitelectrique.fonctbutton == \"OK\" or circuitelectrique.fonctbutton == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>

                <td>{{ circuitelectrique.rmqfonctbutton }}</td>
            </tr>
            <tr>
                <th>24</th>
                <th>Fonctionnement frein d'arret</th>
                <td>{% if circuitelectrique.foncfreint == \"\" or circuitelectrique.foncfreint == \"OK\" or circuitelectrique.foncfreint == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                 <td>{{ circuitelectrique.rmqfoncfreint }}</td>
            </tr>
            <tr>
                <th>25</th>
                <th>Button reglage volant</th>
                <td>{% if circuitelectrique.buttonregl == \"\" or circuitelectrique.buttonregl == \"OK\" or circuitelectrique.buttonregl == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ circuitelectrique.rmqbuttonregl }}</td>
            </tr>
            <tr>
                <th>26</th>
                <th>Button poste receveur</th>
                <td>{% if circuitelectrique.buttonposte == \"\" or circuitelectrique.buttonposte == \"OK\" or circuitelectrique.buttonposte == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ circuitelectrique.rmqbuttonposte }}</td>
            </tr>
            <tr>
                <th>27</th>
                <th>Controle charge batterie</th>
                <td>{% if circuitelectrique.controlecharge == \"\" or circuitelectrique.controlecharge == \"OK\" or circuitelectrique.controlecharge == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>

                <td>{{ circuitelectrique.rmqcontrolecharge }}</td>
            </tr>
            <tr>
                <th>28</th>
                <th>Fonct de l'avertissuer sonore</th>
                <td>{% if circuitelectrique.fonctavertiseur == \"\" or circuitelectrique.fonctavertiseur == \"OK\" or circuitelectrique.fonctavertiseur == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
               <td>{{ circuitelectrique.rmqfonctavertiseur }}</td>
            </tr>
            <tr>
                <th>29</th>
                <th>Fonctionnement capteur incendie moteur</th>
                <td>{% if circuitelectrique.fonctcapteur == \"\" or circuitelectrique.fonctcapteur == \"OK\" or circuitelectrique.fonctcapteur == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ circuitelectrique.rmqfonctcapteur }}</td>
            </tr>
            <tr>
                <th>30</th>
                <th>Sonnerie marche arriére</th>
                <td>{% if circuitelectrique.sonneriemarche == \"\" or circuitelectrique.sonneriemarche == \"OK\" or circuitelectrique.sonneriemarche == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ circuitelectrique.rmqsonneriemarche }}</td>
            </tr>
            <tr>
                <th>31</th>
                <th>Fonctionnement button arret moteur</th>
                <td>{% if circuitelectrique.fontbuttonmoteur == \"\" or circuitelectrique.fontbuttonmoteur == \"OK\" or circuitelectrique.fontbuttonmoteur == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ circuitelectrique.rmqfontbuttonmoteur }}</td>
            </tr>
            <tr>
                <th>32</th>
                <th>Capteur porte moteur</th>
                <td>{% if circuitelectrique.capteurportemoteur == \"\" or circuitelectrique.capteurportemoteur == \"OK\" or circuitelectrique.capteurportemoteur == \"ok\"  %}
                        <span class=\"alert alert-success\">Confirme</span>
                    {% else %}
                        <span class=\"alert alert-danger\" >Non Confirme</span>
                    {% endif %}</td>
                <td>{{ circuitelectrique.rmqcapteurportemoteur }}</td>
            </tr>

        </tbody>
    </table>
        </div>


        <div id=\"aa\" class=\"col-md-2\">
            <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
                <li class=\"list-group-item\"><a class=\"alert-info\" href=\"{{ path('circuitelectrique_index') }}\">Rétourner à la liste</a></li>
                <li class=\"list-group-item\"><a class=\"alert-info\" href=\"{{ path('circuitelectrique_edit', { 'id': circuitelectrique.id }) }}\">Modifier</a></li>
            </ul>
        </div>

    </div>
</div>

{% endblock %}
", "circuitelectrique/show.html.twig", "/var/www/html/Alphabus/app/Resources/views/circuitelectrique/show.html.twig");
    }
}
