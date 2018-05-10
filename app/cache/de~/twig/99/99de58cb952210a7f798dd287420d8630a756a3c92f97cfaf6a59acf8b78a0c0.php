<?php

/* base.html.twig */
class __TwigTemplate_267f10a0d738db415f6753ebbb00b1004d22aad0a7f5e5fa946371fe37e2ea44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db890f3a3ada4aa7721f5c50baa22094551e3a775e119aa77d3d3c4d9accaf42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db890f3a3ada4aa7721f5c50baa22094551e3a775e119aa77d3d3c4d9accaf42->enter($__internal_db890f3a3ada4aa7721f5c50baa22094551e3a775e119aa77d3d3c4d9accaf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 16
        $this->displayBlock('navigation', $context, $blocks);
        // line 82
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "    </body>
</html>
";
        
        $__internal_db890f3a3ada4aa7721f5c50baa22094551e3a775e119aa77d3d3c4d9accaf42->leave($__internal_db890f3a3ada4aa7721f5c50baa22094551e3a775e119aa77d3d3c4d9accaf42_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8aacbb78ec9391b1f3cc70e932a751daa9feabf53e77605c13ffa9fcd4c02507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aacbb78ec9391b1f3cc70e932a751daa9feabf53e77605c13ffa9fcd4c02507->enter($__internal_8aacbb78ec9391b1f3cc70e932a751daa9feabf53e77605c13ffa9fcd4c02507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AlphaBus";
        
        $__internal_8aacbb78ec9391b1f3cc70e932a751daa9feabf53e77605c13ffa9fcd4c02507->leave($__internal_8aacbb78ec9391b1f3cc70e932a751daa9feabf53e77605c13ffa9fcd4c02507_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_51bfd764ac581ac03a18d25e2a7288252527f04dec85f6a79fcaefa994bb5be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bfd764ac581ac03a18d25e2a7288252527f04dec85f6a79fcaefa994bb5be5->enter($__internal_51bfd764ac581ac03a18d25e2a7288252527f04dec85f6a79fcaefa994bb5be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <!-- <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\"> -->
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/modern-business.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_51bfd764ac581ac03a18d25e2a7288252527f04dec85f6a79fcaefa994bb5be5->leave($__internal_51bfd764ac581ac03a18d25e2a7288252527f04dec85f6a79fcaefa994bb5be5_prof);

    }

    // line 16
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_051c10050e26460cb4951c5990deeeab6cf8afafc47cfa1f6f5a2108388c767c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051c10050e26460cb4951c5990deeeab6cf8afafc47cfa1f6f5a2108388c767c->enter($__internal_051c10050e26460cb4951c5990deeeab6cf8afafc47cfa1f6f5a2108388c767c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 17
        echo "

        <!-- Navigation -->
        <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">ALpha Bus Tunisie</a>
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">About</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("service_test");
        echo "\">Services</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Services Productions
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                                <a class=\"dropdown-item\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_chassis");
        echo "\">Reception Chassis</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectation_index");
        echo "\">Affectation Chassis</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_index");
        echo "\">Controle Chassis</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_index");
        echo "\">Controle Structure</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_index");
        echo "\">Controle Peinture</a>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\">Evénements</a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Other Pages
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                                <a class=\"dropdown-item\" href=\"full-width.html\">Full Width Page</a>
                                <a class=\"dropdown-item\" href=\"sidebar.html\">Sidebar Page</a>
                                <a class=\"dropdown-item\" href=\"faq.html\">FAQ</a>
                                <a class=\"dropdown-item\" href=\"404.html\">404</a>
                                <a class=\"dropdown-item\" href=\"pricing.html\">Pricing Table</a>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa fa-user \"></i> ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                                <a class=\"dropdown-item\" href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Profile</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Edit Profile</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">logout </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    ";
        
        $__internal_051c10050e26460cb4951c5990deeeab6cf8afafc47cfa1f6f5a2108388c767c->leave($__internal_051c10050e26460cb4951c5990deeeab6cf8afafc47cfa1f6f5a2108388c767c_prof);

    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b919ea2bbe7feedcddf4cad3fbb807127511e32b55324dc3c437406fb3f7c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b919ea2bbe7feedcddf4cad3fbb807127511e32b55324dc3c437406fb3f7c65->enter($__internal_1b919ea2bbe7feedcddf4cad3fbb807127511e32b55324dc3c437406fb3f7c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  ";
        
        $__internal_1b919ea2bbe7feedcddf4cad3fbb807127511e32b55324dc3c437406fb3f7c65->leave($__internal_1b919ea2bbe7feedcddf4cad3fbb807127511e32b55324dc3c437406fb3f7c65_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_522bd10ce83152596c8846bc529b9733db1f010fa8b36ee216ba2da9cefd4ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522bd10ce83152596c8846bc529b9733db1f010fa8b36ee216ba2da9cefd4ce9->enter($__internal_522bd10ce83152596c8846bc529b9733db1f010fa8b36ee216ba2da9cefd4ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "

            <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_522bd10ce83152596c8846bc529b9733db1f010fa8b36ee216ba2da9cefd4ce9->leave($__internal_522bd10ce83152596c8846bc529b9733db1f010fa8b36ee216ba2da9cefd4ce9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 88,  240 => 86,  236 => 84,  230 => 83,  218 => 82,  202 => 73,  198 => 72,  194 => 71,  188 => 68,  168 => 51,  161 => 47,  157 => 46,  153 => 45,  149 => 44,  145 => 43,  131 => 32,  125 => 29,  115 => 22,  108 => 17,  102 => 16,  93 => 11,  88 => 9,  84 => 8,  81 => 7,  75 => 6,  63 => 5,  54 => 91,  51 => 83,  48 => 82,  46 => 16,  39 => 13,  37 => 6,  33 => 5,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}AlphaBus{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <!-- <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\"> -->
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
            <link rel=\"stylesheet\" href=\"{{ asset('css/modern-business.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    {% block navigation %}


        <!-- Navigation -->
        <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">ALpha Bus Tunisie</a>
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('homepage') }}\">About</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('service_test') }}\">Services</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"contact.html\">Contact</a>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownPortfolio\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Services Productions
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownPortfolio\">
                                <a class=\"dropdown-item\" href=\"{{ path('list_chassis') }}\">Reception Chassis</a>
                                <a class=\"dropdown-item\" href=\"{{ path('affectation_index') }}\">Affectation Chassis</a>
                                <a class=\"dropdown-item\" href=\"{{ path('receptionchassis_index') }}\">Controle Chassis</a>
                                <a class=\"dropdown-item\" href=\"{{ path('structure_index') }}\">Controle Structure</a>
                                <a class=\"dropdown-item\" href=\"{{ path('peinture_index') }}\">Controle Peinture</a>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('post_index') }}\">Evénements</a>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                Other Pages
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                                <a class=\"dropdown-item\" href=\"full-width.html\">Full Width Page</a>
                                <a class=\"dropdown-item\" href=\"sidebar.html\">Sidebar Page</a>
                                <a class=\"dropdown-item\" href=\"faq.html\">FAQ</a>
                                <a class=\"dropdown-item\" href=\"404.html\">404</a>
                                <a class=\"dropdown-item\" href=\"pricing.html\">Pricing Table</a>
                            </div>
                        </li>

                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fa fa-user \"></i> {{ app.user.username }}
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                                <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_show') }}\">Profile</a>
                                <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_edit') }}\">Edit Profile</a>
                                <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_logout') }}\">logout </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    {% endblock %}
        {% block body %}  {% endblock %}
        {% block javascripts %}


            <script src=\"{{ asset('js/jquery.min.js') }}\"></script>

            <script src=\"{{ asset('js/bootstrap.bundle.min.js') }}\"></script>

        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Alphabus/app/Resources/views/base.html.twig");
    }
}
