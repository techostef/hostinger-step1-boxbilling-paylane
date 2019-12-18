<?php

/* mod_order_manage.phtml */
class __TwigTemplate_43ff94b2a98d74b73d40c937e02ed523df2c1a74aaec72edb53f1f1580e38498 extends Twig_Template
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
        // line 4
        $context["addons"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_addons", array(0 => array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
        // line 11
        $context["service_partial"] = (("mod_service" . $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "service_type")) . "_manage.phtml");
        // line 12
        $context["upgradables"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_upgradables", array(0 => array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 7
        echo "<li><a href=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("service");
        echo "\">";
        echo gettext("Orders");
        echo "</a><span class=\"divider\">/</span></li>
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"row\">
    <article class=\"";
        // line 17
        if ((twig_length_filter($this->env, (isset($context["addons"]) ? $context["addons"] : null)) > 0)) {
            echo "span6";
        } else {
            echo "span12";
        }
        echo " data-block\">
        <div class=\"data-container\">
            <header>
                <h1>";
        // line 20
        echo gettext("Service details");
        echo "</h1>
                <p>";
        // line 21
        echo gettext("All information about your service");
        echo "</p>
            </header>
            <section>
                <table class=\"table table-striped table-bordered table-condensed\">
                    <tbody>
                    <tr>
                        <td><label>";
        // line 27
        echo gettext("Order");
        echo "</label></td>
                        <td>#";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 32
        echo gettext("Product name");
        echo "</label></td>
                        <td><strong>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "</strong></td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 37
        echo gettext("Payment amount");
        echo "</label></td>
                        <td>";
        // line 38
        echo twig_money($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "total"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency"));
        echo "</td>
                    </tr>

                    ";
        // line 41
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period")) {
            // line 42
            echo "                    <tr>
                        <td><label>";
            // line 43
            echo gettext("Billing cycle");
            echo "</label></td>
                        <td>";
            // line 44
            echo twig_period_title($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period"));
            echo "</td>
                    </tr>
                    ";
        }
        // line 47
        echo "
                    <tr>
                        <td><label>";
        // line 49
        echo gettext("Order status");
        echo "</label></td>
                        <td><span class=\"label ";
        // line 50
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "active")) {
            echo "label-success";
        } elseif (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "pending_setup")) {
            echo "label-warning";
        }
        echo "\">";
        echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status"));
        echo "</span></td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 54
        echo gettext("Order created");
        echo "</label></td>
                        <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "created_at")), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 59
        echo gettext("Activated at");
        echo "</label></td>
                        <td>";
        // line 60
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "activated_at")), "html", null, true);
        } else {
            echo "-";
        }
        echo "</td>
                    </tr>

                    ";
        // line 63
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period")) {
            // line 64
            echo "                    <tr>
                        <td><label>";
            // line 65
            echo gettext("Renewal date");
            echo " ";
            if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")) {
                echo " in ";
                echo twig_escape_filter($this->env, twig_daysleft_filter($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")), "html", null, true);
                echo " day(s) ";
            }
            echo "</label></td>
                        <td>";
            // line 66
            if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                    </tr>
                    ";
        }
        // line 69
        echo "
                    ";
        // line 70
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "notes")) {
            // line 71
            echo "                    <tr>
                        <td><label>";
            // line 72
            echo gettext("Order notes");
            echo "</label></td>
                        <td>";
            // line 73
            echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "notes"));
            echo "</td>
                    </tr>
                    ";
        }
        // line 76
        echo "
                    ";
        // line 77
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "active_tickets") > 0)) {
            // line 78
            echo "                    <tr>
                        <td><label>";
            // line 79
            echo gettext("Active support tickets");
            echo "</label></td>
                        <td>
                            <div class=\"num\"><a href=\"";
            // line 81
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support");
            echo "\" class=\"redNum\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "active_tickets"), "html", null, true);
            echo "</a></div>
                            ";
            // line 83
            echo "                            ";
            // line 84
            echo "                        </td>
                    </tr>
                    ";
        }
        // line 87
        echo "                    </tbody>

                    <tfoot>
                    <tr>
                        <td colspan=\"2\">

                            ";
        // line 93
        if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period")) {
            // line 94
            echo "                            <button class=\"btn btn-primary btn-small\" type=\"button\" id=\"renewal-button\">";
            echo gettext("Renew now");
            echo "</button>
                            ";
        }
        // line 96
        echo "
                            ";
        // line 97
        if ((isset($context["upgradables"]) ? $context["upgradables"] : null)) {
            // line 98
            echo "                            <a href=\"#submit-upgrade-ticket\" class=\"btn btn-success btn-small\" type=\"button\" id=\"request-upgrade\" data-toggle=\"modal\">";
            echo gettext("Request Upgrade");
            echo "</a>
                            ";
        }
        // line 100
        echo "
                            <a href=\"#submit-ticket\" class=\"btn btn-info btn-small\" type=\"button\" id=\"open-ticket\" data-toggle=\"modal\">";
        // line 101
        echo gettext("Open ticket");
        echo "</a>
                            
                            ";
        // line 103
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "active")) {
            // line 104
            echo "                            <a href=\"#submit-cancellation-ticket\" class=\"btn btn-primary btn-warning btn-small\" type=\"button\" data-toggle=\"modal\">";
            echo gettext("Request Cancellation");
            echo "</a>
                            ";
        }
        // line 106
        echo "
                        </td>
                    </tr>
                    </tfoot>
                </table>
                <p><a class=\"btn btn-small\" href=\"";
        // line 111
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/order/service");
        echo "\">";
        echo gettext("Back to services");
        echo "</a></p>
            </section>
        </div>
    </article>
    ";
        // line 115
        if ((twig_length_filter($this->env, (isset($context["addons"]) ? $context["addons"] : null)) < 1)) {
            echo "</div>";
        }
        // line 116
        echo "
