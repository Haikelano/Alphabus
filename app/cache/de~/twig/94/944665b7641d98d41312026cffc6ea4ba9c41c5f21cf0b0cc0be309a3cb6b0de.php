<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ee9b194d83837cad4d4d47c7578d7b9ad8f5b51c63a4ae344a6560015243c6ab extends Twig_Template
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
        $__internal_ef8f455f40b785e2c98545e485d8d1eb53a28a0df0c06f9655a56f9eae453a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8f455f40b785e2c98545e485d8d1eb53a28a0df0c06f9655a56f9eae453a12->enter($__internal_ef8f455f40b785e2c98545e485d8d1eb53a28a0df0c06f9655a56f9eae453a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ef8f455f40b785e2c98545e485d8d1eb53a28a0df0c06f9655a56f9eae453a12->leave($__internal_ef8f455f40b785e2c98545e485d8d1eb53a28a0df0c06f9655a56f9eae453a12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
