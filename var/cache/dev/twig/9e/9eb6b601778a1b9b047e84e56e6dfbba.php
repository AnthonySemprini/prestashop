<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__0a9d4cff4451ef51655aaca6318c9772 */
class __TwigTemplate_d091bd26db60526452a2c3ef917bcf1e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__0a9d4cff4451ef51655aaca6318c9772"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__0a9d4cff4451ef51655aaca6318c9772"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Performances • e-commerce</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.1.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '3309954298da1677a3bfb3ca5d23c23b';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = 'e0353db33282d542cd52a269062d8f43';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin461femwdtswtbbipi5o/index.php/improve/modules/manage?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o';
    var admin_notification_get_link = '/prestashop/admin461femwdtswtbbipi5o/index.php/common/notifications?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin461femwdtswtbbipi5o/index.php/common/notifications/ack?_token=7yOYBUCCT1BEKVgF5T";
        // line 40
        echo "VFIozBUL7bY_CslD9RqUhIU-o';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.e510d42b.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin461femwdtswtbbipi5o/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin461femwdtswtbbipi5o\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin461femwdtswtbbipi5o\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"";
        // line 69
        echo "currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/hideMinifiedChecklist.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.10.2\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascri";
        // line 87
        echo "pt\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin461femwdtswtbbipi5o/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost:8888\\/prestashop\\/admin461femwdtswtbbipi5o\\/index.php?controller=AdminGamification&token=6cf9a7f9f9c7991f00fbcefdd4e053c8\";
            var current_id_tab = 94;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin461femwdtswtbbipi5o/index.php/common/notifications?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'fr';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script>

";
        // line 115
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminperformance developer-mode\"
  data-base-url=\"/prestashop/admin461femwdtswtbbipi5o/index.php\"  data-token=\"7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/pseditionbasic/homepage?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"></a>
      <span id=\"shop_version\">8.1.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/sell/orders?token=e58d969e55ac0c45839cb7662e9482c6\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e0379305ac322225f4f204812b98f347\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/improve/modules/manage?token=e58d969e55ac0c45839cb7662e9482c6\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCartRules&amp;addcart_rule&amp;t";
        // line 149
        echo "oken=d134d2d3298b7bc6a86b1c7f91671428\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/products-v2/create?token=e58d969e55ac0c45839cb7662e9482c6\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/categories/new?token=e58d969e55ac0c45839cb7662e9482c6\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"27\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance/?-o\"
        data-post-link=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminQuickAccesses&token=f3b2a1c14a382e869889c3f6f94badf6\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Performances - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminQuickAccesses&token=f3b2a1c14a382e869889c3f6f94badf6\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
 ";
        // line 188
        echo "     action=\"/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminSearch&amp;token=73242676b1a705bc665ed25550eebf60\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factur";
        // line 204
        echo "es</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/sell/orders?token=e58d969e55ac0c45839cb7662e9482c6\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e0379305ac322225f4f204812b98f347\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/improve/modules/manage?token=e58d969e55ac0c45839cb7662e9482c6\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d134d2d3298b7bc6a86b1c7f91671428\"
             data-item=\"Nouveau";
        // line 239
        echo " bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/products-v2/create?token=e58d969e55ac0c45839cb7662e9482c6\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/categories/new?token=e58d969e55ac0c45839cb7662e9482c6\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"78\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/performance/?-o\"
      data-post-link=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminQuickAccesses&token=f3b2a1c14a382e869889c3f6f94badf6\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Performances - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminQuickAccesses&token=f3b2a1c14a382e869889c3f6f94badf6\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Votre boutique est en mode debug.</strong></p><p class=&quot;text-left&";
        // line 280
        echo "quot;>Tous les messages et erreurs PHP sont affichés. Lorsque vous n&#039;en avez plus besoin, &lt;strong&gt;désactivez&lt;/strong&gt; ce mode.</p>\"
             href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/performance/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Mode debug</span>
          </a>
        </div>
      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Votre boutique est en mode maintenance.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Vos visiteurs et clients ne peuvent pas accéder à votre boutique lorsque le mode maintenance est activé.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Pour gérer les paramètres de maintenance, rendez-vous sur la page Paramètres de la boutique &amp;gt; Paramètres généraux &amp;gt; Maintenance.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Les administrateurs peuvent accéder au front-office de la boutique sans que leur adresse IP ne soit enregistrée.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/maintenance/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
