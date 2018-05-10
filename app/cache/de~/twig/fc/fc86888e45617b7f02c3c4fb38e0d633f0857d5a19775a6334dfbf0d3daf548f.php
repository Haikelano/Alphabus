<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_2da0305dfa88d94f7a56201c5fd2941857a4b560a0be394319767e96c0bb48a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_114d4febe39ebba354aafc9db95f033b5d6a253f9979a73451d94ebae82c8722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114d4febe39ebba354aafc9db95f033b5d6a253f9979a73451d94ebae82c8722->enter($__internal_114d4febe39ebba354aafc9db95f033b5d6a253f9979a73451d94ebae82c8722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "

<div class=\"container\">
    <div class=\"row\">

        <div class=\"fos_user_user_show\">
            <p>    Last login in : ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "m/d/Y"), "html", null, true);
        echo "  à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "lastLogin", array()), "H:i:s"), "html", null, true);
        echo " </p>
            <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Votre Username :", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
            <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Votre email :", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
        </div>


    </div>
</div>

";
        
        $__internal_114d4febe39ebba354aafc9db95f033b5d6a253f9979a73451d94ebae82c8722->leave($__internal_114d4febe39ebba354aafc9db95f033b5d6a253f9979a73451d94ebae82c8722_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  36 => 8,  30 => 7,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<div class=\"container\">
    <div class=\"row\">

        <div class=\"fos_user_user_show\">
            <p>    Last login in : {{ app.user.lastLogin|date(\"m/d/Y\")}}  à {{ app.user.lastLogin|date('H:i:s') }} </p>
            <p>{{ 'Votre Username :'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>
            <p>{{ 'Votre email :'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>
        </div>


    </div>
</div>

", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/Alphabus/src/My/UserBundle/Resources/views/Profile/show_content.html.twig");
    }
}
