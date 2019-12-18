<?php

/* mod_invoice_banklink.phtml */
class __TwigTemplate_74e4dda2978d4c713a4272e8af1dc07f856dc48123490b3b7ddee43db6a4c06b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
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
        echo gettext("Processing payment ...");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 11
        echo "<div class=\"row\">
    <article class=\"span12 data-block\">
        <div class=\"data-container\">
            <header>
                <h1>";
        // line 15
        echo gettext("Processing payment ...");
        echo "</h1>
                <p>";
        // line 16
        echo gettext("Thank you for your patience.");
        echo "</p>
            </header>
            <section>
                ";
        // line 19
        if (($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "type") == "html")) {
            // line 20
            echo "                    ";
            echo $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "result");
            echo "
                ";
        }
        // line 22
        echo "                ";
        if (($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "type") == "form")) {
            // line 23
            echo "                <h2>";
            echo gettext("Redirecting to payment gateway..");
            echo "</h2>
                <form name=\"payment_form\" action=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "service_url"), "html", null, true);
            echo "\" method=\"post\">
                    ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "result"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 26
                echo "                    <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
                echo "\" />
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            echo gettext("Please click here to continue if this page does not redirect automatically in 5 seconds");
            echo "\" id=\"payment_button\"/>
                </form>

                <script type=\"text/javascript\">
                    \$(document).ready(function(){
                        document.getElementById('payment_button').style.display = 'none';
                        document.forms[\"payment_form\"].submit();
                    });
                </script>
                ";
        }
        // line 38
        echo "            </section>
        </div>
    </article>
</div>




";
    }

    public function getTemplateName()
    {
        return "mod_invoice_banklink.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  92 => 28,  81 => 26,  77 => 25,  73 => 24,  68 => 23,  65 => 22,  59 => 20,  57 => 19,  51 => 16,  47 => 15,  41 => 11,  38 => 6,  35 => 5,  29 => 3,  24 => 2,);
    }
}
