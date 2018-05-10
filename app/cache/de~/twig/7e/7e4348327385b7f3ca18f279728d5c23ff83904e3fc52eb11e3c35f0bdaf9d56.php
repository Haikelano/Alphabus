<?php

/* basdecaisse/new.html.twig */
class __TwigTemplate_ed58b6e58fb91bf2e6a7a0885d2d7c4a7bd7330d62d4d9a95f6313d3a037f1f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "basdecaisse/new.html.twig", 1);
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
        $__internal_04e598cc77fc6fc5ea27410e3bdcda8c870afc1c9a546bb68252171201c47f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e598cc77fc6fc5ea27410e3bdcda8c870afc1c9a546bb68252171201c47f41->enter($__internal_04e598cc77fc6fc5ea27410e3bdcda8c870afc1c9a546bb68252171201c47f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basdecaisse/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04e598cc77fc6fc5ea27410e3bdcda8c870afc1c9a546bb68252171201c47f41->leave($__internal_04e598cc77fc6fc5ea27410e3bdcda8c870afc1c9a546bb68252171201c47f41_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cb52ec3cc54914cc922bb9fd42a982068d55ea779332fce6d2537adb84b20af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb52ec3cc54914cc922bb9fd42a982068d55ea779332fce6d2537adb84b20af->enter($__internal_9cb52ec3cc54914cc922bb9fd42a982068d55ea779332fce6d2537adb84b20af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <h1>Basdecaisse creation</h1>
                <div class=\"row\">
            <div class=\"col-md-10\">
                 ";
        // line 9
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
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "soudurecnx", array()), 'widget');
        echo "</td>
                        <td >";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqsoudurecnx", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th name=\"a\">Fixation des boulons des membrures</th>

                        <td>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fixation", array()), 'widget');
        echo "</td>
                        <td>";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfixation", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th name=\"a\">Etancheite de la carrosseriere</th>

                        <td>";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etancheite", array()), 'widget');
        echo "</td>
                        <td>";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqetancheite", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th name=\"a\">Peinture bas de caisse</th>


                        <td>";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "peinture", array()), 'widget');
        echo "</td>
                        <td>";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqpeinture", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>5</th>
                        <th name=\"a\">Absence depassement Visserie</th>
                        <td>";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "visserie", array()), 'widget');
        echo "</td>
                        <td>";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqvisserie", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>6</th>
                        <th name=\"a\">Absence de déchet de Carrosserie</th>
                        <td>";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "carrosserie", array()), 'widget');
        echo "</td>
                        <td>";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqcarrosserie", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>7</th>
                        <th name=\"a\">Absence de Frottement entre</th>
                        <td>";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "frottement", array()), 'widget');
        echo "</td>
                        <td>";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfrottement", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>8</th>
                        <th name=\"a\">Fixation Roue de secours</th>
                        <td>";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fixationroue", array()), 'widget');
        echo "</td>
                        <td>";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfixationroue", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>9</th>
                        <th name=\"a\">Passage et fixation des cables et flexibles</th>
                        <td>";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fixationcable", array()), 'widget');
        echo "</td>
                        <td>";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rmqfixationcable", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <th>***</th>
                        <th name=\"a\">Affecter à chassis</th>

                        <td class=\"alert-info\">";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "chassis", array()), 'widget');
        echo "</td>
                    </tr>


                    </tbody>
                </table>


                </table>
                <div class=\"offset-4\" style=\"margin-top: 40px ; margin-bottom: 100px\">
                <input type=\"submit\" value=\"Create\" class=\"btn btn-outline-primary btn-lg\" style=\"margin-right: 70px\"/>
                <input type=\"reset\" value=\"Annuler\" class=\"btn btn-outline-danger btn-lg\"/>
                </div>
                ";
        // line 95
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>



             <div id=\"aa\" class=\"col-md-2\">
                 <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
                     <li class=\"list-group-item\"><a class=\"badge badge-info \" href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basdecaisse_index");
        echo "\">Back to the list</a></li>

                 </ul>
             </div>
        </div>
</div>
";
        
        $__internal_9cb52ec3cc54914cc922bb9fd42a982068d55ea779332fce6d2537adb84b20af->leave($__internal_9cb52ec3cc54914cc922bb9fd42a982068d55ea779332fce6d2537adb84b20af_prof);

    }

    public function getTemplateName()
    {
        return "basdecaisse/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 102,  193 => 95,  177 => 82,  168 => 76,  164 => 75,  156 => 70,  152 => 69,  144 => 64,  140 => 63,  132 => 58,  128 => 57,  120 => 52,  116 => 51,  108 => 46,  104 => 45,  94 => 38,  90 => 37,  81 => 31,  77 => 30,  68 => 24,  64 => 23,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
        <h1>Basdecaisse creation</h1>
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
                    <tr>
                        <th>***</th>
                        <th name=\"a\">Affecter à chassis</th>

                        <td class=\"alert-info\">{{ form_widget(form.chassis )}}</td>
                    </tr>


                    </tbody>
                </table>


                </table>
                <div class=\"offset-4\" style=\"margin-top: 40px ; margin-bottom: 100px\">
                <input type=\"submit\" value=\"Create\" class=\"btn btn-outline-primary btn-lg\" style=\"margin-right: 70px\"/>
                <input type=\"reset\" value=\"Annuler\" class=\"btn btn-outline-danger btn-lg\"/>
                </div>
                {{ form_end(form) }}
            </div>



             <div id=\"aa\" class=\"col-md-2\">
                 <ul class=\"list-group\" style=\"position: fixed; background-repeat: no-repeat \">
                     <li class=\"list-group-item\"><a class=\"badge badge-info \" href=\"{{ path('basdecaisse_index') }}\">Back to the list</a></li>

                 </ul>
             </div>
        </div>
</div>
{% endblock %}
", "basdecaisse/new.html.twig", "/var/www/html/Alphabus/app/Resources/views/basdecaisse/new.html.twig");
    }
}
