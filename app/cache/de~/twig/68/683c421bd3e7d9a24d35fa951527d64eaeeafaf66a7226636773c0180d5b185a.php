<?php

/* receptionchassis/index.html.twig */
class __TwigTemplate_52e3929523097ffa74e301dc75d667ddafd99c1e008dbba4c34b0f579469822f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "receptionchassis/index.html.twig", 1);
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
        $__internal_93ca663786d9845861b4e1121ba75310e8dfd46e6e038aec32e13b3586731a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ca663786d9845861b4e1121ba75310e8dfd46e6e038aec32e13b3586731a8f->enter($__internal_93ca663786d9845861b4e1121ba75310e8dfd46e6e038aec32e13b3586731a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "receptionchassis/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93ca663786d9845861b4e1121ba75310e8dfd46e6e038aec32e13b3586731a8f->leave($__internal_93ca663786d9845861b4e1121ba75310e8dfd46e6e038aec32e13b3586731a8f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0d6a83ab672933880f1b77bb97cc93fc84d163bbb49629dc336ad0ae1668db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d6a83ab672933880f1b77bb97cc93fc84d163bbb49629dc336ad0ae1668db0->enter($__internal_c0d6a83ab672933880f1b77bb97cc93fc84d163bbb49629dc336ad0ae1668db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10\">
                    <h1>Receptionchasses list</h1>

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>N° Chassis</th>
                        <th>Generalchassis</th>
                        <th>Mecanicien</th>
                        <th>Contqualite</th>
                        <th>Responsablequalite</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["receptionchasses"] ?? $this->getContext($context, "receptionchasses")));
        foreach ($context['_seq'] as $context["_key"] => $context["receptionchassi"]) {
            // line 24
            echo "                        <tr>
                            <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_show", array("id" => $this->getAttribute($context["receptionchassi"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "nchassis", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "generalchassis", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "mecanicien", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "contqualite", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["receptionchassi"], "responsablequalite", array()), "html", null, true);
            echo "</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_show", array("id" => $this->getAttribute($context["receptionchassi"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_edit", array("id" => $this->getAttribute($context["receptionchassi"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_delete", array("id" => $this->getAttribute($context["receptionchassi"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receptionchassi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    </tbody>
                </table>
            </div>
        </div>


    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_new");
        echo "\">Create a new receptionchassi</a>
        </li>
    </ul>
    </div>
";
        
        $__internal_c0d6a83ab672933880f1b77bb97cc93fc84d163bbb49629dc336ad0ae1668db0->leave($__internal_c0d6a83ab672933880f1b77bb97cc93fc84d163bbb49629dc336ad0ae1668db0_prof);

    }

    public function getTemplateName()
    {
        return "receptionchassis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 54,  121 => 46,  109 => 40,  103 => 37,  97 => 34,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
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
                    <h1>Receptionchasses list</h1>

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>N° Chassis</th>
                        <th>Generalchassis</th>
                        <th>Mecanicien</th>
                        <th>Contqualite</th>
                        <th>Responsablequalite</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for receptionchassi in receptionchasses %}
                        <tr>
                            <td><a href=\"{{ path('receptionchassis_show', { 'id': receptionchassi.id }) }}\">{{ receptionchassi.id }}</a></td>
                            <td>{{ receptionchassi.nchassis }}</td>
                            <td>{{ receptionchassi.generalchassis }}</td>
                            <td>{{ receptionchassi.mecanicien }}</td>
                            <td>{{ receptionchassi.contqualite }}</td>
                            <td>{{ receptionchassi.responsablequalite }}</td>
                            <td>
                                <ul>
                                    <li>
                                        <a href=\"{{ path('receptionchassis_show', { 'id': receptionchassi.id }) }}\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('receptionchassis_edit', { 'id': receptionchassi.id }) }}\">edit</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('receptionchassis_delete', { 'id': receptionchassi.id }) }}\">Delete</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>


    <ul>
        <li>
            <a href=\"{{ path('receptionchassis_new') }}\">Create a new receptionchassi</a>
        </li>
    </ul>
    </div>
{% endblock %}
", "receptionchassis/index.html.twig", "/var/www/html/Alphabus/app/Resources/views/receptionchassis/index.html.twig");
    }
}
