<?php

/* accesoirexterieur/edit.html.twig */
class __TwigTemplate_05b51d591ac6c236b58141bcbe7896b506b7cf59c167a083a0bcaf14e91d7484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "accesoirexterieur/edit.html.twig", 1);
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
        $__internal_a4e8d25e1756d3d725f3a6766fb83ade6dc607cd038694d69e0d4245eb6486ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e8d25e1756d3d725f3a6766fb83ade6dc607cd038694d69e0d4245eb6486ef->enter($__internal_a4e8d25e1756d3d725f3a6766fb83ade6dc607cd038694d69e0d4245eb6486ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accesoirexterieur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4e8d25e1756d3d725f3a6766fb83ade6dc607cd038694d69e0d4245eb6486ef->leave($__internal_a4e8d25e1756d3d725f3a6766fb83ade6dc607cd038694d69e0d4245eb6486ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cf018ef69c87001ded2538fba46ca7ec6651d2ae8761ec76c95b3619bfe4282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf018ef69c87001ded2538fba46ca7ec6651d2ae8761ec76c95b3619bfe4282->enter($__internal_2cf018ef69c87001ded2538fba46ca7ec6651d2ae8761ec76c95b3619bfe4282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h2>Accessoir Exterier :</h2>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <p><h4><span class=\"badge badge-secondary\">N°Chassis <span class=\"badge badge-warning\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "chassis", array()), "html", null, true);
        echo "</span></span></h4></p>
            </div>
            <div class=\"col-md-4\">
                <p><h4><span class=\"badge badge-secondary\">Date d'ajout <span class=\"badge badge-warning\">";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["accesoirexterieur"] ?? $this->getContext($context, "accesoirexterieur")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span></span></h4></p>
            </div>
            ";
        // line 13
        if ((($context["client"] ?? $this->getContext($context, "client")) != "")) {
            // line 14
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["client"] ?? $this->getContext($context, "client")));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 15
                echo "                    <div class=\"col-md-4\">
                        <p><h4><span class=\"badge badge-secondary\">Affecter à <span class=\"badge badge-warning\">";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["id"], "nclients", array()), "html", null, true);
                echo "</span></span></h4></p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            ";
        }
        // line 20
        echo "        </div>

        <div class=\"row\">
            <div class=\"col-lg-10\">
                ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <table class=\"table  table-striped\" style=\"margin-top: 40px\">
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
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isolation", array()), 'widget');
        echo "</td>
                        <td>";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqisolation", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>11</th>
                        <th>Finition décoration & sérigraphi</th>

                        <td>";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "finition", array()), 'widget');
        echo "</td>
                        <td>";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfinition", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>12</th>
                        <th>Reglage Rétroviseur</th>
                        <td>";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "retroviseur", array()), 'widget');
        echo "</td>
                        <td>";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqretroviseur", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>14</th>
                        <th>Fixation parachoc</th>
                        <td>";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fixationpara", array()), 'widget');
        echo "</td>
                        <td>";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfixationpara", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>15</th>
                        <th>Etat du Parachoc</th>
                        <td>";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etatparachoc", array()), 'widget');
        echo "</td>
                        <td>";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqetatparachoc", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>16</th>
                        <th>Cache feu de route</th>
                        <td>";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cachefeu", array()), 'widget');
        echo "</td>
                        <td>";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqcachefeu", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>17</th>
                        <th>Grille des bouches d'aeration moteur</th>
                        <td>";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grillebouches", array()), 'widget');
        echo "</td>
                        <td>";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqgrillebouches", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>18</th>
                        <th>Baguette</th>
                        <td>";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "baguette", array()), 'widget');
        echo "</td>
                        <td>";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqbaguette", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>19</th>
                        <th>Porte réservoir</th>
                        <td>";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "porte", array()), 'widget');
        echo "</td>
                        <td>";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqporte", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>20</th>
                        <th>Essuie glaces & lave glace</th>
                        <td>";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "essui", array()), 'widget');
        echo "</td>
                        <td>";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqessui", array()), 'widget');
        echo "</td>
                    </tr>
                    ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "chassis", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
                    </tbody>
                </table>


                <div class=\"offset-4\" style=\"margin-top: 40px ; margin-bottom: 100px\">
                    <input type=\"submit\" value=\"Modifier\" class=\"btn btn-outline-primary btn-lg\" style=\"margin-right: 50px\"/>
                    ";
        // line 104
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    <a value=\"Annuler\" class=\"btn btn-outline-danger btn-lg\"href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accesoirexterieur_index");
        echo "\">Annuler</a>

                </div>
            </div>

            <div id=\"aa\" class=\"col-md-2\">
                <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
                    <li class=\"list-group-item\"><a class=\"aler alert-info\" href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accesoirexterieur_index");
        echo "\">Retourner à la liste</a></li>

                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_2cf018ef69c87001ded2538fba46ca7ec6651d2ae8761ec76c95b3619bfe4282->leave($__internal_2cf018ef69c87001ded2538fba46ca7ec6651d2ae8761ec76c95b3619bfe4282_prof);

    }

    public function getTemplateName()
    {
        return "accesoirexterieur/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 112,  235 => 105,  231 => 104,  221 => 97,  216 => 95,  212 => 94,  204 => 89,  200 => 88,  192 => 83,  188 => 82,  180 => 77,  176 => 76,  168 => 71,  164 => 70,  156 => 65,  152 => 64,  144 => 59,  140 => 58,  132 => 53,  128 => 52,  120 => 47,  116 => 46,  107 => 40,  103 => 39,  85 => 24,  79 => 20,  76 => 19,  67 => 16,  64 => 15,  59 => 14,  57 => 13,  52 => 11,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
        <h2>Accessoir Exterier :</h2>
        <div class=\"row\">
            <div class=\"col-md-4\">
                <p><h4><span class=\"badge badge-secondary\">N°Chassis <span class=\"badge badge-warning\">{{ accesoirexterieur.chassis }}</span></span></h4></p>
            </div>
            <div class=\"col-md-4\">
                <p><h4><span class=\"badge badge-secondary\">Date d'ajout <span class=\"badge badge-warning\">{{ accesoirexterieur.date|date('Y-m-d H:i:s') }}</span></span></h4></p>
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
                {{ form_start(form) }}
                <table class=\"table  table-striped\" style=\"margin-top: 40px\">
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
                        <td>{{ form_widget(form.isolation )}}</td>
                        <td>{{ form_widget(form.rmqisolation )}}</td>
                    </tr>
                    <tr>
                        <th>11</th>
                        <th>Finition décoration & sérigraphi</th>

                        <td>{{ form_widget(form.finition )}}</td>
                        <td>{{ form_widget(form.rmqfinition )}}</td>
                    </tr>
                    <tr>
                        <th>12</th>
                        <th>Reglage Rétroviseur</th>
                        <td>{{ form_widget(form.retroviseur )}}</td>
                        <td>{{ form_widget(form.rmqretroviseur )}}</td>
                    </tr>
                    <tr>
                        <th>14</th>
                        <th>Fixation parachoc</th>
                        <td>{{ form_widget(form.fixationpara )}}</td>
                        <td>{{ form_widget(form.rmqfixationpara )}}</td>
                    </tr>
                    <tr>
                        <th>15</th>
                        <th>Etat du Parachoc</th>
                        <td>{{ form_widget(form.etatparachoc )}}</td>
                        <td>{{ form_widget(form.rmqetatparachoc )}}</td>
                    </tr>
                    <tr>
                        <th>16</th>
                        <th>Cache feu de route</th>
                        <td>{{ form_widget(form.cachefeu )}}</td>
                        <td>{{ form_widget(form.rmqcachefeu )}}</td>
                    </tr>
                    <tr>
                        <th>17</th>
                        <th>Grille des bouches d'aeration moteur</th>
                        <td>{{ form_widget(form.grillebouches )}}</td>
                        <td>{{ form_widget(form.rmqgrillebouches )}}</td>
                    </tr>
                    <tr>
                        <th>18</th>
                        <th>Baguette</th>
                        <td>{{ form_widget(form.baguette )}}</td>
                        <td>{{ form_widget(form.rmqbaguette )}}</td>
                    </tr>
                    <tr>
                        <th>19</th>
                        <th>Porte réservoir</th>
                        <td>{{ form_widget(form.porte )}}</td>
                        <td>{{ form_widget(form.rmqporte )}}</td>
                    </tr>
                    <tr>
                        <th>20</th>
                        <th>Essuie glaces & lave glace</th>
                        <td>{{ form_widget(form.essui )}}</td>
                        <td>{{ form_widget(form.rmqessui )}}</td>
                    </tr>
                    {{ form_widget(form.chassis, { 'attr' : { 'style':'display:none'} }) }}
                    </tbody>
                </table>


                <div class=\"offset-4\" style=\"margin-top: 40px ; margin-bottom: 100px\">
                    <input type=\"submit\" value=\"Modifier\" class=\"btn btn-outline-primary btn-lg\" style=\"margin-right: 50px\"/>
                    {{ form_end(form) }}
                    <a value=\"Annuler\" class=\"btn btn-outline-danger btn-lg\"href=\"{{ path('accesoirexterieur_index') }}\">Annuler</a>

                </div>
            </div>

            <div id=\"aa\" class=\"col-md-2\">
                <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
                    <li class=\"list-group-item\"><a class=\"aler alert-info\" href=\"{{ path('accesoirexterieur_index') }}\">Retourner à la liste</a></li>

                </ul>
            </div>
        </div>
    </div>
{% endblock %}
", "accesoirexterieur/edit.html.twig", "/var/www/html/Alphabus/app/Resources/views/accesoirexterieur/edit.html.twig");
    }
}
