<?php

/* @EasyAdmin/default/field_association.html.twig */
class __TwigTemplate_42414a33e808c79efbcceeda2007dbface97d69cde1fa8c4f4822c7a024d1f95 extends Twig_Template
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
        $__internal_9c9414431cfdb4e86864d988acc698287d70e56d0fd0fde45b43206abf05c1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9414431cfdb4e86864d988acc698287d70e56d0fd0fde45b43206abf05c1a3->enter($__internal_9c9414431cfdb4e86864d988acc698287d70e56d0fd0fde45b43206abf05c1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_association.html.twig"));

        // line 2
        if (twig_test_iterable(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 3
            echo "    ";
            if (("show" == ($context["view"] ?? $this->getContext($context, "view")))) {
                // line 4
                echo "        ";
                if ((twig_length_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))) > 0)) {
                    // line 5
                    echo "            <ul class=\"";
                    echo (((twig_length_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))) < 2)) ? ("inline") : (""));
                    echo "\">
                ";
                    // line 6
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["value"] ?? $this->getContext($context, "value")), 0, $this->getAttribute($this->getAttribute(($context["entity_config"] ?? $this->getContext($context, "entity_config")), "show", array()), "max_results", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 7
                        echo "                    <li>
                        ";
                        // line 8
                        if (array_key_exists("link_parameters", $context)) {
                            // line 9
                            echo "                            ";
                            // line 10
                            echo "                            ";
                            $context["primary_key_value"] = ("" . $this->getAttribute($context["item"], $this->getAttribute(($context["link_parameters"] ?? $this->getContext($context, "link_parameters")), "primary_key_name", array())));
                            // line 11
                            echo "                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["link_parameters"] ?? $this->getContext($context, "link_parameters")), array("id" => ($context["primary_key_value"] ?? $this->getContext($context, "primary_key_value")), "referer" => ""))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "</a>
                        ";
                        } else {
                            // line 13
                            echo "                            ";
                            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                            echo "
                        ";
                        }
                        // line 15
                        echo "                    </li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "
                ";
                    // line 18
                    $context["_remaining_items"] = (twig_length_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))) - $this->getAttribute($this->getAttribute(($context["entity_config"] ?? $this->getContext($context, "entity_config")), "show", array()), "max_results", array()));
                    // line 19
                    echo "                ";
                    if ((($context["_remaining_items"] ?? $this->getContext($context, "_remaining_items")) > 0)) {
                        // line 20
                        echo "                    <li class=\"remaining-items\">(";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("show.remaining_items", ($context["_remaining_items"] ?? $this->getContext($context, "_remaining_items")), array(), "EasyAdminBundle"), "html", null, true);
                        echo ")</li>
                ";
                    }
                    // line 22
                    echo "            </ul>
        ";
                } else {
                    // line 24
                    echo "            <div class=\"empty collection-empty\">
                ";
                    // line 25
                    echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute(($context["entity_config"] ?? $this->getContext($context, "entity_config")), "templates", array()), "label_empty", array()));
                    echo "
            </div>
        ";
                }
                // line 28
                echo "    ";
            } elseif (("list" == ($context["view"] ?? $this->getContext($context, "view")))) {
                // line 29
                echo "        <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
                echo "</span>
    ";
            }
        } elseif (        // line 32
array_key_exists("link_parameters", $context)) {
            // line 33
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["link_parameters"] ?? $this->getContext($context, "link_parameters")), array("referer" => ""))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        } else {
            // line 35
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_9c9414431cfdb4e86864d988acc698287d70e56d0fd0fde45b43206abf05c1a3->leave($__internal_9c9414431cfdb4e86864d988acc698287d70e56d0fd0fde45b43206abf05c1a3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 35,  108 => 33,  106 => 32,  100 => 29,  97 => 28,  91 => 25,  88 => 24,  84 => 22,  78 => 20,  75 => 19,  73 => 18,  70 => 17,  63 => 15,  57 => 13,  49 => 11,  46 => 10,  44 => 9,  42 => 8,  39 => 7,  35 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# a *-to-many collection of values #}
{% if value is iterable %}
    {% if 'show' == view %}
        {% if value|length > 0 %}
            <ul class=\"{{ value|length < 2 ? 'inline' }}\">
                {% for item in value|slice(0, entity_config.show.max_results) %}
                    <li>
                        {% if link_parameters is defined %}
                            {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                            {% set primary_key_value = '' ~ attribute(item, link_parameters.primary_key_name) %}
                            <a href=\"{{ path('easyadmin', link_parameters|merge({ id: primary_key_value, referer: '' })) }}\">{{ item }}</a>
                        {% else %}
                            {{ item }}
                        {% endif %}
                    </li>
                {% endfor %}

                {% set _remaining_items = value|length - entity_config.show.max_results %}
                {% if _remaining_items > 0 %}
                    <li class=\"remaining-items\">({{ 'show.remaining_items'|transchoice(_remaining_items, {}, 'EasyAdminBundle') }})</li>
                {% endif %}
            </ul>
        {% else %}
            <div class=\"empty collection-empty\">
                {{ include(entity_config.templates.label_empty) }}
            </div>
        {% endif %}
    {% elseif 'list' == view %}
        <span class=\"badge\">{{ value|length }}</span>
    {% endif %}
{# a simple *-to-one value associated with an entity managed by this backend #}
{% elseif link_parameters is defined %}
    <a href=\"{{ path('easyadmin', link_parameters|merge({ referer: '' })) }}\">{{ value|easyadmin_truncate }}</a>
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_association.html.twig", "/var/www/html/Alphabus/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_association.html.twig");
    }
}
