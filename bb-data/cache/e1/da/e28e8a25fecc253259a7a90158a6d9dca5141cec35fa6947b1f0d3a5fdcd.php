<?php

/* mod_client_balance.phtml */
class __TwigTemplate_e1dae28e8a25fecc253259a7a90158a6d9dca5141cec35fa6947b1f0d3a5fdcd extends Twig_Template
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
        // line 5
        $context["profile"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_get");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Payments history");
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo " <li class=\"active\">";
        echo gettext("Payments history");
        echo "</li>";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
<article class=\"span12 data-block\">
    <div class=\"data-container\">

        <header>
           <h1>";
        // line 13
        echo gettext("Payments history");
        echo "</h1>
           <p>";
        // line 14
        echo gettext("Here you can track what you have been charged for and add more funds to your account");
        echo "</p>
        </header>

        <section>
            <table class=\"table table-striped table-bordered table-condensed table-hover\">
                <thead>
                <tr>
                    <th>";
        // line 21
        echo gettext("Description");
        echo "</th>
                    <th>";
        // line 22
        echo gettext("Date");
        echo "</th>
                    <th>";
        // line 23
        echo gettext("Amount");
        echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 27
        $context["transactions"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "client_balance_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"))), "method");
        // line 28
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["transactions"]) ? $context["transactions"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 29
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\">
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "description"), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "created_at")), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_money($this->env, $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "amount"), $this->getAttribute((isset($context["tx"]) ? $context["tx"] : null), "currency"));
            echo "</td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                <tr>
                    <td colspan=\"3\">";
            // line 36
            echo gettext("The list is empty");
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"2\">";
        // line 42
        echo gettext("Total:");
        echo "</td>
                        <td><strong>";
        // line 43
        echo twig_money($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "balance"), $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "currency"));
        echo "</strong></td>
                    </tr>
                </tfoot>
            </table>
            ";
        // line 47
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["transactions"]) ? $context["transactions"] : null))));
        // line 48
        echo "
            <div class=\"row-fluid\">

                <div class=\"span3\">
                    <form action=\"\" method=\"post\" class=\"form-inline api-form\" data-api-url=\"";
        // line 52
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/client/invoice/funds_invoice");
        echo "\" data-api-jsonp=\"onAfterInvoiceCreated\">
                        <fieldset>
                            <div class=\"control-group\">
                                <div class=\"form-controls\">
                                    <div class=\"input-append\">
                                        <input id=\"appendedPrependedInput\" class=\"span4\" type=\"text\" name=\"amount\" placeholder=\"0\" required=\"required\"><button class=\"btn\" type=\"submit\">";
        // line 57
        echo gettext("Add funds!");
        echo "</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

            </div>

        </section>

</article>
</div>

";
    }

    // line 74
    public function block_js($context, array $blocks = array())
    {
        // line 75
        echo "<script type=\"text/javascript\">
    function onAfterInvoiceCreated(hash) {
        var link = '";
        // line 77
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
        echo "/' + hash;
        bb.redirect(link);
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_client_balance.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 77,  182 => 75,  179 => 74,  159 => 57,  151 => 52,  145 => 48,  143 => 47,  136 => 43,  132 => 42,  127 => 39,  118 => 36,  115 => 35,  107 => 32,  103 => 31,  99 => 30,  94 => 29,  88 => 28,  86 => 27,  79 => 23,  75 => 22,  71 => 21,  61 => 14,  57 => 13,  50 => 8,  47 => 7,  39 => 4,  33 => 3,  28 => 5,  26 => 2,);
    }
}
