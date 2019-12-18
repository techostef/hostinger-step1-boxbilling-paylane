<?php

/* mod_invoice_index.phtml */
class __TwigTemplate_f82d7dd88ddeab6e71f2a8b008d7f9a9b352e0330d5a24beb0d324dc856dffcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'page_header' => array($this, 'block_page_header'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Invoice management");
    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        echo gettext("Invoice management");
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 6
        echo "    <li class=\"active\">";
        echo gettext("Invoices");
        echo "</li>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        $context["unpaid_invoices"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_list", array(0 => array("status" => "unpaid", "per_page" => 100)), "method");
        // line 12
        $context["paid_invoices"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "invoice_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), "status" => "paid")), "method");
        // line 13
        echo "
<div class=\"row\">
        <article class=\"span12 data-block\">
            <div class=\"data-container\">
                <header>
                    <h1>";
        // line 18
        echo gettext("List of invoices");
        echo "</h1><br/>
                    ";
        // line 19
        echo gettext("All of your invoices can be found here. You can choose to see either paid or unpaid invoices by clicking corresponding button.");
        // line 20
        echo "                    <ul class=\"data-header-actions\">
                        <li class=\"demoTabs active\"><a href=\"#unpaid\" class=\"btn btn-alt btn-inverse\" data-toggle=\"tab\">";
        // line 21
        echo gettext("Unpaid");
        echo "</a></li>
                        <li class=\"demoTabs\" ><a href=\"#paid\" class=\"btn btn-alt btn-inverse\" data-toggle=\"tab\">";
        // line 22
        echo gettext("Paid");
        echo "</a></li>
                    </ul>
                </header>
                <section class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"unpaid\">
                    <h3>";
        // line 27
        echo gettext("Unpaid");
        echo "</h3>

                        <table class=\"table table-hover table-striped\">
                            <thead>
                            <tr>
                                <th>";
        // line 32
        echo gettext("Title");
        echo "</th>
                                <th>";
        // line 33
        echo gettext("Issue Date");
        echo "</th>
                                <th>";
        // line 34
        echo gettext("Due Date");
        echo "</th>
                                <th>";
        // line 35
        echo gettext("Total");
        echo "</th>
                                <th>&nbsp</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 40
        if (($this->getAttribute((isset($context["unpaid_invoices"]) ? $context["unpaid_invoices"] : null), "total") > 0)) {
            // line 41
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["unpaid_invoices"]) ? $context["unpaid_invoices"] : null), "list"));
            foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
                // line 42
                echo "                            <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                                <td>";
                // line 43
                echo twig_escape_filter($this->env, sprintf("Proforma invoice #%05s", $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id")), "html", null, true);
                echo "</td>
                                <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at")), "html", null, true);
                echo "</td>
                                <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "due_at")), "html", null, true);
                echo "</td>
                                <td>";
                // line 46
                echo twig_money($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
                echo "</td>
                                <td><a class=\"btn btn-small btn-primary\" href=\"";
                // line 47
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
                echo "\">";
                echo gettext("Pay");
                echo "</a></td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                            ";
        } else {
            // line 51
            echo "                            <tr>
                                <td colspan=\"5\" >";
            // line 52
            echo gettext("The list is empty");
            echo "</td>
                            </tr>
                            ";
        }
        // line 55
        echo "
                            </tbody>
                        </table>

                    </div>

                    <div class=\"tab-pane\" id=\"paid\">
                    <h3>";
        // line 62
        echo gettext("Paid");
        echo "</h3>

                        <table class=\"table table-hover table-striped\">
                            <thead>
                            <tr>
                                <th>";
        // line 67
        echo gettext("Title");
        echo "</th>
                                <th>";
        // line 68
        echo gettext("Issue Date");
        echo "</th>
                                <th>";
        // line 69
        echo gettext("Paid at");
        echo "</th>
                                <th>";
        // line 70
        echo gettext("Total");
        echo "</th>
                                <th>&nbsp</th>
                            </tr>
                            </thead>

                            <tbody>
                            ";
        // line 76
        if (($this->getAttribute((isset($context["paid_invoices"]) ? $context["paid_invoices"] : null), "total") > 0)) {
            // line 77
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paid_invoices"]) ? $context["paid_invoices"] : null), "list"));
            foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
                // line 78
                echo "
                            <tr class=\"";
                // line 79
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                echo "\">
                                <td>";
                // line 80
                echo twig_escape_filter($this->env, sprintf("Proforma invoice #%05s", $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "id")), "html", null, true);
                echo "</td>
                                <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "created_at")), "html", null, true);
                echo "</td>
                                <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "paid_at")), "html", null, true);
                echo "</td>
                                <td>";
                // line 83
                echo twig_money($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "total"), $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "currency"));
                echo "</td>
                                <td><a href=\"";
                // line 84
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["invoice"]) ? $context["invoice"] : null), "hash"), "html", null, true);
                echo "\" class=\"btn btn-primary btn-small\">";
                echo gettext("View");
                echo "</a></td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                            ";
        } else {
            // line 88
            echo "                            <tr>
                                <td colspan=\"7\">";
            // line 89
            echo gettext("The list is empty");
            echo "</td>
                            </tr>
                            ";
        }
        // line 92
        echo "                            </tbody>
                        </table>

                    </div>
                </section>
                <footer>
                    <p>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unpaid_invoices"]) ? $context["unpaid_invoices"] : null), "total"), "html", null, true);
        echo " unpaid invoices and ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paid_invoices"]) ? $context["paid_invoices"] : null), "total"), "html", null, true);
        echo " paid invoices</p>
                </footer>
            </div>
        </article>
        </div>
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
        return array (  271 => 98,  263 => 92,  257 => 89,  254 => 88,  251 => 87,  238 => 84,  234 => 83,  230 => 82,  226 => 81,  222 => 80,  218 => 79,  215 => 78,  210 => 77,  208 => 76,  199 => 70,  195 => 69,  191 => 68,  187 => 67,  179 => 62,  170 => 55,  164 => 52,  161 => 51,  158 => 50,  145 => 47,  141 => 46,  137 => 45,  133 => 44,  129 => 43,  124 => 42,  119 => 41,  117 => 40,  109 => 35,  105 => 34,  101 => 33,  97 => 32,  89 => 27,  81 => 22,  77 => 21,  74 => 20,  72 => 19,  68 => 18,  61 => 13,  59 => 12,  57 => 11,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  35 => 3,  29 => 2,);
    }
}