";
        // line 117
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "group_master") == 1)) {
            // line 118
            if ((twig_length_filter($this->env, (isset($context["addons"]) ? $context["addons"] : null)) > 0)) {
                // line 119
                echo "    <article class=\"span6 data-block\">
        <div class=\"data-container\">
            <header>
                <h1>";
                // line 122
                echo gettext("Addons");
                echo "</h1>
                <p>";
                // line 123
                echo gettext("Addons you have ordered with this service");
                echo "</p>
            </header>
            <section>

                <table class=\"table table-striped table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th>";
                // line 130
                echo gettext("Product/Service");
                echo "</th>
                        <th>";
                // line 131
                echo gettext("Price");
                echo "</th>
                        <th>";
                // line 132
                echo gettext("Billing Cycle");
                echo "</th>
                        <th>";
                // line 133
                echo gettext("Next due date");
                echo "</th>
                        <th>";
                // line 134
                echo gettext("Status");
                echo "</th>
                        <th>&nbsp</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
                // line 139
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["addons"]) ? $context["addons"] : null));
                foreach ($context['_seq'] as $context["i"] => $context["addon"]) {
                    // line 140
                    echo "                    <tr class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                    echo "\">
                        <td>";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "title"), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 142
                    echo twig_money($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "total"), $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "currency"));
                    echo "</td>
                        <td>";
                    // line 143
                    echo twig_period_title($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "period"));
                    echo "</td>
                        <td>";
                    // line 144
                    if ($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "expires_at")) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "expires_at")), "html", null, true);
                    } else {
                        echo "-";
                    }
                    echo "</td>
                        <td><span class=\"label ";
                    // line 145
                    if (($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "status") == "active")) {
                        echo "label-success";
                    } elseif (($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "status") == "pending_setup")) {
                        echo "label-warning";
                    }
                    echo "\">";
                    echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "status"));
                    echo "</span></td>
                        <td class=\"actions\"><a class=\"bb-button\" href=\"";
                    // line 146
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/order/service/manage");
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                    echo "\"><span class=\"dark-icon i-drag\"></span></a></td>
                    </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['addon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "                    </tbody>
                </table>
            </section>
</div>
</article>
</div>
";
            }
        }
        // line 157
        echo "

