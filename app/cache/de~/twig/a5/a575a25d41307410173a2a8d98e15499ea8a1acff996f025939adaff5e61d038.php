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
        $__internal_e4cfd5a4c3f1579b95dbdc27c46328ae9b801af0b5ba106978d3ab09c096c4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cfd5a4c3f1579b95dbdc27c46328ae9b801af0b5ba106978d3ab09c096c4e4->enter($__internal_e4cfd5a4c3f1579b95dbdc27c46328ae9b801af0b5ba106978d3ab09c096c4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e4cfd5a4c3f1579b95dbdc27c46328ae9b801af0b5ba106978d3ab09c096c4e4->leave($__internal_e4cfd5a4c3f1579b95dbdc27c46328ae9b801af0b5ba106978d3ab09c096c4e4_prof);

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
