<?php

/* partial_footer.phtml */
class __TwigTemplate_3d73e52847ec540947c91a6517342fc0ca98dcbfa94373d99b43911cef2052b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    \t<span>&copy; Copyright ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "Y"), "html", null, true);
        echo ". All rights reserved. Powered by <a href=\"http://www.boxbilling.com\" title=\"Billing system\" target=\"_blank\">BoxBilling ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "</a>
                    <a href=\"#\" title=\"\" id=\"help_popup_button\" style=\"float:right;\">Help</a>
        </span>

        <div id=\"help_popup\" style=\"color: #424242; position: fixed; z-index: 99999; padding: 5px; margin: 0px; min-width: 310px; max-width: 310px; top: 30%; left: 45%; display: none;\">
            <h5 id=\"help_popup_title\">";
        // line 6
        echo gettext("Help?");
        echo "</h5>
            <div id=\"help_popup_content\" class=\"confirm\">
                <div id=\"help_popup_message\">
                    <table class=\"tableStatic wide\">
                        <tbody>
                        <tr class=\"noborder\">
                            <td><i class=\"dark-sprite-icon sprite-help\" /></td>
                            <td class=\"noborder\"><a href=\"http://docs.boxbilling.com/\" title=\"\" target=\"_blank\">";
        // line 13
        echo gettext("Help");
        echo "</a></td>
                        </tr>
                        <tr>
                            <td><i class=\"dark-sprite-icon sprite-speech2\" /></td>
                            <td class=\"noborder\"><a href=\"http://www.boxbilling.com/forum\" title=\"\" target=\"_blank\">";
        // line 17
        echo gettext("Forum");
        echo "</a></td>
                        </tr>
                        <tr>
                            <td><i class=\"dark-sprite-icon sprite-pacman\" /></td>
                            <td class=\"noborder\"><a href=\"https://github.com/boxbilling/boxbilling/issues\" title=\"\" target=\"_blank\">";
        // line 21
        echo gettext("Report bug");
        echo "</a></td>
                        </tr>
                        </tbody>

                    </table>
                </div>
                <div id=\"help_popup_panel\">
                    <input type=\"button\" class=\"blueBtn\" value=\"&nbsp;Close&nbsp;\" id=\"help_popup_close\" onclick=\"return susp.suspenderHide();\"/>
                </div>
            </div>
        </div>

        ";
        // line 33
        $this->displayBlock('js', $context, $blocks);
    }

    public function block_js($context, array $blocks = array())
    {
        // line 34
        echo "        <script type=\"text/javascript\">
            document.getElementById('help_popup_button').addEventListener('click',function(e){
                e.preventDefault();
                document.getElementById('help_popup').style.display = 'block';
            });
            document.getElementById('help_popup_close').addEventListener('click',function(e){
                e.preventDefault();
                document.getElementById('help_popup').style.display = 'none';
            });
        </script>
        ";
    }

    public function getTemplateName()
    {
        return "partial_footer.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 34,  70 => 33,  41 => 13,  31 => 6,  20 => 1,  28 => 3,  24 => 2,  19 => 1,  115 => 42,  110 => 34,  99 => 43,  97 => 42,  93 => 40,  85 => 35,  83 => 34,  66 => 26,  62 => 25,  54 => 22,  36 => 9,  34 => 8,  27 => 4,  22 => 1,  154 => 57,  145 => 51,  141 => 50,  131 => 45,  127 => 44,  117 => 39,  113 => 38,  105 => 4,  100 => 34,  91 => 39,  81 => 23,  77 => 22,  67 => 17,  63 => 16,  55 => 21,  50 => 12,  48 => 17,  43 => 14,  38 => 6,  35 => 5,  29 => 3,);
    }
}
