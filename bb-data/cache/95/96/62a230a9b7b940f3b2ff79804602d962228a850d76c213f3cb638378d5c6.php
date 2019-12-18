<?php

/* mod_order_list.phtml */
class __TwigTemplate_959662a230a9b7b940f3b2ff79804602d962228a850d76c213f3cb638378d5c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
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
        // line 3
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("My Products & Services");
    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 8
        echo "<li class=\"service\">";
        echo gettext("Orders");
        echo "</li>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"row\">
    <article class=\"span12 data-block\">
        <div class=\"data-container\">
            <header>
                <h1>";
        // line 16
        echo gettext("Orders");
        echo "</h1>
                <p>";
        // line 17
        echo gettext("All of your orders are displayed here. Click on any order to get full information about it.");
        echo "</p>
            </header>

            <section>
                <table class=\"table table-striped table-bordered table-condensed table-hover\">
            <thead>
                <tr>
                    <th>";
        // line 24
        echo gettext("Product/Service");
        echo "</th>
                    <th>";
        // line 25
        echo gettext("Price");
        echo "</th>
                    <th>";
        // line 26
        echo gettext("Next due date");
        echo "</th>
                    <th>";
        // line 27
        echo gettext("Status");
        echo "</th>
                    <th>&nbsp</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 32
        $context["orders"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "order_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), "hide_addons" => 1)), "method");
        // line 33
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["order"]) {
            // line 34
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\">
                    <td><a href=\"";
            // line 35
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/order/service/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 36
            echo twig_money($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "total"), $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "currency"));
            echo " ";
            if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period")) {
                echo twig_period_title($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "period"));
            }
            echo "</td>
                    <td>";
            // line 37
            if ($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "expires_at")), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                    <td><span class=\"label ";
            // line 38
            if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "active")) {
                echo "label-success";
            } elseif (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status") == "pending_setup")) {
                echo "label-warning";
            }
            echo "\">";
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "status"));
            echo "</span></td>
                    <td class=\"actions\"><a class=\"bb-button\" href=\"";
            // line 39
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/order/service/manage");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id"), "html", null, true);
            echo "\"><span class=\"dark-icon i-drag\"></span></a></td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "                <tr>
                    <td colspan=\"5\">";
            // line 43
            echo gettext("The list is empty");
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </tbody>

        </table>
                ";
        // line 49
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["orders"]) ? $context["orders"] : null))));
        // line 50
        echo "            </section>
        </article>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mod_order_list.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 50,  163 => 49,  158 => 46,  149 => 43,  146 => 42,  136 => 39,  126 => 38,  118 => 37,  110 => 36,  102 => 35,  97 => 34,  91 => 33,  89 => 32,  81 => 27,  77 => 26,  73 => 25,  69 => 24,  59 => 17,  55 => 16,  49 => 12,  46 => 11,  39 => 8,  36 => 7,  30 => 5,  25 => 3,);
    }
}
