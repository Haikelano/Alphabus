<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_70c5823d07b2f8e174f75bf467754d97044a3be4fe3889845dcc5074426aad0a extends Twig_Template
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
        $__internal_05fd618f272d6c92f0cf49336b05b233ac030a8a6e68f2f289f47e9bf39daf76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fd618f272d6c92f0cf49336b05b233ac030a8a6e68f2f289f47e9bf39daf76->enter($__internal_05fd618f272d6c92f0cf49336b05b233ac030a8a6e68f2f289f47e9bf39daf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_05fd618f272d6c92f0cf49336b05b233ac030a8a6e68f2f289f47e9bf39daf76->leave($__internal_05fd618f272d6c92f0cf49336b05b233ac030a8a6e68f2f289f47e9bf39daf76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
