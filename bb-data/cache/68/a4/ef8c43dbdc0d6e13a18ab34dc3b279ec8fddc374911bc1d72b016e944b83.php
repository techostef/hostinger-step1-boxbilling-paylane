<?php

/* macro_functions.phtml */
class __TwigTemplate_68a4ef8c43dbdc0d6e13a18ab34dc3b279ec8fddc374911bc1d72b016e944b83 extends Twig_Template
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
        // line 4
        echo "
";
        // line 13
        echo "
";
        // line 21
        echo "
";
        // line 32
        echo "
";
        // line 70
        echo "
";
        // line 87
        echo "
";
        // line 111
        echo "
";
        // line 113
        echo "
";
        // line 117
        echo "
";
        // line 126
        echo "
";
    }

    // line 1
    public function getq($_bool = null)
    {
        $context = $this->env->mergeGlobals(array(
            "bool" => $_bool,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if ((isset($context["bool"]) ? $context["bool"] : null)) {
                echo gettext("Yes");
            } else {
                echo gettext("No");
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
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
            // line 6
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo "required=\"required\"";
            }
            echo ">
        ";
            // line 7
            if ((isset($context["nullOption"]) ? $context["nullOption"] : null)) {
                echo "<option value=\"\">-- ";
                echo twig_escape_filter($this->env, (isset($context["nullOption"]) ? $context["nullOption"] : null), "html", null, true);
                echo " --</option>";
            }
            // line 8
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 9
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
            // line 11
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
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
            // line 15
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                echo "required=\"required\"";
            }
            echo " style=\"width:80px;\">
        ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 17
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
            // line 19
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function gettable_search()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "<div style=\"position: relative;\">
    <div class=\"dataTables_filter\">
        <form method=\"get\" action=\"\">
            <input type=\"hidden\" name=\"_url\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "_url"), "html", null, true);
            echo "\"/>
            <label>";
            // line 27
            echo gettext("Search:");
            echo " <input type=\"text\" name=\"search\" placeholder=\"";
            echo gettext("Enter search text..");
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "search"), "html", null, true);
            echo "\"><div class=\"srch\"></div></label>
        </form>
    </div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getbuild_form($_elements = null, $_values = null)
    {
        $context = $this->env->mergeGlobals(array(
            "elements" => $_elements,
            "values" => $_values,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["element"]) {
                // line 35
                echo "    <div class=\"rowElem\">
            ";
                // line 36
                if (($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 0, array(), "array") == "select")) {
                    // line 37
                    echo "            <label class=\"topLabel\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "label"), "html", null, true);
                    if ($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description")) {
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description"), "html", null, true);
                    }
                    echo "</label>
            <div class=\"formBottom\">
                <select name=\"config[";
                    // line 39
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "]\">
                ";
                    // line 40
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "multiOptions"));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 41
                        echo "                    <option value=\"";
                        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                        echo "\" ";
                        if (((isset($context["k"]) ? $context["k"] : null) == $this->getAttribute((isset($context["values"]) ? $context["values"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"))) {
                            echo "selected=\"selected\"";
                        }
                        echo "/><label>";
                        echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                        echo "</label>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "                </select>
            </div>
            <div class=\"fix\"></div>
            ";
                } elseif (($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 0, array(), "array") == "radio")) {
                    // line 47
                    echo "            <label>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "label"), "html", null, true);
                    if ($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description")) {
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description"), "html", null, true);
                    }
                    echo "</label>
            <div class=\"formRight\">
                ";
                    // line 49
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "multiOptions"));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 50
                        echo "                    <input id=\"el-";
                        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                        echo "\" type=\"radio\" name=\"config[";
                        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                        echo "]\" value=\"";
                        echo twig_escape_filter($this->env, (isset($context["k"]) ? $context["k"] : null), "html", null, true);
                        echo "\" ";
                        if (((isset($context["k"]) ? $context["k"] : null) == $this->getAttribute((isset($context["values"]) ? $context["values"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"))) {
                            echo "checked=\"checked\"";
                        }
                        echo "/><label>";
                        echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : null), "html", null, true);
                        echo "</label>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "            </div>
            <div class=\"fix\"></div>
            ";
                } elseif (($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 0, array(), "array") == "textarea")) {
                    // line 55
                    echo "            <label class=\"topLabel\" for=\"el-";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "label"), "html", null, true);
                    if ($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description")) {
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description"), "html", null, true);
                    }
                    echo "</label>
            <div class=\"formBottom\">
                <textarea id=\"el-";
                    // line 57
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\" name=\"config[";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "]\" cols=\"5\" rows=\"20\" required=\"required\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "html", null, true);
                    echo "</textarea>
            </div>
            <div class=\"fix\"></div>
            ";
                } else {
                    // line 61
                    echo "            <label class=\"topLabel\" for=\"el-";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "label"), "html", null, true);
                    if ($this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description")) {
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "description"), "html", null, true);
                    }
                    echo "</label>
            <div class=\"formBottom\">
                <input id=\"el-";
                    // line 63
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "\" type=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : null), 0, array(), "array"), "html", null, true);
                    echo "\" name=\"config[";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
                    echo "]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["values"]) ? $context["values"] : null), (isset($context["name"]) ? $context["name"] : null), array(), "array"), "html", null, true);
                    echo "\" ";
                    if (((!$this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array", false, true), "required", array(), "any", true, true)) && ((!$this->getAttribute($this->getAttribute((isset($context["element"]) ? $context["element"] : null), 1, array(), "array"), "required")) == "false"))) {
                        echo "required=\"required\"";
                    }
                    echo "/>
            </div>
            <div class=\"fix\"></div>
            ";
                }
                // line 67
                echo "    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 71
    public function getcurrency_format($_price = null, $_currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $_price,
            "currency" => $_currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 72
            echo "    ";
            $context["c"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get", array(0 => array("code" => (isset($context["currency"]) ? $context["currency"] : null))), "method");
            // line 73
            echo "    ";
            $context["p"] = twig_number_filter((isset($context["price"]) ? $context["price"] : null));
            // line 74
            echo "    ";
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 1)) {
                // line 75
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "2", ".", "");
                // line 76
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 2)) {
                // line 77
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "2", ".", ",");
                // line 78
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 3)) {
                // line 79
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "2", ",", ".");
                // line 80
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 4)) {
                // line 81
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "0", "", ",");
                // line 82
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 5)) {
                // line 83
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), 0, "", "");
                // line 84
                echo "    ";
            }
            // line 85
            echo "    ";
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "format"), array("{{price}}" => (isset($context["p"]) ? $context["p"] : null))), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 88
    public function getcurrency($_price = null, $_currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $_price,
            "currency" => $_currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 89
            echo "    ";
            if (((isset($context["currency"]) ? $context["currency"] : null) == null)) {
                // line 90
                echo "        ";
                $context["c"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "cart_get_currency");
                // line 91
                echo "    ";
            } else {
                // line 92
                echo "        ";
                $context["c"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "currency_get", array(0 => array("code" => (isset($context["currency"]) ? $context["currency"] : null))), "method");
                // line 93
                echo "    ";
            }
            // line 94
            echo "
    ";
            // line 95
            $context["p"] = ((isset($context["price"]) ? $context["price"] : null) * $this->getAttribute((isset($context["c"]) ? $context["c"] : null), "conversion_rate"));
            // line 96
            echo "    
    ";
            // line 97
            if (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 1)) {
                // line 98
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "2", ".", "");
                // line 99
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 2)) {
                // line 100
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "2", ".", ",");
                // line 101
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 3)) {
                // line 102
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "2", ",", ".");
                // line 103
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 4)) {
                // line 104
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), "0", "", ",");
                // line 105
                echo "    ";
            } elseif (($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "price_format") == 5)) {
                // line 106
                echo "        ";
                $context["p"] = twig_number_filter((isset($context["p"]) ? $context["p"] : null), 0, "", "");
                // line 107
                echo "    ";
            }
            // line 108
            echo "    
    ";
            // line 109
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["c"]) ? $context["c"] : null), "format"), array("{{price}}" => (isset($context["p"]) ? $context["p"] : null))), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 112
    public function getstatus_name($_status = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $_status,
        ));

        $blocks = array();

        ob_start();
        try {
            if ((isset($context["status"]) ? $context["status"] : null)) {
                echo twig_escape_filter($this->env, gettext(twig_title_string_filter($this->env, strtr((isset($context["status"]) ? $context["status"] : null), array("_" => " ")))), "html", null, true);
            } else {
                echo "-";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 114
    public function getperiod_name($_period = null)
    {
        $context = $this->env->mergeGlobals(array(
            "period" => $_period,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 115
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_period_title", array(0 => array("code" => (isset($context["period"]) ? $context["period"] : null))), "method"), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 118
    public function getmarkdown_quote($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 119
            echo "


";
            // line 122
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter((isset($context["text"]) ? $context["text"] : null), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 123
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

    // line 127
    public function getbb_editor($_selector = null)
    {
        $context = $this->env->mergeGlobals(array(
            "selector" => $_selector,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 128
            if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "wysiwyg")), "method")) {
                // line 129
                $this->env->loadTemplate("mod_wysiwyg_js.phtml")->display(array_merge($context, array("class" => trim((isset($context["selector"]) ? $context["selector"] : null), ".#"))));
            } else {
                // line 131
                echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"js/markitup/skins/boxbilling/style.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"js/markitup/sets/markdown/style.css\" />
<script src=\"js/markitup/jquery.markitup.js\" type=\"text/javascript\"></script>
<script src=\"js/markitup/sets/markdown/set.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" >
    \$(document).ready(function() {
        \$(\"";
                // line 137
                echo twig_escape_filter($this->env, (isset($context["selector"]) ? $context["selector"] : null), "html", null, true);
                echo "\").markItUp(mySettings);
    });
</script>
";
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
        return array (  665 => 137,  657 => 131,  654 => 129,  652 => 128,  641 => 127,  623 => 123,  618 => 122,  613 => 119,  588 => 115,  577 => 114,  552 => 112,  536 => 108,  533 => 107,  530 => 106,  527 => 105,  524 => 104,  521 => 103,  518 => 102,  515 => 101,  512 => 100,  509 => 99,  506 => 98,  504 => 97,  501 => 96,  499 => 95,  496 => 94,  493 => 93,  484 => 90,  481 => 89,  469 => 88,  455 => 85,  452 => 84,  449 => 83,  446 => 82,  434 => 78,  431 => 77,  425 => 75,  419 => 73,  416 => 72,  388 => 67,  359 => 61,  348 => 57,  336 => 55,  331 => 52,  308 => 49,  277 => 41,  273 => 40,  269 => 39,  259 => 37,  257 => 36,  254 => 35,  249 => 34,  237 => 33,  213 => 26,  208 => 23,  199 => 22,  187 => 19,  170 => 17,  157 => 15,  143 => 14,  131 => 11,  114 => 9,  103 => 7,  77 => 5,  51 => 1,  46 => 126,  43 => 117,  40 => 113,  37 => 111,  31 => 70,  28 => 32,  25 => 21,  22 => 13,  19 => 4,  487 => 91,  482 => 132,  477 => 131,  470 => 125,  464 => 124,  461 => 123,  458 => 122,  448 => 114,  442 => 113,  437 => 79,  432 => 108,  427 => 20,  422 => 74,  417 => 151,  409 => 145,  407 => 144,  402 => 141,  400 => 140,  393 => 135,  389 => 133,  386 => 132,  384 => 131,  379 => 128,  377 => 122,  371 => 63,  369 => 117,  362 => 114,  356 => 112,  347 => 108,  344 => 107,  342 => 106,  325 => 96,  317 => 94,  315 => 93,  312 => 50,  299 => 90,  283 => 88,  280 => 87,  278 => 86,  275 => 85,  261 => 83,  258 => 82,  253 => 80,  239 => 78,  236 => 77,  234 => 76,  231 => 75,  217 => 27,  212 => 71,  201 => 67,  185 => 58,  167 => 53,  161 => 52,  155 => 50,  153 => 49,  150 => 48,  144 => 46,  140 => 45,  135 => 42,  130 => 39,  106 => 33,  92 => 6,  86 => 27,  80 => 25,  78 => 24,  73 => 21,  71 => 20,  62 => 2,  57 => 15,  54 => 14,  52 => 13,  41 => 7,  34 => 87,  32 => 2,  848 => 292,  844 => 291,  840 => 290,  836 => 289,  832 => 288,  825 => 283,  823 => 282,  820 => 281,  817 => 280,  812 => 277,  802 => 269,  793 => 265,  791 => 264,  786 => 261,  768 => 256,  760 => 255,  756 => 254,  744 => 253,  737 => 252,  718 => 251,  716 => 250,  708 => 244,  699 => 240,  697 => 239,  692 => 236,  674 => 231,  666 => 230,  662 => 229,  650 => 228,  643 => 227,  624 => 226,  622 => 225,  610 => 216,  606 => 215,  602 => 118,  600 => 212,  597 => 211,  587 => 204,  575 => 195,  563 => 186,  551 => 177,  539 => 109,  525 => 157,  517 => 156,  508 => 154,  500 => 149,  494 => 146,  490 => 92,  488 => 143,  485 => 142,  475 => 134,  466 => 131,  463 => 130,  453 => 117,  443 => 81,  440 => 80,  435 => 124,  428 => 76,  424 => 119,  415 => 113,  404 => 71,  395 => 101,  392 => 100,  378 => 97,  370 => 96,  365 => 115,  360 => 113,  353 => 111,  349 => 109,  338 => 83,  334 => 82,  328 => 97,  326 => 77,  324 => 76,  321 => 75,  310 => 69,  304 => 68,  298 => 47,  292 => 43,  286 => 89,  282 => 64,  274 => 61,  268 => 60,  262 => 59,  256 => 81,  250 => 57,  246 => 56,  238 => 53,  232 => 52,  226 => 51,  220 => 50,  214 => 72,  210 => 48,  202 => 45,  196 => 44,  190 => 43,  184 => 42,  178 => 57,  174 => 40,  166 => 16,  160 => 36,  154 => 35,  148 => 47,  142 => 33,  138 => 32,  129 => 26,  125 => 25,  121 => 24,  117 => 37,  113 => 36,  109 => 8,  104 => 32,  101 => 17,  99 => 16,  93 => 15,  90 => 14,  88 => 13,  85 => 12,  66 => 18,  59 => 16,  42 => 7,  39 => 6,  36 => 4,  30 => 1,);
    }
}
