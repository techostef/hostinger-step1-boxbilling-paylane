<?php

/* mod_client_index.phtml */
class __TwigTemplate_4370a2c6c6c529ea3a15c5f3c2399a255fe55efcbf0ce0e57acbd36b411ce31f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'top_content' => array($this, 'block_top_content'),
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
        echo gettext("Clients");
    }

    // line 5
    public function block_top_content($context, array $blocks = array())
    {
        // line 6
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show_filter")) {
            // line 7
            echo "<div class=\"widget filterWidget\">
    <div class=\"head\"><h5 class=\"iMagnify\">";
            // line 8
            echo gettext("Filter clients");
            echo "</h5></div>
    <div class=\"body nopadding\">

        <form method=\"get\" action=\"\" class=\"mainForm\">
            <input type=\"hidden\" name=\"_url\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "_url"), "html", null, true);
            echo "\" />
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
            // line 15
            echo gettext("ID");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"id\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 23
            echo gettext("Name");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"name\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "name"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>
                
                <div class=\"rowElem\">
                    <label>";
            // line 31
            echo gettext("Company name");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"company\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "company"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 39
            echo gettext("Email");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"email\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
            echo "\" />
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 47
            echo gettext("Group");
            echo ":</label>
                    <div class=\"formRight\">
                        ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "group_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_group_get_pairs"), 2 => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "group_id"), 3 => 0, 4 => "All groups"), "method"), "html", null, true);
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 55
            echo gettext("Status");
            echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"status\" value=\"\"";
            // line 57
            if ((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status"))) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("All");
            echo "</label>
                        <input type=\"radio\" name=\"status\" value=\"active\"";
            // line 58
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status") == "active")) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Active");
            echo "</label>
                        <input type=\"radio\" name=\"status\" value=\"suspended\"";
            // line 59
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status") == "suspended")) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("Suspended");
            echo "</label>
                        <input type=\"radio\" name=\"status\" value=\"canceled\"";
            // line 60
            if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "status") == "canceled")) {
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
            // line 66
            echo gettext("Registration date");
            echo "</label>
                    <div class=\"formRight moreFields\">
                        <ul>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 69
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "date_from"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                            <li class=\"sep\">-</li>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_to\" value=\"";
            // line 71
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
            // line 78
            echo gettext("Filter");
            echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
        </form>
        <div class=\"fix\"></div>
    </div>
</div>
";
        } else {
            // line 85
            $context["count_clients"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_get_statuses");
            // line 86
            echo "<div class=\"stats\">
    <ul>
        <li><a href=\"";
            // line 88
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client", array("status" => "active"));
            echo "\" class=\"count green\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_clients"]) ? $context["count_clients"] : null), "active"), "html", null, true);
            echo "</a><span>";
            echo gettext("Active");
            echo "</span></li>
        <li><a href=\"";
            // line 89
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client", array("status" => "suspended"));
            echo "\" class=\"count blue\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_clients"]) ? $context["count_clients"] : null), "suspended"), "html", null, true);
            echo "</a><span>";
            echo gettext("Suspended");
            echo "</span></li>
        <li><a href=\"";
            // line 90
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client", array("status" => "canceled"));
            echo "\" class=\"count red\" title=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["count_clients"]) ? $context["count_clients"] : null), "canceled"), "html", null, true);
            echo "</a><span>";
            echo gettext("Canceled");
            echo "</span></li>
        <li class=\"last\"><a href=\"";
            // line 91
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
            echo "\" class=\"count grey\" title=\"\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["count_clients"]) ? $context["count_clients"] : null), "active") + $this->getAttribute((isset($context["count_clients"]) ? $context["count_clients"] : null), "canceled")) + $this->getAttribute((isset($context["count_clients"]) ? $context["count_clients"] : null), "suspended")), "html", null, true);
            echo "</a><span>";
            echo gettext("Total");
            echo "</span></li>
    </ul>
    <div class=\"fix\"></div>
