<?php

/* circuitelectrique/index.html.twig */
class __TwigTemplate_3c72d2d7c13ddb73ccfbbded79060cc3203bf89c52d08b4c693934c8566de059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "circuitelectrique/index.html.twig", 1);
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
        $__internal_b05b5567789477b74b407bef356807a1e29c578055a582dbb0a1ee14e0fe99ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05b5567789477b74b407bef356807a1e29c578055a582dbb0a1ee14e0fe99ec->enter($__internal_b05b5567789477b74b407bef356807a1e29c578055a582dbb0a1ee14e0fe99ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "circuitelectrique/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b05b5567789477b74b407bef356807a1e29c578055a582dbb0a1ee14e0fe99ec->leave($__internal_b05b5567789477b74b407bef356807a1e29c578055a582dbb0a1ee14e0fe99ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_70cb1c1ec3255cbd4b9ad0985a1b7f6c1c00ccbde9d95c783744637f327bd2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70cb1c1ec3255cbd4b9ad0985a1b7f6c1c00ccbde9d95c783744637f327bd2fe->enter($__internal_70cb1c1ec3255cbd4b9ad0985a1b7f6c1c00ccbde9d95c783744637f327bd2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Circuitelectriques list</h1>

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
        $context['_seq'] = twig_ensure_traversable(($context["circuitelectriques"] ?? $this->getContext($context, "circuitelectriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["circuitelectrique"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circuitelectrique_show", array("id" => $this->getAttribute($context["circuitelectrique"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["circuitelectrique"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["circuitelectrique"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>


                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circuitelectrique_show", array("id" => $this->getAttribute($context["circuitelectrique"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circuitelectrique_edit", array("id" => $this->getAttribute($context["circuitelectrique"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['circuitelectrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("circuitelectrique_new");
        echo "\">Create a new circuitelectrique</a>
        </li>
    </ul>
";
        
        $__internal_70cb1c1ec3255cbd4b9ad0985a1b7f6c1c00ccbde9d95c783744637f327bd2fe->leave($__internal_70cb1c1ec3255cbd4b9ad0985a1b7f6c1c00ccbde9d95c783744637f327bd2fe_prof);

    }

    public function getTemplateName()
    {
        return "circuitelectrique/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  93 => 33,  81 => 27,  75 => 24,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Circuitelectriques list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for circuitelectrique in circuitelectriques %}
            <tr>
                <td><a href=\"{{ path('circuitelectrique_show', { 'id': circuitelectrique.id }) }}\">{{ circuitelectrique.id }}</a></td>
                <td>{{ circuitelectrique.date|date('Y-m-d H:i:s') }}</td>


                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('circuitelectrique_show', { 'id': circuitelectrique.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('circuitelectrique_edit', { 'id': circuitelectrique.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('circuitelectrique_new') }}\">Create a new circuitelectrique</a>
        </li>
    </ul>
{% endblock %}
", "circuitelectrique/index.html.twig", "/var/www/html/Alphabus/app/Resources/views/circuitelectrique/index.html.twig");
    }
}
