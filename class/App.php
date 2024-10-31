<?php 
namespace Muzaara\ProductFeed;
defined( "ABSPATH" ) || exit;
use function \Muzaara\Engine\Functions\Access\isManagerLinked;
use function \Muzaara\ProductFeed\Helpers\findFeedMatch;

class App {
    private $l10n;
    public $cap = "manage_options";
    public $google_cat = array();

    public function __construct() {
        $this->includes();
        $this->load_texts();
        $this->actions();
        
        new Ajax($this);
    }

    private function load_texts() {
        $this->l10n = new \StdClass;

        $this->l10n->hello = "Hello World";
        $this->l10n->parentHeader = __( "Muzaara Product Feed", "muzaara-woopf" );
        $this->l10n->linkGoogle = __( "Link Google Account", "muzaara-woopf" );
        $this->l10n->linkingAccount = __( "Linking Google Account...", "muzaara-woopf" );
        $this->l10n->linkGoogleDesc = __( "You are required to authenticate your Google account before using this service", "muzaara-woopf" );
        $this->l10n->no_account_found = __( "No Google Ads account found.", "muzaara-woopf" );
        $this->l10n->chooseAccount = __( "Choose Ad Account", "muzaara-woopf");
        $this->l10n->linkAccount = __( "Link Account", "muzaara-woopf" );
        $this->l10n->linking = __( "Linking...", "muzaara-woopf" );
        $this->l10n->linkError = __( "Unable to link account, please try another account. If error persists, kindly contact plugin support with the below error:", "muzaara-woopf" );
        $this->l10n->active = __( "Active", "muzaara-woopf" );
        $this->l10n->channelName = __( "Channel Name", "muzaara-woopf" );
        $this->l10n->refreshRate = __( "Refresh Rate", "muzaara-woopf" );
        $this->l10n->noChannels = __( "No channels created yet.", "muzaara-woopf");
        $this->l10n->createNew = __( "Create New Channel", "muzaara-woopf" );
        $this->l10n->channelCountry = __( "Channel Country", "muzaara-woopf" );
        $this->l10n->pushType = __( "Push Type", "muzaara-woopf" );
        $this->l10n->refreshRate = __( "Refresh Rate", "muzaara-woopf" );
        $this->l10n->continue = __( "Continue", "muzaara-woopf" );
        $this->l10n->daily = __( "Daily", "muzaara-woopf" );
        $this->l10n->weekly = __( "Weekly", "muzaara-woopf" );
        $this->l10n->hourly = __( "Hourly", "muzaara-woopf" );
        $this->l10n->pushToGoogle = __( "Push to Google", "muzaara-woopf" );
        $this->l10n->pushURL = __( "Generate URL", "muzaara-woopf" );
        $this->l10n->cancel = __( "Cancel", "muzaara-woopf" );
        $this->l10n->googleFields = __( "Google Product Fields", "muzaara-woopf" );
        $this->l10n->prefix = __( "Prefix", "muzaara-woopf" );
        $this->l10n->suffix = __( "Suffix", "muzaara-woopf" );
        $this->l10n->productField = __( "Product Field", "muzaara-woopf" );
        $this->l10n->fieldMapping = __( "Field Mapping", "muzaara-woopf" );
        $this->l10n->goBack = __( "Go back", "muzaara-woopf" );
        $this->l10n->categoryMapping = __( "Category Mapping", "muzaara-woopf" );
        $this->l10n->freeText = __( "Free Text?", "muzaara-woopf" );
        $this->l10n->remove = __( "Remove", "muzaara-woopf" );
        $this->l10n->addNewMapping = __( "Add New Mapping", "muzaara-woopf" );
        $this->l10n->productCategory = __( "Product Category", "muzaara-woopf" );
        $this->l10n->googleCategory = __( "Google Category", "muzaara-woopf" );
        $this->l10n->enterToSearch = __( "Enter category name to search", "muzaara-woopf" );
        $this->l10n->catMappingDesc = sprintf( __( "Map WooCommerce Categories to Google Product Categories. Enter in the below text input to search. More guide can be found here <a href='%s' target='_blank'>here</a>", "muzaara-woopf" ), "https://support.google.com/merchants/answer/6324436?hl=en" );
        $this->l10n->filters = __( "Filters", "muzaara-woopf" );
        $this->l10n->if = __( "If", "muzaara-woopf" );
        $this->l10n->condition = __( "Condition", "muzaara-woopf" );
        $this->l10n->then = __( "Then", "muzaara-woopf" );
        $this->l10n->value = __( "Value", "muzaara-woopf" );
        $this->l10n->include = __( "Include", "muzaara-woopf" );
        $this->l10n->exclude = __( "Exclude", "muzaara-woopf" );
        $this->l10n->newFilter = __( "Add New Filter", "muzaara-woopf" );
        $this->l10n->rules = __( "Rules", "muzaara-woopf" );
        $this->l10n->addRule = __( "Add New Rule", "muzaara-woopf" );
        $this->l10n->becomes = __( "Becomes", "muzaara-woopf" );
        $this->l10n->saveContinue = __( "Save & Continue", "muzaara-woopf" );
        $this->l10n->noRules = __( "No rules created yet", "muzaara-woopf" );
        $this->l10n->googleAnalytics = __( "Google Analytics", "muzaara-woopf" );
        $this->l10n->campaignSource = __( "Campaign Source", "muzaara-woopf" );
        $this->l10n->campaignMedium = __( "Campaign Medium", "muzaara-woopf" );
        $this->l10n->campaignTerm = __( "Campaign Term (use [product_id] to be replaced with product ID)", "muzaara-woopf" );
        $this->l10n->campaignContent = __( "Campaign Content", "muzaara-woopf" );
        $this->l10n->campaignCampaign = __( "Campaign Name", "muzaara-woopf" );
        $this->l10n->createChannel = __( "Create Channel", "muzaara-woopf" );
        $this->l10n->errorCheckRules = __( "Unable to proceed. Check Rules and fill missing fields", "muzaara-woopf" );
        $this->l10n->errorCheckFilters = __( "Unable to proceed. Check Filters and fill missing fields", "muzaara-woopf" );
        $this->l10n->errorCheckMaps = __( "Unable to proceed. Check field mapping and fill missing fields", "muzaara-woopf" );
        $this->l10n->channelSummary = __( "Channel Summary", "muzaara-woopf" );
        $this->l10n->includeProductTypes = __( "Product Types", "muzaara-woopf" );
        $this->l10n->productTypes = __( "Product Types", "muzaara-woopf" );
        $this->l10n->dateCreated = __( "Date Created", "muzaara-woopf" );
        $this->l10n->lastRefreshed = __( "Last Refreshed", "muzaara-woopf" );
        $this->l10n->running = __( "Running", "muzaara-woopf" );
        $this->l10n->paused = __( "Paused", "muzaara-woopf" );  
        $this->l10n->status = __( "Status", "muzaara-woopf" );
        $this->l10n->everyHours = __( "Every %d hours", "muzaara-woopf" );
        $this->l10n->country = __( "Country", "muzaara-woopf" );
        $this->l10n->nextRefresh = __( "Next Refresh Time", "muzaara-woopf" );
        $this->l10n->pause = __( "Pause", "muzaara-woopf" );
        $this->l10n->resume = __( "Resume", "muzaara-woopf" );
        $this->l10n->deleteConfirmation = __( "You are about to delete %s Channel. Continue?", "muzaara-woopf" );
        $this->l10n->edit = __( "Edit", "muzaara-woopf" );
        $this->l10n->editChannel = __( "Edit Channel", "muzaara-woopf" );
        $this->l10n->saveChanges = __( "Save Changes", "muzaara-woopf" );
        $this->l10n->savingChanges = __( "Saving Changes", "muzaara-woopf" );
        $this->l10n->creatingChannel = __( "Creating Channel", "muzaara-woopf" );
        $this->l10n->dumpURL        =   __( "URL/Merchant ID", "muzaara-woopf" );
        $this->l10n->merchantId     =   __( "Merchant ID", "muzaara-woopf" );
        $this->l10n->noticeEmail    =   __( "Notification E-mail", "muzaara-woopf" );
        $this->l10n->runNow         =   __( "Run Now", "muzaara-woopf" );
        $this->l10n->totalProducts  =   __( "Total Products", "muzaara-woopf" );
        $this->l10n->searching      =   __( "Searching...", "muzaara-woopf" );
    }

