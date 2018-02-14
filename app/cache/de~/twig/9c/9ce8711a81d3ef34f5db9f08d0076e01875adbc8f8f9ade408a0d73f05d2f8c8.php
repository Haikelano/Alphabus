<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_40dfe023a5167c240c228ff7ebc948bae6e5ba38cfd264fc1c0dda7a9b288b60 extends Twig_Template
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
        $__internal_8398d8ea8ebfbd47cc031ac6f1f45cbce5fc1adc712bafb5ac7e312df89db05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8398d8ea8ebfbd47cc031ac6f1f45cbce5fc1adc712bafb5ac7e312df89db05e->enter($__internal_8398d8ea8ebfbd47cc031ac6f1f45cbce5fc1adc712bafb5ac7e312df89db05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_8398d8ea8ebfbd47cc031ac6f1f45cbce5fc1adc712bafb5ac7e312df89db05e->leave($__internal_8398d8ea8ebfbd47cc031ac6f1f45cbce5fc1adc712bafb5ac7e312df89db05e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
