<?php

/**
 * File Security Check
 */
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}

/**
 * Utility function for checking WordPress version
 */
if ( ! function_exists( 'is_version' ) ) {
    function is_version( $version = '3.9' ) {
        global $wp_version;

        if ( version_compare( $wp_version, $version, '>=' ) ) {
            return true;
        } 
        return false;
    }
}