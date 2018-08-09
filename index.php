<?php
/*
Plugin Name: Word Count
Plugin URI: https://github.com/ikardi420
Description: Count Words from any WordPress Post
Version: 1.0
Author: Kardi
Author URI: https://github.com/ikardi420
License: GPLv2 or later
Text Domain: word-count
Domain Path: /languages/
*/

/*function wordcount_activation_hook(){}
register_activation_hook(__FILE__,"wordcount_activation_hook");

function wordcount_deactivation_hook(){}
register_deactivation_hook(__FILE__,"wordcount_deactivation_hook");*/

function wordcount_load_textdomain() {
    load_plugin_textdomain( 'word-count', false, dirname( __FILE__ ) . "/languages" );
}

add_action( "plugins_loaded", 'wordcount_load_textdomain' );