<?php

/* layout_default.phtml */
class __TwigTemplate_a0ddf264abb3b733788bfbfd70b5d2bdc90111fe4b13f5a96a93fea76045b701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'opengraph' => array($this, 'block_opengraph'),
            'head' => array($this, 'block_head'),
            'js' => array($this, 'block_js'),
            'body_class' => array($this, 'block_body_class'),
            'body' => array($this, 'block_body'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content_before' => array($this, 'block_content_before'),
            'content' => array($this, 'block_content'),
            'content_after' => array($this, 'block_content_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>    <html class=\"no-js ie8 ie\" lang=\"en\"> <![endif]-->
<!--[if IE 9]>    <html class=\"no-js ie9 ie\" lang=\"en\"> <![endif]-->
<!--[if gt IE 9]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "\">
    <meta property=\"bb:client_area\" content=\"";
        // line 10
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\">

    <meta name=\"description\" content=\"";
        // line 12
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">
    <meta name=\"robots\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_robots"), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_author"), "html", null, true);
        echo "\">
    <meta name=\"generator\" content=\"BoxBilling ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 18
        $this->displayBlock('opengraph', $context, $blocks);
        // line 19
        echo "
    <link rel='stylesheet' type='text/css' href=\"";
        // line 20
        echo twig_asset_url($this->env, (("css/huraga-" . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "color_scheme")) . ".css"));
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 21
        echo twig_asset_url($this->env, "css/plugins/jquery.jgrowl.css");
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 22
        echo twig_asset_url($this->env, "css/logos.css");
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 23
        echo twig_asset_url($this->env, "css/flags16.css");
        echo "\">

    <link rel=\"shortcut icon\" href=\"";
        // line 25
        echo twig_asset_url($this->env, "favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 26
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 27
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 28
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-57-precomposed.png");
        echo "\">

    <script src=\"";
        // line 30
        echo twig_asset_url($this->env, "js/libs/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_asset_url($this->env, "js/bb-jquery.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 32
        echo twig_asset_url($this->env, "js/libs/modernizr.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 33
        echo twig_asset_url($this->env, "js/bootstrap/bootstrap.min.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 34
        echo twig_asset_url($this->env, "js/libs/selectivizr.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 35
        echo twig_asset_url($this->env, "js/plugins/jGrowl/jquery.jgrowl.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 36
        echo twig_asset_url($this->env, "js/paylane.js");
        echo "\"></script>

    ";
        // line 38
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 40
        echo "</head>

<body class=\"";
        // line 42
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
";
        // line 43
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "cookieconsent")), "method")) {
            // line 44
            echo "    ";
            try {
                $this->env->loadTemplate("mod_cookieconsent_index.phtml")->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

        }
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 273
        echo "
";
        // line 274
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "top_menu_order") || $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_order"))) {
            // line 275
            echo "<script src=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("orderbutton/js", array("options" => "1", "width" => 600, "theme_color" => "green", "background_color" => "black", "background_opacity" => 50, "background_close" => 1, "bind_selector" => ".order-button", "border_radius" => 0, "loader" => 8));
            echo "\" ></script>
";
        }
        // line 277
        echo "
";
        // line 278
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "inject_javascript")) {
            // line 279
            echo "    ";
            echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "inject_javascript");
            echo "
