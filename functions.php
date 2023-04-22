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
    // add_theme_support( ‘editor-color-palette’, array() );
    
    // settings.color.gradients 
    // add_theme_support( ‘editor-gradient-presets’, array() );  
    
    //  settings.spacing
    // add_theme_support( ‘custom-spacing’ );
    
    //  settings.spacing.units
    // add_theme_support( ‘custom-units’, array() );

}

add_action( 'wp_enqueue_scripts', 'snacks_assets' );
function snacks_assets()
{
    
  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1' );
    wp_enqueue_style( 'bootstrap.css', get_template_directory_uri().'/node_modules/bootstrap/dist/css/bootstrap.min.css', array(), '5.2' );
    wp_enqueue_script( 'bootstrap.js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array( 'jquery' ), 5.2, true );
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

require get_template_directory() . '/inc/block-patterns.php';

endif;