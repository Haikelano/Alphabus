<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7a5126156353186875fa857d358d31fd7d4b84b2e0db8aeeab2ac22b3c983428 extends Twig_Template
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
        $__internal_9ba6c9453b7f258d2048fc2f255bdf97bdbb72964bfe5b5969df0b19fbb67629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba6c9453b7f258d2048fc2f255bdf97bdbb72964bfe5b5969df0b19fbb67629->enter($__internal_9ba6c9453b7f258d2048fc2f255bdf97bdbb72964bfe5b5969df0b19fbb67629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9ba6c9453b7f258d2048fc2f255bdf97bdbb72964bfe5b5969df0b19fbb67629->leave($__internal_9ba6c9453b7f258d2048fc2f255bdf97bdbb72964bfe5b5969df0b19fbb67629_prof);

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
