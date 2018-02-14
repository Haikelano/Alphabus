<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_fde9cb2c4e5f733fc685c4512039d6b6a6267eff8db24f1c2192c0c8226abe61 extends Twig_Template
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
        $__internal_cce6942d870a9b6c753aa314863fe6e0eea4a211ff96162dd35c9943b8ccc9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce6942d870a9b6c753aa314863fe6e0eea4a211ff96162dd35c9943b8ccc9c5->enter($__internal_cce6942d870a9b6c753aa314863fe6e0eea4a211ff96162dd35c9943b8ccc9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_cce6942d870a9b6c753aa314863fe6e0eea4a211ff96162dd35c9943b8ccc9c5->leave($__internal_cce6942d870a9b6c753aa314863fe6e0eea4a211ff96162dd35c9943b8ccc9c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
