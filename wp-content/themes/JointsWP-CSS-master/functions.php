<?php
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php'); 

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php'); 

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php'); 

function resource_files() {
    wp_enqueue_style('opticton_main_styles', get_stylesheet_uri());
}

function enqueue_load_fa() {
    wp_enqueue_style('load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

function add_google_fonts() {
    wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Inconsolata|Noto+Sans|Noto+Serif|Nunito|Open+Sans|Roboto|Source+Sans+Pro&display=swap' , false);
}

add_action('wp_enqueue_scripts', 'resource_files');

add_action('wp_enqueue_scripts', 'enqueue_load_fa');

add_action('wp_enqueue_scripts', 'add_google_fonts');

function page_order_asc($query) {
    $query->set('orderby', 'post_date');
    $query->set('order', 'ASC');  }
add_action( 'pre_get_posts', 'page_order_asc');  
