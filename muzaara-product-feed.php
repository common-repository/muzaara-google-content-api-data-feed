<?php 
/**
 * Plugin Name: Muzaara Google Content API Data Feed
 * Description: Muzaara Google Content API Data Feed
 * Author:      Muzaara
 * Author URI:  https://muzaara.com 
 * Plugin URI:  https://app.muzaara.com
 * Version:     1.4
 * Text Domain: muzaara-woopf
 */

defined( "ABSPATH" ) || exit;

define( "MUZAARA_WOOPF_VERSION", 1.2 );
define( "MUZAARA_WOOPF_PATH", sprintf( "%s/", __DIR__ ) );
define( "MUZAARA_WOOPF_OBJ_PATH", sprintf( "%sclass/objects/", MUZAARA_WOOPF_PATH ) );
define( "MUZAARA_WOOPF_URL", sprintf( "%s/", plugins_url( "", __FILE__ )));
define( "MUZAARA_WOOPF_ASSET_URL", sprintf( "%sasset/", MUZAARA_WOOPF_URL ) );
define( "MUZAARA_WOOPF_BASE", plugin_basename( __FILE__ ));
define( "MUZAARA_WOOPF_GOOGLE_CAT_URL", sprintf( "https://www.google.com/basepages/producttype/taxonomy-with-ids.%s.txt", str_replace( "_", "-", get_locale() ) ) );
define( "MUZAARA_WOOPF_GOOGLE_CAT_URL_FALLBACK", "https://www.google.com/basepages/producttype/taxonomy-with-ids.en-US.txt" );
define( "MUZAARA_WOOPF_POST_TYPE", "muzaara-woopf" );
define( "MUZAARA_WOOPF_CRON_ACTION", "muzaara_woopf_cron_action" );

$upload_dir = wp_upload_dir();
if ( empty( $upload_dir[ "error" ] ) ) {
    define( "MUZAARA_WOOPF_DUMP_PATH", sprintf( "%s/muzaara-woopf/", $upload_dir[ "basedir" ] ) );
    define( "MUZAARA_WOOPF_DUMP_URL", sprintf( "%s/muzaara-woopf/", $upload_dir[ "baseurl" ] ) );
}

require_once "lib/muzaara/muzaara.php";
require_once "class/App.php";

$GLOBALS[ "muzaara_woopf" ] = new \Muzaara\ProductFeed\App();

register_activation_hook( __FILE__, array( "\Muzaara\ProductFeed\App", "activation" ) );
register_deactivation_hook( __FILE__, array( "\Muzaara\ProductFeed\App", "deactivation" ) );