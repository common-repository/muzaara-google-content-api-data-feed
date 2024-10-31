<?php 
namespace Muzaara\ProductFeed\Helpers;
defined( "ABSPATH" ) || exit;

require_once MUZAARA_WOOPF_OBJ_PATH . "Rule.php";

use \Muzaara\ProductFeed\Object\Rule;

if ( !function_exists( "ruleInit" ) ) {
    function ruleInit( int $condition ) {
        return new Rule($condition);
    }
}