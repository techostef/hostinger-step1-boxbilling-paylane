<?php

/* partial_pagination.phtml */
class __TwigTemplate_f2492cacddeee1c8cd8d2a90a2877ff03cf309182c51a6fd03bd29e809bae26a extends Twig_Template
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
        if (($this->getAttribute((isset($context["list"]) ? $context["list"] : null), "pages") > 1)) {
            // line 2
            $context["currentPage"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"), 1)) : (1));
            // line 3
            $context["paginator"] = $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_paginator", array(0 => array("total" => $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "total"), "page" => (isset($context["currentPage"]) ? $context["currentPage"] : null), "per_page" => $this->getAttribute((isset($context["list"]) ? $context["list"] : null), "per_page"))), "method");
            // line 4
            echo "
<div class=\"pagination\">
    <ul class=\"pages\">
        ";
            // line 7
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentpage") != 1)) {
                // line 8
                echo "        <li class=\"prev\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), twig_array_merge(twig_slice($this->env, twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), 1, twig_length_filter($this->env, (isset($context["request"]) ? $context["request"] : null))), array("page" => ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1))));
                echo "\"><</a></li>
        ";
            }
            // line 10
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), 0) != 1)) {
                // line 11
                echo "            <li><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), array("page" => 1));
                echo "\" >1</a></li>
        ";
            }
            // line 13
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "start"), $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "end")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 14
                echo "
            ";
                // line 15
                if ((($this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), 0) > 2) && ((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), 0)))) {
                    // line 16
                    echo "                ...
            ";
                }
                // line 18
                echo "
            ";
                // line 19
                if (((isset($context["i"]) ? $context["i"] : null) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentpage"))) {
                    // line 20
                    echo "                <li><a class=\"active\" href=\"#\" onclick=\"return false;\">";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "</a></li>
            ";
                } else {
                    // line 22
                    echo "                <li><a href=\"";
                    echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), twig_array_merge(twig_slice($this->env, twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), 1, twig_length_filter($this->env, (isset($context["request"]) ? $context["request"] : null))), array("page" => (isset($context["i"]) ? $context["i"] : null))));
                    echo "\"> ";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            // line 26
            if ((($this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "midrange") - 1), array(), "array") < ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages") - 1)) && ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "end") == $this->getAttribute($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "range"), ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "midrange") - 1), array(), "array")))) {
                // line 27
                echo "            ...
            <li><a href=\"";
                // line 28
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), twig_array_merge(twig_slice($this->env, twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), 1, twig_length_filter($this->env, (isset($context["request"]) ? $context["request"] : null))), array("page" => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages"))));
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 30
            echo "
        ";
            // line 31
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentpage") != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "numpages"))) {
                // line 32
                echo "        <li class=\"next\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter((isset($context["url"]) ? $context["url"] : null), twig_array_merge(twig_slice($this->env, twig_array_merge(array(), (isset($context["request"]) ? $context["request"] : null)), 1, twig_length_filter($this->env, (isset($context["request"]) ? $context["request"] : null))), array("page" => ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1))));
                echo "\">></a></li>
        ";
            }
            // line 34
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_pagination.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  106 => 32,  104 => 31,  101 => 30,  94 => 28,  91 => 27,  89 => 26,  86 => 25,  80 => 24,  72 => 22,  66 => 20,  64 => 19,  61 => 18,  57 => 16,  55 => 15,  52 => 14,  41 => 11,  38 => 10,  32 => 8,  30 => 7,  25 => 4,  23 => 3,  21 => 2,  34 => 12,  19 => 1,  758 => 331,  755 => 330,  742 => 320,  734 => 315,  729 => 313,  721 => 310,  712 => 303,  703 => 300,  700 => 299,  691 => 295,  685 => 294,  680 => 292,  677 => 291,  672 => 290,  664 => 285,  660 => 284,  648 => 275,  638 => 268,  629 => 262,  624 => 260,  614 => 253,  609 => 251,  603 => 248,  595 => 243,  590 => 241,  582 => 236,  577 => 234,  568 => 229,  563 => 226,  555 => 221,  550 => 219,  542 => 214,  537 => 212,  529 => 207,  524 => 205,  516 => 200,  511 => 198,  502 => 192,  497 => 190,  491 => 187,  483 => 182,  478 => 180,  470 => 175,  465 => 173,  457 => 168,  453 => 167,  448 => 165,  440 => 162,  432 => 156,  429 => 155,  427 => 154,  422 => 151,  413 => 148,  410 => 147,  399 => 143,  395 => 142,  390 => 140,  386 => 139,  376 => 138,  366 => 137,  352 => 136,  346 => 135,  334 => 132,  329 => 130,  326 => 129,  320 => 128,  318 => 127,  309 => 121,  305 => 120,  301 => 119,  297 => 118,  293 => 117,  285 => 112,  275 => 105,  271 => 104,  267 => 103,  263 => 102,  258 => 99,  255 => 98,  241 => 91,  233 => 90,  225 => 89,  217 => 88,  213 => 86,  211 => 85,  201 => 78,  187 => 71,  178 => 69,  172 => 66,  159 => 60,  151 => 59,  143 => 58,  135 => 57,  130 => 55,  121 => 49,  116 => 47,  107 => 41,  102 => 39,  93 => 33,  88 => 31,  79 => 25,  74 => 23,  65 => 17,  60 => 15,  54 => 12,  47 => 13,  44 => 7,  42 => 6,  39 => 5,  33 => 3,  28 => 2,);
    }
}
