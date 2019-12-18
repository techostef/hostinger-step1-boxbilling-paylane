<?php

/* mod_client_manage.phtml */
class __TwigTemplate_7721315d638e4eef7255d5d4af437fb6eb8485ad98133b6cc2c1b13840e7a53f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
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
        // line 2
        $context["active_menu"] = "client";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 7
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
        echo "\">";
        echo gettext("Clients");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-info\">";
        // line 18
        echo gettext("Profile");
        echo "</a></li>
        <li><a href=\"#tab-profile\">";
        // line 19
        echo gettext("Edit");
        echo "</a></li>
        <li><a href=\"#tab-orders\">";
        // line 20
        echo gettext("Orders");
        echo "</a></li>
        <li><a href=\"#tab-invoice\">";
        // line 21
        echo gettext("Invoices");
        echo "</a></li>
        <li><a href=\"#tab-support\">";
        // line 22
        echo gettext("Tickets");
        echo "</a></li>
        <li><a href=\"#tab-balance\">";
        // line 23
        echo gettext("Payments");
        echo "</a></li>
        <li><a href=\"#tab-history\">";
        // line 24
        echo gettext("Logins");
        echo "</a></li>
        <li><a href=\"#tab-emails\">";
        // line 25
        echo gettext("Emails");
        echo "</a></li>
        <li><a href=\"#tab-transactions\">";
        // line 26
        echo gettext("Transactions");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-info\">

            <div style=\"position: relative;\">
            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email")), "html", null, true);
        echo "?size=100\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
        echo "\" style=\"right: 0; margin: 15px 15px 0 15px; position: absolute; border: 2px solid white; box-shadow: 0px 0px 10px 0px;\"/>
            </div>
            
            <table class=\"tableStatic wide\">
                <tbody>
                    <tr class=\"noborder\">
                        <td style=\"width: 15%\">ID:</td>
                        <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>Name:</td>
                        <td><strong class=\"red\">";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
        echo "</strong></td>
                    </tr>

                    <tr>
                        <td>Company:</td>
                        <td><strong class=\"green\">";
        // line 51
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company"), "-")) : ("-")), "html", null, true);
        echo "</strong></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "status")), "method"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Group:</td>
                        <td>";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "group", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "group"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Currency:</td>
                        <td>";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "currency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "currency"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>IP:</td>
                        <td>";
        // line 71
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "ip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "ip"), "-")) : ("-")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_ipcountryname_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "ip")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>API Key:</td>
                        <td>";
        // line 75
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "api_token", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "api_token"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>
                            <span class=\"flag flag-";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "country"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "country"), array(), "array"), "html", null, true);
        echo "\"></span>
                            ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "country"), array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "state"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "address_1"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "address_2"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "city"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "postcode"), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td>Registered at:</td>
                        <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "created_at"), "M d, Y"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"2\">
                            <a href=\"";
        // line 92
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/login");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "\" class=\"btnIconLeft mr10 mt5\" target=\"_blank\"><img src=\"images/icons/dark/adminUser.png\" alt=\"\" class=\"icon\"><span>Login to client area</span></a>
                            <a href=\"";
        // line 93
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/delete", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id")));
        echo "\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
        echo "\" class=\"btnIconLeft mr10 mt5 api-link\" ><img src=\"images/icons/dark/trash.png\" alt=\"\" class=\"icon\"><span>Delete</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-profile\">

            <div class=\"help\">
                <h3>";
        // line 103
        echo gettext("Client profile details");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"";
        // line 106
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/update");
        echo "\" class=\"mainForm api-form save\" data-api-msg=\"";
        echo gettext("Client Profile updated");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 109
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"status\" value=\"active\"";
        // line 111
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "status") == "active")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Active");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"suspended\"";
        // line 112
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "status") == "suspended")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Suspended");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"canceled\"";
        // line 113
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "status") == "canceled")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Canceled");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 118
        echo gettext("Type");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"type\" value=\"individual\"";
        // line 120
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "type") == "individual")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Individual");
        echo "</label>
                            <input type=\"radio\" name=\"type\" value=\"company\"";
        // line 121
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "type") == "company")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Company");
        echo "</label>
                            <input type=\"radio\" name=\"type\" value=\"\"";
        // line 122
        if ((!$this->getAttribute((isset($context["client"]) ? $context["client"] : null), "type"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Other/Unknown");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 128
        echo gettext("Mail approved");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"email_approved\" value=\"1\"";
        // line 130
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email_approved") == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"email_approved\" value=\"0\"";
        // line 131
        if (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email_approved") != 1)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>



                    <div class=\"rowElem\">
                        <label>";
        // line 139
        echo gettext("Group");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "group_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_group_get_pairs"), 2 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "group_id"), 3 => 0, 4 => "Select group"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 146
        echo gettext("Email");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 153
        echo gettext("Name");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 250px\"><input type=\"text\" name=\"first_name\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
        echo "\" required=\"required\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 245px\"><input type=\"text\" name=\"last_name\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
        echo "\" /></li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 164
        echo gettext("Date of birth");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"birthday\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "birthday"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\" id=\"company-details\">
                        <label>";
        // line 171
        echo gettext("Company details");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 170px\"><input type=\"text\" name=\"company\" value=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company"), "html", null, true);
        echo "\" title=\"Company name\" placeholder=\"Company name\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 150px\"><input type=\"text\" name=\"company_vat\" value=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company_vat"), "html", null, true);
        echo "\" title=\"Company VAT number\" placeholder=\"Company VAT number\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 150px\"><input type=\"text\" name=\"company_number\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company_number"), "html", null, true);
        echo "\"  title=\"Company number\" placeholder=\"Company number\"/></li>
                                <li class=\"sep\"></li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 184
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
                
                <fieldset>
                    <legend>";
        // line 188
        echo gettext("Address and contact details");
        echo "</legend>
                    <div class=\"rowElem\">
                        <label>";
        // line 190
        echo gettext("Address Line 1");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"address_1\" value=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "address_1"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 197
        echo gettext("Address Line 2");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"address_2\" value=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "address_2"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 205
        echo gettext("Country");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "country", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), 2 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "country"), 3 => 0, 4 => "Select country"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 212
        echo gettext("State");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 215
        echo "                            <input type=\"text\" name=\"state\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "state"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 220
        echo gettext("City");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"city\" value=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "city"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 227
        echo gettext("Postcode");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"postcode\" value=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "postcode"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 234
        echo gettext("Phone");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li><input type=\"text\" name=\"phone_cc\" value=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "phone_cc"), "html", null, true);
        echo "\" /></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 200px;\"><input type=\"text\" name=\"phone\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "phone"), "html", null, true);
        echo "\" /></li>
                            </ul>  
                        </div> 
                        <div class=\"fix\"></div>   
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 245
        echo gettext("Passport number");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"document_nr\" value=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "document_nr"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 251
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
                
                <fieldset>
                    <legend>";
        // line 255
        echo gettext("Additional settings");
        echo "</legend>
                    <div class=\"rowElem\">
                        <label>";
        // line 257
        echo gettext("Alternative ID");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"aid\" value=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "aid"), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Used to identify client on foreign system. Usually used by importers");
        echo "\"/>
                        </div> 
                        <div class=\"fix\"></div>   
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 265
        echo gettext("Currency");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "currency", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs"), 2 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "currency"), 3 => 0, 4 => "Select currency"), "method"), "html", null, true);
        echo "
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 273
        echo gettext("Exempt from tax");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"tax_exempt\" value=\"1\"";
        // line 275
        if ($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "tax_exempt")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                            <input type=\"radio\" name=\"tax_exempt\" value=\"0\"";
        // line 276
        if ((!$this->getAttribute((isset($context["client"]) ? $context["client"] : null), "tax_exempt"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 281
        echo gettext("Signed up time");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"created_at\" value=\"";
        // line 283
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "created_at"), "Y-m-d"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 288
        echo gettext("Notes");
        echo ":</label>
                        <div class=\"formRight\">
                            <textarea name=\"notes\" cols=\"5\" rows=\"5\">";
        // line 290
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "notes"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 294
        echo gettext("Update profile");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>
            
            <div class=\"help\">
                <h3>";
        // line 300
        echo gettext("Change password");
        echo "</h3>
            </div>
            <form method=\"post\" action=\"";
        // line 302
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/change_password");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Password changed");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 305
        echo gettext("Password");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 313
        echo gettext("Password confirm");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 320
        echo gettext("Change password");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>

            <div class=\"help\">
                <h3>";
        // line 326
        echo gettext("Custom fields");
        echo "</h3>
                <p>";
        // line 327
        echo gettext("Use these fields to define custom client details");
        echo "</p>
            </div>
            
            <form method=\"post\" action=\"";
        // line 330
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/update");
        echo "\" class=\"mainForm api-form save\" data-api-msg=\"";
        echo gettext("Client Profile custom fields updated");
        echo "\">
                <fieldset>
                    ";
        // line 332
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 333
            echo "                    ";
            $context["fn"] = ("custom_" . (isset($context["i"]) ? $context["i"] : null));
            // line 334
            echo "                    <div class=\"rowElem";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo " noborder";
            }
            echo "\">
                        <label>";
            // line 335
            echo gettext("Custom field");
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"custom_";
            // line 337
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" cols=\"5\" rows=\"5\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), (isset($context["fn"]) ? $context["fn"] : null), array(), "array"), "html", null, true);
            echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        echo "
                    <input type=\"submit\" value=\"";
        // line 343
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-balance\">
            <div class=\"help\">
                <h3>";
        // line 351
        echo gettext("Client payments history");
        echo "</h3>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th style=\"width: 15%\">";
        // line 357
        echo gettext("Amount");
        echo "</th>
                        <th>";
        // line 358
        echo gettext("Description");
        echo "</th>
                        <th style=\"width: 20%\">";
        // line 359
        echo gettext("Date");
        echo "</th>
                        <th style=\"width: 5%\">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 365
        $context["transactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_balance_get_list", array(0 => array("per_page" => 20, "client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"))), "method");
        // line 366
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["transactions"]) ? $context["transactions"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 367
            echo "                    <tr>
                        <td>";
            // line 368
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "amount"), 1 => $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "currency")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 369
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "description"), "html", null, true);
            echo "</td>
                        <td>";
            // line 370
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "created_at"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"";
            // line 372
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/balance_delete", array("id" => $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "id")));
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 376
            echo "                    <tr>
                        <td colspan=\"4\">";
            // line 377
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 380
        echo "                </tbody>

                <tfoot>
                    <tr>
                        <th class=\"currency\" colspan=\"4\">";
        // line 384
        echo gettext("Balance");
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "balance"), 1 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "currency")), "method"), "html", null, true);
        echo "</th>
                    </tr>
                </tfoot>
            </table>
            
            <div class=\"help\">
                <h3>";
        // line 390
        echo gettext("Add funds for client");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"";
        // line 393
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/balance_add_funds");
        echo "\" class=\"mainForm api-form save\" data-api-msg=\"";
        echo gettext("Funds added");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 396
        echo gettext("Amount");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"amount\" value=\"\" style=\"width: 100px;\" required=\"required\"/> ";
        // line 398
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "currency"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 404
        echo gettext("Description");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"description\" value=\"\"  required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 411
        echo gettext("Add funds");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-orders\">
            <div class=\"help\">
                <h3>";
        // line 419
        echo gettext("Client orders");
        echo "</h3>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td width=\"40%\">Title</td>
                        <td width=\"20%\">Amount</td>
                        <td width=\"20%\">Period</td>
                        <td width=\"20%\">Status</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 434
        $context["orders"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "order_get_list", array(0 => array("per_page" => "20", "client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"))), "method");
        // line 435
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 436
            echo "                    <tr>
                        <td>";
            // line 437
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 438
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 439
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "total"), 1 => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 440
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "period_name", array(0 => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 441
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status")), "method"), "html", null, true);
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 442
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/order/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 445
            echo "                    <tr>
                        <td colspan=\"6\">";
            // line 446
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 449
        echo "                </tbody>
                
                <tfoot>
                    <tr>
                        <td colspan=\"6\">
                            <a href=\"";
        // line 454
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order", array("client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id")));
        echo "#tab-new\" class=\"btnIconLeft mr10 mt5\"><img src=\"images/icons/dark/money.png\" alt=\"\" class=\"icon\"><span>New order</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-invoice\">
            <div class=\"help\">
                <h3>";
        // line 463
        echo gettext("Client invoices");
        echo "</h3>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>#</td>
                        <td width=\"15%\">Amount</td>
                        <td width=\"30%\">Issued at</td>
                        <td width=\"30%\">Paid at</td>
                        <td width=\"15%\">Status</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 478
        $context["invoices"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_get_list", array(0 => array("per_page" => "100", "client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"))), "method");
        // line 479
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["invoices"]) ? $context["invoices"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 480
            echo "                    <tr>
                        <td>";
            // line 481
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "serie_nr"), "html", null, true);
            echo "</td>
                        <td>";
            // line 482
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), 1 => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 483
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at"), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 484
            if ($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at"), "Y-m-d"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                        <td>";
            // line 485
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "status")), "method"), "html", null, true);
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 486
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/invoice/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 489
            echo "                    <tr>
                        <td colspan=\"6\">";
            // line 490
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        echo "                </tbody>
                
                <tfoot>
                    <tr>
                        <td colspan=\"6\">
                            <a href=\"";
        // line 498
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/prepare", array("client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id")));
        echo "\" class=\"btnIconLeft mr10 mt5 api-link\" data-api-jsonp=\"onAfterInvoicePrepared\" ><img src=\"images/icons/dark/money.png\" alt=\"\" class=\"icon\"><span>New invoice</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-support\">
            <div class=\"help\">
                <h3>";
        // line 507
        echo gettext("Client support tickets");
        echo "</h3>
            </div>
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td width=\"60%\">Subject</td>
                        <td width=\"15%\">Help desk</td>
                        <td width=\"15%\">Status</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                
                <tbody>
                    ";
        // line 521
        $context["tickets"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "support_ticket_get_list", array(0 => array("per_page" => "20", "client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"))), "method");
        // line 522
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 523
            echo "                    <tr>
                        <td>";
            // line 524
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 525
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 526
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 527
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status")), "method"), "html", null, true);
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 528
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 531
            echo "                    <tr>
                        <td colspan=\"5\">";
            // line 532
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 535
        echo "                </tbody>
                
                <tfoot>
                    <tr>
                        <td colspan=\"5\">
                            <a href=\"";
        // line 540
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id")));
        echo "#tab-new\" class=\"btnIconLeft mr10 mt5\" ><img src=\"images/icons/dark/help.png\" alt=\"\" class=\"icon\"><span>New support ticket</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-history\">
            <div class=\"help\">
                <h3>";
        // line 549
        echo gettext("Logins history");
        echo "</h3>
            </div>
            
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th>";
        // line 555
        echo gettext("IP");
        echo "</th>
                        <th>";
        // line 556
        echo gettext("Country");
        echo "</th>
                        <th>";
        // line 557
        echo gettext("Date");
        echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 562
        $context["logins"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_login_history_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), "client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"))), "method");
        // line 563
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["logins"]) ? $context["logins"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["login"]) {
            // line 564
            echo "                    <tr>
                        <td>";
            // line 565
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : null), "ip"), "html", null, true);
            echo "</td>
                        <td>";
            // line 566
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_ipcountryname_filter($this->getAttribute((isset($context["login"]) ? $context["login"] : null), "ip")), "html", null, true);
            echo "</td>
                        <td>";
            // line 567
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : null), "created_at"), "l, d F Y"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 570
            echo "                    <tr>
                        <td colspan=\"3\">";
            // line 571
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['login'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 574
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-emails\">
            <div class=\"help\">
                <h3>";
        // line 580
        echo gettext("Emails sent to client");
        echo "</h3>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th>";
        // line 586
        echo gettext("Email subject");
        echo "</th>
                        <th>";
        // line 587
        echo gettext("To");
        echo "</th>
                        <th>";
        // line 588
        echo gettext("Date sent");
        echo "</th>
                        <th style=\"width: 5%\">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 594
        $context["emails"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "email_email_get_list", array(0 => array("per_page" => "20", "client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"))), "method");
        // line 595
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["emails"]) ? $context["emails"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["email"]) {
            // line 596
            echo "                    <tr>
                        <td>";
            // line 597
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "subject"), "html", null, true);
            echo "</td>
                        <td>";
            // line 598
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "recipients"), "html", null, true);
            echo "</td>
                        <td>";
            // line 599
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "created_at"), "l, d F Y"), "html", null, true);
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 600
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("email");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 603
            echo "                    <tr>
                        <td colspan=\"4\">";
            // line 604
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 607
        echo "                </tbody>
            </table>
            ";
        // line 609
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["emails"]) ? $context["emails"] : null))));
        // line 610
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-transactions\">
            <div class=\"help\">
                <h3>";
        // line 614
        echo gettext("Transactions received");
        echo "</h3>
            </div>

            ";
        // line 617
        $context["transactions"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_transaction_get_list", array(0 => array("client_id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "per_page" => 100)), "method"), "list");
        // line 618
        echo "            <table class=\"tableStatic wide\">
                <thead>
                <tr>
                    <th>";
        // line 621
        echo gettext("ID");
        echo "</th>
                    <th>";
        // line 622
        echo gettext("Type");
        echo "</th>
                    <th>";
        // line 623
        echo gettext("Gateway");
        echo "</th>
                    <th>";
        // line 624
        echo gettext("Amount");
        echo "</th>
                    <th>";
        // line 625
        echo gettext("Status");
        echo "</th>
                    <th>";
        // line 626
        echo gettext("Date");
        echo "</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 632
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transactions"]) ? $context["transactions"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 633
            echo "                    <tr>
                        <td>";
            // line 634
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "txn_id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 635
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "type"), "html", null, true);
            echo "</td>
                        <td>";
            // line 636
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "gateway"), "html", null, true);
            echo "</td>
                        <td>";
            // line 637
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "currency_format", array(0 => $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "amount"), 1 => $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "currency")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 638
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "status")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 639
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_datetime($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "created_at")), "html", null, true);
            echo "</td>
                        <td style=\"width: 5%\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 641
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/invoice/transaction");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 645
            echo "                    <tr>
                        <td colspan=\"7\">";
            // line 646
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 649
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>


