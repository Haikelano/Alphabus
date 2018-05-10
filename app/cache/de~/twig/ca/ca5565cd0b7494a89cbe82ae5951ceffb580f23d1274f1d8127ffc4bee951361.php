<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_73c9ad827fec9a738ed71bba6cbbf01327ad9c05c5b0d3b9db0b221c2c656300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_063979a4b4127b0bbafe1fe255d46757d9ed271330094e36c675511a0441c4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063979a4b4127b0bbafe1fe255d46757d9ed271330094e36c675511a0441c4c8->enter($__internal_063979a4b4127b0bbafe1fe255d46757d9ed271330094e36c675511a0441c4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_063979a4b4127b0bbafe1fe255d46757d9ed271330094e36c675511a0441c4c8->leave($__internal_063979a4b4127b0bbafe1fe255d46757d9ed271330094e36c675511a0441c4c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81f3a6cb07f3d47974d04c045bc94b44ddaef798e7ff5eb2f687fd4f64eed1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f3a6cb07f3d47974d04c045bc94b44ddaef798e7ff5eb2f687fd4f64eed1a8->enter($__internal_81f3a6cb07f3d47974d04c045bc94b44ddaef798e7ff5eb2f687fd4f64eed1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-5 col-lg-offset-4\">
                  <div class=\"align-content-lg-center\">
                      <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/log2.png"), "html", null, true);
        echo "\" style=\"width: 300px; height: 57px;\">
                      <h1> Alpha Bus Tunisie</h1>
                  </div>

               <form action=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                     <br/><br/>
                     <label for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom d'utilisateur", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                   <div class=\"input-group\">
                       <span class=\"input-group-addon\" ><i class=\"fa fa-user \"></i> User</span>

                       <input type=\"text\" class=\"form-control\" aria-describedby=\"basic-addon1\" id=\"username\" name=\"_username\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                       </div>
                      <br/>
                   <label for=\"password\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                   <div class=\"input-group\">

                       <span class=\"input-group-addon\" ><i class=\"fa fa-key \">Pass </i> </span>

                       <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
                   </div>
                   <br/>
                     <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                     <label for=\"remember_me\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                   <br/>

                   <button class=\"btn btn-primary\"id=\"_submit\"  name=\"_submit\" type=\"submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Envoyer</button>
               </form>
            <div class=\"alert alert-link\" > Not signed in yet? <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">New Employer</a></div>

                <div class=\"alert-danger\">

                        ";
        // line 43
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 44
            echo "                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("vous devez entre votre login et mot de passe  ", array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 46
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_81f3a6cb07f3d47974d04c045bc94b44ddaef798e7ff5eb2f687fd4f64eed1a8->leave($__internal_81f3a6cb07f3d47974d04c045bc94b44ddaef798e7ff5eb2f687fd4f64eed1a8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 46,  110 => 44,  108 => 43,  101 => 39,  96 => 37,  90 => 34,  77 => 24,  71 => 21,  64 => 17,  59 => 15,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}


    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-5 col-lg-offset-4\">
                  <div class=\"align-content-lg-center\">
                      <img src=\"{{ asset('images/log2.png') }}\" style=\"width: 300px; height: 57px;\">
                      <h1> Alpha Bus Tunisie</h1>
                  </div>

               <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                     <br/><br/>
                     <label for=\"username\">{{ 'Nom d\\'utilisateur'|trans({}, 'FOSUserBundle') }}</label>
                   <div class=\"input-group\">
                       <span class=\"input-group-addon\" ><i class=\"fa fa-user \"></i> User</span>

                       <input type=\"text\" class=\"form-control\" aria-describedby=\"basic-addon1\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
                       </div>
                      <br/>
                   <label for=\"password\">{{ 'Password'|trans({}, 'FOSUserBundle') }}</label>

                   <div class=\"input-group\">

                       <span class=\"input-group-addon\" ><i class=\"fa fa-key \">Pass </i> </span>

                       <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
                   </div>
                   <br/>
                     <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                     <label for=\"remember_me\">{{ 'Remember_me'|trans({}, 'FOSUserBundle') }}</label>
                   <br/>

                   <button class=\"btn btn-primary\"id=\"_submit\"  name=\"_submit\" type=\"submit\" value=\"{{ 'Submit'|trans({}, 'FOSUserBundle') }}\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Envoyer</button>
               </form>
            <div class=\"alert alert-link\" > Not signed in yet? <a href=\"{{ path('fos_user_registration_register') }}\">New Employer</a></div>

                <div class=\"alert-danger\">

                        {% if error %}
                            <div class=\"alert alert-danger\">{{ 'vous devez entre votre login et mot de passe  '|trans({}, 'FOSUserBundle') }}</div>
                        {% endif %}

                </div>
            </div>
        </div>
    </div>
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Alphabus/src/My/UserBundle/Resources/views/Security/login.html.twig");
    }
}
