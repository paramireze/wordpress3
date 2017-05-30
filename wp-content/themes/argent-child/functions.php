<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

add_filter( 'parse_query', 'exclude_pages_from_admin' );

function exclude_pages_from_admin($query) {
    $user_id = get_current_user_id();
//    die('user id: ' . $user_id);
    if ($user_id == 2) {
        global $pagenow,$post_type;
        if (is_admin() && $pagenow=='edit.php' && $post_type =='page') {
            $query->query_vars['post__not_in'] = array('123','234','345');
        }
    }
}