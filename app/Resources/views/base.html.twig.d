<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}"/>


        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->

        <link rel="stylesheet" href="{{ asset('css/modern-business.css') }}">



    {% endblock %}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
</head>
<body>
{% block navigation %}


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-globe"></span> Alpha Bus</a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ path('homepage') }}">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services des chassis <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">

                            <li>
                                <a href="{{ path('list_chassis') }}">Controle Chassis</a>
                            </li>
                            <li>
                                <a href="{{ path('receptionchassis_index') }}">Reception Chassis</a>
                            </li>
                            <li>
                                <a href="{{ path('affectation_index') }}">Affectation Chassis</a>
                            </li>
                            <li>
                                <a href="{{ path('structure_index') }}">Controle Structure</a>
                            </li>
                            <li >
                                <a href="peinture.html">Controle Peinture</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{ path('post_index') }}"><span style="font-decoration:underline;">Événement</span></a>
                    </li>
                    <li>
                        <a href="#">  Gestion des clients</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="services/suivre_client.php">Suivre Client</a></li>
                            <li><a href="#">Suivre Production </a></li>
                            <li><a href="#">Imprime Fiches</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Log In Form -->
                <form class="navbar-form navbar-right form-inline">


                    <!-- start nav-right -->

                    <div class="nav navbar-nav navbar-right">
                        <a href="{{ path('fos_user_security_logout') }}">logout </a>&nbsp;&nbsp;
                        <a href="#" class="glyphicon glyphicon-user"></a>
                    </div>


                    <!--  end account-content -->


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/holder.min.js') }}"></script>

{% endblock %}
</body>
</html>
