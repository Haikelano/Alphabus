<?php

/* base.html.twig */
class __TwigTemplate_eacc3447d728cd67eb4cfaf8d58f757498a1179a9afc717c304e5e3a4e552ce7 extends Twig_Template
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
        $__internal_541381fc7f876cc3b907c08abfc3b98bb7835db572a9c3be94bec2650e6074d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541381fc7f876cc3b907c08abfc3b98bb7835db572a9c3be94bec2650e6074d8->enter($__internal_541381fc7f876cc3b907c08abfc3b98bb7835db572a9c3be94bec2650e6074d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 110
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "    </body>
</html>
";
        
        $__internal_541381fc7f876cc3b907c08abfc3b98bb7835db572a9c3be94bec2650e6074d8->leave($__internal_541381fc7f876cc3b907c08abfc3b98bb7835db572a9c3be94bec2650e6074d8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf08447b181e98274afcde589ee67e333311a1b4369062577a184b7d57ecf261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf08447b181e98274afcde589ee67e333311a1b4369062577a184b7d57ecf261->enter($__internal_bf08447b181e98274afcde589ee67e333311a1b4369062577a184b7d57ecf261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bf08447b181e98274afcde589ee67e333311a1b4369062577a184b7d57ecf261->leave($__internal_bf08447b181e98274afcde589ee67e333311a1b4369062577a184b7d57ecf261_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ea3125a1fccc9457de8eb1e34a657691c61e6d23b7b1a98fbb46d36475fbde44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3125a1fccc9457de8eb1e34a657691c61e6d23b7b1a98fbb46d36475fbde44->enter($__internal_ea3125a1fccc9457de8eb1e34a657691c61e6d23b7b1a98fbb46d36475fbde44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->

            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">



        ";
        
        $__internal_ea3125a1fccc9457de8eb1e34a657691c61e6d23b7b1a98fbb46d36475fbde44->leave($__internal_ea3125a1fccc9457de8eb1e34a657691c61e6d23b7b1a98fbb46d36475fbde44_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_a89d91daf3e14bb7a28d20000e0aa124ac684ebe7713c5fd97cb6c86bcd314f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89d91daf3e14bb7a28d20000e0aa124ac684ebe7713c5fd97cb6c86bcd314f4->enter($__internal_a89d91daf3e14bb7a28d20000e0aa124ac684ebe7713c5fd97cb6c86bcd314f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "

        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <!-- Logo and responsive toggle -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\"><span class=\"glyphicon glyphicon-globe\"></span> Alpha Bus</a>
                </div>
                <!-- Navbar links -->
                <div class=\"collapse navbar-collapse\" id=\"navbar\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\">
                            <a href=\"index.php\">Home</a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Services des chassis <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"about-us\">

                                <li>
                                    <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list_chassis");
        echo "\">Controle Chassis</a>
                                </li>
                                <li>
                                    <a href=\"reception_chassis.php\">Reception Chassis</a>
                                </li>
                                <li>
                                    <a href=\"suivre_chassis.html\">Affectation Chassis</a>
                                </li>
                                <li>
                                    <a href=\"controle_structure_post.html\">Controle Structure</a>
                                </li>
                                <li >
                                    <a href=\"peinture.html\">Controle Peinture</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href=\"#\"><span style=\"font-decoration:underline;\">Gestion le reclamation</span></a>
                        </li>
                        <li>
                            <a href=\"#\">  Gestion des clients</a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Services <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"about-us\">
                                <li><a href=\"services/suivre_client.php\">Suivre Client</a></li>
                                <li><a href=\"#\">Suivre Production </a></li>
                                <li><a href=\"#\">Imprime Fiches</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Log In Form -->
                    <form class=\"navbar-form navbar-right form-inline\">


                        <!-- start nav-right -->
                        <div class=\"form-group\">

                            <div class=\"form-group\">&nbsp;</div>
                            <div class=\"form-group\"><a href=\"";
        // line 89
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">logout </a>&nbsp;&nbsp;
                                <a href=\"\"><img src=\"images/nav_logout.gif\" width=\"93\" height=\"16\" alt=\"\" /></a>
                            </div>


                            <!--  end account-content -->

                        </div>
                        <!-- end nav-right -->


                    </form>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>


    ";
        
        $__internal_a89d91daf3e14bb7a28d20000e0aa124ac684ebe7713c5fd97cb6c86bcd314f4->leave($__internal_a89d91daf3e14bb7a28d20000e0aa124ac684ebe7713c5fd97cb6c86bcd314f4_prof);

    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8cb83d1ace754f518a2abe56ee8fb18ffe4f349ee42e8527fa6818b93cfc255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8cb83d1ace754f518a2abe56ee8fb18ffe4f349ee42e8527fa6818b93cfc255->enter($__internal_c8cb83d1ace754f518a2abe56ee8fb18ffe4f349ee42e8527fa6818b93cfc255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c8cb83d1ace754f518a2abe56ee8fb18ffe4f349ee42e8527fa6818b93cfc255->leave($__internal_c8cb83d1ace754f518a2abe56ee8fb18ffe4f349ee42e8527fa6818b93cfc255_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e31f8357ce0e9c88f9a963857f6ae81131543b4980318a3f89b8093928a5dec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31f8357ce0e9c88f9a963857f6ae81131543b4980318a3f89b8093928a5dec2->enter($__internal_e31f8357ce0e9c88f9a963857f6ae81131543b4980318a3f89b8093928a5dec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_e31f8357ce0e9c88f9a963857f6ae81131543b4980318a3f89b8093928a5dec2->leave($__internal_e31f8357ce0e9c88f9a963857f6ae81131543b4980318a3f89b8093928a5dec2_prof);

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
        return array (  244 => 115,  240 => 114,  236 => 113,  233 => 112,  227 => 111,  216 => 110,  188 => 89,  145 => 49,  117 => 23,  111 => 22,  99 => 14,  92 => 10,  88 => 9,  84 => 8,  81 => 7,  75 => 6,  63 => 5,  54 => 118,  51 => 111,  48 => 110,  46 => 22,  39 => 19,  37 => 6,  33 => 5,  27 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}

            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
            <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
            <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->

            <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\">



        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    {% block navigation %}


        <!-- Navigation -->
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <!-- Logo and responsive toggle -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\"><span class=\"glyphicon glyphicon-globe\"></span> Alpha Bus</a>
                </div>
                <!-- Navbar links -->
                <div class=\"collapse navbar-collapse\" id=\"navbar\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\">
                            <a href=\"index.php\">Home</a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Services des chassis <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"about-us\">

                                <li>
                                    <a href=\"{{ path('list_chassis') }}\">Controle Chassis</a>
                                </li>
                                <li>
                                    <a href=\"reception_chassis.php\">Reception Chassis</a>
                                </li>
                                <li>
                                    <a href=\"suivre_chassis.html\">Affectation Chassis</a>
                                </li>
                                <li>
                                    <a href=\"controle_structure_post.html\">Controle Structure</a>
                                </li>
                                <li >
                                    <a href=\"peinture.html\">Controle Peinture</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href=\"#\"><span style=\"font-decoration:underline;\">Gestion le reclamation</span></a>
                        </li>
                        <li>
                            <a href=\"#\">  Gestion des clients</a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Services <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" aria-labelledby=\"about-us\">
                                <li><a href=\"services/suivre_client.php\">Suivre Client</a></li>
                                <li><a href=\"#\">Suivre Production </a></li>
                                <li><a href=\"#\">Imprime Fiches</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Log In Form -->
                    <form class=\"navbar-form navbar-right form-inline\">


                        <!-- start nav-right -->
                        <div class=\"form-group\">

                            <div class=\"form-group\">&nbsp;</div>
                            <div class=\"form-group\"><a href=\"{{ path('fos_user_security_logout') }}\">logout </a>&nbsp;&nbsp;
                                <a href=\"\"><img src=\"images/nav_logout.gif\" width=\"93\" height=\"16\" alt=\"\" /></a>
                            </div>


                            <!--  end account-content -->

                        </div>
                        <!-- end nav-right -->


                    </form>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>


    {% endblock %}
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
            <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>

        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Alphabus/app/Resources/views/base.html.twig");
    }
}
