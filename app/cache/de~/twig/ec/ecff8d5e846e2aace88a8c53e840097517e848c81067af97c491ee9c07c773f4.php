<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_1db3c4829588a6ac71057263cbc1c8179ec5d57843fd4d26db190634c29ad541 extends Twig_Template
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
        $__internal_b7528e6955a48654ae963dd03a46656cec51ab36ca7ff32cdf72ad4073565fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7528e6955a48654ae963dd03a46656cec51ab36ca7ff32cdf72ad4073565fc9->enter($__internal_b7528e6955a48654ae963dd03a46656cec51ab36ca7ff32cdf72ad4073565fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b7528e6955a48654ae963dd03a46656cec51ab36ca7ff32cdf72ad4073565fc9->leave($__internal_b7528e6955a48654ae963dd03a46656cec51ab36ca7ff32cdf72ad4073565fc9_prof);

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
