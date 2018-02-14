<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4045fe878ff4e41f6cd67ec9aa32d0f58b2ccb5e229b410f25c69f9a3ccb990d extends Twig_Template
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
        $__internal_df2a7dd22975568f14e5c3475cec9d7ea3eaef63ba523eb5a66e938f82cd8c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2a7dd22975568f14e5c3475cec9d7ea3eaef63ba523eb5a66e938f82cd8c6b->enter($__internal_df2a7dd22975568f14e5c3475cec9d7ea3eaef63ba523eb5a66e938f82cd8c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_df2a7dd22975568f14e5c3475cec9d7ea3eaef63ba523eb5a66e938f82cd8c6b->leave($__internal_df2a7dd22975568f14e5c3475cec9d7ea3eaef63ba523eb5a66e938f82cd8c6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
