<?php

/* mod_email_index.phtml */
class __TwigTemplate_f4f8313053d842aeb545b9d978da4fcfbdbbabb928e709b7e8f566bc792a4ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
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
        // line 6
        $context["emails"] = $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "email_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "page"))), "method");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Emails");
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo " <li class=\"active\">";
        echo gettext("Emails");
        echo "</li>";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"row\">
    <article class=\"span12 data-block\">
        <div class=\"data-container\">
            <header>
                <h1>";
        // line 13
        echo gettext("Emails");
        echo "</h1>
                <p>";
        // line 14
        echo gettext("Here you can find all the emails we sent you. Please click on email topic in left column and it will be displayed in right side.");
        echo "</p>
            </header>
            <section>
                ";
        // line 17
        if (twig_test_empty($this->getAttribute((isset($context["emails"]) ? $context["emails"] : null), "list"))) {
            // line 18
            echo "                <div class=\"alert alert-info\" id=\"information-block\">";
            echo gettext("There are no emails to display");
            echo "</div>
                ";
        } else {
            // line 20
            echo "                <div class=\"tabbable tabs-left\">
                    <ul class=\"nav nav-tabs\" >
                        ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["emails"]) ? $context["emails"] : null), "list"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["email"]) {
                // line 23
                echo "                        <li class=\"email-title ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "active";
                }
                echo "\" style=\"line-height: 50%\">
                            <a href=\"#tab";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id"), "html", null, true);
                echo "\" data-toggle=\"tab\" style=\"padding-left: 0px; padding-bottom: 0px\">
                                    <p><strong>";
                // line 25
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "subject"), 0, 50), "html", null, true);
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "subject")) > 50)) {
                    echo "...";
                }
                echo "</strong></p>
                                    <p><small>";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "created_at")), "html", null, true);
                echo "</small></p>
                            </a>
                        </li>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["emails"]) ? $context["emails"] : null), "list"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["email"]) {
                // line 33
                echo "                        <div class=\"tab-pane ";
                if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                    echo "active";
                }
                echo "\" id=\"tab";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id"), "html", null, true);
                echo "\"  >
                            <div class=\"well well-small\">
                                <p><strong>";
                // line 35
                echo gettext("From:");
                echo "</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "sender"), "html", null, true);
                echo "</p>
                                <p><strong>";
                // line 36
                echo gettext("To:");
                echo "</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "recipients"), "html", null, true);
                echo "</p>
                                <p><strong>";
                // line 37
                echo gettext("Created at:");
                echo "</strong> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "created_at")), "html", null, true);
                echo "</p>
                            </div>
                            <div class=\"well\">
                                <h3>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "subject"), "html", null, true);
                echo "</h3>
                                <p> ";
                // line 41
                echo $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "content_html");
                echo "</p>
                            </div>
                            <a class=\"btn btn-inverse email-resend\" href=\"#\" mail-id=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id"), "html", null, true);
                echo "\">";
                echo gettext("Resend");
                echo "</a>
                            <a class=\"btn btn-danger email-delete\" href=\"#\"  mail-id=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["email"]) ? $context["email"] : null), "id"), "html", null, true);
                echo "\">";
                echo gettext("Delete");
                echo "</a>
                        </div>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                    </div>
                </div>
                ";
            // line 49
            $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => (isset($context["emails"]) ? $context["emails"] : null))));
            // line 50
            echo "                ";
        }
        // line 51
        echo "            </section>
    </article>
</div>

";
    }

    // line 56
    public function block_js($context, array $blocks = array())
    {
        // line 58
        echo "<script type=\"text/javascript\">
    \$(function() {
        \$('.email-resend').click(function(e){
            e.preventDefault();
            \$('.wait').show();
            var email_id = \$(this).attr('mail-id');
            bb.post(
                'client/email/resend',
                {id: email_id },
                function(result) {
                    \$('.wait').hide();
                    bb.msg('Email resent');
                    return false;
                }
            );
        });
        \$('.email-delete').click(function(e){
            e.preventDefault();
            if (confirm('Are you sure?')){
                \$('.wait').show();
                var email_id = \$(this).attr('mail-id');
                bb.post(
                    'client/email/delete',
                    {id: email_id },
                    function(result) {
                        bb.msg('Email deleted');
                        bb.redirect('";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_client_link_filter("email"), "js", null, true);
        echo "');
                        return false;
                    }
                );
            };
        });

    });
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_email_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 84,  234 => 58,  231 => 56,  223 => 51,  220 => 50,  218 => 49,  214 => 47,  195 => 44,  189 => 43,  184 => 41,  180 => 40,  172 => 37,  166 => 36,  160 => 35,  150 => 33,  133 => 32,  129 => 30,  111 => 26,  104 => 25,  100 => 24,  93 => 23,  76 => 22,  72 => 20,  66 => 18,  64 => 17,  58 => 14,  54 => 13,  48 => 9,  45 => 8,  37 => 4,  31 => 3,  26 => 6,);
    }
}
