<?php

/* mod_index_dashboard.phtml */
class __TwigTemplate_959cf169b4d303daf3a1fc3761b506bfd3cd432b7519cc9d2f06df2727d5f0ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Dashboard");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_messages", array(0 => array("type" => "info")), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 8
            echo "<div class=\"nNote nInformation hideit ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo "first";
            }
            echo "\">
    <p><strong>";
            // line 9
            echo gettext("INFORMATION");
            echo ": </strong>";
            echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : null), "html", null, true);
            echo "</p>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "stats")), "method")) {
            // line 14
            echo "<div class=\"widget\">
    <div class=\"head\"><h5><i class=\"dark-sprite-icon sprite-chart8\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company"), "name"), "html", null, true);
            echo " ";
            echo gettext("Statistics");
            echo "</h5></div>
    ";
            // line 16
            $context["stats"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_summary");
            // line 17
            echo "    ";
            $context["income"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_summary_income");
            // line 18
            echo "    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" class=\"tableStatic\">
        <thead>
            <tr>
                <td width=\"10%\">";
            // line 21
            echo gettext("Metric");
            echo "</td>
                <td>";
            // line 22
            echo gettext("Today");
            echo "</td>
                <td>";
            // line 23
            echo gettext("Yesterday");
            echo "</td>
                <td>";
            // line 24
            echo gettext("This month so far");
            echo "</td>
                <td>";
            // line 25
            echo gettext("Last month");
            echo "</td>
                <td>";
            // line 26
            echo gettext("Total");
            echo "</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>";
            // line 32
            echo gettext("Income");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 33
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("paid_at" => twig_date_format_filter($this->env, "now", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["income"]) ? $context["income"] : null), "today")), "method"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 34
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("paid_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["income"]) ? $context["income"] : null), "yesterday")), "method"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 35
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["income"]) ? $context["income"] : null), "this_month")), "method"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 36
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["income"]) ? $context["income"] : null), "last_month")), "method"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 37
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["income"]) ? $context["income"] : null), "total")), "method"), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 40
            echo gettext("Clients");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 41
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client", array("created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "clients_today"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 42
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client", array("created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "clients_yesterday"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 43
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "clients_this_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 44
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "clients_last_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 45
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "clients_total"), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 48
            echo gettext("Orders");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 49
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order", array("created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "orders_today"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 50
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order", array("created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "orders_yesterday"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 51
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "orders_this_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 52
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "orders_last_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 53
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "orders_total"), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 56
            echo gettext("Invoices");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 57
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "invoices_today"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 58
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "invoices_yesterday"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 59
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "invoices_this_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 60
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "invoices_last_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 61
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "invoices_total"), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 64
            echo gettext("Tickets");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 65
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "tickets_today"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 66
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "tickets_yesterday"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 67
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "tickets_this_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 68
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "tickets_last_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 69
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support");
            echo "\" title=\"\" class=\"webStatsLink\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stats"]) ? $context["stats"] : null), "tickets_total"), "html", null, true);
            echo "</a></td>
            </tr>
        </tbody>
    </table>
</div>
";
        }
        // line 75
        echo "
";
        // line 76
        $context["orders"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_list", array(0 => array("per_page" => "5", "status" => "active")), "method");
        // line 77
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), "list")) > 0)) {
            // line 78
            echo "<div class=\"widgets\">
    <div class=\"left\">
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iMoney\">";
            // line 82
            echo gettext("Latest orders");
            echo "</h5>
                <div class=\"num\"><a href=\"";
            // line 83
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order");
            echo "\" class=\"greenNum\">+";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), "total"), "html", null, true);
            echo "</a></div>
            </div>
            <div style=\"height: 221px; overflow: auto;\">
                <table class=\"tableStatic wide\">
                    <thead>
                        <tr>
                            <td>";
            // line 89
            echo gettext("Order");
            echo "</td>
                            <td>";
            // line 90
            echo gettext("Client");
            echo "</td>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 94
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), "list"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 95
                echo "                        <tr title=\"";
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "created_at")), "html", null, true);
                echo " ago\">
                            <td><a href=\"";
                // line 96
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order/manage");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), 35), "html", null, true);
                echo "</a></td>
                            <td align=\"center\"><a href=\"";
                // line 97
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client_id"), "html", null, true);
                echo "\" title=\"\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "first_name"), 1, null, "."), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "client"), "last_name"), "html", null, true);
                echo "</a></td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 100
                echo "                    <tr>
                        <td colspan=\"2\" align=\"center\">";
                // line 101
                echo gettext("The list is empty");
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class=\"right\">
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iGraph\">";
            // line 113
            echo gettext("Product sales");
            echo "</h5>
            </div>
            <div style=\"height: 221px; overflow: auto;\">
                <table class=\"tableStatic wide\">
                    <thead>
                        <tr>
                            <td>";
            // line 119
            echo gettext("Product/Service");
            echo "</td>
                            <td>";
            // line 120
            echo gettext("Orders");
            echo "</td>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 124
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_product_summary"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 125
                echo "                        <tr>
                            <td><a href=\"";
                // line 126
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product/manage");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "title"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "title"), 35), "html", null, true);
                echo "</a></td>
                            <td align=\"center\"><a href=\"";
                // line 127
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order", array("product_id" => $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")));
                echo "\" title=\"\" class=\"webStatsLink\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "orders"), "html", null, true);
                echo "</a></td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 130
                echo "                    <tr>
                        <td colspan=\"2\" align=\"center\">";
                // line 131
                echo gettext("No active orders available");
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"fix\"></div>
</div>
";
        }
        // line 142
        echo "
