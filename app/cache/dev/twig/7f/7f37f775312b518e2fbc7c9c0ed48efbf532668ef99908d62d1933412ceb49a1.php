<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e6b94952d5d1b35682fa54a684a607976907f04b7d8b7af9c86e3f291589ea0d extends Twig_Template
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
        $__internal_692b9d4b2e9cf7fece8b5c3ed54a934291d10468835a53729854194ccbf5c9aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692b9d4b2e9cf7fece8b5c3ed54a934291d10468835a53729854194ccbf5c9aa->enter($__internal_692b9d4b2e9cf7fece8b5c3ed54a934291d10468835a53729854194ccbf5c9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_692b9d4b2e9cf7fece8b5c3ed54a934291d10468835a53729854194ccbf5c9aa->leave($__internal_692b9d4b2e9cf7fece8b5c3ed54a934291d10468835a53729854194ccbf5c9aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
