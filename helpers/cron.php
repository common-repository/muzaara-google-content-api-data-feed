<?php 
namespace Muzaara\ProductFeed\Helpers;
defined( "ABSPATH" ) || exit;

function getNextSchedules() {
    global $muzaara_woopf;

    if ( !$muzaara_woopf->is_ready() ) {
        return;
    }

    $feeds = getFeeds(array(
        "post_status"       =>  "publish",
        "meta_key"          =>  "muzaara_woopf_push_type",
        "meta_value"        =>  2
    ));

    $feeds = array_filter($feeds, function( $feed ) {
        return time() >= $feed->getNextRefresh();
    });

    usort($feeds, function( $a, $b) {
        return $a->getNextRefresh() > $b->getNextRefresh();
    });

    return apply_filters( "muzaara_woopf_get_cron_next_schedule", $feeds );
}

function processSchedules() {
    $nextSchedules = getNextSchedules();

    foreach( $nextSchedules as $feed ) {
        $feed->generateDump();
    }
}