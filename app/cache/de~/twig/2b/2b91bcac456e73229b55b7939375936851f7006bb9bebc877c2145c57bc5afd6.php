<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9e192ec90376193b65ff15ac4e8dd0b027b643b53187924702feedd64d51fb8a extends Twig_Template
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
        $__internal_9a070a182c4c0b10b052e16e61a515b4dfda1d7d2e4dec797e60a70523a70cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a070a182c4c0b10b052e16e61a515b4dfda1d7d2e4dec797e60a70523a70cf4->enter($__internal_9a070a182c4c0b10b052e16e61a515b4dfda1d7d2e4dec797e60a70523a70cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9a070a182c4c0b10b052e16e61a515b4dfda1d7d2e4dec797e60a70523a70cf4->leave($__internal_9a070a182c4c0b10b052e16e61a515b4dfda1d7d2e4dec797e60a70523a70cf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