";
        // line 318
        echo "              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8888/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab";
        // line 372
        echo " panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=e730d99b58fced636bb8b7483a45ebce\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class";
        // line 415
        echo "=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8888/prestashop/img/pr/default.jpg\" alt=\"Anthony\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Anthony</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/employees/1/edit?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost%3A8888&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formation
        </a>
                          <a class=\"dropdo";
        // line 450
        echo "wn-item ps_mbo\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Trouver un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-fr&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Marketplace Prestashop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/fr?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centre d'assistance
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminLogin&amp;logout=1&amp;token=1cc517e3a70f5fe9792cc75dce6577ac\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/employees/toggle-navigation?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </s";
        // line 476
        echo "pan>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/pseditionbasic/homepage?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.4</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"165\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"166\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/pseditionbasic/homepage?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Accueil
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminDashboard&amp;token=e0d3fdae2f3bd413de659fbf8f24aef4\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">t";
        // line 514
        echo "rending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/orders/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin461femwd";
        // line 552
        echo "tswtbbipi5o/index.php/sell/orders/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/orders/invoices/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/orders/credit-slips/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/orders/delivery-slips/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                     ";
        // line 583
        echo "         <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCarts&amp;token=e730d99b58fced636bb8b7483a45ebce\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/products?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/products?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Produits
                                </a>
                              </li>

                                                             ";
        // line 613
        echo "                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/categories?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/monitoring/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminAttributesGroups&amp;token=575f56367d2049876323917100687563\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/b";
        // line 641
        echo "rands/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/attachments/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCartRules&amp;token=d134d2d3298b7bc6a86b1c7f91671428\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/stocks/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
       ";
        // line 673
        echo "                                               
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/customers/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/customers/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/addresses/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                    ";
        // line 702
        echo "                                                                </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCustomerThreads&amp;token=13e5d9c6d6df82e1a72a99465e4a211b\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCustomerThreads&amp;token=13e5d9c6d6df82e1a72a99465e4a211b\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.ph";
        // line 731
        echo "p/sell/customer-service/order-messages/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminReturn&amp;token=14e0705442f8f559ac29b36f12162f2e\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/metrics/legacy/stats?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                    ";
        // line 762
        echo "        
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/metrics/legacy/stats?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/metrics?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/mbo/modules/catalog/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"";
        // line 798
        echo "material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/mbo/modules/catalog/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/modules/manage?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/improve/design/theme";
        // line 826
        echo "s?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/improve/design/themes?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=8d3d4a51bef04f729e5cb59b81f392c0\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"133\" i";
        // line 855
        echo "d=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/mbo/themes/catalog/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/design/mail_theme/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/design/cms-pages/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/design/modules/positions/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Positions
                                </a>
                              </li>

                                          ";
        // line 884
        echo "                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminImages&amp;token=1bfe3a883f95ff5ef33ede5facfd2683\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/link-widget/list?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCarriers&amp;token=a47410227af913c0773abf2dbfb33ad1\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                   ";
        // line 914
        echo "                         </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCarriers&amp;token=a47410227af913c0773abf2dbfb33ad1\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/shipping/preferences/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminMbeConfiguration&amp;token=5c80ad5a7b4fe6f0a6726281daf17a37\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                     ";
        // line 943
        echo "       
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminMbeShipping&amp;token=4acce7f8d387be3368b69bde99aa22c7\" class=\"link\"> MBE - Expéditions
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/payment/payment_methods?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/payment/payment_methods?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Moyens";
        // line 970
        echo " de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/payment/preferences?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/international/localization/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminPar";
        // line 1002
        echo "entLocalization\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/international/localization/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/international/zones/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/international/taxes/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/international/translations/settings?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Traductions
                                </a>
                              </li>

                                      ";
        // line 1031
        echo "                                        </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"143\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=947f64621e937dd107fe244f16ec7565\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-143\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=947f64621e937dd107fe244f16ec7565\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost:8888/prestashop/admi";
        // line 1060
        echo "n461femwdtswtbbipi5o/index.php?controller=AdminPsfacebookModule&amp;token=8467bcb919dac06f097962fc4bad1368\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"167\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/pseditionbasic/settings?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/preferences/preferences?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
    ";
        // line 1097
        echo "                  <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/preferences/preferences?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/order-preferences/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href";
        // line 1126
        echo "=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/product-preferences/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/customer-preferences/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/contacts/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/seo-urls/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
