<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_3327f671f325e9a45c3f7b513e52365a25f5edffade38bf284955c0bc16ed7c6 extends Twig_Template
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
        $__internal_5fa79ff8ef1b703c6bfac0604ca26557fc2ad0881b0cda082533a296fef5fab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa79ff8ef1b703c6bfac0604ca26557fc2ad0881b0cda082533a296fef5fab6->enter($__internal_5fa79ff8ef1b703c6bfac0604ca26557fc2ad0881b0cda082533a296fef5fab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_5fa79ff8ef1b703c6bfac0604ca26557fc2ad0881b0cda082533a296fef5fab6->leave($__internal_5fa79ff8ef1b703c6bfac0604ca26557fc2ad0881b0cda082533a296fef5fab6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
