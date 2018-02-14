<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_6812ee84d7deaa0d7ae9004397236b4c1b67fe6a8f2182a213f03a8fe973fcce extends Twig_Template
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
        $__internal_76f3f7eeffc20fbd6886945e287813c60b13868a58a1d7ba83816d454b1a8c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f3f7eeffc20fbd6886945e287813c60b13868a58a1d7ba83816d454b1a8c7d->enter($__internal_76f3f7eeffc20fbd6886945e287813c60b13868a58a1d7ba83816d454b1a8c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_76f3f7eeffc20fbd6886945e287813c60b13868a58a1d7ba83816d454b1a8c7d->leave($__internal_76f3f7eeffc20fbd6886945e287813c60b13868a58a1d7ba83816d454b1a8c7d_prof);

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
