<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1805f60fc098a43c28c1784ec063dd75f5f64a6d3f52f116440272f50bf539c8 extends Twig_Template
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
        $__internal_2ab243b8d2429a0b9b55cd80ff047901264c80c78520c2b050d610e53c3a5e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab243b8d2429a0b9b55cd80ff047901264c80c78520c2b050d610e53c3a5e2c->enter($__internal_2ab243b8d2429a0b9b55cd80ff047901264c80c78520c2b050d610e53c3a5e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2ab243b8d2429a0b9b55cd80ff047901264c80c78520c2b050d610e53c3a5e2c->leave($__internal_2ab243b8d2429a0b9b55cd80ff047901264c80c78520c2b050d610e53c3a5e2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
