<?php

/* basdecaisse/index.html.twig */
class __TwigTemplate_540327044ba182224bb559be6a952daa0cf492f36204c3070e8f2e22798ea6c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "basdecaisse/index.html.twig", 1);
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
        $__internal_1a8662f4f279c32c912905ac07aad47b2185ff5a347469e697a8d17aa77c2089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8662f4f279c32c912905ac07aad47b2185ff5a347469e697a8d17aa77c2089->enter($__internal_1a8662f4f279c32c912905ac07aad47b2185ff5a347469e697a8d17aa77c2089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basdecaisse/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a8662f4f279c32c912905ac07aad47b2185ff5a347469e697a8d17aa77c2089->leave($__internal_1a8662f4f279c32c912905ac07aad47b2185ff5a347469e697a8d17aa77c2089_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_07e16a23317b14c6f2342670c915947527c367093d2f230021c50e3a69685352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e16a23317b14c6f2342670c915947527c367093d2f230021c50e3a69685352->enter($__internal_07e16a23317b14c6f2342670c915947527c367093d2f230021c50e3a69685352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">

<p>
    <h3>Service Test : </h3><h2>Bas de caisse</h2>
            </p>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Soudurecnx</th>
                <th> chassis</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["basdecaisses"] ?? $this->getContext($context, "basdecaisses")));
        foreach ($context['_seq'] as $context["_key"] => $context["basdecaisse"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basdecaisse_show", array("id" => $this->getAttribute($context["basdecaisse"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["basdecaisse"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["basdecaisse"], "soudurecnx", array()), "html", null, true);
            echo "</td>

                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["basdecaisse"], "chassis", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basdecaisse_show", array("id" => $this->getAttribute($context["basdecaisse"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basdecaisse_edit", array("id" => $this->getAttribute($context["basdecaisse"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['basdecaisse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basdecaisse_new");
        echo "\">Create a new basdecaisse</a>
        </li>
    </ul>
        </div>

    </div>
";
        
        $__internal_07e16a23317b14c6f2342670c915947527c367093d2f230021c50e3a69685352->leave($__internal_07e16a23317b14c6f2342670c915947527c367093d2f230021c50e3a69685352_prof);

    }

    public function getTemplateName()
    {
        return "basdecaisse/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 43,  101 => 38,  89 => 32,  83 => 29,  76 => 25,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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

<p>
    <h3>Service Test : </h3><h2>Bas de caisse</h2>
            </p>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Soudurecnx</th>
                <th> chassis</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for basdecaisse in basdecaisses %}
            <tr>
                <td><a href=\"{{ path('basdecaisse_show', { 'id': basdecaisse.id }) }}\">{{ basdecaisse.id }}</a></td>
                <td>{{ basdecaisse.soudurecnx }}</td>

                <td>{{ basdecaisse.chassis }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('basdecaisse_show', { 'id': basdecaisse.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('basdecaisse_edit', { 'id': basdecaisse.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('basdecaisse_new') }}\">Create a new basdecaisse</a>
        </li>
    </ul>
        </div>

    </div>
{% endblock %}
", "basdecaisse/index.html.twig", "/var/www/html/Alphabus/app/Resources/views/basdecaisse/index.html.twig");
    }
}
