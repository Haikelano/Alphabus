<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_f41928cd328c58bf2fbff527dd394f11aab74bc6a2f795716f3f3751e94af571 extends Twig_Template
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
        $__internal_09ba77de8bfa16282dec330673e7a7ac884cd5354df5531840675f4e4ecb4a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ba77de8bfa16282dec330673e7a7ac884cd5354df5531840675f4e4ecb4a95->enter($__internal_09ba77de8bfa16282dec330673e7a7ac884cd5354df5531840675f4e4ecb4a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_09ba77de8bfa16282dec330673e7a7ac884cd5354df5531840675f4e4ecb4a95->leave($__internal_09ba77de8bfa16282dec330673e7a7ac884cd5354df5531840675f4e4ecb4a95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
