<?php

/* MyAlphabusBundle:Chassis:listchassis.html.twig */
class __TwigTemplate_4cb051d54d52d00f2df51b8f5b09f2078415b531cfeb97d8f74dab6118202dec extends Twig_Template
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
        $__internal_29c0ce44c48531252ef1fb90e7d2d2da015d09845284476b5c66bf7df2dbfca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c0ce44c48531252ef1fb90e7d2d2da015d09845284476b5c66bf7df2dbfca8->enter($__internal_29c0ce44c48531252ef1fb90e7d2d2da015d09845284476b5c66bf7df2dbfca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAlphabusBundle:Chassis:listchassis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c0ce44c48531252ef1fb90e7d2d2da015d09845284476b5c66bf7df2dbfca8->leave($__internal_29c0ce44c48531252ef1fb90e7d2d2da015d09845284476b5c66bf7df2dbfca8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10cb3e5ca87769be3526cceb2dddfabf9f22dcd312f9a8422b28eb2389a09077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cb3e5ca87769be3526cceb2dddfabf9f22dcd312f9a8422b28eb2389a09077->enter($__internal_10cb3e5ca87769be3526cceb2dddfabf9f22dcd312f9a8422b28eb2389a09077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MyAlphabusBundle:Chassis:listchassis";
        
        $__internal_10cb3e5ca87769be3526cceb2dddfabf9f22dcd312f9a8422b28eb2389a09077->leave($__internal_10cb3e5ca87769be3526cceb2dddfabf9f22dcd312f9a8422b28eb2389a09077_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_892285692491e348b5865b851e02ae87c7ffc9e8ead895841726d926afd4e047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892285692491e348b5865b851e02ae87c7ffc9e8ead895841726d926afd4e047->enter($__internal_892285692491e348b5865b851e02ae87c7ffc9e8ead895841726d926afd4e047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(($context["enss"] ?? $this->getContext($context, "enss")));
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
        
        $__internal_892285692491e348b5865b851e02ae87c7ffc9e8ead895841726d926afd4e047->leave($__internal_892285692491e348b5865b851e02ae87c7ffc9e8ead895841726d926afd4e047_prof);

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
        return array (  131 => 49,  127 => 47,  119 => 44,  111 => 41,  107 => 40,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  86 => 33,  81 => 32,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}MyAlphabusBundle:Chassis:listchassis{% endblock %}

{% block body %}
<h1>Welcome to the Chassis:listchassis page</h1>





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
                {% for st in enss %}
                    <tr>
                      
                        <td>{{ st.nchassis }}</td>
                        <td>{{ st.typechassis }}</td>
                        <td>{{ st.datereception|date('d-m-Y')  }}</td>
                        <td>{{ st.controler }}</td>

                        <td><a class=\"btn btn-success\" href=\"{{ path('edit_chassis', { 'id': st.nchassis}) }}\">Modifier</a></td>
                        <td><a class=\"btn btn-danger\" href=\"{{ path('del_chassis', { 'id': st.nchassis }) }}\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></td>
                    </tr>
                {% else %}
                    <tr><td>Aucun Enseignnat n''a été trouvé.</td></tr>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <a href=\"{{ path('new_chassis') }}\" class=\"btn btn-primary\">
                Ajouter
            </a>

        </form>
    </div>
{% endblock %}

", "MyAlphabusBundle:Chassis:listchassis.html.twig", "/var/www/html/Alphabus/src/My/AlphabusBundle/Resources/views/Chassis/listchassis.html.twig");
    }
}
