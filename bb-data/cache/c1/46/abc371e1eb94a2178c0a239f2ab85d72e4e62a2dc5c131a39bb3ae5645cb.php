<?php

/* mod_orderbutton_currency.phtml */
class __TwigTemplate_c146abc371e1eb94a2178c0a239f2ab85d72e4e62a2dc5c131a39bb3ae5645cb extends Twig_Template
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
        $context["currencies"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get_pairs");
        // line 2
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 3
            echo "        <select name=\"currency\" class=\"currency_selector input-mini pull-right\">
            ";
            // line 4
            $context["selected"] = $this->getAttribute($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "cart_get_currency"), "code");
            // line 5
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["title"]) {
                // line 6
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "\" class=\"currency_";
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo "\"";
                if (((isset($context["code"]) ? $context["code"] : null) == (isset($context["selected"]) ? $context["selected"] : null))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </select>
";
        }
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_currency.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  33 => 6,  28 => 5,  26 => 4,  23 => 3,  557 => 212,  551 => 209,  539 => 200,  532 => 195,  517 => 184,  511 => 182,  509 => 181,  505 => 179,  501 => 177,  487 => 176,  479 => 173,  471 => 172,  466 => 171,  463 => 170,  446 => 169,  443 => 168,  440 => 167,  438 => 166,  428 => 159,  424 => 158,  421 => 157,  415 => 154,  409 => 153,  406 => 152,  403 => 151,  400 => 150,  397 => 149,  395 => 148,  392 => 147,  386 => 144,  382 => 143,  376 => 140,  372 => 139,  369 => 138,  367 => 137,  359 => 131,  354 => 120,  348 => 118,  340 => 116,  338 => 115,  328 => 114,  319 => 110,  316 => 109,  310 => 107,  308 => 106,  301 => 101,  295 => 100,  291 => 98,  285 => 96,  280 => 94,  275 => 93,  273 => 92,  266 => 90,  263 => 89,  261 => 88,  258 => 87,  252 => 83,  247 => 80,  241 => 79,  235 => 78,  228 => 75,  222 => 73,  219 => 72,  207 => 69,  204 => 68,  199 => 67,  196 => 66,  190 => 65,  184 => 64,  178 => 62,  175 => 61,  165 => 59,  157 => 55,  154 => 54,  151 => 53,  148 => 52,  143 => 51,  139 => 50,  135 => 48,  133 => 47,  122 => 42,  105 => 36,  95 => 33,  93 => 32,  89 => 30,  83 => 28,  81 => 27,  72 => 24,  70 => 23,  66 => 22,  50 => 14,  46 => 13,  171 => 53,  163 => 58,  159 => 47,  153 => 44,  144 => 41,  141 => 40,  136 => 38,  131 => 37,  128 => 45,  112 => 30,  106 => 28,  100 => 34,  96 => 24,  90 => 23,  78 => 26,  75 => 20,  71 => 19,  68 => 18,  63 => 16,  58 => 19,  54 => 13,  40 => 9,  32 => 6,  30 => 6,  21 => 2,  62 => 20,  51 => 12,  48 => 10,  44 => 9,  36 => 6,  24 => 3,  22 => 2,  290 => 179,  278 => 170,  253 => 148,  236 => 138,  232 => 77,  213 => 71,  186 => 97,  170 => 60,  164 => 80,  158 => 77,  155 => 45,  152 => 75,  150 => 43,  138 => 39,  132 => 61,  130 => 46,  127 => 59,  124 => 43,  121 => 34,  119 => 33,  116 => 32,  114 => 39,  111 => 38,  109 => 52,  104 => 49,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 11,  45 => 12,  38 => 8,  34 => 7,  29 => 4,  27 => 4,  25 => 4,  19 => 1,);
    }
}
