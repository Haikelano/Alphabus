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
        $__internal_1b4a0cb71d1e37683682498e8be19a6d80249ac1c735c6ac3d720be6ab546528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4a0cb71d1e37683682498e8be19a6d80249ac1c735c6ac3d720be6ab546528->enter($__internal_1b4a0cb71d1e37683682498e8be19a6d80249ac1c735c6ac3d720be6ab546528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1b4a0cb71d1e37683682498e8be19a6d80249ac1c735c6ac3d720be6ab546528->leave($__internal_1b4a0cb71d1e37683682498e8be19a6d80249ac1c735c6ac3d720be6ab546528_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_73dedbfa9995f8ff7a34372e1b5e6be49289ebd5fd62ac7766c21cdb13a16942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73dedbfa9995f8ff7a34372e1b5e6be49289ebd5fd62ac7766c21cdb13a16942->enter($__internal_73dedbfa9995f8ff7a34372e1b5e6be49289ebd5fd62ac7766c21cdb13a16942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_73dedbfa9995f8ff7a34372e1b5e6be49289ebd5fd62ac7766c21cdb13a16942->leave($__internal_73dedbfa9995f8ff7a34372e1b5e6be49289ebd5fd62ac7766c21cdb13a16942_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e3304a10fb1daf28396fc7aab789931fe12e56f5a4d721cb9ebd56c659677ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3304a10fb1daf28396fc7aab789931fe12e56f5a4d721cb9ebd56c659677ae->enter($__internal_6e3304a10fb1daf28396fc7aab789931fe12e56f5a4d721cb9ebd56c659677ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6e3304a10fb1daf28396fc7aab789931fe12e56f5a4d721cb9ebd56c659677ae->leave($__internal_6e3304a10fb1daf28396fc7aab789931fe12e56f5a4d721cb9ebd56c659677ae_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4b0bb92ef8cba0d9682fed7ffa723b97af48e8f83311d34e98e06d70cee533e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0bb92ef8cba0d9682fed7ffa723b97af48e8f83311d34e98e06d70cee533e7->enter($__internal_4b0bb92ef8cba0d9682fed7ffa723b97af48e8f83311d34e98e06d70cee533e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
                                    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("receptionchassis_index");
        echo "\">Reception Chassis</a>
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
        
        $__internal_4b0bb92ef8cba0d9682fed7ffa723b97af48e8f83311d34e98e06d70cee533e7->leave($__internal_4b0bb92ef8cba0d9682fed7ffa723b97af48e8f83311d34e98e06d70cee533e7_prof);

    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
        $__internal_3248203e1735c6061449bb1cc412db828dfc284a21b0904cb471ba71a2c18af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3248203e1735c6061449bb1cc412db828dfc284a21b0904cb471ba71a2c18af7->enter($__internal_3248203e1735c6061449bb1cc412db828dfc284a21b0904cb471ba71a2c18af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3248203e1735c6061449bb1cc412db828dfc284a21b0904cb471ba71a2c18af7->leave($__internal_3248203e1735c6061449bb1cc412db828dfc284a21b0904cb471ba71a2c18af7_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b720b8a315c5c3b1a1773b7c1ead7b55265d9fb50909f1f3d5a152724dc53484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b720b8a315c5c3b1a1773b7c1ead7b55265d9fb50909f1f3d5a152724dc53484->enter($__internal_b720b8a315c5c3b1a1773b7c1ead7b55265d9fb50909f1f3d5a152724dc53484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b720b8a315c5c3b1a1773b7c1ead7b55265d9fb50909f1f3d5a152724dc53484->leave($__internal_b720b8a315c5c3b1a1773b7c1ead7b55265d9fb50909f1f3d5a152724dc53484_prof);

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
        return array (  247 => 115,  243 => 114,  239 => 113,  236 => 112,  230 => 111,  219 => 110,  191 => 89,  151 => 52,  145 => 49,  117 => 23,  111 => 22,  99 => 14,  92 => 10,  88 => 9,  84 => 8,  81 => 7,  75 => 6,  63 => 5,  54 => 118,  51 => 111,  48 => 110,  46 => 22,  39 => 19,  37 => 6,  33 => 5,  27 => 1,);
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
                                    <a href=\"{{ path('receptionchassis_index') }}\">Reception Chassis</a>
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
