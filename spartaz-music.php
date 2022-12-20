<?php

/**
 * Plugin Name: Spartaz Music
 * Plugin URI:  https://www.spartazofficial.com.ng
 * Author:      Adeleye Ayodeji
 * Author URI:  https://www.adeleyeayodeji.com
 * Description: This plugin is for the Spartaz Music website
 * Version:     0.1.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: spartaz-music
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

//path
define('SPARTAZ_MUSIC_PATH', plugin_dir_path(__FILE__));
define('SPARTAZ_MUSIC_URL', plugin_dir_url(__FILE__));
define('SPARTAZ_MUSIC_VERSION', '0.1.0');
// Include the main class
require_once plugin_dir_path(__FILE__) . 'includes/class-spartaz-music.php';
