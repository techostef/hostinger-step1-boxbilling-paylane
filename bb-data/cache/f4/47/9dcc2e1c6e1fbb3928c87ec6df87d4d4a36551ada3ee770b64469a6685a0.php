<?php

/* mod_orderbutton_js.phtml */
class __TwigTemplate_f4479dcc2e1c6e1fbb3928c87ec6df87d4d4a36551ada3ee770b64469a6685a0 extends Twig_Template
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
        $context["background_opacity"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "background_opacity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "background_opacity"), "50")) : ("50"));
        // line 2
        $context["popup_top"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "top", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "top"), "200")) : ("200"));
        // line 3
        $context["popup_left"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "left"), "200")) : ("200"));
        // line 4
        $context["width"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "width"), "600")) : ("600"));
        // line 5
        $context["height"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "height"), "700")) : ("700"));
        // line 6
        $context["background_color"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "background_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "background_color"), "black")) : ("black"));
        // line 7
        $context["theme_color"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "theme_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "theme_color"), "green")) : ("green"));
        // line 8
        $context["loader_nr"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "loader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "loader"), "8")) : ("8"));
        // line 9
        $context["loader_url"] = (("img/assets/loaders/loader" . (isset($context["loader_nr"]) ? $context["loader_nr"] : null)) . ".gif");
        // line 10
        $context["border_radius"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "border_radius", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "border_radius"), 0)) : (0));
        // line 11
        $context["bind_selector"] = (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "bind_selector", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "bind_selector"), ".order-button")) : (".order-button"));
        // line 12
        echo "
    var orderbutton = function (){
        this.data_product_id = null;
        this.backgroundElem = null;
        this.iframeElem = null;
        this.loaderImageElem = null;
    };

    orderbutton.prototype.setDataProductId = function (product_id){
        this.data_product_id = product_id;
    };

    orderbutton.prototype.getDataProductId = function (){
        return this.data_product_id;
    };

    orderbutton.prototype.hideElements = function(){
        this.backgroundElem.hide();
        this.iframeElem.hide();
    };

    orderbutton.prototype.attachEvents = function() {
        var _this = this;
        \$(document).keyup(function(e) { // esc
            if (e.keyCode == 27) {
                _this.hideElements();
            }
        });
        var bodyElem = \$('body');

        bodyElem.undelegate('";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["bind_selector"]) ? $context["bind_selector"] : null), "html", null, true);
        echo "', 'click');
        bodyElem.delegate('";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["bind_selector"]) ? $context["bind_selector"] : null), "html", null, true);
        echo "', 'click', function (event) {
            event.preventDefault();
            _this.setDataProductId(\$(this).data('product'))
            _this.popup();
        });
        // Create the event.
        var event = document.createEvent('Event');
        event.initEvent('OrderButtonEventsReady', true, true);

        // target can be any Element or other EventTarget.
        document.dispatchEvent(event);
    };

    orderbutton.prototype.srclink = function(){
        var params = [
            { name: \"theme_color\", value: \"";
        // line 58
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "theme_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "theme_color"), "green")) : ("green")), "html", null, true);
        echo "\" },
            { name: \"loader\", value: \"1\" }
        ];
        var product_id = this.getDataProductId();

        ";
        // line 63
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "product_id")) {
            // line 64
            echo "            // request has product_id
            product_id = ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "product_id"), "html", null, true);
            echo ";
        ";
        }
        // line 67
        echo "
        if (product_id)
            params.push({'name' : 'order', 'value' : product_id});
        ";
        // line 70
        if ($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "show_custom_form_values")) {
            // line 71
            echo "            params['show_custom_form_values'] = 1;
        ";
        }
        // line 73
        echo "
        return \"";
        // line 74
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("orderbutton");
        echo "&\"+jQuery.param(params);
    };

    orderbutton.prototype.createIframe = function (){

        this.iframeElem  = \$('<iframe frameborder=\"0\" allowtransparency=\"true\" onload=\"\" id=\"popup-iframe\"  src=\"'+this.srclink()+'\" />').appendTo('body');
        this.iframeElem .css({
            ";
        // line 81
        if (($this->getAttribute((isset($context["request"]) ? $context["request"] : null), "popup_center") == "1")) {
            // line 82
            echo "            'top': ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "popup_top"), "html", null, true);
            echo ",
            'left': ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : null), "popup_left"), "html", null, true);
            echo ",
            ";
        }
        // line 85
        echo "            'background-color': 'transparent',
            'border-radius': '";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["border_radius"]) ? $context["border_radius"] : null), "html", null, true);
        echo "px',
            '-webkit-border-radius': '";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["border_radius"]) ? $context["border_radius"] : null), "html", null, true);
        echo "px',
            '-moz-border-radius': '";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["border_radius"]) ? $context["border_radius"] : null), "html", null, true);
        echo "px',
            //'box-shadow': '0 0 20px 0 #222',
            //'-webkit-box-shadow': '0 0 20px 0 #222',
            //'-moz-box-shadow': '0 0 20px 0 #222',
            'display': 'none',
            'margin': '0 auto',
            'padding': '0px',
            'position': 'absolute',
            'width': \"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "px\",
            'z-index': '1000'

        });

        if (/(android|bb\\d+|meego).+mobile|avantgo|bada\\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\\-(n|u)|c55\\/|capi|ccwa|cdm\\-|cell|chtm|cldc|cmd\\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\\-s|devi|dica|dmob|do(c|p)o|ds(12|\\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\\-|_)|g1 u|g560|gene|gf\\-5|g\\-mo|go(\\.w|od)|gr(ad|un)|haie|hcit|hd\\-(m|p|t)|hei\\-|hi(pt|ta)|hp( i|ip)|hs\\-c|ht(c(\\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\\-(20|go|ma)|i230|iac( |\\-|\\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\\/)|klon|kpt |kwc\\-|kyo(c|k)|le(no|xi)|lg( g|\\/(k|l|u)|50|54|\\-[a-w])|libw|lynx|m1\\-w|m3ga|m50\\/|ma(te|ui|xo)|mc(01|21|ca)|m\\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\\-2|po(ck|rt|se)|prox|psio|pt\\-g|qa\\-a|qc(07|12|21|32|60|\\-[2-7]|i\\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\\-|oo|p\\-)|sdk\\/|se(c(\\-|0|1)|47|mc|nd|ri)|sgh\\-|shar|sie(\\-|m)|sk\\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\\-|v\\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\\-|tdg\\-|tel(i|m)|tim\\-|t\\-mo|to(pl|sh)|ts(70|m\\-|m3|m5)|tx\\-9|up(\\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\\-|your|zeto|zte\\-/i.test(navigator.userAgent.substr(0, 4))){
            this.iframeElem .css({ 'width': \"\"});
        }


        var _this = this;
        this.iframeElem.load(function() {
            _this.loaderImageElem.hide();
            this.style.height = '80%';
            var pWidth = jQuery(window).width();
            var pTop = jQuery(window).scrollTop();
            var eWidth = jQuery(this).width();
            jQuery(this).css('top', pTop + 100 + 'px');
            jQuery(this).css('left', parseInt((pWidth / 2) - (eWidth / 2)) + 'px');
            \$(this).show();
        });

        \$(window).resize(function(){
            var pWidth = jQuery(window).width();
            var pTop = jQuery(window).scrollTop();
            var eWidth = _this.iframeElem.width();
            _this.iframeElem.css('top', pTop + 100 + 'px');
            _this.iframeElem.css('left', parseInt((pWidth / 2) - (eWidth / 2)) + 'px');
        });
    };

    orderbutton.prototype.createBackground = function (){
        var _this = this;
        this.backgroundElem = \$('<div/>', {
            id: 'popup-background'
        }).appendTo('body');
        this.backgroundElem.css({
            'display': 'none',
            'position': 'fixed',
            'top': '0',
            'left': '0',
            'width': '100%',
            'height': '100%',
            'background-color': '";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["background_color"]) ? $context["background_color"] : null), "html", null, true);
        echo "',
            'opacity': '";
        // line 140
        echo twig_escape_filter($this->env, ((isset($context["background_opacity"]) ? $context["background_opacity"] : null) / 100), "html", null, true);
        echo "',
            '-webkit-opacity': '";
        // line 141
        echo twig_escape_filter($this->env, ((isset($context["background_opacity"]) ? $context["background_opacity"] : null) / 100), "html", null, true);
        echo "',
            '-moz-opacity': '";
        // line 142
        echo twig_escape_filter($this->env, ((isset($context["background_opacity"]) ? $context["background_opacity"] : null) / 100), "html", null, true);
        echo "',
            'filter': 'alpha(opacity=";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["background_opacity"]) ? $context["background_opacity"] : null), "html", null, true);
        echo ")',
            'z-index': '1000'
        }).on('click', function(){
            _this.hideElements();
        });


        this.backgroundElem.show();
    };

    orderbutton.prototype.createLoaderImage = function(){
        this.loaderImageElem = \$('<img />').attr({
            'src': \"";
        // line 155
        echo twig_escape_filter($this->env, twig_mod_asset_url((isset($context["loader_url"]) ? $context["loader_url"] : null), "orderbutton"), "html", null, true);
        echo "\",
            'id' : 'loader-image'
        }).css({
            'display': 'block',
            'margin-left': 'auto',
            'margin-right': 'auto',
            'position': 'relative',
            'top': '50%'
        }).appendTo(this.backgroundElem).show();
    };

    orderbutton.prototype.popup = function (){
        if (this.backgroundElem && this.iframeElem){

            if (this.iframeElem.attr('src') != this.srclink()){
                this.iframeElem.attr('src', this.srclink());
                this.loaderImageElem.show();
            }
            else{
                this.iframeElem.show();
            }
            this.backgroundElem.show();

        }else{
            this.createBackground();
            this.createLoaderImage();
            this.createIframe();
        }
    };
    (function(funcName, baseObj) {
        // The public function name defaults to window.docReady
        // but you can pass in your own object and own function name and those will be used
        // if you want to put them in a different namespace
        funcName = funcName || \"docReady\";
        baseObj = baseObj || window;
        var readyList = [];
        var readyFired = false;
        var readyEventHandlersInstalled = false;

        // call this when the document is ready
        // this function protects itself against being called more than once
        function ready() {
            if (!readyFired) {
                // this must be set to true before we start calling callbacks
                readyFired = true;
                for (var i = 0; i < readyList.length; i++) {
                    // if a callback here happens to add new ready handlers,
                    // the docReady() function will see that it already fired
                    // and will schedule the callback to run right after
                    // this event loop finishes so all handlers will still execute
                    // in order and no new ones will be added to the readyList
                    // while we are processing the list
                    readyList[i].fn.call(window, readyList[i].ctx);
                }
                // allow any closures held by these functions to free
                readyList = [];
            }
        }

        function readyStateChange() {
            if ( document.readyState === \"complete\" ) {
                ready();
            }
        }

        // This is the one public interface
        // docReady(fn, context);
        // the context argument is optional - if present, it will be passed
        // as an argument to the callback
        baseObj[funcName] = function(callback, context) {
            // if ready has already fired, then just schedule the callback
            // to fire asynchronously, but right away
            if (readyFired) {
                setTimeout(function() {callback(context);}, 1);
                return;
            } else {
                // add the function and context to the list
                readyList.push({fn: callback, ctx: context});
            }
            // if document already ready to go, schedule the ready function to run
            if (document.readyState === \"complete\") {
                setTimeout(ready, 1);
            } else if (!readyEventHandlersInstalled) {
                // otherwise if we don't have event handlers installed, install them
                if (document.addEventListener) {
                    // first choice is DOMContentLoaded event
                    document.addEventListener(\"DOMContentLoaded\", ready, false);
                    // backup is window load event
                    window.addEventListener(\"load\", ready, false);
                } else {
                    // must be IE
                    document.attachEvent(\"onreadystatechange\", readyStateChange);
                    window.attachEvent(\"onload\", ready);
                }
                readyEventHandlersInstalled = true;
            }
        }
    })(\"docReady\", window);

    docReady(function() {
        if (typeof jQuery === \"undefined\") {
            (function(d, script) {
                script = d.createElement('script');
                script.type = 'text/javascript';
                script.async = true;
                script.onload = function(){
                    ob = new orderbutton();
                    ob.attachEvents();
                };
                script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js';
                d.getElementsByTagName('head')[0].appendChild(script);
            }(document));
        }else{
            ob = new orderbutton();
            ob.attachEvents();
        }
    });";
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_js.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 155,  233 => 143,  229 => 142,  225 => 141,  221 => 140,  217 => 139,  171 => 96,  160 => 88,  156 => 87,  152 => 86,  149 => 85,  144 => 83,  139 => 82,  137 => 81,  127 => 74,  124 => 73,  120 => 71,  118 => 70,  113 => 67,  108 => 65,  105 => 64,  103 => 63,  95 => 58,  77 => 43,  73 => 42,  41 => 12,  39 => 11,  37 => 10,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