";
        }
        // line 281
        try {
            $this->env->loadTemplate("partial_pending_messages.phtml")->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 282
        echo "</body>
</html>";
    }

    // line 7
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_title"), "html", null, true);
    }

    // line 12
    public function block_meta_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description"), "html", null, true);
    }

    // line 18
    public function block_opengraph($context, array $blocks = array())
    {
    }

    // line 38
    public function block_head($context, array $blocks = array())
    {
    }

    // line 39
    public function block_js($context, array $blocks = array())
    {
    }

    // line 42
    public function block_body_class($context, array $blocks = array())
    {
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        if ((!(isset($context["client"]) ? $context["client"] : null))) {
            // line 49
            echo "<script type=\"text/javascript\">\$(function(){bb.redirect('";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("login");
            echo "');});</script>
";
        } else {
            // line 51
            $context["profile"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_get");
            // line 52
            $context["company"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company");
            // line 53
            echo "
<div id=\"wrapper\">
    <header class=\"container\" id=\"header\">
            ";
            // line 56
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "show_page_header")) {
                // line 57
                echo "                <nav>
                <ul class=\"f16\">
                    ";
                // line 59
                $context["languages"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_languages");
                // line 60
                echo "                    ";
                if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
                    // line 61
                    echo "                    ";
                    $context["currentLang"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_locale");
                    // line 62
                    echo "                    ";
                    $context["countryCode"] = twig_slice($this->env, (isset($context["currentLang"]) ? $context["currentLang"] : null), 3, 2);
                    // line 63
                    echo "                        <li>
                            <div class=\"btn-group\">
                                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <span class=\"flag  ";
                    // line 66
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["countryCode"]) ? $context["countryCode"] : null)), "html", null, true);
                    echo "\"></span>
                                    ";
                    // line 67
                    echo twig_escape_filter($this->env, (isset($context["countryCode"]) ? $context["countryCode"] : null), "html", null, true);
                    echo "
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    ";
                    // line 71
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                        // line 72
                        echo "                                    ";
                        $context["countryCode"] = twig_slice($this->env, (isset($context["lang"]) ? $context["lang"] : null), 3, 2);
                        // line 73
                        echo "                                    ";
                        if (((isset($context["lang"]) ? $context["lang"] : null) != (isset($context["currentLang"]) ? $context["currentLang"] : null))) {
                            // line 74
                            echo "                                            <li class=\"language_selector\" data-language-code=\"";
                            echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
                            echo "\"><a href=\"javascript:;\"> <span class=\"flag ";
                            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["countryCode"]) ? $context["countryCode"] : null)), "html", null, true);
                            echo "\"></span> ";
                            echo twig_escape_filter($this->env, gettext((isset($context["lang"]) ? $context["lang"] : null)), "html", null, true);
                            echo "</a></li>
                                        ";
                        }
                        // line 76
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "                                </ul>
                            </div>
                        </li>

                    ";
                }
                // line 82
                echo "
                    ";
                // line 83
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "top_menu_dashboard")) {
                    // line 84
                    echo "                    <li>
                        <a href=\"";
                    // line 85
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("");
                    echo "\" class=\"show-tip\" title=\"";
                    echo gettext("Dashboard");
                    echo "\">";
                    echo gettext("Dashboard");
                    echo "</a>
                    </li>
                    ";
                }
                // line 88
                echo "                    ";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "top_menu_order")) {
                    // line 89
                    echo "                    <li class=\"order-button\">
                        <a href=\"#\" class=\"show-tip\" title=\"";
                    // line 90
                    echo gettext("Order");
                    echo "\">";
                    echo gettext("Order services");
                    echo "</a>
                    </li>
                    ";
                }
                // line 93
                echo "                    ";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "top_menu_profile")) {
                    // line 94
                    echo "                    <li>
                        <a href=\"";
                    // line 95
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/me");
                    echo "\" class=\"show-tip\" title=\"";
                    echo gettext("Profile");
                    echo "\">";
                    echo gettext("Profile");
                    echo "</a>
                    </li>
                    ";
                }
                // line 98
                echo "
                    ";
                // line 99
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "top_menu_signout")) {
                    // line 100
                    echo "                    <li>
                        <a href=\"";
                    // line 101
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/logout");
                    echo "\" class=\"show-tip\" title=\"";
                    echo gettext("Sign out");
                    echo "\">";
                    echo gettext("Sign out");
                    echo "</a>
                    </li>
                    ";
                }
                // line 104
                echo "                </ul>
            </nav>

            ";
                // line 107
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "show_company_logo")) {
                    // line 108
                    echo "                ";
                    if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo_url")) {
                        // line 109
                        echo "                    <h1>
                        <a href=\"";
                        // line 110
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
                        echo "\">
                            <img src=\"";
                        // line 111
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo_url"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
                        echo "\" style=\"max-height: 75px\"/>
                        </a>
                        <p></p>
                    </h1>
                ";
                    }
                    // line 116
                    echo "            ";
                }
                // line 117
                echo "
            ";
                // line 118
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "show_company_name")) {
                    // line 119
                    echo "            <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "name"), "html", null, true);
                    echo "</p>
            ";
                }
                // line 121
                echo "        ";
            }
            // line 122
            echo "    </header>
    <section class=\"container\" role=\"main\">
        <div class=\"navigation-block\">

            <div class=\"navbar\">
                <a class=\"btn btn-navbar btn-block btn-large\" data-toggle=\"collapse\" data-target=\".nav-collapse\"><span class=\"awe-user\"></span> ";
            // line 127
            echo gettext("User profile");
            echo "</a>
            </div>

            <nav class=\"main-navigation nav-collapse collapse\" role=\"navigation\">
                ";
            // line 131
            $this->env->loadTemplate("partial_menu.phtml")->display($context);
            // line 132
            echo "            </nav>

            ";
            // line 134
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "show_client_details")) {
                // line 135
                echo "            <section class=\"user-profile\">
                <figure>
                    <img alt=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "first_name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "last_name"), "html", null, true);
                echo " gravatar\" src=\"";
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email"), 60), "html", null, true);
                echo "\">
                    <figcaption>
                        <strong><a href=\"";
                // line 139
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/profile");
                echo "\" class=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "first_name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "last_name"), "html", null, true);
                echo "</a></strong>
                        <em>";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company"), "html", null, true);
                echo "</em>
                        <ul>
                            <li><a class=\"btn btn-primary btn-flat\" href=\"";
                // line 142
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/profile");
                echo "\">";
                echo gettext("profile");
                echo "</a></li>
                            <li><a class=\"btn btn-primary btn-flat\" href=\"";
                // line 143
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/logout");
                echo "\">";
                echo gettext("sign out");
                echo "</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </section>
            ";
            }
            // line 149
            echo "
            ";
            // line 150
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sidebar_balance_enabled")) {
                // line 151
                echo "            <section class=\"balance\">
                <h2>";
                // line 152
                echo gettext("Account balance");
                echo "</h2>
                <strong>";
                // line 153
                echo twig_money($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "balance"), $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "currency"));
                echo "</strong>
            </section>
            ";
            }
            // line 156
            echo "
            ";
            // line 157
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sidebar_note_enabled")) {
                // line 158
                echo "            <section class=\"side-note\">
                <div class=\"side-note-container\">
                    <h2>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sidebar_note_title"), "html", null, true);
                echo "</h2>
                    <p>";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sidebar_note_content"), "html", null, true);
                echo "</p>
                </div>
                <div class=\"side-note-bottom\"></div>
            </section>
            ";
            }
            // line 166
            echo "        </div>

        <div class=\"content-block\" role=\"main\">

            ";
            // line 170
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "show_breadcrumb")) {
                // line 171
                echo "            ";
                $this->displayBlock('breadcrumbs', $context, $blocks);
                // line 179
                echo "            ";
            }
            // line 180
            echo "
            ";
            // line 181
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "show_page_header")) {
                // line 182
                echo "            ";
                // line 188
                echo "            ";
            }
            // line 189
            echo "
            ";
            // line 190
            $this->env->loadTemplate("partial_message.phtml")->display($context);
            // line 191
            echo "
            ";
            // line 192
            $this->displayBlock('content_before', $context, $blocks);
            // line 193
            echo "            ";
            $this->displayBlock('content', $context, $blocks);
            // line 194
            echo "            ";
            $this->displayBlock('content_after', $context, $blocks);
            // line 195
            echo "        </div>
    </section>
    <div id=\"push\"></div>
