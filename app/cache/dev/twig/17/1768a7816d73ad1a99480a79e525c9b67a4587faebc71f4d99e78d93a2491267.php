<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_600e2043e3165e27374de1fb14a3be388014d7eeb3dbf246029fb75ec361ea66 extends Twig_Template
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
        $__internal_0c6d3ef42e952cfe52372269c6b495e2b915e59a53851dbde478985ed813fc68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6d3ef42e952cfe52372269c6b495e2b915e59a53851dbde478985ed813fc68->enter($__internal_0c6d3ef42e952cfe52372269c6b495e2b915e59a53851dbde478985ed813fc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0c6d3ef42e952cfe52372269c6b495e2b915e59a53851dbde478985ed813fc68->leave($__internal_0c6d3ef42e952cfe52372269c6b495e2b915e59a53851dbde478985ed813fc68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
