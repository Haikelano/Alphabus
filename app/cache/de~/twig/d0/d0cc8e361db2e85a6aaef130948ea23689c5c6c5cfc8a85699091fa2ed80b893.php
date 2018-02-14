<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_35a5828311f95da85a86ee6bf9b29b3076369d6d6345c86c744d60aa075b1c48 extends Twig_Template
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
        $__internal_3efd1b4b9427c6ba9579a85479a866c4cb7359bfa7bed2b34763eec7b8994330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3efd1b4b9427c6ba9579a85479a866c4cb7359bfa7bed2b34763eec7b8994330->enter($__internal_3efd1b4b9427c6ba9579a85479a866c4cb7359bfa7bed2b34763eec7b8994330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3efd1b4b9427c6ba9579a85479a866c4cb7359bfa7bed2b34763eec7b8994330->leave($__internal_3efd1b4b9427c6ba9579a85479a866c4cb7359bfa7bed2b34763eec7b8994330_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
