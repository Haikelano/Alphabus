<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ada9a3b16f5f942610b448e2407a303865f817438b5d82d0e791653e3cd545e6 extends Twig_Template
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
        $__internal_1de03c738f5b14a557fb05f4fc23086d52cfc846bea142fbb4bba3c4cfd4be77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de03c738f5b14a557fb05f4fc23086d52cfc846bea142fbb4bba3c4cfd4be77->enter($__internal_1de03c738f5b14a557fb05f4fc23086d52cfc846bea142fbb4bba3c4cfd4be77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1de03c738f5b14a557fb05f4fc23086d52cfc846bea142fbb4bba3c4cfd4be77->leave($__internal_1de03c738f5b14a557fb05f4fc23086d52cfc846bea142fbb4bba3c4cfd4be77_prof);

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
