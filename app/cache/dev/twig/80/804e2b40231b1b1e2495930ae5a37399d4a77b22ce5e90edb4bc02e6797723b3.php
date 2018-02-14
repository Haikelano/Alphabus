<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_2c4991cc3ee6bb96086c36032b61cdec137ced4308ffa215d520cff9e089f0cc extends Twig_Template
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
        $__internal_86b426d2990f136c5802a44fbdad293a38a150f7fdc1d2c15a7e3b6f655f2d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b426d2990f136c5802a44fbdad293a38a150f7fdc1d2c15a7e3b6f655f2d2a->enter($__internal_86b426d2990f136c5802a44fbdad293a38a150f7fdc1d2c15a7e3b6f655f2d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_86b426d2990f136c5802a44fbdad293a38a150f7fdc1d2c15a7e3b6f655f2d2a->leave($__internal_86b426d2990f136c5802a44fbdad293a38a150f7fdc1d2c15a7e3b6f655f2d2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
