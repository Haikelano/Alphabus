<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_15780867624635df972fb3ab02d32a41fcd4dd9a3b72a25e0c43256a65dd9858 extends Twig_Template
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
        $__internal_86939a89c6e4c6efc4992896f3fa81a913c91f3fc4ddafc3dcbf4deffc5f0ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86939a89c6e4c6efc4992896f3fa81a913c91f3fc4ddafc3dcbf4deffc5f0ddd->enter($__internal_86939a89c6e4c6efc4992896f3fa81a913c91f3fc4ddafc3dcbf4deffc5f0ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_86939a89c6e4c6efc4992896f3fa81a913c91f3fc4ddafc3dcbf4deffc5f0ddd->leave($__internal_86939a89c6e4c6efc4992896f3fa81a913c91f3fc4ddafc3dcbf4deffc5f0ddd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
