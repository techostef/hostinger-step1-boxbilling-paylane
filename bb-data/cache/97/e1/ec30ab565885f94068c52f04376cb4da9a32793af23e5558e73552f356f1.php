<?php

/* mod_client_profile.phtml */
class __TwigTemplate_97e1ec30ab565885f94068c52f04376cb4da9a32793af23e5558e73552f356f1 extends Twig_Template
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
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Profile details");
    }

    // line 4
    public function block_page_header($context, array $blocks = array())
    {
        echo gettext("User profile settings");
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo " <li class=\"active\">";
        echo gettext("Profile");
        echo "</li>";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"row-fluid\">

<article class=\"span12 data-block\">
<div class=\"data-container\">

<section class=\"tab-content\">

<div class=\"tab-pane active\" id=\"two\">

<!-- Second level tabs -->
<div class=\"tabbable tabs-left\">
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">";
        // line 21
        echo gettext("Details");
        echo "</a></li>
        <li class=\"\"><a href=\"#tab2\" data-toggle=\"tab\">";
        // line 22
        echo gettext("Change Password");
        echo "</a></li>
        <li class=\"\"><a href=\"#tab3\" data-toggle=\"tab\">";
        // line 23
        echo gettext("API key");
        echo "</a></li>
        <li class=\"\"><a href=\"#tab4\" data-toggle=\"tab\">";
        // line 24
        echo gettext("Currency");
        echo "</a></li>
    </ul>

    <div class=\"tab-content\">

        <div class=\"tab-pane active\" id=\"tab1\">
            <header>
                <h1>";
        // line 31
        echo gettext("Update details");
        echo "</h1>
                <p>";
        // line 32
        echo gettext("Keep your personal data up to date.");
        echo "</p>
            </header>
            <form method=\"post\" action=\"\" id=\"profile-update\" class=\"form-horizontal\">
                <fieldset>
                    <div class=\"alert alert-block alert-success\">
                        <div class=\"row\">
                        <div class=\"span3\"><img src=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email")), "html", null, true);
        echo "\" alt=\"Gravatar\"></div>
                        <div class=\"span6\">";
        // line 39
        echo gettext("Please register with");
        echo " <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email"), "html", null, true);
        echo "</strong> ";
        echo gettext("at ");
        echo "<a target=\"_blank\" href=\"http://gravatar.com\">Gravatar.com</a> ";
        echo gettext("to change your profile image. Gravatar image updates may not appear immediately.");
        echo "</div>
                        </div>
                    </div>
                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"input\">";
        // line 43
        echo gettext("Email Address");
        echo "</label>
                            <div class=\"controls\">
                                <input type=\"email\" class=\"input-xlarge\" name=\"email\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email"), "html", null, true);
        echo "\" required=\"required\">
                                <p class=\"help-block\"></p>
                            </div>
                        </div>

                       <div class=\"control-group\">
                           <label class=\"control-label\" for=\"input\">";
        // line 51
        echo gettext("First Name");
        echo "</label>
                           <div class=\"controls\">
                                <input type=\"text\" name=\"first_name\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "first_name"), "html", null, true);
        echo "\" required=\"required\">
                                <p class=\"help-block\"></p>
                           </div>
                       </div>

                       <div class=\"control-group\">
                           <label class=\"control-label\" for=\"input\">";
        // line 59
        echo gettext("Last Name");
        echo "</label>
                           <div class=\"controls\">
                                <input type=\"text\" name=\"last_name\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "last_name"), "html", null, true);
        echo "\" required=\"required\">
                               <p class=\"help-block\"></p>
                           </div>
                       </div>

                       <div class=\"control-group\">
                           <label class=\"control-label\" for=\"input\">";
        // line 67
        echo gettext("Birth date");
        echo "</label>
                           <div class=\"controls\">
                                <input type=\"date\" name=\"birthday\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "birthday"), "html", null, true);
        echo "\" >
                               <p class=\"help-block\"></p>
                           </div>
                       </div>

                       <div class=\"control-group\">
                           <label class=\"control-label\" for=\"input\">";
        // line 75
        echo gettext("Company Name");
        echo "</label>
                           <div class=\"controls\">
                                <input type=\"text\" name=\"company\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company"), "html", null, true);
        echo "\">
                               <p class=\"help-block\"></p>
                           </div>
                       </div>

                    <div class=\"control-group\">
                           <label class=\"control-label\" for=\"input\">";
        // line 83
        echo gettext("Company VAT");
        echo "</label>
                           <div class=\"controls\">
                                <input type=\"text\" name=\"company_vat\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company_vat"), "html", null, true);
        echo "\">
                               <p class=\"help-block\"></p>
                           </div>
                       </div>

                    <div class=\"control-group\">
                           <label class=\"control-label\" for=\"input\">";
        // line 91
        echo gettext("Company Number");
        echo "</label>
                           <div class=\"controls\">
                                <input type=\"text\" name=\"company_number\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company_number"), "html", null, true);
        echo "\">
                               <p class=\"help-block\"></p>
                           </div>
                       </div>

                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"input\">";
        // line 99
        echo gettext("Phone Country Code");
        echo "</label>
                            <div class=\"controls\">
                                <input type=\"text\" name=\"phone_cc\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "phone_cc"), "html", null, true);
        echo "\" required=\"required\">
                                <p class=\"help-block\"></p>
                            </div>
                        </div>

                       <div class=\"control-group\">
                           <label class=\"control-label\" for=\"input\">";
        // line 107
        echo gettext("Phone Number");
        echo "</label>
                           <div class=\"controls\">
                                <input type=\"text\" name=\"phone\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "phone"), "html", null, true);
        echo "\" required=\"required\">
                               <p class=\"help-block\"></p>
                           </div>
                       </div>

                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"input\">";
        // line 115
        echo gettext("Address");
        echo "</label>
                            <div class=\"controls\">
                                <input type=\"text\" name=\"address_1\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "address_1"), "html", null, true);
        echo "\" required=\"required\">
                                <p class=\"help-block\"></p>
                            </div>
                        </div>

                       <div class=\"control-group\">
                           <label class=\"control-label\" for=\"input\">";
        // line 123
        echo gettext("Address 2");
        echo "</label>
                           <div class=\"controls\">
                                <input type=\"text\" name=\"address_2\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "address_2"), "html", null, true);
        echo "\">
                               <p class=\"help-block\"></p>
                           </div>
                       </div>

                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"input\">";
        // line 131
        echo gettext("City");
        echo "</label>
                            <div class=\"controls\">
                                <input type=\"text\" name=\"city\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "city"), "html", null, true);
        echo "\" required=\"required\">
                                <p class=\"help-block\"></p>
                            </div>
                        </div>

                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"input\">";
        // line 139
        echo gettext("Country");
        echo "</label>
                            <div class=\"controls\">
                                <select name=\"country\" required=\"required\">
                                <option value=\"\">";
        // line 142
        echo gettext("-- Select country --");
        echo "</option>
                                ";
        // line 143
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "system_countries"));
        foreach ($context['_seq'] as $context["val"] => $context["label"]) {
            // line 144
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null), "html", null, true);
            echo "\" label=\"";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null));
            echo "\" ";
            if (((isset($context["val"]) ? $context["val"] : null) == $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "country"))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null));
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                                </select>
                                <p class=\"help-block\"></p>
                            </div>
                        </div>

                       <div class=\"control-group\">
                           <label class=\"control-label\" for=\"input\">";
        // line 152
        echo gettext("State");
        echo "</label>
                           <div class=\"controls\">
                                ";
        // line 155
        echo "                                <input type=\"text\" name=\"state\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "state"), "html", null, true);
        echo "\" />
                               <p class=\"help-block\"></p>
                           </div>
                       </div>

                      <div class=\"control-group\">
                          <label class=\"control-label\" for=\"input\">";
        // line 161
        echo gettext("Zip/Postal Code");
        echo "</label>
                          <div class=\"controls\">
                                <input type=\"text\" name=\"postcode\" value=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "postcode"), "html", null, true);
        echo "\" required=\"required\">
                              <p class=\"help-block\"></p>
                          </div>
                      </div>

                      <div class=\"control-group\">
                          <label class=\"control-label\" for=\"input\">";
        // line 169
        echo gettext("Passport number");
        echo "</label>
                          <div class=\"controls\">
                                <input type=\"text\" name=\"document_nr\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "document_nr"), "html", null, true);
        echo "\" >
                              <p class=\"help-block\"></p>
                          </div>
                      </div>

                    <div class=\"form-actions\">
                        <button class=\"btn btn-alt btn-large btn-primary\" type=\"submit\">";
        // line 177
        echo gettext("Update profile");
        echo "</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class=\"tab-pane\" id=\"tab2\">
            <header>
                <h1>";
        // line 184
        echo gettext("New password");
        echo "</h1>
                <p>";
        // line 185
        echo gettext("Please enter new password two times in order avoid mistypes");
        echo "</p>
            </header>
            <form method=\"post\" action=\"\" id=\"change-password\" class=\"form-horizontal\">
                <fieldset>
                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"input\">";
        // line 190
        echo gettext("Password");
        echo "</label>
                            <div class=\"controls\">
                                <input type=\"password\" name=\"password\" value=\"\" required=\"required\">
                                <p class=\"help-block\"></p>
                            </div>
                        </div>

                        <div class=\"control-group\">
                            <label class=\"control-label\" for=\"input\">";
        // line 198
        echo gettext("Password confirm");
        echo "</label>
                            <div class=\"controls\">
                                <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\">
                                <p class=\"help-block\"></p>
                            </div>
                        </div>
                    <div class=\"form-actions\">
                        <button class=\"btn btn-alt btn-large btn-primary\" type=\"submit\">";
        // line 205
        echo gettext("Update password");
        echo "</button>
                    </div>                </fieldset>
            </form>        </div>
        <div class=\"tab-pane\" id=\"tab3\">
            <header>
                <h1>";
        // line 210
        echo gettext("API key");
        echo "</h1>
                <p>";
        // line 211
        echo gettext("API key allows integration with external applications. You will need this key for authentication.");
        echo "</p>
            </header>
            <form method=\"post\" action=\"\" id=\"change-api-key\" class=\"form-horizontal\">
                <fieldset>
                    <div class=\"alert alert-block\">
                     <h4><p>";
        // line 216
        echo gettext("Warning! Resetting the key will break existing applications using it!");
        echo "</p></h4>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"api-key\">";
        // line 219
        echo gettext("Your API key");
        echo ": </label>
                        <div class=\"controls\">
                        <input type=\"text\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : null), "profile_api_key_get"), "html", null, true);
        echo "\" class=\"input-xlarge\" id=\"api-key\">
                        </div>
                        <div class=\"form-actions\">
                            <button class=\"btn btn-alt btn-large btn-primary\" type=\"submit\">";
        // line 224
        echo gettext("Reset key");
        echo "</button>
                        </div>                    </div>
                </fieldset>
            </form>        </div>
        <div class=\"tab-pane\" id=\"tab4\">
            <header>
                <h1>";
        // line 230
        echo gettext("Currency");
        echo "</h1>
                <p>";
        // line 231
        echo gettext("Your profile currency is defined after your first order. Once your currency is set, all your profile accounting will be managed in that currency and can not be changed.");
        echo "</p>
            </header>
                ";
        // line 233
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "currency")) {
            // line 234
            echo "                <p>";
            echo gettext("Your profile currency is");
            echo " <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "currency"), "html", null, true);
            echo "</strong></p>
                <p>";
            // line 235
            echo gettext("Create new client profile if you want to manage your money in other currency");
            echo "</p>
                ";
        }
        // line 237
        echo "
        </div>
    </div>