";
        // line 1156
        echo "                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminSearchConf&amp;token=d6782b59e212860b34d6bc1b402add36\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/system-information/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/i";
        // line 1183
        echo "ndex.php/configure/advanced/system-information/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/performance/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/administration/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/emails/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                       ";
        // line 1213
        echo "                                     
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/import/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/employees/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/sql-requests/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/logs/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Logs
                              ";
        // line 1240
        echo "  </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/webservice-keys/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/feature-flags/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/security/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                 ";
        // line 1268
        echo "                       </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"142\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminKlaviyoPsConfig&amp;token=40dccbe2458b7c63769ab440b530e378\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"155\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminPsAssistantSettings&amp;token=b8e93a857f888d8565a3ed3f78354096\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                 ";
        // line 1302
        echo "                         
                    
          
            <li class=\"category-title\" data-submenu=\"116\" id=\"tab-DEFAULT\">
                <span class=\"title\">Détails</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"171\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminSelfUpgrade&amp;token=0475d313a0b22bb6d00a4367b047ca94\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paramètres avancés</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/performance/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" aria-current=\"page\">Performances</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performances          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                            ";
        // line 1358
        echo "              <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/performance/clear-cache?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"                  title=\"Vider le cache\"                                  >
                  <i class=\"material-icons\">delete</i>                  Vider le cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin461femwdtswtbbipi5o/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.1.4%2526country%253Dfr/Aide?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/performance/clear-cache?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"              title=\"Vider le cache\"            >
              Vider le cache
              <i class=\"material-icons\">delete</i";
        // line 1394
        echo ">            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin461femwdtswtbbipi5o/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.1.4%2526country%253Dfr/Aide?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1421
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/pseditionbasic/homepage?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1455
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 115
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1421
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1455
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__0a9d4cff4451ef51655aaca6318c9772";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1722 => 1455,  1653 => 1421,  1618 => 115,  1603 => 1455,  1563 => 1421,  1534 => 1394,  1496 => 1358,  1438 => 1302,  1402 => 1268,  1372 => 1240,  1343 => 1213,  1311 => 1183,  1282 => 1156,  1250 => 1126,  1219 => 1097,  1180 => 1060,  1149 => 1031,  1118 => 1002,  1084 => 970,  1055 => 943,  1024 => 914,  992 => 884,  961 => 855,  930 => 826,  900 => 798,  862 => 762,  829 => 731,  798 => 702,  767 => 673,  733 => 641,  703 => 613,  671 => 583,  638 => 552,  598 => 514,  558 => 476,  530 => 450,  493 => 415,  448 => 372,  392 => 318,  352 => 280,  309 => 239,  272 => 204,  254 => 188,  213 => 149,  174 => 115,  144 => 87,  124 => 69,  93 => 40,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Performances • e-commerce</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminPerformance\\';
    var iso_user = \\'fr\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'fr\\';
    var full_cldr_language_code = \\'fr-FR\\';
    var country_iso_code = \\'FR\\';
    var _PS_VERSION_ = \\'8.1.4\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'Une nouvelle commande a été passée sur votre boutique.\\';
    var order_number_msg = \\'Numéro de commande : \\';
    var total_msg = \\'Total : \\';
    var from_msg = \\'Du \\';
    var see_order_msg = \\'Afficher cette commande\\';
    var new_customer_msg = \\'Un nouveau client s\\\\\\'est inscrit sur votre boutique.\\';
    var customer_name_msg = \\'Nom du client : \\';
    var new_msg = \\'Un nouveau message a été posté sur votre boutique.\\';
    var see_msg = \\'Lire le message\\';
    var token = \\'3309954298da1677a3bfb3ca5d23c23b\\';
    var currentIndex = \\'index.php?controller=AdminPerformance\\';
    var employee_token = \\'e0353db33282d542cd52a269062d8f43\\';
    var choose_language_translate = \\'Choisissez la langue :\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/prestashop/admin461femwdtswtbbipi5o/index.php/improve/modules/manage?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\\';
    var admin_notification_get_link = \\'/prestashop/admin461femwdtswtbbipi5o/index.php/common/notifications?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/prestashop/admin461femwdtswtbbipi5o/index.php/common/notifications/ack?_token=7yOYBUCCT1BEKVgF5T' | raw }}{{ 'VFIozBUL7bY_CslD9RqUhIU-o\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Mise à jour réussie\\';
    var search_product_msg = \\'Rechercher un produit\\';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.e510d42b.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin461femwdtswtbbipi5o/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/prestashop\\\\/admin461femwdtswtbbipi5o\\\\/\";
var baseDir = \"\\\\/prestashop\\\\/\";
var changeFormLanguageUrl = \"\\\\/prestashop\\\\/admin461femwdtswtbbipi5o\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"' | raw }}{{ 'currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/hideMinifiedChecklist.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin461femwdtswtbbipi5o/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.10.2\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascri' | raw }}{{ 'pt\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin461femwdtswtbbipi5o/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\\\/\\\\/localhost:8888\\\\/prestashop\\\\/admin461femwdtswtbbipi5o\\\\/index.php?controller=AdminGamification&token=6cf9a7f9f9c7991f00fbcefdd4e053c8\";
            var current_id_tab = 94;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/prestashop/admin461femwdtswtbbipi5o/index.php/common/notifications?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = \\'fr\\';
        window.userflow_id = \\'ct_55jfryadgneorc45cjqxpbf6o4\\';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script>

' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-fr adminperformance developer-mode\"
  data-base-url=\"/prestashop/admin461femwdtswtbbipi5o/index.php\"  data-token=\"7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/pseditionbasic/homepage?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"></a>
      <span id=\"shop_version\">8.1.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/sell/orders?token=e58d969e55ac0c45839cb7662e9482c6\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e0379305ac322225f4f204812b98f347\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/improve/modules/manage?token=e58d969e55ac0c45839cb7662e9482c6\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCartRules&amp;addcart_rule&amp;t' | raw }}{{ 'oken=d134d2d3298b7bc6a86b1c7f91671428\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/products-v2/create?token=e58d969e55ac0c45839cb7662e9482c6\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/categories/new?token=e58d969e55ac0c45839cb7662e9482c6\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"27\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance/?-o\"
        data-post-link=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminQuickAccesses&token=f3b2a1c14a382e869889c3f6f94badf6\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Performances - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l\\'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminQuickAccesses&token=f3b2a1c14a382e869889c3f6f94badf6\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
 ' | raw }}{{ '     action=\"/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminSearch&amp;token=73242676b1a705bc665ed25550eebf60\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factur' | raw }}{{ 'es</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/sell/orders?token=e58d969e55ac0c45839cb7662e9482c6\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e0379305ac322225f4f204812b98f347\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/improve/modules/manage?token=e58d969e55ac0c45839cb7662e9482c6\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=d134d2d3298b7bc6a86b1c7f91671428\"
             data-item=\"Nouveau' | raw }}{{ ' bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/products-v2/create?token=e58d969e55ac0c45839cb7662e9482c6\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/categories/new?token=e58d969e55ac0c45839cb7662e9482c6\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"78\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/performance/?-o\"
      data-post-link=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminQuickAccesses&token=f3b2a1c14a382e869889c3f6f94badf6\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Performances - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l\\'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminQuickAccesses&token=f3b2a1c14a382e869889c3f6f94badf6\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Votre boutique est en mode debug.</strong></p><p class=&quot;text-left&' | raw }}{{ 'quot;>Tous les messages et erreurs PHP sont affichés. Lorsque vous n&#039;en avez plus besoin, &lt;strong&gt;désactivez&lt;/strong&gt; ce mode.</p>\"
             href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/performance/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Mode debug</span>
          </a>
        </div>
      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Votre boutique est en mode maintenance.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Vos visiteurs et clients ne peuvent pas accéder à votre boutique lorsque le mode maintenance est activé.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Pour gérer les paramètres de maintenance, rendez-vous sur la page Paramètres de la boutique &amp;gt; Paramètres généraux &amp;gt; Maintenance.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Les administrateurs peuvent accéder au front-office de la boutique sans que leur adresse IP ne soit enregistrée.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/maintenance/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
' | raw }}{{ '              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8888/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab' | raw }}{{ ' panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=e730d99b58fced636bb8b7483a45ebce\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s\\'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l\\'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l\\'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class' | raw }}{{ '=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8888/prestashop/img/pr/default.jpg\" alt=\"Anthony\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Anthony</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/employees/1/edit?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost%3A8888&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formation
        </a>
                          <a class=\"dropdo' | raw }}{{ 'wn-item ps_mbo\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Trouver un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-fr&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Marketplace Prestashop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/fr?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-fr&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centre d\\'assistance
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminLogin&amp;logout=1&amp;token=1cc517e3a70f5fe9792cc75dce6577ac\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/employees/toggle-navigation?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </s' | raw }}{{ 'pan>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/pseditionbasic/homepage?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.4</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"165\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"166\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/pseditionbasic/homepage?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Accueil
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminDashboard&amp;token=e0d3fdae2f3bd413de659fbf8f24aef4\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">t' | raw }}{{ 'rending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/orders/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin461femwd' | raw }}{{ 'tswtbbipi5o/index.php/sell/orders/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/orders/invoices/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/orders/credit-slips/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/orders/delivery-slips/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                     ' | raw }}{{ '         <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCarts&amp;token=e730d99b58fced636bb8b7483a45ebce\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/products?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/products?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Produits
                                </a>
                              </li>

                                                             ' | raw }}{{ '                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/categories?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/monitoring/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminAttributesGroups&amp;token=575f56367d2049876323917100687563\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/catalog/b' | raw }}{{ 'rands/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/attachments/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCartRules&amp;token=d134d2d3298b7bc6a86b1c7f91671428\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/stocks/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
       ' | raw }}{{ '                                               
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/customers/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/customers/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/sell/addresses/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                    ' | raw }}{{ '                                                                </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCustomerThreads&amp;token=13e5d9c6d6df82e1a72a99465e4a211b\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCustomerThreads&amp;token=13e5d9c6d6df82e1a72a99465e4a211b\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.ph' | raw }}{{ 'p/sell/customer-service/order-messages/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminReturn&amp;token=14e0705442f8f559ac29b36f12162f2e\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/metrics/legacy/stats?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                    ' | raw }}{{ '        
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/metrics/legacy/stats?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/metrics?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/mbo/modules/catalog/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"' | raw }}{{ 'material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/mbo/modules/catalog/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/modules/manage?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/improve/design/theme' | raw }}{{ 's?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/improve/design/themes?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=8d3d4a51bef04f729e5cb59b81f392c0\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"133\" i' | raw }}{{ 'd=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/mbo/themes/catalog/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/design/mail_theme/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/design/cms-pages/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/design/modules/positions/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Positions
                                </a>
                              </li>

                                          ' | raw }}{{ '                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminImages&amp;token=1bfe3a883f95ff5ef33ede5facfd2683\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/link-widget/list?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCarriers&amp;token=a47410227af913c0773abf2dbfb33ad1\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                   ' | raw }}{{ '                         </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminCarriers&amp;token=a47410227af913c0773abf2dbfb33ad1\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/shipping/preferences/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminMbeConfiguration&amp;token=5c80ad5a7b4fe6f0a6726281daf17a37\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                     ' | raw }}{{ '       
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminMbeShipping&amp;token=4acce7f8d387be3368b69bde99aa22c7\" class=\"link\"> MBE - Expéditions
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/payment/payment_methods?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/payment/payment_methods?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Moyens' | raw }}{{ ' de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/payment/preferences?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/international/localization/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminPar' | raw }}{{ 'entLocalization\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/international/localization/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/international/zones/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/international/taxes/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/improve/international/translations/settings?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Traductions
                                </a>
                              </li>

                                      ' | raw }}{{ '                                        </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"143\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=947f64621e937dd107fe244f16ec7565\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-143\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=947f64621e937dd107fe244f16ec7565\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost:8888/prestashop/admi' | raw }}{{ 'n461femwdtswtbbipi5o/index.php?controller=AdminPsfacebookModule&amp;token=8467bcb919dac06f097962fc4bad1368\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"167\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/pseditionbasic/settings?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/preferences/preferences?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
    ' | raw }}{{ '                  <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/preferences/preferences?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/order-preferences/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href' | raw }}{{ '=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/product-preferences/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/customer-preferences/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/contacts/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/shop/seo-urls/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
' | raw }}{{ '                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminSearchConf&amp;token=d6782b59e212860b34d6bc1b402add36\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/system-information/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/i' | raw }}{{ 'ndex.php/configure/advanced/system-information/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/performance/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/administration/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/emails/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                       ' | raw }}{{ '                                     
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/import/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/employees/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/sql-requests/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/logs/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Logs
                              ' | raw }}{{ '  </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/webservice-keys/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/feature-flags/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/security/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                 ' | raw }}{{ '                       </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"142\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminKlaviyoPsConfig&amp;token=40dccbe2458b7c63769ab440b530e378\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"155\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminPsAssistantSettings&amp;token=b8e93a857f888d8565a3ed3f78354096\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                 ' | raw }}{{ '                         
                    
          
            <li class=\"category-title\" data-submenu=\"116\" id=\"tab-DEFAULT\">
                <span class=\"title\">Détails</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"171\" id=\"subtab-AdminSelfUpgrade\">
                    <a href=\"http://localhost:8888/prestashop/admin461femwdtswtbbipi5o/index.php?controller=AdminSelfUpgrade&amp;token=0475d313a0b22bb6d00a4367b047ca94\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      1-Click Upgrade
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paramètres avancés</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/performance/?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" aria-current=\"page\">Performances</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performances          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                            ' | raw }}{{ '              <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/performance/clear-cache?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"                  title=\"Vider le cache\"                                  >
                  <i class=\"material-icons\">delete</i>                  Vider le cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin461femwdtswtbbipi5o/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.1.4%2526country%253Dfr/Aide?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/configure/advanced/performance/clear-cache?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"              title=\"Vider le cache\"            >
              Vider le cache
              <i class=\"material-icons\">delete</i' | raw }}{{ '>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin461femwdtswtbbipi5o/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.1.4%2526country%253Dfr/Aide?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n\\'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n\\'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"/prestashop/admin461femwdtswtbbipi5o/index.php/modules/pseditionbasic/homepage?_token=7yOYBUCCT1BEKVgF5TVFIozBUL7bY_CslD9RqUhIU-o\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__0a9d4cff4451ef51655aaca6318c9772", "");
    }
}