</div>

";
            // line 200
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_enabled")) {
                // line 201
                echo "<footer id=\"footer\" class=\"container\">
    <p>&copy; ";
                // line 202
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y"), "html", null, true);
                echo " ";
                echo (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_signature", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_signature"), $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "signature"))) : ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "signature")));
                echo "</p>
    <ul>
        ";
                // line 204
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_enabled")) {
                    // line 205
                    echo "        <li>
            ";
                    // line 206
                    if ((twig_in_filter("http://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_page")) || twig_in_filter("https://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_page")))) {
                        // line 207
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_page"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 209
                        echo "            <a href=\"";
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_page"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_1_title"), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 211
                    echo "        </li>
        ";
                }
                // line 213
                echo "        ";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_enabled")) {
                    // line 214
                    echo "        <li>
            ";
                    // line 215
                    if ((twig_in_filter("http://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_page")) || twig_in_filter("https://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_page")))) {
                        // line 216
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_page"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 218
                        echo "            <a href=\"";
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_page"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_2_title"), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 220
                    echo "        </li>
        ";
                }
                // line 222
                echo "        ";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_enabled")) {
                    // line 223
                    echo "        <li>
            ";
                    // line 224
                    if ((twig_in_filter("http://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_page")) || twig_in_filter("https://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_page")))) {
                        // line 225
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_page"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 227
                        echo "            <a href=\"";
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_page"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_3_title"), "html", null, true);
                        echo "</a>

            ";
                    }
                    // line 230
                    echo "        </li>
        ";
                }
                // line 232
                echo "        ";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_enabled")) {
                    // line 233
                    echo "        <li>
            ";
                    // line 234
                    if ((twig_in_filter("http://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_page")) || twig_in_filter("https://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_page")))) {
                        // line 235
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_page"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 237
                        echo "            <a href=\"";
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_page"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_4_title"), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 239
                    echo "        </li>
        ";
                }
                // line 241
                echo "        ";
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_enabled")) {
                    // line 242
                    echo "        <li>
            ";
                    // line 243
                    if ((twig_in_filter("http://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_page")) || twig_in_filter("https://", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_page")))) {
                        // line 244
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_page"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 246
                        echo "            <a href=\"";
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_page"));
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_link_5_title"), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 248
                    echo "        </li>
        ";
                }
                // line 250
                echo "
        ";
                // line 252
                echo "        ";
                if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "branding")), "method")) {
                    // line 253
                    echo "        <li>
            <a href=\"http://www.boxbilling.com\" title=\"Billing Software\" target=\"_blank\">";
                    // line 254
                    echo gettext("Powered by BoxBilling");
                    echo "</a>
        </li>
        ";
                }
                // line 257
                echo "    </ul>
    ";
                // line 258
                if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "footer_to_top_enabled")) {
                    // line 259
                    echo "    <a href=\"#top\" class=\"btn btn-primary btn-flat pull-right\"><span class=\"awe-arrow-up\"></span> ";
                    echo gettext("Top");
                    echo "</a>
    ";
                }
                // line 261
                echo "</footer>
