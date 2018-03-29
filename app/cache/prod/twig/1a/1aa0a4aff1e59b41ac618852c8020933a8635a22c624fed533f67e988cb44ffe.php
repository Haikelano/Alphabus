<?php

/* post/index.html.twig */
class __TwigTemplate_739084c2784daec235a3919b62cb804cd46966cc15a0008117e0d5f5a42d9213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
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
        echo "
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>




    <div class=\"container\" xmlns=\"http://www.w3.org/1999/html\">
    <h1>Posts list</h1>


    <ul>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\">Create a new post</a>
        </li>
    </ul>

    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["posts"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 21
            echo "
        <div class=\"row\">

            <h3><span class=\"label label-primary\"> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
            echo "</span></h3>
            <div class=\"col-md-6\">

                <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("images/" . $this->getAttribute($context["post"], "path", array()))), "html", null, true);
            echo "\" alt=\"\" style=\"width: 97%; height: 230px;\"/>
            </div>
            <div class=\"col-lg-5\">

                    <label for=\"exampleFormControlTextarea1\">Remarque de <span class=\"label label-info\"> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "proprietaire", array()), "html", null, true);
            echo " </span></label>
                   <h4 class=\"large\">
                       <style>
                           textarea{  resize:none;
                                      font-size: 20px;
                           }

                       </style>
                    <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" wrap=\"soft\" rows=\"6\"
                              placeholder=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "remarques", array()), "html", null, true);
            echo "\"></textarea>
                   </h4>
                        ";
            // line 42
            if (($this->getAttribute($context["post"], "etat", array()) == true)) {
                // line 43
                echo "                            <div class=\"alert alert-success\">

                                Votre Réclamation a bien été traitée et tout fonctionne
                            </div>
                        ";
            } else {
                // line 48
                echo "                            <div class=\"alert alert-danger\">

                                Votre Réclamation a bien été prise en compte
                            </div>
                        ";
            }
            // line 53
            echo "
            </div>
           <div class=\"col-md-2\">

           </div>

        </div>
            cree le ";
            // line 60
            if ($this->getAttribute($context["post"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "Y-m-d"), "html", null, true);
                echo "
        à ";
                // line 61
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "H:i:s"), "html", null, true);
            }
            echo " par
        <label for=\"exampleFormControlTextarea1\">Remarque de
        <span class=\"label label-info\"> ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "proprietaire", array()), "html", null, true);
            echo "
        </span></label> <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">edit</a>




            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        <br/>
        <br/>
        <br/>
        <footer class=\"row\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg- col-lg-offset-5\">   ";
        // line 77
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["posts"] ?? null));
        echo "</div>
            </div>
        </div>
        </footer>
        </div>
    </div>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Réclamation";
    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 5,  156 => 77,  147 => 70,  135 => 64,  131 => 63,  125 => 61,  120 => 60,  111 => 53,  104 => 48,  97 => 43,  95 => 42,  90 => 40,  78 => 31,  71 => 27,  65 => 24,  60 => 21,  56 => 20,  49 => 16,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "post/index.html.twig", "/var/www/html/Alphabus/app/Resources/views/post/index.html.twig");
    }
}
