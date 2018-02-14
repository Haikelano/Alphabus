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
        $__internal_208c269c02d898e14f783f9d628ce917288883d5d5220664af5d548d801c9f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_208c269c02d898e14f783f9d628ce917288883d5d5220664af5d548d801c9f8e->enter($__internal_208c269c02d898e14f783f9d628ce917288883d5d5220664af5d548d801c9f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_208c269c02d898e14f783f9d628ce917288883d5d5220664af5d548d801c9f8e->leave($__internal_208c269c02d898e14f783f9d628ce917288883d5d5220664af5d548d801c9f8e_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_2954b456741d79ff05ecc4de82533434769ca310e1472f44d3b01418327b2007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2954b456741d79ff05ecc4de82533434769ca310e1472f44d3b01418327b2007->enter($__internal_2954b456741d79ff05ecc4de82533434769ca310e1472f44d3b01418327b2007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2954b456741d79ff05ecc4de82533434769ca310e1472f44d3b01418327b2007->leave($__internal_2954b456741d79ff05ecc4de82533434769ca310e1472f44d3b01418327b2007_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_39f3217db4c581228f86f29c5585153960d0cd6c527e8416b4a9714f97b2051a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f3217db4c581228f86f29c5585153960d0cd6c527e8416b4a9714f97b2051a->enter($__internal_39f3217db4c581228f86f29c5585153960d0cd6c527e8416b4a9714f97b2051a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_39f3217db4c581228f86f29c5585153960d0cd6c527e8416b4a9714f97b2051a->leave($__internal_39f3217db4c581228f86f29c5585153960d0cd6c527e8416b4a9714f97b2051a_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2b997fbc414788db04deee9e69565028dd6d1ea459e3ab3628220be2c91a63ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b997fbc414788db04deee9e69565028dd6d1ea459e3ab3628220be2c91a63ee->enter($__internal_2b997fbc414788db04deee9e69565028dd6d1ea459e3ab3628220be2c91a63ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_2b997fbc414788db04deee9e69565028dd6d1ea459e3ab3628220be2c91a63ee->leave($__internal_2b997fbc414788db04deee9e69565028dd6d1ea459e3ab3628220be2c91a63ee_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7483d8f81c6daf367c9f3c2841082cdc18299a5c45858db0377776bddbcf263a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7483d8f81c6daf367c9f3c2841082cdc18299a5c45858db0377776bddbcf263a->enter($__internal_7483d8f81c6daf367c9f3c2841082cdc18299a5c45858db0377776bddbcf263a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_4939870fd93a25ddcb9ec1e59a9c08fe71a42dd4e0b04c7870f61237c155557a = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_ec2fdcab0208833a8a5a1535c10de6c3504c1a7c91fe4904972890fe13adb0bf = "{{") && ('' === $__internal_ec2fdcab0208833a8a5a1535c10de6c3504c1a7c91fe4904972890fe13adb0bf || 0 === strpos($__internal_4939870fd93a25ddcb9ec1e59a9c08fe71a42dd4e0b04c7870f61237c155557a, $__internal_ec2fdcab0208833a8a5a1535c10de6c3504c1a7c91fe4904972890fe13adb0bf)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_7720ad576431d254d46a789b0ed7610190bdf91e117b8cde467d8bb2011f0c4c = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_340ef0ab18ae9ba5c0e85ba9536e716585450a465a1454e98d7bd247d9945167 = "}}") && ('' === $__internal_340ef0ab18ae9ba5c0e85ba9536e716585450a465a1454e98d7bd247d9945167 || $__internal_340ef0ab18ae9ba5c0e85ba9536e716585450a465a1454e98d7bd247d9945167 === substr($__internal_7720ad576431d254d46a789b0ed7610190bdf91e117b8cde467d8bb2011f0c4c, -strlen($__internal_340ef0ab18ae9ba5c0e85ba9536e716585450a465a1454e98d7bd247d9945167))));
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
        
        $__internal_7483d8f81c6daf367c9f3c2841082cdc18299a5c45858db0377776bddbcf263a->leave($__internal_7483d8f81c6daf367c9f3c2841082cdc18299a5c45858db0377776bddbcf263a_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_944f1599dc73984a30c23593426fe34e21373888a4a0a5c556f9c65f484eb6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944f1599dc73984a30c23593426fe34e21373888a4a0a5c556f9c65f484eb6bd->enter($__internal_944f1599dc73984a30c23593426fe34e21373888a4a0a5c556f9c65f484eb6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_944f1599dc73984a30c23593426fe34e21373888a4a0a5c556f9c65f484eb6bd->leave($__internal_944f1599dc73984a30c23593426fe34e21373888a4a0a5c556f9c65f484eb6bd_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_daa1b0d142fdc52e117a34f8dbc62a8fb618391f0e33b595ec0d6914985b7474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa1b0d142fdc52e117a34f8dbc62a8fb618391f0e33b595ec0d6914985b7474->enter($__internal_daa1b0d142fdc52e117a34f8dbc62a8fb618391f0e33b595ec0d6914985b7474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_daa1b0d142fdc52e117a34f8dbc62a8fb618391f0e33b595ec0d6914985b7474->leave($__internal_daa1b0d142fdc52e117a34f8dbc62a8fb618391f0e33b595ec0d6914985b7474_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_8c21421ed082b7b247c71e571cba4a9be7cc65532e494b47c44f1dea8e7a8e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c21421ed082b7b247c71e571cba4a9be7cc65532e494b47c44f1dea8e7a8e5b->enter($__internal_8c21421ed082b7b247c71e571cba4a9be7cc65532e494b47c44f1dea8e7a8e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_8c21421ed082b7b247c71e571cba4a9be7cc65532e494b47c44f1dea8e7a8e5b->leave($__internal_8c21421ed082b7b247c71e571cba4a9be7cc65532e494b47c44f1dea8e7a8e5b_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_57986f6a0314209656f8e16ab8992f317aa226ffb17dd66dcd0e8f68c27b22d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57986f6a0314209656f8e16ab8992f317aa226ffb17dd66dcd0e8f68c27b22d0->enter($__internal_57986f6a0314209656f8e16ab8992f317aa226ffb17dd66dcd0e8f68c27b22d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_57986f6a0314209656f8e16ab8992f317aa226ffb17dd66dcd0e8f68c27b22d0->leave($__internal_57986f6a0314209656f8e16ab8992f317aa226ffb17dd66dcd0e8f68c27b22d0_prof);

    }

    // line 95
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_440abd135c9884b069d8978c8fcd6472c37f7d197e2a5082b29129e19f9c151a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440abd135c9884b069d8978c8fcd6472c37f7d197e2a5082b29129e19f9c151a->enter($__internal_440abd135c9884b069d8978c8fcd6472c37f7d197e2a5082b29129e19f9c151a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 96
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 97
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_440abd135c9884b069d8978c8fcd6472c37f7d197e2a5082b29129e19f9c151a->leave($__internal_440abd135c9884b069d8978c8fcd6472c37f7d197e2a5082b29129e19f9c151a_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f3fedbe6e5506416536fbb8b393825f0e6e7a4fc806ca01e3d93602a3ff32ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fedbe6e5506416536fbb8b393825f0e6e7a4fc806ca01e3d93602a3ff32ea8->enter($__internal_f3fedbe6e5506416536fbb8b393825f0e6e7a4fc806ca01e3d93602a3ff32ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_f3fedbe6e5506416536fbb8b393825f0e6e7a4fc806ca01e3d93602a3ff32ea8->leave($__internal_f3fedbe6e5506416536fbb8b393825f0e6e7a4fc806ca01e3d93602a3ff32ea8_prof);

    }

    // line 120
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b6603ea3ffcb61a567163f048b7b98a4892cfad6d9fe40906bd2b99f0f0eac5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6603ea3ffcb61a567163f048b7b98a4892cfad6d9fe40906bd2b99f0f0eac5c->enter($__internal_b6603ea3ffcb61a567163f048b7b98a4892cfad6d9fe40906bd2b99f0f0eac5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_b6603ea3ffcb61a567163f048b7b98a4892cfad6d9fe40906bd2b99f0f0eac5c->leave($__internal_b6603ea3ffcb61a567163f048b7b98a4892cfad6d9fe40906bd2b99f0f0eac5c_prof);

    }

    // line 131
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_406f45c94e90415ecd4adc79dd9423955c06a5a6f27f95a7d2e11fb4a4551384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406f45c94e90415ecd4adc79dd9423955c06a5a6f27f95a7d2e11fb4a4551384->enter($__internal_406f45c94e90415ecd4adc79dd9423955c06a5a6f27f95a7d2e11fb4a4551384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_406f45c94e90415ecd4adc79dd9423955c06a5a6f27f95a7d2e11fb4a4551384->leave($__internal_406f45c94e90415ecd4adc79dd9423955c06a5a6f27f95a7d2e11fb4a4551384_prof);

    }

    // line 144
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_91c3ead5ed5e4adfa9546d6811070489a9566c772888d513d8d826232c91a70e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c3ead5ed5e4adfa9546d6811070489a9566c772888d513d8d826232c91a70e->enter($__internal_91c3ead5ed5e4adfa9546d6811070489a9566c772888d513d8d826232c91a70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 145
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 146
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_91c3ead5ed5e4adfa9546d6811070489a9566c772888d513d8d826232c91a70e->leave($__internal_91c3ead5ed5e4adfa9546d6811070489a9566c772888d513d8d826232c91a70e_prof);

    }

    // line 149
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_3266db67a0f55aa46323ce05ceb1776e6a838a90016ccea694ce9d77d878c814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3266db67a0f55aa46323ce05ceb1776e6a838a90016ccea694ce9d77d878c814->enter($__internal_3266db67a0f55aa46323ce05ceb1776e6a838a90016ccea694ce9d77d878c814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 151
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 152
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_3266db67a0f55aa46323ce05ceb1776e6a838a90016ccea694ce9d77d878c814->leave($__internal_3266db67a0f55aa46323ce05ceb1776e6a838a90016ccea694ce9d77d878c814_prof);

    }

    // line 155
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_b778ef6a68e056e16a87d5210cf3f84a92e3448f7d56f9ba65ed7d1d645b27af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b778ef6a68e056e16a87d5210cf3f84a92e3448f7d56f9ba65ed7d1d645b27af->enter($__internal_b778ef6a68e056e16a87d5210cf3f84a92e3448f7d56f9ba65ed7d1d645b27af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 156
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 158
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_b778ef6a68e056e16a87d5210cf3f84a92e3448f7d56f9ba65ed7d1d645b27af->leave($__internal_b778ef6a68e056e16a87d5210cf3f84a92e3448f7d56f9ba65ed7d1d645b27af_prof);

    }

    // line 161
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_ef49772b2b6adeb90e798603101fa41e41519b20da0dad22fd4af7c3cbc5eada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef49772b2b6adeb90e798603101fa41e41519b20da0dad22fd4af7c3cbc5eada->enter($__internal_ef49772b2b6adeb90e798603101fa41e41519b20da0dad22fd4af7c3cbc5eada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 162
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 164
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ef49772b2b6adeb90e798603101fa41e41519b20da0dad22fd4af7c3cbc5eada->leave($__internal_ef49772b2b6adeb90e798603101fa41e41519b20da0dad22fd4af7c3cbc5eada_prof);

    }

    // line 167
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_0904cba97a12f542103ed6f388e42a7fa29b975c5f998ee4c27133308d5a5b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0904cba97a12f542103ed6f388e42a7fa29b975c5f998ee4c27133308d5a5b60->enter($__internal_0904cba97a12f542103ed6f388e42a7fa29b975c5f998ee4c27133308d5a5b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_0904cba97a12f542103ed6f388e42a7fa29b975c5f998ee4c27133308d5a5b60->leave($__internal_0904cba97a12f542103ed6f388e42a7fa29b975c5f998ee4c27133308d5a5b60_prof);

    }

    // line 194
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cdc1b47cbabed0ed420a58060a7b6a696e27cdbb2aa1fe9329fe3c9d0fbedc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc1b47cbabed0ed420a58060a7b6a696e27cdbb2aa1fe9329fe3c9d0fbedc56->enter($__internal_cdc1b47cbabed0ed420a58060a7b6a696e27cdbb2aa1fe9329fe3c9d0fbedc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_cdc1b47cbabed0ed420a58060a7b6a696e27cdbb2aa1fe9329fe3c9d0fbedc56->leave($__internal_cdc1b47cbabed0ed420a58060a7b6a696e27cdbb2aa1fe9329fe3c9d0fbedc56_prof);

    }

    // line 202
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a7cbada9f699c5b8d75c79fdac54d038a6247654df62ac0871a679b81c01e375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cbada9f699c5b8d75c79fdac54d038a6247654df62ac0871a679b81c01e375->enter($__internal_a7cbada9f699c5b8d75c79fdac54d038a6247654df62ac0871a679b81c01e375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 203
        echo "<div class=\"form-group\">";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 205
        echo "</div>";
        
        $__internal_a7cbada9f699c5b8d75c79fdac54d038a6247654df62ac0871a679b81c01e375->leave($__internal_a7cbada9f699c5b8d75c79fdac54d038a6247654df62ac0871a679b81c01e375_prof);

    }

    // line 208
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_8ff5f6f8dc34920f4119b8cc54b07b325f41031e314cfadef7ee0f6bd4f5b3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff5f6f8dc34920f4119b8cc54b07b325f41031e314cfadef7ee0f6bd4f5b3e0->enter($__internal_8ff5f6f8dc34920f4119b8cc54b07b325f41031e314cfadef7ee0f6bd4f5b3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 209
        $context["force_error"] = true;
        // line 210
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8ff5f6f8dc34920f4119b8cc54b07b325f41031e314cfadef7ee0f6bd4f5b3e0->leave($__internal_8ff5f6f8dc34920f4119b8cc54b07b325f41031e314cfadef7ee0f6bd4f5b3e0_prof);

    }

    // line 213
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_1f0f35e50250092c26c13821af27981d1c27ac1aa38a4378dba5de7c08343a0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f0f35e50250092c26c13821af27981d1c27ac1aa38a4378dba5de7c08343a0a->enter($__internal_1f0f35e50250092c26c13821af27981d1c27ac1aa38a4378dba5de7c08343a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 214
        $context["force_error"] = true;
        // line 215
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1f0f35e50250092c26c13821af27981d1c27ac1aa38a4378dba5de7c08343a0a->leave($__internal_1f0f35e50250092c26c13821af27981d1c27ac1aa38a4378dba5de7c08343a0a_prof);

    }

    // line 218
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_7d3783be4f29a5d647ce3a8f2d03b9acf990315024e5e0d78cee0b08f62831af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3783be4f29a5d647ce3a8f2d03b9acf990315024e5e0d78cee0b08f62831af->enter($__internal_7d3783be4f29a5d647ce3a8f2d03b9acf990315024e5e0d78cee0b08f62831af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7d3783be4f29a5d647ce3a8f2d03b9acf990315024e5e0d78cee0b08f62831af->leave($__internal_7d3783be4f29a5d647ce3a8f2d03b9acf990315024e5e0d78cee0b08f62831af_prof);

    }

    // line 223
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_027f5d9ddecaef38fa14898b6beda2b27b377493c778c2e74717ccbb2ce8dc48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027f5d9ddecaef38fa14898b6beda2b27b377493c778c2e74717ccbb2ce8dc48->enter($__internal_027f5d9ddecaef38fa14898b6beda2b27b377493c778c2e74717ccbb2ce8dc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_027f5d9ddecaef38fa14898b6beda2b27b377493c778c2e74717ccbb2ce8dc48->leave($__internal_027f5d9ddecaef38fa14898b6beda2b27b377493c778c2e74717ccbb2ce8dc48_prof);

    }

    // line 228
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9a41176338d5079b1fa37d3a8ac5457ebbbfbdf57769d7a4c359c5ba1ae34170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a41176338d5079b1fa37d3a8ac5457ebbbfbdf57769d7a4c359c5ba1ae34170->enter($__internal_9a41176338d5079b1fa37d3a8ac5457ebbbfbdf57769d7a4c359c5ba1ae34170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_9a41176338d5079b1fa37d3a8ac5457ebbbfbdf57769d7a4c359c5ba1ae34170->leave($__internal_9a41176338d5079b1fa37d3a8ac5457ebbbfbdf57769d7a4c359c5ba1ae34170_prof);

    }

    // line 235
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_6add9e06710c009e1074d1e063ae26203061237b6dd9ec77adc07cf6626ebba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6add9e06710c009e1074d1e063ae26203061237b6dd9ec77adc07cf6626ebba1->enter($__internal_6add9e06710c009e1074d1e063ae26203061237b6dd9ec77adc07cf6626ebba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_6add9e06710c009e1074d1e063ae26203061237b6dd9ec77adc07cf6626ebba1->leave($__internal_6add9e06710c009e1074d1e063ae26203061237b6dd9ec77adc07cf6626ebba1_prof);

    }

    // line 244
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1e04d5d294aa4a488ff3c1bb9deb976bb041c64ee4ae9f1d5ab9b3fb53f47202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e04d5d294aa4a488ff3c1bb9deb976bb041c64ee4ae9f1d5ab9b3fb53f47202->enter($__internal_1e04d5d294aa4a488ff3c1bb9deb976bb041c64ee4ae9f1d5ab9b3fb53f47202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_1e04d5d294aa4a488ff3c1bb9deb976bb041c64ee4ae9f1d5ab9b3fb53f47202->leave($__internal_1e04d5d294aa4a488ff3c1bb9deb976bb041c64ee4ae9f1d5ab9b3fb53f47202_prof);

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
