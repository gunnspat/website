<?php
if ( ! function_exists( 'gunnspat_setup' ) ) :

function gunnspat_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'gunnspat', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'gunnspat' ),
        'social'  => __( 'Social Links Menu', 'gunnspat' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // gunnspat_setup

add_action( 'after_setup_theme', 'gunnspat_setup' );


if ( ! function_exists( 'gunnspat_init' ) ) :

function gunnspat_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // gunnspat_setup

add_action( 'init', 'gunnspat_init' );


if ( ! function_exists( 'gunnspat_custom_image_sizes_names' ) ) :

function gunnspat_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'gunnspat_custom_image_sizes_names' );
endif;// gunnspat_custom_image_sizes_names



if ( ! function_exists( 'gunnspat_widgets_init' ) ) :

function gunnspat_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'gunnspat_widgets_init' );
endif;// gunnspat_widgets_init



if ( ! function_exists( 'gunnspat_customize_register' ) ) :

function gunnspat_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'social_links', array(
        'title' => __( 'Social Links', 'gunnspat' )
    ));

    $wp_customize->add_section( 'social_links', array(
        'title' => __( 'Social Links', 'gunnspat' )
    ));

    $wp_customize->add_section( 'social_links', array(
        'title' => __( 'Social Links', 'gunnspat' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'facebook', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'facebook', array(
        'label' => __( 'Facebook', 'gunnspat' ),
        'type' => 'url',
        'section' => 'social_links'
    ));

    $wp_customize->add_setting( 'twitter', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'twitter', array(
        'label' => __( 'Twitter', 'gunnspat' ),
        'type' => 'url',
        'section' => 'social_links'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'gunnspat_customize_register' );
endif;// gunnspat_customize_register


if ( ! function_exists( 'gunnspat_enqueue_scripts' ) ) :
    function gunnspat_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_register_script( 'inline-script-1', '', [], '', true );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', '(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1546506465363327";
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));');

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true);

    wp_deregister_script( 'gunnspat-bootstrap' );
    wp_enqueue_script( 'gunnspat-bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'gunnspat-ieviewportbugworkaround' );
    wp_enqueue_script( 'gunnspat-ieviewportbugworkaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', false, null, true);

    wp_deregister_script( 'gunnspat-popper' );
    wp_enqueue_script( 'gunnspat-popper', get_template_directory_uri() . '/assets/js/popper.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'gunnspat-bootstrap' );
    wp_enqueue_style( 'gunnspat-bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'gunnspat-style' );
    wp_enqueue_style( 'gunnspat-style', get_bloginfo('stylesheet_url'), false, null, 'all');

    wp_deregister_style( 'gunnspat-style-1' );
    wp_enqueue_style( 'gunnspat-style-1', 'https://fonts.googleapis.com/css?family=Baumans', false, null, 'all');

    wp_deregister_style( 'gunnspat-style-2' );
    wp_enqueue_style( 'gunnspat-style-2', 'https://fonts.googleapis.com/css?family=Marck+Script', false, null, 'all');

    wp_deregister_style( 'gunnspat-fontawesome' );
    wp_enqueue_style( 'gunnspat-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'gunnspat_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_smart_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>