<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e6574bc2bec368d9301c4263625000a3c424e0dbe5ffb6a4e5eb2d266d910878 extends Twig_Template
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
        $__internal_a3c4d94babc9ee57867936ee86bf1fc7cd501c8cd363bbb91e45352dbe9de16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c4d94babc9ee57867936ee86bf1fc7cd501c8cd363bbb91e45352dbe9de16d->enter($__internal_a3c4d94babc9ee57867936ee86bf1fc7cd501c8cd363bbb91e45352dbe9de16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a3c4d94babc9ee57867936ee86bf1fc7cd501c8cd363bbb91e45352dbe9de16d->leave($__internal_a3c4d94babc9ee57867936ee86bf1fc7cd501c8cd363bbb91e45352dbe9de16d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
