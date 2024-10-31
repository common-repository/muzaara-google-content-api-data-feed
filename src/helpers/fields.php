<?php 
namespace Muzaara\ProductFeed\Helpers;
defined( "ABSPATH" ) || exit;

require_once MUZAARA_WOOPF_OBJ_PATH . "Field.php";

use \Muzaara\ProductFeed\Object\Field;

if ( !function_exists( "fieldInit" ) ) {
    function fieldInit( $id, $type, $name = "" ) {
        return new Field($id, $name, $type);
    }
}