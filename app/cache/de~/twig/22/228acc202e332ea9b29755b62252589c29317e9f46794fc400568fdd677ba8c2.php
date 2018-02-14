<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ce91259a978b066cd20f431beb643620ed01820ad16f0397fcf0ae9a7436fa25 extends Twig_Template
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
        $__internal_723337de1816a9cd69f49fe2d972a3ef9dc992c114421d90438246feb75d4ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723337de1816a9cd69f49fe2d972a3ef9dc992c114421d90438246feb75d4ae3->enter($__internal_723337de1816a9cd69f49fe2d972a3ef9dc992c114421d90438246feb75d4ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_723337de1816a9cd69f49fe2d972a3ef9dc992c114421d90438246feb75d4ae3->leave($__internal_723337de1816a9cd69f49fe2d972a3ef9dc992c114421d90438246feb75d4ae3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
