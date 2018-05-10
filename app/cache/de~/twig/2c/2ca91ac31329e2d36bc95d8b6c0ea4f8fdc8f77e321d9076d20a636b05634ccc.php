<?php

/* receptionchassis/edit.html.twig */
class __TwigTemplate_71c79c718da29a699da91451c1fb0c7f1de41366dc1f9942f4670b6b5e686d67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "receptionchassis/edit.html.twig", 1);
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
        $__internal_254a6084d8b9c316bac9e95b8af6794c0d10436e9505e1bdc949c5bdfdda0772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254a6084d8b9c316bac9e95b8af6794c0d10436e9505e1bdc949c5bdfdda0772->enter($__internal_254a6084d8b9c316bac9e95b8af6794c0d10436e9505e1bdc949c5bdfdda0772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "receptionchassis/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254a6084d8b9c316bac9e95b8af6794c0d10436e9505e1bdc949c5bdfdda0772->leave($__internal_254a6084d8b9c316bac9e95b8af6794c0d10436e9505e1bdc949c5bdfdda0772_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db03b3c074a535da38103778c962893abb18cdbb04ffd6926e7059f2b8a3399a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db03b3c074a535da38103778c962893abb18cdbb04ffd6926e7059f2b8a3399a->enter($__internal_db03b3c074a535da38103778c962893abb18cdbb04ffd6926e7059f2b8a3399a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10\">

                <p> <h2>Le N° Chassis à modifier est :<strong>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "nchassis", array()), "html", null, true);
        echo "</strong> </h2></p>





            </div>
        </div>
    </div>

    <form action=\"\" method=\"post\" ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["f"] ?? $this->getContext($context, "f")), 'enctype');
        echo " >
        <div class =\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                                <table class=\"table  table-striped\">
                                    <tbody>
                                    <thead class=\"table-dark\">
                                    <tr>

                                        <th scope=\"col\" class=\"col-md-1\">N°</th>
                                        <th scope=\"col\" class=\"col-md-1\"> Contole</th>
                                        <th scope=\"col\" class=\"col-sm-1\">Valide</th>
                                        <th scope=\"col\" class=\"col-md-5\">Remarque</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <th>***</th>
                                        <th>Generalchassis</th>
                                        <td>";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "generalchassis", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqgeneralchassis", array()), 'widget');
        echo "</td>


                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Huilemoreur</th>
                                        <td>";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "huilemoreur", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqhuilemoreur", array()), 'widget');
        echo "</td>

                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Boitevitesse</th>
                                        <td>";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "boitevitesse", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqboitevitesse", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Huiledirection</th>
                                        <td>";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "huiledirection", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqhuiledirection", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Liquiderefroidisement</th>
                                        <td>";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "liquiderefroidisement", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqliquiderefroidisement", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Ventilateur</th>
                                        <td>";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "ventilateur", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqventilateur", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Embrayage</th>
                                        <td>";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "embrayage", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqembrayage", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Huilefuitechassis</th>
                                        <td>";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "huilefuitechassis", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqhuilefuitechassis", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Fuitedaire</th>
                                        <td>";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "fuitedaire", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqfuitedaire", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Rouesecours</th>
                                        <td>";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rouesecours", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqrouesecours", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Filtresecondaire</th>
                                        <td>";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "filtresecondaire", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqfiltresecondaire", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Centraleelectrique</th>
                                        <td>";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "centraleelectrique", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqcentraleelectrique", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Tableaubord</th>
                                        <td>";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "tableaubord", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqtableaubord", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Exthuiledirection</th>
                                        <td>";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "exthuiledirection", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqexthuiledirection", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Cledouble</th>
                                        <td>";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "cledouble", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqcledouble", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Docchassis</th>
                                        <td>";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "docchassis", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqdocchassis", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Codeereur</th>
                                        <td>";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "codeereur", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqcodeereur", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Kitaccesoires</th>
                                        <td>";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "kitaccesoires", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqkitaccesoires", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr class=\"hide\">
                                        <th>***</th>
                                        <th class=\"hide\">Remorquage</th>
                                        <td>";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "remorquage", array()), 'widget', array("attr" => array("class" => "hidden")));
        echo "</td>
                                        <td>";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqremorquage", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Protectionchassis</th>
                                        <td>";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "protectionchassis", array()), 'widget');
        echo "</td>
                                        <td>";
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "rmqprotectionchassis", array()), 'widget');
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>l'etat terminer ou non</th>
                                        <td>";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "etat", array()), 'widget');
        echo "</td>
                                        <td></td>
                                    </tr>

                                    </tbody>

                                </table>




                    <div class =\"form-group\">
                              <button type=\"submit\" Class =\"btn btn-primary\">
                                <span class =\"glyphicon-plus\"/>Valider
                            </button>

                    </div>
                </div>

                   <!--     a guache en va initialiser le petit affiche -->
                    <div class=\"col-lg-3\">

                        <h1>Validation</h1>
                        <table class=\"table\">
                            <tr>
                                <th>Mecanicien</th>
                                <th>Contqualite</th>
                                <th>Responsablequalite</th>
                            </tr>

                            <tr>
                                <td>";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "mecanicien", array()), "html", null, true);
        echo "</td>
                                <td>";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "contqualite", array()), "html", null, true);
        echo "</td>
                                <td>";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receptionchassi"] ?? $this->getContext($context, "receptionchassi")), "responsablequalite", array()), "html", null, true);
        echo "</td>
                            </tr>
                        </table>

                        <h4 style=\"padding-top: 50px\">
                            <a href=\"";
        // line 200
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_index");
        echo "\">Back to the list</a>

                        </h4>
                     </div>
                </div>
            </div>
        </div>
        <div class=\"hidden\">
            ";
        // line 208
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "nchassis", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
            ";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "mecanicien", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
            ";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "remarques", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
            ";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "contqualite", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
            ";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["f"] ?? $this->getContext($context, "f")), "responsablequalite", array()), 'widget', array("attr" => array("style" => "display:none")));
        echo "
        </div>
    ";
        // line 214
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["f"] ?? $this->getContext($context, "f")), 'form_end');
        echo "
    </form>
    <ul>
        <li>

        </li>
    </ul>
        <!--
            <li>
            ";
        // line 223
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 225
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>


        -->
