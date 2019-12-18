<?php

/* mod_orderbutton_checkout.phtml */
class __TwigTemplate_b82604f8a6348f70a5aad57b060479dee01247df147cfc8034a8ea5d1ce238fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["cart"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "cart_get");
        // line 2
        echo "<div class=\"accordion-group\">
    <div class=\"accordion-heading\">
        <a class=\"accordion-toggle\" href=\"#checkout\" data-parent=\"#accordion1\" data-toggle=\"collapse\"><span class=\"awe-shopping-cart\"></span> ";
        // line 4
        echo gettext("Cart");
        echo " <span class=\"label label-warning pull-right\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items")), "html", null, true);
        echo "</span></a>
    </div>
    ";
        // line 6
        if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items")) {
            // line 7
            echo "    <div id=\"checkout\" class=\"accordion-body collapse ";
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "checkout") && (isset($context["client"]) ? $context["client"] : null))) {
                echo "in";
            }
            echo "\">
        <div class=\"accordion-inner\" id=\"checkout-inner\">

            <table class=\"table table-striped table-bordered table-condensed\">
                <thead>
                <tr>
                    <th>";
            // line 13
            echo gettext("Product");
            echo "</th>
                    <th>";
            // line 14
            echo gettext("Price");
            echo "</th>
                    <th style=\"width: 3%; text-align: center\"></th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "items"));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 20
                echo "                <tr>
                    <td>
                        ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                echo "
                        ";
                // line 23
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity") > 1)) {
                    // line 24
                    echo "                        x ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity"), "html", null, true);
                    echo "
                        ";
                }
                // line 26
                echo "
                        ";
                // line 27
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "period")) {
                    // line 28
                    echo "                            (";
                    echo twig_period_title($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "period"));
                    echo ")
                        ";
                }
                // line 30
                echo "                    </td>
                    <td>
                        ";
                // line 32
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "discount_price")) {
                    // line 33
                    echo "                            <del>";
                    echo twig_money_convert($this->env, ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price") * $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity")));
                    echo "</del>
                            <strong class=\"text-success\">";
                    // line 34
                    echo twig_money_convert($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price") * $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity")) - $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "discount_price")));
                    echo "</strong>
                        ";
                } else {
                    // line 36
                    echo "                            ";
                    echo twig_money_convert($this->env, ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "price") * $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "quantity")));
                    echo "
                        ";
                }
                // line 38
                echo "                    </td>
                    <td><button data-cart-item-id=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
                echo "\" class=\"btn btn-inverse btn-mini remove-cart-item\" title=\"";
                echo gettext("Remove item");
                echo "\"><strong><i class=\"awe-remove\"></i></strong></button></td>
                </tr>

                ";
                // line 42
                if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show_custom_form_values")) {
                    // line 43
                    echo "                <tr>
                    <td>
                        ";
                    // line 45
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "form_id") && $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "formbuilder")), "method"))) {
                        // line 46
                        echo "                        ";
                        $context["form"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "formbuilder_get", array(0 => array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "form_id"))), "method");
                        // line 47
                        echo "                        ";
                        // line 48
                        echo "                        <div class=\"well\">
                            <dl class=\"dl-horizontal\">
                                ";
                        // line 50
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["item"]) ? $context["item"] : null));
                        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                            // line 51
                            echo "                                    ";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields"));
                            foreach ($context['_seq'] as $context["_key"] => $context["form_field"]) {
                                // line 52
                                echo "                                        ";
                                if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : null)))) {
                                    // line 53
                                    echo "                                            ";
                                    if (($this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "name") == (isset($context["field"]) ? $context["field"] : null))) {
                                        // line 54
                                        echo "                                            <dt>
                                                ";
                                        // line 55
                                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "label"), "html", null, true);
                                        echo "
                                            </dt>
                                            <dd>
                                                ";
                                        // line 58
                                        if (($this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "type") == "checkbox")) {
                                            // line 59
                                            echo "                                                    ";
                                            $context['_parent'] = (array) $context;
                                            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
                                            foreach ($context['_seq'] as $context["_key"] => $context["selection"]) {
                                                // line 60
                                                echo "                                                        ";
                                                $context['_parent'] = (array) $context;
                                                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "options"));
                                                foreach ($context['_seq'] as $context["field_key"] => $context["field_value"]) {
                                                    // line 61
                                                    echo "                                                            ";
                                                    if (((isset($context["field_value"]) ? $context["field_value"] : null) == (isset($context["selection"]) ? $context["selection"] : null))) {
                                                        // line 62
                                                        echo "                                                                ";
                                                        echo twig_escape_filter($this->env, (isset($context["field_key"]) ? $context["field_key"] : null), "html", null, true);
                                                        echo "
                                                            ";
                                                    }
                                                    // line 64
                                                    echo "                                                        ";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['field_key'], $context['field_value'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 65
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selection'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 66
                                            echo "                                                ";
                                        } elseif ((($this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "type") == "select") || ($this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "type") == "radio"))) {
                                            // line 67
                                            echo "                                                    ";
                                            $context['_parent'] = (array) $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_field"]) ? $context["form_field"] : null), "options"));
                                            foreach ($context['_seq'] as $context["field_key"] => $context["field_value"]) {
                                                // line 68
                                                echo "                                                        ";
                                                if (((isset($context["field_value"]) ? $context["field_value"] : null) == (isset($context["value"]) ? $context["value"] : null))) {
                                                    // line 69
                                                    echo "                                                            ";
                                                    echo twig_escape_filter($this->env, (isset($context["field_key"]) ? $context["field_key"] : null), "html", null, true);
                                                    echo "
                                                        ";
                                                }
                                                // line 71
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['field_key'], $context['field_value'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 72
                                            echo "                                                ";
                                        } else {
                                            // line 73
                                            echo "                                                    ";
                                            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                                            echo "
                                                ";
                                        }
                                        // line 75
                                        echo "                                            </dd>
                                            ";
                                    }
                                    // line 77
                                    echo "                                        ";
                                }
                                // line 78
                                echo "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 79
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 80
                        echo "                            </dl>
                        </div>
                        ";
                    }
                    // line 83
                    echo "                    </td>
                    <td></td>
                </tr>
                ";
                }
                // line 87
                echo "
                ";
                // line 88
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setup_price") != 0)) {
                    // line 89
                    echo "                <tr>
                    <td>";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title"), "html", null, true);
                    echo " ";
                    echo gettext("setup");
                    echo "</td>
                    <td>
                        ";
                    // line 92
                    if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "discount_setup")) {
                        // line 93
                        echo "                        <del>";
                        echo twig_money_convert($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setup_price"));
                        echo "</del>
                        ";
                        // line 94
                        echo twig_money_convert($this->env, ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setup_price") - $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "discount_setup")));
                        echo "
                        ";
                    } else {
                        // line 96
                        echo "                        ";
                        echo twig_money_convert($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "setup_price"));
                        echo "</td>
                    ";
                    }
                    // line 98
                    echo "                </tr>
                ";
                }
                // line 100
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                </tbody>
            </table>

            <div class=\"row-fluid\">
                <div class=\"span6\">
                    ";
            // line 106
            if ((!$this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "promocode"))) {
                // line 107
                echo "                    <a href=\"#\" id=\"show-promo-field\">";
                echo gettext("Have coupon code?");
                echo "</a>
                    ";
            }
            // line 109
            echo "
                    <form action=\"guest/cart/apply_promo\" method=\"post\" class=\"well\" id=\"apply-promo\" data-api-reload=\"1\" ";
            // line 110
            if ((!$this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "promocode"))) {
                echo "style=\"display:none\"";
            }
            echo ">
                        <div class=\"control-group\">
                            <div class=\"form-controls\">
                                <div class=\"input-append\">
                                    <input class=\"span8\" type=\"text\" name=\"promocode\" id=\"promocode\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "promocode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "promocode"), $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "promocode"))) : ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "promocode"))), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["promo"]) ? $context["promo"] : null), "required")) {
                echo "required=\"required\"";
            }
            echo " placeholder=\"";
            echo gettext("Enter code");
            echo "\">
                                    ";
            // line 115
            if ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "promocode")) {
                // line 116
                echo "                                    <button class=\"btn\" id=\"remove-promo\" href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/guest/cart/remove_promo");
                echo "\" type=\"button\" data-api-reload=\"1\">";
                echo gettext("Remove");
                echo "</button>
                                    ";
            } else {
                // line 118
                echo "                                    <button class=\"btn\" type=\"submit\">";
                echo gettext("Apply");
                echo "</button>
                                    ";
            }
            // line 120
            echo "                                </div>
                            </div>
                        </div>
                        ";
            // line 131
            echo "                    </form>
                </div>

                <div class=\"span6\">
                    <table class=\"table table-bordered table-striped\">

                        ";
            // line 137
            if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "discount") > 0)) {
                // line 138
                echo "                        <tr>
                            <td><strong>";
                // line 139
                echo gettext("Subtotal:");
                echo "</strong></td>
                            <td><strong>";
                // line 140
                echo twig_money_convert($this->env, ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total") + $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "discount")));
                echo "</strong></td>
                        </tr>
                        <tr>
                            <td><strong>";
                // line 143
                echo gettext("Discount:");
                echo "</strong></td>
                            <td><strong>- ";
                // line 144
                echo twig_money_convert($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "discount"));
                echo "</strong></td>
                        </tr>
                        ";
            }
            // line 147
            echo "
                        ";
            // line 148
            $context["tax_amount"] = 0;
            // line 149
            echo "                        ";
            if ($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_is_taxable")) {
                // line 150
                echo "                        ";
                $context["tax_rate"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_tax_rate");
                // line 151
                echo "                        ";
                $context["tax_amount"] = (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total") * (isset($context["tax_rate"]) ? $context["tax_rate"] : null)) / 100);
                // line 152
                echo "                        <tr>
                            <td><strong>";
                // line 153
                echo gettext("VAT");
                echo " (";
                echo twig_escape_filter($this->env, (isset($context["tax_rate"]) ? $context["tax_rate"] : null), "html", null, true);
                echo "%) :</strong></td>
                            <td><strong>";
                // line 154
                echo twig_money_convert($this->env, (isset($context["tax_amount"]) ? $context["tax_amount"] : null));
                echo "</strong></td>
                        </tr>
                        ";
            }
            // line 157
            echo "                        <tr>
                            <td><strong>";
            // line 158
            echo gettext("Total:");
            echo "</strong></td>
                            <td><strong>";
            // line 159
            echo twig_money_convert($this->env, ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total") + (isset($context["tax_amount"]) ? $context["tax_amount"] : null)));
            echo "</strong></td>
                        </tr>

                    </table>

                    <form method=\"post\" action=\"client/cart/checkout\" class=\"form-horizontal\" id=\"checkout-form\" onsubmit=\"return false;\">
                        <fieldset>
                            ";
            // line 166
            $context["enough_in_balance"] = ($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_balance_get_total") >= $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total"));
            // line 167
            echo "                            ";
            if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "total") && (!(isset($context["enough_in_balance"]) ? $context["enough_in_balance"] : null)))) {
                // line 168
                echo "                            <div class=\"control-group\">
                                ";
                // line 169
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "invoice_gateways"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                    // line 170
                    echo "                                ";
                    if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "currency"), "code"), $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "accepted_currencies"))) {
                        // line 171
                        echo "                                <label class=\"radio\" for=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "id"), "html", null, true);
                        echo "\">
                                    <input type=\"radio\" name=\"gateway_id\" id=";
                        // line 172
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "id"), "html", null, true);
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "id"), "html", null, true);
                        echo "\" ";
                        echo (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) ? ("checked") : (""));
                        echo "/>
                                    ";
                        // line 173
                        echo gettext("Pay by");
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gtw"]) ? $context["gtw"] : null), "title"), "html", null, true);
                        echo "
                                </label>
                                ";
                    }
                    // line 176
                    echo "                                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "                            </div>
                            ";
            }
            // line 179
            echo "                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    ";
            // line 181
            if ((isset($context["enough_in_balance"]) ? $context["enough_in_balance"] : null)) {
                // line 182
                echo "                                        <p>";
                echo gettext("Total amount will be deducted from account balance");
                echo "</p>
                                    ";
            }
            // line 184
            echo "                                    <button class=\"btn btn-primary btn-large\" type=\"submit\">";
            echo gettext("Checkout");
            echo "</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 195
        echo "</div>
