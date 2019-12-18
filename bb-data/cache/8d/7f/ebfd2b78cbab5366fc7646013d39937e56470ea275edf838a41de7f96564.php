<?php

/* mod_invoice_index.phtml */
class __TwigTemplate_8d7febfd2b78cbab5366fc7646013d39937e56470ea275edf838a41de7f96564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'head' => array($this, 'block_head'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 4
        $context["active_menu"] = "invoice";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Invoices");
    }

    // line 6
    public function block_top_content($context, array $blocks = array())
    {
        // line 7
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show_filter")) {
            // line 8
            echo "<div class=\"widget filterWidget\">
    <div class=\"head\"><h5 class=\"iMagnify\">";
            // line 9
            echo gettext("Filter invoices");
            echo "</h5></div>
    <div class=\"body nopadding\">

        <form method=\"get\" action=\"\" class=\"mainForm\">
            <input type=\"hidden\" name=\"_url\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "_url"), "html", null, true);
            echo "\" />
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
            // line 16
            echo gettext("ID");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"id\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 24
            echo gettext("Nr");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"nr\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "nr"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 32
            echo gettext("Client");
            echo "</label>

                    <div class=\"formRight\">

                        <input type=\"text\" class=\"client_selector\"
                               placeholder=\"";
            // line 37
            echo gettext("Start typing clients name, email or ID");
            echo "\"
                        ";
            // line 38
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id")) {
                // line 39
                echo "                            ";
                $context["client"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_get", array(0 => array("id" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"))), "method");
                // line 40
                echo "                            value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
                echo "\"
                        ";
            }
            // line 42
            echo "                            />
                        <input type=\"hidden\" name=\"client_id\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
            echo "\" class=\"client_id\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 49
            echo gettext("Currency");
            echo "</label>
                    <div class=\"formRight\">
                        ";
            // line 51
            echo $context["mf"]->getselectbox("currency", $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "currency"), 0, "All currencies");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 57
            echo gettext("Status");
            echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"0\"";
            // line 59
            if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status"))) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("All statuses");
            echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"paid\"";
            // line 60
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status") == "paid")) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Paid");
            echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"unpaid\"";
            // line 61
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status") == "unpaid")) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("Unpaid");
            echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"refunded\"";
            // line 62
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status") == "refunded")) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("Refunded");
            echo "</label>
                        </div>
                    <div class=\"fix\"></div>
                </div>

                ";
            // line 78
            echo "                <div class=\"rowElem\">
                    <label>";
            // line 79
            echo gettext("Issue date");
            echo "</label>
                    <div class=\"formRight moreFields\">
                        <ul>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 82
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                            <li class=\"sep\">-</li>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_to\" value=\"";
            // line 84
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_to"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                        </ul>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <input type=\"hidden\" name=\"show_filter\" value=\"1\" />
                <input type=\"submit\" value=\"";
            // line 91
            echo gettext("Filter");
            echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
        </form>
        <div class=\"fix\"></div>
    </div>
</div>
";
        } else {
            // line 98
            $context["statuses"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_get_statuses");
            // line 99
            echo "<div class=\"stats\">
    <ul>
        <li><a href=\"";
            // line 101
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("status" => "unpaid"));
            echo "\" class=\"count blue\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "unpaid"), "html", null, true);
            echo "</a><span>";
            echo gettext("Unpaid invoices");
            echo "</span></li>
        <li><a href=\"";
            // line 102
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("status" => "refunded"));
            echo "\" class=\"count red\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "refunded"), "html", null, true);
            echo "</a><span>";
            echo gettext("Refunded invoices");
            echo "</span></li>
        <li><a href=\"";
            // line 103
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("status" => "paid"));
            echo "\" class=\"count green\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "paid"), "html", null, true);
            echo "</a><span>";
            echo gettext("Paid invoices");
            echo "</span></li>
        <li class=\"last\"><a href=\"";
            // line 104
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"count grey\" title=\"\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "paid") + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "unpaid")) + $this->getAttribute((isset($context["statuses"]) ? $context["statuses"] : null), "refunded")), "html", null, true);
            echo "</a><span>";
            echo gettext("Total");
            echo "</span></li>
    </ul>
    <div class=\"fix\"></div>
</div>
";
        }
        // line 109
        echo "
";
    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        // line 113
        echo "

