<?php

/* MyAlphabusBundle:Servicetest:index.html.twig */
class __TwigTemplate_23138ec73e18cd53b4bc58e23829d724da5e8eb8cf808f98f206bdf242fd2d97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAlphabusBundle:Servicetest:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_164dd3b9d4dfbbb3355367f43dcda68c9f59eef9c76cc35bc1bf20bfedab7241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164dd3b9d4dfbbb3355367f43dcda68c9f59eef9c76cc35bc1bf20bfedab7241->enter($__internal_164dd3b9d4dfbbb3355367f43dcda68c9f59eef9c76cc35bc1bf20bfedab7241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAlphabusBundle:Servicetest:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_164dd3b9d4dfbbb3355367f43dcda68c9f59eef9c76cc35bc1bf20bfedab7241->leave($__internal_164dd3b9d4dfbbb3355367f43dcda68c9f59eef9c76cc35bc1bf20bfedab7241_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65347ac9efa9c0337545be24f3327cc3df8ba6d28447017240cea824ef91c0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65347ac9efa9c0337545be24f3327cc3df8ba6d28447017240cea824ef91c0c8->enter($__internal_65347ac9efa9c0337545be24f3327cc3df8ba6d28447017240cea824ef91c0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MyAlphabusBundle:Servicetest:index";
        
        $__internal_65347ac9efa9c0337545be24f3327cc3df8ba6d28447017240cea824ef91c0c8->leave($__internal_65347ac9efa9c0337545be24f3327cc3df8ba6d28447017240cea824ef91c0c8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c39d97b828b90f956c11d4a3135f88b226f3ef57f22b108ebf3f9532cf9c846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c39d97b828b90f956c11d4a3135f88b226f3ef57f22b108ebf3f9532cf9c846->enter($__internal_5c39d97b828b90f956c11d4a3135f88b226f3ef57f22b108ebf3f9532cf9c846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<!-- Portfolio Section -->
<div class=\"container\" style=\"padding-top: 20px; padding-bottom: 10px\" >
        <h2>Service de TEST</h2>
    <form method=\"get\" action=\"service_test\" >

        N°Chassis <input type=\"text\" name=\"nchassis\" class=\"search\">
        <input type=\"submit\" value=\"submit\" class=\"btn btn-primary\">
    </form>
    ";
        // line 16
        if ((($context["chassis"] ?? $this->getContext($context, "chassis")) != null)) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["chassis"] ?? $this->getContext($context, "chassis")));
            foreach ($context['_seq'] as $context["_key"] => $context["chassi"]) {
                // line 18
                echo "<h4> Vous consulter le chassis ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["chassi"], "nchassis", array()), "html", null, true);
                echo "</h4>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chassi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        ";
        }
        // line 21
        echo "

<div class=\"row\" style=\"padding-top: 30px\">
    <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/atelier/acier.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
            <div class=\"card-body\">
                <h4 class=\"card-title\">
                    ";
        // line 29
        if ((($context["chassis"] ?? $this->getContext($context, "chassis")) != null)) {
            // line 30
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["structure"] ?? $this->getContext($context, "structure")));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 31
                echo "
                            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_show", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
                echo "\">Atelier Acier</a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                         ";
        } else {
            // line 35
            echo "                        <a href=\"\">Atelier Acier</a>
                    ";
        }
        // line 37
        echo "
                    ";
        // line 38
        if ((($context["chassis"] ?? $this->getContext($context, "chassis")) == null)) {
            // line 39
            echo "                     <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/atelier/info.png"), "html", null, true);
            echo "\" style=\"width: 50px;height: 50px ; padding-left: 10px\">
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Etat Generale chassis :</span> ****** </p></h6>
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Valider par  :</span> ****** </p></h6>
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Les Remarques  :</span>
                            ****** </p></h6>

                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Data Modification :</span> ****** à ****** </p></h6>
                    ";
        } else {
            // line 47
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reception"] ?? $this->getContext($context, "reception")));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 48
                echo "
                    ";
                // line 49
                if (($this->getAttribute($context["r"], "etat", array()) == false)) {
                    // line 50
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/atelier/a.png"), "html", null, true);
                    echo "\" style=\"width: 50px;height: 50px \">
                    ";
                } else {
                    // line 52
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/atelier/succus.png"), "html", null, true);
                    echo "\" style=\"width: 50px;height: 50px \">
                    ";
                }
                // line 54
                echo "
                </h4>
                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Etat Generale chassis :</span> ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "generalchassis", array()), "html", null, true);
                echo " </p></h7>
                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Valider par  :</span> ";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "mecanicien", array()), "html", null, true);
                echo " </p></h7>
                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Les Remarques  :</span>
                        ";
                // line 59
                if (($this->getAttribute($context["r"], "remarques", array()) == null)) {
                    // line 60
                    echo "                        *** Rien *** ";
                } else {
                    // line 61
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "remarques", array()), "html", null, true);
                    echo " </p></h7> ";
                }
                // line 62
                echo "                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Data Modification :</span> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "date", array()), "Y-m-d"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "date", array()), "H:i:s"), "html", null, true);
                echo " </p></h7>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                ";
        }
        // line 65
        echo "            </div>
        </div>
    </div>
    <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/atelier/acier.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
            <div class=\"card-body\">
                <h4 class=\"card-title\">
                    ";
        // line 73
        if ((($context["chassis"] ?? $this->getContext($context, "chassis")) != null)) {
            // line 74
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["peinture"] ?? $this->getContext($context, "peinture")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 75
                echo "
                            <a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_show", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
                echo "\">Atelier Peinture</a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                    ";
        } else {
            // line 79
            echo "                        <a href=\"\">Atelier Peinture</a>
                    ";
        }
        // line 81
        echo "
                    ";
        // line 82
        if ((($context["chassis"] ?? $this->getContext($context, "chassis")) == null)) {
            // line 83
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/atelier/info.png"), "html", null, true);
            echo "\" style=\"width: 50px;height: 50px ; padding-left: 10px\">
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Etat Generale chassis :</span> ****** </p></h6>
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Valider par  :</span> ****** </p></h6>
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Les Remarques  :</span>
                            ****** </p></h6>

                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Data Modification :</span> ****** à ****** </p></h6>
                    ";
        } else {
            // line 91
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["peinture"] ?? $this->getContext($context, "peinture")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 92
                echo "
                    ";
                // line 93
                if (($this->getAttribute($context["p"], "etat", array()) == false)) {
                    // line 94
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/atelier/a.png"), "html", null, true);
                    echo "\" style=\"width: 50px;height: 50px \">peinture_show2
                    ";
                } else {
                    // line 96
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/atelier/succus.png"), "html", null, true);
                    echo "\" style=\"width: 50px;height: 50px \">
                    ";
                }
                // line 98
                echo "
                </h4>

                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Valider par  :</span> ";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "interrieur", array()), "html", null, true);
                echo " </p></h7>
                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Les Remarques  :</span>
                        ";
                // line 103
                if (($this->getAttribute($context["p"], "remarques", array()) == null)) {
                    // line 104
                    echo "                        *** Rien *** ";
                } else {
                    // line 105
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "remarques", array()), "html", null, true);
                    echo " </p></h7> ";
                }
                // line 106
                echo "                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Data Modification :</span> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "Y-m-d"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "H:i:s"), "html", null, true);
                echo " </p></h7>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                ";
        }
        // line 109
        echo "            </div>
        </div>
    </div>




    <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/atelier/acier.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
            <div class=\"card-body\">
                <h4 class=\"card-title\">
                    ";
        // line 121
        if ((($context["chassis"] ?? $this->getContext($context, "chassis")) != null)) {
            // line 122
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["peinture"] ?? $this->getContext($context, "peinture")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 123
                echo "
                            <a href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_show", array("id" => $this->getAttribute($context["p"], "id", array()))), "html", null, true);
                echo "\">Atelier Finition </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                    ";
        } else {
            // line 127
            echo "                        <a href=\"\">Atelier Finition</a>
                    ";
        }
        // line 129
        echo "
                    ";
        // line 130
        if ((($context["chassis"] ?? $this->getContext($context, "chassis")) == null)) {
            // line 131
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/atelier/info.png"), "html", null, true);
            echo "\" style=\"width: 50px;height: 50px ; padding-left: 10px\">
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Etat Generale chassis :</span> ****** </p></h6>
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Valider par  :</span> ****** </p></h6>
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Les Remarques  :</span>
                            ****** </p></h6>

                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Data Modification :</span> ****** à ****** </p></h6>
                    ";
        } else {
            // line 139
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["peinture"] ?? $this->getContext($context, "peinture")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 140
                echo "
                    ";
                // line 141
                if (($this->getAttribute($context["p"], "etat", array()) == false)) {
                    // line 142
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/atelier/a.png"), "html", null, true);
                    echo "\" style=\"width: 50px;height: 50px \">
                    ";
                } else {
                    // line 144
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/atelier/succus.png"), "html", null, true);
                    echo "\" style=\"width: 50px;height: 50px \">
                    ";
                }
                // line 146
                echo "
                </h4>

                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Valider par  :</span> ";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "interrieur", array()), "html", null, true);
                echo " </p></h7>
                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Les Remarques  :</span>
                        ";
                // line 151
                if (($this->getAttribute($context["p"], "remarques", array()) == null)) {
                    // line 152
                    echo "                        *** Rien *** ";
                } else {
                    // line 153
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "remarques", array()), "html", null, true);
                    echo " </p></h7> ";
                }
                // line 154
                echo "                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Data Modification :</span> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "Y-m-d"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "H:i:s"), "html", null, true);
                echo " </p></h7>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "                ";
        }
        // line 157
        echo "            </div>
        </div>
    </div>