";
            }
            // line 263
            echo "
<div class=\"wait\" style=\"display:none\" onclick=\"\$(this).hide();\">
    <div class=\"popup_block\" style=\"position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: black; opacity: 0.5; -webkit-opacity: 0.5; -moz-opacity: 0.5; filter :  alpha(opacity=50); z-index: 2000\">
        <img src=\"";
            // line 266
            echo twig_asset_url($this->env, "img/loader.gif");
            echo "\" style=\"position: absolute; display: block; margin-left: auto; margin-right: auto; position: relative; top: 50%; opacity: 1; filter: alpha(opacity=100); z-index: 1003\">
    </div>
</div>
<noscript>NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>

";
        }
    }

    // line 171
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 172
        echo "            <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 173
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a> <span class=\"divider\">/</span></li>
                ";
        // line 174
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 177
        echo "            </ul>
            ";
    }

    // line 174
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 175
        echo "                <li class=\"active\">";
        echo gettext("Dashboard");
        echo "</li>
                ";
    }

    // line 192
    public function block_content_before($context, array $blocks = array())
    {
    }

    // line 193
    public function block_content($context, array $blocks = array())
    {
    }

    // line 194
    public function block_content_after($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout_default.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  820 => 194,  815 => 193,  810 => 192,  803 => 175,  800 => 174,  795 => 177,  793 => 174,  787 => 173,  784 => 172,  781 => 171,  770 => 266,  765 => 263,  761 => 261,  755 => 259,  753 => 258,  750 => 257,  744 => 254,  741 => 253,  738 => 252,  735 => 250,  731 => 248,  723 => 246,  715 => 244,  713 => 243,  710 => 242,  707 => 241,  703 => 239,  695 => 237,  687 => 235,  685 => 234,  682 => 233,  679 => 232,  675 => 230,  666 => 227,  658 => 225,  656 => 224,  653 => 223,  650 => 222,  646 => 220,  638 => 218,  630 => 216,  628 => 215,  625 => 214,  622 => 213,  618 => 211,  610 => 209,  602 => 207,  600 => 206,  597 => 205,  595 => 204,  588 => 202,  585 => 201,  583 => 200,  576 => 195,  573 => 194,  570 => 193,  568 => 192,  565 => 191,  563 => 190,  560 => 189,  557 => 188,  555 => 182,  553 => 181,  550 => 180,  547 => 179,  544 => 171,  542 => 170,  536 => 166,  528 => 161,  524 => 160,  520 => 158,  518 => 157,  515 => 156,  509 => 153,  505 => 152,  502 => 151,  500 => 150,  497 => 149,  486 => 143,  480 => 142,  475 => 140,  467 => 139,  458 => 137,  454 => 135,  452 => 134,  448 => 132,  446 => 131,  439 => 127,  432 => 122,  429 => 121,  423 => 119,  421 => 118,  418 => 117,  415 => 116,  403 => 111,  399 => 110,  396 => 109,  393 => 108,  391 => 107,  386 => 104,  376 => 101,  373 => 100,  371 => 99,  368 => 98,  358 => 95,  355 => 94,  352 => 93,  344 => 90,  341 => 89,  338 => 88,  328 => 85,  325 => 84,  323 => 83,  320 => 82,  313 => 77,  307 => 76,  297 => 74,  294 => 73,  291 => 72,  287 => 71,  280 => 67,  276 => 66,  271 => 63,  268 => 62,  265 => 61,  262 => 60,  260 => 59,  256 => 57,  254 => 56,  249 => 53,  247 => 52,  245 => 51,  239 => 49,  237 => 48,  234 => 47,  229 => 42,  224 => 39,  219 => 38,  214 => 18,  208 => 12,  202 => 7,  197 => 282,  190 => 281,  184 => 279,  182 => 278,  179 => 277,  173 => 275,  171 => 274,  168 => 273,  166 => 47,  163 => 46,  154 => 44,  152 => 43,  148 => 42,  144 => 40,  141 => 39,  139 => 38,  134 => 36,  130 => 35,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  105 => 28,  101 => 27,  97 => 26,  93 => 25,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  73 => 19,  71 => 18,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  48 => 10,  44 => 9,  39 => 7,  31 => 1,);
    }
}
