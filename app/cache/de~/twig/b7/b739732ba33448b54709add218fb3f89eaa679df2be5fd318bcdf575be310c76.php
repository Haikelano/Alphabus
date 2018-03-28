<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_e2d45966ff432e4630df843e431413432b8519b6822adf1e09760b4b9f84b1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::login.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cfb570213681f961fb5e069fb7acb8962d8d09b334c81bc0157ecba0e29adbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfb570213681f961fb5e069fb7acb8962d8d09b334c81bc0157ecba0e29adbe->enter($__internal_2cfb570213681f961fb5e069fb7acb8962d8d09b334c81bc0157ecba0e29adbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cfb570213681f961fb5e069fb7acb8962d8d09b334c81bc0157ecba0e29adbe->leave($__internal_2cfb570213681f961fb5e069fb7acb8962d8d09b334c81bc0157ecba0e29adbe_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_51bd1f378783f2e9356b9c767d49a69b973351f26429654d2a1fbd632bd2ca62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bd1f378783f2e9356b9c767d49a69b973351f26429654d2a1fbd632bd2ca62->enter($__internal_51bd1f378783f2e9356b9c767d49a69b973351f26429654d2a1fbd632bd2ca62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

    </head>
    <body>
        <div class=\"container\">
            ";
        // line 11
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connection ", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 17
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connection", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 19
        echo "        </div>

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
        <div class=\"container\">
            ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "        </div>
    </body>
</html>
";
        
        $__internal_51bd1f378783f2e9356b9c767d49a69b973351f26429654d2a1fbd632bd2ca62->leave($__internal_51bd1f378783f2e9356b9c767d49a69b973351f26429654d2a1fbd632bd2ca62_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80f6af740738cf8d1611aebe2fa2c5355af3664609dfbdcc3f21e9b8022d5222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f6af740738cf8d1611aebe2fa2c5355af3664609dfbdcc3f21e9b8022d5222->enter($__internal_80f6af740738cf8d1611aebe2fa2c5355af3664609dfbdcc3f21e9b8022d5222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "            ";
        
        $__internal_80f6af740738cf8d1611aebe2fa2c5355af3664609dfbdcc3f21e9b8022d5222->leave($__internal_80f6af740738cf8d1611aebe2fa2c5355af3664609dfbdcc3f21e9b8022d5222_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 31,  125 => 30,  115 => 32,  113 => 30,  109 => 28,  103 => 27,  94 => 24,  89 => 23,  84 => 22,  80 => 21,  76 => 19,  68 => 17,  62 => 14,  58 => 13,  53 => 12,  51 => 11,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::login.html.twig' %}
{% block body %}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />

    </head>
    <body>
        <div class=\"container\">
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'Connection '|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'Logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'Connection'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% for type, messages in app.session.flashBag.all %}
            {% for message in messages %}
                <div class=\"{{ type }}\">
                    {{ message|trans({}, 'FOSUserBundle') }}
                </div>
            {% endfor %}
        {% endfor %}

        <div class=\"container\">
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
{% endblock %}", "FOSUserBundle::layout.html.twig", "/var/www/html/Alphabus/src/My/UserBundle/Resources/views/layout.html.twig");
    }
}