<script type=\"text/javascript\">
    \$('#remove-promo').click(function(e){
        e.preventDefault();
        bb.post(\"guest/cart/remove_promo\", {}, function(r){
                bb.msg(\"";
        // line 200
        echo gettext("Promo code was removed");
        echo "\");
                location.reload(false);
        });

    });

    \$('.remove-cart-item').click(function(e){
        e.preventDefault();
        var btn = \$(this);
        if (confirm('";
        // line 209
        echo gettext("Are you sure you want to remove this item from cart?");
        echo "')){
            var item_id = \$(btn).attr('data-cart-item-id');
            bb.post(\"guest/cart/remove_item\", {id: item_id}, function(r){
                bb.msg(\"";
        // line 212
        echo gettext("Item was removed from cart");
        echo "\");
                location.reload(false);
            });
        }


    });
</script>";
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_checkout.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 212,  551 => 209,  539 => 200,  532 => 195,  517 => 184,  511 => 182,  509 => 181,  505 => 179,  501 => 177,  487 => 176,  479 => 173,  471 => 172,  466 => 171,  463 => 170,  446 => 169,  443 => 168,  440 => 167,  438 => 166,  428 => 159,  424 => 158,  421 => 157,  415 => 154,  409 => 153,  406 => 152,  403 => 151,  400 => 150,  397 => 149,  395 => 148,  392 => 147,  386 => 144,  382 => 143,  376 => 140,  372 => 139,  369 => 138,  367 => 137,  359 => 131,  354 => 120,  348 => 118,  340 => 116,  338 => 115,  328 => 114,  319 => 110,  316 => 109,  310 => 107,  308 => 106,  301 => 101,  295 => 100,  291 => 98,  285 => 96,  280 => 94,  275 => 93,  273 => 92,  266 => 90,  263 => 89,  261 => 88,  258 => 87,  252 => 83,  247 => 80,  241 => 79,  235 => 78,  228 => 75,  222 => 73,  219 => 72,  207 => 69,  204 => 68,  199 => 67,  196 => 66,  190 => 65,  184 => 64,  178 => 62,  175 => 61,  165 => 59,  157 => 55,  154 => 54,  151 => 53,  148 => 52,  143 => 51,  139 => 50,  135 => 48,  133 => 47,  122 => 42,  105 => 36,  95 => 33,  93 => 32,  89 => 30,  83 => 28,  81 => 27,  72 => 24,  70 => 23,  66 => 22,  50 => 14,  46 => 13,  171 => 53,  163 => 58,  159 => 47,  153 => 44,  144 => 41,  141 => 40,  136 => 38,  131 => 37,  128 => 45,  112 => 30,  106 => 28,  100 => 34,  96 => 24,  90 => 23,  78 => 26,  75 => 20,  71 => 19,  68 => 18,  63 => 16,  58 => 19,  54 => 13,  40 => 9,  32 => 6,  30 => 6,  21 => 2,  62 => 20,  51 => 12,  48 => 10,  44 => 9,  36 => 6,  24 => 3,  22 => 2,  290 => 179,  278 => 170,  253 => 148,  236 => 138,  232 => 77,  213 => 71,  186 => 97,  170 => 60,  164 => 80,  158 => 77,  155 => 45,  152 => 75,  150 => 43,  138 => 39,  132 => 61,  130 => 46,  127 => 59,  124 => 43,  121 => 34,  119 => 33,  116 => 32,  114 => 39,  111 => 38,  109 => 52,  104 => 49,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 11,  45 => 12,  38 => 8,  34 => 7,  29 => 4,  27 => 4,  25 => 4,  19 => 1,);
    }
}
