<?php

/* structure/index.html.twig */
class __TwigTemplate_11534d6e2370825c3762e6bfb4a6e7faa9a781fc3169857017abc5ab9d3eaf92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "structure/index.html.twig", 1);
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
        echo "    <div class=\"container\">
    <h1>Structures list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>protectionchassis</th>
                <th>Etat</th>
                <th>Repremarques</th>
                <th>N° Chassis</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["structures"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["structure"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_show", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "protectionchassis", array()), "html", null, true);
            echo "</td>
                
                 <td>";
            // line 25
            if (($this->getAttribute($context["structure"], "repremarques", array()) == null)) {
                echo " 
                    <span class=\"label label-success\">fonctionnement</span> 
                    ";
            } else {
                // line 28
                echo "                   <span class=\"label label-danger\">Etat critique</span>
                     ";
            }
            // line 29
            echo " </td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "repremarques", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["structure"], "chassis", array()), "html", null, true);
            echo "</td>
                <td>
                 <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_show", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">show</a>
                </td>
                <td>
                 <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_edit", array("id" => $this->getAttribute($context["structure"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                 </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['structure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("structure_new");
        echo "\">Create a new structure</a>
        </li>
    </ul>
        </div>           
";
    }

    public function getTemplateName()
    {
        return "structure/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  105 => 40,  95 => 36,  89 => 33,  84 => 31,  80 => 30,  77 => 29,  73 => 28,  67 => 25,  62 => 23,  56 => 22,  53 => 21,  49 => 20,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "structure/index.html.twig", "/var/www/html/Alphabus/app/Resources/views/structure/index.html.twig");
    }
}
