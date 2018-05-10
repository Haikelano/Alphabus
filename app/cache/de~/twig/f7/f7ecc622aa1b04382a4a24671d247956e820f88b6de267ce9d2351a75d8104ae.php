<?php

/* MyAlphabusBundle:Default:index.html.twig */
class __TwigTemplate_46d5044bb0423438327f0b05fc6c6a4f086391c917d099a9cebe008616e4ea50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "MyAlphabusBundle:Default:index.html.twig", 1);
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
        $__internal_cf742fd7cd6e492ea35c5411b0fe2ac575dfc41c89dae45a7a3fb9fbb356c241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf742fd7cd6e492ea35c5411b0fe2ac575dfc41c89dae45a7a3fb9fbb356c241->enter($__internal_cf742fd7cd6e492ea35c5411b0fe2ac575dfc41c89dae45a7a3fb9fbb356c241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyAlphabusBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf742fd7cd6e492ea35c5411b0fe2ac575dfc41c89dae45a7a3fb9fbb356c241->leave($__internal_cf742fd7cd6e492ea35c5411b0fe2ac575dfc41c89dae45a7a3fb9fbb356c241_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cab4f3a2564e3b5f7ee566bff45f43fbb5d76ec9fb8f5c172da87ca930fd8c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab4f3a2564e3b5f7ee566bff45f43fbb5d76ec9fb8f5c172da87ca930fd8c3d->enter($__internal_cab4f3a2564e3b5f7ee566bff45f43fbb5d76ec9fb8f5c172da87ca930fd8c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <header>
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class=\"carousel-item active\"
                     style=\"background-image: url('";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide/1.jpg"), "html", null, true);
        echo "')\">

                    <div class=\"carousel-caption d-none d-md-block\">
                        <h3>First Slide</h3>
                        <p>This is a description for the first slide.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class=\"carousel-item\" style=\"background-image: url('";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide/2.jpg"), "html", null, true);
        echo "')\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h3>Second Slide</h3>
                        <p>This is a description for the second slide.</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class=\"carousel-item\" style=\"background-image: url('http://placehold.it/1900x1080')\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h3>Third Slide</h3>
                        <p>This is a description for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class=\"container\">

        <h1 class=\"my-4\">Welcome to Modern Business</h1>

        <!-- Marketing Icons Section -->
        <div class=\"row\">
            <div class=\"col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <h4 class=\"card-header\">Card Title</h4>
                    <div class=\"card-body\">
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <h4 class=\"card-header\">Card Title</h4>
                    <div class=\"card-body\">
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <h4 class=\"card-header\">Card Title</h4>
                    <div class=\"card-body\">
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Portfolio Heading</h2>

        <div class=\"row\">
            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project One</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
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
            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/slide/1.jpg "), "html", null, true);
        echo "\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Three</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
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
            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
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
            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
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
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <h2>Modern Business Features</h2>
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li>
                        <strong>Bootstrap v4</strong>
                    </li>
                    <li>jQuery</li>
                    <li>Font Awesome</li>
                    <li>Working contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class=\"col-lg-6\">
                <img class=\"img-fluid rounded\" src=\"http://placehold.it/700x450\" alt=\"\">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class=\"row mb-4\">
            <div class=\"col-md-8\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class=\"col-md-4\">
                <a class=\"btn btn-lg btn-secondary btn-block\" href=\"#\">Call to Action</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class=\"py-5 bg-dark\">
        <div class=\"container\">
            <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2018</p>
        </div>
        <!-- /.container -->
    </footer>
";
        
        $__internal_cab4f3a2564e3b5f7ee566bff45f43fbb5d76ec9fb8f5c172da87ca930fd8c3d->leave($__internal_cab4f3a2564e3b5f7ee566bff45f43fbb5d76ec9fb8f5c172da87ca930fd8c3d_prof);

    }

    public function getTemplateName()
    {
        return "MyAlphabusBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 118,  63 => 22,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}
    <header>
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\" role=\"listbox\">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class=\"carousel-item active\"
                     style=\"background-image: url('{{ asset('images/slide/1.jpg') }}')\">

                    <div class=\"carousel-caption d-none d-md-block\">
                        <h3>First Slide</h3>
                        <p>This is a description for the first slide.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class=\"carousel-item\" style=\"background-image: url('{{ asset('images/slide/2.jpg') }}')\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h3>Second Slide</h3>
                        <p>This is a description for the second slide.</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class=\"carousel-item\" style=\"background-image: url('http://placehold.it/1900x1080')\">
                    <div class=\"carousel-caption d-none d-md-block\">
                        <h3>Third Slide</h3>
                        <p>This is a description for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class=\"container\">

        <h1 class=\"my-4\">Welcome to Modern Business</h1>

        <!-- Marketing Icons Section -->
        <div class=\"row\">
            <div class=\"col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <h4 class=\"card-header\">Card Title</h4>
                    <div class=\"card-body\">
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <h4 class=\"card-header\">Card Title</h4>
                    <div class=\"card-body\">
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 mb-4\">
                <div class=\"card h-100\">
                    <h4 class=\"card-header\">Card Title</h4>
                    <div class=\"card-body\">
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"#\" class=\"btn btn-primary\">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <h2>Portfolio Heading</h2>

        <div class=\"row\">
            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project One</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
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
            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
                <div class=\"card h-100\">
                    <a href=\"#\"><img class=\"card-img-top\" src=\"{{ asset('images/slide/1.jpg ') }}\" alt=\"\"></a>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">
                            <a href=\"#\">Project Three</a>
                        </h4>
                        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
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
            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
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
            <div class=\"col-lg-4 col-sm-6 portfolio-item\">
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
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <h2>Modern Business Features</h2>
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li>
                        <strong>Bootstrap v4</strong>
                    </li>
                    <li>jQuery</li>
                    <li>Font Awesome</li>
                    <li>Working contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class=\"col-lg-6\">
                <img class=\"img-fluid rounded\" src=\"http://placehold.it/700x450\" alt=\"\">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class=\"row mb-4\">
            <div class=\"col-md-8\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
            </div>
            <div class=\"col-md-4\">
                <a class=\"btn btn-lg btn-secondary btn-block\" href=\"#\">Call to Action</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class=\"py-5 bg-dark\">
        <div class=\"container\">
            <p class=\"m-0 text-center text-white\">Copyright &copy; Your Website 2018</p>
        </div>
        <!-- /.container -->
    </footer>
{% endblock %}", "MyAlphabusBundle:Default:index.html.twig", "/var/www/html/Alphabus/src/My/AlphabusBundle/Resources/views/Default/index.html.twig");
    }
}