    public function search_category($q, $fallback = false) {
        $this->google_cat = get_transient( "muzaara_woopf_google_categories" );

        do_action( "muzaara_woopf_before_category_search", $q);

        if ( empty( $this->google_cat ) ) {
            $req = wp_remote_get($fallback ? MUZAARA_WOOPF_GOOGLE_CAT_URL_FALLBACK : MUZAARA_WOOPF_GOOGLE_CAT_URL);
            if ( !is_wp_error( $req ) ) {
                if ( $req[ "response" ][ "code" ] != 200 && !$fallback ) {
                    $this->search_category($q, true);
                } else {
                    if ( $req["body"] ) {
                        foreach( explode( "\n", trim($req[ "body" ]) ) as $line ) {
                            if ( $line[0] == "#" )
                                continue;

                            $split = preg_split( "/\s\-\s/", $line);
                            $this->google_cat[$split[0]] = $split[1];
                        }
                        set_transient( "muzaara_woopf_google_categories", $this->google_cat, 900 );
                    } else {
                        $this->google_cat = array();
                        // delete_transient( "muzaara_woopf_google_categories" );
                    }
                    
                }
            }
        }
        
        $ret = array();

        if ( $q && ( strlen($q) >= 3 || is_numeric($q ) ) ) {
            if ( is_numeric($q) && isset( $this->google_cat[$q] ) ) {
                $ret = array( $this->google_cat[$q] );
            } else {
                $ret = preg_grep( sprintf('/%s/i', preg_quote($q)), $this->google_cat );
            }

            do_action( "muzaara_woopf_after_category_search", $ret, $q);
        }

        return apply_filters( "muzaara_woopf_category_search_results", $ret, $q );
    }

