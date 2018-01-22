<?php
//remove html !important
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
function bootstrapstarter_enqueue_styles() {
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies );     
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );

}
function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
    wp_enqueue_script('customjs', get_template_directory_uri().'/js/custom.js', $dependencies, true );
}
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

function pagination() {
    global $wp_query;
    if ($wp_query->max_num_pages > 1) { echo '<p class="pages" role="navigation">' . paginate_links( array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_text' => __('« '),
        'next_text'    => __(' »'),
    ) ) . '</p>'; }
}
// This theme uses wp_nav_menu() in two locations.  
function register_my_menus() {
    register_nav_menus( array(  
      'primary' => __( 'Primary Navigation', 'bykon2017' ),  
      'secondary' => __('Secondary Navigation', 'bykon2017'),  
      'third' => __('Third Navigation', 'bykon2017'),
      'info' => __('Info Navigation', 'bykon2017'),
      'program' => __('Program Navigation', 'bykon2017')
    ) );
}
add_action( 'init', 'register_my_menus' );
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name'          => 'Home right sidebar',
        'id'            => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );
        register_sidebar( array(
        'name'          => 'Footer_widgets',
        'id'            => 'footer_widgets1',
        'before_widget' => '<div class="footer-widgets">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-h4">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
add_theme_support( 'post-thumbnails' ); 
?>