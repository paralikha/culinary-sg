<?php
/**
 * Plugin Name: News Manager
 * Plugin URI: https://github.com/lioneil/wp-news-manager
 * Description: A plugin to create news and events
 * Version 1.1.1
 * Author: John Lioneil Dionisio
 * Author URI: https://github.com/john-lioneil
 * License: MIT
 */

add_action('init', 'news_cpt_init');

function news_cpt_init() {
	$global = require("config/cpt.php");

	$labels = array(
        'name'              => ucwords($global['name']),
        'singular_name'     => ucwords($global['name']),
        'all_items'         => "All " . ucwords($global['names']),
        'add_new'           => "Add New " . ucwords($global['name']),
        'add_new_item'      => "Add New " . ucwords($global['name']),
        'edit_item'         => "Edit " . ucwords($global['name']),
        'new_item'          => "New " . ucwords($global['name']),
        'view_item'         => "View " . ucwords($global['name']),
        'search_items'      => "Search " . ucwords($global['names']),
        'not_found'         => "No " . ucwords($global['name']) . " found",
        'not_found_in_trash'=> "No " . ucwords($global['name']) . " found in trash",
        'parent_item_colon' => "Parent " . ucwords($global['name']) . ":",
        'menu_name'         => _x(ucwords($global['names']), 'wordpress')
    );

    $args = array(
        'labels'            => $labels,
        'query_var'         => $global['name'],
        'rewrite'           => $global['rewrite'],
        'menu_icon'         => $global['icon'],
        'public'            => true,
        'hierarchical'      => true,
        'supports'          => $global['supports'],
        'show_ui'           => true,
        'show_in_menu'      => true,
        'menu_position'     => $global['menu_position'],
        'show_in_nav_menus' => false,
        'publicly_queryable'=> true,
        'exclude_from_search' => false,
        'has_archive'       => true,
        'can_export'        => true,
        'capability_type'   => 'post',
        'capabilities' => array(
            'read' => true,
            'create_posts' => true, // Toggles support for the "Add New" function
        ),
        'map_meta_cap' => true, // Set to false, if users are not allowed to edit/delete existing posts
    );

    register_post_type($global['name'], $args);
}

function news_cpt_taxonomies() {
	$global = include_once __DIR__."/config/cpt.php";
	$taxonomies = include_once __DIR__."/config/taxonomies.php";

	// $taxonomies = array();

    foreach($taxonomies as $name => $args) {
        register_taxonomy($name, array($global['name']), $args);
    }
}

# Shortcodes
add_shortcode('news', function ( $atts ) {
    ob_start();
    include_once __DIR__ . "/views/pages/shortcode.php";
    return ob_get_clean();
});


# Enqueue
add_action('admin_enqueue_scripts', 'enqueue_news_style_scripts');
function enqueue_news_style_scripts() {
    // Timepicker
    wp_enqueue_script('jquery-ui-timepicker-addon', plugins_url('/assets/js/jquery-ui-timepicker-addon.js', __FILE__), array('jquery', 'jquery-ui-core', 'jquery-ui-datepicker'), time(), true);
    // customScrollbar
    wp_enqueue_style('customScrollbar', plugins_url('/assets/vendor/customScrollbar/jquery.mCustomScrollbar.css', __FILE__), false, '2.1.2');
    wp_enqueue_script('customScrollbar', plugins_url('/assets/vendor/customScrollbar/jquery.mCustomScrollbar.concat.min.js', __FILE__), array('jquery'), time(), true);

    wp_enqueue_style('news', plugins_url('/assets/css/news.css', __FILE__), false, '2.1.2');
    wp_enqueue_script('wpsm-scripts', plugins_url('/assets/js/script.js', __FILE__), array('jquery', 'jquery-ui-core', 'jquery-ui-datepicker'), time(), true);

}