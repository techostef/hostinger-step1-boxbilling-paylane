<?php

/* mod_orderbutton_choose_product.phtml */
class __TwigTemplate_cb0bb87218efb8c77561f5ea2209e09a1c8421174d61ce36df4c4975a57fff40 extends Twig_Template
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
        echo "<div class=\"accordion-group\" id=\"choose-product\">
    ";
        // line 2
        $context["products"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "product_get_list");
        // line 3
        echo "    <div class=\"accordion-heading\">
        <a class=\"accordion-toggle\" href=\"#products\" data-parent=\"#accordion1\" data-toggle=\"collapse\"><span class=\"awe-list\"></span> ";
        // line 4
        echo gettext("Select Product");
        echo "  <span class=\"label label-info pull-right\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["products"]) ? $context["products"] : null), "list")), "html", null, true);
        echo " ";
        echo gettext("Items");
        echo "</span></a>
    </div>
    <div id=\"products\" class=\"accordion-body collapse ";
        // line 6
        if ((((!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "order")) && (!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "cart"))) && (!$this->getAttribute((isset($context["request"]) ? $context["request"] : null), "checkout")))) {
            echo "in";
        }
        echo "\" >
        <div class=\"accordion-inner\">
            <ul class=\"nav nav-list\">
                ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["products"]) ? $context["products"] : null), "list"));
        foreach ($context['_seq'] as $context["i"] => $context["product"]) {
            // line 10
            echo "                <li>
                    <a href=\"";
            // line 11
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("orderbutton", array("order" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"), "show_custom_form_values" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show_custom_form_values")));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title"), "html", null, true);
            echo " <span class=\"awe-arrow-right pull-right\"><span></a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_choose_product.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  51 => 11,  48 => 10,  44 => 9,  36 => 6,  24 => 3,  22 => 2,  290 => 179,  278 => 170,  253 => 148,  236 => 138,  232 => 137,  213 => 121,  186 => 97,  170 => 84,  164 => 80,  158 => 77,  155 => 76,  152 => 75,  150 => 74,  138 => 65,  132 => 61,  130 => 60,  127 => 59,  124 => 58,  121 => 57,  119 => 56,  116 => 55,  114 => 54,  111 => 53,  109 => 52,  104 => 49,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  38 => 8,  34 => 7,  29 => 4,  27 => 4,  25 => 2,  19 => 1,);
    }
}
