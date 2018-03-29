<?php

/* MyAlphabusBundle:Chassis:listchassis.html.twig */
class __TwigTemplate_6a3ecd8cbb604e610bbb34855c71b4db5c25426a0e72d596ab7665fe7c1b1c70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAlphabusBundle:Chassis:listchassis.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "MyAlphabusBundle:Chassis:listchassis";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the Chassis:listchassis page</h1>





    <div class=\"container\">
        <h1>Enseignants</h1>
        <form style=\"margin-bottom: 10px;\" action=\"cherchassis\" method=\"GET\">
            <input class=\"form-control\" type=\"text\" placeholder=\"Recherche par N° Chassis\" name=\"nchassis\" />
        </form>
        <form>
            <table class=\"table\">
                <thead>
                <tr>
                   
                    <th>N° Chassis</th>
                    <th>Type chassis</th>
                    <th>Date Reception</th>
                    <th>Controler</th>



                </tr>
                </thead>
                <tbody>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enss"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 33
            echo "                    <tr>
                      
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "nchassis", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "typechassis", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["st"], "datereception", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "controler", array()), "html", null, true);
            echo "</td>

                        <td><a class=\"btn btn-success\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_chassis", array("id" => $this->getAttribute($context["st"], "nchassis", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                        <td><a class=\"btn btn-danger\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("del_chassis", array("id" => $this->getAttribute($context["st"], "nchassis", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "                    <tr><td>Aucun Enseignnat n''a été trouvé.</td></tr>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </tbody>
            </table>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_chassis");
        echo "\" class=\"btn btn-primary\">
                Ajouter
            </a>

        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "MyAlphabusBundle:Chassis:listchassis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 49,  112 => 47,  104 => 44,  96 => 41,  92 => 40,  87 => 38,  83 => 37,  79 => 36,  75 => 35,  71 => 33,  66 => 32,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MyAlphabusBundle:Chassis:listchassis.html.twig", "/var/www/html/Alphabus/src/My/AlphabusBundle/Resources/views/Chassis/listchassis.html.twig");
    }
}