";
        
        $__internal_db03b3c074a535da38103778c962893abb18cdbb04ffd6926e7059f2b8a3399a->leave($__internal_db03b3c074a535da38103778c962893abb18cdbb04ffd6926e7059f2b8a3399a_prof);

    }

    public function getTemplateName()
    {
        return "receptionchassis/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 225,  420 => 223,  408 => 214,  403 => 212,  399 => 211,  395 => 210,  391 => 209,  387 => 208,  376 => 200,  368 => 195,  364 => 194,  360 => 193,  326 => 162,  318 => 157,  314 => 156,  306 => 151,  302 => 150,  294 => 145,  290 => 144,  282 => 139,  278 => 138,  270 => 133,  266 => 132,  258 => 127,  254 => 126,  246 => 121,  242 => 120,  234 => 115,  230 => 114,  222 => 109,  218 => 108,  210 => 103,  206 => 102,  198 => 97,  194 => 96,  186 => 91,  182 => 90,  174 => 85,  170 => 84,  162 => 79,  158 => 78,  150 => 73,  146 => 72,  138 => 67,  134 => 66,  126 => 61,  122 => 60,  114 => 55,  110 => 54,  101 => 48,  97 => 47,  87 => 40,  83 => 39,  62 => 21,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
        <div class=\"row\">
            <div class=\"col-lg-10\">

                <p> <h2>Le N° Chassis à modifier est :<strong>{{ receptionchassi.nchassis }}</strong> </h2></p>





            </div>
        </div>
    </div>

    <form action=\"\" method=\"post\" {{ form_enctype(f) }} >
        <div class =\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                                <table class=\"table  table-striped\">
                                    <tbody>
                                    <thead class=\"table-dark\">
                                    <tr>

                                        <th scope=\"col\" class=\"col-md-1\">N°</th>
                                        <th scope=\"col\" class=\"col-md-1\"> Contole</th>
                                        <th scope=\"col\" class=\"col-sm-1\">Valide</th>
                                        <th scope=\"col\" class=\"col-md-5\">Remarque</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <th>***</th>
                                        <th>Generalchassis</th>
                                        <td>{{ form_widget(f.generalchassis )}}</td>
                                        <td>{{ form_widget(f.rmqgeneralchassis )}}</td>


                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Huilemoreur</th>
                                        <td>{{ form_widget(f.huilemoreur )}}</td>
                                        <td>{{ form_widget(f.rmqhuilemoreur )}}</td>

                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Boitevitesse</th>
                                        <td>{{ form_widget(f.boitevitesse )}}</td>
                                        <td>{{ form_widget(f.rmqboitevitesse )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Huiledirection</th>
                                        <td>{{ form_widget(f.huiledirection )}}</td>
                                        <td>{{ form_widget(f.rmqhuiledirection )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Liquiderefroidisement</th>
                                        <td>{{ form_widget(f.liquiderefroidisement )}}</td>
                                        <td>{{ form_widget(f.rmqliquiderefroidisement )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Ventilateur</th>
                                        <td>{{ form_widget(f.ventilateur )}}</td>
                                        <td>{{ form_widget(f.rmqventilateur )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Embrayage</th>
                                        <td>{{ form_widget(f.embrayage )}}</td>
                                        <td>{{ form_widget(f.rmqembrayage )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Huilefuitechassis</th>
                                        <td>{{ form_widget(f.huilefuitechassis )}}</td>
                                        <td>{{ form_widget(f.rmqhuilefuitechassis )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Fuitedaire</th>
                                        <td>{{ form_widget(f.fuitedaire )}}</td>
                                        <td>{{ form_widget(f.rmqfuitedaire )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Rouesecours</th>
                                        <td>{{ form_widget(f.rouesecours )}}</td>
                                        <td>{{ form_widget(f.rmqrouesecours )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Filtresecondaire</th>
                                        <td>{{ form_widget(f.filtresecondaire )}}</td>
                                        <td>{{ form_widget(f.rmqfiltresecondaire )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Centraleelectrique</th>
                                        <td>{{ form_widget(f.centraleelectrique )}}</td>
                                        <td>{{ form_widget(f.rmqcentraleelectrique )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Tableaubord</th>
                                        <td>{{ form_widget(f.tableaubord )}}</td>
                                        <td>{{ form_widget(f.rmqtableaubord )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Exthuiledirection</th>
                                        <td>{{ form_widget(f.exthuiledirection )}}</td>
                                        <td>{{ form_widget(f.rmqexthuiledirection )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Cledouble</th>
                                        <td>{{ form_widget(f.cledouble )}}</td>
                                        <td>{{ form_widget(f.rmqcledouble )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Docchassis</th>
                                        <td>{{ form_widget(f.docchassis )}}</td>
                                        <td>{{ form_widget(f.rmqdocchassis )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Codeereur</th>
                                        <td>{{ form_widget(f.codeereur )}}</td>
                                        <td>{{ form_widget(f.rmqcodeereur )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Kitaccesoires</th>
                                        <td>{{ form_widget(f.kitaccesoires )}}</td>
                                        <td>{{ form_widget(f.rmqkitaccesoires )}}</td>
                                    </tr>
                                    <tr class=\"hide\">
                                        <th>***</th>
                                        <th class=\"hide\">Remorquage</th>
                                        <td>{{ form_widget(f.remorquage,{attr:{'class':'hidden'}}) }}</td>
                                        <td>{{ form_widget(f.rmqremorquage )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>Protectionchassis</th>
                                        <td>{{ form_widget(f.protectionchassis )}}</td>
                                        <td>{{ form_widget(f.rmqprotectionchassis )}}</td>
                                    </tr>
                                    <tr>
                                        <th>***</th>
                                        <th>l'etat terminer ou non</th>
                                        <td>{{ form_widget(f.etat )}}</td>
                                        <td></td>
                                    </tr>

                                    </tbody>

                                </table>




                    <div class =\"form-group\">
                              <button type=\"submit\" Class =\"btn btn-primary\">
                                <span class =\"glyphicon-plus\"/>Valider
                            </button>

                    </div>
                </div>

                   <!--     a guache en va initialiser le petit affiche -->
                    <div class=\"col-lg-3\">

                        <h1>Validation</h1>
                        <table class=\"table\">
                            <tr>
                                <th>Mecanicien</th>
                                <th>Contqualite</th>
                                <th>Responsablequalite</th>
                            </tr>

                            <tr>
                                <td>{{ receptionchassi.mecanicien }}</td>
                                <td>{{ receptionchassi.contqualite }}</td>
                                <td>{{ receptionchassi.responsablequalite }}</td>
                            </tr>
                        </table>

                        <h4 style=\"padding-top: 50px\">
                            <a href=\"{{ path('receptionchassis_index') }}\">Back to the list</a>

                        </h4>
                     </div>
                </div>
            </div>
        </div>
        <div class=\"hidden\">
            {{ form_widget(f.nchassis, { 'attr' : { 'style':'display:none'} }) }}
            {{ form_widget(f.mecanicien, { 'attr' : { 'style':'display:none'} }) }}
            {{ form_widget(f.remarques, { 'attr' : { 'style':'display:none'} }) }}
            {{ form_widget(f.contqualite, { 'attr' : { 'style':'display:none'} }) }}
            {{ form_widget(f.responsablequalite, { 'attr' : { 'style':'display:none'} }) }}
        </div>
    {{ form_end(f) }}
    </form>
    <ul>
        <li>

        </li>
    </ul>
        <!--
            <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
            </li>


        -->
{% endblock %}
", "receptionchassis/edit.html.twig", "/var/www/html/Alphabus/app/Resources/views/receptionchassis/edit.html.twig");
    }
}
