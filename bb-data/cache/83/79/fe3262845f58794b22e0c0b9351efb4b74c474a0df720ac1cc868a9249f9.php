<?php

/* mod_invoice_invoice.phtml */
class __TwigTemplate_8379fe3262845f58794b22e0c0b9351efb4b74c474a0df720ac1cc868a9249f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
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
        // line 3
        $context["nr"] = ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie") . sprintf("%05s", $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "nr")));
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Proforma invoice");
    }

    // line 8
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 9
        echo "    <li><a href=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/invoice");
        echo "\">";
        echo gettext("Invoices");
        echo "</a> <span class=\"divider\">/</span></li>
    <li class=\"active\">";
        // line 10
        echo gettext("Invoice");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["nr"]) ? $context["nr"] : null), "html", null, true);
        echo "</li>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
";
        // line 15
        $context["seller"] = $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "seller");
        // line 16
        $context["buyer"] = $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "buyer");
        // line 17
        $context["company"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_company");
        // line 18
        echo "
";
        // line 19
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "unpaid")) {
            // line 20
            echo "<div class=\"row\">
<article class=\"span12 data-block decent\">
<div class=\"data-container\">


<header>
    <h2>";
            // line 26
            echo gettext("Payment methods");
            echo "</h2>
    <p>";
            // line 27
            echo gettext("Please choose payment type and pay for your chosen products.");
            echo "</p>
</header>
<form method=\"post\" action=\"";
            // line 29
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/guest/invoice/payment");
            echo "\" class=\"api-form\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter(("invoice/" . $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash")), array("auto_redirect" => 1));
            echo "\">
    <input type=\"hidden\" name=\"hash\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
            echo "\"/>
    ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "invoice_gateways"));
            foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                // line 32
                echo "    ";
                if (twig_in_filter($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"), $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "accepted_currencies"))) {
                    // line 33
                    echo "    ";
                    $context["banklink"] = $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice/banklink");
                    // line 34
                    echo "    <button type=\"button\"  class=\"logo-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "code"), "html", null, true);
                    echo " hover-popover\" type=\"radio\" name=\"gateway_id\" gateway_id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "id"), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo gettext("Pay with");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "title"), "html", null, true);
                    echo "\" onclick=\"window.location.replace('";
                    echo twig_escape_filter($this->env, (isset($context["banklink"]) ? $context["banklink"] : null), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "id"), "html", null, true);
                    echo "')\")></button>
    ";
                }
                // line 36
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    <input type=\"hidden\" name=\"gateway_id\" id=\"gateway_id\">
</form>
</div>
</article>
</div>

";
        }
        // line 44
        echo "
