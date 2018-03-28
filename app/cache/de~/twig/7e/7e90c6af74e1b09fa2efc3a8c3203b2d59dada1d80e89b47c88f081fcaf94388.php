<?php

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_90fdf9b8f418489d297c8e6763188a21ba02121e6df1ac7045715dfe0765787b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'show_fields' => array($this, 'block_show_fields'),
            'show_field' => array($this, 'block_show_field'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caa3c96b01dd2916c4ca0fbe020bde5ac2f0857b8b7b379fdb1e32ce045ae683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa3c96b01dd2916c4ca0fbe020bde5ac2f0857b8b7b379fdb1e32ce045ae683->enter($__internal_caa3c96b01dd2916c4ca0fbe020bde5ac2f0857b8b7b379fdb1e32ce045ae683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_69322a745bc4aeb980bd5ed97066090dcf9df5258d5b3c90185b26ba125b475f"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_69322a745bc4aeb980bd5ed97066090dcf9df5258d5b3c90185b26ba125b475f"] ?? $this->getContext($context, "__internal_69322a745bc4aeb980bd5ed97066090dcf9df5258d5b3c90185b26ba125b475f"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_69322a745bc4aeb980bd5ed97066090dcf9df5258d5b3c90185b26ba125b475f"] ?? $this->getContext($context, "__internal_69322a745bc4aeb980bd5ed97066090dcf9df5258d5b3c90185b26ba125b475f"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caa3c96b01dd2916c4ca0fbe020bde5ac2f0857b8b7b379fdb1e32ce045ae683->leave($__internal_caa3c96b01dd2916c4ca0fbe020bde5ac2f0857b8b7b379fdb1e32ce045ae683_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a08041a1fed975327bfb281ebbae8425d8aa21326239351fafb9801d626d208f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08041a1fed975327bfb281ebbae8425d8aa21326239351fafb9801d626d208f->enter($__internal_a08041a1fed975327bfb281ebbae8425d8aa21326239351fafb9801d626d208f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_a08041a1fed975327bfb281ebbae8425d8aa21326239351fafb9801d626d208f->leave($__internal_a08041a1fed975327bfb281ebbae8425d8aa21326239351fafb9801d626d208f_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_f736d29304bde1d8ab47677003f88469983bb9de8f5a911a28088637ec3b8a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f736d29304bde1d8ab47677003f88469983bb9de8f5a911a28088637ec3b8a02->enter($__internal_f736d29304bde1d8ab47677003f88469983bb9de8f5a911a28088637ec3b8a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_f736d29304bde1d8ab47677003f88469983bb9de8f5a911a28088637ec3b8a02->leave($__internal_f736d29304bde1d8ab47677003f88469983bb9de8f5a911a28088637ec3b8a02_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_f423f9233b3ea7d2e2ebad1a0d23426f858938bc7c5d54fb9eb15ed9be76fa42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f423f9233b3ea7d2e2ebad1a0d23426f858938bc7c5d54fb9eb15ed9be76fa42->enter($__internal_f423f9233b3ea7d2e2ebad1a0d23426f858938bc7c5d54fb9eb15ed9be76fa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_69322a745bc4aeb980bd5ed97066090dcf9df5258d5b3c90185b26ba125b475f"] ?? $this->getContext($context, "__internal_69322a745bc4aeb980bd5ed97066090dcf9df5258d5b3c90185b26ba125b475f")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f423f9233b3ea7d2e2ebad1a0d23426f858938bc7c5d54fb9eb15ed9be76fa42->leave($__internal_f423f9233b3ea7d2e2ebad1a0d23426f858938bc7c5d54fb9eb15ed9be76fa42_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_c5876a1a88346547ca45f04ea8201fd8cc727a64919b3a1e53bbb37cf3810500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5876a1a88346547ca45f04ea8201fd8cc727a64919b3a1e53bbb37cf3810500->enter($__internal_c5876a1a88346547ca45f04ea8201fd8cc727a64919b3a1e53bbb37cf3810500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $this->displayBlock('show_fields', $context, $blocks);
        // line 41
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 44
        $this->displayBlock('item_actions', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>

    ";
        // line 60
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_c5876a1a88346547ca45f04ea8201fd8cc727a64919b3a1e53bbb37cf3810500->leave($__internal_c5876a1a88346547ca45f04ea8201fd8cc727a64919b3a1e53bbb37cf3810500_prof);

    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        $__internal_421d450f5e1ba67ed34e4d67a3a773152174ee0b87173abb3d8bd9a867df2934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421d450f5e1ba67ed34e4d67a3a773152174ee0b87173abb3d8bd9a867df2934->enter($__internal_421d450f5e1ba67ed34e4d67a3a773152174ee0b87173abb3d8bd9a867df2934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_fields"));

        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 23
            echo "                ";
            $this->displayBlock('show_field', $context, $blocks);
            // line 39
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
        
        $__internal_421d450f5e1ba67ed34e4d67a3a773152174ee0b87173abb3d8bd9a867df2934->leave($__internal_421d450f5e1ba67ed34e4d67a3a773152174ee0b87173abb3d8bd9a867df2934_prof);

    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_b5dd6ad2ef4a1b521073c60936b79be88e1bc01ccdf736bd8f849476fb02a703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5dd6ad2ef4a1b521073c60936b79be88e1bc01ccdf736bd8f849476fb02a703->enter($__internal_b5dd6ad2ef4a1b521073c60936b79be88e1bc01ccdf736bd8f849476fb02a703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 24
        echo "                    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "type", array()), "default")) : ("default"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["metadata"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                        <label class=\"col-sm-2 control-label\">
                            ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) ? ($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["field"] ?? $this->getContext($context, "field"))))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_69322a745bc4aeb980bd5ed97066090dcf9df5258d5b3c90185b26ba125b475f"] ?? $this->getContext($context, "__internal_69322a745bc4aeb980bd5ed97066090dcf9df5258d5b3c90185b26ba125b475f")));
        // line 26
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                ";
        // line 30
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), ($context["entity"] ?? $this->getContext($context, "entity")), ($context["metadata"] ?? $this->getContext($context, "metadata")));
        echo "
                            </div>

                            ";
        // line 33
        if (((($this->getAttribute(($context["metadata"] ?? null), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["metadata"] ?? null), "help", array()), "")) : ("")) != "")) {
            // line 34
            echo "                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["metadata"] ?? $this->getContext($context, "metadata")), "help", array()), array(),             // line 4
($context["__internal_69322a745bc4aeb980bd5ed97066090dcf9df5258d5b3c90185b26ba125b475f"] ?? $this->getContext($context, "__internal_69322a745bc4aeb980bd5ed97066090dcf9df5258d5b3c90185b26ba125b475f")));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
        
        $__internal_b5dd6ad2ef4a1b521073c60936b79be88e1bc01ccdf736bd8f849476fb02a703->leave($__internal_b5dd6ad2ef4a1b521073c60936b79be88e1bc01ccdf736bd8f849476fb02a703_prof);

    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_5bc9d77fbe3abef61058c39090c757df6fea69a584f7740e7264c9adde42c036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc9d77fbe3abef61058c39090c757df6fea69a584f7740e7264c9adde42c036->enter($__internal_5bc9d77fbe3abef61058c39090c757df6fea69a584f7740e7264c9adde42c036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 45
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 46
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 47
        echo "
                ";
        // line 48
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 49
($context["_show_actions"] ?? $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 50
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 51
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 52
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 53
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 54
        echo "
            ";
        
        $__internal_5bc9d77fbe3abef61058c39090c757df6fea69a584f7740e7264c9adde42c036->leave($__internal_5bc9d77fbe3abef61058c39090c757df6fea69a584f7740e7264c9adde42c036_prof);

    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_5eef575c455ee738407f69c2546b97eba7614ef695b3cc081625595cbe01ab45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eef575c455ee738407f69c2546b97eba7614ef695b3cc081625595cbe01ab45->enter($__internal_5eef575c455ee738407f69c2546b97eba7614ef695b3cc081625595cbe01ab45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 61
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 63
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 64
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 65
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 66
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 67
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 68
        echo "
    ";
        
        $__internal_5eef575c455ee738407f69c2546b97eba7614ef695b3cc081625595cbe01ab45->leave($__internal_5eef575c455ee738407f69c2546b97eba7614ef695b3cc081625595cbe01ab45_prof);

    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_d3c87aedf777dbcd253d7a1039fd8473241110099f418c5024cce5aecd568b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c87aedf777dbcd253d7a1039fd8473241110099f418c5024cce5aecd568b04->enter($__internal_d3c87aedf777dbcd253d7a1039fd8473241110099f418c5024cce5aecd568b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 73
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_d3c87aedf777dbcd253d7a1039fd8473241110099f418c5024cce5aecd568b04->leave($__internal_d3c87aedf777dbcd253d7a1039fd8473241110099f418c5024cce5aecd568b04_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 73,  281 => 72,  273 => 68,  271 => 67,  270 => 66,  269 => 65,  268 => 64,  267 => 63,  265 => 61,  259 => 60,  251 => 54,  249 => 53,  248 => 52,  247 => 51,  246 => 50,  245 => 49,  244 => 48,  241 => 47,  238 => 46,  235 => 45,  229 => 44,  220 => 36,  216 => 34,  214 => 4,  212 => 34,  210 => 33,  204 => 30,  198 => 26,  196 => 4,  195 => 26,  187 => 24,  181 => 23,  174 => 40,  160 => 39,  157 => 23,  139 => 22,  133 => 21,  126 => 60,  120 => 56,  118 => 44,  113 => 41,  111 => 21,  108 => 20,  102 => 19,  92 => 15,  91 => 4,  89 => 15,  86 => 14,  84 => 13,  78 => 12,  66 => 10,  54 => 9,  47 => 7,  45 => 5,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  26 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% block show_fields %}
            {% for field, metadata in fields %}
                {% block show_field %}
                    <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                        <label class=\"col-sm-2 control-label\">
                            {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                            </div>

                            {% if metadata.help|default('') != '' %}
                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                            {% endif %}
                        </div>
                    </div>
                {% endblock %}
            {% endfor %}
        {% endblock %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "@EasyAdmin/default/show.html.twig", "/var/www/html/Alphabus/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/show.html.twig");
    }
}
