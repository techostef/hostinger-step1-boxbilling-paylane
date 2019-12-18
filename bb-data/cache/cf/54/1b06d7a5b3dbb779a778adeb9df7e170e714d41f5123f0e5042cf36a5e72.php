<?php

/* partial_message.phtml */
class __TwigTemplate_cf541b06d7a5b3dbb779a778adeb9df7e170e714d41f5123f0e5042cf36a5e72 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : null));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 3
                echo "        <div class=\"h-block ";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "\">
            <h2>";
                // line 4
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
                echo "</h2>
            <p>";
                // line 5
                echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : null), "html", null, true);
                echo "</p>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partial_message.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  33 => 4,  193 => 70,  185 => 67,  178 => 62,  170 => 59,  167 => 58,  165 => 57,  162 => 56,  154 => 53,  151 => 52,  149 => 51,  146 => 50,  138 => 47,  135 => 46,  133 => 45,  130 => 44,  122 => 41,  119 => 40,  117 => 39,  114 => 38,  106 => 35,  103 => 34,  101 => 33,  98 => 32,  90 => 29,  87 => 28,  85 => 27,  82 => 26,  74 => 23,  71 => 22,  69 => 21,  66 => 20,  58 => 17,  55 => 16,  53 => 15,  50 => 14,  44 => 11,  41 => 10,  39 => 9,  36 => 8,  28 => 3,  25 => 4,  23 => 2,  19 => 1,);
    }
}
