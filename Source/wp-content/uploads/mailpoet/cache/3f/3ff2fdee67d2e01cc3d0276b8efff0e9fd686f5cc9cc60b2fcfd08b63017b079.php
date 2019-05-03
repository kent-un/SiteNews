<?php

/* welcome_wizard.html */
class __TwigTemplate_720da54594d93f9402cf8d42125b2fbf9390e43af2f04d90dbeb19e13aed80c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "welcome_wizard.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'translations' => array($this, 'block_translations'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<script>
  var mailpoet_logo_url = '";
        // line 5
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateCdnUrl("welcome-wizard/mailpoet-logo.20190109-1400.png");
        echo "';
  var email_course_illustration = '";
        // line 6
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateCdnUrl("welcome-wizard/wizard-email-course.20190109-1400.png");
        echo "';
  var woocommerce_screenshot_url = '";
        // line 7
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateCdnUrl("welcome-wizard/woocommerce-auto-emails-tilted.20181121-1440.png");
        echo "';
  var is_mp2_migration_complete = ";
        // line 8
        echo json_encode(($context["is_mp2_migration_complete"] ?? null));
        echo ";
  var is_woocommerce_active = ";
        // line 9
        echo json_encode(($context["is_woocommerce_active"] ?? null));
        echo ";
  var finish_wizard_url = '";
        // line 10
        echo twig_escape_filter($this->env, ($context["finish_wizard_url"] ?? null), "html", null, true);
        echo "';
  var sender_data = ";
        // line 11
        echo json_encode(($context["sender"] ?? null));
        echo ";
  var reply_to_data = ";
        // line 12
        echo json_encode(($context["reply_to"] ?? null));
        echo ";
</script>

<div id=\"welcome_wizard_container\"></div>

<div class=\"welcome_wizard_video\">
    <iframe width=\"1\" height=\"1\" src=\"https://player.vimeo.com/video/279123953\" frameborder=\"0\"></iframe>
</div>

";
    }

    // line 23
    public function block_translations($context, array $blocks = array())
    {
        // line 24
        echo $this->env->getExtension('MailPoet\Twig\I18n')->localize(array("welcomeWizardLetsStartTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Welcome! Let’s get you started on the right foot."), "welcomeWizardSenderText" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Who is the sender of the emails you’ll be creating with MailPoet?"), "welcomeWizardSenderMigratedUserText" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("We have a few things to tell you before you begin to ensure you have a good experience."), "welcomeWizardUsageTrackingStepTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Help MailPoet improve with usage tracking."), "welcomeWizardWooCommerceStepTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Automate your WooCommerce emails."), "welcomeWizardTrackingText" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Gathering usage data allows us to make MailPoet better — the way you use MailPoet will be considered as we evaluate new features, judge the quality of an update, or determine if an improvement makes sense. [link]Read more about what we collect[/link]."), "welcomeWizardHelpingShopOwnersText" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("We’re making it easier for shop owners to send emails to their customers and make more money."), "welcomeWizardWooCommerceEmailsText" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Create a new email to find the WooCommerce type of emails:"), "welcomeWizardEmailCourseTitle" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sign up to our 4-part email course"), "welcomeWizardEmailCourseText" => $this->env->getExtension('MailPoet\Twig\I18n')->translate("A must for every beginner (in English only)"), "seeVideoGuide" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("See video guide", "A label on a button"), "skip" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Skip", "A label on a skip button"), "noThanksSkip" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("No thanks. Skip.", "A label on a skip button"), "allowAndFinish" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Allow & Finish", "A label on a button"), "allowAndContinue" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Allow & Continue", "A label on a button"), "senderAddress" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("From Address", "A form field label"), "replyToAddress" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Reply-to Address", "A form field label"), "senderName" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("From Name", "A form field label"), "next" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Next", "A label on a button"), "gotIt" => $this->env->getExtension('MailPoet\Twig\I18n')->translateWithContext("Got it!", "A label on a button")));
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "welcome_wizard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 45,  80 => 24,  77 => 23,  63 => 12,  59 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "welcome_wizard.html", "/home/gen-004/Documents/TRAVAIL/DEV/SiteNews/Source/wp-content/plugins/mailpoet/views/welcome_wizard.html");
    }
}
