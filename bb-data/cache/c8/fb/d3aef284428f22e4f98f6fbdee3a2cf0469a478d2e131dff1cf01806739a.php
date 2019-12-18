<?php

/* mod_invoice_gateways.phtml */
class __TwigTemplate_c8fbd3aef284428f22e4f98f6fbdee3a2cf0469a478d2e131dff1cf01806739a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
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
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = array())
    {
        echo "Payment gateways";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 10
        echo gettext("Payment gateways");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 11
        echo gettext("New payment gateway");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            ";
        // line 17
        echo $context["mf"]->gettable_search();
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 21
        echo gettext("Title");
        echo "</td>
                        <td>";
        // line 22
        echo gettext("Code");
        echo "</td>
                        <td>";
        // line 23
        echo gettext("Enabled");
        echo "</td>
                        <td>";
        // line 24
        echo gettext("Allow one time payments");
        echo "</td>
                        <td>";
        // line 25
        echo gettext("Allow subscriptions");
        echo "</td>
                        <td style=\"width: 18%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_gateway_get_list", array(0 => twig_array_merge(array("per_page" => 100), (isset($context["request"]) ? $context["request"] : null))), "method"), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["gateway"]) {
            // line 32
            echo "                <tr>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "title"), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "code"), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo $context["mf"]->getq($this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "enabled"));
            echo "</td>
                    <td>";
            // line 36
            echo $context["mf"]->getq($this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "allow_single"));
            echo "</td>
                    <td>";
            // line 37
            echo $context["mf"]->getq($this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "allow_recurrent"));
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 39
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/invoice/gateway");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 api-link\" href=\"";
            // line 40
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/gateway_copy", array("id" => $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "id")));
            echo "\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/gateways");
            echo "\" title=\"Copy\"><img src=\"images/icons/dark/baloons.png\" alt=\"\"></a>
                        <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            // line 41
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/gateways");
            echo "\" href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/gateway_delete", array("id" => $this->getAttribute((isset($context["gateway"]) ? $context["gateway"] : null), "id")));
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                </tbody>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                <tbody>
                    <tr>
                        <td colspan=\"5\">
                            ";
            // line 50
            echo gettext("The list is empty");
            // line 51
            echo "                        </td>
                    </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gateway'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">
            ";
        // line 59
        $this->env->loadTemplate("partial_extensions.phtml")->display(array("type" => "payment-gateway", "header" => "List of payment gateways on extensions site"));
        // line 60
        echo "            <div class=\"body\">
                <h1 class=\"pt10\">";
        // line 61
        echo gettext("Adding new payment gateway");
        echo "</h1>
                <p>";
        // line 62
        echo gettext("Although BoxBilling ships with most popular payment gateways, you can install other gateways.");
        echo "</p>
                <p>";
        // line 63
        echo gettext("Follow these instructions to install new payment gateway.");
        echo "</p>
                <div class=\"pt20 list arrowGrey\">
                    <ul>
                        <li>";
        // line 66
        echo gettext("Check for payment gateway at");
        echo " <a href=\"http://extensions.boxbilling.com/\" target=\"_blank\">BoxBilling extensions site</a> ";
        echo gettext("for more payment gateways");
        echo "</li>
                        <li>";
        // line 67
        echo gettext("Download payment gateway extension file and place it to");
        echo "<strong>";
        echo twig_escape_filter($this->env, twig_constant("BB_PATH_LIBRARY"), "html", null, true);
        echo "/Payment/Adapter</strong></li>
                        <li>";
        // line 68
        echo gettext("After file is uploaded in place, reload this page.");
        echo "</li>
                        <li>";
        // line 69
        echo gettext("Select uploaded file name and click on install.");
        echo "</li>
                        <li>";
        // line 70
        echo gettext("Payment gateway will be installed in BoxBilling and can be configured in \"Payment gateways\" tab.");
        echo "</li>
                        <li>";
        // line 71
        echo gettext("For developers. Read");
        echo " <a href=\"http://docs.boxbilling.com/en/latest/reference/extension.html#payment-gateway\" target=\"_blank\">BoxBilling documentation</a> ";
        echo gettext("to learn how to create your own payment gateway and share it with community");
        echo "</li>
                    </ul>
                </div>
            </div>

            ";
        // line 76
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_gateway_get_available")) > 0)) {
            // line 77
            echo "            <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <td>";
            // line 80
            echo gettext("Code");
            echo "</td>
                    <td style=\"width: 5%\">";
            // line 81
            echo gettext("Install");
            echo "</td>
                </tr>
            </thead>

            <tbody>
            ";
            // line 86
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "invoice_gateway_get_available"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                // line 87
                echo "            <tr>
                <td>";
                // line 88
                echo twig_escape_filter($this->env, (isset($context["gtw"]) ? $context["gtw"] : null), "html", null, true);
                echo "</td>
                <td class=\"actions\">
                    <a class=\"bb-button btn14 api-link\" href=\"";
                // line 90
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/gateway_install", array("code" => (isset($context["gtw"]) ? $context["gtw"] : null)));
                echo "\" data-api-redirect=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/gateways");
                echo "\" title=\"Install\"><img src=\"images/icons/dark/cog.png\" alt=\"\"></a>
                </td>
            </tr>
            </tbody>

            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 96
                echo "            <tbody>
                <tr>
                    <td colspan=\"5\">
                        ";
                // line 99
                echo gettext("All payment gateways installed");
                // line 100
                echo "                    </td>
                </tr>
            </tbody>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "        </table>
                ";
        }
        // line 106
        echo "        </div>
        
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_gateways.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 106,  280 => 104,  271 => 100,  269 => 99,  264 => 96,  251 => 90,  246 => 88,  243 => 87,  238 => 86,  230 => 81,  226 => 80,  221 => 77,  219 => 76,  209 => 71,  205 => 70,  201 => 69,  197 => 68,  191 => 67,  185 => 66,  179 => 63,  175 => 62,  171 => 61,  168 => 60,  166 => 59,  160 => 55,  151 => 51,  149 => 50,  144 => 47,  131 => 41,  125 => 40,  119 => 39,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  95 => 32,  90 => 31,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  58 => 17,  49 => 11,  45 => 10,  40 => 7,  37 => 6,  31 => 4,  26 => 3,  24 => 2,);
    }
}
