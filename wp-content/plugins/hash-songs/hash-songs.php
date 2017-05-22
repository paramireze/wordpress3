<?php

/**
 * Plugin Name: Hash Songs
 * Plugin URI: https://github.com/paramireze/madisonh3
 * Description: This plugins allows you to add a simple hash songs listing
 * Author: Paul Ramirez
 * Author URI: https://github.com/paramireze/
 * Version: 0.0.1
 * License: GPLv2
 */

//Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

require_once ( plugin_dir_path(__FILE__) .  'hash-songs-cpt.php' );
require_once ( plugin_dir_path(__FILE__) .  'hash-songs-shortcode.php' );