";
        // line 733
        echo "
";
    }

    // line 737
    public function block_js($context, array $blocks = array())
    {
        // line 738
        echo "<script type=\"text/javascript\">
\$(function() {

});

function onAfterInvoicePrepared(id) {
    bb.redirect(\"";
        // line 744
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/manage/");
        echo "/\"+id);
}
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_client_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1497 => 744,  1489 => 738,  1486 => 737,  1481 => 733,  1472 => 649,  1463 => 646,  1460 => 645,  1449 => 641,  1444 => 639,  1440 => 638,  1436 => 637,  1432 => 636,  1428 => 635,  1424 => 634,  1421 => 633,  1416 => 632,  1407 => 626,  1403 => 625,  1399 => 624,  1395 => 623,  1391 => 622,  1387 => 621,  1382 => 618,  1380 => 617,  1374 => 614,  1368 => 610,  1366 => 609,  1362 => 607,  1353 => 604,  1350 => 603,  1340 => 600,  1336 => 599,  1332 => 598,  1328 => 597,  1325 => 596,  1319 => 595,  1317 => 594,  1308 => 588,  1304 => 587,  1300 => 586,  1291 => 580,  1283 => 574,  1274 => 571,  1271 => 570,  1263 => 567,  1259 => 566,  1255 => 565,  1252 => 564,  1246 => 563,  1244 => 562,  1236 => 557,  1232 => 556,  1228 => 555,  1219 => 549,  1207 => 540,  1200 => 535,  1191 => 532,  1188 => 531,  1178 => 528,  1174 => 527,  1170 => 526,  1166 => 525,  1162 => 524,  1159 => 523,  1153 => 522,  1151 => 521,  1134 => 507,  1122 => 498,  1115 => 493,  1106 => 490,  1103 => 489,  1093 => 486,  1089 => 485,  1081 => 484,  1077 => 483,  1073 => 482,  1069 => 481,  1066 => 480,  1060 => 479,  1058 => 478,  1040 => 463,  1028 => 454,  1021 => 449,  1012 => 446,  1009 => 445,  999 => 442,  995 => 441,  991 => 440,  987 => 439,  983 => 438,  979 => 437,  976 => 436,  970 => 435,  968 => 434,  950 => 419,  940 => 412,  936 => 411,  926 => 404,  917 => 398,  912 => 396,  904 => 393,  898 => 390,  887 => 384,  881 => 380,  872 => 377,  869 => 376,  860 => 372,  855 => 370,  851 => 369,  847 => 368,  844 => 367,  838 => 366,  836 => 365,  827 => 359,  823 => 358,  819 => 357,  810 => 351,  800 => 344,  796 => 343,  793 => 342,  772 => 337,  765 => 335,  758 => 334,  755 => 333,  738 => 332,  731 => 330,  725 => 327,  721 => 326,  713 => 321,  709 => 320,  699 => 313,  688 => 305,  680 => 302,  675 => 300,  667 => 295,  663 => 294,  656 => 290,  651 => 288,  643 => 283,  638 => 281,  628 => 276,  622 => 275,  617 => 273,  608 => 267,  603 => 265,  592 => 259,  587 => 257,  582 => 255,  575 => 251,  568 => 247,  563 => 245,  554 => 239,  549 => 237,  543 => 234,  535 => 229,  530 => 227,  522 => 222,  517 => 220,  508 => 215,  503 => 212,  495 => 207,  490 => 205,  481 => 199,  476 => 197,  468 => 192,  463 => 190,  458 => 188,  451 => 184,  442 => 178,  437 => 176,  432 => 174,  426 => 171,  418 => 166,  413 => 164,  404 => 158,  399 => 156,  393 => 153,  385 => 148,  380 => 146,  372 => 141,  367 => 139,  352 => 131,  344 => 130,  339 => 128,  326 => 122,  318 => 121,  310 => 120,  305 => 118,  293 => 113,  285 => 112,  277 => 111,  272 => 109,  264 => 106,  258 => 103,  243 => 93,  237 => 92,  228 => 86,  210 => 81,  204 => 80,  196 => 75,  187 => 71,  180 => 67,  173 => 63,  166 => 59,  159 => 55,  152 => 51,  142 => 46,  134 => 41,  120 => 34,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 18,  71 => 14,  68 => 13,  59 => 9,  53 => 8,  47 => 7,  44 => 6,  41 => 5,  33 => 3,  28 => 2,);
    }
}
