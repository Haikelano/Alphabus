<?php

/* post/index.html.twig */
class __TwigTemplate_1c682b8c3a4f172bd67b2c22abffb1122672a4880f9bb9f96af9d7bd65a2b34c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11f582c02fcdffec08653f8b704e862ce76cf4ebd53d7164a51b3a6c1b2d7a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f582c02fcdffec08653f8b704e862ce76cf4ebd53d7164a51b3a6c1b2d7a0e->enter($__internal_11f582c02fcdffec08653f8b704e862ce76cf4ebd53d7164a51b3a6c1b2d7a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11f582c02fcdffec08653f8b704e862ce76cf4ebd53d7164a51b3a6c1b2d7a0e->leave($__internal_11f582c02fcdffec08653f8b704e862ce76cf4ebd53d7164a51b3a6c1b2d7a0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f091f72aceb01ad2f15c9edcac12117e10104b1d30e84a5ec6be642e25bfd72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f091f72aceb01ad2f15c9edcac12117e10104b1d30e84a5ec6be642e25bfd72->enter($__internal_1f091f72aceb01ad2f15c9edcac12117e10104b1d30e84a5ec6be642e25bfd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>



    <!-- Page Content -->
    <div class=\"container\">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class=\"mt-4 mb-3\">Blog Home Two
            <small>Subheading</small>
        </h1>

        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">
                <a href=\"index.html\">Home</a>
            </li>
            <li class=\"breadcrumb-item active\">Blog Home 2</li>
        </ol>


    <ul>
        <li>
            <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\">Create a new post</a>
        </li>
    </ul>

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["posts"] ?? $this->getContext($context, "posts"))));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 32
            echo "
        <!-- Blog Post -->
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <a href=\"#\">
                            <img class=\"img-fluid rounded\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["post"], "path", array()))), "html", null, true);
            echo "\" style=\"width:750px ; height: 300px;\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-lg-6\">
                        <h2 class=\"card-title\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo "</h2>
                        <p class=\"card-text\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "remarques", array()), "html", null, true);
            echo "</p>
                        <a href=\"#\" class=\"btn btn-primary\">Read More &rarr;</a>
                    </div>
                </div>
            </div>
            <div class=\"card-footer text-muted\">
                Crée le ";
            // line 50
            if ($this->getAttribute($context["post"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "Y-m-d"), "html", null, true);
                echo "
                    à ";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "H:i:s"), "html", null, true);
            }
            echo " by
                ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "proprietaire", array()), "html", null, true);
            echo "
                <a href=\"#\">Start Bootstrap</a>
                <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                ";
            // line 55
            if (($this->getAttribute($context["post"], "etat", array()) == true)) {
                // line 56
                echo "                <div class=\"alert alert-success\">

                    Votre Réclamation a bien été traitée et tout fonctionne
                </div>
                ";
            } else {
                // line 61
                echo "                    <div class=\"alert alert-danger\">

                        Votre Réclamation a bien été prise en compte
                    </div>
                ";
            }
            // line 66
            echo "            </div>
        </div>





            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        <br/>
        <br/>
        <br/>
        <footer class=\"row\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"offset-4\">   ";
        // line 81
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["posts"] ?? $this->getContext($context, "posts")));
        echo "</div>
            </div>
        </div>
        </footer>
        </div>
    </div>

";
        
        $__internal_1f091f72aceb01ad2f15c9edcac12117e10104b1d30e84a5ec6be642e25bfd72->leave($__internal_1f091f72aceb01ad2f15c9edcac12117e10104b1d30e84a5ec6be642e25bfd72_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2e42d489956f405f6090baa00002167b68188f0d926ab7c940d2a3b620fdd47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e42d489956f405f6090baa00002167b68188f0d926ab7c940d2a3b620fdd47->enter($__internal_c2e42d489956f405f6090baa00002167b68188f0d926ab7c940d2a3b620fdd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Réclamation";
        
        $__internal_c2e42d489956f405f6090baa00002167b68188f0d926ab7c940d2a3b620fdd47->leave($__internal_c2e42d489956f405f6090baa00002167b68188f0d926ab7c940d2a3b620fdd47_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 5,  166 => 81,  157 => 74,  144 => 66,  137 => 61,  130 => 56,  128 => 55,  124 => 54,  119 => 52,  114 => 51,  109 => 50,  100 => 44,  96 => 43,  89 => 39,  80 => 32,  76 => 31,  69 => 27,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
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

    <title>{% block title %}Réclamation{% endblock %}</title>



    <!-- Page Content -->
    <div class=\"container\">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class=\"mt-4 mb-3\">Blog Home Two
            <small>Subheading</small>
        </h1>

        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">
                <a href=\"index.html\">Home</a>
            </li>
            <li class=\"breadcrumb-item active\">Blog Home 2</li>
        </ol>


    <ul>
        <li>
            <a href=\"{{ path('post_new') }}\">Create a new post</a>
        </li>
    </ul>

    {% for post in posts |reverse %}

        <!-- Blog Post -->
        <div class=\"card mb-4\">
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <a href=\"#\">
                            <img class=\"img-fluid rounded\" src=\"{{ asset('images/'~post.path)}}\" style=\"width:750px ; height: 300px;\" alt=\"\">
                        </a>
                    </div>
                    <div class=\"col-lg-6\">
                        <h2 class=\"card-title\">{{ post.titre }}</h2>
                        <p class=\"card-text\">{{ post.remarques }}</p>
                        <a href=\"#\" class=\"btn btn-primary\">Read More &rarr;</a>
                    </div>
                </div>
            </div>
            <div class=\"card-footer text-muted\">
                Crée le {% if post.date %}{{ post.date|date('Y-m-d') }}
                    à {{ post.date|date('H:i:s') }}{% endif %} by
                {{ post.proprietaire }}
                <a href=\"#\">Start Bootstrap</a>
                <a href=\"{{ path('post_show', { 'id': post.id }) }}\">Voir</a>
                {% if post.etat == true %}
                <div class=\"alert alert-success\">

                    Votre Réclamation a bien été traitée et tout fonctionne
                </div>
                {% else %}
                    <div class=\"alert alert-danger\">

                        Votre Réclamation a bien été prise en compte
                    </div>
                {% endif %}
            </div>
        </div>





            {% endfor %}
        <br/>
        <br/>
        <br/>
        <footer class=\"row\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"offset-4\">   {{ knp_pagination_render(posts) }}</div>
            </div>
        </div>
        </footer>
        </div>
    </div>

{% endblock %}
", "post/index.html.twig", "/var/www/html/Alphabus/app/Resources/views/post/index.html.twig");
    }
}
