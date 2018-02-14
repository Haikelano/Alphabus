<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e277b9eb253df47df5def011517486a03cbc01a98dcd81aaf245ed775364bd61 extends Twig_Template
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
        $__internal_44acc5ed68ace9bd4fbb2eaabddd17449e07e857725d4f101d0bef6108e7517b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44acc5ed68ace9bd4fbb2eaabddd17449e07e857725d4f101d0bef6108e7517b->enter($__internal_44acc5ed68ace9bd4fbb2eaabddd17449e07e857725d4f101d0bef6108e7517b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_44acc5ed68ace9bd4fbb2eaabddd17449e07e857725d4f101d0bef6108e7517b->leave($__internal_44acc5ed68ace9bd4fbb2eaabddd17449e07e857725d4f101d0bef6108e7517b_prof);

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