<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 117
        echo gettext("Invoices");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 118
        echo gettext("New Invoice");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            ";
        // line 125
        echo $context["mf"]->gettable_search();
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 2%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
                        <td colspan=\"3\">";
        // line 130
        echo gettext("Invoice");
        echo "</td>
                        <td>";
        // line 131
        echo gettext("Amount");
        echo "</td>
                        <td>";
        // line 132
        echo gettext("Issued at");
        echo "</td>
                        <td>";
        // line 133
        echo gettext("Paid at");
        echo "</td>
                        <td>";
        // line 134
        echo gettext("Status");
        echo "</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 139
        $context["invoices"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 140
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoices"]) ? $context["invoices"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 141
            echo "                    <tr>
                        <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\"/></td>
                        <td style=\"width:5%;\"><img src=\"";
            // line 143
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "buyer"), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "buyer"), "email"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "buyer"), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "buyer"), "last_name"), "html", null, true);
            echo "\"/></td>
                        <td><a href=\"";
            // line 144
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
            echo "/manage/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "client"), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "client"), "first_name"), 1, null, "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "client"), "last_name"), 20), "html", null, true);
            echo "</a></td>
                        <td style=\"width:15%;\" title=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie_nr"), "html", null, true);
            echo "</td>
                        <td>";
            // line 146
            echo $context["mf"]->getcurrency_format($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "</td>
                        <td>";
            // line 147
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at"), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 148
            if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at"), "Y-m-d"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                        <td>";
            // line 149
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status"));
            echo "</td>
                        <td class=\"actions\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 151
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/invoice/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"btn14 bb-rm-tr api-link\" href=\"";
            // line 152
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/delete", array("id" => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id")));
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 156
            echo "                    <tr>
                        <td colspan=\"8\">";
            // line 157
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                </tbody>
            </table>

            ";
        // line 163
        $this->env->loadTemplate("partial_batch_delete.phtml")->display(array_merge($context, array("action" => "admin/invoice/batch_delete")));
        // line 164
        echo "            ";
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["invoices"]) ? $context["invoices"] : null), "url" => "invoice")));
        // line 165
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <form method=\"post\" action=\"";
        // line 168
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/prepare");
        echo "\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterInvoicePrepared\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 171
        echo gettext("Client");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" class=\"client_selector\" placeholder=\"";
        // line 173
        echo gettext("Start typing clients name, email or ID");
        echo "\"/>
                            <input type=\"hidden\" name=\"client_id\" value=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "client_id"), "html", null, true);
        echo "\" class=\"client_id\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                     <input type=\"submit\" value=\"";
        // line 179
        echo gettext("Prepare");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
    </div>
</div>

";
    }

    // line 189
    public function block_head($context, array $blocks = array())
    {
        // line 190
        echo "<link href=\"css/jquery-ui.css\" rel=\"stylesheet\" type=\"text/css\" />
<script type=\"text/javascript\" src=\"js/jquery-ui.js\"></script>
";
    }

    // line 194
    public function block_js($context, array $blocks = array())
    {
        // line 195
        echo "<script type=\"text/javascript\">
\$(function() {

\t\$('.client_selector').autocomplete({
        source: function( request, response ) {
            \$.ajax({
                url: bb.restUrl('admin/client/get_pairs'),
                dataType: \"json\",
                data: {
                    per_page: 10,
                    search: request.term
                },
                success: function( data ) {
                    response( \$.map( data.result, function( name, id) {
                        return {
                            label: name,
                            value: id
                        }
                    }));
                }
            });
        },
        minLength: 1,
        select: function( event, ui ) {
            \$(\".client_selector\").val(ui.item.label);
            \$(\".client_id\").val(ui.item.value);
            return false;
        }
    });

});

    function onAfterInvoicePrepared(id) {
        bb.redirect(\"";
        // line 228
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/manage/");
        echo "/\"+id);
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_invoice_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 228,  476 => 195,  473 => 194,  467 => 190,  464 => 189,  452 => 179,  444 => 174,  440 => 173,  435 => 171,  429 => 168,  424 => 165,  421 => 164,  419 => 163,  414 => 160,  405 => 157,  402 => 156,  393 => 152,  387 => 151,  382 => 149,  374 => 148,  370 => 147,  366 => 146,  360 => 145,  350 => 144,  340 => 143,  336 => 142,  333 => 141,  327 => 140,  325 => 139,  317 => 134,  313 => 133,  309 => 132,  305 => 131,  301 => 130,  293 => 125,  283 => 118,  279 => 117,  273 => 113,  270 => 112,  265 => 109,  253 => 104,  245 => 103,  237 => 102,  229 => 101,  225 => 99,  223 => 98,  213 => 91,  199 => 84,  190 => 82,  184 => 79,  181 => 78,  169 => 62,  161 => 61,  153 => 60,  145 => 59,  140 => 57,  131 => 51,  126 => 49,  117 => 43,  114 => 42,  106 => 40,  103 => 39,  101 => 38,  97 => 37,  89 => 32,  80 => 26,  75 => 24,  66 => 18,  61 => 16,  55 => 13,  48 => 9,  45 => 8,  43 => 7,  40 => 6,  34 => 3,  29 => 4,  27 => 2,);
    }
}
