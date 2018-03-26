<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_fa981ed79598143f95323be49c87f5094339e783985fd0f2199c115bab41f209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49380fb1181b02c8336129784047be1d73e3e8d41845fb5fa9df893bbe81c1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49380fb1181b02c8336129784047be1d73e3e8d41845fb5fa9df893bbe81c1a7->enter($__internal_49380fb1181b02c8336129784047be1d73e3e8d41845fb5fa9df893bbe81c1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_49380fb1181b02c8336129784047be1d73e3e8d41845fb5fa9df893bbe81c1a7->leave($__internal_49380fb1181b02c8336129784047be1d73e3e8d41845fb5fa9df893bbe81c1a7_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_29ec830b5746b18c70ea261453646d5673217df77739b45a807d8337b4144ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ec830b5746b18c70ea261453646d5673217df77739b45a807d8337b4144ee3->enter($__internal_29ec830b5746b18c70ea261453646d5673217df77739b45a807d8337b4144ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_29ec830b5746b18c70ea261453646d5673217df77739b45a807d8337b4144ee3->leave($__internal_29ec830b5746b18c70ea261453646d5673217df77739b45a807d8337b4144ee3_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_775f3210aa62bc9c79d6a9d0f24a3a719d496b636056f3be171aca3cf9b04ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775f3210aa62bc9c79d6a9d0f24a3a719d496b636056f3be171aca3cf9b04ed5->enter($__internal_775f3210aa62bc9c79d6a9d0f24a3a719d496b636056f3be171aca3cf9b04ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_775f3210aa62bc9c79d6a9d0f24a3a719d496b636056f3be171aca3cf9b04ed5->leave($__internal_775f3210aa62bc9c79d6a9d0f24a3a719d496b636056f3be171aca3cf9b04ed5_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_398eb413429d467e6576cb7922a0b9d21af1500a193308f30836aac89beacecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398eb413429d467e6576cb7922a0b9d21af1500a193308f30836aac89beacecb->enter($__internal_398eb413429d467e6576cb7922a0b9d21af1500a193308f30836aac89beacecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_398eb413429d467e6576cb7922a0b9d21af1500a193308f30836aac89beacecb->leave($__internal_398eb413429d467e6576cb7922a0b9d21af1500a193308f30836aac89beacecb_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_d2fb587c3bdc31ef36e5f3c2a08402fb2a391357dac5758896cc7c7e766907d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fb587c3bdc31ef36e5f3c2a08402fb2a391357dac5758896cc7c7e766907d3->enter($__internal_d2fb587c3bdc31ef36e5f3c2a08402fb2a391357dac5758896cc7c7e766907d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_d2fb587c3bdc31ef36e5f3c2a08402fb2a391357dac5758896cc7c7e766907d3->leave($__internal_d2fb587c3bdc31ef36e5f3c2a08402fb2a391357dac5758896cc7c7e766907d3_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_6c4830722d7d5018a79b86376da3656f6b448fdf2f18a1353301cb825628e864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4830722d7d5018a79b86376da3656f6b448fdf2f18a1353301cb825628e864->enter($__internal_6c4830722d7d5018a79b86376da3656f6b448fdf2f18a1353301cb825628e864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_6c4830722d7d5018a79b86376da3656f6b448fdf2f18a1353301cb825628e864->leave($__internal_6c4830722d7d5018a79b86376da3656f6b448fdf2f18a1353301cb825628e864_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_59dbd355a861f29fb90b633ad389c17b624faa427e7a743bf60be60a63b4b46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59dbd355a861f29fb90b633ad389c17b624faa427e7a743bf60be60a63b4b46f->enter($__internal_59dbd355a861f29fb90b633ad389c17b624faa427e7a743bf60be60a63b4b46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_59dbd355a861f29fb90b633ad389c17b624faa427e7a743bf60be60a63b4b46f->leave($__internal_59dbd355a861f29fb90b633ad389c17b624faa427e7a743bf60be60a63b4b46f_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d9e743b353fa06e7d25e668d23da906ea74e7a657f138d819dfcae81810f2806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e743b353fa06e7d25e668d23da906ea74e7a657f138d819dfcae81810f2806->enter($__internal_d9e743b353fa06e7d25e668d23da906ea74e7a657f138d819dfcae81810f2806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_d9e743b353fa06e7d25e668d23da906ea74e7a657f138d819dfcae81810f2806->leave($__internal_d9e743b353fa06e7d25e668d23da906ea74e7a657f138d819dfcae81810f2806_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_6159eb348abef9258afa4d7475a8f3aa65472d4f8d42c80267fa4db5d19eca68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6159eb348abef9258afa4d7475a8f3aa65472d4f8d42c80267fa4db5d19eca68->enter($__internal_6159eb348abef9258afa4d7475a8f3aa65472d4f8d42c80267fa4db5d19eca68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_6159eb348abef9258afa4d7475a8f3aa65472d4f8d42c80267fa4db5d19eca68->leave($__internal_6159eb348abef9258afa4d7475a8f3aa65472d4f8d42c80267fa4db5d19eca68_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_ac15c8a02d9376ae240baa6468fc2c40bfabd569367e89a883efe99833ce015a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac15c8a02d9376ae240baa6468fc2c40bfabd569367e89a883efe99833ce015a->enter($__internal_ac15c8a02d9376ae240baa6468fc2c40bfabd569367e89a883efe99833ce015a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_ac15c8a02d9376ae240baa6468fc2c40bfabd569367e89a883efe99833ce015a->leave($__internal_ac15c8a02d9376ae240baa6468fc2c40bfabd569367e89a883efe99833ce015a_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_63739291780897bd2aa631e353093f567997f4582fbf0c8f4bc2ab475483def3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63739291780897bd2aa631e353093f567997f4582fbf0c8f4bc2ab475483def3->enter($__internal_63739291780897bd2aa631e353093f567997f4582fbf0c8f4bc2ab475483def3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_63739291780897bd2aa631e353093f567997f4582fbf0c8f4bc2ab475483def3->leave($__internal_63739291780897bd2aa631e353093f567997f4582fbf0c8f4bc2ab475483def3_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_a4eda78a2c07cddb1725cb81ff86c3c27ac3fc8c1ad3f63b890b8a8ccd74de3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4eda78a2c07cddb1725cb81ff86c3c27ac3fc8c1ad3f63b890b8a8ccd74de3c->enter($__internal_a4eda78a2c07cddb1725cb81ff86c3c27ac3fc8c1ad3f63b890b8a8ccd74de3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_a4eda78a2c07cddb1725cb81ff86c3c27ac3fc8c1ad3f63b890b8a8ccd74de3c->leave($__internal_a4eda78a2c07cddb1725cb81ff86c3c27ac3fc8c1ad3f63b890b8a8ccd74de3c_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_2a3a330fac158ac4e69bf2adae0823410d9eb01e5f31ea0d55148ed270c18c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3a330fac158ac4e69bf2adae0823410d9eb01e5f31ea0d55148ed270c18c32->enter($__internal_2a3a330fac158ac4e69bf2adae0823410d9eb01e5f31ea0d55148ed270c18c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_2a3a330fac158ac4e69bf2adae0823410d9eb01e5f31ea0d55148ed270c18c32->leave($__internal_2a3a330fac158ac4e69bf2adae0823410d9eb01e5f31ea0d55148ed270c18c32_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_5eee8143565f3616e3972caa6fc85c3310393d78d6270e912f2b411fc3ab7d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eee8143565f3616e3972caa6fc85c3310393d78d6270e912f2b411fc3ab7d1a->enter($__internal_5eee8143565f3616e3972caa6fc85c3310393d78d6270e912f2b411fc3ab7d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_5eee8143565f3616e3972caa6fc85c3310393d78d6270e912f2b411fc3ab7d1a->leave($__internal_5eee8143565f3616e3972caa6fc85c3310393d78d6270e912f2b411fc3ab7d1a_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_f7b0ae414e04e805a81b1ff797270a8c24861eb8204248c03726778ce01a3d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b0ae414e04e805a81b1ff797270a8c24861eb8204248c03726778ce01a3d50->enter($__internal_f7b0ae414e04e805a81b1ff797270a8c24861eb8204248c03726778ce01a3d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_f7b0ae414e04e805a81b1ff797270a8c24861eb8204248c03726778ce01a3d50->leave($__internal_f7b0ae414e04e805a81b1ff797270a8c24861eb8204248c03726778ce01a3d50_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_34db07bbdc1653d927cbd6d35c9681da060853257fe717acc8e0d8be50af483f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34db07bbdc1653d927cbd6d35c9681da060853257fe717acc8e0d8be50af483f->enter($__internal_34db07bbdc1653d927cbd6d35c9681da060853257fe717acc8e0d8be50af483f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_34db07bbdc1653d927cbd6d35c9681da060853257fe717acc8e0d8be50af483f->leave($__internal_34db07bbdc1653d927cbd6d35c9681da060853257fe717acc8e0d8be50af483f_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_e008c05322110f62713318239d8d9a1dea411a455d3d00265589303fe92490c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e008c05322110f62713318239d8d9a1dea411a455d3d00265589303fe92490c9->enter($__internal_e008c05322110f62713318239d8d9a1dea411a455d3d00265589303fe92490c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_e008c05322110f62713318239d8d9a1dea411a455d3d00265589303fe92490c9->leave($__internal_e008c05322110f62713318239d8d9a1dea411a455d3d00265589303fe92490c9_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_9b40fa28e48a84e239c6cdadacb703dd756214d1de2900b304ae116fd03e2a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b40fa28e48a84e239c6cdadacb703dd756214d1de2900b304ae116fd03e2a60->enter($__internal_9b40fa28e48a84e239c6cdadacb703dd756214d1de2900b304ae116fd03e2a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_9b40fa28e48a84e239c6cdadacb703dd756214d1de2900b304ae116fd03e2a60->leave($__internal_9b40fa28e48a84e239c6cdadacb703dd756214d1de2900b304ae116fd03e2a60_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_05bc72bf0cf1a68427b844d4c7b5af8a4c604c8f47d4b3024ba16156878298b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05bc72bf0cf1a68427b844d4c7b5af8a4c604c8f47d4b3024ba16156878298b2->enter($__internal_05bc72bf0cf1a68427b844d4c7b5af8a4c604c8f47d4b3024ba16156878298b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_05bc72bf0cf1a68427b844d4c7b5af8a4c604c8f47d4b3024ba16156878298b2->leave($__internal_05bc72bf0cf1a68427b844d4c7b5af8a4c604c8f47d4b3024ba16156878298b2_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_4992c56627d0542d931adbc2ec2613ab0b5bba81b37fb6f5be9ac4ce97bbce74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4992c56627d0542d931adbc2ec2613ab0b5bba81b37fb6f5be9ac4ce97bbce74->enter($__internal_4992c56627d0542d931adbc2ec2613ab0b5bba81b37fb6f5be9ac4ce97bbce74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_4992c56627d0542d931adbc2ec2613ab0b5bba81b37fb6f5be9ac4ce97bbce74->leave($__internal_4992c56627d0542d931adbc2ec2613ab0b5bba81b37fb6f5be9ac4ce97bbce74_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_24449742d03562a78fcd684bafe01c6ce308423cd2ae82bfd3a6ef72e1aa6c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24449742d03562a78fcd684bafe01c6ce308423cd2ae82bfd3a6ef72e1aa6c3a->enter($__internal_24449742d03562a78fcd684bafe01c6ce308423cd2ae82bfd3a6ef72e1aa6c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_24449742d03562a78fcd684bafe01c6ce308423cd2ae82bfd3a6ef72e1aa6c3a->leave($__internal_24449742d03562a78fcd684bafe01c6ce308423cd2ae82bfd3a6ef72e1aa6c3a_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_49ac996eb05a5f2b585953639ac6dfb48e867e530581d514898811095fa85d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ac996eb05a5f2b585953639ac6dfb48e867e530581d514898811095fa85d2c->enter($__internal_49ac996eb05a5f2b585953639ac6dfb48e867e530581d514898811095fa85d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_49ac996eb05a5f2b585953639ac6dfb48e867e530581d514898811095fa85d2c->leave($__internal_49ac996eb05a5f2b585953639ac6dfb48e867e530581d514898811095fa85d2c_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_6d799be2feb2332cbad3ffb3fbb7f5644c8c95f699249df5ed8d87120ca10574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d799be2feb2332cbad3ffb3fbb7f5644c8c95f699249df5ed8d87120ca10574->enter($__internal_6d799be2feb2332cbad3ffb3fbb7f5644c8c95f699249df5ed8d87120ca10574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_6d799be2feb2332cbad3ffb3fbb7f5644c8c95f699249df5ed8d87120ca10574->leave($__internal_6d799be2feb2332cbad3ffb3fbb7f5644c8c95f699249df5ed8d87120ca10574_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_637348a2f2ff7fef2c99434c785e2872445beef7b688a555fd989f182f070c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637348a2f2ff7fef2c99434c785e2872445beef7b688a555fd989f182f070c5b->enter($__internal_637348a2f2ff7fef2c99434c785e2872445beef7b688a555fd989f182f070c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_637348a2f2ff7fef2c99434c785e2872445beef7b688a555fd989f182f070c5b->leave($__internal_637348a2f2ff7fef2c99434c785e2872445beef7b688a555fd989f182f070c5b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 160,  639 => 153,  632 => 149,  625 => 145,  621 => 143,  618 => 142,  612 => 141,  592 => 139,  586 => 138,  576 => 134,  570 => 133,  562 => 154,  560 => 153,  555 => 150,  552 => 141,  550 => 138,  546 => 136,  543 => 133,  537 => 132,  529 => 125,  527 => 122,  525 => 121,  519 => 120,  511 => 127,  509 => 120,  506 => 119,  500 => 118,  493 => 104,  487 => 101,  484 => 100,  482 => 99,  475 => 97,  472 => 96,  466 => 95,  459 => 108,  454 => 105,  452 => 95,  443 => 89,  438 => 86,  433 => 84,  430 => 83,  428 => 82,  424 => 81,  421 => 80,  419 => 79,  413 => 77,  407 => 76,  398 => 109,  396 => 76,  392 => 74,  389 => 73,  383 => 72,  373 => 66,  364 => 65,  358 => 64,  349 => 112,  347 => 72,  342 => 69,  340 => 64,  333 => 60,  329 => 58,  323 => 57,  315 => 156,  313 => 132,  308 => 129,  306 => 118,  301 => 115,  299 => 57,  296 => 56,  290 => 55,  269 => 53,  261 => 165,  252 => 163,  248 => 162,  245 => 161,  243 => 160,  239 => 158,  237 => 55,  227 => 53,  221 => 52,  203 => 30,  197 => 29,  188 => 43,  185 => 42,  182 => 29,  176 => 28,  164 => 25,  161 => 24,  155 => 23,  145 => 15,  139 => 13,  133 => 12,  121 => 10,  113 => 167,  111 => 52,  107 => 50,  102 => 48,  97 => 47,  95 => 46,  92 => 45,  90 => 28,  87 => 27,  85 => 23,  82 => 22,  73 => 20,  69 => 19,  66 => 18,  64 => 12,  59 => 10,  48 => 2,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "/var/www/html/Alphabus/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
