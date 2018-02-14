<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f229a5950193018228d3668aef0f0fbd207b08dc56c155ecb937b7f0146bb8e4 extends Twig_Template
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
        $__internal_1ea9962e719b57b8e57a9da1643b89dd57c75e80b7fc60e5ae80442ca887c275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ea9962e719b57b8e57a9da1643b89dd57c75e80b7fc60e5ae80442ca887c275->enter($__internal_1ea9962e719b57b8e57a9da1643b89dd57c75e80b7fc60e5ae80442ca887c275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1ea9962e719b57b8e57a9da1643b89dd57c75e80b7fc60e5ae80442ca887c275->leave($__internal_1ea9962e719b57b8e57a9da1643b89dd57c75e80b7fc60e5ae80442ca887c275_prof);

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
