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
        $__internal_16084c7461a94008dc0b67111e31f68e7019c1a53ba1b26ea92309f3b1998602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16084c7461a94008dc0b67111e31f68e7019c1a53ba1b26ea92309f3b1998602->enter($__internal_16084c7461a94008dc0b67111e31f68e7019c1a53ba1b26ea92309f3b1998602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_16084c7461a94008dc0b67111e31f68e7019c1a53ba1b26ea92309f3b1998602->leave($__internal_16084c7461a94008dc0b67111e31f68e7019c1a53ba1b26ea92309f3b1998602_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d55a038885145c47d33dd913f1dbe66c186e9c04c764c3c02561c35a92e9908c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55a038885145c47d33dd913f1dbe66c186e9c04c764c3c02561c35a92e9908c->enter($__internal_d55a038885145c47d33dd913f1dbe66c186e9c04c764c3c02561c35a92e9908c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_d55a038885145c47d33dd913f1dbe66c186e9c04c764c3c02561c35a92e9908c->leave($__internal_d55a038885145c47d33dd913f1dbe66c186e9c04c764c3c02561c35a92e9908c_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_03da1ff5a469b8ed1b0b52dca45bda50ab6018bb8a30491dded20fd27bdc10f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03da1ff5a469b8ed1b0b52dca45bda50ab6018bb8a30491dded20fd27bdc10f7->enter($__internal_03da1ff5a469b8ed1b0b52dca45bda50ab6018bb8a30491dded20fd27bdc10f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_03da1ff5a469b8ed1b0b52dca45bda50ab6018bb8a30491dded20fd27bdc10f7->leave($__internal_03da1ff5a469b8ed1b0b52dca45bda50ab6018bb8a30491dded20fd27bdc10f7_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_0d8ec9c09cad74622238af5166c731813bdc8105e9ce9041bc5b4e20bb4bdaf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8ec9c09cad74622238af5166c731813bdc8105e9ce9041bc5b4e20bb4bdaf4->enter($__internal_0d8ec9c09cad74622238af5166c731813bdc8105e9ce9041bc5b4e20bb4bdaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_0d8ec9c09cad74622238af5166c731813bdc8105e9ce9041bc5b4e20bb4bdaf4->leave($__internal_0d8ec9c09cad74622238af5166c731813bdc8105e9ce9041bc5b4e20bb4bdaf4_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_c22a210c93861f163521ed0d7f60048d21811174f8988b34999434fd9f0671d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22a210c93861f163521ed0d7f60048d21811174f8988b34999434fd9f0671d8->enter($__internal_c22a210c93861f163521ed0d7f60048d21811174f8988b34999434fd9f0671d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_c22a210c93861f163521ed0d7f60048d21811174f8988b34999434fd9f0671d8->leave($__internal_c22a210c93861f163521ed0d7f60048d21811174f8988b34999434fd9f0671d8_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_f05d75611d11c5571fda7d3c4e2036c4a6914dc0bcc3e2066b19e66af2d3b39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05d75611d11c5571fda7d3c4e2036c4a6914dc0bcc3e2066b19e66af2d3b39c->enter($__internal_f05d75611d11c5571fda7d3c4e2036c4a6914dc0bcc3e2066b19e66af2d3b39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_f05d75611d11c5571fda7d3c4e2036c4a6914dc0bcc3e2066b19e66af2d3b39c->leave($__internal_f05d75611d11c5571fda7d3c4e2036c4a6914dc0bcc3e2066b19e66af2d3b39c_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd1b5e01ae67f8f72320ff99e1d19b6a8bd1f16c9f10e34038d6ec3ba94d67c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1b5e01ae67f8f72320ff99e1d19b6a8bd1f16c9f10e34038d6ec3ba94d67c6->enter($__internal_cd1b5e01ae67f8f72320ff99e1d19b6a8bd1f16c9f10e34038d6ec3ba94d67c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cd1b5e01ae67f8f72320ff99e1d19b6a8bd1f16c9f10e34038d6ec3ba94d67c6->leave($__internal_cd1b5e01ae67f8f72320ff99e1d19b6a8bd1f16c9f10e34038d6ec3ba94d67c6_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_602720803f6f552142c52f6ffc1ba5d54a75bfa077f2d326014ee99e5df3b3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602720803f6f552142c52f6ffc1ba5d54a75bfa077f2d326014ee99e5df3b3a3->enter($__internal_602720803f6f552142c52f6ffc1ba5d54a75bfa077f2d326014ee99e5df3b3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_602720803f6f552142c52f6ffc1ba5d54a75bfa077f2d326014ee99e5df3b3a3->leave($__internal_602720803f6f552142c52f6ffc1ba5d54a75bfa077f2d326014ee99e5df3b3a3_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_e03e6f98f05fd9812a0d2009d2f4b4919c0e3d5a11233ad43a3b2206640dee8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03e6f98f05fd9812a0d2009d2f4b4919c0e3d5a11233ad43a3b2206640dee8b->enter($__internal_e03e6f98f05fd9812a0d2009d2f4b4919c0e3d5a11233ad43a3b2206640dee8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_e03e6f98f05fd9812a0d2009d2f4b4919c0e3d5a11233ad43a3b2206640dee8b->leave($__internal_e03e6f98f05fd9812a0d2009d2f4b4919c0e3d5a11233ad43a3b2206640dee8b_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_3e01e49a9835a02c39d24cc160f3a58f65d4b71f03c1912bd2d6daf92141ebcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e01e49a9835a02c39d24cc160f3a58f65d4b71f03c1912bd2d6daf92141ebcb->enter($__internal_3e01e49a9835a02c39d24cc160f3a58f65d4b71f03c1912bd2d6daf92141ebcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_3e01e49a9835a02c39d24cc160f3a58f65d4b71f03c1912bd2d6daf92141ebcb->leave($__internal_3e01e49a9835a02c39d24cc160f3a58f65d4b71f03c1912bd2d6daf92141ebcb_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_4b2b7bbf0537bf3d0a42c7b4f0241f2245b8302421a10ed4dde8129a7327fc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2b7bbf0537bf3d0a42c7b4f0241f2245b8302421a10ed4dde8129a7327fc3c->enter($__internal_4b2b7bbf0537bf3d0a42c7b4f0241f2245b8302421a10ed4dde8129a7327fc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_4b2b7bbf0537bf3d0a42c7b4f0241f2245b8302421a10ed4dde8129a7327fc3c->leave($__internal_4b2b7bbf0537bf3d0a42c7b4f0241f2245b8302421a10ed4dde8129a7327fc3c_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_c1d3d0ecad3e6c205d2ad5cd8069eda32b4f88a4ec02a48980a0500c2a022d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d3d0ecad3e6c205d2ad5cd8069eda32b4f88a4ec02a48980a0500c2a022d68->enter($__internal_c1d3d0ecad3e6c205d2ad5cd8069eda32b4f88a4ec02a48980a0500c2a022d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_c1d3d0ecad3e6c205d2ad5cd8069eda32b4f88a4ec02a48980a0500c2a022d68->leave($__internal_c1d3d0ecad3e6c205d2ad5cd8069eda32b4f88a4ec02a48980a0500c2a022d68_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_324a5ad074b8d43e03c53c51db52abbee146c73e138f730f396445fb55451b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324a5ad074b8d43e03c53c51db52abbee146c73e138f730f396445fb55451b6a->enter($__internal_324a5ad074b8d43e03c53c51db52abbee146c73e138f730f396445fb55451b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_324a5ad074b8d43e03c53c51db52abbee146c73e138f730f396445fb55451b6a->leave($__internal_324a5ad074b8d43e03c53c51db52abbee146c73e138f730f396445fb55451b6a_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_f667ab456df16e22e2275210ede9e2ae2914fa8b73d416553244954785ba3697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f667ab456df16e22e2275210ede9e2ae2914fa8b73d416553244954785ba3697->enter($__internal_f667ab456df16e22e2275210ede9e2ae2914fa8b73d416553244954785ba3697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_f667ab456df16e22e2275210ede9e2ae2914fa8b73d416553244954785ba3697->leave($__internal_f667ab456df16e22e2275210ede9e2ae2914fa8b73d416553244954785ba3697_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_47b813a0dc389fb91578e1269dbf3da8e3334440e844cb1c6c5fd0cb34332eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b813a0dc389fb91578e1269dbf3da8e3334440e844cb1c6c5fd0cb34332eaa->enter($__internal_47b813a0dc389fb91578e1269dbf3da8e3334440e844cb1c6c5fd0cb34332eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_47b813a0dc389fb91578e1269dbf3da8e3334440e844cb1c6c5fd0cb34332eaa->leave($__internal_47b813a0dc389fb91578e1269dbf3da8e3334440e844cb1c6c5fd0cb34332eaa_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7256644d184475de7f511aa9afe8451e5d228c4bedaddd121aae4ad92ff263d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7256644d184475de7f511aa9afe8451e5d228c4bedaddd121aae4ad92ff263d3->enter($__internal_7256644d184475de7f511aa9afe8451e5d228c4bedaddd121aae4ad92ff263d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_7256644d184475de7f511aa9afe8451e5d228c4bedaddd121aae4ad92ff263d3->leave($__internal_7256644d184475de7f511aa9afe8451e5d228c4bedaddd121aae4ad92ff263d3_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_de8e2f128bc056abb51a196aa1d025e2afcb1455d8eb5533c103656deadee7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8e2f128bc056abb51a196aa1d025e2afcb1455d8eb5533c103656deadee7c3->enter($__internal_de8e2f128bc056abb51a196aa1d025e2afcb1455d8eb5533c103656deadee7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_de8e2f128bc056abb51a196aa1d025e2afcb1455d8eb5533c103656deadee7c3->leave($__internal_de8e2f128bc056abb51a196aa1d025e2afcb1455d8eb5533c103656deadee7c3_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_8c96a771afffa16c4b33f40f031416694a8898e5412ec391f2f429cef838bd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c96a771afffa16c4b33f40f031416694a8898e5412ec391f2f429cef838bd7e->enter($__internal_8c96a771afffa16c4b33f40f031416694a8898e5412ec391f2f429cef838bd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_8c96a771afffa16c4b33f40f031416694a8898e5412ec391f2f429cef838bd7e->leave($__internal_8c96a771afffa16c4b33f40f031416694a8898e5412ec391f2f429cef838bd7e_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_18f4affb00bfcfa39eb4711b0b3cb223678a30c982285be58f5b3bc35fd0feda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f4affb00bfcfa39eb4711b0b3cb223678a30c982285be58f5b3bc35fd0feda->enter($__internal_18f4affb00bfcfa39eb4711b0b3cb223678a30c982285be58f5b3bc35fd0feda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_18f4affb00bfcfa39eb4711b0b3cb223678a30c982285be58f5b3bc35fd0feda->leave($__internal_18f4affb00bfcfa39eb4711b0b3cb223678a30c982285be58f5b3bc35fd0feda_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_f9a364ddc6a9a1d33f259f889c70c51f08a597d55a2d7f0872b7af37895c47bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a364ddc6a9a1d33f259f889c70c51f08a597d55a2d7f0872b7af37895c47bb->enter($__internal_f9a364ddc6a9a1d33f259f889c70c51f08a597d55a2d7f0872b7af37895c47bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_f9a364ddc6a9a1d33f259f889c70c51f08a597d55a2d7f0872b7af37895c47bb->leave($__internal_f9a364ddc6a9a1d33f259f889c70c51f08a597d55a2d7f0872b7af37895c47bb_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_e03304dae97295a1a630b78aa16e8839ebe15b9dbb6c9a24c01ec9f63c3e0aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03304dae97295a1a630b78aa16e8839ebe15b9dbb6c9a24c01ec9f63c3e0aac->enter($__internal_e03304dae97295a1a630b78aa16e8839ebe15b9dbb6c9a24c01ec9f63c3e0aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_e03304dae97295a1a630b78aa16e8839ebe15b9dbb6c9a24c01ec9f63c3e0aac->leave($__internal_e03304dae97295a1a630b78aa16e8839ebe15b9dbb6c9a24c01ec9f63c3e0aac_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_44987bf51954bcca2d345242ea67b50d738e77c390941b78961b97a4940d9079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44987bf51954bcca2d345242ea67b50d738e77c390941b78961b97a4940d9079->enter($__internal_44987bf51954bcca2d345242ea67b50d738e77c390941b78961b97a4940d9079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_44987bf51954bcca2d345242ea67b50d738e77c390941b78961b97a4940d9079->leave($__internal_44987bf51954bcca2d345242ea67b50d738e77c390941b78961b97a4940d9079_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_5edabdf901c0abd06846d3534cc99e3401c7428a69a0f27675a61e288d0c2106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5edabdf901c0abd06846d3534cc99e3401c7428a69a0f27675a61e288d0c2106->enter($__internal_5edabdf901c0abd06846d3534cc99e3401c7428a69a0f27675a61e288d0c2106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_5edabdf901c0abd06846d3534cc99e3401c7428a69a0f27675a61e288d0c2106->leave($__internal_5edabdf901c0abd06846d3534cc99e3401c7428a69a0f27675a61e288d0c2106_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_c9d41d041e0f4cb2d0e749e8f472e303af6f948667bd814acc5792c02150b17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d41d041e0f4cb2d0e749e8f472e303af6f948667bd814acc5792c02150b17e->enter($__internal_c9d41d041e0f4cb2d0e749e8f472e303af6f948667bd814acc5792c02150b17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_c9d41d041e0f4cb2d0e749e8f472e303af6f948667bd814acc5792c02150b17e->leave($__internal_c9d41d041e0f4cb2d0e749e8f472e303af6f948667bd814acc5792c02150b17e_prof);

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
