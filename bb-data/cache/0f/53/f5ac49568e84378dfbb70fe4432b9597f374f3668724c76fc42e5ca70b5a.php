<?php

/* mod_index_dashboard.phtml */
class __TwigTemplate_0f53f5ac49568e84378dfbb70fe4432b9597f374f3668724c76fc42e5ca70b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'page_header' => array($this, 'block_page_header'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 15
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Client Area");
    }

    // line 4
    public function block_page_header($context, array $blocks = array())
    {
        echo gettext("Dashboard");
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ((!$this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "hide_dashboard_breadcrumb"))) {
            // line 8
            echo "        <ul class=\"breadcrumb\">
            <li><a href=\"";
            // line 9
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
            echo "\">";
            echo gettext("Home");
            echo "</a> <span class=\"divider\">/</span></li>
            <li class=\"active\">";
            // line 10
            echo gettext("Dashboard");
            echo "</li>
        </ul>
    ";
        }
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
";
        // line 19
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "showcase_enabled")) {
            // line 20
            echo "<div class=\"hero-unit\">
    <h1>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "showcase_heading"), "html", null, true);
            echo "</h1>
    <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "showcase_text"), "html", null, true);
            echo "</p>
    <p><a class=\"btn btn-alt btn-primary btn-large\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "showcase_button_url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "showcase_button_title"), "html", null, true);
            echo "</a></p>
</div>
";
        }
        // line 26
        echo "
";
        // line 27
        if ((isset($context["client"]) ? $context["client"] : null)) {
            // line 28
            echo "
";
            // line 29
            $context["tickets"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(0 => array("status" => "on_hold")), "method");
            // line 30
            if (($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "total") > 0)) {
                // line 31
                echo "<div class=\"row\">
<article class=\"span12 data-block\">
<div class=\"data-container\">
<header>
    <h2>";
                // line 35
                echo gettext("Tickets waiting your reply");
                echo "</h2>
</header>
<section id=\"slimScroll1\">
    <table class=\"table table-striped table-bordered table-condensed table-hover\">
        <thead>
        <tr>
            <th>";
                // line 41
                echo gettext("Id");
                echo "</th>
            <th>";
                // line 42
                echo gettext("Subject");
                echo "</th>
            <th>";
                // line 43
                echo gettext("Help desk");
                echo "</th>
            <th>";
                // line 44
                echo gettext("Status");
                echo "</th>
            <th>";
                // line 45
                echo gettext("Submitted");
                echo "</th>
            <th>";
                // line 46
                echo gettext("Actions");
                echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
                // line 50
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 51
                    echo "
        <tr class=\"";
                    // line 52
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                    echo "\">
            <td>";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
                    echo "</td>
            <td><a href=\"";
                    // line 54
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), "html", null, true);
                    echo "</a></td>
            <td>";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
                    echo "</td>
            <td><span class=\"label\">";
                    // line 56
                    echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
                    echo "</span></td>
            <td>";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "created_at")), "html", null, true);
                    echo "</td>
            <td><a href=\"";
                    // line 58
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
                    echo "\" class=\"btn btn-small btn-inverse\">";
                    echo gettext("Reply");
                    echo "</a></td>
        </tr>

        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 62
                    echo "
        <tr>
            <td colspan=\"5\">";
                    // line 64
                    echo gettext("The list is empty");
                    echo "</td>
        </tr>

        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "
        </tbody>
    </table>
</section>
</div>
</article>
</div>
";
            }
            // line 76
            echo "
<div class=\"row\">
";
            // line 78
            $context["profile"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_get");
            // line 79
            echo "<article class=\"span6 data-block decent\">
    <div class=\"data-container\">
        <header>
            <h2>";
            // line 82
            echo gettext("Profile");
            echo "</h2>
            <ul class=\"data-header-actions\">
                <li>
                    <a class=\"btn btn-alt btn-inverse\" href=\"";
            // line 85
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/me");
            echo "\">";
            echo gettext("Update");
            echo "</a>
                </li>
            </ul>
        </header>
        <section>
            <dl class=\"dl-horizontal\">
                <dt>";
            // line 91
            echo gettext("ID");
            echo "</dt>
                <dd>#";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "id"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 93
            echo gettext("Email");
            echo "</dt>
                <dd>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 95
            echo gettext("Balance");
            echo "</dt>
                <dd>";
            // line 96
            echo twig_money($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "balance"), $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "currency"));
            echo "</dd>
            </dl>
        </section>
    </div>
</article>

<article class=\"span6 data-block decent\">
    <div class=\"data-container\">
        <header>
            <h2>";
            // line 105
            echo gettext("Invoices");
            echo "</h2>
            <ul class=\"data-header-actions\">
                <li>
                    <a class=\"btn btn-alt btn-inverse\" href=\"";
            // line 108
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
            echo "\">";
            echo gettext("All Invoices");
            echo "</a>
                </li>
            </ul>
        </header>
        <section>
            <dl class=\"dl-horizontal\">
                <dt>";
            // line 114
            echo gettext("Total");
            echo "</dt>
                    <dd>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_list", array(), "method"), "total"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 116
            echo gettext("Paid");
            echo "</dt>
                    <dd>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_list", array(0 => array("status" => "paid")), "method"), "total"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 118
            echo gettext("Unpaid");
            echo "</dt>
                    <dd>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_list", array(0 => array("status" => "unpaid")), "method"), "total"), "html", null, true);
            echo "</dd>
            </dl>
        </section>
    </div>
</article>
</div>

<div class=\"row\">

