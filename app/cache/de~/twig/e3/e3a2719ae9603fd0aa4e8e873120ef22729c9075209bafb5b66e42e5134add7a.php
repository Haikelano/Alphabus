<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_bcfbfd6d875b2640aa47fd846553cca419e49f444d2073698eb016cd658f6e40 extends Twig_Template
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
        $__internal_1a2cdd7ead1fc3c2df8d8613ee5c393864b233eaabb2bba165cbae407a27fdfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2cdd7ead1fc3c2df8d8613ee5c393864b233eaabb2bba165cbae407a27fdfd->enter($__internal_1a2cdd7ead1fc3c2df8d8613ee5c393864b233eaabb2bba165cbae407a27fdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1a2cdd7ead1fc3c2df8d8613ee5c393864b233eaabb2bba165cbae407a27fdfd->leave($__internal_1a2cdd7ead1fc3c2df8d8613ee5c393864b233eaabb2bba165cbae407a27fdfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
