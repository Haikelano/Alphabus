<?php

/* MyAlphabusBundle:Chassis:cherchassis.html.twig */
class __TwigTemplate_1caa0dfe09d6df88c93c96244be8bc8dc1e91124ff1f953fe44c1e05d68328ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyAlphabusBundle:Chassis:cherchassis.html.twig", 1);
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
        $__internal_cd5636e8d65b3e797667ef57e0b31288e59e9fcaa40a471febae4dfd47e64305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5636e8d65b3e797667ef57e0b31288e59e9fcaa40a471febae4dfd47e64305->enter($__internal_cd5636e8d65b3e797667ef57e0b31288e59e9fcaa40a471febae4dfd47e64305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAlphabusBundle:Chassis:cherchassis.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd5636e8d65b3e797667ef57e0b31288e59e9fcaa40a471febae4dfd47e64305->leave($__internal_cd5636e8d65b3e797667ef57e0b31288e59e9fcaa40a471febae4dfd47e64305_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1bab732339a86a056590cba30a03848a1d1b05727de49521d5542a95300e97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bab732339a86a056590cba30a03848a1d1b05727de49521d5542a95300e97d->enter($__internal_b1bab732339a86a056590cba30a03848a1d1b05727de49521d5542a95300e97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MyAlphabusBundle:Chassis:cherchassis";
        
        $__internal_b1bab732339a86a056590cba30a03848a1d1b05727de49521d5542a95300e97d->leave($__internal_b1bab732339a86a056590cba30a03848a1d1b05727de49521d5542a95300e97d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d241b9bb1a4d44a08ac2083064797009ecaa1fa8a9b876e9ea15dfafeaf120b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d241b9bb1a4d44a08ac2083064797009ecaa1fa8a9b876e9ea15dfafeaf120b1->enter($__internal_d241b9bb1a4d44a08ac2083064797009ecaa1fa8a9b876e9ea15dfafeaf120b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Welcome to the Chassis:recherche listchassis page</h1>





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
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enss"] ?? $this->getContext($context, "enss")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["st"]) {
            // line 34
            echo "                    <tr>
                       
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "nchassis", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "typechassis", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["st"], "datereception", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["st"], "controler", array()), "html", null, true);
            echo "</td>

                        <td><a class=\"btn btn-success\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_chassis", array("id" => $this->getAttribute($context["st"], "nchassis", array()))), "html", null, true);
            echo "\">Modifier</a></td>
                        <td><a class=\"btn btn-danger\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("del_chassis", array("id" => $this->getAttribute($context["st"], "nchassis", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "                    <tr><td>Aucun Enseignnat n''a été trouvé.</td></tr>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['st'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
            </table>
            <div class=\"col-md-6\">
            <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_chassis");
        echo "\" class=\"badge badge-info\">
                list chassis
            </a>
            </div>
        </form>
    </div>
";
        
        $__internal_d241b9bb1a4d44a08ac2083064797009ecaa1fa8a9b876e9ea15dfafeaf120b1->leave($__internal_d241b9bb1a4d44a08ac2083064797009ecaa1fa8a9b876e9ea15dfafeaf120b1_prof);

    }

    public function getTemplateName()
    {
        return "MyAlphabusBundle:Chassis:cherchassis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 51,  127 => 48,  119 => 45,  111 => 42,  107 => 41,  102 => 39,  98 => 38,  94 => 37,  90 => 36,  86 => 34,  81 => 33,  53 => 7,  47 => 6,  35 => 3,  11 => 1,);
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

{% block title %}MyAlphabusBundle:Chassis:cherchassis{% endblock %}


{% block body %}
    <h1>Welcome to the Chassis:recherche listchassis page</h1>





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

                        <td><a class=\"btn btn-success\" href=\"{{ path('edit_chassis', { 'id': st.nchassis }) }}\">Modifier</a></td>
                        <td><a class=\"btn btn-danger\" href=\"{{ path('del_chassis', { 'id': st.nchassis }) }}\"><i class=\"glyphicon glyphicon-trash\"></i> Supprimer</a></td>
                    </tr>
                {% else %}
                    <tr><td>Aucun Enseignnat n''a été trouvé.</td></tr>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <div class=\"col-md-6\">
            <a href=\"{{ path('list_chassis') }}\" class=\"badge badge-info\">
                list chassis
            </a>
            </div>
        </form>
    </div>
{% endblock %}


", "MyAlphabusBundle:Chassis:cherchassis.html.twig", "/var/www/html/Alphabus/src/My/AlphabusBundle/Resources/views/Chassis/cherchassis.html.twig");
    }
}