";
        // line 143
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "stats")), "method")) {
            // line 144
            echo "<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-dropper\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 146
            echo gettext("Define date interval for graphs");
            echo "</h5>
    </div>
    <form method=\"get\" action=\"\" class=\"mainForm\">
        <input type=\"hidden\" name=\"_url\" value=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "_url"), "html", null, true);
            echo "\" />
        <fieldset>
            <div class=\"rowElem noborder\">
                <div class=\"moreFields\">
                    <ul>
                        <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 154
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                        <li class=\"sep\">-</li>
                        <li style=\"width: 100px\"><input type=\"text\" name=\"date_to\" value=\"";
            // line 156
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                        <li class=\"sep\" style=\"padding-top: 0px\"><input type=\"submit\" value=\"";
            // line 157
            echo gettext("Update graphs");
            echo "\" class=\"greyishBtn\" /></li>
                    </ul>
                </div>
                <div class=\"fix\"></div>
            </div>
        </fieldset>
    </form>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 168
            echo gettext("Income");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-income\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 177
            echo gettext("Orders");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-orders\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 186
            echo gettext("Invoices");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-invoice\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 195
            echo gettext("Clients");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-clients\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 204
            echo gettext("Support tickets");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-tickets\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>
";
        }
        // line 211
        echo "
";
        // line 212
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "activity")), "method")) {
            // line 213
            echo "<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
            // line 215
            echo gettext("Recent clients activity");
            echo "</a></li>
        <li><a href=\"#tab-staff\">";
            // line 216
            echo gettext("Recent staff activity");
            echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>

        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <table class=\"tableStatic wide\">
                <tbody>
                ";
            // line 225
            $context["events"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "activity_log_get_list", array(0 => array("per_page" => 10, "only_clients" => 1)), "method");
            // line 226
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["events"]) ? $context["events"] : null), "list"));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 227
                echo "                <tr ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "class=\"noborder\"";
                }
                echo ">
                    <td style=\"width: 5%\"><a href=\"";
                // line 228
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "id"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "name"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "email")), "html", null, true);
                echo "?size=20\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "name"), "html", null, true);
                echo "\" /></a></td>
                    <td>";
                // line 229
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "name"), 40), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 230
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "client"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "message"), 50), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 231
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "created_at")), "html", null, true);
                echo " ago</td>
                </tr>
                </tbody>

                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 236
                echo "                <tbody>
                    <tr class=\"noborder\">
                        <td colspan=\"4\">
                            ";
                // line 239
                echo gettext("The list is empty");
                // line 240
                echo "                        </td>
                    </tr>
                </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo "            </table>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-staff\">
            <table class=\"tableStatic wide\">
                <tbody>
                ";
            // line 250
            $context["events"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "activity_log_get_list", array(0 => array("per_page" => 10, "only_staff" => 1)), "method");
            // line 251
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["events"]) ? $context["events"] : null), "list"));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 252
                echo "                <tr ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "class=\"noborder\"";
                }
                echo ">
                    <td style=\"width: 5%\"><a href=\"";
                // line 253
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("staff/manage");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "id"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "name"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "email")), "html", null, true);
                echo "?size=20\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "name"), "html", null, true);
                echo "\" /></a></td>
                    <td>";
                // line 254
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "name"), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 255
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("staff/manage");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "staff"), "id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "message"), 50), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 256
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "created_at")), "html", null, true);
                echo " ago</td>
                </tr>
                </tbody>

                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 261
                echo "                <tbody>
                    <tr class=\"noborder\">
                        <td colspan=\"4\">
                            ";
                // line 264
                echo gettext("The list is empty");
                // line 265
                echo "                        </td>
                    </tr>
                </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "            </table>
        </div>

    </div>
    
    <div class=\"fix\"></div>
