<?php 
namespace Muzaara\ProductFeed\Helpers;
defined( "ABSPATH" ) || exit;

require_once MUZAARA_WOOPF_OBJ_PATH . "GField.php";

use \Muzaara\ProductFeed\Object\GField;

if ( !function_exists( "gFieldInit" ) ) {
    function gFieldInit( \StdClass $field ) {
        return new GField($field);
    }
}