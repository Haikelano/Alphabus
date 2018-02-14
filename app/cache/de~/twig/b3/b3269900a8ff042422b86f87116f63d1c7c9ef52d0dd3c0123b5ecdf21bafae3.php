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
        $__internal_f5696cadea015cb3e8a5d93971c19bd3d93b7f4e7ac1a2aff90184f12e0e16ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5696cadea015cb3e8a5d93971c19bd3d93b7f4e7ac1a2aff90184f12e0e16ea->enter($__internal_f5696cadea015cb3e8a5d93971c19bd3d93b7f4e7ac1a2aff90184f12e0e16ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f5696cadea015cb3e8a5d93971c19bd3d93b7f4e7ac1a2aff90184f12e0e16ea->leave($__internal_f5696cadea015cb3e8a5d93971c19bd3d93b7f4e7ac1a2aff90184f12e0e16ea_prof);

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
