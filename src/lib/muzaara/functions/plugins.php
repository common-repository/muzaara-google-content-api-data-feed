<?php 
namespace Muzaara\Engine\Functions\Plugins;

function addActive(string $plugin) {
    $active_plugins = getActive();

    if ( !$active_plugins || !in_array($plugin, $active_plugins) ) {
        $active_plugins[] = $plugin;
    }

    update_option( "muzaara_plugins", $active_plugins);
}

function removeActive(string $plugin) {
    $active = getActive();

    $active = array_filter($active, function( $p ) use ( $plugin ) { return $p !== $plugin; });

    update_option( "muzaara_plugins", $active);
}

function isActive( string $plugin ) {
    $active = getActive();

    return in_array($plugin, $active);
}

function getActive() {
    return get_option( "muzaara_plugins", array());
}

function getMenuIconSvg() {
    $img_data = base64_encode( file_get_contents( sprintf( "%simage/icon.svg", MUZAARA_ASSET_PATH ) ) );
    return sprintf( "data:image/svg+xml;base64,%s", $img_data );
}

function disablePlugins() {
    $active = getActive();

    deactivate_plugins( $active, false );
}