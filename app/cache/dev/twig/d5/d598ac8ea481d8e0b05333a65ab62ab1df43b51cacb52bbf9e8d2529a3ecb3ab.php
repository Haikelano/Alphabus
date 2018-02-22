<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_de089091aed9c0875724a961a94d0f33db9769e265d56f0ef459d9bd0c6d8c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62c715c54ff81aadbbcebfbc4a976073ad7d8918c9e84402ebee9a5ee28a44ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c715c54ff81aadbbcebfbc4a976073ad7d8918c9e84402ebee9a5ee28a44ea->enter($__internal_62c715c54ff81aadbbcebfbc4a976073ad7d8918c9e84402ebee9a5ee28a44ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c715c54ff81aadbbcebfbc4a976073ad7d8918c9e84402ebee9a5ee28a44ea->leave($__internal_62c715c54ff81aadbbcebfbc4a976073ad7d8918c9e84402ebee9a5ee28a44ea_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcdaa9d463428e9e7261dbf8b2f58169a51cbd755ff9acd88929e33a9b81dc85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdaa9d463428e9e7261dbf8b2f58169a51cbd755ff9acd88929e33a9b81dc85->enter($__internal_bcdaa9d463428e9e7261dbf8b2f58169a51cbd755ff9acd88929e33a9b81dc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bcdaa9d463428e9e7261dbf8b2f58169a51cbd755ff9acd88929e33a9b81dc85->leave($__internal_bcdaa9d463428e9e7261dbf8b2f58169a51cbd755ff9acd88929e33a9b81dc85_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdff1a76e3436749af83d4070e05c006185cf6450bffa6ba3e88c6ff6df5ed33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdff1a76e3436749af83d4070e05c006185cf6450bffa6ba3e88c6ff6df5ed33->enter($__internal_bdff1a76e3436749af83d4070e05c006185cf6450bffa6ba3e88c6ff6df5ed33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "            ";
        
        $__internal_bdff1a76e3436749af83d4070e05c006185cf6450bffa6ba3e88c6ff6df5ed33->leave($__internal_bdff1a76e3436749af83d4070e05c006185cf6450bffa6ba3e88c6ff6df5ed33_prof);

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
        return new Twig_Source("{% extends '::base.html.twig' %}
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
