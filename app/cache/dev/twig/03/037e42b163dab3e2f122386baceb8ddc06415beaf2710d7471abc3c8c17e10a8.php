<?php

/* @EasyAdmin/default/paginator.html.twig */
class __TwigTemplate_1930c428ab8c414d74864e0c7e60fac2f49dcb2635f962a6874745a0606b4a54 extends Twig_Template
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
        $__internal_a727d1584aa9cd1b7620f5e6360e80b899d4cd267cf7699ec1369c31fab781f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a727d1584aa9cd1b7620f5e6360e80b899d4cd267cf7699ec1369c31fab781f6->enter($__internal_a727d1584aa9cd1b7620f5e6360e80b899d4cd267cf7699ec1369c31fab781f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/paginator.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["_paginator_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("referer" => null));
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "haveToPaginate", array())) {
            // line 6
            echo "    <div class=\"list-pagination\">
        <div class=\"row\">
            <div class=\"col-sm-3 hidden-xs list-pagination-counter\">
                ";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.counter", array("%start%" => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPageOffsetStart", array()), "%end%" => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPageOffsetEnd", array()), "%results%" => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbResults", array())), "EasyAdminBundle");
            echo "
            </div>

            <div class=\"col-xs-12 col-sm-9\">
                <ul class=\"pagination list-pagination-paginator ";
            // line 13
            echo (((1 == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()))) ? ("first-page") : (""));
            echo " ";
            echo (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "hasNextPage", array())) ? ("") : ("last-page"));
            echo "\">
                    ";
            // line 14
            if ((1 == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()))) {
                // line 15
                echo "                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-double-left\"></i> ";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.first", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </span>
                        </li>
                    ";
            } else {
                // line 21
                echo "                        <li>
                            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_paginator_request_parameters"] ?? $this->getContext($context, "_paginator_request_parameters")), array("page" => 1))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-angle-double-left\"></i> ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.first", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            // line 27
            echo "
                    ";
            // line 28
            if ($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "hasPreviousPage", array())) {
                // line 29
                echo "                        <li>
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_paginator_request_parameters"] ?? $this->getContext($context, "_paginator_request_parameters")), array("page" => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "previousPage", array())))), "html", null, true);
                echo "\">
                                <i class=\"fa fa-angle-left\"></i> ";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.previous", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            } else {
                // line 35
                echo "                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-left\"></i> ";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.previous", array(), "EasyAdminBundle"), "html", null, true);
                echo "
                            </span>
                        </li>
                    ";
            }
            // line 41
            echo "
                    ";
            // line 42
            if ($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "hasNextPage", array())) {
                // line 43
                echo "                        <li>
                            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_paginator_request_parameters"] ?? $this->getContext($context, "_paginator_request_parameters")), array("page" => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nextPage", array())))), "html", null, true);
                echo "\">
                                ";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.next", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 49
                echo "                        <li class=\"disabled\">
                            <span>
                                ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.next", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-right\"></i>
                            </span>
                        </li>
                    ";
            }
            // line 55
            echo "
                    ";
            // line 56
            if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()) < $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbPages", array()))) {
                // line 57
                echo "                        <li>
                            <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_paginator_request_parameters"] ?? $this->getContext($context, "_paginator_request_parameters")), array("page" => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbPages", array())))), "html", null, true);
                echo "\">
                                ";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.last", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-double-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 63
                echo "                        <li class=\"disabled\">
                            <span>
                                ";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.last", array(), "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-double-right\"></i>
                            </span>
                        </li>
                    ";
            }
            // line 69
            echo "                </ul>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_a727d1584aa9cd1b7620f5e6360e80b899d4cd267cf7699ec1369c31fab781f6->leave($__internal_a727d1584aa9cd1b7620f5e6360e80b899d4cd267cf7699ec1369c31fab781f6_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 69,  160 => 65,  156 => 63,  149 => 59,  145 => 58,  142 => 57,  140 => 56,  137 => 55,  130 => 51,  126 => 49,  119 => 45,  115 => 44,  112 => 43,  110 => 42,  107 => 41,  100 => 37,  96 => 35,  89 => 31,  85 => 30,  82 => 29,  80 => 28,  77 => 27,  70 => 23,  66 => 22,  63 => 21,  56 => 17,  52 => 15,  50 => 14,  44 => 13,  37 => 9,  32 => 6,  30 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% set _paginator_request_parameters = _request_parameters|merge({'referer': null}) %}

{% if paginator.haveToPaginate %}
    <div class=\"list-pagination\">
        <div class=\"row\">
            <div class=\"col-sm-3 hidden-xs list-pagination-counter\">
                {{ 'paginator.counter'|trans({ '%start%': paginator.currentPageOffsetStart, '%end%': paginator.currentPageOffsetEnd, '%results%': paginator.nbResults})|raw }}
            </div>

            <div class=\"col-xs-12 col-sm-9\">
                <ul class=\"pagination list-pagination-paginator {{ 1 == paginator.currentPage ? 'first-page' : '' }} {{ paginator.hasNextPage ? '' : 'last-page' }}\">
                    {% if 1 == paginator.currentPage %}
                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-double-left\"></i> {{ 'paginator.first'|trans }}
                            </span>
                        </li>
                    {% else %}
                        <li>
                            <a href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: 1 }) ) }}\">
                                <i class=\"fa fa-angle-double-left\"></i> {{ 'paginator.first'|trans }}
                            </a>
                        </li>
                    {% endif %}

                    {% if paginator.hasPreviousPage %}
                        <li>
                            <a href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: paginator.previousPage }) ) }}\">
                                <i class=\"fa fa-angle-left\"></i> {{ 'paginator.previous'|trans }}
                            </a>
                        </li>
                    {% else %}
                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-left\"></i> {{ 'paginator.previous'|trans }}
                            </span>
                        </li>
                    {% endif %}

                    {% if paginator.hasNextPage %}
                        <li>
                            <a href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: paginator.nextPage }) ) }}\">
                                {{ 'paginator.next'|trans }} <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"disabled\">
                            <span>
                                {{ 'paginator.next'|trans }} <i class=\"fa fa-angle-right\"></i>
                            </span>
                        </li>
                    {% endif %}

                    {% if paginator.currentPage < paginator.nbPages %}
                        <li>
                            <a href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: paginator.nbPages }) ) }}\">
                                {{ 'paginator.last'|trans }} <i class=\"fa fa-angle-double-right\"></i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"disabled\">
                            <span>
                                {{ 'paginator.last'|trans }} <i class=\"fa fa-angle-double-right\"></i>
                            </span>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>
{% endif %}
", "@EasyAdmin/default/paginator.html.twig", "/var/www/html/Alphabus/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/paginator.html.twig");
    }
}
