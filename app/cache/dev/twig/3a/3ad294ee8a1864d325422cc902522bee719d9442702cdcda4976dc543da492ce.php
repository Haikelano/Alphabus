<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_14e8286c6b3d4b2a1d50026c8f54955ff7a0f7047734c6bd4b077631bb1bce0a extends Twig_Template
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
        $__internal_4cbf1118f512a5b6866c36104f4d6ca404be03c418f086db31bcb2acdd3453e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbf1118f512a5b6866c36104f4d6ca404be03c418f086db31bcb2acdd3453e8->enter($__internal_4cbf1118f512a5b6866c36104f4d6ca404be03c418f086db31bcb2acdd3453e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_4cbf1118f512a5b6866c36104f4d6ca404be03c418f086db31bcb2acdd3453e8->leave($__internal_4cbf1118f512a5b6866c36104f4d6ca404be03c418f086db31bcb2acdd3453e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
