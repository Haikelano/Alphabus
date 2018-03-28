<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_624c6436bc509ee1744ae48a1fcb4c0fc7693c6e8ded394a1da45e4705e64dc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_rest' => array($this, 'block_easyadmin_rest'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'easyadmin_widget_groups' => array($this, 'block_easyadmin_widget_groups'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deb4bec94934782c983a2346a0edc84b6601c1e5974b29921068a8f997b5bca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb4bec94934782c983a2346a0edc84b6601c1e5974b29921068a8f997b5bca2->enter($__internal_deb4bec94934782c983a2346a0edc84b6601c1e5974b29921068a8f997b5bca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('button_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('money_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('date_widget', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('time_widget', $context, $blocks);
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 201
        echo "
";
        // line 202
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 214
        echo "
";
        // line 215
        $this->displayBlock('form_label', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('choice_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 229
        echo "
";
        // line 230
        $this->displayBlock('radio_label', $context, $blocks);
        // line 233
        echo "
";
        // line 234
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 252
        echo "
";
        // line 254
        echo "
";
        // line 255
        $this->displayBlock('form_row', $context, $blocks);
        // line 277
        echo "
";
        // line 278
        $this->displayBlock('collection_row', $context, $blocks);
        // line 313
        echo "
";
        // line 314
        $this->displayBlock('button_row', $context, $blocks);
        // line 319
        echo "
";
        // line 320
        $this->displayBlock('choice_row', $context, $blocks);
        // line 324
        echo "
";
        // line 325
        $this->displayBlock('date_row', $context, $blocks);
        // line 329
        echo "
";
        // line 330
        $this->displayBlock('time_row', $context, $blocks);
        // line 334
        echo "
";
        // line 335
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('radio_row', $context, $blocks);
        // line 353
        echo "
";
        // line 355
        $this->displayBlock('form_errors', $context, $blocks);
        // line 373
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 386
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 391
        echo "
";
        // line 392
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 396
        echo "
";
        // line 397
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 418
        echo "
";
        // line 419
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 446
        echo "
";
        // line 447
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 459
        echo "
";
        // line 460
        $this->displayBlock('item_actions', $context, $blocks);
        // line 487
        echo "
";
        // line 489
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 528
        echo "
";
        // line 529
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 569
        echo "
";
        // line 571
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 581
        echo "
";
        // line 582
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 586
        echo "
";
        // line 588
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 593
        echo "
";
        // line 595
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_deb4bec94934782c983a2346a0edc84b6601c1e5974b29921068a8f997b5bca2->leave($__internal_deb4bec94934782c983a2346a0edc84b6601c1e5974b29921068a8f997b5bca2_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_5e326bd4cd290c38c2824b3759892d5559d60e33d896787fcd0acf807f6c84ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e326bd4cd290c38c2824b3759892d5559d60e33d896787fcd0acf807f6c84ee->enter($__internal_5e326bd4cd290c38c2824b3759892d5559d60e33d896787fcd0acf807f6c84ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter(($context["_easyadmin_form_type"] ?? $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 18
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 21
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 23
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>";
        
        $__internal_5e326bd4cd290c38c2824b3759892d5559d60e33d896787fcd0acf807f6c84ee->leave($__internal_5e326bd4cd290c38c2824b3759892d5559d60e33d896787fcd0acf807f6c84ee_prof);

    }

    // line 28
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_a0035e418cf1695db520c62f757211622f4ab45e082724adc1931d4a8021cab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0035e418cf1695db520c62f757211622f4ab45e082724adc1931d4a8021cab0->enter($__internal_a0035e418cf1695db520c62f757211622f4ab45e082724adc1931d4a8021cab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 29
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 31
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 32
            echo "        ";
            ob_start();
            // line 33
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 36
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 48
            echo ($context["remove_item_javascript"] ?? $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_a0035e418cf1695db520c62f757211622f4ab45e082724adc1931d4a8021cab0->leave($__internal_a0035e418cf1695db520c62f757211622f4ab45e082724adc1931d4a8021cab0_prof);

    }

    // line 56
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e8ff95d519aaa9b9d976589c3750e31ce45dc9398db0ad91cae425abefc89a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ff95d519aaa9b9d976589c3750e31ce45dc9398db0ad91cae425abefc89a0c->enter($__internal_e8ff95d519aaa9b9d976589c3750e31ce45dc9398db0ad91cae425abefc89a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 57
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 58
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 60
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e8ff95d519aaa9b9d976589c3750e31ce45dc9398db0ad91cae425abefc89a0c->leave($__internal_e8ff95d519aaa9b9d976589c3750e31ce45dc9398db0ad91cae425abefc89a0c_prof);

    }

    // line 63
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_20c5b371f3d539d0f71cec18ee02c927c943468e87a77698e308a437a75562ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c5b371f3d539d0f71cec18ee02c927c943468e87a77698e308a437a75562ca->enter($__internal_20c5b371f3d539d0f71cec18ee02c927c943468e87a77698e308a437a75562ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 64
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 65
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_20c5b371f3d539d0f71cec18ee02c927c943468e87a77698e308a437a75562ca->leave($__internal_20c5b371f3d539d0f71cec18ee02c927c943468e87a77698e308a437a75562ca_prof);

    }

    // line 68
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_cb9a674d87cd62fc1cdb5313dd28482326f3a7afe82708beb01d6eefa5fdd433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9a674d87cd62fc1cdb5313dd28482326f3a7afe82708beb01d6eefa5fdd433->enter($__internal_cb9a674d87cd62fc1cdb5313dd28482326f3a7afe82708beb01d6eefa5fdd433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 69
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 70
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_cb9a674d87cd62fc1cdb5313dd28482326f3a7afe82708beb01d6eefa5fdd433->leave($__internal_cb9a674d87cd62fc1cdb5313dd28482326f3a7afe82708beb01d6eefa5fdd433_prof);

    }

    // line 73
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b9785caab5ffffe60d67fdbc8f57dad1582519b21b02a72f670d9df5c248301c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9785caab5ffffe60d67fdbc8f57dad1582519b21b02a72f670d9df5c248301c->enter($__internal_b9785caab5ffffe60d67fdbc8f57dad1582519b21b02a72f670d9df5c248301c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 74
        echo "<div class=\"input-group\">
        ";
        // line 75
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 76
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 77
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 79
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 80
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 81
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 83
        echo "    </div>";
        
        $__internal_b9785caab5ffffe60d67fdbc8f57dad1582519b21b02a72f670d9df5c248301c->leave($__internal_b9785caab5ffffe60d67fdbc8f57dad1582519b21b02a72f670d9df5c248301c_prof);

    }

    // line 86
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_45c1171b623c8161b2d4ecac09c62e2473a6bb08028788c0b8a73dfeea3a3b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c1171b623c8161b2d4ecac09c62e2473a6bb08028788c0b8a73dfeea3a3b1a->enter($__internal_45c1171b623c8161b2d4ecac09c62e2473a6bb08028788c0b8a73dfeea3a3b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 87
        echo "<div class=\"input-group\">";
        // line 88
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 89
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_45c1171b623c8161b2d4ecac09c62e2473a6bb08028788c0b8a73dfeea3a3b1a->leave($__internal_45c1171b623c8161b2d4ecac09c62e2473a6bb08028788c0b8a73dfeea3a3b1a_prof);

    }

    // line 93
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b409d3dea6e3046af7a8b59c33af52f032f7396e286942d95ab24ad16cec8622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b409d3dea6e3046af7a8b59c33af52f032f7396e286942d95ab24ad16cec8622->enter($__internal_b409d3dea6e3046af7a8b59c33af52f032f7396e286942d95ab24ad16cec8622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 94
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 95
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 97
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 98
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 103
            echo "</div>";
        }
        
        $__internal_b409d3dea6e3046af7a8b59c33af52f032f7396e286942d95ab24ad16cec8622->leave($__internal_b409d3dea6e3046af7a8b59c33af52f032f7396e286942d95ab24ad16cec8622_prof);

    }

    // line 107
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_21fa31bb8682673f72264101854b8bf883bfef035db771cb295e24509c940c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fa31bb8682673f72264101854b8bf883bfef035db771cb295e24509c940c4e->enter($__internal_21fa31bb8682673f72264101854b8bf883bfef035db771cb295e24509c940c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 108
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 109
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 111
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 112
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 113
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 115
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 117
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 118
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 120
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 121
                echo "</div>";
            }
        }
        
        $__internal_21fa31bb8682673f72264101854b8bf883bfef035db771cb295e24509c940c4e->leave($__internal_21fa31bb8682673f72264101854b8bf883bfef035db771cb295e24509c940c4e_prof);

    }

    // line 126
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_4054980dc1bac70e3789bbcfc65509bebf0524ca117070291b88e5e0d6362e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4054980dc1bac70e3789bbcfc65509bebf0524ca117070291b88e5e0d6362e1b->enter($__internal_4054980dc1bac70e3789bbcfc65509bebf0524ca117070291b88e5e0d6362e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 127
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 128
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 130
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 131
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 132
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 135
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 136
                echo "</div>";
            }
        }
        
        $__internal_4054980dc1bac70e3789bbcfc65509bebf0524ca117070291b88e5e0d6362e1b->leave($__internal_4054980dc1bac70e3789bbcfc65509bebf0524ca117070291b88e5e0d6362e1b_prof);

    }

    // line 141
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_9f8dd312da0314ca4a626199253a4a0fc049ed6c9a70b7bdbfb989495a2b07a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8dd312da0314ca4a626199253a4a0fc049ed6c9a70b7bdbfb989495a2b07a3->enter($__internal_9f8dd312da0314ca4a626199253a4a0fc049ed6c9a70b7bdbfb989495a2b07a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 142
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 143
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 144
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 145
            echo "        ";
            ob_start();
            // line 146
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 149
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 159
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 161
            echo ($context["remove_item_javascript"] ?? $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_9f8dd312da0314ca4a626199253a4a0fc049ed6c9a70b7bdbfb989495a2b07a3->leave($__internal_9f8dd312da0314ca4a626199253a4a0fc049ed6c9a70b7bdbfb989495a2b07a3_prof);

    }

    // line 169
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_8288bab55f6e8e226f3c0ad9c363c1f91dc2869bf4503d70af7957d6d549484f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8288bab55f6e8e226f3c0ad9c363c1f91dc2869bf4503d70af7957d6d549484f->enter($__internal_8288bab55f6e8e226f3c0ad9c363c1f91dc2869bf4503d70af7957d6d549484f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 170
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 171
            echo "<div class=\"control-group\">";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 173
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 174
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 175
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "</div>";
        } else {
            // line 180
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 182
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 183
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 184
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "</div>";
        }
        
        $__internal_8288bab55f6e8e226f3c0ad9c363c1f91dc2869bf4503d70af7957d6d549484f->leave($__internal_8288bab55f6e8e226f3c0ad9c363c1f91dc2869bf4503d70af7957d6d549484f_prof);

    }

    // line 191
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_356fdcd89ab24d02ca859cdd3955b76d8724829166afd56d920861bcc69b0644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356fdcd89ab24d02ca859cdd3955b76d8724829166afd56d920861bcc69b0644->enter($__internal_356fdcd89ab24d02ca859cdd3955b76d8724829166afd56d920861bcc69b0644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 192
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 193
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 194
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 196
            echo "<div class=\"checkbox\">";
            // line 197
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 198
            echo "</div>";
        }
        
        $__internal_356fdcd89ab24d02ca859cdd3955b76d8724829166afd56d920861bcc69b0644->leave($__internal_356fdcd89ab24d02ca859cdd3955b76d8724829166afd56d920861bcc69b0644_prof);

    }

    // line 202
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_bbd34acf2349810f4dbe57baca0f646ec49ea1e0f536a326391c83f7c5dab7a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd34acf2349810f4dbe57baca0f646ec49ea1e0f536a326391c83f7c5dab7a4->enter($__internal_bbd34acf2349810f4dbe57baca0f646ec49ea1e0f536a326391c83f7c5dab7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 203
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 204
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 205
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 207
            echo "<div class=\"radio\">";
            // line 208
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 209
            echo "</div>";
        }
        
        $__internal_bbd34acf2349810f4dbe57baca0f646ec49ea1e0f536a326391c83f7c5dab7a4->leave($__internal_bbd34acf2349810f4dbe57baca0f646ec49ea1e0f536a326391c83f7c5dab7a4_prof);

    }

    // line 215
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b1fc28433da41aefd0d5d4bb4f390d012bfebe1bcb044595e3f6ccf69c6d1e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fc28433da41aefd0d5d4bb4f390d012bfebe1bcb044595e3f6ccf69c6d1e24->enter($__internal_b1fc28433da41aefd0d5d4bb4f390d012bfebe1bcb044595e3f6ccf69c6d1e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 216
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 217
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_b1fc28433da41aefd0d5d4bb4f390d012bfebe1bcb044595e3f6ccf69c6d1e24->leave($__internal_b1fc28433da41aefd0d5d4bb4f390d012bfebe1bcb044595e3f6ccf69c6d1e24_prof);

    }

    // line 220
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_27f3f6d9c36b3d1779e5e09588c79a8c8ae568e0e6a349630160c253b74831d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f3f6d9c36b3d1779e5e09588c79a8c8ae568e0e6a349630160c253b74831d5->enter($__internal_27f3f6d9c36b3d1779e5e09588c79a8c8ae568e0e6a349630160c253b74831d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 222
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 223
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_27f3f6d9c36b3d1779e5e09588c79a8c8ae568e0e6a349630160c253b74831d5->leave($__internal_27f3f6d9c36b3d1779e5e09588c79a8c8ae568e0e6a349630160c253b74831d5_prof);

    }

    // line 226
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_0cc43d2d27f3567ce6766fcd2e1b6f8e3acd8de3c992df131759806175e83de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc43d2d27f3567ce6766fcd2e1b6f8e3acd8de3c992df131759806175e83de9->enter($__internal_0cc43d2d27f3567ce6766fcd2e1b6f8e3acd8de3c992df131759806175e83de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 227
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_0cc43d2d27f3567ce6766fcd2e1b6f8e3acd8de3c992df131759806175e83de9->leave($__internal_0cc43d2d27f3567ce6766fcd2e1b6f8e3acd8de3c992df131759806175e83de9_prof);

    }

    // line 230
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b1c816aea57523f8b416f6205773ada841e12cf65ace01c7ff612304f1e007ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c816aea57523f8b416f6205773ada841e12cf65ace01c7ff612304f1e007ac->enter($__internal_b1c816aea57523f8b416f6205773ada841e12cf65ace01c7ff612304f1e007ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 231
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b1c816aea57523f8b416f6205773ada841e12cf65ace01c7ff612304f1e007ac->leave($__internal_b1c816aea57523f8b416f6205773ada841e12cf65ace01c7ff612304f1e007ac_prof);

    }

    // line 234
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_27b35dc07bbaff8d78ea4bdf532958269c04cb8706053915bf1917064d0e6d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b35dc07bbaff8d78ea4bdf532958269c04cb8706053915bf1917064d0e6d69->enter($__internal_27b35dc07bbaff8d78ea4bdf532958269c04cb8706053915bf1917064d0e6d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 235
        echo "    ";
        // line 236
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 237
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 238
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 239
                echo "        ";
            }
            // line 240
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 241
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 244
                echo "            ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                // line 245
                echo "        ";
            }
            // line 246
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 247
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            // line 248
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ((($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))) ? (($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))) : ($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 249
            echo "</label>
    ";
        }
        
        $__internal_27b35dc07bbaff8d78ea4bdf532958269c04cb8706053915bf1917064d0e6d69->leave($__internal_27b35dc07bbaff8d78ea4bdf532958269c04cb8706053915bf1917064d0e6d69_prof);

    }

    // line 255
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_3c0939adbb7f7502210a657b06372f6b6df5e952624287ae6d419725d3bf4f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0939adbb7f7502210a657b06372f6b6df5e952624287ae6d419725d3bf4f8a->enter($__internal_3c0939adbb7f7502210a657b06372f6b6df5e952624287ae6d419725d3bf4f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 256
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 257
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 259
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 261
        if ((twig_in_filter(($context["_field_type"] ?? $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "time", 5 => "time_immutable", 6 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 262
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 264
            if ((null === ($context["data"] ?? $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 265
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 270
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 273
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 275
        echo "    </div>";
        
        $__internal_3c0939adbb7f7502210a657b06372f6b6df5e952624287ae6d419725d3bf4f8a->leave($__internal_3c0939adbb7f7502210a657b06372f6b6df5e952624287ae6d419725d3bf4f8a_prof);

    }

    // line 278
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_f188d5826e3b19ae5aaec7cd6b32ca30e0662b5fa5401f92a4d37c2c6bbf9161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f188d5826e3b19ae5aaec7cd6b32ca30e0662b5fa5401f92a4d37c2c6bbf9161->enter($__internal_f188d5826e3b19ae5aaec7cd6b32ca30e0662b5fa5401f92a4d37c2c6bbf9161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 279
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 281
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 282
            echo "        ";
            ob_start();
            // line 283
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 286
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 294
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 295
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 304
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 306
            echo ($context["js_add_item"] ?? $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_f188d5826e3b19ae5aaec7cd6b32ca30e0662b5fa5401f92a4d37c2c6bbf9161->leave($__internal_f188d5826e3b19ae5aaec7cd6b32ca30e0662b5fa5401f92a4d37c2c6bbf9161_prof);

    }

    // line 314
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_dc288a4b2eeba8b089722d5f0cc44d15c664656242943088e2dfb1ac9cfe1c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc288a4b2eeba8b089722d5f0cc44d15c664656242943088e2dfb1ac9cfe1c5f->enter($__internal_dc288a4b2eeba8b089722d5f0cc44d15c664656242943088e2dfb1ac9cfe1c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 315
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 316
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 317
        echo "</div>";
        
        $__internal_dc288a4b2eeba8b089722d5f0cc44d15c664656242943088e2dfb1ac9cfe1c5f->leave($__internal_dc288a4b2eeba8b089722d5f0cc44d15c664656242943088e2dfb1ac9cfe1c5f_prof);

    }

    // line 320
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_3fd4f05b8e04bf11033d4e8fa7dc9c8765e511f3ed14ddbd3dcce4818a08e1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd4f05b8e04bf11033d4e8fa7dc9c8765e511f3ed14ddbd3dcce4818a08e1d4->enter($__internal_3fd4f05b8e04bf11033d4e8fa7dc9c8765e511f3ed14ddbd3dcce4818a08e1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 321
        $context["force_error"] = true;
        // line 322
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3fd4f05b8e04bf11033d4e8fa7dc9c8765e511f3ed14ddbd3dcce4818a08e1d4->leave($__internal_3fd4f05b8e04bf11033d4e8fa7dc9c8765e511f3ed14ddbd3dcce4818a08e1d4_prof);

    }

    // line 325
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_208ee0fcac7e0215203c4027eed05d743a4311e6a607661f3e46b0fa5db4a508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208ee0fcac7e0215203c4027eed05d743a4311e6a607661f3e46b0fa5db4a508->enter($__internal_208ee0fcac7e0215203c4027eed05d743a4311e6a607661f3e46b0fa5db4a508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 326
        $context["force_error"] = true;
        // line 327
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_208ee0fcac7e0215203c4027eed05d743a4311e6a607661f3e46b0fa5db4a508->leave($__internal_208ee0fcac7e0215203c4027eed05d743a4311e6a607661f3e46b0fa5db4a508_prof);

    }

    // line 330
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_60b599aac978357e0caa0f5426af9a4e72b64b0186529364a8acef43716525f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b599aac978357e0caa0f5426af9a4e72b64b0186529364a8acef43716525f8->enter($__internal_60b599aac978357e0caa0f5426af9a4e72b64b0186529364a8acef43716525f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 331
        $context["force_error"] = true;
        // line 332
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_60b599aac978357e0caa0f5426af9a4e72b64b0186529364a8acef43716525f8->leave($__internal_60b599aac978357e0caa0f5426af9a4e72b64b0186529364a8acef43716525f8_prof);

    }

    // line 335
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d5445ce738d8fd046906cb689e1d1790943eb41bfde7187e6758f490cba50f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5445ce738d8fd046906cb689e1d1790943eb41bfde7187e6758f490cba50f82->enter($__internal_d5445ce738d8fd046906cb689e1d1790943eb41bfde7187e6758f490cba50f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 336
        $context["force_error"] = true;
        // line 337
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d5445ce738d8fd046906cb689e1d1790943eb41bfde7187e6758f490cba50f82->leave($__internal_d5445ce738d8fd046906cb689e1d1790943eb41bfde7187e6758f490cba50f82_prof);

    }

    // line 340
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f4d5d10ccc8776f5d8098aa6ae3ddef8032cde1f72aba361c956b6b7afb2a724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d5d10ccc8776f5d8098aa6ae3ddef8032cde1f72aba361c956b6b7afb2a724->enter($__internal_f4d5d10ccc8776f5d8098aa6ae3ddef8032cde1f72aba361c956b6b7afb2a724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 341
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 343
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 344
        echo "</div>";
        
        $__internal_f4d5d10ccc8776f5d8098aa6ae3ddef8032cde1f72aba361c956b6b7afb2a724->leave($__internal_f4d5d10ccc8776f5d8098aa6ae3ddef8032cde1f72aba361c956b6b7afb2a724_prof);

    }

    // line 347
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d1dc3fcebd646d0970e8ba8de0a5cc05fd5857ef2dfba21c1ad9939dacc3ae44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1dc3fcebd646d0970e8ba8de0a5cc05fd5857ef2dfba21c1ad9939dacc3ae44->enter($__internal_d1dc3fcebd646d0970e8ba8de0a5cc05fd5857ef2dfba21c1ad9939dacc3ae44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 348
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 349
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 350
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 351
        echo "</div>";
        
        $__internal_d1dc3fcebd646d0970e8ba8de0a5cc05fd5857ef2dfba21c1ad9939dacc3ae44->leave($__internal_d1dc3fcebd646d0970e8ba8de0a5cc05fd5857ef2dfba21c1ad9939dacc3ae44_prof);

    }

    // line 355
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_96feec86d908d5e1439938e2ead660a012b2f90c020f5fa1037ee1fdc3cb3216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96feec86d908d5e1439938e2ead660a012b2f90c020f5fa1037ee1fdc3cb3216->enter($__internal_96feec86d908d5e1439938e2ead660a012b2f90c020f5fa1037ee1fdc3cb3216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 356
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors")));
        // line 357
        echo "    ";
        if ((($context["error_count"] ?? $this->getContext($context, "error_count")) >= 1)) {
            // line 358
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 359
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", ($context["error_count"] ?? $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 360
            if ((($context["error_count"] ?? $this->getContext($context, "error_count")) == 1)) {
                // line 361
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 363
                echo "                <ul>
                    ";
                // line 364
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 365
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 367
                echo "                </ul>
            ";
            }
            // line 369
            echo "        </div>
    ";
        }
        
        $__internal_96feec86d908d5e1439938e2ead660a012b2f90c020f5fa1037ee1fdc3cb3216->leave($__internal_96feec86d908d5e1439938e2ead660a012b2f90c020f5fa1037ee1fdc3cb3216_prof);

    }

    // line 373
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_e88b46b27222d1ec3fd4e9d1ee1bcff896d522516128e58cb92c079ba0519097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88b46b27222d1ec3fd4e9d1ee1bcff896d522516128e58cb92c079ba0519097->enter($__internal_e88b46b27222d1ec3fd4e9d1ee1bcff896d522516128e58cb92c079ba0519097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 376
        echo "    ";
        if ((twig_test_iterable(($context["value"] ?? $this->getContext($context, "value"))) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
            // line 377
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 379
        echo "    ";
        if (((twig_test_iterable(($context["value"] ?? $this->getContext($context, "value"))) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) || $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 380
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 381
            echo "    ";
        }
        // line 382
        echo "
    ";
        // line 383
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_e88b46b27222d1ec3fd4e9d1ee1bcff896d522516128e58cb92c079ba0519097->leave($__internal_e88b46b27222d1ec3fd4e9d1ee1bcff896d522516128e58cb92c079ba0519097_prof);

    }

    // line 386
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_853ccd6e64ac8dab312057d7b7ade94473f53efce0b025db1fb8d7836f0c727f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853ccd6e64ac8dab312057d7b7ade94473f53efce0b025db1fb8d7836f0c727f->enter($__internal_853ccd6e64ac8dab312057d7b7ade94473f53efce0b025db1fb8d7836f0c727f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 387
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 388
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_853ccd6e64ac8dab312057d7b7ade94473f53efce0b025db1fb8d7836f0c727f->leave($__internal_853ccd6e64ac8dab312057d7b7ade94473f53efce0b025db1fb8d7836f0c727f_prof);

    }

    // line 392
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_ca22ec2b56a575a1fc6dd48f664c76be98a0d26d87591376573172e2c78b76be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca22ec2b56a575a1fc6dd48f664c76be98a0d26d87591376573172e2c78b76be->enter($__internal_ca22ec2b56a575a1fc6dd48f664c76be98a0d26d87591376573172e2c78b76be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 393
        echo "    ";
        $context["force_error"] = true;
        // line 394
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_ca22ec2b56a575a1fc6dd48f664c76be98a0d26d87591376573172e2c78b76be->leave($__internal_ca22ec2b56a575a1fc6dd48f664c76be98a0d26d87591376573172e2c78b76be_prof);

    }

    // line 397
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_5f051995fdecb8742ddb33acbc25ad1bb5c094d948254eaf3ceaa3e8da63ab8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f051995fdecb8742ddb33acbc25ad1bb5c094d948254eaf3ceaa3e8da63ab8e->enter($__internal_5f051995fdecb8742ddb33acbc25ad1bb5c094d948254eaf3ceaa3e8da63ab8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 398
        ob_start();
        // line 399
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 400
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 401
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 402
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["download_title"] ?? $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 404
        echo "
        <div class=\"row\">
            ";
        // line 406
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 407
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 408
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 411
        echo "            <div class=\"";
        echo (($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 412
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5f051995fdecb8742ddb33acbc25ad1bb5c094d948254eaf3ceaa3e8da63ab8e->leave($__internal_5f051995fdecb8742ddb33acbc25ad1bb5c094d948254eaf3ceaa3e8da63ab8e_prof);

    }

    // line 419
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_f3924a14e57c12aa03a641dd48a06b68a336d2a9bd2179b538822c695230f686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3924a14e57c12aa03a641dd48a06b68a336d2a9bd2179b538822c695230f686->enter($__internal_f3924a14e57c12aa03a641dd48a06b68a336d2a9bd2179b538822c695230f686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 420
        echo "    ";
        $context["force_error"] = true;
        // line 421
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_f3924a14e57c12aa03a641dd48a06b68a336d2a9bd2179b538822c695230f686->leave($__internal_f3924a14e57c12aa03a641dd48a06b68a336d2a9bd2179b538822c695230f686_prof);

    }

    // line 424
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_187c5d75893267d9c647b33f0c08aec1a8226b11cd6b3ad32cd5da0164cf6745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187c5d75893267d9c647b33f0c08aec1a8226b11cd6b3ad32cd5da0164cf6745->enter($__internal_187c5d75893267d9c647b33f0c08aec1a8226b11cd6b3ad32cd5da0164cf6745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 425
        ob_start();
        // line 426
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 427
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 428
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 429
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 431
        echo "
        ";
        // line 432
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 433
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . ($context["id"] ?? $this->getContext($context, "id")));
            // line 434
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 435
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 436
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 439
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 443
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_187c5d75893267d9c647b33f0c08aec1a8226b11cd6b3ad32cd5da0164cf6745->leave($__internal_187c5d75893267d9c647b33f0c08aec1a8226b11cd6b3ad32cd5da0164cf6745_prof);

    }

    // line 447
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        $__internal_b95463152bbfa88108b004cff1ffb8475cd607ddc513391c28ca6a444ae38782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95463152bbfa88108b004cff1ffb8475cd607ddc513391c28ca6a444ae38782->enter($__internal_b95463152bbfa88108b004cff1ffb8475cd607ddc513391c28ca6a444ae38782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_rest"));

        // line 448
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 449
        echo "<div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">";
        // line 453
        $this->displayBlock("item_actions", $context, $blocks);
        // line 454
        echo "</div>
            </div>
        </div>
    </div>
";
        
        $__internal_b95463152bbfa88108b004cff1ffb8475cd607ddc513391c28ca6a444ae38782->leave($__internal_b95463152bbfa88108b004cff1ffb8475cd607ddc513391c28ca6a444ae38782_prof);

    }

    // line 460
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_3d24609defe1163243ab66d80a8f7265f3cb7689f1355dcc669b90f19deabe98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d24609defe1163243ab66d80a8f7265f3cb7689f1355dcc669b90f19deabe98->enter($__internal_3d24609defe1163243ab66d80a8f7265f3cb7689f1355dcc669b90f19deabe98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 461
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 462
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 463
        echo "
    ";
        // line 465
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> ";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
    </button>

    ";
        // line 469
        $context["_entity_actions"] = ((($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 470
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 471
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 472
        echo "
    ";
        // line 473
        $context["_entity_id"] = ((($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 475
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 476
        echo "
    ";
        // line 477
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 478
        echo "
    ";
        // line 479
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 480
($context["_entity_actions"] ?? $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 481
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 482
($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 483
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 484
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 485
        echo "
";
        
        $__internal_3d24609defe1163243ab66d80a8f7265f3cb7689f1355dcc669b90f19deabe98->leave($__internal_3d24609defe1163243ab66d80a8f7265f3cb7689f1355dcc669b90f19deabe98_prof);

    }

    // line 489
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_41ff5055a0c3a3793334ca36c875b942af02d7fd179be4f6797a786df79e7a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ff5055a0c3a3793334ca36c875b942af02d7fd179be4f6797a786df79e7a74->enter($__internal_41ff5055a0c3a3793334ca36c875b942af02d7fd179be4f6797a786df79e7a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 490
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 491
        echo "    <div class=\"row\">
        ";
        // line 492
        if ((twig_length_filter($this->env, ($context["easyadmin_form_tabs"] ?? $this->getContext($context, "easyadmin_form_tabs"))) > 0)) {
            // line 493
            echo "            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 496
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? $this->getContext($context, "easyadmin_form_tabs")));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 497
                echo "                            <li class=\"";
                if ($this->getAttribute($context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <a href=\"#";
                // line 498
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">
                                    ";
                // line 499
                if ((($this->getAttribute($context["tab_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["tab_config"], "icon", array()), false)) : (false))) {
                    // line 500
                    echo "                                        <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                    ";
                }
                // line 502
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "label", array(), "array"), "html", null, true);
                echo "
                                    ";
                // line 503
                if (($this->getAttribute($context["tab_config"], "errors", array()) > 0)) {
                    // line 504
                    echo "                                        <span class=\"label label-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("form.tab.error_badge_title", $this->getAttribute($context["tab_config"], "errors", array()), array(), "EasyAdminBundle"), "html", null, true);
                    echo "\">
                                            ";
                    // line 505
                    echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "errors", array()), "html", null, true);
                    echo "
                                        </span>
                                    ";
                }
                // line 508
                echo "                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 511
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 513
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? $this->getContext($context, "easyadmin_form_tabs")));
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
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 514
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tab_config"], "id", array(), "array"), "html", null, true);
                echo "\" class=\"tab-pane ";
                if ($this->getAttribute($context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <div class=\"row\">
                                    ";
                // line 516
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 520
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 524
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 526
        echo "    </div>
";
        
        $__internal_41ff5055a0c3a3793334ca36c875b942af02d7fd179be4f6797a786df79e7a74->leave($__internal_41ff5055a0c3a3793334ca36c875b942af02d7fd179be4f6797a786df79e7a74_prof);

    }

    // line 529
    public function block_easyadmin_widget_groups($context, array $blocks = array())
    {
        $__internal_39f7976881561547b7ac7d5cf183167305f066edf71fb399bb4d240bacb63f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f7976881561547b7ac7d5cf183167305f066edf71fb399bb4d240bacb63f66->enter($__internal_39f7976881561547b7ac7d5cf183167305f066edf71fb399bb4d240bacb63f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget_groups"));

        // line 530
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_groups"] ?? $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            if (( !$this->getAttribute($context["group_config"], "form_tab", array()) || ($this->getAttribute($context["group_config"], "form_tab", array()) == ($context["tab_name"] ?? $this->getContext($context, "tab_name"))))) {
                // line 531
                echo "        <div class=\"field-group col-xs-12 ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
                echo "\">
            <div class=\"box box-default\">
                ";
                // line 533
                if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                    // line 534
                    echo "                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            ";
                    // line 536
                    if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                        // line 537
                        echo "                                <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                        echo "\"></i>
                            ";
                    }
                    // line 539
                    echo "                            ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")));
                    echo "
                        </h3>
                    </div>
                ";
                }
                // line 543
                echo "
                <div class=\"box-body\">
                    ";
                // line 545
                if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                    // line 546
                    echo "                        <p class=\"help-block\">";
                    echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true));
                    echo "</p>
                    ";
                }
                // line 548
                echo "
                    <div class=\"row\">
                        ";
                // line 550
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                        // line 551
                        echo "                            ";
                        if (( !$this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == ($context["tab_name"] ?? $this->getContext($context, "tab_name"))))) {
                            // line 552
                            echo "                                <div class=\"col-xs-12 ";
                            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                            echo "\">
                                    ";
                            // line 553
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'row');
                            echo "
                                </div>
                            ";
                        }
                        // line 556
                        echo "                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 557
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 562
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ( !$this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == ($context["tab_name"] ?? $this->getContext($context, "tab_name")))))) {
                    // line 563
                    echo "            <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                ";
                    // line 564
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["field"], 'row');
                    echo "
            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 567
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_39f7976881561547b7ac7d5cf183167305f066edf71fb399bb4d240bacb63f66->leave($__internal_39f7976881561547b7ac7d5cf183167305f066edf71fb399bb4d240bacb63f66_prof);

    }

    // line 571
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_a0b439055299a758930f8a611f9c604bee885de801885a3ff05c50c0a6415014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b439055299a758930f8a611f9c604bee885de801885a3ff05c50c0a6415014->enter($__internal_a0b439055299a758930f8a611f9c604bee885de801885a3ff05c50c0a6415014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 572
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 573
($context["attr"] ?? $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 576
($context["autocomplete_entity_name"] ?? $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 579
        echo "
";
        
        $__internal_a0b439055299a758930f8a611f9c604bee885de801885a3ff05c50c0a6415014->leave($__internal_a0b439055299a758930f8a611f9c604bee885de801885a3ff05c50c0a6415014_prof);

    }

    // line 582
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_ea715c0cee0e34df69b2b71912ced25d3254d662f994035eb18f45d20c3236bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea715c0cee0e34df69b2b71912ced25d3254d662f994035eb18f45d20c3236bb->enter($__internal_ea715c0cee0e34df69b2b71912ced25d3254d662f994035eb18f45d20c3236bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 583
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 584
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_ea715c0cee0e34df69b2b71912ced25d3254d662f994035eb18f45d20c3236bb->leave($__internal_ea715c0cee0e34df69b2b71912ced25d3254d662f994035eb18f45d20c3236bb_prof);

    }

    // line 588
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_5d920c4701f162c0ff3e36091952de51b3489887dc8c5b9ea883b8ff02c4a2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d920c4701f162c0ff3e36091952de51b3489887dc8c5b9ea883b8ff02c4a2ec->enter($__internal_5d920c4701f162c0ff3e36091952de51b3489887dc8c5b9ea883b8ff02c4a2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 589
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_5d920c4701f162c0ff3e36091952de51b3489887dc8c5b9ea883b8ff02c4a2ec->leave($__internal_5d920c4701f162c0ff3e36091952de51b3489887dc8c5b9ea883b8ff02c4a2ec_prof);

    }

    // line 595
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_2706553c4b41ee8a902671dea1780140bd6cfee1e9fca65fd71bfdd90a4601ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2706553c4b41ee8a902671dea1780140bd6cfee1e9fca65fd71bfdd90a4601ae->enter($__internal_2706553c4b41ee8a902671dea1780140bd6cfee1e9fca65fd71bfdd90a4601ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 596
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 597
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 598
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 599
            echo "            <h2>
                ";
            // line 600
            if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 601
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 604
        echo "
        ";
        // line 605
        if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 606
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 608
        echo "    </div>
";
        
        $__internal_2706553c4b41ee8a902671dea1780140bd6cfee1e9fca65fd71bfdd90a4601ae->leave($__internal_2706553c4b41ee8a902671dea1780140bd6cfee1e9fca65fd71bfdd90a4601ae_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1850 => 608,  1844 => 606,  1842 => 605,  1839 => 604,  1832 => 601,  1826 => 600,  1823 => 599,  1821 => 598,  1816 => 597,  1813 => 596,  1807 => 595,  1797 => 589,  1791 => 588,  1784 => 584,  1781 => 583,  1775 => 582,  1767 => 579,  1765 => 576,  1764 => 573,  1762 => 572,  1756 => 571,  1745 => 567,  1735 => 564,  1730 => 563,  1724 => 562,  1714 => 557,  1707 => 556,  1701 => 553,  1696 => 552,  1693 => 551,  1688 => 550,  1684 => 548,  1678 => 546,  1676 => 545,  1672 => 543,  1664 => 539,  1658 => 537,  1656 => 536,  1652 => 534,  1650 => 533,  1644 => 531,  1637 => 530,  1631 => 529,  1623 => 526,  1617 => 524,  1611 => 520,  1593 => 516,  1583 => 514,  1566 => 513,  1562 => 511,  1554 => 508,  1548 => 505,  1543 => 504,  1541 => 503,  1536 => 502,  1530 => 500,  1528 => 499,  1522 => 498,  1515 => 497,  1511 => 496,  1506 => 493,  1504 => 492,  1501 => 491,  1498 => 490,  1492 => 489,  1484 => 485,  1482 => 484,  1481 => 483,  1480 => 482,  1479 => 481,  1478 => 480,  1477 => 479,  1474 => 478,  1472 => 477,  1469 => 476,  1467 => 475,  1466 => 473,  1463 => 472,  1461 => 471,  1460 => 470,  1459 => 469,  1453 => 466,  1450 => 465,  1447 => 463,  1444 => 462,  1441 => 461,  1435 => 460,  1424 => 454,  1422 => 453,  1417 => 449,  1415 => 448,  1409 => 447,  1400 => 443,  1394 => 440,  1390 => 439,  1384 => 436,  1380 => 435,  1377 => 434,  1374 => 433,  1372 => 432,  1369 => 431,  1363 => 429,  1361 => 428,  1357 => 427,  1354 => 426,  1352 => 425,  1346 => 424,  1336 => 421,  1333 => 420,  1327 => 419,  1314 => 412,  1309 => 411,  1303 => 408,  1300 => 407,  1298 => 406,  1294 => 404,  1286 => 402,  1283 => 401,  1281 => 400,  1278 => 399,  1276 => 398,  1270 => 397,  1260 => 394,  1257 => 393,  1251 => 392,  1241 => 388,  1238 => 387,  1232 => 386,  1225 => 383,  1222 => 382,  1219 => 381,  1216 => 380,  1213 => 379,  1207 => 377,  1204 => 376,  1198 => 373,  1189 => 369,  1185 => 367,  1176 => 365,  1172 => 364,  1169 => 363,  1163 => 361,  1161 => 360,  1157 => 359,  1154 => 358,  1151 => 357,  1148 => 356,  1142 => 355,  1135 => 351,  1133 => 350,  1131 => 349,  1123 => 348,  1117 => 347,  1110 => 344,  1108 => 343,  1106 => 342,  1098 => 341,  1092 => 340,  1085 => 337,  1083 => 336,  1077 => 335,  1070 => 332,  1068 => 331,  1062 => 330,  1055 => 327,  1053 => 326,  1047 => 325,  1040 => 322,  1038 => 321,  1032 => 320,  1025 => 317,  1023 => 316,  1017 => 315,  1011 => 314,  999 => 308,  994 => 306,  990 => 304,  976 => 295,  970 => 294,  959 => 286,  954 => 283,  951 => 282,  949 => 281,  943 => 279,  937 => 278,  930 => 275,  924 => 273,  922 => 272,  920 => 270,  913 => 265,  907 => 264,  903 => 262,  901 => 261,  899 => 259,  897 => 258,  889 => 257,  887 => 256,  881 => 255,  872 => 249,  870 => 248,  868 => 247,  853 => 246,  850 => 245,  847 => 244,  844 => 243,  841 => 242,  838 => 241,  835 => 240,  832 => 239,  829 => 238,  826 => 237,  823 => 236,  821 => 235,  815 => 234,  808 => 231,  802 => 230,  795 => 227,  789 => 226,  782 => 223,  780 => 222,  774 => 220,  767 => 217,  765 => 216,  759 => 215,  751 => 209,  749 => 208,  747 => 207,  744 => 205,  742 => 204,  740 => 203,  734 => 202,  726 => 198,  724 => 197,  722 => 196,  719 => 194,  717 => 193,  715 => 192,  709 => 191,  701 => 187,  695 => 184,  694 => 183,  693 => 182,  689 => 181,  685 => 180,  682 => 178,  676 => 175,  675 => 174,  674 => 173,  670 => 172,  668 => 171,  666 => 170,  660 => 169,  648 => 163,  643 => 161,  639 => 159,  626 => 149,  621 => 146,  618 => 145,  616 => 144,  614 => 143,  612 => 142,  606 => 141,  597 => 136,  594 => 135,  586 => 134,  581 => 132,  579 => 131,  577 => 130,  574 => 128,  572 => 127,  566 => 126,  557 => 121,  555 => 120,  553 => 118,  552 => 117,  551 => 116,  550 => 115,  545 => 113,  543 => 112,  541 => 111,  538 => 109,  536 => 108,  530 => 107,  522 => 103,  520 => 102,  518 => 101,  516 => 100,  514 => 99,  510 => 98,  508 => 97,  505 => 95,  503 => 94,  497 => 93,  489 => 89,  487 => 88,  485 => 87,  479 => 86,  472 => 83,  466 => 81,  464 => 80,  462 => 79,  456 => 77,  453 => 76,  451 => 75,  448 => 74,  442 => 73,  435 => 70,  433 => 69,  427 => 68,  420 => 65,  418 => 64,  412 => 63,  405 => 60,  402 => 58,  400 => 57,  394 => 56,  382 => 50,  377 => 48,  373 => 46,  360 => 36,  355 => 33,  352 => 32,  350 => 31,  348 => 29,  342 => 28,  333 => 23,  331 => 21,  325 => 18,  323 => 17,  320 => 16,  317 => 15,  315 => 13,  314 => 12,  313 => 11,  312 => 9,  311 => 8,  310 => 7,  308 => 5,  306 => 4,  300 => 3,  293 => 595,  290 => 593,  288 => 588,  285 => 586,  283 => 582,  280 => 581,  278 => 571,  275 => 569,  273 => 529,  270 => 528,  268 => 489,  265 => 487,  263 => 460,  260 => 459,  258 => 447,  255 => 446,  253 => 424,  250 => 423,  248 => 419,  245 => 418,  243 => 397,  240 => 396,  238 => 392,  235 => 391,  233 => 386,  231 => 373,  229 => 355,  226 => 353,  224 => 347,  221 => 346,  219 => 340,  216 => 339,  214 => 335,  211 => 334,  209 => 330,  206 => 329,  204 => 325,  201 => 324,  199 => 320,  196 => 319,  194 => 314,  191 => 313,  189 => 278,  186 => 277,  184 => 255,  181 => 254,  178 => 252,  176 => 234,  173 => 233,  171 => 230,  168 => 229,  166 => 226,  163 => 225,  161 => 220,  158 => 219,  156 => 215,  153 => 214,  150 => 212,  148 => 202,  145 => 201,  143 => 191,  140 => 190,  138 => 169,  135 => 168,  133 => 141,  130 => 140,  128 => 126,  125 => 125,  123 => 107,  120 => 106,  118 => 93,  115 => 92,  113 => 86,  110 => 85,  108 => 73,  105 => 72,  103 => 68,  100 => 67,  98 => 63,  95 => 62,  93 => 56,  90 => 55,  88 => 28,  85 => 27,  82 => 25,  80 => 3,  77 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    {{- parent() -}}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, translation_domain ?: easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'datetime_immutable', 'date', 'date_immutable', 'time', 'time_immutable', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {# the \"is iterable\" check is needed because if an object implements __toString() and
       returns an empty string, \"is empty\" returns true even if it's not a collection #}
    {% if value is iterable and value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is iterable and value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block easyadmin_rest %}
    {{- form_rest(form) -}}
    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {{- block('item_actions') -}}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_rest %}

{% block item_actions %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
    </button>

    {% set _entity_actions = (easyadmin.view == 'new')
        ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
        : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

    {% set _entity_id = (easyadmin.view == 'new')
        ? null
        : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

    {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

    {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
        actions: _entity_actions,
        request_parameters: _request_parameters,
        translation_domain: _translation_domain,
        trans_parameters: _trans_parameters,
        item_id: _entity_id
    }, with_context = false) }}
{% endblock item_actions %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"row\">
        {% if easyadmin_form_tabs | length > 0 %}
            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <li class=\"{% if tab_config.active %}active{% endif %}\">
                                <a href=\"#{{ tab_config['id'] }}\" id=\"{{ tab_config['id'] }}-tab\" data-toggle=\"tab\">
                                    {% if tab_config.icon|default(false) %}
                                        <i class=\"fa fa-{{ tab_config.icon }}\"></i>
                                    {% endif %}
                                    {{ tab_config['label'] }}
                                    {% if tab_config.errors > 0 %}
                                        <span class=\"label label-danger\" title=\"{{ 'form.tab.error_badge_title'|transchoice(tab_config.errors, {}, 'EasyAdminBundle') }}\">
                                            {{ tab_config.errors }}
                                        </span>
                                    {% endif %}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                    <div class=\"tab-content\">
                        {% for tab_name, tab_config in easyadmin_form_tabs %}
                            <div id=\"{{ tab_config['id'] }}\" class=\"tab-pane {% if tab_config.active %}active{% endif %}\">
                                <div class=\"row\">
                                    {{ block('easyadmin_widget_groups') }}
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        {% else %}
            {{ block('easyadmin_widget_groups') }}
        {% endif %}
    </div>
{% endblock easyadmin_widget %}

{% block easyadmin_widget_groups %}
    {% for group_name, group_config in easyadmin_form_groups if not group_config.form_tab or group_config.form_tab == tab_name %}
        <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
            <div class=\"box box-default\">
                {% if group_config.label|default(false) or group_config.icon|default(false) %}
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            {% if group_config.icon|default(false) %}
                                <i class=\"fa fa-{{ group_config.icon }}\"></i>
                            {% endif %}
                            {{ group_config.label|trans(domain = _translation_domain)|raw }}
                        </h3>
                    </div>
                {% endif %}

                <div class=\"box-body\">
                    {% if group_config.help|default(false) %}
                        <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                    {% endif %}

                    <div class=\"row\">
                        {% for field in form if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                            {% if not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        {% for field in form if 'hidden' not in field.vars.block_prefixes and (not field.vars.easyadmin.form_tab or field.vars.easyadmin.form_tab == tab_name) %}
            <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                {{ form_row(field) }}
            </div>
        {% endfor %}
    {% endfor %}
{% endblock easyadmin_widget_groups %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "/var/www/html/Alphabus/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}
