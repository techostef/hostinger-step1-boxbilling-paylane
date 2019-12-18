<?php

/* layout_public.phtml */
class __TwigTemplate_da5b64271c287ebcae9249e708878a74faffbe48d7d90ba2a9cd88081e555699 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'head' => array($this, 'block_head'),
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>    <html class=\"no-js ie8 ie\" lang=\"en\"> <![endif]-->
<!--[if IE 9]>    <html class=\"no-js ie9 ie\" lang=\"en\"> <![endif]-->
<!--[if gt IE 9]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('meta_title', $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_title"), "html", null, true);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "\">
    <meta property=\"bb:client_area\" content=\"";
        // line 10
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\">

    <meta name=\"description\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_description"), "html", null, true);
        echo "\">
    <meta name=\"robots\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_robots"), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "meta_author"), "html", null, true);
        echo "\">
    <meta name=\"generator\" content=\"BoxBilling ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_version"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel='stylesheet' type='text/css' href=\"";
        // line 18
        echo twig_asset_url($this->env, (("css/huraga-" . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "color_scheme")) . ".css"));
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 19
        echo twig_asset_url($this->env, "css/plugins/jquery.jgrowl.css");
        echo "\">

    <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_asset_url($this->env, "favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 22
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 23
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 24
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-57-precomposed.png");
        echo "\">

    <script src=\"";
        // line 26
        echo twig_asset_url($this->env, "js/libs/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_asset_url($this->env, "js/bb-jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_asset_url($this->env, "js/libs/modernizr.js");
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_asset_url($this->env, "js/bootstrap/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_asset_url($this->env, "js/libs/selectivizr.js");
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_asset_url($this->env, "js/plugins/jGrowl/jquery.jgrowl.js");
        echo "\"></script>

    ";
        // line 33
        $this->displayBlock('head', $context, $blocks);
        // line 34
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 35
        echo "</head>
<body>
    ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "    ";
        try {
            $this->env->loadTemplate("partial_pending_messages.phtml")->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 39
        echo "</body>
</html>";
    }

    // line 7
    public function block_meta_title($context, array $blocks = array())
    {
    }

    // line 33
    public function block_head($context, array $blocks = array())
    {
    }

    // line 34
    public function block_js($context, array $blocks = array())
    {
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout_public.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 33,  127 => 38,  125 => 37,  121 => 35,  116 => 33,  111 => 31,  103 => 29,  95 => 27,  91 => 26,  86 => 24,  78 => 22,  74 => 21,  69 => 19,  65 => 18,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  42 => 10,  38 => 9,  31 => 7,  23 => 1,  200 => 84,  196 => 82,  192 => 80,  190 => 79,  177 => 68,  174 => 67,  167 => 62,  163 => 60,  155 => 37,  153 => 57,  150 => 34,  142 => 54,  140 => 7,  137 => 52,  135 => 39,  124 => 43,  118 => 34,  114 => 37,  112 => 36,  109 => 35,  107 => 30,  99 => 28,  94 => 31,  82 => 23,  77 => 24,  68 => 17,  64 => 15,  54 => 13,  52 => 12,  49 => 11,  46 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
