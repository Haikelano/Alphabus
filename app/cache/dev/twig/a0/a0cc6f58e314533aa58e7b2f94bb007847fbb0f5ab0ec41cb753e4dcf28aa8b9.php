<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_0f3f48a41ed66e95e2db85a3500ddcbf57b97da8da3b285aaba7e4aa3ffcad64 extends Twig_Template
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
        $__internal_9856a98b4748af76048209715cbf6955fdc7c2c63b15f85c657f7571db96a326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9856a98b4748af76048209715cbf6955fdc7c2c63b15f85c657f7571db96a326->enter($__internal_9856a98b4748af76048209715cbf6955fdc7c2c63b15f85c657f7571db96a326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_9856a98b4748af76048209715cbf6955fdc7c2c63b15f85c657f7571db96a326->leave($__internal_9856a98b4748af76048209715cbf6955fdc7c2c63b15f85c657f7571db96a326_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
