<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_7ebb1e6f897e42c2c71438c93f265e04aa935fecbb7c11a1f6d3530247650db2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3ec1a4a4aa32e9fdad083c17bf8f59c3334f91321c9f97f24fb7f345d69f5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ec1a4a4aa32e9fdad083c17bf8f59c3334f91321c9f97f24fb7f345d69f5c2->enter($__internal_b3ec1a4a4aa32e9fdad083c17bf8f59c3334f91321c9f97f24fb7f345d69f5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 141
        echo "
";
        // line 143
        echo "
";
        // line 144
        $this->displayBlock('form_label', $context, $blocks);
        // line 148
        echo "
";
        // line 149
        $this->displayBlock('choice_label', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('radio_label', $context, $blocks);
        // line 166
        echo "
";
        // line 167
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 191
        echo "
";
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('form_row', $context, $blocks);
        // line 201
        echo "
";
        // line 202
        $this->displayBlock('button_row', $context, $blocks);
        // line 207
        echo "
";
        // line 208
        $this->displayBlock('choice_row', $context, $blocks);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('date_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('time_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('radio_row', $context, $blocks);
        // line 241
        echo "
";
        // line 243
        echo "
";
        // line 244
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_b3ec1a4a4aa32e9fdad083c17bf8f59c3334f91321c9f97f24fb7f345d69f5c2->leave($__internal_b3ec1a4a4aa32e9fdad083c17bf8f59c3334f91321c9f97f24fb7f345d69f5c2_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8d70a5d67b366da5a875b56f44d6a256c923bfe2ebbeb2e53b5082ba725b7bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d70a5d67b366da5a875b56f44d6a256c923bfe2ebbeb2e53b5082ba725b7bf4->enter($__internal_8d70a5d67b366da5a875b56f44d6a256c923bfe2ebbeb2e53b5082ba725b7bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8d70a5d67b366da5a875b56f44d6a256c923bfe2ebbeb2e53b5082ba725b7bf4->leave($__internal_8d70a5d67b366da5a875b56f44d6a256c923bfe2ebbeb2e53b5082ba725b7bf4_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_cbfb792f716f30eae1baaedcb50e0d36160de6f0e98f08ee9938a7ba87508f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfb792f716f30eae1baaedcb50e0d36160de6f0e98f08ee9938a7ba87508f70->enter($__internal_cbfb792f716f30eae1baaedcb50e0d36160de6f0e98f08ee9938a7ba87508f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_cbfb792f716f30eae1baaedcb50e0d36160de6f0e98f08ee9938a7ba87508f70->leave($__internal_cbfb792f716f30eae1baaedcb50e0d36160de6f0e98f08ee9938a7ba87508f70_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_235d5584f60bced25ed5457954b0307f36aaf390202bd6c48bd98f8be5a40d3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235d5584f60bced25ed5457954b0307f36aaf390202bd6c48bd98f8be5a40d3b->enter($__internal_235d5584f60bced25ed5457954b0307f36aaf390202bd6c48bd98f8be5a40d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_235d5584f60bced25ed5457954b0307f36aaf390202bd6c48bd98f8be5a40d3b->leave($__internal_235d5584f60bced25ed5457954b0307f36aaf390202bd6c48bd98f8be5a40d3b_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_07823269089bf5df6c7c467c39b235bf08ad44c8a22dbb572f34bd5adc7bb139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07823269089bf5df6c7c467c39b235bf08ad44c8a22dbb572f34bd5adc7bb139->enter($__internal_07823269089bf5df6c7c467c39b235bf08ad44c8a22dbb572f34bd5adc7bb139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_c92abea59aa25a6d5dcec90e20b45eec4df2f50bae0d3164911e62656775b071 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_ba5ccbfaf1c63ee2292960e1ca770523571764e620d07efb7f8c3bef2e1ff242 = "{{") && ('' === $__internal_ba5ccbfaf1c63ee2292960e1ca770523571764e620d07efb7f8c3bef2e1ff242 || 0 === strpos($__internal_c92abea59aa25a6d5dcec90e20b45eec4df2f50bae0d3164911e62656775b071, $__internal_ba5ccbfaf1c63ee2292960e1ca770523571764e620d07efb7f8c3bef2e1ff242)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_fe3a06b265aaaa5c67625739c82c1e8aeccb7c643c487063488b9f4fd41cf27e = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_5eaf4673b7584308d8a027fd2f8448573d6729b1bbcd1a6008b2303a1a720fb6 = "}}") && ('' === $__internal_5eaf4673b7584308d8a027fd2f8448573d6729b1bbcd1a6008b2303a1a720fb6 || $__internal_5eaf4673b7584308d8a027fd2f8448573d6729b1bbcd1a6008b2303a1a720fb6 === substr($__internal_fe3a06b265aaaa5c67625739c82c1e8aeccb7c643c487063488b9f4fd41cf27e, -strlen($__internal_5eaf4673b7584308d8a027fd2f8448573d6729b1bbcd1a6008b2303a1a720fb6))));
        // line 25
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_07823269089bf5df6c7c467c39b235bf08ad44c8a22dbb572f34bd5adc7bb139->leave($__internal_07823269089bf5df6c7c467c39b235bf08ad44c8a22dbb572f34bd5adc7bb139_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_9e979e57cf4dfaeeb80150066b55c171cb8399b488182f2c653e4e403260013d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e979e57cf4dfaeeb80150066b55c171cb8399b488182f2c653e4e403260013d->enter($__internal_9e979e57cf4dfaeeb80150066b55c171cb8399b488182f2c653e4e403260013d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_9e979e57cf4dfaeeb80150066b55c171cb8399b488182f2c653e4e403260013d->leave($__internal_9e979e57cf4dfaeeb80150066b55c171cb8399b488182f2c653e4e403260013d_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_a1ce700e68b5b937228494f01e03ef01d5dcbbc04795c2dce00fcb2603123a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ce700e68b5b937228494f01e03ef01d5dcbbc04795c2dce00fcb2603123a58->enter($__internal_a1ce700e68b5b937228494f01e03ef01d5dcbbc04795c2dce00fcb2603123a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_a1ce700e68b5b937228494f01e03ef01d5dcbbc04795c2dce00fcb2603123a58->leave($__internal_a1ce700e68b5b937228494f01e03ef01d5dcbbc04795c2dce00fcb2603123a58_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_34023bd1cfe6372835dd3a76231ae0fb4e7a731ebaa3ac370f37e575f5c7a778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34023bd1cfe6372835dd3a76231ae0fb4e7a731ebaa3ac370f37e575f5c7a778->enter($__internal_34023bd1cfe6372835dd3a76231ae0fb4e7a731ebaa3ac370f37e575f5c7a778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_34023bd1cfe6372835dd3a76231ae0fb4e7a731ebaa3ac370f37e575f5c7a778->leave($__internal_34023bd1cfe6372835dd3a76231ae0fb4e7a731ebaa3ac370f37e575f5c7a778_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_84ef96f259e39f23111a50f0fd787a95ab482240ac73481c833bca988880cfb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84ef96f259e39f23111a50f0fd787a95ab482240ac73481c833bca988880cfb7->enter($__internal_84ef96f259e39f23111a50f0fd787a95ab482240ac73481c833bca988880cfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_84ef96f259e39f23111a50f0fd787a95ab482240ac73481c833bca988880cfb7->leave($__internal_84ef96f259e39f23111a50f0fd787a95ab482240ac73481c833bca988880cfb7_prof);

    }

    // line 95
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_66419bdc9cc7ca63bb37f84bc494d4277749e06bc28e8833963e8274b038669d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66419bdc9cc7ca63bb37f84bc494d4277749e06bc28e8833963e8274b038669d->enter($__internal_66419bdc9cc7ca63bb37f84bc494d4277749e06bc28e8833963e8274b038669d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 96
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 97
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_66419bdc9cc7ca63bb37f84bc494d4277749e06bc28e8833963e8274b038669d->leave($__internal_66419bdc9cc7ca63bb37f84bc494d4277749e06bc28e8833963e8274b038669d_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_9bd63a8fa9e5c8e3cb1c7f94602cdd3ac4aca9bfa5aa166e71487caba3a8d082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd63a8fa9e5c8e3cb1c7f94602cdd3ac4aca9bfa5aa166e71487caba3a8d082->enter($__internal_9bd63a8fa9e5c8e3cb1c7f94602cdd3ac4aca9bfa5aa166e71487caba3a8d082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 101
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 103
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 104
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 105
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "</div>";
        }
        
        $__internal_9bd63a8fa9e5c8e3cb1c7f94602cdd3ac4aca9bfa5aa166e71487caba3a8d082->leave($__internal_9bd63a8fa9e5c8e3cb1c7f94602cdd3ac4aca9bfa5aa166e71487caba3a8d082_prof);

    }

    // line 120
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_daf5c140326f1d27d364edc1c58c8969b95519a544b275055349f1a07c2387b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf5c140326f1d27d364edc1c58c8969b95519a544b275055349f1a07c2387b9->enter($__internal_daf5c140326f1d27d364edc1c58c8969b95519a544b275055349f1a07c2387b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 121
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 122
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 123
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 125
            echo "<div class=\"checkbox\">";
            // line 126
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 127
            echo "</div>";
        }
        
        $__internal_daf5c140326f1d27d364edc1c58c8969b95519a544b275055349f1a07c2387b9->leave($__internal_daf5c140326f1d27d364edc1c58c8969b95519a544b275055349f1a07c2387b9_prof);

    }

    // line 131
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_615c7ce651be82525b6e5aabb88a5c6dc6a379fa32af5767cc4ed29a8e263eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615c7ce651be82525b6e5aabb88a5c6dc6a379fa32af5767cc4ed29a8e263eb2->enter($__internal_615c7ce651be82525b6e5aabb88a5c6dc6a379fa32af5767cc4ed29a8e263eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 132
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 133
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 134
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 136
            echo "<div class=\"radio\">";
            // line 137
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 138
            echo "</div>";
        }
        
        $__internal_615c7ce651be82525b6e5aabb88a5c6dc6a379fa32af5767cc4ed29a8e263eb2->leave($__internal_615c7ce651be82525b6e5aabb88a5c6dc6a379fa32af5767cc4ed29a8e263eb2_prof);

    }

    // line 144
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6a3815abc2472b5c188cd172f3c2aa09ea0cd5db0a978fc44ff6d57c5a545107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3815abc2472b5c188cd172f3c2aa09ea0cd5db0a978fc44ff6d57c5a545107->enter($__internal_6a3815abc2472b5c188cd172f3c2aa09ea0cd5db0a978fc44ff6d57c5a545107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 145
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 146
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_6a3815abc2472b5c188cd172f3c2aa09ea0cd5db0a978fc44ff6d57c5a545107->leave($__internal_6a3815abc2472b5c188cd172f3c2aa09ea0cd5db0a978fc44ff6d57c5a545107_prof);

    }

    // line 149
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_f353ba181269a3fde39323f4d8c071aad0bc2fb9f703e4b8aca7a5124a4c3b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f353ba181269a3fde39323f4d8c071aad0bc2fb9f703e4b8aca7a5124a4c3b7f->enter($__internal_f353ba181269a3fde39323f4d8c071aad0bc2fb9f703e4b8aca7a5124a4c3b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 151
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 152
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f353ba181269a3fde39323f4d8c071aad0bc2fb9f703e4b8aca7a5124a4c3b7f->leave($__internal_f353ba181269a3fde39323f4d8c071aad0bc2fb9f703e4b8aca7a5124a4c3b7f_prof);

    }

    // line 155
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_3874a1b3e5c6325f034308477d78f7a6a4712c5f5f2850bab1107a23f396f008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3874a1b3e5c6325f034308477d78f7a6a4712c5f5f2850bab1107a23f396f008->enter($__internal_3874a1b3e5c6325f034308477d78f7a6a4712c5f5f2850bab1107a23f396f008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 156
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 158
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3874a1b3e5c6325f034308477d78f7a6a4712c5f5f2850bab1107a23f396f008->leave($__internal_3874a1b3e5c6325f034308477d78f7a6a4712c5f5f2850bab1107a23f396f008_prof);

    }

    // line 161
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9eceffe4ac21e449d9b43c298fdeedadf284dd944f41f8636f9f769b3f30a011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eceffe4ac21e449d9b43c298fdeedadf284dd944f41f8636f9f769b3f30a011->enter($__internal_9eceffe4ac21e449d9b43c298fdeedadf284dd944f41f8636f9f769b3f30a011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 162
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 164
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9eceffe4ac21e449d9b43c298fdeedadf284dd944f41f8636f9f769b3f30a011->leave($__internal_9eceffe4ac21e449d9b43c298fdeedadf284dd944f41f8636f9f769b3f30a011_prof);

    }

    // line 167
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d7727900d37599a514f05fe983779f0d5572d643ff138dd49f24abeb2cbe4283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7727900d37599a514f05fe983779f0d5572d643ff138dd49f24abeb2cbe4283->enter($__internal_d7727900d37599a514f05fe983779f0d5572d643ff138dd49f24abeb2cbe4283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 168
        echo "    ";
        // line 169
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 170
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 171
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 172
                echo "        ";
            }
            // line 173
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 174
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 175
                echo "        ";
            }
            // line 176
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 177
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 178
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 179
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 180
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 183
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 186
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
            // line 187
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 188
            echo "</label>
    ";
        }
        
        $__internal_d7727900d37599a514f05fe983779f0d5572d643ff138dd49f24abeb2cbe4283->leave($__internal_d7727900d37599a514f05fe983779f0d5572d643ff138dd49f24abeb2cbe4283_prof);

    }

    // line 194
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e9f4c8aab00427a18d437b1e903dfa6217c3cc4a102cfe219ab0296ca6ecaa4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9f4c8aab00427a18d437b1e903dfa6217c3cc4a102cfe219ab0296ca6ecaa4a->enter($__internal_e9f4c8aab00427a18d437b1e903dfa6217c3cc4a102cfe219ab0296ca6ecaa4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 195
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 197
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 199
        echo "</div>";
        
        $__internal_e9f4c8aab00427a18d437b1e903dfa6217c3cc4a102cfe219ab0296ca6ecaa4a->leave($__internal_e9f4c8aab00427a18d437b1e903dfa6217c3cc4a102cfe219ab0296ca6ecaa4a_prof);

    }

    // line 202
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c7205963c64f841e6320dec2ee94753951854f4962bbbc0aa0774b97095f0a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7205963c64f841e6320dec2ee94753951854f4962bbbc0aa0774b97095f0a5c->enter($__internal_c7205963c64f841e6320dec2ee94753951854f4962bbbc0aa0774b97095f0a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 203
        echo "<div class=\"form-group\">";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 205
        echo "</div>";
        
        $__internal_c7205963c64f841e6320dec2ee94753951854f4962bbbc0aa0774b97095f0a5c->leave($__internal_c7205963c64f841e6320dec2ee94753951854f4962bbbc0aa0774b97095f0a5c_prof);

    }

    // line 208
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_cdd3f19d0aa9de7bcea8c50826e744c364bd938e7ba78fff436d3251867a209d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd3f19d0aa9de7bcea8c50826e744c364bd938e7ba78fff436d3251867a209d->enter($__internal_cdd3f19d0aa9de7bcea8c50826e744c364bd938e7ba78fff436d3251867a209d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 209
        $context["force_error"] = true;
        // line 210
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cdd3f19d0aa9de7bcea8c50826e744c364bd938e7ba78fff436d3251867a209d->leave($__internal_cdd3f19d0aa9de7bcea8c50826e744c364bd938e7ba78fff436d3251867a209d_prof);

    }

    // line 213
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_8ff9b91fd10862ee083bf5eb16c1889f962a6a6bfbde8fbd6f6373ea55e06a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff9b91fd10862ee083bf5eb16c1889f962a6a6bfbde8fbd6f6373ea55e06a46->enter($__internal_8ff9b91fd10862ee083bf5eb16c1889f962a6a6bfbde8fbd6f6373ea55e06a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 214
        $context["force_error"] = true;
        // line 215
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8ff9b91fd10862ee083bf5eb16c1889f962a6a6bfbde8fbd6f6373ea55e06a46->leave($__internal_8ff9b91fd10862ee083bf5eb16c1889f962a6a6bfbde8fbd6f6373ea55e06a46_prof);

    }

    // line 218
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_bf52dda27d8a6e505fc14a0d911ed019454bc846adf399a10eb0814591a57385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf52dda27d8a6e505fc14a0d911ed019454bc846adf399a10eb0814591a57385->enter($__internal_bf52dda27d8a6e505fc14a0d911ed019454bc846adf399a10eb0814591a57385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bf52dda27d8a6e505fc14a0d911ed019454bc846adf399a10eb0814591a57385->leave($__internal_bf52dda27d8a6e505fc14a0d911ed019454bc846adf399a10eb0814591a57385_prof);

    }

    // line 223
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b6fab923eedcdfb762429167fc3ff07a764d3f19e3ac0fc5a2c8601006338de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6fab923eedcdfb762429167fc3ff07a764d3f19e3ac0fc5a2c8601006338de7->enter($__internal_b6fab923eedcdfb762429167fc3ff07a764d3f19e3ac0fc5a2c8601006338de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b6fab923eedcdfb762429167fc3ff07a764d3f19e3ac0fc5a2c8601006338de7->leave($__internal_b6fab923eedcdfb762429167fc3ff07a764d3f19e3ac0fc5a2c8601006338de7_prof);

    }

    // line 228
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_77e333f3a8b861028a3ac810abe0bff29b7aa71080877264b2ec17ab4e325093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e333f3a8b861028a3ac810abe0bff29b7aa71080877264b2ec17ab4e325093->enter($__internal_77e333f3a8b861028a3ac810abe0bff29b7aa71080877264b2ec17ab4e325093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 229
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 230
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_77e333f3a8b861028a3ac810abe0bff29b7aa71080877264b2ec17ab4e325093->leave($__internal_77e333f3a8b861028a3ac810abe0bff29b7aa71080877264b2ec17ab4e325093_prof);

    }

    // line 235
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_6b302d6ab1b58557024714a99ee9133240daa23dc64f93768b7ac417808173b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b302d6ab1b58557024714a99ee9133240daa23dc64f93768b7ac417808173b3->enter($__internal_6b302d6ab1b58557024714a99ee9133240daa23dc64f93768b7ac417808173b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 236
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 237
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 239
        echo "</div>";
        
        $__internal_6b302d6ab1b58557024714a99ee9133240daa23dc64f93768b7ac417808173b3->leave($__internal_6b302d6ab1b58557024714a99ee9133240daa23dc64f93768b7ac417808173b3_prof);

    }

    // line 244
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_71885296b57b97fd9fb4c2862211c82ad24424cbd14f5dcf677cbed13e78f911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71885296b57b97fd9fb4c2862211c82ad24424cbd14f5dcf677cbed13e78f911->enter($__internal_71885296b57b97fd9fb4c2862211c82ad24424cbd14f5dcf677cbed13e78f911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 245
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isRootForm(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 247
            echo "    <ul class=\"list-unstyled\">";
            // line 248
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 249
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "</ul>
    ";
            // line 252
            if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isRootForm(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_71885296b57b97fd9fb4c2862211c82ad24424cbd14f5dcf677cbed13e78f911->leave($__internal_71885296b57b97fd9fb4c2862211c82ad24424cbd14f5dcf677cbed13e78f911_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  851 => 252,  848 => 251,  840 => 249,  836 => 248,  834 => 247,  828 => 246,  826 => 245,  820 => 244,  813 => 239,  811 => 238,  809 => 237,  803 => 236,  797 => 235,  790 => 232,  788 => 231,  786 => 230,  780 => 229,  774 => 228,  767 => 225,  765 => 224,  759 => 223,  752 => 220,  750 => 219,  744 => 218,  737 => 215,  735 => 214,  729 => 213,  722 => 210,  720 => 209,  714 => 208,  707 => 205,  705 => 204,  703 => 203,  697 => 202,  690 => 199,  688 => 198,  686 => 197,  684 => 196,  678 => 195,  672 => 194,  663 => 188,  659 => 187,  644 => 186,  640 => 183,  637 => 180,  636 => 179,  635 => 178,  633 => 177,  630 => 176,  627 => 175,  624 => 174,  621 => 173,  618 => 172,  615 => 171,  612 => 170,  609 => 169,  607 => 168,  601 => 167,  594 => 164,  592 => 162,  586 => 161,  579 => 158,  577 => 156,  571 => 155,  564 => 152,  562 => 151,  556 => 149,  549 => 146,  547 => 145,  541 => 144,  533 => 138,  531 => 137,  529 => 136,  526 => 134,  524 => 133,  522 => 132,  516 => 131,  508 => 127,  506 => 126,  504 => 125,  501 => 123,  499 => 122,  497 => 121,  491 => 120,  483 => 116,  477 => 113,  476 => 112,  475 => 111,  471 => 110,  467 => 109,  460 => 105,  459 => 104,  458 => 103,  454 => 102,  452 => 101,  446 => 100,  439 => 97,  437 => 96,  431 => 95,  422 => 90,  419 => 89,  409 => 88,  404 => 86,  402 => 85,  400 => 84,  397 => 82,  395 => 81,  389 => 80,  380 => 75,  378 => 74,  376 => 72,  375 => 71,  374 => 70,  373 => 69,  368 => 67,  366 => 66,  364 => 65,  361 => 63,  359 => 62,  353 => 61,  345 => 57,  343 => 56,  341 => 55,  339 => 54,  337 => 53,  333 => 52,  331 => 51,  328 => 49,  326 => 48,  320 => 47,  312 => 43,  310 => 42,  308 => 41,  302 => 40,  294 => 36,  290 => 34,  284 => 32,  282 => 31,  280 => 30,  274 => 28,  272 => 27,  269 => 26,  266 => 25,  263 => 24,  261 => 23,  255 => 22,  248 => 19,  246 => 18,  240 => 17,  233 => 14,  231 => 13,  225 => 12,  218 => 9,  215 => 7,  213 => 6,  207 => 5,  200 => 244,  197 => 243,  194 => 241,  192 => 235,  189 => 234,  187 => 228,  184 => 227,  182 => 223,  179 => 222,  177 => 218,  174 => 217,  172 => 213,  169 => 212,  167 => 208,  164 => 207,  162 => 202,  159 => 201,  157 => 194,  154 => 193,  151 => 191,  149 => 167,  146 => 166,  144 => 161,  141 => 160,  139 => 155,  136 => 154,  134 => 149,  131 => 148,  129 => 144,  126 => 143,  123 => 141,  121 => 131,  118 => 130,  116 => 120,  113 => 119,  111 => 100,  108 => 99,  106 => 95,  103 => 94,  101 => 80,  98 => 79,  96 => 61,  93 => 60,  91 => 47,  88 => 46,  86 => 40,  83 => 39,  81 => 22,  78 => 21,  76 => 17,  73 => 16,  71 => 12,  68 => 11,  66 => 5,  63 => 4,  60 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

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
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
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
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
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
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/Alphabus/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
