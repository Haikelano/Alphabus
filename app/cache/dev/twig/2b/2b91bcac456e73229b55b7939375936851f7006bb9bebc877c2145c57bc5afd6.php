<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9e192ec90376193b65ff15ac4e8dd0b027b643b53187924702feedd64d51fb8a extends Twig_Template
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
        $__internal_121e96b8cda2b57aa776cd933ddff1bf62cec96b58fe6c6cf72f80c005c2da8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121e96b8cda2b57aa776cd933ddff1bf62cec96b58fe6c6cf72f80c005c2da8c->enter($__internal_121e96b8cda2b57aa776cd933ddff1bf62cec96b58fe6c6cf72f80c005c2da8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_121e96b8cda2b57aa776cd933ddff1bf62cec96b58fe6c6cf72f80c005c2da8c->leave($__internal_121e96b8cda2b57aa776cd933ddff1bf62cec96b58fe6c6cf72f80c005c2da8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
