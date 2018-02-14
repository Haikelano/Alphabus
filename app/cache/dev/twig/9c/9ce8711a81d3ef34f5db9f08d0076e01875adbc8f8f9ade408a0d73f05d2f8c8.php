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
        $__internal_cf7b8d3deb5b4bce3a02c4c58c4657567ead2bf40bfb44a07682b13e57a22f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7b8d3deb5b4bce3a02c4c58c4657567ead2bf40bfb44a07682b13e57a22f98->enter($__internal_cf7b8d3deb5b4bce3a02c4c58c4657567ead2bf40bfb44a07682b13e57a22f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_cf7b8d3deb5b4bce3a02c4c58c4657567ead2bf40bfb44a07682b13e57a22f98->leave($__internal_cf7b8d3deb5b4bce3a02c4c58c4657567ead2bf40bfb44a07682b13e57a22f98_prof);

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
