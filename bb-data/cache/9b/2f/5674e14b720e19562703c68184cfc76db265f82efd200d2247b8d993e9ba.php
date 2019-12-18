<?php

/* macro_functions.phtml */
class __TwigTemplate_9b2f5674e14b720e19562703c68184cfc76db265f82efd200d2247b8d993e9ba extends Twig_Template
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
        // line 9
        echo "
";
        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 27
        echo "
";
        // line 31
        echo "
";
        // line 36
        echo "
";
        // line 45
        echo "

";
    }

    // line 1
    public function getselectbox($_name = null, $_options = null, $_selected = null, $_required = null, $_nullOption = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "required" => $_required,
            "nullOption" => $_nullOption,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo "required=\"required\"";
            }
            echo ">
        ";
            // line 3
            if ((isset($context["nullOption"]) ? $context["nullOption"] : null)) {
                echo "<option value=\"\">-- ";
                echo twig_escape_filter($this->env, (isset($context["nullOption"]) ? $context["nullOption"] : null), "html", null, true);
                echo " --</option>";
            }
            // line 4
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 5
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null));
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == (isset($context["val"]) ? $context["val"] : null))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null));
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getselectboxtld($_name = null, $_options = null, $_selected = null, $_required = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "required" => $_required,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo "required=\"required\"";
            }
            echo " style=\"width:80px;\">
        ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 13
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tld"), "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tld"), "html", null, true);
                echo "\" ";
                if (((isset($context["selected"]) ? $context["selected"] : null) == $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tld"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tld"), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getcurrency_format($_price = null, $_currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $_price,
            "currency" => $_currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "    ";
            echo twig_money($this->env, (isset($context["price"]) ? $context["price"] : null), (isset($context["currency"]) ? $context["currency"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getcurrency($_price = null, $_currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $_price,
            "currency" => $_currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "    ";
            echo twig_money_convert($this->env, (isset($context["price"]) ? $context["price"] : null), (isset($context["currency"]) ? $context["currency"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function getstatus_name($_status = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $_status,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            echo "    ";
            echo twig_escape_filter($this->env, gettext(twig_title_string_filter($this->env, strtr((isset($context["status"]) ? $context["status"] : null), array("_" => " ")))), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getperiod_name($_period = null)
    {
        $context = $this->env->mergeGlobals(array(
            "period" => $_period,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            echo twig_period_title($this->env, (isset($context["period"]) ? $context["period"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getmarkdown_quote($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "


";
            // line 41
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter((isset($context["text"]) ? $context["text"] : null), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 42
                echo "> ";
                echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : null), "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getrecaptcha()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 48
            echo "
";
            // line 49
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "spamchecker")), "method")) {
                // line 50
                $context["rc"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "spamchecker_recaptcha");
                // line 51
                echo "    ";
                if ($this->getAttribute((isset($context["rc"]) ? $context["rc"] : null), "enabled")) {
                    // line 52
                    echo "        ";
                    if (($this->getAttribute((isset($context["rc"]) ? $context["rc"] : null), "version") == 2)) {
                        // line 53
                        echo "            <script src='https://www.google.com/recaptcha/api.js' async defer></script>
            <div class=\"g-recaptcha\" data-sitekey=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rc"]) ? $context["rc"] : null), "publickey"), "html", null, true);
                        echo "\"></div>
        ";
                    } else {
                        // line 56
                        echo "
        ";
                        // line 57
                        $context["server"] = "https://www.google.com/recaptcha/api";
                        // line 58
                        echo "           <script type=\"text/javascript\">
                var RecaptchaOptions = {
                theme : 'custom',
                custom_theme_widget: 'recaptcha_widget'
            };
            </script>

            <div id=\"recaptcha_widget\" style=\"display:none\">

            <div id=\"recaptcha_image\"></div>
            <div class=\"recaptcha_only_if_incorrect_sol\" style=\"color:red\">";
                        // line 68
                        echo gettext("Incorrect please try again");
                        echo "</div>

            <p>
                <label>";
                        // line 71
                        echo gettext("Enter the words above");
                        echo "</label>
                <br/>
                <input type=\"text\" id=\"recaptcha_response_field\" name=\"recaptcha_response_field\" style=\"width: 245px\"/>
                    <a class=\"bb-button\" href=\"javascript:Recaptcha.reload()\" style=\"float: right\"><span class=\"dark-icon i-reload\"></span></a>
            </p>
            </div>

            <script type=\"text/javascript\" src=\"";
                        // line 78
                        echo twig_escape_filter($this->env, (isset($context["server"]) ? $context["server"] : null), "html", null, true);
                        echo "/challenge?k=";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rc"]) ? $context["rc"] : null), "publickey"), "html", null, true);
                        echo "\"></script>
            <noscript>
                <iframe src=\"";
                        // line 80
                        echo twig_escape_filter($this->env, (isset($context["server"]) ? $context["server"] : null), "html", null, true);
                        echo "/noscript?k=";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rc"]) ? $context["rc"] : null), "publickey"), "html", null, true);
                        echo "\" height=\"300\" width=\"500\" frameborder=\"0\"></iframe><br/>
                <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
                <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\"/>
            </noscript>
        ";
                    }
                    // line 85
                    echo "    ";
                }
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macro_functions.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 85,  374 => 80,  357 => 71,  351 => 68,  339 => 58,  337 => 57,  334 => 56,  329 => 54,  326 => 53,  323 => 52,  320 => 51,  318 => 50,  316 => 49,  304 => 47,  281 => 41,  276 => 38,  265 => 37,  251 => 34,  240 => 33,  215 => 28,  201 => 25,  189 => 24,  151 => 15,  134 => 13,  130 => 12,  121 => 11,  107 => 10,  95 => 7,  78 => 5,  73 => 4,  67 => 3,  34 => 36,  28 => 27,  25 => 22,  22 => 17,  19 => 9,  558 => 221,  549 => 218,  546 => 217,  534 => 214,  526 => 213,  521 => 212,  516 => 211,  508 => 206,  497 => 197,  488 => 194,  485 => 193,  471 => 190,  463 => 189,  458 => 188,  453 => 187,  445 => 182,  430 => 170,  426 => 169,  422 => 168,  418 => 167,  414 => 166,  410 => 165,  399 => 159,  393 => 158,  387 => 155,  375 => 146,  371 => 145,  367 => 78,  363 => 143,  359 => 142,  355 => 141,  344 => 135,  338 => 134,  332 => 131,  317 => 119,  313 => 48,  309 => 117,  305 => 116,  301 => 115,  297 => 114,  286 => 42,  280 => 105,  268 => 96,  264 => 95,  260 => 94,  256 => 93,  252 => 92,  248 => 91,  237 => 85,  231 => 82,  226 => 29,  224 => 78,  220 => 76,  210 => 68,  200 => 64,  196 => 62,  183 => 58,  179 => 57,  175 => 20,  171 => 55,  163 => 19,  159 => 53,  155 => 52,  152 => 51,  147 => 50,  140 => 46,  136 => 45,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  111 => 35,  105 => 31,  103 => 30,  101 => 29,  98 => 28,  96 => 27,  93 => 26,  85 => 23,  81 => 22,  77 => 21,  74 => 20,  72 => 19,  69 => 18,  66 => 17,  58 => 2,  52 => 9,  49 => 8,  46 => 7,  43 => 1,  37 => 45,  31 => 31,  26 => 15,);
    }
}
