<?php

/**
 * Plugin Name: posts-shortcode
 * Plugin URI: https://github.com/paramireze/madisonh3
 * Description: Custom shortcode for displaying posts
 * Author: Paul Ramirez
 * Author URI: https://github.com/paramireze/
 * Version: 0.0.1
 * License: GPLv2
 */

//Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

require_once ( plugin_dir_path(__FILE__) .  'announcements-shortcode.php' );
