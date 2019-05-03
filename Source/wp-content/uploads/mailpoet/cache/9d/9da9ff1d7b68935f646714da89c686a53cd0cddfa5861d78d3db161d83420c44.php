<?php

/* layout.html */
class __TwigTemplate_228554a19b21c18ddd6a82d7a89f43556f8062e0a8bccf6068bfb7a2159ddc75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'templates' => array($this, 'block_templates'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'after_css' => array($this, 'block_after_css'),
            'translations' => array($this, 'block_translations'),
            'after_translations' => array($this, 'block_after_translations'),
            'after_javascript' => array($this, 'block_after_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (($context["sub_menu"] ?? null)) {
            // line 2
            echo "<script type=\"text/javascript\">
jQuery('.toplevel_page_mailpoet-newsletters.menu-top-last')
  .addClass('wp-has-current-submenu')
  .find('a[href\$=\"";
            // line 5
            echo twig_escape_filter($this->env, ($context["sub_menu"] ?? null), "html", null, true);
            echo "\"]')
  .addClass('current')
  .parent()
  .addClass('current');
</script>
";
        }
        // line 11
        echo "
<!-- system notices -->
<div id=\"mailpoet_notice_system\" class=\"mailpoet_notice\" style=\"display:none;\"></div>
<div id=\"mailpoet_confirm_alert_holder\"></div>

<!-- handlebars templates -->
";
        // line 17
        $this->displayBlock('templates', $context, $blocks);
        // line 18
        echo "
<!-- main container -->
<div class=\"wrap\">
  <!-- notices -->
  <div id=\"mailpoet_notice_error\" class=\"mailpoet_notice\" style=\"display:none;\"></div>
  <div id=\"mailpoet_notice_success\" class=\"mailpoet_notice\" style=\"display:none;\"></div>

  <!-- title block -->
  ";
        // line 26
        $this->displayBlock('title', $context, $blocks);
        // line 27
        echo "  <!-- content block -->
  ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "</div>

<!-- stylesheets -->
";
        // line 32
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("admin.css");
        // line 34
        echo "

";
        // line 36
        echo do_action("mailpoet_styles_admin_after");
        echo "

<!-- rtl specific stylesheet -->
";
        // line 39
        if ($this->env->getExtension('MailPoet\Twig\Functions')->isRtl()) {
            // line 40
            echo "  ";
            echo $this->env->getExtension('MailPoet\Twig\Assets')->generateStylesheet("rtl.css");
            echo "
";
        }
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('after_css', $context, $blocks);
        // line 44
        echo "
<script type=\"text/javascript\">
  var mailpoet_date_format = \"";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\Functions')->getWPDateTimeFormat(), "js"), "html", null, true);
        echo "\";
  var mailpoet_time_format = \"";
        // line 47
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\Functions')->getWPTimeFormat(), "js"), "html", null, true);
        echo "\";
  var mailpoet_version = \"";
        // line 48
        echo $this->env->getExtension('MailPoet\Twig\Functions')->getMailPoetVersion();
        echo "\";
  var mailpoet_locale = \"";
        // line 49
        echo $this->env->getExtension('MailPoet\Twig\Functions')->getTwoLettersLocale();
        echo "\";
  var mailpoet_polls_data = ";
        // line 50
        echo json_encode($this->env->getExtension('MailPoet\Twig\Polls')->getPollsData());
        echo ";
  var mailpoet_polls_visibility = ";
        // line 51
        echo json_encode($this->env->getExtension('MailPoet\Twig\Polls')->getPollsVisibility());
        echo ";
  var mailpoet_premium_version = ";
        // line 52
        echo json_encode($this->env->getExtension('MailPoet\Twig\Functions')->getMailPoetPremiumVersion());
        echo ";
  var mailpoet_analytics_enabled = ";
        // line 53
        echo twig_escape_filter($this->env, twig_jsonencode_filter(call_user_func_array($this->env->getFunction('is_analytics_enabled')->getCallable(), array())), "html", null, true);
        echo ";
  var mailpoet_analytics_data = ";
        // line 54
        echo json_encode(call_user_func_array($this->env->getFunction('get_analytics_data')->getCallable(), array()));
        echo ";
  var mailpoet_analytics_public_id = ";
        // line 55
        echo json_encode(call_user_func_array($this->env->getFunction('get_analytics_public_id')->getCallable(), array()));
        echo ";
  var mailpoet_analytics_new_public_id = ";
        // line 56
        echo twig_escape_filter($this->env, twig_jsonencode_filter(call_user_func_array($this->env->getFunction('is_analytics_public_id_new')->getCallable(), array())), "html", null, true);
        echo ";
  // RFC 5322 standard; http://emailregex.com/ combined with https://google.github.io/closure-library/api/goog.format.EmailAddress.html#isValid
  var mailpoet_email_regex = /(?=^[+a-zA-Z0-9_.!#\$%&'*\\/=?^`{|}~-]+@([a-zA-Z0-9-]+\\.)+[a-zA-Z0-9]{2,63}\$)(?=^(([^<>()\\[\\]\\\\.,;:\\s@\"]+(\\.[^<>()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,})))/;
</script>

<!-- javascripts -->
";
        // line 62
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("vendor.js", "mailpoet.js");
        // line 65
        echo "

";
        // line 67
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("ajaxFailedErrorMessage" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("An error has happened while performing a request, the server has responded with response code %d"), "senderEmailAddressWarning1" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("You might not reach the inbox of your subscribers if you use this email address.", "In the last step, before sending a newsletter. URL: ?page=mailpoet-newsletters#/send/2"), "senderEmailAddressWarning2" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Use an address like %suggested for the Sender and put %originalSender in the the <em>Reply-to</em> field below.", "In the last step, before sending a newsletter. URL: ?page=mailpoet-newsletters#/send/2"), "senderEmailAddressWarning3" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Read more.")));
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('translations', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('after_translations', $context, $blocks);
        // line 76
        echo "
";
        // line 77
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("admin_vendor_chunk.js", "admin_vendor.js");
        // line 80
        echo "

";
        // line 82
        echo do_action("mailpoet_scripts_admin_before");
        echo "

";
        // line 84
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("admin.js");
        // line 86
        echo "

";
        // line 88
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateJavascript("lib/analytics.js");
        echo "

";
        // line 90
        $context["has_valid_premium_key"] = $this->env->getExtension('MailPoet\Twig\Functions')->hasValidPremiumKey();
        // line 91
        echo "
";
        // line 92
        $context["helpscout_form_id"] = "dd918048-8d73-11e7-b5b5-0ec85169275a";
        // line 93
        if (($context["has_valid_premium_key"] ?? null)) {
            // line 94
            echo "  ";
            $context["helpscout_form_id"] = "6974b88d-8d85-11e7-b5b5-0ec85169275a";
        }
        // line 96
        echo "<script>!function(e,o,n){window.HSCW=o,window.HS=n,n.beacon=n.beacon||{};var t=n.beacon;t.userConfig={},t.readyQueue=[],t.config=function(e){this.userConfig=e},t.ready=function(e){this.readyQueue.push(e)},o.config={docs:{enabled:!0,baseUrl:\"https://mailpoet3.helpscoutdocs.com/\"},contact:{enabled:!0,formId:\"";
        echo twig_escape_filter($this->env, ($context["helpscout_form_id"] ?? null), "html", null, true);
        echo "\"}};var r=e.getElementsByTagName(\"script\")[0],c=e.createElement(\"script\");c.type=\"text/javascript\",c.async=!0,c.src=\"https://djtflbt20bdde.cloudfront.net/\",r.parentNode.insertBefore(c,r)}(document,window.HSCW||{},window.HS||{});</script>

<script type=\"text/javascript\">
  if(window['HS'] !== undefined) {
    // HelpScout Beacon: Configuration
    HS.beacon.config({
      icon: 'message',
      zIndex: 50000,
      instructions: \"";
        // line 104
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Want to give feedback to the MailPoet team? Contact us here. Please provide as much information as possible!");
        echo "\",
      showContactFields: true
    });

    // HelpScout Beacon: Custom information
    HS.beacon.ready(function() {
      HS.beacon.identify(
        ";
        // line 111
        echo json_encode(\MailPoet\Helpscout\Beacon::getData());
        echo "
      );
    });
  }
</script>

";
        // line 117
        if (((($context["has_valid_premium_key"] ?? null) == false) && $this->env->getExtension('MailPoet\Twig\Functions')->installedInLastTwoWeeks())) {
            // line 118
            echo "  <script type=\"text/javascript\" async>;(function(o,l,a,r,k,y){if(o.olark)return;r=\"script\";y=l.createElement(r);r=l.getElementsByTagName(r)[0];y.async=1;y.src=\"//\"+a;r.parentNode.insertBefore(y,r);y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)};y.extend=function(i,j){y(\"extend\",i,j)};y.identify=function(i){y(\"identify\",k.i=i)};y.configure=function(i,j){y(\"configure\",i,j);k.c[i]=j};k=y._={s:[],t:[+new Date],c:{},l:a};})(window,document,\"static.olark.com/jsclient/loader.js\");olark.identify('2129-842-10-9194');</script>

  <script type=\"text/javascript\">
    // we want to display Olark instead of HS beacon only if a supporter is active on Olark
    // (this means that HS beacon is always initialized and Olark can replace it anytime)
    olark('api.box.onShow', function() {
      jQuery('#hs-beacon')
        .addClass('hs-beacon-hidden')
        .hide();
    });
  </script>
";
        }
        // line 130
        echo "
<script>
  // SatisMeter for tracking NPS score
  (function() { window.satismeter = window.satismeter || function() {(window.satismeter.q = window.satismeter.q || []).push(arguments);};window.satismeter.l = 1 * new Date();var script = document.createElement(\"script\");var parent = document.getElementsByTagName(\"script\")[0].parentNode;script.async = 1;script.src = \"https://app.satismeter.com/satismeter.js\";parent.appendChild(script);})();
</script>
";
        // line 135
        $this->displayBlock('after_javascript', $context, $blocks);
    }

    // line 17
    public function block_templates($context, array $blocks = array())
    {
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
    }

    // line 43
    public function block_after_css($context, array $blocks = array())
    {
    }

    // line 73
    public function block_translations($context, array $blocks = array())
    {
    }

    // line 75
    public function block_after_translations($context, array $blocks = array())
    {
    }

    // line 135
    public function block_after_javascript($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 135,  291 => 75,  286 => 73,  281 => 43,  276 => 28,  271 => 26,  266 => 17,  262 => 135,  255 => 130,  241 => 118,  239 => 117,  230 => 111,  220 => 104,  208 => 96,  204 => 94,  202 => 93,  200 => 92,  197 => 91,  195 => 90,  190 => 88,  186 => 86,  184 => 84,  179 => 82,  175 => 80,  173 => 77,  170 => 76,  168 => 75,  165 => 74,  163 => 73,  160 => 72,  158 => 67,  154 => 65,  152 => 62,  143 => 56,  139 => 55,  135 => 54,  131 => 53,  127 => 52,  123 => 51,  119 => 50,  115 => 49,  111 => 48,  107 => 47,  103 => 46,  99 => 44,  97 => 43,  94 => 42,  88 => 40,  86 => 39,  80 => 36,  76 => 34,  74 => 32,  69 => 29,  67 => 28,  64 => 27,  62 => 26,  52 => 18,  50 => 17,  42 => 11,  33 => 5,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "/home/gen-004/Documents/TRAVAIL/DEV/SiteNews/Source/wp-content/plugins/mailpoet/views/layout.html");
    }
}
