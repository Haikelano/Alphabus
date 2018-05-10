<?php

/* circuitelectrique/edit.html.twig */
class __TwigTemplate_54448acb1ad1e48aa094946a2312d27d714ef48c9cbf66a2f2c5a028659f3813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "circuitelectrique/edit.html.twig", 1);
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
        $__internal_3969d3fd687872c1ca1923d1e6768b0467d7b41b5aeac8fbe8c02c20b93ca1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3969d3fd687872c1ca1923d1e6768b0467d7b41b5aeac8fbe8c02c20b93ca1dc->enter($__internal_3969d3fd687872c1ca1923d1e6768b0467d7b41b5aeac8fbe8c02c20b93ca1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuitelectrique/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3969d3fd687872c1ca1923d1e6768b0467d7b41b5aeac8fbe8c02c20b93ca1dc->leave($__internal_3969d3fd687872c1ca1923d1e6768b0467d7b41b5aeac8fbe8c02c20b93ca1dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_08f20832bec15f16a9115712190a39c054d4ce0092ca20a18ab50248cf502192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f20832bec15f16a9115712190a39c054d4ce0092ca20a18ab50248cf502192->enter($__internal_08f20832bec15f16a9115712190a39c054d4ce0092ca20a18ab50248cf502192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h2>Circuit Electrique:</h2>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <p><h4><span class=\"badge badge-secondary\">N°Chassis <span class=\"badge badge-warning\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "chassis", array()), "html", null, true);
        echo "</span></span></h4></p>
        </div>
        <div class=\"col-md-4\">
            <p><h4><span class=\"badge badge-secondary\">Date d'ajout <span class=\"badge badge-warning\">";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["circuitelectrique"] ?? $this->getContext($context, "circuitelectrique")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span></span></h4></p>
        </div>
        ";
        // line 13
        if ((($context["client"] ?? $this->getContext($context, "client")) != "")) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["client"] ?? $this->getContext($context, "client")));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 15
                echo "                <div class=\"col-md-4\">
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
            echo "        ";
        }
        // line 20
        echo "    </div>

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
                    <th>21</th>
                    <th>Eclairage extérieur</th>


                 <td>";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "eclairage", array()), 'widget');
        echo "</td>
                    <td>";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqeclairage", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>22</th>
                    <th>Eclairage intérieur</th>



                 <td>";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "eclairageinter", array()), 'widget');
        echo "</td>
                    <td>";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqeclairageinter", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>23</th>
                    <th>Fonctionnement des boutons</th>



                 <td>";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fonctbutton", array()), 'widget');
        echo "</td>
                    <td>";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfonctbutton", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>24</th>
                    <th>Fonctionnement frein d'arret</th>


                 <td>";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "foncfreint", array()), 'widget');
        echo "</td>
                    <td>";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfoncfreint", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>25</th>
                    <th>Button reglage volant</th>


                 <td>";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "buttonregl", array()), 'widget');
        echo "</td>
                    <td>";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqbuttonregl", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>26</th>
                    <th>Button poste receveur</th>


                 <td>";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "buttonposte", array()), 'widget');
        echo "</td>
                    <td>";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqbuttonposte", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>27</th>
                    <th>Controle charge batterie</th>



                 <td>";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "controlecharge", array()), 'widget');
        echo "</td>
                    <td>";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqcontrolecharge", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>28</th>
                    <th>Fonct de l'avertissuer sonore</th>


                 <td>";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fonctavertiseur", array()), 'widget');
        echo "</td>
                    <td>";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfonctavertiseur", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>29</th>
                    <th>Fonctionnement capteur incendie moteur</th>


                 <td>";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fonctcapteur", array()), 'widget');
        echo "</td>
                    <td>";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfonctcapteur", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>30</th>
                    <th>Sonnerie marche arriére</th>


                 <td>";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sonneriemarche", array()), 'widget');
        echo "</td>
                    <td>";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqsonneriemarche", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>31</th>
                    <th>Fonctionnement button arret moteur</th>


                 <td>";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fontbuttonmoteur", array()), 'widget');
        echo "</td>
                    <td>";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfontbuttonmoteur", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th>32</th>
                    <th>Capteur porte moteur</th>


                 <td>";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "capteurportemoteur", array()), 'widget');
        echo "</td>
                    <td>";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqcapteurportemoteur", array()), 'widget');
        echo "</td>
                </tr>
                ";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "chassis", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "

                </tbody>
            </table>
            <div class=\"offset-4\" style=\"margin-top: 40px ; margin-bottom: 100px\">
                <input type=\"submit\" value=\"Modifier\" class=\"btn btn-outline-primary btn-lg\" style=\"margin-right: 50px\"/>
                ";
        // line 142
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                <a value=\"Annuler\" class=\"btn btn-outline-danger btn-lg\"href=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circuitelectrique_index");
        echo "\">Annuler</a>
            </div>
        </div>
        <div id=\"aa\" class=\"col-md-2\">
            <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
                <li class=\"list-group-item\"><a class=\"aler alert-info\" href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circuitelectrique_index");
        echo "\">Retourner à la liste</a></li>

            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_08f20832bec15f16a9115712190a39c054d4ce0092ca20a18ab50248cf502192->leave($__internal_08f20832bec15f16a9115712190a39c054d4ce0092ca20a18ab50248cf502192_prof);

    }

    public function getTemplateName()
    {
        return "circuitelectrique/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 148,  285 => 143,  281 => 142,  272 => 136,  267 => 134,  263 => 133,  253 => 126,  249 => 125,  239 => 118,  235 => 117,  225 => 110,  221 => 109,  211 => 102,  207 => 101,  197 => 94,  193 => 93,  182 => 85,  178 => 84,  168 => 77,  164 => 76,  154 => 69,  150 => 68,  140 => 61,  136 => 60,  125 => 52,  121 => 51,  110 => 43,  106 => 42,  85 => 24,  79 => 20,  76 => 19,  67 => 16,  64 => 15,  59 => 14,  57 => 13,  52 => 11,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
    <h2>Circuit Electrique:</h2>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <p><h4><span class=\"badge badge-secondary\">N°Chassis <span class=\"badge badge-warning\">{{ circuitelectrique.chassis }}</span></span></h4></p>
        </div>
        <div class=\"col-md-4\">
            <p><h4><span class=\"badge badge-secondary\">Date d'ajout <span class=\"badge badge-warning\">{{ circuitelectrique.date|date('Y-m-d H:i:s') }}</span></span></h4></p>
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
                    <th>21</th>
                    <th>Eclairage extérieur</th>


                 <td>{{ form_widget(form.eclairage )}}</td>
                    <td>{{ form_widget(form.rmqeclairage )}}</td>
                </tr>
                <tr>
                    <th>22</th>
                    <th>Eclairage intérieur</th>



                 <td>{{ form_widget(form.eclairageinter )}}</td>
                    <td>{{ form_widget(form.rmqeclairageinter )}}</td>
                </tr>
                <tr>
                    <th>23</th>
                    <th>Fonctionnement des boutons</th>



                 <td>{{ form_widget(form.fonctbutton )}}</td>
                    <td>{{ form_widget(form.rmqfonctbutton )}}</td>
                </tr>
                <tr>
                    <th>24</th>
                    <th>Fonctionnement frein d'arret</th>


                 <td>{{ form_widget(form.foncfreint )}}</td>
                    <td>{{ form_widget(form.rmqfoncfreint )}}</td>
                </tr>
                <tr>
                    <th>25</th>
                    <th>Button reglage volant</th>


                 <td>{{ form_widget(form.buttonregl )}}</td>
                    <td>{{ form_widget(form.rmqbuttonregl )}}</td>
                </tr>
                <tr>
                    <th>26</th>
                    <th>Button poste receveur</th>


                 <td>{{ form_widget(form.buttonposte )}}</td>
                    <td>{{ form_widget(form.rmqbuttonposte )}}</td>
                </tr>
                <tr>
                    <th>27</th>
                    <th>Controle charge batterie</th>



                 <td>{{ form_widget(form.controlecharge )}}</td>
                    <td>{{ form_widget(form.rmqcontrolecharge )}}</td>
                </tr>
                <tr>
                    <th>28</th>
                    <th>Fonct de l'avertissuer sonore</th>


                 <td>{{ form_widget(form.fonctavertiseur )}}</td>
                    <td>{{ form_widget(form.rmqfonctavertiseur )}}</td>
                </tr>
                <tr>
                    <th>29</th>
                    <th>Fonctionnement capteur incendie moteur</th>


                 <td>{{ form_widget(form.fonctcapteur )}}</td>
                    <td>{{ form_widget(form.rmqfonctcapteur )}}</td>
                </tr>
                <tr>
                    <th>30</th>
                    <th>Sonnerie marche arriére</th>


                 <td>{{ form_widget(form.sonneriemarche )}}</td>
                    <td>{{ form_widget(form.rmqsonneriemarche )}}</td>
                </tr>
                <tr>
                    <th>31</th>
                    <th>Fonctionnement button arret moteur</th>


                 <td>{{ form_widget(form.fontbuttonmoteur )}}</td>
                    <td>{{ form_widget(form.rmqfontbuttonmoteur )}}</td>
                </tr>
                <tr>
                    <th>32</th>
                    <th>Capteur porte moteur</th>


                 <td>{{ form_widget(form.capteurportemoteur )}}</td>
                    <td>{{ form_widget(form.rmqcapteurportemoteur )}}</td>
                </tr>
                {{ form_widget(form.chassis, { 'attr' : { 'style':'display:none'} }) }}

                </tbody>
            </table>
            <div class=\"offset-4\" style=\"margin-top: 40px ; margin-bottom: 100px\">
                <input type=\"submit\" value=\"Modifier\" class=\"btn btn-outline-primary btn-lg\" style=\"margin-right: 50px\"/>
                {{ form_end(form) }}
                <a value=\"Annuler\" class=\"btn btn-outline-danger btn-lg\"href=\"{{ path('circuitelectrique_index') }}\">Annuler</a>
            </div>
        </div>
        <div id=\"aa\" class=\"col-md-2\">
            <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
                <li class=\"list-group-item\"><a class=\"aler alert-info\" href=\"{{ path('circuitelectrique_index') }}\">Retourner à la liste</a></li>

            </ul>
        </div>
    </div>
</div>
{% endblock %}
", "circuitelectrique/edit.html.twig", "/var/www/html/Alphabus/app/Resources/views/circuitelectrique/edit.html.twig");
    }
}
