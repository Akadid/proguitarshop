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

/* __string_template__1a5ac6789532b64cc6ddc1ef04a853170b13ce20d09d1fe483072aef6d8a280d */
class __TwigTemplate_d358c5b4331d760429f75faa7413f86cd63d91a967d96d94f01a5dbdbd063f2a extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Thème et logo > Thème • proguitarshop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '2fa7fdba31ee1816396ba837be2d097a';
    var token_admin_orders = tokenAdminOrders = 'c9c8a27d779e061aed1332461896792a';
    var token_admin_customers = 'cdb49d417ec784c7d3c0830b6d859686';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'ebaea67cd3f7c07f13590f1840aa01f1';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '403001e0389f907310506d04cbbcd08d';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/admin162h4ivtm04praunexn/index.php/improve/modules/manage?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA';
    var admin_notification_get_link = '/admin162h4ivtm04praunexn/index.php/common/notifications?_tok";
        // line 42
        echo "en=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA';
    var admin_notification_push_link = adminNotificationPushLink = '/admin162h4ivtm04praunexn/index.php/common/notifications/ack?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/admin162h4ivtm04praunexn/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin162h4ivtm04praunexn/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin162h4ivtm04praunexn/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin162h4ivtm04praunexn\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin162h4ivtm04praunexn\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymb";
        // line 69
        echo "ols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin162h4ivtm04praunexn/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/admin162h4ivtm04praunexn/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin162h4ivtm04praunexn/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin162h4ivtm04praunexn/index.php/common/notifications?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminthemes\"
  data-base-url=\"/admin162h4ivtm04praunexn/index.php\"  data-token=\"lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminDashboard&amp;token=ebc77d7b31ccb1cecc35bf97616b7e18\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php/sell/orders?token=ff725b577876853e3b53bb266fd3daca\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3385e6595a3d832931b20616bc2a3d98\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php/improve/modules/manage?token=ff725b577876853e3b53bb266fd3daca\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/i";
        // line 136
        echo "ndex.php?controller=AdminCartRules&amp;addcart_rule&amp;token=fb9041951f975ce6ba22d601d5360bae\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php/sell/catalog/products/new?token=ff725b577876853e3b53bb266fd3daca\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php/sell/catalog/categories/new?token=ff725b577876853e3b53bb266fd3daca\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"184\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes\"
        data-post-link=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminQuickAccesses&token=849943b6eb6edcf2dba24f045e726cf8\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Th&egrave;me et logo - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminQuickAccesses&token=849943b6eb6edcf2dba24f045e726cf8\">
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
  ";
        // line 173
        echo "    class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin162h4ivtm04praunexn/index.php?controller=AdminSearch&amp;token=8d0559672d4e33c65819220fa9620aa0\"
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
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numé";
        // line 191
        echo "ro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
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
       href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php/sell/orders?token=ff725b577876853e3b53bb266fd3daca\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=3385e6595a3d832931b20616bc2a3d98\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php/improve/modules/manage?token=ff725b577876853e3b53bb266fd3daca\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://david-proguitarshop.projets.garage404.com/admin16";
        // line 225
        echo "2h4ivtm04praunexn/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=fb9041951f975ce6ba22d601d5360bae\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php/sell/catalog/products/new?token=ff725b577876853e3b53bb266fd3daca\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php/sell/catalog/categories/new?token=ff725b577876853e3b53bb266fd3daca\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"168\"
      data-icon=\"icon-AdminThemesParent\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/themes\"
      data-post-link=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminQuickAccesses&token=849943b6eb6edcf2dba24f045e726cf8\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Th&egrave;me et logo - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminQuickAccesses&token=849943b6eb6edcf2dba24f045e726cf8\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"heade";
        // line 266
        echo "r_shopname\" href=\"https://david-proguitarshop.projets.garage404.com/\" target= \"_blank\">
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

      <!-- Tab panes -->
      <div class=\"tab-content\">
       ";
        // line 321
        echo "                   <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos &lt;strong&gt;&lt;a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=114a0569a9c3238abd3b124953273906\"&gt;paniers abandonnés&lt;/a&gt;&lt;/strong&gt; ?&lt;br&gt; Votre prochaine commande s'y trouve peut-être !
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
    <a ";
        // line 362
        echo "class=\"notif\" href='message_url'>
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://david-proguitarshop.projets.garage404.com/img/pr/default.jpg\" alt=\"David\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir David</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/employees/1/edit?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminLogin&amp;logout=1&amp;token=e6d435cdd57d615e815efc2e7dff1544\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/employees/toggle-navigation?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-ico";
        // line 406
        echo "ns rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminDashboard&amp;token=ebc77d7b31ccb1cecc35bf97616b7e18\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminDashboard&amp;token=ebc77d7b31ccb1cecc35bf97616b7e18\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin162h4ivtm04praunexn/index.php/sell/orders/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </";
        // line 448
        echo "a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/sell/orders/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/sell/orders/invoices/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/sell/orders/credit-slips/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/sell/orders/de";
        // line 478
        echo "livery-slips/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminCarts&amp;token=114a0569a9c3238abd3b124953273906\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin162h4ivtm04praunexn/index.php/sell/catalog/products?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-l";
        // line 510
        echo "eveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/sell/catalog/products?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/sell/catalog/categories?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/sell/catalog/monitoring/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminAttributesGroups&amp;token=176f1898ba1b6719420442ab063b01f6\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                               ";
        // line 539
        echo "                                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/sell/catalog/brands/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/sell/attachments/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminCartRules&amp;token=fb9041951f975ce6ba22d601d5360bae\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/sell/stocks/?_token=";
        // line 567
        echo "lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin162h4ivtm04praunexn/index.php/sell/customers/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\">
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
                                <a href=\"/admin162h4ivtm04praunexn/index.php/sell/customers/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
 ";
        // line 600
        echo "                               <a href=\"/admin162h4ivtm04praunexn/index.php/sell/addresses/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminCustomerThreads&amp;token=ebaea67cd3f7c07f13590f1840aa01f1\" class=\"link\">
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
                                <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminCustomerThreads&amp;token=ebaea67cd3f7c07f13590f1840aa01f1\" class=\"link\"> SAV
                                </a>
                              </li>

                       ";
        // line 629
        echo "                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/sell/customer-service/order-messages/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminReturn&amp;token=27f04ad5921fdc972b4e21cc9cf4e264\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminStats&amp;token=3385e6595a3d832931b20616bc2a3d98\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_ar";
        // line 658
        echo "row_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin162h4ivtm04praunexn/index.php/improve/modules/manage?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/improve/modules/manage?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                     ";
        // line 695
        echo "                                                               </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin162h4ivtm04praunexn/index.php/improve/design/themes/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/improve/design/themes/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin162h4ivt";
        // line 724
        echo "m04praunexn/index.php/improve/design/mail_theme/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/improve/design/cms-pages/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/improve/design/modules/positions/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminImages&amp;token=6823dbafe48e8c7c72947119639a7390\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                          ";
        // line 754
        echo "                  
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/modules/link-widget/list?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminCarriers&amp;token=dce3a53898e726021bf59188410bf195\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminCarriers&amp;token=dce3a53898e726021bf59188410bf195\" class=\"link\"> Transporteurs
    ";
        // line 782
        echo "                            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/improve/shipping/preferences/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin162h4ivtm04praunexn/index.php/improve/payment/payment_methods?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\">
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
                                <a href=\"/admin162h";
        // line 814
        echo "4ivtm04praunexn/index.php/improve/payment/payment_methods?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/improve/payment/preferences?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin162h4ivtm04praunexn/index.php/improve/international/localization/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                              ";
        // line 845
        echo "              
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/improve/international/localization/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/improve/international/zones/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/improve/international/taxes/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/improve/international/translations/settings?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Traductions
                                </a>
           ";
        // line 873
        echo "                   </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin162h4ivtm04praunexn/index.php/configure/shop/preferences/preferences?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/shop/preferences/preferences?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                              ";
        // line 910
        echo "                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/shop/order-preferences/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/shop/product-preferences/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/shop/customer-preferences/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/shop/contacts/?_token=lcwE1O9Is";
        // line 938
        echo "1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/shop/seo-urls/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminSearchConf&amp;token=b3d25f958b18e3080d997e41a9424af4\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/system-information/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
  ";
        // line 970
        echo "                                                  <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/system-information/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/performance/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/administration/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Administration
                                </a>
                              </";
        // line 997
        echo "li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/emails/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/import/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/employees/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/sql-requests/?_token=lcw";
        // line 1027
        echo "E1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/logs/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/webservice-keys/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/feature-flags/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                      ";
        // line 1056
        echo "        
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin162h4ivtm04praunexn/index.php/configure/advanced/security/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Thème et logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Thème et logo &gt; Thème          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin162h4ivtm04praunexn/index.php/improve/design/themes/import?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\"                  title=\"Ajouter un thème\"                >
                  <i class=\"material-icons\">add</i>                  Ajouter un thème
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/admin162h4ivtm04praunexn/index.php/improve/design/themes/export?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\"                  title=\"Exporter le thème actif\"     ";
        // line 1103
        echo "           >
                  <i class=\"material-icons\">cloud_download</i>                  Exporter le thème actif
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin162h4ivtm04praunexn/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminThemes%253Fversion%253D8.0.4%2526country%253Dfr/Aide?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"/admin162h4ivtm04praunexn/index.php/improve/design/themes/?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"44\">
                      Thème et logo
                      <span class=\"notification-container\">
                        <span cl";
        // line 1131
        echo "ass=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminPsThemeCustoConfiguration&token=516823bcc8716ad63891d88ab3d4cf80\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"127\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminPsThemeCustoAdvanced&token=fed181a04250c502b768b2692734afad\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"128\">
                      Personnalisation avancée
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ";
        // line 1151
        echo "                                                                                                                                                                                                                                                  </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin162h4ivtm04praunexn/index.php/improve/design/themes/import?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\"              title=\"Ajouter un thème\"            >
              Ajouter un thème
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/admin162h4ivtm04praunexn/index.php/improve/design/themes/export?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\"              title=\"Exporter le thème actif\"            >
              Exporter le thème actif
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin162h4ivtm04praunexn/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminThemes%253Fversion%253D8.0.4%2526country%253Dfr/Aide?_token=lcwE1O9Is1JlmVBcc5LTGbXzY6Cos_63PmPjN1hxmIA\"
            >
              Aide
            </a";
        // line 1179
        echo ">
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1197
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
  <a href=\"https://david-proguitarshop.projets.garage404.com/admin162h4ivtm04praunexn/index.php?controller=AdminDashboard&amp;token=ebc77d7b31ccb1cecc35bf97616b7e18\" class=\"btn btn-primary py-1 mt-3\">
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
        // line 1231
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1197
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1231
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__1a5ac6789532b64cc6ddc1ef04a853170b13ce20d09d1fe483072aef6d8a280d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1400 => 1231,  1379 => 1197,  1368 => 102,  1359 => 1231,  1319 => 1197,  1299 => 1179,  1269 => 1151,  1247 => 1131,  1217 => 1103,  1168 => 1056,  1137 => 1027,  1105 => 997,  1076 => 970,  1042 => 938,  1012 => 910,  973 => 873,  943 => 845,  910 => 814,  876 => 782,  846 => 754,  814 => 724,  783 => 695,  744 => 658,  713 => 629,  682 => 600,  647 => 567,  617 => 539,  586 => 510,  552 => 478,  520 => 448,  476 => 406,  430 => 362,  387 => 321,  330 => 266,  287 => 225,  251 => 191,  231 => 173,  192 => 136,  153 => 102,  118 => 69,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1a5ac6789532b64cc6ddc1ef04a853170b13ce20d09d1fe483072aef6d8a280d", "");
    }
}
