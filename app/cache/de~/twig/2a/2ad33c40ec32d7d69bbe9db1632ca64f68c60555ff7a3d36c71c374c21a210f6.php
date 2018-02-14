<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_fc45e9ad59e984954ad6a4dff37651476c77f5f84b512a4eafeebbacad575fee extends Twig_Template
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
        $__internal_d377411a64caee2c8bde9937605e23a8dfc3dc969c367747bb0fbff6163d0122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d377411a64caee2c8bde9937605e23a8dfc3dc969c367747bb0fbff6163d0122->enter($__internal_d377411a64caee2c8bde9937605e23a8dfc3dc969c367747bb0fbff6163d0122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d377411a64caee2c8bde9937605e23a8dfc3dc969c367747bb0fbff6163d0122->leave($__internal_d377411a64caee2c8bde9937605e23a8dfc3dc969c367747bb0fbff6163d0122_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
