<?php

/* basdecaisse/edit.html.twig */
class __TwigTemplate_d1e08878df6cf23333ffcd512f5f9950fb554b15fb0321985363e560ce2a0f92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "basdecaisse/edit.html.twig", 1);
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
        $__internal_f44589e553cc79d123afef4ca2d552161b806a26a1fcd4f54bcec4b405186ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f44589e553cc79d123afef4ca2d552161b806a26a1fcd4f54bcec4b405186ef3->enter($__internal_f44589e553cc79d123afef4ca2d552161b806a26a1fcd4f54bcec4b405186ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basdecaisse/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f44589e553cc79d123afef4ca2d552161b806a26a1fcd4f54bcec4b405186ef3->leave($__internal_f44589e553cc79d123afef4ca2d552161b806a26a1fcd4f54bcec4b405186ef3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b8f6e259b6d42403b17eb533c3b039ff3c8f1be228109afcc92f4db8489706a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8f6e259b6d42403b17eb533c3b039ff3c8f1be228109afcc92f4db8489706a->enter($__internal_2b8f6e259b6d42403b17eb533c3b039ff3c8f1be228109afcc92f4db8489706a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">

    <h2 style=\"margin-top: 10px\">Modifier le service de \"Bas de case \":</h2>
        <div class=\"row\">
             <div class=\"col-md-4\">
                 <p><h4><span class=\"badge badge-secondary\">N°Chassis <span class=\"badge badge-warning\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "chassis", array()), "html", null, true);
        echo "</span></span></h4></p>
             </div>
             <div class=\"col-md-4\">
                 <p><h4><span class=\"badge badge-secondary\">Date d'ajout <span class=\"badge badge-warning\">";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["basdecaisse"] ?? $this->getContext($context, "basdecaisse")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo " </span></span></h4></p>
             </div>
             ";
        // line 14
        if ((($context["client"] ?? $this->getContext($context, "client")) != "")) {
            // line 15
            echo "                 ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["client"] ?? $this->getContext($context, "client")));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 16
                echo "                     <div class=\"col-md-4\">
                         <p><h4><span class=\"badge badge-secondary\">Affecter à <span class=\"badge badge-warning\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["id"], "nclients", array()), "html", null, true);
                echo "</span></span></h4></p>
                     </div>
                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "             ";
        }
        // line 21
        echo "        </div>
    <div class=\"row\">
        <div class=\"col-md-10\">
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
                    <th>1</th>
                    <th name=\"a\">Soudure des connections</th>
                    <td>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "soudurecnx", array()), 'widget');
        echo "</td>
                    <td >";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqsoudurecnx", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>2</th>
                    <th name=\"a\">Fixation des boulons des membrures</th>

                    <td>";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fixation", array()), 'widget');
        echo "</td>
                    <td>";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfixation", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>3</th>
                    <th name=\"a\">Etancheite de la carrosseriere</th>

                    <td>";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etancheite", array()), 'widget');
        echo "</td>
                    <td>";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqetancheite", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>4</th>
                    <th name=\"a\">Peinture bas de caisse</th>


                    <td>";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "peinture", array()), 'widget');
        echo "</td>
                    <td>";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqpeinture", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>5</th>
                    <th name=\"a\">Absence depassement Visserie</th>
                    <td>";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "visserie", array()), 'widget');
        echo "</td>
                    <td>";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqvisserie", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>6</th>
                    <th name=\"a\">Absence de déchet de Carrosserie</th>
                    <td>";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "carrosserie", array()), 'widget');
        echo "</td>
                    <td>";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqcarrosserie", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>7</th>
                    <th name=\"a\">Absence de Frottement entre</th>
                    <td>";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "frottement", array()), 'widget');
        echo "</td>
                    <td>";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfrottement", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>8</th>
                    <th name=\"a\">Fixation Roue de secours</th>
                    <td>";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fixationroue", array()), 'widget');
        echo "</td>
                    <td>";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfixationroue", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>9</th>
                    <th name=\"a\">Passage et fixation des cables et flexibles</th>
                    <td>";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fixationcable", array()), 'widget');
        echo "</td>
                    <td>";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfixationcable", array()), 'widget');
        echo "</td>
                </tr>

                    ";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "chassis", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "

                </tbody>

            </table>


                 <div class=\"offset-4\" style=\"margin-top: 40px ; margin-bottom: 100px\">
                     <input type=\"submit\" value=\"Modifier\" class=\"btn btn-outline-primary btn-lg\" style=\"margin-right: 50px\"/>
                     ";
        // line 103
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                      <a value=\"Annuler\" class=\"btn btn-outline-danger btn-lg\"href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basdecaisse_index");
        echo "\">Annuler</a>

                      </div>
                   </div>

                <div id=\"aa\" class=\"col-md-2\">
                    <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
                        <li class=\"list-group-item\"><a class=\"aler alert-info\" href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basdecaisse_index");
        echo "\">Retourner à la liste</a></li>

                    </ul>
                </div>
         </div>
    </div>

