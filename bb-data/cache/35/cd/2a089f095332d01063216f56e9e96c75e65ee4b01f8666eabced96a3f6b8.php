<?php

/* partial_bb_meta.phtml */
class __TwigTemplate_35cd2a089f095332d01063216f56e9e96c75e65ee4b01f8666eabced96a3f6b8 extends Twig_Template
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
        echo "    <base href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "url"), "html", null, true);
        echo "\"/>
    <meta property=\"bb:url\" content=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "\"/>
    <meta property=\"bb:client_area\" content=\"";
        // line 3
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\"/>
    ";
    }

    public function getTemplateName()
    {
        return "partial_bb_meta.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  24 => 2,  19 => 1,  115 => 42,  110 => 34,  99 => 43,  97 => 42,  93 => 40,  85 => 35,  83 => 34,  66 => 26,  62 => 25,  54 => 22,  36 => 9,  34 => 8,  27 => 4,  22 => 1,  154 => 57,  145 => 51,  141 => 50,  131 => 45,  127 => 44,  117 => 39,  113 => 38,  105 => 4,  100 => 34,  91 => 39,  81 => 23,  77 => 22,  67 => 17,  63 => 16,  55 => 13,  50 => 12,  48 => 11,  43 => 14,  38 => 6,  35 => 5,  29 => 3,);
    }
}