</div>
";
        }
        // line 277
        echo "
";
    }

    // line 280
    public function block_js($context, array $blocks = array())
    {
        // line 281
        echo "
";
        // line 282
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "system_is_allowed", array(0 => array("mod" => "stats")), "method")) {
            // line 283
            echo "<script type=\"text/javascript\" src=\"js/flot/jquery.flot.js\"></script>
<script type=\"text/javascript\" src=\"js/flot/excanvas.min.js\"></script>
<script type=\"text/javascript\">

\$(function() {
    setPlotDataData('graph-income', ";
            // line 288
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_income", array(0 => array("date_from" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "date_to" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"))), "method")), "html", null, true);
            echo " );
    setPlotDataData('graph-orders', ";
            // line 289
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_orders", array(0 => array("date_from" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "date_to" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"))), "method")), "html", null, true);
            echo " );
    setPlotDataData('graph-invoice', ";
            // line 290
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_invoices", array(0 => array("date_from" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "date_to" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"))), "method")), "html", null, true);
            echo " );
    setPlotDataData('graph-clients', ";
            // line 291
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_clients", array(0 => array("date_from" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "date_to" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"))), "method")), "html", null, true);
            echo " );
    setPlotDataData('graph-tickets', ";
            // line 292
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "stats_get_tickets", array(0 => array("date_from" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "date_to" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"))), "method")), "html", null, true);
            echo " );
});

function setPlotDataData(id, result) {
    \$.plot(\$(\"#\"+id), [ result ] , {
        yaxis: {
            min: 0,
            tickDecimals: false
        },
        xaxis: {
            mode: \"time\",
            tickDecimals: false,
            timeformat: \"%y-%m-%d\"
        },
        clickable: true,
        colors: [\"#afd8f8\"],
        series: {
               lines: {
                    lineWidth: 2,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0.6 }, { opacity: 0.2 } ] },
                    steps: false
               }
            }
    });
}

</script>
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
        return array (  848 => 292,  844 => 291,  840 => 290,  836 => 289,  832 => 288,  825 => 283,  823 => 282,  820 => 281,  817 => 280,  812 => 277,  802 => 269,  793 => 265,  791 => 264,  786 => 261,  768 => 256,  760 => 255,  756 => 254,  744 => 253,  737 => 252,  718 => 251,  716 => 250,  708 => 244,  699 => 240,  697 => 239,  692 => 236,  674 => 231,  666 => 230,  662 => 229,  650 => 228,  643 => 227,  624 => 226,  622 => 225,  610 => 216,  606 => 215,  602 => 213,  600 => 212,  597 => 211,  587 => 204,  575 => 195,  563 => 186,  551 => 177,  539 => 168,  525 => 157,  517 => 156,  508 => 154,  500 => 149,  494 => 146,  490 => 144,  488 => 143,  485 => 142,  475 => 134,  466 => 131,  463 => 130,  453 => 127,  443 => 126,  440 => 125,  435 => 124,  428 => 120,  424 => 119,  415 => 113,  404 => 104,  395 => 101,  392 => 100,  378 => 97,  370 => 96,  365 => 95,  360 => 94,  353 => 90,  349 => 89,  338 => 83,  334 => 82,  328 => 78,  326 => 77,  324 => 76,  321 => 75,  310 => 69,  304 => 68,  298 => 67,  292 => 66,  286 => 65,  282 => 64,  274 => 61,  268 => 60,  262 => 59,  256 => 58,  250 => 57,  246 => 56,  238 => 53,  232 => 52,  226 => 51,  220 => 50,  214 => 49,  210 => 48,  202 => 45,  196 => 44,  190 => 43,  184 => 42,  178 => 41,  174 => 40,  166 => 37,  160 => 36,  154 => 35,  148 => 34,  142 => 33,  138 => 32,  129 => 26,  125 => 25,  121 => 24,  117 => 23,  113 => 22,  109 => 21,  104 => 18,  101 => 17,  99 => 16,  93 => 15,  90 => 14,  88 => 13,  85 => 12,  66 => 9,  59 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
