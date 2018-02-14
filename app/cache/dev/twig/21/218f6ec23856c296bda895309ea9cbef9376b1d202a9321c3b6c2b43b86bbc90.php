<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_135f27a2dbe5691f4247823b3c016cd6a76b20cb61bf60f3cb86bba44f45e680 extends Twig_Template
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
        $__internal_8dd1caae2a7e109a6bae2fdc8226a5a4631da910d80d11cdaf377ee95c97f40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd1caae2a7e109a6bae2fdc8226a5a4631da910d80d11cdaf377ee95c97f40b->enter($__internal_8dd1caae2a7e109a6bae2fdc8226a5a4631da910d80d11cdaf377ee95c97f40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_8dd1caae2a7e109a6bae2fdc8226a5a4631da910d80d11cdaf377ee95c97f40b->leave($__internal_8dd1caae2a7e109a6bae2fdc8226a5a4631da910d80d11cdaf377ee95c97f40b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