<div class=\"row\">
    <article class=\"span12 data-block\">
        <div class=\"data-container\">

        <header>
            <h1>";
        // line 50
        echo gettext("Invoice");
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["nr"]) ? $context["nr"] : null), "html", null, true);
        echo "</h1><br/>
            ";
        // line 51
        echo gettext("You can print this invoice or export it to PDF file by clicking on corresponding button.");
        // line 52
        echo "            <ul class=\"data-header-actions\">
                <li><a href=\"";
        // line 53
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice/pdf");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
        echo "\" class=\"btn btn-alt btn-inverse\">";
        echo gettext("PDF");
        echo "</a></li>
                <li><a href=\"";
        // line 54
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice/print");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-alt btn-inverse\">";
        echo gettext("Print");
        echo "</a></li>
            </ul>
        </header>

            <section>
                <div class=\"row-fluid\">
                    <div class=\"span4\">
                        ";
        // line 61
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo_url")) {
            // line 62
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "logo_url"), "html", null, true);
            echo "\" alt=\"Logo\">
                        ";
        }
        // line 64
        echo "                        <dl class=\"dl-horizontal\">
                            <dt>";
        // line 65
        echo gettext("Invoice number");
        echo ":</dt>
                            <dd>";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["nr"]) ? $context["nr"] : null), "html", null, true);
        echo "</dd>
                            <dt>";
        // line 67
        echo gettext("Invoice date");
        echo ":</dt>
                            <dd>";
        // line 68
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")) {
            // line 69
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")), "html", null, true);
            echo "
                                ";
        } else {
            // line 71
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at")), "html", null, true);
            echo "
                                ";
        }
        // line 73
        echo "                            </dd>
                            <dt>";
        // line 74
        echo gettext("Due date");
        echo ":</dt>
                            <dd>";
        // line 75
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "due_at")) {
            // line 76
            echo "                                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "due_at")), "html", null, true);
            echo "
                                ";
        } else {
            // line 78
            echo "                                -----
                                ";
        }
        // line 80
        echo "                            </dd>
                            <dt>";
        // line 81
        echo gettext("Invoice status");
        echo ":</dt>
                            <dd>
                                <span class=\"label ";
        // line 83
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "paid")) {
            echo " label-success";
        } elseif (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status") == "unpaid")) {
            echo "label-warning";
        }
        echo "\">
                                      ";
        // line 84
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status")), "html", null, true);
        echo "
                                </span>
                            </dd>
                        </dl>
                    </div>
                    <div class=\"span4\">
                        <div class=\"well small\">
                            <h4>";
        // line 91
        echo gettext("Company");
        echo "</h4>
                            <dl class=\"dl-horizontal\">
                                ";
        // line 93
        if ($this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "company")) {
            // line 94
            echo "                                <dt>";
            echo gettext("Name");
            echo ":</dt>
                                <dd>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "company"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 97
        echo "
                                ";
        // line 98
        if ($this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "company_vat")) {
            // line 99
            echo "                                <dt>";
            echo gettext("VAT");
            echo ":</dt>
                                <dd>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "company_vat"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 102
        echo "
                                ";
        // line 103
        if ($this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "address")) {
            // line 104
            echo "                                <dt>";
            echo gettext("Address");
            echo ":</dt>
                                <dd>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "address"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 107
        echo "
                                ";
        // line 108
        if ($this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "phone")) {
            // line 109
            echo "                                <dt>";
            echo gettext("Phone");
            echo ":</dt>
                                <dd>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "phone"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 112
        echo "
                                ";
        // line 113
        if ($this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "email")) {
            // line 114
            echo "                                <dt>";
            echo gettext("Email");
            echo ":</dt>
                                <dd>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "email"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 117
        echo "
                                ";
        // line 118
        if ($this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "account_number")) {
            // line 119
            echo "                                <dt>";
            echo gettext("Account");
            echo ":</dt>
                                <dd>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "account_number"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 122
        echo "
                                ";
        // line 123
        if ($this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "note")) {
            // line 124
            echo "                                <dt>";
            echo gettext("Note");
            echo ":</dt>
                                <dd>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["seller"]) ? $context["seller"] : null), "note"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 127
        echo "                            </dl>

                        </div>
                    </div>


                    <div class=\"span4\">
                        <div class=\"well small\">
                            <h4>";
        // line 135
        echo gettext("Billing & Delivery address");
        echo "</h4>
                            <dl class=\"dl-horizontal\">
                                ";
        // line 137
        if (($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "first_name") || $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "last_name"))) {
            // line 138
            echo "                                <dt>";
            echo gettext("Name");
            echo ":</dt>
                                <dd>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "last_name"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 141
        echo "
                                ";
        // line 142
        if ($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company")) {
            // line 143
            echo "                                <dt>";
            echo gettext("Company");
            echo ":</dt>
                                <dd>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 146
        echo "
                                ";
        // line 147
        if ($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company_number")) {
            // line 148
            echo "                                <dt>";
            echo gettext("Company number");
            echo ":</dt>
                                <dd>";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company_number"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 151
        echo "
                                ";
        // line 152
        if ($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company_vat")) {
            // line 153
            echo "                                <dt>";
            echo gettext("Company VAT");
            echo ":</dt>
                                <dd>";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "company_vat"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 156
        echo "
                                ";
        // line 157
        if ($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "address")) {
            // line 158
            echo "                                <dt>";
            echo gettext("Address");
            echo ":</dt>
                                <dd>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "address"), "html", null, true);
            echo "</dd>
                                <dd>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "city"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "state"), "html", null, true);
            echo "</dd>
                                <dd>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "zip"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "country"), array(), "array"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 163
        echo "
                                ";
        // line 164
        if ($this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "phone")) {
            // line 165
            echo "                                <dt>";
            echo gettext("Phone");
            echo ":</dt>
                                <dd>";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["buyer"]) ? $context["buyer"] : null), "phone"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 168
        echo "                            </dl>
                        </div>
                    </div>
                </div>

                ";
        // line 173
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "text_1")) {
            // line 174
            echo "                    <div class=\"well\">
                        ";
            // line 175
            echo twig_markdown_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "text_1"));
            echo "
                    </div>
                ";
        }
        // line 178
        echo "
                <table class=\"table table-striped table-bordered table-condensed table-hover\">
                    <thead>
                        <tr>
                            <th>";
        // line 182
        echo gettext("#");
        echo "</th>
                            <th>";
        // line 183
        echo gettext("Title");
        echo "</th>
                            <th>";
        // line 184
        echo gettext("Price");
        echo "</th>
                            <th>";
        // line 185
        echo gettext("Total");
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 189
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "lines"));
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            // line 190
            echo "                        <tr>
                            <td>";
            // line 191
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 1), "html", null, true);
            echo ".</td>
                            <td>
                                ";
            // line 193
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "order_id")) {
                // line 194
                echo "                                <a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/order/service");
                echo "/manage/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "order_id"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "</a>
                                ";
            } else {
                // line 196
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "
                                ";
            }
            // line 198
            echo "                            </td>
                            <td>
                                ";
            // line 200
            echo twig_money($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "
                                ";
            // line 201
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity") > 1)) {
                // line 202
                echo "                                x ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity"), "html", null, true);
                echo " ";
                // line 203
                echo "                                ";
            }
            // line 204
            echo "                            </td>
                            <td >";
            // line 205
            echo twig_money($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "</td>
                        </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                    </tbody>

                </table>

                <div class=\"row-fluid\">
                    <div class=\"span4 offset8\">
                        <table class=\"table table-bordered table-striped\">
                            ";
        // line 216
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "tax") > 0)) {
            // line 217
            echo "                            <tr>
                                <td>";
            // line 218
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxname"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "taxrate"), "html", null, true);
            echo "%</td>
                                <td>";
            // line 219
            echo twig_money($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "tax"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "</td>
                            </tr>
                            ";
        }
        // line 222
        echo "                            ";
        if (($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "discount") > 0)) {
            // line 223
            echo "                            <tr>
                                <td>";
            // line 224
            echo gettext("Discount");
            echo "</td>
                                <td>";
            // line 225
            echo twig_money($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "discount"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
            echo "</td>
                            </tr>
                            ";
        }
        // line 228
        echo "
                            <tr>
                                <td><strong>";
        // line 230
        echo gettext("Total");
        echo "</strong></td>
                                <td><strong>";
        // line 231
        echo twig_money($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
        echo "</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>

                ";
        // line 237
        if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "text_2")) {
            // line 238
            echo "                    <div class=\"well\">
                        ";
            // line 239
            echo twig_markdown_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "text_2"));
            echo "
                    </div>
                ";
        }
        // line 242
        echo "            </section>
        </div>
    </article>
