<?php

/* FOSUserBundle::layout2.html.twig */
class __TwigTemplate_bd482e9dd9ef25fcf88977ed5358cd09a8689f6416954c680d46d2a1a8a16185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout2.html.twig", 1);
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
        $__internal_3f3296db8ec033f552b4c1a98391b34e995f6a6e9a2228df3f9a82eabf05fb6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3296db8ec033f552b4c1a98391b34e995f6a6e9a2228df3f9a82eabf05fb6c->enter($__internal_3f3296db8ec033f552b4c1a98391b34e995f6a6e9a2228df3f9a82eabf05fb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f3296db8ec033f552b4c1a98391b34e995f6a6e9a2228df3f9a82eabf05fb6c->leave($__internal_3f3296db8ec033f552b4c1a98391b34e995f6a6e9a2228df3f9a82eabf05fb6c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce0110fedba8f0ba568b6e927b607b4c85a1d9efee9c9b7106c83c537255429c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0110fedba8f0ba568b6e927b607b4c85a1d9efee9c9b7106c83c537255429c->enter($__internal_ce0110fedba8f0ba568b6e927b607b4c85a1d9efee9c9b7106c83c537255429c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!DOCTYPE html>
    <html>
    <head>
        <meta charset=\"UTF-8\" />

    </head>
    <body>

    <div class=\"container\">
        ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 14
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " <h1>Modifier votre Compte</h1>

        ";
        } else {
            // line 17
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 19
        echo "    </div>

    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                echo "            <div class=\"";
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
            echo "    ";
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
        echo "    </div>
    </body>
    </html>
";
        
        $__internal_ce0110fedba8f0ba568b6e927b607b4c85a1d9efee9c9b7106c83c537255429c->leave($__internal_ce0110fedba8f0ba568b6e927b607b4c85a1d9efee9c9b7106c83c537255429c_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_627bdf4f4ab3c39028637db9274ae91f1682bde662372c03b0efe1d9b16e3f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627bdf4f4ab3c39028637db9274ae91f1682bde662372c03b0efe1d9b16e3f39->enter($__internal_627bdf4f4ab3c39028637db9274ae91f1682bde662372c03b0efe1d9b16e3f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "        ";
        
        $__internal_627bdf4f4ab3c39028637db9274ae91f1682bde662372c03b0efe1d9b16e3f39->leave($__internal_627bdf4f4ab3c39028637db9274ae91f1682bde662372c03b0efe1d9b16e3f39_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  118 => 30,  108 => 32,  106 => 30,  102 => 28,  96 => 27,  87 => 24,  82 => 23,  77 => 22,  73 => 21,  69 => 19,  61 => 17,  54 => 14,  52 => 13,  41 => 4,  35 => 3,  11 => 1,);
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
            {{ ''|trans({'%username%': app.user.username}, 'FOSUserBundle') }} <h1>Modifier votre Compte</h1>

        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">{{ ''|trans({}, 'FOSUserBundle') }}</a>
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
{% endblock %}", "FOSUserBundle::layout2.html.twig", "/var/www/html/Alphabus/src/My/UserBundle/Resources/views/layout2.html.twig");
    }
}
