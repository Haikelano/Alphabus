<?php

/* structure/index.html.twig */
class __TwigTemplate_2092c7ac66d32c8929612f8ec567d2b9732ceca5b5d98937da1248409330bd1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "structure/index.html.twig", 1);
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
        $__internal_992d78c7ebbcf506eaaa8a7f99ed29f792efff0a50b0f55ebd5f8ee72993b269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992d78c7ebbcf506eaaa8a7f99ed29f792efff0a50b0f55ebd5f8ee72993b269->enter($__internal_992d78c7ebbcf506eaaa8a7f99ed29f792efff0a50b0f55ebd5f8ee72993b269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "structure/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_992d78c7ebbcf506eaaa8a7f99ed29f792efff0a50b0f55ebd5f8ee72993b269->leave($__internal_992d78c7ebbcf506eaaa8a7f99ed29f792efff0a50b0f55ebd5f8ee72993b269_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0c2fdd3e78f3599adfdbb767b056aa14c83055ab557795ddd2825d429d4328d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c2fdd3e78f3599adfdbb767b056aa14c83055ab557795ddd2825d429d4328d->enter($__internal_d0c2fdd3e78f3599adfdbb767b056aa14c83055ab557795ddd2825d429d4328d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
    <h1>Structures list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>protectionchassis</th>
                <th>Etat</th>
                <th>Repremarques</th>
                <th>N° Chassis</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["structures"] ?? $this->getContext($context, "structures")));
        foreach ($context['_seq'] as $context["_key"] => $context["structure"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_show", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "protectionchassis", array()), "html", null, true);
            echo "</td>
                
                 <td>";
            // line 25
            if (($this->getAttribute($context["structure"], "repremarques", array()) == null)) {
                echo " 
                    <span class=\"label label-success\">fonctionnement</span> 
                    ";
            } else {
                // line 28
                echo "                   <span class=\"label label-danger\">Etat critique</span>
                     ";
            }
            // line 29
            echo " </td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "repremarques", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "chassis", array()), "html", null, true);
            echo "</td>
                <td>
                 <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_show", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">show</a>
                </td>
                <td>
                 <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_edit", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                 </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['structure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_new");
        echo "\">Create a new structure</a>
        </li>
    </ul>
        </div>           
";
        
        $__internal_d0c2fdd3e78f3599adfdbb767b056aa14c83055ab557795ddd2825d429d4328d->leave($__internal_d0c2fdd3e78f3599adfdbb767b056aa14c83055ab557795ddd2825d429d4328d_prof);

    }

    public function getTemplateName()
    {
        return "structure/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 45,  114 => 40,  104 => 36,  98 => 33,  93 => 31,  89 => 30,  86 => 29,  82 => 28,  76 => 25,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Structures list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>protectionchassis</th>
                <th>Etat</th>
                <th>Repremarques</th>
                <th>N° Chassis</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
        {% for structure in structures %}
            <tr>
                <td><a href=\"{{ path('structure_show', { 'id': structure.id }) }}\">{{ structure.id }}</a></td>
                <td>{{ structure.protectionchassis }}</td>
                
                 <td>{% if structure.repremarques == null %} 
                    <span class=\"label label-success\">fonctionnement</span> 
                    {% else %}
                   <span class=\"label label-danger\">Etat critique</span>
                     {% endif %} </td>
                <td>{{ structure.repremarques }}</td>
                <td>{{ structure.chassis }}</td>
                <td>
                 <a href=\"{{ path('structure_show', { 'id': structure.id }) }}\">show</a>
                </td>
                <td>
                 <a href=\"{{ path('structure_edit', { 'id': structure.id }) }}\">edit</a>
                 </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('structure_new') }}\">Create a new structure</a>
        </li>
    </ul>
        </div>           
{% endblock %}
", "structure/index.html.twig", "/var/www/html/Alphabus/app/Resources/views/structure/index.html.twig");
    }
}
