<?php

/* mod_orderbutton_product_configuration.phtml */
class __TwigTemplate_fe702eedf97a099b28943a219a2e3747fb521cf65ae1d1de302b3bddb4f1382b extends Twig_Template
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
        $context["product"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "order")) ? ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "product_get", array(0 => array("id" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "order"))), "method")) : (null));
        // line 2
        echo "<div class=\"accordion-group\" id=\"product-configuration\">
    <div class=\"accordion-heading\">
        <a class=\"accordion-toggle\" href=\"#order\" data-parent=\"#accordion1\" data-toggle=\"collapse\"><span class=\"awe-cog\"></span> ";
        // line 4
        echo gettext("Product Configuration");
        echo "</a>
    </div>
    ";
        // line 6
        if ((isset($context["product"]) ? $context["product"] : null)) {
            // line 7
            echo "    <div id=\"order\" class=\"accordion-body collapse ";
            if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "order")) {
                echo "in";
            }
            echo "\">
        <div class=\"accordion-inner\">
            <form method=\"post\" style=\"background:none;\" class=\"form-";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "form_id")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "formbuilder_get", array(0 => array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "form_id"))), "method"), "style"), "type")) : (0)), "html", null, true);
            echo "\" action=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/order");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "slug"), "html", null, true);
            echo "\" id=\"add-to-cart\" onsubmit=\"return false;\">

            ";
            // line 11
            ob_start();
            // line 12
            echo "            <div class=\"well\">
                <strong>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
            echo "</strong>
                ";
            // line 14
            echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"));
            echo "

                ";
            // line 16
            if (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "pricing"), "type") == "recurrent")) {
                // line 17
                echo "                ";
                $context["periods"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods");
                // line 18
                echo "                <select name=\"period\" id=\"period-selector\">
                    ";
                // line 19
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "pricing"), "recurrent"));
                foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                    // line 20
                    echo "                    ";
                    if ($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "enabled")) {
                        // line 21
                        echo "                    <option value=\"";
                        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                        echo "\" data-bb-price=\"";
                        echo twig_money_convert($this->env, $this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "price"));
                        echo "\" name=\"period\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periods"]) ? $context["periods"] : null), (isset($context["code"]) ? $context["code"] : null), array(), "array"), "html", null, true);
                        echo " - ";
                        echo twig_money_convert($this->env, $this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "price"));
                        echo "</option>
                    ";
                    }
                    // line 23
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                </select>
                ";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "pricing"), "type") == "free")) {
                // line 26
                echo "                <span class=\"label label-info\">";
                echo gettext("FREE");
                echo "</span>
                ";
            } else {
                // line 28
                echo "                <span class=\"label label-info\">";
                echo twig_money_convert($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "pricing"), "once"), "price"));
                echo "</span>
                ";
            }
            // line 30
            echo "            </div>
            ";
            $context["product_details"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 32
            echo "
            ";
            // line 33
            $context["tpl"] = (("mod_service" . $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "type")) . "_order_form.phtml");
            // line 34
            echo "            ";
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_template_exists", array(0 => array("file" => (isset($context["tpl"]) ? $context["tpl"] : null))), "method")) {
                // line 35
                echo "                ";
                $template = $this->env->resolveTemplate((isset($context["tpl"]) ? $context["tpl"] : null));
                $template->display(array_merge($context, (isset($context["product"]) ? $context["product"] : null)));
                // line 36
                echo "            ";
            } elseif (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "form_id") && $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "formbuilder")), "method"))) {
                // line 37
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["product_details"]) ? $context["product_details"] : null), "html", null, true);
                echo "
                ";
                // line 38
                $context["form"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "formbuilder_get", array(0 => array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "form_id"))), "method");
                // line 39
                echo "                ";
                $this->env->loadTemplate("mod_formbuilder_build.phtml")->display(array_merge($context, (isset($context["product"]) ? $context["product"] : null)));
                // line 40
                echo "            ";
            } else {
                // line 41
                echo "                ";
                echo twig_escape_filter($this->env, (isset($context["product_details"]) ? $context["product_details"] : null), "html", null, true);
                echo "
            ";
            }
            // line 43
            echo "
            ";
            // line 44
            $this->env->loadTemplate("mod_orderbutton_addons.phtml")->display(array_merge($context, (isset($context["product"]) ? $context["product"] : null)));
            // line 45
            echo "
            <input type=\"hidden\" name=\"multiple\" value=\"1\" />
            <input type=\"hidden\" name=\"id\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "html", null, true);
            echo "\" />
               <button type=\"submit\" class=\"btn btn-primary\">";
            // line 48
            echo gettext("Order");
            echo "</button>
        </div>
        </form>
    </div>
    ";
        }
        // line 53
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_product_configuration.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 53,  163 => 48,  159 => 47,  153 => 44,  144 => 41,  141 => 40,  136 => 38,  131 => 37,  128 => 36,  112 => 30,  106 => 28,  100 => 26,  96 => 24,  90 => 23,  78 => 21,  75 => 20,  71 => 19,  68 => 18,  63 => 16,  58 => 14,  54 => 13,  40 => 9,  32 => 7,  30 => 6,  21 => 2,  62 => 14,  51 => 12,  48 => 10,  44 => 9,  36 => 6,  24 => 3,  22 => 2,  290 => 179,  278 => 170,  253 => 148,  236 => 138,  232 => 137,  213 => 121,  186 => 97,  170 => 84,  164 => 80,  158 => 77,  155 => 45,  152 => 75,  150 => 43,  138 => 39,  132 => 61,  130 => 60,  127 => 59,  124 => 35,  121 => 34,  119 => 33,  116 => 32,  114 => 54,  111 => 53,  109 => 52,  104 => 49,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 11,  45 => 12,  38 => 8,  34 => 7,  29 => 4,  27 => 4,  25 => 4,  19 => 1,);
    }
}
