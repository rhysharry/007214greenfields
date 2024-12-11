<?php
function my_child_theme_cleanup() {
    // Remove Google Fonts if not needed
    wp_dequeue_style('twentytwentyfive-fonts');

    // Remove unnecessary theme scripts
    wp_dequeue_script('twentytwentyfive-navigation');
}
add_action('wp_enqueue_scripts', 'my_child_theme_cleanup', 20);


function disable_block_styles() {
    //wp_dequeue_style('wp-block-library');
    //wp_dequeue_style('global-styles'); // For theme.json styles
}
add_action('wp_enqueue_scripts', 'disable_block_styles', 20);

// Disable emojis
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Disable embeds
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

// Disable dashicons for non-admins
function my_deregister_dashicons() {
    wp_deregister_style('dashicons');
}
add_action('wp_enqueue_scripts', 'my_deregister_dashicons', 20);

remove_action('wp_head', 'wp_generator'); // WordPress version
remove_action('wp_head', 'rsd_link'); // Really Simple Discovery
remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer

function remove_jquery() {
    // Deregister jQuery core and jQuery Migrate
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-migrate');
}
add_action('wp_enqueue_scripts', 'remove_jquery', 20);


function enqueue_child_theme_styles() {
    // Enqueue the parent theme stylesheet
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue the child theme stylesheet
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', ['parent-style'], wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');



// load fonts
function enqueue_custom_fonts() {
    wp_enqueue_style('custom-fonts', get_stylesheet_directory_uri() . '/fonts/fonts.css', [], null);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');


function my_child_theme_editor_styles() {
    add_editor_style('style.css'); 
}
add_action('admin_init', 'my_child_theme_editor_styles');