    public function includes() {
        // Abstracts
        require_once "abstract/WooField.php";
        require_once "abstract/Condition.php";
        require_once "abstract/Feed.php";

        // Helpers
        require_once MUZAARA_WOOPF_PATH . "helpers/filters.php";
        require_once MUZAARA_WOOPF_PATH . "helpers/rules.php";
        require_once MUZAARA_WOOPF_PATH . "helpers/fields.php";
        require_once MUZAARA_WOOPF_PATH . "helpers/gfields.php";
        require_once MUZAARA_WOOPF_PATH . "helpers/feeds.php";
        require_once MUZAARA_WOOPF_PATH . "helpers/cron.php";

        // Mains
        require_once "Ajax.php";
        require_once "Channels.php";

        do_action( "muzaara_woopf_include_files" );
    }

    public function getInstance($classname) {
        if (empty($this->{$classname})) {
            $this->{$classname} = new $classname($this);
        }

        return $this->{$classname};
    }

    public function has_access() {
        return \Muzaara\Engine\Functions\Access\hasAccess( [ MUZAARA_GOOGLE_SCOPES[ "content" ] ] );
    }

    public static function activation() {
        if ( defined( "MUZAARA_FUNC_PATH" ) ) {
            require_once MUZAARA_FUNC_PATH . "plugins.php";

            \Muzaara\Engine\Functions\Plugins\addActive(MUZAARA_WOOPF_BASE);
        }

        if ( !defined( "MUZAARA_WOOPF_DUMP_PATH" ) ) {
            trigger_error( __( "WordPress upload path could not be determined. Please contact plugin support", "muzaara-woopf" ), E_USER_ERROR  );
        }

        if ( !wp_next_scheduled( MUZAARA_WOOPF_CRON_ACTION ) ) {
            wp_schedule_event( time(), "3mins", MUZAARA_WOOPF_CRON_ACTION );
        }
    }

    public static function deactivation() {
        if ( defined( "MUZAARA_FUNC_PATH" ) ) {
            require_once MUZAARA_FUNC_PATH . "plugins.php";

            \Muzaara\Engine\Functions\Plugins\removeActive(MUZAARA_WOOPF_BASE);
            \Muzaara\Engine\Functions\Access\unlink();
        }

        if ( ( $timestamp = wp_next_scheduled( MUZAARA_WOOPF_CRON_ACTION ) ) ) {
            wp_unschedule_event($timestamp, MUZAARA_WOOPF_CRON_ACTION );
        }
    }

    private function actions() {
        add_action( "admin_menu", array( $this, "create_menu" ) );
        add_action( "admin_enqueue_scripts", array( $this, "enqueue" ) );
        add_action( "admin_init", array($this, "check_dep"));

     
            add_action( "init", array($this, "register_post_type" ) );
            add_filter( "manage_edit-product_columns", array( $this, "add_wc_column" ) );
            add_action( "manage_product_posts_custom_column", array($this, "wc_col_val" ), 10, 2 );
            add_filter( "cron_schedules", array($this, "add_cron_schedules" ) );
            add_action( MUZAARA_WOOPF_CRON_ACTION, "\Muzaara\ProductFeed\Helpers\processSchedules" );
            add_filter( "woocommerce_product_data_store_cpt_get_products_query", array( $this, "append_custom_field" ), 10, 2 );

            add_action( "woocommerce_update_product", "\Muzaara\ProductFeed\Helpers\pushProduct" );
        
    }

