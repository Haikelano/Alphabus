<?php

/* accesoirexterieur/index.html.twig */
class __TwigTemplate_edda66706f4adc7dd8dfc768da05193ba71f1f3325531237c0abfbe6e8e7ab15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "accesoirexterieur/index.html.twig", 1);
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
        $__internal_0e574129a39755158908955d869af35624e4e8c9bb1009ccd123bbb2c1fa9082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e574129a39755158908955d869af35624e4e8c9bb1009ccd123bbb2c1fa9082->enter($__internal_0e574129a39755158908955d869af35624e4e8c9bb1009ccd123bbb2c1fa9082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accesoirexterieur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e574129a39755158908955d869af35624e4e8c9bb1009ccd123bbb2c1fa9082->leave($__internal_0e574129a39755158908955d869af35624e4e8c9bb1009ccd123bbb2c1fa9082_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_385c6f85f2b4995f2397a89e83549de7d0470b722c3e92c688e1e0eb10b28321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_385c6f85f2b4995f2397a89e83549de7d0470b722c3e92c688e1e0eb10b28321->enter($__internal_385c6f85f2b4995f2397a89e83549de7d0470b722c3e92c688e1e0eb10b28321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Accesoirexterieurs list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["accesoirexterieurs"] ?? $this->getContext($context, "accesoirexterieurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["accesoirexterieur"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accesoirexterieur_show", array("id" => $this->getAttribute($context["accesoirexterieur"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["accesoirexterieur"], "id", array()), "html", null, true);
            echo "</a></td>

                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["accesoirexterieur"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accesoirexterieur_show", array("id" => $this->getAttribute($context["accesoirexterieur"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accesoirexterieur_edit", array("id" => $this->getAttribute($context["accesoirexterieur"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accesoirexterieur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accesoirexterieur_new");
        echo "\">Create a new accesoirexterieur</a>
        </li>
    </ul>
";
        
        $__internal_385c6f85f2b4995f2397a89e83549de7d0470b722c3e92c688e1e0eb10b28321->leave($__internal_385c6f85f2b4995f2397a89e83549de7d0470b722c3e92c688e1e0eb10b28321_prof);

    }

    public function getTemplateName()
    {
        return "accesoirexterieur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 37,  92 => 32,  80 => 26,  74 => 23,  67 => 19,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Accesoirexterieurs list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for accesoirexterieur in accesoirexterieurs %}
            <tr>
                <td><a href=\"{{ path('accesoirexterieur_show', { 'id': accesoirexterieur.id }) }}\">{{ accesoirexterieur.id }}</a></td>

                <td>{{ accesoirexterieur.date|date('Y-m-d H:i:s') }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('accesoirexterieur_show', { 'id': accesoirexterieur.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('accesoirexterieur_edit', { 'id': accesoirexterieur.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('accesoirexterieur_new') }}\">Create a new accesoirexterieur</a>
        </li>
    </ul>
{% endblock %}
", "accesoirexterieur/index.html.twig", "/var/www/html/Alphabus/app/Resources/views/accesoirexterieur/index.html.twig");
    }
}
