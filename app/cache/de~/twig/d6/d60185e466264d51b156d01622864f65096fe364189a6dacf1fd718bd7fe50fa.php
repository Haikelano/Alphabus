<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_dac77ea71e492adda09bceb1f848c2439aa8a2db930551970a3dcd2c57ac781d extends Twig_Template
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
        $__internal_c66a1acf38f14640991f8d2f1d1332d1deb72f9fb565f021cc6f47364f20a7f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66a1acf38f14640991f8d2f1d1332d1deb72f9fb565f021cc6f47364f20a7f7->enter($__internal_c66a1acf38f14640991f8d2f1d1332d1deb72f9fb565f021cc6f47364f20a7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c66a1acf38f14640991f8d2f1d1332d1deb72f9fb565f021cc6f47364f20a7f7->leave($__internal_c66a1acf38f14640991f8d2f1d1332d1deb72f9fb565f021cc6f47364f20a7f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8befc585222e50cf30a5dce1b4c99f5bc274537aad8fb43ef3b369aba671b966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8befc585222e50cf30a5dce1b4c99f5bc274537aad8fb43ef3b369aba671b966->enter($__internal_8befc585222e50cf30a5dce1b4c99f5bc274537aad8fb43ef3b369aba671b966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <div class=\"row\">
    <div class=\"alert-danger\">
        <div class=\"col-sm-8\">
    ";
        // line 7
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 8
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("vous devez entre votre login et mot de passe  ", array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "    </div>
    </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
               <form action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                   <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                   <br/><br/>
                   <label for=\"username\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom d'utilisateur", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                   <div class=\"input-group\">
                       <span class=\"input-group-addon\" ><i class=\"fa fa-user \"></i> User</span>

                       <input type=\"text\" class=\"form-control\" aria-describedby=\"basic-addon1\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                   </div>
                   <br/>
                   <label for=\"password\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                   <div class=\"input-group\">

                       <span class=\"input-group-addon\" ><i class=\"fa fa-key \">Pass </i> </span>

                       <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
                   </div>
                   <br/>
                   <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                   <label for=\"remember_me\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                   <br/>

                   <button class=\"btn btn-primary\"id=\"_submit\"  name=\"_submit\" type=\"submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-ok-sign\"></span> Envoyer</button>
               </form>
            </div>
        </div>
    </div>
";
        
        $__internal_8befc585222e50cf30a5dce1b4c99f5bc274537aad8fb43ef3b369aba671b966->leave($__internal_8befc585222e50cf30a5dce1b4c99f5bc274537aad8fb43ef3b369aba671b966_prof);

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
        return array (  103 => 40,  97 => 37,  84 => 27,  78 => 24,  71 => 20,  66 => 18,  62 => 17,  53 => 10,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
    <div class=\"row\">
    <div class=\"alert-danger\">
        <div class=\"col-sm-8\">
    {% if error %}
        <div>{{ 'vous devez entre votre login et mot de passe  '|trans({}, 'FOSUserBundle') }}</div>
    {% endif %}
    </div>
    </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
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
            </div>
        </div>
    </div>
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Alphabus/src/My/UserBundle/Resources/views/Security/login.html.twig");
    }
}
