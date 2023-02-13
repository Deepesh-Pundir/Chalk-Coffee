<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style('style_custom' , get_stylesheet_directory_uri() . '/css/style.css' , false , '1.0' , '');
        // wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'twenty-twenty-one-style','twenty-twenty-one-style','twenty-twenty-one-print-style' ) );
        wp_enqueue_script('owl_carousel-js',get_stylesheet_directory_uri().'/owl_carousel/owl.carousel.min.js',array('jquery'),'2.0',true);
        wp_enqueue_script('carousel-js',get_stylesheet_directory_uri().'/js/carousel.js',array('jquery','owl_carousel-js'),'2.0',true);

        wp_enqueue_style('owl_carousel-css' , get_stylesheet_directory_uri() .'/owl_carousel/assets/owl.carousel.min.css');
        wp_enqueue_style('owl_carousel-css' , get_stylesheet_directory_uri() .'/owl_carousel/owl.theme.default.min.css');
        
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

function child_enqueue_styles() {

	// dequeue the Twenty Twenty-One parent style
	wp_dequeue_style( 'twenty-twenty-one-style' );
    
	// Theme stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );

}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 11 );

//for menu bar
register_nav_menus(array('primary-menu'=>'Top Menu',
                            'button'=>'button',
                            'footer-menu'=>'Bottom Menu'));

add_filter('use_block_editor_for_post', '__return_false', 10);      

//for logo
add_theme_support('custom-header');

// for widgets
// register_sidebar(
//     array(
//         'name'=>'footer_location',
//         'id'=>'footer_location'
//     )
//     );


//    / * CODE FOR OPTION PAGE*/  make footer for all pages
add_action('acf/init', 'myAcfOpInit');
function myAcfOpInit() {    
    if( function_exists('acf_add_options_page') ) {        
        $parent = acf_add_options_page(array(
            'page_title'  => __('Theme Settings'),
            'menu_title'  => __('Theme Settings'),
            'menu_slug'   => 'theme-general-settings',
            'capability'  => 'edit_posts',
            'redirect'    => true,
        ));      
      
        $child = acf_add_options_page(array(
            'page_title'  => __('Footer Settings'),
            'menu_title'  => __('Footer Section'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }}