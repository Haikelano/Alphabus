<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c1177e37777bf6239c72ecb59b94bb74a8c57789518f28c86fa66edb6858d70e extends Twig_Template
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
        $__internal_a68cc0c0e21155da2a98f849eb5f363459c10c846f7fc457c0404d0622edf8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68cc0c0e21155da2a98f849eb5f363459c10c846f7fc457c0404d0622edf8dc->enter($__internal_a68cc0c0e21155da2a98f849eb5f363459c10c846f7fc457c0404d0622edf8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a68cc0c0e21155da2a98f849eb5f363459c10c846f7fc457c0404d0622edf8dc->leave($__internal_a68cc0c0e21155da2a98f849eb5f363459c10c846f7fc457c0404d0622edf8dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
