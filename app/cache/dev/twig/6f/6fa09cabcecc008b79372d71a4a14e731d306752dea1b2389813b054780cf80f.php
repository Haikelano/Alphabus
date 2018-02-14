<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_1d30f872311fcdc22c35a387a34ba951d89ee5b68f4cc874eb2e3d0a2ba2d7aa extends Twig_Template
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
        $__internal_dca6488d2de6a221361719d27c6ffc90226761f79b3c5b766f5d6b33110836ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca6488d2de6a221361719d27c6ffc90226761f79b3c5b766f5d6b33110836ab->enter($__internal_dca6488d2de6a221361719d27c6ffc90226761f79b3c5b766f5d6b33110836ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_dca6488d2de6a221361719d27c6ffc90226761f79b3c5b766f5d6b33110836ab->leave($__internal_dca6488d2de6a221361719d27c6ffc90226761f79b3c5b766f5d6b33110836ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
