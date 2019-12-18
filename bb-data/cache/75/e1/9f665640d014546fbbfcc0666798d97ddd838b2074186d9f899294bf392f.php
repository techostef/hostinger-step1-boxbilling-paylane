<?php

/* mod_orderbutton_addons.phtml */
class __TwigTemplate_75e19f665640d014546fbbfcc0666798d97ddd838b2074186d9f899294bf392f extends Twig_Template
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
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "addons")) > 0)) {
            // line 2
            echo "<hr/>
<section>
    <header>
        <h2>";
            // line 5
            echo gettext("Addons & extras");
            echo "</h2>
    </header>
</section>
<div class=\"row-fluid\">
        <table class=\"table table-condensed\">
            <tbody>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "addons"));
            foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
                // line 12
                echo "            <label for=\"addon_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                echo "\">
            <tr>
                <td>
                    <input type=\"hidden\" name=\"addons[";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                echo "][selected]\" value=\"0\">
                    <input type=\"checkbox\" name=\"addons[";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                echo "][selected]\" value=\"1\" id=\"addon_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                echo "\">
                </td>

                <td ";
                // line 19
                if ((!$this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "icon_url"))) {
                    echo "style=\"display: none\"";
                }
                echo ">
                    <label for=\"addon_";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "icon_url"), "html", null, true);
                echo "\" alt=\"\" width=\"36\"/></label>
                </td>

                <td>
                    <label for=\"addon_";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                echo "\"><h3>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "title"), "html", null, true);
                echo "</h3></label>
                    ";
                // line 25
                echo twig_bbmd_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "description"));
                echo "
                </td>

                <td class=\"currency\">
                    <label for=\"addon_";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                echo "\">
                    ";
                // line 30
                if (($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "type") === "recurrent")) {
                    // line 31
                    echo "                        ";
                    $context["periods"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_periods");
                    // line 32
                    echo "                        <select name=\"addons[";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                    echo "][period]\" rel=\"addon-periods-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "id"), "html", null, true);
                    echo "\">
                        ";
                    // line 33
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "recurrent"));
                    foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                        // line 34
                        echo "                        ";
                        if ($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "enabled")) {
                            // line 35
                            echo "                        <option value=\"";
                            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["periods"]) ? $context["periods"] : null), (isset($context["code"]) ? $context["code"] : null), array(), "array"), "html", null, true);
                            echo " ";
                            echo twig_money_convert($this->env, $this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "price"));
                            echo " ";
                            if (($this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "setup") != "0.00")) {
                                echo gettext("Setup:");
                                echo " ";
                                echo twig_money_convert($this->env, $this->getAttribute((isset($context["prices"]) ? $context["prices"] : null), "setup"));
                            }
                            echo "</option>
                        ";
                        }
                        // line 37
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "                    </select>
                    ";
                }
                // line 40
                echo "
                    ";
                // line 41
                if (($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "type") === "once")) {
                    // line 42
                    echo "                    ";
                    echo twig_money_convert($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "once"), "price") + $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "once"), "setup")));
                    echo "
                    ";
                }
                // line 44
                echo "
                    ";
                // line 45
                if (($this->getAttribute($this->getAttribute((isset($context["addon"]) ? $context["addon"] : null), "pricing"), "type") === "free")) {
                    // line 46
                    echo "                    ";
                    echo twig_money_convert($this->env, 0);
                    echo "
                    ";
                }
                // line 48
                echo "                    </label>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </tbody>
        </table>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_addons.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 52,  157 => 48,  151 => 46,  149 => 45,  146 => 44,  140 => 42,  135 => 40,  131 => 38,  125 => 37,  109 => 35,  102 => 33,  95 => 32,  92 => 31,  90 => 30,  86 => 29,  73 => 24,  64 => 20,  58 => 19,  50 => 16,  39 => 12,  35 => 11,  26 => 5,  301 => 174,  286 => 162,  280 => 161,  211 => 94,  209 => 93,  203 => 90,  196 => 85,  183 => 77,  179 => 76,  170 => 70,  167 => 69,  154 => 67,  150 => 66,  143 => 64,  138 => 41,  132 => 58,  130 => 57,  118 => 48,  112 => 45,  106 => 34,  100 => 39,  94 => 36,  82 => 27,  79 => 25,  66 => 24,  62 => 23,  59 => 22,  57 => 21,  51 => 20,  46 => 15,  38 => 12,  34 => 10,  32 => 9,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
