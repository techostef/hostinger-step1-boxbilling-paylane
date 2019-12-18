<?php

/* partial_batch_delete.phtml */
class __TwigTemplate_bd30f35966577301c6bfdfc2c969675adab7dcf6f5553e2a72a14d121dd345f4 extends Twig_Template
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
        echo "<a class=\"bb-button btn14\" id=\"batch-delete-selected-btn\" style=\"margin: 10px\"><img src=\"images/icons/dark/trash.png\" alt=\"\" > ";
        echo gettext("Delete selected");
        echo "</a>
<script type=\"text/javascript\">
    \$(function () {
        \$('#batch-delete-selected-btn').click(function () {
            if (\$('input.batch-delete-checkbox:checked').length) {
                jConfirm('Are you sure?', 'Confirm Batch Delete', function (r) {
                    if (r) {
                        var ids = \$('input.batch-delete-checkbox:checked').map(function () {
                            return \$(this).attr(\"data-item-id\");
                        }).get();
                        bb.post(
                            '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
        echo "',
                            {ids: ids},
                            function (result) {
                                bb.reload();
                            })
                    }
                });
            } else {
                jAlert('You need to select at least one item to delete');
            }

        });

        \$('input.batch-delete-master-checkbox').click(function () {
            \$('input.batch-delete-checkbox').prop('checked', this.checked);
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "partial_batch_delete.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 12,  19 => 1,  758 => 331,  755 => 330,  742 => 320,  734 => 315,  729 => 313,  721 => 310,  712 => 303,  703 => 300,  700 => 299,  691 => 295,  685 => 294,  680 => 292,  677 => 291,  672 => 290,  664 => 285,  660 => 284,  648 => 275,  638 => 268,  629 => 262,  624 => 260,  614 => 253,  609 => 251,  603 => 248,  595 => 243,  590 => 241,  582 => 236,  577 => 234,  568 => 229,  563 => 226,  555 => 221,  550 => 219,  542 => 214,  537 => 212,  529 => 207,  524 => 205,  516 => 200,  511 => 198,  502 => 192,  497 => 190,  491 => 187,  483 => 182,  478 => 180,  470 => 175,  465 => 173,  457 => 168,  453 => 167,  448 => 165,  440 => 162,  432 => 156,  429 => 155,  427 => 154,  422 => 151,  413 => 148,  410 => 147,  399 => 143,  395 => 142,  390 => 140,  386 => 139,  376 => 138,  366 => 137,  352 => 136,  346 => 135,  334 => 132,  329 => 130,  326 => 129,  320 => 128,  318 => 127,  309 => 121,  305 => 120,  301 => 119,  297 => 118,  293 => 117,  285 => 112,  275 => 105,  271 => 104,  267 => 103,  263 => 102,  258 => 99,  255 => 98,  241 => 91,  233 => 90,  225 => 89,  217 => 88,  213 => 86,  211 => 85,  201 => 78,  187 => 71,  178 => 69,  172 => 66,  159 => 60,  151 => 59,  143 => 58,  135 => 57,  130 => 55,  121 => 49,  116 => 47,  107 => 41,  102 => 39,  93 => 33,  88 => 31,  79 => 25,  74 => 23,  65 => 17,  60 => 15,  54 => 12,  47 => 8,  44 => 7,  42 => 6,  39 => 5,  33 => 3,  28 => 2,);
    }
}
