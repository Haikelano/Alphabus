<?php

/* base.html.twig */
class __TwigTemplate_f6f08e01e412055afb9e78bb85fb49cb5df32b196e651e3a323cc2f55637b270 extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
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
                            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
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
                                    <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectation_index");
        echo "\">Affectation Chassis</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_index");
        echo "\">Controle Structure</a>
                                </li>
                                <li >
                                    <a href=\"peinture.html\">Controle Peinture</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\"><span style=\"font-decoration:underline;\">Événement</span></a>
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
    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
    }

    // line 111
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  226 => 115,  222 => 114,  218 => 113,  215 => 112,  212 => 111,  207 => 110,  182 => 89,  157 => 67,  145 => 58,  139 => 55,  133 => 52,  127 => 49,  117 => 42,  96 => 23,  93 => 22,  84 => 14,  77 => 10,  73 => 9,  69 => 8,  66 => 7,  63 => 6,  57 => 5,  51 => 118,  48 => 111,  45 => 110,  43 => 22,  36 => 19,  34 => 6,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/html/Alphabus/app/Resources/views/base.html.twig");
    }
}