    public function append_custom_field( $query, $vars ) {
        if ( !empty( $vars[ "custom_meta" ] ) ) {
            $query[ "meta_query" ] = $vars[ "custom_meta" ];
        }

        return $query;
    }

    public function add_cron_schedules( $schedules ) {
        $schedules[ "3mins" ] = array(
            "interval" => 3*60,
            "display" => __( "Every 3 minutes", "muzaara-woopf" )
        );

        return $schedules;
    }

    public function add_wc_column($cols) {
        $n = [];
        foreach( $cols as $key => $name ) {
            $n[$key] = $name;
            if ( $key == "product_cat" ) {
                $n[ "matching_feeds" ] = __( "Matching Feeds", "muzaara-woopf" );
            }
        }

        if ( !isset( $n[ "matching_feeds" ] ) ) { // In case somehow they deleted the product_cat column
            $n[ "matching_feeds" ] = __( "Matching Feeds", "muzaara-woopf" );
        }

        return $n;
    }

    public function wc_col_val( $colname, $post_id ) {
        if ( $colname == "matching_feeds" ) {
            $matches = array_map( function( $feed ) {
                return $feed->getName();
            }, findFeedMatch( $post_id ) );

            echo implode( ", ", $matches);
        }
    }

    public function register_post_type() {
        register_post_type(MUZAARA_WOOPF_POST_TYPE, array(
            "public" => false,
            "exclude_from_search" => true,
            "publicly_queryable" => false,
            "show_in_rest" => false,
            "delete_with_user" => false
        ));
    }

    public function check_dep() {
        if ( is_admin() && current_user_can("activate_plugins") && ( !defined( "MUZAARA_PATH" ) || !class_exists( 'woocommerce' ) ) ) {
            add_action( "admin_notices", function() {
                ?><div class="error"><p><?php printf( __( "%s plugin requires WooCommerce and parent plugin (Muzaara Engine) to be installed and active", "muzaara-woopf" ), MUZAARA_WOOPF_BASE )?></p></div><?php 
            });

            deactivate_plugins( MUZAARA_WOOPF_BASE );
            
            if ( isset( $_GET[ "activate" ] ) ) 
                unset( $_GET[ "activate" ] );
        }
    }

    public function enqueue( $hook ) {
        if ( !defined( "MUZAARA_FUNC_PATH" ) || $hook != "toplevel_page_muzaara-woopf" ) {
            return;
        }
        require_once MUZAARA_FUNC_PATH . "access.php";
        wp_enqueue_script( "muzaara-woopf", sprintf( "%sjs/muzaara-woopf.js", MUZAARA_WOOPF_ASSET_URL ), array(), null, true );
        wp_enqueue_style(  "muzaara-woopf", sprintf( "%scss/admin.css", MUZAARA_WOOPF_ASSET_URL ) );
        wp_localize_script( "muzaara-woopf", "MUZAARA_WOOPF", array(
            "ajax" => admin_url( "admin-ajax.php" ),
            "l10n" => $this->l10n,
            "hasAccess" => $this->is_ready() ? 1 : 0,
            "oauthUrl" => \Muzaara\Engine\Functions\Access\generateOAuthURL(array( MUZAARA_GOOGLE_SCOPES[ "content" ], MUZAARA_GOOGLE_SCOPES[ "adwords" ] ) )
        ));
    }

    public function is_ready() {
        return $this->has_access() && isManagerLinked();
    }

    public function create_menu() {
        if ( defined( "MUZAARA_FUNC_PATH" ) ) {
            require_once MUZAARA_FUNC_PATH . "plugins.php";

            add_menu_page( __( "Muzaara Product Feed", "muzaara-woopf" ), __( "Muzaara Product Feed", "muzaara-woopf" ), "manage_options", "muzaara-woopf", array( $this, "show_page"), \Muzaara\Engine\Functions\Plugins\getMenuIconSvg() );
        }
    }

    public function show_page() {
        require_once sprintf( "%stemplate/page.php", MUZAARA_WOOPF_PATH );
    }
}