<article class=\"span6 data-block decent\">
    <div class=\"data-container\">
        <header>
            <h2>";
            // line 131
            echo gettext("Orders");
            echo "</h2>
            <ul class=\"data-header-actions\">
                <li>
                    <a class=\"btn btn-alt btn-info order-button\" href=\"";
            // line 134
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order");
            echo "\">";
            echo gettext("New order");
            echo "</a>
                    <a class=\"btn btn-alt btn-inverse\" href=\"";
            // line 135
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order/service");
            echo "\">";
            echo gettext("All orders");
            echo "</a>
                </li>
            </ul>
        </header>
        <section>
            <dl class=\"dl-horizontal\">
                <dt>";
            // line 141
            echo gettext("Total");
            echo "</dt>
                <dd>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("hide_addons" => 1)), "method"), "total"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 143
            echo gettext("Active");
            echo "</dt>
                <dd>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("hide_addons" => 1, "status" => "active")), "method"), "total"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 145
            echo gettext("Expiring");
            echo "</dt>
                <dd>";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("expiring" => 1)), "method"), "total"), "html", null, true);
            echo "</dd>
            </dl>
        </section>
    </div>
</article>

<article class=\"span6 data-block decent\">
    <div class=\"data-container\">
        <header>
            <h2>";
            // line 155
            echo gettext("Tickets");
            echo "</h2>
            <ul class=\"data-header-actions\">
                <li>
                    <a class=\"btn btn-alt btn-info\" href=\"";
            // line 158
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support", array("ticket" => 1));
            echo "\">";
            echo gettext("New ticket");
            echo "</a>
                    <a class=\"btn btn-alt btn-inverse\" href=\"";
            // line 159
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support");
            echo "\">";
            echo gettext("All tickets");
            echo "</a>
                </li>
            </ul>
        </header>
        <section>
            <dl class=\"dl-horizontal\">
                <dt>";
            // line 165
            echo gettext("Total");
            echo "</dt>
                <dd>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(), "method"), "total"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 167
            echo gettext("Open");
            echo "</dt>
                <dd>";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(0 => array("status" => "open")), "method"), "total"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 169
            echo gettext("On Hold");
            echo "</dt>
                <dd>";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(0 => array("status" => "on_hold")), "method"), "total"), "html", null, true);
            echo "</dd>
            </dl>
        </section>
    </div>
</article>
</div>

<div class=\"row\">

<article class=\"span6 data-block decent\">
    <div class=\"data-container\">
        <header>
            <h2>";
            // line 182
            echo gettext("Recent orders");
            echo "</h2>
        </header>
        <section>
            <table class=\"table table-striped table-bordered table-condensed table-hover\">
                <tbody>
                ";
            // line 187
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("per_page" => 5, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), "hide_addons" => 1)), "method"), "list"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["order"]) {
                // line 188
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                    <td><a href=\"";
                // line 189
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order/service/manage");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), 30), "html", null, true);
                echo "</a></td>
                    <td><span class=\"label ";
                // line 190
                if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "active")) {
                    echo "label-success";
                } elseif (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "pending_setup")) {
                    echo "label-warning";
                }
                echo "\">";
                echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status"));
                echo "</span></td>
                </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 193
                echo "                <tr>
                    <td colspan=\"3\">";
                // line 194
                echo gettext("The list is empty");
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                </tbody>
            </table>
        </section>
    </div>
</article>

<article class=\"span6 data-block decent\">
    <div class=\"data-container\">
        <header>
            <h2>";
            // line 206
            echo gettext("Recent emails");
            echo "</h2>
        </header>
        <section>
            <table class=\"table table-striped table-bordered table-condensed table-hover\">
                <tbody>
                ";
            // line 211
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email_get_list", array(0 => array("per_page" => 5)), "method"), "list"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["email"]) {
                // line 212
                echo "                <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                    <td><a href=\"";
                // line 213
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("email");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "subject"), 30), "html", null, true);
                echo "</a></td>
                    <td title=\"";
                // line 214
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "created_at")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "created_at")), "html", null, true);
                echo " ";
                echo gettext("ago");
                echo "</td>
                </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 217
                echo "                <tr>
                    <td colspan=\"2\">";
                // line 218
                echo gettext("The list is empty");
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "                </tbody>
            </table>
        </section>
    </div>
</article>

</div>

";
        }
    }

    public function getTemplateName()
    {
        return "mod_index_dashboard.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 221,  549 => 218,  546 => 217,  534 => 214,  526 => 213,  521 => 212,  516 => 211,  508 => 206,  497 => 197,  488 => 194,  485 => 193,  471 => 190,  463 => 189,  458 => 188,  453 => 187,  445 => 182,  430 => 170,  426 => 169,  422 => 168,  418 => 167,  414 => 166,  410 => 165,  399 => 159,  393 => 158,  387 => 155,  375 => 146,  371 => 145,  367 => 144,  363 => 143,  359 => 142,  355 => 141,  344 => 135,  338 => 134,  332 => 131,  317 => 119,  313 => 118,  309 => 117,  305 => 116,  301 => 115,  297 => 114,  286 => 108,  280 => 105,  268 => 96,  264 => 95,  260 => 94,  256 => 93,  252 => 92,  248 => 91,  237 => 85,  231 => 82,  226 => 79,  224 => 78,  220 => 76,  210 => 68,  200 => 64,  196 => 62,  183 => 58,  179 => 57,  175 => 56,  171 => 55,  163 => 54,  159 => 53,  155 => 52,  152 => 51,  147 => 50,  140 => 46,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  111 => 35,  105 => 31,  103 => 30,  101 => 29,  98 => 28,  96 => 27,  93 => 26,  85 => 23,  81 => 22,  77 => 21,  74 => 20,  72 => 19,  69 => 18,  66 => 17,  58 => 10,  52 => 9,  49 => 8,  46 => 7,  43 => 6,  37 => 4,  31 => 3,  26 => 15,);
    }
}
