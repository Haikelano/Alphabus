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
        $__internal_7224ed9aeacd12fb75b15a3a4e320bd8404e0c2a6d75e9b40f609a942884e7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7224ed9aeacd12fb75b15a3a4e320bd8404e0c2a6d75e9b40f609a942884e7fe->enter($__internal_7224ed9aeacd12fb75b15a3a4e320bd8404e0c2a6d75e9b40f609a942884e7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 19
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 88
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "    </body>
</html>
";
        
        $__internal_7224ed9aeacd12fb75b15a3a4e320bd8404e0c2a6d75e9b40f609a942884e7fe->leave($__internal_7224ed9aeacd12fb75b15a3a4e320bd8404e0c2a6d75e9b40f609a942884e7fe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_799f5f6bac489c46d9568dd0a6832cd44746a2801fba0b24a29bdbe14bb6ada4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799f5f6bac489c46d9568dd0a6832cd44746a2801fba0b24a29bdbe14bb6ada4->enter($__internal_799f5f6bac489c46d9568dd0a6832cd44746a2801fba0b24a29bdbe14bb6ada4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AlphaBus";
        
        $__internal_799f5f6bac489c46d9568dd0a6832cd44746a2801fba0b24a29bdbe14bb6ada4->leave($__internal_799f5f6bac489c46d9568dd0a6832cd44746a2801fba0b24a29bdbe14bb6ada4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0fb81bc41310bc5276d62323602c0a63dd2215547ada06a21346f603ba033014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb81bc41310bc5276d62323602c0a63dd2215547ada06a21346f603ba033014->enter($__internal_0fb81bc41310bc5276d62323602c0a63dd2215547ada06a21346f603ba033014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->

            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/modern-business.css"), "html", null, true);
        echo "\">



        ";
        
        $__internal_0fb81bc41310bc5276d62323602c0a63dd2215547ada06a21346f603ba033014->leave($__internal_0fb81bc41310bc5276d62323602c0a63dd2215547ada06a21346f603ba033014_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_5e57d3d2b9f0d1532a86fea5884c2c9b7382475338aa0312fbe55075b3558eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e57d3d2b9f0d1532a86fea5884c2c9b7382475338aa0312fbe55075b3558eeb->enter($__internal_5e57d3d2b9f0d1532a86fea5884c2c9b7382475338aa0312fbe55075b3558eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "

        <!-- Navigation -->
        <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">ALpha Bus Tunisie</a>
                <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                    <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">About</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 38
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
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_chassis");
        echo "\">Reception Chassis</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectation_index");
        echo "\">Affectation Chassis</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_index");
        echo "\">Controle Chassis</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_index");
        echo "\">Controle Structure</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("peinture_index");
        echo "\">Controle Peinture</a>
                            </div>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 57
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
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
                                <a class=\"dropdown-item\" href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Profile</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\">Edit Profile</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">logout </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    ";
        
        $__internal_5e57d3d2b9f0d1532a86fea5884c2c9b7382475338aa0312fbe55075b3558eeb->leave($__internal_5e57d3d2b9f0d1532a86fea5884c2c9b7382475338aa0312fbe55075b3558eeb_prof);

    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ab5296c0886c665be441cf3312b0c6063ee1171e7dbfc252ef9f93c7fae22c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab5296c0886c665be441cf3312b0c6063ee1171e7dbfc252ef9f93c7fae22c0->enter($__internal_1ab5296c0886c665be441cf3312b0c6063ee1171e7dbfc252ef9f93c7fae22c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  ";
        
        $__internal_1ab5296c0886c665be441cf3312b0c6063ee1171e7dbfc252ef9f93c7fae22c0->leave($__internal_1ab5296c0886c665be441cf3312b0c6063ee1171e7dbfc252ef9f93c7fae22c0_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_178d344802e8b4bbe18a7935b59508a551d013d656f9667db208f25dee4d07e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178d344802e8b4bbe18a7935b59508a551d013d656f9667db208f25dee4d07e3->enter($__internal_178d344802e8b4bbe18a7935b59508a551d013d656f9667db208f25dee4d07e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_178d344802e8b4bbe18a7935b59508a551d013d656f9667db208f25dee4d07e3->leave($__internal_178d344802e8b4bbe18a7935b59508a551d013d656f9667db208f25dee4d07e3_prof);

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
        return array (  250 => 93,  245 => 91,  242 => 90,  236 => 89,  224 => 88,  208 => 79,  204 => 78,  200 => 77,  194 => 74,  174 => 57,  167 => 53,  163 => 52,  159 => 51,  155 => 50,  151 => 49,  137 => 38,  131 => 35,  121 => 28,  114 => 23,  108 => 22,  96 => 14,  89 => 10,  84 => 8,  81 => 7,  75 => 6,  63 => 5,  54 => 96,  51 => 89,  48 => 88,  46 => 22,  39 => 19,  37 => 6,  33 => 5,  27 => 1,);
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

            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
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
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"{{ asset('js/jquery.min.js') }}\"></script>

            <script src=\"{{ asset('js/bootstrap.bundle.min.js') }}\"></script>

        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Alphabus/app/Resources/views/base.html.twig");
    }
}
