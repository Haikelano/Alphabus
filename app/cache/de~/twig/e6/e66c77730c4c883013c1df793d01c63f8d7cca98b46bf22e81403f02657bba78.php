<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_472898d4789c2dd70392be74ff1806f5f6012566a3740a44e0b665e2b4802a65 extends Twig_Template
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
        $__internal_bfdb595ba60e9021a5de3c93732c836821dcbcce0c1d9c57fef6ee182698e257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdb595ba60e9021a5de3c93732c836821dcbcce0c1d9c57fef6ee182698e257->enter($__internal_bfdb595ba60e9021a5de3c93732c836821dcbcce0c1d9c57fef6ee182698e257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "
<form action=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <label for=\"email\">Adresse mail </label><div class=\"input-group\"><span class=\"input-group-addon\" >
                        <i class=\"fa fa-mail-forward \"></i> mail</span>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse Mail")));
        echo "</div>


                <label for=\"username\">Username </label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" ><i class=\"fa fa-user \"></i> user</span>
                    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "username")));
        echo "
                </div>


                <label for=\"form.plainPassword.first\">Votre mot de passe  </label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" ><i class=\"fa fa-key \"></i> pass</span>
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "votre mot de passe ")));
        echo "
                </div>


                <label for=\"email\"> Confirmer Votre mot de passe  </label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" ><i class=\"fa fa-key \"></i> conf</span>
                    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirmer votre mot de passe ")));
        echo "
                </div>


                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "<br/><input type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success\" />

            </div>
         </div>
    </div>
</form>
";
        
        $__internal_bfdb595ba60e9021a5de3c93732c836821dcbcce0c1d9c57fef6ee182698e257->leave($__internal_bfdb595ba60e9021a5de3c93732c836821dcbcce0c1d9c57fef6ee182698e257_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 32,  65 => 28,  55 => 21,  45 => 14,  36 => 8,  25 => 2,  22 => 1,);
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
<form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\">

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                <label for=\"email\">Adresse mail </label><div class=\"input-group\"><span class=\"input-group-addon\" >
                        <i class=\"fa fa-mail-forward \"></i> mail</span>{{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder' : 'Adresse Mail'}} ) }}</div>


                <label for=\"username\">Username </label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" ><i class=\"fa fa-user \"></i> user</span>
                    {{ form_widget(form.username, {'attr': {'class': 'form-control', 'placeholder' : 'username'}} ) }}
                </div>


                <label for=\"form.plainPassword.first\">Votre mot de passe  </label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" ><i class=\"fa fa-key \"></i> pass</span>
                    {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control', 'placeholder' : 'votre mot de passe '}} ) }}
                </div>


                <label for=\"email\"> Confirmer Votre mot de passe  </label>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\" ><i class=\"fa fa-key \"></i> conf</span>
                    {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control', 'placeholder' : 'Confirmer votre mot de passe '}} ) }}
                </div>


                {{ form_widget(form) }}<br/><input type=\"submit\" value=\"{{ 'Submit'|trans({}, 'FOSUserBundle') }}\" class=\"btn btn-success\" />

            </div>
         </div>
    </div>
</form>
", "FOSUserBundle:Registration:register_content.html.twig", "/var/www/html/Alphabus/src/My/UserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
