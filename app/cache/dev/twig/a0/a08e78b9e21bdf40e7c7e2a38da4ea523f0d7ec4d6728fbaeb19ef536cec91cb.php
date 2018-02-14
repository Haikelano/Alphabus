<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7ab5a48c94a77ca0eacfbbcc4fa9b52348e61ca7b1d03db8aa0ecf0580a909c6 extends Twig_Template
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
        $__internal_7a73321fa3346aff587aa5c649f1cf6bb783b20ae21c09368e3630e3061de574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a73321fa3346aff587aa5c649f1cf6bb783b20ae21c09368e3630e3061de574->enter($__internal_7a73321fa3346aff587aa5c649f1cf6bb783b20ae21c09368e3630e3061de574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7a73321fa3346aff587aa5c649f1cf6bb783b20ae21c09368e3630e3061de574->leave($__internal_7a73321fa3346aff587aa5c649f1cf6bb783b20ae21c09368e3630e3061de574_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
