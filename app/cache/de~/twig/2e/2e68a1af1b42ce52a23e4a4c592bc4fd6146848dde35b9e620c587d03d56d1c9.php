<?php

/* MyControlerBundle:ServiceCarroserie:index.html.twig */
class __TwigTemplate_3445a6b23b80da8719c734116303612ed4f7f292f88f3f362d11d92e44d8c49a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyControlerBundle:ServiceCarroserie:index.html.twig", 1);
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
        $__internal_77cb46e299a43c7179f15b40c134db715140097221241582ff059639d105f4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cb46e299a43c7179f15b40c134db715140097221241582ff059639d105f4ec->enter($__internal_77cb46e299a43c7179f15b40c134db715140097221241582ff059639d105f4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyControlerBundle:ServiceCarroserie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77cb46e299a43c7179f15b40c134db715140097221241582ff059639d105f4ec->leave($__internal_77cb46e299a43c7179f15b40c134db715140097221241582ff059639d105f4ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_63789efa47a797f222d8e9e83f9a83236d7a647c07178e8c1b695b185ab1df13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63789efa47a797f222d8e9e83f9a83236d7a647c07178e8c1b695b185ab1df13->enter($__internal_63789efa47a797f222d8e9e83f9a83236d7a647c07178e8c1b695b185ab1df13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ServiceCarroserie:";
        
        $__internal_63789efa47a797f222d8e9e83f9a83236d7a647c07178e8c1b695b185ab1df13->leave($__internal_63789efa47a797f222d8e9e83f9a83236d7a647c07178e8c1b695b185ab1df13_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d814e26fa957ccc34c5d8694049d5e549c8c1d7043352dceff00cdb634dfddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d814e26fa957ccc34c5d8694049d5e549c8c1d7043352dceff00cdb634dfddd->enter($__internal_0d814e26fa957ccc34c5d8694049d5e549c8c1d7043352dceff00cdb634dfddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\" style=\"padding-top: 20px; padding-bottom: 10px\" >
    <h2>Service de TEST</h2>
    <form method=\"get\" action=\"carrosserie\" >

        N°Chassis <input type=\"text\" name=\"nchassis\" class=\"search\">
        <input type=\"submit\" value=\"submit\" class=\"btn btn-primary\">
    </form>
    ";
        // line 13
        if ((($context["chassis"] ?? $this->getContext($context, "chassis")) != null)) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["chassis"] ?? $this->getContext($context, "chassis")));
            foreach ($context['_seq'] as $context["_key"] => $context["chassi"]) {
                // line 15
                echo "            <h4> Vous consulter le chassis ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["chassi"], "nchassis", array()), "html", null, true);
                echo "</h4>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chassi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        }
        // line 18
        echo "</div>

    <!-- Page Content -->
    <div class=\"container\">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class=\"mt-4 mb-3\">Inspection avant livraison carrosserie
            <small></small>
        </h1>

        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">
                <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
            </li>
            <li class=\"breadcrumb-item active\">Service Carrosserie</li>
        </ol>

        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/carrosserie/bascaise.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Bas de caisse</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Two</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Three</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Four</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Five</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Six</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Seven</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Eight</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci dicta dignissimos neque animi ea, veritatis, provident hic consequatur ut esse! Commodi ea consequatur accusantium, beatae qui deserunt tenetur ipsa.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <ul class=\"pagination justify-content-center\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">1</a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">2</a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">3</a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        </ul>

    </div>
    <!-- /.container -->

";
        
        $__internal_0d814e26fa957ccc34c5d8694049d5e549c8c1d7043352dceff00cdb634dfddd->leave($__internal_0d814e26fa957ccc34c5d8694049d5e549c8c1d7043352dceff00cdb634dfddd_prof);

    }

    public function getTemplateName()
    {
        return "MyControlerBundle:ServiceCarroserie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  95 => 30,  81 => 18,  78 => 17,  69 => 15,  64 => 14,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}ServiceCarroserie:{% endblock %}

{% block body %}
<div class=\"container\" style=\"padding-top: 20px; padding-bottom: 10px\" >
    <h2>Service de TEST</h2>
    <form method=\"get\" action=\"carrosserie\" >

        N°Chassis <input type=\"text\" name=\"nchassis\" class=\"search\">
        <input type=\"submit\" value=\"submit\" class=\"btn btn-primary\">
    </form>
    {% if chassis != null %}
        {% for chassi in chassis %}
            <h4> Vous consulter le chassis {{ chassi.nchassis }}</h4>
        {% endfor %}
    {% endif %}
</div>

    <!-- Page Content -->
    <div class=\"container\">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class=\"mt-4 mb-3\">Inspection avant livraison carrosserie
            <small></small>
        </h1>

        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">
                <a href=\"{{ path('homepage') }}\">Home</a>
            </li>
            <li class=\"breadcrumb-item active\">Service Carrosserie</li>
        </ol>

        <div class=\"row\">
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset('images/carrosserie/bascaise.jpg') }}\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Bas de caisse</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Two</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Three</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Four</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Five</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Six</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Seven</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Eight</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci dicta dignissimos neque animi ea, veritatis, provident hic consequatur ut esse! Commodi ea consequatur accusantium, beatae qui deserunt tenetur ipsa.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <ul class=\"pagination justify-content-center\">
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">1</a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">2</a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\">3</a>
            </li>
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        </ul>

    </div>
    <!-- /.container -->

{% endblock %}
", "MyControlerBundle:ServiceCarroserie:index.html.twig", "/var/www/html/Alphabus/src/My/ControlerBundle/Resources/views/ServiceCarroserie/index.html.twig");
    }
}
