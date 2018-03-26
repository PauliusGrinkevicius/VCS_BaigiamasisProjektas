<?php
define('ASSETS_URL', get_template_directory_uri().'/assets');

show_admin_bar( false );

function adding_style_to_my_theme() {
 wp_enqueue_style('style', ASSETS_URL.'/style.css',array(),false);
 wp_enqueue_script('breakpoints', ASSETS_URL.'/naujascv.js',array('jquery'),false, true);
}
add_action('wp_enqueue_scripts','adding_style_to_my_theme');

add_action( 'init', 'my_theme_supports');
function my_theme_supports() {
    add_theme_support('menus');
}

add_action('init', 'mano_menus');
function mano_menus() {
    register_nav_menus(array(
    'top-menu' => __('Pagrindinis meniu')
    ));
}