<?php
/**
 * Description:    main Snacks Theme functions and definitions
 *
 * @package        snacks
 * @since          1.0.0
 * @author         Den Hnatiuk
 * @copyright      Copyright © 2023, Den Hnatiuk(@denhnatiuk)
 * @link           https://denyshnatiuk.github.io/snacks/
 * @license        https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
 */

if ( ! function_exists( 'snacks_setup' ) ) :


require get_template_directory() . '/inc/helpers.php';

add_action( 'after_setup_theme', 'snacks_setup' );
function snacks_setup()
{
    
    add_theme_support( 'wp-block-styles' );

    add_editor_style( './assets/css/editor-style.css' );

    /**
    * // automaticly enabled features
    * add_theme_support( 'post-thumbnails' );
    * add_theme_support( 'responsive-embeds' );
    * add_theme_support( 'editor-styles' );
    * add_theme_support( 'html5', array('style','script', ) );
    * add_theme_support( 'automatic-feed-links' );
    */

    // settings.typography.fontSizes
    // add_theme_support( ‘editor-font-sizes’, array() );   

    // settings.typography.lineHeight
    // add_theme_support( ‘custom-line-height’ ); 

    //  settings.layout
    // add_theme_support( ‘align-wide’ );
    
    // settings.color.palette
    add_theme_support( 'editor-color-palette', array() );
    
    // settings.color.gradients 
    // add_theme_support( 'editor-gradient-presets', array() );  
    
    //  settings.spacing
    // add_theme_support( ‘custom-spacing’ );
    
    //  settings.spacing.units
    // add_theme_support( ‘custom-units’, array() );

    remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
		remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
		remove_filter( 'render_block', 'wp_render_duotone_support', 10, 2 );
    // remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
    // remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
    // remove_filter('render_block', 'wp_render_duotone_support');
    // remove_filter('render_block', 'wp_restore_group_inner_container');
    // remove_filter('render_block', 'wp_render_layout_support_flag');

}

// add_action('init', function() {

//   // remove duotone support for Gutenberg blocks
//   remove_filter('render_block', 'wp_render_duotone_support');
// });

add_action( 'wp_enqueue_scripts', 'snacks_assets' );
function snacks_assets()
{

  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), esc_html( wp_get_theme()->get('Version') ) );

  $bootstrap_version = pb_get_package_version ( get_template_directory() . '/node_modules/bootstrap/package.json' );

  wp_enqueue_style( 'bootstrap.css', get_template_directory_uri().'/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), $bootstrap_version );
  
  wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array( 'jquery' ), $bootstrap_version , true );
  
  wp_enqueue_style( 'bootstrap.icons', get_template_directory_uri().'/node_modules/bootstrap-icons/font/bootstrap-icons.min.css', array(), $bootstrap_version );

  wp_enqueue_style( 'fontawesome.icons', get_template_directory_uri().'/node_modules/font-awesome/css/font-awesome.min.css', array(), pb_get_package_version ( get_template_directory() . '/node_modules/font-awesome/package.json' ) );

  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), esc_html(wp_get_theme()->get('Version' ) ) . "." . filemtime(get_template_directory().'/assets/css/main.css' ) );

  wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), esc_html(wp_get_theme()->get('Version' ) ) . "." . filemtime(get_template_directory().'/assets/js/main.js' )  , true );

  wp_enqueue_script( 'scroll-to-top', get_template_directory_uri() . '/assets/js/scrolltotop.js', array( 'jquery' ), esc_html(wp_get_theme()->get('Version' ) ) . "." . filemtime(get_template_directory().'/assets/js/scrolltotop.js' )  , true );

  wp_enqueue_script( 'switch-dark', get_template_directory_uri() . '/assets/js/switchdark.js', array( 'jquery' ), esc_html(wp_get_theme()->get('Version' ) ) . "." . filemtime(get_template_directory().'/assets/js/switchdark.js' )  , true );

  // wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all' );

  // wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), 1.1, true );

  // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  //   wp_enqueue_script( 'comment-reply' );
  // }

  // Block assets
  // $styled_blocks = ['latest-comments'];
  // foreach ( $styled_blocks as $block_name ) {
  //   $args = array(
  //     'handle' => "myfirsttheme-$block_name",
  //     'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.css" ),
  //     $args['path'] = get_theme_file_path( "assets/css/blocks/$block_name.css" ),
  //   );
  //   wp_enqueue_block_style( "core/$block_name", $args );
  // }
}

add_action('after_setup_theme', 'remove_wp_render_duotone_support_and_global_styles', 10, 0);
function remove_wp_render_duotone_support_and_global_styles() {
  // remove SVG and global styles
  remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
  // remove wp_footer actions for global inline styles
  remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
  // remove render_block filters
  remove_filter('render_block', 'wp_render_duotone_support');
  remove_filter('render_block', 'wp_restore_group_inner_container');
  remove_filter('render_block', 'wp_render_layout_support_flag');
  }
  

endif;