<div id=\"submit-ticket\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h3>
            ";
        // line 163
        echo gettext("Submit new support ticket");
        // line 164
        echo "        </h3>
    </div>
    <div class=\"modal-body\">
        <form action=\"\" method=\"post\" style=\"background: none\" class=\"open-ticket\">
            <fieldset>
                <div class=\"control-group\">
                    <label>";
        // line 170
        echo gettext("Help desk");
        echo ": </label>
                    <div class=\"controls\">
                    ";
        // line 172
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "support_helpdesk_id"), 1);
        echo "
                    </div>
                </div>

                <div class=\"control-group\">
                    <label>";
        // line 177
        echo gettext("Subject");
        echo ": </label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"subject\" value=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "subject"));
        echo "\" required=\"required\" class=\"span5\"/>
                    </div>
                </div>

                <div class=\"control-group\">
                    <label>";
        // line 184
        echo gettext("Message");
        echo ": </label>
                    <div class=\"controls\">
                        <textarea name=\"content\" cols=\"5\" rows=\"5\" required=\"required\"  class=\"span5\">";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "content"));
        echo "</textarea>
                    </div>
                </div>

                <input type=\"hidden\" name=\"rel_type\" value=\"order\">
                <input type=\"hidden\" name=\"rel_id\" value=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
            </fieldset>


    </div>
    <div class=\"modal-footer\">
        <input class=\"btn btn-primary btn-large\" type=\"submit\" value=\"";
        // line 197
        echo gettext("Submit");
        echo "\">
    </div>
    </form>
</div>

<div id=\"submit-cancellation-ticket\" class=\"modal hide fade open-ticket\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h3>
            ";
        // line 206
        echo gettext("Submit cancellation request");
        // line 207
        echo "        </h3>
    </div>
    <div class=\"modal-body\">
        <form action=\"\" method=\"post\" style=\"background:none\" class=\"request-cancellation\">
            <div class=\"control-group\">
                <label>";
        // line 212
        echo gettext("Help desk");
        echo ": </label>
                <div class=\"controls\">
                    ";
        // line 214
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "support_helpdesk_id"), 1);
        echo "
                </div>
            </div>

            <div class=\"control-group\">
                <label>";
        // line 219
        echo gettext("Subject");
        echo ": </label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"subject\" value=\"";
        // line 221
        echo gettext("I would like to cancel");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "\" required=\"required\" class=\"span5\"/>
                </div>
            </div>

            <div class=\"control-group\">
                <label>";
        // line 226
        echo gettext("Reason");
        echo ": </label>
                <div class=\"controls\">
                    <textarea name=\"content\" cols=\"5\" rows=\"5\" required=\"required\" class=\"span5\">";
        // line 228
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "content"));
        echo "</textarea>
                </div>
            </div>
                <input type=\"hidden\" name=\"rel_type\" value=\"order\">
                <input type=\"hidden\" name=\"rel_id\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"rel_task\" value=\"cancel\">
    </div>
    <div class=\"modal-footer\">
        <input class=\"btn btn-primary btn-large\" type=\"submit\" value=\"";
        // line 236
        echo gettext("Submit");
        echo "\">
    </div>
    </form>
</div>

<div id=\"submit-upgrade-ticket\" class=\"modal hide fade open-ticket\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h3>
            ";
        // line 245
        echo gettext("Submit upgrade request");
        // line 246
        echo "        </h3>
    </div>
    <div class=\"modal-body\">
        <form action=\"\" method=\"post\" class=\"request-upgrade\" data-api-url=\"client/support/ticket_create\" data-api-msg=\"Upgrade request received\" style=\"background: none\">
            <fieldset>
                <div class=\"control-group\">
                    <label>";
        // line 252
        echo gettext("Subject");
        echo ": </label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"subject\" value=\"";
        // line 254
        echo gettext("I would like to upgrade");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "\" required=\"required\" class=\"span5\"/>
                    </div>
                </div>

                <div class=\"control-group\">
                    <label>";
        // line 259
        echo gettext("Help desk");
        echo ": </label>
                    <div class=\"controls\">
                        ";
        // line 261
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "support_helpdesk_id"), 1);
        echo "
                    </div>
                </div>


                <div class=\"control-group\">
                    <label>";
        // line 267
        echo gettext("Upgrade to");
        echo ": </label>
                    <div class=\"controls\">
                        ";
        // line 269
        echo $context["mf"]->getselectbox("rel_new_value", (isset($context["upgradables"]) ? $context["upgradables"] : null), "", 1);
        echo "
                    </div>
                </div>

                <div class=\"control-group\">
                    <label>";
        // line 274
        echo gettext("Notes");
        echo ": </label>
                    <div class=\"controls\">
                        <textarea name=\"content\" cols=\"5\" rows=\"5\" placeholder=\"Your comment\" class=\"span5\">";
        // line 276
        echo gettext("I would like to upgrade");
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
        echo "</textarea>
                    </div>
                </div>

                <input type=\"hidden\" name=\"rel_type\" value=\"order\">
                <input type=\"hidden\" name=\"rel_id\" value=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"rel_task\" value=\"upgrade\">
            </fieldset>
    </div>
    <div class=\"modal-footer\">
        <input class=\"btn btn-primary btn-large\" type=\"submit\" value=\"";
        // line 286
        echo gettext("Request");
        echo "\">
    </div>
    </form>
