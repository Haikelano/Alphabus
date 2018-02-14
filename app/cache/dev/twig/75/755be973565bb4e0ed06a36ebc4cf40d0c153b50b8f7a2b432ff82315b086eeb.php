<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_938eb29744bbb4133ca935df08b8a61a726eb089605d3b93d9c317e1ff1e5a16 extends Twig_Template
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
        $__internal_d6aaa8815d1e638c47180461ef3d849d9b2d0e376d5bf449b4af43fd456fcd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6aaa8815d1e638c47180461ef3d849d9b2d0e376d5bf449b4af43fd456fcd98->enter($__internal_d6aaa8815d1e638c47180461ef3d849d9b2d0e376d5bf449b4af43fd456fcd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d6aaa8815d1e638c47180461ef3d849d9b2d0e376d5bf449b4af43fd456fcd98->leave($__internal_d6aaa8815d1e638c47180461ef3d849d9b2d0e376d5bf449b4af43fd456fcd98_prof);

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
