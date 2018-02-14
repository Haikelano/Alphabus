<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_89d92f8f424ba91bd61cce5759c38d31e6f472ae93f953b90aa201e2be6fbf27 extends Twig_Template
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
        $__internal_cf719372357c46b90d06e72b9dbe423ca4915c6de37ea744ab0a351aacff4f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf719372357c46b90d06e72b9dbe423ca4915c6de37ea744ab0a351aacff4f77->enter($__internal_cf719372357c46b90d06e72b9dbe423ca4915c6de37ea744ab0a351aacff4f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_cf719372357c46b90d06e72b9dbe423ca4915c6de37ea744ab0a351aacff4f77->leave($__internal_cf719372357c46b90d06e72b9dbe423ca4915c6de37ea744ab0a351aacff4f77_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c84a38bbad7c9446e6e595ce983f2c908db35efa5bbe18cb4e6a51cd38c24707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84a38bbad7c9446e6e595ce983f2c908db35efa5bbe18cb4e6a51cd38c24707->enter($__internal_c84a38bbad7c9446e6e595ce983f2c908db35efa5bbe18cb4e6a51cd38c24707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c84a38bbad7c9446e6e595ce983f2c908db35efa5bbe18cb4e6a51cd38c24707->leave($__internal_c84a38bbad7c9446e6e595ce983f2c908db35efa5bbe18cb4e6a51cd38c24707_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_899d32053e88d47fc7c523b2206f0ae72c9353ce0b59d3e40d12443fc4f4ee71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_899d32053e88d47fc7c523b2206f0ae72c9353ce0b59d3e40d12443fc4f4ee71->enter($__internal_899d32053e88d47fc7c523b2206f0ae72c9353ce0b59d3e40d12443fc4f4ee71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_899d32053e88d47fc7c523b2206f0ae72c9353ce0b59d3e40d12443fc4f4ee71->leave($__internal_899d32053e88d47fc7c523b2206f0ae72c9353ce0b59d3e40d12443fc4f4ee71_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d4ba3e4a774935584056bc0d8b320ddb4fcf8b908556087c4ad291f1caa8781c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ba3e4a774935584056bc0d8b320ddb4fcf8b908556087c4ad291f1caa8781c->enter($__internal_d4ba3e4a774935584056bc0d8b320ddb4fcf8b908556087c4ad291f1caa8781c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_d4ba3e4a774935584056bc0d8b320ddb4fcf8b908556087c4ad291f1caa8781c->leave($__internal_d4ba3e4a774935584056bc0d8b320ddb4fcf8b908556087c4ad291f1caa8781c_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d917fe7bcbc7e811b66a04e41204a3085ea8e2201eca3f2f0ba01a16e8f01b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d917fe7bcbc7e811b66a04e41204a3085ea8e2201eca3f2f0ba01a16e8f01b9b->enter($__internal_d917fe7bcbc7e811b66a04e41204a3085ea8e2201eca3f2f0ba01a16e8f01b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_89059696f9d8482fbbad28da55ccc5a05efc098db9c1651a7622636ba589bc11 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_d3586b6f397cd7c58f8faa057cbd8539ea55330ab54908f4d5185722c6003e4a = "{{") && ('' === $__internal_d3586b6f397cd7c58f8faa057cbd8539ea55330ab54908f4d5185722c6003e4a || 0 === strpos($__internal_89059696f9d8482fbbad28da55ccc5a05efc098db9c1651a7622636ba589bc11, $__internal_d3586b6f397cd7c58f8faa057cbd8539ea55330ab54908f4d5185722c6003e4a)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_03f185f188659d3ecf5969747ee202544bbd518387953b1baf323b65107351d7 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_731c840e2380e1911ce7166162fd6f784933a6190eca5dcad6575fed9dee1732 = "}}") && ('' === $__internal_731c840e2380e1911ce7166162fd6f784933a6190eca5dcad6575fed9dee1732 || $__internal_731c840e2380e1911ce7166162fd6f784933a6190eca5dcad6575fed9dee1732 === substr($__internal_03f185f188659d3ecf5969747ee202544bbd518387953b1baf323b65107351d7, -strlen($__internal_731c840e2380e1911ce7166162fd6f784933a6190eca5dcad6575fed9dee1732))));
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
        
        $__internal_d917fe7bcbc7e811b66a04e41204a3085ea8e2201eca3f2f0ba01a16e8f01b9b->leave($__internal_d917fe7bcbc7e811b66a04e41204a3085ea8e2201eca3f2f0ba01a16e8f01b9b_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_349a60727989aa0900c01f4d3eff83c2d2e490a3b95262d93accff6647163c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349a60727989aa0900c01f4d3eff83c2d2e490a3b95262d93accff6647163c45->enter($__internal_349a60727989aa0900c01f4d3eff83c2d2e490a3b95262d93accff6647163c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_349a60727989aa0900c01f4d3eff83c2d2e490a3b95262d93accff6647163c45->leave($__internal_349a60727989aa0900c01f4d3eff83c2d2e490a3b95262d93accff6647163c45_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_896fc35a52284610d34ee28f3fcdc27c7deba21b2b6313e1a58054b2f398cef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896fc35a52284610d34ee28f3fcdc27c7deba21b2b6313e1a58054b2f398cef9->enter($__internal_896fc35a52284610d34ee28f3fcdc27c7deba21b2b6313e1a58054b2f398cef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_896fc35a52284610d34ee28f3fcdc27c7deba21b2b6313e1a58054b2f398cef9->leave($__internal_896fc35a52284610d34ee28f3fcdc27c7deba21b2b6313e1a58054b2f398cef9_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6c7dea0f91851082652e24b19a07ea240c478dc506207620e4512ce23818acab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c7dea0f91851082652e24b19a07ea240c478dc506207620e4512ce23818acab->enter($__internal_6c7dea0f91851082652e24b19a07ea240c478dc506207620e4512ce23818acab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_6c7dea0f91851082652e24b19a07ea240c478dc506207620e4512ce23818acab->leave($__internal_6c7dea0f91851082652e24b19a07ea240c478dc506207620e4512ce23818acab_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_db794c5a096ecf27d8231c92676ae4a7832f264a0ac9936ebdce9111d7af055d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db794c5a096ecf27d8231c92676ae4a7832f264a0ac9936ebdce9111d7af055d->enter($__internal_db794c5a096ecf27d8231c92676ae4a7832f264a0ac9936ebdce9111d7af055d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_db794c5a096ecf27d8231c92676ae4a7832f264a0ac9936ebdce9111d7af055d->leave($__internal_db794c5a096ecf27d8231c92676ae4a7832f264a0ac9936ebdce9111d7af055d_prof);

    }

    // line 95
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4a9072cb9bb4d4a00d8003b7cce72f3a10d0e5b26a213f4dcfb8e65b5c88b1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9072cb9bb4d4a00d8003b7cce72f3a10d0e5b26a213f4dcfb8e65b5c88b1a0->enter($__internal_4a9072cb9bb4d4a00d8003b7cce72f3a10d0e5b26a213f4dcfb8e65b5c88b1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 96
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 97
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_4a9072cb9bb4d4a00d8003b7cce72f3a10d0e5b26a213f4dcfb8e65b5c88b1a0->leave($__internal_4a9072cb9bb4d4a00d8003b7cce72f3a10d0e5b26a213f4dcfb8e65b5c88b1a0_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_4e322aa05bbbc93f06215aca11fde60693a2f856cb777660355090b01af889e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e322aa05bbbc93f06215aca11fde60693a2f856cb777660355090b01af889e6->enter($__internal_4e322aa05bbbc93f06215aca11fde60693a2f856cb777660355090b01af889e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_4e322aa05bbbc93f06215aca11fde60693a2f856cb777660355090b01af889e6->leave($__internal_4e322aa05bbbc93f06215aca11fde60693a2f856cb777660355090b01af889e6_prof);

    }

    // line 120
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_04d65725e5a53cc720d79768cb3716667a14275a1d94fe110e545c3c18f5d4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d65725e5a53cc720d79768cb3716667a14275a1d94fe110e545c3c18f5d4b7->enter($__internal_04d65725e5a53cc720d79768cb3716667a14275a1d94fe110e545c3c18f5d4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_04d65725e5a53cc720d79768cb3716667a14275a1d94fe110e545c3c18f5d4b7->leave($__internal_04d65725e5a53cc720d79768cb3716667a14275a1d94fe110e545c3c18f5d4b7_prof);

    }

    // line 131
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_97448c5ae9bae29b42e30ee40adaddcf216c3fd9e43380183d9a0f2e06a52c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97448c5ae9bae29b42e30ee40adaddcf216c3fd9e43380183d9a0f2e06a52c99->enter($__internal_97448c5ae9bae29b42e30ee40adaddcf216c3fd9e43380183d9a0f2e06a52c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_97448c5ae9bae29b42e30ee40adaddcf216c3fd9e43380183d9a0f2e06a52c99->leave($__internal_97448c5ae9bae29b42e30ee40adaddcf216c3fd9e43380183d9a0f2e06a52c99_prof);

    }

    // line 144
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3a6c9028385ee06591bc355624f905bf9f58195f924c398ae77c262561e9c2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6c9028385ee06591bc355624f905bf9f58195f924c398ae77c262561e9c2d3->enter($__internal_3a6c9028385ee06591bc355624f905bf9f58195f924c398ae77c262561e9c2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 145
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 146
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_3a6c9028385ee06591bc355624f905bf9f58195f924c398ae77c262561e9c2d3->leave($__internal_3a6c9028385ee06591bc355624f905bf9f58195f924c398ae77c262561e9c2d3_prof);

    }

    // line 149
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_6874f4af6bda02022444ef91f82ef68325935597e8770011068f6df9acd5fa4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6874f4af6bda02022444ef91f82ef68325935597e8770011068f6df9acd5fa4f->enter($__internal_6874f4af6bda02022444ef91f82ef68325935597e8770011068f6df9acd5fa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 151
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 152
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6874f4af6bda02022444ef91f82ef68325935597e8770011068f6df9acd5fa4f->leave($__internal_6874f4af6bda02022444ef91f82ef68325935597e8770011068f6df9acd5fa4f_prof);

    }

    // line 155
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_8dc6ef9a2afcb73764f2a4e042d07e7cc5d2be82006cd9c71774fc685a162f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc6ef9a2afcb73764f2a4e042d07e7cc5d2be82006cd9c71774fc685a162f3d->enter($__internal_8dc6ef9a2afcb73764f2a4e042d07e7cc5d2be82006cd9c71774fc685a162f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 156
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 158
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8dc6ef9a2afcb73764f2a4e042d07e7cc5d2be82006cd9c71774fc685a162f3d->leave($__internal_8dc6ef9a2afcb73764f2a4e042d07e7cc5d2be82006cd9c71774fc685a162f3d_prof);

    }

    // line 161
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_57fd0db779b386f829099998a11a0ecda15056d332b34420c660277a96f1c896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fd0db779b386f829099998a11a0ecda15056d332b34420c660277a96f1c896->enter($__internal_57fd0db779b386f829099998a11a0ecda15056d332b34420c660277a96f1c896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 162
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 164
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_57fd0db779b386f829099998a11a0ecda15056d332b34420c660277a96f1c896->leave($__internal_57fd0db779b386f829099998a11a0ecda15056d332b34420c660277a96f1c896_prof);

    }

    // line 167
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6d621d163eb4cc7892951309f66e13c7898cf0295c2fdefacd34764107e06076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d621d163eb4cc7892951309f66e13c7898cf0295c2fdefacd34764107e06076->enter($__internal_6d621d163eb4cc7892951309f66e13c7898cf0295c2fdefacd34764107e06076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_6d621d163eb4cc7892951309f66e13c7898cf0295c2fdefacd34764107e06076->leave($__internal_6d621d163eb4cc7892951309f66e13c7898cf0295c2fdefacd34764107e06076_prof);

    }

    // line 194
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_df63cbfbda2395f05372d18ad76046ed75b6b0005a084c0595e82f914d69e5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df63cbfbda2395f05372d18ad76046ed75b6b0005a084c0595e82f914d69e5e1->enter($__internal_df63cbfbda2395f05372d18ad76046ed75b6b0005a084c0595e82f914d69e5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_df63cbfbda2395f05372d18ad76046ed75b6b0005a084c0595e82f914d69e5e1->leave($__internal_df63cbfbda2395f05372d18ad76046ed75b6b0005a084c0595e82f914d69e5e1_prof);

    }

    // line 202
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f9431e062f62976e760f35981af93803c552d1116386c980ef2e9a49b21fc810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9431e062f62976e760f35981af93803c552d1116386c980ef2e9a49b21fc810->enter($__internal_f9431e062f62976e760f35981af93803c552d1116386c980ef2e9a49b21fc810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 203
        echo "<div class=\"form-group\">";
        // line 204
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 205
        echo "</div>";
        
        $__internal_f9431e062f62976e760f35981af93803c552d1116386c980ef2e9a49b21fc810->leave($__internal_f9431e062f62976e760f35981af93803c552d1116386c980ef2e9a49b21fc810_prof);

    }

    // line 208
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b80746e7693fe5ecbc619656127cd3a4db7a9764edaadf5caab9db2714335e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80746e7693fe5ecbc619656127cd3a4db7a9764edaadf5caab9db2714335e85->enter($__internal_b80746e7693fe5ecbc619656127cd3a4db7a9764edaadf5caab9db2714335e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 209
        $context["force_error"] = true;
        // line 210
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b80746e7693fe5ecbc619656127cd3a4db7a9764edaadf5caab9db2714335e85->leave($__internal_b80746e7693fe5ecbc619656127cd3a4db7a9764edaadf5caab9db2714335e85_prof);

    }

    // line 213
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_cf8981e4b024cea382d6298c6b4b56db2e8111a88e1e1040cc4944b0d56e0b3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8981e4b024cea382d6298c6b4b56db2e8111a88e1e1040cc4944b0d56e0b3d->enter($__internal_cf8981e4b024cea382d6298c6b4b56db2e8111a88e1e1040cc4944b0d56e0b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 214
        $context["force_error"] = true;
        // line 215
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cf8981e4b024cea382d6298c6b4b56db2e8111a88e1e1040cc4944b0d56e0b3d->leave($__internal_cf8981e4b024cea382d6298c6b4b56db2e8111a88e1e1040cc4944b0d56e0b3d_prof);

    }

    // line 218
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_cd5afed68d828a8191cac9d94956743e65b14908c1967a67e132b2032a0ee68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5afed68d828a8191cac9d94956743e65b14908c1967a67e132b2032a0ee68b->enter($__internal_cd5afed68d828a8191cac9d94956743e65b14908c1967a67e132b2032a0ee68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_cd5afed68d828a8191cac9d94956743e65b14908c1967a67e132b2032a0ee68b->leave($__internal_cd5afed68d828a8191cac9d94956743e65b14908c1967a67e132b2032a0ee68b_prof);

    }

    // line 223
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_334689c48ff4534dc4161b6cc2a73c55dad87ca4a4a63b2ef8de42d4febfaf4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334689c48ff4534dc4161b6cc2a73c55dad87ca4a4a63b2ef8de42d4febfaf4c->enter($__internal_334689c48ff4534dc4161b6cc2a73c55dad87ca4a4a63b2ef8de42d4febfaf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_334689c48ff4534dc4161b6cc2a73c55dad87ca4a4a63b2ef8de42d4febfaf4c->leave($__internal_334689c48ff4534dc4161b6cc2a73c55dad87ca4a4a63b2ef8de42d4febfaf4c_prof);

    }

    // line 228
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6fcd5141d5fe8b3c6ddb93374f7157346e3ff8eaed6f7326bd8faa6464e7efff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fcd5141d5fe8b3c6ddb93374f7157346e3ff8eaed6f7326bd8faa6464e7efff->enter($__internal_6fcd5141d5fe8b3c6ddb93374f7157346e3ff8eaed6f7326bd8faa6464e7efff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_6fcd5141d5fe8b3c6ddb93374f7157346e3ff8eaed6f7326bd8faa6464e7efff->leave($__internal_6fcd5141d5fe8b3c6ddb93374f7157346e3ff8eaed6f7326bd8faa6464e7efff_prof);

    }

    // line 235
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_b536d7dbab8ea5267457fe55e4835d66bec262110dd6f966f60aa09a9da88aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b536d7dbab8ea5267457fe55e4835d66bec262110dd6f966f60aa09a9da88aab->enter($__internal_b536d7dbab8ea5267457fe55e4835d66bec262110dd6f966f60aa09a9da88aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_b536d7dbab8ea5267457fe55e4835d66bec262110dd6f966f60aa09a9da88aab->leave($__internal_b536d7dbab8ea5267457fe55e4835d66bec262110dd6f966f60aa09a9da88aab_prof);

    }

    // line 244
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_dce60f52727ff2a0f0845294a1b6e22396d95455e5da7d8451a2ef3b4e780fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce60f52727ff2a0f0845294a1b6e22396d95455e5da7d8451a2ef3b4e780fbf->enter($__internal_dce60f52727ff2a0f0845294a1b6e22396d95455e5da7d8451a2ef3b4e780fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_dce60f52727ff2a0f0845294a1b6e22396d95455e5da7d8451a2ef3b4e780fbf->leave($__internal_dce60f52727ff2a0f0845294a1b6e22396d95455e5da7d8451a2ef3b4e780fbf_prof);

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
