<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3591668276f82cc2b185d31ac1726424e48d7cd0a6d0b29b5c75ca8bc6066fe7 extends Twig_Template
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
        $__internal_88e99b39a6d72186840789ab537b0bc35ecd8b7635ca81656145947c6bec1332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e99b39a6d72186840789ab537b0bc35ecd8b7635ca81656145947c6bec1332->enter($__internal_88e99b39a6d72186840789ab537b0bc35ecd8b7635ca81656145947c6bec1332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_88e99b39a6d72186840789ab537b0bc35ecd8b7635ca81656145947c6bec1332->leave($__internal_88e99b39a6d72186840789ab537b0bc35ecd8b7635ca81656145947c6bec1332_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
