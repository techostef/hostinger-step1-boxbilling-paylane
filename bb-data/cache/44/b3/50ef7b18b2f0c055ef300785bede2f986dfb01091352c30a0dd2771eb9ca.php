<?php

/* partial_menu.phtml */
class __TwigTemplate_44b350ef7b18b2f0c055ef300785bede2f986dfb01091352c30a0dd2771eb9ca extends Twig_Template
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
        echo "<ul class=\"main-navigation nav-collapse collapse\">

    ";
        // line 3
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_dashboard")) {
            // line 4
            echo "    <li class=\"main-menu\">
        <a class=\"no-submenu\" href=\"";
            // line 5
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
            echo "\"><span class=\"awe-home\"></span>";
            echo gettext("Dashboard");
            echo "</a>
    </li>
    ";
        }
        // line 8
        echo "    
    ";
        // line 9
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_order")) {
            // line 10
            echo "    <li class=\"main-menu\">
        <a href=\"#\" class=\"order-button\"><span class=\"awe-shopping-cart\"></span>";
            // line 11
            echo gettext("Order");
            echo "</a>
    </li>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_support")) {
            // line 16
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 17
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/support");
            echo "\"><span class=\"awe-wrench\"></span>";
            echo gettext("Support");
            echo "</a>
    </li>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_services")) {
            // line 22
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 23
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/order/service");
            echo "\"><span class=\"awe-cogs\"></span>";
            echo gettext("Services");
            echo "</a>
    </li>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_invoices")) {
            // line 28
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 29
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/invoice");
            echo "\"><span class=\"awe-file-alt\"></span>";
            echo gettext("Invoices");
            echo "</a>
    </li>
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_emails")) {
            // line 34
            echo "    <li class=\"main-menu\">
        <a  href=\"";
            // line 35
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/email");
            echo "\"><span class=\"awe-envelope-alt\"></span>";
            echo gettext("Emails");
            echo "</a>
    </li>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "side_menu_payments")) {
            // line 40
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 41
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/client/balance");
            echo "\"><span class=\"awe-credit-card\"></span>";
            echo gettext("Payments history");
            echo "</a>
    </li>
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "news")), "method")) {
            // line 46
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 47
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/news");
            echo "\"><span class=\"awe-edit\"></span>";
            echo gettext("Blog");
            echo "</a>
    </li>
    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "kb")), "method")) {
            // line 52
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 53
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/kb");
            echo "\"><span class=\"awe-book\"></span>";
            echo gettext("Knowledge Base");
            echo "</a>
    </li>
    ";
        }
        // line 56
        echo "
    ";
        // line 57
        if ($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "extension_is_on", array(0 => array("mod" => "forum")), "method")) {
            // line 58
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 59
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/forum");
            echo "\"><span class=\"awe-comments\"></span>";
            echo gettext("Forum");
            echo "</a>
    </li>
    ";
        }
        // line 62
        echo "</ul>

<script type=\"text/javascript\">
    \$('.main-menu').each(function(index){
        var menu_link = \$(this).children('a').attr('href');
        if (\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_current_url"), "html", null, true);
        echo "\" ==\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\"){
            \$('.main-menu:first').addClass(\"current\");
        }
        else if ('";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_current_url"), "html", null, true);
        echo "'.indexOf(menu_link) >= 0 && menu_link != \"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\"){
            \$(this).addClass(\"current\");
      }
    });

</script>";
    }

    public function getTemplateName()
    {
        return "partial_menu.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 70,  185 => 67,  178 => 62,  170 => 59,  167 => 58,  165 => 57,  162 => 56,  154 => 53,  151 => 52,  149 => 51,  146 => 50,  138 => 47,  135 => 46,  133 => 45,  130 => 44,  122 => 41,  119 => 40,  117 => 39,  114 => 38,  106 => 35,  103 => 34,  101 => 33,  98 => 32,  90 => 29,  87 => 28,  85 => 27,  82 => 26,  74 => 23,  71 => 22,  69 => 21,  66 => 20,  58 => 17,  55 => 16,  53 => 15,  50 => 14,  44 => 11,  41 => 10,  39 => 9,  36 => 8,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
