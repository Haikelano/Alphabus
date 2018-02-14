<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_7b2035f585ea5fb19dac1f6cd46549e878844a960e6217d8e4525bd7f101529b extends Twig_Template
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
        $__internal_55fee024d8ca1160ae8e1cbbfcc6833ea4fca75d68908f28e2d314d6088489b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55fee024d8ca1160ae8e1cbbfcc6833ea4fca75d68908f28e2d314d6088489b1->enter($__internal_55fee024d8ca1160ae8e1cbbfcc6833ea4fca75d68908f28e2d314d6088489b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_55fee024d8ca1160ae8e1cbbfcc6833ea4fca75d68908f28e2d314d6088489b1->leave($__internal_55fee024d8ca1160ae8e1cbbfcc6833ea4fca75d68908f28e2d314d6088489b1_prof);

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
