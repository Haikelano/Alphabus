<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_dda681c71e9f9aa8a2257a4a58b857014c2bdb99e7dfa6b5a82925c905aa1bd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8423ebbd8d788f90e520013df7b7431939643605a70811fade7c66b90484c685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8423ebbd8d788f90e520013df7b7431939643605a70811fade7c66b90484c685->enter($__internal_8423ebbd8d788f90e520013df7b7431939643605a70811fade7c66b90484c685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8423ebbd8d788f90e520013df7b7431939643605a70811fade7c66b90484c685->leave($__internal_8423ebbd8d788f90e520013df7b7431939643605a70811fade7c66b90484c685_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b749a21d037fd92c33a355142cbd5c72f20c7e0c0911397263aec9c0512fd19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b749a21d037fd92c33a355142cbd5c72f20c7e0c0911397263aec9c0512fd19d->enter($__internal_b749a21d037fd92c33a355142cbd5c72f20c7e0c0911397263aec9c0512fd19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b749a21d037fd92c33a355142cbd5c72f20c7e0c0911397263aec9c0512fd19d->leave($__internal_b749a21d037fd92c33a355142cbd5c72f20c7e0c0911397263aec9c0512fd19d_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_852f9ea873657ab42d8bf6e7774e641185801df85c0ce52204f8cb9a79af7d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852f9ea873657ab42d8bf6e7774e641185801df85c0ce52204f8cb9a79af7d7b->enter($__internal_852f9ea873657ab42d8bf6e7774e641185801df85c0ce52204f8cb9a79af7d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_852f9ea873657ab42d8bf6e7774e641185801df85c0ce52204f8cb9a79af7d7b->leave($__internal_852f9ea873657ab42d8bf6e7774e641185801df85c0ce52204f8cb9a79af7d7b_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b9609e74d8d9fde5293016914b4529b1d2a651c915a86ac39bc244107825a772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9609e74d8d9fde5293016914b4529b1d2a651c915a86ac39bc244107825a772->enter($__internal_b9609e74d8d9fde5293016914b4529b1d2a651c915a86ac39bc244107825a772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b9609e74d8d9fde5293016914b4529b1d2a651c915a86ac39bc244107825a772->leave($__internal_b9609e74d8d9fde5293016914b4529b1d2a651c915a86ac39bc244107825a772_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/Alphabus/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
