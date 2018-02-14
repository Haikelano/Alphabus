<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ccf06976a9e4a7e595aa5ef719feb879e02eca6c4ead955702e75c74e2cc0ce3 extends Twig_Template
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
        $__internal_4745e1ce5513164f7706e8ba29e6e88d54d7efd501dce91adb967fe2faf7b784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4745e1ce5513164f7706e8ba29e6e88d54d7efd501dce91adb967fe2faf7b784->enter($__internal_4745e1ce5513164f7706e8ba29e6e88d54d7efd501dce91adb967fe2faf7b784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_4745e1ce5513164f7706e8ba29e6e88d54d7efd501dce91adb967fe2faf7b784->leave($__internal_4745e1ce5513164f7706e8ba29e6e88d54d7efd501dce91adb967fe2faf7b784_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