</div>
</div>






    <label >table de chassis</label>
";
        // line 170
        if ((($context["chassis"] ?? $this->getContext($context, "chassis")) == null)) {
            // line 171
            echo "    vide
    ";
        } else {
            // line 173
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["chassis"] ?? $this->getContext($context, "chassis")));
            foreach ($context['_seq'] as $context["_key"] => $context["chassi"]) {
                // line 174
                echo "        <tr>

            <td>";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($context["chassi"], "nchassis", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["chassi"], "typechassis", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 178
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["chassi"], "datereception", array()), "d-m-Y"), "html", null, true);
                echo "</td>
            <td>";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute($context["chassi"], "controler", array()), "html", null, true);
                echo "</td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chassi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo " ";
        }
        // line 183
        echo "
    <p>
        <label >table de peinture</label>
    ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["peinture"] ?? $this->getContext($context, "peinture")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 187
            echo "        <tr>


            <td>";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "chassis", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 191
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", array()), "Y-m-d"), "html", null, true);
            echo "</td>
            ";
            // line 192
            if (($this->getAttribute($context["p"], "etat", array()) == false)) {
                // line 193
                echo "         False
            ";
            }
            // line 195
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "</p >

    <p>
        <label >table de structure</label>
    ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["structure"] ?? $this->getContext($context, "structure")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 202
            echo "        <tr>


            <td>";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "chassis", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 206
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "date", array()), "Y-m-d"), "html", null, true);
            echo "  à  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "date", array()), "H:i:s"), "html", null, true);
            echo "</td>
            ";
            // line 207
            if (($this->getAttribute($context["s"], "etat", array()) == false)) {
                // line 208
                echo "         False
            ";
            }
            // line 210
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "</p>
    <p>
        <label >table de reception chassis</label>
    ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reception"] ?? $this->getContext($context, "reception")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 216
            echo "        <tr>


            <td>";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "nchassis", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 220
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "date", array()), "Y-m-d"), "html", null, true);
            echo "  à  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "date", array()), "H:i:s"), "html", null, true);
            echo "</td>
            ";
            // line 221
            if (($this->getAttribute($context["r"], "etat", array()) == false)) {
                // line 222
                echo "         False

                ";
            } else {
                // line 225
                echo "
                true
            ";
            }
            // line 228
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "</p>
</div>
";
        
        $__internal_5c39d97b828b90f956c11d4a3135f88b226f3ef57f22b108ebf3f9532cf9c846->leave($__internal_5c39d97b828b90f956c11d4a3135f88b226f3ef57f22b108ebf3f9532cf9c846_prof);

    }

    public function getTemplateName()
    {
        return "MyAlphabusBundle:Servicetest:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 230,  587 => 228,  582 => 225,  577 => 222,  575 => 221,  569 => 220,  565 => 219,  560 => 216,  556 => 215,  551 => 212,  544 => 210,  540 => 208,  538 => 207,  532 => 206,  528 => 205,  523 => 202,  519 => 201,  513 => 197,  506 => 195,  502 => 193,  500 => 192,  496 => 191,  492 => 190,  487 => 187,  483 => 186,  478 => 183,  475 => 182,  466 => 179,  462 => 178,  458 => 177,  454 => 176,  450 => 174,  445 => 173,  441 => 171,  439 => 170,  424 => 157,  421 => 156,  410 => 154,  405 => 153,  402 => 152,  400 => 151,  395 => 149,  390 => 146,  384 => 144,  378 => 142,  376 => 141,  373 => 140,  368 => 139,  356 => 131,  354 => 130,  351 => 129,  347 => 127,  344 => 126,  336 => 124,  333 => 123,  328 => 122,  326 => 121,  320 => 118,  309 => 109,  306 => 108,  295 => 106,  290 => 105,  287 => 104,  285 => 103,  280 => 101,  275 => 98,  269 => 96,  263 => 94,  261 => 93,  258 => 92,  253 => 91,  241 => 83,  239 => 82,  236 => 81,  232 => 79,  229 => 78,  221 => 76,  218 => 75,  213 => 74,  211 => 73,  205 => 70,  198 => 65,  195 => 64,  184 => 62,  179 => 61,  176 => 60,  174 => 59,  169 => 57,  165 => 56,  161 => 54,  155 => 52,  149 => 50,  147 => 49,  144 => 48,  139 => 47,  127 => 39,  125 => 38,  122 => 37,  118 => 35,  115 => 34,  107 => 32,  104 => 31,  99 => 30,  97 => 29,  91 => 26,  84 => 21,  81 => 20,  72 => 18,  67 => 17,  65 => 16,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}MyAlphabusBundle:Servicetest:index{% endblock %}

{% block body %}


<!-- Portfolio Section -->
<div class=\"container\" style=\"padding-top: 20px; padding-bottom: 10px\" >
        <h2>Service de TEST</h2>
    <form method=\"get\" action=\"service_test\" >

        N°Chassis <input type=\"text\" name=\"nchassis\" class=\"search\">
        <input type=\"submit\" value=\"submit\" class=\"btn btn-primary\">
    </form>
    {% if chassis != null %}
        {% for chassi in chassis %}
<h4> Vous consulter le chassis {{ chassi.nchassis }}</h4>
        {% endfor %}
        {% endif %}


<div class=\"row\" style=\"padding-top: 30px\">
    <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset('images/atelier/acier.jpg') }}\" alt=\"\"></a>
            <div class=\"card-body\">
                <h4 class=\"card-title\">
                    {% if chassis != null %}
                      {% for r in structure %}

                            <a href=\"{{ path('structure_show', { 'id': r.id }) }}\">Atelier Acier</a>
                            {% endfor %}
                         {% else %}
                        <a href=\"\">Atelier Acier</a>
                    {% endif %}

                    {% if chassis == null %}
                     <img src=\"{{ asset('images/atelier/info.png') }}\" style=\"width: 50px;height: 50px ; padding-left: 10px\">
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Etat Generale chassis :</span> ****** </p></h6>
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Valider par  :</span> ****** </p></h6>
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Les Remarques  :</span>
                            ****** </p></h6>

                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Data Modification :</span> ****** à ****** </p></h6>
                    {% else %}
                    {% for r in reception %}

                    {% if r.etat == false %}
                        <img src=\"{{ asset('images/atelier/a.png') }}\" style=\"width: 50px;height: 50px \">
                    {% else  %}
                        <img src=\"{{ asset('images/atelier/succus.png') }}\" style=\"width: 50px;height: 50px \">
                    {% endif %}

                </h4>
                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Etat Generale chassis :</span> {{ r.generalchassis }} </p></h7>
                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Valider par  :</span> {{ r.mecanicien  }} </p></h7>
                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Les Remarques  :</span>
                        {% if r.remarques == null %}
                        *** Rien *** {% else %}
                        {{ r.remarques }} </p></h7> {% endif %}
                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Data Modification :</span> {{ r.date |date('Y-m-d') }} à {{ r.date|date('H:i:s') }} </p></h7>
                {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>
    <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset('images/atelier/acier.jpg') }}\" alt=\"\"></a>
            <div class=\"card-body\">
                <h4 class=\"card-title\">
                    {% if chassis != null %}
                        {% for p in peinture %}

                            <a href=\"{{ path('peinture_show', { 'id': p.id }) }}\">Atelier Peinture</a>
                        {% endfor %}
                    {% else %}
                        <a href=\"\">Atelier Peinture</a>
                    {% endif %}

                    {% if chassis == null %}
                    <img src=\"{{ asset('images/atelier/info.png') }}\" style=\"width: 50px;height: 50px ; padding-left: 10px\">
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Etat Generale chassis :</span> ****** </p></h6>
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Valider par  :</span> ****** </p></h6>
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Les Remarques  :</span>
                            ****** </p></h6>

                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Data Modification :</span> ****** à ****** </p></h6>
                    {% else %}
                    {% for p in peinture %}

                    {% if p.etat == false %}
                        <img src=\"{{ asset('images/atelier/a.png') }}\" style=\"width: 50px;height: 50px \">peinture_show2
                    {% else  %}
                        <img src=\"{{ asset('images/atelier/succus.png') }}\" style=\"width: 50px;height: 50px \">
                    {% endif %}

                </h4>

                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Valider par  :</span> {{ p.interrieur   }} </p></h7>
                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Les Remarques  :</span>
                        {% if p.remarques == null %}
                        *** Rien *** {% else %}
                        {{ p.remarques }} </p></h7> {% endif %}
                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Data Modification :</span> {{ p.date |date('Y-m-d') }} à {{ p.date|date('H:i:s') }} </p></h7>
                {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>




    <div class=\"col-lg-4 col-sm-6 portfolio-item\">
        <div class=\"card h-100\">
            <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset('images/atelier/acier.jpg') }}\" alt=\"\"></a>
            <div class=\"card-body\">
                <h4 class=\"card-title\">
                    {% if chassis != null %}
                        {% for p in peinture %}

                            <a href=\"{{ path('receptionchassis_show', { 'id': p.id }) }}\">Atelier Finition </a>
                        {% endfor %}
                    {% else %}
                        <a href=\"\">Atelier Finition</a>
                    {% endif %}

                    {% if chassis == null %}
                    <img src=\"{{ asset('images/atelier/info.png') }}\" style=\"width: 50px;height: 50px ; padding-left: 10px\">
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Etat Generale chassis :</span> ****** </p></h6>
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Valider par  :</span> ****** </p></h6>
                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Les Remarques  :</span>
                            ****** </p></h6>

                    <h6>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Data Modification :</span> ****** à ****** </p></h6>
                    {% else %}
                    {% for p in peinture %}

                    {% if p.etat == false %}
                        <img src=\"{{ asset('images/atelier/a.png') }}\" style=\"width: 50px;height: 50px \">
                    {% else  %}
                        <img src=\"{{ asset('images/atelier/succus.png') }}\" style=\"width: 50px;height: 50px \">
                    {% endif %}

                </h4>

                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Valider par  :</span> {{ p.interrieur   }} </p></h7>
                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Les Remarques  :</span>
                        {% if p.remarques == null %}
                        *** Rien *** {% else %}
                        {{ p.remarques }} </p></h7> {% endif %}
                <h7>  <p class=\"card-text\"><span style=\"text-decoration: underline\"> Data Modification :</span> {{ p.date |date('Y-m-d') }} à {{ p.date|date('H:i:s') }} </p></h7>
                {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>

</div>
</div>






    <label >table de chassis</label>
{% if chassis == null %}
    vide
    {% else %}
    {% for chassi in chassis %}
        <tr>

            <td>{{ chassi.nchassis }}</td>
            <td>{{ chassi.typechassis }}</td>
            <td>{{ chassi.datereception|date('d-m-Y')  }}</td>
            <td>{{ chassi.controler }}</td>
        </tr>
    {% endfor %}
 {% endif %}

    <p>
        <label >table de peinture</label>
    {% for p in peinture %}
        <tr>


            <td>{{ p.chassis }}</td>
            <td>{{ p.date| date('Y-m-d') }}</td>
            {% if p.etat == false %}
         False
            {% endif %}
        </tr>
    {% endfor %}
</p >

    <p>
        <label >table de structure</label>
    {% for s in structure %}
        <tr>


            <td>{{ s.chassis }}</td>
            <td>{{ s.date| date('Y-m-d') }}  à  {{ s.date|date('H:i:s')}}</td>
            {% if s.etat == false %}
         False
            {% endif %}
        </tr>
    {% endfor %}
</p>
    <p>
        <label >table de reception chassis</label>
    {% for r in reception %}
        <tr>


            <td>{{ r.nchassis }}</td>
            <td>{{ r.date| date('Y-m-d') }}  à  {{ r.date|date('H:i:s')}}</td>
            {% if r.etat == false %}
         False

                {% else%}

                true
            {% endif %}
        </tr>
    {% endfor %}
</p>
</div>
{% endblock %}
", "MyAlphabusBundle:Servicetest:index.html.twig", "/var/www/html/Alphabus/src/My/AlphabusBundle/Resources/views/Servicetest/index.html.twig");
    }
}