";
        
        $__internal_2b8f6e259b6d42403b17eb533c3b039ff3c8f1be228109afcc92f4db8489706a->leave($__internal_2b8f6e259b6d42403b17eb533c3b039ff3c8f1be228109afcc92f4db8489706a_prof);

    }

    public function getTemplateName()
    {
        return "basdecaisse/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 111,  228 => 104,  224 => 103,  212 => 94,  206 => 91,  202 => 90,  194 => 85,  190 => 84,  182 => 79,  178 => 78,  170 => 73,  166 => 72,  158 => 67,  154 => 66,  146 => 61,  142 => 60,  132 => 53,  128 => 52,  119 => 46,  115 => 45,  106 => 39,  102 => 38,  85 => 24,  80 => 21,  77 => 20,  68 => 17,  65 => 16,  60 => 15,  58 => 14,  53 => 12,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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

    <h2 style=\"margin-top: 10px\">Modifier le service de \"Bas de case \":</h2>
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
        <div class=\"col-md-10\">
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
                    <th>1</th>
                    <th name=\"a\">Soudure des connections</th>
                    <td>{{ form_widget(form.soudurecnx )}}</td>
                    <td >{{ form_widget(form.rmqsoudurecnx )}}</td>
                </tr>
                <tr>
                    <th>2</th>
                    <th name=\"a\">Fixation des boulons des membrures</th>

                    <td>{{ form_widget(form.fixation )}}</td>
                    <td>{{ form_widget(form.rmqfixation )}}</td>
                </tr>
                <tr>
                    <th>3</th>
                    <th name=\"a\">Etancheite de la carrosseriere</th>

                    <td>{{ form_widget(form.etancheite )}}</td>
                    <td>{{ form_widget(form.rmqetancheite )}}</td>
                </tr>
                <tr>
                    <th>4</th>
                    <th name=\"a\">Peinture bas de caisse</th>


                    <td>{{ form_widget(form.peinture )}}</td>
                    <td>{{ form_widget(form.rmqpeinture )}}</td>
                </tr>
                <tr>
                    <th>5</th>
                    <th name=\"a\">Absence depassement Visserie</th>
                    <td>{{ form_widget(form.visserie )}}</td>
                    <td>{{ form_widget(form.rmqvisserie )}}</td>
                </tr>
                <tr>
                    <th>6</th>
                    <th name=\"a\">Absence de déchet de Carrosserie</th>
                    <td>{{ form_widget(form.carrosserie )}}</td>
                    <td>{{ form_widget(form.rmqcarrosserie )}}</td>
                </tr>
                <tr>
                    <th>7</th>
                    <th name=\"a\">Absence de Frottement entre</th>
                    <td>{{ form_widget(form.frottement) }}</td>
                    <td>{{ form_widget(form.rmqfrottement) }}</td>
                </tr>
                <tr>
                    <th>8</th>
                    <th name=\"a\">Fixation Roue de secours</th>
                    <td>{{ form_widget(form.fixationroue) }}</td>
                    <td>{{ form_widget(form.rmqfixationroue )}}</td>
                </tr>
                <tr>
                    <th>9</th>
                    <th name=\"a\">Passage et fixation des cables et flexibles</th>
                    <td>{{ form_widget(form.fixationcable )}}</td>
                    <td>{{ form_widget(form.rmqfixationcable )}}</td>
                </tr>

                    {{ form_widget(form.chassis, { 'attr' : { 'style':'display:none'} }) }}

                </tbody>

            </table>


                 <div class=\"offset-4\" style=\"margin-top: 40px ; margin-bottom: 100px\">
                     <input type=\"submit\" value=\"Modifier\" class=\"btn btn-outline-primary btn-lg\" style=\"margin-right: 50px\"/>
                     {{ form_end(form) }}
                      <a value=\"Annuler\" class=\"btn btn-outline-danger btn-lg\"href=\"{{ path('basdecaisse_index') }}\">Annuler</a>

                      </div>
                   </div>

                <div id=\"aa\" class=\"col-md-2\">
                    <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
                        <li class=\"list-group-item\"><a class=\"aler alert-info\" href=\"{{ path('basdecaisse_index') }}\">Retourner à la liste</a></li>

                    </ul>
                </div>
         </div>
    </div>

{% endblock %}
", "basdecaisse/edit.html.twig", "/var/www/html/Alphabus/app/Resources/views/basdecaisse/edit.html.twig");
    }
}
