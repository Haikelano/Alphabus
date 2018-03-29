<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c71f4317e20f781c509829529ac051e14e6de231b1ca4c652acf3e5fab0d1646 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
    <div class=\"alert-danger\">
        <div class=\"col-sm-8\">
    ";
        // line 7
        if (($context["error"] ?? null)) {
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
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  94 => 40,  88 => 37,  75 => 27,  69 => 24,  62 => 20,  57 => 18,  53 => 17,  44 => 10,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Alphabus/src/My/UserBundle/Resources/views/Security/login.html.twig");
    }
}
