<?php

/* mod_support_tickets.phtml */
class __TwigTemplate_50e901868cb0d3c18e30968eb3982b0a2553ea38658cc1ef7192fd6f21ac954f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'page_header' => array($this, 'block_page_header'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Support tickets");
    }

    // line 4
    public function block_page_header($context, array $blocks = array())
    {
        echo gettext("Support tickets");
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo gettext("Support tickets");
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "

<div class=\"row\">
    <article class=\"span12 data-block\">
        <div class=\"data-container\">
            <header>
                <h1>";
        // line 13
        echo gettext("Support tickets");
        echo "</h1><br/>
                ";
        // line 14
        echo gettext("Need an answer? We are here to help!");
        // line 15
        echo "                <ul class=\"data-header-actions\">
                    <li>
                        <a class=\"btn btn-alt btn-info\" href=\"#submit-ticket\" id=\"new-ticket-button\" data-toggle=\"modal\">";
        // line 17
        echo gettext("Submit new ticket");
        echo "</a>
                    </li>
                </ul>
            </header>
            <section>
                <table class=\"table table-striped table-bordered table-condensed\">
                    <thead>
                    <tr>
                        <th>";
        // line 25
        echo gettext("Id");
        echo "</th>
                        <th>";
        // line 26
        echo gettext("Subject");
        echo "</th>
                        <th>";
        // line 27
        echo gettext("Help desk");
        echo "</th>
                        <th>";
        // line 28
        echo gettext("Status");
        echo "</th>
                        <th>";
        // line 29
        echo gettext("Submitted");
        echo "</th>
                        <th>";
        // line 30
        echo gettext("Actions");
        echo "</th>
                    </tr>
                    </thead>

                    <tbody>
                    ";
        // line 35
        $context["tickets"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_ticket_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"))), "method");
        // line 36
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
            // line 37
            echo "
                    <tr>
                        <td>#";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 40
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "subject"), 40), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "helpdesk"), "name"), "html", null, true);
            echo "</td>
                        <td><span class=\"label ";
            // line 42
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") == "open")) {
                echo "label-info";
            } elseif (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") == "on_hold")) {
                echo "label-warning";
            }
            echo "\">";
            echo $context["mf"]->getstatus_name($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status"));
            echo "</span></td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "created_at")), "html", null, true);
            echo " ";
            echo gettext("ago");
            echo "</td>
                        <td class=\"actions\"><a href=\"";
            // line 44
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support/ticket");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "id"), "html", null, true);
            echo "\" class=\"btn btn-small\">";
            if (($this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "status") == "closed")) {
                echo gettext("View");
            } else {
                echo gettext("Reply");
            }
            echo "</a></td>
                    </tr>

                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "
                    <tr>
                        <td colspan=\"6\">";
            // line 50
            echo gettext("The list is empty");
            echo "</td>
                    </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                    </tbody>

                    ";
        // line 57
        if (($this->getAttribute((isset($context["tickets"]) ? $context["tickets"] : null), "pages") > 1)) {
            // line 58
            echo "                    <tfoot>
                    <tr>
                        <td colspan=\"6\">
                            ";
            // line 61
            $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["tickets"]) ? $context["tickets"] : null))));
            // line 62
            echo "                        </td>
                    </tr>
                    </tfoot>
                    ";
        }
        // line 66
        echo "                </table>

            </section>
        </div>
    </article>
</div>



<div id=\"submit-ticket\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h3>
            <span class=\"awe-wrench\"></span> ";
        // line 79
        echo gettext("Submit new support ticket");
        // line 80
        echo "        </h3>
    </div>
    <div class=\"modal-body\">
        <form action=\"\" method=\"post\" id=\"ticket-submit\" class=\"form\" style=\"background: none\">
                <div class=\"control-group\">
                    <label>";
        // line 85
        echo gettext("Help desk");
        echo ": </label>
                    <div class=\"controls\">
                        ";
        // line 87
        echo $context["mf"]->getselectbox("support_helpdesk_id", $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "support_helpdesk_get_pairs"), $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "support_helpdesk_id"), 1);
        echo "
                    </div>
                </div>

                <div class=\"control-group\">
                    <label>";
        // line 92
        echo gettext("Subject");
        echo ": </label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"subject\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "subject"));
        echo "\" required=\"required\" class=\"span5\"/>
                    </div>
                </div>

                <div class=\"control-group\">
                    <label>";
        // line 99
        echo gettext("Message");
        echo ": </label>
                    <div class=\"controls\">
                        <textarea name=\"content\" cols=\"10\" rows=\"10\" required=\"required\" class=\"span5\">";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "content"));
        echo "</textarea>
                    </div>
                </div>
    </div>
    <div class=\"modal-footer\">
        <button class=\"btn btn-primary btn-large\" type=\"submit\" value=\"";
        // line 106
        echo gettext("Submit");
        echo "\">";
        echo gettext("Submit");
        echo "</button>
    </div>
    </form>
</div>
";
    }

    // line 113
    public function block_js($context, array $blocks = array())
    {
        // line 114
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('#ticket-submit').bind('submit',function(event){
        \$('.wait').show();
        bb.post(
            'client/support/ticket_create',
            \$(this).serialize(),
            function(result) {
                bb.redirect('";
        // line 122
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support/ticket");
        echo "' + '/' + result);
            }
        );
        return false;
    });
    \$('#submit-ticket').modal('hide').css(
        {
            'margin-top': function () {
                return -(\$(this).height() / 2);
            }
        })

    ";
        // line 134
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "ticket")) {
            // line 135
            echo "    \$('#submit-ticket').modal('show');
    ";
        }
        // line 137
        echo "
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_support_tickets.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 137,  309 => 135,  307 => 134,  292 => 122,  282 => 114,  279 => 113,  268 => 106,  260 => 101,  255 => 99,  247 => 94,  242 => 92,  234 => 87,  229 => 85,  222 => 80,  220 => 79,  205 => 66,  199 => 62,  197 => 61,  192 => 58,  190 => 57,  185 => 54,  175 => 50,  171 => 48,  154 => 44,  148 => 43,  138 => 42,  134 => 41,  126 => 40,  122 => 39,  118 => 37,  112 => 36,  110 => 35,  102 => 30,  98 => 29,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  71 => 17,  67 => 15,  65 => 14,  61 => 13,  53 => 7,  50 => 6,  44 => 5,  38 => 4,  32 => 3,  27 => 2,);
    }
}
