<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4b6b32d12dc0f9b894b618adcbc3d5d48fdb8b72c5b65234dc726b871b833225 extends Twig_Template
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
        $__internal_a8ad1350eadaa5e377f0c683842dd7ee02ec026d9ce23283c9ceee6a6bda35da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ad1350eadaa5e377f0c683842dd7ee02ec026d9ce23283c9ceee6a6bda35da->enter($__internal_a8ad1350eadaa5e377f0c683842dd7ee02ec026d9ce23283c9ceee6a6bda35da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a8ad1350eadaa5e377f0c683842dd7ee02ec026d9ce23283c9ceee6a6bda35da->leave($__internal_a8ad1350eadaa5e377f0c683842dd7ee02ec026d9ce23283c9ceee6a6bda35da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
