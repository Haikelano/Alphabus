<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d0930862b7967ec8828f2b070f8d18473106b7d294fcaa04ed0769c660c87678 extends Twig_Template
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
        $__internal_bbae19353ef9de2428bfaa663ffd2ec800975a5ee0ea5c6a70f3035bcab942ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbae19353ef9de2428bfaa663ffd2ec800975a5ee0ea5c6a70f3035bcab942ce->enter($__internal_bbae19353ef9de2428bfaa663ffd2ec800975a5ee0ea5c6a70f3035bcab942ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_bbae19353ef9de2428bfaa663ffd2ec800975a5ee0ea5c6a70f3035bcab942ce->leave($__internal_bbae19353ef9de2428bfaa663ffd2ec800975a5ee0ea5c6a70f3035bcab942ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
