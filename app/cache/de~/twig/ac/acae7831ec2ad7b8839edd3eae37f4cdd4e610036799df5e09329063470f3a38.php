<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_af566d2067ddee8df2d595ea212b96e94faac7681140d5099366552aaa7f7c11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcc9c935a4bd859344b7e40823b9861413ad96732b43e03634fa6c7724d1e215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc9c935a4bd859344b7e40823b9861413ad96732b43e03634fa6c7724d1e215->enter($__internal_dcc9c935a4bd859344b7e40823b9861413ad96732b43e03634fa6c7724d1e215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('submit_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('reset_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_dcc9c935a4bd859344b7e40823b9861413ad96732b43e03634fa6c7724d1e215->leave($__internal_dcc9c935a4bd859344b7e40823b9861413ad96732b43e03634fa6c7724d1e215_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_148cbc6601b763fa1ac24f71fe2f42ccb8ff5f6c1b8ae3e0bc517ae9b37f832d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148cbc6601b763fa1ac24f71fe2f42ccb8ff5f6c1b8ae3e0bc517ae9b37f832d->enter($__internal_148cbc6601b763fa1ac24f71fe2f42ccb8ff5f6c1b8ae3e0bc517ae9b37f832d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_148cbc6601b763fa1ac24f71fe2f42ccb8ff5f6c1b8ae3e0bc517ae9b37f832d->leave($__internal_148cbc6601b763fa1ac24f71fe2f42ccb8ff5f6c1b8ae3e0bc517ae9b37f832d_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2aa54f18db6d53b700ae0210b8f0d0f19be1d36d550d23804b3eec8ef05cd75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa54f18db6d53b700ae0210b8f0d0f19be1d36d550d23804b3eec8ef05cd75c->enter($__internal_2aa54f18db6d53b700ae0210b8f0d0f19be1d36d550d23804b3eec8ef05cd75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2aa54f18db6d53b700ae0210b8f0d0f19be1d36d550d23804b3eec8ef05cd75c->leave($__internal_2aa54f18db6d53b700ae0210b8f0d0f19be1d36d550d23804b3eec8ef05cd75c_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_fd7a233f9fecbe16b91d40a62bddf1ed656aa34f0378614fe26510b0361f66ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7a233f9fecbe16b91d40a62bddf1ed656aa34f0378614fe26510b0361f66ff->enter($__internal_fd7a233f9fecbe16b91d40a62bddf1ed656aa34f0378614fe26510b0361f66ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_fd7a233f9fecbe16b91d40a62bddf1ed656aa34f0378614fe26510b0361f66ff->leave($__internal_fd7a233f9fecbe16b91d40a62bddf1ed656aa34f0378614fe26510b0361f66ff_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c51736ba5e0c5263215bc832de095787126765bed92b040afa1f84a8d0f68da0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51736ba5e0c5263215bc832de095787126765bed92b040afa1f84a8d0f68da0->enter($__internal_c51736ba5e0c5263215bc832de095787126765bed92b040afa1f84a8d0f68da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter(($context["_field_type"] ?? $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "time", 5 => "time_immutable", 6 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === ($context["data"] ?? $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 44
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c51736ba5e0c5263215bc832de095787126765bed92b040afa1f84a8d0f68da0->leave($__internal_c51736ba5e0c5263215bc832de095787126765bed92b040afa1f84a8d0f68da0_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_75ff021d829672efd41fc236489d33c3123405ad624e8086bd44a10841ba85a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ff021d829672efd41fc236489d33c3123405ad624e8086bd44a10841ba85a6->enter($__internal_75ff021d829672efd41fc236489d33c3123405ad624e8086bd44a10841ba85a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_75ff021d829672efd41fc236489d33c3123405ad624e8086bd44a10841ba85a6->leave($__internal_75ff021d829672efd41fc236489d33c3123405ad624e8086bd44a10841ba85a6_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c3d679c9a79d3265b90a21c65f2cd6f75423bfa130686ca07ab984505167142c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d679c9a79d3265b90a21c65f2cd6f75423bfa130686ca07ab984505167142c->enter($__internal_c3d679c9a79d3265b90a21c65f2cd6f75423bfa130686ca07ab984505167142c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c3d679c9a79d3265b90a21c65f2cd6f75423bfa130686ca07ab984505167142c->leave($__internal_c3d679c9a79d3265b90a21c65f2cd6f75423bfa130686ca07ab984505167142c_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_30822f1bdbdf8195fe1f4f3cd32ef3566d29fe12bcd1e879ca5cb724ad38372e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30822f1bdbdf8195fe1f4f3cd32ef3566d29fe12bcd1e879ca5cb724ad38372e->enter($__internal_30822f1bdbdf8195fe1f4f3cd32ef3566d29fe12bcd1e879ca5cb724ad38372e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 61
        ob_start();
        // line 62
        echo "    <div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_30822f1bdbdf8195fe1f4f3cd32ef3566d29fe12bcd1e879ca5cb724ad38372e->leave($__internal_30822f1bdbdf8195fe1f4f3cd32ef3566d29fe12bcd1e879ca5cb724ad38372e_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_5ddf3bcb8cc46b0ba25f4fd08794c9203fc46dc17cefc1fcadf960979c4e91e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ddf3bcb8cc46b0ba25f4fd08794c9203fc46dc17cefc1fcadf960979c4e91e2->enter($__internal_5ddf3bcb8cc46b0ba25f4fd08794c9203fc46dc17cefc1fcadf960979c4e91e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 73
        ob_start();
        // line 74
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 75
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 76
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5ddf3bcb8cc46b0ba25f4fd08794c9203fc46dc17cefc1fcadf960979c4e91e2->leave($__internal_5ddf3bcb8cc46b0ba25f4fd08794c9203fc46dc17cefc1fcadf960979c4e91e2_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_0830c641fb9867cfdb066823e0501090e9c6d36ad0873f9bf1e37ae39068ac9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0830c641fb9867cfdb066823e0501090e9c6d36ad0873f9bf1e37ae39068ac9b->enter($__internal_0830c641fb9867cfdb066823e0501090e9c6d36ad0873f9bf1e37ae39068ac9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 84
        ob_start();
        // line 85
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0830c641fb9867cfdb066823e0501090e9c6d36ad0873f9bf1e37ae39068ac9b->leave($__internal_0830c641fb9867cfdb066823e0501090e9c6d36ad0873f9bf1e37ae39068ac9b_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_cd6638cad62b603c556e2c03622c588420551dd77335cf9f6f5c6e2b7813ce59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6638cad62b603c556e2c03622c588420551dd77335cf9f6f5c6e2b7813ce59->enter($__internal_cd6638cad62b603c556e2c03622c588420551dd77335cf9f6f5c6e2b7813ce59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_cd6638cad62b603c556e2c03622c588420551dd77335cf9f6f5c6e2b7813ce59->leave($__internal_cd6638cad62b603c556e2c03622c588420551dd77335cf9f6f5c6e2b7813ce59_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  370 => 94,  358 => 88,  354 => 87,  350 => 86,  347 => 85,  345 => 84,  339 => 83,  327 => 77,  323 => 76,  319 => 75,  314 => 74,  312 => 73,  306 => 72,  294 => 66,  290 => 65,  286 => 64,  282 => 63,  273 => 62,  271 => 61,  265 => 60,  258 => 57,  252 => 56,  245 => 53,  239 => 52,  229 => 47,  223 => 45,  221 => 44,  216 => 42,  213 => 41,  206 => 37,  200 => 36,  196 => 34,  194 => 33,  189 => 31,  185 => 30,  181 => 29,  172 => 28,  169 => 27,  167 => 26,  161 => 25,  149 => 21,  140 => 16,  137 => 15,  131 => 13,  128 => 12,  126 => 11,  120 => 10,  113 => 5,  111 => 4,  105 => 3,  98 => 94,  95 => 93,  93 => 83,  90 => 82,  88 => 72,  85 => 71,  83 => 60,  80 => 59,  78 => 56,  75 => 55,  73 => 52,  70 => 51,  68 => 25,  65 => 24,  62 => 22,  60 => 21,  57 => 20,  55 => 10,  52 => 9,  49 => 7,  47 => 3,  44 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{ form_label(form) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'datetime_immutable', 'date', 'date_immutable', 'time', 'time_immutable', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class 'col-sm-10' %}
", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", "/var/www/html/Alphabus/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