</div>

</div>

</section>
</div>
</article>

</div>

";
    }

    // line 253
    public function block_js($context, array $blocks = array())
    {
        // line 254
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('#change-password').bind('submit',function(event){
        bb.post(
            'client/client/change_password',
            \$(this).serialize(),
            function(result) {
                bb.msg('Password was changed');
            }
        );
        return false;
    });
    
    \$('#change-api-key').submit(function(event){

        bb.post(
            'client/client/api_key_reset',
            \$(this).serialize(),
            function(result) {
                \$('#api-key').val(result);
                bb.msg('API key was changed');
            }
        );

        return false;
    });

    \$('#profile-update').bind('submit',function(event){
        bb.post(
            'client/client/update',
            \$(this).serialize(),
            function(result) {
                bb.msg('Profile updated');
            }
        );
        return false;
    });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_client_profile.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 254,  499 => 253,  482 => 237,  477 => 235,  470 => 234,  468 => 233,  463 => 231,  459 => 230,  450 => 224,  444 => 221,  439 => 219,  433 => 216,  425 => 211,  421 => 210,  413 => 205,  403 => 198,  392 => 190,  384 => 185,  380 => 184,  370 => 177,  361 => 171,  356 => 169,  347 => 163,  342 => 161,  332 => 155,  327 => 152,  319 => 146,  302 => 144,  298 => 143,  294 => 142,  288 => 139,  279 => 133,  274 => 131,  265 => 125,  260 => 123,  251 => 117,  246 => 115,  237 => 109,  232 => 107,  223 => 101,  218 => 99,  209 => 93,  204 => 91,  195 => 85,  190 => 83,  181 => 77,  176 => 75,  167 => 69,  162 => 67,  153 => 61,  148 => 59,  139 => 53,  134 => 51,  125 => 45,  120 => 43,  107 => 39,  103 => 38,  94 => 32,  90 => 31,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  53 => 8,  50 => 7,  42 => 5,  36 => 4,  30 => 3,);
    }
}
