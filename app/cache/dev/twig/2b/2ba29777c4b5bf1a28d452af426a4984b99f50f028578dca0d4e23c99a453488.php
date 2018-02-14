<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_559287e99508f6b8bead4f7f8530a2eb247d3d7c6e14b8e510faabd328c99adb extends Twig_Template
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
        $__internal_3ee63633b2089f1f34785143bfa81ebeb6c1eb70f94b9af1efec77978e961e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee63633b2089f1f34785143bfa81ebeb6c1eb70f94b9af1efec77978e961e21->enter($__internal_3ee63633b2089f1f34785143bfa81ebeb6c1eb70f94b9af1efec77978e961e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3ee63633b2089f1f34785143bfa81ebeb6c1eb70f94b9af1efec77978e961e21->leave($__internal_3ee63633b2089f1f34785143bfa81ebeb6c1eb70f94b9af1efec77978e961e21_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ddf1665c06a9c8818f4205305232f528df4e03a9b9ff27a18bd0d7ea91564e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf1665c06a9c8818f4205305232f528df4e03a9b9ff27a18bd0d7ea91564e16->enter($__internal_ddf1665c06a9c8818f4205305232f528df4e03a9b9ff27a18bd0d7ea91564e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ddf1665c06a9c8818f4205305232f528df4e03a9b9ff27a18bd0d7ea91564e16->leave($__internal_ddf1665c06a9c8818f4205305232f528df4e03a9b9ff27a18bd0d7ea91564e16_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d26e248917a8be116f4fcce8b890954c8a3d6112bcaf070ec2729f05b569edd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26e248917a8be116f4fcce8b890954c8a3d6112bcaf070ec2729f05b569edd6->enter($__internal_d26e248917a8be116f4fcce8b890954c8a3d6112bcaf070ec2729f05b569edd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d26e248917a8be116f4fcce8b890954c8a3d6112bcaf070ec2729f05b569edd6->leave($__internal_d26e248917a8be116f4fcce8b890954c8a3d6112bcaf070ec2729f05b569edd6_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c31a804feada4904326bd427b4a596d6f0bceebb4952385999bc0e3117704f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31a804feada4904326bd427b4a596d6f0bceebb4952385999bc0e3117704f9d->enter($__internal_c31a804feada4904326bd427b4a596d6f0bceebb4952385999bc0e3117704f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c31a804feada4904326bd427b4a596d6f0bceebb4952385999bc0e3117704f9d->leave($__internal_c31a804feada4904326bd427b4a596d6f0bceebb4952385999bc0e3117704f9d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/Alphabus/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