</div>

";
        // line 291
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_template_exists", array(0 => array("file" => (isset($context["service_partial"]) ? $context["service_partial"] : null))), "method")) {
            // line 292
            echo "    ";
            $context["service"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_service", array(0 => array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"))), "method");
            // line 293
            echo "    ";
            $template = $this->env->resolveTemplate((isset($context["service_partial"]) ? $context["service_partial"] : null));
            $template->display(array_merge($context, array("order" => (isset($context["order"]) ? $context["order"] : null), "service" => (isset($context["service"]) ? $context["service"] : null))));
        } else {
            // line 295
            echo "    ";
        }
        // line 297
        echo "
";
    }

    // line 300
    public function block_js($context, array $blocks = array())
    {
        // line 302
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('#renewal-button').click(function(e){
            e.preventDefault();
        if(confirm(\"This will generate new invoice. Are you sure you want to continue?\")) {
            bb.post(
                'client/invoice/renewal_invoice',
                {order_id: ";
        // line 309
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "js", null, true);
        echo " },
                function(result) {
                    bb.redirect('";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice"), "js", null, true);
        echo "' + '/' + result);
                }
            );
    }
    });

       \$('.open-ticket').submit(function(){
       \$('.wait').show();
        bb.post(
            'client/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                \$('#submit-ticket').modal('hide')
                bb.msg('Ticket was submitted. If you want to track conversation please go to support section');
                \$('.wait').hide();
            }
        );
        return false;
    });

    \$('.request-cancellation').submit(function(){
        \$('.wait').show();
        bb.post(
            'client/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                \$('#submit-cancellation-ticket').modal('hide')
                bb.msg('Service cancellation request received');
                \$('.wait').hide();
            }
        );
        return false;
    });

    \$('.request-upgrade').submit(function(){
        \$('.wait').show();
        bb.post(
            'client/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                \$('#submit-upgrade-ticket').modal('hide')
                bb.msg('Service upgrade request received');
                \$('.wait').hide();
            }
        );
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_order_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  688 => 311,  683 => 309,  674 => 302,  671 => 300,  666 => 297,  663 => 295,  658 => 293,  655 => 292,  653 => 291,  645 => 286,  637 => 281,  627 => 276,  622 => 274,  614 => 269,  609 => 267,  600 => 261,  595 => 259,  585 => 254,  580 => 252,  572 => 246,  570 => 245,  558 => 236,  551 => 232,  544 => 228,  539 => 226,  529 => 221,  524 => 219,  516 => 214,  511 => 212,  504 => 207,  502 => 206,  490 => 197,  481 => 191,  473 => 186,  468 => 184,  460 => 179,  455 => 177,  447 => 172,  442 => 170,  434 => 164,  432 => 163,  424 => 157,  414 => 149,  403 => 146,  393 => 145,  385 => 144,  381 => 143,  377 => 142,  373 => 141,  368 => 140,  364 => 139,  356 => 134,  352 => 133,  348 => 132,  344 => 131,  340 => 130,  330 => 123,  326 => 122,  321 => 119,  319 => 118,  317 => 117,  314 => 116,  310 => 115,  301 => 111,  294 => 106,  288 => 104,  286 => 103,  281 => 101,  278 => 100,  272 => 98,  270 => 97,  267 => 96,  261 => 94,  259 => 93,  251 => 87,  246 => 84,  244 => 83,  238 => 81,  233 => 79,  230 => 78,  228 => 77,  225 => 76,  219 => 73,  215 => 72,  212 => 71,  210 => 70,  207 => 69,  197 => 66,  187 => 65,  184 => 64,  182 => 63,  172 => 60,  168 => 59,  161 => 55,  157 => 54,  144 => 50,  140 => 49,  136 => 47,  130 => 44,  126 => 43,  123 => 42,  121 => 41,  115 => 38,  111 => 37,  104 => 33,  100 => 32,  93 => 28,  89 => 27,  80 => 21,  76 => 20,  66 => 17,  62 => 15,  59 => 14,  53 => 8,  46 => 7,  43 => 6,  37 => 3,  32 => 12,  30 => 11,  28 => 4,  26 => 2,);
    }
}
