<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_06ed86aba74824999dc3f6c32293a71795872dad48679ea182a53d0f527f842c extends Twig_Template
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
        $__internal_fc03a2c4f0a51c2ccfeceb3cd7d189164eea7dd98ed142450fb5448eb5520b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc03a2c4f0a51c2ccfeceb3cd7d189164eea7dd98ed142450fb5448eb5520b73->enter($__internal_fc03a2c4f0a51c2ccfeceb3cd7d189164eea7dd98ed142450fb5448eb5520b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_fc03a2c4f0a51c2ccfeceb3cd7d189164eea7dd98ed142450fb5448eb5520b73->leave($__internal_fc03a2c4f0a51c2ccfeceb3cd7d189164eea7dd98ed142450fb5448eb5520b73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