</div>
";
    }

    // line 248
    public function block_js($context, array $blocks = array())
    {
        // line 249
        echo "<script type=\"text/javascript\">
    \$(function() {
        \$(\".hover-popover\").tooltip({
            placement: 'top'
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_invoice_invoice.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  674 => 249,  671 => 248,  663 => 242,  657 => 239,  654 => 238,  652 => 237,  643 => 231,  639 => 230,  635 => 228,  629 => 225,  625 => 224,  622 => 223,  619 => 222,  613 => 219,  607 => 218,  604 => 217,  602 => 216,  593 => 209,  583 => 205,  580 => 204,  577 => 203,  573 => 202,  571 => 201,  567 => 200,  563 => 198,  557 => 196,  547 => 194,  545 => 193,  540 => 191,  537 => 190,  533 => 189,  526 => 185,  522 => 184,  518 => 183,  514 => 182,  508 => 178,  502 => 175,  499 => 174,  497 => 173,  490 => 168,  485 => 166,  480 => 165,  478 => 164,  475 => 163,  468 => 161,  462 => 160,  458 => 159,  453 => 158,  451 => 157,  448 => 156,  443 => 154,  438 => 153,  436 => 152,  433 => 151,  428 => 149,  423 => 148,  421 => 147,  418 => 146,  413 => 144,  408 => 143,  406 => 142,  403 => 141,  396 => 139,  391 => 138,  389 => 137,  384 => 135,  374 => 127,  369 => 125,  364 => 124,  362 => 123,  359 => 122,  354 => 120,  349 => 119,  347 => 118,  344 => 117,  339 => 115,  334 => 114,  332 => 113,  329 => 112,  324 => 110,  319 => 109,  317 => 108,  314 => 107,  309 => 105,  304 => 104,  302 => 103,  299 => 102,  294 => 100,  289 => 99,  287 => 98,  284 => 97,  279 => 95,  274 => 94,  272 => 93,  267 => 91,  257 => 84,  249 => 83,  244 => 81,  241 => 80,  237 => 78,  231 => 76,  229 => 75,  225 => 74,  222 => 73,  216 => 71,  210 => 69,  208 => 68,  204 => 67,  200 => 66,  196 => 65,  193 => 64,  187 => 62,  185 => 61,  171 => 54,  163 => 53,  160 => 52,  158 => 51,  152 => 50,  144 => 44,  135 => 37,  129 => 36,  111 => 34,  108 => 33,  105 => 32,  101 => 31,  97 => 30,  91 => 29,  86 => 27,  82 => 26,  74 => 20,  72 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  60 => 14,  57 => 13,  49 => 10,  42 => 9,  39 => 8,  33 => 5,  28 => 3,  26 => 2,);
    }
}
