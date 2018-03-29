<?php

/* affectation/show.html.twig */
class __TwigTemplate_37c755692a6966d2555a4adb0af9d2b827da7f16359cae2b6121e3c5f31d9141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "affectation/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Affectation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["affectation"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Seriealpha</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["affectation"] ?? null), "seriealpha", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateaffectation</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["affectation"] ?? null), "dateaffectation", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["affectation"] ?? null), "dateaffectation", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Controleacier</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["affectation"] ?? null), "controleacier", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateacier</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["affectation"] ?? null), "dateacier", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["affectation"] ?? null), "dateacier", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Controlepeinture</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["affectation"] ?? null), "controlepeinture", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datepeinture</th>
                <td>";
        // line 34
        if ($this->getAttribute(($context["affectation"] ?? null), "datepeinture", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["affectation"] ?? null), "datepeinture", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Controlcontroler</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["affectation"] ?? null), "controlcontroler", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datecontrole</th>
                <td>";
        // line 42
        if ($this->getAttribute(($context["affectation"] ?? null), "datecontrole", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["affectation"] ?? null), "datecontrole", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Controleessai</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["affectation"] ?? null), "controleessai", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateessai</th>
                <td>";
        // line 50
        if ($this->getAttribute(($context["affectation"] ?? null), "dateessai", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["affectation"] ?? null), "dateessai", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affectation_edit", array("id" => $this->getAttribute(($context["affectation"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>

    </ul>
";
    }

    public function getTemplateName()
    {
        return "affectation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 60,  129 => 57,  117 => 50,  110 => 46,  101 => 42,  94 => 38,  85 => 34,  78 => 30,  69 => 26,  62 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "affectation/show.html.twig", "/var/www/html/Alphabus/app/Resources/views/affectation/show.html.twig");
    }
}
