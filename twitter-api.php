<?php

/*
Plugin Name: Wordpress Twitter Plugin
Plugin URI: https://consideratecoder.com
Description: This plugin will fetch your latest tweets and display it using shortcode [tweets]
Version: 1.0
Author: Jacob Laffoon
Author URI: https://consideratecoder.com
License: GPLv2 or later
Text Domain: consideratecoder
*/

// include twitter oauth library
require('vendor/autoload.php');
use Abraham\TwitterOAuth\TwitterOAuth;

// define primary class
class Twitter_API {
    public function __construct() {
 
    }
}

// require absolute path
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// define construct
function __construct() {
    add_action( 'admin_menu', array($this, 'ta_plugin_menu') );
}
 
// define plugin menu
function ta_plugin_menu() {
    add_options_page('Twitter API', 'Twitter API', 'manage_options', 'twitter_api', array($this, 'ta_settings_page'));
}
 
// define settings page and require ta-settings.php
function ta_settings_page() {
    require_once('inc/ta-settings.php');    
}

?>