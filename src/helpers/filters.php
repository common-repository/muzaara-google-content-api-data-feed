<?php 
namespace Muzaara\ProductFeed\Helpers;
defined( "ABSPATH" ) || exit;

require_once MUZAARA_WOOPF_OBJ_PATH . "Filter.php";

use \Muzaara\ProductFeed\Object\Filter;

if ( !function_exists( "filterInit" ) ) {
    function filterInit( $condition ) {
        return new Filter($condition);
    }
}