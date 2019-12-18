<?php

/* mod_servicedomain_manage.phtml */
class __TwigTemplate_f80622e5825386e904cc6c18d7e987adac6dd09b57a5249fd3d9bfbb5617dbdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "active")) {
            // line 2
            echo "
<div class=\"row\">
    <article class=\"span12 data-block\">
        <div class=\"data-container\">
            <header>
                <h2>";
            // line 7
            echo gettext("Domain management");
            echo "</h2>
                <ul class=\"data-header-actions\">
                    <li class=\"domain-tabs active\"><a href=\"#details\" class=\"btn btn-inverse btn-alt\">";
            // line 9
            echo gettext("Details");
            echo "</a></li>
                    <li class=\"domain-tabs\"><a href=\"#protection\" class=\"btn btn-inverse btn-alt\">";
            // line 10
            echo gettext("Protection");
            echo "</a></li>
                    <li class=\"domain-tabs\"><a href=\"#privacy\" class=\"btn btn-inverse btn-alt\">";
            // line 11
            echo gettext("Privacy");
            echo "</a></li>
                    <li class=\"domain-tabs\"><a href=\"#nameservers\" class=\"btn btn-inverse btn-alt\">";
            // line 12
            echo gettext("Nameservers");
            echo "</a></li>
                    <li class=\"domain-tabs\"><a href=\"#whois\" class=\"btn btn-inverse btn-alt\">";
            // line 13
            echo gettext("Whois");
            echo "</a></li>
                    <li class=\"domain-tabs\"><a href=\"#epp\" class=\"btn btn-inverse btn-alt\">";
            // line 14
            echo gettext("Transfer");
            echo "</a></li>
                </ul>
            </header>
            <section class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"details\">
                    <h2>";
            // line 19
            echo gettext("Domain details");
            echo "</h2>
                    <table class=\"table table-striped table-bordered table-condensed\">
                        <tbody>
                        <tr>
                            <td>";
            // line 23
            echo gettext("Domain");
            echo "</td>
                            <td><a target=\"_blank\" href=\"http://";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "domain"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "domain"), "html", null, true);
            echo "</a></td>
                        </tr>
                        <tr>
                            <td>";
            // line 27
            echo gettext("Registration date");
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "registered_at")), "html", null, true);
            echo "</td>
                        </tr>

                        <tr>
                            <td>";
            // line 32
            echo gettext("Expires at");
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "expires_at")), "html", null, true);
            echo "</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class=\"tab-pane\" id=\"protection\">
                    <h2>";
            // line 40
            echo gettext("Domain Protection");
            echo "</h2>
                    <p class=\"alert alert-info\">";
            // line 41
            echo gettext("Domain locking is a security enhancement to prevent unauthorized transfers of your domain to another registrar or web host by \"locking\" your domain name servers.");
            echo "</p>
                    <div class=\"control-group\">
                        <div class=\"controls\">
                            <button class=\"btn btn-primary\" type=\"button\" id=\"domain-unlock\" ";
            // line 44
            if (($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "locked") == 0)) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo gettext("Unlock");
            echo "</button>
                            <button class=\"btn btn-primary\" type=\"button\" id=\"domain-lock\" ";
            // line 45
            if (($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "locked") == 1)) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo gettext("Lock");
            echo "</button>
                        </div>
                    </div>

                </div>
                <div class=\"tab-pane\" id=\"privacy\">
                    <h2>";
            // line 51
            echo gettext("Domain Privacy Settings");
            echo "</h2>
                    <div class=\"block\">
                        <p class=\"alert alert-info\">";
            // line 53
            echo gettext("If you would like to hide domain contact information which is shown on WHOIS you can enable privacy protection. Once domain privacy protection is enabled no one will know who registered this service. And once you decide to disable privacy protection, information that is listed above on \"Update Domain Contact Details\" section will be seen on domain WHOIS again.");
            echo "</p>
                        <div class=\"control-group\">
                            <div class=\"controls\">
                                <button class=\"btn btn-primary\" type=\"button\" id=\"domain-disable-pp\" ";
            // line 56
            if (($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "privacy") == 0)) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo gettext("Disable Privacy protection");
            echo "</button>
                                <button class=\"btn btn-primary\" type=\"button\" id=\"domain-enable-pp\" ";
            // line 57
            if (($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "privacy") == 1)) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo gettext("Enable Privacy protection");
            echo "</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab-pane\" id=\"nameservers\">
                    <h2>";
            // line 64
            echo gettext("Update Nameservers");
            echo "</h2>
                    <div class=\"block\">
                        <p class=\"alert alert-info\">";
            // line 66
            echo gettext("If you would like to host this domain with another company you can update nameservers.");
            echo "</p>
                        <form action=\"\" method=\"post\" id=\"update-nameservers\" class=\"form-horizontal\">
                            <fieldset>
                            <div class=\"control-group\">
                                <label class=\"control-label\" >";
            // line 70
            echo gettext("Nameserver 1");
            echo ": </label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"ns1\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns1", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns1"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns1"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns1"))), "html", null, true);
            echo "\" required=\"required\">
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" >";
            // line 76
            echo gettext("Nameserver 2");
            echo ": </label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"ns2\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns2", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns2"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns2"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns2"))), "html", null, true);
            echo "\" required=\"required\">
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" >";
            // line 82
            echo gettext("Nameserver 3");
            echo ": </label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"ns3\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns3", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns3"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns3"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns3"))), "html", null, true);
            echo "\">
                                </div>
                            </div>
                            <div class=\"control-group\">
                                <label class=\"control-label\" >";
            // line 88
            echo gettext("Nameserver 4");
            echo ": </label>
                                <div class=\"controls\">
                                    <input type=\"text\" name=\"ns4\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns4", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ns4"), $this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns4"))) : ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "ns4"))), "html", null, true);
            echo "\">
                                </div>
                            </div>
                                <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\">
                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    <button class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 96
            echo gettext("Update");
            echo "\">";
            echo gettext("Update");
            echo "</button>
                                </div>
                            </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
                <div class=\"tab-pane\" id=\"whois\">
                    <h2>";
            // line 105
            echo gettext("Update domain contact details");
            echo "</h2>
                    <div class=\"block\">
                        <p class=\"alert alert-info\">";
            // line 107
            echo gettext("Domain contact details will be displayed once someone will check WHOIS output (which is public) of your service. This will update Technical, Billing and Admin contacts for this service. You can enable domain privacy protection if you want to hide your public WHOIS information.");
            echo "</p>
                        <form method=\"post\" action=\"\" id=\"update-contact\" class=\"form-horizontal\">
                            <fieldset>
                                <div class=\"control-group\">
                                    <label class=\"control-label\" >";
            // line 111
            echo gettext("First Name");
            echo ": </label>
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"contact[first_name]\" value=\"";
            // line 113
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "first_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "first_name"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "first_name"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "first_name"))), "html", null, true);
            echo "\" required=\"required\">
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" >";
            // line 118
            echo gettext("Last Name");
            echo ": </label>
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"contact[last_name]\" value=\"";
            // line 120
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "last_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "last_name"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "last_name"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "last_name"))), "html", null, true);
            echo "\" required=\"required\">
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" >";
            // line 125
            echo gettext("Email");
            echo ": </label>
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"contact[email]\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "email"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "email"))), "html", null, true);
            echo "\" required=\"required\">
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" >";
            // line 132
            echo gettext("Company");
            echo ": </label>
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"contact[company]\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "company"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "company"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "company"))), "html", null, true);
            echo "\" required=\"required\">
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" >";
            // line 139
            echo gettext("Address Line 1");
            echo ": </label>
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"contact[address1]\" value=\"";
            // line 141
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address1", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address1"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "address1"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "address1"))), "html", null, true);
            echo "\" required=\"required\">
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" >";
            // line 146
            echo gettext("Address Line 2");
            echo ": </label>
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"contact[address2]\" value=\"";
            // line 148
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address2", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address2"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "address2"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "address2"))), "html", null, true);
            echo "\" required=\"required\">
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" >";
            // line 153
            echo gettext("Country");
            echo ": </label>
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"contact[country]\" value=\"";
            // line 155
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "country", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "country"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "country"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "country"))), "html", null, true);
            echo "\" required=\"required\">
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" >";
            // line 160
            echo gettext("City");
            echo ": </label>
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"contact[city]\" value=\"";
            // line 162
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "city", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "city"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "city"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "city"))), "html", null, true);
            echo "\" required=\"required\">
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" >";
            // line 167
            echo gettext("State");
            echo ": </label>
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"contact[state]\" value=\"";
            // line 169
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "state", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "state"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "state"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "state"))), "html", null, true);
            echo "\" required=\"required\">
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" >";
            // line 174
            echo gettext("Zip");
            echo ": </label>
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"contact[postcode]\" value=\"";
            // line 176
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "postcode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "postcode"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "postcode"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "postcode"))), "html", null, true);
            echo "\" required=\"required\">
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" >";
            // line 181
            echo gettext("Phone Country Code");
            echo ": </label>
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"contact[phone_cc]\" value=\"";
            // line 183
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone_cc", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone_cc"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "phone_cc"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "phone_cc"))), "html", null, true);
            echo "\" required=\"required\">
                                    </div>
                                </div>

                                <div class=\"control-group\">
                                    <label class=\"control-label\" >";
            // line 188
            echo gettext("Phone number");
            echo ": </label>
                                    <div class=\"controls\">
                                        <input type=\"text\" name=\"contact[phone]\" value=\"";
            // line 190
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone"), $this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "phone"))) : ($this->getAttribute($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "contact"), "phone"))), "html", null, true);
            echo "\" required=\"required\">
                                    </div>
                                </div>

                                <input type=\"hidden\" name=\"order_id\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\">
                                <div class=\"control-group\">
                                    <div class=\"controls\">
                                        <button class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 197
            echo gettext("Update");
            echo "\">";
            echo gettext("Update");
            echo "</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"epp\">
                    <div class=\"block\">
                        <h2>";
            // line 207
            echo gettext("Domain Secret");
            echo "</h2>
                        <p class=\"alert alert-info\">";
            // line 208
            echo gettext("All domain names (except a .EU, .UK domain name) have a Domain (Transfer) Secret Key/Authorization Code (EPP Code) associated with them. This would be required if you want to transfer service.");
            echo "</p>
                        <div class=\"control-group\">
                            <div class=\"controls\">
                                <button class=\"btn btn-primary\" type=\"button\" id=\"get-epp\">";
            // line 211
            echo gettext("Get EPP code");
            echo "</button>
                            </div>
                        </div>
                </div>

            </section>
        </div>
    </article>
