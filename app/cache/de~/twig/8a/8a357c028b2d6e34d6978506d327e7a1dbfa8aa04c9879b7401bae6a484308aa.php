<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4c1749b7746b8f5cc71b60cb177a98a082d85b3e50c6c166c2626393416ecd94 extends Twig_Template
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
        $__internal_d42576a527fac1600beb40d1b3a190eae99e7f0eb647f62e5991c00e1b806d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42576a527fac1600beb40d1b3a190eae99e7f0eb647f62e5991c00e1b806d3d->enter($__internal_d42576a527fac1600beb40d1b3a190eae99e7f0eb647f62e5991c00e1b806d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d42576a527fac1600beb40d1b3a190eae99e7f0eb647f62e5991c00e1b806d3d->leave($__internal_d42576a527fac1600beb40d1b3a190eae99e7f0eb647f62e5991c00e1b806d3d_prof);

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