</div>
";
        }
    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        // line 99
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 102
        echo gettext("Clients");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 103
        echo gettext("New client");
        echo "</a></li>
        <li><a href=\"#tab-groups\">";
        // line 104
        echo gettext("Groups");
        echo "</a></li>
        <li><a href=\"#tab-new-group\">";
        // line 105
        echo gettext("New group");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "table_search"), "html", null, true);
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 2%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
                        <td colspan=\"2\">";
        // line 117
        echo gettext("Name");
        echo "</td>
                        <td>";
        // line 118
        echo gettext("Company");
        echo "</td>
                        <td width=\"30%\">";
        // line 119
        echo gettext("Email");
        echo "</td>
                        <td>";
        // line 120
        echo gettext("Status");
        echo "</td>
                        <td>";
        // line 121
        echo gettext("Date");
        echo "</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 127
        $context["clients"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page")), (isset($context["request"]) ? $context["request"] : null))), "method");
        // line 128
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["clients"]) ? $context["clients"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 129
            echo "                    <tr>
                        <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\"/></td>
                        <td>
                            <a href=\"";
            // line 132
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\" /></a>
                        </td>
                        <td>
                            <span class=\"flag flag-";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "country"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "country"), array(), "array"), "html", null, true);
            echo "\"></span>
                            <a href=\"";
            // line 136
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "first_name"), "1", null, "."), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "last_name"), 15), "html", null, true);
            echo "</a></td>
                        <td><a href=\"";
            // line 137
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, (($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["client"]) ? $context["client"] : null), "company"), "-")) : ("-")), 30), "html", null, true);
            echo "</a></td>
                        <td><a href=\"";
            // line 138
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email"), 30), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "status_name", array(0 => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "status")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 140
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "created_at"), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn14 bb-rm-tr api-link\" href=\"";
            // line 142
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/delete", array("id" => $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id")));
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                            <a class=\"btn14\" href=\"";
            // line 143
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 147
            echo "                    <tr>
                        <td colspan=\"7\">";
            // line 148
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                </tbody>
            </table>

            ";
        // line 154
        $this->env->loadTemplate("partial_batch_delete.phtml")->display(array_merge($context, array("action" => "admin/client/batch_delete")));
        // line 155
        echo "            ";
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["clients"]) ? $context["clients"] : null), "url" => "client")));
        // line 156
        echo "        </div>

        <div class=\"fix\"></div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"";
        // line 162
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/create");
        echo "\" class=\"mainForm api-form save\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 165
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"status\" value=\"active\" checked=\"checked\"/><label>";
        // line 167
        echo gettext("Active");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"canceled\"/><label>";
        // line 168
        echo gettext("Canceled");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 173
        echo gettext("Group");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "group_id", 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_group_get_pairs"), 2 => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "group_id"), 3 => 0, 4 => "Select group"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 180
        echo gettext("Email");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "email"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 187
        echo gettext("Name");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 200px\"><input type=\"text\" name=\"first_name\" value=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "first_name"), "html", null, true);
        echo "\" required=\"required\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 200px\"><input type=\"text\" name=\"last_name\" value=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "last_name"), "html", null, true);
        echo "\"/></li>
                            </ul>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 198
        echo gettext("Company");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"company\" value=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "company"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 205
        echo gettext("Address Line 1");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"address_1\" value=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address_1"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 212
        echo gettext("Address Line 2");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"address_2\" value=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "address_2"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 219
        echo gettext("City");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"city\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "city"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 226
        echo gettext("State");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 229
        echo "                            <input type=\"text\" name=\"state\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "state"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 234
        echo gettext("Country");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "country", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"), 2 => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "country"), 3 => 0, 4 => "Select country"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 241
        echo gettext("Postcode");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"postcode\" value=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "postcode"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 248
        echo gettext("Phone");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li><input type=\"text\" name=\"phone_cc\" value=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone_cc"), "html", null, true);
        echo "\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 200px;\"><input type=\"text\" name=\"phone\" value=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "phone"), "html", null, true);
        echo "\"/></li>
                            </ul>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 260
        echo gettext("Currency");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 262
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mf"]) ? $context["mf"] : null), "selectbox", array(0 => "currency", 1 => $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs"), 2 => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "currency"), 3 => 0, 4 => "Select currency"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 268
        echo gettext("Password");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 275
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-groups\">
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 284
        echo gettext("Title");
        echo "</td>
                        <td width=\"13%\">";
        // line 285
        echo gettext("Actions");
        echo "</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 290
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "client_group_get_pairs"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["group"]) {
            // line 291
            echo "                    <tr>
                        <td>";
            // line 292
            echo twig_escape_filter($this->env, (isset($context["group"]) ? $context["group"] : null), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn14\" href=\"";
            // line 294
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/group");
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"btn14 api-link bb-rm-tr\" data-api-reload=\"1\" data-api-confirm=\"Are you sure?\" href=\"";
            // line 295
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/group_delete", array("id" => (isset($context["id"]) ? $context["id"] : null)));
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 299
            echo "                    <tr>
                        <td colspan=\"2\">";
            // line 300
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "                </tbody>
            </table>
        </div>


        <div class=\"tab_content nopadding\" id=\"tab-new-group\">

            <form method=\"post\" action=\"";
        // line 310
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/group_create");
        echo "\" class=\"mainForm api-form save\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 313
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "title"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 320
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

    </div>
</div>

";
    }

    // line 330
    public function block_js($context, array $blocks = array())
    {
        // line 331
        echo "


";
    }

    public function getTemplateName()
    {
        return "mod_client_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  758 => 331,  755 => 330,  742 => 320,  734 => 315,  729 => 313,  721 => 310,  712 => 303,  703 => 300,  700 => 299,  691 => 295,  685 => 294,  680 => 292,  677 => 291,  672 => 290,  664 => 285,  660 => 284,  648 => 275,  638 => 268,  629 => 262,  624 => 260,  614 => 253,  609 => 251,  603 => 248,  595 => 243,  590 => 241,  582 => 236,  577 => 234,  568 => 229,  563 => 226,  555 => 221,  550 => 219,  542 => 214,  537 => 212,  529 => 207,  524 => 205,  516 => 200,  511 => 198,  502 => 192,  497 => 190,  491 => 187,  483 => 182,  478 => 180,  470 => 175,  465 => 173,  457 => 168,  453 => 167,  448 => 165,  440 => 162,  432 => 156,  429 => 155,  427 => 154,  422 => 151,  413 => 148,  410 => 147,  399 => 143,  395 => 142,  390 => 140,  386 => 139,  376 => 138,  366 => 137,  352 => 136,  346 => 135,  334 => 132,  329 => 130,  326 => 129,  320 => 128,  318 => 127,  309 => 121,  305 => 120,  301 => 119,  297 => 118,  293 => 117,  285 => 112,  275 => 105,  271 => 104,  267 => 103,  263 => 102,  258 => 99,  255 => 98,  241 => 91,  233 => 90,  225 => 89,  217 => 88,  213 => 86,  211 => 85,  201 => 78,  187 => 71,  178 => 69,  172 => 66,  159 => 60,  151 => 59,  143 => 58,  135 => 57,  130 => 55,  121 => 49,  116 => 47,  107 => 41,  102 => 39,  93 => 33,  88 => 31,  79 => 25,  74 => 23,  65 => 17,  60 => 15,  54 => 12,  47 => 8,  44 => 7,  42 => 6,  39 => 5,  33 => 3,  28 => 2,);
    }
}