</div>
";
            // line 220
            $this->displayBlock('js', $context, $blocks);
        }
    }

    public function block_js($context, array $blocks = array())
    {
        // line 221
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('.domain-tabs a').bind('click',function(e){
        e.preventDefault();
        \$(this).tab('show');
    });

    \$('#domain-lock').bind('click',function(event){
        event.preventDefault();
        bb.post(
            'client/servicedomain/lock',
            { order_id: ";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo " },
            function(result) {
                bb.msg('Domain locked');
                \$('#domain-lock').toggle();
                \$('#domain-unlock').toggle();
            }
        );
    });

    \$('#domain-unlock').bind('click',function(event){
        event.preventDefault();
        bb.post(
            'client/servicedomain/unlock',
            { order_id: ";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo " },
            function(result) {
                bb.msg('Domain unlocked');
                \$('#domain-lock').toggle();
                \$('#domain-unlock').toggle();
            }
        );
    });

    \$('#domain-enable-pp').bind('click',function(event){
        event.preventDefault();
        bb.post(
            'client/servicedomain/enable_privacy_protection',
            { order_id: ";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo " },
            function(result) {
                bb.msg('Privacy Protection enabled');
                \$('#domain-enable-pp').toggle();
                \$('#domain-disable-pp').toggle();
            }
        );
    });

    \$('#domain-disable-pp').bind('click',function(event){
        event.preventDefault();
        bb.post(
            'client/servicedomain/disable_privacy_protection',
            { order_id: ";
        // line 271
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo " },
            function(result) {
                bb.msg('Privacy Protection disabled');
                \$('#domain-enable-pp').toggle();
                \$('#domain-disable-pp').toggle();
            }
        );
    });

    \$('#get-epp').bind('click',function(event){
        event.preventDefault();
        bb.post(
            'client/servicedomain/get_transfer_code',
            { order_id: ";
        // line 284
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
        echo " },
            function(result) {
                bb.msg('Domain transfer code is: ' + result);
            }
        );
    });

    \$('#update-nameservers').bind('submit',function(event){
        bb.post(
            'client/servicedomain/update_nameservers',
            \$(this).serialize(),
            function(result) {
                bb.msg('Nameservers updated');
            }
        );
        return false;
    });

    \$('#update-contact').bind('submit',function(event){
        bb.post(
            'client/servicedomain/update_contacts',
            \$(this).serialize(),
            function(result) {
                bb.msg('Contact details updated');
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
        return "mod_servicedomain_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  543 => 284,  527 => 271,  495 => 245,  479 => 232,  466 => 221,  459 => 220,  441 => 208,  437 => 207,  422 => 197,  416 => 194,  409 => 190,  404 => 188,  396 => 183,  391 => 181,  383 => 176,  378 => 174,  370 => 169,  365 => 167,  357 => 162,  339 => 153,  331 => 148,  318 => 141,  313 => 139,  305 => 134,  300 => 132,  292 => 127,  287 => 125,  279 => 120,  274 => 118,  266 => 113,  254 => 107,  249 => 105,  235 => 96,  229 => 93,  223 => 90,  218 => 88,  211 => 84,  206 => 82,  199 => 78,  194 => 76,  175 => 66,  170 => 64,  156 => 57,  148 => 56,  142 => 53,  137 => 51,  124 => 45,  116 => 44,  110 => 41,  106 => 40,  96 => 33,  92 => 32,  85 => 28,  81 => 27,  73 => 24,  69 => 23,  54 => 14,  50 => 13,  42 => 11,  38 => 10,  34 => 9,  29 => 7,  22 => 2,  20 => 1,  688 => 311,  683 => 309,  674 => 302,  671 => 300,  666 => 297,  663 => 295,  658 => 293,  655 => 292,  653 => 291,  645 => 286,  637 => 281,  627 => 276,  622 => 274,  614 => 269,  609 => 267,  600 => 261,  595 => 259,  585 => 254,  580 => 252,  572 => 246,  570 => 245,  558 => 236,  551 => 232,  544 => 228,  539 => 226,  529 => 221,  524 => 219,  516 => 214,  511 => 258,  504 => 207,  502 => 206,  490 => 197,  481 => 191,  473 => 186,  468 => 184,  460 => 179,  455 => 177,  447 => 211,  442 => 170,  434 => 164,  432 => 163,  424 => 157,  414 => 149,  403 => 146,  393 => 145,  385 => 144,  381 => 143,  377 => 142,  373 => 141,  368 => 140,  364 => 139,  356 => 134,  352 => 160,  348 => 132,  344 => 155,  340 => 130,  330 => 123,  326 => 146,  321 => 119,  319 => 118,  317 => 117,  314 => 116,  310 => 115,  301 => 111,  294 => 106,  288 => 104,  286 => 103,  281 => 101,  278 => 100,  272 => 98,  270 => 97,  267 => 96,  261 => 111,  259 => 93,  251 => 87,  246 => 84,  244 => 83,  238 => 81,  233 => 79,  230 => 78,  228 => 77,  225 => 76,  219 => 73,  215 => 72,  212 => 71,  210 => 70,  207 => 69,  197 => 66,  187 => 72,  184 => 64,  182 => 70,  172 => 60,  168 => 59,  161 => 55,  157 => 54,  144 => 50,  140 => 49,  136 => 47,  130 => 44,  126 => 43,  123 => 42,  121 => 41,  115 => 38,  111 => 37,  104 => 33,  100 => 32,  93 => 28,  89 => 27,  80 => 21,  76 => 20,  66 => 17,  62 => 19,  59 => 14,  53 => 8,  46 => 12,  43 => 6,  37 => 3,  32 => 12,  30 => 11,  28 => 4,  26 => 2,);
    }
}
