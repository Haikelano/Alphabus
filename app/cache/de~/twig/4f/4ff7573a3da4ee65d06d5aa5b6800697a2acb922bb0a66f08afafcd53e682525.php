<?php

/* post/show.html.twig */
class __TwigTemplate_6cccc0cb99612f2be932e61c0218f91f44ef607fd6e72592dd52b7f43e0357cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
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
        $__internal_9ecddd11aaa05a90cb0c652b1db032fb89fe8218f4d626536a1673528a5ee662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecddd11aaa05a90cb0c652b1db032fb89fe8218f4d626536a1673528a5ee662->enter($__internal_9ecddd11aaa05a90cb0c652b1db032fb89fe8218f4d626536a1673528a5ee662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ecddd11aaa05a90cb0c652b1db032fb89fe8218f4d626536a1673528a5ee662->leave($__internal_9ecddd11aaa05a90cb0c652b1db032fb89fe8218f4d626536a1673528a5ee662_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2dc7677960cf60a33b4e6030204c455fa61d915c9c21d703a25a54bda727c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2dc7677960cf60a33b4e6030204c455fa61d915c9c21d703a25a54bda727c78->enter($__internal_c2dc7677960cf60a33b4e6030204c455fa61d915c9c21d703a25a54bda727c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Images</th>
                <td><img class=\"img-fluid rounded\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "path", array()))), "html", null, true);
        echo "\" style=\"width:750px ; height: 300px;\" alt=\"\"></td>
            </tr>
            <tr>
                <th>Remarques</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "remarques", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "date", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Proprietaire</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "proprietaire", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c2dc7677960cf60a33b4e6030204c455fa61d915c9c21d703a25a54bda727c78->leave($__internal_c2dc7677960cf60a33b4e6030204c455fa61d915c9c21d703a25a54bda727c78_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 41,  100 => 39,  94 => 36,  88 => 33,  78 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Post</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ post.id }}</td>
            </tr>
            <tr>
                <th>Images</th>
                <td><img class=\"img-fluid rounded\" src=\"{{ asset('images/'~post.path)}}\" style=\"width:750px ; height: 300px;\" alt=\"\"></td>
            </tr>
            <tr>
                <th>Remarques</th>
                <td>{{ post.remarques }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if post.date %}{{ post.date|date('Y-m-d') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Proprietaire</th>
                <td>{{ post.proprietaire }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('post_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "post/show.html.twig", "/var/www/html/Alphabus/app/Resources/views/post/show.html.twig");
    }
}
